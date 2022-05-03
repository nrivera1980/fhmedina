<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use App\Models\Slider;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('estado', 1)->get();
        
        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        $eventos = Evento::where('estado', 1)->pluck('nombre', 'id');

        return view('admin.sliders.create', compact('eventos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image|nullable|max:2048',
            'estado' => 'required'
        ]);

        if($request->file('imagen')){

            $name = $request->file('imagen')->getClientOriginalName();

            $url = Storage::putFileAs('public/slider', $request->file('imagen'), $name);

            Slider::create([
                'imagen' => $url,
                'titulo' => $request->titulo,
                'mensaje' => $request->mensaje,
                'enlace' => $request->enlace,
                'estado' => $request->estado
            ]);
        }else{
            Slider::create($request->all());
        }

        return redirect()->route('admin.sliders.index')->with('info', 'El Slider se creó con éxito');
    }

    public function show($id)
    {
        //
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $urlpasado = $slider->imagen;

        $slider->update($request->all());
        
        if($request->file('imagen')){
            $name = $request->file('imagen')->getClientOriginalName();

            $url = Storage::putFileAs('public/slider', $request->file('imagen'), $name);

            if($urlpasado){
                Storage::delete($urlpasado);
            }

            $slider->update([
                'imagen' => $url
            ]);
        }

        return redirect()->route('admin.sliders.index')->with('info', 'El Slider se actualizó con éxito');
    }

    public function destroy(Slider $slider)
    {
        Storage::delete($slider->imagen);
        
        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('info', 'El Slider se eliminó con éxito');
    }
}

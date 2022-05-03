<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = "eventos";
    protected $fillable = ['nombre', 'slug', 'baner', 'fecha', 'hora', 'estado', 'mapa', 'entradas', 'detalle', 'created_at', 'updated_at'];
    protected $guarded = ['id'];
    public $timestamps = true;

    public function slider()
    {
        return $this->hasOne(Slider::class);
    }
}

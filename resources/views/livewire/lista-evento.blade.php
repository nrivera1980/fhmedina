<div class="d-inline">

    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
            <div class="col-span-3 grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-2">
                @if ($eventos->count())
                    <div class="col-span-3 text-red-700 text-2xl font-bold py-2">Eventos:</div>
                        @foreach ($eventos as $evento)
                            <div class="bg-gray-100">
                                <a href="#"><img src="{{ Storage::url($evento->baner) }}" class="w-full" title="{{$evento->nombre}}"></a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="col-span-3 text-red-700 text-2xl font-bold py-2">
                        No hay eventos registrados...
                    </div>
                @endif
            <div class="col-span-3 row-start-1 lg:col-start-4">
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-1 gap-2">
                    @if ($links->count())
                        @foreach ($links as $link)
                        <div class="bg-gray-100">
                            <a href="#"><img src="{{ Storage::url($link->baner) }}" class="w-full" title="{{$link->nombre}}"></a>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>



</div>

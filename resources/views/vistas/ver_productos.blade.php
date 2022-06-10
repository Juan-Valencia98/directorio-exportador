@extends('layouts.app')

@section('title', 'Productos Registrados')

@section('content')

    <div class="flex justify-center items-center">
        <div class="px-10 py-20 grid gap-10 lg:grid-cols-3 xl:grid-cols-4 sm:grid-cols-2 flex">
            @foreach ($productos as $producto)
                <div
                    class="max-w-xs rounded-md overflow-hidden shadow-lg hover:scale-105 transition duration-500 cursor-pointer">
                    <div>
                        <img src="{{ $producto->binario_producto }}" alt="" />
                    </div>
                    <div class="py-4 px-4 bg-white">
                        <h3 class="text-md font-semibold text-gray-600">{{ $producto->nombre_producto }}</h3>
                        <p class="mt-4 text-lg font-thin">{{ $producto->moneda_producto }}:
                            {{ $producto->precio_producto }}
                        </p>
                        <span
                            class="flex items-center justify-center mt-4 w-full bg-yellow-400 hover:bg-yellow-500 py-1 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                            <a href="cli-show-det-prod/{{ $producto->id_producto }}">
                                <button class="font-semibold text-gray-800">Más detalles</button>
                            </a>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

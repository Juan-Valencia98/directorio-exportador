@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'Empresas Registradas')
=======
@section('title', 'Productos Registrados')
>>>>>>> 18e5c8cd67402b8c243097f585f2190f25ac3002

@section('content')


<<<<<<< HEAD
<!-- component -->
<!-- This is an example component -->
<div class="container mx-auto my-5">
    @foreach ($empresas as $empresa)

    <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2">

        <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
            <div class="absolute inset-0 w-full h-full object-fill object-center bg-blue-400 bg-opacity-30 bg-cover bg-bottom" style="background-image: url( https://images.unsplash.com/photo-1525302220185-c387a117886e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80 ); background-blend-mode: multiply;">
                <img src="{{ $empresa->logo_empresa }}" alt="">
            </div>
            <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">{{ $empresa->titulo_empresa }}</h3>
                <h4 class="w-full text-xl text-gray-100 leading-tight">Bienvenido a</h4>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
        </div>

        <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
            <div class="p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                <h4 class="hidden md:block text-xl text-gray-400">Bienvenido a</h4>
                <h3 class="hidden md:block font-bold text-2xl text-gray-700">{{ $empresa->titulo_empresa }}</h3>
                <p class="text-gray-600 text-justify">{{ $empresa->descripcion_empresa }}</p>
                <a class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900" href="cli-show-det-emp/{{ $empresa->id_empresa }}">
                    <span>Conocer más de {{ $empresa->titulo_empresa }}</span>
                    <span class="text-xs ml-1">&#x279c;</span>
                </a>
            </div>
        </div>

    </div>
    <br>

    @endforeach

=======
<div class="flex justify-center items-center">
    <div class="px-10 py-20 grid gap-10 lg:grid-cols-3 xl:grid-cols-4 sm:grid-cols-2 flex">
        @foreach ($empresas as $empresa)
        <div
            class="max-w-xs rounded-md overflow-hidden shadow-lg hover:scale-105 transition duration-500 cursor-pointer">
            <div>
                <img src="{{$empresa->logo_empresa}}"
                    alt="" />
            </div>
            <div class="py-4 px-4 bg-white">
                <h3 class="text-md font-semibold text-gray-600">{{$empresa->titulo_empresa}}</h3>
                <span
                    class="flex items-center justify-center mt-4 w-full bg-yellow-400 hover:bg-yellow-500 py-1 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                    <button class="font-semibold text-gray-800">Más detalles</button>
                </span>
            </div>
        </div>
        
        @endforeach
    </div>
>>>>>>> 18e5c8cd67402b8c243097f585f2190f25ac3002
</div>

@endsection

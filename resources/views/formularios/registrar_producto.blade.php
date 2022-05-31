@extends('layouts.app')

@section('title', 'Registrar Producto')

@section('content')

    <div class="flex bg-gray-200 items-center justify-center  mt-10 mb-10">
        <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
            <div class="flex justify-center py-4">
                <div class="py-1 px-1 flex justify-center">
                    <img src="https://senavex.gob.bo/wp-content/uploads/2021/01/banner-vertical.jpg" alt="">
                </div>
            </div>
            <div class="flex justify-center">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Registro de datos del producto</h1>
                </div>
            </div>
            <form method="POST" action="crearProducto" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">NOMBRE DEL
                            PRODUCTO</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                            type="text" placeholder="" name="nombre_producto" id="nombre_producto" />
                    </div>
                    <!--<div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">EMPRESA</label>
                                    <select
                                        class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                                        name="empresa_producto" id="empresa_producto">
                                        <option value="" selected></option>
                                    </select>
                                </div>-->
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <!--<div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">MARCA DEL
                                        PRODUCTO</label>
                                    <input
                                        class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                                        type="text" placeholder="" name="marca_producto" id="marca_producto" />
                                </div>-->
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">DESCRIPCION DEL
                            PRODUCTO</label>
                        <textarea class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                            type="textarea" placeholder="" name="descripcion_producto"
                            id="descripcion_producto"></textarea>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <!--<div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">RUBRO</label>
                                    <select
                                        class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                                        name="rubro_producto" id="rubro_producto">
                                        <option value="" selected></option>
                                    </select>
                                </div>-->
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">CATEGORIA</label>
                        <select
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                            name="categoria_producto" , id="categoria_producto">
                            <option value="" selected></option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->nombre_categoria }}">{{ $categoria->nombre_categoria }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!--<div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                                <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">NÚMERO DE
                                        PRODUCTOS</label>
                                    <input
                                        class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                                        type="text" placeholder="" name="numero_producto" id="numero_producto" />
                                </div>
                            </div>-->
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label for="imagen_producto"
                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">IMAGEN DEL
                        PRODUCTO</label>
                    <input
                        class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                        type="file" placeholder="" name="imagen_producto" id="imagen_producto" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-8 mt-5 mx-7">
                    <!--<div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">UNIDAD DE
                                        MEDIDA</label>
                                    <select
                                        class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                                        name="medida_producto" id="medida_producto">
                                        <option value="" selected></option>
                                    </select>
                                </div>-->
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">MONEDA</label>
                        <select
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                            name="moneda_producto" id="moneda_producto">
                            <option value="" selected></option>
                            @foreach ($monedas as $moneda)
                                <option value="{{ $moneda->nombre_moneda }}">{{ $moneda->descripcion_moneda }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">PRECIO
                            REFRENCIAL</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                            type="text" placeholder="" name="precio_producto" id="precio_producto" />
                    </div>
                </div>
                <!--<div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                                <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">CÓDIGO
                                        NANDINA</label>
                                    <input
                                        class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                                        type="text" placeholder="" name="codigo_producto" id="codigo_producto" />
                                </div>
                                <div class="grid grid-cols-1">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">FECHA DE
                                        LANZAMIENTO</label>
                                    <input
                                        class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                                        type="date" placeholder="" name="fecha_producto" id="fecha_producto" />
                                </div>
                            </div>-->
                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <button
                        class='w-auto bg-green-900 hover:bg-green-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'
                        type="submit">Registrar datos del producto</button>
                </div>
            </form>
        </div>
    </div>
    <script>

    </script>

@endsection

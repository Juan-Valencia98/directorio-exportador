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
            <form method="POST" action="crearProducto" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">CATEGORIA</label>
                        <select
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                            name="categoria_producto" id="categoria_producto" required autocomplete="off">
                            <option value="" selected></option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->nombre_categoria }}">{{ $categoria->nombre_categoria }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold UpperCase">NÚMERO
                            DE
                            PRODUCTOS</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent input-number"
                            type="text" placeholder="" name="numero_producto" id="numero_producto" required
                            autocomplete="off" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">RUBRO</label>
                        <select
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                            name="rubro_producto" id="rubro_producto" required autocomplete="off">
                            <option value="" selected></option>
                            @foreach ($rubros as $rubro)
                                <option value="{{ $rubro->nombre_rubro }}">{{ $rubro->nombre_rubro }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">NOMBRE DEL
                            PRODUCTO</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent UpperCase"
                            type="text" placeholder="" name="nombre_producto" id="nombre_producto" required
                            autocomplete="off" />
                    </div>
                </div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label for="imagen_producto"
                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">IMAGEN DEL
                        PRODUCTO</label>
                    <input
                        class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent input-image"
                        type="file" placeholder="" name="imagen_producto" id="imagen_producto" required
                        autocomplete="off" /><br />
                        <p class="text-image"> </p><br />
                        <img class="img-src" src="" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">UNIDAD DE
                            MEDIDA</label>
                        <select
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                            name="unidad_medida_producto" id="unidad_medida_producto" required autocomplete="off">
                            <option value="" selected></option>
                            @foreach ($medidas as $medida)
                                <option value="{{ $medida->nombre_medida }}">{{ $medida->nombre_medida }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">EMPRESA</label>
                        <select
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                            name="titulo_empresa" id="titulo_empresa" required autocomplete="off">
                            <option value="" selected></option>
                            @foreach ($empresas as $empresa)
                                <option value="{{ $empresa->titulo_empresa }}">{{ $empresa->titulo_empresa }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">DESCRIPCION DEL
                            PRODUCTO</label>
                        <textarea
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent UpperCase"
                            type="textarea" placeholder="" name="descripcion_producto" id="descripcion_producto" required autocomplete="off"></textarea>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">MONEDA</label>
                        <select
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent"
                            name="moneda_producto" id="moneda_producto" required autocomplete="off">
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
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent UpperCase input-number-dec"
                            type="text" placeholder="" name="precio_producto" id="precio_producto" required
                            autocomplete="off" />
                    </div>
                </div>
                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <button
                        class='w-auto bg-green-900 hover:bg-green-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'
                        type="submit">Registrar datos del producto</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".UpperCase").on("keypress", function() {
                $input = $(this);
                setTimeout(function() {
                    $input.val($input.val().toUpperCase());
                }, 0);
            })

            $('.input-number').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            })

            $('.input-number-dec').on('input', function() {
                this.value = this.value.replace(/[^0-9,.]/g, '');
            })

            var validExtensions = ".png, .gif, .jpeg, .jpg";
            var allowedWeight = 1024;

            $(".input-image").change(function() {
                $('.text-image').text('');
                $('.img-src').attr('src', '');
                if (validateExtension(this)) {
                    if (validateWeight(this)) {
                        viewImage(this);
                    }
                }
            });

            function validateExtension(data) {
                var rute = data.value;
                var extension = rute.substring(rute.lastIndexOf('.') + 1).toLowerCase();
                var extensionValida = validExtensions.indexOf(extension);
                if (extensionValida < 0) {
                    $('.text-image').text('La extensión no es válida Su fichero tiene de extensión: .' + extension);
                    return false;
                } else {
                    return true;
                }
            }

            function validateWeight(data) {

                if (data.files && data.files[0]) {
                    var fileWeight = data.files[0].size / 1024;
                    if (fileWeight > allowedWeight) {
                        $('.text-image').text('El peso maximo permitido del fichero es: ' + allowedWeight +
                            ' KBs Su fichero tiene: ' + fileWeight + ' KBs');
                        return false;
                    } else {
                        return true;
                    }
                }
            }

            function viewImage(data) {
                if (data.files && data.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.img-src').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(data.files[0]);
                }
            }
        });
    </script>
@endsection

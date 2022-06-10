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
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Registro Empresa</h1>
                </div>
            </div>
            <form method="POST" action="crearEmpresa" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label for="marca_logo_empresa"
                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">MARCA Y LOGO DE LA
                        EMPRESA</label>
                    <input
                        class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent input-image"
                        type="file" placeholder="" name="marca_logo_empresa" id="marca_logo_empresa" required
                        autocomplete="off" />
                    <p class="text-image"> </p><br />
                    <img class="img-src" src="" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-5 mx-7">
                   
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">NOMBRE DE LA
                            EMPRESA</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent UpperCase"
                            type="text" placeholder="" name="titulo_empresa" id="titulo_empresa" required
                            autocomplete="off" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">DESCRIPCIÓN DE LA
                            EMPRESA</label>
                        <textarea rows="8" 
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent UpperCase"
                            type="text" placeholder="" name="descripcion_empresa" id="descripcion_empresa" required autocomplete="off"></textarea>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">MISION DE LA
                            EMPRESA</label>
                        <textarea
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent UpperCase"
                            type="text" placeholder="" name="mision_empresa" id="mision_empresa" required autocomplete="off"></textarea>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">VISION DE LA
                            EMPRESA</label>
                        <textarea
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent UpperCase"
                            type="text" placeholder="" name="vision_empresa" id="vision_empresa" required autocomplete="off"></textarea>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                   
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">WHATSAPP DE LA
                            EMPRESA</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent UpperCase"
                            type="text" placeholder="" name="whatsapp_empresa" id="whatsapp_empresa" required
                            autocomplete="off" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">FACEBOOK DE LA
                            EMPRESA</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-green-600 mt-1 focus:outline-none focus:ring-2 focus:ring-green-800 focus:border-transparent UpperCase"
                            type="text" placeholder="" name="facebook_empresa" id="facebook_empresa" required
                            autocomplete="off" />
                    </div>
                </div>
                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <button
                        class='w-auto bg-green-900 hover:bg-green-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'
                        type="submit">Registrar Empresa</button>
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

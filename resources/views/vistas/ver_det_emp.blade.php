@extends('layouts.app')

@section('title', 'Empresas Registradas')

@section('content')

<!-- component -->
<style>
    .pt-\[17\%\] {
      padding-top: 17%;
    }
    .mt-\[-10\%\] {
      margin-top: -10%;
    }
    .pt-\[56\.25\%\] {
      padding-top: 56.25%;
    }
  </style>

  <main class="relative container mx-auto bg-white px-4">
    <div class="relative -mx-4 top-0 pt-[17%] overflow-hidden">
      <img class="absolute inset-0 object-cover object-top w-full h-full filter blur" src="{{ $empresa[0]->logo_empresa }}" alt="" />
    </div>

    <div class="mt-[-10%] w-1/2 mx-auto">
      <div class="relative pt-[56.25%] overflow-hidden rounded-2xl">
        <img class="w-full h-full absolute inset-0 object-cover" src="{{ $empresa[0]->logo_empresa }}" alt="" />
      </div>
    </div>

    <article class="max-w-prose mx-auto py-8">
      <h1 class="text-2xl font-bold">{{ $empresa[0]->titulo_empresa }}</h1>
      <h2 class="mt-2 text-sm text-gray-500">Admin, 28 November 2021</h2>

      <p class="mt-6 text-justify">{{ $empresa[0]->descripcion_empresa }}</p>
      <br>
      <h1 class="text-2xl font-bold">MISIÓN</h1>

      <p class="mt-6 text-justify">{{ $empresa[0]->mision_empresa }}</p>
      <br>
      <h1 class="text-2xl font-bold">VISIÓN</h1>

      <p class="mt-6 text-justify">{{ $empresa[0]->vision_empresa }}</p>
    </article>
  </main>

@endsection

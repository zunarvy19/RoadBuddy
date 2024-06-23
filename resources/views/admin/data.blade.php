@extends('layouts.sidebaradmin')

@section('main')
<section class="w-full">
  <div id="mainbar" class="fixed left-0 top-0 pt-16 w-full md:pl-64">
    <div class="px-4 md:px-8">
      <h1 class="text-start capitalize text-3xl py-5">Data BBM</h1>
      <hr class="w-full border border-gray-200">
    </div>

    <div class="mt-14 flex justify-center">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        {{-- pertamina --}}
        <div> 
          <a href="/admin/pertamina" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pertamina</h5>
          </a>
        </div>

        {{-- Shell --}}
        <div> 
          <a href="/admin/shell" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Shell</h5>
            
          </a>
        </div>

        {{-- Vivo --}}
        <div> 
          <a href="/admin/vivo" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Vivo</h5>
            
          </a>
        </div>

        {{-- vivo --}}
        <div> 
          <a href="/admin/bp" class="block max-w-SM p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BP</h5>
            
          </a>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection

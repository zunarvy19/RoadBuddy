@extends('layouts.sidebaradmin')

@section('main')
<section class="w-full">
  <div id="mainbar" class="fixed left-0 top-0 pt-16 w-full md:pl-64">
    <div class="px-4 md:px-8">
      <h1 class="text-start capitalize text-3xl py-5">Selamat Datang, {{Auth::user()->name}}</h1>
      <hr class="w-full border border-gray-200">
    </div>


    </div>    
  </div>
</section>
@endsection
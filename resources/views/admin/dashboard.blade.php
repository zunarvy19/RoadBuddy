@extends('layouts.sidebaradmin')

@section('main')
<section class="w-full">
  <div id="mainbar" class="fixed left-0 top-0 pt-16 w-full md:pl-64">
    <div class="px-4 md:px-8">
      <h1 class="text-start capitalize text-3xl py-5">Selamat Datang, {{Auth::user()->name}}</h1>
      <hr class="w-full border border-gray-200">
    </div>

    <div class="mt-20">

      <div class="flex justify-center flex-wrap flex-col md:flex-row gap-8">

        <div class="w-auto md:w-[20%] px-14 py-10 bg-secondary rounded-lg" id="card">
          <div class="font-bold text-white">
            <h3 class="text-2xl">Data Vendor: </h3>
            <h3 id="datenow" class="text-lg">{{$totalVendor}}</h3>
          </div>
        </div>

        <div class="w-auto md:w-[20%] p-10 bg-secondary rounded-lg" id="card">
          <div class="font-bold text-white">
            <h3 class="text-2xl">Data Jenis BBM: </h3>
            <h3 class="text-lg">{{$totalBbm}}</h3>
          </div>
        </div>

      </div>

    </div>
    </div>    
  </div>
</section>
@endsection
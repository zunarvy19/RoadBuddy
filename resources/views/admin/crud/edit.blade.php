@extends('layouts.sidebarAdmin')

@section('main')
<section class="w-full">
<div id="mainbar" class="fixed left-0 top-0 pt-16 w-full md:pl-64">
    <div class="px-4 md:px-8">
        <h1 class="text-start capitalize text-3xl py-5">Data Bahan Bakar</h1>
        <hr class="w-full border border-gray-200">

      <div class="mt-20">
  
          <div class="flex justify-between items-center ">
              <div class="flex flex-col">
                  <h1 class="text-3xl" >Data {{ old('name', $data->vendor ? $data->vendor->namaVendor : 'N/A') }}</h1>
                  <hr class="w-40 border-2 border-secondary my-4">
              </div>
              <div>
              <a href="/admin/data">
              <button type="button" class="text-white bg-red-600 
              focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Kembali
              </button>
              </a>
              </div>
          </div>

          
          <section class="bg-white border rounded-lg">
            <div class=" px-4 py-8 mx-auto">
                <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">Update Data BBM</h2>
                <form action="/admin/{{$data->id}}" method="POST">
                  @csrf
                  @method('PUT')
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                        <div class="sm:col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Vendor</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " value="{{ old('name', $data->vendor ? $data->vendor->namaVendor : 'N/A') }}" placeholder="Type product name" required="" @readonly(true)>
                        </div>
                        <div class="w-full">
                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis BBM</label>
                            <input type="text" name="jenis_bbm" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Nama BBM" required  value="{{old('jenis_bbm', $data->jenis_bbm)}}">
                        </div>
                        <div class="w-full">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                            <input type="number" name="harga_bbm" id="harga_bbm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                        </div>
                        
                    </div>
                    <div class="flex justify-end items-center space-x-4">
                        <button type="submit" class="text-white bg-primary hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Update
                        </button>
                    </div>
                </form>
            </div>
          </section>
        </div>
    </section>

    <script>
      document.addEventListener('DOMContentLoaded', (event) => {
          const numberInput = document.getElementById('harga_bbm');
  
          numberInput.addEventListener('input', (e) => {
              if (numberInput.value.length > 5) {
                  numberInput.value = numberInput.value.slice(0, 5);
              }
          });
      });
  </script>
@endsection
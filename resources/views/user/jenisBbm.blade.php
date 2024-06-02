@extends('layouts.navbar')

@section('main')


<section class="header">
<section class="bg-center w-full bg-[url('https://images.unsplash.com/photo-1604282742204-1e7bb6ffbd9f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">We invest in the world's potential</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
    </div>
</section>
</section> 

{{-- Card Bahan Bakar --}}
<div class="sm:w-[70%] flex justify-center flex-col mx-auto -mt-28 sm:-mt-48 mb-10 bg-white px-5 rounded-2xl shadow-md">
    <div class="inline">
        <p class="sm:text-5xl text-3xl text-center mt-14 mx-3 font-bold">Daftar Harga Bahan Bakar</p>
    </div>
    <div class="main flex justify-center">
        <div class="grid sm:grid-cols-2 grid-cols-1 gap-y-8 my-14">
    {{-- PERTAMINA SECTION --}}
    <div class="relative  overflow-x-auto shadow-md sm:rounded-lg mx-5">
        <table class="sm:w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <img src="/img/logo_pertamina.png" alt="" class="w-full sm:w-[46%] h-auto mx-auto items-center my-auto px-5 py-8">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                @php
                    $no = 1;
                @endphp
                <tr class="border-t-4 border-[#ED1B2F] py-8">
                    <th scope="col" class="px-6 py-3">
                        Vendor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis BBM
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga BBM
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pertamina as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->vendor ? $item->vendor->namaVendor : 'N/A' }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item->jenis_bbm }}
                    </td>
                    <td class="px-6 py-4">
                        Rp.{{ number_format($item->harga_bbm, 0) }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>

        {{-- VIVO SECTION --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-5">
            <table class="sm:w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <div class="border-b-4 py-5">
              <img src="/img/vivoLogo.png" alt="" class="w-36 sm:w-[120px]  h-auto mx-auto flex items-center justify-items-center px-5">
              </div>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <tr class="border-t-4 border-[#083F6B] py-8">
                            <th scope="col" class="px-6 py-3">
                                Vendor
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis BBM
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga BBM
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vivo as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->vendor ? $item->vendor->namaVendor : 'N/A' }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->jenis_bbm }}
                            </td>
                            <td class="px-6 py-4">
                                Rp.{{ number_format($item->harga_bbm, 0) }}
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
          </div>
      
      {{-- SHELL SECTION --}}
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-5">
        <table class="sm:w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <div class="border-b-4 py-5">
          <img src="/img/ShellLogo.png" alt="" class="w-36 sm:w-[130px]  h-auto mx-auto flex items-center justify-items-center px-5">
          </div>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <tr class="border-t-4 border-[#FFD500] py-8">
                        <th scope="col" class="px-6 py-3">
                            Vendor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis BBM
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga BBM
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shell as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->vendor ? $item->vendor->namaVendor : 'N/A' }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->jenis_bbm }}
                        </td>
                        <td class="px-6 py-4">
                            Rp.{{ number_format($item->harga_bbm, 0) }}
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
      </div>
      
    
      
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-5">
        <table class="sm:w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <div class="border-b-4 py-5">
          <img src="/img/bpLogo.png" alt="" class="w-36 sm:w-[122px]  h-auto mx-auto flex items-center justify-items-center px-5">
          </div>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <tr class="border-t-4 border-[#009900] py-8">
                        <th scope="col" class="px-6 py-3">
                            Vendor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis BBM
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga BBM
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bp as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->vendor ? $item->vendor->namaVendor : 'N/A' }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->jenis_bbm }}
                        </td>
                        <td class="px-6 py-4">
                            Rp.{{ number_format($item->harga_bbm, 0) }}
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
      </div>
      
      
        </div>
      </div>
</div>
<div class=" h-auto bg-cover relative items-center bg-fuelPrice w-full" style="background-image: url('/')">

</div>






@endsection
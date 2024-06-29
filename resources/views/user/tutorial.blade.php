@extends('layouts.navbar')

@section('main')
<section class="header">
  <section class="bg-center w-full bg-[url('https://images.unsplash.com/photo-1678903434882-d8bc7782b953?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-gray-500 bg-blend-multiply">
      <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
          <h1 class="mb-4 text-4xl font-extrabold tracking-wide leading-none text-white md:text-5xl lg:text-6xl uppercase">Tutorial</h1>
          <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Cara menggunakan fitur menghitung konsumsi BBM</p>
      </div>
  </section>
  </section> 

  <div class="sm:w-[70%] fle h-screen justify-center flex-col mx-auto -mt-28 sm:-mt-48 mb-10 bg-white px-5 rounded-2xl shadow-md">
    <div class="inline">
      <p class="sm:text-5xl text-3xl text-start pt-10 font-bold">Cara Pemakaian</p>
      <hr class="border-4 border-secondary my-4 w-[20%]  ">
    </div>

    <div class="md:text-xl tracking-normal leading-relaxed ml-10 text-lg">
      <ol class="list-decimal">
        <li class="mb-4">Catat Kilometer awal Anda</li>
        <li class="mb-4">Catat Kilometer akhir Anda</li>
        <li class="mb-4">Catat jumlah pengisian BBM pertama kali Anda</li>
        <li class="mb-4">Catat jumlah pengisian BBM pertama terakhir Anda</li>
        <li class="mb-4">Buka Menu Kalkulator</li>
        <li class="mb-4">
            Silahkan isi kolom nama kendaraan, tanggal perjalanan, kilometer awal, kilometer akhir, pengisian BBM awal, pengisian BBM Akhir, lalu pilih jenis BBM yang Anda gunakan. Jika sudah silahkan pencet tombol Hitung.
        </li>
        <li class="mb-4">Jika ingin menyimpan hasil perhitungan Anda, silahkan register lalu login. Setelah login akan muncul button Simpan untuk menyimpan perjalanan Anda</li>
      </ol>
    </div>
  </div>
@endsection
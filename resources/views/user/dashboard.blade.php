@extends('layouts.navbar')

@section('main')
<section class="bg-center w-screen h-screen bg-[url('https://images.unsplash.com/photo-1625112032707-323ceac9f0ae?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]
bg-gray-500 bg-blend-multiply flex justify-center items-center bg-cover">
  <div class="max-w-screen-xl text-center">
      <h1 class="text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-8xl text-center">Road Buddy</h1>
      <p class="text-lg font-normal text-gray-300 lg:text-2xl mt-4 text-center">Teman Perjalanan Anda!</p>
      <button class="text-primary mt-4 bg-white py-3 px-5 rounded-xl font-semibold border-primary text-lg active:bg-primary active:text-white 
      active:duration-100 active:border active:border-white"><a href="#section2">Get Started</a></button>
  </div>
</section>

<div class="mt-20 mb-2 flex sm:w-[80%] mx-auto">
  <div class="container flex flex-col md:flex-row-reverse ">
    <div class="text space-y-6 basis-1/2">
      <p class="text-4xl md:text-6xl font-bold text-center md:text-start" id="section2">Tentang</p>
      <hr class="border-4 border-secondary w-28 mx-auto md:mx-0">
      <p class="text-md md:text-xl text-center md:text-start leading-loose md:leading-loose text-[#626f80]">
        RoadBuddy adalah aplikasi berbasis web untuk menghitung konsumsi bahan bakar kendaraan bermotor roda dua. Dirancang untuk
        memudahkan Anda ketika ingin menghitung konsumsi Bahan Bakar Minyak kendaraan Anda. Dirancang dengan desain yang simple dan mudah dipahami, dilengkapi dengan harga BBM yang sedang berlaku dan
        dapat menghitung biaya yang Anda keluarkan untuk mengisi BBM.
      </p>
    </div>
    <div class="md:basis-1/2 flex justify-center md:justify-start">
      <img src="/img/scooter.jpg" alt="" class="w-[80%] mx-auto md:mx-0">
    </div>
  </div>
</div>


<svg width="100%" height="0%" id="svg" viewBox="0 0 1440 330" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,400 L 0,150 C 146.67857142857144,135.60714285714286 293.3571428571429,121.21428571428572 412,130 C 530.6428571428571,138.78571428571428 621.25,170.75000000000003 714,187 C 806.75,203.24999999999997 901.6428571428571,203.78571428571428 1023,195 C 1144.357142857143,186.21428571428572 1292.1785714285716,168.10714285714286 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#D16902" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path></svg>
<div class="w-screen h-auto bg-[#D16902]">

  <div class="space-y-8">
    <h1 class="text-center text-white text-4xl md:text-6xl font-bold" id="fitur">Fitur</h1>
    <hr class="border-4 border-white w-28 mx-auto">
  </div>

<div class="flex justify-center">

  <div class="flex justify-center items-center flex-col md:flex-row md:gap-x-20 "> {{-- container --}}

    <div class="flex flex-col mt-10 justify-center items-center w-[70%] bg-white py-20 px-6 rounded-xl"> {{-- card 1 --}}
        <img src="/img/road.png" alt="" class="w-[60%] md:w-[55%] text-primary h-[70#]">
        <h1 class="text-center mb-4 text-2xl md:text-4xl text-primary font-bold tracking-wide mt-5">Tracking</h1>
        <p class="text-center text-md font-medium  md:text-xl text-[#504f4f] md:leading-loose">Menghitung total perjalanan Anda</p>
    </div>

    <div class="flex flex-col mt-10 justify-center items-center w-[70%] bg-white py-20 px-6 rounded-xl"> {{-- card 1 --}}
        <img src="/img/fuel.png" alt="" class="w-[60%] md:w-[36%] text-primary">
        <h1 class="text-center mb-4 text-2xl md:text-4xl text-primary font-bold tracking-wide mt-5">Fuel</h1>
        <p class="text-center text-md font-medium  md:text-xl text-[#504f4f] md:leading-loose">Menghitung konsumsi BBM <br> Anda</p>
    </div>

    <div class="flex flex-col mt-10 justify-center items-center w-[70%] bg-white py-20 px-6 rounded-xl"> {{-- card 1 --}}
        <img src="/img/price.png" alt="" class="w-[60%] md:w-[36%] text-primary">
        <h1 class="text-center mb-4 text-2xl md:text-4xl text-primary font-bold tracking-wide mt-5">Price</h1>
        <p class="text-center text-md font-medium  md:text-xl text-[#504f4f] md:leading-loose">Informasi harga BBM <br> terkini</p>
    </div>

  </div>
</div>

</div>
<svg width="100%" height="100%" id="svg" viewBox="0 0 1440 330" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,400 L 0,150 C 119.07142857142858,126.46428571428572 238.14285714285717,102.92857142857143 356,105 C 473.85714285714283,107.07142857142857 590.4999999999999,134.75 713,153 C 835.5000000000001,171.25 963.8571428571429,180.07142857142858 1086,178 C 1208.142857142857,175.92857142857142 1324.0714285714284,162.96428571428572 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#D16902" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)"></path></svg>


<div class="bg-white w-screen min-h-screen h-auto px-5 ">
  <div class="flex flex-col md:flex-row justify-center items-center">
    <div class="md:basis-1/2 flex justify-center md:justify-star">
      <img src="/img/Questions-pana.png" alt="" class="w-[70%] mx-auto md:mx-0">
    </div>
    <div class=" basis-1/2">
      <h1 class="text-center  md:text-start text-4xl text-primary font-bold" >Frequently Asked Questions</h1>
      <hr class="border-4 border-secondary w-48 mx-auto md:mx-0 my-5">

      
<div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">

  <h2 id="accordion-color-heading-1">
    <button type="button" class="flex items-center justify-between w-full p-5 bg-primary font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl  gap-3" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
      <span class="text-white">Apa itu RoadBuddy?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
    <div class="p-5 border border-b-0" >
      <p class="mb-2 text-gray-500 dark:text-gray-400">RoadBuddy adalah aplikasi berbasis web yang berfungsi untuk menghitung konsumsi bahan bakar kendaraan bermotor roda dua, dilengkapi dengan 
        harga BBM terkini.
      </p>
    </div>
  </div>

  <h2 id="accordion-color-heading-2">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right bg-primary text-gray-500 border border-b-1 border-gray-200  gap-3" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
      <span class="text-white">Bagaimana cara menggunakan RoadBuddy?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">Silahkan cek halaman Tutorial untuk informasi lebih lanjut pada tautan berikut. <span class="text-blue-600"><a href="/user/tutorial">Halaman Tutorial</a></span></p>
      
    </div>
  </div>

  <h2 id="accordion-color-heading-3">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right bg-primary gap-3 rounded-b-xl" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
      <span class="text-white text-startbavvb">Dimana saya bisa menyimpan dan melihat hasil perhitungan saya?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-white border-b-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">Silahkan login terlebih dahulu agar bisa menyimpan hasil perhitungan. Hasil perhitungan bisa diakses di menu saya di tautan berikut. <span class="text-blue-600"><a href="/user/history">History</a></span></p>
    </div>
  </div>
</div>

    </div>
    </div>
  </div>
</div>


@endsection
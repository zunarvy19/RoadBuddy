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
      <hr class="border-4 border-[#164863] w-28 mx-auto md:mx-0">
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


<svg width="100%" height="100%" id="svg" viewBox="0 0 1440 300" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,400 L 0,150 C 124.53333333333336,168.13333333333333 249.06666666666672,186.26666666666668 429,182 C 608.9333333333333,177.73333333333332 844.2666666666667,151.06666666666666 1022,142 C 1199.7333333333333,132.93333333333334 1319.8666666666668,141.46666666666667 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#27374D" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path></svg>
<div class="w-screen h-auto bg-[#27374D]">

  <div class="space-y-6">
    <h1 class="text-center text-white text-4xl md:text-5xl font-bold">Fitur Kami</h1>
    <hr class="border-4 border-white w-28 mx-auto">
  </div>

<div class="flex justify-center">
  <div class="flex justify-center items-center flex-col md:flex-row md:gap-x-36"> {{-- container --}}

    <div class="flex flex-col mt-10 justify-center items-center w-[70%]"> {{-- card 1 --}}
      <img src="/img/RoadHorizon.png" alt="" class="w-[60%] md:w-[36%]">
      <h1 class="text-center mb-4 text-xl md:text-3xl text-white font-bold tracking-wide">Tracking</h1>
      <p class="text-center text-md  md:text-xl text-[#d4d4d4] md:leading-loose">Menghitung total perjalanan Anda</p>
    </div>

    <div class="flex flex-col mt-10 justify-center items-center w-[70%]"> {{-- card 1 --}}
      <img src="/img/GasPump.png" alt="" class="w-[60%] md:w-[36%]">
      <h1 class="text-center mb-4 text-xl md:text-3xl text-white font-bold tracking-wide">Tracking</h1>
      <p class="text-center text-md  md:text-xl text-[#d4d4d4] md:leading-loose">Menghitung total pengisian BBM</p>
    </div>

    <div class="flex flex-col mt-10 justify-center items-center w-[70%]"> {{-- card 1 --}}
      <img src="/img/Vector.png" alt="" class="w-[60%] md:w-[36%]">
      <h1 class="text-center mb-4 text-xl md:text-3xl text-white font-bold tracking-wide">Gas Price</h1>
      <p class="text-center text-md md:text-xl text-[#d4d4d4] md:leading-loose">Dilengkapi dengan Harga <br> BBM</p>
    </div>



  </div>
</div>

</div>
<svg width="100%" height="100%" id="svg" viewBox="0 0 1440 300" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,400 L 0,150 C 163.06666666666666,177.06666666666666 326.1333333333333,204.13333333333335 494,198 C 661.8666666666667,191.86666666666665 834.5333333333333,152.5333333333333 993,139 C 1151.4666666666667,125.46666666666668 1295.7333333333333,137.73333333333335 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#27374d" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)"></path></svg>

<div class="w-screen h-screen bg-white">

</div>
@endsection
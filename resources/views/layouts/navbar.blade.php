<!doctype html>
<html class="scroll-smooth">
<head>
  <title>{{$title}}</title>
  <meta charset="utf-8">
  {{-- <title>{{$title}}</title> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="/img/frame2.png"/>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  


  <nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-lg">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{route('user.dashboard')}}" class="flex items-center lg:space-x-1 rtl:space-x-reverse">
        <img src="/img/simple.png" class="h-8"/>
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">RoadBuddy</span>
    </a>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      @auth
      <button type="button" class="flex text-sm md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 block">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
        </svg>
        
      </button>
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900 dark:text-white">{{Auth::user()->name}}</span>
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{Auth::user()->email}}</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <a href="/user/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white {{($title === 'Home') ?  'bg-gray-100 text-gray-700' : 'text-gray-700'}} ">Akun Saya</a>
          </li>
        </ul>
      </div>
      @else
      <a href="{{Route('signin')}}" type="button" class="flex text-white bg-black hover:opacity-60 duration-100 focus:ring-4 focus:ring-white font-medium rounded-lg text-sm px-5 py-2.5" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        Login
        <span class="sr-only">Open user menu</span>
      </a>
      @endauth
        <!-- Dropdown menu -->
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
      <ul class="flex flex-col font-medium md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="{{route('user.dashboard')}}" class="text-lg block py-2 px-3 {{($title === 'Dashboard') ? 'bg-secondary rounded-md text-white' : 'text-primary'}} relative transition-transform transform hover:-translate-y-1 duration-200 ease-in-out" aria-current="page">Dashboard</a>
        </li>
        <li>
          <a href="{{route('user.jenis_bbm.show')}}" class="text-lg block py-2 px-3 {{($title === 'Jenis BBM') ? 'bg-secondary rounded-md text-white' : 'text-primary'}} relative transition-transform transform hover:-translate-y-1 duration-200 ease-in-out">Harga BBM</a>
        </li>
        <li>
          <a href="{{route('user.home.index')}}" class="text-lg block py-2 px-3 {{($title === 'Tutorial') ? 'bg-secondary rounded-md text-white' : 'text-primary'}} relative transition-transform transform hover:-translate-y-1 duration-200 ease-in-out" >Tutorial</a>
        </li>
        <li>
          <a href="/user/calculate" class= "text-lg block py-2 px-3 text-gray-900 {{($title === 'Hitung BBM') ? 'bg-secondary rounded-md text-white' : 'text-primary'}} relative transition-transform transform hover:-translate-y-1 duration-200 ease-in-out">Kalkulator</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('main')  


    <footer class="bg-primary rounded-lg shadow">
      <div class="w-full max-w-screen-xl mx-auto md:py-6">
          <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-4 mx-auto" />
          <span class="block text-sm text-white sm:text-center text-center">© 2024 <a href="/" class="hover:underline">RoadBuddy</a>. All Rights Reserved.</span>
      </div>
  </footer>
  
  
</body>
</html>
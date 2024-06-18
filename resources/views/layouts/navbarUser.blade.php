<!doctype html>
<html class="scroll-smooth">
<head>
  <title> {{$title}}</title>
  <meta charset="utf-8">
  {{-- <title>{{$title}}</title> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="/img/frame2.png"/>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>



<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
        </button>
      <a href="https://flowbite.com" class="flex ms-2 md:me-24">
        <img src="/img/simple.png" class="h-8 me-3" alt="Roadbuddy Logo" />
        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">RoadBuddy</span>
      </a>
      </div>
      <div class="flex items-center">
        <div class="flex items-center ms-3">
            <div>
            <button type="button" class="flex focus:underline-offset-1 p-2" aria-expanded="false" data-dropdown-toggle="dropdown-user">
            <span class="sr-only">Open user menu</span>
              <span class="font-semibold">{{Auth::user()->name}} </span>
            </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
            <div class="px-4 py-3" role="none">
              <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  {{Auth::user()->name}}
              </p>
              <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  {{Auth::user()->email}}
              </p>
            </div>
            </div>
        </div>
      </div>
  </div>
</div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">

        <li>
            <a href="{{Route("profile.edit")}}" class="flex items-center p-2 text-gray-900 rounded-lg {{($title === 'Profile') ? 'bg-secondary text-gray-900 font-semibold' : 'bg-white' }}">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 {{($title === 'Profile') ? 'text-gray-900 font-semibold' : ' text-gray-500' }}">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
              </svg>
                          
              <span class="ms-3">Profile</span>
            </a>
        </li>

        <li>
            <a href="/user/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg {{($title === 'Home') ? 'bg-secondary text-gray-900 font-semibold' : 'bg-white' }}">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 {{($title === 'Home') ? 'text-gray-900 font-semibold' : ' text-gray-500' }}">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
              </svg>              
              <span class="ms-3">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="/user/history" class="flex items-center p-2 text-gray-900 rounded-lg {{($title === 'History') ? 'text-gray-900 bg-secondary' : ' text-gray-500' }}"">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 {{($title === 'History') ? 'text-gray-900 font-semibold' : ' text-gray-500' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">History</span>
            </a>
        </li>

        <li>
          <form method="POST" action="{{ route('logout') }}" class="flex items-center">
            @csrf
            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center -ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                </svg>
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
        
        </li>

      </ul>
  </div>
</aside>


<div class="">
  @yield('userMain')  
</div>
</body>
</html>
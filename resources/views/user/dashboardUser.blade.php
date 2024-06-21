@extends('layouts.navbarUser')

@section('userMain')
<section class="w-full">
  <div id="mainbar" class="fixed left-0 top-0 pt-16 w-full md:pl-64">

    <div class="p-5">
      <div>
        <h1 class="text-start capitalize text-4xl">Selamat datang, {{ Auth::user()->name }}!</h1>
        <hr class="w-screen border border-gray-200 my-5">
      </div>
  
      <div class="mt-20">

        <div class="flex justify-center flex-wrap flex-col md:flex-row gap-8">

          <div class="w-auto md:w-[20%] px-14 py-10 bg-secondary rounded-lg" id="card">
            <div class="font-bold text-white">
              <h3 class="text-2xl">Hari ini: </h3>
              <h3 id="datenow" class="text-lg"></h3>
            </div>
          </div>

          <div class="w-auto md:w-[20%] p-10 bg-secondary rounded-lg" id="card">
            <div class="font-bold text-white">
              <h3 class="text-2xl">Jumlah Data Anda: </h3>
              <h3 class="text-lg">{{$totalData}}</h3>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<script>
  function currentTime() {
    var date = new Date(); // creating object of Date class
    var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    hour = updateTime(hour);
    min = updateTime(min);
    sec = updateTime(sec);

    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

    var curWeekDay = days[date.getDay()]; // get day
    var curDay = date.getDate(); // get date
    var curMonth = months[date.getMonth()]; // get month
    var curYear = date.getFullYear(); // get year
    var fullDate = curWeekDay + ", " + curDay + " " + curMonth + " " + curYear; // get full date
    document.getElementById("datenow").innerHTML = fullDate;

    var t = setTimeout(function() {
        currentTime()
    }, 1000); // setting timer
  }

  function updateTime(k) {
    if (k < 10) {
        return "0" + k;
    } else {
        return k;
    }
  }

  currentTime(); // calling currentTime() function to initiate the process
</script>
@endsection

@extends('layouts.navbar')

@section('main')
<section class="header">
    <section class="bg-center w-full bg-[url('https://images.unsplash.com/photo-1644246905181-c3753e9a82bd?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-gray-500 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-wide leading-none text-white md:text-5xl lg:text-6xl uppercase">Kalkulator</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Cara menggunakan fitur menghitung konsumsi BBM</p>
        </div>
    </section>
    </section> 

    <div class="sm:w-[70%] fle h-screen justify-center flex-col mx-auto -mt-28 sm:-mt-48 mb-10 bg-white px-5 rounded-2xl shadow-md">
        <div class="">
        <p class="sm:text-5xl text-3xl pt-10 font-bold text-start">Kalkulator</p>
        <hr class="border-4 border-secondary my-4 w-[15%] ">
        </div>
        <div class="form">
            <form method="POST" action="{{route('calculate.store')}}">
                @csrf
                <!-- component -->
                <div class="shadow-md px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                    {{-- Kilometer start --}}
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                                Kilometer awal
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" name="kilometer_awal" type="number" placeholder="Masukkan kilometer awal" required>
                            <p class="text-red text-xs italic">Please fill out this field.</p>
                        </div>
            
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                                Kilometer Akhir
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" name="kilometer_akhir" type="number" placeholder="Masukkan kilometer akhir" required>
                        </div>
                    </div>

                                
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                                Pengisian BBM Awal (Liter)
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="bbm-awal" name="bbm_awal" type="number" placeholder="Masukkan pengisian BBM awal" required>
                            <p class="text-red text-xs italic">Please fill out this field.</p>
                        </div>
            
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                                Pengisian BBM Akhir (Liter)
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="bbm-akhir" name="bbm_akhir" type="number" placeholder="Masukkan pengisian BBM akhir" required>
                        </div>
                    </div>
            
                    <div class="-mx- md:flex mb-6">
                        <div class="md:w-1/2 pr-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 w-full" for="grid-state">
                                Jenis BBM
                            </label>
                            <div class="relative">
                                <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="jenis-bbm" aria-placeholder="ASDAS" required> 
                                    @foreach ($dataBBM as $item)
                                    <option value="{{$item->id}}" data-harga="{{ $item->harga_bbm }}">{{ $item->jenis_bbm }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="md:w-1/2 pl-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 w-full" for="grid-state">
                                Harga BBM
                            </label>
                            <div class="relative">
                                <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="harga-bbm" disabled>
                                    @foreach ($dataBBM as $item)
                                    <option value="{{$item->id}}">Rp. {{ number_format($item->harga_bbm, 0) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                                Total Jarak Tempuh Anda
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="bbm-awal" name="bbm_awal" type="number" placeholder="Masukkan pengisian BBM awal" required>
                            <p class="text-red text-xs italic">Please fill out this field.</p>
                        </div>
            
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                                Total Pengisian BBM Anda
                            </label>
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="bbm-akhir" name="bbm_akhir" type="number" placeholder="Masukkan pengisian BBM akhir" required>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const jenisBBMSelect = document.getElementById('jenis-bbm');
        const hargaBBMSelect = document.getElementById('harga-bbm');
    
        jenisBBMSelect.addEventListener('change', function () {
            const selectedOption = jenisBBMSelect.options[jenisBBMSelect.selectedIndex];
            const selectedHarga = selectedOption.getAttribute('data-harga');
    
            // Clear the hargaBBMSelect options
            hargaBBMSelect.innerHTML = '';
    
            // Add the selected harga as the only option
            const newOption = document.createElement('option');
            newOption.value = selectedOption.value;
            newOption.text = `Rp. ${new Intl.NumberFormat().format(selectedHarga)}`;
            hargaBBMSelect.appendChild(newOption);
        });
    });
    </script>
@endsection
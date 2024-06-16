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
        <form method="POST" action="{{ route('calculate.store') }}">
            @csrf
            <div class="shadow-md px-8 pt-6 pb-8 mb-4 flex flex-col my-2 md:flex md:flex-col">

                <div class="-mx-3 md:flex md:flex-row-reverse mb-6 md:mb-0">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="tanggal">
                            Tanggal Anda
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="tanggal" name="tanggal" type="date" required>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="kendaraan">
                            Nama Kendaraan
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="kendaraan" name="kendaraan" type="text" placeholder="Masukkan Nama Kendaraan Anda" required>
                    </div>

                </div>

                <div class="-mx-3 md:flex my-6 md">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="kilometer_awal">
                            Kilometer awal
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="kilometer_awal" name="kilometer_awal" type="number" placeholder="Masukkan kilometer awal" required>
                    </div>

                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="kilometer_akhir">
                            Kilometer Akhir
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="kilometer_akhir" name="kilometer_akhir" type="number" placeholder="Masukkan kilometer akhir" required>
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="bbm_awal">
                            Pengisian BBM Awal (Liter)
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" step="0.2" id="bbm_awal" name="bbm_awal" type="number" placeholder="Masukkan pengisian BBM awal" required>
                    </div>

                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="bbm_akhir">
                            Pengisian BBM Akhir (Liter)
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" step="0.2" id="bbm_akhir" name="bbm_akhir" type="number" placeholder="Masukkan pengisian BBM akhir" required>
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-1/2 md:pr-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 w-full" for="jenis_bbm">
                            Jenis BBM
                        </label>
                        <div class="relative mb-6">
                            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="jenis_bbm" name="jenis_bbm" required>
                                @foreach ($dataBBM as $item)
                                <option value="{{ $item->id }}" data-harga="{{ $item->harga_bbm }}">{{ $item->jenis_bbm }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="md:w-1/2 md:pl-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2 w-full" for="harga_bbm">
                            Harga BBM
                        </label>
                        <div class="relative">
                            <input class="appearance-none block w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="harga_bbm" name="harga_bbm" type="text" readonly>
                        </div>
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="total_jarak">
                            Total Jarak Tempuh Anda
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="total_jarak" name="total_jarak" type="number" readonly>
                    </div>

                    <div class="md:w-1/2 px-3 ">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="total_bbm">
                            Total Pengisian BBM Anda
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="total_bbm" name="total_bbm" type="number" readonly>
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="konsumsi_bbm">
                            Konsumsi Bahan Bakar (L/km)
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="konsumsi_bbm" name="konsumsi_bbm" type="number" readonly>
                    </div>

                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="total_biaya">
                            Total Biaya BBM
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="total_biaya" name="total_biaya" type="number" readonly>
                    </div>
                </div>

                <div class="flex justify-start items-center gap-x-2 flex-row-reverse">
                    @auth
                    <button  type="submit" class="bg-primary text-white py-2 px-5 rounded-md">Simpan</button>
                    @endauth
                    <a href="#" id="hitungButton" class="bg-secondary text-white py-2 px-5 rounded-md">Hitung</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    const jenisBBMSelect = document.getElementById('jenis_bbm');
    const hargaBBMInput = document.getElementById('harga_bbm');
    const kilometerAwalInput = document.getElementById('kilometer_awal');
    const kilometerAkhirInput = document.getElementById('kilometer_akhir');
    const bbmAwalInput = document.getElementById('bbm_awal');
    const bbmAkhirInput = document.getElementById('bbm_akhir');
    const totalJarakInput = document.getElementById('total_jarak');
    const totalBBMInput = document.getElementById('total_bbm');
    const konsumsiBBMInput = document.getElementById('konsumsi_bbm');
    const totalBiayaInput = document.getElementById('total_biaya');
    const hitungButton = document.getElementById('hitungButton');

    // Mengatur harga BBM berdasarkan pilihan jenis BBM
    jenisBBMSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const hargaBBM = selectedOption.getAttribute('data-harga');
        hargaBBMInput.value = hargaBBM;
    });

    // Menghitung konsumsi BBM dan biaya total
    function calculateResults() {
        const kilometerAwal = parseFloat(kilometerAwalInput.value) || 0;
        const kilometerAkhir = parseFloat(kilometerAkhirInput.value) || 0;
        const bbmAwal = parseFloat(bbmAwalInput.value) || 0;
        const bbmAkhir = parseFloat(bbmAkhirInput.value) || 0;
        const hargaBBM = parseFloat(hargaBBMInput.value) || 0;

        const totalJarak = kilometerAkhir - kilometerAwal;
        const totalBBM = bbmAwal + bbmAkhir;
        const konsumsiBBM = totalJarak / totalBBM;
        const totalBiaya = totalBBM * hargaBBM;

        totalJarakInput.value = totalJarak;
        totalBBMInput.value = totalBBM;
        konsumsiBBMInput.value = konsumsiBBM.toFixed(2);
        totalBiayaInput.value = totalBiaya.toFixed(2);
    }

    // Event listener untuk tombol hitung
    hitungButton.addEventListener('click', function(event) {
        event.preventDefault();
        calculateResults();
    });

    // Trigger change event to set initial value if needed
    jenisBBMSelect.dispatchEvent(new Event('change'));
});
</script>
@endsection

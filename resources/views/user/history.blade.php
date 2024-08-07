@extends('layouts.navbarUser')

@section('userMain')
<section class="w-full">
    <div id="mainbar" class="fixed left-0 top-0 pt-16 w-full md:pl-64">
        <div class="p-5">
            <div>
                <h1 class="text-start capitalize text-4xl">History {{Auth::user()->name}}</h1>
                <hr class="w-screen border border-gray-200 my-5">
            </div>
    
            <div class="mt-20">


                <div class="flex flex-col sm:flex-row justify-between items-center">
                    <div class="flex flex-col mb-4 sm:mb-0">
                        <h1 class="text-3xl">Data perjalanan</h1>
                        <hr class="w-40 border-2 border-secondary my-4">
                    </div>
                    <div class="flex flex-wrap justify-end gap-2 w-full sm:w-auto">
                        <a href="/user/calculate" class="flex-1 sm:flex-none">
                            <button type="button" class="w-full text-white bg-primary focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-2 py-1.5 sm:px-5 sm:py-2.5">
                                Buat Data
                            </button>
                        </a>
                        <a href="{{ URL::to('/user/history/print') }}" class="flex-1 sm:flex-none">
                            <button type="button" class="w-full text-white bg-primary focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-2 py-1.5 sm:px-5 sm:py-2.5 text-center inline-flex items-center justify-center">
                                Download Rekap Data
                                <svg class="w-4 h-4 text-white ml-2 sm:w-5 sm:h-5 hidden md:inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 17v-5h1.5a1.5 1.5 0 1 1 0 3H5m12 2v-5h2m-2 3h2M5 10V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1v6M5 19v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1M10 3v4a1 1 0 0 1-1 1H5m6 4v5h1.375A1.627 1.627 0 0 0 14 15.375v-1.75A1.627 1.627 0 0 0 12.375 12H11Z"/>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
                
                
                @php
                    $no = 1;
                @endphp

<div class="overflow-x-auto">
    <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-1">No. </th>
                <th scope="col" class="px-4 py-1">Nama Kendaraan</th>
                <th scope="col" class="px-4 py-3">Brand Kendaraan</th>
                <th scope="col" class="px-4 py-1">Tanggal</th>
                <th scope="col" class="px-4 py-4">Jenis BBM</th>
                <th scope="col" class="px-4 py-3">Total Kilometer</th>
                <th scope="col" class="px-4 py-3">Total Pengisian</th>
                <th scope="col" class="px-4 py-3">Total Biaya</th>
                <th scope="col" class="px-4 py-3">Konsumsi BBM</th>
                <th scope="col" class="px-4 py-3">
                    <span class="sr-only">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($calculate as $data)
            <tr class="border-b dark:border-gray-700">
                <th scope="row" class="px-4 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$no++}}</th>
                <td class="px-4 py-3 capitalize">{{$data->namaKendaraan}}</td>
                <td class="px-4 py-3">{{ $data->brand->model ?? 'Model Brand Tidak Ditemukan' }}</td>
                <td class="px-4 py-3">{{$data->tanggal_formatted}}</td>
                <td class="px-4 py-3">{{ $data->bbm->jenis_bbm ?? 'Jenis BBM Tidak Ditemukan' }}</td>
                <td class="px-4 py-3">{{ rtrim(rtrim(number_format($data->total_jarak, 2, ',', '.'), '0'), ',') }} KM</td>
                <td class="px-4 py-3">{{$data->total_bbm}} Liter</td>
                <td class="px-4 py-3"> Rp. {{ number_format($data->total_biaya, 0) }}</td>
                <td class="px-4 py-3"> {{$data->konsumsi_bbm}} Km/L</td>
                <td class="px-4 py-3 flex items-center justify-start">
                    <ul class="text-sm flex flex-col md:flex-row items-center justify-center" aria-labelledby="apple-imac-27-dropdown-button">
                        <li>
                            <form id="delete-form-{{ $data->id }}" action="{{ route('user.history.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{ $data->id }})" class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 text-red-500 dark:hover:text-red-400">
                                    <svg class="w-4 h-4 mr-2" viewbox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M6.09922 0.300781C5.93212 0.30087 5.76835 0.347476 5.62625 0.435378C5.48414 0.523281 5.36931 0.649009 5.29462 0.798481L4.64302 2.10078H1.59922C1.36052 2.10078 1.13161 2.1956 0.962823 2.36439C0.79404 2.53317 0.699219 2.76209 0.699219 3.00078C0.699219 3.23948 0.79404 3.46839 0.962823 3.63718C1.13161 3.80596 1.36052 3.90078 1.59922 3.90078V12.9008C1.59922 13.3782 1.78886 13.836 2.12643 14.1736C2.46399 14.5111 2.92183 14.7008 3.39922 14.7008H10.5992C11.0766 14.7008 11.5344 14.5111 11.872 14.1736C12.2096 13.836 12.3992 13.3782 12.3992 12.9008V3.90078C12.6379 3.90078 12.8668 3.80596 13.0356 3.63718C13.2044 3.46839 13.2992 3.23948 13.2992 3.00078C13.2992 2.76209 13.2044 2.53317 13.0356 2.36439C12.8668 2.1956 12.6379 2.10078 12.3992 2.10078H9.35542L8.70382 0.798481C8.62913 0.649009 8.5143 0.523281 8.37219 0.435378C8.23009 0.347476 8.06631 0.30087 7.89922 0.300781H6.09922ZM4.29922 5.70078C4.29922 5.46209 4.39404 5.23317 4.56282 5.06439C4.73161 4.8956 4.96052 4.80078 5.19922 4.80078C5.43791 4.80078 5.66683 4.8956 5.83561 5.06439C6.0044 5.23317 6.09922 5.46209 6.09922 5.70078V11.1008C6.09922 11.3395 6.0044 11.5684 5.83561 11.7372C5.66683 11.906 5.43791 12.0008 5.19922 12.0008C4.96052 12.0008 4.73161 11.906 4.56282 11.7372C4.39404 11.5684 4.29922 11.3395 4.29922 11.1008V5.70078ZM8.79922 4.80078C8.56052 4.80078 8.33161 4.8956 8.16282 5.06439C7.99404 5.23317 7.89922 5.46209 7.89922 5.70078V11.1008C7.89922 11.3395 7.99404 11.5684 8.16282 11.7372C8.33161 11.906 8.56052 12.0008 8.79922 12.0008C9.03791 12.0008 9.26683 11.906 9.43561 11.7372C9.6044 11.5684 9.69922 11.3395 9.69922 11.1008V5.70078C9.69922 5.46209 9.6044 5.23317 9.43561 5.06439C9.26683 4.8956 9.03791 4.80078 8.79922 4.80078Z" />
                                    </svg>
                                    Delete
                                </button>
                            </form>                                
                        </li>
                    </ul>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9" class="px-4 py-3 text-center text-gray-500 dark:text-gray-400">
                    Tidak ada data yang bisa ditampilkan
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    
</div>

            </div>
        </div>
    </div>
</section>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah Anda yakin ingin menghapus data ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#1F2937',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`delete-form-${id}`).submit();
            }
        });
    }
</script>

@endsection 
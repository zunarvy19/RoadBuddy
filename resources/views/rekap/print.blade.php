<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekap Data Anda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        .transaksi-container {
            max-width: 100%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .transaksi-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .transaksi-details label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .transaksi-details span {
            display: block;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 4px; /* Adjust padding for better spacing */
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-size: 15px;
        }

        td{
            font-size: 12px;
        }

        .total-row {
            font-weight: bold;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            .transaksi-container {
                box-shadow: none;
                border: none;
            }

            .transaksi-details label {
                display: inline-block;
                width: 120px;
            }
        }
    </style>

</head>

<body>
    <div class="transaksi-container">
        <div class="transaksi-header">
            <h2>Rekap Data Anda</h2>
        </div>
        <div class="transaksi-details">
            <label>Nama Anda:</label> <span>{{Auth::user()->name}}</span>
            <label>E-mail Anda:</label> <span>{{Auth::user()->email}}</span>
            <table style="width: 100%; margin-bottom: 30px">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kendaraan</th>
                        <th>Brand Kendaraan</th>
                        <th>Tanggal</th>
                        <th>Jenis BBM</th>
                        <th>Total Kilometer</th>
                        <th>Total Pengisian BBM</th>
                        <th>Total Biaya Pengisian BBM</th>
                        <th>Konsumsi BBM</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($calculate as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->namaKendaraan}}</td>
                        <td>{{$item->brand->model}}</td>
                        <td>{{$item->tanggal_formatted}}</td>
                        <td>{{$item->bbm->jenis_bbm}}</td>
                        <td>{{ rtrim(rtrim(number_format($item->total_jarak, 2, ',', '.'), '0'), ',') }} KM</td>
                        <td>{{$item->total_bbm}} Liter</td>
                        <td> Rp. {{ number_format($item->total_biaya, 0) }}</td>
                        <td> {{$item->konsumsi_bbm}} Km/L</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
@extends('layouts.app')

@section('content')

<!-- Tabel -->
  <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ffc0cb;
        }
    </style>
</head>
<body>

<h2><center>Jadwal Kuliah</center></h2>

<table>
    <thead>
        <tr>
            <th><center>Hari</center></th>
            <th><center>Jam</center></th>
            <th><center>Ruang Kuliah</center></th>
            <th border="1" width="300px"><center>Kelompok Kuliah</center></th>
            <th  border="1" width="300px"><center>Dosen Pengampu</center></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Senin</td>
            <td>07.30 - 10.00</td>
            <td>Ruang 2B</td>
            <td>Sistem Operasi</td>
            <td>Kasini, S.Kom., M.Kom.</td>
        </tr>
        <tr>
            <td rowspan="2">Selasa</td>
            <td>07.30 - 10.00</td>
            <td>Ruang 2B</td>
            <td>Probabilitas dan Statiska</td>
            <td>Hidayati Rusnedy, S.T., M.phil.</td>
        </tr>
        <tr>
       
            <td>10.00 - 12.30</td>
            <td>Ruang 2B</td>
            <td>Pemroraman Web</td>
            <td>Safni Marwa, S.T., M.Sc.</td>
        </tr>
        <tr>
            <td rowspan="2">Rabu</td>
            <td>07.30 - 09.10</td>
            <td>Ruang 2B</td>
            <td>Struktur Data</td>
            <td>R. Joko Musridho, S.T., M.Phil.</td>
        </tr>
        <tr>
            <td>10.00 - 15:00</td>
            <td>Ruang 2B</td>
            <td>E-Commerce</td>
            <td>Kasini, S.Kom., M.Kom.</td>
        </tr>
        <tr>
            <td rowspan="2">Kamis</td>
            <td>08.20 - 10.00</td>
            <td>Ruang 1H</td>
            <td>Technopreneurship</td>
            <td>Emon Azriadi, S.T., M.Sc.E.</td>
        </tr>
        <tr>
            <td>13.50 - 16.20</td>
            <td>Ruang 1H</td>
            <td>Emerging Technology</td>
            <td>Deddy Gusman, S.Kom., M.T.I.</td>
        </tr>
        <tr>
            <td>Jumat</td>
            <td>08.20 - 10.50</td>
            <td>Ruang 2H</td>
            <td>Pemrograman Web/td>
            <td>Benny Putra</td>
        </tr>
    </tbody>
</table>

@endsection
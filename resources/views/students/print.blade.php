@extends('layouts.pdf')
@foreach ($students as $student)
@section('title', $student->nama)
@endforeach
@section('content')
<body>
    <style>
        body{
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .sub-header{
            font-size: 15px;
        }
    </style>
    <table class="header">
        <tr>
            <td>
                <img src="assets/images/logo2.png" width="100px">
            </td>
            <td class="sub-header" >
                <b class="p-0">PANITIA PENERIMAAN PESERTA DIDIK BARU</b><br>
                <b class="p-0">SMK WIKRAMA BOGOR T.P. 2020-2021</b><br>
                Jl. Raya Wangun Kel. Sindangsari Kec. Bogor Timur Kota Bogor <br>
                Email : prohumasi@smkwikrama.sch.id
            </td>
        </tr>
    </table>
<br>
    <center><b>TANDA BUKTI PENDAFTARAN</b></center>
    <br>
    <table class="content" width="100%">
        @foreach ($students as $student)
        <tr>
            <td colspan="3" style="background-color: lightgray"><center><b>BIODATA CALON PESERTA DIDIK</b></center></td>
        </tr>
        <tr>
            <th width="35%"><b>TANGGAL DAFTAR</b></th>
            <td width="3%">:</td>
            <td>{{ Carbon\Carbon::parse( $student->created_at )->isoFormat('D MMMM Y') }}</td>
        </tr>
        <tr>
            <th><b>NOMOR SELEKSI</b></th>
            <td width="3%">:</td>
            <td>{{ $student->id }}</td>
        </tr>
        <tr>
            <th><b>NAMA LENGKAP</b></th>
            <td width="3%">:</td>
            <td>{{ $student->nama }}</td>
        </tr>
        <tr>
            <th><b>JENIS KELAMIN</b></th>
            <td width="3%">:</td>
            <td>{{ $student->jenis_kelamin }}</td>
        </tr>
        <tr>
            <th><b>NIS</b></th>
            <td width="3%">:</td>
            <td>{{ $student->nis }}</td>
        </tr>
        <tr>
            <th><b>TEMPAT LAHIR</b></th>
            <td width="3%">:</td>
            <td>{{ $student->tempat_lahir }}</td>
        </tr>
        <tr>
            <th><b>TANGGAL LAHIR</b></th>
            <td width="3%">:</td>
            <td>{{ Carbon\Carbon::parse($student->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
        </tr>
        <tr>
            <th><b>ALAMAT</b></th>
            <td width="3%">:</td>
            <td>{{ $student->alamat }}</td>
        </tr>
        <tr>
            <th><b>ASAL SEKOLAH</b></th>
            <td width="3%">:</td>
            <td>{{ $student->asal_sekolah }}</td>
        </tr>
        <tr>
            <th><b>KELAS</b></th>
            <td width="3%">:</td>
            <td>{{ $student->kelas }}</td>
        </tr>
        <tr>
            <th><b>JURUSAN</b></th>
            <td width="3%">:</td>
            <td>{{ $student->jurusan }}</td>
        </tr>
        @endforeach
    </table>
    <table width="100%" border="0">
        <tr>
            <td colspan="3" style="background-color: lightgray"><center><b>PERSYARATAN</b></center></td>
        </tr>
    </table>
    <br>
    <table width="100%" border="0">
        <tr>
            <td><b>A. Foto/Scan Dokumen yang Harus Dipersiapkan</b></td>
        </tr>

        <tr>
            <td>
                1. Raport Semester 1 s.d 5 yang telah dilegasir dalam bentuk pdf(satu file)<br>
                2. Akta Kelahiran dalam bentuk pdf/jpeg(satu file)<br>
                3. KTP Ayah dan ibu dipisah dalam bentuk pdf/jpeg<br>
                4. Kartu Keluarga dalam bentuk pdf/jpeg<br>
                5. Kartu NISN dalam bentuk pdf/jpeg
            </td>
        </tr>

    </table>
    <br>
    <table width="100%" border="0">
        <tr>
            <td colspan="3" style="background-color: white"><b>A. Biaya Seleksi</b></td>
        </tr>
        <tr>
            <td>Pembayaran uang seleksi sebesasr Rp. 175.588 melalui transfer bank:</td>
        </tr>
        <tr>
            <td>
                Bank BNI: 1147535806 A.N SMK Wikrama Sekolah.
            </td>
        </tr>
        <tr>
            <td>Pastikan nominal transfer dengan kode unik 3 digit terakhir sesuai dengan nomor seleksi</td>
        </tr>
    </table>
</body>
@endsection

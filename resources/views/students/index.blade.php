@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

<table border="2">
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Asal Sekolah</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th width="300px">Aksi</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $student->nis }}</td>
        <td>{{ $student->nama }}</td>
        <td>{{ $student->jenis_kelamin }}</td>
        <td>{{ $student->tempat_lahir }}</td>
        <td>{{ $student->tanggal_lahir }}</td>
        <td>{{ $student->alamat }}</td>
        <td>{{ $student->asal_sekolah }}</td>
        <td>{{ $student->kelas }}</td>
        <td>{{ $student->jurusan }}</td>
        <td>
            <form action="{{ route('students.destroy', $student->id) }}" method="post">
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                <a target="_blank" href="{{ route('cetakpdf', $student->id) }}">Unduh Data</a>

                @csrf
                @method('DELETE')

                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
   
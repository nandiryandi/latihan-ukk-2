@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

<form action="{{ route('students.update', $student->id) }}" method="post" >
    @csrf
    @method('PUT')

    <div>
        <strong>NIS</strong>
        <input type="number" name="nis" value="{{ $student->nis }}">
    </div>
    <div>
        <strong>Nama</strong>
        <input type="text" name="nama" value="{{ $student->nama }}">
    </div>
    <div>
        <strong>Jenis Kelamin</strong>
        <select name="jenis_kelamin" value="{{ $student->jenis_kelamin }}">
            <option value="{{ $student->jenis_kelamin }}" disabled selected>{{ $student->jenis_kelamin }}</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div>
        <strong>Tempat Lahir</strong>
        <input type="text" name="tempat_lahir" value="{{ $student->tempat_lahir }}">
    </div>
    <div>
        <strong>Tanggal Lahir</strong>
        <input type="date" name="tanggal_lahir" value="{{ $student->tanggal_lahir }}">
    </div>
    <div>
        <strong>Alamat</strong>
        <input type="text" name="alamat" value="{{ $student->alamat }}">
    </div>
    <div>
        <strong>Asal Sekolah</strong>
        <input type="text" name="asal_sekolah" value="{{ $student->asal_sekolah }}">
    </div>
    <div>
        <strong>Kelas</strong>
        <input type="text" name="kelas" value="{{ $student->kelas }}">
    </div>
    <div>
        <strong>Jurusan</strong>
        <select name="jurusan" value="{{ $student->jurusan }}">
            <option value="{{ $student->jurusan }}" disabled selected>{{ $student->jurusan }}</option>
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="Multimedia">Multimedia</option>
            <option value="OTKP">OTKP</option>
            <option value="BDP">BDP</option>
            <option value="Tataboga">Tataboga</option>
            <option value="Perhotelan">Perhotelan</option>
        </select>
    </div>
    <div>
        <button type="submit">Edit</button>
    </div>
</form>

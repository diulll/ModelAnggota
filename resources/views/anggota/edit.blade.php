<!DOCTYPE html>
<html>
<head>
    <title>Edit Anggota</title>
</head>
<body>
    <h1>Edit Anggota</h1>

    @if ($errors->any())
        <div>
            <h3>Error:</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nomor_anggota">Nomor Anggota:</label>
            <input type="text" id="nomor_anggota" name="nomor_anggota" value="{{ $anggota->nomor_anggota }}" required>
            @error('nomor_anggota')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ $anggota->nama }}" required>
            @error('nama')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required>{{ $anggota->alamat }}</textarea>
            @error('alamat')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $anggota->email }}" required>
            @error('email')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $anggota->tanggal_lahir->format('Y-m-d') }}" required>
            @error('tanggal_lahir')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Update</button>
        <a href="{{ route('anggota.index') }}">Batal</a>
    </form>
</body>
</html>

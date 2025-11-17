<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota</title>
</head>
<body>
    <h1>Daftar Anggota</h1>

    @if (session('success'))
        <div style="background-color: #d4edda; padding: 10px; margin-bottom: 10px; border: 1px solid #c3e6cb;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('anggota.create') }}">Tambah Anggota Baru</a>

    @if ($anggota->count() > 0)
        <table border="1" cellpadding="10" cellspacing="0" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Anggota</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nomor_anggota }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->tanggal_lahir->format('d-m-Y') }}</td>
                        <td>
                            <a href="{{ route('anggota.edit', $item->id) }}">Edit</a>
                            <form action="{{ route('anggota.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada anggota. <a href="{{ route('anggota.create') }}">Tambah anggota sekarang</a></p>
    @endif
</body>
</html>

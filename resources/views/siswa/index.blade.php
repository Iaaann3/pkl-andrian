<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #444;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .btn {
            padding: 6px 10px;
            font-size: 14px;
            text-decoration: none;
            border: 1px solid #333;
            background-color: #eee;
            margin-right: 5px;
        }
        .btn-danger {
            background-color: #f66;
        }
        .btn-success {
            background-color: #8f8;
        }
        .alert {
            padding: 10px;
            background-color: #cfc;
            border: 1px solid #6c6;
            margin-bottom: 15px;
            width: fit-content;
        }
    </style>
</head>
<body>

    <h1>Data Siswa</h1>
    @if (session('berhasil'))
        <div class="alert">{{ session('berhasil') }}</div>
    @endif
    @if (session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert" style="background-color: #fcc; border-color: #f66;">{{ session('error') }}</div>
    @endif

    <a href="{{ route('siswa.create') }}" class="btn btn-success">+ Tambah Siswa</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($siswa as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['kelas'] }}</td>
                    <td>
                        <a href="{{ route('siswa.edit', $item['id']) }}" class="btn">Edit</a>
                        <form action="{{ route('siswa.destroy', $item['id']) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada data siswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>

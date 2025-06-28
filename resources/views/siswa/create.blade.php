<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; margin-top: 10px; }
        td { padding: 6px 10px; }
        input[type=text] {
            width: 280px; padding: 7px;
            border:1px solid #666; border-radius:4px;
        }
        .btn      { padding:7px 14px; background:#8f8; border:1px solid #484; cursor:pointer; }
        .btn-back { padding:7px 14px; background:#ddd; border:1px solid #888; text-decoration:none; }
        .error    { color:#c00; }
    </style>
</head>
<body>

    <h1>Tambah Siswa</h1>

    {{-- Error validasi --}}
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="nama">Nama Siswa</label></td>
                <td>
                    <input id="nama" type="text" name="nama"
                           value="{{ old('nama') }}" maxlength="225" required>
                </td>
            </tr>
            <tr>
                <td><label for="kelas">Kelas</label></td>
                <td>
                    <input id="kelas" type="text" name="kelas"
                           value="{{ old('kelas') }}" maxlength="12"
                           placeholder="contoh: VII-A" required>
                </td>
            </tr>
        </table>

        <br>
        <button class="btn" type="submit">Simpan</button>
        <a href="{{ route('siswa.index') }}" class="btn-back">Kembali</a>
    </form>

</body>
</html>

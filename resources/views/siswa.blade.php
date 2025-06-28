<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
        </tr>
        @foreach($siswa as $data)
        <tr>
            <td>{{ $data['nama'] }}</td>
            <td>{{ $data['kelas'] }}</td>
            <td>{{ $data['jk'] }}</td>
            <td>{{ $data['alamat'] }}</td>
        </tr>
        @endforeach
    </table>
    <h2>Data Orang Tua</h2>
    <table border="1">
        <tr>
            <th>Nama Orang Tua</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
        </tr>
        @foreach($ortu as $data)
        <tr>
            <td>{{ $data['namaortu'] }}</td>
            <td>{{ $data['jk'] }}</td>
            <td>{{ $data['telepon'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
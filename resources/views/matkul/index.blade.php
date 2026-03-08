<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Matkul</title>
</head>
<body>

<h1>Daftar Matkul</h1>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
    </thead>

    <tbody>
        @foreach($matkul as $m)
        <tr>
            <td>{{ $m->kode }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->jurusan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
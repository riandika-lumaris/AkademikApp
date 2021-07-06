<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Dosen Wali</th>
        </tr>
        @foreach ($mahasiswa as $m)
            <tr>
                <td>{{ $m->nrp }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->dosen->nama }}</td>
            </tr>
        @endforeach
    </table>
    <form action="{{ url('/insert_mhs') }}" method="post">
        {{ csrf_field() }}
        NRP : <input type="text" name="nrp" /><br />
        Nama : <input type="text" name="nama" /><br />
        Dosen Wali :
        <select name="dosen_wali">
            @foreach ($dosen as $d)
                <option value="{{ $d->kode }}">{{ $d->nama }}</option>
            @endforeach
        </select><br />
        <button type="submit">Insert</button>
    </form>
</body>
</html>

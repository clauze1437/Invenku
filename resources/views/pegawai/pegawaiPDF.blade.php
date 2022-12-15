<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h3 align="center">Data Pegawai</h3>
    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">nip</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Gender</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telepon</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @php $no= 1; @endphp
            @foreach($pegawai as $row)
            <tr>
                <td scope="row">{{ $no++ }}</td>
                <td>{{ $row->nip }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->jabatan->nama }}</td>
                <td>{{ $row->gender}}</td>
                <td>{{ $row->alamat}}</td>
                <td>{{ $row->telepon }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
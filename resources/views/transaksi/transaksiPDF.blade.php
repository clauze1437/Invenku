<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h3 align="center">Data Transaksi</h3>
    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Transaksi</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Status</th>
                <th scope="col">Catatan</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @php $no= 1; @endphp
            @foreach($transaksi as $row)
            <tr>
                <td scope="row">{{ $no++ }}</td>
                <td>{{ $row->kode_trans }}</td>
                <td>{{ $row->pegawai->nama }}</td>
                <td>{{ $row->nama_barang }}</td>
                <td>{{ $row->tanggal}}</td>
                <td>{{ $row->jumlah }}</td>
                <td>{{ $row->status }}</td>
                <td>{{ $row->catatan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
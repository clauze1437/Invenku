<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h3 align="center">Data Barang</h3>
    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Transaksi</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Stok</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @php $no= 1; @endphp
            @foreach($barang as $row)
            <tr>
                <td scope="row">{{ $no++ }}</th>
                <td>{{ $row->kode_barang }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->transaksi->kode_trans }}</td>
                <td>{{ $row->jenis_barang->jenis}}</td>
                <td>{{ $row->kondisi }}</td>
                <td>{{ $row->stok }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
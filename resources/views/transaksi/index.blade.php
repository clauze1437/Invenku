@extends('admin.index')
@section('content')
<div class="pagetitle">
    <h1>Transaksi</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Transaksi</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Transaksi</h5>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <a class="btn btn-primary" title="Tambah Transaksi" href=" {{ route('transaksi.create') }}">
                        <i class='bx bx-plus'></i>
                    </a>
                    &nbsp;
                    <a class="btn btn-danger" title="Export to PDF Transaksi" href=" {{ url('transaksi-pdf') }}">
                        <i class='bx bxs-file-export'></i>
                    </a>
                    &nbsp;
                    <a class="btn btn-success" title="Export to Excel Transaksi" href=" {{ url('transaksi-excel') }}">
                        <i class='bx bxs-file-export'></i>
                    </a>
                    <br /> <br />
                    <table class="table table-borderless datatable">
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
                                <th scope="col">Actions</th>
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
                                <td width="15%">
                                    <form method="POST" id="formDelete">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-info btn-sm" title="Detail Transaksi" href=" {{ route('transaksi.show',$row->id) }}">
                                            <i class='bx bx-detail'></i>
                                        </a>
                                        &nbsp;
                                        <a class="btn btn-warning btn-sm" title="Ubah Transaksi" href=" {{ url('transaksi-edit',$row->id) }}">
                                            <i class='bx bx-edit-alt'></i>
                                        </a>
                                        &nbsp;
                                        <button type="submit" data-action="{{ route('transaksi.destroy',$row->id) }}" class="btn btn-danger btn-sm btnDelete" title="Hapus Transaksi">
                                            <i class='bx bx-trash'></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">
    $('body').on('click', '.btnDelete', function(e) {
        e.preventDefault();
        var action = $(this).data('action');
        Swal.fire({
            title: 'Yakin ingin menghapus data ini?',
            text: "Data yang sudah dihapus tidak bisa dikembalikan lagi",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Yakin'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#formDelete').attr('action', action);
                $('#formDelete').submit();
            }
        })
    })
</script>
@endsection
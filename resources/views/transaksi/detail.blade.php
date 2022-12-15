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
</div>
<!-- End Page Title -->
<section class="section profile">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <h3>Detail Transaksi</h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-secondary">
                            Kode Transaksi: {{ $row->kode_trans }}
                            <br />Nama Pegawai: {{ $row->pegawai->nama  }}
                            <br />Nama Barang: {{ $row->nama_barang }}
                            <br />Tanggal: {{ $row->tanggal }}
                            <br />Jumlah: {{ $row->jumlah }}
                            <br />Status: {{ $row->status }}
                            <br />Catatan: {{ $row->catatan }}
                        </div>
                        <a class="btn btn-info btn-sm" title="Kembali" href=" {{ url('transaksi') }}">
                            <i class='bx bx-left-arrow-alt'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
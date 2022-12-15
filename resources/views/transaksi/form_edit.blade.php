@extends('admin.index')
@section('content')
@php
$ar_status = ['masuk','keluar'];
//select option pegawai
$ar_pegawai = App\Models\Pegawai::all();
@endphp
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
                    <h5 class="card-title">Form Edit Transakasi</h5>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('transaksi.update',$row->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Kode Transaksi</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-code-curly'></i></span>
                                <input type="text" name="kode_trans" value="{{ $row->kode_trans }}" class="form-control" placeholder="AJ0001BKS2" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Pegawai</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-user'></i></span>
                                <select name="pegawai_id" class="form-select">
                                    <option selected>-- Pilih Pegawai --</option>
                                    @foreach($ar_pegawai as $peg)
                                    @php $sel = ($peg->id == $row->pegawai_id) ? 'selected' : ''; @endphp
                                    <option value="{{ $peg->id }}" {{ $sel }}>{{ $peg->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Nama Barang</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-component'></i></span>
                                <input type="text" name="nama_barang" value="{{ $row->nama_barang }}" class="form-control" placeholder="Toyota Agya" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-calendar-alt'></i></span>
                                <input class="form-control" type="date" name="tanggal" value="{{ $row->tanggal }}" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-keyboard'></i></span>
                                <input type="number" name="jumlah" class="form-control" value="{{ $row->jumlah }}" placeholder="18" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-stats'></i></span>
                                <select name="status" class="form-select">
                                    <option selected>-- Pilih Status --</option>
                                    @foreach($ar_status as $status)
                                    @php $sel = ($status == $row->status) ? 'selected' : ''; @endphp
                                    <option value="{{ $status }}" {{ $sel }}>{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Catatan</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-comment"></i></span>
                                <textarea name="catatan" class="form-control" value="{{ $row->catatan }}" placeholder="Catatan"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="input-group input-group-merge">
                                <a class="btn btn-info" title="Kembali" href=" {{ url('transaksi') }}">
                                    <i class="bi bi-arrow-left-square"> Kembali</i>
                                </a>
                                &nbsp;
                                <button type="submit" class="btn btn-primary" title="Simpan Transaksi"><i class="bi bi-save"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
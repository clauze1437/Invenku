@extends('admin.index')
@section('content')
@php
//select option transaksi dan jenis barang
$ar_transaksi = App\Models\Transaksi::all();
$ar_jenis_barang = App\Models\Jenis_Barang::all();
@endphp
<div class="pagetitle">
    <h1>Barang</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Barang</li>
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
                    <form method="POST" action="{{ route('barang.update',$row->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Kode Barang</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-code-curly'></i></span>
                                <input type="text" name="kode_barang" value="{{ $row->kode_barang }}" class="form-control" placeholder="BR001" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-component'></i></span>
                                <input type="text" name="nama" value="{{ $row->nama }}" class="form-control" placeholder="Toyota Agya" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Transaksi</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-user'></i></span>
                                <select name="transaksi_id" class="form-select">
                                    <option selected>-- Pilih transaksi --</option>
                                    @foreach($ar_transaksi as $trans)
                                    @php $sel1 = ($trans->id == $row->transaksi_id) ? 'selected' : ''; @endphp
                                    <option value="{{ $trans->id }}" {{ $sel1 }}>{{ $trans->kode_trans }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Barang</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-user'></i></span>
                                <select name="jenis_barang_id" class="form-select">
                                    <option selected>-- Pilih Jenis Barang --</option>
                                    @foreach($ar_jenis_barang as $jb)
                                    @php $sel2 = ($jb->id == $row->jenis_barang_id) ? 'selected' : ''; @endphp
                                    <option value="{{ $jb->id }}" {{ $sel2 }}>{{ $jb->jenis}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kondisi</label>
                            <div class="input-group input-group-merge">
                                <textarea class="form-control" name="kondisi" value="{{ $row->kondisi }}"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-component'></i></span>
                                <input type="number" name="stok" value="{{ $row->stok}}" class="form-control" placeholder="Toyota Agya" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"></label>
                            <div class="input-group input-group-merge">
                                <a class="btn btn-info" title="Kembali" href=" {{ url('barang') }}">
                                    <i class='bx bx-left-arrow-alt'></i> Kembali
                                </a>
                                &nbsp;
                                <button type="submit" class="btn btn-primary" title="Simpan Barang"><i class='bx bx-save'></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
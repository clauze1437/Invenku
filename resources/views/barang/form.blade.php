@extends('admin.index')
@section('content')
<div class="pagetitle">
    <h1>Barang</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Barang</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->
<section class="section profile">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Input Barang</h5>
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
                    <form method="POST" action="{{ route('barang.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Kode Barang</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-code-curly'></i></span>
                                <input type="text" name="kode_barang" value="{{ old('kode_barang') }}" class="form-control @error('kode_barang') is-invalid @enderror" placeholder="BR001" />
                                @error('kode_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Nama Barang</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-component'></i></span>
                                <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Toyota Agya" />
                                @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Transaksi</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-user'></i></span>
                                <select name="transaksi_id" class="form-select @error('transaksi_id') is-invalid @enderror">
                                    <option selected>-- Pilih transaksi --</option>
                                    @foreach($ar_transaksi as $trans)
                                    @php
                                    $sel = (old('pegawai_id') == $jab->id)? 'selected':'';
                                    @endphp
                                    <option value="{{ $trans->id }}" {{ $sel }}>{{ $trans->kode_trans }}</option>
                                    @endforeach
                                </select>
                                @error('transaksi_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Jenis Barang</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-user'></i></span>
                                <select name="jenis_barang_id" class="form-select @error('jenis_barang_id') is-invalid @enderror">
                                    <option selected>-- Pilih Jenis Barang --</option>
                                    @foreach($ar_jenis_barang as $jb)
                                    @php
                                    $sel = (old('pegawai_id') == $jab->id)? 'selected':'';
                                    @endphp
                                    <option value="{{ $jb->id }}" {{ $sel }}>{{ $jb->jenis}}</option>
                                    @endforeach
                                </select>
                                @error('jenis_barang_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Kondisi</label>
                            <div class="input-group input-group-merge">
                                <textarea name="kondisi " class="form-control @error('kondisi') is-invalid @enderror">{{ old('kondisi') }}</textarea>
                                @error('kondisi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Stok</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-component'></i></span>
                                <input type="number" name="stok" value="{{ old('stok') }}" class="form-control @error('stok') is-invalid @enderror" placeholder="12" />
                                @error('stok')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="input-group input-group-merge">
                                <a class="btn btn-info" title="Kembali" href=" {{ url('transaksi') }}">
                                    <i class='bx bx-left-arrow-alt'></i> Kembali
                                </a>
                                &nbsp;
                                <button type="submit" class="btn btn-primary" title="Simpan Transaksi"><i class='bx bx-save'></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
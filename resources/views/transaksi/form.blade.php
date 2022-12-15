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
                    <h5 class="card-title">Form Input Transaksi</h5>
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
                    <form method="POST" action="{{ route('transaksi.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Kode Transaksi</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-code-curly'></i></span>
                                <input type="text" name="kode_trans" value="{{ old('kode_trans') }}" class="form-control @error('kode_trans') is-invalid @enderror" placeholder="AJ0001BKS2" />
                                @error('kode_trans')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pegawai</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-user'></i></span>
                                <select name="pegawai_id" class="form-select @error('pegawai') is-invalid @enderror">
                                    <option selected>-- Pilih Pegawai --</option>
                                    @foreach($ar_pegawai as $peg)
                                    @php
                                    $sel = (old('pegawai_id') == $peg->id)? 'selected':'';
                                    @endphp
                                    <option value="{{ $peg->id }}" {{ $sel }}>{{ $peg->nama }}</option>
                                    @endforeach
                                </select>
                                @error('pegawai')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-component'></i></span>
                                <input type="text" name="nama_barang" value="{{ old('nama_barang') }}" class="form-control @error('nama_barang') is-invalid @enderror" placeholder="Toyota Agya" />
                                @error('nama_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-calendar-alt'></i></span>
                                <input type="date" name="tanggal" value="{{ old('tanggal') }}" class="form-control @error('tanggal') is-invalid @enderror" />
                                @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-keyboard'></i></span>
                                <input type="number" name="jumlah" value="{{ old('jumlah') }}" class="form-control @error('jumlah') is-invalid @enderror" placeholder="18" />
                                @error('jumlah')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-stats'></i></span>
                                <select name="status" class="form-select @error('status') is-invalid @enderror">
                                    <option selected>-- Pilih Status --</option>
                                    @foreach($ar_status as $status)
                                    @php
                                    $sel = (old('status_id') == $peg->id)? 'selected':'';
                                    @endphp
                                    <option value="{{ $status }}" {{ $sel }}>{{ $status }}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Catatan</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-comment"></i></span>
                                <textarea name="catatan" class="form-control" placeholder="Catatan"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"></label>
                            <div class="input-group input-group-merge">
                                <a class="btn btn-info" title="Kembali" href=" {{ url('transaksi') }}">
                                    <i class='bx bx-left-arrow-alt'></i> Kembali
                                </a>
                                &nbsp;
                                <button type="submit" class="btn btn-primary" title="Simpan Transaksi">
                                    <i class='bx bx-save'></i> Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
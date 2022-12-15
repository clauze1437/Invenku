@extends('admin.index')
@section('content')
<div class="pagetitle">
    <h1>Pegawai</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Pegawai</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->
<section class="section profile">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Input Pegawai</h5>
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
                    <form method="POST" action="{{ route('pegawai.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">NIP</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-user-detail'></i></span>
                                <input type="text" name="nip" value="{{ old('nip') }}" class="form-control @error('nip') is-invalid @enderror" placeholder="11325">
                                @error('nip')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-user'></i></span>
                                <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Galih Aditya">
                                @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-business'></i></span>
                                <select class="form-select @error('jabatan_id') is-invalid @enderror" name="jabatan_id">
                                    <option selected>-- Pilih Jabatan --</option>
                                    @foreach($ar_jabatan as $jab)
                                    @php
                                    $sel = (old('jabatan_id') == $jab->id)? 'selected':'';
                                    @endphp
                                    <option value="{{ $jab->id }}" {{ $sel }}>{{ $jab->nama }}</option>
                                    @endforeach
                                </select>
                                @error('jabatan_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                @foreach($ar_gender as $gender)
                                @php
                                $cek = (old('gender') == $gender)? 'checked':'';
                                @endphp
                                <div class="form-check">
                                    <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" value="{{ $gender }}" {{ $cek }}>
                                    <label class="form-check-label" for="gridRadios1">
                                        {{ $gender }}
                                    </label>
                                </div>
                                @endforeach
                                @error('gender')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-building-house'></i></span>
                                <input type="text" name="tmp_lahir" value="{{ old('tmp_lahir') }}" class="form-control @error('tmp_lahir') is-invalid @enderror" placeholder="Jakarta">
                                @error('tmp_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-calendar-alt'></i></span>
                                <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir') }}" class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="input-group input-group-merge">
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" style="height: 100px">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Telepon</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-phone'></i></span>
                                <input type="text" name="telepon" value="{{ old('telepon') }}" class="form-control @error('telepon') is-invalid @enderror" placeholder="+62-896-4566-7162">
                                @error('telepon')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                            <div class="input-group input-group-merge">
                                <input class="form-control" type="file" name="foto">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="input-group input-group-merge">
                                <a class="btn btn-info" title="Kembali" href=" {{ url('pegawai') }}">
                                    <i class='bx bx-left-arrow-alt'></i> Kembali
                                </a>
                                &nbsp;
                                <button type="submit" class="btn btn-primary" title="Simpan Pegawai">
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
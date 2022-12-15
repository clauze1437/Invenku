@extends('admin.index')
@section('content')
@php
$ar_role = ['admin','manager','asman','operator'];
$ar_active = ['yes','no'];
@endphp
<div class="pagetitle">
    <h1>User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">User</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Edit User</h5>
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
                    <form method="POST" action="{{ route('user.update',$row->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-user-detail'></i></span>
                                <input type="text" name="email" value="{{ $row->email }}" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-user'></i></span>
                                <input type="text" name="nama" value="{{ $row->name }}" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">role</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-business'></i></span>
                                <select class="form-select" name="role">
                                    <option selected>-- Pilih role --</option>
                                    @foreach($ar_role as $role)
                                    @php $sel = ($role == $row->role) ? 'selected' : ''; @endphp
                                    <option value="{{ $role }}" {{ $sel }}>{{ $role }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="col-sm-2 col-form-label">Isactive</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bxs-business'></i></span>
                                <select class="form-select" name="isactive">
                                    <option selected>-- Pilih Isactive --</option>
                                    @foreach($ar_active as $isac)
                                    @php $sel = ($isac == $row->isac) ? 'selected' : ''; @endphp
                                    <option value="{{ $isac }}" {{ $sel }}>{{ $isac }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                            <div class="input-group input-group-merge">
                                <input class="form-control" type="file" name="foto" value="{{ $row->foto }}">
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
@extends('admin.index')
@section('content')
<div class="pagetitle">
    <h1>Detail User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Detail User</li>
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
                        @empty($row->foto)
                        <img src="{{ url('admin/assets/img/nophoto.png') }}" alt="Profile" class="rounded-circle">
                        @else
                        <img src="{{ url('admin/image')}}/{{$row->foto}}" alt="Profile" class="rounded-circle">
                        @endempty
                        <h2>{{ $row->name }}</h2>
                        <h3>{{ $row->email }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-secondary">
                            role: {{ $row->role }}
                            <br />Isactive: {{ $row->isactive }}
                        </div>
                        <a class="btn btn-info btn-sm" title="Kembali" href=" {{ url('user') }}">
                            <i class="bi bi-arrow-left-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
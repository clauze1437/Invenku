@extends('admin.index')
@section('content')
<div class="pagetitle">
    <h1>Jabatan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Jabatan</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Datatables</h5>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @if (Auth()->user()->role != 'Asisten Manager' && Auth()->user()->role != 'Manager' )
                    <a class="btn btn-primary" title="Tambah Jabatan" href=" {{ route('jabatan.create') }}">
                        <i class='bx bx-plus'></i>
                    </a>
                    @endif
                    <br /> <br />
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @php $no= 1; @endphp
                            @foreach($jabatan as $row)
                            <tr>
                                <td scope="row">{{ $no++ }}</td>
                                <td>{{ $row->nama }}</td>
                                <td width="15%">
                                    <form method="POST" id="formDelete">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-info btn-sm" title="Detail Jabatan" href=" {{ route('jabatan.show',$row->id) }}">
                                            <i class='bx bx-detail'></i>
                                        </a>
                                        &nbsp;
                                        @if (Auth()->user()->role != 'Asisten Manager' && Auth()->user()->role != 'Manager' )
                                        <a class="btn btn-warning btn-sm" title="Ubah Jabatan" href=" {{ url('jabatan-edit',$row->id) }}">
                                            <i class='bx bx-edit-alt'></i>
                                        </a>
                                        @endif
                                        &nbsp;
                                        @if (Auth()->user()->role != 'Asisten Manager' && Auth()->user()->role != 'Manager'  && Auth()->user()->role != 'Operator')
                                        <button type="submit" data-action="{{ route('jabatan.destroy',$row->id) }}" class="btn btn-danger btn-sm btnDelete" title="Hapus Jabatan">
                                            <i class='bx bx-trash'></i>
                                        </button>
                                        @endif
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
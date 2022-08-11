@extends('layouts.template')
@section('title')
User Edit
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">


                                <div class="card">
<div class="card-body">
                                        <h4 class="card-title">User Edit</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('pelanggan.update',[$pelanggan->id]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="mb-3">
                                                <label>Name</label>
                                                <input type="text" name="nama" class="form-control" required="" value="{{ $pelanggan->nama }}">
                                            </div>


                                            <div class="mb-3">
                                                <label><Address></Address></label>
                                                <textarea type="text" name="alamat" class="form-control" required="" value="{{ $pelanggan->alamat }}"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" name="email" class="form-control" required="" parsley-type="email" value="{{ $pelanggan->email }}">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label>No. Telpon</label>
                                                <input type="text" name="telpon" class="form-control" required="" value="{{ $pelanggan->telpon }}">
                                            </div>

                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                       Edit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    </div> <!-- main-content -->
@endsection

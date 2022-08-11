@extends('layouts.template')
@section('title')
List Shop Edit
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">


                                <div class="card">
                                        <div class="card-body">
                                        @include('alert.error')
                                        <h4 class="card-title">Edit Shop</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('shop.store') }}" novalidate="">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Shop Name</label>
                                                <input type="text" name="namashop" class="form-control" required="" placeholder="Silahkan input nama">
                                            </div>

                                            <div class="mb-3">
                                                <label>Address</label>
                                                <textarea type="text" name="alamatshop" class="form-control" required="" placeholder="Silahkan input alamat"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label>Email</label>
                                                <div>
                                                    <input type="email" name="emailshop" class="form-control" required="" parsley-type="email" placeholder="Silahkan masukan email yang benar">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label>Fax</label>
                                                <input type="text" name="fax" class="form-control" required="" placeholder="Silahkan input nama">
                                            </div>


                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Add
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

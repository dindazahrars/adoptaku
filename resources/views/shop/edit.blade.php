@extends('layouts.template')
@section('title')
Shop List Edit
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">


                                <div class="card">
<div class="card-body">
                                        <h4 class="card-title">Edit Shop</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('shop.update',[$shop->id]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="mb-3">
                                                <label>Shop Name</label>
                                                <input type="text" name="namashop" class="form-control" required="" value="{{ $shop->namashop }}">
                                            </div>


                                            <div class="mb-3">
                                                <label>Address</label>
                                                <textarea type="text" name="alamatshop" class="form-control" required="" value="{{ $shop->alamatshop }}"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="emailshop" name="email" class="form-control" required="" parsley-type="email" value="{{ $shop->emailshop }}">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label>Fax</label>
                                                <input type="text" name="fax" class="form-control" required="" value="{{ $shop->fax }}">
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

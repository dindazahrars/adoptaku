@extends('layouts.template')
@section('title')
Admin
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
                                        <h4 class="card-title">Add Admin</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('user.store') }}" novalidate="">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" required="" placeholder="Silahkan input nama">
                                            </div>
                                            <div class="mb-3">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control" required="" placeholder="Silahkan input username">
                                            </div>
                                            <div class="mb-3">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" name="email" class="form-control" required="" parsley-type="email" placeholder="Silahkan masukan email yang benar">
                                                </div>
                                            </div>

                                                <label>Level</label>
                                                        <select name="level" class="form-select" aria-label="Default select example">
                                                            <option selected="">Open this select menu</option>
                                                            <option value="1">Admin</option>
                                                            <option value="2">Pelanggan</option>
                                                            <option value="3">Shop</option>
                                                            </select>
                                                            <div class="mb-3">
                                                                <label>Password</label>
                                                                <div>
                                                                    <input parsley-type="url" type="password" name="password" class="form-control" required="">
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
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

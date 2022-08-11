@extends('layouts.template')
@section('title')
Edit Admin
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">


                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Edit Admin</h4>


                                        <form class="custom-validation" method="POST" action="{{ route('user.update',[$user->id]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="mb-3">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" required="" value="{{ $user->name }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control" required="" value="{{ $user->username }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" name="email" class="form-control" required="" parsley-type="email" value="{{ $user->email}}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Level</label>
                                                        <select name="level" class="form-select" aria-label="Default select example">
                                                            <option selected="">Open this select menu</option>
                                                            <option value="admin" @if($user->level == "admin") selected @endif>Admin</option>
                                                            <option value="pelanggan" @if($user->level == "admin") selected @endif>Pelanggan</option>
                                                            <option value="shop" @if($user->level == "shop") selected @endif>Shop</option>
                                                            </select>
                                                </div>
                                            <div class="mb-3">
                                                <label>Password</label>
                                                <div>
                                                    <input parsley-type="url" type="password" name="password" class="form-control" value="">
                                                </div>
                                            </div>



                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                       Edit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    </div> <!-- main-content -->
@endsection

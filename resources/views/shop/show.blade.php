@extends('layouts.template')
@section('title')
Shop Data
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
<div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Shop Data</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Shop Tables</a></li>

                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Shop Data</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                            <tr>
                       <td>Shop Code</td>

                       <td>{{ $shop->id }}</td>
                   </tr>
                   <tr>
                       <td>Company name</td>

                       <td>{{ $shop->namashop }}</td>
                   </tr>
                   <tr>
                       <td>Address</td>

                       <td>{{ $shop->alamatshop }}</td>
                   </tr>
                   <tr>
                       <td>Email</td>

                       <td>{{ $shop->emailshop }}</td>
                   </tr>
                   <tr>
                       <td>Phone Number</td>

                       <td>{{ $shop->fax }}</td>
                   </tr>
                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="/pelanggan" role="button">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection

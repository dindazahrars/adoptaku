@extends('layouts.template')
@section('title')
Animal List
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
                                    <h4 class="mb-sm-0">Animal List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Animal List Table</a></li>

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

                                        <h4 class="card-title">Animal List Table</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                            <tr>
                       <td>Animal Id</td>

                       <td>{{ $hewan->id }}</td>
                   </tr>
                   <tr>
                    <td>image of Animal</td>
                    <img class="img-thumbnail" width="30%" src="{{asset('uploads/'.$hewan->foto)}}"/>
                    <td>{{ $hewan->foto}}</td>
                   </tr>
                   <tr>
                       <td>Type of Animal</td>

                       <td>{{ $hewan->jenishewan }}</td>
                   </tr>
                   <tr>
                       <td>Race of Animal</td>

                       <td>{{ $hewan->ras }}</td>
                   </tr>
                   <tr>
                       <td>Variety of Animal</td>

                       <td>{{ $hewan->jenis }}</td>
                   </tr>
                   <tr>
                       <td>Age</td>

                       <td>{{ $hewan->umur }}</td>
                   </tr>
                                            </table>
                                            <a class="btn btn-primary waves-effect waves-light" href="/hewan" role="button">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection

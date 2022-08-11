@extends('layouts.template')
@section('title')
User
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
                                    <h4 class="mb-sm-0">User</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>

                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div>
                        <a class="btn btn-primary waves-effect waves-light" href="{{ route('pelanggan.create')}}" role="button"> Create (+)</a>
                        </p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">User Tabel</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr style="cursor: pointer;">
                                                        <th>Id</th>
                                                        <th>Username</th>
                                                        <th>Address</th>
                                                        <th>Email</th>
                                                        <th>Phone number</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                 @foreach($pelanggan as $row)
                    <tr>
                        <td>{{ $loop->iteration + ($pelanggan->perpage() *  ($pelanggan->currentPage() -1)) }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->telpon }}</td>

                        <td>
                        <form method="post" action="{{ route('pelanggan.destroy',[$row->id]) }}" onsubmit="return confirm('Are you sure to delete, {{$row->nama}}?')">
                                @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" href="{{ route('logout') }}" class="btn btn-outline-secondary btn-sm edit">
                                <i class="fas fa-trash-alt"></i>
                            </button>


                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('pelanggan.edit',[$row->id]) }}" title="Edit">
                             <i class="fas fa-pencil-alt"></i>
                             </a>


                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('pelanggan.show',[$row->id]) }}" title="Lihat">
                            <i class="fas fa-eye"></i>
                             </a>
                        </td>
                    </tr>
                </form>

                  @endforeach
                                                </tbody>
                                            </table>
                                            {{ $pelanggan->appends(Request::all())->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection

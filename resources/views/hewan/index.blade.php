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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>

                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div>
                        <a class="btn btn-primary waves-effect waves-light" href="{{ route('hewan.create')}}" role="button"> Create (+)</a>
                        </p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Animal List</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr style="cursor: pointer;">
                                                        <th>Id</th>
                                                        <th width="10%">Image of Animal</th>
                                                        <th>Type of Animal</th>
                                                        <th>Race of Animal</th>
                                                        <th>Variety of Animal</th>
                                                        <th>Age</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                 @foreach($hewan as $row)
                    <tr>
                        <td>{{ $loop->iteration + ($hewan->perpage() *  ($hewan->currentPage() -1)) }}</td>
                        <td><img class="img-thumbnail" src="{{asset('uploads/'.$row->foto)}}"/></td>
                        <td>{{ $row->jenishewan }}</td>
                        <td>{{ $row->ras }}</td>
                        <td>{{ $row->jenis }}</td>
                        <td>{{ $row->umur}}</td>

                        <td>
                        <form method="post" action="{{ route('hewan.destroy',[$row->id]) }}" onsubmit="return confirm('Are you sure to delete, {{$row->name}}?')">
                                @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" href="{{ route('logout') }}" class="btn btn-outline-secondary btn-sm edit">
                                <i class="fas fa-trash-alt"></i>
                            </button>


                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('hewan.edit',[$row->id]) }}" title="Edit">
                             <i class="fas fa-pencil-alt"></i>
                             </a>


                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('hewan.show',[$row->id]) }}" title="Lihat">
                            <i class="fas fa-eye"></i>
                             </a>
                        </td>
                    </tr>
                </form>

                  @endforeach
                                                </tbody>
                                            </table>
                                            {{ $hewan->appends(Request::all())->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection

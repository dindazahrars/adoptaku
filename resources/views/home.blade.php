@extends('layouts.template')

@section('title')
Dashboard
@endsection

@section('content')
<div class="main-content">
    <div class="page-content">
             <div class="container-fluid">


                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Home</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Adoptme</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Total</p>
                                        <h4 class="mb-2">{{$jumlahAdmin ?? 'haha'}}</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i></span>Total Admin</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="ri-user-3-line font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Total</p>
                                        <h4 class="mb-2">{{$jumlahPelanggan}}</h4>
                                        <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i></span>Total User</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-success rounded-3">
                                            <i class="mdi mdi-currency-usd font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Total Shop</p>
                                        <h4 class="mb-2">{{$jumlahShop}}</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i></span>Shop</p>
                                    </div>
                                    <div class="avatar-sm">
                                        <span class="avatar-title bg-light text-primary rounded-3">
                                            <i class="ri-shopping-cart-2-line font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->


                        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-1">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Adoptme!</h1>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{asset('backend/assets/images/img1.jpg')}}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2022</div>
                            <h2 class="card-title">Manfaat Memelihara Seekor Kucing untuk Kesehatan</h2>
                            <p class="card-text">Salah satu manfaat kucing sebagai hewan peliharaan adalah untuk meredakan rasa kesepian. Kucing bisa menjadi hewan peliharaan yang sangat penyayang, dan mereka dapat mengurangi perasaan kesepian dengan memenuhi kebutuhan kita akan teman.</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{asset('backend/assets/images/img2.jpg')}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Februari 5, 2022</div>
                                    <h2 class="card-title h4">Potret Transformasi Hewan Terlantar Sebelum dan Setelah Diadopsi</h2>
                                    <p class="card-text">Ada begitu banyak hewan yang terlantar di jalanan. Beruntung, masih ada banyak pula orang baik yang lantas berbaik hati mengadopsi hewan-hewan terlantar baik dari jalanan atau tempat penampungan.</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{asset('backend/assets/images/img3.jpg')}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Maret 6, 2022</div>
                                    <h2 class="card-title h4">Anjing atau Kucing Siapa yang Lebih Cerdas</h2>
                                    <p class="card-text">Pemilik anjing dan kucing membuat banyak asumsi tentang kecerdasan hewan berkaki empat itu. Seorang penulis sekaligus peneliti senior spesialis kognisi anjing di Barnard College di New York, Alexandra Horowitz, mengatakan "Peneliti kognisi anjing tidak mempelajari 'kecerdasan' itu sendiri, kami melihat berbagai aspek kognisi,".</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{asset('backend/assets/images/img4.jpg')}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">April 24, 2022</div>
                                    <h2 class="card-title h4">Tepatkah Adopsi Hewan Peliharaan di Masa Pandemi?</h2>
                                    <p class="card-text">Pandemi yang mengharuskan kita lebih banyak beraktivitas dari rumah membuat banyak orang merasa memiliki waktu luang berlebih. Mengadopsi hewan peliharaan pun menjadi pilihan.  Selain mengisi waktu, hewan peliharaan juga bisa menjadi teman di kala kesepian. Tak heran jika secara global trjadi peningkatan adopsi hewan.

                                    </p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{asset('backend/assets/images/img5.jpg')}}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Mei 7, 2022</div>
                                    <h2 class="card-title h4">Bisnis Adopsi Hewan Peliharaan di AS Berkembang Pesat</h2>
                                    <p class="card-text"> Sejak lockdown karena pandemi di AS dimulai pada Maret 2020, bisnis adopsi hewan peliharaan marak. Tetapi tren ini bukan hanya baik bagi hewan-hewan itu.
                                        Olive adalah seekor anjing Labrador Retriever yang tampaknya tidak suka dipotret. Anjing betina ini diadopsi dua bulan silam.</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">3</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Cat</a></li>
                                        <li><a href="#!">Dog</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Food and Drink</a></li>
                                        <li><a href="#!">Accecories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Annoucement</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>

             </div>
    </div>
</div>
@endsection

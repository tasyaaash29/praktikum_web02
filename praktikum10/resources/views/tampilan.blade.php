@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
        
                        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2018/11/2.-Pilih-Jenis-AC-yang-Sesuai.jpg" alt="..." /></div>
                    <h1 class="font-weight-light">AC</h1>
                    <p>AC atau air conditioner merupakan perangkat elektronik yang berfungsi sebagai pendingin ruangan ini menjadi solusi jitu mengatasi udara yang panas.</p>
                        <a class="text-decoration-none" href="{{ url('view') }}">
                            Beli
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://i0.wp.com/static.bmdstatic.com/pk/product/large/5c4993b2b1d30.jpg" alt="..." /></div>
                        <h1 class="font-weight-light">HP</h1>
                        <p>HP atau handphone adalah perangkat telekomunikasi seluler yang memungkinkan pengguna untuk berkomunikasi dan mengakses berbagai fitur dan aplikasi.</p>
                        <a class="text-decoration-none" href="{{ url('view') }}">
                         Beli
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://cdn-2.tstatic.net/palembang/foto/bank/images/kursi-sekolah.jpg" alt="..." /></div>
                        <h1 class="font-weight-light">Meja</h1>
                        <p>Meja yang difungsikan untuk membaca, menulis, dan yang pasti untuk belajar.</p>
                        <a class="text-decoration-none" href="{{ url('view') }}">
                        Beli
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section> 
    </div>
@endsection
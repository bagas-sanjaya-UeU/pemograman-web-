@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex d-flex justify-content-center">
        <div class="card mt-3 border-success">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://avatars.githubusercontent.com/u/45598819?v=4" class="img-fluid rounded-start "
                        alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body shadow-lg">
                        <h5 class="card-title">Biodata</h5>
                        <p class="card-text">Nama : Charderra Eka Bagas Sanjaya</p>
                        <p class="card-text">Nim: 20210801088</p>
                        <p class="card-text">Prodi: Teknik Informatika</p>

                        <p>Contact Me:</p>
                        <div class="row">
                            <div class="col-2">
                                <p class="fw-bold fs-2">
                                    <a href="https://www.instagram.com/charderra_sanjaya/" target="blank"
                                        class="link-warning"><i class="bi bi-instagram "></i></a>
                                </p>
                            </div>
                            <div class="col-2">
                                <p class="fw-bold fs-2">
                                    <a href="https://github.com/bagas-sanjaya-UeU" target="blank" class="link-dark"><i
                                            class="bi bi-github"></i></a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
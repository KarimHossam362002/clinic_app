@extends('layout')
@section('title','VCare-Doctors')
@section('content')

    <div class="page-wrapper">

        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home') }}"
                            >Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">doctors</li>
                </ol>
            </nav>
            <div
                class="filteration d-flex gap-3 mb-3 flex-wrap justify-content-center justify-content-lg-start justify-content-md-start">
                <div class="dropdown">
                    <button class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        governorate
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Cairo</a></li>
                        <li><a class="dropdown-item" href="#">Alexandria</a></li>

                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        city
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Cairo</a></li>
                        <li><a class="dropdown-item" href="#">Alexandria</a></li>

                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        major
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            <div class="doctors-grid">
                <div class="card p-2" style="width: 18rem;">
                    <img src="../assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="../assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="../assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="../assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="../assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="../assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="../assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="../assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="../assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="../assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="../assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>
                <div class="card p-2" style="width: 18rem;">
                    <img src="../assets/images/major.jpg" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                        <h6 class="card-title fw-bold text-center">Major</h6>
                        <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                    </div>
                </div>


            </div>
            <nav class="mt-5" aria-label="navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link page-prev" href="#" aria-label="Previous">
                            <span aria-hidden="true">
                                < </span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link page-next" href="#" aria-label="Next">
                            <span aria-hidden="true"> > </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection

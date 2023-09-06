@extends('layout')
@section('title','VCare-Home')
@section('content')
    <div class="container">
            <h2 class="h1 fw-bold text-center my-4">majors</h2>
        <div class="d-flex flex-wrap gap-4 justify-content-center">
            @foreach ($majorsData as $majorData)
            <div class="d-flex flex-wrap gap-4 justify-content-center">
                <div class="card p-2" style="width: 18rem;">
                    {{-- <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" --}}

                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">{{ $majorData->title }}</h4>
                        <a href="{{route('doctor.index')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

            <h2 class="h1 fw-bold text-center my-4">doctors</h2>
            <section class="splide home__slider__doctors mb-5">
                <div class="splide__track ">
                    <ul class="splide__list">
                        @foreach ($doctorsData as $doctorData )
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('assets/images/doctors/'.$doctorData->image)}}" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">{{ $doctorData->name }}</h4>
                                    <h6 class="card-title fw-bold text-center">{{ $doctorData->major->title }}</h6>
                                    <a href="{{ route('docPage') }}" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                        {{-- Here is a problem in passing doctor id to show his details --}}
                                </div>
                            </div>
                        </li>
                        @endforeach
                        {{-- <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="{{route('doctor.index')}}" class="btn btn-outline-primary card-button">Browse
                                        Doctors</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                                    alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">Doctor Name</h4>
                                    <h6 class="card-title fw-bold text-center">Major</h6>
                                    <a href="./doctors/doctor.html" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </section>
        </div>

         <div class="banner container d-block d-lg-grid d-md-block d-sm-block">
            <div class="info">
                <div class="info__details">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                        alt="" width="50" height="50">
                    <h4 class="title m-0">
                        everything you need is found at VCare.
                    </h4>
                    <p class="content">
                        search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                        you
                        can also order medicine or book a surgery.
                    </p>
                </div>
            </div>
            <div class="info">
                <div class="info__details">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                        alt="" width="50" height="50">
                    <h4 class="title m-0">
                        everything you need is found at VCare.
                    </h4>
                    <p class="content">
                        search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                        you
                        can also order medicine or book a surgery.
                    </p>
                </div>
            </div>
            <div class="info">
                <div class="info__details">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                        alt="" width="50" height="50">
                    <h4 class="title m-0">
                        everything you need is found at VCare.
                    </h4>
                    <p class="content">
                        search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                        you
                        can also order medicine or book a surgery.
                    </p>
                </div>
            </div>
            <div class="info">
                <div class="info__details">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                        alt="" width="50" height="50">
                    <h4 class="title m-0">
                        everything you need is found at VCare.
                    </h4>
                    <p class="content">
                        search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                        you
                        can also order medicine or book a surgery.
                    </p>
                </div>
            </div>
            <div class="bottom--left bottom--content bg-blue text-white">
                <h4 class="title">download the application now</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facere eveniet in id, quod
                    explicabo minus ut, sint possimus, fuga voluptas. Eius molestias eveniet labore ullam magnam sequi
                    possimus quaerat!</p>
                <div class="app-group">
                    <div class="app"><img
                            src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/google-play-logo.svg"
                            alt="">Google Play</div>
                    <div class="app"><img
                            src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/apple-logo.svg"
                            alt="">App Store</div>
                </div>
            </div>
            <div class="bottom--right bg-blue text-white">
                <img src="{{asset('assets/images/banner.jpg')}}" class="img-fluid banner-img">
            </div>
        </div>
@endsection

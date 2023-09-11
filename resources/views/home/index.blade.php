@extends('layout')
@section('title', 'VCare-Home')
@section('content')
    <div class="container">
        <h2 class="h1 fw-bold text-center my-4">majors</h2>
        <div class="d-flex flex-wrap gap-4 justify-content-center">
            @foreach ($majorsData as $majorData)
                <div class="d-flex flex-wrap gap-4 justify-content-center">
                    <div class="card p-2" style="width: 18rem;">
                        {{-- <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" --}}

                            <h4 class="card-title fw-bold text-center">{{ $majorData->title }}</h4>
                            <a href="{{ route('doctor.index',$majorData->id) }}" class="btn btn-outline-primary card-button">Browse
                                Doctors</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 mt-5">
                @if ($majorsData->hasPages())
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                        <li class="page-item {{ $majorsData->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $majorsData->previousPageUrl() }}" aria-label="Previous">
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                            <span class="sr-only"> {{ ('Previous') }} </span>
                            </a>
                        </li>
                        @foreach ( $majorsData->getUrlRange(1, $majorsData->lastPage()) as $pageLink)
                        @php
                            //fuck you php iam mohamed seabeai
                            $pageString = strstr($pageLink, 'page=' , false);
                            $rev = strrev($pageString);
                            $pageNum = strstr($rev, '=' , true);
                            $pageNum = strrev($pageNum);
                        @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $majorsData->currentPage() ? 'active': '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{  $majorsData->currentPage() == $majorsData->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $majorsData->nextPageUrl() }}" aria-label="Next">
                            <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                            <span class="sr-only"> {{ ('Next') }} </span>
                        </a>
                        </li>
                        </ul>
                    </nav>
                @endif
                </div>
        </div>

        <h2 class="h1 fw-bold text-center my-4">doctors</h2>
        <section class="splide home__slider__doctors mb-5">
            <div class="splide__track ">
                <ul class="splide__list">
                    @foreach ($doctorsData as $doctorData)
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="{{-- file exist --}}
                                @php
                                $imagePath = asset('assets/images/doctors/' . $doctorData->image);
                                @endphp
                                 {{-- @dd(!file_exists(public_path($imagePath))) --}}
                                    {{-- @dd(empty($doctorData->image)) --}}
                                @if (!file_exists(public_path($imagePath)) && !empty($doctorData->image))
                                {{ $imagePath }}
                                @else
                                {{ asset('assets/images/defaultDoctor.jpg') }}
                                @endif"
                                    class="card-img-top rounded-circle card-image-circle" alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center">{{ $doctorData->name }}</h4>
                                    <h6 class="card-title fw-bold text-center">{{ $doctorData->major->title }}</h6>
                                    <a href="{{ route('docPage',$doctorData->id) }}" class="btn btn-outline-primary card-button">Book an
                                        appointment</a>
                                    {{-- Here is a problem in passing doctor id to show his details --}}
                                </div>
                            </div>
                        </li>
                    @endforeach

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
            <img src="{{ asset('assets/images/banner.jpg') }}" class="img-fluid banner-img">
        </div>
    </div>
@endsection

@extends('layout')
@section('title','VCare-Doctors')
<script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"
        integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                @foreach ($doctorsData as $doctorData )


                <div class="card p-2" style="width: 18rem;">
                    <img src="{{asset('assets/images/doctors/'.$doctorData->image)}}" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">{{ $doctorData->name }}</h4>
                        <h6 class="card-title fw-bold text-center">{{ $doctorData->major->title}}</h6>
                        <a href="{{route('docPage' , $doctorData->id)}}" class="btn btn-outline-primary card-button">Book an
                            appointment</a>
                                        {{-- Here is a problem in passing doctor id to show his details --}}

                    </div>
                </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-12 mt-5">
                    @if ($doctorsData->hasPages())
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                            <li class="page-item {{ $doctorsData->currentPage() == 1 ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $doctorsData->previousPageUrl() }}" aria-label="Previous">
                                <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                <span class="sr-only"> {{ ('Previous') }} </span>
                                </a>
                            </li>
                            @foreach ( $doctorsData->getUrlRange(1, $doctorsData->lastPage()) as $pageLink)
                            @php
                                //fuck you php iam mohamed seabeai
                                $pageString = strstr($pageLink, 'page=' , false);
                                $rev = strrev($pageString);
                                $pageNum = strstr($rev, '=' , true);
                                $pageNum = strrev($pageNum);
                            @endphp
                                <li class="page-item {{ substr($pageLink, -1) == $doctorsData->currentPage() ? 'active': '' }}">
                                    <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                    </a>
                                </li>
                            @endforeach
                            <li class="page-item {{  $doctorsData->currentPage() == $doctorsData->lastPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $doctorsData->nextPageUrl() }}" aria-label="Next">
                                <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <span class="sr-only"> {{ ('Next') }} </span>
                            </a>
                            </li>
                            </ul>
                        </nav>
                    @endif
                    </div>
            </div>

        </div>
    </div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@extends("layout")
@section('title','VCare-Majors')
@section('content')
<div class="page-wrapper">

    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">majors</li>
            </ol>
        </nav>
        <div class="majors-grid">
            @foreach ($majorsData as $majorData )

            <div class="card p-2" style="width: 18rem;">
                {{-- <img src="{{asset('assets/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major"> --}}
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">{{ $majorData->title }}</h4>
                    <a href="{{route('doctor.index', $majorData->id)}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
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
    </div>
</div>

@endsection

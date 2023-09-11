@extends('layout')
@section('title','VCare-Doctor | Booking')
@section('content')


    <div class="page-wrapper">

        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-decoration-none">doctors</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $doctorsData->name }}</li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 details-card doctor-details">
                <div class="details d-flex gap-2 align-items-center">
                    <img src="
                    {{-- file exist --}}
                    @php
                    $imagePath = asset('assets/images/doctors/' . $doctorsData->image);
                    @endphp
                     {{-- @dd(!file_exists(public_path($imagePath))) --}}
                        {{-- @dd(empty($doctor->image)) --}}
                    @if (!file_exists(public_path($imagePath)) && !empty($doctorsData->image))
                    {{ $imagePath }}
                    @else
                    {{ asset('assets/images/defaultDoctor.jpg') }}
                    @endif
                    " alt="doctor" class="img-fluid rounded-circle" height="150"
                        width="150">
                    <div class="details-info d-flex flex-column gap-3 ">
                        <h4 class="card-title fw-bold">{{ $doctorsData->name }}</h4>
                        <div class="d-flex gap-3 align-bottom">
                            <ul class="rating">
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                                <li class="star"></li>
                            </ul>
                            <a href="#" class="align-baseline">submit rating</a>
                        </div>
                        <h6 class="card-title fw-bold">doctor major and more info about the doctor in summary</h6>
                    </div>
                </div>
                <hr />
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                 </div>
            @endif
                <form class="form" action="{{ route('doctorBooking',$doctorsData->id) }}" method="POST">
                    @csrf
                    @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                    @error('phone')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                    @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    <div class="form-items">

                        <div class="mb-3">

                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>

                        <div class="mb-3">

                            <label class="form-label required-label" for="phone">Phone</label>
                            <input type="tel" class="form-control" name="phone" id="phone">
                        </div>

                        <div class="mb-3">

                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Confirm Booking</button>
                </form>

            </div>
        </div>
    </div>
    <script>
        const stars = document.querySelectorAll('.star');

        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                const isActive = star.classList.contains('active');
                if (isActive) {
                    star.classList.remove('active');
                } else {
                    star.classList.add('active');
                }
                for (let i = 0; i < index; i++) {
                    stars[i].classList.add('active');
                }
                for (let i = index + 1; i < stars.length; i++) {
                    stars[i].classList.remove('active');
                }
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

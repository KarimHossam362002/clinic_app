@extends('layout')
@section('title','VCare-History')
@section('content')

        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">history</li>
                </ol>
            </nav>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">major</th>
                        <th scope="col">location</th>
                        <th scope="col">completed</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>8/11/2023</td>
                        <td class="d-flex align-items-center gap-2"><img src="{{asset('assets/images/major.jpg')}}" alt="" width="25"
                                height="25" class="rounded-circle">
                            <a href="./doctors/doctor.html">hamada</a>
                        </td>
                        <td>bone</td>
                        <td><a href="https://www.google.com/maps" target="_blank">eraasoft</a></td>
                        <td>yes</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>8/11/2023</td>
                        <td class="d-flex align-items-center gap-2"><img src="{{asset('assets/images/major.jpg')}}" alt="" width="25"
                                height="25" class="rounded-circle">
                            <a href="./doctors/doctor.html">hamada</a>
                        </td>
                        <td>bone</td>
                        <td><a href="https://www.google.com/maps" target="_blank">eraasoft</a></td>
                        <td>no</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>8/11/2023</td>
                        <td class="d-flex align-items-center gap-2"><img src="{{asset('assets/images/major.jpg')}}" alt="" width="25"
                                height="25" class="rounded-circle">
                            <a href="./doctors/doctor.html">hamada</a>
                        </td>
                        <td>bone</td>
                        <td><a href="https://www.google.com/maps" target="_blank">eraasoft</a></td>
                        <td>no</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



@endsection

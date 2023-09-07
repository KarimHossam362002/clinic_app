@extends('layout')
@section('title', 'VCare-Contact')
@section('content')

    <div class="page-wrapper">

        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">contact</li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                <form class="form" action="{{ route('contact_us.store') }}" method="post">
                    @csrf

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('subject')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-items">
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="phone">Phone</label>
                            <input type="tel" name="phone" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control" id="subject">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="message">Message</label>
                            <textarea class="form-control" id="message" name="message"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
    </div>
@endsection

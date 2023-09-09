@extends('adminlte::page')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
@error('title')
 <div class="alert alert-danger">
         {{ $message }}
 </div>
@enderror
<form action="{{route('major.store')}}" method="POST">
    @csrf
    <div>
        <label for="title" class="form-label">Title:</label>
        <input type="text"  class="form-control w-50" name="title" id="title">
        <br>
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>

@endsection

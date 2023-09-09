@extends('adminlte::page')
@section('content')
{{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
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
<form action=" {{route('major.update',$major->id)}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="title" value="{{$major->title}}">
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection

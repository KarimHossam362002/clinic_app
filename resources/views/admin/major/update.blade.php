@extends('adminlte::page')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action=" {{route('major.update',$major->id)}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="majorTitle" value="{{$major->title}}">
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection

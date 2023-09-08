@extends('adminlte::page')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action=" {{route('major.store')}}" method="post">
    @csrf
    <div>
        <label for="title" class="form-label">Title:</label>
        <input type="text"  class="form-control w-50" name="majorTitle" id="title">
        <br>
        <button type="submit" class="btn btn-primary">Create</button>

    </div>
</form>
@endsection

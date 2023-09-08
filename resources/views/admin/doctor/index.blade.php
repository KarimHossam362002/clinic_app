@extends('adminlte::page')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
    <a href="{{ route('doctors.create') }}" class="btn btn-primary">create</a>

    <table class="table">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>city</th>
            <th>Major Name</th>
            {{-- <th>email</th> --}}
            <th>image</th>
            <th>created_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->city }}</td>
                    {{-- <td>{{ $doctor->password }}</td> --}}
                    <td>{{ $doctor->major?->title }}</td>
                    {{-- <td>{{ $doctor->email }}</td> --}}
                    <td><img src="{{ url('assets/images/doctors/'.$doctor->image) }}" width="80"></td>
                    <td>{{ $doctor->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-doctor btn btn-danger" type="submit">delete</button>
                        </form>
                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning">update</a>
                        <a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-primary">show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $doctors->links('vendor.pagination.bootstrap-4') }} --}}
    <div class="row">
        <div class="col-12 mt-5">
            @if ($doctors->hasPages())
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                    <li class="page-item {{ $doctors->currentPage() == 1 ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $doctors->previousPageUrl() }}" aria-label="Previous">
                        <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                        <span class="sr-only"> {{ ('Previous') }} </span>
                        </a>
                    </li>
                    @foreach ( $doctors->getUrlRange(1, $doctors->lastPage()) as $pageLink)
                    @php
                        //fuck you php iam mohamed seabeai
                        $pageString = strstr($pageLink, 'page=' , false);
                        $rev = strrev($pageString);
                        $pageNum = strstr($rev, '=' , true);
                        $pageNum = strrev($pageNum);
                    @endphp
                        <li class="page-item {{ substr($pageLink, -1) == $doctors->currentPage() ? 'active': '' }}">
                            <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                            </a>
                        </li>
                    @endforeach
                    <li class="page-item {{  $doctors->currentPage() == $doctors->lastPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $doctors->nextPageUrl() }}" aria-label="Next">
                        <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        <span class="sr-only"> {{ ('Next') }} </span>
                    </a>
                    </li>
                    </ul>
                </nav>
            @endif
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.querySelectorAll('.delete-doctor').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection

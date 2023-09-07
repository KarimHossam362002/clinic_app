@extends('adminlte::page')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
    <a href="{{ route('major.create') }}" class="btn btn-primary">Create</a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
        <th scope="col">actions</th>
        <th scope="col">actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($majors as $major )
        <tr>
            <th scope="row">{{$major->id}}</th>
            <td>{{$major->title}}</td>
            <td>{{$major->created_at}}</td>
            <td>{{$major->updated_at}}</td>
            <td>

                <a href="{{ route('major.edit', $major->id)}}" class="btn btn-warning">edit</a>
            </td>
            <td>
                <form action="{{route('major.delete',$major->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="delete-major btn btn-danger ">Delete</button>
                </form>
            </td>

          </tr>

        @endforeach

    </tbody>
  </table>
  {{-- {{ $majors->links('vendor.pagination.bootstrap-4') }} --}}
  <div class="row">
    <div class="col-12 mt-5">
        @if ($majors->hasPages())
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                <li class="page-item {{ $majors->currentPage() == 1 ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $majors->previousPageUrl() }}" aria-label="Previous">
                    <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                    <span class="sr-only"> {{ ('lang.Previous') }} </span>
                    </a>
                </li>
                @foreach ( $majors->getUrlRange(1, $majors->lastPage()) as $pageLink)
                @php
                    //fuck you php iam mohamed seabeai
                    $pageString = strstr($pageLink, 'page=' , false);
                    $rev = strrev($pageString);
                    $pageNum = strstr($rev, '=' , true);
                    $pageNum = strrev($pageNum);
                @endphp
                    <li class="page-item {{ substr($pageLink, -1) == $majors->currentPage() ? 'active': '' }}">
                        <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                        </a>
                    </li>
                @endforeach
                <li class="page-item {{  $majors->currentPage() == $majors->lastPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $majors->nextPageUrl() }}" aria-label="Next">
                    <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                    <span class="sr-only"> {{ ('lang.Next') }} </span>
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
        document.querySelectorAll('.delete-major').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection

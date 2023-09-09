@extends('adminlte::page')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
    {{-- <a href="{{ route('bookings.create') }}" class="btn btn-primary"><i class="fas fa-plus-square"></i>
    </a> --}}

    <table class="table">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            {{-- <th>Doctor name</th> --}}
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone }}</td>
                    {{-- <td>{{ $booking->doctor->name }}</td> --}}
                    <td>{{ $booking->created_at }}</td>
                    <td>{{ $booking->updated_at }}</td>

                    <td class="d-flex">
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-booking btn btn-danger" type="submit"><i class="fas fa-minus-circle"></i>
                            </button>
                        </form>

                        <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-primary"><i class="fas fa-list-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $bookings->links('vendor.pagination.bootstrap-4') }} --}}
    <div class="row">
        <div class="col-12 mt-5">
            @if ($bookings->hasPages())
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                    <li class="page-item {{ $bookings->currentPage() == 1 ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $bookings->previousPageUrl() }}" aria-label="Previous">
                        <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                        <span class="sr-only"> {{ ('lang.Previous') }} </span>
                        </a>
                    </li>
                    @foreach ( $bookings->getUrlRange(1, $bookings->lastPage()) as $pageLink)
                    @php
                        //fuck you php iam mohamed seabeai
                        $pageString = strstr($pageLink, 'page=' , false);
                        $rev = strrev($pageString);
                        $pageNum = strstr($rev, '=' , true);
                        $pageNum = strrev($pageNum);
                    @endphp
                        <li class="page-item {{ substr($pageLink, -1) == $bookings->currentPage() ? 'active': '' }}">
                            <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                            </a>
                        </li>
                    @endforeach
                    <li class="page-item {{  $bookings->currentPage() == $bookings->lastPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $bookings->nextPageUrl() }}" aria-label="Next">
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
        document.querySelectorAll('.delete-booking').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection

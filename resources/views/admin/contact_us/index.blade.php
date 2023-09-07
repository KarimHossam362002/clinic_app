@extends('adminlte::page')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
    {{-- <a href="{{ route('doctors.create') }}" class="btn btn-primary">create</a> --}}

    <table class="table">
        <thead>
            <th>id</th>
            <th>email</th>
            <th>subject</th>
            {{-- <th>phone</th> --}}
            <th>message</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach ($contactMessages as $contactMessage)
                <tr>
                    <td>{{ $contactMessage->id }}</td>
                    <td>{{ $contactMessage->email }}</td>
                    <td>{{ $contactMessage->subject }}</td>
                    <td>{{ $contactMessage->message }}</td>
                    <td>{{ $contactMessage->created_at }}</td>
                    <td>{{ $contactMessage->updated_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('contact_us.destroy', $contactMessage->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-contact_us btn btn-danger" type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $contactMessages->links('vendor.pagination.bootstrap-4') }} --}}
    <div class="row">
        <div class="col-12 mt-5">
            @if ($contactMessages->hasPages())
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                    <li class="page-item {{ $contactMessages->currentPage() == 1 ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $contactMessages->previousPageUrl() }}" aria-label="Previous">
                        <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                        <span class="sr-only"> {{ ('lang.Previous') }} </span>
                        </a>
                    </li>
                    @foreach ( $contactMessages->getUrlRange(1, $contactMessages->lastPage()) as $pageLink)
                    @php
                        //fuck you php iam mohamed seabeai
                        $pageString = strstr($pageLink, 'page=' , false);
                        $rev = strrev($pageString);
                        $pageNum = strstr($rev, '=' , true);
                        $pageNum = strrev($pageNum);
                    @endphp
                        <li class="page-item {{ substr($pageLink, -1) == $contactMessages->currentPage() ? 'active': '' }}">
                            <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                            </a>
                        </li>
                    @endforeach
                    <li class="page-item {{  $contactMessages->currentPage() == $contactMessages->lastPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $contactMessages->nextPageUrl() }}" aria-label="Next">
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
        document.querySelectorAll('.delete-contact_us').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection



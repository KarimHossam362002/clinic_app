@extends('adminlte::page')
@section('content')

    {{-- <a href="{{ route('major.create') }}" class="btn btn-primary">Create</a> --}}


<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        {{-- <th scope="col">password</th> --}}
        <th scope="col">remember_token</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            {{-- <td>{{$user->password}}</td> --}}
            <td>{{$user->remember_token}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            {{-- <td>{{$user->password}}</td> --}}

            <td>

                {{-- <a href="{{ route('user.edit', $user->id)}}" class="btn btn-warning">edit</a> --}}
            </td>
            <td>
                <form action="{{route('users.delete',$user->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="delete-user btn btn-danger ">Delete</button>
                </form>
            </td>

          </tr>

        @endforeach

    </tbody>
  </table>
  {{-- {{ $users->links('vendor.pagination.bootstrap-4') }} --}}
  <div class="row">
    <div class="col-12 mt-5">
        @if ($users->hasPages())
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                <li class="page-item {{ $users->currentPage() == 1 ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $users->previousPageUrl() }}" aria-label="Previous">
                    <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                    <span class="sr-only"> {{ ('lang.Previous') }} </span>
                    </a>
                </li>
                @foreach ( $users->getUrlRange(1, $users->lastPage()) as $pageLink)
                @php
                    //fuck you php iam mohamed seabeai
                    $pageString = strstr($pageLink, 'page=' , false);
                    $rev = strrev($pageString);
                    $pageNum = strstr($rev, '=' , true);
                    $pageNum = strrev($pageNum);
                @endphp
                    <li class="page-item {{ substr($pageLink, -1) == $users->currentPage() ? 'active': '' }}">
                        <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                        </a>
                    </li>
                @endforeach
                <li class="page-item {{  $users->currentPage() == $users->lastPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $users->nextPageUrl() }}" aria-label="Next">
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
        document.querySelectorAll('.delete-user').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection

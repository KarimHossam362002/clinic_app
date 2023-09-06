@extends('adminlte::page')
@section('content')

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
  {{ $majors->links('vendor.pagination.bootstrap-4') }}

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

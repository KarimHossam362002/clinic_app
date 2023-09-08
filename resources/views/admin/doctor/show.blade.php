@extends('adminlte::page')
@section('content')
    <a href="{{ route('doctors.create') }}" class="btn btn-primary">create</a>
    <table class="table">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>city</th>
            <th>email</th>
            <th>image</th>
            <th>major title</th>
            <th>created_at</th>
            <th>actions</th>
            <th>actions</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $doctor->id }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->city }}</td>
                <td>{{ $doctor->email }}</td>
                <td><img src="{{ url('assets/images/doctors/'.$doctor->image)  }}" width="100"></td>
                <td>{{ $doctor->major?->title  }}</td>
                {{-- <td>{{ $doctor->major_title }}</td> --}}

                <td>{{ $doctor->created_at }}</td>
                <td>
                    <form action="{{ route('doctors.destroy', $doctor->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="delete-major btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning">update</a>

                </td>
            </tr>
        </tbody>
    </table>
@endsection

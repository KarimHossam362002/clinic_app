@extends('adminlte::page')
@section('content')

    <a href="{{ route('doctors.create') }}" class="btn btn-primary">create</a>

    <table class="table">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>city</th>
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
                    {{-- <td>{{ $doctor->email }}</td> --}}
                    <td><img src="{{ url('assets/images/doctors/'.$doctor->image) }}" width="40"></td>
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
    {{-- {{ $doctors->links() }} --}}
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

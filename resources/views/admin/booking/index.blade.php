@extends('adminlte::page')
@section('content')

    <a href="{{ route('bookings.create') }}" class="btn btn-primary">create</a>

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
                            <button class="delete-booking btn btn-danger" type="submit">delete</button>
                        </form>
                        
                        <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-primary">show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $bookings->links('vendor.pagination.bootstrap-4') }}
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

@extends('adminlte::page')
@section('content')

    {{-- <a href="{{ route('bookings.create') }}" class="btn btn-primary"><i class="fas fa-plus-square"></i>
    </a> --}}

    <table class="table">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>Doctor name</th>
            <th>created_at</th>
            {{-- <th>actions</th> --}}
        </thead>
        <tbody>

                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ $booking->doctor->name }}</td>


                    <td class="d-flex">
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-booking btn btn-danger" type="submit"><i class="fas fa-minus-circle"></i>
                            </button>
                        </form>


                    </td>
                </tr>

        </tbody>
    </table>
    {{-- {{ $doctors->links() }} --}}
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

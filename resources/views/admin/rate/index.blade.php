@extends('adminlte::page')
@section('content')
<table class="table">
    <thead>
        <th>id</th>
        <th>Rate</th>
        <th>Doctor Name</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>actions</th>
    </thead>
    <tbody>
        @foreach ($rates as $rate)
            <tr>
                <td>{{ $rate->id }}</td>
                <td>{{ $rate->rate }}</td>
                <td>{{ $rate->doctor->name }}</td>
                <td>{{ $rate->created_at }}</td>
                <td>{{ $rate->updated_at }}</td>
                <td class="d-flex">
                    <form action="{{ route('rates.destroy', $rate->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="delete-rates btn btn-danger" type="submit">delete</button>
                    </form>
                    <a href="{{ route('rates.show', $doctor->id) }}" class="btn btn-primary">show</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@section('js')
    <script>
        document.querySelectorAll('.delete-rates').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const Action = confirm('are you sure you want to delete');
                if (!Action) e.preventDefault();
            })
        })
    </script>
@endsection
@endsection

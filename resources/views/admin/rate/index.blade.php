@extends('adminlte::page')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
<table class="table">
    <thead>
        <th>id</th>
        <th>Rate</th>
        <th>Doctor Name</th>
        <th>Major Title</th>
        {{-- <th>created_at</th> --}}
        {{-- <th>updated_at</th> --}}
        <th>actions</th>
    </thead>
    <tbody>
        @foreach ($rates as $rate)
            <tr>
                <td>{{ $rate->id }}</td>
                <td>{{ $rate->sumOfRate }}</td>
                <td>{{ $rate->doctor_name }}</td>
                <td>{{ $rate->major_title }}</td>
                {{-- <td>{{ $rate->created_at }}</td> --}}
                {{-- <td>{{ $rate->updated_at }}</td> --}}
                <td class="d-flex">
                    <form action="{{ route('rates.destroy', $rate->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="delete-rates btn btn-danger" type="submit"><i class="fas fa-minus-circle"></i>
                        </button>
                    </form>
                    {{-- <a href="{{ route('rates.show', $doctor->id) }}" class="btn btn-primary">show</a> --}}

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{-- {{ $rates->links('vendor.pagination.bootstrap-4') }} --}}

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

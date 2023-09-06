@extends('adminlte::page')
@section('content')

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
    {{-- {{ $contactMessage->links() }} --}}
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



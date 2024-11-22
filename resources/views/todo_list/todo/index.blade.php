@extends('todo_list.template')
@section('content')
    <a href="{{ route('todo.create') }}">Tambah Data</a>
    <table>
        <tr>
            <th>Todo</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <tbody>
            @foreach ($todo as $t)
                <tr>
                    <td>{{ $t->todo }}</td>
                    <td>{{ $t->tanggal }}</td>
                    <td>{{ $t->jam }}</td>
                    <td>{{ $t->status }}</td>
                    <td>
                        <a href="{{ route('todo.edit', [$t->id]) }}">Edit</a>
                        <form action="{{ route('todo.delete', [$t->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $todo->links() }}
@endsection

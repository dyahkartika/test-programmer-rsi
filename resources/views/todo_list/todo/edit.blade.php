@extends('todo_list.template')
@section('content')
    <form action="{{ route('todo.update', [$todo->id]) }}" method="POST">
        @csrf
        @method('put')
        <label for="todo">Todo</label>
        <input type="text" id="todo" name="todo" value="{{ old('todo') ?? $todo->todo }}"><br>
        <label for="tanggal">Tanggal :</label><br>
        <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal') }}"><br>
        <label for="tanggal">Jam :</label><br>
        <input type="time" id="jam" name="jam" value="{{ old('jam') }}"><br>
        <label for="status">Status :</label><br>
        <select name="status" id="status">
            <option value="belum">BELUM</option>
            <option value="sedang">SEDANG</option>
            <option value="sudah">SUDAH</option>
        </select><br>
        <button type="submit">Submit</button>
    </form>
@endsection

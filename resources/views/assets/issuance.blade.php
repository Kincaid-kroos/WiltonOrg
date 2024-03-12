
@extends('layouts.app')

@section('content')
    <form action="{{ route('assets.issue', $asset) }}" method="post">
        @csrf
        @method('PATCH')
        
        <label for="department">Select Department:</label>
        <select name="department" id="department">
            @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>
        
        <button type="submit">Issue Asset</button>
    </form>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contacts</h1>
        <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Add New Contact</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->contact }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>
                            <a href="{{ route('contacts.show', $contact) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
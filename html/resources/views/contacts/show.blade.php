@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contact Details</h1>

        <div class="card">
            <div class="card-header">
                Contact Information
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $contact->name }}</h5>
                <p class="card-text"><strong>Contact:</strong> {{ $contact->contact }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $contact->email }}</p>
                <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        <a href="{{ route('contacts.index') }}" class="btn btn-primary mt-3">Back to Contacts</a>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Contact Details</h1>

        <div class="bg-white shadow-md rounded p-4">
            <h5 class="text-xl font-bold">{{ $contact->name }}</h5>
            <p class="text-gray-700"><strong>Contact:</strong> {{ $contact->contact }}</p>
            <p class="text-gray-700"><strong>Email:</strong> {{ $contact->email }}</p>
            <p class="text-gray-700"><strong>Created:</strong> {{ $contact->created_at->format('Y-m-d H:i:s') }}</p>
            <p class="text-gray-700"><strong>Modified:</strong> {{ $contact->updated_at->format('Y-m-d H:i:s') }}</p>
            <a href="{{ route('contacts.edit', $contact) }}"
                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded inline-block">Edit</a>
            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit"class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Delete
                </button>
            </form>
        </div>
        <a href="{{ route('contacts.index') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">
            Back to Contacts
        </a>
    </div>
@endsection

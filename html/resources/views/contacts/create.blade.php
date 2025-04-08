@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Add New Contact</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text"
                    class="shadow appearance border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline focus:shadow-outline"
                    id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="mb-4">
                <label for="contact" class="block text-gray-700 font-bold mb-2">Contact</label>
                <input type="text"
                    class="shadow appearance border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline focus:shadow-outline"
                    id="contact" name="contact" value="{{ old('contact') }}" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email"
                    class="shadow appearance border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline focus:shadow-outline"
                    id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
                Contact</button>
        </form>
    </div>
@endsection

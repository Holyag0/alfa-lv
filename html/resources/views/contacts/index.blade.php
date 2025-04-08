@extends('layouts.app')

@section('content')
    <div class="container mx-auto shadow-md">
        <div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
            <div class="-mt-4 -ml-4 flex flex-wrap items-center justify-between sm:flex-nowrap">
                <div class="mt-4 ml-4">
                    <h3 class="text-base font-semibold text-gray-900">Contacts List</h3>
                    <p class="mt-1 text-sm text-gray-500">All system contacts listed</p>
                </div>
                <div class="mt-4 ml-4 shrink-0">
                    <a href="{{ route('contacts.create') }}"
                        class="relative inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create
                        Contact</a>
                </div>
            </div>
        </div>
        <ul role="list" class="divide-y divide-gray-100 p-4">
            @foreach ($contacts as $contact)
                <li class="flex items-center justify-between gap-x-6 py-5">
                    <div class="min-w-0">
                        <div class="flex items-start gap-x-3">
                            <p class="text-sm font-semibold text-gray-900">Name: {{ $contact->name }}</p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2 text-xs text-gray-500">
                            <p class="whitespace-nowrap font-semibold"><strong>Contact:</strong> {{ $contact->contact }}</p>
                            <p class="truncate font-semibold"><strong>Email:</strong> {{ $contact->email }}</p>
                        </div>
                    </div>
                    <div class="flex flex-none items-center gap-x-4">
                        <a href="{{ route('contacts.show', $contact) }}"
                            class="hidden rounded-md bg-blue-600 px-2.5 py-1.5 text-sm font-semibold text-gray-100 ring-1 shadow-xs ring-black ring-inset hover:bg-blue-500 sm:block">Show<span
                                class="sr-only">, {{ $contact->name }}</span></a>
                        <a href="{{ route('contacts.edit', $contact) }}"
                            class="hidden rounded-md bg-yellow-500 px-2.5 py-1.5 text-sm font-semibold text-gray-100 ring-1 shadow-xs ring-black ring-inset hover:bg-yellow-400 sm:block">Edit<span
                                class="sr-only">, {{ $contact->name }}</span></a>
                        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="hidden rounded-md bg-red-700 px-2.5 py-1.5 text-sm font-semibold text-gray-100 ring-1 shadow-xs ring-black ring-inset hover:bg-red-500 sm:block">Delete<span
                                    class="sr-only">, {{ $contact->name }}</span></button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

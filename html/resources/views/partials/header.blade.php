<header class="bg-white shadow-lg">
    <nav class="container mx-auto p-4 flex justify-between items-center">
        <a class="text-xl font-bold" href="{{ url('/') }}">Contact Manager</a>
        <div>
            <a class="px-4 py-2 text-gray-700 hover:text-gray-900" href="{{ url('/') }}">Home</a>
            <a class="px-4 py-2 text-gray-700 hover:text-gray-900" href="{{ route('contacts.index') }}">Contacts</a>
            <a class="px-4 py-2 text-gray-700 hover:text-gray-900" href="{{ route('contacts.create') }}">Add Contact</a>
        </div>
    </nav>
</header>
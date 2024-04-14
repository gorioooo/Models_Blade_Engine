@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-semibold mb-6">Book List</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border border-gray-400 px-4 py-2">Title</th>
                        <th class="border border-gray-400 px-4 py-2">Author</th>
                        <th class="border border-gray-400 px-4 py-2">ISBN</th>
                        <th class="border border-gray-400 px-4 py-2">Description</th>
                        <th class="border border-gray-400 px-4 py-2">Date Published</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ $book->title }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $book->author }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $book->isbn }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $book->description }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $book->date_published }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

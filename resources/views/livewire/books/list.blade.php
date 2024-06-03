<?php

use Livewire\Volt\Component;
use App\Models\Book;


use Illuminate\Database\Eloquent\Collection;


new class extends Component {


    public Collection $books;

    public function mount(): void

    {
        $this->books = Book::all();
    }
}; ?>

<div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-200 text-left">
        <tr>
            <th class="px-6 py-3 border-b border-gray-300">Title</th>
            <th class="px-6 py-3 border-b border-gray-300">Author</th>
            <th class="px-6 py-3 border-b border-gray-300">Publication Year</th>
            <th class="px-6 py-3 border-b border-gray-300">Publisher</th>
            <th class="px-6 py-3 border-b border-gray-300">ISBN</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr class="hover:bg-gray-100">
                <td class="px-6 py-4 border-b border-gray-300">{{ $book->title }}</td>
                <td class="px-6 py-4 border-b border-gray-300">{{ $book->author }}</td>
                <td class="px-6 py-4 border-b border-gray-300">{{ $book->publication_year }}</td>
                <td class="px-6 py-4 border-b border-gray-300">{{ $book->publisher }}</td>
                <td class="px-6 py-4 border-b border-gray-300">{{ $book->isbn }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
</div>

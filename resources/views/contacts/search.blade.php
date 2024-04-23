@extends('layouts.master')

@section('content')
    <style>
        
        h1 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-details, .btn-edit, .btn-delete {
            display: inline-block;
            padding: 8px 12px;
            text-decoration: none;
            color: #fff;
            background-color: #691717;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-details:hover, .btn-edit:hover, .btn-delete:hover {
            background-color: #000000;
        }

        .form-delete {
            display: inline;
        }

        .no-results {
            font-style: italic;
            color: #888;
        }
        
    </style>

    <h1>Search Results</h1>
    <p>Showing search results for "{{ $search }}"</p>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->surname }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <a href="{{ route('contacts.show', $contact->id) }}" class="btn-details">Details</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn-edit">Edit</a>
                        <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" class="form-delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="no-results">No contacts found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <a href="{{ route('contacts.index') }}">Back to Contact List</a>
@endsection

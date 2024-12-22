@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Offers</h1>
        <a href="{{ route('offres.create') }}" class="btn btn-primary mb-3">Create New Offer</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date Published</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offres as $offre)
                    <tr>
                        <td>{{ $offre->id }}</td>
                        <td>{{ $offre->titre }}</td>
                        <td>{{ Str::limit($offre->description, 50) }}</td>
                        <td>{{ $offre->date_publication->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('offres.show', $offre->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('offres.edit', $offre->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('offres.destroy', $offre->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

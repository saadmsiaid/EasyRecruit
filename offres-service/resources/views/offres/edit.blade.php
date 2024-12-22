@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Offer</h1>
        <form action="{{ route('offres.update', $offre->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titre">Title</label>
                <input type="text" class="form-control" id="titre" name="titre" value="{{ $offre->titre }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $offre->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="date_publication">Date of Publication</label>
                <input type="date" class="form-control" id="date_publication" name="date_publication" value="{{ $offre->date_publication->format('Y-m-d') }}" required>
            </div>
            <button type="submit" class="btn btn-warning mt-3">Update Offer</button>
        </form>
    </div>
@endsection

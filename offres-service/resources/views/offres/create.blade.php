@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Offer</h1>
        <form action="{{ route('offres.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titre">Title</label>
                <input type="text" class="form-control" id="titre" name="titre" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="date_publication">Date of Publication</label>
                <input type="date" class="form-control" id="date_publication" name="date_publication" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Create Offer</button>
        </form>
    </div>
@endsection

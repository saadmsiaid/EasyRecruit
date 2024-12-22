@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Offer Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $offre->titre }}
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $offre->description }}</p>
                <p><strong>Date Published:</strong> {{ $offre->date_publication->format('Y-m-d') }}</p>
                <a href="{{ route('offres.index') }}" class="btn btn-secondary mt-3">Back to Offers</a>
            </div>
        </div>
    </div>
@endsection

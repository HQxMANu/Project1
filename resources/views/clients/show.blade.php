@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            @if($client->house_photo)
                            <img src="{{ asset('storage/' . $client->house_photo) }}" alt="{{ $client->property_title }}" class="img-fluid mb-3">
                            @else
                            <div class="no-photo bg-light p-4 mb-3">No Photo Available</div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <h1>{{ $client->property_title }}</h1>
                            <p><strong>Location:</strong> {{ $client->location }}</p>
                            <div class="d-flex">
                                <p class="bg-primary text-white rounded-pill p-2 mr-2 me-3"><strong></strong> ${{ number_format($client->price, 2) }}</p>
                                <p class="bg-warning text-white rounded-pill p-2"><strong></strong> {{ $client->property_type }}</p>
                            </div>
                            <p><strong>Description:</strong> {{ $client->description }}</p>
                            <p><strong>Number of Rooms:</strong> {{ $client->number_of_rooms }}</p>
                            <p><strong>Number of Bathrooms:</strong> {{ $client->number_of_bathrooms }}</p>
                            <a href="mailto:{{ $client->email }}" class="btn btn-primary mt-3">Email Realtor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
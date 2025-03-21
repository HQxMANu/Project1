
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            @if($property->house_photo)
                            <img src="{{ asset('storage/' . $property->house_photo) }}" alt="{{ $property->property_title }}" class="img-fluid mb-3">
                            @else
                            <div class="no-photo bg-light p-4 mb-3">No Photo Available</div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <h1>{{ $property->property_title }}</h1>
                            <p><strong>Location:</strong> {{ $property->location }}</p>
                            <div class="d-flex">
                                <p class="bg-primary text-white rounded-pill p-2 mr-2 me-3"><strong></strong> ${{ number_format($property->price, 2) }}</p>
                                <p class="bg-warning text-white rounded-pill p-2"><strong></strong> {{ $property->property_type }}</p>
                            </div>
                            <p><strong>Description:</strong> {{ $property->description }}</p>
                            <p><strong>Number of Rooms:</strong> {{ $property->number_of_rooms }}</p>
                            <p><strong>Number of Bathrooms:</strong> {{ $property->number_of_bathrooms }}</p>
                            <a href="mailto:{{ $property->email }}" class="btn btn-primary mt-3">Email Realtor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
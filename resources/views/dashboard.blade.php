@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Properties</h1>
                <a href="{{ url('/properties/add') }}" class="btn btn-primary">+ Create Property</a>
            </div>
           
            <div class="properties-container mt-4">
                @if(isset($properties) && count($properties) > 0)
                <div class="row">
                    @foreach($properties as $property)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                @if($property->house_photo)
                                <img src="{{ asset('storage/' . $property->house_photo) }}" alt="{{ $property->property_title }}" class="img-fluid mb-3" style="max-height: 200px;">
                                @else
                                <div class="no-photo bg-light p-4 mb-3">No Photo Available</div>
                                @endif
                                <h4 class="card-title">{{ $property->property_title }}</h4>
                                <p class="card-text">{{ $property->location }}</p>
                                <p class="card-text">${{ number_format($property->price, 2) }}</p>
                                <a href="{{ route('properties.show', $property->id) }}" class="btn btn-primary">View Property</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="alert alert-info">
                    No properties have been added yet. Click the "Create Property" button to add your first property.
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection


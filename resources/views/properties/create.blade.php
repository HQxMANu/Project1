@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white"><h1>Create Property</h1></div>
                <div class="card-body">
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="property_title" class="form-label">Property Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="property_title" name="property_title" value="{{ old('property_title') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="number_of_rooms" class="form-label">Number of Rooms <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="number_of_rooms" name="number_of_rooms" value="{{ old('number_of_rooms') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="number_of_bathrooms" class="form-label">Number of Bathrooms <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="number_of_bathrooms" name="number_of_bathrooms" value="{{ old('number_of_bathrooms') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="property_type" class="form-label">Property Type <span class="text-danger">*</span></label>
                            <select class="form-control" id="property_type" name="property_type" required>
                                <option value="" disabled selected>Select property type</option>
                                <option value="House" {{ old('property_type') == 'House' ? 'selected' : '' }}>House</option>
                                <option value="Apartment" {{ old('property_type') == 'Apartment' ? 'selected' : '' }}>Apartment</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Location <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="house_photo" class="form-label">House Photo <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="house_photo" name="house_photo" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success px-4">Save Property</button>
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary">Back to Dashboard</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

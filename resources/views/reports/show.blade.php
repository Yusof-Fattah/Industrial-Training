@extends('layouts.app')

@section('title', 'Weekly Report')
@section('breadcrumb', 'Weekly Report > ' . $weeklyReport->title)

@push('styles')
<style>
    img {
        border-radius: 1.5rem;
        padding: 0.5rem;
        object-fit: cover;
        max-height: 300px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        width: 100%;
    }
</style>
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">{{ $weeklyReport->title }}</h4>
    <a href="{{ route('weekly') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i>Back
    </a>
</div>

<div class="row g-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Weekly Report Details</div>
            <div class="card-body">
                <div class="row g-3">
                    <img src="{{ asset('storage/attachments/' . $weeklyReport->image_loc) }}" alt="Weekly Report Image" class="img-fluid mb-3">
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Description</div>
            <div class="card-body">
                <p>{{ $weeklyReport->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

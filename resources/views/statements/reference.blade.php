@extends('layouts.app')

@section('title', 'Conclusion')
@section('breadcrumb', 'Conclusion')

@push('styles')
<style>
    .aging-bar-wrap { position: relative; }
    .aging-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(255,255,255,0.8);
        border: 1px solid #E9E3FF;
        border-radius: 8px;
        padding: 6px 12px;
        font-size: 0.8rem;
        font-weight: 600;
    }
    .aging-dot {
        width: 10px; height: 10px;
        border-radius: 50%;
        flex-shrink: 0;
    }
    .outstanding-card {
        background: linear-gradient(135deg, #5cf671 0%, #aeeec0 50%, #7fe8da 100%);
        color: white;
    }
    .outstanding-card .card-header {
        background: rgba(255,255,255,0.12);
        border-bottom: 1px solid rgba(255,255,255,0.15);
        color: white;
    }
    .quick-action-btn {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.65rem 1rem;
        border-radius: 0.75rem;
        border: 1px solid #E9E3FF;
        background: white;
        color: #3B1F6B;
        font-size: 0.84rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .quick-action-btn:hover {
        background: #F5F3FF;
        border-color: #8B5CF6;
        color: #6D28D9;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(139,92,246,0.18);
    }
    .quick-action-btn i {
        width: 28px; height: 28px;
        background: linear-gradient(135deg, #8B5CF6, #7C3AED);
        color: white;
        border-radius: 7px;
        display: flex; align-items: center; justify-content: center;
        font-size: 0.8rem;
        flex-shrink: 0;
    }
</style>
@endpush

@section('content')
<div class="row g-3 mb-3">
    <div class="col-md-5">
        <div class="card mb-4">
            <div class="card-body">
                <h4>Reference</h4>
                <small>
                    This is a reference section.
                </small>
            </div>
        </div>
    </div>

    <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <small class="d-block mb-2">
                <strong>THKD Informations. (2026.)</strong> Official website for Thomson Hospital Kota Damansara healthcare services.
                <a href="https://www.thomsonhospitals.com/" target="_blank">(https://www.thomsonhospitals.com/)</a>
            </small>
            <small class="d-block mb-2">
                <strong>Bootstrap Toolkit. (2026.)</strong> Open-source front-end framework for designing responsive mobile-first sites.
                <a href="https://getbootstrap.com/" target="_blank">(https://getbootstrap.com/)</a>
            </small>
            <small class="d-block">
                <strong>Laravel Framework. (2026.)</strong> Documentation for the PHP web application framework with expressive, elegant syntax.
                <a href="https://laravel.com/docs/13.x" target="_blank">(https://laravel.com/docs/13.x)</a>
            </small>
        </div>
    </div>
</div>
</div>
@endsection

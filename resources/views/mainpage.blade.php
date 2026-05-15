@extends('layouts.app')

@section('title', 'Mainpage')
@section('breadcrumb', 'Mainpage')

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
    h5,h2{
        color:#1e1b4b;
    }
</style>
@endpush

@section('content')

<!-- Stats Row -->
<div class="row g-3">
    <div class="col-md-8 mb-3">
        <h1 class="display-4">FINAL REPORT OF INDUSTRIAL TRAINING</h1>
        <small class="display-6">SESSION 2 2025 / 2026</small>
    </div>

    <div class="col-md-4"></div>

    <div class="col-md-3">
        
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h5>Intern Declaration</h5>
                <h2>Muhamad Yusof Alfattah Bin Rozaidy</h2>
                <div class="card-body ">    
                    <div class="row col-md-12 gap-1 ">
                        <div class="card outstanding-card col-md-5 h-100">
                            <h6>Student Details</h6>
                            <small>
                                17DDT23F1068</br>
                                Diploma in Computer Technology (Technology Digital)</br>
                                05 January 2026 - 22 May 2026 </br>
                            </small>
                        </div>
                        <div class="card outstanding-card col h-100 ">
                            <h6>Internship Details</h6>
                            <small>
                                Thomson Hospital Kota Damansara Sdn. Bhd.</br>
                                05 January 2026 - 22 May 2026 </br>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

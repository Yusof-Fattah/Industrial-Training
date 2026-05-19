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
        background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 50%, #6D28D9 100%);
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

    table {
        border-collapse: separate;
        border-spacing: 0.5rem 0.2rem;
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
        <div class="card stat-card">
            <div class="card-body">
                <img src="{{ asset('storage/mains/ryan gosling.png') }}" class="img col-12 col-md-12 mb-3 my-3">
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card stat-card">
            <div class="card-body align-items-start flex-column flex-md-row d-flex">
                <div class="col-md-5">
                    <h2 class="display-6">Muhamad Yusof</h2>
                    <h2 class="display-6">Al-Fattah Bin Rozaidy</h2>
                </div>
                <div class="card-body stat-card col-md-5 outstanding-card h-100">
                    <h6>Student Details</h6>
                    <table>
                        <small>
                            <tr><td style="vertical-align: top;"><i class="bi bi-card-heading"></i></td><td><small>17DDT23F1068</small></td></tr>
                            <tr><td style="vertical-align: top;"><i class="bi bi-laptop"></i></td><td><small>Diploma in Computer Technology (Technology Digital)</small></td></tr>
                        </small>
                    </table>
                </div>
            </div>
            <div class="card-body align-items-start d-flex">
                <div class="card-body stat-card col-md-12 outstanding-card">
                    <h6>Internship Details</h6>
                    <table>
                        <small>
                            <tr><td style="vertical-align: top;"><i class="bi bi-building">&nbsp;&nbsp;</i></td><td><small>Thomson Hospital Kota Damansara Sdn. Bhd.</small></td></tr>
                            <tr><td style="vertical-align: top;"><i class="bi bi-pin-map">&nbsp;&nbsp;</i></td><td><small>11, Jalan Teknologi, Taman Sains Selangor, 1,</small></td></tr>
                            <tr><td style="vertical-align: top;">&nbsp;&nbsp;</td><td><small>PJU 5, Kota Damansara, 47810 Petaling Jaya,</small></td></tr>
                            <tr><td style="vertical-align: top;">&nbsp;&nbsp;</td><td><small>Selangor</small></td></tr>
                            <tr><td style="vertical-align: top;"><i class="bi bi-calendar">&nbsp;&nbsp;</i></td><td><small>(05 January 2026 - 22 May 2026)</small></td></tr>
                        </small>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

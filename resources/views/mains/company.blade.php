@extends('layouts.app')

@section('title', 'Company')
@section('breadcrumb', 'Company')

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

    .img {
        border-radius: 1.5rem;
        max-height: 350px;
        min-height: 200px;
        height: auto;
        display: block;
        object-fit: cover;
        border-radius: 1.5rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    h4{
        color:#1e1b4b;
    }
</style>
@endpush

@section('content')

<!-- Stats Row -->
<div class="row g-3 mb-3">
    <div class="col-md-5">
        <div class="card mb-4">
            <div class="card-body">
                <h4>Company Background</h4>
                <small>
                    This is a simple company background information.
                </small>
            </div>
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-body d-flex flex-column-reverse flex-md-row gap-auto">
                <div class="col-md-7 mt-3">
                    <small>
                        Thomson Hospital Kota Damansara (THKD) is a private hospital located in Kota Damansara, Petaling Jaya, Malaysia,
                        where I completed my industrial training for 4 months and 17 days in software field development with a gist of IT support.
                    </small>
                </div>

                <div class="card-body">
                    <img src="{{ asset('storage/mains/company2.png') }}" class="img-fluid ">
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-body">
            <h4>About THKD</h4>
                <img src="{{ asset('storage/mains/company.png') }}" class="img col-12 col-md-12 mb-3 my-3">
                <small>
                    Established in 2008, Thomson Hospital Kota Damansara (THKD) is the flagship hospital of TMC Life Sciences Berhad (TMCLS), 
                    offering a wide array of medical specialties. Conveniently located in Kota Damansara, the hospital is seamlessly connected 
                    to Kuala Lumpur via major roads and the adjacent Kota Damansara MRT station. It also sits in close proximity to premier neighborhoods, 
                    including Tropicana, Mutiara Damansara, and Bandar Utama. With 554 beds, state-of-the-art technology, and a commitment to 
                    excellent customer service, THKD delivers comprehensive medical care of the highest international standards.
                </small>
                <img src="{{ asset('storage/mains/company3.png') }}" class="img col-12 col-md-8 mb-3 mx-auto mt-3">
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3">Vision</h4>
                <small>
                    To help people lead healthier lives by making tertiary healthcare services accessible, accountable and sustainable.
                </small>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3">Mission</h4>
                <small>
                   Regionally </br>
                <table>
                    <tr><td style="vertical-align: top;">•</td><td>To be the largest one-stop comprehensive tertiary care provider.</td></tr>
                    <tr><td style="vertical-align: top;">•</td><td>To be the most advanced in women & children’s healthcare.</td></tr>
                    <tr><td style="vertical-align: top;">•</td><td>To be the most trusted hospital brand.</td></tr>
                    <tr><td style="vertical-align: top;">•</td><td>To be the healthcare employer & partner of choice.</td></tr>
                </table>
                </small>
            </div>
        </div>
    </div>
</div>
@endsection

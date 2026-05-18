@extends('layouts.app')

@section('title', 'Summary')
@section('breadcrumb', 'Summary')

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
                <h4>Executive Summary</h4>
                <small>
                    This is a simple executive summary of the weekly reports.
                </small>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <small>
                    The purpose of this industrial training is to prepare students to enter the working world by exposing them to a real industry environment. 
                    The scope of tasks assigned by the polytechnic should be related to the tasks provided by the company chosen by the student so that students can further enhance their knowledge and skills in applying what they have learned at the Polytechnic.
                </small>
                </br></br>
                <small>
                    Among the scopes of work assigned to me during this industrial training were “Web and System Development” and “Bug Cleanup.” 
                    Overall, this report explains the projects, activities, and tasks that I carried out throughout my industrial training period of four (4) months and sixteen (16) days at Thomson Hospital Kota Damansara Sdn. Bhd.. 
                    Various tasks were successfully completed during my time here, and I was able to gain new skills and knowledge to further develop myself.
                </small>
                </br></br>
                <small>
                    In conclusion, the industrial training at Thomson Hospital Kota Damansara Sdn. Bhd. has provided me with valuable exposure to the real working environment and helped me improve both my technical and communication skills. 
                    Throughout the training period, I was involved in various tasks such as web and system development, bug fixing, and system maintenance, which allowed me to apply the knowledge learned at the Polytechnic into practical situations.
                </small>
            </div>
        </div>
    </div>
</div>
@endsection

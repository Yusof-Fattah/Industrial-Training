@extends('layouts.app')

@section('title', 'Technical')
@section('breadcrumb', 'Technical Report')

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

    h5,h4,h2{
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
                <h4>Technical Report</h4>
                <small>
                    This is a simple technical report information.
                </small>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <small>
                    During the span of my internship in Thomson Hospital Kota Damansara (THKD), I were task with wide range of 
                    responsibilities that allowed me to gain valuable experience in the information technology department within the healthcare industry. 
                    I am involved in various aspects of IT operations, including software development and maintenance and technical support. 
                    My role included assisting with software installations, troubleshooting technical issues, and providing user support. 
                    I also had the opportunity to work on projects related to improving hospital applications and enhancing user experience. 
                    Overall, my internship at THKD provided me with a comprehensive understanding of the healthcare and professional work environment and 
                    helped me develop essential skills for my future career in the industry.
                </small>
            </div>
        </div>
    </div>
</div>
@endsection

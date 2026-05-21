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

    .report-img {
        width: 400px;
        height: 300px;
        object-fit: cover;
        border-radius: 8px;
    }
    .carousel-item img {
        width: 400px;
        height: 300px;
        object-fit: contain;
        border-radius: 8px;
        cursor: pointer;
    }
    .report-img { cursor: pointer; }
    #lightboxModal .modal-dialog {
        max-width: 90vw;
    }
    #lightboxModal img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }

    h4,h2,strong{
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

    <div class="col-md-12 mb-3">
        <div class="card stat-card">
            <div class="card-body">
                <small>
                    During the span of my internship in Thomson Hospital Kota Damansara (THKD), I were task with wide range of 
                    responsibilities that allowed me to gain valuable experience in the information technology department within the healthcare industry. 
                    I am involved in various aspects of IT operations, including software development and maintenance and technical support.
                
                    </br></br>

                    My role included assisting with software installations, troubleshooting technical issues, and providing user support. 
                    I also had the opportunity to work on projects related to improving hospital applications and enhancing user experience. 
                    Overall, my internship at THKD provided me with a comprehensive understanding of the healthcare and professional work environment and 
                    helped me develop essential skills for my future career in the industry.
                </small>
            </div>
        </div>
    </div>

    <div class="col-md-8 offset-md-4">
        <div class="card stat-card outstanding-card text-end">
            <div class="card-body">
                <h5>Password Reset Request Management</h5>
                <small>
                    The reset password request feature was designed and implemented to allow users to securely recover access to their accounts within the Learning Management System (LMS).
                </small>
            </div>
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <div class="card stat-card">
            <div class="card-body d-flex flex-column-reverse flex-md-row-reverse gap-2">
                <div class="col-md-7">
                    <h4>Technical Execution</h4>
                    <small><strong>System Design and Implementation :</strong> The reset password request feature was designed and implemented to allow users to securely recover access to their accounts within the Learning Management System (LMS). The development 
                        process included creating user-friendly interfaces, integrating backend functionalities, and ensuring smooth communication between the system database and authentication modules.
                    </small>
                        </br></br>
                    <small><strong>Security and Authentication Features :</strong> Security measures were implemented to protect user accounts 
                        and sensitive information during the password reset process. This included email verification, secure token generation, password encryption, and validation mechanisms to prevent unauthorized access or misuse of the system.
                    </small>
                        </br></br>
                    <small><strong>Testing and Error Troubleshooting :</strong> Comprehensive testing was conducted to 
                        ensure the reset password request feature functioned correctly under different scenarios. Errors and bugs identified during testing were analyzed and resolved to improve system stability, reliability, and overall user experience within the LMS.
                    </small>
                    
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset($report1->img1) }}" class="d-block w-100 img-fluid rounded lightbox-img" alt="Image 1">
                                    </div>
                                    @if($report1->img2)
                                    <div class="carousel-item">
                                        <img src="{{ asset($report1->img2) }}" class="d-block w-100 img-fluid rounded lightbox-img" alt="Image 2">
                                    </div>
                                    @endif
                                    @if($report1->img3)
                                    <div class="carousel-item">
                                        <img src="{{ asset($report1->img3) }}" class="d-block w-100 img-fluid rounded lightbox-img" alt="Image 3">
                                    </div>
                                    @endif
                                </div>
                                <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </button>
                                <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card stat-card outstanding-card">
            <div class="card-body">
                <h5>Medical Record Receipt Printing</h5>
                <small>
                    This feature was developed to automate the generation of receipt slips for medical record transactions, improving efficiency and reducing human errors.
                </small>
                
            </div>
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <div class="card stat-card">
            <div class="card-body d-flex flex-column-reverse flex-md-row gap-2">
                <div class="col-md-7">
                    <h4>Technical Execution</h4>
                    <small><strong>Medical Record Receipt Printing Module :</strong> Developed a Medical Record Receipt Printing feature within 
                        the Medical Record Folder Tracker system to automate the generation of receipt slips for medical record transactions, 
                        improving efficiency and reducing human errors.
                    </small>
                        </br></br>
                    <small><strong>Database Integration and Record Tracking :</strong> Integrated the feature with the system database to 
                        retrieve and display accurate patient and folder tracking information, ensuring proper monitoring of medical record movement and receipt history.
                    </small>
                        </br></br>
                    <small><strong>Receipt Layout Design and Print Optimization :</strong> Designed and customized the receipt print layout to ensure clear formatting, 
                        user-friendly presentation, and compatibility with hospital printing requirements for daily operational use.
                    </small>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset($report2->img1) }}" class="d-block w-100 img-fluid rounded lightbox-img" alt="Image 1">
                                    </div>
                                    @if($report2->img2)
                                    <div class="carousel-item">
                                        <img src="{{ asset($report2->img2) }}" class="d-block w-100 img-fluid rounded lightbox-img" alt="Image 2">
                                    </div>
                                    @endif
                                    @if($report2->img3)
                                    <div class="carousel-item">
                                        <img src="{{ asset($report2->img3) }}" class="d-block w-100 img-fluid rounded lightbox-img" alt="Image 3">
                                    </div>
                                    @endif
                                </div>
                                <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </button>
                                <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-8 offset-md-4">
        <div class="card stat-card outstanding-card text-end">
            <div class="card-body">
                <h5 class="d-flex justify-content-end">Manual for Application Creation</h5>
                <small>
                    Manual for Application Creation was developed to provide comprehensive documentation and guidance for users on how to 
                    create and manage applications within the hospital's IT systems.
                </small>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card stat-card">
            <div class="card-body d-flex flex-column-reverse flex-md-row-reverse gap-2">
                <div class="col-md-7">
                    <h4>Technical Execution</h4>
                    <small><strong>Development of Step-by-Step User Guide :</strong>  Prepared a detailed application guide containing clear step-by-step instructions,
                         screenshots, and explanations for vendor and pro users. The documentation was designed to help users navigate the system easily and perform tasks correctly.
                    </small>
                        </br></br>
                    <small><strong>Coordination with Software Development Team :</strong>  Worked closely with developers and support teams to verify system functions and 
                        ensure all information in the manual was accurate and updated according to the latest application changes and features.
                    </small>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <div id="carousel3" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset($report3->img1) }}" class="d-block w-100 img-fluid rounded lightbox-img" alt="Image 1">
                                    </div>
                                    @if($report3->img2)
                                    <div class="carousel-item">
                                        <img src="{{ asset($report3->img2) }}" class="d-block w-100 img-fluid rounded lightbox-img" alt="Image 2">
                                    </div>
                                    @endif
                                </div>
                                <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </button>
                                <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Lightbox Modal -->
<div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 text-center">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-2" data-bs-dismiss="modal"></button>
                <img id="lightboxImage" src="" alt="Preview" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.querySelectorAll('.lightbox-img').forEach(img => {
        img.addEventListener('click', function () {
            document.getElementById('lightboxImage').src = this.src;
            new bootstrap.Modal(document.getElementById('lightboxModal')).show();
        });
    });
</script>
@endpush

@endsection

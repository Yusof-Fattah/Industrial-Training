<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Industrial Training') - Internship</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: #8B5CF6;
            --primary-dark: #7C3AED;
            --primary-light: #A78BFA;
            --primary-pale: #EDE9FE;
            --primary-xpale: #F5F3FF;
            --sidebar-bg: #1E1333;
            --sidebar-hover: #2D1F4A;
            --sidebar-active: #8B5CF6;
            --sidebar-text: #C4B5FD;
            --sidebar-muted: #6B5B9E;
            --accent: #DDD6FE;
            --surface: #FEFCFF;
            --border: #E9E3FF;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: linear-gradient(135deg, #F5F3FF 0%, #EDE9FE 50%, #F0EBFF 100%);
            background-attachment: fixed;
            min-height: 100vh;
            color: #1e1b4b;
        }

        /* ==================== SIDEBAR ==================== */
        .sidebar {
            position: fixed;
            top: 0; left: 0;
            width: 260px;
            height: 100vh;
            background: var(--sidebar-bg);
            color: white;
            z-index: 1000;
            overflow-y: auto;
            overflow-x: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 4px 0 20px rgba(139, 92, 246, 0.2);
            scrollbar-width: thin;
            scrollbar-color: #3D2B5C transparent;
        }

        .sidebar::-webkit-scrollbar { width: 4px; }
        .sidebar::-webkit-scrollbar-track { background: transparent; }
        .sidebar::-webkit-scrollbar-thumb { background: #3D2B5C; border-radius: 4px; }

        .sidebar-brand {
            padding: 1.5rem 1.25rem 1.25rem;
            border-bottom: 1px solid rgba(196, 181, 253, 0.1);
            background: linear-gradient(135deg, rgba(139, 92, 246, 0.15), rgba(109, 40, 217, 0.1));
        }

        .sidebar-brand h5 {
            margin: 0;
            font-weight: 700;
            font-size: 0.95rem;
            color: white;
            letter-spacing: 0.01em;
        }

        .sidebar-brand small {
            color: var(--sidebar-text);
            font-size: 0.72rem;
            letter-spacing: 0.03em;
        }

        .sidebar-nav { padding: 0.5rem 0 1rem; }

        .sidebar-nav .nav-label {
            padding: 1rem 1.25rem 0.3rem;
            font-size: 0.6rem;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: var(--sidebar-muted);
            font-weight: 700;
        }

        .sidebar-nav .nav-link {
            padding: 0.6rem 1.25rem;
            color: #b8a9e8;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.855rem;
            border-left: 3px solid transparent;
            transition: all 0.2s ease;
            border-radius: 0 8px 8px 0;
            margin: 1px 0.5rem 1px 0;
            position: relative;
        }

        .sidebar-nav .nav-link:hover {
            background: var(--sidebar-hover);
            color: var(--sidebar-text);
            border-left-color: rgba(139,92,246,0.4);
        }

        .sidebar-nav .nav-link.active {
            background: linear-gradient(135deg, rgba(139, 92, 246, 0.3), rgba(109, 40, 217, 0.2));
            color: #E9D5FF;
            border-left-color: var(--sidebar-active);
            font-weight: 600;
        }

        .sidebar-nav .nav-link.active i { color: #C4B5FD; }

        .sidebar-nav .nav-link i {
            font-size: 1rem;
            width: 18px;
            text-align: center;
            flex-shrink: 0;
        }

        .sidebar-nav .nav-link .nav-badge {
            margin-left: auto;
            background: rgba(139,92,246,0.3);
            color: #C4B5FD;
            font-size: 0.65rem;
            padding: 1px 6px;
            border-radius: 10px;
        }

        /* ==================== MAIN CONTENT ==================== */
        .main-content {
            margin-left: 260px;
            min-height: 100vh;
            transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* ==================== TOP NAVBAR ==================== */
        .top-navbar {
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            padding: 0.65rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 999;
            box-shadow: 0 1px 12px rgba(139,92,246,0.08);
        }

        .breadcrumb-area {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .breadcrumb-text {
            color: #6D28D9;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .user-avatar {
            width: 34px; height: 34px;
            background: linear-gradient(135deg, #8B5CF6, #7C3AED);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            color: white; font-weight: 700; font-size: 0.8rem;
            box-shadow: 0 2px 8px rgba(139,92,246,0.4);
            flex-shrink: 0;
        }

        .user-name { font-size: 0.84rem; font-weight: 600; color: #3B1F6B; }
        .user-role-badge {
            background: var(--primary-pale);
            color: var(--primary-dark);
            font-size: 0.68rem;
            padding: 2px 8px;
            border-radius: 10px;
            font-weight: 600;
            border: 1px solid var(--accent);
        }

        /* ==================== CONTENT ==================== */
        .content-wrapper { padding: 1.5rem; }

        /* ==================== CARDS ==================== */
        .card {
            border: 1px solid var(--border);
            border-radius: 1rem;
            box-shadow: 0 2px 8px rgba(139,92,246,0.07);
            background: rgba(255,255,255,0.95);
            transition: box-shadow 0.2s ease, transform 0.2s ease;
            max-height: 200vh;
        }

        .card:hover { box-shadow: 0 4px 20px rgba(139,92,246,0.12); }

        .card-header {
            background: rgba(245,243,255,0.7);
            border-bottom: 1px solid var(--border);
            padding: 0.9rem 1.25rem;
            font-weight: 600;
            border-radius: 1rem 1rem 0 0 !important;
            font-size: 0.9rem;
            color: #3B1F6B;
        }

        /* Stat Cards */
        .stat-card {
            border-radius: 1rem !important;
            transition: transform 0.2s ease, box-shadow 0.2s ease !important;
            cursor: default;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-4px) !important;
            box-shadow: 0 8px 25px rgba(139,92,246,0.18) !important;
        }

        .stat-card .card-body { padding: 1.25rem; }

        .stat-icon {
            width: 50px; height: 50px;
            border-radius: 0.75rem;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .stat-label { font-size: 0.75rem; color: #6b7280; font-weight: 500; }
        .stat-value { font-size: 1.45rem; font-weight: 700; line-height: 1.2; color: #1e1b4b; }
        .stat-value.small-value { font-size: 1.1rem; }

        /* ==================== TABLES ==================== */
        .table th {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: #7C3AED;
            font-weight: 700;
            border-bottom: 2px solid var(--border);
            background: var(--primary-xpale);
            padding: 0.75rem 1rem;
        }

        .table td {
            vertical-align: middle;
            font-size: 0.865rem;
            padding: 0.75rem 1rem;
            border-bottom: 1px solid #F3F0FF;
        }

        .table tbody tr {
            transition: background 0.15s ease;
        }

        .table-hover tbody tr:hover {
            background: var(--primary-xpale) !important;
        }

        .table tbody tr:last-child td { border-bottom: none; }

        /* ==================== BUTTONS ==================== */
        .btn-primary {
            background: linear-gradient(135deg, #8B5CF6, #7C3AED);
            border: none;
            box-shadow: 0 2px 8px rgba(139,92,246,0.35);
            font-weight: 500;
            transition: all 0.2s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #7C3AED, #6D28D9);
            box-shadow: 0 4px 16px rgba(139,92,246,0.45);
            transform: translateY(-1px);
        }
        .btn-primary:active, .btn-primary:focus {
            background: linear-gradient(135deg, #6D28D9, #5B21B6);
            box-shadow: 0 0 0 .25rem rgba(139,92,246,.4);
            transform: translateY(0);
        }

        .btn-outline-primary {
            color: var(--primary);
            border-color: var(--primary);
            font-weight: 500;
            transition: all 0.2s ease;
        }
        .btn-outline-primary:hover {
            background: var(--primary);
            border-color: var(--primary);
            color: white;
            box-shadow: 0 3px 10px rgba(139,92,246,0.3);
            transform: translateY(-1px);
        }

        .btn-outline-secondary { border-color: #D1C4E9; color: #6D28D9; }
        .btn-outline-secondary:hover { background: #EDE9FE; border-color: #B39DDB; color: #5B21B6; }

        /* ==================== FORM CONTROLS ==================== */
        .form-control, .form-select {
            border-color: #D1C4E9;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            transition: all 0.2s ease;
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 .25rem rgba(139,92,246,.2);
            background: white;
        }

        /* ==================== STATUS BADGES ==================== */
        .badge-draft { background: #9CA3AF; }
        .badge-submitted { background: #F59E0B; color: #000; }
        .badge-finance-approved { background: #8B5CF6; }
        .badge-it-approved { background: #A78BFA; }
        .badge-vendor-acknowledged { background: #06B6D4; }
        .badge-partially-paid { background: #F97316; }
        .badge-fully-paid { background: #22C55E; }
        .badge-rejected { background: #EF4444; }
        .badge-cancelled { background: #6B7280; }

        .badge {
            font-size: 0.7rem;
            padding: 4px 8px;
            border-radius: 6px;
            font-weight: 600;
            letter-spacing: 0.02em;
        }

        /* ==================== MISC ==================== */
        .bg-primary { background: linear-gradient(135deg, #8B5CF6, #7C3AED) !important; }
        .text-primary { color: var(--primary) !important; }
        a { color: var(--primary); transition: color 0.15s; }
        a:hover { color: var(--primary-dark); }
        .form-check-input:checked { background-color: var(--primary); border-color: var(--primary); }
        .page-link { color: var(--primary); border-color: var(--border); }
        .page-item.active .page-link { background-color: var(--primary); border-color: var(--primary); }
        .progress { background: var(--primary-pale); }
        .progress-bar { background: linear-gradient(135deg, #8B5CF6, #A78BFA); }

        /* ==================== ALERTS ==================== */
        .alert {
            border: none;
            border-radius: 0.75rem;
            font-size: 0.875rem;
            animation: slideInDown 0.3s ease;
        }

        .alert-success {
            background: linear-gradient(135deg, #D1FAE5, #A7F3D0);
            color: #065F46;
        }

        .alert-danger {
            background: linear-gradient(135deg, #FEE2E2, #FECACA);
            color: #991B1B;
        }

        /* ==================== PAGE HEADER ==================== */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 1.25rem 1.5rem;
            background: rgba(255,255,255,0.9);
            border-radius: 1rem;
            border: 1px solid var(--border);
            box-shadow: 0 2px 8px rgba(139,92,246,0.06);
        }

        .page-header h4 {
            margin: 0;
            font-weight: 700;
            color: #2E1065;
            font-size: 1.1rem;
        }

        /* ==================== FILTER CARD ==================== */
        .filter-card {
            background: rgba(255,255,255,0.9);
            border: 1px solid var(--border);
            border-radius: 0.875rem;
            padding: 1rem 1.25rem;
            margin-bottom: 1rem;
        }

        /* ==================== EMPTY STATE ==================== */
        .empty-state {
            text-align: center;
            padding: 3rem 2rem;
            color: #9CA3AF;
        }

        .empty-state i {
            font-size: 2.5rem;
            color: #DDD6FE;
            margin-bottom: 0.75rem;
        }

        /* ==================== TOOLTIPS ==================== */
        [data-bs-toggle="tooltip"] { cursor: help; }

        /* ==================== SCROLL TO TOP ==================== */
        #scrollTop {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 40px; height: 40px;
            background: linear-gradient(135deg, #8B5CF6, #7C3AED);
            color: white;
            border: none;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 9999;
            box-shadow: 0 4px 14px rgba(139,92,246,0.4);
            transition: all 0.2s ease;
        }

        #scrollTop:hover { transform: translateY(-3px); box-shadow: 0 6px 20px rgba(139,92,246,0.5); }
        #scrollTop.visible { display: flex; }

        /* ==================== LOADING SHIMMER ==================== */
        .shimmer {
            background: linear-gradient(90deg, #F3F0FF 25%, #E9E3FF 50%, #F3F0FF 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
        }

        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }

        /* ==================== TOAST ==================== */
        .toast-container {
            position: fixed;
            top: 1rem;
            right: 1rem;
            z-index: 10000;
        }

        .toast {
            background: rgba(255,255,255,0.95);
            border: 1px solid var(--border);
            border-radius: 0.75rem;
            box-shadow: 0 8px 24px rgba(139,92,246,0.2);
        }

        .toast-header {
            background: var(--primary-xpale);
            border-bottom: 1px solid var(--border);
            color: var(--primary-dark);
            font-weight: 600;
        }

        /* ==================== RESPONSIVE ==================== */
        @media (max-width: 768px) {
            .sidebar { transform: translateX(-100%); }
            .sidebar.show { transform: translateX(0); }
            .main-content { margin-left: 0; }
            .top-navbar { padding: 0.65rem 1rem; }
            .content-wrapper { padding: 1rem; }
            .page-header { flex-direction: column; gap: 0.75rem; align-items: flex-start; }
        }

        /* ==================== ANIMATIONS ==================== */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in-up { animation: fadeInUp 0.35s ease both; }

        .stagger-1 { animation-delay: 0.05s; }
        .stagger-2 { animation-delay: 0.1s; }
        .stagger-3 { animation-delay: 0.15s; }
        .stagger-4 { animation-delay: 0.2s; }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <div class="d-flex align-items-center gap-2">
                <div>
                    <h5>Industrial Training</h5>
                    <small>Muhamad Yusof Alfattah</small>
                </div>
            </div>
        </div>

        <div class="sidebar-nav">
             <div class="nav-label">Home</div>
            <a href="{{ route('mainpage') }}" class="nav-link">
                <i class="bi bi-person-square"></i> Mainpage
            </a>
            <a href="{{ route('summary') }}" class="nav-link">
                <i class="bi bi-text-paragraph"></i> Executive Summary
            </a>
            <a href="{{ route('company') }}" class="nav-link">
                <i class="bi bi-building"></i> Company
            </a>

            <div class="nav-label">Reports</div>
            <a href="{{ route('weekly') }}" class="nav-link">
                <i class="bi bi-calendar-week"></i> Weekly
            </a>
             <a href="{{ route('technical') }}" class="nav-link">
                <i class="bi bi-back"></i> Technical
            </a>
            
            <div class="nav-label">Statements</div>
            <a href="{{ route('reference') }}" class="nav-link">
                <i class="bi bi-view-list"></i> Reference
            </a>
            <a href="{{ route('conclusion') }}" class="nav-link">
                <i class="bi bi-chat-right"></i> Conclusion
            </a>
        </div>

        <!-- Sidebar Footer -->
        <div style="padding: 1rem 1.25rem; border-top: 1px solid rgba(196,181,253,0.1); margin-top: auto;">
            <div style="font-size:0.72rem; color: var(--sidebar-muted); text-align:center;">
                &copy; {{ date('Y') }} Politeknik Sultan Idris Shah<br>All rights reserved.
            </div>
        </div>
    </nav>

    <!-- Sidebar Overlay (mobile) -->
    <div id="sidebarOverlay" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.5);z-index:999;" onclick="closeSidebar()"></div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Top Navbar -->
        <div class="top-navbar">
            <div class="breadcrumb-area">
                <button class="btn btn-sm d-md-none" style="background:var(--primary-pale);color:var(--primary);border:none;border-radius:8px;width:34px;height:34px;display:flex;align-items:center;justify-content:center;" onclick="toggleSidebar()">
                    <i class="bi bi-list fs-5"></i>
                </button>
                <i class="bi bi-chevron-right text-muted small d-none d-md-inline"></i>
                <span class="breadcrumb-text">@yield('breadcrumb')</span>
            </div>
        </div>

        <!-- Content -->
        <div class="content-wrapper">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                    <i class="bi bi-exclamation-circle-fill me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                    <strong><i class="bi bi-exclamation-triangle-fill me-2"></i>Please fix the following errors:</strong>
                    <ul class="mb-0 mt-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- Scroll to Top -->
    <button id="scrollTop" title="Back to top"><i class="bi bi-arrow-up"></i></button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Sidebar toggle
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('show');
            document.getElementById('sidebarOverlay').style.display =
                document.getElementById('sidebar').classList.contains('show') ? 'block' : 'none';
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.remove('show');
            document.getElementById('sidebarOverlay').style.display = 'none';
        }

        // Scroll to top
        const scrollBtn = document.getElementById('scrollTop');
        window.addEventListener('scroll', () => {
            scrollBtn.classList.toggle('visible', window.scrollY > 300);
        });
        scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

        // Initialize tooltips
        document.addEventListener('DOMContentLoaded', () => {
            const tooltipEls = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            tooltipEls.forEach(el => new bootstrap.Tooltip(el, { trigger: 'hover' }));

            // Auto-dismiss alerts after 5s
            document.querySelectorAll('.alert.alert-success').forEach(el => {
                setTimeout(() => {
                    const bsAlert = bootstrap.Alert.getOrCreateInstance(el);
                    bsAlert.close();
                }, 5000);
            });

            // Animate stat cards
            document.querySelectorAll('.stat-card, .fade-in-up').forEach((el, i) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(16px)';
                setTimeout(() => {
                    el.style.transition = 'opacity 0.35s ease, transform 0.35s ease';
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, i * 60);
            });

            // Add row click highlight
            document.querySelectorAll('.table tbody tr[data-href]').forEach(row => {
                row.style.cursor = 'pointer';
                row.addEventListener('click', () => window.location = row.dataset.href);
            });

            // Number counter animation
            document.querySelectorAll('.counter-animate').forEach(el => {
                const target = parseFloat(el.dataset.target);
                const isDecimal = el.dataset.decimal === 'true';
                let start = 0;
                const step = target / 40;
                const interval = setInterval(() => {
                    start += step;
                    if (start >= target) { start = target; clearInterval(interval); }
                    el.textContent = isDecimal ? start.toLocaleString('en-MY', {minimumFractionDigits:2, maximumFractionDigits:2}) : Math.floor(start).toLocaleString();
                }, 30);
            });
        });
    </script>
    @stack('scripts')
</body>
</html>

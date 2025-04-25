<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techlynxx Dashboard</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #6366f1;
            --primary-light: #a5b4fc;
            --primary-dark: #4f46e5;
            --sidebar-bg: #1e293b;
            --sidebar-active: #334155;
            --content-bg: #f8fafc;
            --card-bg: #ffffff;
            --text-dark: #0f172a;
            --text-gray: #64748b;
            --border-color: #e2e8f0;
            --success: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            --glass-effect: rgba(255, 255, 255, 0.08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyfAZ9hiA.woff2) format('woff2');
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: var(--content-bg);
            color: var(--text-dark);
        }

        /* Glassmorphism Sidebar */
        .sidebar {
            width: 280px;
            background: var(--sidebar-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            height: 100vh;
            position: fixed;
            border-right: 1px solid var(--glass-effect);
            z-index: 100;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .sidebar-header {
            padding: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid var(--glass-effect);
        }

        .sidebar-header .logo {
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar-header .logo img {
            width: 32px;
            height: 32px;
            border-radius: 8px;
        }

        .sidebar-menu {
            padding: 16px 0;
        }

        .sidebar-menu h3 {
            padding: 0 24px 12px;
            font-size: 0.75rem;
            text-transform: uppercase;
            color: rgba(203, 213, 225, 0.6);
            letter-spacing: 0.5px;
        }

        .sidebar-menu ul {
            list-style: none;
        }

        .sidebar-menu li a {
            display: flex;
            align-items: center;
            padding: 14px 24px;
            color: #cbd5e1;
            text-decoration: none;
            transition: all 0.2s;
            margin: 0 8px;
            border-radius: 8px;
        }

        .sidebar-menu li a:hover {
            background: var(--glass-effect);
            color: white;
        }

        .sidebar-menu li a.active {
            background: var(--sidebar-active);
            color: white;
            font-weight: 500;
        }

        .sidebar-menu li a i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            font-size: 1.1rem;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 280px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Floating Top Navigation */
        .top-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 16px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 90;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background-color: #f1f5f9;
            border-radius: 10px;
            padding: 10px 16px;
            width: 400px;
            transition: all 0.2s;
        }

        .search-bar:focus-within {
            box-shadow: 0 0 0 3px var(--primary-light);
        }

        .search-bar input {
            border: none;
            background: transparent;
            width: 100%;
            padding: 4px;
            outline: none;
            font-size: 0.95rem;
        }

        .search-bar i {
            color: var(--text-gray);
            margin-right: 10px;
        }

        .user-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .notification-bell {
            position: relative;
            color: var(--text-gray);
            cursor: pointer;
        }

        .notification-badge {
            position: absolute;
            top: -4px;
            right: -4px;
            background-color: var(--danger);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.65rem;
            font-weight: 600;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        .user-profile img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--primary-light);
        }

        .user-info h4 {
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--text-dark);
        }

        .user-info p {
            font-size: 0.8rem;
            color: var(--text-gray);
        }

        /* Dashboard Content */
        .dashboard-content {
            padding: 32px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .page-header h1 {
            color: var(--text-dark);
            font-size: 2rem;
            font-weight: 700;
        }

        /* Modern Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
            margin-bottom: 32px;
        }

        .stat-card {
            background-color: var(--card-bg);
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border-color);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.05);
        }

        .stat-card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 16px;
        }

        .stat-card-header h3 {
            font-size: 0.95rem;
            color: var(--text-gray);
            font-weight: 500;
        }

        .stat-card-header .icon-wrapper {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            background-color: rgba(99, 102, 241, 0.1);
        }

        .stat-card-body h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 8px;
        }

        .stat-card-body p {
            display: flex;
            align-items: center;
            font-size: 0.85rem;
            color: var(--text-gray);
        }

        .stat-card-body p i {
            margin-right: 6px;
            font-size: 0.7rem;
        }

        .positive {
            color: var(--success);
        }

        .negative {
            color: var(--danger);
        }

        /* Modern Activity Feed */
        .activity-card {
            background-color: var(--card-bg);
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border-color);
        }

        .activity-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .activity-card-header h2 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .activity-card-header a {
            font-size: 0.9rem;
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s;
        }

        .activity-card-header a:hover {
            color: var(--primary-dark);
        }

        .activity-list {
            list-style: none;
        }

        .activity-item {
            display: flex;
            padding: 16px 0;
            border-bottom: 1px solid var(--border-color);
            align-items: flex-start;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background-color: rgba(99, 102, 241, 0.1);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
            flex-shrink: 0;
        }

        .activity-content {
            flex: 1;
        }

        .activity-content h4 {
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--text-dark);
            margin-bottom: 6px;
        }

        .activity-content p {
            font-size: 0.85rem;
            color: var(--text-gray);
            line-height: 1.5;
        }

        .activity-time {
            font-size: 0.8rem;
            color: var(--text-gray);
            margin-left: 16px;
            text-align: right;
            white-space: nowrap;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .sidebar {
                width: 240px;
            }

            .main-content {
                margin-left: 240px;
            }
        }

        @media (max-width: 992px) {
            .sidebar {
                width: 80px;
                overflow: hidden;
            }

            .sidebar-header .logo span,
            .sidebar-menu h3,
            .sidebar-menu li a span {
                display: none;
            }

            .sidebar-menu li a {
                justify-content: center;
                padding: 16px;
                margin: 0;
                border-radius: 0;
            }

            .sidebar-menu li a i {
                margin-right: 0;
            }

            .main-content {
                margin-left: 80px;
            }

            .search-bar {
                width: 240px;
            }
        }

        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }

            .search-bar {
                display: none;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }
        }

        @media (max-width: 576px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .dashboard-content {
                padding: 24px 16px;
            }

            .activity-item {
                flex-direction: column;
            }

            .activity-time {
                margin-left: 56px;
                margin-top: 8px;
                text-align: left;
            }
        }
        .project-title {
            color: #ffffff;
            text-decoration: none;
            font-size: 30px;
            text-transform: uppercase;
        }


        .dashboard-content {
            max-width: 100%;
            margin: 0 auto;
        }


        /* Responsive adjustments */
        @media (max-width: 768px) {
            .dashboard-content {
                padding: 0 15px;
            }
        }

        .space-top {
            margin-top: 30px;
        }

    </style>
</head>
<body>
<!-- Glassmorphism Sidebar -->
<aside class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="project-title">
            Techlynxx
        </a>
    </div>

    <div class="sidebar-menu">
        <h3>Main</h3>
        <ul>
            <li><a href="#" class="active"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="#"><i class="fas fa-database"></i> <span>Datasets</span></a></li>
        </ul>

        <h3>Settings</h3>
        <ul>
            <li><a href="#"><i class="fas fa-user-cog"></i> <span>Profile</span></a></li>
            <li><a href="#"><i class="fas fa-cog"></i> <span>Settings</span></a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
        </ul>
    </div>
</aside>

<!-- Main Content -->
<main class="main-content">
    <!-- Floating Top Navigation -->
    <nav class="top-nav">
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search datasets, models...">
        </div>

        <div class="user-actions">
            <div class="notification-bell">
                <i class="fas fa-bell"></i>
                <span class="notification-badge">3</span>
            </div>
            <div class="user-profile">
                <img src="https://avatars.githubusercontent.com/u/34066051?v=4" alt="User">
                <div class="user-info">
                    <h4>Awais Juno</h4>
                    <p>Developer</p>
                </div>
            </div>
        </div>
    </nav>
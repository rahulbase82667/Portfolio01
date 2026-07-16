<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baseline IT — Admin Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>

<body>

    <div class="login-page show" id="loginPage">
        <div class="login-card">
            <div class="login-logo">
                <div class="login-mark">B</div>
                <div>
                    <div style="font-family:var(--font-head);font-weight:800;font-size:16px">Baseline IT</div>
                    <div style="font-size:11px;color:var(--text-3);letter-spacing:0.06em;text-transform:uppercase">Admin Panel</div>
                </div>
            </div>
            <div class="login-title">Welcome back 👋</div>
            <div class="login-sub">Sign in to manage your portfolio</div>

            @if ($errors->any())
                <div style="background:rgba(255,71,87,0.12);color:#ff4757;padding:10px 14px;border-radius:8px;font-size:13px;margin-bottom:14px">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}" class="login-form">
                @csrf
                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <div class="input-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="4" width="20" height="16" rx="2" />
                            <polyline points="2,4 12,13 22,4" />
                        </svg>
                        <input type="email" name="email" class="form-input" placeholder="admin@baselineit.com" value="{{ old('email') }}" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" />
                            <path d="M7 11V7a5 5 0 0110 0v4" />
                        </svg>
                        <input type="password" name="password" class="form-input" placeholder="••••••••" required>
                    </div>
                </div>
                <div class="login-options">
                    <label class="checkbox-label">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                    <span class="forgot-link">Forgot password?</span>
                </div>
                <button type="submit" class="login-btn">Sign In to Dashboard</button>
            </form>

            <div class="login-footer">
                Baseline IT Development &copy; 2025 &mdash; Admin v2.0
            </div>
        </div>
    </div>

</body>
</html>
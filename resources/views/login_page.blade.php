<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk & Daftar | Katalog IDN</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@400;600;700&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        try {
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        "colors": {
                            "surface": "#fbf9f8",
                            "on-surface-variant": "#514532",
                            "primary": "#7c5800",
                            "primary-container": "#ffb800",
                            "on-primary-fixed": "#271900",
                            "on-surface": "#1b1c1c",
                            "secondary": "#5f5e5e",
                            "error": "#ba1a1a",
                            "error-container": "#ffdad6",
                            "on-error-container": "#93000a",
                            "outline-variant": "#d5c4ab",
                            "surface-container-lowest": "#ffffff",
                            "surface-container-low": "#f5f3f3",
                            "surface-bright": "#fbf9f8",
                            "background": "#fbf9f8",
                            "surface-variant": "#e4e2e2"
                        },
                        "spacing": {
                            "margin-mobile": "16px",
                            "container-max": "1280px",
                            "stack-sm": "12px",
                            "gutter": "24px",
                            "stack-lg": "48px",
                            "base": "8px",
                            "stack-md": "24px",
                            "margin-desktop": "40px"
                        }
                    }
                }
            }
        } catch (_e) {}
    </script>
    <style>
        @keyframes pageFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body {
            animation: pageFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-background min-h-screen flex text-on-surface">

<main class="flex w-full min-h-screen">
    <!-- Right Side: Login Form -->
    <div class="w-full flex items-center justify-center p-margin-mobile md:p-margin-desktop bg-surface-bright relative py-stack-lg">
        
        <!-- Login Card -->
        <div class="w-full max-w-md bg-surface-container-lowest border border-surface-variant rounded-2xl p-6 sm:p-8 shadow-[0px_4px_20px_rgba(0,0,0,0.04)] my-auto">
            
            <div class="mb-6 text-center">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-primary text-[32px]" style="font-variation-settings: 'FILL' 1;">local_mall</span>
                    <a href="{{ route('home') }}" class="font-headline-md text-headline-md text-on-surface font-bold hover:text-primary transition-colors">Katalog IDN</a>
                </div>
                <p class="font-body-sm text-body-sm text-secondary">Solusi katalog & belanja terpercaya UMKM Indonesia.</p>
            </div>

            <!-- Alert Notifications -->
            @if(session('error'))
            <div class="mb-4 p-3.5 bg-error-container text-on-error-container rounded-xl text-xs text-center font-bold">
                {{ session('error') }}
            </div>
            @endif
            @if(session('success'))
            <div class="mb-4 p-3.5 bg-emerald-100 text-emerald-800 rounded-xl text-xs text-center font-bold">
                {{ session('success') }}
            </div>
            @endif
            @if(session('info'))
            <div class="mb-4 p-3.5 bg-amber-100 text-amber-800 rounded-xl text-xs text-center font-bold">
                {{ session('info') }}
            </div>
            @endif

            <!-- Tab Buttons -->
            <div class="flex border-b border-outline-variant mb-6">
                <button id="tab-login-btn" onclick="switchAuthTab('login')" class="flex-1 py-3 font-label-md text-label-md border-b-2 border-primary text-primary font-bold transition-all">
                    Sign In (Masuk)
                </button>
                <button id="tab-register-btn" onclick="switchAuthTab('register')" class="flex-1 py-3 font-label-md text-label-md border-b-2 border-transparent text-secondary hover:text-on-surface transition-all">
                    Sign Up (Daftar)
                </button>
            </div>

            <!-- LOGIN FORM -->
            <form id="form-login" action="{{ route('login.post') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-on-surface mb-1.5" for="login-email">Email Address</label>
                    <input class="w-full h-12 px-4 text-sm bg-surface border border-outline-variant rounded-xl text-on-surface placeholder:text-secondary focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="login-email" name="email" value="{{ old('email') }}" placeholder="you@company.com" required type="email">
                </div>
                <div>
                    <label class="block text-xs font-bold text-on-surface mb-1.5" for="login-password">Password</label>
                    <div class="relative">
                        <input class="w-full h-12 px-4 pr-12 text-sm bg-surface border border-outline-variant rounded-xl text-on-surface placeholder:text-secondary focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="login-password" name="password" placeholder="••••••••" required type="password">
                        <button type="button" onclick="togglePasswordVisibility('login-password', 'login-pwd-icon')" class="absolute right-3 top-1/2 -translate-y-1/2 text-secondary hover:text-on-surface transition-colors p-1" title="Tampilkan / Sembunyikan Password">
                            <span id="login-pwd-icon" class="material-symbols-outlined text-xl">visibility</span>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between py-1">
                    <label class="flex items-center gap-2 cursor-pointer group">
                        <input name="remember" class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary focus:ring-2 focus:ring-offset-0 bg-surface" type="checkbox">
                        <span class="text-xs text-secondary group-hover:text-primary transition-colors">Remember Me</span>
                    </label>
                </div>
                <button class="w-full h-12 bg-primary-container text-on-primary-fixed font-bold text-sm rounded-xl hover:bg-[#e6a600] active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-sm" type="submit">
                    Sign In
                    <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </button>
            </form>

            <!-- REGISTER FORM (Hidden by default) -->
            <form id="form-register" action="{{ route('register.post') }}" method="POST" class="space-y-4 hidden">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-on-surface mb-1.5" for="reg-name">Nama Lengkap</label>
                    <input class="w-full h-12 px-4 text-sm bg-surface border border-outline-variant rounded-xl text-on-surface placeholder:text-secondary focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="reg-name" name="name" placeholder="John Doe" required type="text">
                </div>
                <div>
                    <label class="block text-xs font-bold text-on-surface mb-1.5" for="reg-email">Email Address</label>
                    <input class="w-full h-12 px-4 text-sm bg-surface border border-outline-variant rounded-xl text-on-surface placeholder:text-secondary focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="reg-email" name="email" placeholder="you@company.com" required type="email">
                </div>
                <div>
                    <label class="block text-xs font-bold text-on-surface mb-1.5" for="reg-role">Daftar Sebagai</label>
                    <select id="reg-role" name="role" onchange="toggleStoreNameField()" class="w-full h-12 px-4 text-sm bg-surface border border-outline-variant rounded-xl text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all cursor-pointer">
                        <option value="customer">Pembeli (Customer)</option>
                        <option value="seller">Penjual (Seller / Toko)</option>
                    </select>
                </div>
                <div id="store-name-field" class="hidden">
                    <label class="block text-xs font-bold text-on-surface mb-1.5" for="reg-store">Nama Toko</label>
                    <input class="w-full h-12 px-4 text-sm bg-surface border border-outline-variant rounded-xl text-on-surface placeholder:text-secondary focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="reg-store" name="nama_toko" placeholder="Contoh: Toko Berkah Bali" type="text">
                </div>
                <div>
                    <label class="block text-xs font-bold text-on-surface mb-1.5" for="reg-password">Password</label>
                    <div class="relative">
                        <input class="w-full h-12 px-4 pr-12 text-sm bg-surface border border-outline-variant rounded-xl text-on-surface placeholder:text-secondary focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="reg-password" name="password" placeholder="Minimal 6 karakter" required type="password">
                        <button type="button" onclick="togglePasswordVisibility('reg-password', 'reg-pwd-icon')" class="absolute right-3 top-1/2 -translate-y-1/2 text-secondary hover:text-on-surface transition-colors p-1" title="Tampilkan / Sembunyikan Password">
                            <span id="reg-pwd-icon" class="material-symbols-outlined text-xl">visibility</span>
                        </button>
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-on-surface mb-1.5" for="reg-password-confirm">Konfirmasi Password</label>
                    <div class="relative">
                        <input class="w-full h-12 px-4 pr-12 text-sm bg-surface border border-outline-variant rounded-xl text-on-surface placeholder:text-secondary focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="reg-password-confirm" name="password_confirmation" placeholder="Ulangi password" required type="password">
                        <button type="button" onclick="togglePasswordVisibility('reg-password-confirm', 'reg-pwd-confirm-icon')" class="absolute right-3 top-1/2 -translate-y-1/2 text-secondary hover:text-on-surface transition-colors p-1" title="Tampilkan / Sembunyikan Password">
                            <span id="reg-pwd-confirm-icon" class="material-symbols-outlined text-xl">visibility</span>
                        </button>
                    </div>
                </div>
                <button class="w-full h-12 bg-primary text-on-primary font-bold text-sm rounded-xl hover:bg-[#684900] active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-sm" type="submit">
                    Buat Akun Sekarang
                    <span class="material-symbols-outlined text-lg">person_add</span>
                </button>
            </form>

            <!-- Divider & Google Sign-In -->
            <div class="my-6 flex items-center justify-center gap-4">
                <div class="h-px bg-outline-variant flex-1"></div>
                <span class="text-xs text-secondary font-medium">atau masuk dengan</span>
                <div class="h-px bg-outline-variant flex-1"></div>
            </div>

            <!-- Google OAuth Button -->
            <a href="{{ route('auth.google') }}" class="w-full h-12 bg-white border border-outline-variant text-on-surface font-bold text-sm rounded-xl hover:bg-surface-container-low active:scale-[0.98] transition-all flex items-center justify-center gap-3 shadow-xs">
                <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24">
                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                </svg>
                <span>Masuk dengan Google</span>
            </a>

            <script>
                function switchAuthTab(tab) {
                    const loginForm = document.getElementById('form-login');
                    const regForm = document.getElementById('form-register');
                    const loginBtn = document.getElementById('tab-login-btn');
                    const regBtn = document.getElementById('tab-register-btn');

                    if (tab === 'login') {
                        loginForm.classList.remove('hidden');
                        regForm.classList.add('hidden');
                        loginBtn.classList.add('border-primary', 'text-primary', 'font-bold');
                        loginBtn.classList.remove('border-transparent', 'text-secondary');
                        regBtn.classList.remove('border-primary', 'text-primary', 'font-bold');
                        regBtn.classList.add('border-transparent', 'text-secondary');
                    } else {
                        loginForm.classList.add('hidden');
                        regForm.classList.remove('hidden');
                        regBtn.classList.add('border-primary', 'text-primary', 'font-bold');
                        regBtn.classList.remove('border-transparent', 'text-secondary');
                        loginBtn.classList.remove('border-primary', 'text-primary', 'font-bold');
                        loginBtn.classList.add('border-transparent', 'text-secondary');
                    }
                }

                function toggleStoreNameField() {
                    const roleSelect = document.getElementById('reg-role');
                    const storeField = document.getElementById('store-name-field');
                    if (roleSelect.value === 'seller') {
                        storeField.classList.remove('hidden');
                    } else {
                        storeField.classList.add('hidden');
                    }
                }

                function togglePasswordVisibility(inputId, iconId) {
                    const input = document.getElementById(inputId);
                    const icon = document.getElementById(iconId);
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.textContent = 'visibility_off';
                    } else {
                        input.type = 'password';
                        icon.textContent = 'visibility';
                    }
                }
            </script>
        </div>

        <!-- Footer Copyright -->
        <div class="absolute bottom-4 text-center w-full right-0 px-4">
            <p class="text-xs text-secondary">© 2026 Katalog IDN. Harga Terjangkau, Kualitas Terjamin.</p>
        </div>
    </div>
</main>

</body>
</html>
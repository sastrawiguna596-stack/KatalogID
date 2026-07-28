<!DOCTYPE html><html lang="en" class="light"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@400;600;700&amp;display=swap" rel="stylesheet"><script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script><script id="tailwind-config">try{
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-fixed-dim": "#c8c6c5",
                        "surface-variant": "#e4e2e2",
                        "on-secondary-fixed": "#1c1b1b",
                        "primary": "#7c5800",
                        "on-primary-fixed": "#271900",
                        "surface-tint": "#7c5800",
                        "surface": "#fbf9f8",
                        "surface-dim": "#dbdad9",
                        "secondary-container": "#e5e2e1",
                        "surface-container-high": "#e9e8e7",
                        "inverse-on-surface": "#f2f0f0",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed": "#e2e3e1",
                        "secondary": "#5f5e5e",
                        "on-secondary-container": "#656464",
                        "error-container": "#ffdad6",
                        "on-tertiary-fixed-variant": "#454746",
                        "on-tertiary-fixed": "#1a1c1b",
                        "surface-container-highest": "#e4e2e2",
                        "surface-container": "#efeded",
                        "secondary-fixed": "#e5e2e1",
                        "tertiary-fixed-dim": "#c6c7c5",
                        "on-background": "#1b1c1c",
                        "on-error": "#ffffff",
                        "on-error-container": "#93000a",
                        "tertiary-container": "#c4c5c3",
                        "inverse-primary": "#ffba20",
                        "on-tertiary-container": "#505250",
                        "error": "#ba1a1a",
                        "on-secondary-fixed-variant": "#474646",
                        "background": "#fbf9f8",
                        "surface-bright": "#fbf9f8",
                        "on-primary-fixed-variant": "#5e4200",
                        "on-primary": "#ffffff",
                        "on-surface-variant": "#514532",
                        "primary-container": "#ffb800",
                        "inverse-surface": "#303031",
                        "outline-variant": "#d5c4ab",
                        "on-primary-container": "#6b4c00",
                        "surface-container-low": "#f5f3f3",
                        "on-surface": "#1b1c1c",
                        "primary-fixed-dim": "#ffba20",
                        "primary-fixed": "#ffdea8",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary": "#ffffff",
                        "tertiary": "#5d5f5d",
                        "outline": "#837560"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
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
                },
            },
        }
    }catch(_e){}</script>
<style>
    @keyframes pageFadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    body {
        animation: pageFadeIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) ease-out forwards;
    }
</style>
<meta charset="utf-8"></head><body class="bg-background min-h-screen flex text-on-background font-body-md">
<!-- Suppressed TopNavBar due to Login intent (Linear/Transactional) -->
<main class="flex w-full min-h-screen">
<!-- Split Screen Layout -->
<!-- Left Side: Image (Visible on Desktop/Tablet) -->

<!-- Right Side: Login Form -->
<div class="w-full flex items-center justify-center p-margin-mobile md:p-margin-desktop bg-surface-bright relative py-stack-lg">
<!-- Mobile Brand Logo (hidden on md+) -->

<!-- Login Card (Level 1 Surface) -->
<div class="w-full max-w-md bg-surface-container-lowest border border-surface-variant rounded-xl p-gutter shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
    <div class="mb-stack-lg text-center">
        <div class="flex items-center justify-center gap-2 mb-base">
            <span class="material-symbols-outlined text-primary-container text-[32px]" style="font-variation-settings: 'FILL' 1;">local_mall</span>
            <a href="{{ route('home') }}" class="font-headline-md text-headline-md text-on-surface font-bold hover:text-primary transition-colors">Katalog IDN</a>
        </div>
        <p class="font-body-sm text-body-sm text-on-surface-variant">Solusi katalog & belanja terpercaya UMKM Indonesia.</p>
    </div>

    <!-- Alert Notifications -->
    @if(session('error'))
    <div class="mb-4 p-3 bg-error-container text-on-error-container rounded-lg text-body-sm text-center font-bold">
        {{ session('error') }}
    </div>
    @endif
    @if(session('success'))
    <div class="mb-4 p-3 bg-emerald-100 text-emerald-800 rounded-lg text-body-sm text-center font-bold">
        {{ session('success') }}
    </div>
    @endif
    @if(session('info'))
    <div class="mb-4 p-3 bg-amber-100 text-amber-800 rounded-lg text-body-sm text-center font-bold">
        {{ session('info') }}
    </div>
    @endif

    <!-- Tab Buttons -->
    <div class="flex border-b border-outline-variant mb-6">
        <button id="tab-login-btn" onclick="switchAuthTab('login')" class="flex-1 py-3 font-label-md text-label-md border-b-2 border-primary text-primary font-bold">
            Sign In (Masuk)
        </button>
        <button id="tab-register-btn" onclick="switchAuthTab('register')" class="flex-1 py-3 font-label-md text-label-md border-b-2 border-transparent text-secondary hover:text-on-surface">
            Sign Up (Daftar)
        </button>
    </div>

    <!-- LOGIN FORM -->
    <form id="form-login" action="{{ route('login.post') }}" method="POST" class="space-y-stack-md">
        @csrf
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-base" for="login-email">Email Address</label>
            <input class="w-full h-[48px] px-4 font-body-sm text-body-sm bg-surface border border-outline-variant rounded-lg text-on-surface placeholder:text-on-surface-variant focus:outline-none input-glow transition-all" id="login-email" name="email" value="{{ old('email') }}" placeholder="you@company.com" required type="email">
        </div>
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-base" for="login-password">Password</label>
            <div class="relative">
                <input class="w-full h-[48px] px-4 font-body-sm text-body-sm bg-surface border border-outline-variant rounded-lg text-on-surface placeholder:text-on-surface-variant focus:outline-none input-glow transition-all pr-12" id="login-password" name="password" placeholder="••••••••" required type="password">
            </div>
        </div>
        <div class="flex items-center justify-between py-base">
            <label class="flex items-center gap-2 cursor-pointer group">
                <input name="remember" class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary-container focus:ring-2 focus:ring-offset-0 bg-surface" type="checkbox">
                <span class="font-body-sm text-body-sm text-on-surface group-hover:text-primary transition-colors">Remember Me</span>
            </label>
        </div>
        <button class="w-full h-[48px] bg-primary-container text-on-primary-fixed font-label-md text-label-md font-bold rounded-lg hover:bg-[#e6a600] active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-sm" type="submit">
            Sign In
            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
        </button>
    </form>

    <!-- REGISTER FORM (Hidden by default) -->
    <form id="form-register" action="{{ route('register.post') }}" method="POST" class="space-y-stack-md hidden">
        @csrf
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-base" for="reg-name">Nama Lengkap</label>
            <input class="w-full h-[48px] px-4 font-body-sm text-body-sm bg-surface border border-outline-variant rounded-lg text-on-surface placeholder:text-on-surface-variant focus:outline-none input-glow transition-all" id="reg-name" name="name" placeholder="John Doe" required type="text">
        </div>
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-base" for="reg-email">Email Address</label>
            <input class="w-full h-[48px] px-4 font-body-sm text-body-sm bg-surface border border-outline-variant rounded-lg text-on-surface placeholder:text-on-surface-variant focus:outline-none input-glow transition-all" id="reg-email" name="email" placeholder="you@company.com" required type="email">
        </div>
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-base" for="reg-role">Daftar Sebagai</label>
            <select id="reg-role" name="role" onchange="toggleStoreNameField()" class="w-full h-[48px] px-4 font-body-sm text-body-sm bg-surface border border-outline-variant rounded-lg text-on-surface focus:outline-none input-glow transition-all">
                <option value="customer">Pembeli (Customer)</option>
                <option value="seller">Penjual (Seller / Toko)</option>
            </select>
        </div>
        <div id="store-name-field" class="hidden">
            <label class="block font-label-md text-label-md text-on-surface mb-base" for="reg-store">Nama Toko</label>
            <input class="w-full h-[48px] px-4 font-body-sm text-body-sm bg-surface border border-outline-variant rounded-lg text-on-surface placeholder:text-on-surface-variant focus:outline-none input-glow transition-all" id="reg-store" name="nama_toko" placeholder="Contoh: Toko Berkah" type="text">
        </div>
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-base" for="reg-password">Password</label>
            <input class="w-full h-[48px] px-4 font-body-sm text-body-sm bg-surface border border-outline-variant rounded-lg text-on-surface placeholder:text-on-surface-variant focus:outline-none input-glow transition-all" id="reg-password" name="password" placeholder="Minimal 6 karakter" required type="password">
        </div>
        <div>
            <label class="block font-label-md text-label-md text-on-surface mb-base" for="reg-password-confirm">Konfirmasi Password</label>
            <input class="w-full h-[48px] px-4 font-body-sm text-body-sm bg-surface border border-outline-variant rounded-lg text-on-surface placeholder:text-on-surface-variant focus:outline-none input-glow transition-all" id="reg-password-confirm" name="password_confirmation" placeholder="Ulangi password" required type="password">
        </div>
        <button class="w-full h-[48px] bg-primary text-on-primary font-label-md text-label-md font-bold rounded-lg hover:bg-[#684900] active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-sm" type="submit">
            Buat Akun Sekarang
            <span class="material-symbols-outlined text-[18px]">person_add</span>
        </button>
    </form>

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
    </script>
</div>
<!-- Bottom minimal copyright for contextual grounding -->
<div class="absolute bottom-margin-mobile md:bottom-margin-desktop text-center w-full right-0 px-margin-mobile">
<p class="font-body-sm text-body-sm text-secondary-fixed-dim">© 2026 Katalog IDN. Harga Terjangkau, Kualitas Terjamin.</p>
</div>
</div>
</main>
<!-- Suppressed Footer due to Login intent -->

</body></html>
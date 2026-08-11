<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Add New User | Luminous Commerce</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600&amp;family=Hanken+Grotesk:wght@600;700;800&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100..900&amp;family=Plus+Jakarta+Sans:wght@100..900&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-fixed-variant": "#454746",
                        "surface-container-low": "#f5f3f3",
                        "on-primary-container": "#6b4c00",
                        "primary": "#7c5800",
                        "inverse-surface": "#303031",
                        "background": "#fbf9f8",
                        "tertiary-container": "#c4c5c3",
                        "inverse-on-surface": "#f2f0f0",
                        "on-primary": "#ffffff",
                        "on-tertiary-container": "#505250",
                        "error-container": "#ffdad6",
                        "primary-container": "#ffb800",
                        "on-primary-fixed-variant": "#5e4200",
                        "tertiary": "#5d5f5d",
                        "tertiary-fixed": "#e2e3e1",
                        "primary-fixed": "#ffdea8",
                        "on-tertiary-fixed": "#1a1c1b",
                        "secondary-fixed": "#e5e2e1",
                        "secondary-container": "#e5e2e1",
                        "outline-variant": "#d5c4ab",
                        "error": "#ba1a1a",
                        "surface-dim": "#dbdad9",
                        "surface-variant": "#e4e2e2",
                        "on-tertiary": "#ffffff",
                        "surface-container-high": "#e9e8e7",
                        "on-error": "#ffffff",
                        "secondary": "#5f5e5e",
                        "on-surface": "#1b1c1c",
                        "on-error-container": "#93000a",
                        "inverse-primary": "#ffba20",
                        "surface-container-lowest": "#ffffff",
                        "on-background": "#1b1c1c",
                        "surface-container": "#efeded",
                        "primary-fixed-dim": "#ffba20",
                        "on-secondary-container": "#656464",
                        "on-surface-variant": "#514532",
                        "on-primary-fixed": "#271900",
                        "surface-tint": "#7c5800",
                        "on-secondary-fixed-variant": "#474646",
                        "tertiary-fixed-dim": "#c6c7c5",
                        "on-secondary-fixed": "#1c1b1b",
                        "outline": "#837560",
                        "surface-bright": "#fbf9f8",
                        "secondary-fixed-dim": "#c8c6c5",
                        "on-secondary": "#ffffff",
                        "surface": "#fbf9f8",
                        "surface-container-highest": "#e4e2e2"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "stack-sm": "12px",
                        "stack-lg": "48px",
                        "margin-desktop": "40px",
                        "stack-md": "24px",
                        "margin-mobile": "16px",
                        "base": "8px",
                        "container-max": "1280px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Hanken Grotesk"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "headline-xl": ["Hanken Grotesk"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "headline-xl-mobile": ["Hanken Grotesk"],
                        "headline-lg-mobile": ["Hanken Grotesk"],
                        "headline-md": ["Hanken Grotesk"],
                        "headline-sm": ["Hanken Grotesk"],
                        "label-md": ["Hanken Grotesk"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "headline-xl-mobile": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                        "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "700"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "label-md": ["14px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .active-nav-line {
            position: relative;
        }
        .active-nav-line::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #7c5800; /* Primary Amber */
        }
        .toggle-checkbox:checked + .toggle-label {
            background-color: #7c5800;
        }
        .toggle-checkbox:checked + .toggle-label .toggle-dot {
            transform: translateX(100%);
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface">
<!-- Side Navigation Shell (from JSON) -->
<aside class="h-screen w-64 flex flex-col fixed left-0 top-0 border-r border-outline-variant bg-surface p-base gap-stack-sm z-50">
<div class="flex flex-col gap-1 mb-stack-md px-2">
<h1 class="font-headline-sm text-headline-sm font-bold text-on-surface">Luminous Commerce</h1>
<p class="text-label-md font-label-md text-secondary uppercase tracking-widest">Admin Portal</p>
</div>
<nav class="flex-1 flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 text-secondary hover:text-primary transition-colors font-label-md text-label-md group" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-primary border-b-2 border-primary pb-1 font-label-md text-label-md group active" href="#">
<span class="material-symbols-outlined">group</span>
<span>User Management</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-secondary hover:text-primary transition-colors font-label-md text-label-md group" href="#">
<span class="material-symbols-outlined">inventory_2</span>
<span>Inventory</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-secondary hover:text-primary transition-colors font-label-md text-label-md group" href="#">
<span class="material-symbols-outlined">shopping_cart</span>
<span>Orders</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-secondary hover:text-primary transition-colors font-label-md text-label-md group" href="#">
<span class="material-symbols-outlined">analytics</span>
<span>Analytics</span>
</a>
</nav>
<div class="mt-auto border-t border-outline-variant pt-stack-sm flex flex-col gap-2">
<button class="flex items-center gap-3 px-3 py-2 text-secondary hover:text-primary transition-colors font-label-md text-label-md">
<span class="material-symbols-outlined">settings</span>
<span>Settings</span>
</button>
<button class="flex items-center gap-3 px-3 py-2 text-secondary hover:text-primary transition-colors font-label-md text-label-md">
<span class="material-symbols-outlined">help_outline</span>
<span>Support</span>
</button>
<div class="mt-stack-sm p-3 bg-surface-container rounded-lg flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container font-bold text-xs">A</div>
<div class="flex flex-col">
<span class="text-body-sm font-semibold">Admin User</span>
<span class="text-[10px] text-secondary uppercase">Super Admin</span>
</div>
</div>
</div>
</aside>
<!-- Top Navigation Shell (from JSON) -->
<header class="fixed top-0 right-0 left-64 h-16 bg-surface border-b border-outline-variant flex items-center justify-between px-margin-desktop z-40">
<div class="flex items-center flex-1 max-w-xl">
</div>
<div class="flex items-center gap-stack-md">
<button class="p-2 text-secondary hover:bg-surface-container-low rounded-full transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
</button>
<button class="p-2 text-secondary hover:bg-surface-container-low rounded-full transition-colors">
<span class="material-symbols-outlined">settings</span>
</button>
<button class="flex items-center gap-2 bg-primary text-on-primary px-4 py-2 rounded-lg font-label-md text-label-md hover:brightness-90 active:scale-95 transition-all">
<span>View Storefront</span>
<span class="material-symbols-outlined text-[18px]">open_in_new</span>
</button>
</div>
</header>
<!-- Main Content Canvas -->
<main class="ml-64 pt-24 px-margin-desktop pb-stack-lg min-h-screen max-w-container-max mx-auto">
<!-- Breadcrumbs & Header -->
<div class="mb-stack-md mb-12">
<div class="flex items-center gap-2 text-secondary text-body-sm mb-2"><span class="text-on-surface font-semibold">Add New User</span></div>
<h2 class="font-headline-lg text-headline-lg text-on-surface">Add New User Account</h2>
<p class="text-secondary text-body-md mt-1">Create a new profile for a team member or customer with specific permissions.</p>
</div>
<!-- Form Layout (Bento Grid Style) -->
<form class="flex flex-col gap-gutter max-w-2xl mx-auto">
<!-- Left Column: Primary Details -->
<div class="flex flex-col gap-gutter">
<!-- Basic Info Card -->
<div class="bg-surface-container-lowest border border-[#EDEDED] p-gutter rounded-xl">
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">person</span>
                        Account Details
                    </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md text-secondary" for="fullname">FULL NAME</label>
<input class="w-full px-4 py-3 rounded-lg border border-outline-variant focus:border-on-surface focus:ring-4 focus:ring-primary-container/20 transition-all outline-none text-body-md" id="fullname" placeholder="e.g. Julianne Moore" type="text"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md text-secondary" for="email">EMAIL ADDRESS</label>
<input class="w-full px-4 py-3 rounded-lg border border-outline-variant focus:border-on-surface focus:ring-4 focus:ring-primary-container/20 transition-all outline-none text-body-md" id="email" placeholder="julianne@example.com" type="email"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md text-secondary" for="password">PASSWORD</label>
<div class="relative">
<input class="w-full px-4 py-3 rounded-lg border border-outline-variant focus:border-on-surface focus:ring-4 focus:ring-primary-container/20 transition-all outline-none text-body-md" id="password" placeholder="••••••••" type="password"/>
<button class="absolute right-3 top-1/2 -translate-y-1/2 text-secondary hover:text-primary" type="button">
<span class="material-symbols-outlined">visibility</span>
</button>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-label-md font-label-md text-secondary" for="role">ASSIGN ROLE</label>
<div class="relative">
<select class="w-full px-4 py-3 rounded-lg border border-outline-variant focus:border-on-surface focus:ring-4 focus:ring-primary-container/20 appearance-none transition-all outline-none text-body-md bg-transparent cursor-pointer" id="role">
<option value="customer">Customer</option>
<option value="seller">Seller</option>
<option value="admin">Administrator</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-secondary">expand_more</span>
</div>
</div>
</div>
</div>
<!-- Settings Card -->
<div class="bg-surface-container-lowest border border-[#EDEDED] p-gutter rounded-xl">
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">security</span>
                        Access &amp; Security
                    </h3>
<div class="flex flex-col gap-stack-md">
<div class="flex items-center justify-between group p-3 hover:bg-surface-container-low rounded-lg transition-colors cursor-pointer">
<div class="flex flex-col">
<span class="text-body-md font-semibold text-on-surface">Send welcome email</span>
<span class="text-body-sm text-secondary">The user will receive an automated invitation with their login details.</span>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only toggle-checkbox" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container-highest rounded-full toggle-label transition-colors duration-200">
<div class="toggle-dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition-transform duration-200"></div>
</div>
</label>
</div>
<div class="flex items-center justify-between group p-3 hover:bg-surface-container-low rounded-lg transition-colors cursor-pointer">
<div class="flex flex-col">
<span class="text-body-md font-semibold text-on-surface">Require password change</span>
<span class="text-body-sm text-secondary">Forces the user to set a new password upon their very first login.</span>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only toggle-checkbox" type="checkbox"/>
<div class="w-11 h-6 bg-surface-container-highest rounded-full toggle-label transition-colors duration-200">
<div class="toggle-dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition-transform duration-200"></div>
</div>
</label>
</div>
</div>
</div>
</div>
<!-- Right Column: Profile & Actions -->
<div class="bg-surface-container-lowest border border-[#EDEDED] p-gutter rounded-xl flex flex-col gap-4 mt-4"><button class="w-full py-4 bg-primary text-on-primary rounded-lg font-headline-sm text-headline-sm hover:brightness-90 active:scale-98 transition-all shadow-sm" type="submit">Save User</button><button class="w-full py-4 bg-transparent border-2 border-on-surface text-on-surface rounded-lg font-headline-sm text-headline-sm hover:bg-on-surface hover:text-white active:scale-98 transition-all" type="button">Cancel</button></div></form>
</main>
<script>
        // Simple micro-interaction for form focus
        const inputs = document.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.querySelector('label')?.classList.add('text-primary');
            });
            input.addEventListener('blur', () => {
                input.parentElement.querySelector('label')?.classList.remove('text-primary');
            });
        });

        // Mock "Save" functionality
        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = e.target.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span> Creating...';
            btn.disabled = true;
            
            setTimeout(() => {
                btn.innerHTML = '<span class="material-symbols-outlined">check_circle</span> User Created!';
                btn.classList.replace('bg-primary', 'bg-green-600');
                
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.classList.replace('bg-green-600', 'bg-primary');
                    btn.disabled = false;
                }, 2000);
            }, 1500);
        });
    </script>
</body></html>
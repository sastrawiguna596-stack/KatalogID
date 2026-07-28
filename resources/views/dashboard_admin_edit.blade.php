<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Edit User | Luminous Commerce</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600&amp;family=Hanken+Grotesk:wght@600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(8px);
            border: 1px solid #EDEDED;
        }
        .active-nav-line {
            position: relative;
        }
        .active-nav-line::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #7c5800; /* Primary Amber */
        }
    </style>
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
</head>
<body class="bg-surface font-body-md text-on-surface min-h-screen">
<!-- SideNavBar Anchor -->
<aside class="h-screen w-64 flex flex-col fixed left-0 top-0 border-r border-outline-variant bg-surface p-base gap-stack-sm z-40">
<div class="flex items-center gap-3 mb-stack-lg px-2">
<div class="w-10 h-10 bg-primary-container rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-on-primary-container" style="font-variation-settings: 'FILL' 1;">light_mode</span>
</div>
<div>
<h1 class="font-headline-sm text-headline-sm font-bold text-on-surface">Luminous</h1>
<p class="font-label-md text-[10px] uppercase tracking-widest text-secondary">Admin Portal</p>
</div>
</div>
<nav class="flex-1 flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 text-secondary hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span> Dashboard
            </a>
<a class="flex items-center gap-3 px-3 py-2 text-primary border-b-2 border-primary pb-1 font-label-md text-label-md" href="#">
<span class="material-symbols-outlined" data-icon="group" style="font-variation-settings: 'FILL' 1;">group</span> User Management
            </a>
<a class="flex items-center gap-3 px-3 py-2 text-secondary hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span> Inventory
            </a>
<a class="flex items-center gap-3 px-3 py-2 text-secondary hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span> Orders
            </a>
<a class="flex items-center gap-3 px-3 py-2 text-secondary hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined" data-icon="analytics">analytics</span> Analytics
            </a>
</nav>
<div class="mt-auto flex flex-col gap-2 pt-stack-sm border-t border-outline-variant">
<a class="flex items-center gap-3 px-3 py-2 text-secondary hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span> Settings
            </a>
<a class="flex items-center gap-3 px-3 py-2 text-secondary hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined" data-icon="help_outline">help_outline</span> Support
            </a>
</div>
</aside>
<!-- Main Content Area -->
<main class="ml-64 min-h-screen">
<!-- TopNavBar Anchor -->
<header class="sticky top-0 z-30 bg-surface flex justify-between items-center h-16 px-margin-desktop border-b border-outline-variant">
<div class="flex items-center gap-4">
<nav class="flex items-center gap-2 font-label-md text-label-md text-secondary">
<span>User Management</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
<span class="text-on-surface font-bold">Edit User</span>
</nav>
</div>
<div class="flex items-center gap-6">
<div class="relative group">
<span class="material-symbols-outlined text-secondary cursor-pointer hover:text-primary transition-colors">notifications</span>
<span class="absolute top-0 right-0 w-2 h-2 bg-primary rounded-full"></span>
</div>
<div class="flex items-center gap-3">
<div class="text-right">
<p class="font-label-md text-label-md text-on-surface">Alex Rivera</p>
<p class="text-[11px] text-secondary">Super Admin</p>
</div>
<img class="w-10 h-10 rounded-full border-2 border-primary-fixed shadow-sm" data-alt="Professional studio portrait of a modern executive in a neutral colored linen shirt, soft natural lighting, warm minimalist aesthetic consistent with the Luminous Commerce brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAid02Y9Qe1XcsQddZ4YM2ylPdt3hhxTeZ-nN3MqdvxRzyfXHB30Rj1WqEoClAOwi8jZwewMgJkKWKJEkSImtjpGm_UgW8XhLlJC0uhSMPEQgUmB03MFwGnl_5tYSy3vqyskqqXrbfhhRi_UBQZWHrH0uFydfzyZWxbXn9hmZM23g6cROcTqTvAcpqKGUP9wIgu7LS34VE5sQYWM2uM3DJ1H1yOgEDQelIJNaYfRx1Df7km8yO21S28"/>
</div>
</div>
</header>
<!-- Content Canvas -->
<div class="p-margin-desktop max-w-container-max mx-auto">
<!-- Page Title & Actions -->
<div class="flex justify-between items-center mb-stack-md pb-6 border-b border-outline-variant"><div class="flex items-center gap-4"><img class="w-16 h-16 rounded-full border border-outline-variant object-cover" data-alt="John Doe" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOeM9m4BGVA7hfINAphzWBMVvxfaiFdNq_3N2xVUMumPt4ztZmJybM7c4I6Gy8BVNa6kRmGy9r3JkzIwjH3_QY79Ezap7fget6yrA3cB43eQHkqIROzRFstT_lKSV-N2EO9r7xwyOYQwpjD8G95psoBnCwM26CO18tqibX9kd_0gHWXE9pS_v4plnpRb90hm5rp9A4FZOVDhv81ifYjPgntXP_DV5rj_gMPT-uXijpmJUWtHxZjIM9"/><div><h2 class="font-headline-md text-headline-md text-on-surface">John Doe</h2><div class="flex gap-2 mt-1"><span class="text-body-sm text-secondary">Seller</span><span class="text-body-sm text-primary">•</span><span class="text-body-sm text-secondary">Active</span></div></div></div><div class="flex gap-3"><button class="px-4 py-2 rounded-lg border border-error text-error hover:bg-error-container transition-all font-label-md text-label-md">Delete</button><button class="px-4 py-2 rounded-lg bg-primary text-on-primary hover:brightness-90 transition-all font-label-md text-label-md">Update Profile</button></div></div>
<!-- Grid Layout -->
<div class="max-w-3xl flex flex-col gap-stack-lg"><section class="flex flex-col gap-6"><div><div class="flex items-center gap-2 mb-4"><span class="material-symbols-outlined text-primary">person</span><h3 class="font-headline-sm text-headline-sm">Basic Information</h3></div><div class="grid grid-cols-2 gap-4"><div class="flex flex-col gap-1"><label class="text-label-md text-secondary">Full Name</label><input class="w-full px-3 py-2 rounded-lg border border-outline-variant focus:border-on-surface outline-none" type="text" value="John Doe"/></div><div class="flex flex-col gap-1"><label class="text-label-md text-secondary">Email Address</label><input class="w-full px-3 py-2 rounded-lg border border-outline-variant focus:border-on-surface outline-none" type="email" value="john.doe@example.com"/></div><div class="flex flex-col gap-1"><label class="text-label-md text-secondary">Phone Number</label><input class="w-full px-3 py-2 rounded-lg border border-outline-variant focus:border-on-surface outline-none" type="tel" value="+1 (555) 0123-4567"/></div><div class="flex flex-col gap-1"><label class="text-label-md text-secondary">Location</label><input class="w-full px-3 py-2 rounded-lg border border-outline-variant focus:border-on-surface outline-none" type="text" value="Austin, TX, USA"/></div></div></div><div class="pt-6 border-t border-outline-variant"><div class="flex items-center gap-2 mb-4"><span class="material-symbols-outlined text-primary">verified_user</span><h3 class="font-headline-sm text-headline-sm">Account Status</h3></div><div class="flex flex-col gap-4"><div class="flex justify-between items-center"><p class="text-body-md">Current Role: <span class="font-bold">Standard Seller</span></p><button class="text-primary text-label-md">Change</button></div><div class="flex items-center gap-3"><div class="relative"><input checked="" class="sr-only peer" type="checkbox"/><div class="w-10 h-5 bg-surface-variant rounded-full peer-checked:bg-primary-container"></div><div class="absolute left-1 top-1 w-3 h-3 bg-white rounded-full peer-checked:translate-x-5 transition-transform"></div></div><span class="text-body-md">Two-factor authentication</span></div></div></div><div class="pt-6 border-t border-outline-variant"><div class="flex items-center gap-2 mb-4"><span class="material-symbols-outlined text-primary">history</span><h3 class="font-headline-sm text-headline-sm">Recent Activity</h3></div><div class="flex flex-col gap-3"><div class="flex justify-between text-body-sm"><p>Account Login • Chrome on MacOS</p><p class="text-secondary">2h ago</p></div><div class="flex justify-between text-body-sm"><p>Added New Product • Vintage Leather Satchel</p><p class="text-secondary">Yesterday</p></div><div class="flex justify-between text-body-sm"><p>Updated Store Header</p><p class="text-secondary">Oct 24</p></div></div></div></section></div>
</div>
</main>
<script>
        // Simple Interaction logic
        document.querySelectorAll('input, textarea').forEach(el => {
            el.addEventListener('focus', function() {
                this.parentElement.querySelector('label').classList.add('text-primary');
            });
            el.addEventListener('blur', function() {
                this.parentElement.querySelector('label').classList.remove('text-primary');
            });
        });

        // Toggle Switch Animation logic
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const thumb = this.nextElementSibling.nextElementSibling;
                if (this.checked) {
                    thumb.classList.add('translate-x-5');
                } else {
                    thumb.classList.remove('translate-x-5');
                }
            });
        });
    </script>
</body></html>
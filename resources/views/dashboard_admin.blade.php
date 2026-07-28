<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>User Management | Luminous Commerce</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #d5c4ab; border-radius: 10px; }
        .active-nav-line::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #7c5800;
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md">
<!-- Side Navigation Shell -->
<aside class="h-screen w-64 flex flex-col fixed left-0 top-0 bg-surface border-r border-outline-variant z-50">
<div class="flex flex-col p-base gap-stack-sm h-full">
<div class="px-4 py-6">
<div class="flex items-center gap-3">
<div class="w-10 h-10 bg-primary-container rounded-lg flex items-center justify-center text-on-primary-container shadow-sm">
<span class="material-symbols-outlined">electric_bolt</span>
</div>
<div>
<h1 class="font-headline-sm text-headline-sm font-bold text-on-surface leading-tight">Luminous</h1>
<p class="text-[10px] font-label-md uppercase tracking-widest text-secondary opacity-70">Admin Portal</p>
</div>
</div>
</div>
<nav class="flex-1 space-y-1">
<a class="group flex items-center px-4 py-3 text-secondary hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined mr-3">dashboard</span>
                    Dashboard
                </a>
<a class="group flex items-center px-4 py-3 text-primary border-b-2 border-primary pb-1 transition-colors font-label-md text-label-md active:scale-98" href="#">
<span class="material-symbols-outlined mr-3">group</span>
                    User Management
                </a>
<a class="group flex items-center px-4 py-3 text-secondary hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined mr-3">inventory_2</span>
                    Inventory
                </a>
<a class="group flex items-center px-4 py-3 text-secondary hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined mr-3">shopping_cart</span>
                    Orders
                </a>
<a class="group flex items-center px-4 py-3 text-secondary hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined mr-3">analytics</span>
                    Analytics
                </a>
</nav>
<div class="mt-auto border-t border-outline-variant pt-4 pb-6 space-y-1">
<a class="group flex items-center px-4 py-3 text-secondary hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined mr-3">settings</span>
                    Settings
                </a>
<a class="group flex items-center px-4 py-3 text-secondary hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined mr-3">help_outline</span>
                    Support
                </a>
<div class="px-4 mt-4">
<button class="w-full py-2 border-2 border-on-surface text-on-surface font-label-md text-label-md rounded-lg hover:bg-on-surface hover:text-surface transition-all active:scale-95">
                        View Storefront
                    </button>
</div>
</div>
</div>
</aside>
<!-- Top App Bar -->
<header class="ml-64 h-16 sticky top-0 z-40 bg-surface border-b border-outline-variant flex justify-between items-center px-margin-desktop">
<div class="flex items-center flex-1 max-w-xl relative">
<span class="material-symbols-outlined absolute left-3 text-secondary">search</span>
<input class="w-full bg-surface-container-low border-none rounded-lg pl-10 pr-4 py-2 text-body-sm focus:ring-2 focus:ring-primary-container transition-all" placeholder="Search users, roles, or status..." type="text"/>
</div>
<div class="flex items-center gap-stack-md">
<button class="relative p-2 text-secondary hover:bg-surface-container-low rounded-full transition-colors active:scale-95">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-1.5 right-1.5 w-2 h-2 bg-error rounded-full"></span>
</button>
<button class="p-2 text-secondary hover:bg-surface-container-low rounded-full transition-colors active:scale-95">
<span class="material-symbols-outlined">settings</span>
</button>
<div class="h-8 w-[1px] bg-outline-variant mx-2"></div>
<div class="flex items-center gap-3">
<div class="text-right hidden sm:block">
<p class="font-label-md text-label-md text-on-surface">Alex Rivera</p>
<p class="text-[10px] text-secondary font-medium uppercase">Master Admin</p>
</div>
<img class="w-10 h-10 rounded-full border border-outline-variant object-cover" data-alt="A professional headshot of a Hispanic male administrator with a warm, confident expression. He is wearing a minimalist charcoal polo shirt against a clean, soft-lit studio background with warm amber highlights reflecting the brand's aesthetic. High-quality corporate photography, shallow depth of field." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVozx4oMIlwMuWedNcUOfGDzIxPt4knVIbsOF-PH6ofhmoHGzrr8bvwIb8zMHt88UoC8pgBKagyIUihiHWfY5kZx_iG-jTHr9dioEziYQlGRS_Cq0dZiI7cYDA0JUi7JABCpizdZdF-1g15GQaIlouXJArYUPJqdcUHaOYycuMgVxJdWIiiYt0tOH0wZSqgUe3O7leRcBcuZdUOd4krSypn5fVi2OU0vA_w7eRtp42zdtC7MkmlFjJ"/>
</div>
</div>
</header>
<!-- Main Content Canvas -->
<main class="ml-64 p-margin-desktop min-h-[calc(100vh-64px)]">
<div class="max-w-container-max mx-auto">
<!-- Header & Action Row -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-stack-md mb-stack-lg">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface">User Management</h2>
<p class="text-secondary font-body-md">Manage roles, permissions and account statuses for your commerce ecosystem.</p>
</div>
<button class="flex items-center gap-2 border-2 border-primary text-primary px-6 py-2 rounded-lg font-label-md text-label-md font-bold hover:bg-primary hover:text-on-primary active:scale-98 transition-all">
<span class="material-symbols-outlined text-[20px]">person_add</span>
                    ADD NEW USER
                </button>
</div>
<!-- Stats Bento Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-stack-lg"><div class="flex flex-col md:flex-row gap-stack-md border-b border-outline-variant pb-6 mb-6"><div class="flex-1"><p class="text-secondary font-label-md text-label-md mb-1">Total Users</p><h3 class="text-headline-md font-headline-md text-on-surface">12,482</h3></div><div class="w-[1px] bg-outline-variant hidden md:block"></div><div class="flex-1"><p class="text-secondary font-label-md text-label-md mb-1">Active Sellers</p><h3 class="text-headline-md font-headline-md text-on-surface">843</h3></div><div class="w-[1px] bg-outline-variant hidden md:block"></div><div class="flex-1"><p class="text-secondary font-label-md text-label-md mb-1">Pending Verifications</p><h3 class="text-headline-md font-headline-md text-on-surface">27</h3></div></div></div>
<!-- Table Section -->
<div class="bg-surface-container-lowest border border-[#EDEDED] rounded-xl overflow-hidden">
<div class="p-6 border-b border-outline-variant flex flex-col sm:flex-row justify-between items-center gap-4">
<div class="flex items-center gap-4 w-full sm:w-auto"><div class="relative group"><select class="appearance-none bg-surface-container-low border-none rounded-lg pl-4 pr-10 py-2 text-body-sm font-medium focus:ring-2 focus:ring-primary transition-all cursor-pointer"><option>Any Status</option><option>Active</option><option>Suspended</option><option>Pending</option></select><span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-secondary text-[18px]">expand_more</span></div></div>
<div class="text-secondary font-body-sm">
                        Showing <span class="font-bold text-on-surface">1-10</span> of <span class="font-bold text-on-surface">843</span> users
                    </div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="bg-surface-container-low text-secondary font-label-md text-[12px] uppercase tracking-wider">
<th class="px-6 py-4 font-semibold">User Details</th>
<th class="px-6 py-4 font-semibold">Role</th>
<th class="px-6 py-4 font-semibold">Status</th>
<th class="px-6 py-4 font-semibold text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-[#EDEDED]">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-low/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<img class="w-10 h-10 rounded-lg object-cover bg-surface-variant" data-alt="A detailed headshot of a creative professional woman in her early 30s with stylish glasses and a neutral beige sweater. The lighting is bright and airy with a minimalist studio vibe. The color palette features soft whites and warm wood tones to match the e-commerce admin aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjjyMzni9bUvYAXdRMUVkL5HqTb_BtGW3MHWS-dv-omtb-Pv4NngzHIExVXSsq0i_P-l2O4aYfMkxC2vG2PJSqDN_B-GApNdM-6DRCRgjSE3Rrb9PkWUlKdii1SqPmFataERQdZg8kZJnIgSedXPqW9AbakGgIFJDj_sDBpkAKuELsMNCPupgcnNmdfRbJO-J-lYhc6VYAfRaEFhzOuzdCq8NFLW0tTARux0KADav6ZCI2mivzjPL0"/>
<div>
<p class="font-body-md text-on-surface font-semibold">Sarah Jenkins</p>
<p class="text-body-sm text-secondary">sarah.j@lumistore.com</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed text-[12px] font-bold rounded-full">SELLER</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="w-2 h-2 bg-success-container bg-green-500 rounded-full"></span>
<span class="text-body-sm font-medium text-on-surface">Active</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="p-2 hover:bg-surface-container-low rounded-lg transition-colors text-secondary hover:text-primary">
<span class="material-symbols-outlined">more_vert</span>
</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-low/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<img class="w-10 h-10 rounded-lg object-cover bg-surface-variant" data-alt="A close-up portrait of a mature man with a salt-and-pepper beard, wearing a tailored charcoal blazer over a white shirt. He has a professional and reliable demeanor. The setting is a blurred modern office environment with warm morning sunlight. The aesthetic is clean, professional, and high-end." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnuV8SHUsvCKvE5cvOuQXc6dUc0tcgUa8iwrmmeSBrMiRtq7gEYBvjCYblMQAna5nK0JCKelHdO2urB0XzR2i5NqSjMy-jMyMnu0o3EJZaZNzJn-b0HQ5UcemwGygPMXyQPY3AGzW3NlVhMahGtMZY-4SJgphfMzObjOOjRHLkSaeBmtWH1rQIF6FLrVN7BvsNUT2NtycuYYcM6phH69z3RHEyypvvjqfSud2xJZ9pJkHW38jfm2sq"/>
<div>
<p class="font-body-md text-on-surface font-semibold">Marcus Thorne</p>
<p class="text-body-sm text-secondary">m.thorne@globalops.net</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-inverse-surface text-inverse-on-surface text-[12px] font-bold rounded-full">ADMIN</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="w-2 h-2 bg-green-500 rounded-full"></span>
<span class="text-body-sm font-medium text-on-surface">Active</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="p-2 hover:bg-surface-container-low rounded-lg transition-colors text-secondary hover:text-primary">
<span class="material-symbols-outlined">more_vert</span>
</button>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-low/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-secondary font-bold">
                                            EL
                                        </div>
<div>
<p class="font-body-md text-on-surface font-semibold">Elena Lopez</p>
<p class="text-body-sm text-secondary">elena.shop@cloudmail.com</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-secondary-container text-on-secondary-container text-[12px] font-bold rounded-full">CUSTOMER</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="w-2 h-2 bg-error rounded-full"></span>
<span class="text-body-sm font-medium text-on-surface">Suspended</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="p-2 hover:bg-surface-container-low rounded-lg transition-colors text-secondary hover:text-primary">
<span class="material-symbols-outlined">more_vert</span>
</button>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-low/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<img class="w-10 h-10 rounded-lg object-cover bg-surface-variant" data-alt="A portrait of a young tech-savvy man with short curly hair, wearing a minimalist black hoodie. The background is a crisp white with a soft amber spotlight. He has a friendly, approachable look typical for a modern e-commerce platform user. High-key lighting, professional headshot style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPrsDrjJNF4JJG8wDv5eL0lzg8R5f7OHpbTh3lxMAXpqjDBXYXYNhrOGmBN66dRsJHNNgV43zAR--og3pm0ghRXLU9MRkETF4Nx3A4QvzzmCtMP9Qmh0gzWUHc4f8Gk4KorZeClhJTaOqXRD5sZZRA_mgjZQG48_lKY7rSunx-pghoaheEEaMFMpR0j8RGLutGu0hBBBcbYqsjkKt99U-y_Pz2c7Ez4UcplrmtPpJLjQSUZH2e-_zC"/>
<div>
<p class="font-body-md text-on-surface font-semibold">David Chen</p>
<p class="text-body-sm text-secondary">dchen88@techlink.io</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed text-[12px] font-bold rounded-full">SELLER</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="w-2 h-2 bg-green-500 rounded-full"></span>
<span class="text-body-sm font-medium text-on-surface">Active</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="p-2 hover:bg-surface-container-low rounded-lg transition-colors text-secondary hover:text-primary">
<span class="material-symbols-outlined">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Footer -->
<div class="p-6 border-t border-[#EDEDED] flex justify-between items-center bg-surface">
<button class="px-4 py-2 border border-outline-variant rounded-lg text-body-sm font-medium text-secondary hover:bg-surface-container-low transition-all disabled:opacity-50" disabled="">
                        Previous
                    </button>
<div class="flex items-center gap-2">
<button class="w-8 h-8 flex items-center justify-center rounded-lg bg-primary text-on-primary text-body-sm font-bold">1</button>
<button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-surface-container-low text-body-sm transition-colors">2</button>
<button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-surface-container-low text-body-sm transition-colors">3</button>
<span class="px-2 text-secondary">...</span>
<button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-surface-container-low text-body-sm transition-colors">84</button>
</div>
<button class="px-4 py-2 border border-outline-variant rounded-lg text-body-sm font-medium text-secondary hover:bg-surface-container-low transition-all">
                        Next
                    </button>
</div>
</div>
</div>
</main>
<!-- Floating Action Feedback (JS micro-interaction) -->
<div class="fixed bottom-8 right-8 bg-inverse-surface text-inverse-on-surface px-6 py-3 rounded-lg shadow-2xl transform translate-y-24 transition-transform duration-500 flex items-center gap-3" id="toast">
<span class="material-symbols-outlined text-primary-container">check_circle</span>
<span class="text-body-sm font-medium" id="toast-message">User updated successfully.</span>
</div>
<script>
        // Simple micro-interaction for the actions menu (Conceptual)
        document.querySelectorAll('table button').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const toast = document.getElementById('toast');
                const msg = document.getElementById('toast-message');
                msg.textContent = "Action menu opened for user.";
                toast.classList.remove('translate-y-24');
                setTimeout(() => {
                    toast.classList.add('translate-y-24');
                }, 3000);
            });
        });

        // Add User Button micro-interaction
        const addUserBtn = document.querySelector('button.bg-primary-container');
        addUserBtn.addEventListener('click', () => {
            const toast = document.getElementById('toast');
            const msg = document.getElementById('toast-message');
            msg.textContent = "Redirecting to Add New User form...";
            toast.classList.remove('translate-y-24');
            setTimeout(() => {
                toast.classList.add('translate-y-24');
            }, 3000);
        });
    </script>
</body></html>
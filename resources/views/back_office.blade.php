@extends('layouts.admin')

@section('content')
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-stack-lg">
<div>
<h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-background">Master Admin Control Center</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-2">Manage your core platform configurations, content, and global store identity.</p>
</div>
<button class="md:hidden w-full bg-primary text-on-primary px-6 py-3 rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-all active:scale-95 shadow-sm">
                    Save All Changes
                </button>
</div>
<!-- Bento Grid Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Section 1: Store Information (Spans 8 columns on large screens) -->
<section class="lg:col-span-8 bg-surface border border-surface-variant rounded-xl p-stack-md flex flex-col gap-stack-md">
<div class="flex items-center gap-3 pb-4 border-b border-surface-container">
<div class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined">storefront</span>
</div>
<h2 class="font-headline-md text-headline-md text-on-surface">Store Information</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-sm">
<div class="space-y-1">
<label class="font-label-md text-label-md text-on-surface-variant">Store Name</label>
<input class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="text" value="Luminous Commerce Main"/>
</div>
<div class="space-y-1">
<label class="font-label-md text-label-md text-on-surface-variant">Global Contact Email</label>
<input class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="email" value="support@luminouscommerce.com"/>
</div>
<div class="space-y-1 md:col-span-2">
<label class="font-label-md text-label-md text-on-surface-variant">Business Address</label>
<input class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all" type="text" value="1280 Grid Layout Way, UI City, WEB 90210"/>
</div>
<div class="space-y-1">
<label class="font-label-md text-label-md text-on-surface-variant">Primary Currency</label>
<div class="relative">
<select class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all appearance-none cursor-pointer">
<option selected="" value="USD">USD ($) - US Dollar</option>
<option value="EUR">EUR (€) - Euro</option>
<option value="GBP">GBP (£) - British Pound</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline pointer-events-none">expand_more</span>
</div>
</div>
</div>
</section>
<!-- Section 2: Platform Configuration (Spans 4 columns) -->
<section class="lg:col-span-4 bg-surface border border-surface-variant rounded-xl p-stack-md flex flex-col gap-stack-md">
<div class="flex items-center gap-3 pb-4 border-b border-surface-container">
<div class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined">tune</span>
</div>
<h2 class="font-headline-md text-headline-md text-on-surface">Platform</h2>
</div>
<form action="{{ route('admin.settings.update') }}" method="POST" class="flex flex-col gap-stack-sm h-full justify-between">
    @csrf
<!-- Maintenance Toggle -->
<div class="flex items-center justify-between p-4 bg-surface-container-low rounded-lg border border-surface-container">
<div>
<h3 class="font-label-md text-label-md text-on-surface">Maintenance Mode</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Temporarily disable storefront.</p>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input name="maintenance_mode" type="hidden" value="0">
<input class="sr-only peer" type="checkbox" name="maintenance_mode" value="1" {{ ($settings['maintenance_mode'] ?? '0') == '1' ? 'checked' : '' }}/>
<div class="w-11 h-6 bg-surface-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<div class="space-y-1">
<label class="font-label-md text-label-md text-on-surface-variant">Base Tax Rate (%)</label>
<input name="tax_rate" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface transition-all text-right" step="0.1" type="number" value="{{ $settings['tax_rate'] ?? '8.5' }}"/>
</div>
<div class="space-y-1">
<label class="font-label-md text-label-md text-on-surface-variant">Shipping Origin Code</label>
<input name="shipping_origin" class="w-full px-4 py-3 bg-surface-container-lowest border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 font-body-md text-body-md text-on-surface uppercase transition-all" type="text" value="{{ $settings['shipping_origin'] ?? 'US-WEST-01' }}"/>
</div>
<div class="mt-4 flex justify-end">
    <button type="submit" class="bg-primary text-on-primary px-6 py-2 rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-all active:scale-95 shadow-sm">Save Platform Settings</button>
</div>
</form>
</section>
</div>
@endsection
@extends('layouts.admin')

@section('content')
<div class="mb-stack-lg">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="font-headline-lg text-headline-lg font-bold text-on-surface">Kategori</h1>
            <p class="font-body-md text-body-md text-on-surface-variant mt-1">Kelola kategori produk untuk marketplace.</p>
        </div>
        <button onclick="document.getElementById('add-modal').classList.remove('hidden')" class="bg-primary text-on-primary px-6 py-2 rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-all flex items-center gap-2">
            <span class="material-symbols-outlined text-[20px]">add</span>
            Tambah Kategori
        </button>
    </div>

    @if(session('success'))
        <div class="bg-primary-container text-on-primary-container p-4 rounded-lg mb-6 font-body-md text-body-md">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-surface-container-lowest rounded-xl border border-surface-container overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-surface-container">
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">ID</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Nama Kategori</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Icon/Gambar</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container">
                    @foreach($categories as $category)
                    @php
                        $catImg = null;
                        if (!empty($category->icon_path)) {
                            $path = trim($category->icon_path);
                            if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
                                $catImg = $path;
                            } elseif (str_starts_with($path, 'storage/')) {
                                $catImg = asset($path);
                            } elseif (str_contains($path, '/') || str_contains($path, '.')) {
                                $catImg = asset('storage/' . ltrim($path, '/'));
                            }
                        }
                    @endphp
                    <tr class="hover:bg-surface-container-low/50 transition-colors">
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">{{ $category->id }}</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface font-semibold">{{ $category->nama_kategori }}</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">
                            @if($catImg)
                                <img src="{{ $catImg }}" class="w-12 h-12 object-cover rounded-lg border border-outline-variant shadow-xs" alt="{{ $category->nama_kategori }}">
                            @elseif($category->icon_path)
                                <div class="w-12 h-12 rounded-lg bg-primary-container/20 text-primary flex items-center justify-center">
                                    <span class="iconify text-xl" data-icon="{{ $category->icon_path }}"></span>
                                </div>
                            @else
                                <span class="text-on-surface-variant italic text-sm">Tidak ada foto</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button onclick="openEditModal({{ $category->id }}, '{{ addslashes($category->nama_kategori) }}', '{{ addslashes($category->icon_path ?? '') }}', '{{ addslashes($catImg ?? '') }}')" class="text-primary hover:text-primary-fixed-dim transition-colors mr-3" title="Edit">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </button>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus kategori ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-error hover:text-opacity-80 transition-colors" title="Hapus">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @if($categories->isEmpty())
                    <tr>
                        <td colspan="4" class="px-6 py-8 text-center text-on-surface-variant font-body-md">
                            Belum ada kategori yang ditambahkan.
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Modal -->
<div id="add-modal" class="fixed inset-0 bg-black/50 z-50 hidden flex items-center justify-center">
    <div class="bg-surface-container-lowest rounded-xl w-full max-w-md p-6 shadow-2xl relative">
        <button onclick="document.getElementById('add-modal').classList.add('hidden')" class="absolute top-4 right-4 text-on-surface-variant hover:text-on-surface">
            <span class="material-symbols-outlined">close</span>
        </button>
        <h2 class="font-headline-sm text-headline-sm font-bold text-on-surface mb-6">Tambah Kategori Baru</h2>
        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="font-label-md text-label-md text-on-surface-variant mb-1 block">Nama Kategori</label>
                    <input type="text" name="nama_kategori" required class="w-full px-4 py-3 bg-surface-container-low border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant" placeholder="Contoh: Kerajinan Kayu">
                </div>
                <div>
                    <label class="font-label-md text-label-md text-on-surface-variant mb-1 block">Upload Foto Kategori (Untuk Homepage)</label>
                    <input type="file" name="foto" accept="image/*" class="w-full text-xs p-2 bg-surface-container-low border border-surface-variant rounded-lg focus:outline-none">
                    <p class="text-[11px] text-secondary mt-1">Format: JPG, PNG, WEBP. Maks 5MB.</p>
                </div>
                <div>
                    <label class="font-label-md text-label-md text-on-surface-variant mb-1 block">Atau URL Gambar / Ikon Iconify (Opsional)</label>
                    <input type="text" name="icon_path" class="w-full px-4 py-3 bg-surface-container-low border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant text-xs" placeholder="https://... atau ph:sparkle-bold">
                </div>
            </div>
            <div class="mt-8 flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('add-modal').classList.add('hidden')" class="px-6 py-2 rounded-lg font-label-md text-label-md text-on-surface hover:bg-surface-container-high transition-colors">Batal</button>
                <button type="submit" class="bg-primary text-on-primary px-6 py-2 rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-all">Simpan Kategori</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div id="edit-modal" class="fixed inset-0 bg-black/50 z-50 hidden flex items-center justify-center">
    <div class="bg-surface-container-lowest rounded-xl w-full max-w-md p-6 shadow-2xl relative">
        <button onclick="document.getElementById('edit-modal').classList.add('hidden')" class="absolute top-4 right-4 text-on-surface-variant hover:text-on-surface">
            <span class="material-symbols-outlined">close</span>
        </button>
        <h2 class="font-headline-sm text-headline-sm font-bold text-on-surface mb-6">Ubah Kategori</h2>
        <form id="edit-form" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-4">
                <div>
                    <label class="font-label-md text-label-md text-on-surface-variant mb-1 block">Nama Kategori</label>
                    <input type="text" id="edit-nama" name="nama_kategori" required class="w-full px-4 py-3 bg-surface-container-low border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant">
                </div>
                <div>
                    <label class="font-label-md text-label-md text-on-surface-variant mb-1 block">Ganti Foto Kategori</label>
                    <div id="edit-preview-container" class="mb-2 hidden">
                        <img id="edit-preview" src="" class="w-16 h-16 object-cover rounded-lg border border-outline-variant" alt="Preview">
                    </div>
                    <input type="file" name="foto" accept="image/*" class="w-full text-xs p-2 bg-surface-container-low border border-surface-variant rounded-lg focus:outline-none">
                    <p class="text-[11px] text-secondary mt-1">Biarkan kosong jika tidak ingin mengubah foto.</p>
                </div>
                <div>
                    <label class="font-label-md text-label-md text-on-surface-variant mb-1 block">Atau URL Gambar / Ikon Iconify (Opsional)</label>
                    <input type="text" id="edit-icon-path" name="icon_path" class="w-full px-4 py-3 bg-surface-container-low border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant text-xs" placeholder="https://... atau ph:sparkle-bold">
                </div>
            </div>
            <div class="mt-8 flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('edit-modal').classList.add('hidden')" class="px-6 py-2 rounded-lg font-label-md text-label-md text-on-surface hover:bg-surface-container-high transition-colors">Batal</button>
                <button type="submit" class="bg-primary text-on-primary px-6 py-2 rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-all">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
<script>
    function openEditModal(id, name, iconPath, imgUrl) {
        document.getElementById('edit-nama').value = name;
        document.getElementById('edit-icon-path').value = iconPath;
        document.getElementById('edit-form').action = '/admin/categories/' + id;
        
        const previewContainer = document.getElementById('edit-preview-container');
        const previewImg = document.getElementById('edit-preview');
        if (imgUrl) {
            previewImg.src = imgUrl;
            previewContainer.classList.remove('hidden');
        } else {
            previewContainer.classList.add('hidden');
        }
        
        document.getElementById('edit-modal').classList.remove('hidden');
    }
</script>
@endsection

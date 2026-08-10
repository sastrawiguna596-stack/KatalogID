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
                    <tr class="hover:bg-surface-container-low/50 transition-colors">
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">{{ $category->id }}</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface font-semibold">{{ $category->nama_kategori }}</td>
                        <td class="px-6 py-4 font-body-md text-body-md text-on-surface">
                            @if($category->icon)
                                <img src="{{ asset('storage/' . $category->icon) }}" class="w-10 h-10 object-cover rounded" alt="{{ $category->nama_kategori }}">
                            @else
                                <span class="text-on-surface-variant italic text-sm">Tidak ada icon</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button onclick="openEditModal({{ $category->id }}, '{{ addslashes($category->nama_kategori) }}')" class="text-primary hover:text-primary-fixed-dim transition-colors mr-3" title="Edit">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </button>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus kategori ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-error hover:text-opacity-80 transition-colors" title="Delete">
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
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="font-label-md text-label-md text-on-surface-variant mb-1 block">Nama Kategori</label>
                    <input type="text" name="nama_kategori" required class="w-full px-4 py-3 bg-surface-container-low border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant">
                </div>
            </div>
            <div class="mt-8 flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('add-modal').classList.add('hidden')" class="px-6 py-2 rounded-lg font-label-md text-label-md text-on-surface hover:bg-surface-container-high transition-colors">Batal</button>
                <button type="submit" class="bg-primary text-on-primary px-6 py-2 rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-all">Simpan</button>
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
        <form id="edit-form" method="POST">
            @csrf
            @method('PUT')
            <div class="space-y-4">
                <div>
                    <label class="font-label-md text-label-md text-on-surface-variant mb-1 block">Nama Kategori</label>
                    <input type="text" id="edit-nama" name="nama_kategori" required class="w-full px-4 py-3 bg-surface-container-low border border-surface-variant rounded-lg focus:outline-none focus:border-on-surface-variant">
                </div>
            </div>
            <div class="mt-8 flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('edit-modal').classList.add('hidden')" class="px-6 py-2 rounded-lg font-label-md text-label-md text-on-surface hover:bg-surface-container-high transition-colors">Batal</button>
                <button type="submit" class="bg-primary text-on-primary px-6 py-2 rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-all">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openEditModal(id, name) {
        document.getElementById('edit-nama').value = name;
        document.getElementById('edit-form').action = '/admin/categories/' + id;
        document.getElementById('edit-modal').classList.remove('hidden');
    }
</script>
@endsection

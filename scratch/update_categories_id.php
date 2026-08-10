<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Category;
use Illuminate\Support\Str;

$translations = [
    'Essentials' => 'Kebutuhan Harian',
    'Kitchenware' => 'Peralatan Dapur',
    'Lighting' => 'Lampu & Pencahayaan',
    'Furniture' => 'Mebel & Furnitur',
    'Home Decor' => 'Dekorasi Rumah',
    'Fashion' => 'Pakaian & Aksesoris',
];

foreach ($translations as $oldName => $newName) {
    $cat = Category::where('nama_kategori', $oldName)->first();
    if ($cat) {
        $cat->nama_kategori = $newName;
        $cat->slug = Str::slug($newName);
        $cat->save();
        echo "Updated category: {$oldName} -> {$newName}\n";
    }
}

// Make sure all existing categories are formatted in Indonesian
$all = Category::all();
echo "\nTotal Categories: " . count($all) . "\n";
foreach ($all as $c) {
    echo "- ID: {$c->id} | Nama: {$c->nama_kategori} | Slug: {$c->slug}\n";
}

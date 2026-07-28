<?php

use Illuminate\Support\Facades\Route;

// Home / Landing Page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Product Catalog / All Products
Route::get('/shop', function () {
    return view('product.all_product');
})->name('shop');

// Product Detail
Route::get('/product/{id?}', function ($id = 1) {
    $products = [
        1 => [
            'id' => 1,
            'title' => 'Vas Terakota Modern',
            'category' => 'Essentials',
            'price' => 'Rp 45.000',
            'original_price' => 'Rp 60.000',
            'rating' => '4.8',
            'reviews_count' => '124',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBk0dD97rxSLPIq7kow6D-Xfn2Ir4JXplIQO4-0yqQqXx9-ymlS5uyw6I6LGsrTk1RkdrpQnmlcYwIwso05QH_pw5AhewbHxNuc0jIv1lkGdahlFU8AOT6Bw1wiRIyxgBz4U8CPq1paoMuMoSSRG2pHXnZPyulF2yvmK7VS_241XWZMKBRD9cHxXkgoHQeUGWRT_waBht0Fq1pD9UM8pcD_4pwp067sDthz1dIXokAmpwMAWBVZzQFk',
            'description' => 'Vas keramik terakota buatan tangan dengan tekstur organik halus dan aksen tanah liat alami. Sangat cocok untuk menghiasi meja makan, ruang tamu, atau sudut ruang kerja Anda.',
            'badge' => 'NEW'
        ],
        2 => [
            'id' => 2,
            'title' => 'Set Alat Makan Kuningan',
            'category' => 'Kitchenware',
            'price' => 'Rp 120.000',
            'original_price' => 'Rp 150.000',
            'rating' => '4.5',
            'reviews_count' => '89',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB_pNgNPWyZyJOaCLtG8Tyk-pFG-aBhkG17RN9pS-uxmP3nWWWfBUSYe-NZYHpWqeE9qeuREA8vi7K-zABi0AF4EgQwLo0nscomLI-As-KjOGl67w9alqDIhkyfrzBwywd14485gEo7Rt9TAtf7Xbwp8H9oH8dVbXmvoaMZuvhe6KEzyru3moPcGeeguB9tc6l-m_9RqSyDNnxLn9szBVfWrr73GDvFZ56Z6qMsWJekflmsz07B0jD2',
            'description' => 'Set alat makan berbahan kuningan brushed gold tahan lama. Menghadirkan kesan mewah dan hangat pada setiap momen santap Anda.',
            'badge' => 'BEST SELLER'
        ],
        3 => [
            'id' => 3,
            'title' => 'Lampu Belajar Minimalis',
            'category' => 'Lighting',
            'price' => 'Rp 89.000',
            'original_price' => 'Rp 110.000',
            'rating' => '4.2',
            'reviews_count' => '56',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDCns4DxWiA7iBGiTKiYiw6zQ77xA323MT5s21i1IA8Ia82zIbJ9ow5ZtoOr9GOqYqK4EueqeHDB1qHnvZl0rro_REcG4dVuz0Qw2jkz_dssL1oVYr0UWhoWgQzOrsKENdPfqHL3VtUQkZXDqrWJIv_eg5dz1P2LKiRSf-s-LrUe6IktFolCTXKhVfzLxMksNUA4oB8tFYSvvUAO8aQLxKcFsyOHkqRqdAmjc5Fo8x5dhtn_bvvWrxj',
            'description' => 'Lampu meja belajar gaya minimalis dengan tiang kayu ek berkualitas dan kap warna abu-abu charcoal.',
            'badge' => ''
        ],
        4 => [
            'id' => 4,
            'title' => 'Bantal Sofa Linen',
            'category' => 'Essentials',
            'price' => 'Rp 65.000',
            'original_price' => 'Rp 80.000',
            'rating' => '4.9',
            'reviews_count' => '210',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA47mbWGDqjAjJJ0zkSFfaPoVhwDBM6FpaIJzv2_yxceWmgkFcVTfdmcMdtavU5HFvMy60bOm-uzAc3Pn7Q29xiOSrmIVgDjkJSgdkrwKN7LVSC4EF5VzTKhKObOkwL6Y5tExi7fEWkcmgur26ogC-NHY-Eyzat_Rk0mh6jvqBH8rFioW0qAwy42Nj9MBQYwjOZJZpOwUXfE_Z3gnj64w4la0Wjj5zfsVpXeBqKivazCuIaCC11GFGi',
            'description' => 'Bantal sofa kain linen premium dengan perpaduan warna alami charcoal dan amber yang nyaman.',
            'badge' => 'SALE'
        ],
        5 => [
            'id' => 5,
            'title' => 'Mesin Kopi Manual',
            'category' => 'Kitchenware',
            'price' => 'Rp 155.000',
            'original_price' => 'Rp 190.000',
            'rating' => '4.7',
            'reviews_count' => '175',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBkFMHwCoHaBWEKjNQ0I2pu7feCrXQ5yBFK2_VydgH7kE6EmAuVv0cPzghMBKF6v13IZhxI7TyBwG7YZyqpZ8jZ7TM6UIIbGe1TIzp_2pE4JIw64ebplUx13fJExW0XcRtHO7LMMUT5mq07wdXyAJwPRN9lkwP3HnYo_1LTQd9-9BoChFmgiR4rHubdaOb4VnMxKKuBcXmCd_QkBf1ljtPoPMBqRgIBfr5tNGlLwk-orAZEBItaJoo8',
            'description' => 'Alat pembuat kopi manual tahan panas untuk hasil ekstraksi kopi terbaik.',
            'badge' => ''
        ],
        6 => [
            'id' => 6,
            'title' => 'Aroma Terapi Kayu Cedar',
            'category' => 'Essentials',
            'price' => 'Rp 32.000',
            'original_price' => 'Rp 45.000',
            'rating' => '4.3',
            'reviews_count' => '42',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDxmkENGZuyLZGH_qWwezwycENs7upOPEfaEc3SMVtVVUMwHtodLG72piJEYFD06ROLx9OSpRpPmhEC-MD896J2Q1TYKImnp8YZcl5UynZ82SWgYkUC2RZuVIXE4CZXS3UcxGv2u6dNxZV5OLTeLku7DUZZp4uSaPGi-uO7HjswVVNGt_fjhU2maCSTs8q-WiiI3X8ifvYQjZI-L74hqK1SEMM2NS_PDDpT923vwTkRT7fOyQUL2a0D',
            'description' => 'Lilin aroma terapi kayu cedar untuk suasana menenangan di dalam ruangan.',
            'badge' => ''
        ],
        7 => [
            'id' => 7,
            'title' => 'Kursi Kantor Studio',
            'category' => 'Furniture',
            'price' => 'Rp 290.000',
            'original_price' => 'Rp 350.000',
            'rating' => '4.6',
            'reviews_count' => '98',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDt2QH8mYoSO4gXlffQnIbQsvqVZq9QlCRoyTzMwSjNbKoVwg2qGY9omYAB3vK0CgOVJ8IqsuWUcbn8B_icIhz6FYNN5KmwtPgsnZBF-ADsqC2DALgqasHtoi1p5GzaimiCx4dxXRwzKKF5fUU-tvfnfCItmfu5nRv7I3xbf9xv3KvRSYpl7W_ZfFNCRDe4kNuBW_ysd9aT0cAHvCVREawQpBJH_JIC9bJtzXNpINUvKpCck6K5IYCV',
            'description' => 'Kursi kantor ergonomis dengan dudukan berlapis kain lembut dan rangka kayu ek.',
            'badge' => ''
        ],
        8 => [
            'id' => 8,
            'title' => 'Mangkok Keramik',
            'category' => 'Kitchenware',
            'price' => 'Rp 78.000',
            'original_price' => 'Rp 95.000',
            'rating' => '4.4',
            'reviews_count' => '64',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCTJ3Ir1DfgyBiod5gs6mju6Qxt8HQcqZfWvZ4SlBCNtYkGEh9R_I2G4Jd3dVcyUibRy7DBwTRGsMzP-9a7RS4ZXQAbiG5HrjjCJlgT8BskcUoDuuBUFqWt4UFmjO7dtZSlDsnDx6d-2-PjsusLPFKKzjexr6Qi8M0k0e98oEygHoTZvVQgRnrR6QHBWEOrhgQmDjl1UorwMPL1kkhCJ2x3EGIYHijkzyW0XVhko6MO-6jl-njI3NoD',
            'description' => 'Mangkok keramik buatan tangan berseni tinggi untuk sajian makanan sehari-hari.',
            'badge' => ''
        ]
    ];

    $product = $products[$id] ?? $products[1];
    return view('product.product_detail', compact('product'));
})->name('product.detail');

// Cart & Checkout
Route::get('/cart', function () {
    return view('product.cart_checkout');
})->name('cart');

// Login Page
Route::get('/login', function () {
    return view('login_page');
})->name('login');

// Public Storefront
Route::get('/store/{id?}', function () {
    return view('store_product');
})->name('store_product');

// Customer Dashboard Routes
Route::get('/customer', function () {
    return view('cust_account');
})->name('cust_account');

Route::get('/customer/settings', function () {
    return view('account_setting_cust');
})->name('cust_account_setting');

Route::get('/customer/orders', function () {
    return view('recent_orders_cust');
})->name('cust_recent_orders');

// Seller Dashboard Routes
Route::get('/account', function () {
    return view('seller.my_account');
})->name('account');

Route::get('/account/settings', function () {
    return view('seller.account_setting');
})->name('account_setting');

Route::get('/account/order', function () {
    return view('seller.recent_orders');
})->name('recent_orders');

Route::get('/account/sales-analytics', function () {
    return view('seller.sales_analytics');
})->name('sales_analytics');

Route::get('/account/support', function () {
    return view('seller.support');
})->name('support');

Route::get('/inventory', function () {
    return view('seller.inventory');
})->name('inventories');

Route::get('/seller/store', function () {
    return view('seller.store');
})->name('seller.store');

Route::get('/add-product', function () {
    return view('add_new_product');
})->name('add_product');

Route::get('/edit-product/{id?}', function () {
    return view('edit_product');
})->name('edit_product');

Route::get('/inventory-detail/{id?}', function () {
    return view('inventory_detail');
})->name('inventory_detail');

Route::get('/dashboard-admin', function () {
    return view('dashboard_admin');
})->name('dashboard_admin');

Route::get('/dashboard-admin-add', function () {
    return view('dashboard_admin_add');
})->name('dashboard_admin_add');

Route::get('/dashboard-admin-edit', function () {
    return view('dashboard_admin_edit');
})->name('dashboard_admin_edit');

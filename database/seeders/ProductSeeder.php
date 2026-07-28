<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Store;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $store = Store::first();
        if (!$store) return;

        $categories = Category::pluck('id', 'nama_kategori')->toArray();

        $productsData = [
            [
                'title' => 'Vas Terakota Modern',
                'category' => 'Essentials',
                'price' => 45000,
                'original_price' => 60000,
                'badge' => 'NEW',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBk0dD97rxSLPIq7kow6D-Xfn2Ir4JXplIQO4-0yqQqXx9-ymlS5uyw6I6LGsrTk1RkdrpQnmlcYwIwso05QH_pw5AhewbHxNuc0jIv1lkGdahlFU8AOT6Bw1wiRIyxgBz4U8CPq1paoMuMoSSRG2pHXnZPyulF2yvmK7VS_241XWZMKBRD9cHxXkgoHQeUGWRT_waBht0Fq1pD9UM8pcD_4pwp067sDthz1dIXokAmpwMAWBVZzQFk',
                'description' => 'Vas keramik terakota buatan tangan dengan tekstur organik halus dan aksen tanah liat alami. Sangat cocok untuk menghiasi meja makan, ruang tamu, atau sudut ruang kerja Anda.'
            ],
            [
                'title' => 'Set Alat Makan Kuningan',
                'category' => 'Kitchenware',
                'price' => 120000,
                'original_price' => 150000,
                'badge' => 'BEST SELLER',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB_pNgNPWyZyJOaCLtG8Tyk-pFG-aBhkG17RN9pS-uxmP3nWWWfBUSYe-NZYHpWqeE9qeuREA8vi7K-zABi0AF4EgQwLo0nscomLI-As-KjOGl67w9alqDIhkyfrzBwywd14485gEo7Rt9TAtf7Xbwp8H9oH8dVbXmvoaMZuvhe6KEzyru3moPcGeeguB9tc6l-m_9RqSyDNnxLn9szBVfWrr73GDvFZ56Z6qMsWJekflmsz07B0jD2',
                'description' => 'Set alat makan berbahan kuningan brushed gold tahan lama. Menghadirkan kesan mewah dan hangat pada setiap momen santap Anda.'
            ],
            [
                'title' => 'Lampu Belajar Minimalis',
                'category' => 'Lighting',
                'price' => 89000,
                'original_price' => 110000,
                'badge' => null,
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDCns4DxDxWiA7iBGiTKiYiw6zQ77xA323MT5s21i1IA8Ia82zIbJ9ow5ZtoOr9GOqYqK4EueqeHDB1qHnvZl0rro_REcG4dVuz0Qw2jkz_dssL1oVYr0UWhoWgQzOrsKENdPfqHL3VtUQkZXDqrWJIv_eg5dz1P2LKiRSf-s-LrUe6IktFolCTXKhVfzLxMksNUA4oB8tFYSvvUAO8aQLxKcFsyOHkqRqdAmjc5Fo8x5dhtn_bvvWrxj',
                'description' => 'Lampu meja belajar gaya minimalis dengan tiang kayu ek berkualitas dan kap warna abu-abu charcoal.'
            ],
            [
                'title' => 'Bantal Sofa Linen',
                'category' => 'Essentials',
                'price' => 65000,
                'original_price' => 80000,
                'badge' => 'SALE',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA47mbWGDqjAjJJ0zkSFfaPoVhwDBM6FpaIJzv2_yxceWmgkFcVTfdmcMdtavU5HFvMy60bOm-uzAc3Pn7Q29xiOSrmIVgDjkJSgdkrwKN7LVSC4EF5VzTKhKObOkwL6Y5tExi7fEWkcmgur26ogC-NHY-Eyzat_Rk0mh6jvqBH8rFioW0qAwy42Nj9MBQYwjOZJZpOwUXfE_Z3gnj64w4la0Wjj5zfsVpXeBqKivazCuIaCC11GFGi',
                'description' => 'Bantal sofa kain linen premium dengan perpaduan warna alami charcoal dan amber yang nyaman.'
            ],
            [
                'title' => 'Mesin Kopi Manual',
                'category' => 'Kitchenware',
                'price' => 155000,
                'original_price' => 190000,
                'badge' => null,
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBkFMHwCoHaBWEKjNQ0I2pu7feCrXQ5yBFK2_VydgH7kE6EmAuVv0cPzghMBKF6v13IZhxI7TyBwG7YZyqpZ8jZ7TM6UIIbGe1TIzp_2pE4JIw64ebplUx13fJExW0XcRtHO7LMMUT5mq07wdXyAJwPRN9lkwP3HnYo_1LTQd9-9BoChFmgiR4rHubdaOb4VnMxKKuBcXmCd_QkBf1ljtPoPMBqRgIBfr5tNGlLwk-orAZEBItaJoo8',
                'description' => 'Alat pembuat kopi manual tahan panas untuk hasil ekstraksi kopi terbaik.'
            ],
            [
                'title' => 'Aroma Terapi Kayu Cedar',
                'category' => 'Essentials',
                'price' => 32000,
                'original_price' => 45000,
                'badge' => null,
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDxmkENGZuyLZGH_qWwezwycENs7upOPEfaEc3SMVtVVUMwHtodLG72piJEYFD06ROLx9OSpRpPmhEC-MD896J2Q1TYKImnp8YZcl5UynZ82SWgYkUC2RZuVIXE4CZXS3UcxGv2u6dNxZV5OLTeLku7DUZZp4uSaPGi-uO7HjswVVNGt_fjhU2maCSTs8q-WiiI3X8ifvYQjZI-L74hqK1SEMM2NS_PDDpT923vwTkRT7fOyQUL2a0D',
                'description' => 'Lilin aroma terapi kayu cedar untuk suasana menenangan di dalam ruangan.'
            ],
            [
                'title' => 'Kursi Kantor Studio',
                'category' => 'Furniture',
                'price' => 290000,
                'original_price' => 350000,
                'badge' => null,
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDt2QH8mYoSO4gXlffQnIbQsvqVZq9QlCRoyTzMwSjNbKoVwg2qGY9omYAB3vK0CgOVJ8IqsuWUcbn8B_icIhz6FYNN5KmwtPgsnZBF-ADsqC2DALgqasHtoi1p5GzaimiCx4dxXRwzKKF5fUU-tvfnfCItmfu5nRv7I3xbf9xv3KvRSYpl7W_ZfFNCRDe4kNuBW_ysd9aT0cAHvCVREawQpBJH_JIC9bJtzXNpINUvKpCck6K5IYCV',
                'description' => 'Kursi kantor ergonomis dengan dudukan berlapis kain lembut dan rangka kayu ek.'
            ],
            [
                'title' => 'Mangkok Keramik',
                'category' => 'Kitchenware',
                'price' => 78000,
                'original_price' => 95000,
                'badge' => null,
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCTJ3Ir1DfgyBiod5gs6mju6Qxt8HQcqZfWvZ4SlBCNtYkGEh9R_I2G4Jd3dVcyUibRy7DBwTRGsMzP-9a7RS4ZXQAbiG5HrjjCJlgT8BskcUoDuuBUFqWt4UFmjO7dtZSlDsnDx6d-2-PjsusLPFKKzjexr6Qi8M0k0e98oEygHoTZvVQgRnrR6QHBWEOrhgQmDjl1UorwMPL1kkhCJ2x3EGIYHijkzyW0XVhko6MO-6jl-njI3NoD',
                'description' => 'Mangkok keramik buatan tangan berseni tinggi untuk sajian makanan sehari-hari.'
            ]
        ];

        foreach ($productsData as $data) {
            $catId = $categories[$data['category']] ?? reset($categories);

            $product = Product::create([
                'store_id' => $store->id,
                'category_id' => $catId,
                'nama_produk' => $data['title'],
                'slug' => Str::slug($data['title']),
                'deskripsi_lengkap' => $data['description'],
                'harga' => $data['price'],
                'harga_diskon' => $data['original_price'],
                'stok' => rand(10, 50),
                'berat_gram' => 500,
                'badge' => $data['badge'],
                'status' => 'active'
            ]);

            ProductGallery::create([
                'product_id' => $product->id,
                'foto_path' => $data['image'],
                'is_primary' => true
            ]);
        }
    }
}

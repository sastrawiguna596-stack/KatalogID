-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2026 at 10:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalog_indonesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `icon_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `slug`, `icon_path`, `created_at`, `updated_at`) VALUES
(1, 'Essentials', 'essentials', 'ph:sparkle-bold', '2026-07-28 17:16:46', '2026-07-28 17:16:46'),
(2, 'Kitchenware', 'kitchenware', 'ph:cooking-pot-bold', '2026-07-28 17:16:46', '2026-07-28 17:16:46'),
(3, 'Lighting', 'lighting', 'ph:lamp-bold', '2026-07-28 17:16:46', '2026-07-28 17:16:46'),
(4, 'Furniture', 'furniture', 'ph:armchair-bold', '2026-07-28 17:16:46', '2026-07-28 17:16:46'),
(5, 'Home Decor', 'home-decor', 'ph:house-line-bold', '2026-07-28 17:16:46', '2026-07-28 17:16:46'),
(6, 'Fashion', 'fashion', 'ph:t-shirt-bold', '2026-07-28 17:16:46', '2026-07-28 17:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_07_28_024809_create_stores_table', 1),
(5, '2026_07_28_024810_create_categories_table', 1),
(6, '2026_07_28_024810_create_orders_table', 1),
(7, '2026_07_28_024810_create_products_table', 1),
(8, '2026_07_28_024811_create_order_items_table', 1),
(9, '2026_07_28_024949_create_product_galleries_table', 1),
(10, '2026_07_28_024950_create_product_variants_table', 1),
(11, '2026_07_28_024950_create_reviews_table', 1),
(12, '2026_07_29_000000_create_user_addresses_table', 1),
(13, '2026_08_07_073756_create_site_settings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `total_harga` decimal(12,2) NOT NULL,
  `status_pembayaran` enum('pending','paid','failed','cancelled') NOT NULL DEFAULT 'pending',
  `status_pengiriman` enum('pending','processing','shipped','delivered','cancelled') NOT NULL DEFAULT 'pending',
  `alamat_pengiriman` text NOT NULL,
  `nomor_resi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `harga_satuan` decimal(12,2) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` decimal(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi_lengkap` text NOT NULL,
  `harga` decimal(12,2) NOT NULL,
  `harga_diskon` decimal(12,2) DEFAULT NULL,
  `stok` int(11) NOT NULL DEFAULT 0,
  `berat_gram` int(11) NOT NULL DEFAULT 100,
  `badge` varchar(255) DEFAULT NULL,
  `status` enum('active','draft','archived') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `store_id`, `category_id`, `nama_produk`, `slug`, `deskripsi_lengkap`, `harga`, `harga_diskon`, `stok`, `berat_gram`, `badge`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Vas Terakota Modern', 'vas-terakota-modern', 'Vas keramik terakota buatan tangan dengan tekstur organik halus dan aksen tanah liat alami. Sangat cocok untuk menghiasi meja makan, ruang tamu, atau sudut ruang kerja Anda.', 45000.00, 60000.00, 31, 500, 'NEW', 'active', '2026-07-28 17:16:46', '2026-07-29 16:57:24'),
(2, 1, 2, 'Set Alat Makan Kuningan', 'set-alat-makan-kuningan', 'Set alat makan berbahan kuningan brushed gold tahan lama. Menghadirkan kesan mewah dan hangat pada setiap momen santap Anda.', 120000.00, 150000.00, 34, 500, 'BEST SELLER', 'active', '2026-07-28 17:16:46', '2026-07-29 16:57:24'),
(3, 1, 3, 'Lampu Belajar Minimalis', 'lampu-belajar-minimalis', 'Lampu meja belajar gaya minimalis dengan tiang kayu ek berkualitas dan kap warna abu-abu charcoal.', 89000.00, 110000.00, 13, 500, NULL, 'active', '2026-07-28 17:16:46', '2026-07-29 16:57:24'),
(4, 1, 1, 'Bantal Sofa Linen', 'bantal-sofa-linen', 'Bantal sofa kain linen premium dengan perpaduan warna alami charcoal dan amber yang nyaman.', 65000.00, 80000.00, 30, 500, 'SALE', 'active', '2026-07-28 17:16:46', '2026-07-29 16:57:24'),
(5, 1, 2, 'Mesin Kopi Manual', 'mesin-kopi-manual', 'Alat pembuat kopi manual tahan panas untuk hasil ekstraksi kopi terbaik.', 155000.00, 190000.00, 42, 500, NULL, 'active', '2026-07-28 17:16:46', '2026-07-29 16:57:24'),
(6, 1, 1, 'Aroma Terapi Kayu Cedar', 'aroma-terapi-kayu-cedar', 'Lilin aroma terapi kayu cedar untuk suasana menenangan di dalam ruangan.', 32000.00, 45000.00, 17, 500, NULL, 'active', '2026-07-28 17:16:46', '2026-07-29 16:57:24'),
(7, 1, 4, 'Kursi Kantor Studio', 'kursi-kantor-studio', 'Kursi kantor ergonomis dengan dudukan berlapis kain lembut dan rangka kayu ek.', 290000.00, 350000.00, 25, 500, NULL, 'active', '2026-07-28 17:16:46', '2026-07-29 16:57:24'),
(8, 1, 2, 'Mangkok Keramik', 'mangkok-keramik', 'Mangkok keramik buatan tangan berseni tinggi untuk sajian makanan sehari-hari.', 78000.00, 95000.00, 41, 500, NULL, 'active', '2026-07-28 17:16:46', '2026-07-29 16:57:24'),
(11, 3, 1, 'toko dalam toko', 'toko-dalam-toko-11', 'toko mantap gua mau tes deskripsi qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 100000.00, 120000.00, 25, 500, 'raja kegelapan', 'active', '2026-07-29 17:11:58', '2026-07-29 17:18:31'),
(12, 3, 1, 'faf', 'faf-1785389906', 'fdfa', 30000.00, 10000.00, 25, 500, NULL, 'active', '2026-07-29 21:38:26', '2026-07-29 21:38:26'),
(13, 3, 1, 'Warna merah warna cinta', 'warna-merah-warna-cinta-1785389947', 'fzfsddsfd', 21122.00, 121212211.00, 25, 500, NULL, 'active', '2026-07-29 21:39:07', '2026-07-29 21:39:07'),
(14, 3, 1, 'teman', 'teman-1785390026', 'cocok untuk menemani kehidupan', 1000000.00, 1099998.00, 1, 500, 'BEST SELLER', 'active', '2026-07-29 21:40:26', '2026-07-29 21:40:26'),
(15, 3, 2, 'Warna merah warna cinta', 'warna-merah-warna-cinta-1785392913', 'sassas', 444444.00, 444445.00, 25, 500, NULL, 'active', '2026-07-29 22:28:33', '2026-07-29 22:28:33'),
(16, 3, 6, 'faf barETA', 'faf-bareta-16', 'qytwwtdvgghah', 121122.00, 122222.00, 25, 500, NULL, 'active', '2026-07-29 22:29:47', '2026-07-29 23:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `foto_path` text NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `foto_path`, `is_primary`, `created_at`, `updated_at`) VALUES
(9, 1, 'https://lh3.googleusercontent.com/aida-public/AB6AXuBk0dD97rxSLPIq7kow6D-Xfn2Ir4JXplIQO4-0yqQqXx9-ymlS5uyw6I6LGsrTk1RkdrpQnmlcYwIwso05QH_pw5AhewbHxNuc0jIv1lkGdahlFU8AOT6Bw1wiRIyxgBz4U8CPq1paoMuMoSSRG2pHXnZPyulF2yvmK7VS_241XWZMKBRD9cHxXkgoHQeUGWRT_waBht0Fq1pD9UM8pcD_4pwp067sDthz1dIXokAmpwMAWBVZzQFk', 1, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(10, 1, 'https://lh3.googleusercontent.com/aida-public/AB6AXuDUPhyFELQsHWGcI58Ik0I6JfirOT_z2ndkwyVGq86Bf9ScTXIdybxUJmndDtV4d_PHDM0Yi-Z1yWww5h7jGt3jsg7IyKEC-uZ131MxRcPAQuA2BW0RCpR5TajpS1_r7WtsuSvjgRCxWd0Hs_L1vwn4HRckjKAMMY6QFNgDjPtlj45z7I0Mo8IgIdXNpq9EDUCwsHVUgPKLZjAeHCWyGd4PufPzWiXB-xGN7Zt1_1XKJpCsgPTn_C6R', 0, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(11, 1, 'https://lh3.googleusercontent.com/aida-public/AB6AXuCTJ3Ir1DfgyBiod5gs6mju6Qxt8HQcqZfWvZ4SlBCNtYkGEh9R_I2G4Jd3dVcyUibRy7DBwTRGsMzP-9a7RS4ZXQAbiG5HrjjCJlgT8BskcUoDuuBUFqWt4UFmjO7dtZSlDsnDx6d-2-PjsusLPFKKzjexr6Qi8M0k0e98oEygHoTZvVQgRnrR6QHBWEOrhgQmDjl1UorwMPL1kkhCJ2x3EGIYHijkzyW0XVhko6MO-6jl-njI3NoD', 0, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(12, 2, 'https://lh3.googleusercontent.com/aida-public/AB6AXuB_pNgNPWyZyJOaCLtG8Tyk-pFG-aBhkG17RN9pS-uxmP3nWWWfBUSYe-NZYHpWqeE9qeuREA8vi7K-zABi0AF4EgQwLo0nscomLI-As-KjOGl67w9alqDIhkyfrzBwywd14485gEo7Rt9TAtf7Xbwp8H9oH8dVbXmvoaMZuvhe6KEzyru3moPcGeeguB9tc6l-m_9RqSyDNnxLn9szBVfWrr73GDvFZ56Z6qMsWJekflmsz07B0jD2', 1, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(13, 2, 'https://lh3.googleusercontent.com/aida-public/AB6AXuBkFMHwCoHaBWEKjNQ0I2pu7feCrXQ5yBFK2_VydgH7kE6EmAuVv0cPzghMBKF6v13IZhxI7TyBwG7YZyqpZ8jZ7TM6UIIbGe1TIzp_2pE4JIw64ebplUx13fJExW0XcRtHO7LMMUT5mq07wdXyAJwPRN9lkwP3HnYo_1LTQd9-9BoChFmgiR4rHubdaOb4VnMxKKuBcXmCd_QkBf1ljtPoPMBqRgIBfr5tNGlLwk-orAZEBItaJoo8', 0, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(14, 3, 'https://lh3.googleusercontent.com/aida-public/AB6AXuDCns4DxDxWiA7iBGiTKiYiw6zQ77xA323MT5s21i1IA8Ia82zIbJ9ow5ZtoOr9GOqYqK4EueqeHDB1qHnvZl0rro_REcG4dVuz0Qw2jkz_dssL1oVYr0UWhoWgQzOrsKENdPfqHL3VtUQkZXDqrWJIv_eg5dz1P2LKiRSf-s-LrUe6IktFolCTXKhVfzLxMksNUA4oB8tFYSvvUAO8aQLxKcFsyOHkqRqdAmjc5Fo8x5dhtn_bvvWrxj', 1, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(15, 4, 'https://lh3.googleusercontent.com/aida-public/AB6AXuA47mbWGDqjAjJJ0zkSFfaPoVhwDBM6FpaIJzv2_yxceWmgkFcVTfdmcMdtavU5HFvMy60bOm-uzAc3Pn7Q29xiOSrmIVgDjkJSgdkrwKN7LVSC4EF5VzTKhKObOkwL6Y5tExi7fEWkcmgur26ogC-NHY-Eyzat_Rk0mh6jvqBH8rFioW0qAwy42Nj9MBQYwjOZJZpOwUXfE_Z3gnj64w4la0Wjj5zfsVpXeBqKivazCuIaCC11GFGi', 1, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(16, 5, 'https://lh3.googleusercontent.com/aida-public/AB6AXuBkFMHwCoHaBWEKjNQ0I2pu7feCrXQ5yBFK2_VydgH7kE6EmAuVv0cPzghMBKF6v13IZhxI7TyBwG7YZyqpZ8jZ7TM6UIIbGe1TIzp_2pE4JIw64ebplUx13fJExW0XcRtHO7LMMUT5mq07wdXyAJwPRN9lkwP3HnYo_1LTQd9-9BoChFmgiR4rHubdaOb4VnMxKKuBcXmCd_QkBf1ljtPoPMBqRgIBfr5tNGlLwk-orAZEBItaJoo8', 1, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(17, 6, 'https://lh3.googleusercontent.com/aida-public/AB6AXuDxmkENGZuyLZGH_qWwezwycENs7upOPEfaEc3SMVtVVUMwHtodLG72piJEYFD06ROLx9OSpRpPmhEC-MD896J2Q1TYKImnp8YZcl5UynZ82SWgYkUC2RZuVIXE4CZXS3UcxGv2u6dNxZV5OLTeLku7DUZZp4uSaPGi-uO7HjswVVNGt_fjhU2maCSTs8q-WiiI3X8ifvYQjZI-L74hqK1SEMM2NS_PDDpT923vwTkRT7fOyQUL2a0D', 1, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(18, 7, 'https://lh3.googleusercontent.com/aida-public/AB6AXuDt2QH8mYoSO4gXlffQnIbQsvqVZq9QlCRoyTzMwSjNbKoVwg2qGY9omYAB3vK0CgOVJ8IqsuWUcbn8B_icIhz6FYNN5KmwtPgsnZBF-ADsqC2DALgqasHtoi1p5GzaimiCx4dxXRwzKKF5fUU-tvfnfCItmfu5nRv7I3xbf9xv3KvRSYpl7W_ZfFNCRDe4kNuBW_ysd9aT0cAHvCVREawQpBJH_JIC9bJtzXNpINUvKpCck6K5IYCV', 1, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(19, 8, 'https://lh3.googleusercontent.com/aida-public/AB6AXuCTJ3Ir1DfgyBiod5gs6mju6Qxt8HQcqZfWvZ4SlBCNtYkGEh9R_I2G4Jd3dVcyUibRy7DBwTRGsMzP-9a7RS4ZXQAbiG5HrjjCJlgT8BskcUoDuuBUFqWt4UFmjO7dtZSlDsnDx6d-2-PjsusLPFKKzjexr6Qi8M0k0e98oEygHoTZvVQgRnrR6QHBWEOrhgQmDjl1UorwMPL1kkhCJ2x3EGIYHijkzyW0XVhko6MO-6jl-njI3NoD', 1, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(22, 11, 'storage/produk/TqLQtStPmpJR7799hQmQhjMh4Dpbyl2A3SyiblS6.png', 1, '2026-07-29 17:18:31', '2026-07-29 17:18:31'),
(23, 12, 'storage/produk/CfxDshiqKoMNMYVAXMLvnd5o5kBKL9g4RrpEND7t.png', 1, '2026-07-29 21:38:27', '2026-07-29 21:38:27'),
(24, 13, 'storage/produk/XypF4IjZg2HUn9GBqjeKcS3SvOErS44mprnTafJp.png', 1, '2026-07-29 21:39:07', '2026-07-29 21:39:07'),
(25, 14, 'storage/produk/8L8hV7b6AYxMVUHkRwceFo4HoeF8MxIbnknaKmat.png', 1, '2026-07-29 21:40:26', '2026-07-29 21:40:26'),
(26, 15, 'storage/produk/Wq57HQ8Zuejec03nj3DWGzLO4ua4JSq7qAiINNgM.png', 1, '2026-07-29 22:28:33', '2026-07-29 22:28:33'),
(27, 16, 'storage/produk/ynLtYmJdnfWXzjZgRWPM4s6sOwVx80io1G9z90hf.png', 1, '2026-07-29 22:29:47', '2026-07-29 22:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `nama_varian` varchar(255) NOT NULL,
  `harga_tambahan` decimal(12,2) NOT NULL DEFAULT 0.00,
  `stok_varian` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `nama_varian`, `harga_tambahan`, `stok_varian`, `created_at`, `updated_at`) VALUES
(1, 1, 'Terakota Original', 0.00, 25, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(2, 1, 'Matte Glaze Finish', 10000.00, 15, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(3, 1, 'Edisi Ukir Motifs', 20000.00, 10, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(4, 2, 'Brushed Gold (4 pcs)', 0.00, 20, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(5, 2, 'Rose Gold Deluxe (6 pcs)', 35000.00, 12, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(6, 2, 'Antique Brass (4 pcs)', 15000.00, 18, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(7, 3, 'Kayu Ek - Kap Charcoal', 0.00, 30, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(8, 3, 'Kayu Jati - Kap Warm White', 15000.00, 20, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(9, 4, 'Ukuran 40x40 cm', 0.00, 40, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(10, 4, 'Ukuran 50x50 cm', 12000.00, 25, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(11, 5, 'Kapasitas 350ml (Standard)', 0.00, 15, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(12, 5, 'Kapasitas 600ml (Family)', 40000.00, 10, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(13, 6, 'Kayu Cedar Natural', 0.00, 50, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(14, 6, 'Cedar & Lavender Blend', 8000.00, 35, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(15, 7, 'Rangka Ek Light Wood', 0.00, 12, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(16, 7, 'Rangka Ek Walnut Dark', 30000.00, 8, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(17, 8, 'Keramik Saja (1 pc)', 0.00, 20, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(18, 8, 'Set Pair + Sumpit Kayu (2 pcs)', 45000.00, 15, '2026-07-29 16:57:24', '2026-07-29 16:57:24'),
(22, 11, 'bikin mampus', 2000.00, 12, '2026-07-29 17:18:31', '2026-07-29 17:18:31'),
(23, 11, 'bikin tepar', 3000.00, 21, '2026-07-29 17:18:31', '2026-07-29 17:18:31'),
(24, 11, 'bikin tewas', 4000.00, 11, '2026-07-29 17:18:31', '2026-07-29 17:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL,
  `komentar` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aV1oY9YU1IfAwT9kNjL4PSH0lVUc7TXKXljKRvTE', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieVo1NHpJb2pzb0Z5c2ZHajRFMVhodkxscm9TOXZvdVR4RFEwV1g3OCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi93ZWxjb21lLXNldHRpbmdzIjtzOjU6InJvdXRlIjtzOjIyOiJhZG1pbi53ZWxjb21lX3NldHRpbmdzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7fQ==', 1786090288),
('LE39ogOn5oIXK6rjw0C8x4O9I2CuVWUy5M9EOHyE', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicVNBSmJFNERPdDh4R0VJVUdUSVIyZWNGck5leDRFMDdqMHkyZTVZWiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1785309520),
('lR5sizZlgm4xps1wXdGiCmiiwmOjmqMnJT9Akekv', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSjdMek1kaVRqNkdVTDQwRnNYMUZLNFJBT3NxbEJlU3c4ZE5Cb1VNYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6ODA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbnZlbnRvcnk/Y2F0ZWdvcnk9MSZzZWFyY2g9YW1hbSZzb3J0PW5ld2VzdCZzdG9ja19zdGF0dXM9IjtzOjU6InJvdXRlIjtzOjExOiJpbnZlbnRvcmllcyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7czo0OiJjYXJ0IjthOjE6e3M6NjoiMTFfdjIzIjthOjEwOntzOjI6ImlkIjtpOjExO3M6ODoiY2FydF9rZXkiO3M6NjoiMTFfdjIzIjtzOjExOiJuYW1hX3Byb2R1ayI7czoxNToidG9rbyBkYWxhbSB0b2tvIjtzOjEwOiJ2YXJpYW50X2lkIjtzOjI6IjIzIjtzOjEyOiJ2YXJpYW50X25hbWUiO3M6MTE6ImJpa2luIHRlcGFyIjtzOjU6ImhhcmdhIjtkOjEyMzAwMDtzOjk6ImZvdG9fcGF0aCI7czo1OToic3RvcmFnZS9wcm9kdWsvVHFMUXRTdFBtcEpSNzc5OWhRbVFoak1oNERwYnlsMkEzU3lpYmxTNi5wbmciO3M6NjoianVtbGFoIjtpOjE7czoxMDoiYmVyYXRfZ3JhbSI7aTo1MDA7czoxMDoic3RvcmVfbmFtZSI7czoxMjoiV2FydW5nIE1hbmRhIjt9fX0=', 1785374897),
('O4SLESXoe4GLgxNrvXhhtruLVdKC6HSmSl4WwL6B', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOW10d0hIOGlsM2FhTGtvTm5JZlZZZkQxcDJhajFqcFd3UFNhblA2WSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvaW52ZW50b3J5IjtzOjU6InJvdXRlIjtzOjExOiJpbnZlbnRvcmllcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==', 1785397557),
('vluqimJQGuRGgDUqRlLT5AuAmWrZs0SphMWwfP2h', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidUJ0S1l5TktaVnFHQUNtZkJTWEVIVjE2SnI4M3BDM25maFV6UDhtTSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO3M6NToicm91dGUiO3M6NDoiaG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1785974472);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` longtext DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'string',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `logo_path` varchar(255) DEFAULT NULL,
  `banner_path` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `user_id`, `nama_toko`, `slug`, `deskripsi`, `logo_path`, `banner_path`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Artisan Nusantara Store', 'artisan-nusantara-store', 'Penyedia kerajinan tanah liat, kayu, dan perlengkapan rumah tangga kualitas terbaik buatan pengrajin lokal Indonesia.', NULL, NULL, 1, '2026-07-28 17:16:46', '2026-07-28 17:16:46'),
(2, 3, 'fotocopy sastra', 'fotocopy-sastra-1785289389', 'Toko resmi Sastra', NULL, NULL, 1, '2026-07-28 17:43:09', '2026-07-28 17:43:09'),
(3, 4, 'Warung Manda', 'warung-manda-1785373316', 'Toko resmi Sastra', NULL, NULL, 1, '2026-07-29 17:01:56', '2026-07-29 17:01:56'),
(4, 2, 'Sastra Store', 'sastra-store-1785974411', 'Toko Resmi Sastra', NULL, NULL, 1, '2026-08-05 16:00:12', '2026-08-05 16:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('customer','seller','admin') NOT NULL DEFAULT 'customer',
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phone`, `address`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Artisan Nusantara', 'seller@katalog.id', 'seller', '081234567890', 'Jl. Pengrajin No. 45, Bandung', NULL, NULL, '$2y$12$oqwgP3sRbQMu0SXqk08hVurMdQOaC4P7vvVGRuib5bPonw9qYXXY2', NULL, '2026-07-28 17:16:46', '2026-07-28 17:16:46'),
(2, 'Sastra', 'sastrawiguna596@gmail.com', 'customer', NULL, 'Jalan Genitri IV, Tonja', NULL, NULL, '$2y$12$MMAqVTuoqHanrTVZYGkLPuTzo6kRVO.vISpZhlAVGluh/Ga8n9XCC', NULL, '2026-07-28 17:21:08', '2026-07-28 17:26:30'),
(3, 'Sastra', 'igedesastrawigun8@gmail.com', 'seller', NULL, 'Jalan Genitri IV, Kesiman', NULL, NULL, '$2y$12$XIYBD4xjVPHfTHbn/JfiMeE9HEJhkpr9jTrI/caBQrpCP0oTAlpvW', NULL, '2026-07-28 17:43:09', '2026-07-28 22:46:02'),
(4, 'Sastra', 'ready16@gmail.com', 'seller', NULL, NULL, NULL, NULL, '$2y$12$rHj5ca.reHNT.UKN84OekeSWtHDqfQaly1ClnoJpdzt2VklaV6bFK', NULL, '2026-07-29 17:01:56', '2026-07-29 17:01:56'),
(5, 'Master Admin', 'admin@katalog.idn', 'admin', NULL, NULL, NULL, NULL, '$2y$12$nDwdULt2o30pr/PxwL.tA.2oMUnOFjRMrozJcpDgj1qqQkorwcMPu', NULL, '2026-08-06 23:50:18', '2026-08-06 23:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(255) NOT NULL DEFAULT 'Rumah',
  `receiver_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `label`, `receiver_name`, `phone`, `address`, `city`, `postal_code`, `latitude`, `longitude`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 2, 'rumah', 'Sastra', '08123456789', 'Jalan Genitri IV, Tonja', 'Denpasar', '80233', -8.6389522, 115.2327646, 1, '2026-07-28 17:26:30', '2026-07-28 17:26:30'),
(2, 3, 'rumah', 'fotocopy sastra', '08123456789', 'Jalan Genitri IV, Kesiman', 'Denpasar', '80233', -8.6388280, 115.2325600, 1, '2026-07-28 22:45:28', '2026-07-28 22:46:02'),
(3, 3, 'toko', 'fotocopy sastra', '081987654321', 'Gang Sari Ayo, Dangin Puri Kangin', 'Denpasar', '80233', -8.6377273, 115.2269697, 0, '2026-07-28 22:45:52', '2026-07-28 22:46:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_kode_transaksi_unique` (`kode_transaksi`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_store_id_foreign` (`store_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_store_id_foreign` (`store_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_galleries_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variants_product_id_foreign` (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `site_settings_key_unique` (`key`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stores_slug_unique` (`slug`),
  ADD KEY `stores_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_addresses_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD CONSTRAINT `product_galleries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

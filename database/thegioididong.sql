-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 14, 2020 lúc 05:37 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thegioididong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_active` tinyint(4) NOT NULL DEFAULT 1,
  `c_total_product` int(11) NOT NULL DEFAULT 0,
  `c_title_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_description_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_keyword_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `c_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_home_banner1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_home_banner2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_slug`, `c_avatar`, `c_active`, `c_total_product`, `c_title_seo`, `c_description_seo`, `c_keyword_seo`, `created_at`, `updated_at`, `c_banner`, `c_home_banner1`, `c_home_banner2`) VALUES
(30, 'Bộ lập trình', 'bo-lap-trinh', NULL, 1, 0, NULL, NULL, NULL, '2020-01-31 19:54:34', '2020-03-14 21:14:39', '2020-03-15__2-4.jpg', '2020-03-15__2-6.jpg', '2020-03-15__2-3.jpg'),
(33, 'Cảm biến nhiệt', 'cam-bien-nhiet', NULL, 1, 0, NULL, NULL, NULL, '2020-02-20 04:09:57', '2020-02-20 04:09:57', NULL, NULL, NULL),
(34, 'BTU meter', 'btu-meter', NULL, 1, 0, NULL, NULL, NULL, '2020-02-20 04:10:57', '2020-02-20 04:10:57', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `img_name`, `img_title`, `img_alt`, `img_description`, `created_at`, `updated_at`) VALUES
(1, '2020-03-18__7.jpg', NULL, NULL, NULL, '2020-03-18 03:11:16', '2020-03-18 03:11:16'),
(2, '2020-03-18__1.jpg', NULL, NULL, NULL, '2020-03-18 03:23:13', '2020-03-18 03:23:13'),
(3, '2020-03-18__bg-banner.jpg', NULL, NULL, NULL, '2020-03-18 03:38:50', '2020-03-18 03:38:50'),
(4, '2020-03-18__2.jpg', NULL, NULL, NULL, '2020-03-18 03:42:39', '2020-03-18 03:42:39'),
(5, '2020-03-18__7.jpg', NULL, NULL, NULL, '2020-03-18 03:43:21', '2020-03-18 03:43:21'),
(6, '2020-03-18__3.jpg', NULL, NULL, NULL, '2020-03-18 03:43:35', '2020-03-18 03:43:35'),
(7, '2020-03-18__7.jpg', NULL, NULL, NULL, '2020-03-18 03:43:46', '2020-03-18 03:43:46'),
(8, '2020-03-18__4.jpg', NULL, NULL, NULL, '2020-03-18 04:03:10', '2020-03-18 04:03:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_18_050639_create_category_table', 1),
(5, '2020_01_18_051907_create_categories_table', 2),
(6, '2020_01_19_033644_create-products-table', 3),
(7, '2020_02_03_084319_create-post-table', 4),
(9, '2020_03_06_090309_create_banner', 5),
(10, '2020_03_15_035031_add_banner', 6),
(11, '2020_03_15_045413_create_slider_table', 7),
(12, '2020_03_15_082305_add_colurm_slider', 8),
(14, '2020_03_15_145834_create_images_table', 9),
(15, '2020_04_09_084947_create_transactions_table', 10),
(16, '2020_04_09_085724_create_orders_table', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `od_transaction_id` bigint(20) NOT NULL DEFAULT 0,
  `od_product_id` bigint(20) NOT NULL DEFAULT 0,
  `od_price` int(11) NOT NULL DEFAULT 0,
  `od_sale` int(11) NOT NULL DEFAULT 0,
  `od_qty` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `od_transaction_id`, `od_product_id`, `od_price`, `od_sale`, `od_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 18, 1200000, 1000000, 3, NULL, NULL),
(3, 3, 20, 1000000, 900000, 1, NULL, NULL),
(4, 4, 20, 1000000, 900000, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_active` tinyint(4) NOT NULL DEFAULT 1,
  `post_hot` tinyint(4) NOT NULL DEFAULT 0,
  `post_view` int(11) DEFAULT NULL,
  `post_cate_id` int(11) DEFAULT NULL,
  `post_title_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_description_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_keyword_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `post_name`, `post_avatar`, `post_slug`, `post_active`, `post_hot`, `post_view`, `post_cate_id`, `post_title_seo`, `post_description_seo`, `post_keyword_seo`, `post_content`, `created_at`, `updated_at`) VALUES
(1, 'bài viết số 1', NULL, 'bai-viet-so-1', 1, 0, NULL, NULL, 'bai viet so 1', NULL, NULL, NULL, '2020-02-03 02:07:39', '2020-02-03 02:07:39'),
(2, 'etst', NULL, 'test', 1, 0, NULL, NULL, 'test', NULL, NULL, '<p>Xin ch&agrave;o anh em, tiếp tục series&nbsp;<strong>Laravel v&agrave; những điều th&uacute; vị về n&oacute;</strong>&nbsp;th&igrave; h&ocirc;m nay m&igrave;nh muốn giới thiệu đến anh những kiến thức li&ecirc;n quan đến&nbsp;<strong>Route</strong>. Nếu như khi m&igrave;nh l&agrave;m một project bằng PHP thuần th&igrave; ch&uacute;ng ta sẽ sử file htaccess d&ugrave;ng để cấu h&igrave;nh m&aacute;y chủ apache , tức l&agrave; khi người d&ugrave;ng đ&aacute;nh đường dẫn tr&ecirc;n browser th&igrave; đường dẫn đ&oacute; sẽ map trong file htaccess để điều hướng đến c&aacute;c page của trang web. Nhưng trong Laravel th&igrave;&nbsp;<code>Route</code>&nbsp;sẽ thực hiện điều đ&oacute;.</p>\r\n\r\n<h1>1.Cấu tr&uacute;c thư mục</h1>\r\n\r\n<p>Th&igrave; để viết Route trong Laravel th&igrave; ch&uacute;ng ta sẽ viết trong routes/web.php - định nghĩa c&aacute;c route cho web, c&ograve;n routes/api.php để định nghĩa route cho api.<img alt=\"\" src=\"https://images.viblo.asia/5c64e436-15f9-4aac-8c3c-061974b621c7.png\" srcset=\"https://images.viblo.asia/retina/5c64e436-15f9-4aac-8c3c-061974b621c7.png 2x\" /></p>\r\n\r\n<h1>2.Cơ bản về Route</h1>\r\n\r\n<p>B&acirc;y giờ ch&uacute;ng ta thử mở file routes/web.php l&ecirc;n để viết thử 1 Route xem n&oacute; chạy thử như n&agrave;o nh&eacute;.</p>\r\n\r\n<pre>\r\n<code>&lt;?php\r\n\r\n/*\r\n|--------------------------------------------------------------------------\r\n| Web Routes\r\n|--------------------------------------------------------------------------\r\n|\r\n| Here is where you can register web routes for your application. These\r\n| routes are loaded by the RouteServiceProvider within a group which\r\n| contains the &quot;web&quot; middleware group. Now create something great!\r\n|\r\n*/\r\n\r\nRoute::get(&#39;/&#39;, function () {\r\n    return view(&#39;welcome&#39;);\r\n});\r\n\r\nRoute::get(&#39;test-route&#39;, function () {\r\n    return &quot;Xin chao cac ban&quot;;\r\n});\r\n</code></pre>\r\n\r\n<p>B&acirc;y giờ ch&uacute;ng ta g&otilde; đường link&nbsp;<code>localhost:8000/test-route</code>&nbsp;nh&eacute;&nbsp;<img alt=\"\" src=\"https://images.viblo.asia/3a1fef18-e9dd-4c7a-ab56-24e2a0a222d4.png\" srcset=\"https://images.viblo.asia/retina/3a1fef18-e9dd-4c7a-ab56-24e2a0a222d4.png 2x\" /></p>\r\n\r\n<h2>C&aacute;c phương thức trong Route</h2>\r\n\r\n<p>Th&igrave; mặc định route sẽ hỗ trợ c&aacute;c phương thức như sau:</p>\r\n\r\n<pre>\r\n<code>Route::get($uri, $callback);\r\nRoute::post($uri, $callback);\r\nRoute::put($uri, $callback);\r\nRoute::patch($uri, $callback);\r\nRoute::delete($uri, $callback);\r\nRoute::options($uri, $callback);\r\n</code></pre>\r\n\r\n<p>Trong đ&oacute; $url: đường dẫn route v&agrave; $callback : l&agrave; một h&agrave;nh động n&agrave;o đ&oacute; sẽ được thực hiện để trả về.</p>\r\n\r\n<h2>Tham số t&ugrave;y chọn</h2>\r\n\r\n<p>Nhiều khi ch&uacute;ng ta sẽ cần truyền tham số tr&ecirc;n đường dẫn, ch&uacute;ng ta cũng c&oacute; thể truyền trong route. V&iacute; dụ,ch&uacute;ng ta cần lấy ID của user từ URL, ch&uacute;ng ta c&oacute; thể viết route như sau:</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;user/{id}&#39;, function($id) {\r\n      echo &quot;ID của user l&agrave; : &quot; . $id;\r\n});\r\n</code></pre>\r\n\r\n<p>Ngo&agrave;i ra ch&uacute;ng ta cũng c&oacute; thể truyền nhiều tham số trong URL</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;user/{id}/{name}/{comment}&#39;, function($id, $name, $comment) {\r\n      echo &quot;ID của user l&agrave; : &quot; . $id;\r\n      echo &quot;&lt;br&gt;T&ecirc;n của user l&agrave; : &quot; . $name;\r\n      echo &quot;&lt;br&gt; Comment của user: &quot; . $comment;\r\n});\r\n</code></pre>\r\n\r\n<h2>T&ecirc;n Route</h2>\r\n\r\n<p>T&ecirc;n routes cho ph&eacute;p ch&uacute;ng ta thuận tiện hơn khi chuyển hướng c&aacute;c route cụ thể. Ch&uacute;ng ta c&oacute; thể đặt t&ecirc;n route bằng c&aacute;ch th&ecirc;m&nbsp;<code>name</code>&nbsp;khi ch&uacute;ng ta định nghĩa route.</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;posts&#39;, function () { \r\n    //code\r\n})-&gt;name(&#39;posts&#39;);\r\n</code></pre>\r\n\r\n<p>Hoặc ngo&agrave;i ra ch&uacute;ng ta cũng c&oacute; thể chỉ định t&ecirc;n route cho controller.</p>\r\n\r\n<pre>\r\n<code>Route::post(&#39;posts&#39;, &#39;PostController@store&#39;)-&gt;name(&#39;posts.store&#39;);\r\n</code></pre>\r\n\r\n<h2>Sử dụng helper route()</h2>\r\n\r\n<p>Khi ch&uacute;ng ta đ&atilde; đặt t&ecirc;n route trong phần định nghĩa route ở tr&ecirc;n, ch&uacute;ng ta cũng c&oacute; thể lấy đường dẫn bằng helper&nbsp;<code>route()</code>. V&iacute; dụ:&nbsp;<code>$url = route(&#39;posts.store&#39;)</code>. Hoặc ch&uacute;ng ta cũng c&oacute; thể chuyển hướng trang bằng c&aacute;ch sử dụng h&agrave;m&nbsp;<code>route()</code>:&nbsp;<code>return redirect()-&gt;route(&#39;posts.list&#39;)</code>.</p>\r\n\r\n<p>Khi route được đặt t&ecirc;n v&agrave; c&oacute; tham số tr&ecirc;n đường dẫn th&igrave; ch&uacute;ng ta sẽ sẽ truyền tham số v&agrave;o trong h&agrave;m helper&nbsp;<code>route()</code>&nbsp;như sau. V&iacute; dụ ch&uacute;ng ta c&oacute; route sau :</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;user/{id}&#39;, function($id) {\r\n      echo &quot;ID của user l&agrave; : &quot; . $id;\r\n})-&gt;name(&#39;users.detail&#39;);\r\n</code></pre>\r\n\r\n<p>$url = route(&#39;users.detail&#39;, [&#39;id&#39; =&gt; 10]);</p>\r\n\r\n<h2>Nh&oacute;m Route</h2>\r\n\r\n<p>Nhiều khi những route c&oacute; chung h&agrave;nh vi th&igrave; ch&uacute;ng ta sẽ nh&oacute;m route v&agrave;o.</p>\r\n\r\n<pre>\r\n<code>Route::group([&#39;namespace&#39; =&gt; &#39;Admin&#39;], function () {\r\n    Route::get(&#39;/&#39;, function ()    {\r\n        //code\r\n    });\r\n\r\n    Route::get(&#39;posts&#39;, function () {\r\n        //code\r\n    });\r\n});\r\n</code></pre>\r\n\r\n<p>Ở tr&ecirc;n ch&uacute;ng ta thấy xuất hiện&nbsp;<code>namespace</code>&nbsp;, đừng bối rối v&igrave; m&igrave;nh sẽ giới thiệu cho c&aacute;c bạn ngay ở dưới đ&acirc;y.</p>\r\n\r\n<h2>Namespaces</h2>\r\n\r\n<p>Namespace trong Laravel gi&ocirc;ng như PHP namespace được chỉ định với một nh&oacute;m controller.</p>\r\n\r\n<pre>\r\n<code>Route::group([&#39;namespace&#39; =&gt; &#39;Admin&#39;], function() {\r\n    // Controllers trong namespace &quot;App\\Http\\Controllers\\Admin&quot;\r\n});\r\n\r\n</code></pre>\r\n\r\n<h2>Prefix</h2>\r\n\r\n<p>Ch&uacute;ng ta z&eacute;t v&iacute; dụ sau</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;admin/posts&#39;, &#39;PostController@index&#39;);\r\nRoute::get(&#39;admin/posts/create&#39;, &#39;PostController@create&#39;);\r\nRoute::post(&#39;admin/posts/store&#39;, &#39;PostController@store&#39;);\r\nRoute::get(&#39;admin/posts/{id}/edit&#39;, &#39;PostController@edit&#39;);\r\nRoute::patch(&#39;admin/posts/{id}&#39;, &#39;PostController@update);\r\nRoute::patch(&#39;admin/posts/{id}&#39;, &#39;PostController@destroy&#39;);\r\n</code></pre>\r\n\r\n<p>C&aacute;c bạn c&oacute; thấy đặc điểm chung của c&aacute;c route tr&ecirc;n kh&ocirc;ng, n&oacute; đều bắt đầu bằng admin v&igrave; thể để viết gọn lại c&aacute;c URL th&igrave; ch&uacute;ng ta sẽ sử dụng&nbsp;<code>prefix</code>&nbsp;để URL khi định nghĩa route ngắn gọn dễ nh&igrave;n hơn.</p>\r\n\r\n<pre>\r\n<code>Route::group([&#39;prefix&#39; =&gt; &#39;admin&#39;], function () {\r\n    Route::get(&#39;posts&#39;, &#39;PostController@index&#39;);\r\n    Route::get(&#39;posts/create&#39;, &#39;PostController@create&#39;);\r\n    Route::post(&#39;posts/store&#39;, &#39;PostController@store&#39;);\r\n    Route::get(&#39;posts/{id}/edit&#39;, &#39;PostController@edit&#39;);\r\n    Route::patch(&#39;posts/{id}&#39;, &#39;PostController@update);\r\n    Route::patch(&#39;posts/{id}&#39;, &#39;PostController@destroy&#39;);\r\n});\r\n</code></pre>\r\n\r\n<h1>3.Route Model Binding</h1>\r\n\r\n<p>Qua c&aacute;c v&iacute; dụ tr&ecirc;n chắc hẳn bạn cũng hiểu được phần n&agrave;o về c&aacute;c th&agrave;nh phần cơ bản của route. Ch&uacute;ng ta c&ugrave;ng x&eacute;t v&iacute; dụ nh&eacute;</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;admin/posts/{id}&#39;, &#39;PostController@getPostDetail&#39;);\r\n\r\n//trong Controller PostController ch&uacute;ng ta sẽ định nghĩa function getPosstDetail như sau\r\n\r\npublic function getPostDetail($id)\r\n{\r\n    $post = Post::find($id);//trả về một instance model\r\n}\r\n</code></pre>\r\n\r\n<h2>Implicit Binding</h2>\r\n\r\n<p>Trong Laravel th&igrave; n&oacute; sẽ c&oacute; hỗ trợ tự động giải quyết gợi &yacute; Eloquent models được x&aacute;c định b&ecirc;n trong route hoặc controller c&oacute; t&ecirc;n biến ph&ugrave; hợp với t&ecirc;n segment.</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;admin/posts/{post}&#39;, &#39;PostController@getPostDetail&#39;);\r\n​\r\n//trong Controller PostController ch&uacute;ng ta sẽ định nghĩa function getPosstDetail như sau\r\n​\r\npublic function getPostDetail(Post $post)\r\n{\r\n    //code\r\n}\r\n</code></pre>\r\n\r\n<p>Giải th&iacute;ch t&iacute; chỗ n&agrave;y nh&eacute;: Trong v&iacute; dụ tr&ecirc;n, Eloquent đ&atilde; gợi &yacute; biến $post định nghĩa trong route ph&ugrave; hợp với {post} segment trong URL, Laravel tự động đẩy c&aacute;c model Post c&oacute; ID ph&ugrave; hợp với gi&aacute; trị tương ứng từ URL. Nếu kh&ocirc;ng t&igrave;m thấy trong CSDL của bạn th&igrave; n&oacute; sẽ trả về lỗi 404 HTTP.</p>\r\n\r\n<h2>Explicit Binding</h2>\r\n\r\n<p>Để đăng k&yacute; một explicit binding, sử dụng phương thức model để x&aacute;c định class cho một than số. C&aacute;c bạn n&ecirc;n định nghĩa explicit bindings b&ecirc;n trong phương thức&nbsp;<code>boot</code>&nbsp;của&nbsp;<code>RouteSerrviceProvider</code>&nbsp;class</p>\r\n\r\n<pre>\r\n<code>public function boot()\r\n{\r\n    parent::boot();\r\n\r\n    Route::model(&#39;post&#39;, App\\Post::class);\r\n}\r\n</code></pre>\r\n\r\n<p>Trong file web.php định nghĩa một route</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;admin/{post}&#39;, &#39;PostController@getPosstDetail&#39;);\r\n</code></pre>\r\n\r\n<p>Khi ch&uacute;ng ta rằng buộc tham số {post} trong model App\\Post, một instance của Post sẽ được inject v&agrave;o route. V&igrave; vậy v&iacute; dụ như một request đến admin/1 sẽ được hiểu như l&agrave; lấy ra b&agrave;i post c&oacute; id = 1. Nếu instance model kh&ocirc;ng t&igrave;m thấy trong CSDL, một response 404 HTTP sẽ tự động được sinh ra.</p>\r\n\r\n<h2>Ch&uacute; &yacute;.</h2>\r\n\r\n<p>Nếu m&agrave; ch&uacute;ng ta tạo bảng m&agrave; c&oacute; kh&oacute;a ch&iacute;nh kh&aacute;c với&nbsp;<code>id</code>. V&iacute; dụ thường thường c&aacute;c bạn sẽ đặt kh&oacute;a ch&iacute;nh trong table l&agrave;&nbsp;<code>id</code>&nbsp;nhưng b&acirc;y giờ m&igrave;nh kh&ocirc;ng muốn đặt l&agrave;&nbsp;<code>id</code>&nbsp;nữa th&igrave; sẽ thay đổi như sau. Viết v&agrave;o trong Eloquent model</p>\r\n\r\n<pre>\r\n<code>/**\r\n * Get the route key for the model.\r\n *\r\n * @return  string\r\n */\r\npublic function getRouteKeyName()\r\n{\r\n    return &#39;post_id&#39;;\r\n}\r\n</code></pre>\r\n\r\n<h1>4. Form</h1>\r\n\r\n<p>Nếu như bạn kh&ocirc;ng d&ugrave;ng&nbsp;<code>Laravel Collective</code>&nbsp;m&agrave; c&aacute;c bạn d&ugrave;ng thuần HTML Form th&igrave; khi ch&uacute;ng ta định nghĩa một số method&nbsp;<code>PUT, PATCH, DELETE</code>&nbsp;th&igrave; sẽ kh&ocirc;ng được hỗ trợ để map method với route n&agrave;o. V&igrave; vậy khi định nghĩa&nbsp;<code>PUT, PATCH, DELETE</code>&nbsp;routes m&agrave; được gọi từ HTML Form th&igrave; ch&uacute;ng ta sẽ cần th&ecirc;m trường input&nbsp;<code>hidden</code>&nbsp;v&agrave;o form. Gi&aacute; trị của trường hidden l&agrave; method sẽ sử dụng phương thức HTTP request n&agrave;o. V&iacute; dụ</p>\r\n\r\n<pre>\r\n<code>&lt;form action=&quot;posts/1&quot; method=&quot;POST&quot;&gt;\r\n    &lt;input type=&quot;hidden&quot; name=&quot;_method&quot; value=&quot;PUT&quot;&gt;\r\n    &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;UYZ2pUvpnxytOMB3U28efT78GH7Dl9wupySLRZ0F&quot;&gt;\r\n&lt;/form&gt;\r\n</code></pre>\r\n\r\n<h1>5.Kết luận</h1>\r\n\r\n<p>Vừa rồi th&igrave; m&igrave;nh c&ugrave;ng với c&aacute;c bạn t&igrave;m hiểu những c&aacute;i cơ bản nhất về route, n&oacute; c&oacute; thể gi&uacute;p c&aacute;c bạn mường tượng c&aacute;ch sử dụng route như thế n&agrave;o. M&igrave;nh xin kết th&uacute;c b&agrave;i viết ở đ&acirc;y, mọi thắc mắc g&igrave; h&atilde;y comment ph&iacute;a dưới b&agrave;i viết cho m&igrave;nh nh&eacute; !!</p>\r\n\r\n<h1>6.Tham khảo</h1>\r\n\r\n<p><a href=\"https://laravel.com/docs/5.6/routing\" target=\"_blank\">https://laravel.com/docs/5.6/routing</a></p>\r\n\r\n<p><a href=\"https://laravel.com/docs/5.6/helpers#method-route\" target=\"_blank\">https://laravel.com/docs/5.6/helpers#method-route</a></p>', '2020-02-03 02:44:18', '2020-02-03 02:44:18'),
(3, 'bai có hnih', NULL, 'add', 1, 0, NULL, NULL, 'adđ', NULL, NULL, '<p>Xin ch&agrave;o anh em, tiếp tục series&nbsp;<strong>Laravel v&agrave; những điều th&uacute; vị về n&oacute;</strong>&nbsp;th&igrave; h&ocirc;m nay m&igrave;nh muốn giới thiệu đến anh những kiến thức li&ecirc;n quan đến&nbsp;<strong>Route</strong>. Nếu như khi m&igrave;nh l&agrave;m một project bằng PHP thuần th&igrave; ch&uacute;ng ta sẽ sử file htaccess d&ugrave;ng để cấu h&igrave;nh m&aacute;y chủ apache , tức l&agrave; khi người d&ugrave;ng đ&aacute;nh đường dẫn tr&ecirc;n browser th&igrave; đường dẫn đ&oacute; sẽ map trong file htaccess để điều hướng đến c&aacute;c page của trang web. Nhưng trong Laravel th&igrave;&nbsp;<code>Route</code>&nbsp;sẽ thực hiện điều đ&oacute;.</p>\r\n\r\n<h1>1.Cấu tr&uacute;c thư mục</h1>\r\n\r\n<p>Th&igrave; để viết Route trong Laravel th&igrave; ch&uacute;ng ta sẽ viết trong routes/web.php - định nghĩa c&aacute;c route cho web, c&ograve;n routes/api.php để định nghĩa route cho api.</p>\r\n\r\n<h1>2.Cơ bản về Route</h1>\r\n\r\n<p>B&acirc;y giờ ch&uacute;ng ta thử mở file routes/web.php l&ecirc;n để viết thử 1 Route xem n&oacute; chạy thử như n&agrave;o nh&eacute;.</p>\r\n\r\n<pre>\r\n<code>&lt;?php\r\n</code>\r\n</pre>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://thegioididong.abc/af03200a-9df9-4567-ae4c-d951ab60921f\" width=\"1366\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://thegioididong.abc/970c54d5-122b-4107-8e4e-04067986a771\" width=\"1366\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<pre>\r\n<code>\r\n/*\r\n|--------------------------------------------------------------------------\r\n| Web Routes\r\n|--------------------------------------------------------------------------\r\n|\r\n| Here is where you can register web routes for your application. These\r\n| routes are loaded by the RouteServiceProvider within a group which\r\n| contains the &quot;web&quot; middleware group. Now create something great!\r\n|\r\n*/\r\n\r\nRoute::get(&#39;/&#39;, function () {\r\n    return view(&#39;welcome&#39;);\r\n});\r\n\r\nRoute::get(&#39;test-route&#39;, function () {\r\n    return &quot;Xin chao cac ban&quot;;\r\n});\r\n</code></pre>\r\n\r\n<p>B&acirc;y giờ ch&uacute;ng ta g&otilde; đường link&nbsp;<code>localhost:8000/test-route</code>&nbsp;nh&eacute;&nbsp;<img alt=\"\" src=\"https://images.viblo.asia/3a1fef18-e9dd-4c7a-ab56-24e2a0a222d4.png\" srcset=\"https://images.viblo.asia/retina/3a1fef18-e9dd-4c7a-ab56-24e2a0a222d4.png 2x\" /></p>\r\n\r\n<h2>C&aacute;c phương thức trong Route</h2>\r\n\r\n<p>Th&igrave; mặc định route sẽ hỗ trợ c&aacute;c phương thức như sau:</p>\r\n\r\n<pre>\r\n<code>Route::get($uri, $callback);\r\nRoute::post($uri, $callback);\r\nRoute::put($uri, $callback);\r\nRoute::patch($uri, $callback);\r\nRoute::delete($uri, $callback);\r\nRoute::options($uri, $callback);\r\n</code></pre>\r\n\r\n<p>Trong đ&oacute; $url: đường dẫn route v&agrave; $callback : l&agrave; một h&agrave;nh động n&agrave;o đ&oacute; sẽ được thực hiện để trả về.</p>\r\n\r\n<h2>Tham số t&ugrave;y chọn</h2>\r\n\r\n<p>Nhiều khi ch&uacute;ng ta sẽ cần truyền tham số tr&ecirc;n đường dẫn, ch&uacute;ng ta cũng c&oacute; thể truyền trong route. V&iacute; dụ,ch&uacute;ng ta cần lấy ID của user từ URL, ch&uacute;ng ta c&oacute; thể viết route như sau:</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;user/{id}&#39;, function($id) {\r\n      echo &quot;ID của user l&agrave; : &quot; . $id;\r\n});\r\n</code></pre>\r\n\r\n<p>Ngo&agrave;i ra ch&uacute;ng ta cũng c&oacute; thể truyền nhiều tham số trong URL</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;user/{id}/{name}/{comment}&#39;, function($id, $name, $comment) {\r\n      echo &quot;ID của user l&agrave; : &quot; . $id;\r\n      echo &quot;&lt;br&gt;T&ecirc;n của user l&agrave; : &quot; . $name;\r\n      echo &quot;&lt;br&gt; Comment của user: &quot; . $comment;\r\n});\r\n</code></pre>\r\n\r\n<h2>T&ecirc;n Route</h2>\r\n\r\n<p>T&ecirc;n routes cho ph&eacute;p ch&uacute;ng ta thuận tiện hơn khi chuyển hướng c&aacute;c route cụ thể. Ch&uacute;ng ta c&oacute; thể đặt t&ecirc;n route bằng c&aacute;ch th&ecirc;m&nbsp;<code>name</code>&nbsp;khi ch&uacute;ng ta định nghĩa route.</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;posts&#39;, function () { \r\n    //code\r\n})-&gt;name(&#39;posts&#39;);\r\n</code></pre>\r\n\r\n<p>Hoặc ngo&agrave;i ra ch&uacute;ng ta cũng c&oacute; thể chỉ định t&ecirc;n route cho controller.</p>\r\n\r\n<pre>\r\n<code>Route::post(&#39;posts&#39;, &#39;PostController@store&#39;)-&gt;name(&#39;posts.store&#39;);\r\n</code></pre>\r\n\r\n<h2>Sử dụng helper route()</h2>\r\n\r\n<p>Khi ch&uacute;ng ta đ&atilde; đặt t&ecirc;n route trong phần định nghĩa route ở tr&ecirc;n, ch&uacute;ng ta cũng c&oacute; thể lấy đường dẫn bằng helper&nbsp;<code>route()</code>. V&iacute; dụ:&nbsp;<code>$url = route(&#39;posts.store&#39;)</code>. Hoặc ch&uacute;ng ta cũng c&oacute; thể chuyển hướng trang bằng c&aacute;ch sử dụng h&agrave;m&nbsp;<code>route()</code>:&nbsp;<code>return redirect()-&gt;route(&#39;posts.list&#39;)</code>.</p>\r\n\r\n<p>Khi route được đặt t&ecirc;n v&agrave; c&oacute; tham số tr&ecirc;n đường dẫn th&igrave; ch&uacute;ng ta sẽ sẽ truyền tham số v&agrave;o trong h&agrave;m helper&nbsp;<code>route()</code>&nbsp;như sau. V&iacute; dụ ch&uacute;ng ta c&oacute; route sau :</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;user/{id}&#39;, function($id) {\r\n      echo &quot;ID của user l&agrave; : &quot; . $id;\r\n})-&gt;name(&#39;users.detail&#39;);\r\n</code></pre>\r\n\r\n<p>$url = route(&#39;users.detail&#39;, [&#39;id&#39; =&gt; 10]);</p>\r\n\r\n<h2>Nh&oacute;m Route</h2>\r\n\r\n<p>Nhiều khi những route c&oacute; chung h&agrave;nh vi th&igrave; ch&uacute;ng ta sẽ nh&oacute;m route v&agrave;o.</p>\r\n\r\n<pre>\r\n<code>Route::group([&#39;namespace&#39; =&gt; &#39;Admin&#39;], function () {\r\n    Route::get(&#39;/&#39;, function ()    {\r\n        //code\r\n    });\r\n\r\n    Route::get(&#39;posts&#39;, function () {\r\n        //code\r\n    });\r\n});\r\n</code></pre>\r\n\r\n<p>Ở tr&ecirc;n ch&uacute;ng ta thấy xuất hiện&nbsp;<code>namespace</code>&nbsp;, đừng bối rối v&igrave; m&igrave;nh sẽ giới thiệu cho c&aacute;c bạn ngay ở dưới đ&acirc;y.</p>\r\n\r\n<h2>Namespaces</h2>\r\n\r\n<p>Namespace trong Laravel gi&ocirc;ng như PHP namespace được chỉ định với một nh&oacute;m controller.</p>\r\n\r\n<pre>\r\n<code>Route::group([&#39;namespace&#39; =&gt; &#39;Admin&#39;], function() {\r\n    // Controllers trong namespace &quot;App\\Http\\Controllers\\Admin&quot;\r\n});\r\n\r\n</code></pre>\r\n\r\n<h2>Prefix</h2>\r\n\r\n<p>Ch&uacute;ng ta z&eacute;t v&iacute; dụ sau</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;admin/posts&#39;, &#39;PostController@index&#39;);\r\nRoute::get(&#39;admin/posts/create&#39;, &#39;PostController@create&#39;);\r\nRoute::post(&#39;admin/posts/store&#39;, &#39;PostController@store&#39;);\r\nRoute::get(&#39;admin/posts/{id}/edit&#39;, &#39;PostController@edit&#39;);\r\nRoute::patch(&#39;admin/posts/{id}&#39;, &#39;PostController@update);\r\nRoute::patch(&#39;admin/posts/{id}&#39;, &#39;PostController@destroy&#39;);\r\n</code></pre>\r\n\r\n<p>C&aacute;c bạn c&oacute; thấy đặc điểm chung của c&aacute;c route tr&ecirc;n kh&ocirc;ng, n&oacute; đều bắt đầu bằng admin v&igrave; thể để viết gọn lại c&aacute;c URL th&igrave; ch&uacute;ng ta sẽ sử dụng&nbsp;<code>prefix</code>&nbsp;để URL khi định nghĩa route ngắn gọn dễ nh&igrave;n hơn.</p>\r\n\r\n<pre>\r\n<code>Route::group([&#39;prefix&#39; =&gt; &#39;admin&#39;], function () {\r\n    Route::get(&#39;posts&#39;, &#39;PostController@index&#39;);\r\n    Route::get(&#39;posts/create&#39;, &#39;PostController@create&#39;);\r\n    Route::post(&#39;posts/store&#39;, &#39;PostController@store&#39;);\r\n    Route::get(&#39;posts/{id}/edit&#39;, &#39;PostController@edit&#39;);\r\n    Route::patch(&#39;posts/{id}&#39;, &#39;PostController@update);\r\n    Route::patch(&#39;posts/{id}&#39;, &#39;PostController@destroy&#39;);\r\n});\r\n</code></pre>\r\n\r\n<h1>3.Route Model Binding</h1>\r\n\r\n<p>Qua c&aacute;c v&iacute; dụ tr&ecirc;n chắc hẳn bạn cũng hiểu được phần n&agrave;o về c&aacute;c th&agrave;nh phần cơ bản của route. Ch&uacute;ng ta c&ugrave;ng x&eacute;t v&iacute; dụ nh&eacute;</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;admin/posts/{id}&#39;, &#39;PostController@getPostDetail&#39;);\r\n\r\n//trong Controller PostController ch&uacute;ng ta sẽ định nghĩa function getPosstDetail như sau\r\n\r\npublic function getPostDetail($id)\r\n{\r\n    $post = Post::find($id);//trả về một instance model\r\n}\r\n</code></pre>\r\n\r\n<h2>Implicit Binding</h2>\r\n\r\n<p>Trong Laravel th&igrave; n&oacute; sẽ c&oacute; hỗ trợ tự động giải quyết gợi &yacute; Eloquent models được x&aacute;c định b&ecirc;n trong route hoặc controller c&oacute; t&ecirc;n biến ph&ugrave; hợp với t&ecirc;n segment.</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;admin/posts/{post}&#39;, &#39;PostController@getPostDetail&#39;);\r\n​\r\n//trong Controller PostController ch&uacute;ng ta sẽ định nghĩa function getPosstDetail như sau\r\n​\r\npublic function getPostDetail(Post $post)\r\n{\r\n    //code\r\n}\r\n</code></pre>\r\n\r\n<p>Giải th&iacute;ch t&iacute; chỗ n&agrave;y nh&eacute;: Trong v&iacute; dụ tr&ecirc;n, Eloquent đ&atilde; gợi &yacute; biến $post định nghĩa trong route ph&ugrave; hợp với {post} segment trong URL, Laravel tự động đẩy c&aacute;c model Post c&oacute; ID ph&ugrave; hợp với gi&aacute; trị tương ứng từ URL. Nếu kh&ocirc;ng t&igrave;m thấy trong CSDL của bạn th&igrave; n&oacute; sẽ trả về lỗi 404 HTTP.</p>\r\n\r\n<h2>Explicit Binding</h2>\r\n\r\n<p>Để đăng k&yacute; một explicit binding, sử dụng phương thức model để x&aacute;c định class cho một than số. C&aacute;c bạn n&ecirc;n định nghĩa explicit bindings b&ecirc;n trong phương thức&nbsp;<code>boot</code>&nbsp;của&nbsp;<code>RouteSerrviceProvider</code>&nbsp;class</p>\r\n\r\n<pre>\r\n<code>public function boot()\r\n{\r\n    parent::boot();\r\n\r\n    Route::model(&#39;post&#39;, App\\Post::class);\r\n}\r\n</code></pre>\r\n\r\n<p>Trong file web.php định nghĩa một route</p>\r\n\r\n<pre>\r\n<code>Route::get(&#39;admin/{post}&#39;, &#39;PostController@getPosstDetail&#39;);\r\n</code></pre>\r\n\r\n<p>Khi ch&uacute;ng ta rằng buộc tham số {post} trong model App\\Post, một instance của Post sẽ được inject v&agrave;o route. V&igrave; vậy v&iacute; dụ như một request đến admin/1 sẽ được hiểu như l&agrave; lấy ra b&agrave;i post c&oacute; id = 1. Nếu instance model kh&ocirc;ng t&igrave;m thấy trong CSDL, một response 404 HTTP sẽ tự động được sinh ra.</p>\r\n\r\n<h2>Ch&uacute; &yacute;.</h2>\r\n\r\n<p>Nếu m&agrave; ch&uacute;ng ta tạo bảng m&agrave; c&oacute; kh&oacute;a ch&iacute;nh kh&aacute;c với&nbsp;<code>id</code>. V&iacute; dụ thường thường c&aacute;c bạn sẽ đặt kh&oacute;a ch&iacute;nh trong table l&agrave;&nbsp;<code>id</code>&nbsp;nhưng b&acirc;y giờ m&igrave;nh kh&ocirc;ng muốn đặt l&agrave;&nbsp;<code>id</code>&nbsp;nữa th&igrave; sẽ thay đổi như sau. Viết v&agrave;o trong Eloquent model</p>\r\n\r\n<pre>\r\n<code>/**\r\n * Get the route key for the model.\r\n *\r\n * @return  string\r\n */\r\npublic function getRouteKeyName()\r\n{\r\n    return &#39;post_id&#39;;\r\n}\r\n</code></pre>\r\n\r\n<h1>4. Form</h1>\r\n\r\n<p>Nếu như bạn kh&ocirc;ng d&ugrave;ng&nbsp;<code>Laravel Collective</code>&nbsp;m&agrave; c&aacute;c bạn d&ugrave;ng thuần HTML Form th&igrave; khi ch&uacute;ng ta định nghĩa một số method&nbsp;<code>PUT, PATCH, DELETE</code>&nbsp;th&igrave; sẽ kh&ocirc;ng được hỗ trợ để map method với route n&agrave;o. V&igrave; vậy khi định nghĩa&nbsp;<code>PUT, PATCH, DELETE</code>&nbsp;routes m&agrave; được gọi từ HTML Form th&igrave; ch&uacute;ng ta sẽ cần th&ecirc;m trường input&nbsp;<code>hidden</code>&nbsp;v&agrave;o form. Gi&aacute; trị của trường hidden l&agrave; method sẽ sử dụng phương thức HTTP request n&agrave;o. V&iacute; dụ</p>\r\n\r\n<pre>\r\n<code>&lt;form action=&quot;posts/1&quot; method=&quot;POST&quot;&gt;\r\n    &lt;input type=&quot;hidden&quot; name=&quot;_method&quot; value=&quot;PUT&quot;&gt;\r\n    &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;UYZ2pUvpnxytOMB3U28efT78GH7Dl9wupySLRZ0F&quot;&gt;\r\n&lt;/form&gt;\r\n</code></pre>\r\n\r\n<h1>5.Kết luận</h1>\r\n\r\n<p>Vừa rồi th&igrave; m&igrave;nh c&ugrave;ng với c&aacute;c bạn t&igrave;m hiểu những c&aacute;i cơ bản nhất về route, n&oacute; c&oacute; thể gi&uacute;p c&aacute;c bạn mường tượng c&aacute;ch sử dụng route như thế n&agrave;o. M&igrave;nh xin kết th&uacute;c b&agrave;i viết ở đ&acirc;y, mọi thắc mắc g&igrave; h&atilde;y comment ph&iacute;a dưới b&agrave;i viết cho m&igrave;nh nh&eacute; !!</p>\r\n\r\n<h1>6.Tham khảo</h1>\r\n\r\n<p><a href=\"https://laravel.com/docs/5.6/routing\" target=\"_blank\">https://laravel.com/docs/5.6/routing</a></p>\r\n\r\n<p><a href=\"https://laravel.com/docs/5.6/helpers#method-route\" target=\"_blank\">https://laravel.com/docs/5.6/helpers#method-route</a></p>', '2020-02-03 02:46:23', '2020-02-03 02:46:23'),
(4, 'asfasf', NULL, 'asfasfasf', 1, 0, NULL, NULL, 'asfasfasf', NULL, NULL, NULL, '2020-02-03 04:32:25', '2020-02-03 04:32:25'),
(5, 'safasf', 'capture.png', 'asfasfsf', 1, 0, NULL, NULL, 'asfasfsf', NULL, NULL, NULL, '2020-02-03 04:46:18', '2020-02-03 04:46:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_meta_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_active` tinyint(4) NOT NULL DEFAULT 1,
  `pro_stock` int(11) NOT NULL DEFAULT 0,
  `pro_price` int(11) DEFAULT 0,
  `pro_price_discount` int(11) DEFAULT 0,
  `pro_discount_percent` int(11) DEFAULT 0,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_view` int(11) DEFAULT 0,
  `pro_category_id` int(11) DEFAULT NULL,
  `pro_title_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_description_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_keyword_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_code`, `pro_avatar`, `pro_content`, `pro_meta_content`, `pro_slug`, `pro_active`, `pro_stock`, `pro_price`, `pro_price_discount`, `pro_discount_percent`, `pro_hot`, `pro_view`, `pro_category_id`, `pro_title_seo`, `pro_description_seo`, `pro_keyword_seo`, `created_at`, `updated_at`) VALUES
(13, '6ES7318-3FL01-0AB0', NULL, '2020-02-20__3.jpg', NULL, NULL, 'asdgsddsg', 1, 3, 1000000, 1000000, 0, 0, 0, 33, 'asdgsddsg', NULL, NULL, '2020-02-03 04:54:31', '2020-04-09 01:22:41'),
(16, 'Đồng hồ nước-DN25 6 m³/h nối mạng M-bus công nghệ Ultrasonic', 'hihi', '2020-02-20__5.jpg', '<ul>\r\n	<li>\r\n	<h3>&nbsp;</h3>\r\n\r\n	<p><code>updateParams(newParams);</code></p>\r\n\r\n	<p>Causes&nbsp;<code>$route</code>&nbsp;service to update the current URL, replacing current route parameters with those specified in&nbsp;<code>newParams</code>. Provided property names that match the route&#39;s path segment definitions will be interpolated into the location&#39;s path, while remaining properties will be treated as query params.</p>\r\n\r\n	<h4>Parameters</h4>\r\n\r\n	<table>\r\n		<thead>\r\n			<tr>\r\n				<th>Param</th>\r\n				<th>Type</th>\r\n				<th>Details</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td>newParams</td>\r\n				<td><a href=\"https://docs.angularjs.org/\">!Object&lt;string, string&gt;</a></td>\r\n				<td>\r\n				<p>mapping of URL parameter names to values</p>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	</li>\r\n</ul>\r\n\r\n<h2>Events</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>$routeChangeStart</h3>\r\n\r\n	<p>Broadcasted before a route change. At this point the route services starts resolving all of the dependencies needed for the route change to occur. Typically this involves fetching the view template as well as any dependencies defined in&nbsp;<code>resolve</code>&nbsp;route property. Once all of the dependencies are resolved&nbsp;<code>$routeChangeSuccess</code>&nbsp;is fired.</p>\r\n\r\n	<p>The route change (and the&nbsp;<code>$location</code>&nbsp;change that triggered it) can be prevented by calling&nbsp;<code>preventDefault</code>&nbsp;method of the event. See&nbsp;<a href=\"https://docs.angularjs.org/api/ng/type/$rootScope.Scope#$on\"><code>$rootScope.Scope</code></a>&nbsp;for more details about event object.</p>\r\n\r\n	<h4>Type:</h4>\r\n\r\n	<p>broadcast</p>\r\n\r\n	<h4>Target:</h4>\r\n\r\n	<p>root scope</p>\r\n\r\n	<h4>Parameters</h4>\r\n\r\n	<table>\r\n		<thead>\r\n			<tr>\r\n				<th>Param</th>\r\n				<th>Type</th>\r\n				<th>Details</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td>angularEvent</td>\r\n				<td><a href=\"https://docs.angularjs.org/\">Object</a></td>\r\n				<td>\r\n				<p>Synthetic event object.</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>next</td>\r\n				<td><a href=\"https://docs.angularjs.org/\">Route</a></td>\r\n				<td>\r\n				<p>Future route information.</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>current</td>\r\n				<td><a href=\"https://docs.angularjs.org/\">Route</a></td>\r\n				<td>\r\n				<p>Current route information.</p>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	</li>\r\n	<li>\r\n	<h3>$routeChangeSuccess</h3>\r\n\r\n	<p>Broadcasted after a route change has happened successfully. The&nbsp;<code>resolve</code>&nbsp;dependencies are now available in the&nbsp;<code>current.locals</code>&nbsp;property.</p>\r\n\r\n	<p><a href=\"https://docs.angularjs.org/api/ngRoute/directive/ngView\">ngView</a>&nbsp;listens for the directive to instantiate the controller and render the view.</p>\r\n\r\n	<h4>Type:</h4>\r\n\r\n	<p>broadcast</p>\r\n	</li>\r\n</ul>', NULL, 'adfasfa', 1, 2, 1000000, 900000, 10, 0, 0, 34, 'adfasfa', NULL, NULL, '2020-02-04 01:14:20', '2020-04-10 02:23:51'),
(17, 'sản phẩm plc', NULL, '2020-02-06__6av2124-6jj00-0ax0.jpg', NULL, NULL, 'plc', 1, 2, 12000000, 10000000, 17, 0, 0, 34, 'plc', NULL, NULL, '2020-02-06 02:27:39', '2020-04-09 01:23:46'),
(18, 'sản phẩm bộ lập trình', 'san-pahd-asf', '2020-02-22__8.jpg', NULL, NULL, 'san-pham-bo-lap-trinh', 1, 10, 1200000, 1000000, 17, 0, 0, 30, 'sản phẩm bộ lập trình', NULL, NULL, '2020-02-22 03:05:56', '2020-04-09 01:24:14'),
(19, 'sản phẩm bộ lập trình 2', NULL, '2020-02-22__10.jpg', NULL, NULL, 'san-pham-bo-lap-trinh-2', 1, 3, 2000000, 1900000, 5, 0, 0, 30, 'sản phẩm bộ lập trình 2', NULL, NULL, '2020-02-22 03:07:21', '2020-04-10 02:24:18'),
(20, 'sản phẩm bộ lập trình 3', NULL, '2020-02-22__11.jpg', NULL, NULL, 'san-pham-bo-lap-trinh-3', 1, 3, 1000000, 900000, 10, 0, 0, 30, 'sản phẩm bộ lập trình 3', NULL, NULL, '2020-02-22 03:08:16', '2020-04-09 01:24:36'),
(21, 'sản phẩm bộ lập trình 4', NULL, '2020-02-22__12.jpg', NULL, NULL, 'san-pham-bo-lap-trinh-4', 1, 1, 10000000, 10000000, 0, 0, 0, 30, 'sản phẩm bộ lập trình 4', NULL, NULL, '2020-02-22 03:08:36', '2020-04-09 01:24:53'),
(22, 'sản phẩm bộ lập trình dsfdsf', NULL, NULL, NULL, NULL, 'san-pham-bo-lap-trinh-2dfdsfdsf', 1, 2, 2000000, 2000000, 0, 0, 0, 30, 'sản phẩm bộ lập trình 2dfdsfdsf', NULL, NULL, '2020-03-26 02:11:15', '2020-04-10 02:24:37'),
(23, 'sản phẩm bộ lập trìnhÀASDFDSFSADF', NULL, NULL, NULL, NULL, 'adsfadsfadsfadsfdsafsadfdsf', 1, 1, 2800000, 2800000, 0, 0, 0, 30, 'ADSFADSFADSFADSFDSAFSADFDSF', NULL, NULL, '2020-03-26 02:11:29', '2020-04-09 01:25:22'),
(24, 'sdgdgsfgdfgdfsg', NULL, NULL, NULL, NULL, 'dsfgsdfgdsfgdsfgsdfgdfsg', 1, 4, 1500000, 1500000, 0, 0, 0, 30, 'dsfgsdfgdsfgdsfgsdfgdfsg', NULL, NULL, '2020-03-26 02:11:39', '2020-04-09 01:25:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `type`, `created_at`, `updated_at`, `description`, `url`) VALUES
(5, '2020-03-26__10-03-2020-14-45-36-tu-dong-690-300.png', '1', '2020-03-26 02:00:52', '2020-03-27 00:09:23', 'Trữ đông an toàn ngại gì cô', 'http://thegioididong.abc/'),
(6, '2020-03-26__21-03-2020-08-21-10-pre-beko-690-300.png', '1', '2020-03-26 02:01:00', '2020-03-26 02:01:00', NULL, NULL),
(7, '2020-03-26__690-300-690x300-3.png', '1', '2020-03-26 02:01:07', '2020-03-26 02:01:07', NULL, NULL),
(8, '2020-03-26__beko-mg-690-300-690x300.png', '1', '2020-03-26 02:01:14', '2020-03-26 02:01:14', NULL, NULL),
(9, '2020-03-26__big-gia-dung-690-300-690x300-1.png', '1', '2020-03-26 02:01:22', '2020-03-26 02:01:22', NULL, NULL),
(10, '2020-03-26__big-ml-690-300-690x300-1.png', '1', '2020-03-26 02:01:30', '2020-03-26 02:01:30', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tst_user_id` bigint(20) NOT NULL DEFAULT 0,
  `tst_total_money` bigint(20) NOT NULL DEFAULT 0,
  `tst_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tst_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tst_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tst_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tst_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tst_status` tinyint(4) NOT NULL DEFAULT 1,
  `tst_type` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `transactions`
--

INSERT INTO `transactions` (`id`, `tst_user_id`, `tst_total_money`, `tst_name`, `tst_email`, `tst_phone`, `tst_address`, `tst_note`, `tst_status`, `tst_type`, `created_at`, `updated_at`) VALUES
(3, 0, 990000, 'Huỳnh Quốc Trung', 'trunghuynh1999@gmail.com', '0375475075', 'bacbdsjk', NULL, 3, 1, '2020-04-10 02:26:29', '2020-04-10 02:26:29'),
(4, 0, 990000, 'Nguyễn Văn Tèo', 'sdfdsfdsf@gmail.com', '0375475072', 'Tam Dân - Phú Ninh - Quảng Nam', 'Nhớ giao hàng sớm', 4, 1, '2020-04-10 03:00:54', '2020-04-10 03:00:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `avatar`, `active`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Huỳnh Quốc Trung', 'trunghuynh1999@gmail.com', '0375475075', NULL, 1, NULL, '$2y$10$n75ooy9nBl3MpUp5f7.zt.qKfm3JCAG4P4vctOXnpId4Pae.U5P8i', NULL, '2020-03-27 03:29:02', '2020-03-27 03:29:02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banner_url_unique` (`url`),
  ADD KEY `banner_type_index` (`type`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_c_name_unique` (`c_name`),
  ADD KEY `categories_c_slug_index` (`c_slug`),
  ADD KEY `categories_c_active_index` (`c_active`),
  ADD KEY `categories_c_total_product_index` (`c_total_product`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_post_name_unique` (`post_name`),
  ADD KEY `posts_post_slug_index` (`post_slug`),
  ADD KEY `posts_post_active_index` (`post_active`),
  ADD KEY `posts_post_hot_index` (`post_hot`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_pro_name_unique` (`pro_name`),
  ADD KEY `products_pro_slug_index` (`pro_slug`),
  ADD KEY `products_pro_active_index` (`pro_active`),
  ADD KEY `products_pro_stock_index` (`pro_stock`),
  ADD KEY `products_pro_price_index` (`pro_price`),
  ADD KEY `products_pro_hot_index` (`pro_hot`),
  ADD KEY `pro_price_discount` (`pro_price_discount`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_active_index` (`active`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

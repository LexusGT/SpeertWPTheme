-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 03 2018 г., 12:14
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `speert`
--

-- --------------------------------------------------------

--
-- Структура таблицы `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://speert', 'yes'),
(2, 'home', 'http://speert', 'yes'),
(3, 'blogname', 'Speert - WordPress Theme', 'yes'),
(4, 'blogdescription', 'Ещё один сайт на WordPress', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'leragt@yandex.ru', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'd.m.Y', 'yes'),
(24, 'time_format', 'H:i', 'yes'),
(25, 'links_updated_date_format', 'd.m.Y H:i', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:87:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:12:\"robots\\.txt$\";s:18:\"index.php?robots=1\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:27:\"[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\"[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\"[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"([^/]+)/embed/?$\";s:37:\"index.php?name=$matches[1]&embed=true\";s:20:\"([^/]+)/trackback/?$\";s:31:\"index.php?name=$matches[1]&tb=1\";s:40:\"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:35:\"([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:28:\"([^/]+)/page/?([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&paged=$matches[2]\";s:35:\"([^/]+)/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&cpage=$matches[2]\";s:24:\"([^/]+)(?:/([0-9]+))?/?$\";s:43:\"index.php?name=$matches[1]&page=$matches[2]\";s:16:\"[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:26:\"[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:46:\"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:22:\"[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:0:{}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '3', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:2:{i:0;s:56:\"C:\\OSPanel\\domains\\litsy/wp-content/themes/app/style.css\";i:2;s:0:\"\";}', 'no'),
(40, 'template', 'app', 'yes'),
(41, 'stylesheet', 'app', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '38590', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '1', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'posts', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '0', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'wp_page_for_privacy_policy', '3', 'yes'),
(92, 'initial_db_version', '38590', 'yes'),
(93, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(94, 'fresh_site', '0', 'yes'),
(95, 'WPLANG', 'ru_RU', 'yes'),
(96, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(97, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(98, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'sidebars_widgets', 'a:2:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:13:\"array_version\";i:3;}', 'yes'),
(102, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(103, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'nonce_key', ';TU5$S(D&ybtYuu9Cf0Ppph6at8{ej8SjD:VjOP^+Q]`bEXAoQg&ziQ >k8)KYwN', 'no'),
(109, 'nonce_salt', '}ziI(Uyl9MUr@R[xc!?9l?IdL7d8sh6ww?0g&)R!Pil>LTK4YBms;}{^Bl5)a0Vn', 'no'),
(110, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'cron', 'a:5:{i:1538558710;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1538565910;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1538566000;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1538601275;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes'),
(114, 'theme_mods_twentyseventeen', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1528123484;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}}', 'yes'),
(125, 'auth_key', 'ul1RtN=IL.P&lhMw3slk0YmMW)>gE,uF0.H)d3IZj*<>@#[Sf3ulI8*%?gKA|5!y', 'no'),
(126, 'auth_salt', '6.-|q]77KuLYfj`EYQ~`E8utNj 58;H^?]ML3MlrJDfI<$[9{#cU3H6KaBmv=D8U', 'no'),
(127, 'logged_in_key', '1|P>b,-vy:r5S:N&X| -LIna8BY<b$aErL3bV^8U.gZgnfthzuk}DWNmr5lP8Pht', 'no'),
(128, 'logged_in_salt', '].aAhmA^PZS0)V/|R%%r%%~gqB^4H-qX01||w/W2*KG>Xk[tkk%h|:G}w0+hlp8?', 'no'),
(138, 'can_compress_scripts', '1', 'no'),
(150, 'current_theme', 'Speert', 'yes'),
(151, 'theme_mods_app', 'a:6:{i:0;b:0;s:18:\"nav_menu_locations\";a:1:{s:11:\"header_menu\";i:6;}s:18:\"custom_css_post_id\";i:-1;s:11:\"custom_logo\";i:52;s:16:\"footer_copyright\";s:42:\"© 2018 Speert theme. All rights reserved.\";s:12:\"footer_about\";s:188:\"Be informed with the hottest news from all over the world! We monitor what is happening every day and every minute. Read and enjoy our articles and news and explore this world with Speert.\";}', 'yes'),
(152, 'theme_switched', '', 'yes'),
(168, 'nav_menu_options', 'a:1:{s:8:\"auto_add\";a:0:{}}', 'yes'),
(176, 'category_children', 'a:1:{i:9;a:3:{i:0;i:2;i:1;i:3;i:2;i:4;}}', 'yes'),
(182, 'recently_activated', 'a:0:{}', 'yes'),
(300, 'auto_core_update_notified', 'a:4:{s:4:\"type\";s:7:\"success\";s:5:\"email\";s:16:\"leragt@yandex.ru\";s:7:\"version\";s:5:\"4.9.8\";s:9:\"timestamp\";i:1535965978;}', 'no'),
(363, '_site_transient_timeout_theme_roots', '1538559804', 'no'),
(364, '_site_transient_theme_roots', 'a:2:{s:3:\"app\";s:7:\"/themes\";s:12:\"node_modules\";s:7:\"/themes\";}', 'no'),
(366, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:65:\"https://downloads.wordpress.org/release/ru_RU/wordpress-4.9.8.zip\";s:6:\"locale\";s:5:\"ru_RU\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:65:\"https://downloads.wordpress.org/release/ru_RU/wordpress-4.9.8.zip\";s:10:\"no_content\";b:0;s:11:\"new_bundled\";b:0;s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"4.9.8\";s:7:\"version\";s:5:\"4.9.8\";s:11:\"php_version\";s:5:\"5.2.4\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"4.7\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1538558021;s:15:\"version_checked\";s:5:\"4.9.8\";s:12:\"translations\";a:0:{}}', 'no'),
(367, '_site_transient_update_themes', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1538558022;s:7:\"checked\";a:1:{s:3:\"app\";s:12:\"0.04.06.2018\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}}', 'no'),
(368, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1538558024;s:7:\"checked\";a:2:{s:19:\"akismet/akismet.php\";s:5:\"4.0.3\";s:9:\"hello.php\";s:3:\"1.7\";}s:8:\"response\";a:1:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.0.8\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.0.8.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"4.9.8\";s:12:\"requires_php\";b:0;s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:1:{s:9:\"hello.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:3:\"1.6\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=969907\";s:2:\"1x\";s:63:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=969907\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:65:\"https://ps.w.org/hello-dolly/assets/banner-772x250.png?rev=478342\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(5, 6, '_customize_changeset_uuid', 'fab3f2e9-541f-47ed-a1ca-450e2ade6164'),
(7, 7, '_customize_changeset_uuid', 'fab3f2e9-541f-47ed-a1ca-450e2ade6164'),
(8, 10, '_menu_item_type', 'post_type'),
(9, 10, '_menu_item_menu_item_parent', '0'),
(10, 10, '_menu_item_object_id', '6'),
(11, 10, '_menu_item_object', 'page'),
(12, 10, '_menu_item_target', ''),
(13, 10, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(14, 10, '_menu_item_xfn', ''),
(15, 10, '_menu_item_url', ''),
(16, 11, '_menu_item_type', 'post_type'),
(17, 11, '_menu_item_menu_item_parent', '0'),
(18, 11, '_menu_item_object_id', '7'),
(19, 11, '_menu_item_object', 'page'),
(20, 11, '_menu_item_target', ''),
(21, 11, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(22, 11, '_menu_item_xfn', ''),
(23, 11, '_menu_item_url', ''),
(26, 13, '_menu_item_type', 'taxonomy'),
(27, 13, '_menu_item_menu_item_parent', '0'),
(28, 13, '_menu_item_object_id', '9'),
(29, 13, '_menu_item_object', 'category'),
(30, 13, '_menu_item_target', ''),
(31, 13, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(32, 13, '_menu_item_xfn', ''),
(33, 13, '_menu_item_url', ''),
(34, 14, '_menu_item_type', 'taxonomy'),
(35, 14, '_menu_item_menu_item_parent', '13'),
(36, 14, '_menu_item_object_id', '4'),
(37, 14, '_menu_item_object', 'category'),
(38, 14, '_menu_item_target', ''),
(39, 14, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(40, 14, '_menu_item_xfn', ''),
(41, 14, '_menu_item_url', ''),
(42, 15, '_menu_item_type', 'taxonomy'),
(43, 15, '_menu_item_menu_item_parent', '13'),
(44, 15, '_menu_item_object_id', '3'),
(45, 15, '_menu_item_object', 'category'),
(46, 15, '_menu_item_target', ''),
(47, 15, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(48, 15, '_menu_item_xfn', ''),
(49, 15, '_menu_item_url', ''),
(50, 16, '_menu_item_type', 'taxonomy'),
(51, 16, '_menu_item_menu_item_parent', '13'),
(52, 16, '_menu_item_object_id', '2'),
(53, 16, '_menu_item_object', 'category'),
(54, 16, '_menu_item_target', ''),
(55, 16, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(56, 16, '_menu_item_xfn', ''),
(57, 16, '_menu_item_url', ''),
(58, 17, '_menu_item_type', 'taxonomy'),
(59, 17, '_menu_item_menu_item_parent', '0'),
(60, 17, '_menu_item_object_id', '7'),
(61, 17, '_menu_item_object', 'category'),
(62, 17, '_menu_item_target', ''),
(63, 17, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(64, 17, '_menu_item_xfn', ''),
(65, 17, '_menu_item_url', ''),
(66, 18, '_menu_item_type', 'taxonomy'),
(67, 18, '_menu_item_menu_item_parent', '0'),
(68, 18, '_menu_item_object_id', '8'),
(69, 18, '_menu_item_object', 'category'),
(70, 18, '_menu_item_target', ''),
(71, 18, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(72, 18, '_menu_item_xfn', ''),
(73, 18, '_menu_item_url', ''),
(80, 20, '_edit_last', '1'),
(81, 20, '_edit_lock', '1528753768:1'),
(84, 22, '_edit_last', '1'),
(85, 22, '_edit_lock', '1528319570:1'),
(88, 24, '_edit_last', '1'),
(89, 24, '_edit_lock', '1528319589:1'),
(92, 26, '_edit_last', '1'),
(95, 26, '_edit_lock', '1528319601:1'),
(96, 28, '_edit_last', '1'),
(99, 28, '_edit_lock', '1528755689:1'),
(100, 30, '_edit_last', '1'),
(101, 30, '_edit_lock', '1528319632:1'),
(104, 32, '_edit_last', '1'),
(107, 32, '_edit_lock', '1528319641:1'),
(108, 34, '_edit_last', '1'),
(111, 34, '_edit_lock', '1528319650:1'),
(112, 36, '_edit_last', '1'),
(115, 36, '_edit_lock', '1528319659:1'),
(116, 38, '_edit_last', '1'),
(119, 38, '_edit_lock', '1528319668:1'),
(120, 40, '_edit_last', '1'),
(123, 40, '_edit_lock', '1528319675:1'),
(124, 42, '_edit_last', '1'),
(127, 42, '_edit_lock', '1528319682:1'),
(128, 44, '_edit_last', '1'),
(131, 44, '_edit_lock', '1528319689:1'),
(132, 46, '_edit_last', '1'),
(135, 46, '_edit_lock', '1528965632:1'),
(136, 48, '_edit_last', '1'),
(139, 48, '_edit_lock', '1528962998:1'),
(142, 52, '_wp_attached_file', '2018/06/cropped-preview.jpg'),
(143, 52, '_wp_attachment_context', 'custom-logo'),
(144, 52, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:150;s:6:\"height\";i:30;s:4:\"file\";s:27:\"2018/06/cropped-preview.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:26:\"cropped-preview-150x30.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:30;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(186, 76, '_wp_attached_file', '2018/06/test_img.jpg'),
(187, 76, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:900;s:6:\"height\";i:480;s:4:\"file\";s:20:\"2018/06/test_img.jpg\";s:5:\"sizes\";a:4:{s:12:\"medium_large\";a:4:{s:4:\"file\";s:20:\"test_img-768x410.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:410;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:3:\"m-m\";a:4:{s:4:\"file\";s:20:\"test_img-580x300.jpg\";s:5:\"width\";i:580;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:3:\"s-s\";a:4:{s:4:\"file\";s:20:\"test_img-394x210.jpg\";s:5:\"width\";i:394;s:6:\"height\";i:210;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:3:\"x-x\";a:4:{s:4:\"file\";s:20:\"test_img-288x154.jpg\";s:5:\"width\";i:288;s:6:\"height\";i:154;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(188, 48, 'views', '3'),
(189, 46, 'views', '1'),
(190, 38, 'views', '2'),
(191, 28, 'views', '8'),
(192, 24, 'views', '1'),
(193, 26, 'views', '28');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(2, 1, '2018-06-04 14:25:04', '2018-06-04 11:25:04', 'Это пример страницы. От записей в блоге она отличается тем, что остаётся на одном месте и отображается в меню сайта (в большинстве тем). На странице &laquo;Детали&raquo; владельцы сайтов обычно рассказывают о себе потенциальным посетителям. Например, так:\n\n<blockquote>Привет! Днём я курьер, а вечером &#8212; подающий надежды актёр. Это мой блог. Я живу в Ростове-на-Дону, люблю своего пса Джека и пинаколаду. (И ещё попадать под дождь.)</blockquote>\n\n...или так:\n\n<blockquote>Компания &laquo;Штучки XYZ&raquo; была основана в 1971 году и с тех пор производит качественные штучки. Компания находится в Готэм-сити, имеет штат из более чем 2000 сотрудников и приносит много пользы жителям Готэма.</blockquote>\n\nПерейдите <a href=\"http://speert/wp-admin/\">в консоль</a>, чтобы удалить эту страницу и создать новые. Успехов!', 'Пример страницы', '', 'publish', 'closed', 'open', '', 'sample-page', '', '', '2018-06-04 14:25:04', '2018-06-04 11:25:04', '', 0, 'http://speert/?page_id=2', 0, 'page', '', 0),
(3, 1, '2018-06-04 14:25:04', '2018-06-04 11:25:04', '<h2>Кто мы</h2><p>Наш адрес сайта: http://speert.</p><h2>Какие персональные данные мы собираем и с какой целью</h2><h3>Комментарии</h3><p>Если посетитель оставляет комментарий на сайте, мы собираем данные указанные в форме комментария, а также IP адрес посетителя и данные user-agent браузера с целью определения спама.</p><p>Анонимизированная строка создаваемая из вашего адреса email (\"хеш\") может предоставляться сервису Gravatar, чтобы определить используете ли вы его. Политика конфиденциальности Gravatar доступна здесь: https://automattic.com/privacy/ . После одобрения комментария ваше изображение профиля будет видимым публично в контексте вашего комментария.</p><h3>Медиафайлы</h3><p>Если вы зарегистрированный пользователь и загружаете фотографии на сайт, вам возможно следует избегать загрузки изображений с метаданными EXIF, так как они могут содержать данные вашего месторасположения по GPS. Посетители могут извлечь эту информацию скачав изображения с сайта.</p><h3>Формы контактов</h3><h3>Куки</h3><p>Если вы оставляете комментарий на нашем сайте, вы можете включить сохранение вашего имени, адреса email и вебсайта в куки. Это делается для вашего удобства, чтобы не заполнять данные снова при повторном комментировании. Эти куки хранятся в течение одного года.</p><p>Если у вас есть учетная запись на сайте и вы войдете в неё, мы установим временный куки для определения поддержки куки вашим браузером, куки не содержит никакой личной информации и удаляется при закрытии вашего браузера.</p><p>При входе в учетную запись мы также устанавливаем несколько куки с данными входа и настройками экрана. Куки входа хранятся в течение двух дней, куки с настройками экрана - год. Если вы выберете возможность \"Запомнить меня\", данные о входе будут сохраняться в течение двух недель. При выходе из учетной записи куки входа будут удалены.</p><p>При редактировании или публикации статьи в браузере будет сохранен дополнительный куки, он не содержит персональных данных и содержит только ID записи отредактированной вами, истекает через 1 день.</p><h3>Встраиваемое содержимое других вебсайтов</h3><p>Статьи на этом сайте могут включать встраиваемое содержимое (например видео, изображения, статьи и др.), подобное содержимое ведет себя так же, как если бы посетитель зашел на другой сайт.</p><p>Эти сайты могут собирать ваши данные, использовать куки, внедрять дополнительное отслеживание третьей стороной и следить за вашим взаимодействием с внедренным содержимым, включая отслеживание взвимодействия если у вас есть учетная запись и вы авторизовались на том сайте.</p><h3>Веб-аналитика</h3><h2>С кем мы делимся вашими данными</h2><h2>Как долго мы храним ваши данные</h2><p>Если вы оставляете комментарий, то сам комментарий и его метаданные сохраняются неопределенно долго. Это делается для того, чтобы определять и одобрять последующие комментарии автоматически, вместо помещения их в очередь на одобрение.</p><p>Для пользователей с регистрацией на нашем сайте мы храним ту личную информацию, которую они указывают в своем профиле. Все пользователи могут видеть, редактировать или удалить свою информацию из профиля в любое время (кроме имени пользователя). Администрация вебсайта также может видеть и изменять эту информацию.</p><h2>Какие у вас права на ваши данные</h2><p>При наличии учетной записи на сайте или если вы оставляли комментарии, то вы можете запросить файл экспорта персональных данных, которые мы сохранили о вас, включая предоставленные вами данные. Вы также можете запросить удаление этих данных, это не включает данные, которые мы обязаны хранить в административных целях, по закону или целях безопасности.</p><h2>Куда мы отправляем ваши данные</h2><p>Комментарии пользователей могут проверяться автоматическим сервисом определения спама.</p><h2>Ваша контактная информация</h2><h2>Дополнительная информация</h2><h3>Как мы защищаем ваши данные</h3><h3>Какие принимаются процедуры против взлома данных</h3><h3>От каких третьих сторон мы получаем данные</h3><h3>Какие автоматические решения принимаются на основе данных пользователей</h3><h3>Требования к раскрытию отраслевых нормативных требований</h3>', 'Политика конфиденциальности', '', 'draft', 'closed', 'open', '', 'privacy-policy', '', '', '2018-06-04 14:25:04', '2018-06-04 11:25:04', '', 0, 'http://speert/?page_id=3', 0, 'page', '', 0),
(6, 1, '2018-06-06 17:28:05', '2018-06-06 14:28:05', '', 'About', '', 'publish', 'closed', 'closed', '', 'about', '', '', '2018-06-06 17:28:05', '2018-06-06 14:28:05', '', 0, 'http://speert/?page_id=6', 0, 'page', '', 0),
(7, 1, '2018-06-06 17:28:05', '2018-06-06 14:28:05', '', 'Contact', '', 'publish', 'closed', 'closed', '', 'contact', '', '', '2018-06-06 17:28:05', '2018-06-06 14:28:05', '', 0, 'http://speert/?page_id=7', 0, 'page', '', 0),
(8, 1, '2018-06-06 17:28:05', '2018-06-06 14:28:05', '', 'About', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2018-06-06 17:28:05', '2018-06-06 14:28:05', '', 6, 'http://speert/?p=8', 0, 'revision', '', 0),
(9, 1, '2018-06-06 17:28:05', '2018-06-06 14:28:05', '', 'Contact', '', 'inherit', 'closed', 'closed', '', '7-revision-v1', '', '', '2018-06-06 17:28:05', '2018-06-06 14:28:05', '', 7, 'http://speert/?p=9', 0, 'revision', '', 0),
(10, 1, '2018-06-06 17:28:05', '2018-06-06 14:28:05', ' ', '', '', 'publish', 'closed', 'closed', '', '10', '', '', '2018-06-11 23:32:48', '2018-06-11 20:32:48', '', 0, 'http://speert/?p=10', 7, 'nav_menu_item', '', 0),
(11, 1, '2018-06-06 17:28:05', '2018-06-06 14:28:05', ' ', '', '', 'publish', 'closed', 'closed', '', '11', '', '', '2018-06-11 23:32:48', '2018-06-11 20:32:48', '', 0, 'http://speert/?p=11', 8, 'nav_menu_item', '', 0),
(13, 1, '2018-06-06 17:32:51', '2018-06-06 14:32:51', ' ', '', '', 'publish', 'closed', 'closed', '', '13', '', '', '2018-06-11 23:32:48', '2018-06-11 20:32:48', '', 0, 'http://speert/?p=13', 1, 'nav_menu_item', '', 0),
(14, 1, '2018-06-06 17:32:51', '2018-06-06 14:32:51', ' ', '', '', 'publish', 'closed', 'closed', '', '14', '', '', '2018-06-11 23:32:48', '2018-06-11 20:32:48', '', 9, 'http://speert/?p=14', 2, 'nav_menu_item', '', 0),
(15, 1, '2018-06-06 17:32:51', '2018-06-06 14:32:51', ' ', '', '', 'publish', 'closed', 'closed', '', '15', '', '', '2018-06-11 23:32:48', '2018-06-11 20:32:48', '', 9, 'http://speert/?p=15', 3, 'nav_menu_item', '', 0),
(16, 1, '2018-06-06 17:32:51', '2018-06-06 14:32:51', ' ', '', '', 'publish', 'closed', 'closed', '', '16', '', '', '2018-06-11 23:32:48', '2018-06-11 20:32:48', '', 9, 'http://speert/?p=16', 4, 'nav_menu_item', '', 0),
(17, 1, '2018-06-06 17:32:51', '2018-06-06 14:32:51', ' ', '', '', 'publish', 'closed', 'closed', '', '17', '', '', '2018-06-11 23:32:48', '2018-06-11 20:32:48', '', 0, 'http://speert/?p=17', 5, 'nav_menu_item', '', 0),
(18, 1, '2018-06-06 17:32:51', '2018-06-06 14:32:51', ' ', '', '', 'publish', 'closed', 'closed', '', '18', '', '', '2018-06-11 23:32:48', '2018-06-11 20:32:48', '', 0, 'http://speert/?p=18', 6, 'nav_menu_item', '', 0),
(20, 1, '2018-06-07 00:14:54', '2018-06-06 21:14:54', '', 'De Gea to sign five-year Man Utd deal - gossip', '', 'publish', 'open', 'open', '', 'de-gea-to-sign-five-year-man-utd-deal-gossip', '', '', '2018-06-12 00:51:42', '2018-06-11 21:51:42', '', 0, 'http://speert/?p=20', 0, 'post', '', 0),
(21, 1, '2018-06-07 00:14:54', '2018-06-06 21:14:54', '', 'De Gea to sign five-year Man Utd deal - gossip', '', 'inherit', 'closed', 'closed', '', '20-revision-v1', '', '', '2018-06-07 00:14:54', '2018-06-06 21:14:54', '', 20, 'http://speert/?p=21', 0, 'revision', '', 0),
(22, 1, '2018-06-07 00:15:12', '2018-06-06 21:15:12', '', 'Boro stay in play-off places with late Assombalonga goal at Burton', '', 'publish', 'open', 'open', '', 'boro-stay-in-play-off-places-with-late-assombalonga-goal-at-burton', '', '', '2018-06-07 00:15:12', '2018-06-06 21:15:12', '', 0, 'http://speert/?p=22', 0, 'post', '', 0),
(23, 1, '2018-06-07 00:15:12', '2018-06-06 21:15:12', '', 'Boro stay in play-off places with late Assombalonga goal at Burton', '', 'inherit', 'closed', 'closed', '', '22-revision-v1', '', '', '2018-06-07 00:15:12', '2018-06-06 21:15:12', '', 22, 'http://speert/?p=23', 0, 'revision', '', 0),
(24, 1, '2018-06-07 00:15:27', '2018-06-06 21:15:27', '', 'A major concern - Hibs boss Lennon expects third Ibrox trip', '', 'publish', 'open', 'open', '', 'a-major-concern-hibs-boss-lennon-expects-third-ibrox-trip', '', '', '2018-06-07 00:15:27', '2018-06-06 21:15:27', '', 0, 'http://speert/?p=24', 0, 'post', '', 0),
(25, 1, '2018-06-07 00:15:27', '2018-06-06 21:15:27', '', 'A major concern - Hibs boss Lennon expects third Ibrox trip', '', 'inherit', 'closed', 'closed', '', '24-revision-v1', '', '', '2018-06-07 00:15:27', '2018-06-06 21:15:27', '', 24, 'http://speert/?p=25', 0, 'revision', '', 0),
(26, 1, '2018-06-07 00:15:37', '2018-06-06 21:15:37', '', 'League One strugglers Northampton sack boss Hasselbaink', '', 'publish', 'open', 'open', '', 'league-one-strugglers-northampton-sack-boss-hasselbaink', '', '', '2018-06-07 00:15:37', '2018-06-06 21:15:37', '', 0, 'http://speert/?p=26', 0, 'post', '', 0),
(27, 1, '2018-06-07 00:15:37', '2018-06-06 21:15:37', '', 'League One strugglers Northampton sack boss Hasselbaink', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2018-06-07 00:15:37', '2018-06-06 21:15:37', '', 26, 'http://speert/?p=27', 0, 'revision', '', 0),
(28, 1, '2018-06-07 00:15:50', '2018-06-06 21:15:50', 'Ankara-based architecture firm rgg Architects has unveiled design for a new mixed-use tower in Dubai, UAE. Called Dubai Nhabitat, the building challenges Dubai\'s vertical urban density with its permeability and multiple uses. Described as \"a permeable and living structure in Dubai\", the tower will be the firm\'s first major project in the United Arab Emirates.\r\n\r\nAnkara-based architecture firm rgg Architects has unveiled design for a new mixed-use tower in Dubai, UAE. Called Dubai Nhabitat, the building challenges Dubai\'s vertical urban density with its permeability and multiple uses. Described as \"a permeable and living structure in Dubai\", the tower will be the firm\'s first major project in the United Arab Emirates.', 'Who has \'hands of bronze\'? Read Garth\'s Team of the Week and select your own', '', 'publish', 'open', 'open', '', 'who-has-hands-of-bronze-read-garths-team-of-the-week-and-select-your-own', '', '', '2018-06-12 01:23:43', '2018-06-11 22:23:43', '', 0, 'http://speert/?p=28', 0, 'post', '', 0),
(29, 1, '2018-06-07 00:15:50', '2018-06-06 21:15:50', '', 'Who has \'hands of bronze\'? Read Garth\'s Team of the Week and select your own', '', 'inherit', 'closed', 'closed', '', '28-revision-v1', '', '', '2018-06-07 00:15:50', '2018-06-06 21:15:50', '', 28, 'http://speert/?p=29', 0, 'revision', '', 0),
(30, 1, '2018-06-07 00:16:12', '2018-06-06 21:16:12', '', 'England v Germany three\'s a crowd - five things to look forward to in Formula 1', '', 'publish', 'open', 'open', '', 'england-v-germany-threes-a-crowd-five-things-to-look-forward-to-in-formula-1', '', '', '2018-06-07 00:16:12', '2018-06-06 21:16:12', '', 0, 'http://speert/?p=30', 0, 'post', '', 0),
(31, 1, '2018-06-07 00:16:12', '2018-06-06 21:16:12', '', 'England v Germany three\'s a crowd - five things to look forward to in Formula 1', '', 'inherit', 'closed', 'closed', '', '30-revision-v1', '', '', '2018-06-07 00:16:12', '2018-06-06 21:16:12', '', 30, 'http://speert/?p=31', 0, 'revision', '', 0),
(32, 1, '2018-06-07 00:16:20', '2018-06-06 21:16:20', '', 'Scotland\'s Di Resta to make Le Mans debut', '', 'publish', 'open', 'open', '', 'scotlands-di-resta-to-make-le-mans-debut', '', '', '2018-06-07 00:16:20', '2018-06-06 21:16:20', '', 0, 'http://speert/?p=32', 0, 'post', '', 0),
(33, 1, '2018-06-07 00:16:20', '2018-06-06 21:16:20', '', 'Scotland\'s Di Resta to make Le Mans debut', '', 'inherit', 'closed', 'closed', '', '32-revision-v1', '', '', '2018-06-07 00:16:20', '2018-06-06 21:16:20', '', 32, 'http://speert/?p=33', 0, 'revision', '', 0),
(34, 1, '2018-06-07 00:16:29', '2018-06-06 21:16:29', '', 'Vettel used Ferrari\'s trump card to strike first psychological blow - and it will hurt Hamilton', '', 'publish', 'open', 'open', '', 'vettel-used-ferraris-trump-card-to-strike-first-psychological-blow-and-it-will-hurt-hamilton', '', '', '2018-06-07 00:16:29', '2018-06-06 21:16:29', '', 0, 'http://speert/?p=34', 0, 'post', '', 0),
(35, 1, '2018-06-07 00:16:29', '2018-06-06 21:16:29', '', 'Vettel used Ferrari\'s trump card to strike first psychological blow - and it will hurt Hamilton', '', 'inherit', 'closed', 'closed', '', '34-revision-v1', '', '', '2018-06-07 00:16:29', '2018-06-06 21:16:29', '', 34, 'http://speert/?p=35', 0, 'revision', '', 0),
(36, 1, '2018-06-07 00:16:39', '2018-06-06 21:16:39', '', 'Predict who will make the podium in Bahrain', '', 'publish', 'open', 'open', '', 'predict-who-will-make-the-podium-in-bahrain', '', '', '2018-06-07 00:16:39', '2018-06-06 21:16:39', '', 0, 'http://speert/?p=36', 0, 'post', '', 0),
(37, 1, '2018-06-07 00:16:39', '2018-06-06 21:16:39', '', 'Predict who will make the podium in Bahrain', '', 'inherit', 'closed', 'closed', '', '36-revision-v1', '', '', '2018-06-07 00:16:39', '2018-06-06 21:16:39', '', 36, 'http://speert/?p=37', 0, 'revision', '', 0),
(38, 1, '2018-06-07 00:16:47', '2018-06-06 21:16:47', '', 'Will Vettel be king of the desert? Plus vote for your best Bahrain moment', '', 'publish', 'open', 'open', '', 'will-vettel-be-king-of-the-desert-plus-vote-for-your-best-bahrain-moment', '', '', '2018-06-07 00:16:47', '2018-06-06 21:16:47', '', 0, 'http://speert/?p=38', 0, 'post', '', 0),
(39, 1, '2018-06-07 00:16:47', '2018-06-06 21:16:47', '', 'Will Vettel be king of the desert? Plus vote for your best Bahrain moment', '', 'inherit', 'closed', 'closed', '', '38-revision-v1', '', '', '2018-06-07 00:16:47', '2018-06-06 21:16:47', '', 38, 'http://speert/?p=39', 0, 'revision', '', 0),
(40, 1, '2018-06-07 00:16:56', '2018-06-06 21:16:56', '', 'We agreed to disagree too often - Agassi leaves Djokovic\'s coaching team', '', 'publish', 'open', 'open', '', 'we-agreed-to-disagree-too-often-agassi-leaves-djokovics-coaching-team', '', '', '2018-06-07 00:16:56', '2018-06-06 21:16:56', '', 0, 'http://speert/?p=40', 0, 'post', '', 0),
(41, 1, '2018-06-07 00:16:56', '2018-06-06 21:16:56', '', 'We agreed to disagree too often - Agassi leaves Djokovic\'s coaching team', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2018-06-07 00:16:56', '2018-06-06 21:16:56', '', 40, 'http://speert/?p=41', 0, 'revision', '', 0),
(42, 1, '2018-06-07 00:17:03', '2018-06-06 21:17:03', '', 'Isner ends Del Potro\'s winning streak to reach final', '', 'publish', 'open', 'open', '', 'isner-ends-del-potros-winning-streak-to-reach-final', '', '', '2018-06-07 00:17:03', '2018-06-06 21:17:03', '', 0, 'http://speert/?p=42', 0, 'post', '', 0),
(43, 1, '2018-06-07 00:17:03', '2018-06-06 21:17:03', '', 'Isner ends Del Potro\'s winning streak to reach final', '', 'inherit', 'closed', 'closed', '', '42-revision-v1', '', '', '2018-06-07 00:17:03', '2018-06-06 21:17:03', '', 42, 'http://speert/?p=43', 0, 'revision', '', 0),
(44, 1, '2018-06-07 00:17:10', '2018-06-06 21:17:10', '', 'I wouldn\'t wish custody battle on anyone - Azarenka', '', 'publish', 'open', 'open', '', 'i-wouldnt-wish-custody-battle-on-anyone-azarenka', '', '', '2018-06-07 00:17:10', '2018-06-06 21:17:10', '', 0, 'http://speert/?p=44', 0, 'post', '', 0),
(45, 1, '2018-06-07 00:17:10', '2018-06-06 21:17:10', '', 'I wouldn\'t wish custody battle on anyone - Azarenka', '', 'inherit', 'closed', 'closed', '', '44-revision-v1', '', '', '2018-06-07 00:17:10', '2018-06-06 21:17:10', '', 44, 'http://speert/?p=45', 0, 'revision', '', 0),
(46, 1, '2018-06-07 00:17:18', '2018-06-06 21:17:18', '', 'I want more Grand Slams but I don\'t need them, says Serena', '', 'publish', 'open', 'open', '', 'i-want-more-grand-slams-but-i-dont-need-them-says-serena', '', '', '2018-06-07 00:17:18', '2018-06-06 21:17:18', '', 0, 'http://speert/?p=46', 0, 'post', '', 0),
(47, 1, '2018-06-07 00:17:18', '2018-06-06 21:17:18', '', 'I want more Grand Slams but I don\'t need them, says Serena', '', 'inherit', 'closed', 'closed', '', '46-revision-v1', '', '', '2018-06-07 00:17:18', '2018-06-06 21:17:18', '', 46, 'http://speert/?p=47', 0, 'revision', '', 0),
(48, 1, '2018-06-07 00:17:30', '2018-06-06 21:17:30', '', 'Becker hunts for five missing Grand Slam trophies - to pay debts', '', 'publish', 'open', 'open', '', 'becker-hunts-for-five-missing-grand-slam-trophies-to-pay-debts', '', '', '2018-06-13 02:04:05', '2018-06-12 23:04:05', '', 0, 'http://speert/?p=48', 0, 'post', '', 0),
(49, 1, '2018-06-07 00:17:30', '2018-06-06 21:17:30', '', 'Becker hunts for five missing Grand Slam trophies - to pay debts', '', 'inherit', 'closed', 'closed', '', '48-revision-v1', '', '', '2018-06-07 00:17:30', '2018-06-06 21:17:30', '', 48, 'http://speert/?p=49', 0, 'revision', '', 0),
(52, 1, '2018-06-11 22:36:08', '2018-06-11 19:36:08', 'http://speert/wp-content/uploads/2018/06/cropped-preview.jpg', 'cropped-preview.jpg', '', 'inherit', 'open', 'closed', '', 'cropped-preview-jpg', '', '', '2018-06-11 22:36:08', '2018-06-11 19:36:08', '', 0, 'http://speert/wp-content/uploads/2018/06/cropped-preview.jpg', 0, 'attachment', 'image/jpeg', 0),
(64, 1, '2018-06-12 01:23:31', '2018-06-11 22:23:31', 'Ankara-based architecture firm rgg Architects has unveiled design for a new mixed-use tower in Dubai, UAE. Called Dubai Nhabitat, the building challenges Dubai\'s vertical urban density with its permeability and multiple uses. Described as \"a permeable and living structure in Dubai\", the tower will be the firm\'s first major project in the United Arab Emirates.', 'Who has \'hands of bronze\'? Read Garth\'s Team of the Week and select your own', '', 'inherit', 'closed', 'closed', '', '28-revision-v1', '', '', '2018-06-12 01:23:31', '2018-06-11 22:23:31', '', 28, 'http://speert/28-revision-v1/', 0, 'revision', '', 0),
(65, 1, '2018-06-12 01:23:43', '2018-06-11 22:23:43', 'Ankara-based architecture firm rgg Architects has unveiled design for a new mixed-use tower in Dubai, UAE. Called Dubai Nhabitat, the building challenges Dubai\'s vertical urban density with its permeability and multiple uses. Described as \"a permeable and living structure in Dubai\", the tower will be the firm\'s first major project in the United Arab Emirates.\r\n\r\nAnkara-based architecture firm rgg Architects has unveiled design for a new mixed-use tower in Dubai, UAE. Called Dubai Nhabitat, the building challenges Dubai\'s vertical urban density with its permeability and multiple uses. Described as \"a permeable and living structure in Dubai\", the tower will be the firm\'s first major project in the United Arab Emirates.', 'Who has \'hands of bronze\'? Read Garth\'s Team of the Week and select your own', '', 'inherit', 'closed', 'closed', '', '28-revision-v1', '', '', '2018-06-12 01:23:43', '2018-06-11 22:23:43', '', 28, 'http://speert/28-revision-v1/', 0, 'revision', '', 0),
(74, 1, '2018-06-14 11:15:39', '2018-06-14 08:15:39', '<img class=\"alignnone size-full wp-image-76\" src=\"http://speert/wp-content/uploads/2018/06/test_img.jpg\" alt=\"\" width=\"900\" height=\"480\" />', 'I want more Grand Slams but I don\'t need them, says Serena', '', 'inherit', 'closed', 'closed', '', '46-autosave-v1', '', '', '2018-06-14 11:15:39', '2018-06-14 08:15:39', '', 46, 'http://speert/46-autosave-v1/', 0, 'revision', '', 0),
(76, 1, '2018-06-14 11:14:54', '2018-06-14 08:14:54', '', 'test_img', '', 'inherit', 'open', 'closed', '', 'test_img', '', '', '2018-06-14 11:14:54', '2018-06-14 08:14:54', '', 46, 'http://speert/wp-content/uploads/2018/06/test_img.jpg', 0, 'attachment', 'image/jpeg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'No category', 'no-category', 0),
(2, 'Football', 'football', 0),
(3, 'Formula 1', 'formula', 0),
(4, 'Tennis', 'tennis', 0),
(5, 'Athletics', 'athletics', 0),
(6, 'header_menu', 'header_menu', 0),
(7, 'Blog', 'blog', 0),
(8, 'Features', 'features', 0),
(9, 'Sports', 'sports', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(10, 6, 0),
(11, 6, 0),
(13, 6, 0),
(14, 6, 0),
(15, 6, 0),
(16, 6, 0),
(17, 6, 0),
(18, 6, 0),
(20, 2, 0),
(20, 3, 0),
(20, 4, 0),
(22, 2, 0),
(24, 2, 0),
(26, 2, 0),
(28, 2, 0),
(30, 3, 0),
(32, 3, 0),
(34, 3, 0),
(36, 3, 0),
(38, 3, 0),
(40, 4, 0),
(42, 4, 0),
(44, 4, 0),
(46, 4, 0),
(48, 4, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', 'Description No category', 0, 0),
(2, 2, 'category', 'Description Football category', 9, 5),
(3, 3, 'category', 'Description Formula 1 category', 9, 6),
(4, 4, 'category', 'Description Tennis category', 9, 6),
(5, 5, 'category', 'Description athletics category', 0, 0),
(6, 6, 'nav_menu', '', 0, 8),
(7, 7, 'category', 'Description Blog category', 0, 0),
(8, 8, 'category', 'Description Features category', 0, 0),
(9, 9, 'category', 'Description Sports category', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'LexusGT'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'wp496_privacy,theme_editor_notice'),
(15, 1, 'show_welcome_panel', '0'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '77'),
(18, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}'),
(19, 1, 'wp_user-settings', 'libraryContent=browse&editor=tinymce&imgsize=full&post_dfw=off&hidetb=1'),
(20, 1, 'wp_user-settings-time', '1536047862'),
(21, 1, 'meta-box-order_page', 'a:3:{s:4:\"side\";s:23:\"submitdiv,pageparentdiv\";s:6:\"normal\";s:45:\"postcustom,commentstatusdiv,slugdiv,authordiv\";s:8:\"advanced\";s:0:\"\";}'),
(22, 1, 'screen_layout_page', '2'),
(23, 1, 'nav_menu_recently_edited', '6'),
(24, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(25, 1, 'metaboxhidden_nav-menus', 'a:2:{i:0;s:12:\"add-post_tag\";i:1;s:15:\"add-post_format\";}'),
(26, 1, 'session_tokens', 'a:1:{s:64:\"499b2498e9672a467cf93553d860309f3d878584bf465a6b1a1dcaa18b2aaeb5\";a:4:{s:10:\"expiration\";i:1537904872;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:142:\"Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.103 YaBrowser/18.7.1.920 Yowser/2.5 Safari/537.36\";s:5:\"login\";i:1537732072;}}');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'LexusGT', '$P$BA1W9GlDVHsHn5xEI6JR/k00hDt1VD.', 'lexusgt', 'leragt@yandex.ru', '', '2018-06-04 11:25:02', '', 0, 'LexusGT');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Индексы таблицы `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Индексы таблицы `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Индексы таблицы `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Индексы таблицы `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Индексы таблицы `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Индексы таблицы `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Индексы таблицы `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;

--
-- AUTO_INCREMENT для таблицы `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT для таблицы `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT для таблицы `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

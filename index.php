<?php
$minPHPVersion = 7.2;
if (phpversion() < $minPHPVersion)
{
	die("Vui lòng sử dụng phiên bản PHP {$minPHPVersion} trở lên. Phiên bản hiện tại: " . phpversion());
}
unset($minPHPVersion);

// Định nghĩa hằng Path của file index.php
define('PATH_ROOT', __DIR__);
define('PATH_VIEW', PATH_ROOT.'/app/views');

// load vendor 
require PATH_ROOT . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

error_reporting($_SERVER['ENVIRONMENT'] === 'development' ? 1 : 0); // hiển thị lỗi 0 ẩn, 1 hiện

// Autoload class trong PHP
spl_autoload_register(function (string $class_name) {
    include_once PATH_ROOT . '/' . $class_name . '.php';
});

// load function system
include_once PATH_ROOT . '/core/function.php';

// load class Route
$router = new Core\Http\Route();
include_once PATH_ROOT . '/app/routes.php';

// Lấy url hiện tại của trang web. Mặc định la /
$request_url = !empty($_GET['url']) ? '/' . $_GET['url'] : '/';

// Lấy phương thức hiện tại của url đang được gọi. (GET | POST). Mặc định là GET.
$method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

// map URL
$router->map($request_url, $method_url);
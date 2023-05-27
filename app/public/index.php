<?php declare(strict_types=1);
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Helpers;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../../', '.env.app');
$dotenv->safeLoad();

echo '<h1>Hello World!</h1>';
Helpers::showText("test text...");
echo "<h5>{$_ENV['DATABASE_PORT']}</h5>";
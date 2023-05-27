<?php declare(strict_types=1);
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Helpers;
use Dotenv\Dotenv;
use App\EnvWriter;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../../', 'app.env');
$dotenv->safeLoad();

echo '<h1>Hello World!</h1>';
Helpers::showText("test text...");
echo "<h5>{$_ENV['DATABASE_PORT']}</h5>";
<?php

$actualDirectory = './';
if (isset($currentDirectory)) {
    $actualDirectory = $currentDirectory;
}
require_once $actualDirectory . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
$base_url = rtrim(($_ENV['BASE_URL'] ?? 'http://localhost/php'), '/') . '/';


global $rewriteUrlList;
global $rewritePathList;
$rewriteUrlList = [
    'basics' => 'basic',
    'utilities' => 'utility',
    'algorithms' => 'algorithm',
];
$rewritePathList = array_flip($rewriteUrlList);

/**
 * Rewrite URL
 * ----------------------------
 * Menerjemahkan Path menjadi URL
 * yang dapat diakses
 * contoh: `basics/1_hello_world` > `./basic/1_hello_world`
 */
function rewriteUrl($path)
{
    global $rewriteUrlList;
    $path = ltrim($path, './');
    $urlArray = explode('/', $path);
    if (isset($rewriteUrlList[$urlArray[0]])) {
        $urlArray[0] = $rewriteUrlList[$urlArray[0]];
    }
    return implode('/', $urlArray) != '' ? implode('/', $urlArray) : './';
}

/**
 * Rewrite Path
 * -----------------------------
 * Menerjemahkan URL menjadi Path
 * yang sebenarnya
 * contoh: `./basic/1_hello_world` > `basics/1_hello_world`
 */
function rewritePath($path)
{
    global $rewritePathList;
    $path = ltrim($path, './');
    $urlArray = explode('/', $path);
    if (isset($rewritePathList[$urlArray[0]])) {
        $urlArray[0] = $rewritePathList[$urlArray[0]];
    }
    return implode('/', $urlArray) != '' ? implode('/', $urlArray) : './';
}

$pageUrl = trim($_SERVER['REQUEST_URI'], '/');

/**
 * Fix: ketidak relevanan REQUEST_URI karena ditaruh di subdirectory
 */
if (!is_dir(rewritePath($pageUrl))) {
    if (isset($_GET['page'])) {
        $pageUrl = $_GET['page'];
        $pageUrl = rtrim($pageUrl, '/');
        $pageUrl = str_replace('//', '/', $pageUrl);
        $pageUrl = $pageUrl;
    } else {
        $pageUrl = '';
    }
}

// die;
// echo '<pre>';
// echo 'pageUrl: ' . $pageUrl, PHP_EOL;
// echo 'rewriteUrl: ' . rewriteUrl($pageUrl), PHP_EOL;
// echo 'rewritePath: ' . rewritePath(rewriteUrl($pageUrl)), PHP_EOL;
// echo '</pre>';
// die;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bellshade </title>
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/markdown-style.css">
    <link rel="icon" href="<?= $base_url ?>assets/images/icon.png">

</head>

<body class="w-100 h-100 d-flex align-items-center">
    <div class="container">
        <div class="row mb-4 justify-content-center">
            <div class="col-auto text-center">
                <div class="mt-4" style="height: 64px; mix-blend-mode: darken">
                    <img class="h-100" src="<?= $base_url ?>assets/images/bellshade-inline.png" alt="Bellshade PHP Logo">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow-lg">
                    <div class="card-header p-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="me-4" style="width: 64px; height: 64px;">
                                    <img src="<?= $base_url ?>assets/images/phplogo.png" class="img-fluid">
                                </div>
                                <div>
                                    <h4 class="mb-0">Bellshade PHP</h4>
                                    <span class="text-muted fst-italic">
                                        Gunakan navigasi berikut untuk berpindah direktori
                                    </span>
                                </div>
                            </div>
                            <nav>
                                <ul class="breadcrumb mb-0">
                                    <li class="breadcrumb-item active">root</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        $exception = [
                            '',
                            '.',
                            '.git',
                            '.github',
                            'assets',
                            'backup',
                            'vendor',
                            'tests',
                            'BASIC.md',
                            'README.md',
                            'CONTRIBUTING.md',
                            'LICENSE',
                            'index.php',
                            'composer.json',
                            'composer.lock',
                            'phpcs.ruleset.xml',
                            '.env',
                            'env',
                            '.gitignore',
                            '.htaccess',
                            'autoload.php',
                            'run.php',
                            'router.php',
                            'config.php',
                            'tasks.md'
                        ];
                        if ($pageUrl == '') {
                            $exception[] = '..';
                            $kategori = '';
                            $floatingBar = false;
                        } elseif (strpos($pageUrl, 'basic') !== false) {
                            $kategori = 'Materi';
                        } elseif (strpos($pageUrl, 'algorithm') !== false) {
                            $kategori = 'Algoritma';
                        } elseif (strpos($pageUrl, 'utility') !== false) {
                            $kategori = 'Utility';
                        }
                        $currentPath = rewritePath($pageUrl);
                        $directories = scandir($currentPath);
                        sort($directories, SORT_NUMERIC);

                        // echo '<pre>';
                        // print_r(strpos($pageUrl, 'basic'));
                        // echo '</pre>';
                        ?>
                        <div class="list-group">
                            <?php foreach ($directories as $dir) : ?>
                                <?php if (is_dir($currentPath . '/' . $dir) && array_search($dir, $exception) == 0) : ?>
                                    <a href="<?= $base_url . rewriteUrl($currentPath . '/' . $dir) ?>" class="list-group-item">
                                        <i class="fas fa-folder me-2"></i>
                                        <?= $dir ?>
                                    </a>
                                <?php elseif (is_file($currentPath . '/' . $dir) && array_search($dir, $exception) == 0) : ?>
                                    <a href="<?= $base_url . $currentPath . '/' . $dir ?>" class="list-group-item" target="_blank">
                                        <i class="fab fa-php me-2"></i>
                                        <?= $dir ?>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <hr class="mt-5 mb-3">
                        <div class="readme-content p-5">
                            <?php
                            $parsedown = new Parsedown();
                            echo $parsedown->text(file_get_contents($currentPath . '/README.md'));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="materi-wrapper materi-hidden">
        <div class="card shadow">
            <div class="card-header text-white d-flex justify-content-between align-items-center">
                <strong>Demo <?= $kategori ?></strong>
                <button class="btn btn-link text-white rotated">
                    <i class="fas fa-angle-down"></i>
                </button>
            </div>
            <div class="card-body">
                <div class="list-group" style="max-height: 80vh; overflow-y: auto">
                    <?php foreach ($directories as $dir) : ?>
                        <?php if (is_dir($currentPath . '/' . $dir) && array_search($dir, $exception) == 0) : ?>
                            <a href="<?= $base_url . rewriteUrl($currentPath . '/' . $dir) ?>" class="list-group-item">
                                <i class="fas fa-folder me-2"></i>
                                <?= $dir ?>
                            </a>
                        <?php elseif (is_file($currentPath . '/' . $dir) && array_search($dir, $exception) == 0) : ?>
                            <a href="<?= $base_url . $currentPath . '/' . $dir ?>" class="list-group-item" target="_blank">
                                <i class="fab fa-php me-2"></i>
                                <?= $dir ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= $base_url ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url ?>assets/js/all.min.js"></script>

    <script>
        const BASE_URL = '<?= $base_url ?>';
        const CURRENT_PATH = '<?= $currentPath ?>';
    </script>
    <script src="<?= $base_url ?>assets/js/markdown.js"></script>
</body>

</html>
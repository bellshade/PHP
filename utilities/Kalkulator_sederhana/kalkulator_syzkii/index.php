<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $currentDirArray = explode('\\', dirname(__FILE__));
    $url = explode('/', $_SERVER['PHP_SELF']);
    array_pop($url);
    $base_url = 'http://' . $_SERVER['HTTP_HOST'] . implode('/', $url);
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base_url ?>/../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>/../../../assets/css/all.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>/../../../assets/css/markdown-style.css">
    <link rel="icon" href="<?= $base_url ?>/../../../assets/images/icon.png">
    <title><?= $currentDirArray[count($currentDirArray) - 1] ?> - Bellshade PHP Utilities</title>

</head>

<body class="w-100 h-100 d-flex align-items-center">
    <div class="container">
        <div class="row mb-4 justify-content-center">
            <div class="col-auto text-center">
                <div class="mt-4 logo-wrapper">
                    <img class="h-100" src="<?= $base_url ?>/../../../assets/images/bellshade-inline.png" alt="Bellshade PHP Logo">
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
                                    <img src="<?= $base_url ?>/../../../assets/images/phplogo.png" class="img-fluid">
                                </div>
                                <div>
                                    <h4 class="mb-0">PHP - Utilities</h4>
                                    <span class="text-muted fst-italic">Demo materi bisa kamu akses dari disini</span>
                                </div>
                            </div>
                            <nav>
                                <ul class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="../../../index.php">root</a></li>
                                    <li class="breadcrumb-item"><a href="../index.php">utilities</a></li>
                                    <li class="breadcrumb-item active">
                                        <?= $currentDirArray[count($currentDirArray) - 1] ?>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        $exception = ['', 'README.md', 'index.php'];
                        $files = scandir(realpath('./'));
                        ?>
                        <div class="list-group">
                            <?php foreach ($files as $fl) : ?>
                                <?php if ((($fl != '..') ? is_file(realpath($fl)) : true) && array_search($fl, $exception) == '') : ?>
                                    <a href="<?= $base_url . '/' . $fl ?>" <?=($fl != '..') ? 'target="_blank"' : ''?> class="list-group-item list-group-item-action">
                                        <i class="<?=(($fl == '..') ? 'fas fa-folder' : 'fab fa-php')?> me-2"></i>
                                        <?= $fl ?>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>

                        <hr class="mt-5 mb-3">

                        <div class="readme-content p-5">
                            <?php
                            require_once './../../../vendor/autoload.php';
                            $parsedown = new Parsedown();
                            echo $parsedown->text(file_get_contents('./README.md'));
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
                <strong>Demo materi</strong>
                <button class="btn btn-link text-white rotated">
                    <i class="fas fa-angle-down"></i>
                </button>
            </div>
            <div class="card-body">
                <div class="list-group" style="max-height: 80vh; overflow-y: auto">
                    <?php foreach ($files as $fl) : ?>
                        <?php if (is_file(realpath($fl)) && array_search($fl, $exception) == '') : ?>
                            <a href="<?= $base_url . '/' . $fl ?>" target="_blank" class="list-group-item list-group-item-action">
                                <i class="fab fa-php me-2"></i>
                                <?= $fl ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= $base_url ?>/../../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url ?>/../../../assets/js/all.min.js"></script>
    <script src="<?= $base_url ?>/../../../assets/js/markdown.js"></script>
</body>

</html>
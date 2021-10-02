<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bellshade PHP - Basic</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/markdown-style.css">
    <link rel="icon" href="assets/images/icon.png">
</head>
<body class="w-100 h-100 d-flex align-items-center">
    <div class="container">
        <div class="row mb-4 justify-content-center">
            <div class="col-auto text-center">
                <div class="mt-4" style="height: 64px; mix-blend-mode: darken">
                    <img class="h-100" src="assets/images/bellshade-inline.png" alt="Bellshade PHP Logo">
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
                                    <img src="./assets/images/phplogo.png" class="img-fluid">
                                </div>
                                <div>
                                    <h4 class="mb-0">PHP - Basic</h4>
                                    <span class="text-muted fst-italic">Daftar materi bisa kamu akses dari disini</span>
                                </div>
                            </div>
                            <nav>
                                <ul class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="../index.php">root</a></li>
                                    <li class="breadcrumb-item active">basic</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                            $exception = [
                                '',
                                '.',
                                '..',
                                'assets',
                                'backup'
                            ];
                            $directories = scandir(realpath('./'));
                        ?>
                        <div class="list-group">
                            <?php foreach ($directories as $directory) : ?>
                                <?php if (is_dir(realpath($directory)) && array_search($directory, $exception) == '') : ?>
                                    <a href="./<?=$directory?>" class="list-group-item list-group-item-action">
                                        <i class="fas fa-folder me-2"></i>
                                        <?=$directory?>
                                    </a>
                                <?php endif;?>
                            <?php endforeach; ?>
                        </div>
                        
                        <hr class="mt-5 mb-3">
                        
                        <div class="readme-content p-5">
                            <?php
                                require_once './../vendor/autoload.php';
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
                <strong>File materi</strong>
                <button class="btn btn-link text-white rotated">
                    <i class="fas fa-angle-down"></i>
                </button>
            </div>
            <div class="card-body">
                <div class="list-group" style="max-height: 80vh; overflow-y: scroll">
                    <?php foreach ($directories as $directory) : ?>
                        <?php if (is_dir(realpath($directory)) && array_search($directory, $exception) == '') : ?>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-folder me-2"></i>
                                <?=$directory?>
                            </a>
                        <?php endif;?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/markdown.js"></script>
</body>
</html>
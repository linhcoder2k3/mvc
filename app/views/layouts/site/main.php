<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= meta_csrf(); ?>
    <title><?= $this->title ?></title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<?= jquery_csrf(); ?>
<body>
    <?php require_once PATH_VIEW.'/layouts/site/navbar.php'; ?>
    <div class="container pt-3">
        <?php $this->section('content') ?>
        <?php $this->stop() ?>
    </div>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
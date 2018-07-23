<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Anchor CMS">

    <meta property="og:title" content="<?= page_title() ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= e(current_url()) ?>">
    <meta property="og:site_name" content="<?= site_name() ?>">
    <meta property="og:description" content="<?= page_description() ?>">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= theme_url('/dist/style.css') ?>">
    <style>
        <?php if (has_profile_picture()): ?>
            .brand {
                background-image: url(<?= profile_picture_url() ?>)
            }
        <?php endif ?>
    </style>
    <?php if (customised()): ?>
        <!-- Custom CSS -->
        <style><?= article_css() ?></style>
    <?php endif ?>

    <title><?= page_title('Page can’t be found') ?> - <?= site_name() ?></title>

    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?= rss_url() ?>">
</head>

<body class="<?= body_class() ?>">
<header class="header">
    <div class="row row-header">
        <div class="col">
            <div class="brand"></div>
        </div>
        <div class="col col-logo">
            <a href="<?= base_url() ?>" class="header-logo"><?= site_name() ?></a>
        </div>
        <div class="col col-search">
            <a href="#"><i data-feather="search">Search</i></a>
        </div>
    </div>
</header>
<div class="nav-scroller">
    <?php if (has_menu_items()): ?>
        <nav class="nav">
            <?php while (menu_items()): ?>
                <a href="<?= menu_url() ?>" class="<?= (menu_active() ? 'active' : '') ?>"
                   title="<?= menu_title() ?>"><?= menu_name() ?></a>
            <?php endwhile ?>
        </nav>
    <?php endif ?>
</div>
<div class="container">
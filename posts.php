<?php theme_include('header') ?>

<section class="main" role="main">
    <?php if (has_posts()): ?>
        <?php posts() ?>
        <article class="jumbotron jumbotron-featured">
            <div class="col">
                <h2 class="display-4">
                    <a href="<?= article_url() ?>"><?= article_title() ?></a>
                </h2>
                <p class="lead"><?= article_description() ?></p>
                <p class="lead">
                    <a href="<?= article_url() ?>" class="link" title="<?= article_title() ?>">
                        Continue reading&hellip;
                    </a>
                </p>
            </div>
        </article>
        <?php if (posts_per_page() > 1): ?>
            <div class="row row-featured">
                <?php while (posts()): ?>
                    <article class="col col-featured">
                        <div class="card card-featured">
                            <div class="card-body">
                                <strong class="category"><?= article_category() ?></strong>
                                <h2><a href="<?= article_url() ?>"><?= article_title() ?></a></h2>
                                <div class="date">
                                    <time datetime="<?= date(DATE_W3C, article_time()) ?>">
                                        <?= date('j M', article_time()) ?>
                                    </time>
                                </div>
                                <p class="card-text"><?= article_description() ?></p>
                                <a href="<?= article_url() ?>" title="<?= article_title() ?>">
                                    Continue reading&hellip;
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile ?>
            </div>
        <?php endif ?>
        <?php if (has_pagination()): ?>
            <nav class="pagination">
                <?php echo posts_prev() ?>
                <?php echo posts_next() ?>
            </nav>
        <?php endif ?>
    <?php else: ?>
        <h2 class="page-title">No posts yet!</h2>
        <p class="lead">Looks like you have some writing to do!</p>
    <?php endif ?>
</section>

<?php theme_include('footer') ?>

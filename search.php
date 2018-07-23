<?php theme_include('header') ?>

<section class="main" role="main">
    <div class="page">
        <h2 class="page-title">You searched for &ldquo;<?= search_term() ?>&rdquo;.</h2>
        <?php if (has_search_results()): ?>
            <ul class="list-unstyled">
                <?php while(search_results()): ?>
                    <li class="media">
                        <article class="media-body">
                            <h3><a href="<?= search_item_url() ?>"><?= search_item_title() ?></a></h3>
                        </article>
                    </li>
                <?php endwhile ?>
            </ul>
            <?php if (has_search_pagination()): ?>
                <nav class="pagination">
                    <?php echo posts_prev() ?>
                    <?php echo posts_next() ?>
                </nav>
            <?php endif ?>
        <?php else: ?>
            <p class="lead">Unfortunately, there's no results for &ldquo;<?= search_term() ?>&rdquo;.</p>
            <p class="lead">Did you spell everything correctly?</p>
        <?php endif ?>
    </div>
</section>

<?php theme_include('footer') ?>

<?php theme_include('header') ?>

<section id="article-<?= article_id() ?>" class="main" role="main">
    <div class="post">
        <h2 class="post-title"><?= article_title() ?></h2>
        <p class="post-meta">
            <time datetime="<?= date(DATE_W3C, article_time()) ?>">
                <?= date('j F Y', article_time()) ?>
            </time>
            by <span class="author"><?= article_author() ?></span>
        </p>
        <article>
            <?= article_html() ?>
        </article>
    </div>
    <?php if (comments_open()): ?>
        <div class="comments">
            <?php if (has_comments()): ?>
                <ul class="list-unstyled">
                    <?php while (comments()): ?>
                        <li id="comment-<?= comment_id() ?>" class="media">
                            <div class="media-body">
                                <h3><?= comment_name() ?></h3>
                                <p class="comments-meta">
                                    <time datetime="<?= date(DATE_W3C, comment_time()) ?>">
                                        <?= date('j F Y', comment_time()) ?>
                                    </time>
                                </p>
                                <p><?= comment_text() ?></p>
                            </div>
                        </li>
                    <?php endwhile ?>
                </ul>
            <?php endif ?>
            <form id="comment" method="post" action="<?= comment_form_url() ?>#comment">
                <?= comment_form_notifications() ?>
                <div class="form-group">
                    <label for="email">Your name</label>
                    <?= comment_form_input_name('class="form-control" placeholder="Enter your name"') ?>
                </div>
                <div class="form-group">
                    <label for="email">Your email address</label>
                    <?= comment_form_input_email('class="form-control" placeholder="Enter your email" aria-describedby="emailHelp"') ?>
                    <small id="emailHelp" class="form-text text-muted">
                        We'll never share your email with anyone else.
                    </small>
                </div>
                <div class="form-group">
                    <label for="text">Your comment</label>
                    <?= comment_form_input_text('class="form-control" placeholder="Enter your comment"') ?>
                </div>
                <?= comment_form_button('Post Comment', 'class="btn btn-primary"') ?>
            </form>
        </div>
    <?php endif ?>
</section>

<?php theme_include('footer') ?>
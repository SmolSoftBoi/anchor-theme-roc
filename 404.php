<?php theme_include('header') ?>

<section class="main" role="main">
    <div class="page">
        <h2 class="page-title">Page not found</h2>
        <p class="lead">
            Unfortunately, the page <code>/<?= htmlspecialchars(current_url()) ?></code> could not be found.
        </p>
        <p class="lead">
            Your best bet is either to try the <a href="<?= base_url() ?>">homepage</a>, try <a href="#search">searching</a>, or go and cry in a corner (although I don’t recommend the latter).
        </p>
    </div>
</section>

<?php theme_include('footer') ?>

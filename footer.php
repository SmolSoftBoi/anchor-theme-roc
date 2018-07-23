</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col col-legal">
                <p>
                    <small>Copyright &copy; <?= date('Y') ?> <?= site_name() ?>. All rights reserved.</small>
                </p>
            </div>
            <div class="col col-nav">
                <ul class="nav" role="navigation">
                    <li class="nav-item">
                        <a href="<?= rss_url() ?>" class="nav-link">RSS</a>
                    </li>
                    <?php if (has_twitter()): ?>
                        <li class="nav-item">
                            <a href="<?= twitter_url() ?>" class="nav-link">
                                <i data-feather="twitter">Twitter</i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (has_instagram()): ?>
                        <li class="nav-item">
                            <a href="<?= instagram_url() ?>" class="nav-link">
                                <i data-feather="instagram">Instagram</i>
                            </a>
                        </li>
                    <?php endif ?>
                    <li class="nav-item">
                        <a href="<?= base_url('admin') ?>" class="nav-link" title="Administer your site!">Admin Area</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script>var base = "<?= theme_url() ?>";</script>
<script src="<?= theme_url('/dist/bundle.js') ?>"></script>
<?php if (customised()): ?>
    <!-- Custom JavaScript -->
    <script><?= article_js() ?></script>
<?php endif ?>
</body></html>
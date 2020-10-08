<footer class="footer">
    <div class="grid-container">
        <div class="grid-x grid-margin-y align-justify small-align-center align-middle">
            <div class="cell shrink logo"><?php the_custom_logo() ?></div>
            <div class="cell shrink copyright">Copyright © <?= date('Y'); ?> Inspiratie by <a href="<?= get_home_url() ?>" class="underlined">Stephanie</a></div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

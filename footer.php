<footer class="site-footer">
  <div class="site-footer__inner">
    <nav class="footer-nav">
      <?php wp_nav_menu(['theme_location' => 'footer', 'container' => false]); ?>
    </nav>
    <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

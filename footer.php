<footer class="site-footer">
  <div class="site-footer__inner">
    <div class="footer-main">

      <div class="footer-brand">
        <div class="footer-logo footer-logo--pill">
          <img src="<?php echo yuumi_img('logo.png'); ?>" alt="ゆうつむぎデザイン" class="footer-logo__img">
          <span class="footer-logo__text">ゆうつむぎデザイン</span>
        </div>
        <p class="footer-brand__tagline">
          地域に関わる人の想いを<br>
          やさしくつむぎ、デザインする。
        </p>
        <div class="footer-brand__info">
          <p>創業：2026年2月20日</p>
          <p>青森県十和田市</p>
          <p>代表：渡邊ゆうみ</p>
          <p>yuutumugi.design@gmail.com</p>
          <?php if ( is_page(['otameshi', 'chiiki-support', 'program']) ) : ?>
            <p style="font-size: 0.85em;">主催：<a href="https://www.city.towada.lg.jp/kurashi/ijuu/index.html" target="_blank" rel="noopener noreferrer">十和田市役所みらい戦略部 シティプロモーション課</a></p>
          <?php endif; ?>
        </div>
      </div>

      <div class="footer-nav-group">
        <h4>メニュー</h4>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>">ゆうつむぎデザインについて</a></li>
          <li><a href="<?php echo esc_url(home_url('/service/')); ?>">サービス</a></li>
          <li><a href="<?php echo esc_url(home_url('/works/')); ?>">活動実績</a></li>
        </ul>
      </div>

      <div class="footer-nav-group">
        <h4>情報</h4>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog・お知らせ</a></li>
          <li><a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a></li>
          <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">プライバシーポリシー</a></li>
        </ul>
      </div>

      <div class="footer-nav-group">
        <h4>SNS・お問い合わせ</h4>
        <ul>
          <li><a href="https://www.instagram.com/youme0141/" target="_blank" rel="noopener">Instagram</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
        </ul>
      </div>

    </div>
  </div>

  <div class="footer-bottom">
    <p class="footer-bottom__text footer-bottom__pill">&copy; <?php echo date('Y'); ?> ゆうつむぎデザイン All Rights Reserved.</p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

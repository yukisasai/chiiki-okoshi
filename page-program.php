<?php
/**
 * Template Name: 地域おこし協力隊プログラム
 */
get_header(); ?>

<main>

    <!-- ページヒーロー -->
    <section class="program-header fade-in">
        <div class="container text-center">
            <span class="program-header__label">PROGRAM</span>
            <h1 class="program-header__title">十和田市地域おこし協力隊</h1>
            <p class="program-header__desc">
                十和田市では、現在3つのミッションで<br class="br-sp">地域おこし協力隊を募集中です。<br>
                気になるミッションから、市の募集ページを<br class="br-sp">ご覧いただけます。
            </p>
        </div>
    </section>
    <?php yuumi_breadcrumbs(); ?>

    <!-- 十和田市ってどんなまち？ -->
    <section class="program-towada fade-in">
        <div class="container">
            <div class="program-towada__inner">
                <div class="program-towada__img">
                    <img src="<?php echo yuumi_img('otameshi/towada-lake.png'); ?>" alt="十和田湖の風景" loading="lazy">
                </div>
                <div class="program-towada__body">
                    <span class="program-towada__label">ABOUT</span>
                    <h2 class="program-towada__title">十和田市ってどんなまち？</h2>
                    <p class="program-towada__text">
                        十和田市は青森県南部に位置し、約5万6千人が暮らすまちです。<br>
                        四季折々の自然に恵まれ、市街地には商業施設や病院、学校など生活に必要な環境も整っています。<br>
                        世界的にも知られる十和田市現代美術館や、特別名勝・天然記念物「十和田湖奥入瀬渓流」など、多くの観光資源がある都会過ぎず、田舎過ぎない、ちょうどいいまちです。
                    </p>
                    <div class="program-towada__stats">
                        <div class="program-towada__stat program-towada__stat--green-r">
                            <span class="program-towada__stat-label">人口</span>
                            <span class="program-towada__stat-value">約5万6千人</span>
                        </div>
                        <div class="program-towada__stat program-towada__stat--green-l">
                            <span class="program-towada__stat-label">面積</span>
                            <span class="program-towada__stat-value">725.65km²</span>
                        </div>
                        <div class="program-towada__stat program-towada__stat--blue-r">
                            <span class="program-towada__stat-label">アクセス</span>
                            <span class="program-towada__stat-value">七戸十和田駅から車で約25分</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ミッション一覧 -->
    <section class="program-missions fade-in">
        <div class="container">

            <!-- MISSION 01 -->
            <div class="program-mission">
                <div class="program-mission__img">
                    <img src="<?php echo yuumi_img('program-mission01.jpg'); ?>" alt="移住コンシェルジュの活動風景" loading="lazy">
                </div>
                <div class="program-mission__body">
                    <span class="program-mission__num">MISSION 01</span>
                    <h3 class="program-mission__title">移住コンシェルジュ</h3>
                    <p class="program-mission__text">
                        十和田市への移住・定住に関わる情報発信や、移住を考えている方へのサポートに取り組むミッションです。
                    </p>
                    <a href="https://www.city.towada.lg.jp/kurashi/ijuu/2026-0414-1033-249.html" class="btn program-mission__btn" target="_blank" rel="noopener noreferrer">
                        応募ページ（市HP）
                        <img src="<?php echo yuumi_img('arrow-external-white.svg'); ?>" alt="" width="17" height="17"
                            aria-hidden="true">
                    </a>
                </div>
            </div>

            <!-- MISSION 02 -->
            <div class="program-mission program-mission--reverse">
                <div class="program-mission__body">
                    <span class="program-mission__num">MISSION 02</span>
                    <h3 class="program-mission__title">十和田湖地区での保育業務</h3>
                    <p class="program-mission__text">
                        十和田湖地区での暮らしや、地域に根ざした保育の現場に関わるミッションです。
                    </p>
                    <a href="https://www.city.towada.lg.jp/fukushi/kosodate/2026-0415-1305-186.html" class="btn program-mission__btn" target="_blank" rel="noopener noreferrer">
                        応募ページ（市HP）
                        <img src="<?php echo yuumi_img('arrow-external-white.svg'); ?>" alt="" width="17" height="17"
                            aria-hidden="true">
                    </a>
                </div>
                <div class="program-mission__img">
                    <img src="<?php echo yuumi_img('program-mission02.png'); ?>" alt="十和田湖地区域での保育業務の風景" loading="lazy">
                </div>
            </div>

            <!-- MISSION 03 -->
            <div class="program-mission">
                <div class="program-mission__img">
                    <img src="<?php echo yuumi_img('program-mission03.jpg'); ?>" alt="十和田湖ひめますの風景" loading="lazy">
                </div>
                <div class="program-mission__body">
                    <span class="program-mission__num">MISSION 03</span>
                    <h3 class="program-mission__title">十和田湖ひめます供給担い手</h3>
                    <p class="program-mission__text">
                        十和田市の産品「十和田湖ひめます」の供給やブランド推進に関わるミッションです。
                    </p>
                    <a href="https://www.city.towada.lg.jp/kanko/tokusan/2026-0403-1628-183.html" class="btn program-mission__btn" target="_blank" rel="noopener noreferrer">
                        応募ページ（市HP）
                        <img src="<?php echo yuumi_img('arrow-external-white.svg'); ?>" alt="" width="17" height="17"
                            aria-hidden="true">
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="program-cta fade-in">
        <div class="container text-center">
            <h2 class="program-cta__title">応募前のご相談も歓迎です</h2>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--pink program-cta__btn">
                <img src="<?php echo yuumi_img('icon-mail-white.svg'); ?>" alt="" width="20" height="16"
                    aria-hidden="true">
                お問い合わせ
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
<?php
/**
 * Template Name: おためし地域おこし協力隊
 */
get_header(); ?>

<main class="page-otameshi">

    <!-- Hero -->
    <section class="ota-hero fade-in">
        <div class="ota-hero__inner">
            <div class="ota-hero__body">
                <span class="ota-hero__label">PROGRAM</span>
                <h1 class="ota-hero__title">十和田市おためし<br class="br-sp">地域おこし協力隊</h1>
                <div class="ota-hero__desc">
                    <p>地域の暮らしや活動を体験してみませんか。</p>
                    <p>おためし地域おこし協力隊は、地域おこし協力隊に関心のある方が、短期間で地域の暮らしや課題に触れられるプログラムです。</p>
                    <p>地域での体験や交流を通して、自分に合う地域との関わり方を考えるきっかけをつくります。</p>
                </div>
                <div class="ota-hero__buttons">
                    <a href="#apply-form" class="ota-btn ota-btn--primary">
                        申込フォームへ
                        <img src="<?php echo yuumi_img('arrow-btn-white.svg'); ?>" alt="" width="17" height="17"
                            aria-hidden="true">
                    </a>
                    <a href="#" class="ota-btn ota-btn--outline" target="_blank" rel="noopener noreferrer">
                        資料を見る
                        <img src="<?php echo yuumi_img('otameshi/icon-pdf.svg'); ?>" alt="PDF" width="23" height="26">
                    </a>
                </div>
            </div>
            <div class="ota-hero__img">
                <img src="<?php echo yuumi_img('otameshi/hero-otameshi.png'); ?>" alt="おためし地域おこし協力隊">
            </div>
        </div>
    </section>
    <?php yuumi_breadcrumbs(); ?>

    <!-- 十和田市について -->
    <section class="ota-about fade-in">
        <div class="ota-about__inner">
            <div class="ota-about__img">
                <img src="<?php echo yuumi_img('otameshi/towada-lake.png'); ?>" alt="十和田湖" loading="lazy">
            </div>
            <div class="ota-about__body">
                <span class="ota-about__label">ABOUT</span>
                <h2 class="ota-about__title">十和田市ってどんなまち？</h2>
                <div class="ota-about__text">
                    <p>十和田市は青森県南部に位置し、約5万6千人が暮らすまちです。</p>
                    <p>四季折々の自然に恵まれ、市街地には商業施設や病院、学校など生活に必要な環境も整っています。</p>
                    <p>世界的にも知られる十和田市現代美術館や、特別名勝・天然記念物「十和田湖・奥入瀬渓流」など、多くの観光資源がある都会過ぎず、田舎過ぎない、ちょうどいいまちです。</p>
                </div>
                <div class="ota-about__stats">
                    <div class="ota-about__stat">
                        <span class="ota-about__stat-label">人口</span>
                        <span class="ota-about__stat-value">約5万6千人</span>
                    </div>
                    <div class="ota-about__stat">
                        <span class="ota-about__stat-label">面積</span>
                        <span class="ota-about__stat-value">725.65km²</span>
                    </div>
                    <div class="ota-about__stat">
                        <span class="ota-about__stat-label">アクセス</span>
                        <span class="ota-about__stat-value">七戸十和田駅から車で約25分</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 募集要項 -->
    <section class="ota-recruit fade-in">
        <div class="ota-recruit__inner">
            <div class="ota-recruit__item">
                <span class="ota-recruit__badge">受付期間</span>
                <div class="ota-recruit__content">
                    <p>2026年8月14日～2027年1月31日</p>
                    <p>2泊3日の行程で十和田市に滞在します。平日、休日など、ご希望の日時を事前に調整いたします</p>
                </div>
            </div>
            <div class="ota-recruit__item">
                <span class="ota-recruit__badge">定員</span>
                <div class="ota-recruit__content">
                    <p><strong>期間中5名(1名から参加できます。)</strong></p>
                </div>
            </div>
            <div class="ota-recruit__item">
                <span class="ota-recruit__badge">申込金</span>
                <div class="ota-recruit__content">
                    <p>なし（滞在中の宿泊費や諸経費など、こちらで負担いたします）</p>
                    <p>※ただし、十和田市に来るまでの交通費や、滞在中の食費などは自己負担となります。予め、ご了承ください。</p>
                </div>
            </div>
            <div class="ota-recruit__item">
                <span class="ota-recruit__badge">募集対象者</span>
                <div class="ota-recruit__content">
                    <p>❶<br>a）移住コンシェルジュ<br>
                        　 現在、三大都市圏または地方都市等（過疎、山村、離島、半島などの地域に該当しない市町村）に住民票の登録と生活拠点がある方<br></p>
                    <p> b）十和田湖地区での保育・十和田湖供給担い手<br>
                        　 現在、過疎、山村、離島、半島などの地域に該当しない市町村に住民票の登録と生活拠点がある方<br>
                        （条件に該当するか不明の方は、事前にお問い合わせください）
                    </p>
                    <p>❷ 現在、移住を検討されている方、または地域おこし協力隊の制度に興味がある方</p>
                    <p>❸ 全日程に参加でき、地域住民との交流や地域活動に積極的に参加できる方</p>
                </div>
            </div>
            <div class="ota-recruit__item">
                <span class="ota-recruit__badge">お申し込み方法</span>
                <div class="ota-recruit__content">
                    <p>このサイトのお申込みフォームから、詳細を入力して送信。</p>
                    <p>後日、コーディネーターから連絡先にご連絡します。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 選べる体験ミッション -->
    <section class="ota-themes fade-in">
        <div class="ota-themes__header">
            <span class="ota-themes__label">THEME</span>
            <h2 class="ota-themes__title">選べる体験ミッション</h2>
        </div>
        <div class="ota-themes__grid">
            <div class="ota-theme-card">
                <div class="ota-theme-card__head">
                    <span class="ota-theme-card__num">01</span>
                    <h3 class="ota-theme-card__title">移住コンシェルジュ</h3>
                </div>
                <div class="ota-theme-card__img">
                    <img src="<?php echo yuumi_img('otameshi/theme-01.png'); ?>" alt="移住コンシェルジュ">
                </div>
                <p class="ota-theme-card__desc">十和田市への移住・定住に関わる情報発信や、移住を考えている方へのサポートについて知ることができます。</p>
            </div>
            <div class="ota-theme-card">
                <div class="ota-theme-card__head">
                    <span class="ota-theme-card__num">02</span>
                    <h3 class="ota-theme-card__title">十和田湖地区での保育</h3>
                </div>
                <div class="ota-theme-card__img">
                    <img src="<?php echo yuumi_img('otameshi/theme-02.png'); ?>" alt="十和田湖地区での保育">
                </div>
                <p class="ota-theme-card__desc">十和田湖地区での暮らしや、地域に根ざした保育の現場について知ることができます。</p>
            </div>
            <div class="ota-theme-card">
                <div class="ota-theme-card__head">
                    <span class="ota-theme-card__num">03</span>
                    <h3 class="ota-theme-card__title">十和田湖ひめます供給担い手</h3>
                </div>
                <div class="ota-theme-card__img">
                    <img src="<?php echo yuumi_img('otameshi/theme-03.png'); ?>" alt="十和田湖ひめます供給担い手">
                </div>
                <p class="ota-theme-card__desc">十和田湖地区での暮らしや、十和田市の産品である「十和田湖ひめます」に関わる仕事について知ることができます。</p>
            </div>
            <div class="ota-theme-card">
                <div class="ota-theme-card__head">
                    <span class="ota-theme-card__num">？</span>
                    <h3 class="ota-theme-card__title">まだ決まっていない・<br>相談して決めたい</h3>
                </div>
                <div class="ota-theme-card__img">
                    <img src="<?php echo yuumi_img('otameshi/theme-04.png'); ?>" alt="相談して決めたい">
                </div>
                <p class="ota-theme-card__desc">どのテーマや活動が合うかわからない方も大丈夫です。相談しながら、一緒に考えていきましょう。</p>
            </div>
        </div>
    </section>

    <!-- 参加までの流れ -->
    <section class="ota-flow fade-in">
        <div class="ota-flow__header">
            <span class="ota-flow__label">FLOW</span>
            <h2 class="ota-flow__title">参加までの流れ</h2>
        </div>
        <div class="ota-flow__steps">
            <div class="ota-flow__arrow ota-flow__arrow--start">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
                    <path d="M0 10H13" stroke="#5EE4E4" stroke-width="20" />
                </svg>
            </div>
            <div class="ota-flow__step">
                <span class="ota-flow__step-num">STEP 1</span>
                <h3 class="ota-flow__step-title">申込フォーム送信</h3>
                <div class="ota-flow__step-img">
                    <img src="<?php echo yuumi_img('otameshi/flow-01.png'); ?>" alt="STEP 1">
                </div>
                <p class="ota-flow__step-text">気になる体験テーマを選んでフォーム送信</p>
            </div>
            <div class="ota-flow__arrow">
                <img src="<?php echo yuumi_img('otameshi/arrow-step-cyan.svg'); ?>" alt="" width="30" height="15"
                    aria-hidden="true">
            </div>
            <div class="ota-flow__step">
                <span class="ota-flow__step-num">STEP 2</span>
                <h3 class="ota-flow__step-title">オンライン面談</h3>
                <div class="ota-flow__step-img">
                    <img src="<?php echo yuumi_img('otameshi/flow-02.png'); ?>" alt="STEP 2">
                </div>
                <p class="ota-flow__step-text">Zoom等で面談後、希望に合わせて内容・日程を決定</p>
            </div>
            <div class="ota-flow__arrow">
                <img src="<?php echo yuumi_img('otameshi/arrow-step-cyan.svg'); ?>" alt="" width="30" height="15"
                    aria-hidden="true">
            </div>
            <div class="ota-flow__step">
                <span class="ota-flow__step-num">STEP 3</span>
                <h3 class="ota-flow__step-title">現地でおためし<br>地域おこし協力隊体験</h3>
                <div class="ota-flow__step-img">
                    <img src="<?php echo yuumi_img('otameshi/flow-03.png'); ?>" alt="STEP 3">
                </div>
                <p class="ota-flow__step-text">ミッションに沿って地域の暮らしや活動を体験</p>
            </div>
            <div class="ota-flow__arrow">
                <img src="<?php echo yuumi_img('otameshi/arrow-step-cyan.svg'); ?>" alt="" width="30" height="15"
                    aria-hidden="true">
            </div>
            <div class="ota-flow__step ota-flow__step--last">
                <span class="ota-flow__step-num ota-flow__step-num--light">STEP 4</span>
                <h3 class="ota-flow__step-title">ふりかえり</h3>
                <div class="ota-flow__step-img">
                    <img src="<?php echo yuumi_img('otameshi/flow-04.png'); ?>" alt="STEP 4">
                </div>
                <p class="ota-flow__step-text">アンケート回答後、今後についてご相談</p>
            </div>
            <div class="ota-flow__arrow ota-flow__arrow--end">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
                    <path d="M0 10H13" stroke="#5EE4E4" stroke-width="20" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="46" viewBox="0 0 13 46" fill="none">
                    <path d="M0 0L13 23L0 45.5V0Z" fill="#5EE4E4" />
                </svg>
            </div>
        </div>
    </section>

    <!-- コーディネーター紹介 -->
    <section class="ota-coordinator fade-in" id="coordinator">
        <div class="ota-coordinator__card">
            <h2 class="ota-coordinator__title">コーディネーター紹介</h2>
            <div class="ota-coordinator__content">
                <div class="ota-coordinator__photo">
                    <img src="<?php echo yuumi_img('otameshi/coordinator.jpg'); ?>" alt="渡邊ゆうみ" loading="lazy">
                </div>
                <p class="ota-coordinator__text">
                    地域おこし協力隊OGの渡邊ゆうみが、皆さまをご案内します。 一人ひとりの興味や希望を伺いながら、楽しく学びのある体験を一緒につくります。
                </p>
            </div>
        </div>
    </section>

    <!-- 申し込みフォーム -->
    <section class="ota-apply fade-in" id="apply-form">
        <div class="ota-apply__inner">
            <h2 class="ota-apply__title">ご相談・お申し込みフォーム</h2>
            <div class="ota-apply__top">
                <div class="ota-apply__mission">
                    <?php echo do_shortcode('[contact-form-7 id="4a7a4b9" title="programページお問い合わせ"]'); ?>
                </div>
                <div class="ota-apply__cta-card">
                    <p class="ota-apply__cta-title">フォーム入力は約3分！</p>
                    <p class="ota-apply__cta-text">ご相談だけでも大丈夫です。お気軽にどうぞ。</p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                        class="ota-btn ota-btn--primary ota-btn--full">
                        申し込みフォームへ進む
                        <svg width="6" height="12" viewBox="0 0 6 12" fill="none">
                            <path d="M1 1L5 6L1 11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <p class="ota-apply__footer-note">ご相談・ご質問などもお気軽にご連絡ください。地域のこと、活動のこと、一緒に考えましょう！</p>
        </div>
    </section>

    <!-- FAQ -->
    <section class="ota-faq fade-in">
        <div class="ota-faq__inner">
            <div class="ota-faq__header">
                <div>
                    <span class="ota-faq__label">FAQ</span>
                    <h2 class="ota-faq__title">よくある質問</h2>
                </div>
                <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="ota-faq__link">
                    すべての質問を見る
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <circle cx="13" cy="13" r="13" fill="#37d4d4" />
                        <path d="M11 9L15 13L11 17" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </a>
            </div>
            <div class="ota-faq__list">
                <div class="ota-faq-item is-open">
                    <div class="ota-faq-item__question ota-faq-item__question--open">
                        <div class="ota-faq-item__q-left">
                            <span class="ota-faq-item__q-label">Q</span>
                            <span class="ota-faq-item__q-text">費用はかかりますか？</span>
                        </div>
                        <span class="ota-faq-item__toggle">−</span>
                    </div>
                    <div class="ota-faq-item__answer" style="max-height:200px;">
                        <div class="ota-faq-item__a-inner">
                            <span class="ota-faq-item__a-label">A</span>
                            <p class="ota-faq-item__a-text">参加費・宿泊費は基本的にかかりません。<br class="u-hidden-sp">
                                現地までの交通費と、期間中の飲食費のみご自身でご負担いただきます。</p>
                        </div>
                    </div>
                </div>
                <div class="ota-faq-item">
                    <div class="ota-faq-item__question">
                        <div class="ota-faq-item__q-left">
                            <span class="ota-faq-item__q-label">Q</span>
                            <span class="ota-faq-item__q-text">何日から参加できますか？</span>
                        </div>
                        <span class="ota-faq-item__toggle">＋</span>
                    </div>
                    <div class="ota-faq-item__answer">
                        <div class="ota-faq-item__a-inner">
                            <span class="ota-faq-item__a-label">A</span>
                            <p class="ota-faq-item__a-text">2泊3日の日程で体験いただけます。日程はご相談のうえ調整いたします。</p>
                        </div>
                    </div>
                </div>
                <div class="ota-faq-item">
                    <div class="ota-faq-item__question">
                        <div class="ota-faq-item__q-left">
                            <span class="ota-faq-item__q-label">Q</span>
                            <span class="ota-faq-item__q-text">一人でも参加できますか？</span>
                        </div>
                        <span class="ota-faq-item__toggle">＋</span>
                    </div>
                    <div class="ota-faq-item__answer">
                        <div class="ota-faq-item__a-inner">
                            <span class="ota-faq-item__a-label">A</span>
                            <p class="ota-faq-item__a-text">はい、お一人でもご参加いただけます。お気軽にお申し込みください。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
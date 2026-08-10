<?php
/**
 * ゆうつむぎデザイン Theme Functions
 */

// --- Theme Setup ---
function yuumi_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('custom-logo');
    add_theme_support('editor-styles');

    set_post_thumbnail_size(800, 533, true);
    add_image_size('card-thumb', 400, 267, true);
    add_image_size('pickup-thumb', 600, 400, true);
    add_image_size('hero-img', 1200, 600, true);

    register_nav_menus([
        'primary' => 'メインメニュー',
        'footer_menu' => 'フッターメニュー',
        'footer_info' => 'フッター情報',
        'footer_sns'  => 'フッターSNS・お問い合わせ',
    ]);
}
add_action('after_setup_theme', 'yuumi_setup');

// --- Enqueue Assets ---
function yuumi_enqueue_assets() {
    // Google Fonts (async loaded via preload)
    $google_fonts_url = 'https://fonts.googleapis.com/css2?family=Aboreto&family=Outfit:wght@300;400;500;600;700&family=Zen+Kaku+Gothic+Antique:wght@400;500;700&family=Noto+Sans+JP:wght@300;400;500;700&display=swap';
    wp_enqueue_style('google-fonts', $google_fonts_url, [], null);
    add_filter('style_loader_tag', function($tag, $handle) {
        if ($handle === 'google-fonts') {
            $tag = str_replace(" media='all'", " media='print' onload=\"this.media='all'\"", $tag);
        }
        return $tag;
    }, 10, 2);

    wp_enqueue_style('yuumi-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));
    wp_enqueue_style('yuumi-main', get_template_directory_uri() . '/assets/css/main.css', ['yuumi-style'], filemtime(get_template_directory() . '/assets/css/main.css'));
    wp_enqueue_script('yuumi-main', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);
}
add_action('wp_enqueue_scripts', 'yuumi_enqueue_assets');

// Google Fonts preconnect hints
function yuumi_preconnect_google_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action('wp_head', 'yuumi_preconnect_google_fonts', 1);

// --- Rename "投稿" to "Blog・お知らせ" ---
function yuumi_change_post_labels() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name               = 'Blog・お知らせ';
    $labels->singular_name      = 'Blog・お知らせ';
    $labels->add_new            = '新規追加';
    $labels->add_new_item       = 'Blog・お知らせを追加';
    $labels->edit_item          = 'Blog・お知らせを編集';
    $labels->new_item           = '新しいBlog・お知らせ';
    $labels->view_item          = 'Blog・お知らせを表示';
    $labels->search_items       = 'Blog・お知らせを検索';
    $labels->not_found          = 'Blog・お知らせが見つかりません';
    $labels->not_found_in_trash = 'ゴミ箱にBlog・お知らせはありません';
    $labels->all_items          = 'すべてのBlog・お知らせ';
    $labels->menu_name          = 'Blog・お知らせ';
    $labels->name_admin_bar     = 'Blog・お知らせ';
}
add_action('init', 'yuumi_change_post_labels');

// --- Custom Post Type: Works (活動実績) ---
function yuumi_register_post_types() {
    register_post_type('works', [
        'labels' => [
            'name' => '活動実績',
            'singular_name' => '活動実績',
            'add_new' => '新規追加',
            'add_new_item' => '活動実績を追加',
            'edit_item' => '活動実績を編集',
            'all_items' => 'すべての活動実績',
            'search_items' => '活動実績を検索',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'works'],
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-portfolio',
    ]);
}
add_action('init', 'yuumi_register_post_types');

// works CPT はカスタムフィールド用にクラシックエディタを使用
add_filter('use_block_editor_for_post_type', function($use, $post_type) {
    if ($post_type === 'works') return false;
    return $use;
}, 10, 2);

// --- Custom Taxonomies ---
function yuumi_register_taxonomies() {
    // Works category
    register_taxonomy('works_category', 'works', [
        'labels' => [
            'name' => '実績カテゴリー',
            'singular_name' => '実績カテゴリー',
            'add_new_item' => 'カテゴリーを追加',
        ],
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'works-category'],
    ]);

}
add_action('init', 'yuumi_register_taxonomies');

// --- Widgets ---
function yuumi_widgets_init() {
    register_sidebar([
        'name' => 'ブログサイドバー',
        'id' => 'blog-sidebar',
        'before_widget' => '<div class="sidebar__section %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sidebar__title">',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'yuumi_widgets_init');

// --- Excerpt length ---
function yuumi_excerpt_length($length) {
    return 60;
}
add_filter('excerpt_length', 'yuumi_excerpt_length');

function yuumi_excerpt_more($more) {
    return '…';
}
add_filter('excerpt_more', 'yuumi_excerpt_more');

// --- Helper: Get theme image URL ---
function yuumi_img($filename) {
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

// --- Helper: Category badge color ---
function yuumi_cat_color($cat_slug) {
    $decoded = urldecode($cat_slug);
    $colors = [
        'design'    => 'pink',
        'program'   => 'green',
        'student'   => 'blue',
        'event'     => 'yellow',
        'blog'      => 'gray',
        'news'      => 'gray',
        'otameshi'  => 'green',
        // Japanese slugs
        'デザイン制作'         => 'pink',
        '地域おこし協力隊関係' => 'green',
        '高校生・学生関係'     => 'blue',
        'イベントサポート'     => 'yellow',
    ];
    return $colors[$decoded] ?? $colors[$cat_slug] ?? 'gray';
}

// --- Pagination ---
function yuumi_pagination() {
    global $wp_query;
    $total = $wp_query->max_num_pages;
    if ($total <= 1) return;

    $current = max(1, get_query_var('paged'));

    echo '<nav class="pagination">';
    echo paginate_links([
        'total'     => $total,
        'current'   => $current,
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
        'type'      => 'plain',
    ]);
    echo '</nav>';
}

// --- OGP & Twitter Card Meta Tags ---
function yuumi_ogp_meta() {
    $site_name = get_bloginfo('name');
    $logo_url  = yuumi_img('logo.png');

    if (is_front_page() || is_home()) {
        $title = $site_name;
        $desc  = get_bloginfo('description');
        $url   = home_url('/');
        $img   = yuumi_img('ogp-default.png');
        $type  = 'website';
    } elseif (is_singular()) {
        $title = get_the_title() . ' | ' . $site_name;
        $desc  = has_excerpt() ? wp_strip_all_tags(get_the_excerpt()) : wp_trim_words(wp_strip_all_tags(get_the_content()), 80, '…');
        $url   = get_permalink();
        $img   = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : yuumi_img('ogp-default.png');
        $type  = 'article';
    } else {
        $title = wp_get_document_title();
        $desc  = get_bloginfo('description');
        $url   = home_url($_SERVER['REQUEST_URI']);
        $img   = yuumi_img('ogp-default.png');
        $type  = 'website';
    }

    $desc = mb_substr($desc, 0, 120);

    echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($desc) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($img) . '">' . "\n";
    echo '<meta property="og:type" content="' . esc_attr($type) . '">' . "\n";
    echo '<meta property="og:locale" content="ja_JP">' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($desc) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($img) . '">' . "\n";

    // If no SEO plugin: meta description, canonical, robots
    if (!defined('WPSEO_VERSION') && !class_exists('RankMath')) {
        echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
        echo '<link rel="canonical" href="' . esc_url($url) . '">' . "\n";
        echo '<meta name="robots" content="index, follow">' . "\n";
    }
}
add_action('wp_head', 'yuumi_ogp_meta', 5);

// --- Structured Data (JSON-LD) ---
function yuumi_structured_data() {
    $schema = [];

    // Organization schema (all pages)
    $schema[] = [
        '@context'  => 'https://schema.org',
        '@type'     => 'LocalBusiness',
        'name'      => 'ゆうつむぎデザイン',
        'description' => '地域に関わる人の想いをやさしくつむぎ、デザインする。',
        'url'       => home_url('/'),
        'logo'      => yuumi_img('logo.png'),
        'email'     => 'yuutumugi.design@gmail.com',
        'founder'   => [
            '@type' => 'Person',
            'name'  => '渡邊ゆうみ',
        ],
        'foundingDate' => '2026-02-20',
        'address'   => [
            '@type'           => 'PostalAddress',
            'addressLocality' => '十和田市',
            'addressRegion'   => '青森県',
            'addressCountry'  => 'JP',
        ],
        'sameAs' => [
            'https://www.instagram.com/youme0141/',
        ],
    ];

    // BreadcrumbList schema
    if (!is_front_page()) {
        $breadcrumb_items = [];
        $position = 1;
        $breadcrumb_items[] = [
            '@type'    => 'ListItem',
            'position' => $position++,
            'name'     => 'TOP',
            'item'     => home_url('/'),
        ];

        if (is_page()) {
            $breadcrumb_items[] = [
                '@type'    => 'ListItem',
                'position' => $position++,
                'name'     => get_the_title(),
                'item'     => get_permalink(),
            ];
        } elseif (is_single()) {
            $post_type = get_post_type();
            if ($post_type === 'works') {
                $breadcrumb_items[] = [
                    '@type'    => 'ListItem',
                    'position' => $position++,
                    'name'     => '活動実績',
                    'item'     => home_url('/works/'),
                ];
            }
            $breadcrumb_items[] = [
                '@type'    => 'ListItem',
                'position' => $position++,
                'name'     => get_the_title(),
                'item'     => get_permalink(),
            ];
        } elseif (is_archive()) {
            $breadcrumb_items[] = [
                '@type'    => 'ListItem',
                'position' => $position++,
                'name'     => get_the_archive_title(),
            ];
        }

        $schema[] = [
            '@context'        => 'https://schema.org',
            '@type'           => 'BreadcrumbList',
            'itemListElement' => $breadcrumb_items,
        ];
    }

    // Article schema for single posts
    if (is_singular(['post', 'works'])) {
        $article = [
            '@context'      => 'https://schema.org',
            '@type'         => 'Article',
            'headline'      => get_the_title(),
            'datePublished' => get_the_date('c'),
            'dateModified'  => get_the_modified_date('c'),
            'author'        => [
                '@type' => 'Organization',
                'name'  => 'ゆうつむぎデザイン',
            ],
            'publisher'     => [
                '@type' => 'Organization',
                'name'  => 'ゆうつむぎデザイン',
                'logo'  => [
                    '@type' => 'ImageObject',
                    'url'   => yuumi_img('logo.png'),
                ],
            ],
        ];
        if (has_post_thumbnail()) {
            $article['image'] = get_the_post_thumbnail_url(get_the_ID(), 'large');
        }
        $schema[] = $article;
    }

    // FAQPage schema (FAQ page)
    if (is_page('faq')) {
        $faq_items = [];
        $faq_query = new WP_Query([
            'post_type'      => 'faq',
            'posts_per_page' => -1,
        ]);
        if ($faq_query->have_posts()) {
            while ($faq_query->have_posts()) {
                $faq_query->the_post();
                $faq_items[] = [
                    '@type'          => 'Question',
                    'name'           => get_the_title(),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => wp_strip_all_tags(get_the_content()),
                    ],
                ];
            }
            wp_reset_postdata();
        }
        if ($faq_items) {
            $schema[] = [
                '@context'   => 'https://schema.org',
                '@type'      => 'FAQPage',
                'mainEntity' => $faq_items,
            ];
        }
    }

    foreach ($schema as $item) {
        echo '<script type="application/ld+json">' . wp_json_encode($item, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}
add_action('wp_head', 'yuumi_structured_data', 6);

// --- Breadcrumbs (無効化) ---
function yuumi_breadcrumbs() {
    return;
}

// --- Contact Form 7 Helper ---
function yuumi_get_cf7_form_id() {
    if (!class_exists('WPCF7')) return false;
    $forms = get_posts([
        'post_type'      => 'wpcf7_contact_form',
        'posts_per_page' => 1,
        'orderby'        => 'ID',
        'order'          => 'ASC',
    ]);
    return $forms ? $forms[0]->ID : false;
}

// Disable CF7 auto <p> and <br> insertion
add_filter('wpcf7_autop_or_not', '__return_false');

// Replace privacy policy placeholder link in CF7 forms
function yuumi_cf7_privacy_link($content) {
    $url = get_privacy_policy_url();
    if ($url) {
        $content = str_replace(
            'href="#" class="form-checkbox__link"',
            'href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer" class="form-checkbox__link"',
            $content
        );
    }
    return $content;
}
add_filter('wpcf7_form_elements', 'yuumi_cf7_privacy_link');

// --- Auto-create CF7 form & Privacy Policy page on theme setup ---
function yuumi_setup_contact_form() {
    // Skip if CF7 not active
    if (!class_exists('WPCF7_ContactForm')) return;

    // Skip if already created
    if (get_option('yuumi_cf7_created')) return;

    // Check if a form already exists
    $existing = get_posts([
        'post_type'      => 'wpcf7_contact_form',
        'posts_per_page' => 1,
    ]);
    if ($existing) {
        update_option('yuumi_cf7_created', true);
        return;
    }

    // CF7 form template
    $form = '<div class="form-group">
<label class="form-label">お名前 <span class="form-label__required">必須</span></label>
[text* your-name class:form-input placeholder "例：佐藤花子"]
</div>

<div class="form-group">
<label class="form-label">メールアドレス <span class="form-label__required">必須</span></label>
[email* your-email class:form-input placeholder "例：info@example.com"]
</div>

<div class="form-group">
<label class="form-label">電話番号 <span class="form-label__optional">任意</span></label>
[tel your-tel class:form-input placeholder "例：0176-00-0000"]
</div>

<div class="form-group">
<label class="form-label">お問い合わせ種別 <span class="form-label__required">必須</span></label>
[select* your-category class:form-select include_blank "選択してください（おためし地域おこし協力隊／デザイン制作／イベント／その他）" "おためし地域おこし協力隊" "デザイン制作" "イベントサポート" "高校生・学生向けサポート" "その他"]
</div>

<div class="form-group">
<label class="form-label">お問い合わせ内容 <span class="form-label__required">必須</span></label>
[textarea* your-message class:form-textarea placeholder "お問い合わせ内容をご記入ください"]
</div>

<div class="form-checkbox-wrap">
[acceptance your-consent] <span class="form-checkbox__text"><a href="#" class="form-checkbox__link">個人情報の取り扱い</a>について同意します</span>
</div>

[submit class:form-submit "送信する"]';

    // Mail settings
    $mail = [
        'active'             => true,
        'subject'            => '[ゆうつむぎデザイン] [your-category] のお問い合わせ',
        'sender'             => 'ゆうつむぎデザイン <wordpress@' . preg_replace('/^www\./', '', $_SERVER['SERVER_NAME'] ?? 'localhost') . '>',
        'recipient'          => 'yuutumugi.design@gmail.com',
        'body'               => "お名前: [your-name]\nメールアドレス: [your-email]\n電話番号: [your-tel]\nお問い合わせ種別: [your-category]\n\nお問い合わせ内容:\n[your-message]\n\n---\nこのメールはゆうつむぎデザインのWebサイトから送信されました。",
        'additional_headers' => "Reply-To: [your-email]",
        'attachments'        => '',
        'use_html'           => false,
        'exclude_blank'      => false,
    ];

    // Auto-reply mail
    $mail_2 = [
        'active'             => true,
        'subject'            => '【ゆうつむぎデザイン】お問い合わせありがとうございます',
        'sender'             => 'ゆうつむぎデザイン <wordpress@' . preg_replace('/^www\./', '', $_SERVER['SERVER_NAME'] ?? 'localhost') . '>',
        'recipient'          => '[your-email]',
        'body'               => "[your-name] 様\n\nお問い合わせいただきありがとうございます。\n以下の内容で承りました。\n\n━━━━━━━━━━━━━━━━━━\nお名前: [your-name]\nメールアドレス: [your-email]\n電話番号: [your-tel]\nお問い合わせ種別: [your-category]\n\nお問い合わせ内容:\n[your-message]\n━━━━━━━━━━━━━━━━━━\n\n内容を確認のうえ、2〜3営業日以内にご連絡いたします。\nしばらくお待ちくださいませ。\n\n--\nゆうつむぎデザイン\n渡邊ゆうみ\nyuutumugi.design@gmail.com",
        'additional_headers' => '',
        'attachments'        => '',
        'use_html'           => false,
        'exclude_blank'      => false,
    ];

    $messages = [
        'mail_sent_ok'             => 'お問い合わせありがとうございます。メッセージは送信されました。',
        'mail_sent_ng'             => 'メッセージの送信に失敗しました。しばらくしてからもう一度お試しください。',
        'validation_error'         => '入力内容に問題があります。確認して再度送信してください。',
        'spam'                     => 'メッセージの送信に失敗しました。',
        'accept_terms'             => '個人情報の取り扱いへの同意が必要です。',
        'invalid_required'         => '必須項目に入力してください。',
        'invalid_too_long'         => '入力されたテキストが長すぎます。',
        'invalid_too_short'        => '入力されたテキストが短すぎます。',
        'invalid_email'            => '正しいメールアドレスを入力してください。',
        'invalid_tel'              => '正しい電話番号を入力してください。',
    ];

    // Create the CF7 post
    $post_id = wp_insert_post([
        'post_type'   => 'wpcf7_contact_form',
        'post_title'  => 'お問い合わせフォーム',
        'post_status' => 'publish',
    ]);

    if ($post_id && !is_wp_error($post_id)) {
        update_post_meta($post_id, '_form', $form);
        update_post_meta($post_id, '_mail', $mail);
        update_post_meta($post_id, '_mail_2', $mail_2);
        update_post_meta($post_id, '_messages', $messages);
        update_post_meta($post_id, '_additional_settings', '');
        update_post_meta($post_id, '_locale', 'ja');
        update_option('yuumi_cf7_created', true);
    }
}
add_action('init', 'yuumi_setup_contact_form');

// --- Works Custom Fields Meta Box ---
function yuumi_works_meta_boxes() {
    add_meta_box(
        'yuumi_works_fields',
        '活動実績の詳細情報',
        'yuumi_works_meta_callback',
        'works',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'yuumi_works_meta_boxes');

function yuumi_works_meta_callback($post) {
    wp_nonce_field('yuumi_works_save', 'yuumi_works_nonce');

    $intro = get_post_meta($post->ID, 'works_intro', true);
    $data  = get_post_meta($post->ID, 'works_data', true);
    $quote = get_post_meta($post->ID, 'works_quote', true);
    $tags  = get_post_meta($post->ID, 'works_tags', true);

    $data_items = $data ? json_decode($data, true) : [];
    if (!is_array($data_items)) $data_items = [];

    $sections_json = get_post_meta($post->ID, 'works_sections', true);
    $sections = $sections_json ? json_decode($sections_json, true) : [];
    if (!is_array($sections)) $sections = [];
    ?>
    <style>
        .yuumi-meta-field { margin-bottom: 20px; }
        .yuumi-meta-field label { display: block; font-weight: 600; margin-bottom: 6px; font-size: 14px; }
        .yuumi-meta-field textarea,
        .yuumi-meta-field input[type="text"] { width: 100%; }
        .yuumi-meta-field textarea { min-height: 80px; }
        .yuumi-meta-field .description { color: #666; font-size: 13px; margin-top: 4px; }
        .yuumi-data-row { display: flex; gap: 10px; margin-bottom: 8px; align-items: center; }
        .yuumi-data-row input { flex: 1; }
        .yuumi-data-row .button { flex-shrink: 0; }
        #yuumi-data-rows { margin-bottom: 10px; }
        .yuumi-section-block { border: 1px solid #ddd; border-radius: 8px; padding: 16px; margin-bottom: 12px; background: #fafafa; }
        .yuumi-section-block .yuumi-meta-field { margin-bottom: 12px; }
        .yuumi-section-block .yuumi-meta-field:last-of-type { margin-bottom: 0; }
        .yuumi-section-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; }
        .yuumi-section-header strong { font-size: 14px; color: #333; }
        .yuumi-img-preview { margin-top: 8px; }
        .yuumi-img-preview img { max-width: 200px; height: auto; border-radius: 8px; border: 1px solid #ddd; }
    </style>

    <div class="yuumi-meta-field">
        <label for="works_intro">イントロ文</label>
        <textarea id="works_intro" name="works_intro" rows="3"><?php echo esc_textarea($intro); ?></textarea>
        <p class="description">記事冒頭に表示するリード文です。</p>
    </div>

    <div class="yuumi-meta-field">
        <label for="works_tags">タグ（カンマ区切り）</label>
        <input type="text" id="works_tags" name="works_tags" value="<?php echo esc_attr($tags); ?>">
        <p class="description">例: デザイン,イベント,地域おこし（#は自動付与されます）</p>
    </div>

    <div class="yuumi-meta-field">
        <label>コンテンツセクション（見出し・画像・説明文）</label>
        <p class="description" style="margin-bottom: 10px;">本文エディタの代わりに、構造化されたセクションを追加できます。各セクションには「見出し（左ピンクボーダー付き）」「画像（角丸14px）」「説明文」を入力できます。すべて任意項目なので、必要なものだけ入力してください。</p>
        <div id="yuumi-section-rows">
            <?php foreach ($sections as $i => $sec) : ?>
            <div class="yuumi-section-block">
                <div class="yuumi-section-header">
                    <strong>セクション <?php echo $i + 1; ?></strong>
                    <button type="button" class="button yuumi-remove-section">削除</button>
                </div>
                <div class="yuumi-meta-field">
                    <label>見出し（左ピンクボーダー付きh2）</label>
                    <input type="text" name="works_section_title[]" value="<?php echo esc_attr($sec['title'] ?? ''); ?>" placeholder="例: イベント概要">
                </div>
                <div class="yuumi-meta-field">
                    <label>画像</label>
                    <input type="hidden" name="works_section_image[]" value="<?php echo esc_attr($sec['image'] ?? ''); ?>" class="yuumi-img-id">
                    <button type="button" class="button yuumi-select-image">画像を選択</button>
                    <button type="button" class="button yuumi-remove-image" style="<?php echo empty($sec['image']) ? 'display:none;' : ''; ?>">画像を削除</button>
                    <div class="yuumi-img-preview">
                        <?php if (!empty($sec['image'])) : ?>
                            <?php echo wp_get_attachment_image($sec['image'], 'medium'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="yuumi-meta-field">
                    <label>説明文</label>
                    <textarea name="works_section_desc[]" rows="3" placeholder="このセクションの本文を入力"><?php echo esc_textarea($sec['desc'] ?? ''); ?></textarea>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <button type="button" class="button button-primary" id="yuumi-add-section">＋ セクションを追加</button>
    </div>

    <hr style="margin: 24px 0;">

    <div class="yuumi-meta-field">
        <label>データ項目（来場者数・出店数 等）</label>
        <div id="yuumi-data-rows">
            <?php if (!empty($data_items)) : ?>
                <?php foreach ($data_items as $item) : ?>
                <div class="yuumi-data-row">
                    <input type="text" name="works_data_label[]" value="<?php echo esc_attr($item['label'] ?? ''); ?>" placeholder="ラベル（例: 来場者数）">
                    <input type="text" name="works_data_value[]" value="<?php echo esc_attr($item['value'] ?? ''); ?>" placeholder="値（例: 500名）">
                    <button type="button" class="button yuumi-remove-row">削除</button>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button" id="yuumi-add-data-row">＋ 行を追加</button>
    </div>

    <div class="yuumi-meta-field">
        <label for="works_quote">まとめ引用</label>
        <textarea id="works_quote" name="works_quote" rows="3"><?php echo esc_textarea($quote); ?></textarea>
        <p class="description">本文末尾にblockquoteとして表示されるまとめ文です。</p>
    </div>

    <script>
    (function() {
        /* --- Data rows --- */
        var dataContainer = document.getElementById('yuumi-data-rows');
        document.getElementById('yuumi-add-data-row').addEventListener('click', function() {
            var row = document.createElement('div');
            row.className = 'yuumi-data-row';
            row.innerHTML = '<input type="text" name="works_data_label[]" placeholder="ラベル（例: 来場者数）">' +
                '<input type="text" name="works_data_value[]" placeholder="値（例: 500名）">' +
                '<button type="button" class="button yuumi-remove-row">削除</button>';
            dataContainer.appendChild(row);
        });
        dataContainer.addEventListener('click', function(e) {
            if (e.target.classList.contains('yuumi-remove-row')) {
                e.target.closest('.yuumi-data-row').remove();
            }
        });

        /* --- Content sections --- */
        var secContainer = document.getElementById('yuumi-section-rows');

        function sectionTemplate() {
            var count = secContainer.querySelectorAll('.yuumi-section-block').length + 1;
            return '<div class="yuumi-section-block">' +
                '<div class="yuumi-section-header"><strong>セクション ' + count + '</strong>' +
                '<button type="button" class="button yuumi-remove-section">削除</button></div>' +
                '<div class="yuumi-meta-field"><label>見出し（左ピンクボーダー付きh2）</label>' +
                '<input type="text" name="works_section_title[]" placeholder="例: イベント概要"></div>' +
                '<div class="yuumi-meta-field"><label>画像</label>' +
                '<input type="hidden" name="works_section_image[]" value="" class="yuumi-img-id">' +
                '<button type="button" class="button yuumi-select-image">画像を選択</button>' +
                '<button type="button" class="button yuumi-remove-image" style="display:none;">画像を削除</button>' +
                '<div class="yuumi-img-preview"></div></div>' +
                '<div class="yuumi-meta-field"><label>説明文</label>' +
                '<textarea name="works_section_desc[]" rows="3" placeholder="このセクションの本文を入力"></textarea></div>' +
                '</div>';
        }

        document.getElementById('yuumi-add-section').addEventListener('click', function() {
            secContainer.insertAdjacentHTML('beforeend', sectionTemplate());
        });

        secContainer.addEventListener('click', function(e) {
            if (e.target.classList.contains('yuumi-remove-section')) {
                e.target.closest('.yuumi-section-block').remove();
                /* Renumber */
                secContainer.querySelectorAll('.yuumi-section-header strong').forEach(function(el, i) {
                    el.textContent = 'セクション ' + (i + 1);
                });
            }
            if (e.target.classList.contains('yuumi-select-image')) {
                var block = e.target.closest('.yuumi-section-block');
                var frame = wp.media({ title: '画像を選択', multiple: false, library: { type: 'image' } });
                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    block.querySelector('.yuumi-img-id').value = attachment.id;
                    var url = attachment.sizes && attachment.sizes.medium ? attachment.sizes.medium.url : attachment.url;
                    block.querySelector('.yuumi-img-preview').innerHTML = '<img src="' + url + '">';
                    block.querySelector('.yuumi-remove-image').style.display = '';
                });
                frame.open();
            }
            if (e.target.classList.contains('yuumi-remove-image')) {
                var block = e.target.closest('.yuumi-section-block');
                block.querySelector('.yuumi-img-id').value = '';
                block.querySelector('.yuumi-img-preview').innerHTML = '';
                e.target.style.display = 'none';
            }
        });
    })();
    </script>
    <?php
}

function yuumi_works_save_meta($post_id) {
    if (!isset($_POST['yuumi_works_nonce']) || !wp_verify_nonce($_POST['yuumi_works_nonce'], 'yuumi_works_save')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (get_post_type($post_id) !== 'works') return;

    if (isset($_POST['works_intro'])) {
        update_post_meta($post_id, 'works_intro', sanitize_textarea_field($_POST['works_intro']));
    }
    if (isset($_POST['works_tags'])) {
        update_post_meta($post_id, 'works_tags', sanitize_text_field($_POST['works_tags']));
    }
    if (isset($_POST['works_quote'])) {
        update_post_meta($post_id, 'works_quote', sanitize_textarea_field($_POST['works_quote']));
    }

    // Data items (repeater as JSON)
    $labels = isset($_POST['works_data_label']) ? array_map('sanitize_text_field', $_POST['works_data_label']) : [];
    $values = isset($_POST['works_data_value']) ? array_map('sanitize_text_field', $_POST['works_data_value']) : [];
    $data_items = [];
    for ($i = 0; $i < count($labels); $i++) {
        if (!empty($labels[$i]) || !empty($values[$i])) {
            $data_items[] = [
                'label' => $labels[$i],
                'value' => $values[$i],
            ];
        }
    }
    update_post_meta($post_id, 'works_data', wp_json_encode($data_items, JSON_UNESCAPED_UNICODE));

    // Content sections (repeater as JSON)
    $sec_titles = isset($_POST['works_section_title']) ? array_map('sanitize_text_field', $_POST['works_section_title']) : [];
    $sec_images = isset($_POST['works_section_image']) ? array_map('absint', $_POST['works_section_image']) : [];
    $sec_descs  = isset($_POST['works_section_desc']) ? array_map('sanitize_textarea_field', $_POST['works_section_desc']) : [];
    $sections = [];
    for ($i = 0; $i < count($sec_titles); $i++) {
        if (!empty($sec_titles[$i]) || !empty($sec_images[$i]) || !empty($sec_descs[$i])) {
            $sections[] = [
                'title' => $sec_titles[$i] ?? '',
                'image' => $sec_images[$i] ?? 0,
                'desc'  => $sec_descs[$i] ?? '',
            ];
        }
    }
    update_post_meta($post_id, 'works_sections', wp_json_encode($sections, JSON_UNESCAPED_UNICODE));
}
add_action('save_post', 'yuumi_works_save_meta');

// --- Post Custom Fields Meta Box ---
function yuumi_post_meta_boxes() {
    add_meta_box(
        'yuumi_post_fields',
        '記事の詳細情報',
        'yuumi_post_meta_callback',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'yuumi_post_meta_boxes');

function yuumi_post_meta_callback($post) {
    wp_nonce_field('yuumi_post_save', 'yuumi_post_nonce');

    $intro = get_post_meta($post->ID, 'post_intro', true);
    $quote = get_post_meta($post->ID, 'post_quote', true);
    $tags  = get_post_meta($post->ID, 'post_custom_tags', true);
    $sections_json = get_post_meta($post->ID, 'post_sections', true);
    $sections = $sections_json ? json_decode($sections_json, true) : [];
    if (!is_array($sections)) $sections = [];
    ?>
    <style>
        .yuumi-post-field { margin-bottom: 20px; }
        .yuumi-post-field label { display: block; font-weight: 600; margin-bottom: 6px; font-size: 14px; }
        .yuumi-post-field textarea,
        .yuumi-post-field input[type="text"] { width: 100%; }
        .yuumi-post-field textarea { min-height: 80px; }
        .yuumi-post-field .description { color: #666; font-size: 13px; margin-top: 4px; }
        .yuumi-post-section { border: 1px solid #ddd; border-radius: 8px; padding: 16px; margin-bottom: 12px; background: #fafafa; }
        .yuumi-post-section .yuumi-post-field { margin-bottom: 12px; }
        .yuumi-post-section .yuumi-post-field:last-of-type { margin-bottom: 0; }
        .yuumi-post-sec-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; }
        .yuumi-post-sec-header strong { font-size: 14px; color: #333; }
        .yuumi-post-img-preview { margin-top: 8px; }
        .yuumi-post-img-preview img { max-width: 200px; height: auto; border-radius: 8px; border: 1px solid #ddd; }
    </style>

    <div class="yuumi-post-field">
        <label for="post_intro">イントロ文</label>
        <textarea id="post_intro" name="post_intro" rows="3"><?php echo esc_textarea($intro); ?></textarea>
        <p class="description">記事冒頭に表示するリード文です。</p>
    </div>

    <div class="yuumi-post-field">
        <label for="post_custom_tags">タグ（カンマ区切り）</label>
        <input type="text" id="post_custom_tags" name="post_custom_tags" value="<?php echo esc_attr($tags); ?>">
        <p class="description">例: お知らせ,ゆうつむぎデザイン,十和田（#は自動付与されます）</p>
    </div>

    <div class="yuumi-post-field">
        <label>コンテンツセクション（見出し・画像・説明文）</label>
        <p class="description" style="margin-bottom: 10px;">本文エディタの代わりに、構造化されたセクションを追加できます。各セクションには「見出し（左ピンクボーダー付き）」「画像（角丸14px）」「説明文」を入力できます。</p>
        <div id="yuumi-post-section-rows">
            <?php foreach ($sections as $i => $sec) : ?>
            <div class="yuumi-post-section">
                <div class="yuumi-post-sec-header">
                    <strong>セクション <?php echo $i + 1; ?></strong>
                    <button type="button" class="button yuumi-post-remove-sec">削除</button>
                </div>
                <div class="yuumi-post-field">
                    <label>見出し（左ピンクボーダー付きh2）</label>
                    <input type="text" name="post_section_title[]" value="<?php echo esc_attr($sec['title'] ?? ''); ?>" placeholder="例: サイトについて">
                </div>
                <div class="yuumi-post-field">
                    <label>画像</label>
                    <input type="hidden" name="post_section_image[]" value="<?php echo esc_attr($sec['image'] ?? ''); ?>" class="yuumi-post-img-id">
                    <button type="button" class="button yuumi-post-select-img">画像を選択</button>
                    <button type="button" class="button yuumi-post-remove-img" style="<?php echo empty($sec['image']) ? 'display:none;' : ''; ?>">画像を削除</button>
                    <div class="yuumi-post-img-preview">
                        <?php if (!empty($sec['image'])) : ?>
                            <?php echo wp_get_attachment_image($sec['image'], 'medium'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="yuumi-post-field">
                    <label>説明文</label>
                    <textarea name="post_section_desc[]" rows="3" placeholder="このセクションの本文を入力"><?php echo esc_textarea($sec['desc'] ?? ''); ?></textarea>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <button type="button" class="button button-primary" id="yuumi-post-add-sec">＋ セクションを追加</button>
    </div>

    <hr style="margin: 24px 0;">

    <div class="yuumi-post-field">
        <label for="post_quote">まとめ引用</label>
        <textarea id="post_quote" name="post_quote" rows="3"><?php echo esc_textarea($quote); ?></textarea>
        <p class="description">本文末尾にblockquoteとして表示されるまとめ文です。</p>
    </div>

    <script>
    (function() {
        var secContainer = document.getElementById('yuumi-post-section-rows');

        function postSectionTemplate() {
            var count = secContainer.querySelectorAll('.yuumi-post-section').length + 1;
            return '<div class="yuumi-post-section">' +
                '<div class="yuumi-post-sec-header"><strong>セクション ' + count + '</strong>' +
                '<button type="button" class="button yuumi-post-remove-sec">削除</button></div>' +
                '<div class="yuumi-post-field"><label>見出し（左ピンクボーダー付きh2）</label>' +
                '<input type="text" name="post_section_title[]" placeholder="例: サイトについて"></div>' +
                '<div class="yuumi-post-field"><label>画像</label>' +
                '<input type="hidden" name="post_section_image[]" value="" class="yuumi-post-img-id">' +
                '<button type="button" class="button yuumi-post-select-img">画像を選択</button>' +
                '<button type="button" class="button yuumi-post-remove-img" style="display:none;">画像を削除</button>' +
                '<div class="yuumi-post-img-preview"></div></div>' +
                '<div class="yuumi-post-field"><label>説明文</label>' +
                '<textarea name="post_section_desc[]" rows="3" placeholder="このセクションの本文を入力"></textarea></div>' +
                '</div>';
        }

        document.getElementById('yuumi-post-add-sec').addEventListener('click', function() {
            secContainer.insertAdjacentHTML('beforeend', postSectionTemplate());
        });

        secContainer.addEventListener('click', function(e) {
            if (e.target.classList.contains('yuumi-post-remove-sec')) {
                e.target.closest('.yuumi-post-section').remove();
                secContainer.querySelectorAll('.yuumi-post-sec-header strong').forEach(function(el, i) {
                    el.textContent = 'セクション ' + (i + 1);
                });
            }
            if (e.target.classList.contains('yuumi-post-select-img')) {
                var block = e.target.closest('.yuumi-post-section');
                var frame = wp.media({ title: '画像を選択', multiple: false, library: { type: 'image' } });
                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    block.querySelector('.yuumi-post-img-id').value = attachment.id;
                    var url = attachment.sizes && attachment.sizes.medium ? attachment.sizes.medium.url : attachment.url;
                    block.querySelector('.yuumi-post-img-preview').innerHTML = '<img src="' + url + '">';
                    block.querySelector('.yuumi-post-remove-img').style.display = '';
                });
                frame.open();
            }
            if (e.target.classList.contains('yuumi-post-remove-img')) {
                var block = e.target.closest('.yuumi-post-section');
                block.querySelector('.yuumi-post-img-id').value = '';
                block.querySelector('.yuumi-post-img-preview').innerHTML = '';
                e.target.style.display = 'none';
            }
        });
    })();
    </script>
    <?php
}

function yuumi_post_save_meta($post_id) {
    if (!isset($_POST['yuumi_post_nonce']) || !wp_verify_nonce($_POST['yuumi_post_nonce'], 'yuumi_post_save')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (get_post_type($post_id) !== 'post') return;

    if (isset($_POST['post_intro'])) {
        update_post_meta($post_id, 'post_intro', sanitize_textarea_field($_POST['post_intro']));
    }
    if (isset($_POST['post_custom_tags'])) {
        update_post_meta($post_id, 'post_custom_tags', sanitize_text_field($_POST['post_custom_tags']));
    }
    if (isset($_POST['post_quote'])) {
        update_post_meta($post_id, 'post_quote', sanitize_textarea_field($_POST['post_quote']));
    }

    // Content sections (repeater as JSON)
    $sec_titles = isset($_POST['post_section_title']) ? array_map('sanitize_text_field', $_POST['post_section_title']) : [];
    $sec_images = isset($_POST['post_section_image']) ? array_map('absint', $_POST['post_section_image']) : [];
    $sec_descs  = isset($_POST['post_section_desc']) ? array_map('sanitize_textarea_field', $_POST['post_section_desc']) : [];
    $sections = [];
    for ($i = 0; $i < count($sec_titles); $i++) {
        if (!empty($sec_titles[$i]) || !empty($sec_images[$i]) || !empty($sec_descs[$i])) {
            $sections[] = [
                'title' => $sec_titles[$i] ?? '',
                'image' => $sec_images[$i] ?? 0,
                'desc'  => $sec_descs[$i] ?? '',
            ];
        }
    }
    update_post_meta($post_id, 'post_sections', wp_json_encode($sections, JSON_UNESCAPED_UNICODE));
}
add_action('save_post', 'yuumi_post_save_meta');

// --- Auto-create Privacy Policy page ---
function yuumi_setup_privacy_page() {
    // Check if a privacy page already exists
    $existing_id = (int) get_option('wp_page_for_privacy_policy');
    if ($existing_id && get_post_status($existing_id) === 'publish') {
        // Already created and published — skip
        if (get_option('yuumi_privacy_created')) return;
        update_option('yuumi_privacy_created', true);
        return;
    }

    $content = '
<p>ゆうつむぎデザイン（以下、「当方」といいます。）は、当方が運営するウェブサイト（以下、「当サイト」といいます。）をご利用いただく皆様の個人情報の重要性を認識し、個人情報の保護に関する法令を遵守するとともに、以下のとおりプライバシーポリシーを定め、適切な管理・運用に努めます。</p>

<h2>1. 個人情報の取得について</h2>
<p>当方は、お問い合わせフォーム等を通じて、お客様のお名前、メールアドレス、電話番号その他必要な情報をご提供いただく場合があります。</p>

<h2>2. 個人情報の利用目的</h2>
<p>取得した個人情報は、以下の目的のために利用いたします。</p>
<ul>
<li>お問い合わせへの回答</li>
<li>サービスに関するご案内</li>
<li>ご依頼いただいた業務の遂行</li>
<li>サービス品質の向上・改善</li>
<li>必要に応じたご連絡</li>
</ul>
<p>これらの目的以外で利用する場合は、あらかじめご本人の同意を得た上で行います。</p>

<h2>3. 個人情報の管理</h2>
<p>当方は、個人情報の漏えい、紛失、改ざん、不正アクセス等を防止するため、適切な安全管理措置を講じます。</p>

<h2>4. 第三者への提供</h2>
<p>当方は、法令に基づく場合を除き、ご本人の同意なく第三者へ個人情報を提供することはありません。</p>

<h2>5. Cookie（クッキー）について</h2>
<p>当サイトでは、利便性の向上やアクセス状況の分析のため、Cookieを使用する場合があります。</p>
<p>Cookieによって取得される情報には、個人を特定できる情報は含まれません。</p>
<p>ブラウザの設定によりCookieの利用を拒否することも可能ですが、その場合、一部機能をご利用いただけない場合があります。</p>

<h2>6. アクセス解析ツールについて</h2>
<p>当サイトでは、サイト改善のためGoogle Analytics等のアクセス解析ツールを利用する場合があります。</p>
<p>これらのツールではCookieを利用してアクセス情報を収集していますが、個人を特定する情報は含まれません。</p>

<h2>7. 外部サービスについて</h2>
<p>当サイトでは、SNSや外部サービスへのリンクを掲載する場合があります。</p>
<p>リンク先サイトにおける個人情報の取り扱いについては、各事業者のプライバシーポリシーをご確認ください。</p>

<h2>8. 個人情報の開示・訂正・削除</h2>
<p>ご本人から自己の個人情報について開示、訂正、削除等の請求があった場合は、ご本人確認を行った上で、法令に従い適切に対応いたします。</p>

<h2>9. プライバシーポリシーの変更</h2>
<p>本ポリシーの内容は、法令の改正やサービス内容の変更等に応じて、予告なく変更する場合があります。</p>

<h2>10. お問い合わせ窓口</h2>
<p>本ポリシーに関するお問い合わせは、下記までお願いいたします。</p>
<p>屋号：ゆうつむぎデザイン<br>代表：渡邊ゆうみ<br>所在地：青森県十和田市<br>メールアドレス：yuutumugi.design@gmail.com</p>

<p>制定日：2026年2月20日</p>
';

    $page_id = wp_insert_post([
        'post_type'    => 'page',
        'post_title'   => '個人情報の取り扱い',
        'post_name'    => 'privacy-policy',
        'post_content' => $content,
        'post_status'  => 'publish',
    ]);

    if ($page_id && !is_wp_error($page_id)) {
        update_option('wp_page_for_privacy_policy', $page_id);
        update_option('yuumi_privacy_created', true);
    }
}
add_action('init', 'yuumi_setup_privacy_page');

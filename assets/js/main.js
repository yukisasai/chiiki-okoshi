/**
 * ゆうつむぎデザイン — Main JS
 */
(function () {
  'use strict';

  // --- Mobile Menu ---
  const hamburger = document.querySelector('.hamburger');
  const mobileNav = document.querySelector('.mobile-nav');
  const overlay = document.querySelector('.mobile-nav-overlay');

  function toggleMenu() {
    const isOpen = mobileNav.classList.contains('is-open');
    hamburger.classList.toggle('is-active', !isOpen);
    hamburger.setAttribute('aria-expanded', !isOpen);
    mobileNav.classList.toggle('is-open', !isOpen);
    overlay.classList.toggle('is-visible', !isOpen);
    document.body.style.overflow = isOpen ? '' : 'hidden';
  }

  if (hamburger) {
    hamburger.addEventListener('click', toggleMenu);
  }
  if (overlay) {
    overlay.addEventListener('click', toggleMenu);
  }

  // --- FAQ Accordion ---
  document.querySelectorAll('.faq-item__question').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = this.closest('.faq-item');
      var answer = item.querySelector('.faq-item__answer');
      var toggle = item.querySelector('.faq-item__toggle');
      var isOpen = item.classList.contains('is-open');

      if (isOpen) {
        answer.style.maxHeight = null;
        item.classList.remove('is-open');
        btn.setAttribute('aria-expanded', 'false');
        if (toggle) toggle.textContent = '＋';
      } else {
        answer.style.maxHeight = answer.scrollHeight + 'px';
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
        if (toggle) toggle.textContent = '−';
      }
    });
  });

  // --- FAQ Accordion (front-page new style) ---
  document.querySelectorAll('.faq-item-new__question').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = this.closest('.faq-item-new');
      var answer = item.querySelector('.faq-item-new__answer');
      var toggle = this.querySelector('.faq-item-new__toggle');
      var isOpen = item.classList.contains('is-open');

      if (isOpen) {
        answer.style.maxHeight = null;
        item.classList.remove('is-open');
        btn.setAttribute('aria-expanded', 'false');
        if (toggle) toggle.textContent = '＋';
      } else {
        answer.style.maxHeight = answer.scrollHeight + 'px';
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
        if (toggle) toggle.textContent = '−';
      }
    });
  });

  // --- FAQ Accordion (otameshi page) ---
  document.querySelectorAll('.ota-faq-item__question').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = this.closest('.ota-faq-item');
      var answer = item.querySelector('.ota-faq-item__answer');
      var toggle = this.querySelector('.ota-faq-item__toggle');
      var isOpen = item.classList.contains('is-open');

      if (isOpen) {
        item.classList.remove('is-open');
        if (toggle) toggle.textContent = '＋';
      } else {
        item.classList.add('is-open');
        if (toggle) toggle.textContent = '−';
      }
    });
  });

  // --- Category/Tag Filter Tabs ---
  document.querySelectorAll('[data-filter-group]').forEach(function (group) {
    var tabs = group.querySelectorAll('[data-filter]');
    var items = document.querySelectorAll('[data-category]');

    tabs.forEach(function (tab) {
      tab.addEventListener('click', function (e) {
        e.preventDefault();
        tabs.forEach(function (t) { t.classList.remove('is-active'); });
        this.classList.add('is-active');

        var filter = this.getAttribute('data-filter');
        items.forEach(function (item) {
          if (filter === 'all' || item.getAttribute('data-category') === filter) {
            item.style.display = '';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  });

  // --- Scroll Fade-in Animation (Enhanced for inner pages) ---
  var isInner = !document.body.classList.contains('home');
  var prefersRM = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Auto-detect and assign animation classes on inner pages
  if (isInner && !prefersRM) {
    // svc-section: alternate left/right
    document.querySelectorAll('.svc-section').forEach(function (el, i) {
      if (!el.classList.contains('fade-in')) {
        el.classList.add(i % 2 === 0 ? 'fade-in--left' : 'fade-in--right');
      }
    });

    // Generic sections: fade-in--up
    var sectionSelectors = [
      '.contact-section', '.faq-body', '.blog-layout',
      '.about-concept', '.about-profile', '.about-cta',
      '.program-section', '.program-cta',
      '.stu-recommend', '.stu-support', '.stu-flow', '.stu-cta',
      '.ds-section', '.ds-cta',
      '.cs-section', '.cs-cta',
      '.es-section', '.es-cta',
      '.ev-section', '.ev-cta',
      '.faq-cta',
      '.ota-about', '.ota-recruit', '.ota-themes', '.ota-flow',
      '.ota-coordinator', '.ota-apply', '.ota-faq'
    ];

    sectionSelectors.forEach(function (sel) {
      document.querySelectorAll(sel).forEach(function (el) {
        if (!el.classList.contains('fade-in') &&
            !el.classList.contains('fade-in--left') &&
            !el.classList.contains('fade-in--right') &&
            !el.classList.contains('fade-in--up')) {
          el.classList.add('fade-in--up');
        }
      });
    });

    // Stagger: grid containers
    var gridSelectors = [
      '.works-grid-new', '.related-grid', '.blog-main',
      '.stu-support__grid', '.ota-themes__grid',
      '.stu-flow__steps', '.ota-flow__steps'
    ];

    gridSelectors.forEach(function (sel) {
      document.querySelectorAll(sel).forEach(function (container) {
        var children = container.children;
        for (var i = 0; i < children.length; i++) {
          children[i].classList.add('stagger-item');
          children[i].style.setProperty('--stagger-index', i);
        }
      });
    });
  }

  // Unified IntersectionObserver for all fade variants
  var fadeSelectors = '.fade-in, .fade-in--left, .fade-in--right, .fade-in--up, .fade-in--scale';
  var fadeElements = document.querySelectorAll(fadeSelectors);

  if (fadeElements.length && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -50px 0px' }
    );

    fadeElements.forEach(function (el) {
      observer.observe(el);
    });
  }

  // Stagger observer: when container enters viewport, show all stagger children
  var staggerContainers = document.querySelectorAll(
    '.works-grid-new, .related-grid, .blog-main, .stu-support__grid, .ota-themes__grid, .stu-flow__steps, .ota-flow__steps'
  );

  if (staggerContainers.length && 'IntersectionObserver' in window) {
    var staggerObs = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var items = entry.target.querySelectorAll('.stagger-item');
            items.forEach(function (item) {
              item.classList.add('is-visible');
            });
            staggerObs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.05, rootMargin: '0px 0px -30px 0px' }
    );

    staggerContainers.forEach(function (c) {
      staggerObs.observe(c);
    });
  }

  // Sub-service hero entrance: cascade child elements
  if (isInner && !prefersRM) {
    var subHeroSelectors = [
      '.ds-hero', '.cs-hero', '.es-hero', '.stu-hero', '.ota-hero'
    ];

    subHeroSelectors.forEach(function (sel) {
      var hero = document.querySelector(sel);
      if (!hero) return;

      // Find child elements to cascade
      var body = hero.querySelector(sel + '__body') || hero.querySelector(sel + '__inner');
      if (!body) return;

      var children = body.children;
      for (var i = 0; i < children.length; i++) {
        children[i].style.opacity = '0';
        children[i].style.transform = 'translateY(20px)';
        children[i].style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        children[i].style.transitionDelay = (0.15 + i * 0.12) + 's';
      }

      // Observe hero entering viewport
      if ('IntersectionObserver' in window) {
        var heroObs = new IntersectionObserver(function (entries) {
          entries.forEach(function (e) {
            if (e.isIntersecting) {
              var els = body.children;
              for (var j = 0; j < els.length; j++) {
                els[j].style.opacity = '1';
                els[j].style.transform = 'translateY(0)';
              }
              heroObs.unobserve(e.target);
            }
          });
        }, { threshold: 0.1 });
        heroObs.observe(hero);
      }
    });
  }

  // --- Smooth scroll for anchor links ---
  document.querySelectorAll('a[href^="#"]').forEach(function (link) {
    link.addEventListener('click', function (e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        var offset = 80; // header height
        var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

  // --- Header scroll effect ---
  var header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 10) {
        header.classList.add('is-scrolled');
      } else {
        header.classList.remove('is-scrolled');
      }
    });
  }

  // --- Hero FV Entrance Animation ---
  // 写真が反時計回りにふわっとフェードイン → SVG線が糸を結ぶように描画
  (function () {
    var hero = document.querySelector('.hero-fv');
    if (!hero) return;
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    hero.classList.add('hero-fv--animate');

    // 写真: 反時計回り (右上→左上→左中→左下→右下→右中)
    var photoOrder = [
      '.hero-fv__photo--tr',
      '.hero-fv__photo--tl',
      '.hero-fv__photo--ml',
      '.hero-fv__photo--bl',
      '.hero-fv__photo--br',
      '.hero-fv__photo--mr'
    ];

    // SVG線: 反時計回り
    var lineOrder = [
      '.hero-fv__line--blue',
      '.hero-fv__line--pink',
      '.hero-fv__line--green',
      '.hero-fv__line--yellow'
    ];

    var center = hero.querySelector('.hero-fv__center');
    var animated = false;

    function animateHero() {
      if (animated) return;
      animated = true;

      // Phase 1: 中央コンテンツをフェードイン（0.3秒後、1.4秒かけて表示）
      if (center) {
        setTimeout(function () { center.classList.add('is-visible'); }, 300);
      }

      // Phase 2: 写真を反時計回りに順番にフェードイン（中央が表示された後）
      var photoStart = 2000;
      photoOrder.forEach(function (sel, i) {
        var el = document.querySelector(sel);
        if (el) {
          setTimeout(function () { el.classList.add('is-visible'); }, photoStart + i * 350);
        }
      });

      // Phase 3: SVG線を反時計回りに糸を結ぶように描画（写真の後）
      // SP(768px以下)ではマスクアニメーション非対応のためスキップ
      if (window.innerWidth > 768) {
        var lineStart = photoStart + photoOrder.length * 350 + 800;
        var ns = 'http://www.w3.org/2000/svg';

        lineOrder.forEach(function (sel, i) {
          var svgEl = document.querySelector(sel);
          if (!svgEl) return;
          var path = svgEl.querySelector('path');
          if (!path) return;

          var len = path.getTotalLength();
          var maskId = 'hero-line-mask-' + i;

          // マスク用 defs を作成
          var defs = document.createElementNS(ns, 'defs');
          svgEl.insertBefore(defs, svgEl.firstChild);

          var mask = document.createElementNS(ns, 'mask');
          mask.setAttribute('id', maskId);
          mask.setAttribute('maskUnits', 'userSpaceOnUse');

          // viewBox からマスク範囲を設定
          var vb = svgEl.getAttribute('viewBox');
          if (vb) {
            var parts = vb.split(/[\s,]+/);
            mask.setAttribute('x', parseFloat(parts[0]) - 50);
            mask.setAttribute('y', parseFloat(parts[1]) - 50);
            mask.setAttribute('width', parseFloat(parts[2]) + 100);
            mask.setAttribute('height', parseFloat(parts[3]) + 100);
          }

          // マスク用パス（太い白線でパスを描画→元のダッシュ線を徐々に表示）
          var mp = document.createElementNS(ns, 'path');
          mp.setAttribute('d', path.getAttribute('d'));
          mp.setAttribute('stroke', 'white');
          mp.setAttribute('stroke-width', '30');
          mp.setAttribute('fill', 'none');
          mp.setAttribute('stroke-linecap', 'round');
          mp.style.strokeDasharray = len;
          mp.style.strokeDashoffset = len;

          mask.appendChild(mp);
          defs.appendChild(mask);
          path.setAttribute('mask', 'url(#' + maskId + ')');

          // 描画アニメーション開始（最後の線は描画速度を速く）
          var isLast = (i === lineOrder.length - 1);
          var duration = isLast ? 0.8 : 1.2;
          var delay = lineStart + i * 400;
          setTimeout(function () {
            mp.style.transition = 'stroke-dashoffset ' + duration + 's ease-in-out';
            mp.style.strokeDashoffset = '0';
          }, delay);
        });
      }
    }

    // ヒーローセクションが画面に入ったらアニメーション開始
    if ('IntersectionObserver' in window) {
      var heroObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) {
            animateHero();
            heroObs.unobserve(e.target);
          }
        });
      }, { threshold: 0.05 });
      heroObs.observe(hero);
    } else {
      animateHero();
    }
  })();

  // --- Scroll-linked SVG Line Drawing (mask方式) ---
  // フロントページ: ヒーローの緑線の終点から
  // 内部ページ: FV/ページヒーローセクションの下から
  // ページ下部まで左右に蛇行し、最後にむすんで終わる
  (function () {
    var frontPage = document.getElementById('frontPage');
    var svg       = document.getElementById('scrollLine');
    var maskPath  = document.getElementById('sl-mask-path');
    var visPath   = document.getElementById('sl-visible-path');
    var maskRect  = document.getElementById('sl-mask-rect');

    if (!svg || !maskPath || !visPath) return;

    // コンテナ: フロントページは #frontPage、内部ページは body
    var isInnerPage = !frontPage;
    var container   = frontPage || document.body;

    // ヒーローの緑色ライン (クラス名は --yellow だが色は #72B94E)
    var heroGreenSvg  = document.querySelector('.hero-fv__line--yellow');
    var heroGreenPath = heroGreenSvg ? heroGreenSvg.querySelector('path') : null;

    var prefersRM = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var totalLen  = 0;
    var ticking   = false;

    // ── スクロール線の開始点を取得 ──
    function getGreenLineEndPoint() {
      // フロントページ: ヒーロー緑線の終点
      if (!isInnerPage && heroGreenPath && heroGreenSvg) {
        var pathLen = heroGreenPath.getTotalLength();
        var endPt   = heroGreenPath.getPointAtLength(pathLen);

        // SVG座標 → ページ座標に変換
        var svgRect  = heroGreenSvg.getBoundingClientRect();
        var mainRect = container.getBoundingClientRect();
        var vb       = heroGreenSvg.viewBox.baseVal;

        var scaleX = svgRect.width  / vb.width;
        var scaleY = svgRect.height / vb.height;

        return {
          x: svgRect.left - mainRect.left + endPt.x * scaleX,
          y: svgRect.top  - mainRect.top  + endPt.y * scaleY
        };
      }

      // 内部ページ: FV/ページヒーローセクションの下から開始
      if (isInnerPage) {
        var mainEl = document.querySelector('main');
        if (mainEl) {
          var firstSect = mainEl.querySelector('section:first-child') || mainEl.firstElementChild;
          if (firstSect) {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            var rect = firstSect.getBoundingClientRect();
            return { x: container.offsetWidth * 0.75, y: rect.bottom + scrollTop };
          }
        }
      }

      // フォールバック
      return { x: container.offsetWidth * 0.75, y: 600 };
    }

    // ── 左右端を行き来するウェイポイント生成 ──
    function generateWaypoints(w, h, startPt) {
      var margin = 0;
      var leftX  = margin;
      var rightX = w - margin;
      var goLeft = startPt.x > w / 2;

      // フロントページ: 特定要素の下端にウェイポイントを配置
      if (!isInnerPage) {
        var targetSelectors = [
          '.news-card__pickup',
          '.concept-bg',
          '.svc-cards',
          '.works-grid-new',
          '.insta-grid-new',
          '.faq-list-new',
          '.contact-cta-new__buttons'
        ];

        var containerRect = container.getBoundingClientRect();
        var yPositions = [];

        targetSelectors.forEach(function(selector) {
          var el = document.querySelector(selector);
          if (el) {
            var elRect = el.getBoundingClientRect();
            yPositions.push(elRect.top - containerRect.top);
          }
        });

        // y座標昇順にソートし、開始点より下のものだけ使用
        yPositions.sort(function(a, b) { return a - b; });
        yPositions = yPositions.filter(function(y) { return y > startPt.y + 10; });

        var pts = [startPt];

        yPositions.forEach(function(y) {
          var x = goLeft ? leftX : rightX;
          goLeft = !goLeft;
          pts.push({ x: x, y: y });
        });

        // 最後のウェイポイントがページ下端より上なら補完
        if (pts[pts.length - 1].y < h - 100) {
          pts.push({ x: goLeft ? leftX : rightX, y: h - 100 });
        }

        return pts;
      }

      // 内部ページ: 均等分割
      var segs = 12;
      var segH = (h - startPt.y - 160) / segs;
      var pts  = [startPt];

      for (var i = 1; i <= segs; i++) {
        var x = goLeft ? leftX : rightX;
        goLeft = !goLeft;
        var y = startPt.y + segH * i;
        pts.push({ x: x, y: y });
      }

      return pts;
    }

    // 結び目の開始Y座標（コンテナ座標系）
    var musubiY = 0;

    // ── S字カーブのSVGパス + 結び目 ──
    function buildPathD(pts, w) {
      var d = 'M' + f(pts[0].x) + ',' + f(pts[0].y);

      for (var i = 1; i < pts.length; i++) {
        var p = pts[i - 1];
        var c = pts[i];
        var dy = c.y - p.y;
        var overshoot = w * 0.06;
        var cp1x = p.x < w / 2 ? p.x - overshoot : p.x + overshoot;
        var cp2x = c.x < w / 2 ? c.x - overshoot : c.x + overshoot;
        d += ' C' + f(cp1x) + ',' + f(p.y + dy * 0.6)
           + ' '  + f(cp2x) + ',' + f(p.y + dy * 0.4)
           + ' '  + f(c.x) + ',' + f(c.y);
      }

      // ── むすび (結び目ループ) ──
      var last = pts[pts.length - 1];
      var cx = w / 2;
      var lx = last.x;
      var ly = last.y;
      var R  = 35;

      // 結び目の開始Y座標を記録
      musubiY = ly;

      // 中央に向かって移動
      d += ' C' + f(lx) + ',' + f(ly + R * 1.2)
         + ' '  + f(cx + R * 0.5) + ',' + f(ly + R * 1.5)
         + ' '  + f(cx) + ',' + f(ly + R * 2);

      // 右上へ膨らむループ
      d += ' C' + f(cx + R * 2.5) + ',' + f(ly + R * 1.0)
         + ' '  + f(cx + R * 2.2) + ',' + f(ly - R * 0.8)
         + ' '  + f(cx + R * 0.3) + ',' + f(ly + R * 0.5);

      // 左下へ交差するループ
      d += ' C' + f(cx - R * 1.8) + ',' + f(ly + R * 1.8)
         + ' '  + f(cx - R * 2.2) + ',' + f(ly + R * 3.5)
         + ' '  + f(cx - R * 0.2) + ',' + f(ly + R * 3.2);

      // 戻って結び終わり
      d += ' C' + f(cx + R * 1.2) + ',' + f(ly + R * 3.0)
         + ' '  + f(cx + R * 0.8) + ',' + f(ly + R * 2.2)
         + ' '  + f(cx) + ',' + f(ly + R * 2);

      return d;
    }

    function f(n) { return n.toFixed(1); }

    // 線の開始Y / 終了Y（コンテナ座標系）
    var lineStartY = 0;
    var lineEndY   = 0;
    // 蛇行部分のパス長（結び目を除く）
    var mainLen = 0;

    // ── 初期化 ──
    function init() {
      var w = container.offsetWidth;
      var h = container.offsetHeight;

      svg.setAttribute('viewBox', '0 0 ' + w + ' ' + h);
      svg.style.width  = w + 'px';
      svg.style.height = h + 'px';

      maskRect.setAttribute('width', w);
      maskRect.setAttribute('height', h + 200);

      var startPt = getGreenLineEndPoint();
      var pts = generateWaypoints(w, h, startPt);
      var d   = buildPathD(pts, w);

      // 表示用パスとマスク用パスに同一の d を設定
      visPath.setAttribute('d', d);
      maskPath.setAttribute('d', d);

      totalLen = maskPath.getTotalLength();

      // 線の開始Y・終了Yを取得
      var bbox = visPath.getBBox();
      lineStartY = bbox.y;
      lineEndY   = bbox.y + bbox.height;

      // ── セクションごとの色グラデーション ──
      var ns = 'http://www.w3.org/2000/svg';
      var gradId = 'sl-section-gradient';
      var oldGrad = document.getElementById(gradId);
      if (oldGrad) oldGrad.remove();

      var grad = document.createElementNS(ns, 'linearGradient');
      grad.setAttribute('id', gradId);
      grad.setAttribute('gradientUnits', 'userSpaceOnUse');
      grad.setAttribute('x1', '0');
      grad.setAttribute('y1', String(lineStartY));
      grad.setAttribute('x2', '0');
      grad.setAttribute('y2', String(lineEndY));

      // セクション境界の要素とブランドカラー
      var colorTargets = [
        { sel: '.section--news',        color: '#72B94E' },  // グリーン
        { sel: '.section--concept',     color: '#E77084' },  // ピンク
        { sel: '.section--services',    color: '#629ACC' },  // ブルー
        { sel: '.section--works',       color: '#F0C24A' },  // イエロー
        { sel: '.section--instagram',   color: '#72B94E' },  // グリーン
        { sel: '.section--faq',         color: '#E77084' },  // ピンク
        { sel: '.section--contact-cta', color: '#629ACC' }   // ブルー
      ];

      var containerRect2 = container.getBoundingClientRect();
      var range = lineEndY - lineStartY;
      var stops = [];

      colorTargets.forEach(function(ct) {
        var el = document.querySelector(ct.sel);
        if (!el) return;
        var elRect = el.getBoundingClientRect();
        var topY = elRect.top - containerRect2.top;
        var botY = elRect.bottom - containerRect2.top;
        var pctTop = Math.max(0, Math.min(1, (topY - lineStartY) / range));
        var pctBot = Math.max(0, Math.min(1, (botY - lineStartY) / range));
        stops.push({ offset: pctTop, color: ct.color });
        stops.push({ offset: pctBot, color: ct.color });
      });

      // offset順にソート
      stops.sort(function(a, b) { return a.offset - b.offset; });

      stops.forEach(function(s) {
        var stop = document.createElementNS(ns, 'stop');
        stop.setAttribute('offset', (s.offset * 100).toFixed(1) + '%');
        stop.setAttribute('stop-color', s.color);
        grad.appendChild(stop);
      });

      // SVGの<defs>にグラデーションを追加
      var defs = svg.querySelector('defs');
      defs.appendChild(grad);
      visPath.setAttribute('stroke', 'url(#' + gradId + ')');

      // 蛇行部分のパス長を計算（結び目の開始Yまでの進捗比率 × 全長）
      // 結び目はY方向に狭いがパスが長いため、スクロール範囲を分けて計算する
      var mainYRange = musubiY - lineStartY;
      var fullYRange = lineEndY - lineStartY;
      // 蛇行部分がY方向で占める割合
      var mainRatio  = fullYRange > 0 ? mainYRange / fullYRange : 0.9;
      mainLen = totalLen * mainRatio;

      if (prefersRM) {
        maskPath.setAttribute('stroke-dasharray', 'none');
        maskPath.setAttribute('stroke-dashoffset', '0');
      } else {
        maskPath.setAttribute('stroke-dasharray', totalLen);
        maskPath.setAttribute('stroke-dashoffset', totalLen);
        updateDraw();
      }
    }

    // ── スクロール進捗の計算と描画更新 ──
    // 蛇行 + 結び目を一連の進捗で描画
    function updateDraw() {
      ticking = false;

      var containerRect = container.getBoundingClientRect();
      var viewH = window.innerHeight;

      var lineTopInVP = containerRect.top + lineStartY;
      var triggerLine = viewH * 0.85;
      var scrollRange = lineEndY - lineStartY;

      // スクロール可能量に合わせてrangeを制限（結び目が必ず完了する）
      var scrollY = window.pageYOffset || document.documentElement.scrollTop;
      var containerTopInDoc = containerRect.top + scrollY;
      var pageScrollMax = document.documentElement.scrollHeight - viewH;
      var maxScrolled = triggerLine - containerTopInDoc + pageScrollMax - lineStartY;
      scrollRange = Math.min(scrollRange, maxScrolled);

      var scrolled = triggerLine - lineTopInVP;
      var progress = Math.min(Math.max(scrolled / scrollRange, 0), 1);

      // ease-in: 序盤〜中盤はゆっくり、終盤で追いつく
      var eased = Math.pow(progress, 1.6);

      var offset = totalLen * (1 - eased);
      maskPath.setAttribute('stroke-dashoffset', Math.max(offset, 0));
    }

    function onScroll() {
      if (!ticking) {
        requestAnimationFrame(updateDraw);
        ticking = true;
      }
    }

    // ── イベント登録 ──
    if (!prefersRM) {
      window.addEventListener('scroll', onScroll, { passive: true });
    }

    var resizeTimer;
    window.addEventListener('resize', function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(init, 250);
    });

    // ── 実行: 画像読み込み後に高さが確定するため load イベントで初期化 ──
    window.addEventListener('load', init);
  })();

})();

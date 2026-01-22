document.addEventListener('DOMContentLoaded', function () {

jQuery(function ($) {
    $('main').fadeTo(400, 1);
});

  // =========================
  // ハンバーガー
  // =========================
  const hamburger = document.getElementById('hamburger');
  const nav = document.getElementById('site-nav');

  if (hamburger && nav) {
    hamburger.addEventListener('click', function (e) {
      e.stopPropagation(); // クリック伝播を止める
      nav.classList.toggle('active');       // メニュー表示
      hamburger.classList.toggle('active'); // 3本線 → ×
    });

    nav.addEventListener('click', function (e) {
      e.stopPropagation(); // メニュー内クリックは閉じない
    });

    // メニュー外クリックで閉じる
    document.addEventListener('click', function () {
      if (nav.classList.contains('active')) {
        nav.classList.remove('active');
        hamburger.classList.remove('active');
      }
    });
  }


  // =========================
  // アーカイブ詳細モーダル
  // =========================
const detailModal = document.querySelector('.detail-modal');


if (detailModal) {
  const modalContent = detailModal.querySelector('.player-content');
  const closeBtn = detailModal.querySelector('.modal-close-btn');

  document.querySelectorAll('.disc-item').forEach(item => {
    item.addEventListener('click', () => {

      // 内容差し替え
      detailModal.querySelector('.modal-jacket').src = item.dataset.jacket;
      detailModal.querySelector('.modal-title').textContent = item.dataset.title;
      detailModal.querySelector('.modal-desc').innerHTML = item.dataset.description;
      detailModal.querySelector('.modal-tour').innerHTML =  item.dataset.tour;
      detailModal.querySelector('.disc-1').innerHTML = item.dataset.songs1;
      detailModal.querySelector('.disc-2').innerHTML = item.dataset.songs2;
      detailModal.querySelector('.modal-number').textContent = item.dataset.number;
      const price = item.dataset.price;//金額の￥ + 税　表示
      if (price && price !== '') {
        const formattedPrice = Number(price).toLocaleString();
        detailModal.querySelector('.modal-price').textContent =
          `／￥${formattedPrice} + 税`;
      } else {
        detailModal.querySelector('.modal-price').textContent = '';
}


      // タイプ
      let typeLabel = '';
      switch (item.dataset.type) {
        case 'single': typeLabel = 'シングル'; break;
        case 'album':  typeLabel = 'アルバム'; break;
        case 'dvd':    typeLabel = 'DVD'; break;
      }
      detailModal.querySelector('.modal-type').textContent = typeLabel;

     
        // 日付（Ymd → Y.n.j リリース）
        const rawDate = item.dataset.date; // 例: 19920521

        if (rawDate && rawDate.length === 8) {
          const y = rawDate.slice(0, 4);
          const m = Number(rawDate.slice(4, 6));
          const d = Number(rawDate.slice(6, 8));

          detailModal.querySelector('.modal-date').textContent =
            `${y}.${m}.${d} リリース`;
        } else {
          detailModal.querySelector('.modal-date').textContent = '';
        }

      // リンク
      detailModal.querySelector('.modal-apple').href = item.dataset.apple;
      detailModal.querySelector('.modal-line').href = item.dataset.line;
      detailModal.querySelector('.modal-itunes').href = item.dataset.itunes;
      detailModal.querySelector('.modal-spotify').href = item.dataset.spotify;
      detailModal.querySelector('.modal-amazon').href = item.dataset.amazon;
      detailModal.querySelector('.modal-tower').href = item.dataset.tower;
      detailModal.querySelector('.modal-hmv').href = item.dataset.hmv;


        // ① モーダル内リンク制御
        toggleModalLinks(detailModal);

      // ✅ モーダル表示 + 背景固定
        detailModal.classList.add('active');
        document.body.classList.add('is-modal-open');

        // 初期化（毎回リセット）
        gsap.set(detailModal, { opacity: 0 });
        gsap.set(modalContent, {
          opacity: 0,
          y: 20,
          scale: 0.98
        });

        // やさしく表示（追加直後にGSAPでアニメーション、閉じる時は 先にGSAP → 完了後に .active を外す
        gsap.timeline()
          .to(detailModal, {
            opacity: 1,
            duration: 0.35,
            ease: 'power2.out'
          })
          .to(modalContent, {
            opacity: 1,
            y: 0,
            scale: 1,
            duration: 0.5,
            ease: 'power3.out'
          }, '-=0.15');
            });
          });

          // 優しく閉じる
        const closeModal = () => {
          gsap.timeline({
            onComplete: () => {
              detailModal.classList.remove('active');
              document.body.classList.remove('is-modal-open');
            }
          })
          .to(modalContent, {
            opacity: 0,
            y: 20,
            scale: 0.98,
            duration: 0.3,
            ease: 'power2.in'
          })
          .to(detailModal, {
            opacity: 0,
            duration: 0.3,
            ease: 'power2.in'
          }, '-=0.15');
        };

          closeBtn.addEventListener('click', closeModal);

          detailModal.addEventListener('click', (e) => {
            if (e.target === detailModal) {
              closeModal();
            }
          });
          
        }

function toggleModalLinks(detailModal) {



  /* =========
     配信リンク（news-tags）非表示判定
  ========= */
  detailModal.querySelectorAll('.modal-links .news-tags').forEach(li => {
    const a = li.querySelector('a');
    const href = a.getAttribute('href');

    if (!href || href === '#' || href.trim() === '') {
      li.style.display = 'none';
    } else {
      li.style.display = '';
    }
  });

  /* =========
     購入リンク（sale-links）非表示判定
  ========= */
  const saleLinks = detailModal.querySelector('.sale-links');

  if (saleLinks) {
    let visibleCount = 0;

    saleLinks.querySelectorAll('a').forEach(a => {
      const href = a.getAttribute('href');

      if (!href || href === '#' || href.trim() === '') {
        a.style.display = 'none';
      } else {
        a.style.display = '';
        visibleCount++;
      }
    });

    // 3つとも無ければセクションごと非表示
    saleLinks.style.display = visibleCount === 0 ? 'none' : '';
  }

  /* =========
     ツアー情報　非表示判定
  ========= */
  const tour = detailModal.querySelector('.modal-tour');
  if (tour) {
    tour.style.display =
      tour.textContent.trim() === '' ? 'none' : '';
  }


  /* =========
     DISC情報　非表示判定
  ========= */


// 曲情報（modal-songs）
const songs = detailModal.querySelector('.modal-songs');
if (songs) {
  // 両方のdiscが空なら非表示
  const disc1 = songs.querySelector('.disc-1')?.textContent.trim();
  const disc2 = songs.querySelector('.disc-2')?.textContent.trim();

  songs.style.display = (disc1 === '' && disc2 === '') ? 'none' : '';
}

}


  // =========================
  // トップページ用プレイヤーモーダル
  // =========================
  const playerModal = document.querySelector('.player-modal.top-player');
  if(playerModal){
    const embedArea = playerModal.querySelector('.modal-embed');
    const closeBtn = playerModal.querySelector('.modal-close-btn');
    const playBtn = document.querySelector('.playBtn'); // トップはボタン1つ

    if(playBtn){
      playBtn.addEventListener('click', () => {
        embedArea.innerHTML = `<iframe allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write"
          frameborder="0"
          height="175"
          style="width:100%;max-width:660px;overflow:hidden;border-radius:10px;"
          sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation"
          src="${playBtn.dataset.url}">
        </iframe>`;
        playerModal.classList.add('active');
      });
    }

    // 閉じる処理
    closeBtn.addEventListener('click', () => {
      playerModal.classList.remove('active');
      embedArea.innerHTML = '';
    });
    playerModal.addEventListener('click', (e) => {
      if(e.target === playerModal){
        playerModal.classList.remove('active');
        embedArea.innerHTML = '';
      }
    });
  }

});


// =========================
// トップページQ&Aのドロップダウン
// =========================
jQuery(function ($) {

  // クリックで開閉
  $('.qa-question').click(function (e) {
    $(this).closest('.qa-item').toggleClass('open'); // open を qa-item に付ける
    $(this).next('.qa-inner').slideToggle(300);
  });
  
});


// =========================
// フェードアップ（GSAP）
// =========================
gsap.utils.toArray('.fade-anime').forEach(el => {
  const type = el.dataset.fade;
  if (type === 'fade-up' || type === 'fade-left' || type === 'fade-right') {

    let x = 0;
    let y = 0;

    // ▼ 下から上にフェードアップ
    if (type === 'fade-up') y = 100;
    // ▼ 左から右へスライド
    if (type === 'fade-left') x = -100;
    // ▼ 右から左へスライド
    if (type === 'fade-right') x = 100;

    // ★ここに書く
    let startPos = 'top 60%';

    // 横からのスライドは少し遅らせる
    if (type === 'fade-left' || type === 'fade-right') {
      startPos = 'top 70%';
    }

    gsap.fromTo(
      el,
      { autoAlpha: 0, x: x, y: y },
      {
        autoAlpha: 1,
        x: 0,
        y: 0,
        duration: 1.2,
        ease: 'power2.out',
        scrollTrigger: {
          trigger: el,
          start: startPos, // ← ここで使う
        }
      }
    );
  }
  // ▼ 子要素を順番にフェードアップ
  if (type === 'fade-up-cont') {
    const targets = el.querySelectorAll(':scope > *');

    gsap.fromTo(
      targets,
      {
        y: '50px',       // 下から
        autoAlpha: 0
      },
      {
        y: 'auto',
        autoAlpha: 1,
        duration: 1.5,
        ease: 'power2.out',
        stagger: {
          each: 0.08
        },
        scrollTrigger: {
          trigger: targets,
          start: 'top center+=100'
        }
      }
    );
  }
});


// =========================
// ディスコグラフィータブ切り替え
// =========================


document.addEventListener('DOMContentLoaded', () => {
  const tabs = document.querySelectorAll('.news-tabs .news-tags');
  const items = document.querySelectorAll('.disc-item');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('is-active'));
      tab.classList.add('is-active');

      const filter = tab.dataset.filter;

      items.forEach(item => {
        if (filter === 'all' || item.dataset.type === filter) {
          item.style.display = '';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
});

// =========================
// ディスコグラフィー一覧プラスボタン
// =========================

document.querySelectorAll('.jacket-image').forEach(wrap => {
  const img = wrap.querySelector('img');
  const btn = wrap.querySelector('.plus-btn');

  if (!img || !btn) return;

  img.addEventListener('load', () => {
    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');

    // プラスボタンがある「右下エリア」だけを判定
    const size = 50;
    canvas.width = size;
    canvas.height = size;

    ctx.drawImage(
      img,
      img.naturalWidth - size,   // x（右端）
      img.naturalHeight - size,  // y（下端）
      size,
      size,
      0,
      0,
      size,
      size
    );

    const data = ctx.getImageData(0, 0, size, size).data;

    let sum = 0;
    for (let i = 0; i < data.length; i += 4) {
      sum += (data[i] + data[i + 1] + data[i + 2]) / 3;
    }

    const brightness = sum / (data.length / 4);

    btn.classList.add(brightness > 128 ? 'is-black' : 'is-white');
  });

  // キャッシュ対策
  if (img.complete) {
    img.dispatchEvent(new Event('load'));
  }
});


// ========================================
// プロフィールページ　釣り針マーククリックで切り替え
// ========================================


// const btn = document.querySelector('.btn-profile');
// const body = document.body;
// const bars = document.querySelectorAll('.animation-bg-element');

// btn.addEventListener('click', () => {
//   body.classList.add('move-order');

//   // アニメーション時間に合わせて処理
//   setTimeout(() => {
//     // プロフィール切替
//     const normal = document.querySelector('.profile-panel--normal');
//     const fishing = document.querySelector('.profile-panel--fishing');
//     normal.classList.toggle('is-front');
//     normal.classList.toggle('is-back');
//     fishing.classList.toggle('is-front');
//     fishing.classList.toggle('is-back');

//     // バーを消す
//     bars.forEach(bar => bar.style.display = 'none');

//     // move-order も消す
//     body.classList.remove('move-order');
//   }, 600); // アニメーション時間＋余裕
// });


//ぺーじめくりのアニメーション
// document.addEventListener('DOMContentLoaded', () => {
//   const flipWrap = document.querySelector('.profile-flip');
//   const btn = document.querySelector('.btn-profile');
//   let isFishing = false;
//   if(btn) {
//     btn.addEventListener('click', () => {
//       isFishing = !isFishing;

//       flipWrap.classList.toggle('is-flipped', isFishing);

//       // ボタン画像切替
//       btn.src = isFishing
//         ? btn.dataset.fishing
//         : btn.dataset.normal;
//     });
//   }
// });



// ========================================
// コンタクトページ　利用規約チェック
// ========================================

document.addEventListener('DOMContentLoaded', () => {
  const submitBtn = document.querySelector('.submit-btn');
  const agreeCheck = document.getElementById('agree');
  const requiredFields = document.querySelectorAll('.wpcf7-form-control.wpcf7-validates-as-required');

  function toggleSubmit() {
    let allFilled = true;

    requiredFields.forEach(field => {
      if (!field.value.trim()) {
        allFilled = false;
      }
    });
    if(agreeCheck) {
      submitBtn.disabled = !(allFilled && agreeCheck.checked);
    }
  }

  // 初期状態
  toggleSubmit();

  // イベント登録
  requiredFields.forEach(field => {
    field.addEventListener('input', toggleSubmit);
  });
  if(agreeCheck) {
    agreeCheck.addEventListener('change', toggleSubmit);
  }
});



// ========================================
// コンタクトフォーム7　サンクスページリダイレクト（ディレクトリ名は適宜修正）
// ========================================

document.addEventListener('wpcf7mailsent', function(event) {
  if (event.detail.contactFormId === 350) {
    window.location.href = '/onomasatoshi_3_wp/contact-thanks/';
  }

  if (event.detail.contactFormId === 354) {
      window.location.href = '/onomasatoshi_3_wp/qa-thanks';
    }
}, false);



// ========================================
// テキストスライダー
// ========================================
const txtSlideAnime = document.querySelectorAll(".release-title__animation.splide");
if(txtSlideAnime.length > 0){
  new Splide('.release-title__animation.splide',{
    type: string = 'loop',
    rewind: boolean = true,
    speed: number = 400,
    autoWidth: boolean = true,
    arrows: boolean = false,
    pagination: boolean = false,
    drag: boolean = false,
    autoScroll: {
      pauseOnHover: false,
      pauseOnFocus: boolean = false,
    },
    breakpoints: {
      750: {
        autoScroll: {
          speed: number = 0.5,
        },
      },
    }
  }).mount(window.splide.Extensions);
}


document.addEventListener('DOMContentLoaded', function () {

  // jQuery フェードイン処理
  jQuery(function ($) {
    $('main').fadeTo(400, 1);
  });
});


// ========================================
// プロフィールページ　釣り針マーククリックで切り替え
// ========================================


document.addEventListener('DOMContentLoaded', () => {
  console.log('JS loaded');

  const btn = document.querySelector('.btn-profile');
  const wrapper = document.querySelector('.profile-wrapper');

  console.log('btn:', btn);
  console.log('wrapper:', wrapper);

  btn.addEventListener('click', () => {
    console.log('clicked');
    wrapper.classList.remove('is-switching');
    void wrapper.offsetWidth;
    wrapper.classList.add('is-switching');
  });
});



// ========================================
// ローディング
// ========================================

// MotionPathPlugin を有効化
gsap.registerPlugin(MotionPathPlugin);

const isPC = window.innerWidth >= 821;



const settings = isPC ? {
  startR: 18,
  endR: 120,
  path: [
    { x: 40, y: 30 }, // ① 右寄り中央
    { x: 10, y: 35 }, // ② 左下
    { x: -25, y: 0 }, // ③ 左
    { x: 25, y: 5 }, // ④ 上
    { x: 20, y: 20 }  // ⑤ 中央
  ],
  moveDuration: 2.5,
  expandDuration: 1.6
} : {
  startR: 18,
  endR: 100,
  path: [
    { x: 30, y: 30 },
    { x: 10, y: 25 },
    { x: -5, y: -10 },
    { x: 15, y: -20 },
    { x: 30, y: 30 }
  ],
  moveDuration: 2.5,
  expandDuration: 1.6
};

// トップページかどうか判定
const isHome = document.body.classList.contains("home");

// セッションストレージ確認
const hasVisited = sessionStorage.getItem("kvVisited");

// KVマスク要素
const kvMask = document.querySelector(".kv-mask");

if (isHome && !hasVisited) {
  // 初回トップページ訪問 → ローディング
  sessionStorage.setItem("kvVisited", "true");

  // スクロール禁止
  document.body.style.overflow = "hidden";

  // マスク表示
  kvMask.style.display = "block";

}

// 初期位置（★必須）
gsap.set('#spot', {
  attr: {
    cx: settings.path[0].x,
    cy: settings.path[0].y,
    r: settings.startR
  }
});

// なめらか移動
gsap.to('#spot', {
  duration: settings.moveDuration,
  ease: 'none',
  motionPath: {
    path: settings.path,
    curviness: 1.6,
    fromCurrent: false
  }
});

// 拡大して解除
gsap.to('#spot', {
  attr: { r: settings.endR },
  duration: settings.expandDuration,
  ease: 'power3.out',
  delay: settings.moveDuration
});

// // =========================
// // リロード判定（F5 / ⌘R）の時だけ初期化
// // =========================
// const navEntry = performance.getEntriesByType("navigation")[0];
// if (navEntry && navEntry.type === "reload") {
//   sessionStorage.removeItem('kvLoaded');
// }

// // =========================
// // ローディング（トップページのみ）
// // =========================
// const overlay = document.querySelector('.kv-overlay');
// const dark    = document.querySelector('.kv-dark');
// const inner   = document.querySelector('.kv-light-inner');
// const white   = document.querySelector('.kv-light-white');

// if (overlay && dark && inner && white) {

//   // ★ 初回判定
//   const hasLoaded = sessionStorage.getItem('kvLoaded');
//   if (hasLoaded) {
//     overlay.style.display = 'none';
//     dark.style.opacity  = 0;
//     inner.style.opacity = 0;
//     white.style.opacity = 0;
//     return;
//   }

//   sessionStorage.setItem('kvLoaded', 'true');

//   document.body.classList.add('loading');

//   gsap.set(inner, { x:0, y:0, scale:1, opacity:1 });
//   gsap.set(white, { scale:1, opacity:0 });
//   gsap.set(dark,  { opacity:1 });

//   const tl = gsap.timeline({
//     onComplete: () => {
//       document.body.classList.remove('loading');
//       overlay.style.display = 'none';
//     }
//   });





//   const mm = gsap.matchMedia();

// /* =========================
//    SP / TB（〜820px）
// ========================= */
// mm.add("(max-width: 820px)", () => {

//   tl.to({}, {
//     duration: 4,      // 漂う時間（SPは少し短く）
//     ease: "none",
//     onUpdate: function () {

//       const p = this.progress(); // 0 → 1
//      const t = p * Math.PI * 0.9 + Math.PI * 1.75;

//       gsap.set(inner, {
//         x: Math.cos(t) * 28 + "vw",
//         y: Math.sin(t * 2) * 14 + "vh"
//       });
//     }
//   });

// });


// /* =========================
//    PC（821px〜）
// ========================= */
// mm.add("(min-width: 821px)", () => {

// tl.to({}, {
//   duration: 4.5,          
//   ease: "power2.inOut",
//   onUpdate: function () {

//     const p = this.progress(); // 0 → 1
//     const easeFactor = gsap.parseEase("power2.inOut")(p); // pにイージングを適用
//     const t = easeFactor * Math.PI * 1.5 + Math.PI / 7/4; // 回転量 + スタート角

//     const baseX = -20; // スタートX（右の真ん中より少し右寄り）
//     const baseY = 0; // スタートY（少し上）

//     const amplitudeX = 45; // 横に広がる幅
//     const amplitudeY = 25; // 縦の揺れ幅

//     gsap.set(inner, {
//       x: baseX + Math.cos(t) * (1 - p) * amplitudeX + "vw",
//       y: baseY + Math.sin(t * 1.4) * (1 - p) * amplitudeY + "vh"
//     });
//   }
// });

// });


//   // ② オレンジ → 白
// tl.to(inner, {
//   scale: 5,
//   opacity: 0,
//   duration: 1,
//   ease: 'power2.inOut'
// }, '>-0.9'); // 途中から

// tl.to(white, {
//   opacity: 1,
//   scale: 10,
//   duration: 1,
//   ease: 'power2.inOut'
// }, '<'); // 同時

//   // ③ 白フェードアウト
//   tl.to(white, {
//     opacity: 0,
//     duration: 0.6,
//     ease: 'power1.out'
//   });

//   // ④ 暗幕フェードアウト
//   tl.to(dark, {
//     opacity: 0,
//     duration: 0.6
//   }, '<');
// }

// 


// =========================
// ニュース　シングルからアーカイブに戻るとき同じ位置に
// =========================


document.addEventListener('DOMContentLoaded', () => {
  const newsLinks = document.querySelectorAll(
    '.archive-news-list li.news a'
  );

  if (!newsLinks.length) return;

  newsLinks.forEach(link => {
    link.addEventListener('click', () => {
      sessionStorage.setItem('archiveNewsScrollY', window.scrollY);
      sessionStorage.setItem('archiveNewsUrl', window.location.href);
    });
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const backBtn = document.getElementById('js-news-back');
  const backUrl = sessionStorage.getItem('archiveNewsUrl');

  if (!backBtn) return;

  backBtn.addEventListener('click', () => {
    if (backUrl) {
      window.location.href = backUrl;
    } else {
      // 直アクセス時の保険
      window.location.href = '/news/';
    }
  });
});

window.addEventListener('load', () => {
  if (!document.querySelector('.archive-news-list')) return;

  const scrollY = sessionStorage.getItem('archiveNewsScrollY');

  if (scrollY !== null) {
    setTimeout(() => {
      window.scrollTo({
        top: parseInt(scrollY, 10),
        behavior: 'auto'
      });
      sessionStorage.removeItem('archiveNewsScrollY');
      sessionStorage.removeItem('archiveNewsUrl');
    }, 100);
  }
});

// ========================================
// プロフィールページ　釣り針マーククリックで切り替え
// ========================================

document.addEventListener('DOMContentLoaded', () => {
  const btn = document.querySelector('.btn-profile');
  const wrapper = document.querySelector('.profile-wrapper');
  const panels = wrapper.querySelectorAll('.profile-panel');
  const eraser = wrapper.querySelector('.profile-panel.is-front .profile-eraser');

  let isAnimating = false;
  const DURATION = 900; // CSSアニメーションと同じ時間

  // wrapper 高さを前面パネルに合わせる
  function syncWrapperHeight() {
    const front = wrapper.querySelector('.profile-panel.is-front');
    if (!front) return;
    wrapper.style.height = front.scrollHeight + 'px';
  }

  // 初期表示時にも高さ調整
  window.addEventListener('load', syncWrapperHeight);
  window.addEventListener('resize', syncWrapperHeight);

  btn.addEventListener('click', () => {
    if (isAnimating) return;
    isAnimating = true;

    // 再発火のためアニメーションをリセット
    const front = wrapper.querySelector('.profile-panel.is-front');
    const frontEraser = front.querySelector('.profile-eraser');
    frontEraser.style.animation = 'none';
    void frontEraser.offsetWidth; // reflow でリセット
    frontEraser.style.animation = `eraseDown ${DURATION}ms linear forwards`;

    // CSSでアニメーション用クラスも付与
    wrapper.classList.add('is-switching');

    setTimeout(() => {
      // パネル切替
      panels.forEach(panel => {
        panel.classList.toggle('is-front');
        panel.classList.toggle('is-back');
      });

      // 高さを新しい前面に合わせる
      syncWrapperHeight();

      // アニメーションクラス削除
      wrapper.classList.remove('is-switching');
      isAnimating = false;
    }, DURATION);
  });
});

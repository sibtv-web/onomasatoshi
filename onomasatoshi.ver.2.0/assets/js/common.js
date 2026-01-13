document.addEventListener('DOMContentLoaded', function () {

  // =========================
  // ニュースタブ切り替え
  // =========================
  // const tabs = document.querySelectorAll('.news-tabs .news-tags');
  // const items = document.querySelectorAll('.news');

  // tabs.forEach(tab => {
  //   tab.addEventListener('click', () => {
  //     tabs.forEach(t => t.classList.remove('active'));
  //     tab.classList.add('active');

  //     const tag = tab.dataset.tag; // タブのdata-tagを取得

  //     items.forEach(item => {
  //       const itemTags = item.dataset.tags ? item.dataset.tags.split(' ') : [];
  //       item.style.display = (tag === 'all' || itemTags.includes(tag)) ? '' : 'none';
  //     });
  //   });
  // });

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

      // ✅ モーダル表示 + 背景固定
      detailModal.classList.add('active');
      document.body.classList.add('is-modal-open');
    });
  });

  // 閉じる
  const closeModal = () => {
    detailModal.classList.remove('active');
    document.body.classList.remove('is-modal-open');
  };

  closeBtn.addEventListener('click', closeModal);

  detailModal.addEventListener('click', (e) => {
    if (e.target === detailModal) {
      closeModal();
    }
  });
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

//不要かも　<script src="player.js"></script>　//

// =========================
// Instagramシェア用
// =========================


// document.addEventListener('DOMContentLoaded', function () {
//   const instaBtn = document.getElementById('share-instagram');

//   if (!instaBtn) return;

//   instaBtn.addEventListener('click', function () {
//     const url = window.location.href;
//     const title = document.title;

//     // スマホ対応（Web Share API）
//     if (navigator.share) {
//       navigator.share({
//         title: title,
//         url: url
//       });
//     } else {
//       // PC用フォールバック
//       alert('URLをコピーしました。Instagramストーリーで共有してください。');
//       navigator.clipboard.writeText(url);
//     }
//   });
// });

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

document.addEventListener('DOMContentLoaded', () => {
  const flipWrap = document.querySelector('.profile-flip');
  const btn = document.querySelector('.btn-profile');

  let isFishing = false;

  btn.addEventListener('click', () => {
    isFishing = !isFishing;

    flipWrap.classList.toggle('is-flipped', isFishing);

    // ボタン画像切替
    btn.src = isFishing
      ? btn.dataset.fishing
      : btn.dataset.normal;
  });
});



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

    submitBtn.disabled = !(allFilled && agreeCheck.checked);
  }

  // 初期状態
  toggleSubmit();

  // イベント登録
  requiredFields.forEach(field => {
    field.addEventListener('input', toggleSubmit);
  });
  agreeCheck.addEventListener('change', toggleSubmit);
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

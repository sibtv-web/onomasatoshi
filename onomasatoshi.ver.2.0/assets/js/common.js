
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
  // ハンバーガー（×）で開閉
  hamburger.addEventListener('click', e => {
    e.stopPropagation();
    nav.classList.toggle('active');
    hamburger.classList.toggle('active');
  });

  // メニュー内クリックはすべて素通し（遷移させる）
  nav.addEventListener('click', e => {
    e.stopPropagation();
  });
  
}

nav.querySelectorAll('a[href*="#"]').forEach(link => {
  link.addEventListener('click', () => {
    nav.classList.remove('active');
    hamburger.classList.remove('active');
  });
});

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
        detailModal.querySelector('.disc-1').innerHTML = item.dataset.disc1 || '';
        detailModal.querySelector('.disc-2').innerHTML = item.dataset.disc2 || '';
        detailModal.querySelector('.modal-number').innerHTML = item.dataset.number;
        detailModal.querySelector('.modal-price').innerHTML = item.dataset.price;
        // //金額の￥ + 税　表示
        // const price = item.dataset.price;
        // if (price && price !== '') {
        //   const formattedPrice = Number(price).toLocaleString();
        //   detailModal.querySelector('.modal-price').textContent = `／￥${formattedPrice} + 税`;
        // } else {
        //   detailModal.querySelector('.modal-price').textContent = '';
        // }

        //品番と金額（品番が未入力の場合、左に詰める）
        const number = document.querySelector('.modal-number');

        if (number && number.textContent.trim() === '') {
          number.style.display = 'none';
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
        const rawDate = item.dataset.date;
        if (rawDate && rawDate.length === 8) {
          const y = rawDate.slice(0, 4);
          const m = Number(rawDate.slice(4, 6));
          const d = Number(rawDate.slice(6, 8));

          detailModal.querySelector('.modal-date').textContent =
            `${y}.${m}.${d} リリース`;
        } else {
          detailModal.querySelector('.modal-date').textContent = '';
        }
        // リンク（音楽アプリ）
        detailModal.querySelector('.modal-apple').href = item.dataset.apple;
        detailModal.querySelector('.modal-spotify').href = item.dataset.spotify;
        // // リンク（音楽アプリ使用しない）
        // detailModal.querySelector('.modal-line').href = item.dataset.line;
        // detailModal.querySelector('.modal-itunes').href = item.dataset.itunes;
        // detailModal.querySelector('.modal-amazon_music').href = item.dataset.amazonmusic;
        // detailModal.querySelector('.modal-youtube_music').href = item.dataset.youtubemusic;
        // detailModal.querySelector('.modal-awa').href = item.dataset.awa;
        // detailModal.querySelector('.modal-recochoku').href = item.dataset.recochoku;
        
        // リンク（物販）
        detailModal.querySelector('.modal-amazon').href = item.dataset.amazon;
        detailModal.querySelector('.modal-tower').href = item.dataset.tower;
        detailModal.querySelector('.modal-hmv').href = item.dataset.hmv;
        toggleModalLinks(detailModal);
        detailModal.classList.add('active');
        document.body.classList.add('is-modal-open');
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
const songs = detailModal.querySelector('.modal-songs');
if (songs) {
  const disc1HTML = songs.querySelector('.disc-1')?.innerHTML.trim();
  const disc2HTML = songs.querySelector('.disc-2')?.innerHTML.trim();

  songs.style.display =
    (!disc1HTML && !disc2HTML) ? 'none' : '';
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
  if (event.detail.contactFormId === 997) {
    window.location.href = '/qa-thanks';
  }
  if (event.detail.contactFormId === 996) {
    window.location.href = '/contact-thanks/';
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



// =========================
// ニュース　シングルからアーカイブに戻るとき同じ位置に
// =========================
document.addEventListener('DOMContentLoaded', () => {
  const backLink = document.querySelector('.js-back');

  if (!backLink) return;

  backLink.addEventListener('click', (e) => {
    e.preventDefault();

    if (window.history.length > 1) {
      history.back();
    } else {
      window.location.href = '/news/';
    }
  });
});

// ========================================
// プロフィールページ　釣り針マーククリックで切り替え
// ========================================
const panel1 = document.querySelector(".profile-panel.profile-panel--normal");
const panel2 = document.querySelector(".profile-panel.profile-panel--fishing");
let slices;
const btnClick = (el) => {
  const btnFlip = el.querySelector(".btn-profile");
  btnFlip.classList.toggle("active");
  if(window.innerWidth > 750) {
    slices = 18;
  } else {
    slices = 12;
  }
  const target = document.querySelector(".profile-panel.active");
  for (let i = 0; i < slices; i++) {
    const slice = document.createElement('div');
    slice.className = 'close-slice';
    if(window.innerWidth > 750) {
      slice.style.left = `calc(${i} * (100% / 18))`;
      slice.style.width = `calc((100% / 18) + 1%)`;
    } else {
      slice.style.left = `calc(${i} * (100% / 12))`;
      slice.style.width = `calc((100% / 12) + 1%)`;
    }
    // slice.style.left = `${i * 10}%`;
    slice.style.zIndex= "99";
    slice.style.backfaceVisibility= "hidden";
    const clone = target.cloneNode(true);
    clone.style.width = `100vw`;
    if(window.innerWidth > 750) {
      clone.style.transform = `translateX(calc(${i} * (100vw / 18) * -1 ))`;
    } else {
      clone.style.transform = `translateX(calc(${i} * (100vw / 12) * -1 ))`;
    }
    slice.appendChild(clone);
    target.parentNode.appendChild(slice);
  }
  panel1?.classList.toggle("hidden");
  panel2?.classList.toggle("hidden");
  panel1?.classList.toggle("active");
  panel2?.classList.toggle("active");

  document.querySelectorAll('.close-slice').forEach((slice, i) => {
    setTimeout(() => {
      slice.style.clipPath = 'polygon(0 100%, 100% 100%, 100% 100%, 0% 100%)';
    }, i * 100);
  });
  const slicesEl = document.querySelectorAll('.close-slice');
  const lastSlice = slicesEl[slicesEl.length - 1];
  lastSlice.addEventListener('transitionend', () => {
    slicesEl.forEach(slice => slice.remove());
  }, { once: true });
}
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.querySelector('.profile-switcher');
  if (btn){
    btn.addEventListener("click", () => btnClick(btn));
  }
});

// ========================================
// ヘッダーのぼかし（KV上は表示させない）
// ========================================

document.addEventListener('DOMContentLoaded', () => {
  if (!document.body.classList.contains('home')) return;

  const headerTargets = document.querySelectorAll('.header-blur, .header-name');
  const container = document.querySelector('.container');
  const kv = document.querySelector('.kv-mask');

  if (!headerTargets.length || !container || !kv) return;

  const headerHeight =
    window.matchMedia('(max-width: 820px)').matches ? 95 : 70;

  const onScroll = () => {
    const containerTop = container.getBoundingClientRect().top;
    const kvBottom = kv.getBoundingClientRect().bottom;

    // KVが見えている間は表示しない
    if (kvBottom > 0) {
      headerTargets.forEach(el => el.classList.remove('is-active'));
      return;
    }

    // KVが完全に抜けた後
    if (containerTop <= headerHeight) {
      headerTargets.forEach(el => el.classList.add('is-active'));
    } else {
      headerTargets.forEach(el => el.classList.remove('is-active'));
    }
  };

  onScroll();
  window.addEventListener('scroll', onScroll);
});



const hamburger = document.getElementById('hamburger');
const headerIcons = document.querySelectorAll('.js-header-sns-icon');

// 🔑 元のsrcを記憶する
headerIcons.forEach(icon => {
  icon.dataset.originalSrc = icon.getAttribute('src');
});

hamburger.addEventListener('click', () => {
  const isOpen = document.body.classList.toggle('is-menu-open');

  headerIcons.forEach(icon => {
    if (isOpen) {
      // OPEN時 → 白にする
      icon.setAttribute(
        'src',
        icon.dataset.originalSrc.replace('_blk', '')
      );
    } else {
      // CLOSE時 → 元の画像に戻す
      icon.setAttribute('src', icon.dataset.originalSrc);
    }
  });
});

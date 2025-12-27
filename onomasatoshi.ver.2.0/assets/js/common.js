document.addEventListener('DOMContentLoaded', function () {

  // =========================
  // ニュースタブ切り替え
  // =========================
  const tabs = document.querySelectorAll('.news-tabs .tab');
  const items = document.querySelectorAll('.news');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');

      const tag = tab.dataset.tag; // タブのdata-tagを取得

      items.forEach(item => {
        const itemTags = item.dataset.tags ? item.dataset.tags.split(' ') : [];
        item.style.display = (tag === 'all' || itemTags.includes(tag)) ? '' : 'none';
      });
    });
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
  if(detailModal){
    const closeBtn = detailModal.querySelector('.close-btn');

    document.querySelectorAll('.disc-item').forEach(item => {
      item.addEventListener('click', () => {
        detailModal.querySelector('.modal-jacket').src = item.dataset.jacket;
        detailModal.querySelector('.modal-title').textContent = item.dataset.title;
        detailModal.querySelector('.modal-date').textContent = item.dataset.date;
        detailModal.querySelector('.modal-desc').textContent = item.dataset.description;
        detailModal.querySelector('.modal-price').textContent = item.dataset.price;
        detailModal.querySelector('.modal-type').textContent = item.dataset.type;
        detailModal.querySelector('.modal-apple').href = item.dataset.apple;
        detailModal.querySelector('.modal-spotify').href = item.dataset.spotify;
        detailModal.querySelector('.modal-viewmore').href = item.dataset.link;

        detailModal.classList.add('active');
      });
    });

    // 閉じる処理
    closeBtn.addEventListener('click', () => {
      detailModal.classList.remove('active');
    });
    detailModal.addEventListener('click', (e) => {
      if(e.target === detailModal){
        detailModal.classList.remove('active');
      }
    });
  }

  // =========================
  // トップページ用プレイヤーモーダル
  // =========================
  const playerModal = document.querySelector('.player-modal.top-player');
  if(playerModal){
    const embedArea = playerModal.querySelector('.modal-embed');
    const closeBtn = playerModal.querySelector('.close-btn');
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
gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray('.fade-anime').forEach(el => {
  const type = el.dataset.fade;

  let y = 0;
  if (type === 'fade-up'){ y = 100;// 移動距離（どのくらい下から出現するか）

  gsap.fromTo(el,
    { autoAlpha: 0, y: y },
    {
      autoAlpha: 1,
      y: 0,
      duration: 1.2,// 速さ
      ease: 'power2.out',
      scrollTrigger: {
        trigger: el,
        start: 'top 60%',//要素の上部が画面の60%の位置に来たら
      }
    }
  );
  }
  if(type == "fade-up-cont"){
      var targets = el.querySelectorAll(':scope > *');
      gsap.fromTo(targets,{y:"50px",autoAlpha:0},{y:"auto",autoAlpha:1,
        ease:"power2.out",
        duration: 1.5,// 速さ
        stagger:{
            each:0.08
        },
        scrollTrigger:{
            trigger:targets,
            start:'top center+=100'
        }
    })
  }});

//不要かも　<script src="player.js"></script>　//

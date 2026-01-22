// ========================================
// ローディング
// ========================================
const pgURL = location.href;
const pageKeyName = pgURL;
const pageKeyValue = true;
if (!sessionStorage.getItem(pageKeyName)) {
  //sessionStorageにキーと値を追加
  sessionStorage.setItem(pageKeyName,  pageKeyValue);
  // console.log("初めての訪問です");
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
    ease: 'power3.inOut',
    delay: settings.moveDuration,
    onComplete: () => {
      document.documentElement.style.overflow = 'auto';
    }
  });
} else {
  const svg = document.querySelector(".mask-svg");
  svg.style.display = "none";
  document.documentElement.style.overflow = 'auto';
  // console.log("訪問済みです");
}
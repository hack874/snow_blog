var hasMoreContent = true;

window.addEventListener("scroll", async function() {
  var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  var windowHeight = window.innerHeight;
  var fullHeight = document.documentElement.scrollHeight;
  var offset = 100; // 閾値

  // スクロール位置が最後の投稿に達したかどうかを判定する
  if (scrollTop + windowHeight >= fullHeight - offset) {

    // 新しいコンテンツがあるかどうかを確認する
    if (hasMoreContent) {
      var url = "/";
      try {
        var response = await fetch(url);
        if (response.ok) {
          var newContent = await response.text();
          var container = document.querySelector(".container");
          container.insertAdjacentHTML("beforeend", newContent);

          // 新しいコンテンツがなくなったらフラグを変更する
          if (newContent === "") {
            hasMoreContent = false;
          }
        } else {
          console.error("サーバーエラー: " + response.status);
        }
      } catch (error) {
        console.error("ネットワークエラー: " + error.message);
      }
    }
  }
});
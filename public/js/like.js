function like(postId) {
  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    url: `/like/${postId}`,
    type: "POST",
  })
    .done(function (data, status, xhr) {
      console.log(data);
      const img=document.getElementById(`image_${postId}`);　//特定のimageの「id」を取ってきてimgに代入.画像複数ある場合に特定するため
      if(data == 'unliked') //'unliked'は文字
      {
          img.src='../images/love.png';
      }else{
          img.src='../images/heart.png'; //左辺を右辺の画像に上書き.相対パス指定
      }
     
    })
    .fail(function (xhr, status, error) {
      console.log();
    });
}
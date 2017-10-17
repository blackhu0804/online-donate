$(function(){
  var $imgCt = $('.carousel .img-ct')
  var $imgs = $('.carousel .img-ct>li')
  var $preBtn = $('.carousel .pre')
  var $nextBtn = $('.carousel .next')
  var $bullet = $('.carousel .bullet>li')
  var pageIdx = 0;
  var isEnd = false   //防止用户重复点击
  var imgLength = $imgs.length
  var imgWidth = $imgs.width()
  $imgCt.append($imgs.eq(0).clone())
  $imgCt.prepend($imgs.last().clone())
  $imgCt.width((imgLength + 2) * imgWidth) //设定img-ct的宽度，保证并排排列
  $imgCt.css({left: -imgWidth}) //保证看到的是第一张图片不是克隆的图片
  $nextBtn.on('click',function(e){
    e.preventDefault();
    playNext(1)
  })
  $preBtn.on('click',function(e){
    e.preventDefault();
    playPre(1)
  })
  function playNext(len){
    if(isEnd) return;
    
    $imgCt.animate({
      left: '-=' + len * imgWidth
    },function(){
      pageIdx += len
      if(pageIdx === imgLength){
        pageIdx = 0
        $imgCt.css({left: -imgWidth})
      }
      setBullet() 
      isEnd = false;
    })
    isEnd = true;
  }
  function playPre(len){
    $imgCt.animate({
      left: '+=' + len * imgWidth
    },function(){
      pageIdx -= len
      if(pageIdx < 0){
        pageIdx = imgLength - 1 
        $imgCt.css({left: -imgWidth * imgLength})
      }
      setBullet()
      isEnd = false;
    })
    isEnd = true
  }
  function setBullet(){
    $bullet.removeClass('active').eq(pageIdx).addClass('active')
  }
  $bullet.on('click',function(){
    var index = $(this).index()
    if (index > pageIdx) {
      playNext(index - pageIdx)
    } else {
      playPre(pageIdx - index)
    }
  })
  setInterval(function(){
    playNext(1)
  },3000)
})
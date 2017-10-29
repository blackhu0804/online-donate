  <div class="goTop">
    <img src="./img/goTop.gif" alt="">
  </div>
  <div class="footer" >
    <p>&copy;<script>document.write('2016-' + new Date().getFullYear())</script> 微益捐版权所有</p>
	</div>


  <script src="./js/jquery-3.2.1.min.js"></script>
  <script>
    $(function(){
      $(window).scroll(function(){
        var s = $(window).scrollTop();
        if( s > 400){
          $(".goTop").fadeIn(500);
        }else{
          $(".goTop").fadeOut(500);
        };
      })
      
      $('.goTop').click(function(){
        $('html , body').animate({scrollTop: 0},'slow');
      })
    })
  </script>
<?php 
  $page='home'; 
  $kanal='home'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['GUILD'].'inc/datasample.php')?>
<?php require ($_SERVER['GUILD'].'inc/meta.php')?>
<?php require ($_SERVER['GUILD'].'inc/header.php')?>

<style>
  .parallax, .parallax > div,  .parallax > div > div,  .parallax > div > div > div{width:100% !important; height:100vh !important;}
  .parallax{position:relative !important; z-index:calc(var(--max-zindex) - 4000) !important; padding:0 !important; width:100%; overflow:hidden !important; 
  margin:0 !important; margin-top:calc(var(--body-padding) * -1) !important; transition:height 1s !important; clip-path:inset(0px) !important;}
  .parallax .slotiklan:before{width:320px; height:480px; background-color:#212121;}
  .parallax > div{overflow: hidden; margin:0; position:absolute !important; top:0; left:0; clip:rect(auto auto auto auto); padding:0 !important;}
  .parallax > div > div{height:100%; position:fixed !important; top:0; margin:0 auto; background:#000;
  -moz-transform:translateZ(0); -webkit-transform:translateZ(0); -ms-transform:translateZ(0); -o-transform:translateZ(0); transform:translateZ(0);}
  .parallax > div > div > div{height:100vh; position:absolute !important; left:50%; top:0; border:none;
  -moz-transform:translateX(-50%); -webkit-transform:translateX(-50%); -ms-transform:translateX(-50%); -o-transform:translateX(-50%); transform:translateX(-50%);
  display:-webkit-flex; display:-ms-flexbox; display:flex; -webkit-align-content:center; align-content:center; -webkit-align-items:center; 
  -ms-flex-align:center; align-items:center;}
  .parallax > div > div > div > *{margin:0 auto;}
  
  .cover{position:relative; width:100%; height:100vh;}
  .cover img{z-index:1;}
  .cover video{position:absolute; z-index:2; top:50%; left:50%; min-width:100%; min-height:100%; width:auto; height:auto; 
  transform:translateX(-50%) translateY(-50%); filter:blur(1px);}
  .cover:after{content:''; z-index:3; position:absolute; top:0; left:0; width:100%; height:100%; background:url("img/fixdot.png") rgba(31,10,82,0.25);}
  .cover-content{position:absolute; z-index:4; top:0; left:0; width:100%; height:100%; padding:var(--section-space-big);}
  .cover-content > span{max-width:var(--site-container);}
  .cover-title, .cover-subtitle{text-align:center; text-shadow:2px 2px 10px #000000;}
  .cover-title{font-weight:bold; font-size:6vw; line-height:120%; text-transform:uppercase;}
  .cover-subtitle{font-size:2vw; line-height:140%; color:var(--color-link-tertiary);}
  @media screen and (min-width:0px) and (max-width:1023px){
    .cover-title{font-size:36px;}
    .cover-subtitle{font-size:18px; margin-top:var(--section-space-medium);}
  }
  
  @media screen and (min-width:1280px){
    .cover-title{font-size:70px;}
    .cover-subtitle{font-size:23px;}
  }
</style>
<div class="parallax">
  <div>
    <div>
        <div class="cover flex_ori thumb-loading">
          <img alt="img_title" class="lazyload" data-original="img/cover-small.jpg"
          data-srcset="img/cover-small.jpg 568w, img/cover-medium.jpg 1280w, img/cover-large.jpg 1920w" />
          <div class="cover-content content_center">
            <span>
              <h1 class="cover-title">Welcome to LoveBeat</h1>
              <h2 class="cover-subtitle">We are a casual Final Fantasy Online FC for both new and experienced players.</h2>
            </span>
          </div>
        </div>
    </div>
  </div>
</div>
<script>
$(window).on('load',function(){
  $('.cover').append("<video autoplay=\"\" loop muted><source src=\"img/cover.mp4\" type=\"video/mp4\"></video>");
});

$(window).scroll(function(){
  var scroll_location = $(window).scrollTop();
  if(scroll_location >= 0){
    $('header, menu').removeClass("bg-transparent");	
  }
});  
</script>

<div class="site-container">
  <span>
    <div class="main-container main-container-split">
      <div class="column-big">
        <div class="column-big-container">
        
          <section class="base-container">
            tes
          </section>
          
        </div>
      </div>
      
      <?php require ($_SERVER['GUILD'].'inc/sidebar.php')?>
    </div>
  </span>
</div>

<?php require ($_SERVER['GUILD'].'inc/menu-bottom.php')?>
<?php require ($_SERVER['GUILD'].'inc/footer.php')?>
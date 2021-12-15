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
  .cover:after{content:''; z-index:3; position:absolute; top:0; left:0; width:100%; height:100%; background:url("img/fixdot.png") rgba(33,33,33,0.5);}
  .cover-content{position:absolute; z-index:4; top:0; left:0; width:100%; height:100%; padding:var(--section-space-big);}
  .cover-content > span{max-width:var(--site-container);}
  .cover-title, .cover-subtitle{text-align:center; text-shadow:2px 2px 10px #000000;}
  .cover-title{font-weight:bold; font-size:6vw; line-height:120%; text-transform:uppercase; color:var(--color-link-primary);}
  .cover-subtitle{font-size:2vw; line-height:140%; color:var(--color-link-tertiary);}
  .cover-button{margin-top:var(--section-space-medium);}
  .cover-button > a{display:block; line-height:normal;}
  .cover-button-label{text-align:center; margin-bottom:var(--section-space-tiny); text-transform:uppercase; font-weight:600;}
  .svgicon-more{animation:see-more 1s linear infinite alternate; position:relative;}
  @-webkit-keyframes see-more{0%{top:0;}40%{top:10px;}50%{top:5px;}60%{top:10px;}70%{top:5px;}80%{top:10px;}90%{top:10px;}100%{top:0;};}
  @keyframes see-more{0%{top:0;}40%{top:10px;}50%{top:5px;}60%{top:10px;}70%{top:5px;}80%{top:10px;}90%{top:10px;}100%{top:0;};}

  #about{position:absolute; top:calc((var(--body-padding) + var(--section-space-big)) * -1);}
  
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
            <div class="cover-button content_center">
              <a aria-label="Home" title="Home" href="#about">
                <div class="cover-button-label">See More</div>
                <div class="cover-button-icon content_center">
                  <svg class="svgicon svgicon-more" width="16" height="15" viewBox="0 0 16 15"><path d="M13.37 8.39003L7.99997 12.71L2.63997 8.23003C2.53885 8.14598 2.42217 8.08268 2.29658 8.04372C2.171 8.00477 2.03897 7.99094 1.90804 8.00301C1.77711 8.01508 1.64984 8.05282 1.5335 8.11408C1.41715 8.17534 1.31401 8.25891 1.22997 8.36003C1.14592 8.46115 1.08262 8.57783 1.04366 8.70341C1.00471 8.829 0.990875 8.96102 1.00295 9.09195C1.01502 9.22288 1.05276 9.35015 1.11402 9.4665C1.17528 9.58284 1.25885 9.68598 1.35997 9.77003L7.35997 14.77C7.5389 14.9171 7.76334 14.9975 7.99497 14.9975C8.22659 14.9975 8.45103 14.9171 8.62997 14.77L14.63 9.94003C14.7327 9.85751 14.8181 9.75549 14.8813 9.63986C14.9444 9.52422 14.9841 9.39724 14.9981 9.26621C15.012 9.13518 14.9999 9.00269 14.9625 8.87635C14.9251 8.75001 14.863 8.63232 14.78 8.53003C14.6967 8.42804 14.5942 8.34349 14.4782 8.28123C14.3622 8.21897 14.235 8.18022 14.104 8.16721C13.973 8.15421 13.8408 8.16719 13.7148 8.20543C13.5888 8.24367 13.4716 8.3064 13.37 8.39003V8.39003Z"/><path d="M7.35997 7.77003C7.5389 7.91711 7.76335 7.99752 7.99497 7.99752C8.2266 7.99752 8.45104 7.91711 8.62997 7.77003L14.63 2.94003C14.7327 2.85751 14.8181 2.7555 14.8813 2.63986C14.9444 2.52422 14.9841 2.39724 14.9981 2.26621C15.012 2.13519 14.9999 2.00269 14.9625 1.87635C14.9251 1.75002 14.863 1.63232 14.78 1.53003C14.6974 1.42731 14.5954 1.3419 14.4798 1.27873C14.3642 1.21555 14.2372 1.17586 14.1062 1.16192C13.9751 1.14798 13.8426 1.16007 13.7163 1.1975C13.59 1.23493 13.4723 1.29697 13.37 1.38003L7.99997 5.71003L2.63997 1.23003C2.43575 1.06029 2.17247 0.978631 1.90805 1.00301C1.64362 1.02739 1.39971 1.15581 1.22997 1.36003C1.06023 1.56425 0.97857 1.82753 1.00295 2.09196C1.02733 2.35638 1.15575 2.60029 1.35997 2.77003L7.35997 7.77003Z"/></svg>

                </div>
              </a>
            </div>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(window).on('load',function(){
  $('.cover').append("<video autoplay=\"\" loop muted><source src=\"img/trailer.mp4\" type=\"video/mp4\"></video>");
});

$(window).scroll(function(){
  var scroll_location = $(window).scrollTop();
  if(scroll_location >= 1){
    $('header, menu').removeClass("bg-transparent");	
  }
  else{
    $('header, menu').addClass("bg-transparent");
  }
});  
</script>
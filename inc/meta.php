<?php $anticache = date ('s'.'i'.'H'.'d'.'m'.'Y') ?>
<head>
<meta charset="utf-8">			
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<link rel="preconnect" href="https://www.ov4rz.com"> <!-- ganti href preconnect dengan link asset live (hapus comment ini di production) -->
<link rel="dns-prefetch" href="https://www.ov4rz.com" /> <!-- ganti href dns-prefetch dengan link asset live (hapus comment ini di production) -->
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com" />
<title>LoveBeat</title>
<link href="img/favicon.ico?<?php echo $anticache; ?>" rel="icon" type="image/ico" />
<link rel="preload" href="fonts/montserrat/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/montserrat/JTURjIg1_i6t8kCHKm45_bZF3gnD_g.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/montserrat/JTURjIg1_i6t8kCHKm45_c5H3gnD_g.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/rancak.css?<?php echo $anticache; ?>" as="style">
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
<style>
@font-face{font-family:Montserrat;font-style:normal;font-weight:400;font-display:swap;src:local('Montserrat Regular'),local('Montserrat-Regular'),url(fonts/montserrat/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;font-display:swap;src:local('Montserrat SemiBold'),local('Montserrat-SemiBold'),url(fonts/montserrat/JTURjIg1_i6t8kCHKm45_bZF3gnD_g.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:Montserrat;font-style:normal;font-weight:800;font-display:swap;src:local('Montserrat ExtraBold'),local('Montserrat-ExtraBold'),url(fonts/montserrat/JTURjIg1_i6t8kCHKm45_c5H3gnD_g.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../vivanetworks/global-js/jquery.js"><\/script>');</script>
<script async>
$("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
  $("script").each(function(){
    var get_script = $(this).attr("rancak-hold");
    $(this).attr('src', get_script);
  })
});
</script>
<link rel="stylesheet" type="text/css" href="css/rancak.css?<?php echo $anticache; ?>"/>
<link rel="stylesheet" type="text/css" href="css/rancak-desktop.css?<?php echo $anticache; ?>" media="(min-width:1024px)">
</head>
<body>
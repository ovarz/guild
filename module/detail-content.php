<main class="main-content"> 
  <section class="base-container lead-article">
    <?php $lai_lazyload='no'; require ($_SERVER['GUILD'].'module/lead-article-media.php')?>
    
    <div class="lead-article-info">
      <h1 class="lai-title">
        <?php if($kanal_link == 'korea') { ?>YG Ent Rilis Kebijakan Baru, BLACKPINK Bakal Tolak Hadiah dari Fans<?php } ?>
        <?php if($kanal_link == 'hangout') { ?>Martin Garrix World Tour 2021<?php } ?>
        <?php if($kanal_link == 'hangout/artist.php') { ?>Martin Garrix<?php } ?>
      </h1>
      <?php require ($_SERVER['GUILD'].'iklan/iklan-top-mobile.php')?>
      <?php if($kanal_link == 'hangout') { ?>
        <div class="lai-eventdate">00 Januari 0000 - 00 Februari 0000</div>
      <?php } ?>
      <?php if($kanal_link == 'hangout' || $kanal_link == 'hangout/artist.php') { ?>
        <div class="lai-location"><?php echo $random_location[array_rand($random_location)]; ?></div>
      <?php } ?>
      <div class="lai-misc">
        <a aria-label="Link Title" title="Link Title" class="lai-cate" href="<?php echo $kanal_link; ?>/"><?php echo $kanal; ?></a>
        <div class="lai-date">Senin, 00 Januari 0000 - 00:00 WIB</div>
      </div>
      <?php if($kanal_link == 'korea') { ?>
        <div class="lai-author">
          <span>Oleh :</span>
          <ul>
            <li><a aria-label="Link Title" title="Link Title" class="lai-author-name" href="author/">Rhou Jya Lee</a>, </li> 
            <li><a aria-label="Link Title" title="Link Title" class="lai-author-name" href="author/">Marr Juo Kye</a>, </li> 
            <li><a aria-label="Link Title" title="Link Title" class="lai-author-name" href="author/">Pay Joe</a></li>
          </ul>
        </div>
      <?php } ?>
    </div>
  </section>
  
  
  
  <section class="base-container content-article">
    <div class="share-box">
      <div class="share-box-label content_center"><span>Share :</span></div>
      <?php $float_share='no'; require ($_SERVER['GUILD'].'module/share-list.php')?>
    </div>
    
    <div class="content-article-detail">
      <p><b>IntipSeleb</b> – Pada 12 Oktober, YG Entertainment telah mengumumkan bahwa <a aria-label="Link Title" title="Link Title" href="topik/">BLACKPINK</a> tidak akan lagi menerima hadiah dari penggemar. Hal ini, dinyatakan YG melalui pernyataan tertulis yang dibagikan kepada seluruh media. </p>
      <p>Jika, para penggemar tetap mengirimkan hadiah, semua hadiah akan dibuang. Berikut saran YG untuk penggemar, dalam menyambut dan memeriahkan hari bahagia para member BLACKPINK. Yuk, langsung cek di bawah ini!</p>
      <?php if($kanal_link == 'korea') { ?>
      <h2>Pernyataan YG Entertainment</h2>
      <?php $lai_lazyload='yes'; require ($_SERVER['GUILD'].'module/lead-article-media.php')?>
      <p>Pernyataan tertulis mengenai penolakan hadiah dari YG, dilakukan oleh manajer yang bertanggung jawab atas dukungan penggemar BLACKPINK.</p>
      <p>Surat pernyataan tertulis itu, diawali dengan ucapan terima kasih atas respon penggemar saat merayakan ulang tahun kelima debut BLACKPINK.</p>
      <p>Sang <strong>manajer</strong> juga mengungkit, bahwa BLACKPINK telah merima banyak hadiah setiap tahunnya. Dengan demikian, manajer mengungkapkan bahwa mereka tidak akan lagi menerima hadiah dari penggemar.</p>
      <p><em>"Kami dengan hormat tidak akan lagi menerima dukungan penggemar atau hadiah yang disiapkan penggemar untuk merayakan acara-acara khusus BLACKPINK, seperti peringatan (ulang tahun debut grup, peringatan debut solo, atau ulang tahun), siaran (acara musik, acara radio, atau acara variety), atau konser (makanan ringan, karangan bunga perayaan)"</em> ungkap manajer BLACKPINK yang dilansir melalui Naver pada Rabu, (13/10/2021).</p>
      
      <h3>Saran YG dalam merayakan hari bahagia member BLACKPINK</h3>
      <?php $lai_lazyload='yes'; require ($_SERVER['GUILD'].'module/lead-article-media.php')?>
      <p>Dalam pernyataan itu, sang menajer memberikan saran untuk penggemar dalam memeriahkan hari jadi atau hari spesial para member BLACKPINK. Selain memberikan saran, YG juga memperingatkan bahwa setiap penggemar yang mengirimkan hadiah, akan langsung dibuang.</p>
      <p><i>"Kami akan berterima kasih jika Anda memberikan hadiah dan dukungan ke tempat-tempat yang lebih membutuhkannya."</i> ungkap sang manajer BLACKPINK.</p>
      <p><em>"Selain surat penggemar, harap diingat bahwa hadiah yang dikirimkan atau paket yang dikirimkan akan dikembalikan atau dibuang. Kami meminta kerja sama dan pengertian penggemar."</em> tulis manajer BLACKPINK.</p>
      <p>Penolakan hadiah dari BLINK (fandom BLACKPINK), akan diterapkan mulai 12 Oktober 2021.</p>
      <p>Sementara itu, BLACKPINK telah berhasil memecahkan meraih popularitas dan menjadi girl group KPop yang memiliki banyak merima penghargaan di berbagai ajang musik internasional. Bukan hanya itu, para seluruh member BLACKPINK juga sangat berharga bagi brand fashion internasional. (jra)</p>
      <?php } ?>
    </div>
    
    <div class="share-box">
      <div class="share-box-label content_center"><span>Share :</span></div>
      <?php $float_share='no'; require ($_SERVER['GUILD'].'module/share-list.php')?>
    </div>
    
    <?php if($kanal_link == 'korea') { ?>
      <?php require ($_SERVER['GUILD'].'module/pagination.php')?>
    <?php } ?>
  </section>
      
      
      
  <?php if($kanal == 'hangout') { ?>    
  <section class="base-container event-card">
    <style>
      <?php require ($_SERVER['GUILD'].'css/hangout-card.css')?>
      <?php require ($_SERVER['GUILD'].'css/hangout-page.css')?>
    </style>
    <div class="section-title">
      <div class="section-title-label">
        Daftar
        <?php if($kanal_link == 'hangout') { ?>Artis<?php } ?>
        <?php if($kanal_link == 'hangout/artist.php') { ?>Event<?php } ?>
      </div>
    </div>
    <div class="hangout-card-container">
      <?php for ($i=1; $i <= 3 ; $i++) { ?>
        <?php if($kanal_link == 'hangout') { ?><?php $hangout_type='artist'; require ($_SERVER['GUILD'].'module/hangout-card.php')?><?php } ?>
        <?php if($kanal_link == 'hangout/artist.php') { ?><?php $hangout_type='event'; require ($_SERVER['GUILD'].'module/hangout-card.php')?><?php } ?>
      <?php } ?>
    </div>
  </section>
  <?php } ?>
      
      
      
  <section class="base-container topic-list">
    <div class="section-title">
      <div class="section-title-label">Topik Terkait</div>
    </div>
    <?php require ($_SERVER['GUILD'].'module/topic-list.php')?>
  </section>
</main>
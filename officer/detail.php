<?php 
  $page='detail'; 
  $channel='officer'; 
  $login='no'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['GUILD'].'inc/datasample.php')?>
<?php require ($_SERVER['GUILD'].'inc/meta.php')?>
<?php require ($_SERVER['GUILD'].'inc/header.php')?>

<div class="site-container">
  <span>
    <div class="main-container main-container-split">
      <div class="column-big">
        <div class="column-big-container">
        
          <section class="base-container detail-character">
            <div class="detail-character-thumb">
              <div class="dct-frame flex_ori thumb-loading">
                <img alt="img_title" class="lazyload" data-original="https://img2.finalfantasyxiv.com/f/81f3575db9d645095353c5a958e0936a_7b33d33ae3ecb996f778a5f67a6a0af6fl0_640x873.jpg?1641568260&_ga=2.88219163.1279051496.1641567462-1488581814.1639649965">
              </div>
            </div>
            <div class="detail-character-info">
              <h2 class="dci-title">The Heart's Beat</h2>
              <h1 class="dci-name">Tifanna Lockheart</h1>
              <h3 class="dci-world">Diabolos (Crystal)</h3>
              <div class="dci-date">00 January 0000</div>
              <div class="dci-level">
                <div class="dci-level-number content_center">
                  <span>Level&nbsp;90</span>
                </div>
                <div class="dci-level-icon flex_ori content_center">
                  <img alt="img_title" class="lazyload" data-original="https://img.finalfantasyxiv.com/lds/h/7/WdFey0jyHn9Nnt1Qnm-J3yTg5s.png">
                </div>
                <div class="dci-level-label flex_ori content_center">
                  <img alt="img_title" class="lazyload" data-original="https://img.finalfantasyxiv.com/lds/h/N/r_T2Y5aKI0A8RytpzhdBBLtRdE.png">
                </div>
              </div>
              <div class="dci-other">
               <ul class="dci-more">
                  <li class="dci-more-label">Race / Clan</li>
                  <li class="dci-more-data">Viera / Veena</li>
                </ul>
                <ul class="dci-more">
                  <li class="dci-more-label">Guardian</li>
                  <li class="dci-more-data">Menphina, the Lover</li>
                </ul>
                <ul class="dci-more">
                  <li class="dci-more-label">Grand Company</li>
                  <li class="dci-more-data">Order of the Twin Adder / Second Serpent Lieutenant</li>
                </ul>
                <ul class="dci-more">
                  <li class="dci-more-label">Free Company</li>
                  <li class="dci-more-data">LoveBeat</li>
                </ul>
                <ul class="dci-more">
                  <li class="dci-more-label">Minions</li>
                  <li class="dci-more-data">00 / 0000 [00%]</li>
                </ul>
                <ul class="dci-more">
                  <li class="dci-more-label">Mounts</li>
                  <li class="dci-more-data">00 / 0000 [00%]</li>
                </ul>
                <ul class="dci-more">
                  <li class="dci-more-label">Achievement</li>
                  <li class="dci-more-data">00 / 0000 [00%]</li>
                </ul>
              </div>
            </div>
          </section>
          
          
        
          <section class="base-container detail-content">
            <main>
              <p><?php echo $random_summary[array_rand($random_summary)]; ?></p>
            </main>
            <?php require ($_SERVER['GUILD'].'module/tag-list.php')?>
          </section>
        
        
        
          <section class="base-container officers">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">Other <?php echo $channel; ?></div>
            </div>
            <div class="officers-list">
              <?php for ($i=1; $i <= 4 ; $i++) { ?>
                <?php $box_type='card'; require ($_SERVER['GUILD'].'module/officers-list.php')?>
              <?php } ?>
            </div>
          </section>
          
        </div>
      </div>
      
      <?php require ($_SERVER['GUILD'].'inc/sidebar.php')?>
    </div>
  </span>
</div>

<?php require ($_SERVER['GUILD'].'inc/menu-bottom.php')?>
<?php require ($_SERVER['GUILD'].'inc/footer.php')?>
  <div class="column-small">
    <div class="column-small-container">
    
      <section class="base-container membership-application">
        <div class="section-title">
          <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
          <div class="section-title-label">Join Us</div>
        </div>
        <div class="membership-application-box">
          <div class="map-row">
            <input class="map-field" type="text" placeholder="Character Name">
          </div>
          <div class="map-row">
            <input class="map-field" type="text" placeholder="Email Address">
          </div>
          <div class="map-row">
            <textarea class="map-field" placeholder="Tell us a little about yourself and why you would like to join!"></textarea>
          </div>
          <div class="map-row">
            <button class="map-btn btn">Submit</button>
          </div>
        </div>
      </section>
      
      
    
      <section class="base-container live-chat">
        <div class="section-title">
          <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
          <div class="section-title-label">Live Chat</div>
        </div>
        <iframe style="width:100%; height:480px; margin-top:0px;" width="300" height="480" class="lazyload" data-original="https://www.youtube.com/live_chat?v=FaXe7LL5VWU&amp;embed_domain=www.ov4rz.com&dark_theme=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      </section>
      
      
    
      <section class="base-container polling">
        <div class="section-title">
          <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
          <div class="section-title-label">Polling</div>
        </div>
        
        <link rel="stylesheet" type="text/css" href="css/polling.css?<?php echo $anticache; ?>"/>
        
        <div class="polling-content">
          <h1 class="polling-title">Ketika anda makan bubur, anda termasuk tim mana?</h1>
          <ul class="polling-choice">
            <li class="polling-choice-list">
              <input class="pcl-real" name="choice" type="radio">
              <div class="pcl-dummy">
                <div class="pcl-button"></div>
                <div class="pcl-name content_center"><span>Bubur tidak diaduk</span></div>
              </div>
            </li>
            <li class="polling-choice-list">
              <input class="pcl-real" name="choice" type="radio">
              <div class="pcl-dummy">
                <div class="pcl-button"></div>
                <div class="pcl-name content_center"><span>Bubur diaduk</span></div>
              </div>
            </li>
            <li class="polling-choice-list">
              <input class="pcl-real" name="choice" type="radio">
              <div class="pcl-dummy">
                <div class="pcl-button"></div>
                <div class="pcl-name content_center"><span>Bubur dipendam</span></div>
              </div>
            </li>
            <li class="polling-choice-list">
              <input class="pcl-real" name="choice" type="radio">
              <div class="pcl-dummy">
                <div class="pcl-button"></div>
                <div class="pcl-name content_center"><span>Bukan ketiganya (Anti Mainstream)</span></div>
              </div>
            </li>
          </ul>
          <button class="btn">Submit</button>
        </div>
      </section>
      
      
    
      <section class="base-container our-home">
        <div class="section-title">
          <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
          <div class="section-title-label">Our Home</div>
        </div>
        <div class="our-home-container">
          <ul class="ohc-row">
            <?php require ($_SERVER['GUILD'].'module/route-map.php')?>
            <li class="ohc-right">
              <span>Diabolos</span>
            </li>
          </ul>
          <ul class="ohc-row">
            <?php require ($_SERVER['GUILD'].'module/route-map.php')?>
            <li class="ohc-right">
              <span>Shirogane</span>
            </li>
          </ul>
          <ul class="ohc-row">
            <?php require ($_SERVER['GUILD'].'module/route-map.php')?>
            <li class="ohc-right">
              <span>Ward 19</span>
            </li>
          </ul>
          <ul class="ohc-row ohc-destination">
            <?php require ($_SERVER['GUILD'].'module/route-map.php')?>
            <li class="ohc-right">
              <span>
                <b>Plot 30</b>
                <div class="home-image flex_ori thumb-loading">
                  <img alt="img_title" class="lazyload" data-original="img/our-home.jpg" />
                </div>
              </span>
            </li>
          </ul>
        </div>
      </section>

    </div>
  </div>
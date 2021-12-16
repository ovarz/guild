  <div class="column-small">
    <div class="column-small-container">
    
      <section class="base-container event">
        <div class="section-title">
          <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
          <div class="section-title-label">Next Event</div>
        </div>
        <div class="event-list">
          <?php $box_type='card'; require ($_SERVER['GUILD'].'module/event-list.php')?>
        </div>
        <div class="see-more">
          <a aria-label="See More" title="See More" class="see-more-link" href="event/">
            <span>More Event</span>
            <svg class="svgicon svgicon-see-more" width="13" height="12" viewBox="0 0 13 12"><path d="M5.29602 1.71004L9.62102 6.00004L5.29602 10.29L6.70402 11.71L12.461 6.00004L6.70402 0.290039L5.29602 1.71004Z"/><path d="M1.70402 0.290039L0.296021 1.71004L4.62102 6.00004L0.296021 10.29L1.70402 11.71L7.46102 6.00004L1.70402 0.290039Z"/></svg>
          </a>
        </div>
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
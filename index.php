<?php 
  $page='home'; 
  $kanal='home'; 
  $login='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['GUILD'].'inc/datasample.php')?>
<?php require ($_SERVER['GUILD'].'inc/meta.php')?>
<?php require ($_SERVER['GUILD'].'inc/header.php')?>

<?php require ($_SERVER['GUILD'].'module/cover.php')?>

<div class="site-container">
  <span>
    <div class="main-container main-container-split">
      <div class="column-big">
        <div class="column-big-container">
        
          <section class="base-container about">
            <div id="about"></div>
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">What can you expect?</div>
            </div>
            <ul class="about-list">
              <li>
                <svg class="svgicon svgicon-check" width="18" height="14" viewBox="0 0 18 14"><path d="M14.8594 0.446348C15.1635 0.156893 15.5681 -0.00312984 15.9879 4.6394e-05C16.4076 0.00322263 16.8098 0.16935 17.1094 0.463373C17.409 0.757395 17.5827 1.15632 17.5938 1.57596C17.6049 1.9956 17.4525 2.40315 17.1689 2.71259L8.55713 13.4826C8.40905 13.6421 8.23033 13.7701 8.03165 13.859C7.83297 13.9478 7.61842 13.9957 7.40081 13.9997C7.18321 14.0038 6.96703 13.9639 6.7652 13.8824C6.56337 13.801 6.38003 13.6797 6.22614 13.5258L0.515211 7.81487C0.35617 7.66668 0.228609 7.48797 0.140135 7.2894C0.0516606 7.09084 0.0040868 6.87649 0.000251919 6.65914C-0.00358296 6.44179 0.0363998 6.22589 0.117814 6.02433C0.199228 5.82277 0.320407 5.63967 0.47412 5.48596C0.627833 5.33224 0.810932 5.21107 1.01249 5.12965C1.21406 5.04824 1.42995 5.00825 1.6473 5.01209C1.86465 5.01592 2.079 5.0635 2.27757 5.15197C2.47613 5.24045 2.65484 5.36801 2.80304 5.52705L7.32257 10.0444L14.8184 0.493832C14.8319 0.477215 14.8463 0.461362 14.8616 0.446348H14.8594Z"/></svg>
                <span>Lively FC Discord</span>
              </li>
              <li>
                <svg class="svgicon svgicon-check" width="18" height="14" viewBox="0 0 18 14"><path d="M14.8594 0.446348C15.1635 0.156893 15.5681 -0.00312984 15.9879 4.6394e-05C16.4076 0.00322263 16.8098 0.16935 17.1094 0.463373C17.409 0.757395 17.5827 1.15632 17.5938 1.57596C17.6049 1.9956 17.4525 2.40315 17.1689 2.71259L8.55713 13.4826C8.40905 13.6421 8.23033 13.7701 8.03165 13.859C7.83297 13.9478 7.61842 13.9957 7.40081 13.9997C7.18321 14.0038 6.96703 13.9639 6.7652 13.8824C6.56337 13.801 6.38003 13.6797 6.22614 13.5258L0.515211 7.81487C0.35617 7.66668 0.228609 7.48797 0.140135 7.2894C0.0516606 7.09084 0.0040868 6.87649 0.000251919 6.65914C-0.00358296 6.44179 0.0363998 6.22589 0.117814 6.02433C0.199228 5.82277 0.320407 5.63967 0.47412 5.48596C0.627833 5.33224 0.810932 5.21107 1.01249 5.12965C1.21406 5.04824 1.42995 5.00825 1.6473 5.01209C1.86465 5.01592 2.079 5.0635 2.27757 5.15197C2.47613 5.24045 2.65484 5.36801 2.80304 5.52705L7.32257 10.0444L14.8184 0.493832C14.8319 0.477215 14.8463 0.461362 14.8616 0.446348H14.8594Z"/></svg>
                <span>Events and Giveaways</span>
              </li>
              <li>
                <svg class="svgicon svgicon-check" width="18" height="14" viewBox="0 0 18 14"><path d="M14.8594 0.446348C15.1635 0.156893 15.5681 -0.00312984 15.9879 4.6394e-05C16.4076 0.00322263 16.8098 0.16935 17.1094 0.463373C17.409 0.757395 17.5827 1.15632 17.5938 1.57596C17.6049 1.9956 17.4525 2.40315 17.1689 2.71259L8.55713 13.4826C8.40905 13.6421 8.23033 13.7701 8.03165 13.859C7.83297 13.9478 7.61842 13.9957 7.40081 13.9997C7.18321 14.0038 6.96703 13.9639 6.7652 13.8824C6.56337 13.801 6.38003 13.6797 6.22614 13.5258L0.515211 7.81487C0.35617 7.66668 0.228609 7.48797 0.140135 7.2894C0.0516606 7.09084 0.0040868 6.87649 0.000251919 6.65914C-0.00358296 6.44179 0.0363998 6.22589 0.117814 6.02433C0.199228 5.82277 0.320407 5.63967 0.47412 5.48596C0.627833 5.33224 0.810932 5.21107 1.01249 5.12965C1.21406 5.04824 1.42995 5.00825 1.6473 5.01209C1.86465 5.01592 2.079 5.0635 2.27757 5.15197C2.47613 5.24045 2.65484 5.36801 2.80304 5.52705L7.32257 10.0444L14.8184 0.493832C14.8319 0.477215 14.8463 0.461362 14.8616 0.446348H14.8594Z"/></svg>
                <span>Dailies, Dungeons, and Raids</span>
              </li>
              <li>
                <svg class="svgicon svgicon-check" width="18" height="14" viewBox="0 0 18 14"><path d="M14.8594 0.446348C15.1635 0.156893 15.5681 -0.00312984 15.9879 4.6394e-05C16.4076 0.00322263 16.8098 0.16935 17.1094 0.463373C17.409 0.757395 17.5827 1.15632 17.5938 1.57596C17.6049 1.9956 17.4525 2.40315 17.1689 2.71259L8.55713 13.4826C8.40905 13.6421 8.23033 13.7701 8.03165 13.859C7.83297 13.9478 7.61842 13.9957 7.40081 13.9997C7.18321 14.0038 6.96703 13.9639 6.7652 13.8824C6.56337 13.801 6.38003 13.6797 6.22614 13.5258L0.515211 7.81487C0.35617 7.66668 0.228609 7.48797 0.140135 7.2894C0.0516606 7.09084 0.0040868 6.87649 0.000251919 6.65914C-0.00358296 6.44179 0.0363998 6.22589 0.117814 6.02433C0.199228 5.82277 0.320407 5.63967 0.47412 5.48596C0.627833 5.33224 0.810932 5.21107 1.01249 5.12965C1.21406 5.04824 1.42995 5.00825 1.6473 5.01209C1.86465 5.01592 2.079 5.0635 2.27757 5.15197C2.47613 5.24045 2.65484 5.36801 2.80304 5.52705L7.32257 10.0444L14.8184 0.493832C14.8319 0.477215 14.8463 0.461362 14.8616 0.446348H14.8594Z"/></svg>
                <span>Helpful and Friendly Members</span>
              </li>
              <li>
                <svg class="svgicon svgicon-check" width="18" height="14" viewBox="0 0 18 14"><path d="M14.8594 0.446348C15.1635 0.156893 15.5681 -0.00312984 15.9879 4.6394e-05C16.4076 0.00322263 16.8098 0.16935 17.1094 0.463373C17.409 0.757395 17.5827 1.15632 17.5938 1.57596C17.6049 1.9956 17.4525 2.40315 17.1689 2.71259L8.55713 13.4826C8.40905 13.6421 8.23033 13.7701 8.03165 13.859C7.83297 13.9478 7.61842 13.9957 7.40081 13.9997C7.18321 14.0038 6.96703 13.9639 6.7652 13.8824C6.56337 13.801 6.38003 13.6797 6.22614 13.5258L0.515211 7.81487C0.35617 7.66668 0.228609 7.48797 0.140135 7.2894C0.0516606 7.09084 0.0040868 6.87649 0.000251919 6.65914C-0.00358296 6.44179 0.0363998 6.22589 0.117814 6.02433C0.199228 5.82277 0.320407 5.63967 0.47412 5.48596C0.627833 5.33224 0.810932 5.21107 1.01249 5.12965C1.21406 5.04824 1.42995 5.00825 1.6473 5.01209C1.86465 5.01592 2.079 5.0635 2.27757 5.15197C2.47613 5.24045 2.65484 5.36801 2.80304 5.52705L7.32257 10.0444L14.8184 0.493832C14.8319 0.477215 14.8463 0.461362 14.8616 0.446348H14.8594Z"/></svg>
                <span>Professionally-designed FC house</span>
              </li>
              <li>
                <svg class="svgicon svgicon-check" width="18" height="14" viewBox="0 0 18 14"><path d="M14.8594 0.446348C15.1635 0.156893 15.5681 -0.00312984 15.9879 4.6394e-05C16.4076 0.00322263 16.8098 0.16935 17.1094 0.463373C17.409 0.757395 17.5827 1.15632 17.5938 1.57596C17.6049 1.9956 17.4525 2.40315 17.1689 2.71259L8.55713 13.4826C8.40905 13.6421 8.23033 13.7701 8.03165 13.859C7.83297 13.9478 7.61842 13.9957 7.40081 13.9997C7.18321 14.0038 6.96703 13.9639 6.7652 13.8824C6.56337 13.801 6.38003 13.6797 6.22614 13.5258L0.515211 7.81487C0.35617 7.66668 0.228609 7.48797 0.140135 7.2894C0.0516606 7.09084 0.0040868 6.87649 0.000251919 6.65914C-0.00358296 6.44179 0.0363998 6.22589 0.117814 6.02433C0.199228 5.82277 0.320407 5.63967 0.47412 5.48596C0.627833 5.33224 0.810932 5.21107 1.01249 5.12965C1.21406 5.04824 1.42995 5.00825 1.6473 5.01209C1.86465 5.01592 2.079 5.0635 2.27757 5.15197C2.47613 5.24045 2.65484 5.36801 2.80304 5.52705L7.32257 10.0444L14.8184 0.493832C14.8319 0.477215 14.8463 0.461362 14.8616 0.446348H14.8594Z"/></svg>
                <span>FFXIV News and Updates</span>
              </li>
              <li>
                <svg class="svgicon svgicon-check" width="18" height="14" viewBox="0 0 18 14"><path d="M14.8594 0.446348C15.1635 0.156893 15.5681 -0.00312984 15.9879 4.6394e-05C16.4076 0.00322263 16.8098 0.16935 17.1094 0.463373C17.409 0.757395 17.5827 1.15632 17.5938 1.57596C17.6049 1.9956 17.4525 2.40315 17.1689 2.71259L8.55713 13.4826C8.40905 13.6421 8.23033 13.7701 8.03165 13.859C7.83297 13.9478 7.61842 13.9957 7.40081 13.9997C7.18321 14.0038 6.96703 13.9639 6.7652 13.8824C6.56337 13.801 6.38003 13.6797 6.22614 13.5258L0.515211 7.81487C0.35617 7.66668 0.228609 7.48797 0.140135 7.2894C0.0516606 7.09084 0.0040868 6.87649 0.000251919 6.65914C-0.00358296 6.44179 0.0363998 6.22589 0.117814 6.02433C0.199228 5.82277 0.320407 5.63967 0.47412 5.48596C0.627833 5.33224 0.810932 5.21107 1.01249 5.12965C1.21406 5.04824 1.42995 5.00825 1.6473 5.01209C1.86465 5.01592 2.079 5.0635 2.27757 5.15197C2.47613 5.24045 2.65484 5.36801 2.80304 5.52705L7.32257 10.0444L14.8184 0.493832C14.8319 0.477215 14.8463 0.461362 14.8616 0.446348H14.8594Z"/></svg>
                <span>Live Streaming</span>
              </li>
              <li>
                <svg class="svgicon svgicon-check" width="18" height="14" viewBox="0 0 18 14"><path d="M14.8594 0.446348C15.1635 0.156893 15.5681 -0.00312984 15.9879 4.6394e-05C16.4076 0.00322263 16.8098 0.16935 17.1094 0.463373C17.409 0.757395 17.5827 1.15632 17.5938 1.57596C17.6049 1.9956 17.4525 2.40315 17.1689 2.71259L8.55713 13.4826C8.40905 13.6421 8.23033 13.7701 8.03165 13.859C7.83297 13.9478 7.61842 13.9957 7.40081 13.9997C7.18321 14.0038 6.96703 13.9639 6.7652 13.8824C6.56337 13.801 6.38003 13.6797 6.22614 13.5258L0.515211 7.81487C0.35617 7.66668 0.228609 7.48797 0.140135 7.2894C0.0516606 7.09084 0.0040868 6.87649 0.000251919 6.65914C-0.00358296 6.44179 0.0363998 6.22589 0.117814 6.02433C0.199228 5.82277 0.320407 5.63967 0.47412 5.48596C0.627833 5.33224 0.810932 5.21107 1.01249 5.12965C1.21406 5.04824 1.42995 5.00825 1.6473 5.01209C1.86465 5.01592 2.079 5.0635 2.27757 5.15197C2.47613 5.24045 2.65484 5.36801 2.80304 5.52705L7.32257 10.0444L14.8184 0.493832C14.8319 0.477215 14.8463 0.461362 14.8616 0.446348H14.8594Z"/></svg>
                <span>...and more!</span>
              </li>
            </ul>
          </section>
        
        
        
          <section class="base-container news">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">News</div>
            </div>
            <div class="news-list">
              <?php for ($i=1; $i <= 5 ; $i++) { ?>
                <?php require ($_SERVER['GUILD'].'module/news-list.php')?>
              <?php } ?>
            </div>
            <div class="see-more">
              <a aria-label="See More" title="See More" class="see-more-link" href="news/">
                <span>See More</span>
                <svg class="svgicon svgicon-see-more" width="13" height="12" viewBox="0 0 13 12"><path d="M5.29602 1.71004L9.62102 6.00004L5.29602 10.29L6.70402 11.71L12.461 6.00004L6.70402 0.290039L5.29602 1.71004Z"/><path d="M1.70402 0.290039L0.296021 1.71004L4.62102 6.00004L0.296021 10.29L1.70402 11.71L7.46102 6.00004L1.70402 0.290039Z"/></svg>
              </a>
            </div>
          </section>
        
        
        
          <section class="base-container officers">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">Officers</div>
            </div>
            <div class="officers-list">
              <?php for ($i=1; $i <= 6 ; $i++) { ?>
                <?php $box_type='card'; require ($_SERVER['GUILD'].'module/officers-list.php')?>
              <?php } ?>
            </div>
          </section>
        
        
        
          <section class="base-container member">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">Members</div>
            </div>
            <div class="member-list">
              <?php for ($i=1; $i <= 10 ; $i++) { ?>
                <?php require ($_SERVER['GUILD'].'module/member-list.php')?>
              <?php } ?>
            </div>
            <div class="see-more">
              <a aria-label="See More" title="See More" class="see-more-link" href="member/">
                <span>See More</span>
                <svg class="svgicon svgicon-see-more" width="13" height="12" viewBox="0 0 13 12"><path d="M5.29602 1.71004L9.62102 6.00004L5.29602 10.29L6.70402 11.71L12.461 6.00004L6.70402 0.290039L5.29602 1.71004Z"/><path d="M1.70402 0.290039L0.296021 1.71004L4.62102 6.00004L0.296021 10.29L1.70402 11.71L7.46102 6.00004L1.70402 0.290039Z"/></svg>
              </a>
            </div>
          </section>
        
        
        
          <section class="base-container gallery">
            <div class="section-title">
              <?php require ($_SERVER['GUILD'].'module/section-title-icon.php')?>
              <div class="section-title-label">Gallery</div>
            </div>
            <div class="gallery-list">
              <?php $media_type='video'; require ($_SERVER['GUILD'].'module/gallery-list.php')?>
              <?php for ($i=1; $i <= 3 ; $i++) { ?>
                <?php $media_type='video'; require ($_SERVER['GUILD'].'module/gallery-list.php')?>
                <?php $media_type='photo'; require ($_SERVER['GUILD'].'module/gallery-list.php')?>
                <?php $media_type='video'; require ($_SERVER['GUILD'].'module/gallery-list.php')?>
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
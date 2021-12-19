<?php 
  $page='pagelist'; 
  $channel='pagelist'; 
  $login='no'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['GUILD'].'inc/datasample.php')?>
<?php require ($_SERVER['GUILD'].'inc/meta.php')?>
<?php require ($_SERVER['GUILD'].'inc/header.php')?>
<style>
  .site-container{min-height:100vh;}
  .pagelist ul{padding-left:18px;}
  .pagelist > ul{list-style:disc;}
  .pagelist > ul > li > ul{list-style:circle;}
  .pagelist-row{padding:7px 0; display:block;}
</style>

<div class="site-container">
  <span>
    <div class="main-container">
      <div class="column-big">
        <div class="column-big-container">
        
          <section class="section-container pagelist">
            <ul>
              <li>
                <a class="pagelist-row" href=" ">Home page</a>
              </li>
              <li>
                <div class="pagelist-row">News page</div>  
                <ul>
                  <li><a class="pagelist-row" href="news/">News list</a></li>
                  <li><a class="pagelist-row" href="news/detail.php">News detail</a></li>
                </ul>
              </li>
            </ul>
          </section>
          
        </div>
      </div>
    </div>
  </span>
</div>

<?php require ($_SERVER['GUILD'].'inc/menu-bottom.php')?>
<?php require ($_SERVER['GUILD'].'inc/footer.php')?>
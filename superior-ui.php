<!doctype html>
<html lang="en">
  <?php include_once('header.php'); ?>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        
      <?php include_once('superior/superior-topbar.php'); ?>
        

<!--
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center" style="background-color: #b3ccff">
-->
         <main class="android-content mdl-layout__content">
           <div class="page-content" style="background-color: #b3ccff">
          <br>
          <?php include_once('superior/superior-validate.php'); ?>
          <?php include_once('superior/superior-issue.php'); ?>
          <?php include_once('superior/superior-notification.php'); ?>
          <?php include_once('superior/superior-history.php'); ?>
        </div>
       <?php include_once('superior/superior-footer.php'); ?>
      </main>
    </div>
   
    
    <script src="assets/js/material.min.js"></script>
  </body>
</html>

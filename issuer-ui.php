<!doctype html>
<html lang="en">
  <?php include_once('header.php'); ?>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        
<<<<<<< HEAD
      <?php include_once('superior/superior-topbar.php'); ?>
=======
      <?php include_once('issuer/issuer-topbar.php'); ?>
>>>>>>> 50a2ca1acfe1a0a436eab0c1ec4a6ffe074e9c86
        

<!--
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center" style="background-color: #b3ccff">
-->
         <main class="android-content mdl-layout__content">
<<<<<<< HEAD
        <div class="page-content" style="background-color: #b3ccff">
          <br>
          <?php include_once('superior/superior-validate.php'); ?>
          <?php include_once('superior/superior-issue.php'); ?>
          <?php include_once('superior/superior-notification.php'); ?>
          <?php include_once('superior/superior-history.php'); ?>
        </div>
       <?php include_once('superior/superior-footer.php'); ?>
=======
           <a name="top"></a>
           <div class="page-content" style="background-color: #b3ccff">
          <br>
          <?php include_once('issuer/issuer-issue.php'); ?>
          <?php include_once('issuer/issuer-notification.php'); ?>
          <?php include_once('issuer/issuer-history.php'); ?>
        </div>
       <?php include_once('issuer/issuer-footer.php'); ?>
>>>>>>> 50a2ca1acfe1a0a436eab0c1ec4a6ffe074e9c86
      </main>
    </div>
      
    <script type="text/javascript">
      $(document).ready(function(){
            $(".mdl-tabs__tab-bar a").click(function () {
                $('.mdl-tabs__panel').hide().eq($(this).index()).show();  // hide all divs and show the current div
            });
        });
        
        $(document).ready(function(){
            $(".mdl-navigation a").click(function () {
                $('.mdl-tabs__panel').hide().eq($(this).index()).show();  // hide all divs and show the current div
                $( '.mdl-layout__drawer, .mdl-layout__obfuscator' ).removeClass( 'is-visible' );
            });
        });
        
    </script>
    
    <script src="assets/js/material.min.js"></script>
  </body>
</html>

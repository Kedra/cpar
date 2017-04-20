<!doctype html>
<html lang="en">
  <?php include_once('header.php'); ?>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        
      <?php include_once('employee/employee-manage-account-topbar.php'); ?>
        

<!--
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center" style="background-color: #b3ccff">
-->
         <main class="android-content mdl-layout__content">
           <div class="page-content" style="background-color: #b3ccff">
          <br>
          
           <div class="mdl-tabs__panel is-active" id="demo">
<!--              <h1>List of Issues</h1>-->
              <h1>Respond to CPAR</h1>

       <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col"></div>
            <div class="mdl-cell mdl-cell--10-col">    
               <div class="mdl-grid portfolio-max-width portfolio-contact">
                <div class="mdl-cell mdl-cell--10-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__supporting-text">
                            <form action="#" class="">
                                 <div class="mdl-grid">
                                     
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name">
                                            <label class="mdl-textfield__label" for="Name">CPAR No.</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name">
                                            <label class="mdl-textfield__label" for="Name">CPAR Date</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
                                     </div>
                                     
                                     
                                     <br>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea class="mdl-textfield__input" type="text" rows= "4" cols="15" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Root Cause</label>
                                          </div>
                                     </div>
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea class="mdl-textfield__input" type="text" rows= "4" cols="15" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Correction</label>
                                          </div>
                                     </div>
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea class="mdl-textfield__input" type="text" rows= "4" cols="15" id="sample5" ></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Corrective Action</label>
                                          </div>
                                     </div>
                                     

                                     <div class="mdl-cell mdl-cell--9-col"></div>
                                     <div class="mdl-cell mdl-cell--3-col">
                                        <p>
<!--
                                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="width: 100%" type="submit">
                                                Submit
                                            </button>
-->
                                            <button class="mdl-button mdl-button--raised mdl-button--colored mdl-js-button modal__close" style="width: 100%">
                                              <i class="material-icons" style="float: left; margin-top: 4px; font-size: 30px">done</i>
                                            Submit
                                          </button>
                                            
                                        </p>
                                    </div>
<!--                                    <div class="mdl-cell mdl-cell--2-col"></div>-->
                                     <br>
                                     <br>
                                     <br>
                                </div>
                            </form>

                    </div>
                </div>
                </div>
            </div>
           </div>
            </div>
          </div>
       <?php include_once('superior/superior-footer.php'); ?>
      </main>
    </div>
      
    <script type="text/javascript">
      $(document).ready(function(){
            $(".mdl-tabs__tab-bar a").click(function () {
                window.location.href = "http://localhost/cpar/superior-ui.php";  
            });
        });
        
        $(document).ready(function(){
            $(".mdl-navigation a").click(function () {
                window.location.href = "http://localhost/cpar/superior-ui.php"; 
            });
        });
        
    </script>
    <script src="assets/js/material-modal.js"></script>
    <script src="assets/js/material.min.js"></script>
  </body>
</html>

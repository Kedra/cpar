<!doctype html>
<html lang="en">
  <?php include_once('header.php'); 
		require_once('config.php');
		require_once('include/check_session.php');
	?>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        
      <?php include_once('superior/superior-manage-account-topbar.php'); ?>
        

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
              <h1>Manage Accounts</h1>

       <div class="mdl-grid">

            <div class="mdl-cell mdl-cell--1-col"></div>
            <div class="mdl-cell mdl-cell--11-col">    
               <div class="mdl-grid portfolio-max-width portfolio-contact" style="width: 100%">
                    <div class="mdl-card__supporting-text">
                        
                         <a href="" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored modal__trigger" data-modal="#modal" style="width: 15%">
                <i class="material-icons" style="float: left; margin-top: 4px">perm_identity</i>
                <span>Add User</span>
              </a>
                        
              <?php include_once('add-user-modal.php'); ?>
                        <br>
                        <br>

              <!-- Responsive table starts here -->
              <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
              <div class="table-responsive-vertical shadow-z-1">
              <!-- Table starts here -->
              <table id="table" class="table table-hover table-mc-light-blue">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Type</th>
                      <th>Delete Action</th>
                      <th>Edit Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-title="Date">Christian Tenefrancia</td>
                      <td data-title="Time">Information Technology</td>
                        <td data-title="Issuer">Super Admin</td>
                        <td data-title="Issuer" style="text-align: center">
                               <a href="#">
                                      <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                          <i class="material-icons" style="color: gray;">delete</i>
                                      </button>
                                </a>
                           </td>
                            <td data-title="Issuer" style="text-align: center"><a href="#">
                                          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                              <i class="material-icons" style="color: gray;">mode_edit</i>
                                          </button>
                                    </a>
                               </td>
                    </tr>
                       <tr>
                          <td data-title="Date">Daryl Casanova</td>
                          <td data-title="Time">Computer Science</td>
                          <td data-title="Issuer">Super Admin</td>
                           <td data-title="Issuer" style="text-align: center">
                               <a href="#">
                                      <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                          <i class="material-icons" style="color: gray;">delete</i>
                                      </button>
                                </a>
                           </td>
                            <td data-title="Issuer" style="text-align: center"><a href="#">
                                          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                              <i class="material-icons" style="color: gray;">mode_edit</i>
                                          </button>
                                    </a>
                               </td>
                        </tr>
                       <tr>
                          <td data-title="Date">Juan Tamod</td>
                          <td data-title="Time">NSFW Dep't</td>
                            <td data-title="Issuer">Employee</td>
                            <td data-title="Issuer" style="text-align: center">
                               <a href="#">
                                      <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                          <i class="material-icons" style="color: gray;">delete</i>
                                      </button>
                                </a>
                           </td>
                            <td data-title="Issuer" style="text-align: center"><a href="#">
                                          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                              <i class="material-icons" style="color: gray;">mode_edit</i>
                                          </button>
                                    </a>
                               </td>
                        </tr>
                      <tr>
                          <td data-title="Date">Maria Mercedesbenz</td>
                          <td data-title="Time">Automotive</td>
                            <td data-title="Issuer">Worker</td>
                            <td data-title="Issuer" style="text-align: center">
                               <a href="#">
                                      <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                          <i class="material-icons" style="color: gray;">delete</i>
                                      </button>
                                </a>
                           </td>
                            <td data-title="Issuer" style="text-align: center"><a href="#">
                                          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                              <i class="material-icons" style="color: gray;">mode_edit</i>
                                          </button>
                                    </a>
                               </td>
                        </tr>
                      <tr>
                          <td data-title="Date">John Johnson</td>
                          <td data-title="Time">Beautician</td>
                            <td data-title="Issuer">Pulbos Artist</td>
                            <td data-title="Issuer" style="text-align: center">
                               <a href="#">
                                      <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                          <i class="material-icons" style="color: gray;">delete</i>
                                      </button>
                                </a>
                           </td>
                            <td data-title="Issuer" style="text-align: center"><a href="#">
                                          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                              <i class="material-icons" style="color: gray;">mode_edit</i>
                                          </button>
                                    </a>
                               </td>
                        </tr>
                      <tr>
                          <td data-title="Date">Sun Morninglight</td>
                          <td data-title="Time">Above the Earth</td>
                            <td data-title="Issuer">Morning Sky</td>
                            <td data-title="Issuer" style="text-align: center">
                               <a href="#">
                                      <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                          <i class="material-icons" style="color: gray;">delete</i>
                                      </button>
                                </a>
                           </td>
                            <td data-title="Issuer" style="text-align: center">
                                <a href="#">
                                          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                                              <i class="material-icons" style="color: gray;">mode_edit</i>
                                          </button>
                                    </a>
                               </td>
                        </tr>
                  </tbody>
                </table>
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
<<<<<<< HEAD
      
=======
>>>>>>> 50a2ca1acfe1a0a436eab0c1ec4a6ffe074e9c86
    <script src="assets/js/material-modal.js"></script>
    <script src="assets/js/material.min.js"></script>
  </body>
</html>

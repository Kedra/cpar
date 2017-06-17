<!doctype html>
<html lang="en">
  <?php include_once('header.php'); 
		require_once('config.php');
		require_once('include/check_session.php');
		require_once('include/superior-new-user-process.php');
	?>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        
      <?php include_once('superior/superior-manage-account-topbar.php'); ?>
	  
	  <main class="android-content mdl-layout__content">
           <div class="page-content" style="background-color: #b3ccff">
          <br>
          
           <div class="mdl-tabs__panel is-active" id="demo">
<!--              <h1>List of Issues</h1>-->
              <h1>Add User</h1>
			  
			  <div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col"></div>
				<div class="mdl-cell mdl-cell--4-col" style="text-align: center">
					<?php require_once('include/superior_new_user_reminders.php');?>
				</div>
				<div class="mdl-cell mdl-cell--4-col"></div>
			 </div>
			 
			  <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col"></div>
            <div class="mdl-cell mdl-cell--10-col">    
               <div class="mdl-grid portfolio-max-width portfolio-contact">
                <div class="mdl-cell mdl-cell--10-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__supporting-text">
                            <form action=""  class="" enctype="multipart/form-data" method="POST">
                                <ul class="form-style-1">
                                 <div class="mdl-grid">
                                    
                                     <div class="mdl-cell mdl-cell--2-col"></div>
                                                 <div class="mdl-cell mdl-cell--8-col">
                                                     <hr>
                                                     <label>User Type</label>
                                                    <select name="user_type" class="field-select" style="width: 100%; font-family: Lucida Sans Unicode">
                                                        <option value="Blank"></option>
                                                        <option value="superior">Superior</option>
                                                        <option value="issuer">Issuer</option>
                                                        <option value="employee">Employee</option>
                                                    </select>
<!--
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth getmdl-select__fix-height" style="width: 100%">
                                                        <input class="mdl-textfield__input" type="text" id="sample" value="" readonly tabIndex="-1">
                                                        <label for="sample2">
                                                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                                        </label>
                                                        <label for="sample" class="mdl-textfield__label">User Type</label>
                                                        <ul for="sample" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                            <li class="mdl-menu__item" data-val="DE"></li>
                                                            <li class="mdl-menu__item" data-val="DE" style="font-size: 12px">Superior</li>
                                                            <li class="mdl-menu__item" data-val="BY" style="font-size: 12px">Issuer</li>
                                                            <li class="mdl-menu__item" data-val="RU" style="font-size: 12px">Employee</li>
                                                        </ul>
                                                    </div>
-->
                                                 </div>
                                                <div class="mdl-cell mdl-cell--2-col"></div>
                                                 
                                                 
                                                <div class="mdl-cell mdl-cell--2-col"></div>
                                                 <div class="mdl-cell mdl-cell--8-col">
                                                     <label>Name</label>
													 <input type="text" id="name" name="user_name" class="field-divided" placeholder="Name" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                                        <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name">
                                                        <label class="mdl-textfield__label" for="Name">Name...</label>
                                                        <span class="mdl-textfield__error">Letters and spaces only</span>
                                                    </div>
-->
                                                </div>
                                                <div class="mdl-cell mdl-cell--2-col"></div>



                                                <div class="mdl-cell mdl-cell--2-col"></div>
                                                 <div class="mdl-cell mdl-cell--8-col">
                                                     <label>Email</label>
													 <input type="email" id="email" name="user_email" class="field-divided" placeholder="Email" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                                        <input class="mdl-textfield__input" type="text" id="Name">
                                                        <label class="mdl-textfield__label" for="Name">Email...</label>
                                                    </div>
-->
                                                 </div>
                                                <div class="mdl-cell mdl-cell--2-col"></div>
                                                
                                                  <div class="mdl-cell mdl-cell--2-col"></div>
                                                 <div class="mdl-cell mdl-cell--8-col">
                                                     <label>Department</label>
													 <input type="text" id="department" name="user_department" class="field-divided" placeholder="Department" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                                        <input class="mdl-textfield__input" type="text" id="Name">
                                                        <label class="mdl-textfield__label" for="Name">Department...</label>
                                                    </div>
-->
                                                 </div>
                                                <div class="mdl-cell mdl-cell--2-col"></div>
                                                 
                                                 <div class="mdl-cell mdl-cell--2-col"></div>
                                                 <div class="mdl-cell mdl-cell--8-col">
                                                     <label>Password</label>
													 <input type="password" id="password" name="user_password" placeholder="*****" class="field-divided" style="width: 100%; font-family: Lucida Sans Unicode" />
<!--
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                                        <input class="mdl-textfield__input" type="text" id="Name">
                                                        <label class="mdl-textfield__label" for="Name">Department...</label>
                                                    </div>
-->												
												 <button class="mdl-button mdl-button--raised mdl-button--colored mdl-js-button modal__close" style="width: 100%" name="submit" type="submit">
													Submit
												  </button>
												
                                                 </div>
                                                <div class="mdl-cell mdl-cell--2-col"></div>
												
												
                                </div>
                                </ul>
                            </form>

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
                window.location.href = "<?php echo HTTP_ROOT;?>superior.php";  
            });
        });
        
        $(document).ready(function(){
            $(".mdl-navigation a").click(function () {
                window.location.href = "<?php echo HTTP_ROOT;?>superior.php"; 
            });
        });
        
    </script>
	<script type="text/javascript">
	function delete_user(e) {
		if(!confirm('Are you sure you want to delete this user?'))e.preventDefault();
	}
	</script>
    <script src="assets/js/material-modal.js"></script>
    <script src="assets/js/material.min.js"></script>
  </body>
</html>

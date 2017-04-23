<div class="mdl-tabs__panel is-active" id="issue-panel">
<!--              <h1>List of Issues</h1>-->
<!--  <h2>Issue CPAR</h2>-->

  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
 
      
            <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col"></div>
            <div class="mdl-cell mdl-cell--10-col">
            <div class="mdl-grid portfolio-max-width portfolio-contact">
                <div class="mdl-cell mdl-cell--10-col mdl-card mdl-shadow--4dp">
					
                    <div class="mdl-card__supporting-text">
						
                            <form action="issuer.php" class="" onsubmit="return enableInputControls();"  enctype="multipart/form-data" method="POST">
                                 <div class="mdl-grid">
								 
                                    <div class="mdl-cell mdl-cell--4-col">
									</div>
									<div class="mdl-cell mdl-cell--4-col">
										<?php require_once('include/issuer_form_reminders.php'); ?>
									</div>
									<div class="mdl-cell mdl-cell--4-col">
									</div>
									
                                    <div class="mdl-cell mdl-cell--1-col">
									</div>
                                     <div class="mdl-cell mdl-cell--5-col">
										
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="issuer_name" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="issuer_name" value="<?php echo $_SESSION['usr_nm'];?>" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issuer Name...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="issuer_dprtmnt" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="issuer_dprtmnt" value="<?php echo $_SESSION['usr_dprtmnt'];?>" disabled="true">
                                            <label class="mdl-textfield__label" for="Name">Issuer Dep’t./Crewing Office...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
                                     </div>
                                     
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                       <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="issue_to_name" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name">
                                            <label class="mdl-textfield__label" for="Name">Issue To (Name)...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
                                     </div>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="issue_to_dprtmnt" class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name">
                                            <label class="mdl-textfield__label" for="Name">Issue To (Department)...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                        </div>
                                     </div>
                                     
                                     
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <input name="superior_email" class="mdl-textfield__input" pattern="[A-Z,a-z,0-9,@,.]*" value="<?php echo $_POST['superior_email'];?>" type="email" id="Name">
                                            <label class="mdl-textfield__label" for="Name">Issuer Superior Email Address...</label>
                                            <span class="mdl-textfield__error">Letters and spaces only</span>
                                         </div>
										 
                                     </div>
                                    <div class="mdl-cell mdl-cell--6-col"></div>
                                     <br>
                                   
                                    <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth getmdl-select__fix-height">
                                            <input name="issue_source" class="mdl-textfield__input" type="text" id="sample" value="<?php echo $_POST['issue_source'];?>" readonly tabIndex="-1">
                                            <label for="sample2">
                                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                            </label>
                                            <label for="sample" class="mdl-textfield__label">Source</label>
                                            <ul for="sample" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                <li class="mdl-menu__item" data-val="DE"></li>
                                                <li class="mdl-menu__item" data-val="1st Party Audit" style="font-size: 12px">1st Party Audit</li>
                                                <li class="mdl-menu__item" data-val="2nd Party Audit" style="font-size: 12px">2nd Party Audit</li>
                                                <li class="mdl-menu__item" data-val="3rd Party Audit" style="font-size: 12px">3rd Party Audit</li>
                                                <li class="mdl-menu__item" data-val="Customer Survey" style="font-size: 12px">Customer Survey</li>
                                                <li class="mdl-menu__item" data-val="Customer Complaint/Feedback" style="font-size: 12px">Customer Complaint/Feedback</li>
                                                <li class="mdl-menu__item" data-val="Unmet Goal" style="font-size: 12px">Unmet Goal</li>
                                                <li class="mdl-menu__item" data-val="Request for Disposition/Inaction" style="font-size: 12px">Request for Disposition/Inaction</li>
                                            </ul>
                                        </div>
                                     </div>
                                     <br>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--5-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth getmdl-select__fix-height">
                                            <input name="issue_finding" class="mdl-textfield__input" type="text" id="sample2" value="<?php echo $_POST['issue_finding'];?>" readonly tabIndex="-1">
                                            <label for="sample2">
                                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                            </label>
                                            <label for="sample2" class="mdl-textfield__label">Finding</label>
                                            <ul for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                <li class="mdl-menu__item" data-val=""></li>
                                                <li class="mdl-menu__item" data-val="Major Non-conformance" style="font-size: 12px">Major Non-conformance</li>
                                                <li class="mdl-menu__item" data-val="Minor Non-conformance" style="font-size: 12px">Minor Non-conformance</li>
                                                <li class="mdl-menu__item" data-val="Observation" style="font-size: 12px">Observation</li>
                                            </ul>
                                        </div>
                                     </div>
                                     
                                     <br>
                                     <div class="mdl-cell mdl-cell--1-col"></div>
                                     <div class="mdl-cell mdl-cell--11-col">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%">
                                            <textarea name="issue_finding_desc" class="mdl-textfield__input" type="text" rows= "10" cols="15" id="sample5" value="<?php echo $_POST['issue_finding_desc'];?>"></textarea>
                                            <label class="mdl-textfield__label" for="sample5">Description of Findings/Problem</label>
                                          </div>
                                    </div>
                                     

                                     <div class="mdl-cell mdl-cell--9-col"></div>
                                     <div class="mdl-cell mdl-cell--3-col">
                                        <p>
                                            <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="width: 100%" name="submit" type="submit">
                                                Submit
                                            </button>
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

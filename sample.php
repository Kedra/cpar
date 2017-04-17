<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Android</title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/table.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="assets/img/cpar-logo.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Validate CPAR</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Issue CPAR</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href=""><span class="mdl-badge" data-badge="4">Notification</span></a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">History</a>
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="assets/img/android-logo.png">
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item">Account Settings</li>
            <li class="mdl-menu__item">Logout</li>
<!--            <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>-->
          </ul>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="images/android-logo-white.png">
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Phones</a>
          <a class="mdl-navigation__link" href="">Tablets</a>
          <a class="mdl-navigation__link" href="">Wear</a>
          <a class="mdl-navigation__link" href="">TV</a>
          <a class="mdl-navigation__link" href="">Auto</a>
          <a class="mdl-navigation__link" href="">One</a>
          <a class="mdl-navigation__link" href="">Play</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Versions</span>
          <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
          <a class="mdl-navigation__link" href="">KitKat 4.4</a>
          <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
          <a class="mdl-navigation__link" href="">Android history</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Resources</span>
          <a class="mdl-navigation__link" href="">Official blog</a>
          <a class="mdl-navigation__link" href="">Android on Google+</a>
          <a class="mdl-navigation__link" href="">Android on Twitter</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">For developers</span>
          <a class="mdl-navigation__link" href="">App developer resources</a>
          <a class="mdl-navigation__link" href="">Android Open Source Project</a>
          <a class="mdl-navigation__link" href="">Android SDK</a>
        </nav>
      </div>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center" style="background-color: #b3ccff">
            <br>
          <div id="demo">
              <h1>List of Issues</h1>
<!--              <h2>As of 04/14/2017</h2>-->

              <!-- Responsive table starts here -->
              <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
              <div class="table-responsive-vertical shadow-z-1">
              <!-- Table starts here -->
              <table id="table" class="table table-hover table-mc-light-blue">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Issuer</th>
                      <th>Issue To (Name)</th>
                      <th>Issue To (Dep't)</th>
                        <th>Status</th>
                        <th>Disposition</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-title="Date">05/08/2017</td>
                      <td data-title="Time">9:30 AM</td>
                        <td data-title="Issuer">Alpha</td>
                        <td data-title="Issuer">Golf</td>
                        <td data-title="Issuer">Crewing</td>
                        <td data-title="Status"><a href="">Validate</a></td>
                        <td data-title="Disposition"></td>
                    </tr>
                       <tr>
                          <td data-title="Date">04/07/2017</td>
                          <td data-title="Time">9:30 AM</td>
                            <td data-title="Issuer">Bravo</td>
                            <td data-title="Issuer">Hotel</td>
                            <td data-title="Issuer">HR</td>
                            <td data-title="Status"><a href="">Validate</a></td>
                            <td data-title="Disposition"></td>
                        </tr>
                       <tr>
                          <td data-title="Date">03/06/2017</td>
                          <td data-title="Time">10:30 AM</td>
                            <td data-title="Issuer">Charlie</td>
                            <td data-title="Issuer">India</td>
                            <td data-title="Issuer">Purchasing</td>
                            <td data-title="Status">Closed</td>
                            <td data-title="Disposition">Denied</td>
                        </tr>
                      <tr>
                          <td data-title="Date">02/05/2017</td>
                          <td data-title="Time">11:30 AM</td>
                            <td data-title="Issuer">Delta</td>
                            <td data-title="Issuer">Juliet</td>
                            <td data-title="Issuer">Maintenance</td>
                            <td data-title="Status">Closed</td>
                            <td data-title="Disposition">Approved</td>
                        </tr>
                      <tr>
                          <td data-title="Date">01/04/2017</td>
                          <td data-title="Time">12:30 PM</td>
                            <td data-title="Issuer">Echo</td>
                            <td data-title="Issuer">Kilo</td>
                            <td data-title="Issuer">LAPD</td>
                            <td data-title="Status">Closed</td>
                            <td data-title="Disposition">Denied</td>
                        </tr>
                      <tr>
                          <td data-title="Date">12/03/2017</td>
                          <td data-title="Time">01:30 PM</td>
                            <td data-title="Issuer">Foxtrot</td>
                            <td data-title="Issuer">Lima</td>
                            <td data-title="Issuer">RTD</td>
                            <td data-title="Status">Closed</td>
                            <td data-title="Disposition">Approved</td>
                        </tr>
                  </tbody>
                </table>
              </div>
            </div>
         

         
        </div>
        
       
       

        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section">
              <button class="mdl-mega-footer--social-btn"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn"></button>
            </div>
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Satellite imagery: © 2014 Astrium, DigitalGlobe</p>
            <p class="mdl-typography--font-light">Some features and devices may not be available in all areas</p>
          </div>

          <div class="mdl-mega-footer--bottom-section">
            <a class="android-link android-link-menu mdl-typography--font-light" id="version-dropdown">
              Versions
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="version-dropdown">
              <li class="mdl-menu__item">5.0 Lollipop</li>
              <li class="mdl-menu__item">4.4 KitKat</li>
              <li class="mdl-menu__item">4.3 Jelly Bean</li>
              <li class="mdl-menu__item">Android History</li>
            </ul>
            <a class="android-link android-link-menu mdl-typography--font-light" id="developers-dropdown">
              For Developers
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="developers-dropdown">
              <li class="mdl-menu__item">App developer resources</li>
              <li class="mdl-menu__item">Android Open Source Project</li>
              <li class="mdl-menu__item">Android SDK</li>
              <li class="mdl-menu__item">Android for Work</li>
            </ul>
            <a class="android-link mdl-typography--font-light" href="">Blog</a>
            <a class="android-link mdl-typography--font-light" href="">Privacy Policy</a>
          </div>

        </footer>
      </div>
    </div>
   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>

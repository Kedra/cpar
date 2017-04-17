<!doctype html>
<html lang="en">
    <?php require_once('header.php'); ?>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
     <?php require_once('sidebar-ui.php'); ?>
      <main class="mdl-layout__content">
        <div class="mdl-grid demo-content">
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
                        <td data-title="Status">
                            <a href="#" target="_blank">Follow-up</a>
                        </td>
                        <td data-title="Disposition"></td>
                    </tr>
                       <tr>
                          <td data-title="Date">04/07/2017</td>
                          <td data-title="Time">9:30 AM</td>
                            <td data-title="Issuer">Bravo</td>
                            <td data-title="Issuer">Hotel</td>
                            <td data-title="Issuer">HR</td>
                            <td data-title="Status">
                                <a href="#" target="_blank">Follow-up</a>
                            </td>
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
      </main>
    </div>

    <script src="assets/js/material.min.js"></script>
  </body>
</html>

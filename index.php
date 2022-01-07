<?php include('libraries/Database.php'); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDRESS BOOK</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
<body>
  <div class="row">
      <div class="large-6 columns">
        <h1> ADDRESS BOOK</h1>
      </div>
      <div class="large-6 columns">
          <a class="add-btn button right medium" data-reveal-id="addModal">Add Contact</a>
          <div id="addModal" class="reveal-modal" data-reveal>
              <h2> Add Contact </h2>
                <form id="addContact" action="#" method="post">
                        <div class="row">
                          <div class="large-6 columns">
                            <label> First Name
                              <input name="first_name" type="text" placeholder="Enter First Name"/>
                            </label>
                          </div>
                           <div class "large-6 columns">
                             <label>Last name
                               <input name="last_name" type="text" placeholder="Enter Last Name"/>
                             </label>
                           </div>
                         </div>
                         <div class="row">
                           <div class="large-4 columns">
                             <label>Email
                               <input name="email" type="email" placeholder="Enter Email Address"/>
                             </label>
                           </div>
                           <div class="large-4 columns">
                             <label>Phone Number
                               <input name="phone number" type="text" placeholder="Enter Phone number"/>
                             </label>
                            </div>
                          </div>
                          <div class="large-4 columns">
                              <label>Country
                                <input name="country" type="text" placeholder="Enter your Country"/>
                              </label>
                          </div>
                          <div class="large_4 columns">
                              <label>Address
                                <input name="address" type="text" placeholder="Enter your address location"/>
                              </label>
                          </div>
                        </div>
                        <input type="submit" class "add-btn button right small" value="Submit">
                        <a class="close-reveal-modal">&#215;</a>
                    </form>
          </div>
      </div>
</div>
<div>
  <?php include('contacts.php'); ?>
</div>
    <!--Loading Image -->
    <div id="LoaderImage">
      <img src="img/ajax-loader.gif">
    </div>

    <!--main content -->
    <div id="pageContent"></div>



    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/script.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

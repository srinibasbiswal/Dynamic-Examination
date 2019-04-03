<?php
session_start();
if (!isset($_SESSION['login_err'])) {
    // code..
    $_SESSION['login_err']="";
}
if (!isset($_SESSION['signup_err'])) {
    // code..
    $_SESSION['signup_err']="";
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Project ExamOne</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="uk-navbar uk-background-primary" uk-navbar>
      <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li>
                <a class="uk-text-lead heading" href="#">Dynamic Examination</a>
            </li>
        </ul>
      </div>

      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
        </ul>
      </div>
    </nav>

    <div class="uk-margin">
      <div uk-grid>
        <div class="uk-width-1-2@m uk-width-1-1@s">
          <h1 class="uk-head">
              <div class="uk-card uk-card-body">
                  <p class="uk-text-center">
                      An online platform for dynamic examination.
                  </p>
              </div>
          </h1>
        </div>
        <div class="uk-width-1-2@m uk-width-1-1@s">
          <div class="uk-card uk-card-default uk-margin-medium-right uk-margin-medium-left uk-box-shadow-large">
            <div class="uk-card-body">
              <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                <li><a href="#">Login</a></li>
                <li><a href="#">Sign Up</a></li>
              </ul>
              <ul class="uk-switcher uk-margin">
                <li>
                  <form action="php/login.php" method="post">
                    <fieldset class="uk-fieldset">
                      <div class="uk-margin">
                        <input class="uk-input uk-border-rounded" type="email" name="email" placeholder="Email" required>
                      </div>
                      <div class="uk-margin">
                        <input class="uk-input uk-border-rounded" type="password" name="password" placeholder="Password" required>
                      </div>
                      <div class="uk-margin uk-text-center">
                        <button class="uk-button uk-button-default uk-border-rounded" type="submit">Login</button>
                        <div class="uk-margin">
                            <p>
                                <?php echo $_SESSION['login_err']; ?>
                            </p>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </li>
                <li>
                    <form action="php/signup.php" method="post" >
                      <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                          <input class="uk-input uk-border-rounded" type="text" name="name" placeholder="Name" required>
                        </div>
                        <div class="uk-margin">
                          <input class="uk-input uk-border-rounded" type="number" name="contact_number" placeholder="Contact Number" required>
                        </div>
                        <div class="uk-margin">
                          <input class="uk-input uk-border-rounded" type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="uk-margin">
                          <input class="uk-input uk-border-rounded" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="uk-margin uk-text-center">
                          <button class="uk-button uk-button-default uk-border-rounded">SignUp</button>
                          <div class="uk-margin">
                              <p>
                                  <?php echo $_SESSION['signup_err']; ?>
                              </p>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
  </body>
</html>

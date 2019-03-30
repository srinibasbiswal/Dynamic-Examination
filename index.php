<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Project ExamOne</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
  </head>
  <body>
    <nav class="uk-navbar-container" uk-navbar>
      <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="#">Active</a></li>
          <li><a href="#">Item</a></li>
        </ul>
      </div>

      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="#">Active</a></li>
          <li><a href="#">Item</a></li>
        </ul>
      </div>
    </nav>

    <div class="uk-margin">
      <div uk-grid>
        <div class="uk-width-2-3">
          <h1 class="uk-head">hello</h1>
        </div>
        <div class="uk-width-1-3">
          <div class="uk-card uk-card-default uk-margin-medium-right">
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
                        <input class="uk-input" type="email" name="email" placeholder="Email">
                      </div>
                      <div class="uk-margin">
                        <input class="uk-input" type="password" name="password" placeholder="Password">
                      </div>
                      <div class="uk-margin">
                        <button class="uk-button uk-button-default" type="submit">Login</button>
                      </div>
                    </fieldset>
                  </form>
                </li>
                <li>
                    <form action="php/signup.php" method="post" >
                      <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                          <input class="uk-input" type="text" name="name" placeholder="Name">
                        </div>
                        <div class="uk-margin">
                          <input class="uk-input" type="number" name="contact_number" placeholder="Contact Number">
                        </div>
                        <div class="uk-margin">
                          <input class="uk-input" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="uk-margin">
                          <input class="uk-input" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="uk-margin">
                          <button class="uk-button uk-button-default">SignUp</button>
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

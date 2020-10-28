<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <title>Administrator - Adams college practise test</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="../assets/vendor/SnackBar-master/dist/snackbar.min.css">
  <link href="../assets/vendor/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/argon.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../assets/css/main.css" type="text/css">

  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/SnackBar-master/dist/snackbar.min.js"></script>
  <script src="../assets/vendor/pace-master/pace.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrapValidator.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootbox.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script>var durl = new URL(window.location.href);</script>
</head>
<body class="bg-white">
  <div id="ajaxloader"><div id="loader"></div><div id="dloader"><div class='spinner-border text-white' role='status'><span class='sr-only'>Loading...</span></div></div></div>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-5 col-md-5">
        <div class="card o-hidden border-0 my-5" style="box-shadow: none;">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="p-2">
                  <div class="text-center">
                    <img src="./assets/img/brand/favicon.png">
                    <h1 class="text-gray-900">Adams College</h1>
                    <h1 class="h4 text-gray-900 mb-4">Login as administrator</h1>
                  </div>
                  <form id="adminform">
                    <div class="form-group">
                      <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="fa fa-eye-slash" id="pwdPreviewBtn" data-toggle="tooltip" data-original-title="Show password"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-block" id="sendbut">Done</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/js/argon.js"></script>
  <script src="../assets/js/myvalidate.js"></script>
  <script>document.getElementById('pwdPreviewBtn').addEventListener('click', () => {pwdpreview();});</script>
</body>
</html>

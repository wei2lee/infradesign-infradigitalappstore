<script>
    var __client = '<?=$this->e($client)?>';
    var __app = '<?=$this->e($app)?>';
    var __platform = '<?=$this->e($platform)?>';
</script>

<!doctype html>
<html class="no-js" lang="" ng-app="appstore">

<head>
    <base href="<?=$this->e($baseUrl)?>" target="_blank">

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = 'https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-65046498-1', 'auto');
    </script>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- script that must be load at head -->
    <script src="bower_components/angular/angular.min.js"></script>

    <!-- vendor -->
    <!--    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">-->
    <!--    <link rel="stylesheet" href="css/animate.css">-->
    <!--    <link rel="stylesheet" href="bower_components/select2/dist/css/select2.css">-->
    <!--    <link rel="stylesheet" href="css/select2-bootstrap.css">-->
    <!--    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css">-->
    <!--    <link rel="stylesheet" href="bower_components/bootstrapvalidator/dist/css/bootstrapValidator.min.css">-->
    <!--    <link rel="stylesheet" href="bower_components/fancybox/source/jquery.fancybox.css">-->
    <link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css">
    <!-- end vendor -->

    <!-- app -->
    <link rel="stylesheet" href="css/main.css">
    <!-- end -->


    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body ng-controller="MainCtrl as main" id="app-install">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <div id="wrapper">
        <!--
        <div id="topbar" class="animated fadeInDown">
            <div class="container">
                <div id="header">
                    <img src="img/logo.png">
                </div>
            </div>
            <div id="slogan" class="text-center">
                making ideas happen
            </div>
        </div>
-->
        <div id="content-wrapper">
            <div class="container">
                <!--                <h2 class="text-center animated fadeInDown">Internal Apps Store</h2>-->
                <div class="row">
                    <div class="col-xs-12 loading-animation" ng-if="controller.apps.length"><i class="fa fa-gear fa-spin"></i>
                    </div>
                </div>
                <div class="row" ng-controller="AppCtrl as controller">
                    <div class="form-panel">
                        <div class="form-title">Please login to install:</div>
                        <form class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="textinput">Username</label>
                                    <div class="col-md-10">
                                        <input id="textinput" name="textinput" type="text" placeholder="Username" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="textinput">Password</label>
                                    <div class="col-md-10">
                                        <input id="textinput" name="textinput" type="text" placeholder="Password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="button1id"></label>
                                    <div class="col-md-10">
                                        <a id="button2id" name="button2id" class="btn btn-danger pull-right">Back to Appstore</a>
                                        <a id="button1id" name="button1id" class="btn btn-success pull-right">Login</a>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- vendor -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')
    </script>
    <script src="bower_components/underscore/underscore-min.js"></script>
    <script src="bower_components/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
    <!--    <script src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>-->
    <!--    <script src="bower_components/ng-country-select/dist/ng-country-select.min.js"></script>-->
    <!--    <script src="bower_components/select2/dist/js/select2.min.js"></script>-->
    <!--    <script src="bower_components/angular-animate/angular-animate.js"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-animate.js"></script>
    <!--    <script src="bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>-->
    <!--    <script src="bower_components/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>-->
    <!--    <script src="bower_components/bootbox/bootbox.js"></script>-->
    <!--    <script src="bower_components/fancybox/source/jquery.fancybox.js"></script>-->
    <!-- end vendor -->


    <!-- app -->
    <script src="js/parse-1.4.2.min.js"></script>
    <script src="js/ParseService.js"></script>
    <script src="js/sax-js-master/lib/sax.js"></script>
    <script src="js/plist-parser-master/lib/plist-parser.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
    <script src="js/service.js"></script>
    <script src="js/directive.js"></script>
    <!--    <script src="js/route.js"></script>-->
    <script src="js/controller.js"></script>
    <script src="js/main.js"></script>
    <!-- end -->
</body>

</html>
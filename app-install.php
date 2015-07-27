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
        ga('create', 'UA-42485850-5', 'auto');
    </script>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- script that must be load at head -->
    <script src="bower_components/angular/angular.min.js"></script>

    <!-- build:css(.) styles/vendor.css -->
    <link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css">
    <!-- endbuild -->

    <!-- build:css({.tmp,.}) styles/style.css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- endbuild -->


    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body ng-controller="MainCtrl as main" id="app-install">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container">
                <div class="row" ng-controller="AppCtrl as controller">
                    <div class="form-panel animated fadeInUp" id="install-authencation" ng-if="controller.stat == 0 || controller.stat == 1" ng-cloak>
                        <div ng-if="controller.stat == 0">
                            <div class="form-title">Please login to install:</div>
                            <form class="form-horizontal" name="form" ng-submit="controller.login()">
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="textinput">Username</label>
                                        <div class="col-md-10">
                                            <input name="username" ng-model="controller.username" type="text" placeholder="Username" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="textinput">Password</label>
                                        <div class="col-md-10">
                                            <input name="password" ng-model="controller.password" type="password" placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="button1id"></label>
                                        <div class="col-md-10">
                                            <a class="backtoappstore pull-right" ng-href="{{controller.app.client.name}}" target="_self">Back to Appstore</a>
                                            <a class="loginbtn pull-right" ng-click="controller.login()" href="javascript:void(0)">Login</a>
                                        </div>
                                        <small class="animated fadeInRight text-danger" ng-if="controller.alert.message">{{controller.alert.message}}</small>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div ng-if="controller.stat == 1" id="install-link">
                            <div class="thankyou">Thank you!</div>
                            <div class="clickheretodownload"><a ng-href="{{controller.app.downloadsrc}}"><u><strong>CLICK HERE TO DOWNLOAD</strong></u></a></div>
                            <div class="backtoappstore"><a  ng-href="{{controller.app.client.name}}"  target="_self">Back to Apps Store</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- build:js(.) scripts/vendor.js -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="bower_components/jquery/dist/jquery.min.js"><\/script>')
    </script>
    <script src="bower_components/underscore/underscore-min.js"></script>
    <script src="bower_components/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-animate.js"></script>
    <!-- endbuild -->


    <!-- build:js({.tmp,.}) scripts/scripts.js -->
    <script src="js/parse-1.4.2.min.js"></script>
    <script src="js/ParseService.js"></script>
    <script src="js/sax-js-master/lib/sax.js"></script>
    <script src="js/plist-parser-master/lib/plist-parser.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
    <script src="js/config.js"></script>
    <script src="js/service.js"></script>
    <script src="js/directive.js"></script>
    <script src="js/controller.js"></script>
    <script src="js/main.js"></script>
    <!-- endbuild -->
</body>

</html>
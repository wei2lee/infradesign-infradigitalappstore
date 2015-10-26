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

<body ng-controller="MainCtrl as main" id="client-app-list">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <div id="wrapper">
        <a href="." target="_self" id="topbar" class="animated fadeInDown">
            <div class="container">
                <div id="header">
                    <img src="img/logo.png">
                </div>
            </div>
            <div id="slogan" class="text-center">
                making ideas happen
            </div>
        </a>
        <div id="content-wrapper">
            <div class="container">
                <h2 class="text-center animated fadeInDown">Internal Apps Store</h2>
                <div class="row">
                    <div class="col-xs-12 loading-fade-animation loading-height-animation loading-gear" ng-if="!main.loadingComplete"><i class="fa fa-gear fa-spin" ></i></div>
                </div>
                <div class="row" ng-controller="AppListCtrl as controller">
                    <div class="col-sm-12 loading-fade-animation loading-content" ng-controller="ClientNotExistCtrl as clientController" ng-if="controller.apps && controller.apps.length == 0" class="text-danger text-center" ng-cloak>
                        <div class="alert fadeInUp animated " ng-class="{'alert-danger':clientController.__client, 'alert-success':!clientController.__client}"  role="alert">
                            <div ng-if="clientController.__client">
                                <span>Client '{{clientController.__client}}' doesn't exist, Are you means one of the following ?</span>
                            </div>
                            <div ng-if="!clientController.__client">
                                <span>Please select one of the client to download app.</span>
                            </div>
                            <ul class="center-block">
                                <li ng-repeat="client in clientController.clients" class="fade-animation" style="display:inline;"><a target="_self" ng-href="./{{client.name}}">{{client.name}}</a>{{$last?'':', '}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 app-animation" ng-repeat="app in controller.apps" ng-cloak>
                        <div class="media" ng-click="clickApp(app)">
                            <div class="media-left">
                                <a target="_self" ng-href="./{{app.client.name}}/{{app.name}}/{{app.platform}}/install">
                                    <img class="applogo media-object" ng-src="{{app.logosrc}}" width=72 height=72>
                                    <div class="appname">{{app.displayname}}</div>
                                    <div class="version" ng-if='app.version'>Version {{app.version}}</div>
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="internaluse" ng-if='app.internaluse'>{{app.internaluse}}</div>
                                <div class="requirement" ng-if='app.platform'><i class="fa" ng-class="{'fa-apple':app.platform=='ios', 'fa-android':app.platform=='android'}"></i> {{app.requirement}}</div>
                                <div class="lastupdate"  ng-if='app.lastupdate'>Last update: <span class="inline-block">{{app.lastupdate|date:'EEE, dd MMM yyyy'}}</span></div>
                                <div class="provisionexpire" ng-if='app.provisionexpire'>Provision expire: <span class="inline-block">{{app.provisionexpire|date:'EEE, dd MMM yyyy'}}</span></div>
                            </div>
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
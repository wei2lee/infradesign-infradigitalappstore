function MainCtrl($timeout) {
    var _this = this;
}

function AppListCtrl($timeout) {
    var _this = this;

    _this.apps = [];

    $timeout(function () {

        _this.apps = [
            {
                client: "hatten",
                displayname: "TPSuite",
                version: "1.3.0",
                platform: "ios",
                internaluse: "This app is for Internal Use Only.",
                requirement: "iOS7.1.1 or above.",
                lastupdate: "3, April 2015",
                logosrc: "img/applogo.png",
                versionsrc: "",
                binarysrc: "",
                plistsrc: "",
                downloadsrc: ""
        },
            {
                client: "hatten",
                displayname: "TPSuite",
                version: "1.3.0",
                platform: "ios",
                internaluse: "This app is for Internal Use Only.",
                requirement: "iOS7.1.1 or above.",
                lastupdate: "3, April 2015",
                logosrc: "img/applogo.png",
                versionsrc: "",
                binarysrc: "",
                plistsrc: "",
                downloadsrc: ""
        },
            {
                client: "hatten",
                displayname: "TPSuite",
                version: "1.3.0",
                platform: "android",
                internaluse: "This app is for Internal Use Only.",
                requirement: "iOS7.1.1 or above.",
                lastupdate: "3, April 2015",
                logosrc: "img/applogo.png",
                versionsrc: "",
                binarysrc: "",
                plistsrc: "",
                downloadsrc: ""
        },
            {
                client: "hatten",
                displayname: "TPSuite",
                version: "1.3.0",
                platform: "android",
                internaluse: "This app is for Internal Use Only.",
                requirement: "iOS7.1.1 or above.",
                lastupdate: "3, April 2015",
                logosrc: "img/applogo.png",
                versionsrc: "",
                binarysrc: "",
                plistsrc: "",
                downloadsrc: ""
        }
    ]

    }, 500);
}


angular.module('appstore')
    .controller('MainCtrl', MainCtrl)
    .controller('AppListCtrl', AppListCtrl);
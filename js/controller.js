function MainCtrl() {

}

function AppListCtrl() {
    this.apps = [
        {
            client:"hatten",
            appname:"TPSuite",
            version:"1.3.0",
            internaluse:"This app is for Internal Use Only.",
            requirement:"iOS7.1.1 or above.",
            lastupdate:"3, April 2015"
        },
        {
            client:"hatten",
            appname:"TPSuite",
            version:"1.3.0",
            internaluse:"This app is for Internal Use Only.",
            requirement:"iOS7.1.1 or above.",
            lastupdate:"3, April 2015"
        },
        {
            client:"hatten",
            appname:"TPSuite",
            version:"1.3.0",
            internaluse:"This app is for Internal Use Only.",
            requirement:"iOS7.1.1 or above.",
            lastupdate:"3, April 2015"
        },
        {
            client:"hatten",
            appname:"TPSuite",
            version:"1.3.0",
            internaluse:"This app is for Internal Use Only.",
            requirement:"iOS7.1.1 or above.",
            lastupdate:"3, April 2015"
        }
    ]
}


angular.module('appstore')
    .controller('MainCtrl', MainCtrl)
    .controller('AppListCtrl', AppListCtrl);
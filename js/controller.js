function MainCtrl($timeout) {
    var _this = this;
}

function AppListCtrl($scope, $timeout, ParseQuery, ParseApp, ParseClient) {
    var _this = this;
    _this.apps = [];
    $timeout(function () {
        var clientQuery = new Parse.Query(new ParseClient().className);
        //__client variable is embed at top of the .html(or .php) file
        clientQuery.equalTo('name', __client);
        var appQuery = new Parse.Query(new ParseApp().className);
        appQuery.include('client');
        var appQueryWhereClient = appQuery.matchesQuery('client', clientQuery);
        appQueryWhereClient.find().done(function(results) {
            _this.apps = _.map(results, function(o) {
                return new ParseApp(o); 
            });
        }).fail(function(error) {
            
        }).always(function(){
            $scope.$apply();
        });
    }, 0);
}

function AppCtrl($scope, $timeout, ParseApp, ParseClient) {
    var _this = this;
    
}


angular.module('appstore')
    .controller('MainCtrl', MainCtrl)
    .controller('AppListCtrl', AppListCtrl)
    .controller('AppCtrl', AppCtrl);
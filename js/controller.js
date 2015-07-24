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
    
    $timeout(function() {
        _this.stat = -1;
    });
    
    var appQuery = new Parse.Query(new ParseApp().className);
    appQuery.equalTo('name', __app);
    appQuery.equalTo('platform', __platform);
    appQuery.include('client');
    
    var clientQuery = new Parse.Query(new ParseClient().className);
    clientQuery.equalTo('name', __client);
    
    appQuery = appQuery.matchesQuery('client', clientQuery);
                     
    appQuery.first().done(function(result) {
        _this.app = new ParseApp(result);
        if(_this.app.downloadrequireauthencation) {
            _this.stat = 0;
        }else{
            _this.stat = 1;   
        }
    }).fail(function(error) {
        
    }).always(function() {
        $scope.$apply();
    });
    
    this.login = function() {
        $timeout(function() {
            if(!_this.username || !_this.password) {
                _this.alert = {
                    message: 'Username or password must not be empty.'
                };
            }else if(_this.username == _this.app.downloadusername && _this.password == _this.app.downloadpassword) {
                _this.stat = 1;
            }else{
                _this.alert = {
                    message: 'Username doesn\'t match with password.'
                };
            }
        });
    }
}


angular.module('appstore')
    .controller('MainCtrl', MainCtrl)
    .controller('AppListCtrl', AppListCtrl)
    .controller('AppCtrl', AppCtrl);
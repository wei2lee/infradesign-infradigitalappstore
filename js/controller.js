function MainCtrl($timeout) {
    var _this = this;
    _this.loadingComplete = false;
}

function AppListCtrl($scope, $timeout, ParseQuery, ParseApp, ParseClient) {
    var _this = this;
    
    //__xxxxx variable is embed at top of the .html(or .php) file
    _this.apps = undefined;
    
    _this.__client = __client;
    _this.__app = __app;
    _this.__platform = __platform;
    
    var start = new Date().getTime();
    
    $timeout(function () {
        
        var appQuery = new Parse.Query(new ParseApp().className);
        appQuery.include('client');
        appQuery.equalTo('visible', true);
        if(_this.__app) {
            appQuery.equalTo('name', _this.__app);   
        }
        if(_this.__platform) {
            appQuery.equalTo('platform', _this.__platform);   
        }
        appQuery.ascending('displayname');
        
        var clientQuery = new Parse.Query(new ParseClient().className);
        clientQuery.equalTo('name', _this.__client);
        var appQueryWhereClient = appQuery.matchesQuery('client', clientQuery);
        
        appQueryWhereClient.find().done(function(results) {
            _this.apps = _.map(results, function(o) {
                return new ParseApp(o); 
            });
        }).fail(function(error) {
            
        }).always(function(){
            $timeout(function() {
                $scope.main.loadingComplete = true;
            });
        });
    }, 0);
}

function AppCtrl($scope, $timeout, ParseApp, ParseClient) {
    var _this = this;
    
    //__xxxxx variable is embed at top of the .html(or .php) file
    _this.__client = __client;
    _this.__platform = __platform;
    _this.__app = __app;
    
    $timeout(function() {
        _this.stat = -1;
    });
    
    
    var appQuery = new Parse.Query(new ParseApp().className);
    appQuery.equalTo('name', _this.__app);
    appQuery.equalTo('platform', _this.__platform);
    appQuery.include('client');
    
    var clientQuery = new Parse.Query(new ParseClient().className);
    clientQuery.equalTo('name', _this.__client);
    
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

function ClientNotExistCtrl($scope, $timeout, ParseApp, ParseClient) {
    var _this = this;
    _this.__client = __client;
    
    var clientQuery = new Parse.Query(new ParseClient().className);
    clientQuery.ascending("name");
    clientQuery.find().done(function(results) {
        $timeout(function(){
        _this.clients = _.map(results, function(o) {
           return new ParseClient(o); 
        });
        },0);
    }).fail(function(error) {
        
    }).always(function() {
        $scope.$apply();    
    });
}


angular.module('appstore')
    .controller('MainCtrl', MainCtrl)
    .controller('AppListCtrl', AppListCtrl)
    .controller('ClientNotExistCtrl', ClientNotExistCtrl)
    .controller('AppCtrl', AppCtrl);

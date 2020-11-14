var page = require('webpage').create();
var host = "127.0.0.1"; // change this if you need
var url = "http://"+host+"/protect/read.php";
var timeout = 2000;
phantom.addCookie({
    'name': 'Flag',
    'value': 'CTF{XSS-i5-s0-eZ}',
    'domain': host,
    'path': '/',
    'httponly': false
});
page.settings.userName = ''; // the username in .htaccess
page.settings.password = ''; // the password for .htaccess
page.customHeaders={'Authorization': 'Basic '+btoa('username:password')};

page.onNavigationRequested = function(url, type, willNavigate, main) {
    console.log("[URL] URL="+url);
};
page.settings.resourceTimeout = timeout;
page.onResourceTimeout = function(e) {
    setTimeout(function(){
        console.log("[INFO] Timeout")
        phantom.exit();
    }, 1);
};
page.open(url, function(status) {
    console.log("[INFO] rendered page");
    setTimeout(function(){
        phantom.exit();
    }, 1);
});

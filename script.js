function onSignIn(googleUser){
	location.href="index.php";
}
function signOut(){

location.href="login.html";
var auth2 = gapi.auth2.getAuthInstance();
auth2.signOut().then(function(){
	auth2.disconnect();
	location.href="login.html";


});

	}

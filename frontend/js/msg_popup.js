var msg_source = 'http://versatileitsolution.com/msg_popup/';

//Add Styles
var styless = document.createElement('link');
styless.href = msg_source +'css/msg-popup-styles.css';
styless.type = 'text/css';
styless.rel = 'stylesheet';
document.getElementsByTagName('head')[0].appendChild(styless); 

// add jquery 
/*var scripts = document.createElement('script');
scripts.src = msg_source +'js/jquery.min.js';
scripts.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(scripts);
*/

//function to hide messsage popup
function msg_content_hide(){
	/*var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	
	var final_dt = dd +'-'+ mm+'-' + yyyy;
	var removal_days = 5;
	var remove_dt = dd+removal_days
	var remove_dt = dd +'-'+ mm+'-' + yyyy;
	if(dd >= remove_dt){
		$('.msg_content_main').fadeOut()
	}*/
	
	//alert(remove_dt);
	$('.msg_content_main').fadeOut();
}

//message popup HTML
function msg_popup(){
	var containers  = '<div class="msg_content_main">';
	containers += '<iframe class="msg_iframe" frameborder="0" scrolling="no" ';
	containers += 'src="'+ msg_source +'msg-popup.html"'; //popup HTML Files
	containers += '></iframe>';
	containers += '<a class="msg_close" onclick="msg_content_hide()">X Close</a>';
	containers += '</div>';
	document.getElementById("msg_popup").innerHTML = containers; 
}

// call function message popup
msg_popup();
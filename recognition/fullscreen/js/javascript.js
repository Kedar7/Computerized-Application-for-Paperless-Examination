
// Full Screen	
function fullScreen() {
	var el = document.documentElement,
	rfs = el.requestFullscreen
	|| el.webkitRequestFullScreen
	|| el.mozRequestFullScreen
	|| el.msRequestFullscreen 
	;

	rfs.call(el);
}

// Moving away for exam or popups
needToConfirm = true;
window.onbeforeunload = askConfirm;

function askConfirm(){
	if (needToConfirm){
		return "Please note that exam will be submitted if you move away from exam.";
	}
}
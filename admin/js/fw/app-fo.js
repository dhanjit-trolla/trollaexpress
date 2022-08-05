function checkObjErr(data, cb){
	if( typeof(data)=="object" ){
		if(data.errorAuth){
			window.location.href = data.errorAuth.redirect;
		}
		else if(data.errorTokenMismatch){
			window.location.href = data.errorTokenMismatch.redirect;
		}
		else if(data.redirect){
			window.location.href = data.redirect;
		}
		else{
			cb(data);
		}	
	}
}

function alertDialog(message) {
	$.alert({
		title: 'Alert!',
		content: message,
        animateFromElement: false,
		animation: 'zoom',
		closeAnimation: 'zoom',
		buttons: {
			okay: {
				text: 'Ok',
				btnClass: 'btn-blue'
			}
		}
	});
}

function confirmDialog(message, cb) {
	$.confirm({
        title: "Confirm",
        content: message,
        animateFromElement: false,
        animation: "zoom",
        closeAnimation: "zoom",
        icon: "fas fas-question",
        buttons: {
            cancel: {
            text: "Cancel"
        },
        okay: {
            text: "Ok",
            btnClass: "btn-blue",
            action: cb
        }
        },
        backgroundDismiss: function(){
            return false;
        }
    });
}

$(function () {
    modalDialogListener();
    $.blockUI.defaults.overlayCSS.backgroundColor = '#FFF';
})


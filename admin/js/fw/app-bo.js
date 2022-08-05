function checkObjErr(data, cb) {
    if (typeof (data) == "object") {
        if (data.errorAuth) {
            window.location.href = data.errorAuth.redirect;
        } else if (data.errorTokenMismatch) {
            window.location.href = data.errorTokenMismatch.redirect;
        } else if (data.redirect) {
            window.location.href = data.redirect;
        } else {
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

function confirmDialog(message, cbYes, cbNo) {
	$.confirm({
        title: "Confirm",
        content: message,
        animateFromElement: false,
        animation: "zoom",
        closeAnimation: "zoom",
        icon: "fas fas-question",
        buttons: {
            cancel: {
            text: "Cancel",
            action: cbNo || (function () {})
        },
        okay: {
            text: "Ok",
            btnClass: "btn-blue",
            action: cbYes
        }
        },
        backgroundDismiss: function(){
            return false;
        }
    });
}

function boLayoutInit (d) {
    if (typeof d == 'undefined') {
        d = document
    }
    
    applySelect2($(d));

    $(d).find("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
}

$(function () {
    modalDialogListener();
    boLayoutInit();

    $.blockUI.defaults.overlayCSS.backgroundColor = '#FFF';
})

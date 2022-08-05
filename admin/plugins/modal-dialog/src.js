modalDialog = new (function(){
	var
	$this = this,
	modalStatus = '',
	
	templateModalHtml,
	
	ref = {
		modal: null,
		modalContainer: null,
		modalContent: null,
	};
	
	templateModalHtml = '<div id="bs-md-modal" class="modal fade" tabindex="-1" role="dialog">'+
	'<div id="bs-md-modal-container" class="modal-dialog modal-lg" role="document">'+
	'    <div class="modal-content" id="bs-md-modal-content">'+
	'    </div><!-- /.modal-content -->'+
	'  </div><!-- /.modal-dialog -->'+
	'</div><!-- /.modal -->';
	
	$this.loader = function(tp, cb){
		var bodyOverflow = $('body').css('overflow');
		//$('body').css('overflow', 'hidden');
		
		var msgLoad = {};
		
		msgLoad['1'] = '<div class="" style="background: url('+window.rootPath+'plugins/modal-dialog/loading.gif); background-repeat: no-repeat; width: 158px; height: 32px; margin: 0px auto;"></div>';
		
		msgLoad['2'] = '<div class="" style="background: url('+window.rootPath+'plugins/modal-dialog/loading.gif); background-repeat: no-repeat; width: 158px; height: 32px; margin: 0px auto;"></div>';
		
		$.blockUI({
			message:  msgLoad[tp],
			css: {
				border:         'none', 
		        backgroundColor:'none'
			},
			overlayCSS: {
				opacity: 0
			},
			baseZ: 1100,
			onBlock: function(){
				cb();
			},
			onUnblock: function(){
				//$('body').css('overflow', bodyOverflow);
			}
        });
	};
	
	$this.html = function(data){
		$this.renderHtml(data);
	};
	
	$this.link = function(target){
		target.on("click", function(e){
			if (target[0].tagName.toLowerCase() == "a") {
				e.preventDefault();
			}
			var
			options = {
				url: target.attr("data-md-href")	
			};
			$this.open(options);
		});
	};
	
	$this.form = function(target){
		var errorDisplay = target.attr('data-error-display');
		var url = target.attr('action');
		var options = {
			beforeSerialize: function($form, options){
			},
	        beforeSubmit: function(formData, jqForm, options){
				if (errorDisplay=='validator') {
					validator.showErrors({})
				} else {
					target.find("span.error").empty();
				}
	        	$this.loader(2, function(){});
			},
			error: function(xhr, textStatus, errorThrown){
				//console.log(xhr, textStatus, errorThrown);
				$this.afterRequest(false, null)
	        },
	        success: function(data, statusText, xhr, $form){
	        	$this.afterRequest(true, data, target);
			}
		};
		
		if (errorDisplay=='validator') {
			var validator = target.validate({
				errorElement: "span",
				errorPlacement: function (error, element) {
					var id = $(element).prop("id")+"_error";
					error.addClass("invalid-feedback").prop("id", id);
					$("#"+id).replaceWith(error)
				},
				highlight: function (element, errorClass, validClass) {
					$(element).addClass("is-invalid");
				},
				unhighlight: function (element, errorClass, validClass) {
					$(element).removeClass("is-invalid");
				}
			});
			target.data('validator', validator);
		}
		
		options.url = url + ( url.indexOf('?')>-1 ? '&' : '?' ) + 'X-Requested-With-Modal=md';
		
		target.ajaxForm(options);
	};
	
	$this.open = function(options){
		$this.loader(1, function(){
			$.ajax({
				url: options.url,
				method: 'get',
				data: { 'X-Requested-With-Modal': 'md' }
			})
			.done(function(data){
				$this.afterRequest(true, data);
			}).fail(function(xhr, textStatus, errorThrown) {
				//console.log(xhr, textStatus, errorThrown);
				$this.afterRequest(false, null);
			});
		});
	};
	
	$this.afterRequest = function(s, data, form){
		$this.closeLoader();
		
		if(s){
			$this.renderHtml(data, {}, form || null);
		}
		else{
			alertDialog("Server Error");
		}
	};
	
	$this.closeLoader = function(){
		$.unblockUI();
	};
	$this.closeModal = function(){
		ref.modal.modal('hide');
	};
	
	$this.renderHtml = function(data, options, form){
		if( $.trim(data)!='' ){
			jsonOrHtmlScript(data, function(data){
				checkObjErr(data, function(data){
					if(data.errors && form && form.attr('data-md-fip')!=''){
						var errorDisplay = form.attr('data-error-display');
						var fip = form.attr('data-md-fip');
						if (errorDisplay=='validator') {
							var errors = {}
							$.each(data.errors, function(f, c){
								var n = $('#'+fip+'_'+f).prop('name');
								if (n) {
									errors[n] = c;
								}
							});
							form.data('validator').showErrors(errors)
						} else {
							$.each(data.errors, function(f, c){
								if(f=='errorAll')
									$("#"+fip+"_"+f).html(c);
								else
									$("#"+fip+"_"+f.replace(/\./g, "_")+"_error").html(c);
							});
							
							var errFirst = form.find("span.error").not("#"+fip+"_errorAll").not(":empty").first();
							/*if(errFirst.length==1){
								$.scrollTo(errFirst.parent());
							}*/
						}
            		}
				})
        	}, function(data){
        		var html = $.parseHTML(data, true), cn_o=0, cn_s=0;
    			$.each(html, function(i, el){
    				if( el.nodeName=="SCRIPT" ){
    					cn_s++;
    				}
    				else{
    					cn_o++;
    				}
    			});
    			if( cn_o==0 && cn_s>0 ){
    				$this.renderInline(data);
    			}
    			else if( cn_o>0 ){
    				$this.renderDialog(data);
    			}
    			else{
    				$this.renderInline(data);
    			}
			})
		}
		else{
			$this.closeModal();
		}
	};
	
	$this.renderInline = function(data, options){
		runAjaxHtmlScript(data);
	};
	
	$this.renderDialog = function(data, options){
		ref.modal.modal("hide");
		ref.modalContent.html(data)
		ref.modal.modal("show");
	};
	
	$(function(){
		$('body').append(templateModalHtml);
		
		ref.modal = $("#bs-md-modal");
		ref.modalContainer = $("#bs-md-modal-container");
		ref.modalContent = $("#bs-md-modal-content");
		
		ref.modal.modal({
			keyboard: false,
			show: false
		})
		
		ref.modal.on('show.bs.modal', function (e) {
			ref.modalContainer.addClass(modalSizeWidth || 'modal-lg');
			modalSizeWidth = '';
		});
		
		ref.modal.on('shown.bs.modal', function (e) {
			$('body').css('overflow', 'hidden');
			
			modalStatus = 'shown';
			modalDialogListener(ref.modalContent);
			modalDialogOnShown();
			modalDialogOnShown = function(){};
		});
		ref.modal.on('hidden.bs.modal', function (e) {
			$('body').css('overflow', 'visible');

			modalStatus = 'hidden';
			ref.modalContainer.removeClass('modal-sm');
			ref.modalContainer.removeClass('modal-lg');
			ref.modalContainer.removeClass('modal-xl');
			modalDialogOnHidden();
			modalDialogOnHidden = function(){};
			modalSizeWidth = '';
		});
	})
});

modalDialogOnShown = function(){};
modalDialogOnHidden = function(){};

modalDialogListener = function(d){
	var
	d = d || document;
	if( !(d instanceof jQuery) ){
		d = $(d);
	}
	d.find("[data-md-href]").each(function(){
		var
		t = $(this);
		modalDialog.link(t);
		if( t.attr("data-md-auto")==1 ){
			t.trigger("click");
		}
	});
	d.find("form[data-md-form]").each(function(){
		modalDialog.form($(this));
	});
};
modalSizeWidth = '';
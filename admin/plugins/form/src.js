formModule = {
	modules: {},
	
	createModule: function(option){
		formModule.modules[option.form] = new createFormModule(option);
		formModule.modules[option.form].init();
	}
}


function createFormModule (option) {
	var
	$this = this;

	$this.errorDisplay = option.errorDisplay || 'validator' // inline, tooltip, validator
	$this.errorInstances = {}
	$this.msgSuccess = option.msgSuccess || '.msgSuccess'
	
	$this.contentLoading = null;
	$this.contentArea = null;
	$this.form = null;
	
	$this.init = function(){
		$this.contentLoading = $(option.contentLoading || "#content-loading");
		$this.contentArea = $(option.contentArea || "#content-area");
		$this.form = $("#"+option.form);

		if ($this.errorDisplay=='validator') {
			$this.validator = $this.form.validate({
				errorElement: "span",
				errorPlacement: function (error, element) {
					var id = $(element).prop("id")+"_error";
					var r = $("#"+id)
					if (r.length) {
						error.addClass("invalid-feedback").prop("id", id);
						$("#"+id).replaceWith(error)
					} else {
						error.addClass('invalid-feedback');
      					element.closest('.form-group').append(error);
					}
				},
				highlight: function (element, errorClass, validClass) {
					$(element).addClass("is-invalid");
				},
				unhighlight: function (element, errorClass, validClass) {
					$(element).removeClass("is-invalid");
				}
			})
		}
		
		var formOptions = {
			beforeSerialize:function($Form, options){
				if(typeof option.beforeSerialize != "undefined"){
					option.beforeSerialize();
				}
				
				if(typeof CKEDITOR != 'undefined'){
					for ( instance in CKEDITOR.instances ) {
						if($this.form.find("#"+instance)){
							CKEDITOR.instances[instance].updateElement();
						}
					}
				}
			},
			beforeSubmit: function(arr, $form, options) {
				if(typeof option.beforeSubmit != "undefined"){
					option.beforeSubmit();
				}
				
				$('#'+option.form+'_errorAll').empty().hide();
				if ($this.errorDisplay=='validator') {
					$this.validator.showErrors({})
				}
				$this.disableContentArea();
			},
			success: function(data){
				var
				onSuccess = function(data){
					if(data.errors){
						if ($this.errorDisplay=='validator') {
							var errors = {}
							$.each(data.errors, function(f, c){
								if (f=='errorAll') {
									$('#'+option.form+'_errorAll').html(c).show();
								} else {
									var n = $('#'+option.form+'_'+f).prop('name');
									if (n) {
										errors[n] = c;
									}
								}
							});
							$this.validator.showErrors(errors)
						}
					} else if (data.success) {
						if (data.successMsg) {
							$this.form.find($this.msgSuccess).html(data.successMsg).show();
						}
						$this.form.trigger("reset")
						if (option.onSuccess) {
							option.onSuccess()
						}
					}
				};
				$this.enableContentArea();
				jsonOrHtmlScript(data, function(data){
					checkObjErr(data, onSuccess)
				})
			},
			error: function(a, b, c){
				$this.enableContentArea();
				var errorFound = true
				if (a.responseJSON) {
					if (a.responseJSON.errors){
						if ($this.errorDisplay=='validator') {
							errorFound = false
							var errors = {}
							$.each(a.responseJSON.errors, function(f, c){
								if (f=='errorAll') {
									$('#'+option.form+'_errorAll').html(typeof c === 'string' ? c : c[0]).show();
								} else {
									var n = $('#'+f.replace(/\./g, '_')).prop('name');
									if (n) {
										errors[n] = c;
									}
								}
							});
							$this.validator.showErrors(errors)
						}
					}
				}
				if (errorFound) {
					alert("Some server error found...");
				}
			}
		};
		$this.form.ajaxForm(formOptions);
		
		$this.form.find(".btnCancel").on("click", function(){
			window.location.href = $(this).attr("data-url");
		})
		
		$this.form.find("div.error,span.error,div.msgError,span.msgError").hide().not(":empty").show();
		
		$this.contentLoading.hide();
		$this.contentArea.show();
	};

	$this.enableContentArea = function(){
		$this.contentArea.css("cursor", "default");
		$this.contentArea.find("*").removeAttr("mouseenabled").css("pointer-events", "auto");
		( new dvBlockClass($this.form, {
			img : window.loaderLargePath
		}) ).u();
	};
	
	$this.disableContentArea = function(){
		$this.contentArea.css("cursor", "wait");
		$this.contentArea.find("*").prop("mouseenabled", false).css("pointer-events", "none");
		( new dvBlockClass($this.form, {
			img : window.loaderLargePath
		}) ).b();
	}
	
	return $this;
}
function formImageUploadModule(key, templates){
	var
	$this = this,
	prefix = "imageUpload-"+key,
	ref = {
		c: null,
		e: null,
		l: null
	},
	index = 0;
	
	$this.uploadSuccess = function(file, data){
		var
    	_index = file.indexID,
    	template = templates.listItemInput,
    	el = $("#"+prefix+"-item-"+_index);
    	
    	template = template.replace(/#INDEX#/g, _index)
		.replace(/#ID#/g, "")
		.replace(/#FILE#/g, data.file)
		.replace(/#TITLE#/g, "");
    	
    	el.find("div.dz-data").html( template );
    	
    	// el.find("div.dz-image img").attr("src", data.fileRoot+data.fileSrc);
    	
		el.find("div.data-dz-remove").show();
		
		el.find("div.data-dz-img-view").find("a").attr('href', data.url).end().show();
    	
    	el.addClass("dz-success");
	};
	
	$this.uploadError = function(file, data){
		var
    	_index = file.indexID,
    	el = $("#"+prefix+"-item-"+_index),
    	timer = null;
		
		el.addClass("dz-error").append($("<div>").html(data.error));
		
		el.on("click", function(){
			el.remove();
			clearTimeout(timer)
    	});
    	
		timer = setTimeout(function(){
			el.remove();
    	}.bind(this), 5000);
	};
	
	$this.uploadComplete = function(file, data){
		if(data.success){
			$this.uploadSuccess(file, data)
		}
		else{
			$this.uploadError(file, data)
		}
	};
		
	$this.init = function(){
		$(function(){
			ref.c = $("#"+prefix+"Box");
			ref.e = $("#"+prefix+"Element");
			ref.l = $("#"+prefix+"List");

			ref.l.find("div.dz-preview").each(function(){
		    	var
		    	el = $(this),
		    	_index = el.attr("data-index");
		    	
		    	el.addClass("dz-processing").addClass("dz-complete");
		    	
		    	el.find("div.data-dz-remove").show();
		    	
		    	$this.afterAdd(_index);
		    	
		    	index++;
		    });
			
			ref.e.dropzone({
				url: ref.c.attr("data-url"),
				headers: {
			        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
			    },
			    previewTemplate: $("#"+prefix+"PreviewTemplate").html(),
			    previewsContainer: "#"+prefix+"PreviewContainer",
			    addedfile: function(file){
			    	var _index = index++,
			    	template = templates.listItem;
			    	file.indexID = _index;
			    	
			    	template = template
			    	.replace(/#INDEX#/g, _index)
			    	.replace(/#DATA#/g, "");
			    	
			    	ref.l.append(template);
			    	
			    	el = $("#"+prefix+"-item-"+_index)
					el.find("div.data-dz-remove").hide();
					el.find("div.data-dz-img-view").hide();
			    	
			    	$this.afterAdd(_index);
			    },
			    thumbnail: function(file, dataUrl) {
			    	var
			    	_index = file.indexID,
			    	el = $("#"+prefix+"-item-"+_index);
			    	
			        el.find("img[data-dz-thumbnail]").attr("src", dataUrl);
			    },
			    processing: function(file){
			    	var
			    	_index = file.indexID,
			    	el = $("#"+prefix+"-item-"+_index);
			    	
			    	el.addClass("dz-processing");
			    },
			    uploadprogress: function(file, progress, bytesSent) {
			    	var
			    	_index = file.indexID,
			    	el = $("#"+prefix+"-item-"+_index);
			    	
			    	el.find("span.dz-upload").css({"width": progress+"%"})
				},
			    error: function(file, data){
			    	jsonOrHtmlScript(data, function(data){
			        	checkObjErr(data, function(){
			        		$this.uploadComplete(file, data)
			        	})
			        });
			    },
			    success: function(file, data){
			    	jsonOrHtmlScript(data, function(data){
			        	checkObjErr(data, function(){
			        		$this.uploadComplete(file, data)
			        	})
			        });
			    },
			    complete: function(file){
			    	var
			    	_index = file.indexID,
			    	el = $("#"+prefix+"-item-"+_index);
			    	
					el.addClass("dz-complete");
					
					el.find("span.dz-upload").remove();
			    }
			});

			/* ref.e.sortable({
		        items:'.dz-preview',
		        cursor: 'move',
		        opacity: 0.5,
		        containment: "parent",
		        distance: 20,
		        tolerance: 'pointer',
		        update: function(e, ui){
		        }
		    }); */
		});
	}
	
	$this.afterAdd = function(_index){
		var
		el = $("#"+prefix+"-item-"+_index);
		
		el.find("div.data-dz-remove").on("click", function(){
    		confirmDialog("Are you sure you want to remove?", function(b){
    			if(b){
    				el.remove();
    			}
    		});
    	});
	}
		
}
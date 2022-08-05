
function applySelect2 (o) {
    o.find('select.select2').select2();
    o.find('select.select2-multiple').select2({
        multiple: true
    });

    o.find('select.select2bs4').select2({
      theme: 'bootstrap4'
    });

	o.find("select.data-select2").not(".data-select2-added").each(function () {
		var
		el = $(this),
		options = {
			allowClear: true
		};
		
		if(el.find("option:first").val()==""){
			options.placeholder = el.find("option:first").text();
		}
		
		el.addClass("data-select2-added");
		
		if( el.attr("data-select2-multiple")==1 ){
			options.tags = false;
			el.attr("multiple", "multiple");
			if(el.find("option:first").val()==""){
				el.find("option:first").remove();
			}
		}
		else{
			el.removeAttr("multiple");
		}
		
		if( el.attr("data-select2-selected") ){
			try{
				var selected = $.parseJSON(el.attr("data-select2-selected"));
				$.each(selected, function(i){
					el.find("option[value="+selected[i].id+"]").prop("selected", true);
				});
			}
			catch(e){
				console.log(e)
			}
		}
		
		el.select2(options);
	});
	
	o.find("select.data-select2-ajax").not(".data-select2-added").each(function () {
		var
		el = $(this), cache = {}, isCache = el.attr("data-select2-cache")==1,
		options = {
			ajax: {
				url: el.attr("data-select2-url"),
				delay: 250,
				dataType: 'json',
				data: function(params) {
					var params_ = {}
					try{
						params_ = $.parseJSON(el.attr('data-select2-url-param'))
					} catch (e){
						params_ = {}
					}
					params_.term = params.term || ""
					params_.page = params.page || 1
					return params_;
				},
				processResults: function(data, params) {
					jsonOrHtmlScript(data, function(data){
						checkObjErr(data, function(){})
					});
					
					params.page = params.page || 1;
					
					return {
						results: data.items || [],
						pagination: {
							more: (params.page * data.limit) < data.total
						}
					};
				},
				transport: function (params, success, failure) {
					var term = params.data.term || "";
					if(isCache && cache[term]){
						var promise = new Promise(function(resolve, reject) {
						});
						promise.abort = function(){
							return null;
						}
						success.apply(this, cache[term]);
						return promise;
					}
					else{
						var $request = $.ajax(params);

						$request.then(function(){
							cache[term] = arguments;
							success.apply(this, arguments);
						});
						$request.fail(failure);

						return $request;
					}
				}
			},
			allowClear: true,
			minimumInputLength: el.attr("data-select2-min-input")
		};
		
		if(el.find("option:first").val()==""){
			options.placeholder = el.find("option:first").text();
		}
		
		el.addClass("data-select2-added");
		
		if( el.attr("data-select2-multiple")==1 ){
			options.tags = false;
			el.attr("multiple", "multiple");
			if(el.find("option:first").val()==""){
				el.find("option:first").remove();
			}
		}
		else{
			el.removeAttr("multiple");
		}
		
		if( el.attr("data-select2-selected") ){
			try{
				var selected = $.parseJSON(el.attr("data-select2-selected"));
				$.each(selected, function(i){
					el.append(
						$("<option>", {
							value: selected[i].id,
							selected: "selected"
						}).html( selected[i].text )
					);
				});
			}
			catch(e){
				console.log(e)
			}
		}
		
		el.select2(options);
	});
}
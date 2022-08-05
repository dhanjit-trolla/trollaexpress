function getCurrentRootPath(){ 
	var scr=document.getElementsByTagName('script');
	scr=scr[scr.length-1];
	var src='';
	try{
		src = scr.src || scr.text;
	}
	catch(err){
		src = scr.getAttribute("src");
	}
	src = src.replace(location.protocol+'//', '');
	src = src.replace(location.host, '');
	src = src.split('?');
	src = src[0].split('/');
	src.remove(-3,-1);
	return ( ('/'+src.join('/')+'/').replace('///', '/') ).replace('//', '/');
}
function dvBlockClass(d, options) {
	if(!options){
		options={};
	}
	this.d=d;
	this.argvs={};
	this.argvs['message']='<img src="'+(options.img==undefined ? window.loaderpath : options.img)+'" />';
	this.argvs['css']={};
	this.argvs['overlayCSS'] = {};
	this.argvs['css']['border']='none';
	this.argvs['css']['backgroundColor']='transparent';
	if(options.opacity){
		this.argvs['css']['opacity']=options.opacity;
	}
	if(options.overlayCssBgColor){
		this.argvs['overlayCSS']['backgroundColor']=options.overlayCssBgColor;
	}		
	if(options.top){
		this.argvs['centerY']=false;
		this.argvs['css']['top']=options.top?options.topy:'10px';
	}
	this.b=function(){
		try{
			$(this.d).block(this.argvs);
		}catch(err){}
	};	
	this.u=function(){
		try{$(this.d).unblock() ;}catch(err){}
	};
}

Array.prototype.remove = function(from, to) {
	var rest = this.slice((to || from) + 1 || this.length);
	this.length = from < 0 ? this.length + from : from;
	return this.push.apply(this, rest);
};

function parseJSON(data){
	var isJSON = false,json = {}, t = typeof data;
	try{
		if( t=='object' || t=='array' ){
			json = data;
			isJSON = true;
		}
		else{
			json = $.parseJSON(data);
			t = typeof json;
			if( t=='object' || t=='array' ){
				isJSON = true;
			}
		}
	}
	catch(e){
		isJSON = false;
	}
	if( isJSON ){
		return json;
	}
	else{
		return false;
	}
}
function jsonOrHtmlScript(data, cbS, cbE){
	var isJSON = false,json = {}, t = typeof data;
	try{
		if( t=='object' || t=='array' ){
			json = data;
			isJSON = true;
		}
		else{
			json = $.parseJSON(data);
			t = typeof json;
			if( t=='object' || t=='array' ){
				isJSON = true;
			}
		}
	}
	catch(e){
		isJSON = false;
	}
	if( isJSON ){
		cbS(json);
	}
	else{
		if(typeof(cbE)=="function"){
			cbE(data)
		}
		else{
			runAjaxHtmlScript(data);
		}
	}
};
function runAjaxHtmlScript(code){
	var d = $("<div>").html(code).hide();
	$("body").append( d );
	window.setTimeout(function(){
		d.remove();
	}, 100);
};

function stopBrowserLoading(){
	try{window.document.execCommand('Stop');}catch(err){}
	try{window.stop();}catch(err){}
};

function IntCast($Num){$Num = parseInt($Num, 10); return isNaN($Num)?0:$Num;}
function FloatCast($Num){$Num = parseFloat($Num); return isNaN($Num)?0:$Num;}

window.rootPath = getCurrentRootPath();
window.loaderpath = window.rootPath+'themes/images/ajax-loader.gif';
window.loaderLargePath = window.rootPath+'themes/images/ajax-loader-100x100.gif';
window.loaderSmallPath = window.rootPath+'themes/images/ajax-loader-20x20.gif';
window.loaderSvg16_16 = window.rootPath+'themes/images/ajax-loader.svg';
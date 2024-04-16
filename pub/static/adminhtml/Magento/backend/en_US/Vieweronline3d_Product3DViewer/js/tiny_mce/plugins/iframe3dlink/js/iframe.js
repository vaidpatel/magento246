var IframeLinklog = {
	init : function(ed) {
		
	},
	update : function() {
		var ed = tinyMCEPopup.editor, h, f = document.forms[0], st = '';
		
		if (f.url.value=='') {
			tinyMCEPopup.alert('p3dvoil.murl_invalid');
			return;
		}
		h = '<iframe id="3dviewerplayer" type="text/html"';
		
		if (f.width.value) {
			h += ' width="' + f.width.value +'"';
		}else{
			h += ' width="640"';
		}
		
		if (f.height.value) {
			h += ' height="' + f.height.value +'"';
		}else{
			h += ' height="480"';
		}
		
		if (f.url.value) {
			h += ' src="' + f.url.value +'"';
		}
		
		h += 'frameborder="0" scrolling="no" allowfullscreen webkitallowfullscreen mozallowfullscreen ></iframe>';

		ed.execCommand("mceInsertContent", false, h);
		tinyMCEPopup.close();
	}
};

tinyMCEPopup.requireLangPack();
tinyMCEPopup.onInit.add(IframeLinklog.init, IframeLinklog);

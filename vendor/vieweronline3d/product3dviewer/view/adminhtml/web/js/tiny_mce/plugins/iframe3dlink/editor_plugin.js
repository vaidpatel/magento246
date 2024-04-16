(function() {
	tinymce.create('tinymce.plugins.Iframe3dLinkPlugin', {
		init : function(ed, url) {
			// Register buttons
			var img = url + '/img/icon.gif';
			ed.ui.registry.addIcon('icon', '<img src=" '+ img +' " />');
			ed.ui.registry.addButton('iframe3dlink', {		      
		      onAction: function (_) {
		        ed.windowManager.openUrl({
					url : url + '/iframe.htm',
					title: '3D Model Viewer',
					width : 350,
					height : 200,
					inline : 1
				}, {
					plugin_url : url
				});
		      },
		      icon: 'icon',
		      title: '3D Model Viewer'
		    });

		},

		getInfo : function() {
			return {
				longname : '3DVieweronline',
				author : 'Marco Pavan',
				authorurl : 'https://www.3dvieweronline.com',
				infourl : 'https://www.3dvieweronline.com',
				version : '1.0'
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('iframe3dlink', tinymce.plugins.Iframe3dLinkPlugin);
})();
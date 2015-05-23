var menu_links = {
	home: {
		text: 'home',
		file: 'home.html',
		default: true
	},
	'about us': {
		text: 'about us',
		file: 'about.html'
	}
}
function attach_links(){
	for (key in menu_links){
		var li = $('<li>');
		var a = $('<a>',{
			text:menu_links[key].text
		}).click(function(){
			load_page($(this).text());
		});
		li.append(a);
		$('.navbar-nav').append(li);
		if(typeof menu_links[key].default != 'undefined')
		{
			a.click();
		}
	}
}
function load_page(page){
	target_url = menu_links[page].file;
	$.ajax({
		url: 'pages/'+target_url,
		dataType: 'html',
		cache: false,
		success: function(response){
			$('#main_content_area').append(response);
		}

	});
		
}
$(document).ready(function(){
	attach_links();	
});
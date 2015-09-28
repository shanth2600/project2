window.doodle = {
  window: $(window),
  doc: $(document),
  html: $('html'),
  body: $('body')
};
window.doodle.env = {
  url: doodle.html.data('url'),
  token: doodle.html.data('token')
};

$.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': doodle.env.token }
});


$(document).ready(function(){



	$("#file-upload").click(function(){
		$("#uploadFile").click();
	});    

	$("#uploadFile").change(function(){
		var fileTypes = ['jpg','jpeg','png','bmp','tiff'];

		var filePicked = $(this).val();
		var fileExtension = filePicked.substr(filePicked.lastIndexOf('.')+1);

		if($.inArray(fileExtension,fileTypes)<0){
			alert('invalid filetype');
			$(this).val('');
		}else{
			$('#imageUploader').submit();
		}
	});

	$('#imageUploader').submit(function(e){
		e.preventDefault();
		$.ajax({
			url:'image',
			method:'POST',
			processData: false,
			contentType: false,
			data:new FormData(this),
			success:function(data){
				var background = new Image();
				background.src = data;
				background.onload = function(){
					var canvas = document.getElementById('paintcan');
					var ctx = canvas.getContext("2d");
					ctx.drawImage(background,0,0);   
				}
			}
		});		

	});

});
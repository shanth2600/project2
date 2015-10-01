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

	$('#save-button').click(function(){
		var canvas = $('#canvas')[0];
		var dataURL = canvas.toDataURL();
		$.ajax({
			url:'project',
			method:'POST',
			data:{
				project:dataURL
			},
			success:function(data){
				alert('Saved');
			}
		});
	});

	$('#color-button').click(function(){
		$('#color').click();
	});

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

	var drawToCanvas = function(url){
		var background = new Image();
			background.src = url;
			background.onload = function(){
				var canvas = document.getElementById('canvas');
				var ctx = canvas.getContext("2d");
				ctx.clearRect(0, 0, 700, 700);
				ctx.drawImage(background,0,0,700,500);
			}

	}

	$('.template-container').click(function(e){
		url = $(e.target).data('url');
		drawToCanvas(url);
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
				drawToCanvas(data);
			}
		});		

	});

});
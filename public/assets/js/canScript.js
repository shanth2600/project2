

var putPoint = function(e){
	if(dragging){
		context.lineTo(e.clientX - this.offsetLeft, e.clientY - this.offsetTop);
		//context.strokeStyle = color;
		context.strokeStyle = '#ff0000';
		context.stroke();
		context.beginPath();
		context.arc(e.clientX - this.offsetLeft, e.clientY - this.offsetTop, radius, 0, 2*Math.PI);
		//context.fillStyle = color; //comment out this line for cool effect
		context.fillStyle = '#ff0000';
		context.fill();
		context.beginPath();
		context.moveTo(e.clientX - this.offsetLeft, e.clientY - this.offsetTop);
	}
}

var engage = function(e){
	dragging = true;
	putPoint(e);
}

var disengage = function(){
	dragging = false;
	context.beginPath();
}


//change color
function change(e)
{
    color = this.value;
}
//document.getElementById("color").onchange = change;
//end change color

//change size
function updateTextInput(val) {
	radius = val;
	context.lineWidth = radius*2;
	document.getElementById('textInput').value = val; 
}
//end change size

var canvas = document.getElementById('paintcan');

if(canvas){
	var context = canvas.getContext('2d');

	var radius = 100;
	//document.getElementById('textInput').value;
	var dragging = false;

	context.lineWidth = radius*2;


	canvas.addEventListener('mousedown', engage);
	canvas.addEventListener('mousemove', putPoint);
	canvas.addEventListener('mouseup', disengage);	
}

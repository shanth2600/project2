var canvas = document.getElementById('paintcan');
var context = canvas.getContext('2d');

var radius = document.getElementById('textInput').value;
var dragging = false;

context.lineWidth = radius*2;

var putPoint = function(e){
	if(dragging){
		context.lineTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
		context.strokeStyle = color;
		context.stroke();
		context.beginPath();
		context.arc(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop, radius, 0, 2*Math.PI);
		context.fillStyle = color; //comment out this line for cool effect
		context.fill();
		context.beginPath();
		context.moveTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
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

canvas.addEventListener('mousedown', engage);
canvas.addEventListener('mousemove', putPoint);
canvas.addEventListener('mouseup', disengage);

//change color
function change(e)
{
    color = this.value;
}
document.getElementById("color").onchange = change;
//end change color

//change size
function updateTextInput(val) {
	radius = val;
	context.lineWidth = radius*2;
	document.getElementById('textInput').value = val; 
}
//end change size

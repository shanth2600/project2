var dragging = false;
var canvas = document.getElementById('canvas');

var putPoint = function(e){
	if(dragging){
		
    //get user's x, y coords with the offset
    var x = e.pageX - this.offsetLeft - 400;
		var y = e.pageY - this.offsetTop - 110;
        
    //store the state values of the current line drawn into a js object
		var point = {x: x, y: y, color: color, radius: radius, lineWidth: radius*2};
        
        //push onto stack
		tempStack.push(point);
        
        //draw points on screen as circles and connect the dots
		context.lineTo(x, y);
		context.strokeStyle = point.color;
        context.lineWidth = point.lineWidth;
		context.stroke();
		context.beginPath();
		context.arc(x, y, point.radius, 0, 2*Math.PI);
		context.fillStyle = point.color; //comment out this line for cool effect
		context.fill();
		context.beginPath();
		context.moveTo(x, y);
	}
};

var engage = function(e){
	dragging = true;
	putPoint(e);
};

var disengage = function(){
	dragging = false;
	context.beginPath();
    
	//push all state values (x, y, etc.) that were captured onto drawStack from tempStack
    drawStack.push(tempStack);
    
    //reset temp stack so it can take a new set of points to make up a new line
	tempStack = new Array();
};

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

function erasor()
{
	color = "white";
}

//New////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


var drawStack  = new Array(); //all lines drawn on screen will be stored here
var undoStack  = new Array(); //all lines undone will be stored here
var tempStack  = new Array(); //all points will be stored here while line is being drawn, then gets pushed onto drawStack

function undo()
{
    if(drawStack.length === 0)
    {
      return; //can't be a negative number!
    }
    
    undoStack.push(drawStack.pop());
	redraw();
}
      
function redo()
{
   if(undoStack.length === 0)
   {
     return; //can't be a negative number!
   }
   
   drawStack.push(undoStack.pop());
   redraw();
}

function clear()
{
  context.clearRect(0, 0, 800, 500);
}

function reset()
{
  var del = window.confirm("Warning: This will clear all actions and cannot be undone. Are you sure?");
  
  if(del)
  {
    clear();
    drawStack = new Array();
    undoStack = new Array();
    tempStack = new Array();
  }
  
}

function redraw()
{
    //clear canvas
    clear();

    //redraw lines that belong on the canvas at this point in time
	for(var i = 0; i < drawStack.length; i++)
	{
        var temp = drawStack[i];
        //clog(temp);
        for(var j = 0; j < temp.length; j++)
        {
          context.lineTo(temp[j].x, temp[j].y);
          context.strokeStyle = temp[j].color;
          context.lineWidth = temp[j].lineWidth;
          context.stroke();
          context.beginPath();
          context.arc(temp[j].x, temp[j].y, temp[j].radius, 0, 2*Math.PI);
          context.fillStyle = temp[j].color; //comment out this line for cool effect
          context.fill();
          context.beginPath();
          context.moveTo(temp[j].x, temp[j].y);
        }
          
	}
}

//allows for shorter name to write to console, only used for debugging
function clog(msg)
{
  console.log(msg);
}



if(canvas){
  var radius = document.getElementById('textInput').value;
  var color = document.getElementById('color').value;
  var context = canvas.getContext('2d');

  context.lineWidth = radius*2;
}
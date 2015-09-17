<?php

/* Date: 09/13/2015
 * Author: Rostom Sahakian
 * **ATTENTION** Nick and London
 * This is where we need to put the HTML5 Canvas 
 * Any java script files that need to be added under assests/js
 * Then put the name in the init.php file where it says the $java_script. 
 * It is an array so only put the new file's name separated by comma
 */

?>
<script>
    $(document).ready(function(){
        $("#options").hide();
       $("#colors").click(function(){
          $("#options").show(); 
       }); 
        
    });
</script>    

<!---DIV Container --->
<div class="container" id="main_wapper">
    <!-----------------------TOP MENU BEGINS----------------------------------->
    <div class="col-lg-12">
        <div class="col-lg-5">
      <div class="btn-group" role="group" aria-label="..."> 
  <!----------------FILE----------------------------->
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-folder"></i> File
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="#"><i class="fa fa-file-image-o"></i>&nbsp;New</a></li>
      <li><a href="#"><i class="fa fa-folder-open-o"></i>&nbsp;Open</a></li>
      <li><a href="#"><i class="fa fa-floppy-o"></i>&nbsp;Save</a></li>
      <li><a href="#"><i class="fa fa-print"></i>&nbsp;Print</a></li>
    </ul>
  </div>
  <!-----------END FILE---------------------------------->
  <!------------EDIT----------------------------->        
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Edit
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="#"><i class="fa fa-undo"></i> &nbsp;Undo</a></li>
        <li><a href="#"><i class="fa fa-eraser"></i> &nbsp;Delete</a></li>
        <li><a href="#"><i class="fa fa-files-o"></i>&nbsp;Copy</a></li>
        <li><a href="#"><i class="fa fa-clipboard"></i>&nbsp;Paste</a></li>


    </ul>
  </div>
  <!--------------END EDIT--------------------------------->
   <!---------VIEW---------------------------->       
     <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     View
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="#"><i class="fa fa-search-plus"></i>&nbsp;Zoom in</a></li>
        <li><a href="#"><i class="fa fa-search-minus"></i>&nbsp;Zoom out</a></li>
    </ul>
  </div>     
   <!----------END VIEW---------------------------------->     
  
   <!---------Tools---------------------------->       
     <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Tools
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="#colors" id="colors"><i class="fa fa-th-large"></i>&nbsp;Colors</a></li>
        <li><a href="#shapes" id="shapes"><i class="fa fa-square"></i>&nbsp;Shapes</a></li>
        <li><a href="#pencil" id="pencil"><i class="fa fa-pencil"></i>&nbsp;pencil</a></li>
        <li><a href="#brushes" id="brushes"><i class="fa fa-paint-brush"></i>&nbsp;Brushes</a></li>
        <li><a href="#fill" id="fill"><i class="fa fa-eyedropper"></i>&nbsp;Fill with colors</a></li>
        <li><a href="#eraser" id="eraser"><i class="fa fa-eraser"></i>&nbsp;Eraser</a></li>
        
        

    </ul>
  </div>     
   <!----------END VIEW---------------------------------->         
        
        
       

    </div>
</div>
</div> 
     <!------------------END OF TOP MENU-------------------------------------> 
  
     <div class="col-lg-12">
         <div class="col-lg-2">
             <div id="options">
                 <table >
                     <tr>
                         <td id="white"><a href="#"></a></td>
                         <td id="black"><a href="#"></a></td>
                         <td id="gray"><a href="#"></a></td>
                         <td id="drakgray"><a href="#"></a></td>
                         <td id="darkred"><a href="#"></a></td>
                         <td id="red"><a href="#"></a></td>
                         <td id="lightgray"><a href="#"></a></td>
                         <td id="lavender"><a href="#"></a></td>
                         <td id="orange"><a href="#"></a></td>
                         <td id="yellow"><a href="#"></a></td>
                     </tr>

                      <tr>
                         <td id="brown"><a href="#"></a></td>
                         <td id="bluegray"><a href="#"></a></td>
                         <td id="green"><a href="#"></a></td>
                         <td id="turquoise"><a href="#"></a></td>
                         <td id="pink"><a href="#"></a></td>
                         <td id="lightturquoise"><a href="#"></a></td>
                         <td id="indigo"><a href="#"></a></td>
                         <td id="purple"><a href="#"></a></td>
                         <td id="lightpink"><a href="#"></a></td>
                         <td id="lime"><a href="#"></a></td>
                         
                         
                         
                     </tr>
                  
                 </table>
           
         </div>
             
         </div>    
         <div class="col-lg-7">
             <canvas id="paintcan">
                 
             </canvas>
             
             <!--   Here is where the code that I have added begins.               -->
             <!--   Note that it is important to add the canvas.js script          -->
             <!--   at the bottom of the document as opposed to the header         -->
             <!--   where the page_loader function puts it. This is because        -->
             <!--   the page has yet to fully load at the time the server reads    -->
             <!--   the javascript in the head and therefore some elements may     -->
             <!--   not be recognized                                              -->
             <style>
				canvas {
					border: 1px solid black;
				}
			</style>
            <script>
             	var canvas = document.getElementById('paintcan');
				var context = canvas.getContext('2d');
				context.lineWidth = 5;
				var down = false;

				canvas.addEventListener('mousemove', draw);

				canvas.addEventListener('mousedown', function()
				{
					down = true;
					context.beginPath();
					context.moveTo(xPos, yPos);
					canvas.addEventListener("mousemove", draw);
				});

				canvas.addEventListener('mouseup', function() {down = false;});

				function draw(e)
				{
					xPos = e.clientX - canvas.offsetLeft;
					yPos = e.clientY - canvas.offsetTop;
	
					if(down == true)
					{
						context.lineTo(xPos, yPos);
						context.stroke();
					}
				}
			</script>
            <script src="assets/js/canvas.js"></script>
            <!--                      End of new code                            -->
         
         </div>

         
         <div class="col-lg-3">
             <?php
             if(isset($_GET['flag']) && $_GET['flag'] == "skip"){
                 
                 $message = "1";
                 $staus = "Login/Sign up";
             }else{
                 $message = "0";
                 $staus = "Profile";
             }
             
             
             ?>
              <div class="panel panel-default">
             <ul class="nav nav-pills" role="tablist">

  <li role="presentation"><a href="#"><?= $staus; ?></a></li>
  <li role="presentation"><a href="#">Messages <span class="badge"><?= $message ?></span></a></li>
</ul>
              </div>
         </div>
     </div>

    
</div>

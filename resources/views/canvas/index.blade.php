@extends('layouts.master')
@section('content')
<script>
    $(document).ready(function(){
        $("#options").hide();
       $("#colors").click(function(){
          $("#options").show(); 
       }); 
        
    });
</script>    
<!---DIV Container -->
<div class="container" id="main_wapper">
  <!-----------------------TOP MENU BEGINS--------------------------------- -->
  <div class="col-lg-12">
    <div class="col-lg-5">
      <div class="btn-group" role="group" aria-label="..."> 
        <!----------------FILE--------------------------- -->
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-folder"></i> File
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-file-image-o"></i>&nbsp;New</a></li>
            {!! Form::open(['id' => 'imageUploader' ,'url' => 'image']) !!}
            <input type="hidden" value="johnny" name="xx">
            <input name="canvas-image" type="file" class="hidden" id="uploadFile"/>
            {!! Form::close() !!}
            <li id="file-upload"><a style="cursor:pointer"><i class="fa fa-file-image-o"></i>&nbsp;Upload</a></li>
            <li><a href="#"><i class="fa fa-folder-open-o"></i>&nbsp;Open</a></li>
            <li><a href="#"><i class="fa fa-floppy-o"></i>&nbsp;Save</a></li>
            <li><a href="#"><i class="fa fa-print"></i>&nbsp;Print</a></li>
          </ul>
        </div>
  <!-----------END FILE-------------------------------- -->
  <!------------EDIT--------------------------- -->        
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
     <!------------------END OF TOP MENU----------------------------------- --> 
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
        <canvas width="500px" height="500px" style="border:1px solid black" id="paintcan">                 
        </canvas>            
      </div>                                      
      <div class="col-lg-3">                          
        <div class="panel panel-default">
          <ul class="nav nav-pills" role="tablist">
            <li role="presentation"><a href="{{ url('profile/'.Auth::user()->id) }}">Profile</a></li>
            <li role="presentation"><a href="#">Messages <span class="badge">0</span></a></li>
          </ul>
        </div>
        <div class="templates-container">
          @foreach($templates as $template)
            <span class="template-container" style="background:url('{{ $template->url }}')" data-url="{{ $template->url }}"></span>
          @endforeach
        </div>
      </div>
     </div>    
</div>

@stop
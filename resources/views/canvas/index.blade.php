@extends('layouts.master')
@section('content')   
<!---DIV Container -->
<div class="container" id="main_wapper">
  <!-----------------------TOP MENU BEGINS--------------------------------- -->
  <div class="col-lg-12" style="margin-bottom:20px">
    <div class="col-lg-5">
      <div class="btn-group" role="group" aria-label="..."> 
        <!----------------FILE--------------------------- -->
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-folder"></i> File
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            {!! Form::open(['id' => 'imageUploader' ,'url' => 'image']) !!}
            <input type="hidden" value="johnny" name="xx">
            <input name="canvas-image" type="file" class="hidden" id="uploadFile"/>
            {!! Form::close() !!}
            <li id="file-upload"><a style="cursor:pointer"><i class="fa fa-file-image-o"></i>&nbsp;Upload</a></li>
            <li><a href="#"><i class="fa fa-folder-open-o"></i>&nbsp;Open</a></li>
            <li><a id="save-button" style="cursor:pointer" ><i class="fa fa-floppy-o"></i>&nbsp;Save</a></li>
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
            <li><a href="#" onclick=" undo();" ><i class="fa fa-undo"></i> &nbsp;Undo</a></li>
            <li><a href="#" onclick=" redo();"><i class="fa fa-eraser"></i> &nbsp;Redo</a></li>
            <li><a href="#" onclick=" reset();"><i class="fa fa-eraser"></i> &nbsp;Reset</a></li>

          </ul> 
        </div>
  <!--------------END EDIT--------------------------------->
  
   <!---------Tools---------------------------->       
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tools
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
              <li><a href="#colors" id="color-button"><i class="fa fa-th-large"></i>&nbsp;Colors</a></li>
              <li><a href="#pencil" id="pencil"><i class="fa fa-pencil"></i>&nbsp;pencil</a></li>
              <li><a href="#brushes" id="brushes"><i class="fa fa-paint-brush"></i>&nbsp;Brushes</a></li>
              <li><a href="#eraser" id="erasor" onClick="erasor();"><i class="fa fa-eraser"></i>&nbsp;Eraser</a></li>              
          </ul>
        </div>     
   <!----------END VIEW---------------------------------->                               
      </div>
    </div>
  </div> 
     <!------------------END OF TOP MENU----------------------------------- --> 
     <div class="col-lg-12">   
      <div class="col-lg-7 col-xs-offset-2">
        <canvas id="canvas" width="700" height="500" style="border:1px solid black"></canvas>
          <div id="buttons" class="col-md-4">
          <input type="color" id="color" style="display:none">
          <input type="range" value="5" id="size" min="1" max="100" onChange="updateTextInput(this.value);">                                                       
          <input type="text" id="textInput" value="5" style="display:none">
        </div>
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
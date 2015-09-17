@extends('layouts.master')
@section('content')
<div class="container">
  <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>         
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">             
            <li class=""><a href="#">Home</a></li>             
            <li class=""><a href="#">About this app</a></li>             
            <li class=""><a href="#">paint</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>
        

<div class="container" id="main_wapper">
  <div class="col-lg-12">
      <div class="col-lg-2"></div>
      <div class="col-lg-8" id="welcome">
        <div class="panel panel-default">
        <div class="panel-heading"> <h1 class="h1" >Welcome to DoodleMaestro</h1></div>
        </div>
      </div>
      <div class="col-lg-2"></div>
  </div>
   <!----END OF WELCOME MESSAGE ------------- -->
   <!-----------------LOGIN FORM BEGINS----------------------- -->
   <div class="col-lg-12">
    @if(Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    @if(Session::has('errors'))
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
        {{ $error }}
      @endforeach
    </div>
    @endif    
    <div class="col-lg-6" id="selections">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="h3">Login</h3></div>                
          <div class="panel-body">
          {!! Form::open() !!}         
              <div class="clearfix">
                <div class="input-group">
                  <span class="input-group-addon " id="sizing-addon2">
                      <i class="glyphicon glyphicon-user"></i>
                  </span>
                  <input name="email" type="text" class="form-control" placeholder="Email" id="inputboxes" aria-describedby="sizing-addon2">
                </div>
                  <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon3">
                        <i class="fa fa-key"></i>
                    </span>
                    <input name="password" type="password" class="form-control" placeholder="Password" id="inputboxes" aria-describedby="sizing-addon2">
                  </div>
                  <div class="pull-left">
                    <a href="#">Forgotten your username?</a>
                  </div>
                  <div class="pull-left">
                    <a href="#">Forgotten your password?</a>
                  </div>
                  <div class="input-group center-block">
                    <input type="submit" class="btn btn-lg btn-default" id="inputboxes" value="Log in"/>                      
                  </div>
              </div>
            {!! Form::close() !!}
          </div>          
        </div>
        <div class="center-block">
           <a href="#" class="alert-link" >Authenticate later &nbsp;<i class="fa fa-forward"></i></a>
        </div>
       </div>
     <!------------------LOGIN ENDS HERE------------------------- -->
     <!------------------SIGN UP FORM BEGINS--------------------- -->
      <div class="col-lg-6" id="selections">
        <div class="panel panel-success">
          <div class="panel-heading"><h3 class="h3">Sign up</h3></div>                
            <div class="panel-body">
              {!! Form::open(['url' => url('signup')]) !!}
                <div class="input-group">
                  <span class="input-group-addon " id="sizing-addon2">
                    <i class="glyphicon glyphicon-user"></i>
                  </span>
                  <input name="username" type="text" class="form-control" placeholder="Username" id="inputboxes" aria-describedby="sizing-addon2">
                </div>          
                <div class="input-group">
                  <span class="input-group-addon " id="sizing-addon2">
                    <i class="glyphicon glyphicon-envelope"></i>
                  </span>
                  <input name="email" type="email" class="form-control" placeholder="Email" id="inputboxes" aria-describedby="sizing-addon2">
                </div>
                <div class="input-group">
                  <span class="input-group-addon " id="sizing-addon2">
                    <i class="fa fa-key"></i>
                  </span>
                  <input name="password" type="password" class="form-control" placeholder="Password" id="inputboxes" aria-describedby="sizing-addon2">
                </div>
                <div class="input-group">
                  <span class="input-group-addon " id="sizing-addon2">
                      <i class="fa fa-key"></i>
                    </span>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" id="inputboxes" aria-describedby="sizing-addon2">
                </div>                  
                <div class="input-group">
                  <span class="input-group-addon " id="sizing-addon2">
                    <i class="fa fa-get-pocket"></i>
                  </span>
                  <select class="form-control">
                    <option value="--Select--">How did your about us?</option>
                    <option value="google">Google</option>
                    <option value="Bing">Bing</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Friends">Friends</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="input-group center-block ">
                  <input type="submit" class="btn btn-lg btn-success" id="inputboxes" value="Sign Up"/>                        
                </div>
            {!! Form::close() !!}              
            </div>    
        </div>        
       </div>
     <!----------------------END OF SIGN UP FORM------------------------------------------ - -->       
      </div>
   <!----------END OF col-lg-12---------------------------------------- -->
   </div>
   @stop
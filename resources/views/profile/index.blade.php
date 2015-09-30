@extends('layouts.master')
@section('content')

<script>
$(document).ready(function(){
    $("#divs1").show();
    $("#divs2").hide();
    $("#divs3").hide();
    $("#tab1").addClass("active");
  
   $("#button1").click(function(){
      $("#divs1").show();
     $("#divs2").hide();
     $("#divs3").hide(); 
     $("#tab3").removeClass("active");     
     $("#tab2").removeClass("active");
     $("#tab1").addClass("active");

    })
    $("#button2").click(function(){
      $("#divs2").show();
     $("#divs1").hide();
     $("#divs3").hide();  
     $("#tab1").removeClass("active");
     $("#tab3").removeClass("active");
     $("#tab2").addClass("active");

    })
    $("#button3").click(function(){
      $("#divs3").show();
     $("#divs2").hide();
     $("#divs1").hide(); 
     $("#tab1").removeClass("active");     
     $("#tab2").removeClass("active");
     $("#tab3").addClass("active");
    })
    
});
</script>



<div class="container body_container">
    
 <ul class="nav nav-tabs">
     <li role="presentation"  id="tab1"><a href="#" id="button1">
             <i class="fa fa-gear"></i> Settings</a></li>
  <li role="presentation" id="tab2" ><a href="#" id="button2">
          <i class="fa fa-user-secret"></i> Profile</a></li>
  <li role="presentation" id="tab3" ><a href="#" id="button3">
          <i class="fa fa-bullhorn"></i> Messages</a></li>
</ul>
    
    
 <div class="col-lg-12" id="divs1">
    <p class="page-header">Settings</p>
        <div class="col-md-4">
            <div class="row">
                <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2">
                        <i class="fa fa-user"></i>
                    </span>
                        <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2">
                        <i class="fa fa-key"></i>
                    </span>
                            <input type="password" class="form-control" placeholder="Current Password" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2">
                        <i class="fa fa-key"></i>
                    </span>
                        <input type="password" class="form-control" placeholder="New Password" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2">
                      <i class="fa fa-envelope"></i>
                    </span>
                        <input type="Email" class="form-control" placeholder="Email" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group">

                    <input type="submit" class="btn btn-default btn-md active" value="Update">
                </div>                
            </div>
        </div>
        
 </div>
    
    <div class="col-md-12" id="divs2">
        <p class="page-header" >Profile</p>
        <div class="col-md-4">
            <div class="row">
                <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2">
                        <i class="fa fa-child"></i>
                    </span>
                        <input type="text" class="form-control" placeholder="First Name" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2">
                        <i class="fa fa-group"></i>
                    </span>
                            <input type="text" class="form-control" placeholder="last Name" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2">
                        <i class="fa fa-cogs"></i>
                    </span>
                        <input type="text" class="form-control" placeholder="What I Do" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2">
                      <i class="fa fa-phone"></i>
                    </span>
                    <input type="tel" class="form-control" placeholder="Phone Number" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group">

                    <input type="submit" class="btn btn-default btn-md active" value="Update">
                </div>                
            </div>
        </div>
    </div>
    
    <div class="col-md-12" id="divs3">
        <p class="page-header">Messages</p>

    </div>
</div>    
    

 


@stop

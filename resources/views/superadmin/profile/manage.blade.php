@extends('layouts.superadmin')
@section('content')
<div class="page-content-wrapper">
   <!-- BEGIN CONTENT BODY -->
   <div class="page-content">
      <!-- BEGIN PAGE HEADER-->

      <!-- BEGIN PAGE BAR -->
      <div class="page-bar">
         <ul class="page-breadcrumb">
            <li>
               <a href="index.html">Home</a>
               <i class="fa fa-circle"></i>
            </li>
            <li>
               <span>Profile</span>
            </li>
         </ul>
      </div>
      <!-- END PAGE BAR -->
      <!-- BEGIN PAGE TITLE-->
      <h1 class="page-title"> Profile</small>
      </h1>
      <!-- END PAGE TITLE-->
      <!-- END PAGE HEADER-->
      <div class="row">
         <div class="col-md-12 ">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light" style="float: left; width: 100%;">
               <div class="portlet-title" style="border:0px;">
                  <div class="caption font-red-sunglo">
                     <i class="icon-settings font-red-sunglo"></i>
                     <span class="caption-subject bold uppercase"> Profile Details</span>
                  </div>
                  
               </div>
               <div class="portlet-body form" style="border:0px;">
			   @if($userdetails)
				   @foreach($userdetails as $userdetailss)
				  {!! Form::open(['method' => 'post', 'url' => 'admin/profile/'.Auth::user()->id]) !!}
                 
                     <div class="form-body" style="border:0px;">
						
						<div class="col-xs-12 col-sm-6 col-md-6">
						
							<div class="form-group">
							   <div class="form-group">
								   <label>First Name</label>
								   <input class="form-control spinner" type="text" placeholder="Name" name="first_name" value="{{$userdetailss->first_name}}" /> 
								   @if ($errors->has('first_name'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('first_name') }}</strong>
										</span>
									@endif
								</div>
							</div>
							
							<div class="form-group">
							   <div class="form-group">
								   <label>Last Name</label>
								   <input class="form-control spinner" type="text" placeholder="Last Name" name="last_name" value="{{$userdetailss->first_name}}" /> 
								   @if ($errors->has('last_name'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('last_name') }}</strong>
										</span>
									@endif
								</div>
							</div>
							
							<div class="form-group">
							   <div class="form-group">
								   <label>Mobile Number</label>
								   <input class="form-control spinner" type="text" placeholder="Mobile Number" name="mobile_number" value="{{$userdetailss->mobile_number}}" /> 
								   @if ($errors->has('mobile_number'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('mobile_number') }}</strong>
										</span>
									@endif
								</div>
							</div>
							
						
							
							<div class="form-group">
							   <div class="form-group">
									<label>Email</label>
								   <input class="form-control spinner" type="text" placeholder="Email" name="email" value="{{$userdetailss->email}}" /> 
								    @if ($errors->has('email'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>
							</div>
							
							
						
						</div>
						
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-12">
							 <div class="form-actions" style="border:0px;">
								<button type="submit" class="btn blue">Submit</button>
								<button type="button" class="btn default">Cancel</button>
							 </div>
						</div>
                 {!! Form::close() !!}
				  @endforeach
				  @endif
               
            </div>
            <!-- END SAMPLE FORM PORTLET-->
           
           
         </div>
		 
        
      </div>
	  
   </div>
   <!-- END CONTENT BODY -->
</div>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('public/admin/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('public/admin/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('public/admin/assets/global/plugins/bootstrap-summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
 <!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('public/admin/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin/assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin/assets/global/plugins/bootstrap-summernote/summernote.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('public/admin/assets/pages/scripts/components-editors.min.js')}}" type="text/javascript"></script>
<script>
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row" style="margin-bottom:10px; margin-top:10px;"><input class="form-control spinner"  name="abname[]" type="text" placeholder="Details Name" style="margin-bottom:10px;" required/> <input class="form-control spinner" name="abdetails[]" type="text" placeholder="Details Description" style="margin-bottom:10px;" required/> <button class="remove_field btn btn-danger">Remove Field</button></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
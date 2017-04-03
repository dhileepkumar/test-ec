<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Metronic Admin Theme #1 | User Login 4</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1" name="viewport" />
      <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
      <meta content="" name="author" />
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{asset('public/admin/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/admin/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}">
      <!-- END GLOBAL MANDATORY STYLES -->
      <link href="{{asset('public/admin/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
      <link href="{{asset('public/admin/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- END THEME GLOBAL STYLES -->
      <!-- BEGIN PAGE LEVEL STYLES -->
      <link href="{{asset('public/admin/assets/pages/css/login-4.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- END PAGE LEVEL STYLES -->
      <!-- BEGIN THEME LAYOUT STYLES -->
      <!-- END THEME LAYOUT STYLES -->
      <link rel="shortcut icon" href="favicon.ico" />
      <!-- BEGIN CORE PLUGINS -->
      <script src="{{asset('public/admin/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
      <!-- END CORE PLUGINS -->
   </head>
   <!-- END HEAD -->
   <body class=" login">
      <!-- BEGIN LOGO -->
      <div class="logo">
         <a href="index.html">
         <img src="{{url('public/admin/assets/pages/img/logo-big.png')}}" alt="" /> </a>
      </div>
      <!-- END LOGO -->
      <!-- BEGIN LOGIN -->
      <div class="content">
         <!-- BEGIN LOGIN FORM -->
         <form class="login-form"  role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <h3 class="form-title">Login to your account</h3>
            <div class="alert alert-danger display-hide">
               <button class="close" data-close="alert"></button>
               <span> Enter any username and password. </span>
            </div>
            <div class="form-group">
               <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
               <label class="control-label visible-ie8 visible-ie9">Email</label>
               <div class="input-icon">
                  <i class="fa fa-user"></i>
                  <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email" /> 
				  @if ($errors->has('email'))
					<span class="help-block error" style="color:red;">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				 @endif
               </div>
            </div>
            <div class="form-group">
               <label class="control-label visible-ie8 visible-ie9">Password</label>
               <div class="input-icon">
                  <i class="fa fa-lock"></i>
                  <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> 
				  @if ($errors->has('password'))
						<span class="help-block error" style="color:red;">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
					@endif
               </div>
            </div>
            <div class="form-actions">
               <label class="rememberme mt-checkbox mt-checkbox-outline">
               <input  type="checkbox" name="remember" /> Remember me
               <span></span>
               </label>
               <button type="submit" class="btn green pull-right"> Login </button>
            </div>
            <div class="forget-password">
               <h4>Forgot your password ?</h4>
               <p> no worries, click
                  <a href="javascript:;" id="forget-password"> here </a> to reset your password. 
               </p>
            </div>
         </form>
         <!-- END LOGIN FORM -->
         <!-- BEGIN FORGOT PASSWORD FORM -->
         <form class="forget-form" action="index.html" method="post">
            <h3>Forget Password ?</h3>
            <p> Enter your e-mail address below to reset your password. </p>
            <div class="form-group">
               <div class="input-icon">
                  <i class="fa fa-envelope"></i>
                  <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> 
               </div>
            </div>
            <div class="form-actions">
               <button type="button" id="back-btn" class="btn red btn-outline">Back </button>
               <button type="submit" class="btn green pull-right"> Submit </button>
            </div>
         </form>
      </div>
      <script src="{{asset('public/admin/assets/global/plugins/backstretch/jquery.backstretch.min.js')}}" type="text/javascript"></script>
      <!-- END PAGE LEVEL PLUGINS -->
      <!-- BEGIN THEME GLOBAL SCRIPTS -->
      <script src="{{asset('public/admin/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
      <!-- END THEME GLOBAL SCRIPTS -->
      <script src="{{asset('public/admin/assets/pages/scripts/login-4.min.js')}}" type="text/javascript"></script>
      <!-- END PAGE LEVEL SCRIPTS -->
      <!-- BEGIN THEME LAYOUT SCRIPTS -->
   </body>
</html>
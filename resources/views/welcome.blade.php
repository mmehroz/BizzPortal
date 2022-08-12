@extends('layout.logintheme')
@section('content')
<style>
.account-box
{
	width:380px;
	
    background-color: rgba(0, 0, 0, 0.35);
    border: 1px solid #969292;
}
@media screen and (max-width: 480px) {
 .account-box
{
	width:360px;
	margin:0;
	padding: 0;

    background-color: rgba(0, 0, 0, 0.57);
    border: 1px solid #969292;
}
}

.account-subtitle
{
	color:#fff;
}
.account-box label
{
	color:#fff;
}
.text-muted:hover
{
	color: #ffffff !important;
    font-style: italic;
}
.field-icon {
	float: right;
	color: #6f8c51;
	font-size: 23px;
	margin-left: -25px;
	margin-top: -36px;
	position: relative;
	z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}
.fa-fw {
    width: 2.285714em;
}
</style>
   <body style="background-color: #232428">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome To</h2>
								<p>Bizz World Communications</p>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
					</div>
			      		@if(session('message'))
								<!-- <div class="account-title">{{session('message')}}</div> -->
								<div class="account-title">   <p class="alert alert-success" >{{session('message')}}</p>
								
								</div>
							@endif
							<form method="Post" action="{{url('/mylogin')}}" style="margin-top: 30px;">
								{{ csrf_field() }}
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email Address</label>
			      			<input type="text" class="form-control" name="username" placeholder="Enter Email" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" name="pass" placeholder="Enter Password" id="password-field" required>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"  id="pass-status" onclick="viewPassword()"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
</body>

    <script type="text/javascript">
 		function viewPassword()
		{
		  var passwordInput = document.getElementById('password-field');
		  var passStatus = document.getElementById('pass-status');
		 
		  if (passwordInput.type == 'password'){
		    passwordInput.type='text';
		    passStatus.className='fa fa-fw fa-eye-slash field-icon toggle-password';
		    
		}
		else{
		    passwordInput.type='password';
		    passStatus.className='fa fa-fw fa-eye field-icon toggle-password';
		  }
		}
	</script>
@endsection
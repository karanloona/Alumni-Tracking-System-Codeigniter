<?php $this->load->view('navbar');?>
<script>
$(function(){
	$('#tabs').tabs();
	$('#forgot').click(function(){
		alert("Mail Your Details at:- contact@centraluniversity.com");
	});
	$('.current').prop('disabled',true);
	$(".job").change(function(){
		$('.current').prop('disabled',true);
		var job=$(this).val();
		if(job=="Service/Job"){$('#current').removeAttr('disabled');$('#current').attr("placeholder","If Service/Job - Name of Organisation");}
		else if(job=="Self Employed"){$('#current').removeAttr('disabled');$('#current').attr("placeholder","If Self Employed - Doing What ?");}
		else if(job=="Student"){$('#current').removeAttr('disabled');$('#current').attr("placeholder","If Student - Name of Institute ?");}
	});
	$('#login').click(function(){
		var login_email=$('#login_email').val();
		var login_password=$('#login_password').val();
		if(login_email=="" || !isValidEmailAddress(login_email)){ $('.login_email').addClass('is-invalid login_email'); return false; }
		else if(login_password=="" || login_password=="0"){ $('.login_password').addClass('is-invalid login_password'); return false; }
		else{
			var form_data=$('#login_form').serialize();
			$.ajax({
				url:'<?= base_url("login/login_test")?>',
				type:'post',
				dataType:'json',
				async:true,
				data:form_data,
				success:function(response){
					if(response=="Wrong Information"){
						alert(response);
					}
					else{
						window.location.href=response;
					}
					$('#login_form')[0].reset();
					// alert(response);
				}
			});
		}
	});
	$('#admin_button').click(function(){
		var admin_email=$('#admin_email').val();
		var admin_password=$('#admin_password').val();
		if(admin_email=="" || !isValidEmailAddress(admin_email)){ $('.admin_email').addClass('is-invalid admin_email'); return false; }
		else if(admin_password=="" || admin_password=="0"){ $('.admin_password').addClass('is-invalid admin_password'); return false; }
		else{
			var admin_form_data=$('#admin_form').serialize();
			$.ajax({
				url:'<?= base_url("login/admin_test")?>',
				type:'post',
				dataType:'json',
				async:true,
				data:admin_form_data,
				success:function(response){
					if(response=="Wrong Information"){
						alert(response);
					}
					else{
						window.location.href=response;
					}
					$('#admin_form')[0].reset();
				}
			});
		}
	});
	$('#register').click(function(){
		var first_name=$('#first_name').val();
		var last_name=$('#last_name').val();
		var mobile=$('#mobile').val();
		var email=$('#email').val();
		var password=$('#password').val();
		var confirm_password=$('#confirm_password').val();
		var uid=$('#uid').val();
		var degree=$('#degree').val();
		var stream=$('#stream').val();
		var from=$('#from').val();
		var to=$('#to').val();
		var job=$('input[name=job]:checked').val();
		var current=$('#current').val();
		if(first_name=="" || first_name=="0"){ $('.first_name').addClass('is-invalid first_name'); return false; }
		else if(last_name=="" || last_name=="0"){ $('.last_name').addClass('is-invalid last_name'); return false; }
		else if(mobile=="" || mobile=="0"){ $('.mobile').addClass('is-invalid mobile'); return false; }
		else if(email=="" || !isValidEmailAddress(email)){ $('.email').addClass('is-invalid email'); return false; }
		else if(password=="" || password=="0"){ $('.password').addClass('is-invalid password'); return false; }
		else if(confirm_password=="" || confirm_password=="0"){ $('.confirm_password').addClass('is-invalid confirm_password'); return false; }
		else if(password !=confirm_password){alert('password must be same'); return false}
		else if(uid=="" || uid=="0"){ $('.uid').addClass('is-invalid uid'); return false; }
		else if(degree=="" || degree=="0"){ $('.degree').addClass('is-invalid degree'); return false; }
		else if(stream=="" || stream=="0"){ $('.stream').addClass('is-invalid stream'); return false; }
		else if(from=="" || from=="0"){ $('.from').addClass('is-invalid from'); return false; }
		else if(to=="" || to=="0"){ $('.to').addClass('is-invalid to'); return false; }
		else if(from>to){alert('From Must be greater');return false;}
		else if(job=="" || job=="0"){alert('Select Currently Pursuing Section'); return false; }
		else if(current=="" || current=="0"){ $('.current').addClass('is-invalid current'); return false; }
		else{
			var register_form_data=$('#register_form').serialize();
			$.ajax({
				url:'<?= base_url("login/register_test")?>',
				type:'post',
				dataType:'json',
				async:true,
				data:register_form_data,
				success:function(response){
					window.location.href=response;
					$('#login_form')[0].reset();
				}
			});
		}
	});
});
function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	return pattern.test(emailAddress);
}
</script>
<style>
#tag{
	text-align:center;
	padding-bottom:10px;
	color:rgba(6,33,62);
}
#alert{
	color:red;
}
.svg-inline--fa.fa-w-14{
	margin-right:5px;
}
</style>
<div id="tabs" class="mt-3 mb-4">
	<ul style="padding-bottom:10px;">
		<li><a href="#tabs-1">Login</a></li>
		<li><a href="#tabs-2">Register</a></li>
		<li style="float:right; background-color:rgba(6,33,66);"><a href="#tabs-3" style="color:white;">ADMIN</a></li>
	</ul>
	<div id="tabs-1">
	<h2 id="tag">Student Portal</h2>
		<?= form_open('',['id'=>'login_form']) ?>
				<div class="form-group">
					<span class="fa fa-user"></span><label for="login_email">Email</label>
					<input type="email" class="form-control login_email" name="login_email" id="login_email" placeholder="Email">
					<div class="invalid-feedback login_email">Enter Valid Email</div>
				</div>
				<div class="form-group">
					<span class="fa fa-lock"></span><label for="login_password">Password</label>
					<input type="Password" class="form-control login_password" id="login_password" name="login_password" placeholder="Password">
					<div class="invalid-feedback login_password"></div>
				</div>
				<a id="forgot" href="#">Forgot Password ?</script></a><br><br>
				<input type="button" id="login" class="btn btn-primary" value="Submit">
			<?= form_close() ?>
	</div>
	<div id="tabs-2">
		<?= form_open('',['id'=>'register_form']) ?>
				<h3 id="tag">Personal Information</h3>
				<p id="alert">* Feilds are Mandantory</p>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="first_name"><span id="alert">*</span> First Name</label>
							<input type="text" id="first_name" name="first_name" class="form-control first_name" placeholder="First Name">
							<div class="invalid-feedback first_name"></div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="last_name"><span id="alert">*</span> Last Name</label>
							<input type="text" id="last_name" name="last_name" class="form-control last_name" placeholder="Last Name">
							<div class="invalid-feedback last_name"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="mobile"><span id="alert">*</span> Mobile Number</label>
							<input type="number" id="mobile" name="mobile" class="form-control mobile" placeholder="Mobile Number">
							<div class="invalid-feedback mobile"></div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="email"><span id="alert">*</span> Email</label>
							<input type="email" id="email" name="email" class="form-control email" placeholder="Email">
							<div class="invalid-feedback email">Enter Valid Email</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="password"><span id="alert">*</span> Password</label>
							<input type="password" id="password" name="password" class="form-control password" placeholder="Password">
							<div class="invalid-feedback password"></div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="confirm_password"><span id="alert">*</span> Confirm Password</label>
							<input type="password" id="confirm_password" class="form-control confirm_password" placeholder="Password">
							<div class="invalid-feedback confirm_password"></div>
						</div>
					</div>
				</div>
				<h3 id="tag">Association With Central University</h3>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="uid"><span id="alert">*</span> UID</label>
								<input type="number" id="uid" name="uid" class="form-control uid" placeholder="UID">
								<div class="invalid-feedback uid"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="Degree"><span id="alert">*</span> Degree</label>
							<input type="text" name="degree" id="degree" class="form-control degree" placeholder="Degree">
							<div class="invalid-feedback degree"></div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="stream"><span id="alert">*</span> Stream</label>
							<input type="text" id="stream" name="stream" class="form-control stream" placeholder="Stream">
							<div class="invalid-feedback stream"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="from"><span id="alert">*</span> From</label>
							<select class="form-control from" id="from" name="from">
								<option>Select Year</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
							</select>
							<div class="invalid-feedback from"></div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="from"><span id="alert">*</span> To</label>
							<select class="form-control to" name="to" id="to">
								<option>Select Year</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
							</select>
						</div>
						<div class="invalid-feedback to"></div>
					</div>
				</div>
				<h3 id="tag">Other Information</h3>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="current_status"><span id="alert">*</span>Currently Pursuing</label><br>
							<input type="radio" value="Service/Job" class="job" name="job">Service/Job<br>
							<input type="radio" value="Self Employed" class="job" name="job">Self Employed<br>
							<input type="radio" value="Student" class="job" name="job">Student<br>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<input type="text" id="current" name="current" class="form-control current" placeholder=""><br>
						<div class="invalid-feedback current"></div>
					</div>
				</div>
				
				<br><input type="button" value="Submit" id="register" class="btn btn-primary">
			<?= form_close() ?>
	</div>
	<div id="tabs-3">
		<h1 id="tag">Admin Portal</h4>
			<?= form_open('',['id'=>'admin_form']) ?>
				<div class="form-group">
					<span class="fa fa-user"></span><label for="admin_email">Email</label>
					<input type="email" class="form-control admin_email" name="admin_email" id="admin_email" placeholder="Email">
					<div class="invalid-feedback admin_email">Enter Valid Email</div>
				</div>
				<div class="form-group">
					<span class="fa fa-lock"></span><label for="admin_password">Password</label>
					<input type="Password" class="form-control admin_password" id="admin_password" name="admin_password" placeholder="Password">
					<div class="invalid-feedback admin_password"></div>
				</div>
				<input type="button" id="admin_button" class="btn btn-primary" value="Submit">
			<?= form_close() ?>
	</div>
</div>
<?php $this->load->view('footer');?>
<script>
$(function(){
	<?php if($student->current == "Service/Job") : ?>
		$('#service').prop("checked","true");
	<?php elseif($student->current == "Self Employed") : ?>
		$('#self').prop("checked","true");
	<?php elseif($student->current == "Student") : ?>
		$('#stu').prop("checked","true");
	<?php endif;?>
	$(".job").change(function(){
		$('#current').val("");
		$('.current').prop('disabled',true);
		var job=$(this).val();
		if(job=="Service/Job"){$('#current').removeAttr('disabled');$('#current').attr("placeholder","If Service/Job - Name of Organisation");}
		else if(job=="Self Employed"){$('#current').removeAttr('disabled');$('#current').attr("placeholder","If Self Employed - Doing What ?");}
		else if(job=="Student"){$('#current').removeAttr('disabled');$('#current').attr("placeholder","If Student - Name of Institute ?");}
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
			var idd=<?= $student->id?>;
			$.ajax({
				url:"<?= base_url('admin/student/update/"+idd+"')?>",
				type:'post',
				dataType:'json',
				async:true,
				data:register_form_data,
				success:function(response){
					window.location=response;
					// alert(response);
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
#register_form{
	padding-top:30px;
	width:97%;
	margin:auto;
}
#alert{
	color:red;
}
</style>
<?= form_open('',['id'=>'register_form']) ?>
	<h3 id="tag">Personal Information</h3>
	<p id="alert">* Feilds are Mandantory</p>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="first_name"><span id="alert">*</span> First Name</label>
				<input type="text" id="first_name" name="first_name" value="<?= $student->first_name?>" class="form-control first_name" placeholder="First Name">
				<div class="invalid-feedback first_name"></div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="last_name"><span id="alert">*</span> Last Name</label>
				<input type="text" id="last_name" name="last_name" value="<?= $student->last_name?>" class="form-control last_name" placeholder="Last Name">
				<div class="invalid-feedback last_name"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="mobile"><span id="alert">*</span> Mobile Number</label>
				<input type="number" id="mobile" name="mobile" value="<?= $student->mobile?>" class="form-control mobile" placeholder="Mobile Number">
				<div class="invalid-feedback mobile"></div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="email"><span id="alert">*</span> Email</label>
				<input type="email" id="email" name="email" value="<?= $student->email?>" class="form-control email" placeholder="Email">
				<div class="invalid-feedback email">Enter Valid Email</div>
			</div>
		</div>
	</div>
	<h3 id="tag">Association With Central University</h3>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="uid"><span id="alert">*</span> UID</label>
					<input type="number" id="uid" value="<?= $student->uid?>" name="uid" class="form-control uid" placeholder="UID">
					<div class="invalid-feedback uid"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="Degree"><span id="alert">*</span> Degree</label>
				<input type="text" name="degree" id="degree" value="<?= $student->degree?>" class="form-control degree" placeholder="Degree">
				<div class="invalid-feedback degree"></div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="stream"><span id="alert">*</span> Stream</label>
				<input type="text" id="stream" name="stream" value="<?= $student->stream?>" class="form-control stream" placeholder="Stream">
				<div class="invalid-feedback stream"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="from"><span id="alert">*</span> From</label>
				<select class="form-control from" id="from" name="from">
					<option value="<?= $student->from_date?>"><?= $student->from_date?></option>
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
					<option value="<?= $student->to_date?>"><?= $student->to_date?></option>
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
				<input type="radio" id="service" value="Service/Job" class="job" name="job">Service/Job<br>
				<input type="radio" id="self" value="Self Employed" class="job" name="job">Self Employed<br>
				<input type="radio" id="stu" value="Student" class="job" name="job">Student<br>
				<div class="invalid-feedback current"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<input type="text" id="current" value="<?= $student->job?>" name="current" class="form-control current" placeholder=""><br>
			<div class="invalid-feedback current"></div>
		</div>
	</div>
	<input type="hidden" name="verify" value="<?= $student->verify?>">
	<br><input type="button" value="Submit" id="register" class="btn btn-primary">
<?= form_close() ?>
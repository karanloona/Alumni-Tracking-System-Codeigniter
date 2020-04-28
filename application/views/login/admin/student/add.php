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
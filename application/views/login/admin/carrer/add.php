<h1 style="padding:10px;" class="display-4">Add Carrer</h1><hr>
<?= form_open('',['id'=>'carrer_form'])?>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control title" id="title" name="title" placeholder="Enter Carrer Title" />
				<div class="invalid-feedback title"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="description">Carrer Description</label>
				<textarea class="form-control description" name="description" rows="9" id="description" placeholder="Enter Description"></textarea>
				<div class="invalid-feedback description"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label for="location">Location</label>
				<input type="text" class="form-control location" id="location" name="location" placeholder="Enter location" />
				<div class="invalid-feedback location"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="duration">Duration</label>
				<input type="text" class="form-control duration" id="duration" name="duration" placeholder="Enter duration in months" />
				<div class="invalid-feedback location"></div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="stipend">Stipend / Salary</label>
				<input type="text" class="form-control stipend" id="stipend" name="stipend" placeholder="Enter Stipend in Rupees" />
				<div class="invalid-feedback stipend"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="type">Work Type</label>
				<input type="text" class="form-control type" id="type" name="type" placeholder="Part Time / Full Time" />
				<div class="invalid-feedback type"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="link">Link</label>
				<input type="text" class="form-control link" id="link" name="link" placeholder="http://www.cup.edu.in/" />
				<div class="invalid-feedback type"></div>
			</div>
		</div>
	</div>
<?= form_close() ?>
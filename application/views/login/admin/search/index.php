
<h1 class="text-center display-3 pt-2">Search</h1>
<?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
<?= form_open('admin/search/result',['id'=>'form_search']) ?>
<div class="row mt-4">
	<div  class="col-sm-12">
		<div class="form-group">
			<input type="text" id="search_bar" name="search_bar" class="form-control search_bar" placeholder="Searh by Name / Batch / UID / stream" >
		</div>
	</div>
	<input class="btn btn-primary ml-3" type="submit" value="Search" id="search_btn">
</div>
<?= form_close()?>

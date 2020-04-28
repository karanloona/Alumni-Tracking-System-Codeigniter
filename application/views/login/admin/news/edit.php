<script>
$(function(){
	$('#news_button').click(function(){
		var title=$('#title').val();
		var body=$('#body').val();
		if(title=="" || title==0){$('.title').addClass('is-invalid title'); return false;}
		else if(body=="" || body==0){$('.body').addClass('is-invalid body'); return false;}		
		else{
			var idd=<?= $news->id?>;
			var news_form=$('#news_form').serialize();
			$.ajax({
				url:"<?= base_url('admin/news/update_news/"+idd+"')?>",
				type:'post',
				dataType:'json',
				async:true,
				data:news_form,
				success:function(response){
					window.location=response;
				}
			});
		}
	});
});
</script>
<h1 style="padding:10px;" class="display-4">Edit News</h1>
<?= form_open('',['id'=>'news_form'])?>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control title" value="<?= $news->title?>" id="title" name="title" placeholder="Enter News Title" />
				<div class="invalid-feedback title"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="title">Body</label>
				<textarea class="form-control body" id="body" name="body" rows="10" placeholder="Enter News Body"><?= $news->body?></textarea>
				<div class="invalid-feedback body"></div>
			</div>
		</div>
	</div>
	<input type="button" id="news_button" class="btn btn-primary" value="submit">
<?= form_close()?>
<?php if($this->session->flashdata('news_add')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('news_add') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('news_update')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('news_update') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('news_publish')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('news_publish') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('unpublish_news')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('unpublish_news') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('delete_news')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('delete_news') . '</p>'; ?>
<?php endif; ?>
<a style="margin-top:20px;" href="<?= base_url('admin/news/add') ?>" class="btn btn-primary">Add News</a>
<hr>
<h1 class="display-4">Recently Uploaded News</h1>
<div class="table table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Body</th>
				<th>Title</th>
				<th>Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($news as $new) : ?>
				<tr>
					<td><?= $new->id ?></td>
					<td><?= $new->title ?></td>
					<td><?= $new->body ?></td>
					<td><?= $new->date ?></td>
					<td>
						<a href="<?= base_url('admin/news/edit/'.$new->id.'')?>" class="btn btn-primary">Edit</a><br>
						<?php if($new->is_publish == 0) :?>
							<a href="<?= base_url('admin/news/publish/'.$new->id.'')?>" class="btn btn-success">Publish</a>
						<?php elseif($new->is_publish == 1) :?>
							<a href="<?= base_url('admin/news/unpublish/'.$new->id.'')?>" class="btn btn-warning">Unpublish</a>
						<?php endif;?>
						<br><a href="<?= base_url('admin/news/delete/'.$new->id.'')?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
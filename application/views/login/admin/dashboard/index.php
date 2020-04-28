<h1 class="display-3 mt-4 text-center">Welcome Admin</h1>
<hr>
<h1 class="display-4 mt-4 mb-4">Recently Uploaded Event</h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Title</th>
			<th>Description</th>
			<th>venue</th>
			<th>state</th>
			<th>city</th>
			<th>day</th>
			<th>month</th>
			<th>year</th>
			<th>action</th>
		</thead>
		<tbody>
			<?php foreach($event as $events) : ?>
				<tr>
					<td><?= $events->id?></td>
					<td><?= $events->title?></td>
					<td><?= $events->description?></td>
					<td><?= $events->venue?></td>
					<td><?= $events->state?></td>
					<td><?= $events->city?></td>
					<td><?= $events->day?></td>
					<td><?= $events->month?></td>
					<td><?= $events->year?></td>
					<td>
						<a href="<?= base_url('admin/event/edit/'.$events->id.'')?>" class="btn btn-primary">Edit</a>
						<?php if($events->is_publish == 1) : ?>
							<a href="<?= base_url('admin/event/unpublish/'.$events->id.'')?>" class="btn btn-warning">Unpublish</a>	
						<?php elseif($events->is_publish == 0) : ?>
							<a href="<?= base_url('admin/event/publish/'.$events->id.'')?>" class="btn btn-success">Publish</a>	
						<?php endif; ?>
						<a href="<?= base_url('admin/event/delete/'.$events->id.'')?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
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
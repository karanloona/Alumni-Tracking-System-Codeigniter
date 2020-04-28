<div class="table-responsive mt-4">
	<table id="table" class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Batch</th>
				<th>UID</th>
				<th>Stream</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($name as $names) : ?>
				<tr>
					<td><?= $names->id ?></td>
					<td><?= $names->first_name ?></td>
					<td><?= $names->from_date ?></td>
					<td><?= $names->uid ?></td>
					<td><?= $names->stream ?></td>
					<td>
						<a href="<?= base_url('admin/student/edit/'.$names->id)?>" class="btn btn-primary">Edit</a>
						<?php if($names->verify == 0) :?>
							<a href="<?= base_url('admin/student/verify/'.$names->id)?>" class="btn btn-warning">Verify</a>
						<?php elseif($names->verify == 1) :?>
							<a href="<?= base_url('admin/student/unverify/'.$names->id)?>" class="btn btn-success">UnVerify</a>
						<?php endif; ?>
						<a href="<?= base_url('admin/student/delete/'.$names->id)?>" class="btn btn-danger">Delete</a>
					</td>
				<tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
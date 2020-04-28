<?php if($this->session->flashdata('update_user')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('update_user') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('delete_user')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('delete_user') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('verify_user')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('verify_user') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('unverify_user')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('unverify_user') . '</p>'; ?>
<?php endif; ?>
<a class="btn btn-primary mt-4">Add Student</a><hr>
<h1 class="display-4 mb-3">Recently Registerd Students</h1>
<div class="table table-responsive">
	<table width="95%" class="table-striped">
		<thead>
			<th>Id</th>
			<th>First Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>UID</th>
			<th>Degree</th>
			<th>Stream</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php foreach($student as $students) : ?>
			<tr>
				<td><?= $students->id ?></td>
				<td><?= $students->first_name ?></td>
				<td><?= $students->email ?></td>
				<td><?= $students->mobile ?></td>
				<td><?= $students->uid ?></td>
				<td><?= $students->degree ?></td>
				<td><?= $students->stream ?></td>
				<td>
					<a href="<?= base_url('admin/student/edit/'.$students->id)?>" class="btn btn-primary">Edit</a>
						<?php if($students->verify == 0) :?>
							<a href="<?= base_url('admin/student/verify/'.$students->id)?>" class="btn btn-warning">Verify</a>
						<?php elseif($students->verify == 1) :?>
							<a href="<?= base_url('admin/student/unverify/'.$students->id)?>" class="btn btn-success">UnVerify</a>
						<?php endif; ?>
						<a href="<?= base_url('admin/student/delete/'.$students->id)?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
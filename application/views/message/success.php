<?php if(!$this->session->userdata('register_success')) { redirect(base_url()); } ?>
<?php $this->load->view('message/includes/header'); ?>
<style>
.login{
	text-align:center;
	color:red;
	text-decoration:underline;
	font-size:18px;
	display: inherit;
}
</style>
<div class="col-sm-12">
	<h1 class="display-3 text-center pt-4">You Are Successfully Registered</h1>
	<h3 class="display-4 text-center pt-4">We will verify soon</h3>
	<a class="login pt-4" href="<?= base_url('')?>">Return to Main Page</a>
</div>

<?php $this->load->view('message/includes/footer'); ?>
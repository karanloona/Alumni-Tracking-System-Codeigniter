<?php if(!$this->session->userdata('already_register')) { redirect(base_url()); } ?>
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
	<h1 class="display-3 text-center pt-4">You Are Already Registered</h1>
	<h3 class="display-4 text-center pt-4">Login With Same Email</h3>
	<a class="login pt-4" href="<?= base_url('login')?>">Return to Login Page</a>
</div>


<?php $this->load->view('message/includes/footer'); ?>
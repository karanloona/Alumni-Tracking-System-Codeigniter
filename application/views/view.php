<?php $this->load->view('navbar'); ?>

<h1 style="padding:30px;" class="display-4"><?= $event->title?></h1><hr>
<p style="font-size:19px;"><?= $event->description?></p>
<a class="btn btn-primary mb-3">Register Now</a>
<?php $this->load->view('footer'); ?>
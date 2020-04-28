<?php $this->load->view('navbar'); ?>

<h1 style="padding:30px;" class="display-4"><?= $news->title?></h1><hr>
<p style="font-size:19px;"><?= $news->body?></p>
<a class="btn btn-primary mb-3">Share Now</a>
<?php $this->load->view('footer'); ?>
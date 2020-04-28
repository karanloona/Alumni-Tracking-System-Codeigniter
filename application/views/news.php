<style>
#inner-event{
	margin-top: 20px;
	height: 400px;
	border: 8px solid white;
	background-image:url('assets/img/news.jpg');
	background-repeat:no-repeat;
	background-size:100% 100%;
}
#inner-inner-event{
	background-color:rgba(1,1,1,0.3);
	height:100%;
	width:100%;
}
#event{
	padding-top:10px;
}
#event-detail{
	background-color:white;
	box-shadow:1px 1px 20px 1px gray;
}
</style>
<?php $this->load->view('navbar'); ?>
	<div id="inner-event">
		<div id="inner-inner-event">
			
		</div>
	</div>
	<div id="event">
		<p>Showing <?php echo count($news);?> Events</p>
		<hr>
		<div id="event-detail">
			<?php foreach($news as $new) :?>
				<h4 style="color:rgba(6,33,62); padding-left:10px; padding-top:20px;"><?= $new->title?><h4>
				<p style="padding-left:10px; font-size:15px; font-weight:normal"><?= $new->body?></p>
				<p style="padding-left:10px; font-size:15px; font-weight:normal">Posted On:- <?= $new->date?></p>
				<a href="<?= base_url('news/view/'.$new->id.'')?>"><p style="padding-left:10px; font-size:20px;">Read More</p></a>
				<hr>
			<?php endforeach;?>
		</div>
	</div>
<?php $this->load->view('footer'); ?>
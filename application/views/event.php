<style>
#inner-event{
	margin-top: 20px;
	height: 400px;
	border: 8px solid white;
	background-image:url('assets/img/events.png');
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
		<p>Showing <?php echo count($event);?> Events</p>
		<hr>
		<div id="event-detail">
			<?php foreach($event as $events) :?>
				<h4 style="color:rgba(6,33,62); padding-left:10px; padding-top:20px;"><?= $events->title?></h4>
				<p style="padding-left:10px; color:gray"><?= $events->day?>-<?= $events->month?>-<?= $events->year?></p>
				<p style="padding-left:10px;"><?= $events->city?></p>
				<address style="padding-left:10px;">
					Contact Details:- <br>
					Organizer Name:-<?= $events->organize_name?><br>
					Contact Number:-+91<?= $events->organize_contact?>
				</address>
				<a href="<?= base_url('events/view/'.$events->id.'')?>"><p style="padding-left:10px; font-size:20px;">Read More</p></a>
				<hr>
			<?php endforeach;?>
		</div>
	</div>
<?php $this->load->view('footer'); ?>
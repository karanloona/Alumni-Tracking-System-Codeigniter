<style>
		
		#news{
			padding:30px;
		}
		#news-bar>li{
			list-style-type:none;
		}
	</style>
<h1 class="display-3 mt-4 text-center">Welcome <?= $stu_name->first_name?></h1>
<h1 id="news" class="display-4 WOW bounceIn">Recently Added Events</h1><hr>
	<div class="row">
		<?php foreach($event as $events) : ?>
			<?php if($events->is_publish == 1) : ?>
			<div id="news-bar" class="col-sm-6">
				<li>
					<h4 class="WOW slideInUp"><?= $events->title?></h4>
						<?= word_limiter($events->description,20)?>
						<p style="padding-top:10px;">Venue:- <?= $events->venue?><br>
						City:- <?= $events->city?><br>
						Date:- <?= $events->day?>-<?= $events->month?>-<?= $events->year?></p>
					<p><a style="margin-top:10px;" class="btn btn-primary" href="<?= base_url('events/view/'.$events->id.'')?>" role="button">Read More &raquo;</a></p>
				</li>
			</div>
			<?php endif;?>
		<?php endforeach;?>
	</div>
	<h1 id="news" class="display-4 WOW bounceIn">Recently Added News</h1><hr>
	<div class="row">
		<?php foreach($news as $new) : ?>
			<?php if($new->is_publish == 1) : ?>
			<div id="news-bar" class="col-sm-6">
				<li>
					<h4 class="WOW slideInUp"><?= $new->title?></h4>
						<?= word_limiter($new->body,20)?>
						
					<p><a style="margin-top:10px;" class="btn btn-primary" href="<?= base_url('events/view/'.$new->id.'')?>" role="button">Read More &raquo;</a></p>
				</li>
			</div>
			<?php endif;?>
		<?php endforeach;?>
	</div>
<?php $this->load->view('navbar'); ?>
<script type="text/javascript" src="<?= base_url('assets/js/jssor.slider-28.0.0.min.js') ?>"></script>
		
<style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 053 css*/
        .jssorb053 .i {position:absolute;cursor:pointer;}
        .jssorb053 .i .b {fill:#fff;fill-opacity:0.3;}
        .jssorb053 .i:hover .b {fill-opacity:.7;}
        .jssorb053 .iav .b {fill-opacity: 1;}
        .jssorb053 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 093 css*/
        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
    </style>
		<script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
              {$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
              {$Duration:1200,x:0.2,y:-0.1,$Delay:16,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 16,
                $SpacingY: 16
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
	<style>
		
		#news{
			padding:30px;
		}
		#news-bar>li{
			list-style-type:none;
		}
	</style>
<div id="jssor_1" style="margin-top:40px; position:relative;margin:20px auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden; border:7px solid white">
	<!-- Loading Screen -->
	<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
		<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?= base_url('assets/img/spin.svg')?>" />
	</div>
	<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
		<div>
			<img data-u="image" src="<?= base_url('assets/img/slider1.jpg')?>" />
		</div>
		<div>
			<img data-u="image" src="<?= base_url('assets/img/slider2.jpg')?>" />
		</div>
		<div>
			<img data-u="image" src="<?= base_url('assets/img/slider3.jpg')?>" />
		</div>
		<div>
			<img data-u="image" src="<?= base_url('assets/img/slider4.jpg')?>" />
		</div>
		<div>
			<img data-u="image" src="<?= base_url('assets/img/slider5.jpg')?>" />
		</div>
		<div>
			<img data-u="image" src="<?= base_url('assets/img/slider3.jpg')?>" />
		</div>
	</div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">responsive slider</a>
	<!-- Bullet Navigator -->
	<div data-u="navigator" class="jssorb053" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
		<div data-u="prototype" class="i" style="width:12px;height:12px;">
			<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
			</svg>
		</div>
	</div>
	<!-- Arrow Navigator -->
	<div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
		<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			<circle class="c" cx="8000" cy="8000" r="5920"></circle>
			<polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
			<line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
		</svg>
	</div>
	<div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
		<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			<circle class="c" cx="8000" cy="8000" r="5920"></circle>
			<polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
			<line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
		</svg>
	</div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<h1 id="news" class="display-4 wow bounceIn">News / Update</h1><hr>
	<div class="row">
		<?php foreach($news as $new) : ?>
		<?php if($new->is_publish == 1) :?>
			<div id="news-bar" class="col-sm-6">
				<li>
					<h4><?= $new->title?></h4>
						<?= word_limiter($new->body,20)?>
					<p><a style="margin-top:10px;" class="btn btn-primary" href="<?php echo base_url(''); ?>" role="button">Read More &raquo;</a></p>
				</li>
			</div>
		<?php endif;?>
		<?php endforeach;?>
	</div>
	</div>
	<div class="mt-4" style="background-color:rgba(6,33,66); height:250px; text-align:center">
		<p style="padding-top:40px;"><a href="" style="color:#FF0; font-weight:500; font-size:19px;">Ph.D. Admissions 2019-20 (Starting from January 2020)</a><img src="<?= base_url('assets/img/new.gif')?>"></p>
		<p style="padding-top:0px;"><a href="" style="color:white; font-size:18px;">Extention of Tenure of Present Vice Chancellor</a><img src="<?= base_url('assets/img/new.gif')?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" style="color:white; font-size:18px;">Central University of Punjab got 95th Rank in NIRF in 2019</a><img src="<?= base_url('assets/img/new.gif')?>"></p>
		<p style="padding-top:20px;"><a href="" style="color:#FF0; font-weight:500; font-size:19px;">International Student Admissions  </a><img src="<?= base_url('assets/img/new.gif')?>"></p>
	</div>
<div class="container">
<h1 id="news" class="display-4 WOW bounceIn">Events</h1><hr>
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
<?php $this->load->view('footer'); ?>
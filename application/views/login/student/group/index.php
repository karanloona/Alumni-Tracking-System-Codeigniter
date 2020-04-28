<style>
	#group{
		background-color:white;
		width:90%;
		position:fixed;
		top:110px;
		bottom:10px;
		box-shadow:2px 2px 10px 2px;
	}
	#group1{
		height:79%;
		width:90%;
		overflow:auto;
	}
	#group2{
		margin-bottom:1%;
		height:20%;
		width:90%;
	}
	#group-section{
		height:auto;
		width:100%;
	}
	#chat_name{
		padding:6px;
	}
	#chat_message{
		padding:10px;
	}
</style>
<script>
	$(function(){
		$('#group1').scrollTop($('#group1')[0].scrollHeight);
		$('#group_button').click(function(){
			var message=$('#message').val();
			if(message=="" || message==0){$('.message').addClass('is-invalid message'); return false;}
			else{
				var group_form=$('#group_form').serialize();
				$.ajax({
					url:"<?= base_url('student/group/add_group/')?>",
					type:'post',
					dataType:'json',
					async:true,
					data:group_form,
					success:function(response){
						window.location=response;
						$('#group_form')[0].reset();
					}
				});
			}
		});
	});
</script>
<div id="group">
	<div id="group1">
	<?php foreach($chat as $chats) : ?>
		<div id="group-section">
			<h4 id="chat_name"><?= $chats->first_name?></h4>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-9">
						<p id="chat_message"><?= $chats->message?></p>
					</div>
					<div class="col-sm-3">
						<p id="chat_date"><?= $chats->date?></p>
					</div>
				</div>
			</div>
			<hr>
		</div>
	<?php endforeach;?>
	</div>
	<div id="group2">
		<?= form_open('',['id'=>'group_form'])?>
			<div class="form-group">
				<textarea style="width:95%; margin:auto;" class="form-control message" id="message" placeholder="Enter Your Message" name="message"></textarea>
				<div class="invalid-feedback message"></div>
			</div>
			<input type="hidden" value="<?= $name->email?>" name="name">
			<input style="margin-left:30px;" id="group_button" type="button" value="submit" class="btn btn-primary">
		<?= form_close()?>
	</div>
</div>
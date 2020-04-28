<style>
	.siderbar{
		position:fixed;
		bottom:0px;
		background-color:white;
		height:100%;
		top:107px;
		box-shadow:1px 1px 4px 1px;
	}
	.navbar-nav .nav-link{
		color:rgba(6,33,66);
		font-size:18px;
		font-weight:500;
	}
	.navbar-nav .nav-link:hover{
		color:green;
	}
	a.active{
		color:green;
	}
	.svg-inline--fa.fa-w-18 , .svg-inline--fa.fa-w-14 , .svg-inline--fa.fa-w-16 {
		margin-right:5px;
	}
</style>
<div class="col-sm-2 siderbar">
	<ul class="navbar-nav">
		<li class="nav-item">
			 <a class="nav-link mt-3 ml-4 <?php if($this->uri->segment(2)=="dashboard"){echo "active";}?>" href="<?= base_url('admin/dashboard')?>"><span class="fa fa-home"></span>Home</a>
		</li>
		<li class="nav-item">
			 <a class="nav-link mt-1 ml-4 <?php if($this->uri->segment(2)=="student"){echo "active";}?>" href="<?= base_url('admin/student')?>"><span class="fa fa-user"></span>Student</a>
		</li>
		<li class="nav-item">
			 <a class="nav-link mt-1 ml-4 <?php if($this->uri->segment(2)=="event"){echo "active";}?>" href="<?= base_url('admin/event')?>"><span class="fa fa-calendar"></span>Events</a>
		</li>
		<li class="nav-item">
			 <a class="nav-link mt-1 ml-4 <?php if($this->uri->segment(2)=="news"){echo "active";}?>" href="<?= base_url('admin/news')?>"><span class="fa fa-newspaper"></span>News</a>
		</li>
		<li class="nav-item">
			 <a class="nav-link mt-1 ml-4 <?php if($this->uri->segment(2)=="search"){echo "active";}?>" href="<?= base_url('admin/search')?>"><span class="fa fa-search"></span>Search</a>
		</li>
	</ul>
</div>
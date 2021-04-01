<?php
$this->load->view('adminpanel/header');
?>

		<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

			<h2>Add Blog</h2>

			<form action="<?= base_url().'admin/blog/addblog_post' ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input class="form-control" type="text" name="blog_title" placeholder="Title">
				</div>

				<div class="form-group">
					<textarea class="form-control" name="desc" placeholder="Blog description"></textarea>
				</div>

				<div class="form-group">
					<input type="file" class="form-control" name="file" placeholder="Title">
				</div>

				<button type="submit" class="btn btn-primary">Add Blog</button>
			</form>
			
		</main>
	</div>
</div>

<?php $this->load->view('adminpanel/footer'); ?>

<script type="text/javascript">
	<?php
		if(isset($_SESSION['inserted'])){
			if($_SESSION['inserted']=='yes') {
				echo "alert('Data inserted successfully')";
			}
			else{
				echo "alert('Bot inserted!')";
			}
		}
	?>
</script>

<?php
$this->load->view('adminpanel/header');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

	<h2>Edit Blog</h2>

	<form action="<?= base_url().'admin/blog/editblog_post' ?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="blog_id" value="<?= $blog_id ?>">
		<div class="form-group">
			<input class="form-control" value="<?= $result[0]['blog_title'] ?>" type="text" name="blog_title" placeholder="Title">
		</div>

		<div class="form-group">
			<textarea class="form-control" name="desc" placeholder="Blog description"><?= $result[0]['blog_desc'] ?></textarea>
		</div>

		<div class="form-group">
			<img src="<?= base_url().$result[0]['blog_img'] ?>" width="100">
			<input type="file" value="<?= $result[0]['blog_title'] ?>" class="form-control" name="file" placeholder="Title">
		</div>

		<button type="submit" class="btn btn-primary">Edit Blog</button>
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

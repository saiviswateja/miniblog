<?php
$this->load->view('adminpanel/header');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

	<h2>View Blog</h2>
	<table class="table table-striped table-sm">
		<thead>
		<tr>
			<th>S. No.</th>
			<th>Title</th>
			<th>Desc</th>
			<th>Image</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		</thead>
		<tbody>
		<?php
		if ($result) {
			$counter=1;
			foreach ($result as $key => $value) {
				echo $value['blogid'];
				echo "<tr>
			              <td>".$counter."</td>
			              <td>".$value['blog_title']."</td>
			              <td>".$value['blog_desc']."</td>
			              <td><img src='".base_url().'/'.$value['blog_img']."' class='img-fluid' width='100'></td>
			              
			              <td><a class=\"btn btn-info\" href='".base_url().'admin/blog/editblog/'.$value['blogid']."'>Edit</a></td>
			              
			              <td><a class=\"btn delete btn-danger\" href='#.' data-id='".$value['blogid']."'>Delete</a></td>
			            </tr>";

				$counter++;
			}


		}
		else{
			echo "<tr><td colspan='6'>No Records found</td><tr>";
		}


		?>
		</tbody>
	</table>
</main>
</div>
</div>

<?php $this->load->view('adminpanel/footer'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$(".delete").click(function(){
		var delete_id = $(this).attr('data-id');

		var bool = confirm('Are you Sure you want to delete the blog forever?');
		console.log(bool);

		if (bool) {
			alert("Move to delete functionality using AJAX");
			// echo base_url().'admin/blog/deleteblog/';
			alert('<?=base_url().'admin/blog/deleteblog/'?>');
			$.ajax({
				url:'<?= base_url().'admin/blog/deleteblog/'?>',
				type:'post',
				data:{'delete_id': delete_id},
				success: function(response){
					console.log(response);
					if (response === "deleted") {
						location.reload();
					}else if (response === "notdeleted"){
						alert("Something went wrong!");
					}
				}
			});
		}else{
			alert("Your Blog is Safe");

		}
	});
	<?php
			if(isset($_SESSION['updated'])){
				if($_SESSION['updated'] == 'yes'){
					echo 'alert("Data has been updated");';
				}else if($_SESSION['updated'] == 'no'){
					echo 'alert("Some error occured & data not updated");';
				}
			}
	?>>
</script>

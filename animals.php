<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Animal Details</title>
  </head>
  <body>
   <div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header bg-info">
						<h4 class="text-white">Animal Details</h4>
						
						<a href="submission.php" name="#"><i class="fa fa-user-circle"></i>Add Animal Ditails</a>
					</div>
					<div class="card-body">
					<?php
						$connect=mysqli_connect("localhost","root","","animalinfo");
						$query= "select*from animal";
						$query_run= mysqli_query($connect, $query);
					?>
						<table class="table">
							<thead>
								<tr>
									<th>Sr.No.</th>
									<th>IMAGE</th>
									<th>NAME</th>
									<th>CATEGORY</th>
									<th>DISCRIPTION</th>
									<th>LIFEEXPECTANCE</th>
								</tr>
							</thead>
							<tbody>
							<?php
								if(mysqli_num_rows($query_run)>0)
								{
									foreach($query_run as $row)
									{
										?>
										<tr>
											<td><?php echo $row['id']; ?></td>
											<td>
												<img src="<?php echo "image/".$row['image']; ?>" width="100px" alt="Image">
											</td>
											<td><?php echo $row['name']; ?></td>
											<td><?php echo $row['category']; ?></td>
											<td><?php echo $row['description']; ?></td>
											<td><?php echo $row['lifeexpectancy']; ?></td>
										</tr>
										<?php
									}
								}
								else
								{
									?>
										<tr>
											<td>NO RECORD AVAILABLE</td>
										</tr>
									<?php
								}
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
   
   </div>
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

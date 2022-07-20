<?php 
opcache_reset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Course List</title>

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	
	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;800&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="assets/css/styleCorusePage.css">

</head>

<body>
	<div class="container pt-5 pb-5">
		<div class="row" style="margin-bottom: 4px;">
			<div class="d-flex justify-content-start align-items-center">
				<img class="m-2"src="assets/img/icons/nimbus_ecosystem.svg" alt="" style="width: 58px">
				<h1 class="fw-bold">Computer Science</h1>
			</div>
		</div>

		<?php for($j = 0; $j<5; $j++): ?>
			<div class="row course">
				<h5>Object Oriented Programming</h5>

				<div class="row row-cols-2 row-cols-md-4 mt-4 courseList">

					<?php for($i = 0; $i<10; $i++): ?>
						<div class="col courseCard">
							<div class="card rounded-4 p-4">
								<div class="card-body">
										<h2 class="courseTitle">ArrayList</h2>
										<div class="row text-center courseCategory">
											<div class="col">
												<h9><i class="bi bi-youtube me-2"></i>Video</h9>
											</div>
											<div class="col border-start">
												<h9>UTS</h9>
											</div>
											<div class="col border-start">
												<h9>UAS</h9>
											</div>
										</div>

										<h9 class="courseCreator"><img src="assets/img/logo bslc.svg" class="me-2" alt="">Binus Student Learning Community</h9>

										<a href=""><button type="button" class="btnFilled">View Course</button></a>
								</div>
							</div>
						</div>
					<?php endfor; ?>
					
				</div>
			</div>
		<?php endfor; ?>
	</div>
</body>
</html>
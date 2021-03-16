<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

	<?php

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$age = $_POST['age'];

		$firstNumber = $_POST['firstNumber'];
		$lastNumber = $_POST['lastNumber'];
		$captchaResult = $_POST['captchaResult'];

		$checkTotal = $firstNumber + $lastNumber;
		if(empty($captchaResult)){
			$err['captcha'] = "<p style=\" color:red; \"> * Required </p>";
		}else if($captchaResult!==$checkTotal){
			$err['captcha'] = "<p class=\" alert alert-info \"> * Wrong captcha! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		}

		//check mail
		if (isset($email)) {
			$email_arr = explode('@', $email);
			$specific_mail = end($email_arr);
		}

		//cell magane
		$cell_start = substr($cell, 0, 3);

		//File info
		$file = $_FILES['insert_photo'];

		$file_name = $file['name'];
		$file_tmpname = $file['tmp_name'];
		$file_size = $file['size'];
		$size_in_kb = $file_size / 1024;

		//get extention
		$file_arr = explode('.', $file_name);
		$extention = end($file_arr);

		//unique file name
		$unique_name_pro = time() . rand(1, 9999999999);
		$unique_name = md5($unique_name_pro) . '.' . $extention;

		/**
		 * Field validation
		 */

		if (empty($name)) {
			$err['name'] = "<p style=\" color:red; \"> * Required </p>";
		}

		if (empty($email)) {
			$err['email'] = "<p style=\" color:red; \"> * Required </p>";
		}

		if (empty($cell)) {
			$err['cell'] = "<p style=\" color:red; \"> * Required </p>";
		}
		if (empty($age)) {
			$err['age'] = "<p style=\" color:red; \"> * Required </p>";
		}
		/**
		 * file validation
		 */
		if (empty($file_name)) {
			$err['photo'] = "<p class=\" alert alert-danger \"> Please select a file ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		} else if (in_array($extention, ['jpg', 'png', 'gif', 'jpeg', 'webp']) == false) {
			$err['photo'] = "<p class=\" alert alert-warning \"> Invalid file format ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		} else if ($size_in_kb > 500) {
			$err['photo'] = "<p class=\" alert alert-info \"> Image size is too large, Max photo size 500KB ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		}
		/**
		 * Form validation
		 */

		if (empty($name) || empty($email) || empty($cell) || empty($age)) {
			$msg = "<p class=\" alert alert-danger \"> All fields are required ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		} else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
			$msg = "<p class=\" alert alert-warning \"> Invalid email address ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		} else if ($specific_mail != 'codertrust.com') {
			$err['email'] = "<p class=\" alert alert-info \"> Email should be belongs to codertrust.com domain ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		} else if (in_array($cell_start, ['017', '018', '019', '015', '013', '016', '014']) == false) {
			$err['cell'] = "<p class=\" alert alert-danger \"> Mobile number is not correct ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		} else if ($age < 18 && $age < 40) {
			$err['age'] = "<p class=\" alert alert-danger \"> Age should be between 19 to 39! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		}
		/**
		 * file validation
		 */
		else if (empty($file_name)) {
			$err['photo'] = "<p class=\" alert alert-danger \"> Please select a file ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		} else if (in_array($extention, ['jpg', 'png', 'gif', 'jpeg', 'webp']) == false) {
			$err['photo'] = "<p class=\" alert alert-warning \"> Invalid file format ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		} else if ($size_in_kb > 500) {
			$err['photo'] = "<p class=\" alert alert-info \"> Image size is too large, Max photo size 500KB ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
		} else {

			move_uploaded_file($file_tmpname, 'photos/' . $unique_name);
			$msg = "<p class=\" alert alert-success \">Data stable <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			
		}
	}

	?>

	<div class="container mb-5">

		<h3 class="text-center text-uppercase mb-4 mt-4">PHP Form Validation</h3>
		



				<form style="border:1px solid #fff; padding:25px;width:450px;margin:0 auto;box-shadow: 0px 0px 27px #ffffff;" action="" method="post" enctype="multipart/form-data">
				<?php
				if (isset($msg)) {
					echo $msg;
				}
				?>
					<div class="form-group">
						<label for="" class="form-label">Name: </label>
						<input type="text" name="name" value="<?php if(isset($name)) echo $name;?>" class="form-control">
						<?php

						if (isset($err['name'])) {
							echo $err['name'];
						}

						?>
					</div>

					<div class="form-group">
						<label for="" class="form-label">Email: </label>
						<input type="email" name="email" value="<?php if(isset($email)) echo $email;?>" class="form-control">
						<?php

						if (isset($err['email'])) {
							echo $err['email'];
						}

						?>
					</div>

					<div class="form-group">
						<label for="" class="form-label">Cell: </label>
						<input type="text" name="cell" value="<?php if(isset($cell)) echo $cell;?>" class="form-control">
						<?php

						if (isset($err['cell'])) {
							echo $err['cell'];
						}

						?>
					</div>
					<div class="form-group">
						<label for="" class="form-label">Age: </label>
						<input type="text" name="age" value="<?php if(isset($age)) echo $age;?>" class="form-control">
						<?php

						if (isset($err['age'])) {
							echo $err['age'];
						}

						?>
					</div>

					<div class="form-group">
						<label for="insert_photo" class="form-label">Upload Photo <img id="insert_photo_label" width="60" src="file.gif" alt=""></label> <br>
						<img style="max-width: 100%;" src="" alt="" id="upload_photo">
						<input id="insert_photo" style="display: none;" type="file" name="insert_photo" class="form-control">
						<?php

						if (isset($err['photo'])) {
							echo $err['photo'];
						}

						?>
					</div>

					<?php
						$ranNumb1 = mt_rand(1,9);
						$ranNumb2 = mt_rand(1,9);
					?>

					<div class="form-group">
						<label for="" class="form-label">Solve the captcha</label>
						<input type="hidden" name="firstNumber" value="<?php echo $ranNumb1?>">
						<input type="hidden" name="lastNumber" value="<?php echo $ranNumb2?>"> <br>
						<?php echo "<span class=\"unselectable\"> <b>$ranNumb1 + $ranNumb2</span> =</b> "?></label> <input name="captchaResult" type="text" size="2"> 
						<?php

						if (isset($err['captcha'])) {
							echo "<br>" .$err['captcha'];
						}

						?>
					</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>

				</form>


	</div>











	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<script>
		$('#insert_photo').change(function(e) {
			let file_url = URL.createObjectURL(e.target.files[0]);
			$('#upload_photo').attr('src', file_url);
            $('#insert_photo_label').hide();
		});
	</script>









	</script>
</body>

</html>

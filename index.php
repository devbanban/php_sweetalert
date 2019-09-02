<!DOCTYPE html>
<html>
<head>
	<title> devbanban & sweet akert & php</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<div class="container">
  <div class="row">
    <div class="col-md-12">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">หน้าหลัก <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="https://www.youtube.com/playlist?list=PLEA4F1w-xYVbvUVUgN3WnJ35qfTH3KktB&disable_polymer=true" target="_blank">เรียน Bootstrap</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="https://www.youtube.com/playlist?list=PLEA4F1w-xYVa0P11woJOAPty8DSLemepR&disable_polymer=true" target="_blank">เรียน PHP</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="https://www.youtube.com/watch?v=PsxN5lSEXfo&t=1s&index=2&list=PLEA4F1w-xYVZX-h5l0xYldQCvZJR4kvft" target="_blank">ตะกร้าสินค้า PHP</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="http://devbanban.com/" target="_blank">devbanban.com</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
	<div class="container">
		<div  class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8">
				<br>
				<h4 style="margin-bottom: 50px;"> PHP Condition & SWEET ALERT </h4>

				<a href="index.php?act=success" class="btn btn-primary"> success </a>
				<a href="index.php?act=info" class="btn btn-info"> info </a>
				<a href="index.php?act=warning" class="btn btn-warning"> warning </a>
				<a href="index.php?act=danger" class="btn btn-danger"> danger </a>

				<br>
				<p style="margin-top: 50px;">
				ศึกษาข้อมูลเพิ่มเติม : https://sweetalert.js.org/
			</p>

				<?php
				  $act = $_GET['act'];
				  if($act=='success'){
				  	echo '<script type="text/javascript">
  					swal("", "บันทึกข้อมูลเรียบร้อยแล้ว", "success");
  					</script>';
  				}elseif ($act=='info') {
				  	echo '<script type="text/javascript">
  					swal("", "เกิดข้อผิดพลาด !!", "info");
  					</script>';
				  }elseif ($act=='warning') {
				  	echo '<script type="text/javascript">
  					swal("", "เกิดข้อผิดพลาด !!", "warning");
  					</script>';
				  }elseif ($act=='danger') {
				  	echo '<script type="text/javascript">
  					swal("", "เกิดข้อผิดพลาดร้ายแรง !!!", "error");
  					</script>';
				  }
				  ?>
			</div>
		</div>
	</div>

</body>
</html>
<!-- devbanban.com -->
<!DOCTYPE html>
<html>
@include('fontend.layout.head')
<style type="text/css">
	label{
		font-weight: bold;
	}
	h2{
		color: #01FACC;
		margin-left: 30%;
		margin-top:20px;
	}

	.main .row img{
		width: 100%;
	}

	.container_lh .row{
		display: flex;
		flex-direction: row;
		padding-bottom: 20px;
	}

	@media (max-width: 1024px) {
		.container_lh .row {
		    flex-direction: column;
		}
		.container_lh .row .left{ 
		  	width: 100%;
		  	padding: 0px 30%;
		}
		.container_lh .row .right{
		  	width: 100%;
		  	padding: 0px 10%;
		}
	}
	
	.left {
		width: 50%;
	}
	.right {
		width: 50%;
		padding: 50px;
		border: 5px solid rgba(240,240,240,240);
	}
	.right h2 {
		color:#198754;
		margin: auto;
    	text-align: center;
	}
</style>
<body>
	@include('fontend.layout.menu')
	<div class="container_lh" >
		<div class="row">
			<div class="left">
				<img src="assets/img/de-thi-ly-thuyet-bang-lai-xe-oto-b2.png" width="100%" style="padding: 5%">
			</div>
			<div class="right">
				<h2 >Đăng ký học lái xe ô tô</h2><br>
				<form method="post" >
					<div class="row" >
						<div class="col">
							<div class="form-group">
								<label>Họ Tên</label>
								<input type="text" class="form-control"  placeholder="Điền họ tên" style="width:100%">
							</div><br>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Số điện thoại</label>
								<input type="text" class="form-control"  placeholder="Số điện thoại" style="width:100%">
							</div><br>
						</div>
					</div>
					<div class="row" >
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control"  placeholder="email@gmail.com" style="width:100%">
						</div><br>
					</div>
					<div class="row" >
						<div class="form-group" >
							<label>Nội dung</label><br>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="width: 100%"></textarea>
						</div>
						<div class="form-group" style="margin-top: 30px; text-align: center;">
							<input type="submit" name="submit" value="Gửi" class="btn btn-success" style="width: 20%">
						</div>
					</div>
				</form>	
			</div>		
		</div>	
	</div>
	
<div class="footer">
	<div class="container">
		<div class="row" style="padding-bottom: 50px; ">		
			<div class="col-sm-4" style="text-align: center;">
				<h2 >Địa Chỉ</h2>
				<p>Số: 393A Giải Phóng – Thanh Xuân – Hà Nội</p>
			</div>
			<div class="col-sm-4" >
				<h2 style="text-align: center;">Liên Hệ</h2>
				<ul style="padding-left: 38%;">
					<li><p>Số điện thoại: 0993559999</p></li>
					<li><p>Email: banglaib2@gmail.com</p></li>
				</ul>
				
				
			</div>
			<div class="col-sm-4">
				<h2 style="text-align: center;">Website</h2>
				<div style="padding-left: 50%;"><a href="{{url('/')}}">» Trang Chủ</a><br>
				<a href="{{url('thithu')}}">» Đề Thi</a><br>
				<a href="{{url('lythuyet')}}">» Lý Thuyết</a><br></div>
			</div>		
		</div>
	</div>
	<div class="text-center p-3" style="background-color: black;color: white;">
 		© 2021 Copyright:<a class="text-white"  href="{{url('/')}}"> TracnghiemB2.com</a>
	</div>
</div>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
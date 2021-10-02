<!DOCTYPE html>
<html>
@include('fontend.layout.head')
<style type="text/css">
	.main .row {
		display: flex;
		flex-direction: row;
	}
	.main li {
		background-color: #eee;
	}
	.main .row #cont{
	  	width: 33.33%;
		border: 2px solid #31b0d5;
		border-radius: 15px;
		padding: 15px;
	 }
	  .main .row #cont_center{
	  	width: 33.33%;
		border-top: 2px solid #31b0d5;
		border-bottom: 2px solid #31b0d5;
		border-radius: 15px;
		padding: 15px;
	 }
	 @media (max-width: 740px) {
	  	.main .row {
	    	flex-direction: column;
	  	}
	  	.main .row #cont{
	  		width: 100%;
	  	}
	  	.main .row #cont_center{
	  		width: 80%;
	  		border: 2px solid #31b0d5;
	  	}
	}
	@media (max-width: 740px) {
	  	.main .row {
	  	 	flex-direction: column;
	  	}
	  	.main .row #cont{
	  		width: 100%;
	  	}
	  	.main .row #cont_center{
	  		width: 100%;
	  		border: 2px solid #31b0d5;
	  	}
	}

	@media (min-width: 768px) and (max-width: 1024px) {
	  	.main .row {
	   	 	flex-direction: column;
	  	}
	  	.main .row #cont{
	  		width: 100%;
	  	}
	  	.main .row #cont_center{
	  		width: 100%;
	  		border: 2px solid #31b0d5;
	  	}
	}
</style>
<body>
@include('fontend.layout.menu')
<div style="background-color: #eee;">
	<div class="container" >
	    <div class="main">
			<div class= "container-fluid"><br>
			   <div class= "row">  
			        <div class ="col-12 col-sm-6 col-md-4"   id="cont">
				        <div class="title_col"><h2 >Quy định thi lý thuyết </h2></div><br>
				         <div>
				         	<b>Gồm những quy định sau:</b>
				         </div>
				         <ul class="list-group">
				            <li class="list-group-item list-group">- Sẽ có tổng số 35 câu hỏi được lấy ngẫu nhiên từ bộ đề 600 câu.</li>
				            <li class="list-group-item list-group">- Thời gian làm bài: 22 phút.</li>
				            <li class="list-group-item list-group">- Mỗi câu hỏi trong đề sát hạch có từ 02 đến 04 ý trả lời và chỉ có 01 ý trả lời đúng nhất.</li>
				            <li class="list-group-item list-group">- Trong số các câu hỏi, có 01 câu trả lời sai (câu hỏi điểm liệt) sẽ bị truất quyền sát hạch. (Xem 60 câu hỏi điểm liệt)</li>
				            <li class="list-group-item list-group">- Các câu còn lại, mỗi câu tính 01 điểm.</li>
				            <li class="list-group-item list-group">- Kết thúc bài thi, thí sinh đạt 32/35 điểm trở lên và không sai câu hỏi điểm liệt là ĐẠT.</li>				            
				         </ul>
			      	</div>
			      	<div class ="col-12 col-sm-6 col-md-4 " id="cont_center">
				      	<div class="title_col">
				        	<h2>Tổng hợp các bộ đề</h2>
				        </div>
				        <div class="container" style="margin-top: 50px;">
					        @foreach($dethi as $dt)			       
				        		<a href="baithi/{{$dt->id}}"><button type="button" class="btn btn-outline-success btn-block" style="margin: 10px;">{{$dt->tendethi}}</button>	</a>		       	
					        @endforeach	 
				        </div>
				        <p style="padding-top: 20px;"><b>» Thi bằng lái xe B2 (lái xe số tự động, xe số sàn, xe tải dưới 3.5 tấn): số câu hỏi 35, số câu đạt 32/35, thời gian thi 22 phút.</b></p>
			       </div> 
			      	<div class ="col-12 col-sm-6 col-md-4 "   id="cont">
				      	<div class="title_col">
				        	<h2>Đề thi ngẫu nhiên</h2>
				        </div>  
				        <div style="margin-top: 50px;">
				        	<p><b>» Đề thi gồm 35 câu hỏi ngẫu nhiên theo đúng cấu trúc đề thi bằng lái ô tô B2.</b></p>
				        	<p> Vào thi thử khi học viên đã trả lời hoàn thành 600 câu hỏi thi bằng lái xe B2 .</p>
				        	<a href="{{url('thingaunhien')}}"><button type="button" class="btn btn-outline-success btn-block" style="margin-left: 35%">Bắt đầu thi</button></a>
				        </div>       
			      	</div>
			   </div>
			</div>
		</div><br>	
	</div>
</div>
@include('fontend.layout.footer')
	
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
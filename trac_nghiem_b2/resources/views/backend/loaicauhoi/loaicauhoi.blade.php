<!DOCTYPE html>
<html>
@include('backend.layout.head')
<body>
	@include('backend.layout.nav')
		
	@include('backend.layout.menu')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục loại câu hỏi</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm loại câu hỏi
						</div>
						<div class="panel-body">
							@include('backend.errors.not')
							@if(session('thongbao'))
								<div class="alert alert-success">
									{{session('thongbao')}}
								</div>
							@endif
							
							<form method="post" >
								<input type="hidden" name="_token" value="{{csrf_token()}}"/>
								<div class="form-group">
								<label>Loại câu hỏi:</label>
    							<input type="text" name="loaicauhoi" class="form-control" placeholder="Loại câu hỏi...">
    							
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="form-control btn btn-primary"  value="Thêm mới">
								</div>
								
							</form>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách Loại câu hỏi</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							@if(session('thongbao_sua'))
								<div class="alert alert-success">
									{{session('thongbao_sua')}}
								</div>
							@endif
							@if(session('thongbao_xoa'))
								<div class="alert alert-success">
									{{session('thongbao_xoa')}}
								</div>
							@endif
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Loại câu hỏi</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		@foreach($loaicauhoi as $lch)
										<tr>
											<td>{{$lch->loaicauhoi}}</td>
											<td>
					                    		<a href="backend/sualoaicauhoi/{{$lch->id}}" class="btn btn-warning"> Sửa</a>
					                    		<a href="backend/xoaloaicauhoi/{{$lch->id}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"> Xóa</a>
					                  		</td>
					                  	</tr>
			                 		@endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

	@include('backend.layout.footer')
	
</body>

</html>
<!DOCTYPE html>
<html>
@include('backend.layout.head')
<body>
	@include('backend.layout.nav')
		
	@include('backend.layout.menu')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Chi tiết đề thi</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm đề thi
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
								<div class="form-group" >
									<label>Đề thi</label>
									<select required name="iddethi" class="form-control">
										@foreach($dethi as $dt)
											<option value="{{$dt->id}}">{{$dt->id}} - ({{$dt->tendethi}})</option>
										@endforeach
				                    </select>
								</div>
								<div class="form-group" >
									<label>ID câu hỏi</label>
									<select required name="idcauhoi" class="form-control">
										@foreach($viewdata as $ch)
											<option value="{{$ch->id}}">{{$ch->id}} - ({{$ch->loaicauhoi}})</option>
										@endforeach
				                    </select>
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
					<div class="panel-heading">Chi tiết đề thi</div>
					@if(session('thongbao1'))
						<div class="alert alert-success">
							{{session('thongbao1')}}
						</div>
					@endif
					@if(session('thongbao_sua'))
						<div class="alert alert-success">
							{{session('thongbao_sua')}}
						</div>
					@endif
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>ID đề thi</th>
					                  <th>ID câu hỏi</th>
					                 
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		@foreach($ct_dethi as $ct)
										<tr>
											<td>{{$ct->id_dethi}} </td>
											<td>{{$ct->id_cauhoi}}</td>
											<td>
					                    		<a href="backend/sua_ct_dethi/{{$ct->id}}" class="btn btn-warning"> Sửa</a>
					                    		<a href="backend/xoa_ct_dethi/{{$ct->id}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"> Xóa</a>
					                  		</td>
					                  	</tr>
			                 		@endforeach
				                </tbody>
				            </table>

			            	<div>
								<form action="{{url('backend/import-ctdt')}}" method="POST" enctype="multipart/form-data">
						            @csrf
						            <input type="file" name="file" accept=".xlsx"><br>
						            <input type="submit" value="Import File Excel" name="import_ctdt" class="btn btn-warning">
						        </form>
						        <form action="{{url('backend/export-ctdt')}}" method="POST">
						            @csrf
						            <input type="submit" value="Export File Excel" name="export_ctdt" class="btn btn-success">
						        </form>
							</div>

				            {{$ct_dethi->links()}}
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
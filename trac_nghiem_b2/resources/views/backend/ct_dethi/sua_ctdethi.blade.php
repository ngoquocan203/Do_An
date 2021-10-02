<!DOCTYPE html>
<html>
@include('backend.layout.head')
<body>
	@include('backend.layout.nav')
		
	@include('backend.layout.menu')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sửa chi tiết đề thi</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa chi tiết đề thi
						</div>
						<div class="panel-body">
							<form method="post">
								<div class="form-group" >
									<label>Đề thi</label>
									<select required name="id_dethi" class="form-control">
										@foreach($dethi as $dt)
											<option value="{{$dt->id}}">{{$dt->id}} ({{$dt->tendethi}})</option>
										@endforeach
				                    </select>
								</div>
								<div class="form-group" >
									<label>Câu hỏi</label>
									<select required name="id_cauhoi" class="form-control">
										@foreach($cauhoi as $ch)
											<option value="{{$ch->id}}">{{$ch->id}} ({{$ch->loaicauhoi}})</option>
										@endforeach
				                    </select>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="form-control btn btn-primary"  value="Sửa">
								</div>
								<div class="form-group">
									<a class="form-control btn btn-danger" href="{{asset('backend/ct_dethi')}}">Hủy </a>
								</div>
								{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

	@include('backend.layout.footer')
	
	
</body>

</html>
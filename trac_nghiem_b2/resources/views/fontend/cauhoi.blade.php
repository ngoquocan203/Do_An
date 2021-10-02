<!DOCTYPE html>
<html>
@include('fontend.layout.head')
 <style type="text/css">
   .row hr {
    margin: auto;
   }
   #cauhoi {
    border-bottom: 2px solid black;
   }
   .container .main .row{
    margin:0px 12% 50px 12%; 
    border: 5px solid rgba(240,240,240,240); 
    border-radius: 50px;
   }
   .cont_ch {
      padding: 30px 20%;
    }
   @media (max-width: 1023px) {
    .container .main .row {
      margin:0px -10% 50px -10%;
    }
    .cont_ch {
      padding: 30px 5%;
    }
   }
 </style>
<body>
	@include('fontend.layout.menu')
	<div class="container">
    <div class="main" style="margin-top: 20px; text-align: center;">
      <h2 style=";color: #198754;">600 câu thi bằng lái xe ô tô</h2><br>
      <?php $a=1  ?>
      <div class="row" style="">    
        <div class="cont_ch" style="">
          @foreach($cauhoi as $ch)
          <div id="cauhoi">
            <div style="text-align: left;"><b>Câu:{{$a++}}</b> &nbsp; Đáp án đúng : <b style="color: blue;">{{$ch->dapandung}}</b></div> 
            <img src="{{asset('back/img/'.$ch->noidung)}}" width="80%">
          </div><br>
           @endforeach
        </div>
      </div> 
     <div style="padding-left: 30%">{{$cauhoi->links()}}</div>
    </div>
	</div>	

  
@include('fontend.layout.footer')
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
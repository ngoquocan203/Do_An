<!DOCTYPE html>
<html>
<head>
  <title>Trắc Nghiệm B2</title>
  <base href="{{asset('')}}">
  <link rel="stylesheet" type="text/css" href="font/css/style.css">
  <link rel="stylesheet" type="text/css" href="font/fontawesome-free-5.15.4/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="icon" type="image/gif" href="font/image/Logo1.png">
  <meta charset="utf-8">
</head>
@include('fontend.layout.menu_css_baithi')
<body>
	@include('fontend.layout.menu')
  <div class="main_bt">
    <div class="container">
      <div class="start"> 
        <button type="button" name="button" class="btn btn-outline-success btn-block" id="btnStart">Bắt đầu thi</button>
      </div>
      <div class="title">
        <h2>Đề thi trắc nghiệm B2 </h2><br>
        <div>
          <b style="">Số câu hỏi:<span style="color: red;"> 35 câu</span> </b> &nbsp;&nbsp;
          <b id="b2" style="margin-left: 15%">Thời gian làm bài thi:
            <span id="time_0" style="color: red;"> Kết thúc</span> 
            <span id="time" style="color: red;"></span>
          </b>
        </div>
      </div>
      
      <div class="questions">
        <div class="row" id="quest"> </div>
        <div class="row" style="margin-top:50px">
          <div class="col-sm-12 text-center">
            <button type="button" name="button" class="btn btn-warning" id="btnFinish">Nộp bài thi</button>
          </div>
        </div>   
      </div>
      <div class="row" id="ketqua" > </div>
    </div> 
  </div>
   

  <script type="text/javascript">
      var questions;
     $('#btnStart').click(function(){
        GetQuestions();
        $('#btnFinish').show();
        $('#time_0').hide();
        $('#time').show();
        $('.title').show();
        $('.questions #quest').show();
        $(this).hide();
    });

    $('#btnFinish').click(function(){
        $(this).hide();
        $('#time').hide();
        $('#time_0').show();
        CheckResult();
    });

    function CheckResult(){
      let diem = 0;
      let caudung = 0;
      let causai = 0;
      let ketqua = '';
      let form ='';
      let daLiet = '';
  
      let cauhoiliet = questions.find(x=>x.idloaicauhoi == 8)
      let dapan_liet = cauhoiliet['dapandung'];

      $('.questions div#luachon').each(function(k,v){
        let id = $(v).find('h5').attr('id');
  
        let question = questions.find(x=>x.id == id)

        let dapan = question['dapandung'];
       // console.log(dapan);
        let da = $(v).find('input[type="radio"]:checked').attr('class');

        dapan_liet == da ? daLiet = 'Đúng' : daLiet = 'Sai';

        if (da == dapan) {
          //console.log('câu có id:'+id+ 'đúng');
          diem += 1;
          caudung += 1;
        }
        else{ causai +=1; }
          //console.log('cấu có id:'+id+ 'sai');
          
        if(diem > 32){
          if(daLiet === 'Đúng'){
            ketqua = 'Đạt';
          }
        }  
        else  {ketqua = 'Trượt';}
        
        $('#check'+id+' > fieldset > label.'+dapan).css("background-color","#5BFB66");
      }); 
      
      form+= '<form style=" border:2px solid red; max-width:500px; border-radius:10px; margin:auto">';
        form+= '<fieldset disabled>';
        form+= '<h2 style="color:blue; margin: 20px 0 0 140px;">KẾT QUẢ THI</h2>';
        form+= '<hr id="hr" style="background-color:black;max-width:470px; height: 3px;">'
        form+= '<div class="mb-3"><label for="disabledTextInput" class="form-label"><b>Số câu trả lời đúng:</b> <span style="color:red;font-weight:bold">'+caudung+'</span></label> </div>';
        form+= '<div class="mb-3"><label for="disabledTextInput" class="form-label"><b>Số câu trả lời sai:</b> <span style="color:red;font-weight:bold">'+causai+'</span></label></div>';
        form+= '<div class="mb-3"><label for="disabledTextInput" class="form-label"><b>Điểm của bạn là : <span style="color:red; font-weight:bold">'+diem+'</span> &nbsp;  Câu hỏi điểm liệt: <span style="color:red;font-weight:bold">'+daLiet+ '</span></b></label></div>';
        form+= '<div class="mb-3"><label for="disabledTextInput" class="form-label"><b>Kết quả : <span style="color:red;font-weight:bold">'+ketqua+'</span></b></label></div>';
        form+= '<div class="mb-3"><label for="disabledTextInput" class="form-label"><h5 style="color:blue;"> Kéo lên trên để xem đáp án Đúng </h5></label></div>';
        form+= '</fieldset>';
        form+='<label style="margin:20px 20px 20px 120px;"><a href="{{url('thithu')}}"><button type="button" name="button" class="btn btn-success" style="width: 200px;">Tiếp tục thi </button></a></label> &nbsp;';
      form+= '</form> ';
     
      $('#ketqua').html(form);
        
    }

    function GetQuestions(){
      const urlweb = window.location.pathname;
      const id = urlweb.split('/').pop();
     //console.log(id);
      $.ajax({
        url:'thibt/'+id,
        type:'get',
        success:function(data)
        {
          questions = jQuery.parseJSON(data);
          let d = '';
          let index = 1;
          $.each(questions,function(k,v){
            d+= '<div id="luachon">'
              d+= ' <div class="radio col-md-12" style="font-size:20px; margin-bottom:20px;" id="check'+v['id']+'">';
                d+= '<H5 style="font-weight: bold;color: red" id="'+v['id']+'">Câu '+index+':</H5>';
                d+= '<h4><img src="back/img/'+v['noidung']+'" width="80%"></h4>';
                d+= '<fieldset> <b>Câu trả lời:</b> ';
                d+= ' <label class="1" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="1">1 </label> &nbsp; ';
                d+= ' <label class="2" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="2">2 </label> &nbsp;  ';
                d+= ' <label class="3" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="3">3 </label> &nbsp;  ';
                d+= ' <label class="4" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="4">4 </label>';
                d+= '</fieldset>'
              d+= '</div>';
              d+= '<hr ">';
            d+= '</div>'
            index++;
          });
          $('#quest').html(d);
        }
      });
    }

    // Thiết lập thời gian đích mà ta sẽ đếm
      var countDownDate = new Date().getTime()+ 1321000 ;
      // cập nhập thời gian sau mỗi 1 giây
      var x = setInterval(function() 
      {
        // Lấy thời gian hiện tại
        var now = new Date().getTime();
        // Lấy số thời gian chênh lệch
        var distance = countDownDate - now ;
        // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        // HIển thị chuỗi thời gian trong thẻ p
        document.getElementById("time").innerHTML = minutes + ": " + seconds + " ";
        // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("getTime").innerHTML = "Thời gian làm bài đã kết thúc";
          $('#btnFinish').click();
        }
      }, 1000);

  </script>

  
@include('fontend.layout.footer')
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
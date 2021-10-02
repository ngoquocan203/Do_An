<!DOCTYPE html>
<html>
@include('fontend.layout.head')
<style type="text/css">
  .container1 #title {
    text-align: center;
    color: green;
    margin: 20px 0px;
  }
  .container1 #questions #ketqua {
    margin: auto;
    text-align: center;
    width: 500px;
    padding: 35px;
  }
  @media only screen and (max-width: 1024px){
    .container1 #questions #quest {
        margin: 0 5%
    }
    .container1 #questions #quest img{
        width: 90%;
    }
  }
</style>
<body>
		@include('fontend.layout.menu')
  <div class="container1" style="margin-top: 50px;">
      <div id="title">
        <h2>Luyện tập theo loại câu hỏi </h2>
      </div>
      <div id="questions">
        <div class="row" id="quest"> </div>
        <div class="row">
          <div class="col-sm-12 text-center">
            <button type="button" name="button" class="btn btn-success" style="" id="btnFinish">Xem đáp án</button>
          </div>
        </div>
  
        <div class="row" id="ketqua" > </div>
      </div>  
  </div>  
<script type="text/javascript">
    const id = '';
	
        GetQuestions();
      

	 $('#btnFinish').click(function(){
        $(this).hide();
       // $('#getTime').hide();
        CheckResult();
    });

	function CheckResult(){
    	 let count = 0;
       let form ='';
       
        $('#questions div#luachon').each(function(k,v){
        let id = $(v).find('h5').attr('id');
        //console.log(id);
        let question = questions.find(x=>x.id == id)
        let dapan = question['dapandung'];
       // let dethi = question['madethi'];
        console.log(question);
        //console.log(dapan);

        let da = $(v).find('input[type="radio"]:checked').attr('class');
        
        if (da == dapan) {
          count += 1;
         
        }else{
           count += 0;
         
        }
        
        
        $('#check'+id+' > fieldset > label.'+dapan).css("background-color","#5BFB66");
      });

      form+= '<form>';
        form+= '<div class="mb-3" style="line-height: 55px; margin-top: 16px;"><label for="disabledTextInput" class="form-label"><b>Số câu trả lời đúng:</b> <span style="color:red;font-weight:bold">'+count+'/5</span></label> </div>'
      form+= '</form> ';

      $('#ketqua').html(form);
    };


	function GetQuestions(){
      const urlweb = window.location.pathname;
      const id = urlweb.split('/').pop();
     // 
     //var baseUrl = (window.location).href;
     //console.log(id);
      $.ajax({
        url:'luyentapp/'+id,
        type:'get',

        success:function(data)
        {
          questions = jQuery.parseJSON(data);//
          console.log(questions);
          let d = '';
          let index = 1;
          $.each(questions,function(k,v){
            d+= '<div id="luachon">'
              d+= ' <div class="radio col-md-12" style="font-size: 20px; margin-bottom:20px; " id="check'+v['id']+'">';
                d+= '<H5 style="font-weight: bold;color: red" id="'+v['id']+'">Câu '+index+':</H5> ';
                d+= '<h4><img src="back/img/'+v['noidung']+'" width="65%"></h4>';
                d+= '<fieldset><b>Câu trả lời:</b>';
                d+= ' <label class="1" style="color:blue;font-weight:bold;"><input  type="radio" name="optradio'+index+'" class="1">1 </label> &nbsp; ';
                d+= ' <label class="2" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="2">2 </label> &nbsp;  ';
                d+= ' <label class="3" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="3">3 </label> &nbsp;  ';
                d+= ' <label class="4" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="4">4 </label>';
                d+= '</fieldset>'
              d+= '</div>';
              d+= '<hr style="height:3px;">';
            d+= '</div>'
            index++;
          });
          $('#quest').html(d);
        }
      });
    }
</script>
  


@include('fontend.layout.footer')
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
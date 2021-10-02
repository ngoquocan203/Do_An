<div class="nav">
    <!-- Nav PC -->
    <nav class="nav__pc">
    	<a href="{{url('/')}}"><img src="font/image/Logo1.png" width="110px" height="100px"></a>
        <ul class="nav__list">
            <li>
                <a href="{{url('/')}}" class="nav__link">Trang chủ</a>
            </li>
            <li>
                <a href="{{url('thithu')}}" class="nav__link">Thi thử</a>
            </li>
            <li>
                <a href="{{url('lythuyet')}}" class="nav__link">Lý thuyết</a>
            </li>
            <li>
                <a href="{{url('lienhe')}}" class="nav__link">Liên hệ</a>
            </li>      
        </ul>
    </nav>
    <label class="nav_bar-btn" for="nav-mobile-input">
    	<i class="fas fa-bars"></i>
    </label>

    <input type="checkbox" name="" id="nav-mobile-input" class="nav__input">
    <label class="nav__overlay" for="nav-mobile-input"></label>
    <nav class="nav__mobile">
    	<label class="nav__mobile-close" for="nav-mobile-input" style="width: 30px;">
			<i class="fas fa-times" ></i>
    	</label>
        <ul class="nav__mobile-list">
            <li>
                <a href="{{url('/')}}" class="nav__mobile-link">Trang chủ</a>
            </li>
            <li>
                <a href="{{url('thithu')}}" class="nav__mobile-link">Thi thử</a>
            </li>
            <li>
                <a href="{{url('lythuyet')}}" class="nav__mobile-link">Lý thuyết</a>
            </li>
            <li>
                <a href="{{url('lienhe')}}" class="nav__mobile-link">Liên hệ</a>
            </li>
        </ul>
    </nav>
</div>


{{-- <div class="menu">
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0px;">
	  <div class="container-fluid" id="menu">
	    <a href="home.html"><img src="font/image/Logo1.png" width="110px" height="100px"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Trang Chủ</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('thithu')}}">Thi Thử</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('lythuyet')}}">Lý Thuyết</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('lienhe')}}">Liên Hệ</a>
		        </li>    	 
	        </ul> 
	    </div>	
	  </div>
	</nav>
</div> --}}

{{-- <div class="menu">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid" id="menu">
	    <a href="home.html"><img src="font/image/Logo1.png" width="110px" height="100px"></a>
	    
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Trang Chủ</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('thithu')}}">Thi Thử</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('lythuyet')}}">Lý Thuyết</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{url('lienhe')}}">Liên Hệ</a>
		        </li>
		        <div class="login">
		        	@if(Auth::check()) 
		      	 	<li class="nav-item dropdown">
					   <a class="nav-link" href="#" id="navbarDropdown"><p style="font-size: 14px;">{{Auth::user()->email}}</p></a>
					   <div class="dropdown-content">
						   <a class="dropdown-item" href="{{url('editacc')}}">Sửa thông tin</a>
						   <div class="dropdown-divider"></div>
						   <a class="dropdown-item" href="{{url('logout')}}">Đăng xuất</a>
					   </div>
					</li>
					@else
						<li class="nav-item">
			          		<a class="nav-link active" aria-current="page" href="{{url('login')}}">Đăng nhập</a>
			        	</li>
					@endif
		        </div>
		        
	        </ul>  
	    </div>
	  </div>

	</nav>
</div> --}}
<style type="text/css">
	/*Menu*/
	.nav__pc {
	    display: flex;
	    align-items: center;
	    /*height: 48px;
	    background-color: #333;*/
	    background: #F0D6E4;
		font-weight: bold;
		font-size: 20px;
		height: 100px;	
		width: 100%;
	}

	.nav__list {
	    display: flex;
	    list-style: none;
	    padding: 0;
	    margin: 0;
	}
	.nav__list li{
	    font-family: 'Lobster';
		height: 100px;
		width: 120px;
		text-align: center;
		line-height: 100px;
	}
	.nav__pc .nav__list li:hover{
	    background-color: #198754;
		transition: ease-in 0.9s;
		-moz-transition:ease-in 0.9s;
		-webkit-transition:ease-in 0.9s;
	}

	.nav__link {
	    text-decoration: none;
	    color: #198754;
	   /* margin-right: 48px;*/
	}
	.nav__pc .nav__list li a{
		display: block;
	}
	.nav__pc .nav__list li:hover a {color:#fff;}

	/*mobile*/
	.nav_bar-btn {
		width: 28px;
		height: 28px;
		display: none;
		position: absolute;
		top: 0;
		right: 5%;
		bottom: 0;
		color: #666;
	    line-height: 100px;
	}


	.nav__overlay{
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background-color: rgba(0, 0, 0, 0.3);
		display: none;
		animation: fadeIn linear 0.2s;
		z-index: 888;
	}

	.nav__mobile {
		
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		width: 320px;
		max-width: 100%;
		background-color:  #DCEFF9;
		transform: translateX(100%);
		opacity: 0;
		transition: transform linear 0.5s, opacity linear 0.5s ;
	}

	.nav__mobile-list {
		text-align: center;
		margin-top: 20%;
		list-style: none;
		padding: 0;
		border-top: 2px solid #666;
	}

	.nav__mobile-link{
		text-decoration: none;
		font-weight: bold;
	    color: green;
		display: block;
		font-size: 25px;
		padding: 30px 0px;
	}

	.nav__mobile-close {
		color: #666;
		position: absolute;
		top: 1rem;
		right: 1rem;
		width: 25px;
		height: 25px;
	}
	.nav__input {
		display: none;
	}
	.nav__input:checked ~ .nav__overlay {
		display: block;
	}
	.nav__input:checked ~ .nav__mobile {
		transform: translateX(0%);
		opacity: 1;
		z-index: 999;
	}

	@media (max-width: 1023px) {
		.nav_bar-btn {
			display: block;
			margin-left: 95%;
		}

		.nav__list {
			display: none;
		}
	}

	@keyframes fadeIn{
		from {
			opacity: 0;
		}
		to {
			opacity: 1;
		}
	}
</style>
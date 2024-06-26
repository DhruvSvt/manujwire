<!--=========header start============-->
<header class="header1">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 display-block ">
                <a href="{{ route('home') }}" class="logo"><img src="{{ config('app.url') }}/images/b-m-jain-steel-co.png" class="img-responsive"
                        alt="logo"></a>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 pull-right display-block">
                <ul class="header-info">
                    <li class="address">G-103 Pearl Emerald Building<br />Jaipur House, Agra (UP)</li>
                    <li class="phn"><a href="tel: +91 74550 29003">+91 74550 29003</a><br /><a
                            href="mailto:exports@bmjainsteel.com">exports@bmjainsteel.com</a></li>
                </ul>
                <div class="mob-social display-none">
                    <div class="header-socials ">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <div class="search-column">
                        <button name="button" type="button" class="search-btn" data-toggle="modal"
                            data-target=".bs-example-modal-lg"></button>
                    </div>
                </div>
                <span class="display-block">
                    <a class="header-requestbtn hvr-bounce-to-right " href="{{ route('contact') }}">Request A Quote</a>
                </span>
            </div>
        </div>
    </div>
    <nav id="main-navigation-wrapper" class="navbar navbar-default ">
        <div class="container">
            <div class="navbar-header">
                <div class="logo-menu"><a href="index.html"><img src="images/WHITE-b-m-jain-steel-co.png"
                            alt="logo"></a>
                </div>
                <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false"
                    class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div id="main-navigation" class="collapse navbar-collapse ">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('company') }}">Company</a></li>

                    <li class="dropdown">
                        <a href="">Products</a><i class="fa fa-chevron-down"></i>
                        <ul class="dropdown-submenu">
                            <li><a href="{{ route('barbed-wire') }}">Barbed Wire</a></li>
                            <li><a href="{{ route('chain-link-fencing') }}">Chain link Fencing</a></li>
                            <li><a href="{{ route('further-drawn-wire') }}">Further Drawn Wire</a></li>
                            <li><a href="{{ route('gi-welded-wire-mesh') }}">GI Welded Wire Mesh</a></li>
                            <li><a href="{{ route('hot-dip-galvnized-wire') }}">Hot Dip Galvanized Wire</a></li>
                            <li><a href="{{ route('hb-wire') }}">HB Wire</a></li>
                            <li><a href="{{ route('ms-welded-wire-mesh') }}">MS Welded Wire Mesh</a></li>
                            <li><a href="{{ route('nail-wire') }}"">Nail Wire</a></li>
                            <li><a href="{{ route('commercial-gi-wire') }}">Commercial GI Wire</a></li>
                            <li><a href="{{ route('redraw-wire') }}">Redraw Wire</a></li>
                     </ul>
                  </li>
                  <li><a href="{{ route('blog') }}">Blogs</a></li>
                  <li><a href="{{ route('distributor') }}">Become A Distributor</a></li>

                            <li><a href="{{ route('contact') }}">contact us</a></li>
                        </ul>
                        <div class="header-nav-right">
                            <div class="header-socials">
                                <a href="#" class="hvr-bounce-to-bottom"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a>
                                <a href="#" class="hvr-bounce-to-bottom"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a>
                                <a href="#" class="hvr-bounce-to-bottom"><i class="fa fa-google-plus"
                                        aria-hidden="true"></i></a>
                                <a href="#" class="hvr-bounce-to-bottom"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a>
                            </div>

                            <span class="display-none">
                                <a class="header-requestbtn hvr-bounce-to-right" href="#">Request A
                                    Quote</a></span>
                        </div>
            </div>
        </div>
    </nav>
</header>
<!--=========header end============-->
<script>
    function check_validation(){
	var email = $('#formGroupExampleInput2').val();
	var contact = $('#formGroupExampleInput3').val();
	//alert(contact.length);
	if(email != ''){
		var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
		  alert("Please Provide Valid Email");
		  return false;
		}
	}
	if(contact != '' && (contact.length<10 || isNaN(contact))){
		alert("Please Enter Valid Contact.");
		return false;
	}
	//alert("hello");
}
</script>

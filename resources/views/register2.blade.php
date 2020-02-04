<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- SEO meta tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="images/favicon.ico">
		<!-- Title -->
		<title>BitcoinNearMe | Registration</title>
		<!-- Stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap-4.1.3.min.css">
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/fontawesome-free-5.3.1.css">
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/animate.css">
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
		<!-- Global site tag (gtag.js) - Google Analytics -->

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117547527-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-117547527-1');
        </script>
        <style type="text/css">
            p.errorMessage {
                color: red; 
                font-size: 12px;
            }
        </style>
	</head>
	<body class="body-back">
        <header id="myHeader">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark navigationbar">
                    <!-- <a href="{{ url('/') }}/home"><img src="{{ url('/') }}/assets/image/logo.png" class="img-fluid mobile-width" alt=""></a> -->
                    <h1 class="m-0"><a href="{{ url('/') }}/home" class="text-white">BitcoinNearMe</a></h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}/login">
                                    <div class="np-link">
                                        <div>
                                            <i class="fa fa-sign-in-alt"></i>
                                        </div>
                                        <div>
                                            <span class="np-link-text">Login</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}/register">
                                    <div class="np-link">
                                        <div>
                                            <i class="fa fa-sign-out-alt"></i>
                                        </div>
                                        <div>
                                            <span class="np-link-text">Register</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="auth px-4">
            <div class="auth-inner">
                <div class="box">
                   <!--  <div class="d-flex justify-content-center align-items-center">
                        <a href="{{ url('/') }}">
                        <img src="assets/image/logo.png" class="img-fluid mobile-width" alt="">
                        </a>
                    </div> -->


                   

                    <form  class="myForm" method="post" action="{{url('/')}}/insertuser" autocomplete="off">
                         {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">User Name*</label>
                                    <input type="text" class="form-control" id="username"  maxlength="16" name="user_name" placeholder="Username">
                                    @if($errors->any())         
                                        <p class="errorMessage">{{ $errors->first('user_name') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Email*</label>
                                    <input type="email" class="form-control" id="email" autocomplete="new-email"  name="email" placeholder="Email">
                                    @if($errors->any())         
                                        <p class="errorMessage">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Country Code*</label>
                                    <select class="form-control" id="country" name="country" required>
                                        <option value="">Select Code</option>
                                        <option value="93">93 (Afghanistan)</option>
                                        <option value="355">355 (Albania)</option>
                                        <option value="213">213 (Algeria)</option>
                                        <option value="1684">1684 (American Samoa)</option>
                                        <option value="376">376 (Andorra)</option>
                                        <option value="244">244 (Angola)</option>
                                        <option value="1264">1264 (Anguilla)</option>
                                        <option value="672">672 (Antarctica)</option>
                                        <option value="1268">1268 (Antigua and Barbuda)</option>
                                        <option value="54">54 (Argentina)</option>
                                        <option value="374">374 (Armenia)</option>
                                        <option value="297">297 (Aruba)</option>
                                        <option value="61">61 (Australia)</option>
                                        <option value="43">43 (Austria)</option>
                                        <option value="994">994 (Azerbaijan)</option>
                                        <option value="1242">1242 (Bahamas)</option>
                                        <option value="973">973 (Bahrain)</option>
                                        <option value="880">880 (Bangladesh)</option>
                                        <option value="1246">1246 (Barbados)</option>
                                        <option value="375">375 (Belarus)</option>
                                        <option value="32">32 (Belgium)</option>
                                        <option value="501">501 (Belize)</option>
                                        <option value="229">229 (Benin)</option>
                                        <option value="1441">1441 (Bermuda)</option>
                                        <option value="975">975 (Bhutan)</option>
                                        <option value="591">591 (Bolivia)</option>
                                        <option value="387">387 (Bosnia and Herzegovina)</option>
                                        <option value="267">267 (Botswana)</option>
                                        <option value="55">55 (Brazil)</option>
                                        <option value="246">246 (British Indian Ocean Territory)</option>
                                        <option value="1284">1284 (British Virgin Islands)</option>
                                        <option value="673">673 (Brunei)</option>
                                        <option value="359">359 (Bulgaria)</option>
                                        <option value="226">226 (Burkina Faso)</option>
                                        <option value="257">257 (Burundi)</option>
                                        <option value="855">855 (Cambodia)</option>
                                        <option value="237">237 (Cameroon)</option>
                                        <option value="1">1 (Canada)</option>
                                        <option value="238">238 (Cape Verde)</option>
                                        <option value="1345">1345 (Cayman Islands)</option>
                                        <option value="236">236 (Central African Republic)</option>
                                        <option value="235">235 (Chad)</option>
                                        <option value="56">56 (Chile)</option>
                                        <option value="86">86 (China)</option>
                                        <option value="61">61 (Christmas Island)</option>
                                        <option value="61">61 (Cocos Islands)</option>
                                        <option value="57">57 (Colombia)</option>
                                        <option value="269">269 (Comoros)</option>
                                        <option value="682">682 (Cook Islands)</option>
                                        <option value="506">506 (Costa Rica)</option>
                                        <option value="385">385 (Croatia)</option>
                                        <option value="53">53 (Cuba)</option>
                                        <option value="599">599 (Curacao)</option>
                                        <option value="357">357 (Cyprus)</option>
                                        <option value="420">420 (Czech Republic)</option>
                                        <option value="243">243 (Democratic Republic of the Congo)</option>
                                        <option value="45">45 (Denmark)</option>
                                        <option value="253">253 (Djibouti)</option>
                                        <option value="1767">1767 (Dominica)</option>
                                        <option value="1809, 1829, 1849">1809, 1829, 1849 (Dominican Republic)</option>
                                        <option value="670">670 (East Timor)</option>
                                        <option value="593">593 (Ecuador)</option>
                                        <option value="20">20 (Egypt)</option>
                                        <option value="503">503 (El Salvador)</option>
                                        <option value="240">240 (Equatorial Guinea)</option>
                                        <option value="291">291 (Eritrea)</option>
                                        <option value="372">372 (Estonia)</option>
                                        <option value="251">251 (Ethiopia)</option>
                                        <option value="500">500 (Falkland Islands)</option>
                                        <option value="298">298 (Faroe Islands)</option>
                                        <option value="679">679 (Fiji)</option>
                                        <option value="358">358 (Finland)</option>
                                        <option value="33">33 (France)</option>
                                        <option value="689">689 (French Polynesia)</option>
                                        <option value="241">241 (Gabon)</option>
                                        <option value="220">220 (Gambia)</option>
                                        <option value="995">995 (Georgia)</option>
                                        <option value="49">49 (Germany)</option>
                                        <option value="233">233 (Ghana)</option>
                                        <option value="350">350 (Gibraltar)</option>
                                        <option value="30">30 (Greece)</option>
                                        <option value="299">299 (Greenland)</option>
                                        <option value="1473">1473 (Grenada)</option>
                                        <option value="1671">1671 (Guam)</option>
                                        <option value="502">502 (Guatemala)</option>
                                        <option value="441481">441481 (Guernsey)</option>
                                        <option value="224">224 (Guinea)</option>
                                        <option value="245">245 (Guinea-Bissau)</option>
                                        <option value="592">592 (Guyana)</option>
                                        <option value="509">509 (Haiti)</option>
                                        <option value="504">504 (Honduras)</option>
                                        <option value="852">852 (Hong Kong)</option>
                                        <option value="36">36 (Hungary)</option>
                                        <option value="354">354 (Iceland)</option>
                                        <option value="91">91 (India)</option>
                                        <option value="62">62 (Indonesia)</option>
                                        <option value="98">98 (Iran)</option>
                                        <option value="964">964 (Iraq)</option>
                                        <option value="353">353 (Ireland)</option>
                                        <option value="441624">441624 (Isle of Man)</option>
                                        <option value="972">972 (Israel)</option>
                                        <option value="39">39 (Italy)</option>
                                        <option value="225">225 (Ivory Coast)</option>
                                        <option value="1876">1876 (Jamaica)</option>
                                        <option value="81">81 (Japan)</option>
                                        <option value="441534">441534 (Jersey)</option>
                                        <option value="962">962 (Jordan)</option>
                                        <option value="7">7 (Kazakhstan)</option>
                                        <option value="254">254 (Kenya)</option>
                                        <option value="686">686 (Kiribati)</option>
                                        <option value="383">383 (Kosovo)</option>
                                        <option value="965">965 (Kuwait)</option>
                                        <option value="996">996 (Kyrgyzstan)</option>
                                        <option value="856">856 (Laos)</option>
                                        <option value="371">371 (Latvia)</option>
                                        <option value="961">961 (Lebanon)</option>
                                        <option value="266">266 (Lesotho)</option>
                                        <option value="231">231 (Liberia)</option>
                                        <option value="218">218 (Libya)</option>
                                        <option value="423">423 (Liechtenstein)</option>
                                        <option value="370">370 (Lithuania)</option>
                                        <option value="352">352 (Luxembourg)</option>
                                        <option value="853">853 (Macau)</option>
                                        <option value="389">389 (Macedonia)</option>
                                        <option value="261">261 (Madagascar)</option>
                                        <option value="265">265 (Malawi)</option>
                                        <option value="60">60 (Malaysia)</option>
                                        <option value="960">960 (Maldives)</option>
                                        <option value="223">223 (Mali)</option>
                                        <option value="356">356 (Malta)</option>
                                        <option value="692">692 (Marshall Islands)</option>
                                        <option value="222">222 (Mauritania)</option>
                                        <option value="230">230 (Mauritius)</option>
                                        <option value="262">262 (Mayotte)</option>
                                        <option value="52">52 (Mexico)</option>
                                        <option value="691">691 (Micronesia)</option>
                                        <option value="373">373 (Moldova)</option>
                                        <option value="377">377 (Monaco)</option>
                                        <option value="976">976 (Mongolia)</option>
                                        <option value="382">382 (Montenegro)</option>
                                        <option value="1664">1664 (Montserrat)</option>
                                        <option value="212">212 (Morocco)</option>
                                        <option value="258">258 (Mozambique)</option>
                                        <option value="95">95 (Myanmar)</option>
                                        <option value="264">264 (Namibia)</option>
                                        <option value="674">674 (Nauru)</option>
                                        <option value="977">977 (Nepal)</option>
                                        <option value="31">31 (Netherlands)</option>
                                        <option value="599">599 (Netherlands Antilles)</option>
                                        <option value="687">687 (New Caledonia)</option>
                                        <option value="64">64 (New Zealand)</option>
                                        <option value="505">505 (Nicaragua)</option>
                                        <option value="227">227 (Niger)</option>
                                        <option value="234">234 (Nigeria)</option>
                                        <option value="683">683 (Niue)</option>
                                        <option value="850">850 (North Korea)</option>
                                        <option value="1670">1670 (Northern Mariana Islands)</option>
                                        <option value="47">47 (Norway)</option>
                                        <option value="968">968 (Oman)</option>
                                        <option value="92">92 (Pakistan)</option>
                                        <option value="680">680 (Palau)</option>
                                        <option value="970">970 (Palestine)</option>
                                        <option value="507">507 (Panama)</option>
                                        <option value="675">675 (Papua New Guinea)</option>
                                        <option value="595">595 (Paraguay)</option>
                                        <option value="51">51 (Peru)</option>
                                        <option value="63">63 (Philippines)</option>
                                        <option value="64">64 (Pitcairn)</option>
                                        <option value="48">48 (Poland)</option>
                                        <option value="351">351 (Portugal)</option>
                                        <option value="1787, 1939">1787, 1939 (Puerto Rico)</option>
                                        <option value="974">974 (Qatar)</option>
                                        <option value="242">242 (Republic of the Congo)</option>
                                        <option value="262">262 (Reunion)</option>
                                        <option value="40">40 (Romania)</option>
                                        <option value="7">7 (Russia)</option>
                                        <option value="250">250 (Rwanda)</option>
                                        <option value="590">590 (Saint Barthelemy)</option>
                                        <option value="290">290 (Saint Helena)</option>
                                        <option value="1869">1869 (Saint Kitts and Nevis)</option>
                                        <option value="1758">1758 (Saint Lucia)</option>
                                        <option value="590">590 (Saint Martin)</option>
                                        <option value="508">508 (Saint Pierre and Miquelon)</option>
                                        <option value="1784">1784 (Saint Vincent and the Grenadines)</option>
                                        <option value="685">685 (Samoa)</option>
                                        <option value="378">378 (San Marino)</option>
                                        <option value="239">239 (Sao Tome and Principe)</option>
                                        <option value="966">966 (Saudi Arabia)</option>
                                        <option value="221">221 (Senegal)</option>
                                        <option value="381">381 (Serbia)</option>
                                        <option value="248">248 (Seychelles)</option>
                                        <option value="232">232 (Sierra Leone)</option>
                                        <option value="65">65 (Singapore)</option>
                                        <option value="1721">1721 (Sint Maarten)</option>
                                        <option value="421">421 (Slovakia)</option>
                                        <option value="386">386 (Slovenia)</option>
                                        <option value="677">677 (Solomon Islands)</option>
                                        <option value="252">252 (Somalia)</option>
                                        <option value="27">27 (South Africa)</option>
                                        <option value="82">82 (South Korea)</option>
                                        <option value="211">211 (South Sudan)</option>
                                        <option value="34">34 (Spain)</option>
                                        <option value="94">94 (Sri Lanka)</option>
                                        <option value="249">249 (Sudan)</option>
                                        <option value="597">597 (Suriname)</option>
                                        <option value="47">47 (Svalbard and Jan Mayen)</option>
                                        <option value="268">268 (Swaziland)</option>
                                        <option value="46">46 (Sweden)</option>
                                        <option value="41">41 (Switzerland)</option>
                                        <option value="963">963 (Syria)</option>
                                        <option value="886">886 (Taiwan)</option>
                                        <option value="992">992 (Tajikistan)</option>
                                        <option value="255">255 (Tanzania)</option>
                                        <option value="66">66 (Thailand)</option>
                                        <option value="228">228 (Togo)</option>
                                        <option value="690">690 (Tokelau)</option>
                                        <option value="676">676 (Tonga)</option>
                                        <option value="1868">1868 (Trinidad and Tobago)</option>
                                        <option value="216">216 (Tunisia)</option>
                                        <option value="90">90 (Turkey)</option>
                                        <option value="993">993 (Turkmenistan)</option>
                                        <option value="1649">1649 (Turks and Caicos Islands)</option>
                                        <option value="688">688 (Tuvalu)</option>
                                        <option value="1340">1340 (U.S. Virgin Islands)</option>
                                        <option value="256">256 (Uganda)</option>
                                        <option value="380">380 (Ukraine)</option>
                                        <option value="971">971 (United Arab Emirates)</option>
                                        <option value="44">44 (United Kingdom)</option>
                                        <option value="1">1 (United States)</option>
                                        <option value="598">598 (Uruguay)</option>
                                        <option value="998">998 (Uzbekistan)</option>
                                        <option value="678">678 (Vanuatu)</option>
                                        <option value="379">379 (Vatican)</option>
                                        <option value="58">58 (Venezuela)</option>
                                        <option value="84">84 (Vietnam)</option>
                                        <option value="681">681 (Wallis and Futuna)</option>
                                        <option value="212">212 (Western Sahara)</option>
                                        <option value="967">967 (Yemen)</option>
                                        <option value="260">260 (Zambia)</option>
                                        <option value="263">263 (Zimbabwe)</option>
                                    </select>
                                    @if($errors->any())         
                                        <p class="errorMessage">{{ $errors->first('country') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label class="control-label">Mobile*</label>
                                    <input type="text" class="form-control" id="mobile" autocomplete="new-mobile"  maxlength="10" name="mobile" placeholder="Mobile Number">
                                    @if($errors->any())         
                                        <p class="errorMessage">{{ $errors->first('mobile') }}</p>
                                    @endif
                                </div>
                            </div>
							
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Password*</label>
                                    <input type="password" id="pass" class="form-control"  name="password" placeholder="Password">
                                    @if($errors->any())         
                                        <p class="errorMessage">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Confirm Password*</label>
                                    <input type="password" id="cpass" class="form-control" name="cpassword" placeholder="Confirm Password">
                                    @if($errors->any())         
                                        <p class="errorMessage">{{ $errors->first('cpassword') }}</p>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Referral Code</label>
                                    <input type="text" id="reff" class="form-control"  id="referral" name="referral" placeholder="Referral Code">
                                </div>
                            </div>
                            <hr>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LevWAUTAAAAAHQj5sFEaU_Xj7G0jt3HeTuJwsbv" data-theme="light" data-type="image" data-size="normal" ></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="">Already have an account ?<a href="{{url('/')}}/login" class=""> Sign In</a></p>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" id="register" class="btn-login btn-block font-14">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>

        <footer class="footer">
                <div class="container border-top">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="footer-title">
                                Social
                            </div>
                            <ul class="social">
                                <li>
                                    <a class="wallet-img" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="#" target="_blank"><i class="fab fa-telegram"></i></a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="#" target="_blank"><i class="fab fa-tumblr"></i></a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="footer-title">
                                Trade
                            </div>
                            <ul>
                                <li>
                                    <a class="wallet-img" href="{{ url('/') }}/how-to-buy">How to Buy</a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="{{ url('/') }}/all-buy-offers">Buy Crypto</a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="{{ url('/') }}/all-sell-offers">Sell Crypto</a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="{{ url('/') }}/exchange">Convert</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="footer-title">
                                More About Crypto
                            </div>
                            <ul>
                                <li>
                                    <a class="wallet-img" href="{{ url('/') }}/faq">FAQ's</a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="#" target="_blank">Forum</a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="#" target="_blank">Blog</a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="#">News</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="footer-title">
                                Terms & Privacy
                            </div>
                            <ul>
                                <li>
                                    <a class="wallet-img" href="{{ url('/') }}/terms-&-condition">Terms & Condition</a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="{{ url('/') }}/privacy-policy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="{{ url('/') }}/contact">Contact us</a>
                                </li>
                                <li>
                                    <a class="wallet-img" href="{{ url('/') }}/affiliate">Affiliate</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
       
		<!-- Javascriprt -->
		<script src="{{ url('/') }}/assets/js/jquery.js"></script>
		<script src="{{ url('/') }}/assets/js/popper.min.js"></script>
		<script src="{{ url('/') }}/assets/js/bootstrap-4.1.3.min.js"></script>
		<script src="{{ url('/') }}/assets/js/smooth-scroll.js"></script>
		<script src="{{ url('/') }}/assets/js/wow.min.js"></script>
		<script src="{{ url('/') }}/assets/js/custom.js"></script>
		<script src="https://www.google.com/recaptcha/api.js"></script>
		<script>
		    $('document').ready(function(){
			var width = $('.g-recaptcha').parent().width();
			if (width < 302) {
				var scale = width / 302;
				$('.g-recaptcha').css('transform', 'scale(' + scale + ')');
				$('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
				$('.g-recaptcha').css('transform-origin', '0 0');
				$('.g-recaptcha').css('-webkit-transform-origin', '0 0');
			}
		});

		</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
         <script>
          @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
          @endif
         </script>
         
         <script type="text/javascript">

             $(document).ready(function(){
         
                
                function ValidateEmail(email) {
                    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                    return expr.test(email);
                };

                $("#username").on("keypress", function(event){
                    if(event.which === 32)
                        return false;
                });

                $("#mobile").on("keypress", function(event){
                    if(event.which === 32) {
                        return false;
                    }

                    if (event.keyCode < 48 || event.keyCode > 57 ) {
                        return false;
                    }
                });

                $("#email").on("keypress", function(event){
                    if(event.which === 32)
                        return false;
                });

                $("#pass").on("keypress", function(event){
                    if(event.which === 32)
                        return false;
                });

                $("#cpass").on("keypress", function(event){
                    if(event.which === 32)
                        return false;
                });

                $("#referral").on("keypress", function(event){
                    if(event.which === 32)
                        return false;
                });

                $("#username").on("keyup", function(e){
                    $('#toast-container').remove();

                    var username = $('#username').val();
                    if(username.length > 16) {
                        toastr.error("Username should contain Maximum 16 character");
                        e.preventDefault();
                        // newUsername = username.slice(0, -1);
                        if(username.length > 16){
                            $('#username').val(username.substring(0,16));
                        }
                        return false;
                    }
                });

                $('#register').on('click', function(){
                    $('#toast-container').remove();

                    var v = grecaptcha.getResponse();
                    var username =$('#username').val();
                    var email =$('#email').val();
                    var pass =$('#pass').val();
                    var cpass =$('#cpass').val();
					var mobile =$('#mobile').val();
                    var country =$('#country').val();

                    var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{4,15}$/;
					var mob =  /^[0-9]+$/; //new RegExp("/[0-9]/");
                    
                    if (username == '') {
                        toastr.error("Username must be Required!");
                        return false;
                    }
                    
                    else if (email=='') {
                        toastr.error("Email must be Required!");
                        return false;
                    }else if(mobile == ''){
						toastr.error("Mobile must be Required!");
                        return false;
					} else if(country == ''){
                        toastr.error("Country Code must be required!");
                        return false;
                    }
					else if(mobile.length > 13){
						toastr.error("Mobile should contain Maximum 12 number digit");
                        return false;
					}
					
					else if(!(mob.test(mobile))){
						toastr.error("Mobile should required only number digit");
                        return false;
					}
					
                    else if (pass=='') {
                        toastr.error("Password must be Required!");
                        return false;
                    }
                    else if (cpass=='') {
                        toastr.error("Confirm Password must be Required!");
                        return false;
                    }
                    else if(pass.length < 5){
                        toastr.error('Password should contain minimum 6 letter');
                        return false;
                    } 
                    else if(pass.length > 15){
                        toastr.error('Password should contain Maximum 14 letter');
                        return false;
                    }
                    else if(v.length == 0 || v== "" ||v == 'undefined'){
                        toastr.error("You can't leave Captcha Code empty!");
                        return false;
                    }
                    else if(!ValidateEmail(email)){
                        toastr.error("Email not valid!");
                        return false;
                    }
                    else if (pass!=cpass) {
                        toastr.error("Password and Confirm password not Matched!");
                        return false;
                    } else if(!(paswd.test(pass))) { 
                        toastr.error("Password should contain atleast one number, one alphabetic and one special character!");
                        return false;
                    }
                    else {
                        return true;
                    }

                });
             });

         </script>

         
	</body>
</html>
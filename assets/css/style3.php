/**
*
* Author: Limpid Themes
* Last Modified: 09-06-2015
* Description: Stylesheet used by CRUISE template
*
**/

/*********************************************************
	TABLE OF CONTENTS
	1. GENERAL STYLES
	2. PRELOADER 
	3. SUPERSIZED SLIDER
	4. NAVIGATION TRANSPARENT MENU 
	5. LIGHT MENU 
	6. HOMEPAGE SEARCH BOX
	7. HOMEPAGE (INDEX-1, INDEX-2, INDEX-3, INDEX-4 ETC.) 
	8. HOTEL.HTML
	9. FLIGHT.HTML
	10. HOLIDAY.HTML
	11. CAR.HTML
	12. CRUISE.HTML
	13. HOTEL-GRID.HTML
	14. HOTEL-LIST.HTML & HOTEL-LIST-2.html
	15. FLIGHT.LIST.HTML
	16. HOTEL-LIST-2.HTML
	17. HOLIDAYS-GRID.HTML
	18. HOLIDAYS-GRID-2.HTML
	19. CRUISE-LIST.HTML
	20. HOTEL-DETAILED.HTML
	21. HOTEL-DETAILED-2.HTML
	22. HOLIDAY-DETAIL.HTML
	23. FLIGHT-BOOKING.HTML
	24. HOTEL-BOOKING.HTML
	25. HOTEL-BOOKING-2.HTML
	26. THANK-YOU.HTML
	27. BLOG
	28. SINGLE BLOG
	29. CONTACT-US.HTML
	30. ABOUT-US.HTML
	31. USER-PROFILE.HTML
	32. COMING-SOON.HTML
	33. 404.HTML
	34. LOADING.HTML
	35. HOTEL-INDEX.HTML
	36. HOTEL-INDEX-2.HTML
	37. HOLIDAY-INDEX.HTML
	38. HOLIDAY-INDEX-2.HTML
	39. CAR-INDEX.HTML
	40. CAR-LIST.HTML
	41. CAR-DETAILED.HTML
	42. CAR-DETAILED-2.HTML
	43. MAIN FOOTER
	44. GALLERY.HTML
	45. LOGIN.HTML
	46. TYPOGRAPHY.HTML
	47. CRUISE-DETAIL.HTML
	48. LIST VIEW AND GRID VIEW SWITCH
**********************************************************/


/*********************************************************
			1. GENERAL STYLES 
**********************************************************/
body, html {
	font-family: 'Open Sans', sans-serif;
	text-rendering: optimizeLegibility;
	-webkit-font-smoothing: antialiased;
	color: #07253F;
	font-size: 15px;
}
a {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:focus {
	outline: none;
}
a:active {
	text-decoration: none;
}
h5 {
	font-size: 15px;
}
.transition-effect {
	transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
}
.row {
	margin: 0;
}
.clear-padding {
	padding: 0;
}
.light-row {
	background: #ffffff;
}
.dark-row {
	background: #07253F;
	padding: 60px 0;
	color: #ffffff;
}
.space {
	width: 100%;
	position: relative;
	display: inline-block;
	margin: 10px 0;
}
.section-title {
	margin-bottom: 60px;
}
.site-wrapper {
	margin: auto;
}
.cswitcher {
	background: #fff;
	position: fixed;
	top: 40%;
	z-index: 100;
	box-shadow: 0px 0px 5px #e6e6e6;
}
#color-switcher {
	width: 215px;
	padding: 20px;
}
#color-switcher h6 {
	font-weight: 800;
	text-align: center;
	margin: 5px 0px 15px;
}
#stoggle {
	background: rgba(10, 49, 82, 0.8);
    font-size: 25px;
    padding: 3px 10px;
    position: fixed;
    top: 34%;
	cursor: pointer;
	color: #fff;
	z-index: 100;
}
#color-switcher ul {
	list-style-type: none;
	padding: 0px;
	margin: 0px;
}
#color-switcher ul li {
	display: inline-block;
	width: 30px;
	height: 30px;
	margin: 5px;
	border-radius: 50%;
	cursor: pointer;
}
#color-switcher .red {
	background: #f9676b;
}
#color-switcher .green {
	background: #009f8b;
}
#color-switcher .light-green {
	background: #9DC852;
}
#color-switcher .brown {
	background: #a28753;
}
#color-switcher .orange {
	background: #F7941D;
}
#color-switcher .yellow {
	background: #f9bf3b;
}
#color-switcher .blue {
	background: #2f7af8
}
#color-switcher .purple {
	background: #9E7DD3;
}
/*********************************************************
			2. PRELOADER
**********************************************************/

.load-full-screen {
	height: 100%;
	width: 100%;
}
#loader {
	position: relative;
	background: #f7f7f7;
}
#loader div {
	position: absolute;
	top: 50%;
	left: 45%;
	transform: translate(-50%,-45%);
	margin-top: 0 !important;
}
#loader span {
	text-align: center;
}

/*********************************************************
			3. SUPERSIZED SLIDER 
**********************************************************/

#supersized { 
	position: fixed; 
	left: 0; 
	top: 0; 
	overflow: hidden; 
	z-index: -999; 
	height: 100%; 
	width: 100%; 
}
#supersized img { 
	width: auto; 
	height: auto; 
	position: relative; 
	display: none; 
	outline: none; 
	border: none; 
}
#supersized.speed img { 
	-ms-interpolation-mode: nearest-neighbor; 
	image-rendering: -moz-crisp-edges; 
}
#supersized.quality img { 
	-ms-interpolation-mode: bicubic; 
	image-rendering: optimizeQuality; 
}
#supersized a { 
	z-index: -30; 
	position: absolute; 
	overflow: hidden; 
	top: 0; 
	left: 0; 
	width: 100%; 
	height: 100%; 
	background: #111;
}
#supersized a.prevslide { 
	z-index: -20; 
}
#supersized a.activeslide { 
	z-index: -10; 
}
#supersized a.prevslide img, 
#supersized a.activeslide img { 
	display: inline;	
}

/*********************************************************
			4. NAVIGATION TRANSPARENT MENU 
**********************************************************/

.header-top {
	background: #07253F;
}
.navbar-contact {
	margin: 10px 0;
	font-size: 12px;
	overflow: hidden;
}
.navbar-contact .user-logged {
	text-align: right;
} 
.navbar-contact .user-logged  img {
	width: 30px;
	height: 30px;
	border-radius: 50%;
}
.navbar-contact .user-logged a {
	margin: 0 0 0 15px;
}
.navbar-contact a {
	color: #BEC4C8;	
	display: inline-block;
	margin: 7px 0 0 15px;
}
.navbar-contact a i {
	color: #f9676b;
	margin-right: 5px;
}
.navbar-contact .form-control {
	background: #0A3152 none repeat scroll 0 0;
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    color: #bec4c8;
    height: 30px;
    padding: 0 5px 0 10px;
}
.navbar-contact .input-group-addon {
	background: #0A3152 none repeat scroll 0 0;
    border: medium none;
    border-radius: 0;
    color: #f9676b;
    padding: 0 10px 0 0;
	margin-right: 15px;
}
.navbar-contact a:hover {
	-webkit-transition-property: color;
    -moz-transition-property: color;
    -o-transition-property: color;
    transition-property: color;
	color: #f9676b;
}
.transparent-menu-top {
	background: rgba(10, 49, 82, 0.8);
}
.transparent-menu {
	background: rgba(10, 49, 82, 0.5);
	padding: 10px 0px;
}
.transparent-menu i {
	margin-right: 2px;
}
.transparent-menu  .navbar {
	margin: 0px;
}
.navbar-header a{
	font-size: 20px;
	color: #ffffff !important;
	letter-spacing: 1px;
	font-weight: bold;
}

/* MEGA MENU */
.nav-container {
	position: relative;
}
.nav-container .mega-menu {
	position: absolute;
	display: none;
	width: 100%;
	text-align: left !important;
	padding: 30px !important;
	z-index: 9999999;
}
.nav-container .dropdown {
	position: relative;
}
.nav-container .mega {
	position: static !important;
}
.open > .mega-menu {
	display: block;
	overflow: hidden;
}
.top-margin {
	margin-top: 20px !important;
}
.nav-container .mega-menu .desc h4 {
	margin-top: 0px;
	color: #f9676b;
	font-weight: bold;
}
.nav-container .mega-menu .desc p {
	color: #BEC4C8;
	line-height: 2;
	font-size: 15px;
}
.nav-container .mega-menu .desc a {
	color: #fff !important;
	background: #f9676b;
	border: 2px solid transparent;
	padding: 8px 15px;
	font-weight: bold;
	text-align: center;
	font-size: 15px;
	display: inline-block;
	margin-left: 0px !important;
}
.nav-container .mega-menu .desc a:hover {
	color: #f9676b;
	border: 2px solid #f9676b;
	background: transparent;
}
.nav-container .mega-menu .links ul {
	padding: 0px;
	list-style-type: none;
}
.nav-container .mega-menu .links li {
	position: relative;
	line-height: 2;
	margin-left: 10px;
}
.nav-container .mega-menu .links h5 {
	margin-top: 0px;
	text-transform: uppercase;
	font-weight: bold;
	color: #f9676b;
}
.nav-container .mega-menu .links li:before {
	content: "\f105";
	position: absolute;
	font-family: "FontAwesome";
	color: #BEC4C8;
	margin-left: -10px;
}
.nav-container .mega-menu .links a {
	color: #BEC4C8;
}
.mega-menu .links a:hover {
	color: #f9676b;
}
.mega-menu .links .img-div {
	margin-top: 20px;
	position: relative;
}
.mega-menu .links .img-div img {
	max-width: 100%;
	position: relative;
}
.mega-menu .links .img-div .overlay {
	position: absolute;
	width: 100%;
	text-align: center;
	top: 20%;
	background: rgba(10, 49, 82, 0.5);
	padding: 15px 0px;
}
.mega-menu .links .img-div .overlay h5 {
	color: #fff;
	font-size: 24px;
	font-weight: bold;
}
.mega-menu .links .img-div .overlay p {
	color: #fff;
	font-size: 18px;
}
.mega-menu .links .img-div .overlay a {
	color: #fff;
	padding: 5px 10px;
	border: 2px solid #fff;
	display: inline-block;
	font-weight: bold;
}
.transparent-menu .navbar-default {
	background: transparent;
}
.navbar-default {
	border-color: transparent;
}
.transparent-menu .navbar-nav > li > a {
	color: #ffffff;
	font-weight: bold;
	font-size: 14px;
	padding: 15px 20px;
	letter-spacing: 1px;
	transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
}
.transparent-menu .navbar-nav > li > a:hover{
	color: #f9676b;
}
.transparent-menu .navbar-default .navbar-nav > .active > a, 
.transparent-menu .navbar-default .navbar-nav > .active > a:focus, 
.transparent-menu .navbar-default .navbar-nav > .active > a:hover {
	background: transparent;
	color: #f9676b;
}
.transparent-menu .dropdown-menu > li > a {
	background: transparent none repeat scroll 0 0;
    color: #bec4c8 !important;
    font-size: 12px;
    line-height: 2;
	position: relative;
	margin-left: 15px;
	font-weight: bold;
}
.transparent-menu .dropdown-menu > li > a:before {
	content: "\f105";
	font-family: "FontAwesome";
	position: absolute;
	margin-left: -10px;
}
.transparent-menu .dropdown-menu > li > a:hover {
	color: #f9676b !important;
}
.transparent-menu .dropdown-menu {
	background: #07253F;
	border: none;
	font-size: 12px;
	box-shadow: none;
	padding: 15px 0px;
}
.transparent-menu .navbar-default .navbar-nav .open .dropdown-menu > li > a {
	background: transparent;
	color: #ffffff;
	font-size: 12px;
	letter-spacing: 1px;
}
.transparent-menu .navbar-default .navbar-nav > .open > a, 
.transparent-menu .navbar-default .navbar-nav > .open > a:focus, 
.transparent-menu .navbar-default .navbar-nav > .open > a:hover {
	background: transparent;
	color: #ffffff;
}
.transparent-menu  .navbar-default .navbar-toggle {
	color: #ffffff;
}
.transparent-menu  .navbar-default .navbar-toggle .icon-bar {
	background: #ffffff;
}
.transparent-menu .navbar-default .navbar-toggle:focus,
.transparent-menu .navbar-default .navbar-toggle:hover {
	background: transparent;
}
@media (max-width: 991px) {
	.nav-container .mega-menu .desc {
		display: none;
	}
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: none;
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        margin-top: 7.5px;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
        display:block !important;
    }
   .navbar-nav .open .dropdown-menu {
       position: static;
       float: none;
       width: auto;
       margin-top: 0;
       border: 0;
       -webkit-box-shadow: none;
       box-shadow: none;
	   background: #07253F;
    }
}
@media (min-width: 991px) {
	.dropdown:hover .dropdown-menu {
		display: block;
	}
	.dropdown:hover .dropdown-mega {
		display: block;
	}
}
@media (max-width: 767px) {
	.transparent-menu .dropdown-menu li a{
		text-align: left;
	}
	.mega-menu .img-div {
		display: none;
	}
	.nav-container .mega-menu {
		padding: 0 0 15px !important;
	}
	.nav-container .mega-menu .links h5 {
		margin-top: 15px;
	}
	.navbar-contact .search-box {
		padding: 15px;
		overflow: hidden;
	}
}

/*********************************************************
			5. LIGHT MENU 
**********************************************************/

.light-menu {
	background: #fff;
}
.light-menu .navbar {
	margin: 10px 0px;
}
.light-menu .navbar-contact {
	margin: 20px 0 10px 0;
	font-size: 12px;
}
.light-menu .navbar-contact a {
	color: #07253F;
	padding: 0 10px;
	transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
}
.light-menu .navbar-contact a:hover {
	color: #00adef;
}
.light-menu i {
	margin-right: 2px;
}
.light-menu .navbar-header a{
	font-size: 20px;
	color: #07253F !important;
	letter-spacing: 1px;
	font-weight: bold;
}
.light-menu .navbar-default {
	background: transparent;
}
.light-menu .navbar-nav > li > a {
	color: #07253F;
	font-weight: bold;
	font-size: 14px;
	padding: 15px 20px;
	letter-spacing: 1px;
	transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
}
.navbar-collapse > ul  > li:last-child  > a {
	padding: 15px 0px 15px 20px !important;
}
.light-menu .navbar-nav > li > a:hover{
	color: #00adef;
}
.light-menu .navbar-default .navbar-nav > .active > a, 
.light-menu .navbar-default .navbar-nav > .active > a:focus, 
.light-menu .navbar-default .navbar-nav > .active > a:hover {
	background: transparent;
	color: #00adef;
}
.light-menu .dropdown-menu > li > a {
	background: transparent none repeat scroll 0 0;
    color: #bec4c8 !important;
    font-size: 12px;
    line-height: 2;
	position: relative;
	margin-left: 15px;
	font-weight: bold;
}
.light-menu .dropdown-menu > li > a:before {
	content: "\f105";
	font-family: "FontAwesome";
	position: absolute;
	margin-left: -10px;
}
.light-menu .dropdown-menu > li > a:hover {
	color: #f9676b !important;
}
.light-menu .dropdown-menu {
	background: #07253F;
	border: none;
	font-size: 12px;
	box-shadow: none;
	padding: 15px 0px;
}
.light-menu .navbar-default .navbar-toggle {
	color: #07253F;
}
.light-menu  .navbar-default .navbar-toggle .icon-bar {
	background: #07253F;
}
.light-menu .navbar-default .navbar-toggle:focus,
.light-menu .navbar-default .navbar-toggle:hover {
	background: transparent;
}

@media (min-width: 768px) {
	.dropdown:hover .dropdown-menu {
		display: block;
	}
}
@media (max-width: 767px) {
	.light-menu.dropdown-menu li a{
			text-align: left;
	}
	.light-menu .dropdown-menu > li > a {
		margin-left: 0px;
	}
}
					
/*********************************************************
			6. HOMEPAGE SEARCH 
**********************************************************/

.home-title {
	margin-top: 60px;
	color: #fff;
}
.home-title  h1 {
	margin-top: 0px;
	font-weight: 800;
	font-size: 50px;
	letter-spacing: 2px;
}
.home-title  h2 {
	margin-bottom: 0px;
}
.search-section {
	margin-top: 60px;
	margin-bottom: 60px;
}
.search-section .nav-tabs {
	border-bottom: none;
}
.search-section .nav-tabs .active {
	position: relative;
}
.search-section .nav-tabs .active:after {
	background: #f9676b none repeat scroll 0 0;
    content: "";
    height: 20px;
    left: 40%;
    position: absolute;
    top: 80%;
    transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-o-transform: rotate(45deg);
    width: 20px;
}
.search-section .nav-tabs > li > a {
	color: #ffffff;
	background: rgba(10, 49, 82, 0.5);
	letter-spacing: 1px;
	font-weight: bold;
	border-radius: 2px 2px 0 0;
	margin-right: 4px;
}
.search-section .nav > li > a {
	padding: 15px;
}
.search-section .nav-tabs > li {
	margin-bottom: 0px;
}
.search-section .nav-tabs > li > a:hover {
	color: #ffffff;
	background: #f9676b;
	border: 1px solid transparent;
}
.search-section .nav-tabs > li.active > a, 
.search-section .nav-tabs > li.active > a:focus, 
.search-section .nav-tabs > li.active > a:hover {
	color: #ffffff;
	background: #f9676b;
	border: 1px solid transparent;
}
.search-section .tab-content {
	color: #07253F;
	background: #fff;
	padding: 30px 15px;
}
.search-section label {
	font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
}
.search-section .form-control {
	background-color: transparent;
    border: 1px solid #BEC4C8;
    border-radius: 0;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #07253F;
    display: block;
    font-size: 15px;
    height: 40px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
}
.search-section .form-control::-moz-placeholder {
	color: #989DA0;
	opacity:1;
}
.search-section .form-control:-ms-input-placeholder {
	color: #BEC4C8;
}
.search-section .form-control::-webkit-input-placeholder {
	color: #BEC4C8;
}
.search-section .form-control::-o-input-placeholder {
	color: #BEC4C8;
}
.search-section .input-group-addon {
	background: transparent;
	color: #BEC4C8;
	border-top: 1px solid #BEC4C8;
	border-right: 1px solid #BEC4C8;
	border-bottom: 1px solid #BEC4C8;
	border-radius: 0;
}
.search-section .product-search-title {
	font-size: 18px;
	display: block;
	font-weight: 800;
	text-transform: uppercase;
	color: #f9676b;
}
.search-section .search-col-padding {
	padding-top: 15px;
}
.search-section option {
	color: #07253F;
}
#ui-datepicker-div {
	background: #07253F;
	z-index: 9999 !important;
}
#ui-datepicker-div  table {
	margin: 10px;
}
.ui-datepicker-calendar a {
	padding: 5px;
	color: #ffffff;
}
.ui-datepicker-calendar a:hover {
	color: #00ADEF;
}
.ui-datepicker-calendar td {
	padding: 10px 5px;
}
.ui-datepicker-calendar .ui-state-disabled {
	color: #0A3152;
}
.ui-datepicker-calendar th {
	color: #ffffff;
	padding: 7px;
}
.ui-datepicker-header {
	margin: 10px;
}
.ui-datepicker-header .ui-datepicker-title {
	color: #ffffff;
	text-align: center;
}
.ui-datepicker-header a {
	color: #ffffff;
	cursor: pointer;
}
.ui-datepicker-header a:hover {
	color: #00ADEF;
}
.ui-spinner-up i {
	color: #BEC4C8;
	float: right;
	margin-top: -27px;
	margin-right: 10px;
	z-index: 99999;
}
.ui-spinner-down i {
	color: #BEC4C8;
	float: left;
	margin-top: -27px;
	margin-left: 10px;
	z-index: 99999;
}
.quantity-padding {
	padding-left: 40px !important;
}
.ui-datepicker-prev {
	float: left;
}
.ui-datepicker-next {
	float: right;
}
.custom-select-button {
	background: transparent none repeat scroll 0 0;
    border: 1px solid #BEC4C8;
    border-radius: 0;
    height: 40px;
}
.bootstrap-select.btn-group .dropdown-menu {
	background: #07253F;
	border-radius: 0;
}
.bootstrap-select.btn-group .dropdown-menu li a {
	color: #ffffff;
	background: #07253F !important;
}
.bootstrap-select.btn-group .dropdown-menu li a:hover {
	color: #00ADEF;
}
.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
	width: 100%;
}
.btn:hover {
	color: #00ADEF;
}
.search-button {
	background: #f9676b;
    border-radius: 0;
    margin-top: 10px;
    padding: 10px 30px;
	font-size: 15px;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: bold;
	color: #fff;
	transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
}
.search-button:hover {
	background: #00adef;
	color: #fff;
}
.owl-theme .owl-dots .owl-dot.active span, 
.owl-theme .owl-dots .owl-dot:hover span {
	background: #f9676b !important;
}
.offer-slider {
	margin-top: 200px;
}
.offer-slider .item {
	color: #fff;
}
.offer-slider .item h4,
.offer-slider .item h3 {
	font-weight: bold;
	margin: 0px 0px 15px;
}
.offer-slider .item a {
	display: inline-block;
	color: #fff;
	border: 2px solid #fff;
	padding: 5px 15px;
	font-weight: bold;
}
.offer-slider .item a:hover {
	color: #fff;
	background: #f9676b;
	border: 2px solid transparent;
}
.offer-slider .owl-theme .owl-dots .owl-dot span {
	background: #fff;
	margin-top: 15px;
}
.offer-slider .owl-theme .owl-dots {
	text-align: right;
}
.bg-slider .carousel-caption {
	color: #fff;
	text-shadow: none;
	top: 30%;
	z-index: 0;
}
.bg-slider .carousel-caption h2 {
	font-weight: 800;
	font-size: 50px;
	letter-spacing: 2px;
}
.bg-slider .carousel-caption h4 {
	font-weight: 700;
} 
.bg-slider .carousel-caption h4 span {
	font-weight: 900;
}
.bg-slider .carousel-caption a {
	border: 2px solid #fff;
    color: #fff;
    display: inline-block;
    font-weight: 700;
    margin-top: 15px;
    padding: 8px 20px;
}
.bg-slider .carousel-caption a:hover {
	color: #fff;
	background: #f9676b;
	border: 2px solid transparent;
}
.bg-slider .carousel-indicators {
	display: none;
}
.bottom-search {
	padding: 0 0 60px;
	background: #f7f7f7;
}
.bottom-search .search-section {
	margin: -53px 0 0;
}
.bottom-search .tab-content {
	box-shadow: 0px 0px 5px #e6e6e6;
}
.vertical-tab {
	padding-right: 0px;
	margin-top: 30px;
}
.vertical-tab .nav-tabs > li {
	display: block;
	width: 100%;
}
.vertical-tab .nav-tabs .active::after {
	display: none;
}
.vertical-tab-pannel {
	padding-left: 0px;
}
.vertical-tab-pannel .tab-content {
	box-shadow: 0px 0px 5px #e6e6e6; 
}
.vertical-tab .nav-tabs > li > a {
	background: #f7f7f7;
	color: #BEC4C8;
	margin: 0px;
	border-radius: 0;
	border-bottom: 1px solid #e6e6e6;
}
.vertical-tab .nav-tabs > li > a i {
	margin-right: 5px;
}
.vertical-tab .nav-tabs > li.active > a, 
.vertical-tab .nav-tabs > li.active > a:focus, 
.vertical-tab .nav-tabs > li.active > a:hover {
	background: #fff none repeat scroll 0 0;
    color: #07253F;
    z-index: 2;
	border-bottom: 1px solid #e6e6e6;
}
.offer-box {
	color: #07253F;
	text-align: center;
}
.offer-box img {
	max-width: 100%;
	padding: 5px;
	border: 1px solid #e6e6e6;
}
.offer-box .item h4 {
	font-weight: bold;
}
.offer-box  a {
	background: #f9676b none repeat scroll 0 0;
    color: #fff;
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    margin: 5px 0;
    padding: 8px 10px;
}
.offer-box a:hover {
	background: #00adef;
}
.vertical-search,
.full-width-search {
	padding: 45px 0px; 
}
.tran-search-box .tab-content {
	background: rgba(10, 49, 82, 0.5);
	color: #fff;
}
.tran-search-box .tab-content .form-control,
.tran-search-box .input-group-addon,
.tran-search-box  .custom-select-button {
	color: #07253F;
	background: #fff;
}
.tran-search-box  .nav-tabs {
	border-bottom: 4px solid #f9676b;
}
@media (max-width: 991px) {
	.offer-slider,
	.offer-box {
		display: none;
	}
}
@media (max-width:767px) {
	.vertical-tab .nav-tabs > li {
		display: block;
		width: auto;
	}
	.vertical-tab-pannel {
		padding-left: 15px;
	}
	.vertical-tab {
		padding-right: 15px;
		margin-top: 0px;
	}
	.search-top span {
		display: none;
	}
	.nav>li>a {
		padding: 10px;
	}
	.home-title  h1  {
		font-size: 24px;
	}
	.home-title  h2 {
		margin-bottom: 0px;
		font-size: 20px;
	}
	.bg-slider .carousel-caption h2 {
		font-size: 20px;
	}
	.bg-slider .carousel-caption h4,
	.bg-slider .carousel-caption a {
		display: none;
	}
	.bg-slider .carousel-caption {
		top: 5%;
	}
}

/*********************************************************
			7. HOMEPAGE (INDEX-1, INDEX-2, INDEX-3, INDEX-4 ETC.) 
**********************************************************/

.section-title h2 {
	font-weight: 800;
	letter-spacing: 2px;
}
.section-title h4 {
	font-weight: bold;
	position: relative;
}
.section-title p {
	line-height: 2;
}
.icon-desc h4 {
	margin-top: 30px;
	font-weight: bold;
}
.icon-desc i {
	color: #00ADEF;
	border: 2px solid #00ADEF;
	padding: 30px 32px;
	border-radius: 50%;
	
}
@media (max-width: 767px) {
	.icon-desc {
		margin-top: 30px;
	}
}

/* ======== Homepage Product Section ========= */

.home-product {
	color: #07253F;
}
.home-product h4{
	font-weight: bold;
	margin-top: 10px;
}
.home-product h5 {
	color: #00ADEF;
	font-weight: bold;
}
.home-product p {
	line-height: 1.6;
}
.rating-box {
	padding: 0 10px;
}
.rating-box i {
	color: #F19C4F;
}
.rating-box span {
	margin: 0 5px;
	font-weight: bold;
}
.rating-box img {
	max-width: 100%;
	min-height: auto !important;
} 
.home-product .image-sm {
	position: relative;
}
.home-product .image-sm img{
	max-width: 100%;
	min-height: 300px;
	position: relative;
}
.home-product .detail-link-wrapper {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(10, 49, 82, 0.8);
	transform: scale(0);
	-webkit-transform: scale(0);
	-ms-transform: scale(0);
	-o-transform: scale(0);
	-moz-transform: scale(0);
	transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
}
.home-product .detail-link {
	position: absolute;
	left: 48%;
	top: 40%;
	transform: scale(0);
	-webkit-transform: scale(0);
	-ms-transform: scale(0);
	-o-transform: scale(0);
	-moz-transform: scale(0);
	transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
}
.home-product .detail-link a {
	color: #fff;
	font-size: 24px;
}
.home-product .product-wrapper:hover  .detail-link,
.home-product .product-wrapper:hover  .detail-link-wrapper {
	-webkit-transform: scale(1);
	-ms-transform: scale(1);
	-o-transform: scale(1);
	-moz-transform: scale(1);
	transform: scale(1);
}
.home-product .image-lg {
	position: relative;
	overflow: hidden;
}
.home-product .image-lg img {
	position: relative;
	max-width: 100%;
	min-height: 600px;
}
.home-product .image-lg .rating-box img {
	max-width: initial !important;
	min-height: initial !important;
}
.home-product .image-lg .overlay {
	position: absolute;
	height: 100%;
	width: 100%;
	background: rgba(10, 49, 82, 0.8);
	top: 0 !important;
	left: 0;
	padding: 15px;
	opacity: 0;
	transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
}
.home-product .image-lg .product-detail {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);	
	color: #fff;
	padding: 25px 15px;
	border: 1px solid #e6e6e6;
	opacity: 0;
	transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
}
.home-product .image-lg .product-detail .pricing-info {
	margin-top: 20px;
}
.home-product .image-lg .product-detail p {
	line-height: 2;
	margin: 15px 0px;
}
.home-product .image-lg .product-detail h3 {
	margin-top: 0px;
	font-weight: bold;
}
.home-product .image-lg:hover .product-detail,
.home-product .image-lg:hover .overlay {
	opacity: 1;
}
.home-product-padding {
	padding: 15px 15px 20px;
	text-align: center;
}
.home-product-padding p {
	margin: 15px 0px;
	line-height: 2;
}
.line {
	width: 50px;
	height: 4px;
	display: inline-block;
	background: #00ADEF;
	margin: 10px 0;
}
.pricing-info {
	margin-top: 15px;
	overflow: hidden;
}
.pricing-info span {
	font-size: 16px;
	font-weight: bold;
	color: #f9676b;
}
.pricing-info a {
	color: #fff;
	padding: 8px;
	font-weight: bold;
	background: #f9676b;
	display: inline-block;
	border: 2px solid transparent;
}
.pricing-info a:hover {
	border: 2px solid #f9676b;
	color: #f9676b;
	background: transparent;
}
.tooltip-left:before {
	border-bottom: 15px solid transparent;
    border-right: 15px solid #fff;
    border-top: 15px solid transparent;
    content: "";
    height: 0;
    position: absolute;
    left: -13px;
    top: 47%;
    width: 0;
    z-index: 2;
}
.tooltip-right:after {
	border-bottom: 15px solid transparent;
    border-left: 15px solid #fff;
    border-top: 15px solid transparent;
    content: "";
    height: 0;
    position: absolute;
    right: -13px;
    top: 47%;
    width: 0;
    z-index: 2;
}
@media (max-width: 767px) {	
	.home-product .image-lg .product-detail {
		top: 50%;
		left: 0;
		-webkit-transform: translate(0,-50%);
		-ms-transform: translate(0,-50%);
		-moz-transform: translate(0,-50%);
		-o-transform: translate(0,-50%);
		transform: translate(0,-50%);
	}
	.home-product .image-sm img{
		max-width: 100%;
		min-height: initial !important;
	}
	.home-product .image-lg img{
		max-width: 100%;
		min-height: initial !important;
	}
	.tooltip-left:before {
		border-right: 15px solid transparent;
		border-bottom: 15px solid #fff;
		border-left: 15px solid transparent;
		content: "";
		height: 0;
		position: absolute;
		width: 0;
		z-index: 2;
		top: -29px;
		left: 47%;
	}
	.tooltip-right:after {
		border-left: 15px solid transparent;
		border-right: 15px solid transparent;
		border-top: 15px solid #fff;
		bottom: -29px;
		content: "";
		height: 0;
		left: 47%;
		position: absolute;
		top: 100%;
		width: 0;
		z-index: 2;
	}
	.home-product-padding {
		border-bottom: 2px solid #07253F;
	}
	.home-product .image-lg .overlay {
		top: 5%;
	}
}
@media (min-width: 1750px) {
	.home-product-padding {
		padding: 10%;
	}
}

/* ======= Home Page Top Destination Section Start ======= */

.image-background {
	background: url(../images/bg-image2.jpg) center center;
	background-attachment: fixed;
	overflow: hidden;
}
.td-overlay {
	padding: 60px 0px 120px;
	background: rgba(10, 49, 82, 0.8);
}
.light-section-title {
	margin-bottom: 60px;
	color: #ffffff;
}
.light-section-title h2 {
	font-weight: 800;
	letter-spacing: 2px;
}
.light-section-title h4 {
	font-weight: bold;
}
.light-section-title p {
	line-height: 2;
}
.on-top {
	z-index: 100;
}
.td-product {
	position: relative;
	overflow: hidden;
}
.td-product img {
	max-width: 100%;
	position: relative;
}
.td-product .overlay {
	color: #ffffff;
    position: absolute;
	top: 0;
    height: 100%;
	width: 100%;
}
.td-product .overlay .wrapper {
	padding: 30px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-o-transform: translateY(-50%);
}
.td-product .overlay h3,
.td-product .overlay h5 {
	font-weight: bold;
	text-align: center;
	opacity: 0;
	margin: 0px 0px 20px;
	-webkit-transform: translateY(100px);
	-webkit-transition: all 0.5s ease;
	-moz-transform: translateY(100px);
	-moz-transition: all 0.5s ease;
	-ms-transform: translateY(100px);
	-ms-transition: all 0.5s ease;
	-o-transform: translateY(100px);
	-o-transition: all 0.5s ease;
	transform: translateY(100px);
	transition: all 0.3s ease;
}
.td-product .overlay h5 {
	margin: 0px 0px 10px;
}
.td-product .overlay span {
	border-bottom: 3px solid #ffffff;
	opacity: 0;
	-webkit-transform: translateY(100px);
	-webkit-transition: all 0.5s ease;
	-moz-transform: translateY(100px);
	-moz-transition: all 0.5s ease;
	-ms-transform: translateY(100px);
	-ms-transition: all 0.5s ease;
	-o-transform: translateY(100px);
	-o-transition: all 0.5s ease;
	transform: translateY(100px);
	transition: all 0.5s ease;
}
.td-product .overlay h4 {
	text-align: center;
	margin-top: 15px;
	opacity: 0;
	-webkit-transform: translateY(100px);
	-webkit-transition: all 0.5s ease;
	-moz-transform: translateY(100px);
	-moz-transition: all 0.5s ease;
	-ms-transform: translateY(100px);
	-ms-transition: all 0.5s ease;
	-o-transform: translateY(100px);
	-o-transition: all 0.5s ease;
	transform: translateY(100px);
	transition: all 0.5s ease;
}
.td-product .overlay p {
	text-align: center;
	opacity: 0;
	line-height: 2;
	-webkit-transform: translateY(100px);
	-webkit-transition: all 0.5s ease;
	-moz-transform: translateY(100px);
	-moz-transition: all 0.5s ease;
	-ms-transform: translateY(100px);
	-ms-transition: all 0.5s ease;
	-o-transform: translateY(100px);
	-o-transition: all 0.5s ease;
	transform: translateY(100px);
	transition: all 0.5s ease;
}
.td-product .overlay a {	
	text-align: center;
	background: #f9676b;
	color: #fff;
	padding: 10px 20px;
	font-weight: bold;
	margin-top: 10px;
	display: inline-block;
	opacity: 0;
	-webkit-transform: translateY(-100px);
	-webkit-transition: all 0.5s ease;
	-moz-transform: translateY(-100px);
	-moz-transition: all 0.5s ease;
	-ms-transform: translateY(-100px);
	-ms-transition: all 0.5s ease;
	-o-transform: translateY(-100px);
	-o-transition: all 0.5s ease;
	transform: translateY(-100px);
	transition: all 0.5s ease;
}
.td-product .overlay  a:hover {
	border: 2px solid #f9676b;
	color: #f9676b;
	background: transparent;
}
.td-product:hover .overlay {
	background: rgba(10, 49, 82, 0.8);
}
.td-product:hover p,
.td-product:hover h3,
.td-product:hover h4,
.td-product:hover span,
.td-product:hover h5 {
	opacity: 1;
	-webkit-transform: translateY(0);
	-ms-transform: translateY(0);
	-o-transform: translateY(0);
	-moz-transform: translateY(0);
	transform: translateY(0);
}
.td-product:hover a {
	opacity: 1;
	-webkit-transform: translateY(0);
	-ms-transform: translateY(0);
	-o-transform: translateY(0);
	-moz-transform: translateY(0);
	transform: translateY(0);
}
@media (max-width:767px) {
	.td-product h3 {
		font-size: 16px;
	}
	.td-product p {
		font-size: 12px;
		line-height: 1.6;
	}
	.td-product a {
		font-size: 12px;
	}
	.td-product .overlay .wrapper {
		padding: 10px;
	}
}

/* Hotel Room Grid View & Recent Post */
.top-offer {
	padding: 60px 0;
	background: #ffffff;
	color: #07253F;
}
.room-grid-view {
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
}
.room-grid-view:hover {
	border: 1px solid #F19C4F;
	box-shadow: 0px 0px 2px #F19C4F;
}
.room-grid-view  .room-info {
	padding: 15px 15px 0px;
}
.room-grid-view  .room-info .room-title h5 {
	font-size: 16px;
	font-weight: bold;
}
.room-grid-view  .room-info .room-title h5 span {
	color: #F19C4F;
	margin: 5px 0px;
}
.room-grid-view  .room-info .room-title p {
	color: #00ADEF;
}
.room-grid-view  .room-info .hotel-ammeties i{
	border: 1px solid #BEC4C8;
    border-radius: 50%;
    color: #BEC4C8;
    font-size: 12px;
    height: 25px;
    margin: 2px;
    padding: 5px;
    width: 25px;
}
.room-grid-view  .room-info .hotel-rating .colored {
	color: #F19C4F;
}
.room-grid-view .hotel-rating span {
	font-weight: normal;
}
.room-grid-view  .room-info .room-desc {
	margin: 15px 0px;
}
.room-grid-view  .room-info .room-desc  p{
	line-height: 1.7;
	color: #0A3152;
	font-size: 13px;
}
.room-grid-view  .room-info .hotel-rating {
	margin: 15px 0px 5px;;
	overflow: hidden;
}
.room-grid-view  .room-info .room-book  {
	overflow: hidden;
	margin: 10px -15px 0;
	border-top: 1px solid #e6e6e6;
}
.room-grid-view  .room-info .room-book  h5 {
	font-weight: bold;
	border-right: 1px solid #e6e6e6;
	width: 100%;
	padding: 15px 10px;
	margin: 0;
	line-height: 1.7;
}
.room-grid-view  .room-info .room-book a {
	padding: 17px 10px;
	color: #ffffff;
	display: block;
	font-weight: bold;
	background: #F2676B;
	text-transform: uppercase;
}
.room-grid-view:hover .room-info .room-book  a{
	color: #ffffff;
	background: #00ADEF;
}
/* Subscribe Section */ 
.subscribe-box .form-control {
	background: #e6e6e6 none repeat scroll 0 0;
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    height: 50px;
    padding: 10px;
}
.subscribe-box button {
	background: #f9676b none repeat scroll 0 0;
    border-radius: 0;
    color: #fff;
    height: 50px;
    width: 100%;
}
.subscribe-box button:hover {
	background: #00adef;
	color: #fff;
}
.subscribe-row {
	padding: 60px 0px;
	background: #fff;
}
/************************************************************************
			8.hotel.html CSS Start
************************************************************************/
.single-search {
	padding: 60px 0px;
	color: #fff;
}
.single-search .search-section {
	margin: 0px;	
}
.single-search h2 {
	margin: 0 0 15px;
	font-weight: 800;
	letter-spacing: 1px;
}
.single-search  .search-button {
	margin-top: 30px;
}
.single-search .form-control {
	color: #fff;
	border: 1px solid #fff;
}
.single-search .input-group-addon {
	background: transparent none repeat scroll 0 0;
    border-bottom: 1px solid #fff;
    border-radius: 0;
    border-right: 1px solid #fff;
    border-top: 1px solid #fff;
    color: #fff;
}
.single-search .custom-select-button {
	border: 1px solid #fff;
}
.hotel-search {
	background: url('../images/bg-image9.jpg');
	background-attachment: fixed;
}
.last-minute-deal {
	padding: 60px 0px;
}
.col-grid {
	box-shadow: 0px 0px 5px #e6e6e6;
	margin-bottom: 30px;
	position: relative;
}
.col-grid .wrapper {
	position: relative;
}
.col-grid img {
	position: relative;
}
.col-grid .location {
	background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
    color: #fff;
    padding: 8px 0;
    position: absolute;
    text-align: center;
    top: 85%;
    width: 100%;
}
.col-grid .body {
	padding: 20px 15px;
}
.col-grid .bottom a {
	background: #f9676b none repeat scroll 0 0;
    color: #fff;
    display: block;
    font-weight: bold;
    padding: 15px 0;
    text-align: center;
}
.col-grid .bottom a:hover {
	background: #00adef;
}
.col-grid h5 {
	font-weight: bold;
	color: #00adef;
	margin-top: 0px;
}
.col-grid p i {
	color: #F19C4F;
	margin: 1px;
}
.col-grid h3 {
	margin-top: 0px;
	font-weight: bold;
}
.col-grid .text-sm {
	font-size: 13px;
}
.col-grid  .back-line {
	position: relative;
	font-size: 13px;
	font-weight: 600;
	text-transform: uppercase;
}
.col-grid .back-line:after  {
	content: "";
	position: absolute;
	background: #07253F;
	height: 1px;
	width: 20%;
	right: 5%;
	top: 50%
}
.col-grid .back-line:before {
	content: "";
	position: absolute;
	background: #07253F;
	height: 1px;
	width: 20%;
	left: 5%;
	top: 50%
}
.hot-deals {
	padding: 60px 0px;
	background: #fff;
}
.hot-deals .nav-tabs > li {
	margin: 0px;
}
.hot-deals .nav-tabs > li > a {
	border: medium none;
    color: #fff;
    font-weight: bold;
    line-height: 2;
    margin-right: 0;
	border-radius: 0;
	background: #00adef;
}
.hot-deals .nav-tabs .active {
	position: relative;
}
.hot-deals .nav-tabs .active:after {
	background: #f9676b none repeat scroll 0 0;
    content: "";
    height: 20px;
    left: 40%;
    position: absolute;
    top: 80%;
    transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-o-transform: rotate(45deg);
    width: 20px;
}
.hot-deals .nav-tabs > li.active > a, 
.hot-deals .nav-tabs > li.active > a:focus, 
.hot-deals .nav-tabs > li.active > a:hover {
	background: #f9676b;
	color: #fff;
	border: none;
	border-radius: 0;
}
.hot-deals .nav-tabs {
	border: none;
	max-width: 615px;
	margin-left: auto;
	margin-right: auto;
}
.hot-deals .tab-content {
	padding: 40px 0px 0px;
	overflow: hidden;
}
.hot-deal-list .item  img {
	max-width: 100%;
}
.hot-deal-list .item {
	text-align: left;
	border-bottom: 1px solid #e6e6e6;
	padding: 20px 0px 10px;
	overflow: hidden;
}
.hot-deal-list .item h5,
.hot-deal-list .item h4 {
	font-weight: bold;
	margin-top: 0px;
}
.hot-deal-list .item a {
	background: #f9676b none repeat scroll 0 0;
    color: #fff;
    display: inline-block;
    font-size: 13px;
    font-weight: bold;
    margin-top: 5px;
    padding: 4px 10px;
	margin-bottom: 15px;
}
.hot-deal-list .item a:hover {
	background: #00adef;
}
.hot-deal-list .item .location {
	color: #00adef;
}
.hot-deal-list .item .text-sm {
	line-height: 2;
	font-size: 13px;
}
.hot-deal-grid .item {
	margin-top: 30px;
	color: #fff;
}
.hot-deal-grid img {
	max-width: 100%;
	position: relative;
	transition: all 1s ease;
	-webkit-transition: all 1s ease;
}
.hot-deal-grid .item:hover img {
	transform: scale(1.5);
	-webkit-transform: scale(1.5);
	-ms-transform: scale(1.5);
	-moz-transform: scale(1.5);
	-o-transform: scale(1.5);
}
.hot-deal-grid .item:hover a {
	opacity: 1;
}
.hot-deal-grid .wrapper {
	position: relative;
	overflow: hidden;
}
.hot-deal-grid .wrapper h5 {
	position: absolute;
	bottom: 0;
	width: 100%;
	text-align: center;
	background: rgba(10, 49, 82, 0.5);
	margin: 0;
	padding: 5px 0px;
	font-weight: bold;
	line-height: 2;
}
.hot-deal-grid .wrapper a {
	position: absolute;
	color: #fff;
	border: 2px solid #fff;
	font-weight: bold;
	padding: 5px 20px;
	display: inline-block;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	-webkit-transform: translate(-50%,-50%);
	-ms-transform: translate(-50%,-50%);
	-moz-transform: translate(-50%,-50%);
	-o-transform: translate(-50%,-50%);
	opacity: 0;
	transition: all 0.5s ease;
}
/************************************************************************
			9. flight.html CSS Start
************************************************************************/
.flight-search {
	background: url('../images/bg-image10.jpg');
	background-attachment: fixed;
}
#top-flight-row {
	background: url('../images/plane.jpg');
	background-attachment: fixed;
}
.top-flight {
	padding: 60px 0px;
	color: #fff;
}
/************************************************************************
			10. holiday.html CSS Start
************************************************************************/
.holiday-search {
	background: url('../images/bg-image11.jpg');
	background-attachment: fixed;
}
.top-holiday {
	padding: 60px 0px;
	color: #fff;
}
#top-holiday-row {
	background: url('../images/holiday-slide5.jpg');
	background-attachment: fixed;
}
/************************************************************************
			11. car.html CSS Start
************************************************************************/
.car-search {
	background: url('../images/bg-image12.jpg');
	background-attachment: fixed;
}
.top-car {
	padding: 60px 0px;
	color: #fff;
}
#top-car-row {
	background: url('../images/hotel-slide4.jpg');
	background-attachment: fixed;
}
/************************************************************************
			12. CRUISE.html CSS Start
************************************************************************/
.cruise-search {
	background: url('../images/bg-image13.jpg');
	background-attachment: fixed;
}
.top-cruise {
	padding: 60px 0px;
	color: #fff;
}
#top-cruise-row {
	background: url('../images/cruise.jpg');
	background-attachment: fixed;
}
/************************************************************************
			13. hotel-grid.html CSS Start
************************************************************************/
.modify-hotel {
	background: url('../images/bg-image11.jpg');
	background-attachment: fixed;
	background-size: contain;
}
.modify-search {
	padding: 60px 0px;
	background-attachment: fixed;
	height: 390px;
}
.modify-search .form-control {
	border-radius: 0;
	height: 45px;
	padding: 10px;
}
.modify-search label {
	color: #ffffff;
}
.modify-search .input-group-addon {
	background: #00ADEF;
	border: none;
	border-radius: 0;
}
.modify-search .input-group-addon i {
	color: #ffffff;
}
.modify-search .custom-select-button {
	background: #ffffff;
    border-radius: 0;
    height: 45px;
}
.modify-search .modify-search-button {
	height: 45px;
	background: #00ADEF;
	color: #ffffff;
	border-radius: 0;
	font-weight: bold;
	letter-spacing: 1px;
	padding: 10px 0px;
	margin-top: 25px;
	width: 100%;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.modify-search .modify-search-button:hover {
	color: #00ADEF;
	background: #ffffff;
}
.filter-head {
	color: #fff;
	background: #07253F;
	padding: 15px;
}
.filter-head h4 {
	line-height: 1.5;
	margin: 20px 0px;
	position: relative;
}
.filter-head h4:after {
	content: "\f0b0";
	background: #07253F none repeat scroll 0 0;
    border: 4px solid #0A3152;
    border-radius: 50%;
    font-family: "FontAwesome";
    height: 40px;
    left: 42%;
    padding: 4px 6px;
    position: absolute;
    top: 130%;
    width: 40px;
}
.filter-area {
	background: #0A3152;
	color: #fff;
	padding: 15px;
	margin-bottom: 45px;
}
.price-filter .ui-slider-horizontal {
	height: 10px;
	background: #ffffff;
}
.price-filter label {
	display: none;
}
.price-filter .ui-slider {
	position: relative;
    text-align: left;
}
.price-filter .ui-slider .ui-slider-range {
    background: #F19C4F;
    border: 0 none;
    display: block;
    font-size: 0.7em;
    position: absolute;
    z-index: 1;
}
.price-filter .ui-slider-horizontal .ui-slider-range {
	top: 0;
	height: 100%;
}
.price-filter .ui-slider-horizontal .ui-slider-handle {
    margin-left: -0.6em;
    top: -0.3em;
}
.price-filter .ui-slider .ui-slider-handle {
    cursor: default;
    height: 1.2em;
    position: absolute;
    width: 1.2em;
    z-index: 2;
}
.price-filter .ui-slider .ui-slider-handle:before {
	content: '\f067';
	color: red;
	font-family: FontAwesome;
	padding: 5px;
	background: #00ADEF;
	color: #ffffff;
}
.price-filter input {
	background: #0A3152;
	border: none;
	color: #F19C4F;
	font-weight: bold;
	letter-spacing: 1px;
	font-size: 18px;
	width: 100%;
}
.filter-area h4 {
	margin: 10px 0px 20px 0px;
	letter-spacing: 1px;
}
.filter-area h5 i {
	font-size: 18px;
	margin-right: 5px;
}
.filter-area h5 {
	color: #00ADEF;
	margin-top: 0;
	font-weight: bold;
	letter-spacing: 1px;
}
.filter-area ul {
	list-style: none;
	padding-left: 10px;
	margin-bottom: 0;
}
.filter-area  li {
	padding: 5px 0px;
}
.filter-area li input {
	margin-right: 10px;
	margin-top: 0;
}
.filter-area li i {
	margin-right: 5px;
}
.filter {
	border-top: 1px solid #07253F;
	padding: 30px 0px;
}
.filter:first-child {
	border-top: none;
	padding: 15px 0px 30px;
}
.price-filter input {
	margin: 5px 0px;
}
.name-filter .input-group {
	margin-top: 20px;
}
.name-filter .input-group-addon {
	color: #ffffff;
	background: #00ADEF;
	border: none;
	border-radius: 0;
}
.name-filter .form-control {
	border-radius: 0;
	height: 40px;
}
.star-filter li  i{
	color: #F19C4F;
}
.sort-area .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
	color: #07253F;
}
.sort-area .sort {
	margin-top: 40px;
	border-top: 1px solid #e6e6e6;
	border-right: 1px solid #e6e6e6;
	border-bottom: 1px solid #e6e6e6;
}
.sort-area .sort:first-child {
	border-left: 1px solid #e6e6e6;
}
.sort-area .custom-select-button {
	border: none;
}
.sort-area .bootstrap-select.btn-group .dropdown-toggle .filter-option {
	font-weight: bold;
	letter-spacing: 1px;
} 
.hotel-listing .room-grid-view img {
	max-width: 100%;
}
.hotel-listing .room-grid-view {
	margin-top: 40px;
}
.clearfix-md {
	clear: both;
}
.hotel-rating .pull-left span {
	display: block;
}
.pagination-lg > li > a, 
.pagination-lg > li > span {
	color:  #07253F;
}
.pagination > .active > a, 
.pagination > .active > a:focus, 
.pagination > .active > a:hover, 
.pagination > .active > span, 
.pagination > .active > span:focus, 
.pagination > .active > span:hover {
	background: #00ADEF;
	border: 1px solid transparent;
}
.pagination-lg > li:last-child > a, 
.pagination-lg > li:last-child > span {
	border-radius: 0;
}
.pagination-lg > li:first-child > a, 
.pagination-lg > li:first-child > span {
	border-radius: 0;
}
.bottom-pagination {
	padding: 30px 0px;
	overflow: hidden;
}
@media (max-width: 991px) {
	.form-gp {
		margin-bottom: 20px;
	}
	.clearfix-md {
		clear: none;
	}
	.clearfix-sm {
		clear: both;
	}
	.modify-hotel {
		background-size: cover;
	}
}
@media (max-width: 767px) {
	.sort-area .col-padding {
		padding: 10px 5px;
	}
	.sort-area .sort:nth-child(3) {
		border-left: 1px solid #e6e6e6;
	}
}

/************************************************************************
			14. hotel-list.html & hotel-list-2.html CSS Start
************************************************************************/
.hotel-list-view {
	margin: 40px 15px 0px;
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
	overflow: hidden;
}
.hotel-list-view .wrapper  {
	width: 100%;
}
.hotel-list-view .tripadvisor-rating {
	display: none;
}
.hotel-list-view:hover {
	border: 1px solid #F19C4F;
	box-shadow: 0px 0px 5px #F19C4F;
}
.hotel-list-view  img{
	max-width: 100%;
	min-height: 200px;
	padding: 15px;
}
.hotel-list-view .hotel-info {
	border-right: 1px solid #e6e6e6;
	min-height: 200px;
}
.hotel-list-view .hotel-header h5 {
	font-weight: 700;
	line-height: 1.6;
	font-size: 16px;
}
.hotel-list-view .hotel-header i {
	color: #F19C4F;
	margin: 0px 2px;
}
.hotel-list-view .hotel-header p {
	color: #00ADEF;
}
.hotel-list-view .hotel-header p  i {
	margin: 0 5px;
	color: #00ADEF;
}
.hotel-list-view .hotel-facility  i{
	border: 1px solid #bec4c8;
    border-radius: 50%;
    color: #bec4c8;
    font-size: 14px;
    height: 30px;
    margin: 5px;
    padding: 7px;
    width: 30px;
}
.hotel-list-view .hotel-facility p {
	margin-bottom: 5px;
}
.hotel-list-view .hotel-desc p {
	font-size: 13px;
	color: #0A3152;
	line-height: 1.7;
}
.hotel-list-view .rating-box {
	padding: 15px 0px;
	border-bottom: 1px solid #e6e6e6;
	min-height: 100px;
}
.hotel-list-view .rating-box .tripadvisor-rating {
	margin: 10px 0px 5px;
}
.hotel-list-view .rating-box  img{
	min-height: initial;
}
.hotel-list-view .rating-box span  {
	font-weight: normal;
}
.hotel-list-view .rating-box .user-rating span {
	display: block;
}
.hotel-list-view .room-book-box {
	padding: 5px 0px;
	min-height: 100px;
}
.hotel-list-view .room-book-box h5 {
	font-size: 16px;
	font-weight: 700;
}
.hotel-list-view .room-book-box a {
	background: #f2676b;
	color: #ffffff;
    font-weight: bold;
    padding: 5px 25px;
	display: inline-block;
	margin-top: 5px;
	border: 2px solid transparent;
}
.hotel-list-view:hover .room-book-box {
	color: #ffffff;
	background: #00ADEF;
}
.hotel-list-view:hover .room-book-box a{
	color: #ffffff;
	border: 2px solid #ffffff;
	background: #00ADEF;
}
@media (max-width: 991px) {
	.hotel-list-view  img{
		min-height: initial;
	}
	.hotel-list-view .hotel-info {
		border-right: none;
	}
	.hotel-list-view .rating-box {
		float: left;
		border-bottom: none;
		border-top: 1px solid #e6e6e6;
		border-right: 1px solid #e6e6e6;
		width: 50%;
	}
	.hotel-list-view .room-book-box {
		float: right;
		border-top: 1px solid #e6e6e6;
		width: 50%;
	}
}

/********************************************************************************
			15. flight-list.html 
*********************************************************************************/
.modify-flight {
	background: url('../images/61741232fdf3b4a3d14ddbb881f6e25a.jpg');
	background-attachment: fixed;
	background-size: cover;



}
.filter-area .airline-filter  img {
	max-width: 30px;
	max-height: 100px;
	margin-right: 5px;
}
.filter-area .stop-filter .btn-primary.active, 
.filter-area .stop-filter .btn-primary.focus, 
.filter-area .stop-filter .btn-primary:active,
.filter-area .stop-filter .btn-primary:focus, 
.filter-area .stop-filter .btn-primary:hover, 
.filter-area .stop-filter .open > .dropdown-toggle.btn-primary {
	color: #009CD7;
	color: #ffffff;
}
.filter-area .stop-filter .btn-primary {
	background: #00ADEF;
	border: transparent;
	border-radius: 0;
}
.filter-area .stop-filter .btn-group {
	margin-top: 10px;
}
.lowest-fare-slider  {
	margin-top: 40px;
}
.lowest-fare-slider .owl-carousel .owl-controls .owl-nav .owl-prev, 
.lowest-fare-slider .owl-carousel .owl-controls .owl-nav .owl-next {
	position: absolute;
	top: 21%;
}
.lowest-fare-slider .owl-carousel .owl-controls .owl-nav .owl-next {
	right: 0;
}
.lowest-fare-slider .owl-carousel .owl-controls .owl-nav .owl-prev {
	left: 0;
}
.lowest-fare-slider .owl-theme .owl-dots {
	display: none !important;
}
.lowest-fare-slider h5 {
	margin-bottom: 5px;
	font-weight: bold;
}
.lowest-fare-slider span {
	font-size: 13px;
}
.flight-listing .sort {
	margin-top: 30px;
}
.lowest-fare-slider .owl-theme .owl-nav [class*="owl-"] {
	background: #F2676B;
	padding: 5px 3px;
	margin: 0;
	border-radius: 0;
}
.lowest-fare-slider .owl-carousel .owl-item {
	background: #f7f7f7;
	padding-bottom: 10px;
}
.flight-list-view {
	margin: 40px 15px 0px;
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
	overflow: hidden;
}
.flight-list-view:hover {
	border: 1px solid #F19C4F;
	box-shadow: 0px 0px 5px #F19C4F;
}
.flight-list-view .airline-logo {
	padding: 33px 0px;
	border-right: 1px solid #e6e6e6;
}
.flight-list-view h6 {
	margin-bottom: 0px;
}
.flight-list-view .take-off {
	border-bottom: 1px solid #e6e6e6;
	padding: 5px 0px;
}
.flight-list-view .landing {
	padding: 5px 0px;
}
.flight-list-view .flight-desc h5 {
	font-size: 13px;
}
.flight-list-view .flight-desc h4 i {
	margin-right: 5px;
	color: #F2676B;
}
.flight-list-view .flight-desc {
	border-right: 1px solid #e6e6e6;
	min-height: 123px;
}
.flight-list-view .flight-desc .duration {
	padding: 40px 0px;
}
.flight-list-view .price {
	padding: 10px 0px 0px 0px;
}
.flight-list-view .price h4 {
	font-weight: bold;
}
.flight-list-view .book a {
	font-weight: bold;
	color: #ffffff;
	background: #F2676B;
	padding: 8px 20px;
	display: inline-block;
}
.flight-list-view .book {
	padding: 5px 0 10px;
}
.flight-list-view .book  h6 {
	margin-top: 10px;
}
.flight-list-view:hover .book a{
	background: #00ADEF;
}
.flight-details .close{
	font-size: 20px;
	color: #07253F;
	margin-top: -10px;
}
.flight-details .modal-dialog {
	margin: 8% auto;
}
.flight-details .modal-content {
	border-radius: 0;
	padding: 20px 30px;
}
.flight-details .modal-body {
	padding: 0;
}
.flight-details-header h5 {
	font-weight: bold;
	letter-spacing: 1px;
}
.flight-details-header h6 {
	font-weight: bold;
	letter-spacing: 1px;
}
.flight-details-book h3 {
	margin: 15px 0px 0px;
}
.flight-details-book a {
	display: inline-block;
	margin: 20px 0px;
	padding: 8px 20px;
	color: #ffffff;
	background: #F2676B;
	font-weight: bold;
}
.flight-details-book a:hover {
	color: #ffffff;
	background: #00ADEF;
}
.flight-details-body {
	margin-top: 20px;
}
.itinerary-details {
	overflow: hidden;
}
#itinerary h4 {
	font-weight: bold;
}
#itinerary i {
	padding: 20px 0px;
	font-size: 20px;
	color: #0A3152;
}
#itinerary .itinerary-date {
	margin: 0;
	padding: 20px 15px;
	font-weight: bold;
}
#itinerary span {
	font-size: 13px;
	display: block;
}
.flight-details .nav-tabs > li > a {
	color: #07253F;
}
.flight-details img{
	max-width: 100%;
}
.flight-details .flight {
	border-bottom: 1px solid #e6e6e6;
	overflow: hidden;
	padding-bottom: 15px;
}
.airline-facilities {
	padding: 30px 0px 0px;
}
.airline-facilities i {
	padding: 0px 0px 10px 0px !important;
}
.airline-rating {
	padding: 30px 0px 0px;
}
.airline-rating i {
	padding: 0px !important;
}
.airline-rating .colored {
	color: #F19C4F !important;
}
.airline-rating h6 {
	font-size: 13px;
}
.airline-rating h5 {
	margin-top: 0px;
}
#fare {
	overflow: hidden;
}
#fare tr {
	border-bottom: 1px solid #e6e6e6;
}
#fare td:nth-child(2n+1) {
	padding: 10px 100px 10px 10px !important;
	font-size: 13px;
}
#fare td {
	padding: 0px 10px 0px 0px;
	font-size: 13px;
}
#fare .grand-total {
	background: #e6e6e6;
}
#fare .grand-total td {
	font-weight: bold;
	font-size: 14px;
}
#fare h5 {
	font-weight: bold;
	margin-top: 25px;
}
@media (max-width: 991px) {
	.flight-list-view .flight-desc {
		border-top: 1px solid #e6e6e6; 
	}
	.flight-list-view .flight-book {
		border-top: 1px solid #e6e6e6; 
	}
	.flight-list-view .price {
		float: left;
		border-right: 1px solid #e6e6e6;
		width: 50%;
		border-bottom: none;
	}
	.flight-list-view .book{
		float: right;
		width: 50%;
		padding: 10px 0px;
	}
}

/************************************************************************
			16. hotel-list-2.html CSS Start
************************************************************************/
.flight-list-v2 {
	margin: 40px 15px 0px 15px;
	overflow: hidden;
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;	
}
.flight-list-v2:hover {
	border: 1px solid #F19C4F;
	box-shadow: 0px 0px 5px #F19C4F;
}
.flight-list-v2 .airline {
	padding: 20px 0px;
}
.flight-list-v2 .airline h6 {
	margin-top: 5px;
}
.flight-list-v2 img {
	max-width: 100%;
}
.flight-list-v2 .bold {
	font-weight: normal;
}
.flight-list-v2  h3{
	font-weight: bold;
	margin: 20px 0px 0px;
}
.stop-duration {
	padding: 15px;
}
.flight-list-v2 .stop {
	height: 15px;
	width: 15px;
	border-radius: 50%;
	background: #e6e6e6;
	margin-top: -8px;
	margin-left: 47%;
}
.flight-list-v2 .stop-box {
	padding: 8px 10px;
	margin-left: 36%;
	width: 70px;
	position: relative;
	border: 1px solid #e6e6e6;
	z-index: -1;
	margin-top: 6px;
	text-align: center;
}
.flight-list-v2 .stop-box:before {
	border-left: 1px solid #e6e6e6;
    border-top: 1px solid #e6e6e6;
    content: "";
	background: #ffffff;
    height: 10px;
    left: 42%;
    position: absolute;
    top: -6px;
    -webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	transform: rotate(45deg);
    width: 10px;
}
.flight-list-v2 .departure {
	text-align: right;
}
.flight-list-v2 .destination {
	text-align: left;
}
.flight-list-v2 .duration {
	margin-top: 5px;
}
.flight-direction {
	border: 1px solid #e6e6e6;
	position: relative;
	margin-top: 15px;
	z-index: -1;
}
.flight-direction:after {
	background: #e6e6e6 none repeat scroll 0 0;
    border-radius: 50%;
    color: #0A3152;
    content: "";
    height: 15px;
    position: absolute;
    right: -2px;
    top: -7px;
    width: 15px;
}
.flight-direction:before {
	background: #e6e6e6 none repeat scroll 0 0;
    border-radius: 50%;
    color: #0A3152;
    content: "";
    height: 15px;
    position: absolute;
    left: -2px;
    top: -7px;
    width: 15px;
}
.flight-list-footer {
	overflow: hidden;
	background: #f7f7f7;
	padding: 10px 0px;
	color: #0A3152;
}
.flight-list-footer span{
	padding: 0px 10px;
	font-size: 13px;
}
.flight-list-footer .pull-right span{
	font-weight: bold;
	font-size: 18px;
	padding: 0;
}
.flight-list-footer .pull-right a {
	color: #ffffff;
	background: #F2676B;
	padding: 15px;
	margin-left: 20px;
	font-weight: bold;
}
.flight-list-v2:hover .flight-list-footer .pull-right a {
	background: #00ADEF;
}
.flight-list-footer .refund {
	color: #F2676B;
	border-left: 1px solid #0A3152;
	border-right: 1px solid #0A3152;
}
.flight-list-footer .fa-info-circle {
	cursor: pointer;
}
.flight-list-v2 h5 {
	color: #0A3152;
	font-size: 13px;
	margin: 5px 0px;
}

@media (max-width: 767px) {
	.flight-list-v2 .departure ,
	.flight-list-v2 .destination {
		text-align: center;
	}
	.flight-list-v2 .stop-box {
		margin-left: 38%;
	}
	.flight-list-v2 h3 {
		margin: 0px;
	}
	.sm-invisible {
		display: none;
	}
	.flight-list-main {
		padding-bottom: 20px;
	}
	.flight-list-v2 .airline {
		padding: 20px 0px 10px 0px;
	}
}


/*****************************************************************************************
			17. holidays-grid.html CSS Starts
*****************************************************************************************/
.modify-holiday {
	background: url('../images/bg-image9.jpg') !important;
	background-size: contain !important;
	background-attachment: fixed !important;
}
.holiday-grid-view {
	margin-top: 40px;
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
	overflow: hidden;
}
.holiday-grid-view:hover {
	border: 1px solid #F19C4F;
	box-shadow: 0px 0px 5px #F19C4F;
}
.holiday-grid-view .holiday-header-wrapper {
	position: relative;
}
.holiday-grid-view img {
	max-width: 100%;
}
.holiday-grid-view .holiday-header .holiday-img {
	position: relative;
}
.holiday-grid-view .holiday-header .holiday-img img {
	position: relative;
}
.holiday-grid-view .holiday-header .holiday-price {
	position: absolute;
	right: 15px;
	top:0;
	color: #ffffff;
	padding: 10px;
	background: #F2676B;
}
.holiday-grid-view .holiday-header .holiday-title {
	position: absolute;
	left: 0;
	bottom:0;
	color: #ffffff;
	padding-left: 15px;;
}
.holiday-grid-view .holiday-header .holiday-title h3 {
	font-weight: bold;
}
.holiday-grid-view .holiday-header .holiday-price h4 {
	margin: 0px;
	font-weight: bold;
    letter-spacing: 1px;
}
.holiday-grid-view .holiday-header .holiday-price h5 {
	margin-bottom: 0px;
	margin-top: 5px;
	font-size: 13px;
}
.holiday-grid-view .holiday-details {
	overflow: hidden;
	padding-bottom: 25px;
	padding-top: 10px;
}
.holiday-grid-view .holiday-details h5 {
	font-weight: bold;
	margin-bottom: 0px;
	margin-top: 15px;
}
.holiday-grid-view .holiday-details p {
	margin-bottom: 0px;
	margin-top: 15px;
}
.holiday-grid-view .holiday-details i {
	margin-right: 10px;
	color: #0A3152;
}
.holiday-grid-view .holiday-details .sm-text {
	font-size: 13px;
	margin-top: 13px;
}
.holiday-grid-view .holiday-footer {
	position: relative;
	overflow: hidden;
	border-top: 1px solid #e6e6e6;
}
.holiday-grid-view .holiday-footer a {
	letter-spacing: 1px;
	font-weight: bold;
	color: #0A3152;
}
.holiday-grid-view .holiday-footer .view-detail {
	padding: 15px 0px;
}
.holiday-grid-view .holiday-footer .social {
	padding: 15px 0px;
	background: #f7f7f7;
	position: relative;
}
.holiday-grid-view .holiday-footer .social i {
	margin: 0px 5px;
}
.holiday-grid-view .holiday-footer .social i:hover {
	color: #F2676B;
	cursor: pointer;
}
@media (max-width: 991px) {
	.modify-holiday  {
		background-size: cover !important;
	}
}
/*****************************************************************************************
			18. holidays-grid-2.html CSS Starts
*****************************************************************************************/
.holiday-grid-view .holiday-header .detail {
	position: absolute;
	opacity: 0;
	top:0;
	left:0;
	background: rgba(10, 49, 82, 0.5);
	height: 100%;
	width: 100%;
	-webkit-transform: sacle(0);
	-ms-transform: sacle(0);
	-moz-transform: sacle(0);
	-o-transform: sacle(0);
	transform: scale(0);
	-webkit-transform: sacle(0);
	-ms-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
	
}
.holiday-grid-view .holiday-header .detail a {
	color: #ffffff;
	font-size: 30px;
	margin-top: 33%;
	margin-left: 45%;
	display: inline-block;
}
.holiday-grid-view:hover .holiday-header .detail {
	opacity: 1;
	-webkit-transform: sacle(1);
	-ms-transform: sacle(1);
	-moz-transform: sacle(1);
	-o-transform: sacle(1);
	-webkit-transform: sacle(1);
	transform: scale(1);
}

/*********************************************************************************
			19. cruise-list.html CSS Start
*********************************************************************************/
.modify-cruise {
	background: url('../images/bg-image13.jpg');
	background-size: contain;
	background-attachment: fixed;
}
.cruise-list-view {
	margin-top: 40px;
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
	overflow: hidden;
}
.cruise-list-view:hover {
	border: 1px solid #F19C4F;
	box-shadow: 0px 0px 5px #F19C4F;
}
.cruise-list-view img {
	max-width: 100%;
	min-height: 250px;
	padding: 15px;
}
.cruise-list-view h4 {
	font-weight: bold;
	margin-top: 15px;
}
.cruise-list-view strong {
	color: #00ADEF;
	margin-right: 10px;
}
.cruise-list-view i {
	margin-right: 5px;
}
.cruise-list-view .table {
	margin-bottom: 0px;
}
.cruise-list-view .table td {
	border-top: none;
	border-bottom: 1px solid #e6e6e6;
	padding: 6px;
}
.cruise-list-view .table tr:last-child td {
	border-bottom: none;
}
.cruise-list-view .table tr td:first-child {
	font-weight: bold;
}
.cruise-list-view .nav > li > a {
	padding: 5px 15px;
	color: #0A3152;
	font-weight: bold;
}
.nav-tabs > li.active > a, 
.nav-tabs > li.active > a:focus,
.nav-tabs > li.active > a:hover {
	color: #0A3152;
}
.cruise-list-view .booking-box {
	border-left: 1px solid #e6e6e6;
}
.cruise-list-view  .rating-box i {
	margin-right: 0px;
}
.cruise-list-view .rating-box {
	min-height: 125px;
	padding: 24px 0px;
	border-bottom: 1px solid #e6e6e6;
}
.cruise-list-view .rating-box h5 {
	margin-top: 0px;
	line-height: 1.6;
}
.cruise-list-view .price {
	min-height: 125px;
	padding: 18px 0px;
	background: #F2676B;
	color: #ffffff;
}
.cruise-list-view .price h3 {
	margin-top: 0px;
	font-weight: bold;
}
.cruise-list-view .price a {
	color: #ffffff;
	font-weight: bold;
	font-size: 13px;
}
.cruise-list-view .price a:hover {
	text-decoration: underline;
}
.cruise-list-view:hover .price {
	background: #00ADEF;
}
@media (max-width: 991px) {
	.cruise-list-view .booking-box {
		border-top: 1px solid #e6e6e6;
		overflow: hidden;
	}
	.cruise-list-view .rating-box  {
		float: left;
		width: 50%;
		border-right: 1px solid #e6e6e6;
	}
	.cruise-list-view .price {
		float: right;
		width: 50%;
	}
	.modify-cruise {
		background-size: cover;
	}
}

/*********************************************************************************
			20. hotel-detailed.html CSS Start
*********************************************************************************/
.page-title {
	background: url('../images/bg-image16.jpg');
	padding: 60px 0px;
	background-attachment: fixed;
	background-size: contain;
	color: #ffffff;
}
.page-title h3 {
	font-weight: 800;
	font-size: 28px;
	letter-spacing: 1px;
}
.page-title h5 i {
	color: #F19C4F;
}
.page-title p {
	color: #fff;
}
.page-title p i {
	margin-right: 5px;
}
.hotel-detail img {
	max-width: 100%;
}
.room-type {
	padding: 30px 0px;
}
.room-type img {
	max-width: 100%;
}
.room-type h5 {
	font-weight: bold;
	line-height: 1.6;
}
.room-type h3 {
	font-weight: bold;
	margin-top: 10px;
	color: #F2676B;
}
.room-type .panel-collapse a {
	color: #ffffff;
	font-weight: bold;
	padding: 10px 20px;
	background: #F2676B;
	display: inline-block;
	margin-top: 10px;
}
.room-type .panel-collapse a:hover {
	background: #00ADEF;
}
.panel-group {
	margin-bottom: 0px;
}
.panel-group .panel {
	border-radius: 0;
}
.panel-default {
	border-color: #e6e6e6;
}
.panel-default > .panel-heading {
	background: #ffffff;
	color: inherit;
	overflow: hidden;
	padding: 0px;	
}
.room-type .panel-title a div {
	padding: 15px;
}
.room-type .panel-title a div:last-child {
	border-left: 1px solid #e6e6e6;
}
#room-gallery .carousel-control.right,
#hotel-images .carousel-control.right {
	background-image: none;
	top: 50%;
}
#room-gallery .carousel-control.left,
#hotel-images .carousel-control.left {
	background-image: none;
	top: 50%;
}
.hotel-detail-sidebar .sidebar-item {
	margin-top: 30px;
	border: 1px solid #e6e6e6;
	box-shadow: 0 0 4px #e6e6e6;
}
.hotel-detail-sidebar .sidebar-item:first-child {
	margin-top: 0px;
}
.hotel-detail-sidebar  h4 {
	margin: 0;
	padding: 15px;
	line-height: 1.6;
	font-weight: normal;
	background: #e6e6e6;
	text-transform: uppercase;
	font-weight: bold;
}
.hotel-detail-sidebar  h4 i {
	color: #F2676B;
	margin-right: 5px;
}
.hotel-detail-sidebar .sidebar-item  .sidebar-item-body {
	padding: 10px 20px;
	overflow: hidden;
}
.hotel-detail-sidebar .sidebar-item  .sidebar-item-body h5 {
	line-height: 1.6;
}
.hotel-detail-sidebar .sidebar-item  .sidebar-item-body  h5 i {
	margin-right: 5px;
	font-size: 18px;
}
.hotel-detail-sidebar .sidebar-item  .sidebar-item-body  h5 a {
	color: #F2676B;
}
.hotel-detail-sidebar .sidebar-item  .sidebar-item-body  h5 a:hover {
	text-decoration: underline;
}
.hotel-detail-sidebar  .map h5 {
	margin: 0;
	padding: 15px;
	line-height: 1.6;
	text-align: center;
	background: #e6e6e6;
}
.hotel-detail-sidebar  .map h5 i {
	color: #F2676B;
}
.hotel-detail-sidebar .hotel-map {
	border: none;
	width: 100%;
}
.hotel-detail-sidebar .review h5 {
	margin-top: 0px;
}
.review .rating-box {
	padding: 0px;
}
.rating-box img {
	margin-top: 5px;
}
.rating-box .tripadvisor {
	border-right: 1px solid #e6e6e6;
}
.rating-box .fa-users {
	display: block;
    font-size: 25px;
    margin-bottom: 5px;
    margin-top: 10px;
	color: #172741;
}
.guest-say img {
	border-radius: 50%;
}
.guest-say h2 {
	border-bottom: 1px solid #e6e6e6;
    border-top: 1px solid #e6e6e6;
    margin-top: 10px;
    padding: 10px 0;
	color: #F2676B;
}
.guest-say h2 i {
	color: #F2676B;
}
.guest-say  span {
	display: block;
}
.guest-say .user-name {
	text-align: left;
	padding: 20px 15px;
}
.guest-say p {
	line-height: 2;
	margin: 15px 0px;
	background: #f7f7f7;
	padding: 15px;
	position: relative;
}
.guest-say p:before {
	content: "\f10d";
	font-family: FontAwesome;
	margin-right: 5px;
}
.guest-say p:after {
	content: "\f10e";
	font-family: FontAwesome;
	margin-left: 5px;
}
.guest-say .user-img {
	position: relative;
	margin-bottom: 10px;
}
.guest-say .user-img:before {
	background: #f7f7f7 none repeat scroll 0 0;
    content: "";
    height: 20px;
    left: 40%;
    position: absolute;
    top: -30%;
    -webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg);
    width: 20px;
}
.hotel-detail-sidebar .similar-hotel {
	margin-bottom: 30px;
}
.sidebar-item img {
	max-width: 100%;
}
.similar-hotel-box {
	overflow: hidden;
	padding-bottom: 15px;
	padding-top: 10px;
}
.similar-hotel-box span i {
	color: #F19C4F;
	margin-left: 3px;
	font-size: 14px;
}
.similar-hotel-box h5 {
	margin-top: 0px;
	margin-bottom: 2px;
}
.similar-hotel-box a {
	color: #172741;
}
.similar-hotel-box a:hover {
	color: #00adef
}
.similar-hotel-box span {
	margin-top: 5px;
	color: #F2676B;
	font-weight: bold;
}
.room-complete-detail {
	margin-top: 30px;
	margin-bottom: 30px;
}
.room-complete-detail p {
	line-height: 2;
}
.room-complete-detail h3 {
	margin-top: 0px;
}
.room-complete-detail .tab-content {
	padding: 15px 0;
	overflow: hidden;
}
.room-complete-detail .room-info-wrapper {
	overflow: hidden;
	padding: 20px 0px;
	border-bottom: 1px solid #e6e6e6;
}
.room-complete-detail .room-info-wrapper h5 {
	margin-top: 0;
	color: #00adef;
	font-weight: bold;
}
.room-complete-detail .room-info-wrapper h4 {
	margin-top: 0px;
	font-weight: bold;
}
.room-complete-detail .room-info-wrapper p i {
	border: 1px solid #bec4c8;
    border-radius: 50%;
    color: #bec4c8;
    font-size: 12px;
    height: 30px;
    margin: 5px;
    padding: 8px;
    width: 30px;
}
.room-complete-detail .room-info-wrapper .price h3 {
	margin-top: 0px;
}
.room-complete-detail .room-info-wrapper .book a {
	border: 2px solid #f9676b;
    color: #f9676b;
    display: inline-block;
    font-weight: bold;
    margin-top: 15px;
    padding: 5px 30px;
}
.room-complete-detail .room-info-wrapper .book a:hover {
	background: #f9676b;
	color: #fff;
}
.room-complete-detail .nav-tabs > li > a {
    background: #00adef none repeat scroll 0 0;
    border-radius: 0;
    color: #fff;
    line-height: 1.42857;
    margin-right: 5px;
}
.room-complete-detail .nav-tabs > li.active > a, 
.room-complete-detail .nav-tabs > li.active > a:focus, 
.room-complete-detail .nav-tabs > li.active > a:hover {
	background: #ffffff;
	color: #273A48;
}
.ammenties-1 {
	overflow: hidden;
}
.ammenties-1 p {
	background: #e6e6e6 none repeat scroll 0 0;
    line-height: 1;
    margin: 10px 0;
}
.ammenties-1 p i {
	background: #f2676b none repeat scroll 0 0;
    color: #fff;
    margin-right: 20px;
    padding: 15px;
	position: relative;
}
.ammenties-1 p i:after {
	background: #f2676b none repeat scroll 0 0;
    content: "";
    height: 15px;
    position: absolute;
    right: -15%;
    transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
    width: 15px;
}
.ammenties-2 {
	overflow: hidden;
}
.ammenties-2 span {
	background: #f2676b none repeat scroll 0 0;
	display: block;
	position: relative;
	padding: 10px 0px;
	color: #ffffff;
	opacity: 0;
} 
.ammenties-2 span:after {
	background: #f2676b none repeat scroll 0 0;
    content: "";
    height: 15px;
    left: 45%;
    position: absolute;
    top: 80%;
    transform: rotate(45deg);
    width: 15px;
    z-index: 1;
}
.ammenties-2 i {
	background: #e6e6e6;
	padding: 20px;
	font-size: 30px;
}
.ammenties-2 h3 {
	margin-top: 20px;
}
.ammenties-2-wrapper:hover span {
	opacity: 1;
}
.ammenties-3 {
	overflow: hidden;
}
.ammenties-3 h3 {
	margin-top: 25px;
}
.ammenties-3 p {
	margin: 10px 0px;
}
.ammenties-3 i {
	font-size: 25px;
	margin-right: 10px;
}
.ammenties-4 {
	overflow: hidden;
}
.ammenties-4 h3 {
	margin-top: 25px;
}
.ammenties-4 p {
	margin: 10px 0px;
}
.ammenties-4 i {
	color: #f2676b;
	margin-right: 10px;
	padding: 10px;
	border: 1px solid #f2676b;
}
.ammenties-5 {
	overflow: hidden;
}
.ammenties-5 h3 {
	margin-top: 25px;
}
.ammenties-5 i {
	color: #f2676b;
	margin-right: 10px;
	font-size: 20px;
}
.ammenties-5 p {
	margin: 10px 0px;
}
.review-header  td {
	border-bottom: 1px solid #e6e6e6;
    border-top: medium none !important;
}
.review-header td i {
	color: #F19C4F;
}
.review-header h2 {
	margin-top: 40px;
	color: #F19C4F;
	font-weight: bold;
}
.individual-review {
	overflow: hidden;
	padding: 20px;
}
.dark-review {
	background: #e6e6e6;
}
.individual-review h4 {
	font-weight: bold;
	line-height: 1.6;
}
.individual-review h4 i {
	color: #F19C4F;
}
.individual-review  img {
	border-radius: 50%;
	max-width: 40px;
}
.individual-review  p {
	margin: 15px 0px;
}
.individual-review span {
	margin-top: 8px;
	display: block;
	font-weight: bold;
	color: #F2676B;
}
.load-more a {
	background: #f2676b none repeat scroll 0 0;
    color: #ffffff;
    display: inline-block;
    margin-top: 20px;
    padding: 10px 50px;
}
.load-more a:hover {
	background: #00adef;
}
#write-review .form-control {
	border-radius: 0;
}
#write-review label {
	margin-top: 10px;
	font-weight: normal;
} 
.submit-review {
	background: #f2676b none repeat scroll 0 0;
    border: medium none;
    border-radius: 0;
    color: #ffffff;
    font-size: 18px;
    font-weight: bold;
    margin-top: 20px;
    padding: 10px 50px;
}
.submit-review:hover {
	background: #00adef;
	color: #ffffff;
}
@media (max-width: 991px) {
	.room-info-wrapper {
		padding-bottom: 0px !important;
	}
	.room-info-wrapper .booking-box {
		border-top: 1px solid #e6e6e6;
		overflow: hidden;
	}
	.room-complete-detail .room-info-wrapper .book {
		float: right;
		width: 50%;
		border-left: 1px solid #e6e6e6;
		padding: 20px 0px;
	}
	.room-complete-detail .room-info-wrapper .price {
		float: left;
		width: 50%;
		padding: 20px 0px;
	}
	.room-complete-detail .room-info-wrapper .price h3 {
		margin: 0px;
	}
	.room-complete-detail .room-info-wrapper .book a {
		margin: 0px;
	}
}
@media (max-width: 767px) {
	.clearfix-xs {
		clear: both;
	}
	.room-info-wrapper .room-desc {
		padding: 20px 0px;
	}
	.room-complete-detail .nav-tabs li a span {
		display: none;
	}
}

/*********************************************************************************
				21. hotel-detailed-2.html CSS Start
*********************************************************************************/
.sidebar-booking-box {
	position: relative;
}
.sidebar-booking-box  h3 {
	background: #f2676b none repeat scroll 0 0;
    color: #ffffff;
    padding: 22px 0;
	font-weight: bold;
	letter-spacing: 1px;
	position: relative;
	margin: 0px;
}
.sidebar-booking-box  h3:after {
	background: #f2676b none repeat scroll 0 0;
    border-radius: 50%;
    color: #fff;
    content: "\f044";
    font-family: "FontAwesome";
    left: 45%;
    padding: 10px 17px;
    position: absolute;
    top: 63%;
}
.sidebar-assistance-box {
	position: relative;
	margin-top: 30px;
	margin-bottom: 30px;
}
.sidebar-assistance-box h3 {
	background: #f2676b none repeat scroll 0 0;
    color: #ffffff;
    padding: 22px 0;
	font-weight: bold;
	letter-spacing: 1px;
	position: relative;
	margin: 0px;
}
.sidebar-assistance-box  h3:after {
	background: #f2676b none repeat scroll 0 0;
    border-radius: 50%;
    color: #fff;
    content: "\f095";
    font-family: "FontAwesome";
    left: 45%;
    padding: 10px 17px;
    position: absolute;
    top: 63%;
}
.assistance-box h3 {
	margin-top: 10px;
}
.assistance-box-body {
	background: #e6e6e6;
	padding: 35px 20px 20px;
	box-shadow: 0px 0px 5px #e6e6e6;
}
.assistance-box-body h5 {
	font-size: 18px;
}
.assistance-box-body h4 {
	font-size: 24px;
	font-weight: bold;
	padding: 0px;
}
.booking-box-body .custom-select-button {
	background: #ffffff;
}
.booking-box-body {
	background: #e6e6e6 none repeat scroll 0 0;
    box-shadow: 0 0 5px #e6e6e6;
    padding: 15px 5px 0px;
}
.booking-box-body .room-price h5 {
	margin-top: 30px;
	margin-bottom: 0px;
	font-weight: bold;
	color: #F2676B;
}
.booking-box-body .room-price label {
	margin-bottom: 0px;
}
.booking-box-body .grand-total {
	margin-top: 25px;
	margin-left: -5px;
	margin-right: -5px;
	overflow: hidden;
	background: #07253F;
	padding: 20px 0px;
}
.booking-box-body .grand-total  button{
	color: #ffffff;
	border: none;
	background: transparent;
	border: 2px solid #ffffff;
	padding: 8px 40px;
	font-weight: bold;
}
.booking-box-body .grand-total  button:hover {
	background: #f9676b;
}
.booking-box-body .grand-total  h4 {
	background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #fff;
    margin: 10px 0;
    padding: 0;
    text-transform: capitalize;
}
.booking-box-body span {
	margin-left: 10px;
}
.booking-box-body label {
	margin-top: 25px;
	font-weight: normal;
	font-size: 14px;
}
.booking-box-body .form-control {
	border: none;
	box-shadow: none;
	border-radius: 0;
	height: 40px;
}
.booking-box-body .input-group-addon {
	background-color: #f2676b;
    border: medium none;
    border-radius: 0;
    color: #fff;
}
.room-ammenties {
	margin-top: 30px;
	overflow: hidden;
}
.custom-head {
	position: relative;
	line-height: 1.6;
	margin-top: 0px;
}
.custom-head:after {
	background: #f2676b none repeat scroll 0 0;
    content: "";
    height: 5px;
    left: 0;
    position: absolute;
    top: 110%;
    width: 100px;
}
.hotel-room-desc {
	overflow: hidden;
	margin-top: 30px;
	margin-bottom: 0px;
}
.hotel-room-detail {
	padding-left: 20px;
}
.hotel-room-detail h4 {
	margin-top: 15px;
	margin-bottom: 5px;
}
.hotel-room-desc p {
	line-height: 2;
}
.hr-seperator {
	border-top: 1px solid #e6e6e6;
	margin-top: 45px;
	margin-bottom: 45px;
	position: relative;
}
.hr-seperator:after {
	background: #e6e6e6 none repeat scroll 0 0;
    border: none;
    border-radius: 50%;
    color: #07253F;
    content: "\f18c";
    font-family: "FontAwesome";
    left: 50%;
    margin-top: -22px;
    padding: 10px 15px;
    position: absolute;
}
@media (max-width: 767px) {
	.custom-head {
		margin-bottom: 25px;
	}
}
/*********************************************************************************
			22. holiday-detail.html CSS Start
*********************************************************************************/
.page-title span {
	color: #fff;
}
.page-title span i {
	margin: 0px 5px;
	font-weight: normal;
}
.page-title  h4 {
	font-weight: bold;
	color: #fff;
}
#gallery {
	margin-top: 0px;
}
#gallery .carousel-control.right {
	background-image: none;
	top: 50%;
}
#gallery .carousel-control.left {
	background-image: none;
	top: 50%;
}
.package-detail {
	padding: 60px 0px;
}
.package-detail .main-content {
	padding: 0px 20px;
}
.package-detail .package-detail-sidebar {
	padding: 0px 20px;
}
.package-detail-sidebar .sidebar-booking-box h3 {
	margin: 0px;
}
.package-complete-detail {
	margin-bottom: 30px;
	margin-top: 30px;
}
.package-complete-detail .tab-content {
	overflow: hidden;
	padding: 15px 0px;
}
.package-complete-detail .tab-content h3 {
	margin-top: 0px;
}
.package-complete-detail .tab-content p {
	line-height: 2;
	margin-bottom: 15px;
	font-size: 14px;
}
.package-complete-detail .tab-content .inc i {
	margin-right: 5px;
	color: #F2676B;
}
.package-complete-detail .nav-tabs > li > a {
    background: #00adef none repeat scroll 0 0;
    border-radius: 0;
    color: #fff;
    line-height: 1.42857;
    margin-right: 5px;
}
.package-complete-detail .nav-tabs > li.active > a, 
.package-complete-detail .nav-tabs > li.active > a:focus, 
.package-complete-detail .nav-tabs > li.active > a:hover {
	background: #ffffff;
	color: #273A48;
}
.package-detail-sidebar .sidebar-item {
	box-shadow: 0px 0px 5px #e6e6e6;
	margin-top: 30px;
	margin-bottom: 30px;
	border: 1px solid #e6e6e6;
	overflow: hidden;
}
.package-detail-sidebar .sidebar-item:first-child {
	margin-top: 0px;
}
.package-detail-sidebar .sidebar-item-body {
	overflow: hidden;
	padding: 15px 20px;	
}
.package-detail-sidebar .sidebar-item h4 {
	background: #e6e6e6;
	margin: 0;
	line-height: 1.6;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 1px;
	padding: 15px;
}
.package-detail-sidebar .sidebar-item h4 i {
	color: #F2676B;
	margin-right: 5px;
}
.package-detail-sidebar .package-summary-body {
	padding: 15px 20px 15px
}
.package-detail-sidebar .package-summary-body h5 {
	position: relative;
	font-size: 13px;
	color: #F2676B;
	margin-bottom: 5px;
}
.package-detail-sidebar .package-summary-body h5 i {
	margin-right: 5px;
}
.package-detail-sidebar .package-summary-body p {
	font-size: 16px;
    margin-bottom: 15px;
}
.package-detail-sidebar .package-summary-body p i {
	margin: 0px 5px;
}
.package-summary-footer {
	overflow: hidden;
}
.package-summary-footer .price {
	background: #e6e6e6;
	padding: 10px 0px 11px;
	position: relative;
}
.package-summary-footer .price h4 {
	font-weight: bold;
}
.package-summary-footer .price:after {
	background: #e6e6e6 none repeat scroll 0 0;
    content: "";
    height: 25px;
    position: absolute;
    right: -12px;
    top: 35%;
    transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
    width: 25px;
    z-index: 1;
}
.package-summary-footer .book {
	background: #F2676B;
	padding: 32px 0 31px;
}
.package-summary-footer .book a{
	border: 2px solid #ffffff;
    color: #ffffff;
    font-weight: bold;
    padding: 10px 15px;
}
.package-summary-footer .book a:hover {
	background: #00adef;
}
.package-detail-sidebar  .assitance-body {
	padding: 20px;
}
.package-detail-sidebar  .assitance-body h2 {
	margin: 0px;
}
.package-detail-sidebar  .assitance-body h5 {
	line-height: 1.6;
	margin-top: 0px;
}
.package-detail-sidebar  .assitance-body a {
	color: #F2676B;
}
.daily-schedule {
	margin-top: 20px;
}
.daily-schedule .title {
	background: #e6e6e6;
}
.daily-schedule .title {
	font-size: 16px;
	font-weight: bold;
}
.daily-schedule .title span {
	background: #f2676b none repeat scroll 0 0;
    color: #ffffff;
    display: inline-block !important;
    font-size: 16px !important;
    font-weight: bold;
    margin-right: 25px;
    padding: 15px;
    position: relative;
}
.daily-schedule .title p {
	margin-bottom: 0px;
}
.daily-schedule .title span:after {
	background: #f2676b none repeat scroll 0 0;
    content: "";
    height: 20px;
    position: absolute;
    right: -10px;
    top: 33%;
    transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-webkit-transform: rotate(45deg);  
    -o-transform: rotate(45deg); 
	width: 20px;
}
.daily-schedule-body {
	overflow: hidden;
	padding: 30px 5px 10px;
}
.daily-schedule-body img {
	max-width: 100%;
	margin-bottom: 20px;
}
.activity h5 {
	font-weight: bold;
}
.activity i {
	padding: 0px 5px 0px 0px !important;
	color: #f2676b !important;
}
.inclusion-title {
	background: #e6e6e6;
}
.inclusion-title span {
	background: #f2676b none repeat scroll 0 0;
    color: #ffffff;
    display: inline-block !important;
    font-size: 16px !important;
    font-weight: bold;
    margin-right: 25px;
    padding: 15px;
    position: relative;
}
.inclusion-wrapper {
	margin-top: 20px;
}
.inclusion-wrapper img {
	max-width: 100%;
	margin-bottom: 15px;
}
.inclusion-title p {
	margin-bottom: 0px !important;
	font-size: 16px;
}
.inclusion-title span:after {
	background: #f2676b none repeat scroll 0 0;
    content: "";
    height: 20px;
    position: absolute;
    right: -10px;
    top: 33%;
    transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-webkit-transform: rotate(45deg);  
    -o-transform: rotate(45deg); 
	width: 20px;
}
.inclusion-body {
	padding: 20px 20px 10px;
	overflow: hidden;
}
.inclusion-body h4 {
	font-weight: bold;
	margin-bottom: 20px;
}
.inclusion-body h5 i {
	color: #F19C4F;
}
.inclusion-body h5 {
	margin-top: 0px;
	font-weight: bold;
}
.flight-inclusion {
	margin-top: 20px;
}
.flight-inclusion img {
	margin: 0px !important;
}
@media (max-width: 767px) {
	.package-complete-detail .nav-tabs li a span {
		display: none;
	}
}

/*********************************************************************************
				23. flight-booking.html CSS Start
*********************************************************************************/
.flight-title i {
	margin: 0px 10px;
}
#review-booking .flight-list-v2 {
	margin: 0px;
}
.booking-tab {
	background: #e6e6e6;
	padding: 30px 0px;
}
.booking-detail {
	padding: 60px 0px;
}
.booking-tab .nav-tabs > li.active > a, 
.booking-tab .nav-tabs > li.active > a:focus, 
.booking-tab .nav-tabs > li.active > a:hover{
	border: none;
	background: #e6e6e6;
	position: relative;
}
.booking-tab .nav-tabs .active {
	position: relative;
}
.booking-tab .nav-tabs .active:after {
	background: #f9676b none repeat scroll 0 0;
    content: "";
    height: 5px;
    left: 43%;
    position: absolute;
    top: 100%;
    width: 50px;
}
.booking-tab .nav-tabs {
	border-bottom: none;
}
.booking-tab .nav-tabs > li.active > a i ,
.booking-tab  .nav-tabs > li > a i {
    display: block;
    padding: 5px;
	font-size: 30px;
}
.booking-tab .nav-tabs > li.active > a span,
.booking-tab  .nav-tabs > li > a span {
	font-size: 20px;
}
.booking-tab .nav-tabs > li.active > a, 
.booking-tab  .nav-tabs > li > a {
	color: #07253F;
}
.booking-tab .tab-content {
	padding: 20px 0px;
}
.booking-sidebar .sidebar-item {
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
}
.booking-sidebar .sidebar-item h4 {
	background: #e6e6e6 none repeat scroll 0 0;
    padding: 20px 15px;
	font-weight: bold;
	letter-spacing: 1px;
	text-transform: uppercase;
	margin: 0px;
}
.booking-sidebar .sidebar-item h4 i {
	color: #F2676B;
	margin-right: 10px;
}
.booking-sidebar .sidebar-body {
	padding: 20px;
}
.booking-sidebar .sidebar-body .table {
	margin-bottom: 0px;
}
.booking-sidebar .sidebar-body table tr {
	border-bottom: 1px solid #e6e6e6;
}
.booking-sidebar .sidebar-body table tr:last-child {
	border-bottom: none;
}
.booking-sidebar .sidebar-body table td {
	border-top: none;
}
.booking-sidebar .sidebar-body .total {
	font-size: 20px;
	font-weight: bold;
}
.booking-form .form-control {
	height: 40px;
	border-radius: 0px;
}
.login-box {
	overflow: hidden;
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
	margin-top: 40px;
}
.login-box h3 {
	background: #e6e6e6 none repeat scroll 0 0;
    line-height: 1.6;
    margin: 0;
    padding: 10px 20px;
}
.booking-form {
	padding: 0 15px 20px;
	overflow: hidden;
}
.booking-form a {
	color: #F2676B;
	margin-top: 5px;
	display: block;
}
.booking-form label {
	margin-top: 15px;
}
.booking-form button {
	background: #f2676b none repeat scroll 0 0;
    border: medium none;
    color: #fff;
    display: block;
    font-weight: bold;
    margin-top: 15px;
    padding: 10px 50px;
}
.booking-form button:hover {
	background: #00adef;
}
.social-media-login {
	margin-top: 20px;
}
.social-media-login a {
	background: #5470AF;
    color: #ffffff;
    display: inline-block;
    font-weight: bold;
    line-height: 1;
    margin: 10px 0;
    padding: 0 15px
}
.social-media-login a i {
	border-right: 1px solid #fff;
    margin-right: 15px;
    padding: 15px 15px 15px 0;
}
.social-media-login span {
	display: block;
	font-weight: bold;
}
.booking-sidebar .contact-box {
	margin-top: 40px;
	margin-bottom: 40px;
}
#passenger-info {
	overflow: hidden;
}
.passenger-detail {
	overflow: hidden;
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
}
.passenger-detail h3 {
	margin: 0px;
	padding: 10px 20px;
	line-height: 1.6;
	background: #e6e6e6;
}
.passenger-detail-body {
	padding: 20px;
}
.passenger-detail-body label {
	margin-top: 15px;
	font-weight: normal;
}
.passenger-detail-body .form-control {
	border-radius: 0px;
	height: 40px;
}
.passenger-detail-body button {
	background: #f2676b none repeat scroll 0 0;
    color: #ffffff;
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    margin-top: 20px;
	margin-bottom: 20px;
	border: none;
    padding: 10px 20px;
}
.passenger-detail-body button:hover {
	background: #00adef;
}
.passenger-detail-body button i {
	margin-left: 5px;
	
}
.saved-card {
	border: 1px solid #e6e6e6;
	overflow: hidden;
	padding: 0px 20px 20px;
}
.saved-card label {
	margin-top: 10px;
}
.saved-card label span {
	font-size: 18px;
	margin-left: 10px;
	line-height: 1.6;
}
.payment-seperator {
	border-top: 1px solid #e6e6e6;
	margin: 40px 0px 30px;
	position: relative;
}
.payment-seperator:after {
	background: #e6e6e6 none repeat scroll 0 0;
    border-radius: 50%;
    content: "Or";
    left: 45%;
    padding: 12px 15px;
    position: absolute;
    top: -23px;
    z-index: 1;
}
.add-new-card {
	overflow: hidden;
}
.paypal-pay {
	overflow: hidden;
}
.paypal-pay  i{
	color: #009CDE;
	font-size: 50px;
	margin-top: 20px;
}
.paypal-pay a {
	 background: #f2676b none repeat scroll 0 0;
    color: #ffffff;
    display: inline-block;
    font-weight: bold;
    margin-top: 25px;
    padding: 10px 20px;
}
.paypal-pay a:hover {
	background: #00adef;
}
@media (max-width: 767px) {
	.login-box {
		margin-bottom: 40px;
	}
}

/*********************************************************************************
				24. hotel-booking.html CSS Start
*********************************************************************************/
.booking-summary {
	overflow: hidden;
}
.sidebar-body {
	overflow: hidden;
}
.booking-summary h4 {
	margin-top: 0px;
	margin-bottom: 7px;
	font-weight: bold;
}
.booking-summary h5 {
	margin-top: 0px;
}
.booking-summary .fa-star {
	color: #E1974F;
}
.booking-summary .loc {
	color: #00adef;
}
.booking-summary .fa-map-marker {
	margin-right: 5px;
}
.booking-summary .date h2{
	margin: 0px;
}
.booking-summary .date h5 {
	background: #e6e6e6;
	margin: 0px;
	padding: 5px;
}
.booking-summary .date {
	border: 1px solid #e6e6e6;
	max-width: 100px;
	padding-top: 5px;
}
.booking-summary-title {
	margin-bottom: 10px;
	overflow: hidden;
}
.booking-summary table {
	margin-top: 15px;
}
.clear-margin {
	margin-top: 0px;
}
/*********************************************************************************
				25. hotel-booking-2.html CSS Start
*********************************************************************************/
.booking-summary-v2 {
	overflow: hidden;
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
}
.booking-summary-v2 img {
	max-width: 100%;
	padding: 15px;
}
.booking-summary-v2 h4 {
	font-weight: bold;
}
.booking-summary-v2 h4 i {
	color: #F19C4F;
}
.booking-summary-v2 p i {
	color: #F2676B;
}
.booking-summary-v2 p span {
	font-weight: bold;
}
.booking-summary-v2 a {
	background: #f2676b none repeat scroll 0 0;
    color: #ffffff;
    display: inline-block;
    font-weight: bold;
    margin-top: 60px;
    padding: 7px 15px;
}
.booking-summary-v2 a:hover {
	background: #00adef;
}
@media (max-width: 991px) {
	.booking-summary-v2 a {
		margin: 10px 0px 15px;
	}
}
/*********************************************************************************
				26. thank-you.html CSS Start
*********************************************************************************/
.thank i {
	background: #f19c4f none repeat scroll 0 0;
    border-radius: 50%;
    color: #ffffff;
    margin-right: 5px;
    padding: 10px 12px;
}
.confirmation-detail {
	margin-top: 40px;
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
	margin-bottom: 40px;
	overflow: hidden;
	padding: 0px 20px 20px;
}
.confirmation-detail td {
	border-top: none !important;
	border-bottom: 1px solid #e6e6e6;
}
.confirmation-detail p {
	font-weight: bold;
}
.rec-box {
	margin: 40px 0px;
}
.rec-box a {
	color: #07253F;
}
.rec-box a:hover {
	color: #F2676B;
}
.rec-box td i {
	color: #F2676B;
	margin-right: 5px;
}
/*********************************************************************************
				27. BLOG CSS Start
*********************************************************************************/
.sidebar-item .list-group-item {
	border: none;
}
.sidebar-search {
	margin-top: 40px;
}
.sidebar-search .form-control {
	border-radius: 0px;
	height: 50px;
}
.sidebar-search .input-group-addon {
	border-radius: 0px;
	color: #ffffff;
	background: #00adef;
	border: none;
	padding: 10px 25px;
}
.recent-post {
	margin-top: 40px;
	margin-bottom: 40px;
}
.recent-post img {
	max-width: 100%;
}
.recent-post a {
	color: #07253F;
}
.recent-post a:hover {
	color: #00adef;
}
.recent-post .wrapper {
	margin-bottom: 15px;
	overflow: hidden;
}
.sidebar-subscribe {
	margin: 40px 0px;
}
.sidebar-subscribe .form-control {
	height: 40px;
	border-radius: 0px;
}
.sidebar-subscribe button {
	border: 0px;
	color: #ffffff;
	background: #F2676B;
	margin-top: 20px;
	padding: 10px 20px;
	font-weight: bold;
}
.sidebar-subscribe button:hover {
	background: #00adef;
}
.recent-post .wrapper:last-child {
	margin-bottom: 0px;
}
.post-cat {
	margin: 40px 0px;
}
.post-cat a {
	color: #07253F;
}
.post-cat a:hover {
	color: #00adef;
}
.post-cat .list-group {
	margin-bottom: 0px;
}
.post-wrapper {
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
	margin-top: 40px;
	margin-bottom: 40px;
}
.post-wrapper img {
	max-width: 100%;
}
.post-body h3 {
	font-weight: bold;
    letter-spacing: 1px;
    line-height: 1.3;
    text-transform: uppercase;
}
.post-body p {
	line-height: 2;
	margin-bottom: 20px;
}
.post-body {
	padding: 0px 20px;
	overflow: hidden;
}
.post-body p i {
	color: #f2676b;
	margin: 0px 5px;
}
.post-body p a {
	color: #172755;
}
.post-body p a:hover {
	color: #00adef;
}
.post-footer {
	overflow: hidden;
	background: #e6e6e6;
}
.post-footer h5 {
	margin-top: 15px;
}
.post-footer  h5 a {
	color: #00adef;
}
.post-footer .read-more a {
	background: #f2676b none repeat scroll 0 0;
    color: #fff;
    display: inline-block;
    font-weight: bold;
    padding: 15px 20px;
}
.post-footer .read-more a:hover {
	background: #00adef;
}
.post-wrapper .youtube-video {
	width: 100%;
	height: 425px;
	border: none;
}
.blog-load-more {
	display: inline-block;
	color: #ffffff;
	background: #f2676b;
	padding: 10px 40px;
	font-weight: bold;
	margin-bottom: 40px;
}
.blog-load-more:hover {
	background: #00adef;
	color: #ffffff;
}
/*********************************************************************************
				28. single-right-sidebar.html CSS Start
*********************************************************************************/
.single-post-wrapper {
	margin-top: 40px;
}
.single-post-wrapper .blog-title h3{
	font-weight: bold;
    letter-spacing: 1px;
    line-height: 1.3;
    text-transform: uppercase;
}
.single-post-wrapper .blog-title p i {
	color: #f2676b;
	margin: 0px 5px;	
}
.single-post-wrapper .blog-title p a {
	color: #172755;
}
.single-post-wrapper .blog-title p a:hover {
	color: #00adef;
}
.single-post-wrapper .main-content img{
	max-width: 100%;
	margin-top: 15px;
	margin-bottom: 20px;
}
.single-post-wrapper .main-content p {
	line-height: 2;
}
.single-post-wrapper .main-content h4 {
	font-weight: bold;
	margin: 15px 0px;
}
.single-post-wrapper .social-share {
	margin: 30px 0px;
}
.single-post-wrapper .social-share a {
	color: #172755;
}
.single-post-wrapper .social-share a:hover {
	color: #00adef;
}
.single-post-wrapper .social-share i {
	font-size: 25px;
	margin: 0px 10px;
}
.single-post-wrapper .social-share p {
	font-weight: bold;
}
.blog-links {
	padding: 30px 0px;
	border-top: 1px solid #e6e6e6;
	border-bottom: 1px solid #e6e6e6;
	overflow: hidden;
}
.blog-links a {
	color: #F2676B;
}
.blog-links a:hover {
	color: #00adef;
}
.author-wrapper {
	padding: 30px;
	overflow: hidden;
	background: #e6e6e6;
}
.author-detail img {
	border-radius: 50%;
}
.author-detail h4 {
	margin-bottom: 5px !important;
}
.comment-box {
	margin-top: 40px;
}
.comment-wrapper {
	overflow: hidden;
	margin: 40px 0px;
}
.comment-wrapper img {
	border-radius: 50%;
	margin: 0px !important;
}
.comment-wrapper .comment-body {
	background: #e6e6e6;
	padding: 20px;
	position: relative;
}
.comment-wrapper .comment-body:before {
	background: #e6e6e6 none repeat scroll 0 0;
    content: "";
    height: 20px;
    left: -10px;
    position: absolute;
    -webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg);
    width: 20px;
}
.comment-wrapper .comment-body h4 {
	margin-bottom: 5px;
	margin-top: 0px;
}
.comment-wrapper .comment-body span {
	margin: 8px 0px;
	display: block;
}
.comment-wrapper .comment-body p {
	margin-bottom: 0px;
}
.comment-wrapper .comment-body h5 {
	margin-bottom: 0px;
}
.comment-wrapper .comment-body a {
	color: #F2676B ;
}
.comment-wrapper .comment-body i {
	margin: 0px 5px;
}
.leave-comment {
	overflow: hidden;
	margin: 40px 0px;
}
.leave-comment .form-control {
	height: 40px;
	border-radius: 0px;
}
.leave-comment label {
	font-weight: normal;
	margin-top: 15px;
}

/*********************************************************************************
				29. contact-us.html CSS Start
*********************************************************************************/
.contact-address {
	color: #ffffff;
	padding: 60px 0px;
	background: #00adef;
}
.contact-address h2 {
	font-weight: 800;
	letter-spacing: 1px;
}
.contact-address h5 {
	line-height: 2;
}
.contact-address p {
	font-size: 16px;
	font-weight: bold;
}
.contact-address a {
	color: #ffffff;
}
.contact-address a:hover {
	color: #F2676B;
}
.contact-address i {
	font-size: 40px;
	margin: 30px 0px;
}
.contact-form {
	padding: 30px 15px;
}
.contact-form .form-control {
	height: 40px;
	border-radius: 0px;
	margin: 10px 0px;
}
.contact-form textarea {
	height: auto !important;
}
.contact-form h2 {
	font-weight: 800;
	letter-spacing: 1px;
}
.contact-form h5 {
	line-height: 2;
}
.contact-map {
	border: 0px;
	width: 100%;
	height: 520px;
}
/*********************************************************************************
				30. about-us.html CSS Start
*********************************************************************************/
.about-intro {
	padding: 60px 0px;
}
.about-intro img {
	max-width: 100%;
	padding: 5px;
	background: #f7f7f7;
}
.about-intro h2 {
	font-weight: 800;
	margin-top: 0px;
	letter-spacing: 1px;
}
.about-intro h4 {
	font-weight: bold;
	margin-bottom: 25px;
}
.about-intro p {
	line-height: 2;
}
.our-team .section-title {
	margin-bottom: 20px;
}
.our-team {
	padding: 60px 0px;
	background: #F19C4F;
	color: #fff;
}
.our-team img {
	max-width: 160px;
	border-radius: 50%;
}
.team-member {
	padding: 40px 20px;
	transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
}
.team-member:hover,
.team-member:hover a {
	background: #e6e6e6;
	color: #07253F;
}
.team-member:hover img {
	opacity: 1;
}
.team-member h4 {
	font-weight: bold;
	margin-top: 25px;
}
.team-member a {
	color: #fff;
	margin: 0px 5px;
	font-size: 25px;
	height: 40px;
	width: 40px;
	display: inline-block;
}
.team-member a:hover {
	color: #00adef;
}
.our-service {
	padding: 60px 0px;
}
.service-left .section-title {
	margin-bottom: 20px;
}
.service-left p {
	line-height: 2;
}
.service-right .service {
	position: relative;
	padding: 15px;
}
.service-right i {
	background: #f9676b none repeat scroll 0 0;
    border-radius: 50%;
    color: #fff;
    display: block;
    font-size: 24px;
    height: 50px;
    left: 45%;
    padding: 12px 10px;
    position: absolute;
    top: 15%;
    width: 50px;
    z-index: 2;
}
.service-desc {
	border: 1px solid #F2676B;
	padding: 30px 15px 15px;
	position: relative;
	margin-top: 45px;
}
.service-desc h5 {
	font-weight: 800;
	letter-spacing: 1px;
}
.service-desc p {
	line-height: 2;
}
.our-partner {
	padding: 60px 0px;
}
.our-partner img {
	max-width: 180px;
}
/*********************************************************************************
				31. user-profile.html CSS Start
*********************************************************************************/
.user-profile {
	padding: 60px 0px;
	background: #f7f7f7;
	overflow: hidden;
}
.user-profile-tabs {
	margin-bottom: 40px;
}
.user-profile-tabs  i {
	display: block;
	font-size: 24px;
	margin-bottom: 10px;
}
.user-profile-tabs .nav-tabs > li {
	float: none !important;
	border-bottom: 2px solid #0A3152;
	
}
.user-profile-tabs .nav-tabs > li a:hover {
	border: none;
	background: #F2676B;
}
.user-profile-tabs .nav-tabs > li > a {
    background: #07253F;
    border-radius: 0;
    color: #fff;
    font-weight: bold;
    line-height: 1.42857;
    padding: 20px 0;
	margin-right: 0px;
	border: none;
}
.user-profile .user-name h3 {
	margin: 0 0 15px;
}
.user-profile-tabs .nav-tabs > li.active > a,
.user-profile-tabs .nav-tabs > li.active > a:focus {
	background: #F2676B;
	color: #fff;
	border: none;
}
.user-profile .brief-info {
	overflow: hidden;
	background: #fff;
	box-shadow: 0px 0px 5px #e6e6e6;
	padding: 15px 15px 0px;
}
.user-profile .brief-info img {
	max-width: 100%;
	border-radius: 50%;
}
.user-profile .brief-info h5 i {
	margin-right: 10px;
	color: #F2676B;
}
.user-profile .brief-info h3 {
	margin-top: 0px;
}
.user-profile .brief-info-footer {
	background: #e6e6e6;
	margin:0px -15px;
	padding: 10px 15px;
}
.user-profile .brief-info-footer a {
	color: #07253F;
	margin-right: 10px;
	font-size: 13px;
}
.user-profile .brief-info-footer a:hover {
	color: #F2676B;
}
.user-profile .brief-info-footer a i {
	margin-right: 5px;
}
.most-recent-booking .field-entry .fa-star {
	color: #F19C4F;
	margin: 0px;
}
.most-recent-booking .field-entry {
	padding: 15px 15px;
	overflow: hidden;
	border-bottom: 1px solid #e6e6e6;
}
.most-recent-booking .field-entry p {
	margin: 0px;
}
.most-recent-booking .field-entry p i {
	margin: 0px 5px;
}
.most-recent-booking .field-entry a {
	color: #F2676B;
}
.confirmed {
	color: #009933;
}
.failed {
	color: #F2676B;
}
.most-recent-booking {
	box-shadow: 0px 0px 5px #e6e6e6;
	overflow: hidden;
	margin: 40px 0px;
	background: #fff;
}
.most-recent-booking h4,
.user-profile-offer h4,
.user-notification h4,
.user-personal-info h4,
.user-change-password h4,
.user-preference h4 {
	background: #e6e6e6;
	margin: 0px;
	padding: 15px;
}
.user-profile-offer {
	box-shadow: 0px 0px 5px #e6e6e6;
	overflow: hidden;
	background: #fff;
} 
.user-profile-offer .offer-body {
	padding: 15px 15px 0px;
	overflow: hidden;
}
.user-profile-offer .offer-body .offer-entry {
	overflow: hidden;
	margin-bottom: 20px;
}
.user-profile-offer .offer-left {
	color: #F2676B;
}
.user-profile-offer .offer-left p {
	font-size: 24px;
	font-weight: 600;
}
.user-profile-offer .offer-right p {
	line-height: 1.6;
}
.user-profile-offer .offer-right {
	border-left: 1px solid #e6e6e6;
}
.user-profile-offer .offer-entry a {
	color: #F2676B;
	font-weight: 600;
}
.user-notification {
	margin: 40px 0px;
	background: #fff;
}
.user-notification .notification-body {
	padding: 15px 15px 0px;
	overflow: hidden;
}
.notification-entry  p {
	margin: 0px;
	padding: 10px 0px;
	border-bottom: 1px solid #e6e6e6;
}
.notification-entry  p i {
	color: #fff;
	background: #F2676B;
	padding: 5px;
	margin-right: 5px;
}
.item-entry {
	overflow: hidden;
	margin: 40px 0px;
}
.item-entry span {
	background: #F2676B none repeat scroll 0 0;
    display: inline-block;
    font-weight: bold;
    padding: 8px 20px; 
	color: #fff;
}
.item-content {
	background: #fff;
	padding: 15px;
	overflow: hidden;
}
.item-content img {
	max-width: 100%;
}
.item-content h4 {
	margin-top: 0px;
	font-size: 16px;
	font-weight: 600;
}
.item-content h4  i {
	color: #F19C4F;
}
.item-content p {
	margin-bottom: 5px;
	line-height: 2;
}
.item-content .confirmed i,
.item-content .failed i {
	margin-right: 5px;
}
.item-content a {
	background: #f2676b none repeat scroll 0 0;
    color: #fff;
    display: inline-block;
    font-weight: 600;
    padding: 5px 15px;
}
.item-body {
	padding-bottom: 15px;
	overflow: hidden;
	border-bottom: 1px solid #e6e6e6;
}
.item-footer {
	padding-top: 10px;
}
.item-footer p {
	margin-bottom: 0px;
}
.item-footer a {
	display: inline-block;
	color: #f2676b;
	border: 2px solid #f2676b;
	background: transparent;
	margin-left: 30px;
}
.item-footer strong {
	margin: 0px 5px 0px 20px;;
}
.completed span {
	background: #e6e6e6;
	color: #07253F;
}
.user-personal-info,
.user-change-password,
.user-preference,
.card-entry,
.user-add-card {
	overflow: hidden;
	background: #fff;
	box-shadow: 0px 0px 5px #e6e6e6;
}
.user-info-body,
.change-password-body {
	padding: 20px 5px;
	overflow: hidden;
}
.user-personal-info label,
.user-change-password label,
.user-preference label {
	font-weight: normal;
}
.user-personal-info .form-control,
.user-change-password .form-control,
.user-preference .form-control {
	border-radius: 0px;
	margin-bottom: 15px;
	padding: 10px;
	height: 40px;
}
.user-personal-info textarea {
	height: auto !important;
}
.user-personal-info button,
.user-change-password button,
.user-preference button,
.user-add-card button,
.submit-complaint button {
	border: 0px;
	color: #fff;
	background: #00adef;
	padding: 10px 20px;
	margin-top: 20px;
	font-weight: bold;
}
.user-change-password button,
.user-preference button, 
.user-add-card button,
.submit-complaint button {
	margin-top: 5px;
}
.user-personal-info a {
	background: #F2676B;
	font-weight: bold;
	color: #fff;
	padding: 10px 20px;
	display: inline-block;
	margin-top: 20px;
}
.user-preference {
	margin: 40px 0px;
}
.user-preference .collapse {
	padding: 20px 5px;
	overflow: hidden;
}
.upload-pic {
	height: 30px;
}
.card-entry {
	padding: 15px;
	margin-bottom: 40px;
}
.card-entry .pull-right a {
	margin:0px 5px;
	color: #07253F;
	font-size: 20px;
}
.card-entry .pull-right a:hover {
	color: #F2676B;
}
.card-entry .card-type {
	overflow: hidden;
}
.card-entry .card-type h3 {
	margin-top: 0px;
}
.card-entry .card-type p {
	margin: 20px 0px 0px;
}
.primary-card span {
	color: #fff;
	background: #F2676B;
	display: block;
	padding: 5px 10px;
	margin-bottom: 10px;
}
.primary-card h3 {
	margin-top: 0px;
}
.user-add-card {
	padding: 15px;
}
.user-add-card .form-control {
	border-radius: 0px;
	height: 40px;
	padding: 10px;
	margin-bottom: 15px;
}
.recent-complaint h3 {
	margin: 30px 0px 40px;
	position: relative;
}
.recent-complaint h3:after {
	content: "";
	width: 100px;
	height: 3px;
	background: #F2676B;
	position: absolute;
	top: 115%;
	left: 0;
}
.recent-complaint .nav-tabs > li > a {
	font-size: 16px;
	color: #07253F;
}
.recent-complaint .tab-content {
	background: #ffffff;
	padding: 20px;
	border-left: 1px solid #e6e6e6;
	border-right: 1px solid #e6e6e6;
	border-bottom: 1px solid #e6e6e6;
}
.recent-complaint .tab-content a {
	color: #07253F;
}
.recent-complaint .tab-content a:hover {
	color: #00adef;
}
.recent-complaint .tab-content a span {
	font-weight: 600;
}
.recent-complaint .tab-content  p:nth-child(2n+1) {
    background: #f7f7f7 none repeat scroll 0 0;
    margin: 0;
    padding: 15px;
}
.recent-complaint .tab-content  p:nth-child(2n+0) {
    background: #e6e6e6 none repeat scroll 0 0;
    margin: 0;
    padding: 15px;
}
.submit-complaint {
	overflow: hidden;
	background: #ffffff;
	padding: 20px 5px;
}
.submit-complaint .form-control {
	border-radius: 0px;
	height: 40px;
	padding: 10px;
	margin-bottom: 20px;
}
.submit-complaint textarea {
	height: auto !important;
}
@media (max-width: 767px) {
	.item-content img {
		margin-bottom: 20px;
	}
}
/*********************************************************************************
				32. coming-soon.html CSS Start
*********************************************************************************/
.full-screen {
	height: 100%;
	width: 100%;
}
.coming-soon-wrapper {
	background: url('../images/bg-image2.jpg');
	background-size: cover;
	background-attachment: fixed;
	position: relative;
}
.coming-soon-wrapper .coming-soon {
	background: rgba(10, 49, 82, 0.8);
	position: relative;
	color: #fff;
}
.coming-soon-wrapper .centered-box {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	-o-transform: translate(-50%,-50%);
	-ms-transform: translate(-50%,-50%);
	-webkit-transform: translate(-50%,-50%);
	-moz-transform: translate(-50%,-50%);
}
.centered-box .logo {
	padding-bottom: 30px;
}
.centered-box .logo h2 {
	margin: 0px;
	font-weight: 800;
	letter-spacing: 1px;
}
.centered-box .launch-title h1 {
	letter-spacing: 1px;
	font-weight: bold;
	position: relative;
}
.centered-box .launch-title h1:after {
	content: "";
	width: 100px;
	height: 5px;
	background: #f9676b;
	position: absolute;
	top: 126%;
	left: 40%;
}
.centered-box .launch-title h1 span {
	border-bottom: 1px solid #fff;
	padding-bottom: 10px;
}
.centered-box .countdown-row {
	overflow: hidden;
}
.centered-box .countdown-section {
	width: 25%;
	float: left;
	display: block;
	margin-top: 30px;
	padding: 0px 50px;
}
.centered-box .countdown-amount {
	display: block;
	font-size: 70px;
	font-weight: 600;
}
.centered-box .subscribe	{
	overflow: hidden;
	clear: both;
	padding-top: 30px;
}
.centered-box .subscribe h3 {
	font-weight: 600;
	margin-bottom: 20px;
	color: #f9676b;
}
.centered-box .subscribe .form-control {
	height: 50px;
	padding: 10px;
	border-radius: 0px;
	border: none;
}
.centered-box .subscribe	button {
	height: 50px;
	border: 0px;
	background: #f9676b;
	color: #fff;
	padding: 10px;
	width: 100%;
}
.centered-box .subscribe	button:hover {
	background: #00adef;
} 
.centered-box .social-media {
	margin-top: 40px;
}
.centered-box .social-media ul {
	padding: 0px;
	list-style-type: none;
}
.centered-box .social-media li {
	display: inline-block;
	margin: 0px 10px;
	color: #f9676b;
	background: #fff;
	height: 30px;
	width: 30px;
	border-radius: 50%;
}
.centered-box .social-media li a {
	display: block;
	padding: 5px;
	color: #f9676b;
}
.centered-box .social-media li a:hover {
	color: #00adef;
}
.centered-box .copyright {
	margin-top: 20px;
	color: #e6e6e6;
}
@media (max-width: 767px) {
	.full-screen {
		height: auto;
	}
	.coming-soon-wrapper .centered-box {
		position: relative;
		top: 0;
		left: 0;
		transform: translate(0,0);
		-o-transform: translate(0,0);
		-ms-transform: translate(0,0);
		-webkit-transform: translate(0,0);
		-moz-transform: translate(0,0);
		padding: 60px 20px;
	}
	.coming-soon-wrapper .coming-soon {
		height: auto;
	}
	.centered-box .countdown-section {
		width: 25%;
		float: left;
		display: block;
		margin-top: 30px;
		padding: 0px;
	}
	.centered-box .countdown-amount {
		display: block;
		font-size: 40px;
		font-weight: 600;
	}
	.centered-box .launch-title h1:after {
		left: 35%;
	}
	.centered-box .launch-title h1 span {
		border: none;
	}
}
/*********************************************************************************
			33. 404.html CSS Start
*********************************************************************************/
.not-found {
	padding: 60px 0px;
	background: #f9676b;
	color: #fff;
}
.not-found .desc p,
.full-screen-404 p {
	font-size: 18px;
}
.not-found .desc a,
.full-screen-404 a {
	border: 2px solid #fff;
    color: #fff;
    display: inline-block;
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-top: 30px;
    padding: 10px 30px;
}
.not-found .desc a:hover,
.full-screen-404 a:hover {
	background: #07253F;
}
.not-found .desc a i,
.full-screen-404 a i {
	margin-right: 10px;
}
.large-para {
	font-weight: 800;
	font-size: 100px;
}
.large-para span {
	display: block;
}
/*********************************************************************************
			34. loading.html CSS Start
*********************************************************************************/
.loading-animation {
	position: relative;
	height: 100px;
	margin-top: 40px;
}
.loading-animation span  {
    border-radius: 50%;
    font-size: 50px;
    height: 100px;
    padding: 10px;
    width: 100px;
	display: block;
	position: absolute;
	left: 42%;
}
.loading-animation span:nth-child(1) {
	opacity: 0;
	-webkit-animation: loader 2s infinite;
	animation: loader 2s infinite;
	color: #fff;
	background: #f9676b;
}
.loading-animation span:nth-child(2) {
	-webkit-animation: loader 2s infinite 0.5s;
	animation: loader 2s infinite 0.5s;
	opacity: 0;
	color: #fff;
	background: #F19C4F;
}
.loading-animation span:nth-child(3) {
	animation: loader 2s infinite 1s;
	-webkit-animation: loader 2s infinite 1s;
	opacity: 0;
	color: #fff;
	background: #00adef;
}
.loading-animation span:nth-child(4) {
	animation: loader 2s infinite 1.5s;
	-webkit-animation: loader 2s infinite 1.5s;
	opacity: 0;
	color: #fff;
	background: #07253F;
}
@keyframes loader {
	0% {
		opacity: 1;
		-webkit-transform: rotateY(90deg);
		-o-transform: rotateY(90deg);
		-ms-transform: rotateY(90deg);
		-moz-transform: rotateY(90deg);
		transform: rotateY(90deg);
	}
	25% {
		opacity: 1;
		-webkit-transform: rotateY(180deg);
		-o-transform: rotateY(180deg);
		-moz-transform: rotateY(180deg);
		-ms-transform: rotateY(180deg);
		transform: rotateY(180deg);
	}
	26% {
		opacity: 0;
		-webkit-transform: rotateY(0deg);
		-o-transform: rotateY(0deg);
		-ms-transform: rotateY(0deg);
		-moz-transform: rotateY(0deg);
		transform: rotateY(0deg);
	}
	100% {
		opacity: 0;
		-webkit-transform: rotateY(90deg);
		-o-transform: rotateY(90deg);
		-ms-transform: rotateY(90deg);
		-moz-transform: rotateY(90deg);
		transform: rotateY(90deg);
	}
}
@-webkit-keyframes loader {
	0% {
		opacity: 1;
		-webkit-transform: rotateY(90deg);
		-o-transform: rotateY(90deg);
		-ms-transform: rotateY(90deg);
		-moz-transform: rotateY(90deg);
		transform: rotateY(90deg);
	}
	25% {
		opacity: 1;
		-webkit-transform: rotateY(180deg);
		-o-transform: rotateY(180deg);
		-moz-transform: rotateY(180deg);
		-ms-transform: rotateY(180deg);
		transform: rotateY(180deg);
	}
	26% {
		opacity: 0;
		-webkit-transform: rotateY(0deg);
		-o-transform: rotateY(0deg);
		-ms-transform: rotateY(0deg);
		-moz-transform: rotateY(0deg);
		transform: rotateY(0deg);
	}
	100% {
		opacity: 0;
		-webkit-transform: rotateY(90deg);
		-o-transform: rotateY(90deg);
		-ms-transform: rotateY(90deg);
		-moz-transform: rotateY(90deg);
		transform: rotateY(90deg);
	}
}
.search-title {
	padding: 60px 0px;
}
.search-title p {
	font-size: 20px;
	line-height: 2;
}
.search-title p span {
	color: #f9676b;
	font-weight: bold;
}
/*********************************************************************************
				35. hotel-index.html CSS Start
*********************************************************************************/
.room-check {
	background: rgba(255,255,255,0.9);
	max-width: 400px;
	margin: 100px auto;
}
.room-check .room-check-body {
	padding: 0px 25px 25px;
}
.room-check h4 {
	font-weight: 800;
	letter-spacing: 1px;
	margin: 0px 0px 20px;
	background: #f9676b;
	color: #fff;
	position: relative;
	padding: 20px 0px;
}
.room-check h4:after {
	 background: #f9676b none repeat scroll 0 0;
    border-radius: 50%;
    color: #fff;
    content: "\f046";
    font-family: FontAwesome;
    left: 45%;
    padding: 10px;
    position: absolute;
    top: 60%;
}
.room-check .input-group-addon {
	background: transparent none repeat scroll 0 0;
    border-bottom: 1px solid #b6b6b6;
    border-radius: 0;
    border-right: 1px solid #b6b6b6;
    border-top: 1px solid #b6b6b6;
    color: #f9676b;
}
.room-check label {
	margin-bottom: 10px;
}
.room-check .ui-spinner-up i,
.room-check .ui-spinner-down i {
	color: #f9676b;
	z-index: 999;
}
.room-check .form-control {
	border-radius: 0px;
	height: 40px;
	padding: 10px;
	background: transparent;
	border: 1px solid #b6b6b6;
}
.room-check .input-group {
	margin-bottom: 15px;
}	
.room-check .padding-right {
	padding: 0px 10px 0px 0px;
}
.room-check .padding-left {
	padding: 0px 0px 0px 10px;
}
.room-check .center-input {
	padding-left: 45%;
	z-index: 0;
}
.room-check button {
	background: #07253F none repeat scroll 0 0;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    margin-top: 10px;
    padding: 15px 40px;
	border: 2px solid transparent;
}
.room-check button:hover {
	border: 2px solid #07253F;
	background: transparent;
	color: #07253F;
}
#home-hotel-intro {
	background: #f7f7f7;
}
#home-hotel-intro img {
	max-width: 100%;
}
#home-hotel-intro .hotel-desc {
	padding: 60px 0px;
}
#home-hotel-intro .hotel-intro {
	padding: 0px 30px;
}
#home-hotel-intro .hotel-intro p {
	line-height: 2;
}
#home-hotel-intro .hotel-intro a {
	color: #fff;
	background: #f9676b;
	border: 2px solid transparent;
	display: inline-block;
	padding: 10px 20px;
	font-weight: bold;
	margin-top: 15px;
}
#home-hotel-intro .hotel-intro a:hover {
	color: #f9676b;
	background: transparent;
	border: 2px solid #f9676b;
}
#home-hotel-intro .hotel-intro a i {
	margin-left: 10px;
}
#home-hotel-intro .hotel-intro h2 {
	font-weight: 800;
	letter-spacing: 2px;
	margin-top: 0px;
}
#home-hotel-intro .hotel-intro h4 {
	font-weight: bold;
	margin-bottom: 20px;
}
.hotel-desc .map {
	background: #fff none repeat scroll 0 0;
    border: medium none;
    border-radius: 50%;
    box-shadow: 0 0 5px #e6e6e6;
    height: 350px;
    margin-bottom: 25px;
    padding: 10px;
    width: 350px;
}
.hotel-tagline {
	margin-top: 30%;
}
.hotel-tagline h3 {
	color: #fff;
	font-weight: bold;
	text-transform: uppercase;
}
.hotel-tagline h1 {
	color: #fff;
    font-size: 50px;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
}
#recent-blog {
	background: #f7f7f7;
}
#recent-blog .owl-controls {
	margin-top: 30px;
}
.post-alt i {
	margin: 0px 5px;
}
.post-desc {
	padding: 5px 0px;
}
.post-desc p {
	line-height: 2;
	font-size: 13px;
}
.post-title h5 {
	font-weight: bold;
	margin-top: 10px;
}
.post-title p {
	color: #f9676b;
}
#hotel-gallery #room-gallery {
	margin: 0px !important;
}
#hotel-gallery .hotel-gallery-img {
	background: #fff;
}
.hotel-gallery-desc {
	background: #07253F;
	padding: 60px;
}
.hotel-gallery-desc p {
	line-height: 2;
	color: #fff;
}
.flex-row {
	display: flex;
	display: -webkit-flex;
	display: -webkit-box;
	display: -ms-flex;
	display: -moz-flex;
	display: -ms-Flexbox;
}
.flex-row .flex-item {
	flex: 1 auto;
	-webkit-flex: 1 auto;
	-ms-flex: 1 auto;
	-moz-flex: 1 auto;
	-o-flex: 1 auto;
}
.flex-item img {
	max-width: 100%;
}

.flex-item .section-title {
	margin-bottom: 20px;
}
.flex-item p {
	line-height: 2;
}
.flex-item .flex-item-desc {
	padding: 10% 10% 0;
}
#hotel-gallery .section-title h2,
#hotel-gallery .section-title h4 {
	color: #f9676b;
}
.hotel-subscribe-row {
	padding: 60px 0px;
	background: #f7f7f7;
}
.hotel-subscribe-row .form-control {
	background: #fff;
	border-left: 1px solid #00adef;
	border-top: 1px solid #00adef;
	border-bottom: 1px solid #00adef;
	border-right: none;
	color: #07253F;
}
.sm-footer {
	padding: 60px 0px;
	background: #07253F;
	color: #BEC4C8;
}
.sm-footer h4 {
	margin: 0px 0px 20px;
	color: #f9676b;
	letter-spacing: 1px;
	font-weight: bold;
}
.sm-footer p {
	line-height: 2;
}
.sm-footer .footer-gallery img {
	width: 32%;
	margin: 0px;
	padding: 0px
}
.sm-footer .contact-box i {
	color: #f9676b;
	margin-right: 10px;
}
.sm-footer .footer-subscribe {
	margin: 0px;
}
.sm-footer .footer-subscribe .form-control {
	color: #fff;
	border-radius: 0px;
	height: 40px;
	padding: 10px;
	background: #0A3152;
	border: none;
}
.sm-footer .footer-subscribe button {
	background: #f9676b none repeat scroll 0 0;
    border: medium none;
    color: #fff;
    height: 40px;
    text-align: center;
    width: 100%;
}
.sm-footer .footer-about-box a {
	border: 2px solid #f9676b;
    color: #f9676b;
    display: inline-block;
    font-weight: bold;
    padding: 5px 10px;
}
.sm-footer .social-media {
	margin-top: 20px;
}
.sm-footer .social-media i {
    border-radius: 50%;
	background: #00adef;
	color: #fff;
    height: 30px;
    margin: 0 10px 0 0;
    padding: 9px;
    width: 30px;
}
.sm-footer .social-media i:hover {
	background: #f9676b;
}
.sm-footer-nav {
	background: #0A3152;
	padding: 30px 0px;
	position: relative;
}
.sm-footer-nav a {
	border-right: 1px solid #bec4c8;
    color: #bec4c8;
    font-size: 13px;
    padding: 0 10px;
}
.sm-footer-nav a:last-child {
	border-right: none;
}
.sm-footer-nav a:hover {
	color: #f9676b;
}
.sm-footer-nav .copyright {
	color: #fff;
	font-size: 12px;
	margin: 20px 0px 0px;
}
.go-up {
	position: absolute;
	top: 40%;
	right: 10%;
}
.go-up a {
	background: #07253F none repeat scroll 0 0;
    border-radius: 50%;
    display: inline-block;
    height: 30px;
    padding: 5px;
    width: 30px;
}
@media (max-width: 991px) {
	.sm-footer h4 {
		margin: 40px 0px 20px;
	}
}
@media (max-width:767px) {
	.flex-row {
		display: block;
	}
	.flex-row .flex-item {
		width: 100%;
	}
	.hotel-gallery-desc {
		padding: 30px 15px;
	}
	.flex-item .flex-item-desc {
		padding: 60px 15px;
	}
	.hotel-tagline h3 {
		font-size: 16px;
	}
	.hotel-tagline h1 {
		font-size: 20px
	}
}

/*********************************************************************************
				36. hotel-index-2.html CSS Start
*********************************************************************************/
.hotel2-slider #room-gallery {
	margin-top: 0px;
}
.hotel2-slider .carousel-caption {
	color: #fff;
	text-shadow: none;
	top: 30%;
}
.hotel2-slider .carousel-caption h2 {
	font-size: 50px;
    font-weight: 800;
    letter-spacing: 2px;
}
.hotel2-slider .carousel-caption h4 {
	text-transform: uppercase;
	font-weight: bold;
}
.hotel2-slider .carousel-caption a {
	display: inline-block;
	font-weight: bold;
	padding: 8px 20px;
	border: 2px solid #fff;
	color: #fff;
	margin-top: 15px;
}
.hotel2-slider .carousel-caption a:hover {
	border: 2px solid transparent;
	color: #fff;
	background: #f9676b;
}
.room-check-horizontal {
	padding: 60px 0px 80px;
	background: #07253F;
}
.room-check-horizontal label {
	color: #fff;
	margin: 20px 0px 10px;
}
.room-check-horizontal .form-control {
	height: 40px;
	border-radius: 0px;
	background: #0A3152;
	color: #fff;
	text-align: center;
	border: none;
}
.room-check-horizontal .input-group-addon {
	color: #fff;
	border-radius: 0px;
	background: #f9676b;
	border: none;
}
.room-check-horizontal .custom-select-button {
	border: none;
	background: #0A3152;
}
.room-check-horizontal .check-button {
	margin-top: 50px;
}
.room-check-horizontal .check-button button {
	color: #fff;
	background: #f9676b;
	font-weight: bold;
    height: 40px;
    width: 100%;
	border: none;
}
.room-check-horizontal .check-button button:hover {
	background: transparent none repeat scroll 0 0;
    border: 2px solid #f9676b;
    color: #f9676b;
}
#hotel-intro img {
	max-width: 100%;
}
#hotel-intro .hotel-desc {
	padding: 40px 60px 60px;
}
#hotel-intro .hotel-desc p {
	line-height: 2;
}
.page-title2 {
	background: url('../images/hotel-bg.jpg');
	padding: 60px 0px;
	background-attachment: fixed;
	color: #ffffff;
}
.hotel-team {
	background: #f7f7f7;
}
.hotel-service {
	background: #fff;
}
.our-partner {
	background: #f7f7f7;
}
.hotel-detail {
	padding: 60px 0px;
}
.hotel-detail .main-content {
	padding: 0 20px 0 0;
}
.hotel-detail-sidebar {
	padding: 0 0 0 20px;
}
.similar-room {
	padding: 60px 0px;
	background: #f7f7f7;
}
.similar-room h2 {
	font-weight: 800;
	letter-spacing: 2px;
	margin: 0px 0px 30px;
}
.similar-room .hotel-listing .room-grid-view {
	margin-top: 0px;
	background: #fff;
}
@media (max-width: 991px) {
	.hotel-detail .main-content {
		padding: 0 15px;
	}
}
@media (max-width: 767px) {
	.hotel2-slider .carousel-caption {
		top: 0%;
	}
	.hotel2-slider .carousel-caption h2 {
		font-size: 16px;
	}	
	.hotel2-slider .carousel-caption h4,
	.hotel2-slider .carousel-caption a {
		display: none;
	}
	.hotel2-slider .carousel-caption .wrapper {
		padding: 35px 0 5px;
	}
}
/*********************************************************************************
				37. holiday-index.html CSS Start
*********************************************************************************/
#top-tour-row {
	background: url('../images/pattern.jpg');
	background-attachment: fixed;
}
.room-check-horizontal .bootstrap-select.btn-group .dropdown-toggle .filter-option,
.room-check-horizontal .bootstrap-select.btn-group .dropdown-toggle .caret {
	color: #fff;
}
.top-tour {
	padding: 60px 0px 80px;
	background: rgba(10, 49, 82, 0.8);
	color: #fff;
}
.tour-grid {
	position: relative;
}
.tour-grid  img {
	max-width: 100%;
	position: relative;
}

.tour-grid .tour-brief {
	position: absolute;
	left: 0;
	bottom: 0;
	background: rgba(10, 49, 82, 0.8);
	width: 100%;
	padding: 15px;
	z-index: 4;
}
.tour-grid .tour-brief h4,
.tour-grid .tour-brief h4 {
	font-weight: 600;
}
.tour-grid .tour-brief h4 i {
	margin-right: 5px;
}
.tour-grid .tour-detail {
	background: rgba(0, 0, 0, 0.7) none repeat scroll 0 0;
    height: 100%;
    left: 0;
    padding-top: 10%;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1;
	opacity: 0;
	transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
}
.tour-grid .tour-detail i,
.tour-grid .tour-detail strong {
	margin-right: 5px;
}
.tour-grid .tour-detail a {
	border: 2px solid #fff;
    color: #fff;
    display: inline-block;
    font-weight: bold;
    margin-top: 15px;
    padding: 5px 20px;
}
.tour-grid .tour-detail a:hover {
	background: #f9676b;
	border: 2px solid transparent;
}
.tour-grid:hover .tour-detail {
	opacity: 1;
}
.tour-gallery p {
	color: #BEC4C8;
}
.tour-gallery p strong {
	font-size: 16px;
	color: #fff;
	margin-right: 5px;
}
.tour-gallery p i {
	margin-right: 7px;
	color: #00adef;
}
.tour-gallery .price h4 {
	color: #fff;
	font-weight: bold;
	margin-top: 7px;
}
.tour-gallery .price,
.tour-gallery .detail-link {
	margin-top: 30px;
}
.tour-gallery .detail-link a {
	border: 2px solid #fff;
    color: #fff;
    display: inline-block;
    font-weight: bold;
    padding: 7px 20px;
}
.tour-gallery .detail-link a:hover {
	color: #fff;
	background: #f9676b;
	border: 2px solid transparent;
}
#why-choose-us {
	background: url('../images/holiday-slide2.jpg');
	background-attachment: fixed;
}
.choose-us-row {
	padding: 60px 0px;
	background: rgba(10, 49, 82, 0.8);
}
.choose-us-item {
	background: #fff;
	padding: 60px 20px 45px;
	position: relative;
	margin: 60px 10px 20px;
}
.choose-icon {
	background: #00adef none repeat scroll 0 0;
    color: #fff;
    height: 60px;
    left: 43%;
    position: absolute;
    top: -10%;
    transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
    width: 60px;
}
.choose-icon i {
	font-size: 30px;
    padding: 15px;
    transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	-webkit-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
}
.choose-us-item h4 {
	font-weight: bold;
}
.choose-us-item p {
	line-height: 2;
}
.choose-us-item a {
	background: #f9676b;
    color: #fff;
    display: inline-block;
    font-weight: bold;
    margin-top: 15px;
    padding: 8px 15px;
	border: 2px solid transparent;
}
.choose-us-item a:hover {
	background: transparent;
	color: #f9676b;
	border: 2px solid #f9676b;
}
#customer-testimonial {
	padding: 60px 0px;
	background: #f7f7f7;
}
#review-customer {
	max-width: 800px;
	margin: 0 auto;
}
#review-customer .individual img {
	border: 5px solid #fff;
	width: 80px;
	height: 80px;
	border-radius: 50%;
	margin: 30px 0px;
}
#review-customer .individual .customer-word {
	padding: 30px 20px 35px;
	line-height: 2;
	background: #fff;
	position: relative;
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
	margin-bottom: 30px;
}
#review-customer .individual .customer-word:after {
	background: #fff none repeat scroll 0 0;
    border-bottom: 1px solid #e6e6e6;
    border-left: 1px solid #e6e6e6;
    content: "";
    height: 30px;
    left: -2.3%;
    position: absolute;
    top: 15%;
    width: 30px;
    transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
    width: 30px;
}
#review-customer .individual span {
	display: block;
}
#review-customer .individual span i {
	color: #F19C4F;
}
#review-customer .individual h5 {
	font-weight: bold;
}
@media (max-width: 767px) {
	.tour-grid .tour-detail {
		padding-top: 2%;
	}
}
/*********************************************************************************
			38. holiday-index-2.html CSS Start
*********************************************************************************/
.room-check .bootstrap-select > .dropdown-toggle {
	background: transparent none repeat scroll 0 0;
    border: 1px solid #b6b6b6;
    color: #333;
    font-weight: normal;
    height: 40px;
    margin: 0 0 15px;
    padding: 8px 10px;
}
.page-title3 {
	background: url('../images/bg-image12.jpg');
	background-attachment: fixed;
	background-size: contain;
}

/*********************************************************************************
			39. car-index.html CSS Start
*********************************************************************************/

.work-row {
	padding: 60px 0px;
	background: #fff;
	border-bottom: 1px solid #e6e6e6;
}
.work-step {
	position: relative;
	margin-bottom: 20px;
}
.work-step .first-step,
.work-step .second-step,
.work-step .third-step {
	position: relative;
}
.work-step .first-step:after {
	content: "";
	width: 50%;
	height: 2px;
	background: #f9676b;
	position: absolute;
	right: -20%;
	top: 20%
}
.work-step .second-step:after {
	content: "";
	width: 50%;
	height: 2px;
	background: #f9676b;
	position: absolute;
	right: -20%;
	top: 20%
}
.work-step .second-step:before {
	content: "";
	width: 50%;
	height: 2px;
	background: #f9676b;
	position: absolute;
	left: -20%;
	top: 20%
}
.work-step .third-step:before {
	content: "";
	width: 50%;
	height: 2px;
	background: #f9676b;
	position: absolute;
	left: -20%;
	top: 20%
}
.work-step i {
    border-radius: 50%;
	background: #f9676b;
    color: #fff;
    font-size: 34px;
    height: 80px;
    padding: 23px;
    width: 80px;
	position: relative;
}
.work-step h5 {
	font-weight: 800;
	margin: 30px 0px 10px;
	letter-spacing: 1px;
}
.work-step p {
	line-height: 2;
}
@media (max-width:767px) {
	.work-step .first-step,
	.work-step .second-step,
	.work-step .third-step {
		margin-top: 30px;
	}
	.work-step .third-step:before,
	.work-step .first-step:after,
	.work-step .second-step:before, 
	.work-step .second-step:after {
		display: none;
	}
}
/*********************************************************************************
			40. car-list.html CSS Start
*********************************************************************************/
.modify-car {
	background: url('../images/bg-image12.jpg');
	background-attachment: fixed;
	background-size: contain;
}
.car-detail {
	padding-bottom: 4px;
}
.car-detail i {
	margin-right: 10px;
	color: #f9676b;
}
@media (max-width: 991px) {
	.modify-car {
		background-size: cover;
	}
}
/*********************************************************************************
			41. car-detailed.html CSS Start
*********************************************************************************/
.tab-heading {
	margin-top: 20px !important;
	text-transform: uppercase;
	font-weight: bold;
}
.check-list {
	padding: 0px;
	list-style-type: none;
}
.check-list li {
	margin-left: 20px;
    padding: 5px 0;
    position: relative;
}
.check-list li:before {
	content: '\f058';
	color: #008000;
	position: absolute;
	font-family: 'FontAwesome';
	left: -20px;
}
.car-overview {
	background: #f7f7f7 none repeat scroll 0 0;
    border-bottom: 1px solid #e6e6e6;
    border-right: 1px solid #e6e6e6;
    border-top: 1px solid #e6e6e6;
    padding: 20px 15px;
    text-align: center;
	margin-top: 15px;
}
.car-overview:first-child {
	border-left: 1px solid #e6e6e6;
}
.car-overview i {
	color: #f9676b;
    display: block;
    font-size: 24px;
    padding-bottom: 10px;
}
.add-ons ul,
.rent-detail ul {
	list-style-type: none;
	padding: 0px;
}
.add-ons ul li,
.rent-detail ul li {
	padding: 5px 0px;
}
.add-ons input {
	margin-right: 5px;
}
.duration-sm {
	font-size: 13px;
	padding: 0px 0px 5px !important;
}
.rental-total {
	border-top: 1px solid #e6e6e6;
	font-weight: bold;
	padding: 10px 0px 0px !important;
}
.rent-box {
	margin: 30px 0px;
	padding: 40px 0px;
	background: #f7f7f7;
}
.add-ons {
	padding: 0px 30px;
	border-right: 1px solid #e6e6e6;
}
.rent-detail {
	padding: 0px 30px;
}
.reserve-car a {
	color: #fff;
	border: 2px solid transparent;
	background: #f9676b;
	padding: 10px 40px;
	display: inline-block;
	margin-top: 40px;
	font-weight: bold;
}
.reserve-car a:hover {
	color: #f9676b;
	border: 2px solid #f9676b;
	background: transparent;
}
.clear-top {
	margin-top: 0px !important;
}

/*********************************************************************************
			42. car-detailed-2.html CSS Start
*********************************************************************************/

.flex-direction-nav a::before {
	content: "\f104";
	font-family: "FontAwesome";
	color: #fff;
}
.flex-direction-nav a.flex-next::before {
	content: "\f105";
	font-family: "FontAwesome";
	color: #fff;
}
.flexslider {
	margin: 0px;
	border: none;
}
.flexslider .slides img {
	opacity: 0.8;
}
.flex-active-slide img {
	opacity: 1 !important;
}
.product-brief-info {
	box-shadow: 0px 0px 5px #e6e6e6;
	border: 1px solid #e6e6e6;
	overflow: hidden;
}
.product-brief-info .flexslider {
	max-height: 450px;
}
.product-brief-info .detail h4 {
	background: #e6e6e6 none repeat scroll 0 0;
    font-weight: bold;
    margin: 0;
    padding: 20px 30px;
    text-transform: uppercase;
	letter-spacing: 1px;
}
.product-brief-info .detail h4 i {
	color: #f9676b;
	margin-right: 5px;
}
.product-brief-info .detail .sidebar-item-body {
	padding: 20px;
}
.product-brief-info .detail-body {
	padding: 15px 30px 26px;
}
.product-brief-info .detail-body ul {
	padding: 0px;
	list-style-type: none;
	margin-bottom: 0px;
}
.product-brief-info .detail-body ul li {
	padding: 10px 0px;
	border-bottom: 1px dashed #e6e6e6;
}
.product-brief-info .detail-body ul li:before {
	content: "\f058";
	font-family: "FontAwesome";
	margin-right: 10px;
	color: #f9676b;
}
.product-brief-info .price-detail {
	background: #07253F;
	overflow: hidden;
	color: #fff;
	padding: 30px 0px;
}
.product-brief-info .price-detail h3 {
	margin: 10px 0 0;
	font-weight: bold;
}
.product-brief-info .price-detail h3 span {
	font-size: 14px;
}
.product-brief-info .price-detail a {
	display: inline-block;
	border: 2px solid #fff;
	padding: 10px 20px;
	color: #fff;
	font-weight: bold;
}
.product-brief-info .price-detail a:hover {
	color: #f9676b;
	border: 2px solid #f9676b;
}
.product-brief-info .price-detail a i {
	margin-right: 5px;
}
.product-complete-info {
	padding: 0px 0px 60px;
}
.product-complete-info .room-complete-detail {
	margin: 0px;
}
.product-complete-info .tab-content {
	border: none !important;
	box-shadow: none !important;
}
.product-complete-info .nav-tabs > li.active > a, 
.product-complete-info .nav-tabs > li.active > a:focus, 
.product-complete-info .nav-tabs > li.active > a:hover {
	border: none !important;
	position: relative;
}
.product-complete-info .nav-tabs .active:after {
	content: "";
	height: 5px;
	width: 50px;
	position: absolute;
	background: #F9676b;
	left: 40%;
}
.product-complete-info .nav-tabs > li > a {
	background: transparent none repeat scroll 0 0 !important;
    color: #273a48;
    font-weight: bold;
    text-transform: uppercase;
}
.product-complete-info .nav-tabs {
	border-bottom: 2px solid #e6e6e6;
} 
.page-title4 {
	background: url('../images/bg-image4.jpg');
	background-attachment: fixed;
}
.product-complete-info .main-content {
	padding: 0 20px 0 0;
}
.product-complete-info img {
	max-width: 100%;
}
.product-complete-info .custom-tabs .nav > li > a {
	padding: 10px 0px
}
.product-complete-info .custom-tabs .nav > li > a i {
	display: block;
	margin-bottom: 5px;
}
.product-complete-info .custom-tabs .active:after {
	left: 28% !important;
}
@media (max-width: 991px) {
	.product-complete-info .main-content {
		padding: 0 15px;
	}
	.hotel-detail-sidebar {
		padding: 0 15px;
	}
}

/********************************************************************
			43. Main Footer CSS STARTS
*********************************************************************/
.main-footer-sub {
	padding: 45px 0px;
	background: #0A3152;
	color: #fff;
}
.main-footer-sub label {
	margin-bottom: 10px;
}
.main-footer-sub .form-control {
	background: #07253F;
	border-radius: 0;
	height: 40px;
	color: #fff;
	border: none;
}
.main-footer-sub button {
	height: 40px;
	border: none;
	background: #f9676b;
	color: #fff;
	width: 100%;
	font-weight: bold;
}
.main-footer-sub button i {
	margin-right: 5px;
}
.main-footer-sub button:hover {
	background: #00adef;
}
.main-footer-sub .social-media ul {
	padding: 0px;
	list-style-type: none;
}
.main-footer-sub .social-media ul li {
	display: inline;
}
.main-footer-sub .social-media li a {
	background: #f9676b none repeat scroll 0 0;
    border-radius: 50%;
    color: #fff;
    display: inline-block;
    height: 40px;
    margin: 30px 5px 0;
    padding: 10px 13px;
    width: 40px;
}
.main-footer-sub .social-media li a:hover {
	background: #00adef;
}
.main-footer-sub .social-media li a i {
	font-size: 16px;
}
.main-footer {
	padding: 60px 0px;
	background: #07253F;
}
.main-footer .about-box {
	color: #BEC4C8;
	line-height: 2;
}
.main-footer .about-box h3 {
	font-weight: 800;
	margin-top: 0px;
	color: #f9676b;
	margin-bottom: 15px;
	letter-spacing: 1px;
}
.main-footer .about-box a {
	display: inline-block;
	padding: 2px 15px;
	color: #f9676b;
	border: 2px solid #f9676b;
	font-weight: bold;
}
.main-footer .links {
	line-height: 2;
}
.main-footer .links ul,
.we-accept ul,
.main-footer-nav ul {
	list-style-type: none;
	padding: 0px;
}
.main-footer .links h4,
.main-footer .contact-box h4, 
.we-accept h4 {
	color: #f9676b;
	margin-top: 0px;
	text-transform: uppercase;
	font-weight: 800;
	margin-bottom: 15px;
	letter-spacing: 1px;
}
.main-footer .links ul li {
	position: relative;
}
.main-footer .links ul li a,
.main-footer-nav ul li a {
	color: #BEC4C8;
	margin-left: 15px;
}
.main-footer .links ul li a:hover,
.main-footer-nav ul li a:hover {
	color: #f9676b;
}
.main-footer .links ul li:before {
	content: "\f105";
	position: absolute;
	font-family: "FontAwesome";
	color: #BEC4C8;
}
.main-footer .contact-box p {
	color: #BEC4C8;
	line-height: 2;
}
.main-footer .contact-box p i {
	border: 2px solid #bec4c8;
    border-radius: 50%;
    color: #f9676b;
    display: inline-block;
    height: 40px;
    margin-right: 10px;
    margin-top: 10px;
    padding: 10px 11px;
    width: 40px;
}
.we-accept {
	padding: 30px 0px 0px;
}
.we-accept ul li,
.main-footer-nav ul li {
	display: inline;
	margin: 0px 5px;
}
.main-footer-nav {
	padding: 30px 0px;
	background: #0A3152;
	color: #BEC4C8;
	position: relative;
}
.main-footer-nav p,
.main-footer-nav ul {
	margin-bottom: 0px;
}
.main-footer-nav .go-up a {
	color: #BEC4C8;
	padding: 5px 8px;
}
@media (max-width:767px) {
	.main-footer .links h4,
	.main-footer .contact-box h4, 
	.we-accept h4 {
		margin-top: 45px;
	}
	.main-footer-nav ul li {
		margin: 15px 5px;
		display: inline-block;
	}
}
/*********************************************************************************
			44. gallery.html CSS Start
*********************************************************************************/
.gallery-row {
	padding: 30px 0px 60px;
}
.image-set img {
	max-width: 100%;
	position: relative;
	transition: all 0.5s;
	-ms-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-o-transition: all 0.5 ease;
	-webkit-transition: all 0.5 ease;
}
.image-set .img-caption {
	background: rgba(10, 49, 82, 0.5);
	position: absolute;
	height: 100%;
	width: 100%;
	top: 0;
	opacity: 0;
}
.image-set .image-wrapper {
	position: relative;
	overflow: hidden;
	margin-top: 30px;
}
.image-set .link {
	left: 45%;
    position: absolute;
    top: 40%;
	opacity: 0;
}
.image-set .link a {
	background: #f9676b none repeat scroll 0 0;
    border-radius: 50%;
    color: #fff;
    display: inline-block;
    font-size: 18px;
    height: 30px;
    padding: 3px 7px;
    width: 30px;
	opacity: 0;
}
.image-set .image-wrapper:hover .img-caption {
	opacity: 1;
}
.image-set .image-wrapper:hover .link a {
	opacity: 1;
}
.image-set .image-wrapper:hover .link {
	opacity: 1;
}
.image-set .image-wrapper:hover img {
	transform: scale(1.5);
	-webkit-transform: scale(1.5);
	-o-transform: scale(1.5);
	-ms-transform: scale(1.5);
	-moz-transform: scale(1.5);
}

/*********************************************************************************
		45. login.html CSS Start
*********************************************************************************/
.login-row {
	padding: 60px 0px;
}
.useful-links h4,
.login-form h4,
.sign-up-form h4 {
	font-weight: 800;
	text-transform: uppercase;
	color: #f9676b;
	margin-bottom: 20px;
}
.useful-links {
	border-right: 1px solid #e6e6e6;
	line-height: 2;
}
.useful-links a {
	display: block;
	color: #07253F;
}
.useful-links a:hover {
	color: #f9676b;
}
.login-form ,
.sign-up-form {
	padding-left: 45px;
}
.login-form  label,
.sign-up-form label {
	font-weight: normal;
}
.login-form .form-control ,
.sign-up-form .form-control {
	border-radius: 0;
	height: 40px;
	padding: 10px;
}
.login-form .input-group ,
.sign-up-form .input-group {
	margin-bottom: 15px;
}
.login-form .input-group-addon,
.sign-up-form .input-group-addon {
	border-radius: 0;
	height: 40px;
	background: #e6e6e6;
}
.login-form button,
.sign-up-form button {
	background: #f9676b none repeat scroll 0 0;
    border: medium none;
    border-radius: 0;
    color: #fff;
    display: block;
    font-weight: bold;
    margin-top: 30px;
    padding: 10px 30px;
}
.login-form button:hover,
.sign-up-form button:hover {
	background: #00adef;
}
.login-form button i,
.sign-up-form button i  {
	margin-left: 5px;
}
@media (max-width: 767px) {
	.login-form ,
	.sign-up-form {
		padding: 0 15px;
		margin-top: 45px;
	}
}
/*********************************************************************************
		46. typography.html CSS Start
*********************************************************************************/
.misc-row {
	padding: 60px 0px;
}
.misc-row p {
	line-height: 2;
}
.misc-row h1,
.misc-row h2,
.misc-row h3,
.misc-row h4,
.misc-row h5,
.misc-row h6 {
	font-weight: bold;
}
.quote-para {
	position: relative;
}
.quote-para:before {
	content: "\f10d";
	font-family: "FontAwesome";
	position: relative;
	padding-right: 10px;
}
.quote-para:after {
	content: "\f10e";
	font-family: "FontAwesome";
	position: relative;
	padding-left: 10px;
}
.element-tab .tab-content {
	padding: 15px;
}
.element-tab .nav-tabs > li > a {
	border-radius: 0;
	border: none;
	color: #07253F;
}
.element-tab .nav-tabs > li > a:hover {
	color: #f9676b;
}
.element-tab .nav > li > a:hover,
.element-tab .nav > li > a:focus {
	background-color: transparent;
	border: none;
} 
.element-tab .tab-style1 {
	border: none;
}
.element-tab .tab-style1 .active,
.element-tab .tab-style1 .active a {
	background: #f9676b;
	color: #fff;
	position: relative;
}
.element-tab .tab-style1 .active:after {
	background: #f9676b none repeat scroll 0 0;
    content: "";
    height: 15px;
    left: 40%;
    position: absolute;
    top: 80%;
    transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
    width: 15px;
}
.tab-style1  > li.active > a, 
.tab-style1  > li.active > a:focus,
.tab-style1  > li.active > a:hover {
	color: #fff;
}
.element-tab .tab-style2 {
	border-bottom: 2px solid #e6e6e6;
}
.element-tab .tab-style2 .active,
.element-tab .tab-style2 .active a {
	position: relative;
	color: #f9676b;
}
.element-tab .tab-style2 .active:after {
	background: #f9676b none repeat scroll 0 0;
    content: "";
    height: 5px;
    left: 30%;
    position: absolute;
    top: 95%;
    width: 25px;
}
.element-tab .nav-tabs > li {
	margin-bottom: 0;
}
.btn1 {
	margin: 30px 0px;
}
.btn1 button {
	margin: 10px 5px;
}
.cbtn {
	background: #f9676b none repeat scroll 0 0;
    border: medium none;
    border-radius: 0;
    color: #fff;
    font-weight: bold;
	transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
}
.cbtn:hover {
	background: #00adef;
}
.lg-btn {
	font-size: 20px;
	padding: 10px 30px;
}
.md-btn {
	font-size: 18px;
	padding: 8px 30px;
}
.sm-btn {
	font-size: 16px;
	padding: 6px 30px;
}
.xs-btn {
	font-size: 14px;
	padding: 4px 30px;
}
.gbtn {
	background: transparent;
    border: 2px solid #f9676b;
    border-radius: 0;
	color: #f9676b;
    font-weight: bold;
	transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
}
.gbtn:hover {
	background: #f9676b;
	color: #fff;
}
.element-accordian .panel-default > .panel-heading {
	padding: 15px;
}
.element-ol,
.element-ul {
	padding: 0px;
}
.element-ol li ,
.element-ul li {
	margin: 10px 0px;
	line-height: 2;
}

/*********************************************************************************
			47. cruise-detail.html CSS Start
*********************************************************************************/
.product-complete-info .cruise-tabs .active:after {
	left: 35% !important;
}
#cabin .inclusion-body {
	padding: 20px 20px 0px;
}
#cabin .inclusion-body h5 a {
	background: #f2676b none repeat scroll 0 0;
    color: #fff;
    display: inline-block;
    margin-left: 10px;
    padding: 8px 10px;
}
#cabin .inclusion-body h5 a:hover {
	background: #00adef;
}



/************************************************************************************
		48. LIST VIEW AND GRID VIEW SWITCH
*************************************************************************************/
.product-grid-view {
	overflow: hidden;
	width: 33.33%;
	float: left;
	padding: 0px 15px;
}
.product-grid-view .wrapper {
	margin: 40px 0px 0px;
	border: 1px solid #e6e6e6;
	box-shadow: 0px 0px 5px #e6e6e6;
	overflow: hidden;
}
.product-grid-view .tripadvisor-rating {
	display: block;
}
.product-grid-view:hover .wrapper {
	border: 1px solid #F19C4F;
	box-shadow: 0px 0px 5px #F19C4F;
}
.product-grid-view  img{
	max-width: 100%;
	min-height: 200px;
}
.product-grid-view .switch-img {
	width: 100%;
}
.product-grid-view .hotel-info {
	width: 100%;
	text-align: center;
}
.product-grid-view .rating-price-box {
	width: 100%;
}
.product-grid-view .tripadvisor-rating {
	float: left;
}
.product-grid-view .tripadvisor-rating span {
	display: block;
}
.product-grid-view .user-rating {
	float: right;
}
.product-grid-view .hotel-header h5 {
	font-weight: 700;
	line-height: 1.6;
	font-size: 16px;
	margin-top: 15px;
}
.product-grid-view .hotel-header h5 span {
	display: block;
}
.product-grid-view .hotel-header i {
	color: #F19C4F;
	margin: 0px 2px;
}
.product-grid-view .hotel-header p {
	color: #00ADEF;
	line-height: 1.6;
}
.product-grid-view .hotel-header p  i {
	margin: 0 5px;
	color: #00ADEF;
}
.product-grid-view .hotel-facility  i{
	border: 1px solid #bec4c8;
    border-radius: 50%;
    color: #bec4c8;
    font-size: 14px;
    height: 30px;
    margin: 5px;
    padding: 7px;
    width: 30px;
}
.product-grid-view .hotel-facility p {
	margin-bottom: 5px;
}
.product-grid-view .hotel-desc p {
	font-size: 13px;
	color: #0A3152;
	line-height: 1.7;
}
.product-grid-view .rating-box {
	padding: 0px 15px;
	min-height: initial;
	overflow: hidden;
}
.product-grid-view .rating-box img {
	margin: 0px;
}
.product-grid-view .rating-box .tripadvisor-rating {
	margin: 0px;
}
.product-grid-view .rating-box  img{
	min-height: initial;
}
.product-grid-view .rating-box span  {
	font-weight: normal;
}
.product-grid-view .rating-box .user-rating span {
	display: block;
}
.product-grid-view .room-book-box {
	border-top: 1px solid #e6e6e6;
    margin-top: 15px;
    min-height: initial;
    overflow: hidden;
    padding: 0;
	clear: both;
}
.product-grid-view .room-book-box .price {
	width: 60%;
	float: left;
	padding: 15px 0px;
	border-right: 1px solid #e6e6e6;
}
.product-grid-view .room-book-box .price h5 {
	font-size: 16px;
	font-weight: 700;
}
.product-grid-view .room-book-box .book  {
	float: left;
    padding: 10px 0;
    width: 40%;
}
.product-grid-view .room-book-box .book a {
	background: #f2676b;
	color: #ffffff;
    font-weight: bold;
    padding: 5px 15px;
	display: inline-block;
	margin-top: 5px;
	border: 2px solid transparent;
}
.product-grid-view:hover .room-book-box {
	color: #ffffff;
	background: #00ADEF;
}
.product-grid-view:hover .room-book-box a{
	color: #ffffff;
	border: 2px solid #ffffff;
	background: #00ADEF;
}
.view-switcher {
	margin-top: 40px;
}
.view-switcher a {
	cursor: pointer;
    display: inline-block;
    font-size: 20px;
    padding: 5px;
	color: #00adef;
}
.view-switcher a:hover {
	color: #f9676b;
}
.product-grid-view .car-item .rating-box {
	display: none;
}
@media (max-width: 991px) {
	.product-grid-view img{
		min-height: initial;
	}
	.product-grid-view  {
		width: 50%;
	}
}
@media (max-width: 767px) {
	.product-grid-view  {
		width: 100%;
	}
}

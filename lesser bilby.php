<?php 
// 88                                                       88          88 88 88     
// 88                                                       88          "" 88 88  
// 88                                                       88             88 88 
// 88  ,adPPYba, ,adPPYba, ,adPPYba,  ,adPPYba, 8b,dPPYba,  88,dPPYba,  88 88 88,dPPYba,  8b       d8 
// 88 a8P_____88 I8[    "" I8[    "" a8P_____88 88P'   "Y8  88P'    "8a 88 88 88P'    "8a `8b     d8' 
// 88 8PP"""""""  `"Y8ba,   `"Y8ba,  8PP""""""" 88          88       d8 88 88 88       d8  `8b   d8'
// 88 "8b,   ,aa aa    ]8I aa    ]8I "8b,   ,aa 88          88b,   ,a8" 88 88 88b,   ,a8"   `8b,d8' 
// 88  `"Ybbd8"' `"YbbdP"' `"YbbdP"'  `"Ybbd8"' 88          8Y"Ybbd8"'  88 88 8Y"Ybbd8"'      Y88' 
//															 								  d8' 
//															 								 d8'       
//
//       /)  / )          ___
//      // // /    ___--""    "-.		//never forget
//  \ |,"( /`--""              `.    
//   \/ o                        \					//too soon
//   (   _.-.              ,'"    ;  
//    |\"   /`. \  ,      /       |			//extinct boi
//    | \  ' .'`.; |      |       \.______________________________
//      _-'.'    | |--..,,,\_    \________------------""""""""""""
//     ,,''"   _-'.'       ___"-   )
//           ,,'"        ,,'''---~"
//

//fonts
// url('../fonts/
echo "


";

//header
echo "

.ContentWrapper {
	padding:0;
}


.navbar-fixed-top-desktop {
	position:fixed;
	width:100%;
	top:0;
	z-index:1030;
}

";

//supernav
echo "

.supernav {
	position:absolute;
	top:0;
	width:100%;
	height:$supernavheight;
	line-height:$supernavheight;
	background:$black;
	z-index:300;
}

.supernav .anchSuperNav {
	color:$gray;
	$transparent;
}

.supernav .anchSuperNav:hover,
.supernav .anchSuperNav.current {
	color:$truewhite;
	$transparent;
}

.supernav .divBannerContactInfo {
	display:inline-block;	
	float:right;
}

.supernav .divSuperNavSocial {
	display:inline-block;
	float:right;
}

.divContactWrapper a,
.divContactWrapper p,
.supernav .divContactEmail {
	float:right;
	display:inline-block;
	margin:0 7.5px;
	color:$truewhite;
	$transition;
}

.divContactWrapper a:hover,
.divContactWrapper p:hover,
.supernav .divContactEmail:hover {
	$cleanlink;
	color:$blue;
}

.supernav .divContactEmail {
	margin:0;
}

.supernav .social-div .social-networking a {
	color:$gray;
	$transition;
}

.supernav .social-div .social-networking a:hover {
	color:$truewhite;
}


.supernav .divSuperNavPageLinks {
	display:inline-block;	
	float:right;	
}

";


//navigation
echo "

.navcontainer {
	position:absolute;
	top:$supernavheight;	
	width:100%;
	height:$navheight;
	line-height:$navheight;	
	background:$truewhite;
	z-index:300;		
	$boxshadow;
	border:none;
}

.anchLogoLink {
	display:inline-block;
	width:auto;
	margin-top:0px;
}

.anchLogoLink h1,
.headerInBanner.centeredLogo {
	margin:0;
}

.anchLogoLink img {
	max-width:100%;
	width:auto;
}

#navbar {
	float:right;
	padding:0;
}

#navbar.fullWidth {
	padding:0;
}

#navbar .anchMainNav {
	display:inline-block;
	float:left;
	$font1;
	$normal;
	font-size:18px;
	padding:0 12px;
	height:$navheight;
	line-height:$navheight;
	color:$blue;
	$transparent;
	$cleanlink;
	$transition;
}


#navbar .anchMainNav.first {
	padding-left:0;
}

#navbar .anchMainNav.last {
	padding-right:0;
}


#navbar .anchMainNav:hover,
#navbar .anchMainNav.current,
#navbar .divAnchDDLWrapper .anchMainNav.current,
#navbar .dropdown.tablet.current .btn-default,
#navbar .divAnchDDLWrapper:hover .anchMainNav {
	color:$black;
	$transparent;
}

";

//content-div //content //general
echo "
/*
@media (min-width:1200px) {
	.supernav > .container,
	.navcontainer > .container,
	.topFooter > .container,
	.bottomFooter > .container,
	.divMainCalloutWrapper > .container,
	.divMiniCalloutRow.container,
	.container.content-div-site,
	.textholder.container {
		width:100%;
		max-width:1420px;
		padding:0 50px;
	}
}
*/

.noPadding,
.no-padding,
.nopadding {
	padding:0;
}

#main .divPageHeaderWrapper {
	background:$blue;
	height:$headerheight;
	margin-top:$headerheight;
	$center;
}

#main .divPageHeaderWrapper .PageHeaderInner {
	height:100%;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-content: center;
    -ms-flex-line-pack: center;
    align-content: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;	
}

#main h2.pagelabelheader {
	$font1;
	font-size:48px;
	color:$truewhite;
	line-height:1;
}

.content-div h1,
.content-div h2 {
	$font1;
	font-size:40px;
	color:$black;	
}

.content-div h3 {
	$font2;
	font-size:30px;
	color:$blue;	
}

.content-div table,
.content-div td,
.content-div li,
.content-div p {
	$font2;
	font-size:16px;
	color:$black;	
}

.content-div h1 a,
.content-div h2 a,
.content-div h3 a {
	$cleanlink;
	$italic;	
	color:$red;
	border-bottom:1px solid transparent;
	$transition;
}

.content-div h1 a:hover,
.content-div h2 a:hover,
.content-div h3 a:hover {
	$cleanlink;
	color:$red;
	border-bottom:1px solid $red;	
}

.content-div table a,
.content-div li a,
.content-div p a {
	$cleanlink;
	$italic;	
	color:$red;	
	border-bottom:1px solid transparent;	
	$transition;
}

.content-div table a:hover,
.content-div li a:hover,
.content-div p a:hover {
	$cleanlink;
	color:$red;	
	border-bottom:1px solid $red;		
}

.content-div p img {
	width:auto !important;
	height:auto !important;
	max-width:100% !important;
}

/* //sidemenu //categories //subcategories */

.divSideMenu {
	border:none;
	margin-bottom:20px;
}

.divSideMenu a.sidemenu-category {
	$font1;
	color:$gray;
	line-height:1.5;
	padding:10px 0;
	border-bottom:1px solid $lightgray;
}

.divSideMenu a.sidemenu-category:hover {
	color:$blue;
}

.divSideMenu a.sidemenu-category.current,
.divSideMenu a.sidemenu-category.current:hover {
	color:$truewhite;
	background:$blue;
	border-bottom:1px solid $blue;
}

.divSideMenu a.sidemenu-subcategory {
	$font2;
	border:none;
	$transparent;
	color:$gray;
	padding-left:0;
}

.divSideMenu a.sidemenu-subcategory:hover {
	color:$red;
}

.divSideMenu a.sidemenu-subcategory.current,
.divSideMenu a.sidemenu-subcategory.current:hover {
	padding-left:6px;
	color:$red;
}

";

//footer
echo "

footer {
	background:$gray;
	color:$truewhite;
}

.topFooter {
	height:30px;
	line-height:30px;
	background:$black;
}

.topFooter-right 	{float:right;}
.topFooter-left 	{float:left;}

.footerLogo {
	$center;
}

.footerLogo img {
	max-width:100%;
}

.bottomFooter-left .contactAddress {
	float:left;
}

.bottomFooter-left .contactAddress span {
	margin-right:5px;
	float:left;
}

.bottomFooter-left .contactAddress span:first-child {
	display:block;
	width:100%;
}

.divFooterNavSocial, 
.divFooterNavSocial #social-networking,
.divFooterNavSocial .social-div,
.divFooterNavSocial .social-div .social-networking,
.divFooterNavSocial .social-div .social-networking li,
.divFooterNavSocial .social-div .social-networking li a {
	height:55px;
	line-height:55px;
}

.divFooterNavSocial .social-div .social-networking a {
	font-size:36px;
	color:$darkblue;
}

.divFooterNavSocial .social-div .social-networking a:hover {
	color:$blue;
}

.footerNav {
	text-align:right;
}

.footerNav a {
	$font2;
	$normal;
	font-style:normal;
	font-size:18px;
	padding:0 8px;
	color:$truewhite;
	$transition;
}

.footerNav a.first {
	padding-left:0;
}

.footerNav a.last {
	padding-right:0;
}

.footerNav a:hover,
.footerNav a.current {
	color:$blue;
	$cleanlink;
}

footer p.contactAddress,
footer p.contactAddress span:first-of-type {
	display:block;
	clear:both;
}

footer p.contactAddress .spanContactCity,
footer p.contactAddress .spanContactState,
footer p.contactAddress .spanContactZip {
	display:inline-block;
	margin:0 3px;
}

footer p.contactAddress .spanContactCity {
	margin-left:0;
}

footer p.contactAddress .spanContactCity:after {
	position:relative;
	display:inline-block;
	content:\",\";
	font-size:inherit;
	right:0;
}

.divContactWrapperFooter,
.divContactWrapperFooter a,
.divContactWrapperFooter p {
	color:$darkblue;
}

.divContactWrapperFooter a:hover {
	$transition;
}

.divContactWrapperFooter a:hover {
	color:$black;
	$cleanlink;
}

.lww {
	$font1;
	$center;
	color:$black;
	padding:15px 0;
}

p.CopyrightContainer,
p.CopyrightContainer a {
	$font1;
	color:$black;	
	$transition;
	$cleanlink;
}

p.CopyrightContainer a:hover {
	$cleanlink;
	color:$green;
}

a.anchBackToTop {
	background:$green;
	color:$red;
	text-decoration:none;
}

a.anchBackToTop:hover {
	background:$red;
	color:$green;
	text-decoration:none;
}

";

##########################################
########### BEGIN PAGE STYLING ###########
##########################################
//pages
//home
echo "

.body-home .content-div {
	padding:0;
	clear:both;
}

.body-home .textholder.textholder-page-header,
.body-home .textholder.textholder-page-footer {
	border:none;
	float:none;
	margin:30px auto;
}

/* //slider //maincallout */
.divMainCalloutWrapper {
	margin-top:$headerheight;
} 

.divMainCalloutWrapper,
.divMainCalloutImage, 
.slideshowsitewidth .slideshowfigure,
.slideshowfigure,
.slideshowsitewidth .slideshowpicture,
.slideshowpicture {
	height:700px;
}

.slideshowfullwidth .swiper-slide img {
	position:absolute;
	top:0;
	height:700px;
	width:auto;
	max-width:none;
    -webkit-transform: translate(-50%);
	-ms-transform: translate(-50%);
	-mos-transform: translate(-50%);
	-o-transform: translate(-50%);	
	transform: translate(-50%);
}


/* //slidertext //maincallouttext */

.divMainCalloutText {
	position:absolute;
	bottom:10%;
	width:100%;
}


/* //static text //staticimage //maincallouttext //staticmaincallout */

.mainCalloutImageWrapper, .divMainCalloutTextWrapper {
	overflow:hidden;
}

.divMainCalloutWrapper.static .divMainCalloutImage,
.divMainCalloutWrapper.static figure,
.divMainCalloutWrapper.static picture {
	position:relative;
	height:700px;
}

.textholder-image.mainCalloutImageWrapper img {
	position:absolute;
	top:0;
	height:700px;
	width:auto;
	max-width:none;
    -webkit-transform: translate(-50%);
	-ms-transform: translate(-50%);
	-mos-transform: translate(-50%);
	-o-transform: translate(-50%);	
	transform: translate(-50%);
}

.divMainCalloutWrapper.static .divMainCalloutTextWrapper {
	width:100%;
	height:90%;
	height:calc(100% - $headerheight);
	position:absolute;
	bottom:0;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-content: center;
    -ms-flex-line-pack: center;
    align-content: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;	
}

.divMainCalloutWrapper.static .divMainCalloutText {
	position:relative;
	bottom:auto;
	width:100%;
}

/* //callouttext //maincallouttext //allsettings */
.content-div .divMainCalloutText * {
	color:$truewhite;
}

.divMainCalloutText .MainCalloutTextCenterOuter,
.divMainCalloutText .MainCalloutTextCenterInner {
	display:block;
}

.content-div .divMainCalloutText h1,
.content-div .divMainCalloutText h2 {
	$font1;
	font-size:48px;
}

.content-div .divMainCalloutText h3 {
	$font1;
	font-size:36px;
}

.content-div .divMainCalloutText p {
	$font2;
	font-size:21px;
	color:$truewhite;	
}

.content-div .divMainCalloutText a {
	$cleanlink;
	display:inline-block;
	margin:10px 0;
	padding:5px 40px;
	line-height:1.75;
	font-size:21px;
	font-style:normal;
	text-shadow:none;
	background:$black;
	color:$truewhite;
	$transition;
	opacity:1;
}

.content-div .divMainCalloutText a:hover {
	$cleanlink;
	color:$truewhite;
	opacity:1;
	background:$blue;
}

/* slider controls */
.divMainCalloutImage .swiper-button-prev,
.divMainCalloutImage .swiper-button-next {
	width:37px;
	height:64px;
	background-size:37px 64px;
	background-position:center;
	background-repeat:no-repeat;
	background-image:url(../../layout/images/arrow_prev.png);
	top:450px; /* will change per device */
	left:15px;
	right:auto;
	opacity:0.75;
	$transition;
}

.divMainCalloutImage .swiper-button-next {
	background-image:url(../../layout/images/arrow_next.png);
	right:15px;
	left:auto;	
}

.divMainCalloutImage .swiper-button-prev:hover {
	background-image:url(../../layout/images/arrow_prev.png);
	opacity:1;
}

.divMainCalloutImage .swiper-button-next:hover {
	background-image:url(../../layout/images/arrow_next.png);
	opacity:1;
}

.divMainCalloutWrapper .swiper-pagination {
	bottom:25px;
	height:25px;
	background:$black;
}

.swiper-pagination-clickable .swiper-pagination-bullet,
.swiper-pagination-clickable .swiper-pagination-bullet-active {
	height:13px;
	width:13px;
	margin:6px;
	opacity:1;
	$transition;
	background:$truewhite;
}


.swiper-pagination-clickable .swiper-pagination-bullet-active {
	background:$blue;
}

/* //minicallout //callouts*/
.divMiniCalloutWrapper {
	
}

.divMiniCalloutRow {
	
}

.divMiniCallout {
	
}

.divMiniCallout a,
.divMiniCallout a:hover {
	$cleanlink;
}

.divMiniCalloutInner {
	
}

.textholder-mini-callout {
	float:none;
	float:unset;
}

.divMiniCallout .divMediaWrapper.miniCalloutImageWrapper {
	margin:0;
	padding:0;
}

.divMiniCallout .divMediaWrapper.miniCalloutImageWrapper img {

}

.divMiniCalloutTextWrapper {
	
}

.divMiniCalloutHeaderWrapper {
	
}

.content-div .divMiniCalloutHeaderWrapper h3 {
	
} 

.content-div .divMiniCalloutHeaderWrapper p {
	
}


@media (min-width:1024px) and (max-width:1199px) {
	
	.divMainCalloutWrapper,
	.divMainCalloutImage,
	.slideshowsitewidth .slideshowfigure,
	.slideshowfigure,
	.slideshowsitewidth .slideshowpicture,
	.slideshowpicture,
	.divMainCalloutWrapper.static .divMainCalloutImage,
	.divMainCalloutWrapper.static figure,
	.divMainCalloutWrapper.static picture {
		height:440px;
	}
	.slideshowfullwidth .swiper-slide img,
	.textholder-image.mainCalloutImageWrapper img {
		height:440px;
	}
	
	.content-div .divMainCalloutText h1,
	.content-div .divMainCalloutText h2 {
		font-size:42px;
		line-height:1;
	}
	
	.content-div .divMainCalloutText h3 {
		font-size:32px;
		line-height:1;
	}
	
	.content-div .divMainCalloutText p {
		font-size:18px;
	}
	
	.content-div .divMainCalloutText p a {
		font-size:18px;
	}
	
	/* //minicallout */
	
	.divMiniCallout {
		height:250px;
	}
	
	.divMiniCalloutInner {
	
	}	
	
	.content-div .divMiniCalloutHeaderWrapper {
	
	}
	
	.content-div .divMiniCalloutHeaderWrapper h3 {
		font-size:26px;
	}
	
}

@media (min-width:768px) and (max-width:1023px) {
	
	.divMainCalloutWrapper,
	.divMainCalloutImage,
	.slideshowsitewidth .slideshowfigure,
	.slideshowfigure,
	.slideshowsitewidth .slideshowpicture,
	.slideshowpicture,
	.divMainCalloutWrapper.static .divMainCalloutImage,
	.divMainCalloutWrapper.static figure,
	.divMainCalloutWrapper.static picture {
		height:375px;
	}
	.slideshowfullwidth .swiper-slide img,
	.textholder-image.mainCalloutImageWrapper img {
		height:375px;
	}
	
	.content-div .divMainCalloutText h1,
	.content-div .divMainCalloutText h2 {
		font-size:30px;
		line-height:1;
		margin:5px 0;
	}
	
	.content-div .divMainCalloutText h3 {
		font-size:24px;
		line-height:1;
		margin:5px 0;
	}
	
	.content-div .divMainCalloutText p {
		font-size:16px;
		line-height:1.3;
	}
	
	.content-div .divMainCalloutText p a {
		font-size:16px;
	}
	
	/* //minicallout */
	
	.divMiniCallout {
		height:195px;
	}
	
	.divMiniCalloutInner {
	
	}
	
	.content-div .divMiniCalloutHeaderWrapper {
	
	}
	
	.content-div .divMiniCalloutHeaderWrapper h3 {
		font-size:20px;
	}
		
}

@media (max-width:767px) {

	.divMainCalloutWrapper,
	.divMainCalloutImage,
	.slideshowsitewidth .slideshowfigure,
	.slideshowfigure,
	.slideshowsitewidth .slideshowpicture,
	.slideshowpicture,
	.divMainCalloutWrapper.static .divMainCalloutImage,
	.divMainCalloutWrapper.static figure,
	.divMainCalloutWrapper.static picture {
		height:250px;
	}
	
	.divMainCalloutWrapper,
	.divMainCalloutImage,
	.divMainCalloutWrapper.static .divMainCalloutImage {
		height:auto;
	}
	
	.divMainCalloutWrapper .swiper-slide img,
	.textholder-image.mainCalloutImageWrapper img {
		position:relative;
		height:250px;
		padding:0;
	}
	
	.divMainCalloutWrapper .divMainCalloutTextWrapper,
	.divMainCalloutWrapper.static .divMainCalloutTextWrapper {
		display:block;
		position:relative;
		clear:both;
		height:auto;
		$center;
	}
	
	.divMainCalloutText {
		position:relative;
		display:block;
		float:left;
		width:100%;
		clear:both;
		height:auto;
		top:0;
		background:$truewhite;
	}
	
	.content-div .divMainCalloutText * {
		$center;
	}
	
	.content-div .divMainCalloutText h1,
	.content-div .divMainCalloutText h2 {
		font-size:30px;
		line-height:1;
		margin:5px 0;
	}
	
	.content-div .divMainCalloutText h3 {
		font-size:24px;
		line-height:1;
		margin:5px 0;
	}
	
	.content-div .divMainCalloutText p {
		font-size:16px;
		line-height:1.3;
	}
	
	.content-div .divMainCalloutText p a {
		font-size:16px;
	}
	
	.content-div .MainCalloutTextCenterInner *:first-child {
		margin-top:15px;
	}	

	.content-div .MainCalloutTextCenterInner *:last-child {
		margin-bottom:15px;
	}
		
	.divMainCalloutWrapper .swiper-pagination {
		bottom:0;
	}
	
	/* //minicallout */
	
	.divMiniCallout {
		height:265px;
	}
	
	.divMiniCalloutInner {
	
	}
	
	.content-div .divMiniCalloutHeaderWrapper {
	
	}
	
	.content-div .divMiniCalloutHeaderWrapper h3 {
		font-size:24px;
	}

	.divMiniCallout .divMediaWrapper.miniCalloutImageWrapper {
		float:none;
	}

	.divMiniCallout .divMediaWrapper.miniCalloutImageWrapper img {
		padding:0;
	}
	
	/* //home //content */
	.divPageHeader-home,
	.divPageFooter-home {
		padding:0 15px;
	}
	
	.body-home .tablet-Media .divMediaWrapper-right,
	.body-home .tablet-Media .divMediaWrapper-left {
		margin-left:-15px;
		margin-right:-15px;
	}	
	
}
";

//events 
echo "
.divPageAdditionalControlsWrapper {
	$center;
}

";

//directory
echo "

.divDirectorySearch {
	display:block;
	margin-bottom:15px;
}

.divDirectorySearchBtnWrapper input,
.divDirectorySearchBtnWrapper input:hover {
	display:block;
	padding:0;
	width:100%;
	height:100%;
	line-height:40px;
	$transparent;
	color:$blue;
	z-index:50;
	border:none;
}

#txtDirectorySearch {
	float:left;
	width:66%;
	display:inline-block;
	line-height:40px;
}

.divDirectorySearchBtnWrapper {
	width:32%;
	float:right;
	display:inline-block;
	margin-left:1%;
	position:relative;
	border:2px solid $blue;
	color:$blue;
	$transparent;
	$transition;
}

.divDirectorySearchBtnWrapper .fa {
	position:absolute;
	opacity:0;
	top:12px;
	right:15px;
	color:$truewhite;
	$transparent;
	$transition;
	display:inline-block;
	margin-left:5px;
	z-index:1;
}

.divDirectorySearchBtnWrapper:hover .fa {
	opacity:1;
	right:10px;
	$transparent;
	$transition;
}

.divDirectorySearchBtnWrapper:hover {
	background:$blue;
	color:$truewhite;
	
}

.divDirectorySearchBtnWrapper:hover input {
	color:$truewhite;
}

.content-div .ulDirectorySocialWrapper > li a:hover {
	$cleanlink;
	color:$green;
}

.ulDirectorySocialWrapper > li .fa-lg {
	font-style:normal;
}

.divTiledListing h3 {
	font-size:28px;
}

.divTiledListing h3:nth-child(2) {
	font-size:22px;	
}

";

//contact //form //input
echo "

.group input,
.group textarea,
.group select {
	border-bottom:1px solid $blue;
}

.group input:focus,
.group textarea:focus,
.group select:focus {
	border-bottom:1px solid $blue;
}

.group label,
.form-control {
	color:$darkgray;
}

.group .bar:before, .group .bar:after {
	background:$blue;
}

#frmContactForm input[type=text],
#divGetDirections input[type=text] {
	margin-top:30px;
	border-bottom-color:$blue;
}

#divGetDirections input[type=text] {
	margin-top:0;
}

#frmContactForm input[type=submit],
#divGetDirections input[type=submit] {
	background:$blue;
	border-color:$blue;
	border-radius:0;
	line-height:1;
	color:$truewhite;
	text-shadow:none;
}

#frmContactForm input[type=submit]:hover,
#divGetDirections input[type=submit]:hover {
	border-color:$blue;
	color:$truewhite;
	background:$blue;
}

#frmContactForm input[type=submit] {
	line-height:2;
}

input[type=file]#fileUpload:hover,
.fileinput-button:hover {
	background:$green;
}


.frmFEForm .anchForgot 			{color:$blue;}
.frmFEForm .anchForgot:after 	{background:$blue;}

";

//locations //directions
echo "



";

//directory //listings
echo "

.content-div-directory .fa {
	color:$green;
}

.content-div a.anchBackToPage,
.content-div a.anchBackToPage .fa {
	color:$black;	
	border-color:$black;
}

.content-div a.anchBackToPage:hover,
.content-div a.anchBackToPage:hover .fa {
	color:$blue;	
	border-color:$blue;
}

.content-div-directory .fullwidth .divListingBelow:last-of-type {
	margin-bottom:30px;
}


";

//blog //news
echo "

.content-div-blog .divPaginationWrapper .Pagination.CurrentPage {
	background:$blue;
	border-color:$blue;
} 

.content-div-blog .divSideMenu.right {
	border-color:$blue;
}

.divSideMenu a.blogsidemenuchooser:hover {
	color:$trueblack;
}

.divSideMenu a.blogsidemenuchooser.current,
.divSideMenu a.blogsidemenuchooser.current:hover {
	background:$blue;
	color:$truewhite;
}
 
.divSideMenu a.anchYearLink:hover,
.divSideMenu a.anchYearLink.current-year {
	background:$blue;
	color:$truewhite;
}

.divSideMenu a.anchMonthLink:hover,
.divSideMenu a.anchMonthLink.current-month {
	background:$white;
	color:$blue;
}

.divSideMenu a.anchTagLink:hover,
.divSideMenu a.anchTagLink.current-tag {
	color:$blue;
}

.content-div-blog .blog-preview h3 a {
	border-bottom:1px solid transparent;
	$transition;
}

.content-div-blog .blog-preview h3 a:hover {
	border-bottom:1px solid $blue;
	color:$blue;
}

.blog-inner .read-more,
.blogSubTitle-tags a {
	color:$blue;
}


.blogsearch input[type=submit] {
	border-color:$blue;
	color:$blue;
	$transparent;
}

.blogsearch input[type=submit]:hover {
	color:$truewhite;
	background:$blue;
	border-color:$blue;
}

";

//gallery 
echo "

.galleryImageWrapper img,
.galleryImageWrapper:hover img {
	padding:5px;
}
.sideMenuLeft .divMediaWrapper.galleryImageWrapper,
.sideMenuRight .divMediaWrapper.galleryImageWrapper {
	padding:7.5px;
}

";

//sandwich navigation
echo "

.navbar-toggle {
	margin:17px 15px;
	border:2px solid transparent;
}

.navbar-toggle:focus,
.navbar-toggle:active,
.navbar-toggle:hover {
	background:rgba(255,255,255,0.25);
}

.navbar-toggle .icon-bar {
	background:$truewhite;
	border:2px solid $blue;
}

nav .anchSandwichNav {
	$font1;
	color:$gray;
	border-bottom:1px solid $lightgray;
}

nav .anchSandwichNav.current,
nav .anchSandwichNav:hover {
	border-bottom:1px solid $lightgray;
	border-left:4px solid $blue;
	color:$blue;
}

";

//dropdown //main nav dropdown //ddl
echo "

.dropdown.tablet .btn-default {
	$font2;
	color:$gray;
}
.dropdown.tablet.open,
.dropdown.tablet .btn-default:hover,
.dropdown.tablet .btn-default:active,
.dropdown.tablet .btn-default:focus {
	color:$blue;
	background:$truewhite;
}

";


//small laptop  //laptop
echo "
@media (min-width:1200px) and (max-width:1366px) and (max-height:768px) {
	
	.supernav {
		line-height:$supernavheight;
		height:$supernavheight;
	}
	
	.supernav a {
		line-height:$supernavheight;
		height:$supernavheight;
	}
	
	.navcontainer {
		top:$supernavheight;
		line-height:$navheight;
		height:$navheight;
	}
	
	.dropdown.tablet .btn-default,
	#navbar .anchMainNav {
		font-size:15px;
		line-height:$navheight;
		height:$navheight;
		padding:0 10px;
		
	}
	
	.divMainCalloutWrapper,
	#main .divPageHeaderWrapper {
		margin-top:$headerheight;
	}

	#main .divPageHeaderWrapper {
		height:$headerheight;
	}

	#main h2.pagelabelheader {
		font-size:36px;
	}
	
	.divMainCalloutWrapper {
		height:auto;
	}
	
	.divMainCalloutImage,
	.slideshowsitewidth .slideshowfigure,
	.slideshowfigure,
	.slideshowsitewidth .slideshowpicture,
	.slideshowpicture {
		height:475px;
	}
	
	.slideshowfullwidth .swiper-slide img {
		top:50%;
		-webkit-transform:translate(-50%,-50%);
		-moz-transform:translate(-50%,-50%);
		-o-transform:translate(-50%,-50%);
		-ms-transform:translate(-50%,-50%);
		transform:translate(-50%,-50%);
	}
	
}

";

//tablet
//++ //tablet+ //tablet and above
echo "
@media (min-width:1366px) {
	.slideshowfullwidth .swiper-slide img {
		min-width:100%;
		height:auto;
		max-height:none;
	}
}

@media (min-width:1024px) {
	
}

@media (min-width:768px) {
	
}


";

//tablet
//-- //tablet- //tablet and below
echo "

@media (max-width:1199px) {

	.navbar-fixed-top-mobile.navbar-fixed-top-tablet {
		position:fixed;
		width:100%;
		top:0;
		z-index:1030;
	}
	
}

@media (max-width:1023px) {

}
";

//tablet
echo "
@media (min-width:768px) and (max-width:1199px) {
	
}


@media (min-width:1024px) and (max-width:1199px) {
	
	#main .divPageHeaderWrapper {
		height:$headerheight;
	}	
	
	#main h2.pagelabelheader {
		font-size:42px;
	}	
	
	.content-div h1,
	.content-div h2 {
		font-size:40px;
	}
	
	.content-div h3 {
		font-size:30px;
	}
	
	.content-div p {
		font-size:16px;
	}	
	
}

@media (min-width:768px) and (max-width:1023px) {

	#main .divPageHeaderWrapper {
		height:$headerheight;
	}

	#main h2.pagelabelheader {
		font-size:36px;
	}	
	
	.content-div h1,
	.content-div h2 {
		font-size:36px;
	}
	
	.content-div h3 {
		font-size:24px;
	}
	
	.content-div table,
	.content-div td,
	.content-div li,
	.content-div p {
		font-size:16px;
	}	
	
}

";

echo "
@media (max-width:767px) {
	
	header {
		height:$headerheight;
	}
	
	.supernav.container,
	.navcontainer .container {
		padding:0;
	}
	
	.anchLogoLink {
		padding-left:15px;
	}	
	
	#navbar, #navbar.fullWidth {
		width:100%;
	}	
	
	#main .divPageHeaderWrapper {
		margin-top:$headerheight;
	}	

	#main h2.pagelabelheader {
		margin-top:0;
		line-height:1;
		font-size:32px;
	}	
	
	.content-div h1,
	.content-div h2 {
		font-size:36px;
	}
	
	.content-div h3 {
		font-size:24px;
	}	
	
	.content-div table,
	.content-div td,
	.content-div li,
	.content-div p {
		font-size:15px;
	}	
	
	.content-div .subcats-select,
	.content-div .subcats-select a {
		font-style:normal;
		color:$gray;
	}
	
	.content-div .sidemenu-subcategory.current-year {
		color:$blue;
	}
	
	.content-div .sidemenu-subcategory.current-tag,
	.content-div .sidemenu-subcategory.current-month {
		padding-left:10px;
		color:$blue;
	}
	
	/* //footer */
	
	.bottomFooter-left,
	.bottomFooter-center,
	.bottomFooter-right {
		width:100%;
		$center;
		clear:both;
	}
	
	footer .divMainNavLinkWrapper-right,
	footer .divSuperNavLinkWrapper-split-right,
	footer .divSuperNavLinkWrapper-right {
		width:100%;
		$center;
		clear:both;
	}	
		
	.divFooterNavSocial .social-div .social-networking a {
		font-size:55px;
		color:$darkblue;
	}	
	
}

@media (max-width:767px) and (orientation:landscape) {
	
}

@media (max-width:365px) {
	
}

";

?>
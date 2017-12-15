<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<!DOCTYPE html>
<html lang="en">
<!--Basic page needs
=============================-->
<head>
<meta charset="utf-8">
<title>Maroon 5<?php if (isset($title)) {echo "&#8212;{$title}";} ?></title>
<meta name="description" content="Discography Website">
<meta name="author" content="Maroon5">

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link rel="stylesheet" href="_css/bootstrap.min.css">
<script src="_js/jquery-3.1.1.min.js"></script>
<script src="_js/bootstrap.min.js"></script>
<!-- Styles
=================================================== -->
<style>
/*
Developer: Quynh Vu
Table of Contents
HEADER - Navigation, Logo, Pictures
MAINCONTENT - Bio, Music, Tour and Update
FOOTER - Copyright
COLORPALETTE -
#000
#fff
#e0ac96
#832518
#331410
*/

/* Site Styles */
@import url('https://fonts.googleapis.com/css?family=Ropa+Sans');
body {
    background-repeat: repeat;
    background-color: black;
    font-family: 'Ropa Sans', sans-serif;
    max-width: 1080px;
    vertical-align: baseline;
    margin: 0 auto;
    line-height: 1.2;
}
.container {padding: 80px 100px;}
p {
    color: white;
    padding: 20px 40px 20px ;
    font-family: Arial Narrow, sans-serif;
    font-size: 18px;
}
.text {
    text-align: center;
    font-family: 'Ropa Sans', sans-serif;
    color: #832518;
    font-size: 20px;
}
h1 {
    text-align: center;
    letter-spacing: 10px;
}
h1, h2 {
    color: white;
    font-size: 35px;
    border-bottom: 2px solid #331410;
}

h3 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;
    font-size: 20px;
    color: white;
}
h4 {
    text-shadow: 2px 2px black;
    color: white;
    font-size: 24px;
    }
.person {
    border: 5px solid transparent;
    margin-bottom: 25px;
    width: 60%;
    height: 60%;
  }
.person:hover {border-color: #331410;}

.update {text-align: center;}

.form-control {border-radius: 0;}

textarea {resize: none;}

img.album {
    max-width: 100%;
    height: auto;
    width: auto\9; /* ie8 */
    }
div.row {
    padding-bottom: 20px;
    }
a:link {
    color: #e0ac96;
    }
a:focus {
    color: grey;
    text-decoration: none;
    }
a:visited {
    color: grey;
    }
a:hover {
    color: #802617;
    text-decoration: none;
}
/* Header + Nav Styles */
.carousel-caption h3 {color: #fff !important;}

.carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
.navbar {
    font-family: 'Ropa Sans', sans-serif;
    background-color: #331410;
    border: 0;
    font-size: 12px !important;
    letter-spacing: 4px;
  }
.navbar-brand {
    background: url(_images/m5_logo.png) center / contain no-repeat;
    width: 150px;
    transform: translate(-50%);
    left: 50%;
    position: absolute;
  }
.navbar li a, .navbar .navbar-brand {color: #d5d5d5 !important;}

.nav-tabs li a {color: #777;}

.navbar-nav li a:hover {color: #fff !important;}

.navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }

.navbar-default .navbar-toggle {border-color: transparent;}

/* Album Cover Styles */
.overlay ol li {
    color: white;
    font-size: 20px;
    text-shadow: 2px 2px black;
    }
.hovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
}

.hovereffect .overlay {
    position: absolute;
    overflow: hidden;
    width: 80%;
    height: 80%;
    left: 10%;
    top: 10%;
    border-bottom: 1px solid #FFF;
    border-top: 1px solid #FFF;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: scale(0,1);
    -ms-transform: scale(0,1);
    transform: scale(0,1);
}

.hovereffect:hover .overlay {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

.hovereffect img {
    display: block;
    position: relative;
    -webkit-transition: all 0.35s;
    transition: all 0.35s;
}

.hovereffect:hover img {
    filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
    filter: brightness(0.6);
    -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
    text-transform: uppercase;
    text-align: center;
    position: relative;
    font-size: 17px;
    background-color: transparent;
    color: #FFF;
    padding: 1em 0;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(0,-100%,0);
    transform: translate3d(0,-100%,0);
}

.hovereffect a, hovereffect p {
    color: #FFF;
    padding: 1em 0;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(0,100%,0);
    transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}

/*Tour Styles */
.month {
    font-size: 35px;
    color: #832518;
    }
.date {
    font-size: 30px;
    color: white;
    }
.country {
    color: white;
    font-size: 22px;
    }
.place {
    font-size: 16px;
    color: #832518;
    padding-bottom: 5px;
    }
/*Email Form */
label {
    color: #d5d5d5;
    font-size: 18px;
    }
p.text {
    color: white;
    text-shadow: 2px 2px black;
    }
/* Button */
button.btn {
    color: white;
    background-color: #832518;
	border-radius: 3px;
	box-shadow: 0px 5px #331410;
}
button.btn:hover {
    color: white;
	transform: translateY(3px);
	box-shadow: 0px 3px #331410;
}
button.btn:active {
    color: white;
	transform: translateY(6px);
	box-shadow: 0 0;
}

button.btn a:link, button.btn a:visited {
    color: white;
}
button.btn a:focus, button.btn a:hover {
    color: white;
    text-decoration: none;
}

.ticket {
    padding: 5px 5px;
    background-color: black;
    border-radius: 0;
    transition: .2s;
}
.ticket:hover {
    border: 1px solid black;
    background-color: #331410;
}
/* Footer Style */
#footer {
    clear:both;
    background: black;
    color: #fff;
    font-family: Source Sans Pro, sans-serif;
	font-size: 15px;
    line-height: normal;
    margin-top: 20px;
    max-width: 100%;
    padding: 5px;
    text-align: center;
}
/* Media Queries */
@media (max-width: 600px) {
  .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
}
</style>
</head>
<!--Primary Page Layout
================================-->
<body id="mypage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand text-hide" href="#mypage">Brand Text</a>
            </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#mypage">HOME</a></li>
                <li><a href="#about">BIO</a></li>
                <li><a href="#music">MUSIC</a></li>
                <li><a href="#tour">TOUR</a></li>
                <li><a href="#update">UPDATE</a></li>
            </ul>
        </div>
    </div>
    </nav>

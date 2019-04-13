<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
 	<link rel="icon" type="image" href="/asset/img/logo.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="./../asset/css/"> -->

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
		* {
    box-sizing: border-box;}
  
html {   
    line-height: 1.15;
    text-size-adjust: 100%;
}

body {
    font-size: 1em;
    height: 100%;
    width: 100%;
    background-color: #F3F5FA;
    font-family: "Lato";
    color: #6C6C6C;
    line-height: 1.7em;
    padding-right: 0 !important;}


/* Header/Blog Title */
.header {
    padding: 30px;
    text-align: left;
    background: white;}
    .header h1 {
        font-size: 50px;}
  
  /* Style the top navigation bar */
	.nav-header_base {
		font-family: "Lato";
    	overflow: hidden;
		background-color: #333;}
		.nav-header_base a{
			height: 75px;
			padding-top: 2rem;
			color: #ffffff;
			text-align: center;
			text-decoration: none;}
		.container {
    		width: 90%;
    		max-width: 1200px;
    		position: relative;
    		margin: 0px auto;}
		.nav-header__container{
			height:75px;
			-ms-flex-pack:justify;
			justify-content:space-between;
			display:-ms-flexbox;
			display:flex;
			-ms-flex-align:center;
			align-items:center}
		  /* Style the topnav links */
		  .nav-header__left{
			display:-ms-flexbox;
			display:flex;
			-ms-flex-align:center;
			align-items:center
			padding:8px 0}
			@media(min-width:768px){
				.nav-header__left{padding:0px}
				.nav-header__nav{position:fixed;
					top:0;
					padding-top: .3125rem;
					-webkit-transform:translateX(-200%);
					-ms-transform:translateX(-200%);
					transform:translateX(-200%);
					margin:0;
					opacity:0}}
					@media(min-width:768px){
						.nav-header__nav{
							padding-top: .3125rem;
							display:inline-block;
							-webkit-transform:none;
							-ms-transform:none;
							transform:none;position:relative;
							opacity:1}}
							.hvrcenter {
  							display: inline-block;
  							vertical-align: middle;
  							-webkit-transform: perspective(1px) translateZ(0);
  							transform: perspective(1px) translateZ(0);
  							box-shadow: 0 0 1px transparent;
  							position: relative;
  							overflow: hidden;
  							font-size: 14px;
							font-weight: 700;}
							.hvrcenter:before {
  							content: "";
  							position: absolute;
  							z-index: -1;
  							left: 50%;
  							right: 50%;
  							bottom: 0%;
  							background: #5486DF;
  							height: 10px;
  							-webkit-transition-property: left, right;
  							transition-property: left, right;
  							-webkit-transition-duration: 0.3s;
  							transition-duration: 0.3s;
  							-webkit-transition-timing-function: ease-out;
  							transition-timing-function: ease-out;}  
							.hvrcenter:hover:before, .hvrcenter:focus:before, .hvrcenter:active:before {
  							left: 0;
  							right: 0;}
							
											
						
  		
  
  /* View Login */
  .login-page {
  min-height: 80vh;
  background: #f2f2f2;
  text-align: center; }
  .login-page__box {
    margin-top: 40px;
    margin-bottom: 70px;
    display: inline-block;
    background: white;
    padding: 20px;
    position: relative;
    text-align: left;
    -webkit-box-shadow: 0 1px 10px 0 rgba(0, 0, 0, 0.12);
 	box-shadow: 0 1px 10px 0 rgba(0, 0, 0, 0.12);
    border-radius: 4px; }
    @media (min-width: 768px) {
      .login-page__box {
        width: 400px; } }
  	.login-page__title {
    	text-align: center;
		margin-bottom: 40px; }
		.login-page__btn {
    display: block;
    width: 100%;
    margin-top: 20px; }
  .login-page__fields {
    margin-top: 20px; }
    .login-page__fields:first-child {
      margin-top: 0; }
    .login-page__fields .fields__input {
      width: 100%;
      padding: 8px 33px 8px 16px; }
  .login-page__error {
    list-style: none;
    padding-left: 0; }
    .login-page__error li {
      display: block;
      font-size: small;
      margin: .5em 0;
      font-style: italic; }
  .login-page__tab .tab__link {
    width: 50%;
    display: inline-block;
    text-align: center;
    padding: 10px;
    border: 1px solid #3cc4e5;
    cursor: pointer; }
    .login-page__tab .tab__link:hover {
      background-color: rgba(60, 196, 229, 0.4);
      color: inherit; }
    .login-page__tab .tab__link--active {
      background-color: #3cc4e5;
      color: white; }
  .login-page__tab .tab__content {
    margin-top: 20px; }
  .login-page__addon {
    margin-top: 20px; }
  .login-page__addon-item {
    margin-right: 10px;
    color: #3cc4e5; }
    .login-page__addon-item:after {
      content: "|";
      margin-left: 10px;
      color: #4a4a4a; }
    .login-page__addon-item:last-child:after {
      display: none; }

	.login-page__tab-list {
    	list-style: none;
    	display: -ms-flexbox;
    	display: flex;
    	padding: 0;
		border: 1px solid #3cc4e5; }
	.login-page__tab {
    	width: 50%;
    	text-align: center;
    	cursor: pointer;
    	padding: .5em; }
    .login-page__tab--selected {
      background-color: #3cc4e5;
	  color: white; }
	  .login-page__fields {
    margin-top: 20px; }
    .login-page__fields:first-child {
      margin-top: 0; }
    .login-page__fields .fields__input {
      width: 100%;
      padding: 8px 33px 8px 16px; }

	  /* register css */

	  .register-page {
  min-height: 80vh;
  background: #f2f2f2;
  text-align: center; }
  .register-page__box {
    margin-top: 40px;
    margin-bottom: 70px;
    display: inline-block;
    background: white;
    padding: 10px;
    position: relative;
    text-align: left;
    -webkit-box-shadow: 0 1px 10px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 1px 10px 0 rgba(0, 0, 0, 0.12);
    border-radius: 4px; }
    @media (min-width: 768px) {
      .register-page__box {
        width: 600px;
        min-height: 400px;
        padding: 20px; } }
  .register-page__title {
    text-align: center;
    margin: 40px 0 10px 0;
    color: black;
    font-size: 2em; }
  .register-page__text {
    text-align: center;
    display: block;
    font-size: 1.25em; }
  .register-page__btn_container {
    margin: 20px 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
        flex-direction: column;
    -ms-flex-align: center;
        align-items: center;
    -ms-flex-pack: center;
        justify-content: center; }
    @media (min-width: 768px) {
      .register-page__btn_container {
        -ms-flex-direction: row;
            flex-direction: row; } }
  .register-page__btn {
    margin: 20px; }
  .register-page__btn--blue {
    background-color: #3cc4e5;
    color: white;
    -webkit-box-shadow: 0px 2px 0 0 #2e98b1;
            box-shadow: 0px 2px 0 0 #2e98b1; }
  .register-page__footer {
    text-align: center; }

	  
	  /* field css*/
	  .fields {
  text-align: left;
  margin-bottom: 20px; }
  .fields__label {
    display: block;
    color: #181818;
    margin-bottom: .5em; }
  .fields__label--no-label {
    display: none; }
  .fields__input {
    border-radius: 4px;
    border: solid 1px #dedede;
    padding: .5em 1em;
    width: 100%; }
    .fields__input:focus {
      outline: 0;
      border-color: #3cc4e5; }
    .fields__input--error {
      border-color: #fb4040; }
  .fields__error {
    display: block;
    padding: .25em 0; }
  .fields .star {
    color: #3cc4e5;
    margin-left: .25em;
    font-size: 1.25em; }


	</style>
	<title>YPPCBL</title>

</head>
<body>


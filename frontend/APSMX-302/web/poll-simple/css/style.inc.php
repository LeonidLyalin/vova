<?php
//==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>
//
// Ajax Poll Script v3.02 [ GPL ]
// Copyright (c) phpkobo.com ( http://www.phpkobo.com/ )
// Email : admin@phpkobo.com
// ID : APSMX-302
//
//==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<

//----------------------------------------------------------------
// <style>
//----------------------------------------------------------------
$style=<<<_EOM_
<style>
/* [BEGIN] CSS Reset */
.poll-simple tbody,
.poll-simple tfoot,
.poll-simple thead,
.poll-simple tr,
.poll-simple th,
.poll-simple td {
	margin:0 !important;
	padding:0 !important;
	border:0 !important;
	font-size:100% !important;
	font-style:normal;
	font-weight:normal;
	vertical-align:middle !important;
	background-color:transparent;
	box-shadow:none;
}
.poll-simple img {
	margin:0 !important;
	padding:0 !important;
	border:0 !important;
	background-color:transparent;
	box-shadow:none;
}
.poll-simple table {
}
.poll-simple label {
	margin:2px 0;
	font-style:normal;
	font-weight:normal;
}
.poll-simple button {
	color:black;
}
/* [END] CSS Reset */

.poll-simple,
.poll-simple button {
	font-family: "Verdana", "Arial", "Helvetica", "serif";
}

.poll-simple {
	letter-spacing:normal;
	line-height: normal;
	word-spacing: 0px;

	padding:20px 20px;
	font-size:16px;
	color:black;
}

.poll-simple .poll-form {
	margin:0;
}

.poll-simple .poll-title {
	padding:0 10px;
	text-align:center;

	color:black;
	font-weight:bold;
	font-size:18px;
	line-height:18px;
}

.poll-simple .poll-table {
	margin:0 auto;

	border-collapse:separate;
	border-spacing: 5px 5px;
	border:0;
}

.poll-simple .poll-table td {
	padding:0;
	font-size:16px;
	color:black;
	*border:1px solid transparent;
}

.poll-simple .poll-item {
	padding:3px 3px;
	font-size:16px;
	line-height:16px;
}

.poll-simple .poll-item input {
	margin: 0 3px 3px 0;
	vertical-align: middle;
}

.poll-simple .poll-bar {
	display:none;
	width:0;
	height:10px;
	background-color:#080;

	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	-khtml-border-radius: 4px;
	border-radius: 4px;
}

.poll-simple .poll-button {
	margin:0 0 3px 0;
	font-size:16px;
	width:140px;
}

.poll-simple .poll-time-msg {
	color:#888;
	text-align:center;
	font-weight:bold;
	margin:10px;
	padding:3px 0;

	border:1px solid #888;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-khtml-border-radius: 3px;
	border-radius: 3px;
}
</style>
_EOM_;
$this->addStyle($style);

?>
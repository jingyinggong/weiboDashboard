<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <title>WeiboMaster DashBoard</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/assets/css/bootstrap-responsive.css" />
  <link rel="stylesheet" href="/assets/css/daterangepicker.css" />
  <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
  <link rel="stylesheet" href="/assets/css/unicorn.main.css" />
  <link rel="stylesheet" href="/assets/css/unicorn.grey.css" class="skin-color" />
  <link rel="stylesheet" href="/assets/css/dashboard.css" class="skin-color" />
<!--[if lt IE 8]>
  <link rel="stylesheet" href="/assets/css/font-awesome-ie7.min.css" />
<![endif]-->
  <script src="/assets/js/jquery-1.7.2.min.js"></script>
  <script src="/assets/js/underscore-min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/date.js"></script>
  <script src="/assets/js/common.js"></script>
  <script src="/assets/js/daterangepicker.js"></script>
<!--[if lt IE 9]>
  <script src="http://cdnmaster.com/pub/iehack/html5.js"></script>
<![endif]-->
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li class="">
              <a href="http://www.sitemaster.com">SiteMaster</a>
            </li>
            <li class="">
              <a href="http://www.sitemaster.com">CSRMaster</a>
            </li>
            <li class="active">
              <a href="WeiboMaster">WeiboMaster</a>
            </li>
            <li class="">
              <a href="http://www.sitemaster.com">TrackMaster</a>
            </li>
            <li class="">
              <a href="http://www.sitemaster.com">BuzzMaster</a>
            </li>
            <li class="">
              <a href="http://www.sitemaster.com">SurveyMaster</a>
            </li>
            <li class="">
              <a href="http://www.sitemaster.com">ReviewMaster</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="header-main">
    <a href="#" class="logo"><img src="/assets/images/weibo-logo.png" /></a>
    <div class="main-nav">
      <a href="#">
        <i class="icon-home"></i><br/>
        Dashboard
      </a>
      <a href="#" class="active">
        <i class="icon-headphones"></i><br/>
        舆情聆听
      </a>
      <a href="#">
        <i class="icon-pushpin"></i><br/>
        任务管理
      </a>
    </div>
    <div class="pull-right btn-group">
      <a class="btn"><i class="icon-cog"></i> 设置</a>
    </div>
    <div class="pull-right btn-group">
      <button class="btn dropdown-toggle" data-toggle="dropdown">微软工作网络1 <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">微软工作网络2</a></li>
        <li><a href="#">微软工作网络3</a></li>
      </ul>
    </div>
    <div class="pull-right btn-group">
      <button class="btn dropdown-toggle" data-toggle="dropdown">PR工作组1 <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">PR工作组2</a></li>
        <li><a href="#">PR工作组3</a></li>
      </ul>
    </div>
  </div>


<?php
include_once('sidebar.php');
?>
  <div id="content">


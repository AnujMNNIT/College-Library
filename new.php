

<html>
    <head>
        <link rel="stylesheet" href="http://172.31.9.69/dc/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://172.31.9.69/dc/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="http://172.31.9.69/dc/css/mainsite.css">
        <!--<link rel="stylesheet" href="<?/*=CONST_SITE_URL*/?>/tablesorter/css/theme.blue.css">-->
        <link rel="stylesheet" href="http://172.31.9.69/dc/chosen/chosen.min.css">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>DC @ MNNIT Allahabad	</title>
        <style>
        #inames option{
            height:40px;
            background-color:#F00;	
        }
        label.no-styl{
            font-weight:normal;
        }
        </style>
        <script src="http://172.31.9.69/dc/js/jquery-1.11.2.js"></script>
        <script src="http://172.31.9.69/dc/tablesorter/js/jquery.tablesorter.min.js"></script>
        <script src="http://172.31.9.69/dc/js/bootstrap.min.js"></script>
        <script src="http://172.31.9.69/dc/js/search.js"></script>
        <script src="http://172.31.9.69/dc/chosen/chosen.jquery.min.js"></script>
		<script src="http://172.31.9.69/dc/js/bootbox.min.js"></script>
	</head>

<script>
$(document).ready(function(e) {
    $("#hubtab").tablesorter({sortList: [[2,1],[4,1],[3,1]]});
});
</script>

<body onLoad="setInterval('window.location.reload()', 120000);">
 

    <nav class="navbar navbar-default navbar-inverse " role="navigation">
<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbarCollapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="http://172.31.9.69/dc/index">MNNIT DC</a>
</div>
<div class="collapse navbar-collapse navbarCollapse">
      <ul id="menu" class="nav navbar-nav ">
        <li class="active"><a href="http://172.31.9.69/dc/index"><span class="glyphicon glyphicon-list-alt"></span> HUBS Status</a></li>
      	<li ><a href="http://172.31.9.69/dc/proxy"><span class="glyphicon glyphicon-globe"></span> Working Proxies<sup> &beta;</sup></a></li>
      	
          <li ><a href="http://172.31.9.69/dc/addhub"><span class="glyphicon glyphicon-plus-sign"></span> Add new HUB</a></li>
      	  <li ><a href="http://172.31.9.69/dc/request"><span class="glyphicon glyphicon-cloud-download"></span> Request File</a></li>
      	<li ><a href="info"><span class="glyphicon glyphicon-info-sign"></span> Info<!--<img src="new.gif" />--></a></li>
      	
      </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-right:10px;">
            <li ><p class="navbar-text"><a href="http://172.31.9.69/dc/admin.php"> </a></p></li>
      <li ><a href="http://172.31.9.69/dc/admin"><span class="glyphicon glyphicon-user"></span> Hub Admin</a></li>
            </ul>
    </div>
  </div>
</nav><br>
<h4 class="col-md-offset-2 col-md-6 text-success"><span class="glyphicon glyphicon-info-sign"></span> Status of Hubs. </h4><br><br>


<div class="container col-md-7 col-md-offset-2">
	<table class="table table-bordered table-hover tablesorter" id="hubtab" >
    <thead class="text-center">
    <tr >
    <th>Address</th>
    <th>Hub Name</th>
    <th>Status</th>
	<th>% Online</th>
    <th>Fulfilled/Present</th>
    </tr>
    </thead><tbody>
<tr class="text-danger"><td><a href='magnet:xs=dchub://172.31.68.22:3128'>172.31.68.22<b> : </b>3128</a></td><td>Tiwari_brothers</td><td><b><span class=" glyphicon glyphicon-remove-circle"></span> OFFLINE</b></td><td>56 % </td><td><b>0</b></td></tr></tbody>
</table>
<p class="text-muted small">Last Updated:

December 19, 2018, 7:36 pm<nav class="navbar navbar-default navbar-fixed-bottom" style="background-color:#DDD;background-image:none;" id="footr"><div class="col-md-6 col-md-offset-3"><p align="center" style="margin-top:10px;"><b>Created By :</b> Vandit Jain, Harsh Agarwal, Anaranya Sen <b>&nbsp;&nbsp;&nbsp;Maintained By :</b> MANJIT </p></div><div class="pull-right"><p style="margin-top:10px; margin-right:25px;"><b>Your IP: </b>172.31.100.25</div></nav></p> 
<br/><br/>
</div>
</div>
</body>
</html>
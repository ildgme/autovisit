<?php
ini_set("allow_url_fopen",1);





//현재날짜 기준으로 데이터가 있으면 인서트 없음.

$dateString = date("Ymd", time()); //현재날짜
$year  = date("Y", time());
$month  = date("m", time());
$day  = date("d", time());
$hour = date("H", time()); //현재시간


$page="";



if($_GET['page'] != null ){

	$page = $_GET['page'];

}



?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="TQQQ">
    <title>자동방문프로그램</title>


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">



    <style>



	  a:link, a:visited,  a:hover, a:active
		{
			color: #000000;
			text-decoration: none;
		}



      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


	  
    </style>



	<script>
		function doRefresh() {
		window.open('<?php echo $page;?>')
		setTimeout("doRefresh()",60000); //5초
		}
		doRefresh();

	</script> 


  </head>



  <body>
   

	</body>
</html>

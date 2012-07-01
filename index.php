<? if (trim($_SERVER['QUERY_STRING'])!='') { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>hidereferer.tk</title>

<style type="text/css"><!--
* {  }
body { background: url("bg.png") repeat scroll 0% 0% rgb(71, 71, 71); margin: 70px; }
h1 { display: block; text-decoration: none; font: 90px Helvetica,Arial,Sans-Serif; letter-spacing: -5px; text-align: center; color: rgb(153, 153, 153); text-shadow: 0px 3px 8px rgb(42, 42, 42); }
h1 a:hover { color: rgb(160, 160, 160); text-shadow: 0px 5px 8px rgb(42, 42, 42); }
h2 { font: 40px Tahoma,Helvetica,Arial,Sans-Serif; text-align: center; color: rgb(34, 34, 34); text-shadow: 0px 2px 3px rgb(85, 85, 85); }
pre { width: 550px; margin: 0pt auto; background: none repeat scroll 0% 0% rgb(34, 34, 34); padding: 20px; font-size: 16px; color: rgb(85, 85, 85); text-shadow: 0px 2px 3px rgb(23, 23, 23); box-shadow: 0px 2px 3px rgb(85, 85, 85); border-radius: 10px 10px 10px 10px; }
--></style>
</head>

<body>
<h1>you are going to:</h1>


<script type="text/javascript">
function getHash() {
  var hash = window.location.hash;
  var addd = window.location.search;
  return addd.substring(1)+hash;
}
document.write('<h2>'+getHash()+'</h2>');
document.write('<meta http-equiv="refresh" content="2; URL='+getHash()+'">')
</script>
</body></html>
<? } else { 

include('homepage.php');

} ?>



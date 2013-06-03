<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<link rel="stylesheet" type="text/css" href="css/flexslider.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/udt_shortcodes.css" />
<link rel="stylesheet" type="text/css" href="css/udt_media_queries.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css' />
<title>DNJ - Contato</title>

<script type="text/javascript" src="../../../../ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../../../../ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.lazyload.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/udt_shortcodes.js"></script>
<script type="text/javascript">

	//tweet buttons
	 !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="../../../../platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
		
</script>
</head>

<body>
<!--start wrapper-->
<div id="wrapper">

	<!--start header-->
	<div class="header clearfix">
            <div class="inner">
               
                
                <!--mobileMenu toggle-->
                <div class="mobileMenuToggle"><a href="#"></a></div>
                    
                <!--navigation-->
                <ul class="navigation">
                    <li><a class="navigateTo" href="index.html">Home</a></li>
                    <li><a class="navigateTo" href="index.html#Sobre">+ sobre o DNJ</a></li>
                    <li><a class="navigateTo" href="index.html#Congressos">Congressos</a></li>
                    <li><a class="navigateTo" href="404.html">Download</a></li>
                    <li><a class="navigateTo" href="blog/index.php">Blog</a></li>
                    <li><a class="navigateTo active" href="contato.html">Contato</a></li>
                </ul>
            </div>
	</div>
	<!--end header--> 

	<!--start page-->
	<?
##########################################################
/////////////////////////////////////////////////////  ###
/// Autor: Mateus Campos                         ////  ###
/// E-mail: mateuscampos@globo.com               ////  ###
/// Site: www.centralwarez.com                   ////  ###
/// Msn: mateus@centralwarez.com                 ////  ###
/// Obs: favor não retirar os nossos créditos!!! ////  ###
/////////////////////////////////////////////////////  ###
##########################################################

$nome      = $_POST["name"];
$email   = $_POST["email"];
$assunto   = $_POST["subject"];
$mensagem  = $_POST["message"];

global $email;

$data      = date("d/m/y");
$ip        = $_SERVER['REMOTE_ADDR'];
$navegador = $_SERVER['HTTP_USER_AGENT'];
$hora      = date("H:i");

mail ("nathiel@globo.com",
"$assunto",
"Nome: $nome\nData: $data\nIp: $ip\nNavegador: $navegador\nHora: $hora\nSite: $site\nE-mail: $email\nTelefone: $fone\n\nMensagem: $mensagem",
"From: $email"
);

$site   = "nathiel@globo.com";
$titulo = "Título do e-mail";
$msg    = "$nome, obrigado por entrar em contato conosco, em breve entraremos em contato";

mail("$email",
"$titulo",
"$msg",
"From: $site"
);
echo "<p align=center>$nome, sua mensagem foi enviada com sucesso!</p>";
echo "<p align=center>Estaremos retornando em breve.</p>";
?>
    
		
</div>        
<!--end wrapper-->        

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36573748-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>       
</body>
</html>
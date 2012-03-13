<?php
        /* Control de flujo para distribuir Chats equitativamente */
        //session_start();

        if(!isset($_SESSION['mapiOlarkUser'])) :
                $mapiRandom = rand(0,2);
                $mapiOlarkGroups = array("fa877e0fce7c0ab847e20938e478df5b", "e69b6e798098b3a2ae909116555828fb", "eae526c5b13534c7a3a63c62ccfc1ea3");
                $mapiOlarkGroup = $mapiOlarkGroups[$mapiRandom];
                session_regenerate_id();
                $_SESSION['mapiOlarkUser'] = $mapiOlarkGroup;
        else :
                $mapiOlarkGroup = $_SESSION['mapiOlarkUser'];
        endif;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="screen" href="chat.css" />
<style>
/*Olark Chat*/
#habla_panel_div {
	margin-bottom:140px;
}
.olarkmails{ margin-top:320px; text-align:center;}
</style>
</style>
<title>Machupicchu Travel Chat</title>
</head>
<body>
<div class="centro">
  <h2>Comunícate con nuestras ejecutivas de ventas las 24 horas</h2>
  <!-- begin olark code -->
  <script type='text/javascript'>
  /*{literal}<![CDATA[*/
  window.olark||(function(i){var e=window,h=document,a=e.location.protocol=="https:"?"https:":"http:",g=i.name,b="load";(function(){e[g]=function(){(c.s=c.s||[]).push(arguments)};var c=e[g]._={},f=i.methods.length;while(f--){(function(j){e[g][j]=function(){e[g]("call",j,arguments)}})(i.methods[f])}c.l=i.loader;c.i=arguments.callee;c.f=setTimeout(function(){if(c.f){(new Image).src=a+"//"+c.l.replace(".js",".png")+"&"+escape(e.location.href)}c.f=null},20000);c.p={0:+new Date};c.P=function(j){c.p[j]=new Date-c.p[0]};function d(){c.P(b);e[g](b)}e.addEventListener?e.addEventListener(b,d,false):e.attachEvent("on"+b,d);(function(){function l(){return["<head></head><",z,' onload="var d=',B,";d.getElementsByTagName('head')[0].",y,"(d.",A,"('script')).",u,"='",a,"//",c.l,"'",'"',"></",z,">"].join("")}var z="body",s=h[z];if(!s){return setTimeout(arguments.callee,100)}c.P(1);var y="appendChild",A="createElement",u="src",r=h[A]("div"),G=r[y](h[A](g)),D=h[A]("iframe"),B="document",C="domain",q;r.style.display="none";s.insertBefore(r,s.firstChild).id=g;D.frameBorder="0";D.id=g+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){D.src="javascript:false"}D.allowTransparency="true";G[y](D);try{D.contentWindow[B].open()}catch(F){i[C]=h[C];q="javascript:var d="+B+".open();d.domain='"+h.domain+"';";D[u]=q+"void(0);"}try{var H=D.contentWindow[B];H.write(l());H.close()}catch(E){D[u]=q+'d.write("'+l().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}c.P(2)})()})()})({loader:(function(a){return "static.olark.com/jsclient/loader0.js?ts="+(a?a[1]:(+new Date))})(document.cookie.match(/olarkld=([0-9]+)/)),name:"olark",methods:["configure","extend","declare","identify"]});olark.identify('4774-994-10-2951');
  /*]]>{/literal}*/
  </script>
  <!-- end olark code --> 
  <script type='text/javascript'>
  	olark.configure('system.group', '<?php print $mapiOlarkGroup; ?>');
	olark('api.box.expand');
  </script> 
</div>
<div class="olarkmails"> <p>Agrega nuestros MSN y chatea con nosotros</p>
  <p class="msn">machupicchutravel@hotmail.com</p></div>
</body>
</html>
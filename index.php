<?php
  $login_cookie = $_COOKIE['login'];
  #$image='https://blog.openshift.com/wp-content/uploads/Logotype_RH_OpenShiftContainerPlatform_wLogo_CMYK_Black.jpg';
  $image="images/logo_openshift.jpg";
	echo "<h2> Demonstração Openshift na prática!!! <br><br></h2>";
	echo '<img src="'.$image.'" width="400" height="80" /><br>';
  echo "<br><hr>";
  
    if(isset($login_cookie))
    {
      echo"<br>Bem vindo, $login_cookie !!!<br>";
      echo $_SERVER['SERVER_ADDR'];
      echo "<br><hr>";
      echo"<br> <font color='red'>RED HAT</font> ";
      echo"<br><font color='red'> OPENSHIFT</font>";
      echo"<br> <font color='green'>Sea Tecnologia </font>";
      echo"<br> Essas informações <font color='red'>PODEM</font> ser acessadas por você.";
      echo"<br><br><br> <a href='logout.php'> Logout</a>";
    }
    else
    {
      echo"<br><br>Bem vindo, convidado !!!<br>";
      echo"<br> Essas informações <font color='red'> NÃO PODEM </font> ser acessadas por você.<br>";
      echo"<br> Para ler o conteúdo é necessário efetuar o login. <br>";

      echo"<br><br><br> <a href='usuarios.php'> Consulta usuários</a><br><br>";
      echo"<br><h1> <a href='login.html'> Login</a>";
    }
?>
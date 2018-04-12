<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banca Virtual</title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('fonts/style.css')!!}
 

      <style type="text/css">
  #bg {
  position: fixed;
  z-index: -1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
     }

     ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
    color: white;
}
  </style>

</head>
 <body  >
  <ul>
  <li><a><?php
  $value = Session::get('sesionnombre');
echo "$value";
?><br/><?php
$value = Session::get('sesionuser');
echo "$value";
$value = Session::get('sesionnoc');
echo "--$value";
?></a></li>
<li>
  <a href="transferencias">Transferencias</a>
</li>
<li>
  <a href="credito">Crédito</a>
</li>
<li>
  <a href="debito">Débito</a>
</li>
<li>
  <a href="mostrar">Cuenta</a>
</li>
<li>
  <a href="saldo">Saldo</a>
</li>

</ul>


       <div class="container">
      <img id ="bg" src="/images/fondo.jpg"/>
            @yield('content')
        </div>


    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}
    {!!Html::script('js/jquery.js')!!}
    </body>
</html>
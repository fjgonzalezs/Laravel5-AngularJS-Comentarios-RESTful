<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo</title>
     <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.blue-indigo.min.css" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">

 <style>
  .mdl-color-letra{

    color: #E8EAF6;
  }

  .mdl-color-gris{

    color: #607D8B;
  }

 



 </style>

  <!-- JS -->
    
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.min.js"></script> <!-- load angular -->
    
    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
      
    <script src="PrimerControl.js"></script>


</head>
<body ng-app="PrimerModulo" ng-controller="PrimerControlador">
<div class=" mdl-js-layout mdl-color--grey-100">
  
  <div class="mdl-grid mdl-grid--no-spacing">
   <div class="mdl-cell mdl-cell--12-col  mdl-color--indigo mdl-typography--text-center">
      <h2 class="mdl-color-letra">SPA con Laravel y Angularjs</h2>
      <h4 class="mdl-color-letra">Sistema de comentarios</h4>
    </div>

    
  
  </div>

  <div class="mdl-grid">
    
  

     <div class="mdl-color--white  mdl-cell mdl-cell--12-col">
   
   <form  ng-submit="agregapost()"  align="center"  >
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  ">
    <input class="mdl-textfield__input mdl-color-gris  " type="text" id="sample3" ng-model="nuevoPost.autor" />
    <label class="mdl-textfield__label  " for="sample3">Ingrese su nombre</label>
  </div><br>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  <textarea class="mdl-textfield__input mdl-color-gris " type="text" rows="3" id="address" ng-model="nuevoPost.texto" ></textarea>
  <label class="mdl-textfield__label " for="address">Escribe lo que piensas</label>
</div><br>
<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  Enviar
</button>

   
   
</form>


    </div>
    
   
  </div>
  <div align="center">
   <div class="mdl-spinner mdl-js-spinner is-active " ng-show="loading" ></div>
</div>

   <div class="mdl-grid">
     
     <div class="mdl-color--white mdl-cell mdl-cell--12-col ">
       
      <div  ng-hide="loading" ng-repeat="post in posts">
        <h3>Comentario #{{ post.id }} <small>por {{ post.autor }}</h3>
        <p>{{ post.texto }}</p>
    
        <p><a href="#" ng-click="eliminarpost(post.id)" class="text-muted">Eliminar</a></p>
    </div>
       
     </div>
   </div>

</div>
  
 
    
</body>

<script src="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>


</html>
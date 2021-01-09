<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SISTEMA | FARMACIA</title>
    
  </head>
  <body>
<form>
   <div class="con">
   <header class="head-form">
      <h2>Iniciar sesión</h2>
      <p>Inicie Sesión aquí con su Nombre de Usuario y Contraseña</p>
   </header>
   <br>
   <div class="field-set">
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
         <input class="form-input" id="txt-input" type="text" placeholder="usuario" required>
      <br>
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <input class="form-input" type="password" placeholder="contraseña" id="pwd"  name="password" required>
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
      <br>
      <button class="log-in"> Iniciar sesión </button>
   </div>
   <div class="other">
      <button class="btn submits frgt-pass">Se te olvidó tu contraseña</button>
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      </button>
   </div>
  </div>
</form>
</div>
<script type="text/javascript" src="js/login.js"></script>
</body>
</html>

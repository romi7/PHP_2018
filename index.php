<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> PRUEBA DE PHP CON BOOTSTRAP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #666">
        <div class="container">  
             <div class="row"> 
                 <div class="col-12">  
                 <h2 class="text-center" style="color:white;"> EJEMPLO DE INICIO DE SESIÓN EN PHP</h2>
                </div> 
             </div>     
            <div class="row">  
                <div class="col-4">
                   
                </div>
                <div class="col-4"> 
                    <br><br>
                    <form action="index2.php">
                        <input id="cajaNombre" class="form-control"  type="text" placeholder="Usuario"required="required"> 
                    <br>
                    <input id="cajaPassword" class="form-control"  type="password" placeholder="cotraseña"> 
                    <br>
                    <button id="boton1" type="button" class="btn btn-primary btn-block">Primary</button> 
                    <br> <br>
                    <p>
    Year (yyyy-mm-dd):
    <input data-validation="date" data-validation-format="yyyy-mm-dd">
  </p>
  <p>

                    <br></form>
                </div>
                  <div class="col-4"></div>
            </div>
            
        </div>
     </body>
        <?php
        // put your code here 
     
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script> 
        // document ready se ejecuta cuando toda la pagina se a cargado completamente
        $(document).ready(function(){
            //$('#cajaNombre').hide();
        }); 
        $.validate({  
            lang: 'es'
    });
        
        
        $('#boton1').click(function(){ 
            console.log("aqui llega");
            $('#cajaNombre').show(200);
           // $('input[name=usuario_nombre]').val("why u running?");
            
        }) 
    </script>
</html>

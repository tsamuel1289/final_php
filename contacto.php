<?php include ("includes/nav.php"); ?>

<div style="max-width: 400px" class="mx-auto">
  
   <h4>Formulario de Contacto</h4>
    <form  action = <?php echo $_SERVER["PHP_SELF"]; ?> method="POST" >
        
            
            <input type="text" placeholder="Ingresar nombre" class="form-control mb-2" name="name">
            <input type="text" placeholder="Ingrese mail" class="form-control mb-2" name="mail">
            <textarea name="comment" id=""  rows="4" placeholder="Escribe un comentario" class="form-control mb-2"></textarea>
            <input type="submit" class="btn btn-primary" value="Enviar"> 
       
        </form>
   </div>
 
    <?php
    // if ($_SERVER["REQUEST_METHOD"]=="POST") {
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['mail'];
            $comment = $_REQUEST['comment'];

            echo "<h2> Gracias por escribirnos $name <br> ";
            echo "nuestro departamento de comunicación se pondrá en contacto contigo <br>";
            echo "te contactaremos por tu correo $email <br>";
            echo "sobre tu comentario en nuestra página: $comment";

            $message = "Remitente: $name, su mail: $email , Comentario: $comment ";
            mail("romerotitosamuel@gmail.com", "Mensaje del sitio web", $message );

            echo "<h3> <br> Mensaje enviado con exito. </h3>";
        }
    ?>
<?php include ("includes/footer.php");
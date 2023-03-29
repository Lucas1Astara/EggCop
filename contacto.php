<?php include('header.php')?>

<section class="contacto_formulario">




    <h1>Contacto</h1>

    <div class="formulario_input">
        <form action="enviar_consulta.php" method="POST">
            <input type="text"  name="nombre"  class="contacto_input" placeholder="Nombre">
            <input type="text"  name="apellido"  class="contacto_input" placeholder="Apellido">
            <input type="text"  name="email"  class="contacto_input" placeholder="Email">
            <textarea name="mensaje" id="" cols="30" rows="10" class="contacto_input"></textarea>

            <input type="submit" value="Enviar Consulta" class="contacto_btn">

        <?php 
        if (isset($_GET['ok']))
        echo "<h3> Se enviaron los datos correctamente. :) </h3>"
        ?>





        </form>



    </div>



</section>



<?php include('footer.php')?>

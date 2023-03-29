<?php include('header.php')?>



<section class="nosotros">
    <div class="btn_nosotros">
    <ul>
        <li><a href="nosotros.php?nom=im">Iron Man</a></li>
        <li><a href="nosotros.php?nom=hk">Hulk</a></li>
        <li><a href="nosotros.php?nom=ca">Capitan America</a></li>
        <li><a href="nosotros.php?nom=he">Hawkeye</a></li>
        <li><a href="nosotros.php?nom=tr">Thor</a></li>
        <li><a href="nosotros.php?nom=bw">Black Widow</a></li>
    </ul>
</div>


<?php

  if (isset($_GET['nom'])){
    switch (($_GET['nom'])){
        case 'im':
            $nombre = 'Iron Man';
            $identidad = 'Anthony Stark';
            $info = 'Anthony Edward "Tony" Stark fue un multimillonario industrial, anterior Director General de Industrias Stark y miembro fundador de los Vengadores. Siendo el hijo de Howard Stark y poseyendo un gran intelecto, Stark se volvió un inventor de armas mundialmente reconocido hasta que fue secuestrado por los Diez Anillos. En su cautiverio, él diseñó un traje blindado para escapar de la organización, regresando a casa y convirtiéndose en el superhéroe conocido como Iron Man, luchando contra los terroristas y su ex compañero de negocios, Obadiah Stane. Stark gozó de la fama que le llegó con su nueva identidad secreta y decidió compartirla con el mundo, anunciando públicamente que él era Iron Man.';
            $img = './imgc3\Iron_Man.png';
            break;
        case 'hk':
            $nombre = 'Hulk';
            $identidad = 'Bruce Banner';
            $info = 'El Doctor Robert Bruce Banner es un científico de renombre y miembro fundador de los Vengadores. Él era un experto en la bioquímica, la física nuclear y la radiación gamma, por lo que el General Thaddeus Ross lo reclutó para recrear el Suero del Súper Soldado, pero esto resultó en un experimento fallido de radiación gamma, que convirtió a Banner en un monstruo verde llamado Hulk. Debido a lo peligroso que era, Banner abandonó a Elizabeth Ross para buscar una cura mientras era perseguido por Thaddeus Ross. Con el tiempo, Banner se reunió con Samuel Sterns y Elizabeth Ross para fabricar un antídoto, sin embargo, cuando Emil Blonsky se convirtió en la Abominación, Banner se vio forzado a utilizar a Hulk para vencerlo.';
            $img = './imgc3\Hulk.png';
            break;
        case 'ca':
            $nombre = 'Capitan America';
            $identidad = 'Steven Rogers';
            $info = 'El Capitán Steven Grant "Steve" Rogers es un veterano de la Segunda Guerra Mundial, miembro fundador de los Vengadores y el primer superhéroe del mundo. Rogers tenía problemas de salud, sin embargo, después de que el Proyecto Renacimiento lo convirtió en el Capitán América, ayudó a los Aliados a ganar la Segunda Guerra Mundial atacando las instalaciones de HYDRA junto a los Comandos Aulladores, convirtiéndose en una leyenda viviente debido a sus hazañas. Rogers mantuvo una relación con Margaret Carter, pero tras perder a su mejor amigo, James Barnes, en la captura de Arnim Zola, Rogers lo vengó derrotando al líder de HYDRA, Johann Schmidt, no obstante, él se estrelló en el Ártico, permaneciendo congelado durante siete décadas.';
            $img = './imgc3\Capitan_America.png';
            break;
        case 'he':
            $nombre = 'Hawkeye';
            $identidad = 'Clinton Barton';
            $info = 'Clinton Francis "Clint" Barton, mejor conocido como Hawkeye, es un antiguo agente especial de S.H.I.E.L.D. y miembro fundador de los Vengadores. Él fue responsable del reclutamiento de Natalia Romanoff en S.H.I.E.L.D., con quien desarrolló una fuerte amistad y trabajó durante la Operación Budapest para asesinar a Dreykov. Barton se trasladó a Nuevo México cuando la agencia comenzó a estudiar el Mjolnir, y después fue asignado por Nicholas Fury a vigilar el Teseracto, pero Loki le lavó el cerebro durante la Destrucción del Proyecto P.E.G.A.S.U.S.. Después del Ataque en el Helicarrier, él fue liberado de su control mental, se unió a los Vengadores y capturaron a Loki tras la Batalla de Nueva York.';
            $img = './imgc3\Hawk_Eye.png';
            break;
        case 'tr':
            $nombre = 'Thor';
            $identidad = 'Thor Odinson';
            $info = 'Thor Odinson es el Dios del Trueno, anterior Rey de Nuevo Asgard y miembro fundador de los Vengadores. Cuando su conducta irresponsable amenazó a los Asgardianos a entrar en otra guerra con los Gigantes de Hielo, fue despojado de su poder y desterrado en la Tierra por su padre, Odín. Mientras estaba exiliado, Thor aprendió sobre la humildad, encontró el amor en Jane Foster y ayudó a salvar a sus nuevos amigos del Destructor, quien fue enviado por su celoso hermano adoptivo, Loki. Como tal, Thor se remidió ante los ojos de su padre, se le concedió el acceso a su poder una vez más y regresó a Asgard para confrontar a Loki, quien cayó al vacío cuando Thor destruyó el Puente Arcoíris para impedir la destrucción de Jotunheim.';
            $img = './imgc3\Thor.png';
            break;
        case 'bw':
            $nombre = 'Black Widow';
            $identidad = 'Natalia Romanoff';
            $info = 'Natalia Alianovna "Natasha" Romanoff (Ruso: Наталья Альяновна "Наташа" Романова), mejor conocida como Black Widow, fue una agente especial de S.H.I.E.L.D. y miembro fundadora de los Vengadores. Romanoff fue adoctrinada en la Habitación Roja desde muy joven, participando en una misión de la agencia junto a Yelena Belova, Alexei Shostakov y Melina Vostokoff, en la cual actuaban como una familia estadounidense normal. Tras tres años, la misión concluyó y Romanoff y Belova fueron entrenadas por la agencia como Black Widows.';
            $img = './imgc3\Viuda_Negra.png';
            break;
        


    }
   

  }



?>

<div class="info_nosotros">
    <h2><?php echo $nombre ?></h2>
    <h3><?php echo $identidad ?></h3>
    <p><?php echo $info ?></p>
    <div class="contenedor_img">
        <img src="<?php echo $img ?>">

    </div>



</div>








</section>
<?php
    /* Template Name:  HOME*/ 
    echo "<section id ='shiny-template'>";
    get_header();

?>


<section id="slider-home" class="mov-hide">
    <?php putRevSlider("home", "home.php"); ?>
</section>

<section id="slider-home" class="onlymov">
    <?php putRevSlider("home-mov", "home.php"); ?>
</section>

<section id="somos" class="upper">
    <div class="container">
        <div class="flex">
            
            <div class="col txt">
                
                <h1 class="posten">
                
                   <span class="kan">
                       Somos el <br>
                   </span> 
                    Instituto de Español de la 
                    Iglesia Anglicana de México
                    (IDIAM) 
               
               </h1>
               
               <p>
                   IDIAM es un lugar para cualquier persona 
                   interesada en aprender el idioma español y ganar
                    familiaridad con la cultura mexicana,
                    con  profesores especializados en la enseñanza del español.
               </p>
               
               <a href="#modalidades" class="btn">
                   Saber más
               </a>
                
            </div>
            
            
            
            <div class="col mov-hide oneimg">
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/worldUtiles.png" alt="útiles escolares">
                
            </div>
            
        </div>
    </div>
</section>

<section id= "testimonios" class="">
    <div class="container">
       
       <div class="center">
          
          <h2>
                Testimonios
          </h2>
          
        
       </div>
        <div class="flex">
            
            <div class="col">
                <div class="fcentered col ">
                    
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/circle1.png" alt="Karla Hurtado">
                    <h3>Karla Hurtado</h3>
                    <p class="center">Me encanto la forma de enseñar, definitvamente manejan excelentes técnicas.</p>
                    
                </div>
                
                
            </div>
            
              <div class="col">
                
                 <div class="fcentered col ">
                    
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/circle2.png" alt="Karla Hurtado">
                    <h3>Karla Hurtado</h3>
                    <p class="center">Me encanto la forma de enseñar, definitvamente manejan excelentes técnicas.</p>
                    
                </div>
                
            </div>
            
        </div>
    </div>
</section>

<section id="modalidades" class="">
    <div class="container">
       
       <div class="center">
          
          <h2>
                2 Modalidades de Estudio
          </h2>
          <p>¡Con profesores especializados en la enseñanza del español!</p>
          
        
       </div>
       
       
       
        <div class="flex graycols nopad">
            
            <div class="col">
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/sqrtESP.jpg" alt="Grupo de estudiantes en biblioteca">
                <div class="pink-sqrt">
                    <h3>Español intensivo en Grupo</h3>
                </div>
                
                <p>2 semanas de clases diarias 
                de 9:00 am a 1:45 pm.</p>
                
                <p>Grupos de 8 a 16 personas. </p>
                
            </div>
            
              
            <div class="col">
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/sqrtIND2.jpg" alt="Extranjera aprendiendo en clase privada">
                <div class="pink-sqrt">
                    <h3>Clases privadas en Español</h3>
                </div>
                
                <p>2 semanas de clases diarias 
                de 9:00 am a 1:45 pm.</p>
                
                <p>
                Personalizado entre el 
                profesor y tú. </p>
                
            </div>
            
 
        </div>
        
        
        <div class="flex btns">
            
            <div class="col fcentered">
               
               <div class="faux">
                   
                     <a href="#contacto" class="btn btnblue">
                        ¡Me interesa!
                    </a>
                   
               </div>
              
            </div>
            
             <div class="col fcentered mov-hide">
               
               <div class="faux">
                   
                     <a href="#contacto" class="btn btnblue">
                        ¡Me interesa!
                    </a>
                   
               </div>
              
            </div>
            
        </div>
        
        <div class="center">
            <p class="posten">Para conocer los costos de cada modalidad <br>
            ¡Contáctenos!
            </p>
        </div>
        
    </div>
</section>

<section id="ventajas" class="template-section">
    <div class="container center">
        <h2 class="blue">Ventajas adicionales <br> para ambas modalidades</h2>
        <div class="flex">
            <div class="col rd">
                <div class="fcentered">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/001-books.png" alt="libros">
                    <p>3 niveles de estudio</p>
                </div>
            </div>
            <div class="col rd">
                <div class="fcentered">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/002-mountains.png" alt="Montañas">
                    <p>Excelente ubicación</p>
                </div>
            </div>
            <div class="col rd">
                <div class="fcentered">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/003-bus.png" alt="Autobus">
                    <p>Transporte del <br>
                    aeropuerto</p>
                </div>
            </div>
        </div>
        
        <div class="flex pad-h">
            <div class="col">
                <div class="fcentered">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/004-mansion.png" alt="Casa lujosa">
                    <p>Talleres y <br>
                    excursiones</p>
                </div>
            </div>
            <div class="col">
                <div class="fcentered">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/005-map.png" alt="ubicación en el mapa">
                    <p>Alojamiento <br>
                    opcional</p>
                </div>
            </div>
    
        </div>
        

        
    </div>
</section>

<section id="howtopay">
    <div class="container">
        <div class="centered">
            <h2>¿Cómo pagar?</h2>
            <p>Puedes pagar por transferencia bancaria, para los grupos de alguna Diócesis el pago es al contado y para el público en general  50/50</p>
            
        </div>
    </div>
</section>









<?php 
    get_footer('idiam');
    echo "</section>";
?>




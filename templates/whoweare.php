<?php
    /* Template Name:  QUIENES SOMOS*/ 
    echo "<section id ='shiny-template'>";
    get_header();

?>



<section id="somoswho" class="template-section">
    <div class="container">
        <div class="center">
            
          <h1>Somos el Instituto de Español <br>
            de la Iglesia Anglicana de México</h1>
            
            <a href="#idiam" class="btn ">
                    ¡Contáctenos!
            </a>
            
            
        </div>
    </div>
</section>

<section id="idiam" class="upper template-section">
    <div class="container">
       
       <div class="center">
        
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="IDIAM logo">
          
          <p>
              Es un lugar para cualquier persona interesada en aprender el idioma español y ganar familiaridad 
              con la cultura mexicana,
               con  profesores especializados en la enseñanza del español.
          </p>
          
          <p>    
              Con cinco años de experiencia, nuestro trabajo también pretende establecer vínculos 
              de compañerismo con nuestra iglesia en los Estados Unidos y Canada y por ende,
               además de las clases, ofrecemos hospedaje, excursiones y talleres recreativos. 
          </p>
        
       </div>

    </div>
</section>

<section id="mision" class="upper whitetxt template-section">
    <div class="container">
       
        <div class="flex">
            
            <div id="mission" class="col txt ">
                
                <h2>
                    Misión
                </h2>
                
                <p>
                    Ofrecer a nuestros alumnos excelente calidad académica, para que salgan del Instituto sintiéndose seguros y capaces en los cuatro puntos de enfoque del idioma español. (Efectividad en la escritura, lectura, comprensión y la más importante comunicación del idioma español).
                </p>
                
            </div>
            
            <div class="col imgcol">
                <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/whoweare/diccionario.jpg" alt="Diccionario de la lengua española">
            </div>
            
        </div>
        
        <div class="flex">
           
           <div class="col imgcol mov-hide">
                <img id="students" src="<?php echo get_stylesheet_directory_uri(); ?>/img/whoweare/happy-stdents.jpg" alt="Estudiantes felices">
            </div>
            
            <div class="col txt">
                
                <h2 class="pt">
                    Visión
                </h2>
                
                <p>
                    Ser la mejor opción para estudiar español, fortaleciendo y ampliando lazos de comunicación y hermandad.
                </p>
                
                
                
            </div>
            
            <div class="col imgcol onlymov">
                <img id="student" src="<?php echo get_stylesheet_directory_uri(); ?>/img/whoweare/happy-stdents.jpg" alt="Estudiantes felices">
            </div>
            
            
        </div>
        
    </div>
</section>



<section id="valores" class="template-section">
    <div class="container center">
        <h2 class="blue">Nuestros Valores</h2>
          <div class="flex">
            <div class="col rd">
                <div class="fcentered">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whoweare/1heart.png" alt="Dar amor">
                    <p>Fraternidad</p>
                </div>
            </div>
            <div class="col rd">
                <div class="fcentered">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whoweare/2hermandad.png" alt="Hermandad">
                    <p>Hermandad</p>
                </div>
            </div>
            <div class="col rd">
                <div class="fcentered">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whoweare/3calidad.png" alt="Calidad">
                    <p>Calidad
                    </p>
                </div>
            </div>
        </div>
        
        <div class="flex pad-h">
            <div class="col">
                <div class="fcentered">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whoweare/4balanza.png" alt="Balanza de la ética">
                    <p>Ética</p>
                </div>
            </div>
            <div class="col">
                <div class="fcentered">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whoweare/5responsabilidad.png" alt="libros y taza de café">
                    <p>Responsabilidad</p>
                </div>
            </div>
    
        </div>
        

        
    </div>
</section>





<?php 
    get_footer('idiam');
    echo "</section>";
?>




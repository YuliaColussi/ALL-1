<?php
require_once('include/init.php');
require_once('include/header.php');
require_once ('include/contact.class.php');
extract($_GET);

//variable d'affichage :
$errorContact = "";
$successContact="";

if($_POST){
    // je récupère le nom des indices de des champs avec la methode "extract()"
    extract($_POST);

    // j'effectue la validation des champs du formulaire
    if(!isset($_POST['nom']) || strlen($_POST['nom'])< 3 || strlen($_POST['nom']) > 30){
        $errorContact .= '<div class="alert alert-warning text-danger"> Indiquez votre prénom (entre 3 et 30 caractères)</div>';
    }
    if(!isset($_POST['phone']) || strlen($_POST['phone']) < 3 || strlen($_POST['phone']) > 30){
        $errorContact .= '<div class="alert alert-warning text-danger"> Indiquez votre phone (entre 3 et 30 caractères)</div>';

    }
    if(!isset($_POST['email']) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errorContact .= '<div class="alert alert-warning text-danger"> Saisissez une adresse mail valide</div>';
    }

    if(!isset($_POST['message']) || strlen($_POST['message']) < 3 || strlen($_POST['message']) > 250){
        $errorContact .= '<div class="alert alert-warning text-danger">Saisissez votre messages (250 caractères max)</div>';
    }

    if(empty($errorContact)){

        foreach($_POST as $indice => $valeur){
            $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);
        }
        // je créé un nouvel objet de ma classe Contact
        $contact = new Contact();
        // j'utilise la methode contactAction() de ma class Contact.php
        $contact->contactAction($nom, $phone, $email, $message);

        unset($nom);
        unset($phone);
        unset($email);
        unset($message);
        unset($contact);

        $successContact .='<div class="alert alert-success">Votre message à bien été enregistré </div>';

        
    }

}

?>
<body  class="demo-2 loading">
<section>
    
    <!-- MORPHY START -->
    <svg class="hidden">
        <symbol id="icon-arrow" viewBox="0 0 24 24">
            <title>arrow</title>
            <polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 " />
        </symbol>
        <symbol id="icon-drop" viewBox="0 0 24 24">
            <title>drop</title>
            <path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"
            />
        <path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"
        />
    </symbol>
    <symbol id="shape-demo" viewBox="0 0 200 100">
        <title>shape demo</title>
        <path d="M 6.144,74.1 C 20.4,107.4 70.13,94.33 94.22,95.74 121.3,97.41 130.8,101.1 154.7,99.38 178.6,97.72 201.9,78.95 199.4,46.86 197.1,14.96 174.9,4.781 161.4,1.827 147.9,-1.128 119.8,8.284 105.6,8.766 85.34,9.449 81.91,7.628 51.08,2.334 17.26,-3.482 -8.105,40.84 6.144,74.1 Z"
        />
    </symbol>
</svg>
<div class="morph-wrap">
    <svg class="morph" width="1400" height="770" viewBox="0 0 1400 770">
            <path d="M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z"
            />
        </svg>
    </div>
    <div class="content content--fixed">
            <header class="codrops-header">
            <div class="codrops-links">
                <svg class="decoshape" viewBox="0 0 200 100" width="100%" height="100%" preserveAspectRatio="none">
                    <path d="M 10.45,74.41 C 39.4,110.8 72.59,67.27 95.98,68.68 122.3,70.35 131.5,101.4 154.7,99.69 177.9,98.03 200.5,79.26 198.1,47.17 195.9,15.27 174.6,-0.3279 151.8,0.9941 128.6,2.581 126,16.86 107,22.76 88.26,28.67 88.87,12.36 60.37,1.787 31.79,-8.877 -18.61,37.92 10.45,74.41 Z"
                    />
                </svg>
                <!-- <a class="codrops-icon codrops-icon--prev" href="https://tympanus.net/Development/FolderPreviewIdeas/" title="Previous Demo">
                    <svg class="icon icon--arrow">
                        <use xlink:href="#icon-arrow"></use>
                    </svg>
                </a>
                <a class="codrops-icon codrops-icon--drop" href="https://tympanus.net/codrops/?p=31190" title="Back to the article">
                    <svg class="icon icon--drop">
                        <use xlink:href="#icon-drop"></use>
                    </svg>
                </a>
            </div>
            <h1 class="codrops-header__title">Morphing Background Shapes</h1> -->
        </header>
    </div>
            <main>
        <!-- <nav class="demos">
            <a class="demo" href="index.html">
                <svg class="decoshape" preserveAspectRatio="none">
                    <use xlink:href="#shape-demo"></use>
                </svg>Demo 1</a>
            <a class="demo demo--current" href="index2.html">
                <svg class="decoshape">
                    <use xlink:href="#shape-demo"></use>
                </svg>Demo 2</a>
            <a class="demo" href="index3.html">
                <svg class="decoshape">
                    <use xlink:href="#shape-demo"></use>
                </svg>Demo 3</a>
        </nav>
         <a class="pater" href="http://synd.co/2pHxJny">
                <svg class="pater__deco" width="300" height="240" viewBox="0 0 1000 800">
                    <path d="M27.4,171.8C73,42.9,128.6,1,128.6,1s0,0,0,0c58.5,0,368.3,0.3,873.2,0.8c38.5,211,42.1,373.5,38.9,476.7c-2.5,80.3-10.6,174.9-76.7,247.8c-15.1,16.6-37.4,41.2-72.8,53.9c-92.4,33.1-173-50.8-283.9-99.4c-224.3-98.4-334.9,51.4-472.2-45.6C-6.3,535.2-14.5,290.6,27.4,171.8z"
                    />
                </svg>
                <img class="pater__img" src="sponsor/hellosignapi.svg" alt="HelloSign API" />
                <h4 class="pater__title">2x Faster Integration Time</h4>
                <p class="pater__desc">Embed contracts and a
                    
                    greements into your site or app with a few lines of code.</p>
            </a>   -->
        <!-- <div class="deco deco--title">2017 Westland Exhibition Center</div> -->
  
    <div class="content-wrap">
            <!-- <img class="content__img" src="img/3.jpg" alt="Some image" /> -->
            <div class="main_slider_part">
                <div id="text_header">
                    <div class="text_header_top">
                        
                        <p class="black_header">C</p>
                        
                        <svg id="growing_round"></svg>
                        
                    </div>
                    <p class="white_header">REAL</p>
                </div>
            </div>
            
            <!-- <div id="inline">
                <h2>Онлайн заявка</h2>
                <form id="contact" action="#" method="post" name="contact">
                    <input id="name" class="txt" name="name" type="name" placeholder="Ваше имя">
                    <input id="phone" class="txt" name="phone" type="phone" placeholder="Ваш телефон"> 
                    <input id="email" class="txt" name="email" type="email" placeholder="Ваш e-mail"> 
                    <textarea id="msg" class="txtarea" name="msg" placeholder="Ваше сообщение:"></textarea>
                    <button id="send">Отправить</button>
                </form>
            </div> -->
            
          
            
            <!-- <a href="#" class="content__link">Discover</a> -->
        </div>
     
    <div class="content-wrap">
        <div class="content content--layout content--layout-2">
            <a class="what_we_do_link what_we_do" href="#">
                <div class="what_we_do_box">
                    <div class="pattern_background">
                        <p>Learn more</p>
                        <img src="images/3.jpg" class="content__img" alt="websites">
                        
                        <a class="btn btn-line-outline btn-lg">
                            <span class="inner" data-hover="Hover me">Hover me</span>
                        </a>
                        <p class="content__desc">Lost or found? That's the question today.</p>
                        <a href="#" class="content__link">Discover</a>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
    <div class="content-wrap">
            <!-- <h3 class="content__title">our projects</h3> -->
        <div class="content content--layout content--layout-4 my_retouch">
                    <section class="us_info">
                        <div class="box_left">
                            <h2>
                                DIG
                                <br> ITAL.
                            </h2>
                            <h3>
                                Une vision globale de votre stratégie digitale.
                            </h3>
                            <p>
                                Élément clé de votre transformation, la stratégie digitale nécessite une attention toute particulière. C’est cet accompagnement
                                que l’ensemble de l’équipe vous propose tout au long du projet. À base de workshops, d’échanges et de brainstormings,
                                nous faisons évoluer votre idée initiale vers une solution digitale ambitieuse.
                            </p>
                        </div>
                        <div class="box_right">
                            <div class="box_right_box">
                                <h3>
                                    Design
                                </h3>
                                <p>
                                    Web design Direction artistique Logo & branding UI & UX
                                </p>
                            </div>
                            <div class="box_right_box">
                                <h3>
                                    Digital & Mobile
                                </h3>
                                <p>
                                    Sites web Responsive design Mobile & Tablette Applications mobile (iOS, Android)
                                </p>
                            </div>
                            <div class="box_right_box">
                                <h3>
                                    Développement
                                </h3>
                                <p>
                                    Développement front & back Interaction design Magento, Wordpress Symfony, Laravel
                                </p>
                            </div>
                            <div class="box_right_box">
                                <h3>
                                    Social Media & Webmarketing
                                </h3>
                                <p>
                                    Stratégie Social Media Community Management Bloggeurs, influenceurs Reporting, live event Emailing & jeux concours
                                </p>
                            </div>
                        </div>
                    </section>
        </div>
    </div>
    <div class="content-wrap">
        <div class="content content--layout content--layout-3 my_retouch">

        
            <!-- <h3 class="content__title my_attaches ">revert</h3> -->
        </div>
    </div>
    <!-- <div class="content-wrap">
        <div class="content content--layout content--layout-4">
            <h3 class="content__title my_attaches">east</h3>
        </div>
    </div> -->

       

    <div class="content-wrap">
        <div class="content content--layout content--layout-1">

    


<!-- Zone contact-->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-5">
                <form method="POST" class="offset-md-3" >
                    <?php
                    echo $errorContact;
                    echo $successContact;
                    ?>
                    <div class="form-row">
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="Votre prénom" name="nom" value="<?php if (isset($nom)){echo $nom;}?>">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="Votre numero de telephone" name="phone" value="<?php if (isset($phone)){echo $phone;}?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-8 mt-3">
                            <input type="text" class="form-control" placeholder="Email@gmail.com" name="email" value="<?php if (isset($email)){echo $email;}?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col mt-3">
                            <textarea name="message" id="" cols="45" rows="10" placeholder="Votre messsage" value="<?php if (isset($message)){echo $message;}?>">
                            </textarea>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-outline-light mt-4  offset-3" value="Envoyer">
                </form>
            </div>
        </div>
    </div>

</section>
 
            
                <!-- formulário de contacto utilizando html e css -->
            
                <!-- <div class="contact_form" id="contact">
            
                    <div class="formulario">
                        <h1>Contact us</h1>
            
            
                        <form action="submeter-formulario.php" method="post">
            
            
                            <p>
                                <label for="nome" class="colocar_nome">Your name
                                    <span class="obrigatorio">*</span>
                                </label>
                                <input type="text" name="introduzir_nome" id="nome" required="obrigatorio" placeholder="O teu nome">
                            </p>
            
                            <p>
                                <label for="email" class="colocar_email">Email
                                    <span class="obrigatorio">*</span>
                                </label>
                                <input type="email" name="introduzir_email" id="email" required="obrigatorio" placeholder="O teu email">
                            </p>
            
                            <p>
                                <label for="telefone" class="colocar_telefone">Telephone
                                </label>
                                <input type="tel" name="introduzir_telefone" id="telefone" placeholder="O teu telefone">
                            </p>
                            <p>
                                <label for="mensagem" class="colocar_mensagem">Message
                                    <span class="obrigatorio">*</span>
                                </label>
                                <textarea name="introduzir_mensagem" class="texto_mensagem" id="mensagem" required="obrigatorio" placeholder="Write us few lines about your future project"></textarea>
                            </p>
            
                            <button type="submit" name="enviar_formulario" id="enviar">
                                <p>Send us!</p>
                            </button>
            
                            <p class="aviso">
                                <span class="obrigatorio"> * </span>Fields that have to be filled in.
                            </p>
            
                        </form>
                    </div>
                </div> -->
            


            <!-- <h3 class="content__title my_attaches">frank</h3> -->
        </div>
    </div>
    <!-- </section> -->
    <!-- Related demos -->
    <section class="content content--related">
        <!-- <p class="content__info">If you enjoyed this demo you might also like:</p> -->

        <a class="content__related-item" href="https://tympanus.net/Development/ElasticSVGElements/">
        </a>
        <a class="content__related-item" href="">
        </a>
    </section>
                <!-- MORPHY END -->

<!-- menu and logo -->

        <!-- <section class="what_we_do">
            <a class="what_we_do_link" href="#">
            <div class="what_we_do_box">
                <div class="pattern_background">
                    <p>Learn more</p>
                    <img src="http://wpdemo2.oceanthemes.net/chiron/wp-content/uploads/sites/8/2018/12/1-3.jpg" alt="websites">
        <section>
            <a class="btn btn-line-outline btn-lg">
                <span class="inner" data-hover="Hover me">Hover me</span>
            </a>
        </section>
                </div>
            </div>
            </a>
        </section> -->
    </main>

<?php
require_once('include/footer.php');

?>
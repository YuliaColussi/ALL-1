<?php
require_once('include/init.php');
require_once('include/header.php');
extract($_GET);

?>

<body class="demo-2 loading">
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

        </header>
    </div>
        <main>
            <div class="content-wrap">
                <!-- <img class="content__img" src="img/3.jpg" alt="Some image" /> -->
            <!-- <section id="first_image">
                <canvas id="rounds"></canvas>
            </section> -->
            
            <div id="compress">
                <h1 id="title">Design</h1>
            </div>
                <!-- <a href="#" class="content__link">Discover</a> -->
            </div>
            <div class="content-wrap">
                <div class="content content--layout content--layout-2">
                    <!-- <a class="what_we_do_link what_we_do" href="#">
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
                    </a> -->
                </div>
            </div>
            

            <div class="content-wrap">
                <!-- <h3 class="content__title">our projects</h3> -->
                
                <div class="content content--layout content--layout-4 my_retouch">
                    <div class="content content--related">
        <p class="content__info"></p>
    
                    </div>
            </div>
</div>
  
            <div class="content-wrap">
                <div class="content content--layout content--layout-3 my_retouch">
                    <!-- <h3 class="content__title my_attaches ">revert</h3> -->
                </div>
            </div>
            <div class="content-wrap">
                <div class="content content--layout content--layout-1">
                    <!-- <h3 class="content__title my_attaches">frank</h3> -->
                </div>
            </div>
            <!-- Related demos -->
     

                <a class="content__related-item" href="">
                </a>

            <!-- PHOTO ALBUM -->


<?php
require_once('include/footer.php');

?>


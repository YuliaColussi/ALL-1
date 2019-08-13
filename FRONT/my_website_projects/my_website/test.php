<?php
require_once('include/init.php');
require_once('include/header_website.php');

?>
	<body class="loading">
		<main>
            <div class="content">
                                <section id="Brewingsection">
                        <div class="container">
                            <div id="brewing">
                                <div class="selection first">
                                    <h1>One</h1>
                                    <p class="position">
                                        <em>The Malting</em>
                                        <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                <div class="selection second">
                                    <h1>Two</h1>
                                    <p class="position">
                                        <em>The Brewing</em>
                                        <br> Sed ut perspiciatis unde omnis error sit voluptatem.</p>
                                    </div>
                                    <div class="selection third">
                                        <h1>Three</h1>
                                        <p class="position">
                                            <em>The Fermentation</em>
                                            <br> Nemo enim ipsam voluptatem quia sit aspernatur.</p>
                                        </div>
                                        <div class="selection fourth">
                                    <h1>Four</h1>
                                    <p class="position">
                                        <em>The Bottling</em>
                                        <br> At vero eos et accusamus et iusto ducimus.</p>
                                </div>
                            </div>
                        </div>
                    </section>
</div>
<div class="content">
          <section id="adaptive">
                <div class="adaptive_left">
                    <h3>We create the multicross adaptive websites that look great from all the devices</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla voluptatum eum delectus maxime, quo labore ullam
                        et dolor fugit maiores dicta quibusdam error sit corrupti ut vel sequi, consequatur aliquam.</p>
                </div>
                <div class="adaptive_right">
                    <style>
                        /* container */
            
                        #responsiveWebsiteIcon {
                            height: 400px;
                        }
            
                        /* mobile */
            
                        @keyframes mobileSLideIn {
                            5% {
                                transform: translate3d(0, 0, 0);
                                opacity: 1;
                            }
                            10% {
                                transform: translate3d(0, 0, 0);
                                opacity: 0;
                            }
                            19% {
                                transform: translate3d(-300px, 0, 0);
                                opacity: 0;
                            }
                            20% {
                                transform: translate3d(-300px, 0, 0);
                                opacity: 1;
                            }
                            27% {
                                transform: translate3d(0, 0, 0);
                                opacity: 1;
                            }
                        }
            
                        #responsiveWebsiteIcon-mobile {
                            animation: mobileSLideIn 5s ease-in-out infinite;
                            animation-play-state: paused;
                        }
            
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-mobile {
                            animation-play-state: running;
                        }
            
                        /* tablet */
            
                        @keyframes tabletSLideIn {
                            5% {
                                transform: translate3d(0, 0, 0);
                                opacity: 1;
                            }
                            10% {
                                transform: translate3d(0, 0, 0);
                                opacity: 0;
                            }
                            19% {
                                transform: translate3d(200px, 0, 0);
                                opacity: 0;
                            }
                            23% {
                                transform: translate3d(200px, 0, 0);
                                opacity: 1;
                            }
                            30% {
                                transform: translate3d(0, 0, 0);
                                opacity: 1;
                            }
                        }
            
                        #responsiveWebsiteIcon-tablet {
                            animation: tabletSLideIn 5s ease-in-out infinite;
                            animation-play-state: paused;
                        }
            
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-tablet {
                            animation-play-state: running;
                        }
            
                        /* laptop */
            
                        @keyframes laptopSLideIn {
                            5% {
                                transform: translate3d(0, 0, 0);
                                opacity: 1;
                            }
                            10% {
                                transform: translate3d(0, 0, 0);
                                opacity: 0;
                            }
                            19% {
                                transform: translate3d(0, 250px, 0);
                                opacity: 0;
                            }
                            26% {
                                transform: translate3d(0, 250px, 0);
                                opacity: 1;
                            }
                            33% {
                                transform: translate3d(0, 0, 0);
                                opacity: 1;
                            }
                        }
            
                        #responsiveWebsiteIcon-laptop {
                            animation: laptopSLideIn 5s ease-in-out infinite;
                            animation-play-state: paused;
                        }
            
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-laptop {
                            animation-play-state: running;
                        }
            
                        /* content logo */
            
                        @keyframes logoFadeIn {
                            5% {
                                opacity: 1;
                            }
                            10% {
                                opacity: 0;
                            }
                            35% {
                                opacity: 0;
                            }
                            39% {
                                opacity: 1;
                            }
                        }
            
                        #responsiveWebsiteIcon-desktop-logo,
                        #responsiveWebsiteIcon-laptop-logo,
                        #responsiveWebsiteIcon-mobile-logo,
                        #responsiveWebsiteIcon-tablet-logo {
                            animation: logoFadeIn 5s ease-in-out infinite;
                            animation-play-state: paused;
                        }
            
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-desktop-logo,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-laptop-logo,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-mobile-logo,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-tablet-logo {
                            animation-play-state: running;
                        }
            
                        /* content banner */
            
                        @keyframes bannerFadeIn {
                            5% {
                                opacity: 1;
                            }
                            10% {
                                opacity: 0;
                            }
                            37% {
                                opacity: 0;
                            }
                            41% {
                                opacity: 1;
                            }
                        }
            
                        #responsiveWebsiteIcon-desktop-banner,
                        #responsiveWebsiteIcon-laptop-banner,
                        #responsiveWebsiteIcon-mobile-banner,
                        #responsiveWebsiteIcon-tablet-banner {
                            animation: bannerFadeIn 5s ease-in-out infinite;
                            animation-play-state: paused;
                        }
            
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-desktop-banner,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-laptop-banner,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-mobile-banner,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-tablet-banner {
                            animation-play-state: running;
                        }
            
                        /* content pic1 */
            
                        @keyframes pic1FadeIn {
                            5% {
                                opacity: 1;
                            }
                            10% {
                                opacity: 0;
                            }
                            39% {
                                opacity: 0;
                            }
                            43% {
                                opacity: 1;
                            }
                        }
            
                        #responsiveWebsiteIcon-desktop-pic1,
                        #responsiveWebsiteIcon-laptop-pic1,
                        #responsiveWebsiteIcon-mobile-pic1,
                        #responsiveWebsiteIcon-tablet-pic1 {
                            animation: pic1FadeIn 5s ease-in-out infinite;
                            animation-play-state: paused;
                        }
            
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-desktop-pic1,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-laptop-pic1,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-mobile-pic1,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-tablet-pic1 {
                            animation-play-state: running;
                        }
            
                        /* content text1 */
            
                        @keyframes text1FadeIn {
                            5% {
                                opacity: 1;
                            }
                            10% {
                                opacity: 0;
                            }
                            41% {
                                opacity: 0;
                            }
                            45% {
                                opacity: 1;
                            }
                        }
            
                        #responsiveWebsiteIcon-desktop-text1,
                        #responsiveWebsiteIcon-laptop-text1,
                        #responsiveWebsiteIcon-mobile-text1,
                        #responsiveWebsiteIcon-tablet-text1 {
                            animation: text1FadeIn 5s ease-in-out infinite;
                            animation-play-state: paused;
                        }
            
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-desktop-text1,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-laptop-text1,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-mobile-text1,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-tablet-text1 {
                            animation-play-state: running;
                        }
            
                        /* content pic2 */
            
                        @keyframes pic2FadeIn {
                            5% {
                                opacity: 1;
                            }
                            10% {
                                opacity: 0;
                            }
                            43% {
                                opacity: 0;
                            }
                            47% {
                                opacity: 1;
                            }
                        }
            
                        #responsiveWebsiteIcon-desktop-pic2,
                        #responsiveWebsiteIcon-laptop-pic2,
                        #responsiveWebsiteIcon-tablet-pic2 {
                            animation: pic2FadeIn 5s ease-in-out infinite;
                            animation-play-state: paused;
                        }
            
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-desktop-pic2,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-laptop-pic2,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-tablet-pic2 {
                            animation-play-state: running;
                        }
            
                        /* content text2 */
            
                        @keyframes text2FadeIn {
                            5% {
                                opacity: 1;
                            }
                            10% {
                                opacity: 0;
                            }
                            45% {
                                opacity: 0;
                            }
                            49% {
                                opacity: 1;
                            }
                        }
            
                        #responsiveWebsiteIcon-desktop-text2,
                        #responsiveWebsiteIcon-laptop-text2,
                        #responsiveWebsiteIcon-tablet-text2 {
                            animation: text2FadeIn 5s ease-in-out infinite;
                            animation-play-state: paused;
                        }
            
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-desktop-text2,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-laptop-text2,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-tablet-text2 {
                            animation-play-state: running;
                        }
            
                        /* content pic3 */
            
                        @keyframes pic3FadeIn {
                            5% {
                                opacity: 1;
                            }
                            10% {
                                opacity: 0;
                            }
                            47% {
                                opacity: 0;
                            }
                            51% {
                                opacity: 1;
                            }
                        }
            
                        #responsiveWebsiteIcon-desktop-pic3,
                        #responsiveWebsiteIcon-laptop-pic3 {
                            animation: pic3FadeIn 5s ease-in-out infinite;
                            animation-play-state: paused;
                        }
            
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-desktop-pic3,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-laptop-pic3 {
                            animation-play-state: running;
                        }
            
                        /* content text3 */
            
                        @keyframes text3FadeIn {
                            5% {
                                opacity: 1;
                            }
                            10% {
                                opacity: 0;
                            }
                            49% {
                                opacity: 0;
                            }
                            53% {
                                opacity: 1;
                            }
                        }
            
                        #responsiveWebsiteIcon-desktop-text3,
                        #responsiveWebsiteIcon-laptop-text3 {
                            animation: text3FadeIn 5s ease-in-out infinite;
                            animation-play-state: paused;
                        }
            
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-desktop-text3,
                        #responsiveWebsiteIcon:hover #responsiveWebsiteIcon-laptop-text3 {
                            animation-play-state: running;
                        }
                    </style>
            
                    <div style="text-align: center;">
                        <svg version="1.1" id="responsiveWebsiteIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 728.4 536.4" style="enable-background:new 0 0 728.4 536.4;" xml:space="preserve">
                            <style type="text/css">
                                .responsiveWebsiteIcon-st0 {
                                    fill: #FFFFFF;
                                    stroke: #007174;
                                    stroke-width: 4;
                                    stroke-linejoin: bevel;
                                }
            
                                .responsiveWebsiteIcon-st1 {
                                    fill: #FFFFFF;
                                    stroke: #007174;
                                    stroke-width: 4;
                                    stroke-miterlimit: 10;
                                }
            
                                .responsiveWebsiteIcon-st2 {
                                    fill: #007174;
                                }
            
                                .responsiveWebsiteIcon-st3 {
                                    fill: #B3B3B3;
                                }
            
                                .responsiveWebsiteIcon-st4 {
                                    fill: #BA913A;
                                }
            
                                .responsiveWebsiteIcon-st5 {
                                    fill: #FFB5A6;
                                }
            
                                .responsiveWebsiteIcon-st6 {
                                    fill: #754E51;
                                }
            
                                .responsiveWebsiteIcon-st7 {
                                    fill: #FFFFFF;
                                }
                            </style>
                            <g id="responsiveWebsiteIcon-desktop">
                                <g id="responsiveWebsiteIcon-desktop-imac">
                                    <path class="responsiveWebsiteIcon-st0" d="M472.4,390.8h-4c0,0-16.4-4.4-21.8-44H339.1c-5.5,38.9-22.5,44-22.5,44H302v13h182v-13H472.4z"
                                    />
                                    <path class="responsiveWebsiteIcon-st0" d="M597.4,61.8H187.8c-7.1,0-13.6,3.7-13.6,10.9v257.9c0,7.1,6.5,16.3,13.6,16.3h409.6c7.1,0,10.8-9.2,10.8-16.3
            			V72.7C608.2,65.6,604.5,61.8,597.4,61.8z" />
                                    <path class="responsiveWebsiteIcon-st1" d="M592.7,290.3h-403v-211h403V290.3z" />
                                    <path class="responsiveWebsiteIcon-st2" d="M405.6,317.5c0,7.2-5.8,13-13,13c0,0,0,0-0.1,0l0,0c-7.2,0-13-5.8-13-13l0,0c0-7.2,5.8-13,13-13l0,0l0,0
            			C399.8,304.5,405.6,310.3,405.6,317.5C405.6,317.5,405.6,317.5,405.6,317.5z" />
                                </g>
                                <g id="responsiveWebsiteIcon-desktop-text3">
                                    <path class="responsiveWebsiteIcon-st3" d="M506.2,237.7H438c-1.7,0-3-1.3-3-3s1.3-3,3-3h68.2c1.7,0,3,1.3,3,3S507.9,237.7,506.2,237.7L506.2,237.7z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M506.2,246.8H438c-1.7,0-3-1.3-3-3s1.3-3,3-3h68.2c1.7,0,3,1.3,3,3S507.9,246.8,506.2,246.8L506.2,246.8z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M506.2,255.7H438c-1.7,0-3-1.3-3-3s1.3-3,3-3h68.2c1.7,0,3,1.3,3,3S507.9,255.7,506.2,255.7L506.2,255.7z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M506.2,264.5H438c-1.7,0-3-1.3-3-3s1.3-3,3-3h68.2c1.7,0,3,1.3,3,3S507.9,264.5,506.2,264.5L506.2,264.5z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M470.4,273.4H438c-1.7,0-3-1.3-3-3s1.3-3,3-3h32.4c1.7,0,3,1.3,3,3S472,273.4,470.4,273.4L470.4,273.4z"
                                    />
                                </g>
                                <g id="responsiveWebsiteIcon-desktop-text2">
                                    <path class="responsiveWebsiteIcon-st3" d="M424.8,237.7h-68.2c-1.7,0-3-1.3-3-3s1.3-3,3-3h68.2c1.7,0,3,1.3,3,3S426.5,237.7,424.8,237.7z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M424.8,246.8h-68.2c-1.7,0-3-1.3-3-3s1.3-3,3-3h68.2c1.7,0,3,1.3,3,3S426.5,246.8,424.8,246.8z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M424.8,255.7h-68.2c-1.7,0-3-1.3-3-3s1.3-3,3-3h68.2c1.7,0,3,1.3,3,3S426.5,255.7,424.8,255.7z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M424.8,264.5h-68.2c-1.7,0-3-1.3-3-3s1.3-3,3-3h68.2c1.7,0,3,1.3,3,3S426.5,264.5,424.8,264.5z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M389,273.4h-32.4c-1.7,0-3-1.3-3-3s1.3-3,3-3H389c1.7,0,3,1.3,3,3S390.7,273.4,389,273.4z"
                                    />
                                </g>
                                <g id="responsiveWebsiteIcon-desktop-text1">
                                    <path class="responsiveWebsiteIcon-st3" d="M342.9,237.7h-68.2c-1.7,0-3-1.3-3-3s1.3-3,3-3h68.2c1.7,0,3,1.3,3,3S344.6,237.7,342.9,237.7z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M342.9,246.8h-68.2c-1.7,0-3-1.3-3-3s1.3-3,3-3h68.2c1.7,0,3,1.3,3,3S344.6,246.8,342.9,246.8z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M342.9,255.7h-68.2c-1.7,0-3-1.3-3-3s1.3-3,3-3h68.2c1.7,0,3,1.3,3,3S344.6,255.7,342.9,255.7z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M342.9,264.5h-68.2c-1.7,0-3-1.3-3-3s1.3-3,3-3h68.2c1.7,0,3,1.3,3,3S344.6,264.5,342.9,264.5z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M307.1,273.4h-32.4c-1.7,0-3-1.3-3-3s1.3-3,3-3h32.4c1.7,0,3,1.3,3,3S308.7,273.4,307.1,273.4z"
                                    />
                                </g>
                                <path id="responsiveWebsiteIcon-desktop-pic3" class="responsiveWebsiteIcon-st4" d="M440.9,188.8h61.9c2.9,0,5.3,2.4,5.3,5.3v26.5c0,2.9-2.4,5.3-5.3,5.3
            		h-61.9c-2.9,0-5.3-2.4-5.3-5.3v-26.5C435.6,191.2,438,188.8,440.9,188.8z" />
                                <path id="responsiveWebsiteIcon-desktop-pic2" class="responsiveWebsiteIcon-st4" d="M359.5,188.8h61.9c2.9,0,5.3,2.4,5.3,5.3v26.5c0,2.9-2.4,5.3-5.3,5.3
            		h-61.9c-2.9,0-5.3-2.4-5.3-5.3v-26.5C354.2,191.2,356.6,188.8,359.5,188.8z" />
                                <path id="responsiveWebsiteIcon-desktop-pic1" class="responsiveWebsiteIcon-st4" d="M277.6,188.8h61.9c2.9,0,5.3,2.4,5.3,5.3v26.5c0,2.9-2.4,5.3-5.3,5.3
            		h-61.9c-2.9,0-5.3-2.4-5.3-5.3v-26.5C272.3,191.2,274.7,188.8,277.6,188.8z" />
                                <path id="responsiveWebsiteIcon-desktop-banner" class="responsiveWebsiteIcon-st5" d="M278.7,123.8h223.5c3.9,0,7,3.1,7,7v46c0,3.9-3.1,7-7,7H278.7
            		c-3.9,0-7-3.1-7-7v-46C271.7,126.9,274.9,123.8,278.7,123.8z" />
                                <path id="responsiveWebsiteIcon-desktop-logo" class="responsiveWebsiteIcon-st6" d="M279.3,95.8h64.7c3.9,0,7,3.1,7,7v7c0,3.9-3.1,7-7,7h-64.7
            		c-3.9,0-7-3.1-7-7v-7C272.3,98.9,275.5,95.8,279.3,95.8z" />
                            </g>
                            <g id="responsiveWebsiteIcon-laptop">
                                <g id="responsiveWebsiteIcon-laptop-laptop">
                                    <path class="responsiveWebsiteIcon-st2" d="M350.5,505.5h-302V314.8c0-4,4-6.3,8-6.3h288c4,0,6,2.3,6,6.3V505.5z" />
                                    <rect x="59" y="321" class="responsiveWebsiteIcon-st7" width="281" height="174" />
                                    <path class="responsiveWebsiteIcon-st2" d="M338,323v170H61V323H338 M342,319H57v178h285V319z" />
                                    <path class="responsiveWebsiteIcon-st0" d="M389.5,516.5V508c0-2-1-2.5-3.1-2.5h-370c-2,0-3.9,0.5-3.9,2.5v8.5c0,0,9.4,7,14.8,7h348.1
            			C381,523.5,389.5,516.5,389.5,516.5z" />
                                    <path class="responsiveWebsiteIcon-st2" d="M227.4,514.4h-53.6c-4.5-0.8-4.5-7.7-4.5-7.7h62.6C231.8,506.6,231.8,513.5,227.4,514.4z"
                                    />
                                </g>
                                <g id="responsiveWebsiteIcon-laptop-text3">
                                    <path class="responsiveWebsiteIcon-st3" d="M312.3,452.3h-69.6c-1.3,0.1-2.5-0.9-2.6-2.3c-0.1-1.3,0.9-2.5,2.3-2.6c0.1,0,0.2,0,0.3,0h69.6
            			c1.3,0.1,2.4,1.2,2.3,2.6C314.5,451.2,313.5,452.2,312.3,452.3L312.3,452.3z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M312.3,459.7h-69.6c-1.3,0.1-2.5-0.9-2.6-2.3c-0.1-1.3,0.9-2.5,2.3-2.6c0.1,0,0.2,0,0.3,0h69.6
            			c1.3,0.1,2.4,1.2,2.3,2.6C314.5,458.6,313.5,459.6,312.3,459.7L312.3,459.7z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M312.3,466.9h-69.6c-1.3,0.1-2.5-0.9-2.6-2.3c-0.1-1.3,0.9-2.5,2.3-2.6c0.1,0,0.2,0,0.3,0h69.6
            			c1.3,0.1,2.4,1.2,2.3,2.6C314.5,465.9,313.5,466.8,312.3,466.9L312.3,466.9z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M312.3,474.1h-69.6c-1.3,0-2.4-1.1-2.4-2.4s1.1-2.4,2.4-2.4h69.6c1.3,0,2.4,1.1,2.4,2.4
            			S313.6,474.1,312.3,474.1L312.3,474.1z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M283.1,481.4h-40.4c-1.3,0.1-2.5-0.9-2.6-2.3c-0.1-1.3,0.9-2.5,2.3-2.6c0.1,0,0.2,0,0.3,0h40.4
            			c1.3-0.1,2.5,0.9,2.6,2.3s-0.9,2.5-2.3,2.6C283.3,481.4,283.2,481.4,283.1,481.4z" />
                                </g>
                                <g id="responsiveWebsiteIcon-laptop-text2">
                                    <path class="responsiveWebsiteIcon-st3" d="M233.7,452.3h-69.6c-1.3,0.1-2.5-0.9-2.6-2.3c-0.1-1.3,0.9-2.5,2.3-2.6c0.1,0,0.2,0,0.3,0h69.6
            			c1.3-0.1,2.5,0.9,2.6,2.3c0.1,1.3-0.9,2.5-2.3,2.6C233.9,452.3,233.8,452.3,233.7,452.3z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M233.7,459.7h-69.6c-1.3,0.1-2.5-0.9-2.6-2.3c-0.1-1.3,0.9-2.5,2.3-2.6c0.1,0,0.2,0,0.3,0h69.6
            			c1.3-0.1,2.5,0.9,2.6,2.3c0.1,1.3-0.9,2.5-2.3,2.6C233.9,459.7,233.8,459.7,233.7,459.7z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M233.7,466.9h-69.6c-1.3,0.1-2.5-0.9-2.6-2.3c-0.1-1.3,0.9-2.5,2.3-2.6c0.1,0,0.2,0,0.3,0h69.6
            			c1.3-0.1,2.5,0.9,2.6,2.3c0.1,1.3-0.9,2.5-2.3,2.6C233.9,466.9,233.8,466.9,233.7,466.9z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M233.7,474.1h-69.6c-1.3,0-2.4-1.1-2.4-2.4s1.1-2.4,2.4-2.4h69.6c1.3,0,2.4,1.1,2.4,2.4
            			S235,474.1,233.7,474.1L233.7,474.1z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M204.5,481.4h-40.4c-1.3,0.1-2.5-0.9-2.6-2.3c-0.1-1.3,0.9-2.5,2.3-2.6c0.1,0,0.2,0,0.3,0h40.4
            			c1.3,0.1,2.4,1.2,2.3,2.6C206.7,480.3,205.7,481.3,204.5,481.4z" />
                                </g>
                                <g id="responsiveWebsiteIcon-laptop-text1">
                                    <path class="responsiveWebsiteIcon-st3" d="M154.5,452.3H84.9c-1.3-0.1-2.4-1.2-2.3-2.6c0.1-1.2,1.1-2.2,2.3-2.3h69.6c1.3-0.1,2.5,0.9,2.6,2.3
            			c0.1,1.3-0.9,2.5-2.3,2.6C154.7,452.3,154.6,452.3,154.5,452.3L154.5,452.3z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M154.5,459.7H84.9c-1.3-0.1-2.4-1.2-2.3-2.6c0.1-1.2,1.1-2.2,2.3-2.3h69.6c1.3-0.1,2.5,0.9,2.6,2.3
            			c0.1,1.3-0.9,2.5-2.3,2.6C154.7,459.7,154.6,459.7,154.5,459.7L154.5,459.7z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M154.5,466.9H84.9c-1.3-0.1-2.4-1.2-2.3-2.6c0.1-1.2,1.1-2.2,2.3-2.3h69.6c1.3-0.1,2.5,0.9,2.6,2.3
            			c0.1,1.3-0.9,2.5-2.3,2.6C154.7,466.9,154.6,466.9,154.5,466.9L154.5,466.9z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M154.5,474.1H84.9c-1.3,0-2.4-1.1-2.4-2.4s1.1-2.4,2.4-2.4h69.6c1.3,0,2.4,1.1,2.4,2.4
            			S155.9,474.1,154.5,474.1L154.5,474.1z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M125.3,481.4H84.9c-1.3-0.1-2.4-1.2-2.3-2.6c0.1-1.2,1.1-2.2,2.3-2.3h40.4c1.3-0.1,2.5,0.9,2.6,2.3
            			c0.1,1.3-0.9,2.5-2.3,2.6C125.5,481.4,125.4,481.4,125.3,481.4z" />
                                </g>
                                <path id="responsiveWebsiteIcon-laptop-pic3" class="responsiveWebsiteIcon-st4" d="M245,412.4h64.5c2.4,0,4.3,1.9,4.3,4.3v21.6c0,2.4-1.9,4.3-4.3,4.3
            		H245c-2.4,0-4.3-1.9-4.3-4.3v-21.6C240.7,414.3,242.6,412.4,245,412.4z" />
                                <path id="responsiveWebsiteIcon-laptop-pic2" class="responsiveWebsiteIcon-st4" d="M166.4,412.4h64.5c2.4,0,4.3,1.9,4.3,4.3v21.6c0,2.4-1.9,4.3-4.3,4.3
            		h-64.5c-2.4,0-4.3-1.9-4.3-4.3v-21.6C162.1,414.3,164,412.4,166.4,412.4z" />
                                <path id="responsiveWebsiteIcon-laptop-pic1" class="responsiveWebsiteIcon-st4" d="M87.2,412.4h64.5c2.4,0,4.3,1.9,4.3,4.3v21.6c0,2.4-1.9,4.3-4.3,4.3
            		H87.2c-2.4,0-4.3-1.9-4.3-4.3v-21.6C82.9,414.3,84.9,412.4,87.2,412.4z" />
                                <path id="responsiveWebsiteIcon-laptop-banner" class="responsiveWebsiteIcon-st5" d="M88.8,359.4h219.7c3.9,0,7,3.1,7,7v34.9c0,3.9-3.1,7-7,7H88.8
            		c-3.9,0-7-3.1-7-7v-34.9C81.8,362.5,84.9,359.4,88.8,359.4z" />
                                <path id="responsiveWebsiteIcon-laptop-logo" class="responsiveWebsiteIcon-st6" d="M88.1,336.5h51.6c3.5,0,6.3,2.8,6.3,6.3v4.5c0,3.5-2.8,6.3-6.3,6.3
            		H88.1c-3.5,0-6.3-2.8-6.3-6.3v-4.5C81.8,339.3,84.6,336.5,88.1,336.5z" />
                            </g>
                            <g id="responsiveWebsiteIcon-tablet">
                                <g id="responsiveWebsiteIcon-tablet-tablet">
                                    <path class="responsiveWebsiteIcon-st2" d="M712.6,420c0,7.7-6,14.5-13.7,14.5h-143c-7.7,0-14.3-6.9-14.3-14.5V222.1c0-7.7,6.7-14.5,14.3-14.5h143
            			c7.7,0,13.7,6.9,13.7,14.5V420z" />
                                    <rect x="554.1" y="223.1" class="responsiveWebsiteIcon-st7" width="146" height="177" />
                                    <path class="responsiveWebsiteIcon-st2" d="M698.1,225.1v173h-142v-173L698.1,225.1 M702.1,221.1h-150v181h150V221.1z" />
                                    <path class="responsiveWebsiteIcon-st7" d="M635.5,416.1c0,4.5-3.6,8.1-8.1,8.1c-4.5,0-8.1-3.6-8.1-8.1c0-4.5,3.6-8.1,8.1-8.1c0,0,0,0,0,0
            			C631.9,408,635.5,411.6,635.5,416.1z" />
                                </g>
                                <g id="responsiveWebsiteIcon-tablet-text2">
                                    <path class="responsiveWebsiteIcon-st3" d="M686.6,359.3H632c-1.3,0.1-2.5-0.9-2.6-2.3s0.9-2.5,2.3-2.6c0.1,0,0.2,0,0.3,0h54.6c1.3,0.1,2.4,1.2,2.3,2.6
            			C688.8,358.3,687.9,359.2,686.6,359.3z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M686.6,366.8H632c-1.3,0.1-2.5-0.9-2.6-2.3s0.9-2.5,2.3-2.6c0.1,0,0.2,0,0.3,0h54.6c1.3,0.1,2.4,1.2,2.3,2.6
            			C688.8,365.7,687.9,366.7,686.6,366.8z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M686.6,374H632c-1.3,0.1-2.5-0.9-2.6-2.3s0.9-2.5,2.3-2.6c0.1,0,0.2,0,0.3,0h54.6c1.3,0.1,2.4,1.2,2.3,2.6
            			C688.8,372.9,687.9,373.9,686.6,374z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M686.6,381.2H632c-1.3,0-2.4-1.1-2.4-2.4s1.1-2.4,2.4-2.4h54.6c1.3,0,2.4,1.1,2.4,2.4S688,381.2,686.6,381.2
            			L686.6,381.2z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M657.4,388.4H632c-1.3,0.1-2.5-0.9-2.6-2.3s0.9-2.5,2.3-2.6c0.1,0,0.2,0,0.3,0h25.4c1.3-0.1,2.5,0.9,2.6,2.3
            			s-0.9,2.5-2.3,2.6C657.6,388.4,657.5,388.4,657.4,388.4z" />
                                </g>
                                <g id="responsiveWebsiteIcon-tablet-text1">
                                    <path class="responsiveWebsiteIcon-st3" d="M623.1,359.3h-54.6c-1.3-0.1-2.4-1.2-2.3-2.6c0.1-1.2,1.1-2.2,2.3-2.3h54.6c1.3-0.1,2.5,0.9,2.6,2.3
            			s-0.9,2.5-2.3,2.6C623.3,359.3,623.2,359.3,623.1,359.3z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M623.1,366.8h-54.6c-1.3-0.1-2.4-1.2-2.3-2.6c0.1-1.2,1.1-2.2,2.3-2.3h54.6c1.3-0.1,2.5,0.9,2.6,2.3
            			s-0.9,2.5-2.3,2.6C623.3,366.8,623.2,366.8,623.1,366.8z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M623.1,374h-54.6c-1.3-0.1-2.4-1.2-2.3-2.6c0.1-1.2,1.1-2.2,2.3-2.3h54.6c1.3-0.1,2.5,0.9,2.6,2.3
            			s-0.9,2.5-2.3,2.6C623.3,374,623.2,374,623.1,374z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M623.1,381.2h-54.6c-1.3,0-2.4-1.1-2.4-2.4s1.1-2.4,2.4-2.4h54.6c1.3,0,2.4,1.1,2.4,2.4
            			S624.5,381.2,623.1,381.2z" />
                                    <path class="responsiveWebsiteIcon-st3" d="M593.9,388.4h-25.4c-1.3-0.1-2.4-1.2-2.3-2.6c0.1-1.2,1.1-2.2,2.3-2.3h25.4c1.3,0.1,2.4,1.2,2.3,2.6
            			C596.1,387.4,595.1,388.4,593.9,388.4z" />
                                </g>
                                <path id="responsiveWebsiteIcon-tablet-pic2" class="responsiveWebsiteIcon-st4" d="M634.4,319.4h49.5c2.4,0,4.3,1.9,4.3,4.3v21.6c0,2.4-1.9,4.3-4.3,4.3
            		h-49.5c-2.4,0-4.3-1.9-4.3-4.3v-21.6C630.1,321.4,632,319.4,634.4,319.4z" />
                                <path id="responsiveWebsiteIcon-tablet-pic1" class="responsiveWebsiteIcon-st4" d="M570.8,319.4h49.5c2.4,0,4.3,1.9,4.3,4.3v21.6
            		c0,2.4-1.9,4.3-4.3,4.3h-49.5c-2.4,0-4.3-1.9-4.3-4.3v-21.6C566.5,321.4,568.5,319.4,570.8,319.4z" />
                                <path id="responsiveWebsiteIcon-tablet-banner" class="responsiveWebsiteIcon-st5" d="M572.3,257.4H682c3.9,0,7,3.1,7,7v40.9c0,3.9-3.1,7-7,7H572.3
            		c-3.9,0-7-3.1-7-7v-40.9C565.3,260.5,568.5,257.4,572.3,257.4z" />
                                <path id="responsiveWebsiteIcon-tablet-logo" class="responsiveWebsiteIcon-st6" d="M571.7,234.6h51.6c3.5,0,6.3,2.8,6.3,6.3v4.5c0,3.5-2.8,6.3-6.3,6.3
            		h-51.6c-3.5,0-6.3-2.8-6.3-6.3v-4.5C565.3,237.4,568.2,234.6,571.7,234.6z" />
                            </g>
                            <g id="responsiveWebsiteIcon-mobile">
                                <g id="responsiveWebsiteIcon-mobile-phone">
                                    <path class="responsiveWebsiteIcon-st2" d="M233.2,186.5c0,6.5-6.3,12.3-12.8,12.3h-74.3c-6.5,0-11.9-5.8-11.9-12.3V26.1c0-6.5,5.4-12.3,11.9-12.3h74.3
            			c6.5,0,12.8,5.8,12.8,12.3V186.5z" />
                                    <rect x="143.2" y="38.8" class="responsiveWebsiteIcon-st7" width="81" height="131" />
                                    <path class="responsiveWebsiteIcon-st2" d="M222.2,40.8v127h-77v-127L222.2,40.8 M226.2,36.8h-85v135h85V36.8z" />
                                    <path class="responsiveWebsiteIcon-st7" d="M190.8,185c0,3.9-3.2,7.1-7.1,7.1c-3.9,0-7.1-3.2-7.1-7.1s3.2-7.1,7.1-7.1c0,0,0,0,0,0
            			C187.6,177.9,190.8,181.1,190.8,185z" />
                                    <path class="responsiveWebsiteIcon-st7" d="M166.1,25.8h35.3c1,0,1.9,0.8,1.9,1.9v0.3c0,1-0.8,1.9-1.9,1.9h-35.3c-1,0-1.9-0.8-1.9-1.9v-0.3
            			C164.2,26.6,165,25.8,166.1,25.8z" />
                                </g>
                                <g id="responsiveWebsiteIcon-mobile-text1">
                                    <path class="responsiveWebsiteIcon-st3" d="M212,152.2h-56.3c-1.1,0-2.1-0.9-2.1-2.1s0.9-2.1,2.1-2.1H212c1.1,0,2.1,0.9,2.1,2.1S213.1,152.2,212,152.2z"
                                    />
                                    <path class="responsiveWebsiteIcon-st3" d="M212,158.5h-56.3c-1.1,0-2.1-0.9-2.1-2.1s0.9-2.1,2.1-2.1H212c1.1,0,2.1,0.9,2.1,2.1S213.1,158.5,212,158.5z"
                                    />
                                </g>
                                <path id="responsiveWebsiteIcon-mobile-pic1" class="responsiveWebsiteIcon-st4" d="M157.8,118.1h51.9c2,0,3.7,1.6,3.7,3.7v18.5c0,2-1.6,3.7-3.7,3.7h-51.9
            		c-2,0-3.7-1.6-3.7-3.7v-18.5C154.1,119.7,155.7,118.1,157.8,118.1z" />
                                <path id="responsiveWebsiteIcon-mobile-banner" class="responsiveWebsiteIcon-st5" d="M160.1,67h46.6c3.9,0,7,3.1,7,7v33c0,3.9-3.1,7-7,7h-46.6
            		c-3.9,0-7-3.1-7-7V74C153.1,70.1,156.2,67,160.1,67z" />
                                <path id="responsiveWebsiteIcon-mobile-logo" class="responsiveWebsiteIcon-st6" d="M159.4,49.4h48c3.5,0,6.3,2.8,6.3,6.3v2c0,3.5-2.8,6.3-6.3,6.3h-48
            		c-3.5,0-6.3-2.8-6.3-6.3v-2C153.1,52.2,155.9,49.4,159.4,49.4z" />
                            </g>
                        </svg>
            
                    </div>
                    <!-- FOURTH'S OPTION  -->
                </div>
                </section>
                            </div>
			<!-- <div class="content">
				<article class="content__item">
					<div class="img-wrap img-wrap--content">
						<div class="img img--content" style="background-image: url(images/../images/barbershop-index.jpg);"></div>
					</div>
					<header class="content__item-header">
						<span class="content__item-header-meta">New York City, March 24</span>
						<h2 class="content__item-header-title">Kanzu</h2>
					</header>
					<div class="content__item-copy">
						<p class="content__item-copy-text">
						In the gloomy domed livingroom of the tower Buck Mulligan’s gowned form
						moved briskly to and fro about the hearth, hiding and revealing its
						yellow glow. Two shafts of soft daylight fell across the flagged floor
						from the high barbacans: and at the meeting of their rays a cloud of
						coalsmoke and fumes of fried grease floated, turning.
						</p>
						<a href="#" class="content__item-copy-more">more +</a>
					</div>
				</article>
				<article class="content__item">
					<div class="img-wrap img-wrap--content">
						<div class="img img--content" style="background-image: url(images/../images/device-index.jpg);"></div>
					</div>
					<header class="content__item-header">
						<span class="content__item-header-meta">Acapulco, March 25</span>
						<h2 class="content__item-header-title">Juked</h2>
					</header>
					<div class="content__item-copy">
						<p class="content__item-copy-text">
						The key scraped round harshly twice and, when the heavy door had been
						set ajar, welcome light and bright air entered. Haines stood at the
						doorway, looking out. Stephen haled his upended valise to the table and
						sat down to wait. Buck Mulligan tossed the fry on to the dish beside
						him. Then he carried the dish and a large teapot over to the table, set
						them down heavily and sighed with relief.
						</p>
						<a href="#" class="content__item-copy-more">more +</a>
					</div>
				</article>
				<article class="content__item">
					<div class="img-wrap img-wrap--content">
						<div class="img img--content" style="background-image: url(images/../images/sedona-index.jpg);"></div>
					</div>
					<header class="content__item-header">
						<span class="content__item-header-meta">Brisbane, March 26</span>
						<h2 class="content__item-header-title">Colza</h2>
					</header>
					<div class="content__item-copy">
						<p class="content__item-copy-text">
						Stephen listened in scornful silence. She bows her old head to a voice
						that speaks to her loudly, her bonesetter, her medicineman: me she
						slights. To the voice that will shrive and oil for the grave all there
						is of her but her woman’s unclean loins, of man’s flesh made not in
						God’s likeness, the serpent’s prey.
						</p>
						<a href="#" class="content__item-copy-more">more +</a>
					</div>
				</article>
				<article class="content__item">
					<div class="img-wrap img-wrap--content">
						<div class="img img--content" style="background-image: url(images/../images/technomart-index.jpg);"></div>
					</div>
					<header class="content__item-header">
						<span class="content__item-header-meta">Berlin, March 27</span>
						<h2 class="content__item-header-title">Voxey</h2>
					</header>
					<div class="content__item-copy">
						<p class="content__item-copy-text">
						And putting on his stiff collar and rebellious tie he spoke to them,
						chiding them, and to his dangling watchchain. His hands plunged and
						rummaged in his trunk while he called for a clean handkerchief. God,
						we’ll simply have to dress the character. I want puce gloves and green
						boots. Contradiction.
						</p>
						<a href="#" class="content__item-copy-more">more +</a>
					</div>
				</article>
			</div>
			<div class="revealer">
				<div class="revealer__inner"></div>
			</div>
			<div class="grid grid--slideshow">
				<figure class="grid__item grid__item--slide">
					<span class="number">01</span>
					<div class="img-wrap">
						<div class="img" style="background-image: url(images/../images/barbershop-index.jpg);"></div>
					</div>
					<figcaption class="caption">New York City, March 24</figcaption>
				</figure>
				<figure class="grid__item grid__item--slide">
					<span class="number">02</span>
					<div class="img-wrap">
						<div class="img" style="background-image: url(images/../images/device-index.jpg);"></div>
					</div>
					<figcaption class="caption">Acapulco, March 25</figcaption>
				</figure>
				<figure class="grid__item grid__item--slide">
					<span class="number">03</span>
					<div class="img-wrap">
						<div class="img" style="background-image: url(images/../images/sedona-index.jpg);"></div>
					</div>
					<figcaption class="caption">Brisbane, March 26</figcaption>
				</figure>
				<figure class="grid__item grid__item--slide">
					<span class="number">04</span>
					<div class="img-wrap">
						<div class="img" style="background-image: url(images/../images/technomart-index.jpg);"></div>
					</div>
					<figcaption class="caption">Berlin, March 27</figcaption>
				</figure>
				<div class="titles-wrap">
					<div class="grid grid--titles">
						<h3 class="grid__item grid__item--title">Kanzu</h3>
						<h3 class="grid__item grid__item--title">Juked</h3>
						<h3 class="grid__item grid__item--title">Colza</h3>
						<h3 class="grid__item grid__item--title">Voxey</h3>
					</div>
				</div>
				<div class="grid grid--interaction">
					<div class="grid__item grid__item--cursor grid__item--left"></div>
					<div class="grid__item grid__item--cursor grid__item--center"></div>
					<div class="grid__item grid__item--cursor grid__item--right"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__title-wrap">
					<h1 class="frame__title">Crossroads Slideshow</h1>
					<div class="frame__links">
						<a href="https://tympanus.net/Development/ExplodingObjects/">Previous Demo</a>
						<a href="https://tympanus.net/codrops/?p=39863">Article</a>
						<a href="https://github.com/codrops/CrossroadsSlideshow/">GitHub</a>
					</div>
					<div class="frame__mode" role="radiogroup">
						<div class="frame__mode-item frame__mode-item--dark">
							<input id="mode-1" type="radio" name="mode" class="frame__mode-input"></input>
							<label class="frame__mode-label" for="mode-1">Dark mode</label>
						</div>
						<div class="frame__mode-item">
							<input id="mode-2" type="radio" name="mode" class="frame__mode-input" checked></input>
							<label class="frame__mode-label frame__mode-label--light" for="mode-2">Light mode</label>
						</div>
					</div>
				</div>
			</div>/frame -->
		
<?php
require_once('include/footer.php');

?>

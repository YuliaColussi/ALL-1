   
   <footer>
       <div class="footer_wrapper content__info">
           <div class="footer">
                        <div class="footer">
                            <h4>Let's work together?</h4>
                            <a>
                                <p>
                                    Fill in a small briefing form!
                                </p>
                            </a>
                        </div>
           </div>
           <div class="footer_two">
               <h4>Call or email us directly!</h4>
                 <p>
                    +33 626 99 10 02
                </p>
                <p>
                    +33 78 986 10 15
                </p>
                <p>
                    production@creal.com
                </p>
           </div>
       </div>
       
   </footer>
   
   
   
   
   <script src="https://kit.fontawesome.com/1456345ba9.js"></script>
    <!-- <script src="js/snap.svg-min.js"></script> -->
    <script src="js/anime.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollMonitor.js"></script>
    <!-- <script src="js/design_verly.js"></script> -->
    <script src="js/charming.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/gh/anuraghazra/Verly.js@v1.3.0/dist/verly.bundle.js"></script> -->
    <!-- <script href="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.7.5/dat.gui.min.js"></script> -->
    <!-- <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script> -->
    <script src="js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://unpkg.com/tilt.js@1.1.21/dest/tilt.jquery.min.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.maskedinput.js"></script> -->
    <!-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53257/jquery.superscrollorama.js"></script> -->

    <!-- BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- END BOOTSTRAP -->
    

    <!-- CUSTOMED SCRIPTS -->


<!-- AJAX FORM -->
    <script type="text/javascript">

jQuery(document).ready(function($) {
 
$(".ajax-contact-form").submit(function() {
var str = $(this).serialize();
 
$.ajax({
type: "POST",
url: "http://creal-web/action_ajax_form.php",
data: str,
success: function(msg) {
if(msg == 'OK') {
result = '<p>Votre message a été bien reçu! Et on va vous contacter bietot!</p>';
$(".fields").hide();
} else {
result = msg;
}
$('.note').html(result);
}
});
return false;
});
});

</script>

<!-- AJAX END -->

    <script type="text/javascript">
    $('.example-1').tilt({
    glare: true,
    maxGlare: .5
})
</script>

    <script type="text/javascript">
    var doc = document,
    win = window;

var hidden = 'is-hidden',
    visible = 'is-visible',
    active = 'is-active',
    inactive = 'is-inactive',
    transition = 'has-transition';

var tilt_section = doc.getElementsByClassName('js-tilts')[0];

var tilt = doc.getElementsByClassName('js-tilt-block');

var shadow_color = 'rgba(0,0,0,.4)',
    shadow_size_spread = '30px 5px';

var box = [],
    m_x,
    m_y,
    half_tilt_w,
    half_tilt_h,
    x_num,
    y_num,
    count_mouse_away = [];

for (var x = 0; x < tilt.length; x++){

  ( function(_x){

    box.push( tilt[_x].querySelectorAll('a')[0] );

    function getDimensions(){
      half_tilt_w = box[_x].offsetWidth/2;
      half_tilt_h = box[_x].offsetHeight/2;
    }

    getDimensions();
    win.addEventListener('resize', getDimensions);

    tilt[_x].addEventListener('mouseenter', isTracking);

    function isTracking(){
      tilt[_x].removeEventListener('mouseenter', isTracking);
      tilt[_x].addEventListener('mousemove', trackMouse);					
      tilt[_x].addEventListener('mouseleave', waitBeforeStop);
      tilt[_x].classList.remove(inactive);
      setTimeout( function(){
        tilt[_x].classList.remove(transition);
      }, 150);
    }

    function trackMouse(e){
      m_x = e.clientX - tilt[_x].getBoundingClientRect().left - half_tilt_w;
      m_y = e.clientY - tilt[_x].getBoundingClientRect().top - half_tilt_h;

      x_num = Math.round((m_x / half_tilt_w) * 15);
      y_num = Math.round((m_y / half_tilt_h) * 15);

      box[_x].style.boxShadow = shadow_color + ' ' + -x_num + 'px ' + -y_num + 'px ' + shadow_size_spread;
      box[_x].style.transform = 'rotateX(' + -y_num + 'deg) rotateY(' + x_num + 'deg)';
    }

    function waitBeforeStop(){
      count_mouse_away.splice([_x], 0, setTimeout( function(){
        tilt[_x].addEventListener('mouseenter', cancelLeave);
        notTracking();
      }, 500) );
    }

    function cancelLeave(){
      win.clearTimeout(count_mouse_away[_x]);
    }

    function notTracking(){
      tilt[_x].removeEventListener('mousemove', trackMouse);
      tilt[_x].addEventListener('mouseenter', isTracking);
      tilt[_x].classList.add(inactive);
      tilt[_x].classList.add(transition);
    }

  })(x)

}
    </script>

    <script type="text/javascript">

        {
            // Helper vars and functions.
            const extend = function (a, b) {
                for (let key in b) {
                    if (b.hasOwnProperty(key)) {
                        a[key] = b[key];
                    }
                }
                return a;
            };

            // from http://www.quirksmode.org/js/events_properties.html#position
            const getMousePos = function (ev) {
                let posx = 0;
                let posy = 0;
                if (!ev) ev = window.event;
                if (ev.pageX || ev.pageY) {
                    posx = ev.pageX;
                    posy = ev.pageY;
                }
                else if (ev.clientX || ev.clientY) {
                    posx = ev.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
                    posy = ev.clientY + document.body.scrollTop + document.documentElement.scrollTop;
                }
                return { x: posx, y: posy };
            };

            const TiltObj = function (el, options) {
                this.el = el;
                this.options = extend({}, this.options);
                extend(this.options, options);
                this.DOM = {};
                this.DOM.img = this.el.querySelector('.content__img');
                this.DOM.title = this.el.querySelector('.content__title');
                this._initEvents();
            };

            TiltObj.prototype.options = {
                movement: {
                    img: { translation: { x: -10, y: -10 } },
                    title: { translation: { x: 25, y: 25 } },
                }
            };

            TiltObj.prototype._initEvents = function () {
                this.mouseenterFn = (ev) => {
                    anime.remove(this.DOM.img);
                    anime.remove(this.DOM.title);
                };

                this.mousemoveFn = (ev) => {
                    requestAnimationFrame(() => this._layout(ev));
                };

                this.mouseleaveFn = (ev) => {
                    requestAnimationFrame(() => {
                        anime({
                            targets: [this.DOM.img, this.DOM.title],
                            duration: 1500,
                            easing: 'easeOutElastic',
                            elasticity: 400,
                            translateX: 0,
                            translateY: 0
                        });
                    });
                };

                this.el.addEventListener('mousemove', this.mousemoveFn);
                this.el.addEventListener('mouseleave', this.mouseleaveFn);
                this.el.addEventListener('mouseenter', this.mouseenterFn);
            };

            TiltObj.prototype._layout = function (ev) {
                // Mouse position relative to the document.
                const mousepos = getMousePos(ev);
                // Document scrolls.
                const docScrolls = { left: document.body.scrollLeft + document.documentElement.scrollLeft, top: document.body.scrollTop + document.documentElement.scrollTop };
                const bounds = this.el.getBoundingClientRect();
                // Mouse position relative to the main element (this.DOM.el).
                const relmousepos = { x: mousepos.x - bounds.left - docScrolls.left, y: mousepos.y - bounds.top - docScrolls.top };

                // Movement settings for the animatable elements.
                const t = {
                    img: this.options.movement.img.translation,
                    title: this.options.movement.title.translation,
                };

                const transforms = {
                    img: {
                        x: (-1 * t.img.x - t.img.x) / bounds.width * relmousepos.x + t.img.x,
                        y: (-1 * t.img.y - t.img.y) / bounds.height * relmousepos.y + t.img.y
                    },
                    title: {
                        x: (-1 * t.title.x - t.title.x) / bounds.width * relmousepos.x + t.title.x,
                        y: (-1 * t.title.y - t.title.y) / bounds.height * relmousepos.y + t.title.y
                    }
                };
                this.DOM.img.style.WebkitTransform = this.DOM.img.style.transform = 'translateX(' + transforms.img.x + 'px) translateY(' + transforms.img.y + 'px)';
                this.DOM.title.style.WebkitTransform = this.DOM.title.style.transform = 'translateX(' + transforms.title.x + 'px) translateY(' + transforms.title.y + 'px)';
            };

            const DOM = {};
            DOM.svg = document.querySelector('.morph');
            DOM.shapeEl = DOM.svg.querySelector('path');
            DOM.contentElems = Array.from(document.querySelectorAll('.content-wrap'));
            DOM.contentLinks = Array.from(document.querySelectorAll('.content__link'));
            DOM.footer = document.querySelector('.content--related');
            const contentElemsTotal = DOM.contentElems.length;
            const shapes = [
                {
                    path: 'M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                    pathAlt: 'M 262.9,252.2 C 210.1,338.2 273.3,400.5 298.5,520 323.7,639.6 511.2,537.2 620.3,555.7 750.6,577.8 872.2,707.4 987.3,686.5 1102,665.6 1218,547.8 1173,429.2 1128,310.6 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                    scaleX: 2.7,
                    scaleY: 2,
                    rotate: 1,
                    tx: -10,
                    ty: -10,
                    fill: {
                        color: '#282faf',
                        duration: 500,
                        easing: 'linear'
                    },
                    animation: {
                        path: {
                            duration: 3000,
                            easing: 'easeOutElastic',
                            elasticity: 600
                        },
                        svg: {
                            duration: 2000,
                            easing: 'easeOutElastic'
                        }
                    }
                },
                {
                    path: 'M 415.6,206.3 C 407.4,286.6 438.1,373.6 496.2,454.8 554.3,536.1 497,597.2 579.7,685.7 662.4,774.1 834.3,731.7 898.5,653.4 962.3,575 967.1,486 937.7,370 909.3,253.9 937.7,201.5 833.4,105.4 729.3,9.338 602.2,13.73 530.6,41.91 459,70.08 423.9,126.1 415.6,206.3 Z',
                    pathAlt: 'M 415.6,206.3 C 407.4,286.6 415.5,381.7 473.6,462.9 531.7,544.2 482.5,637.6 579.7,685.7 676.9,733.8 826.2,710.7 890.4,632.4 954.2,554 926.8,487.6 937.7,370 948.6,252.4 937.7,201.5 833.4,105.4 729.3,9.338 602.2,13.73 530.6,41.91 459,70.08 423.9,126.1 415.6,206.3 Z',
                    scaleX: 2.4,
                    scaleY: 1.4,
                    rotate: 0,
                    tx: 0,
                    ty: -100,
                    fill: {
                        color: '#282faf',
                        duration: 500,
                        easing: 'linear'
                    },
                    animation: {
                        path: {
                            duration: 2000,
                            easing: 'easeOutElastic',
                            elasticity: 600
                        },
                        svg: {
                            duration: 2000,
                            easing: 'easeOutElastic'
                        }
                    }
                },
                {
                    path: 'M 383.8,163.4 C 335.8,352.3 591.6,317.1 608.7,420.8 625.8,524.5 580.5,626 647.3,688 714,750 837.1,760.5 940.9,661.5 1044,562.3 1041,455.8 975.8,393.6 909.8,331.5 854.2,365.4 784.4,328.1 714.6,290.8 771.9,245.2 733.1,132.4 694.2,19.52 431.9,-25.48 383.8,163.4 Z',
                    pathAlt: 'M 383.8,163.4 C 345.5,324.9 591.6,317.1 608.7,420.8 625.8,524.5 595.1,597 647.3,688 699.5,779 837.1,760.5 940.9,661.5 1044,562.3 1068,444.4 975.8,393.6 884,342.8 854.2,365.4 784.4,328.1 714.6,290.8 820.3,237.2 733.1,132.4 645.9,27.62 422.1,1.919 383.8,163.4 Z',
                    scaleX: 5.5,
                    scaleY: 3.1,
                    rotate: -20,
                    tx: 50,
                    ty: 200,
                    fill: {
                        color: '#282faf',
                        duration: 500,
                        easing: 'linear'
                    },
                    animation: {
                        path: {
                            duration: 3000,
                            easing: 'easeOutElastic',
                            elasticity: 600
                        },
                        svg: {
                            duration: 2500,
                            easing: 'easeOutElastic'
                        }
                    }
                },
                {
                    path: 'M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                    pathAlt: 'M 262.9,252.2 C 210.1,338.2 273.3,400.5 298.5,520 323.7,639.6 511.2,537.2 620.3,555.7 750.6,577.8 872.2,707.4 987.3,686.5 1102,665.6 1218,547.8 1173,429.2 1128,310.6 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                    scaleX: 1.5,
                    scaleY: 1,
                    rotate: -20,
                    tx: 0,
                    ty: -50,
                    fill: {
                        color: '#282faf',
                        duration: 500,
                        easing: 'linear'
                    },
                    animation: {
                        path: {
                            duration: 3000,
                            easing: 'easeOutQuad',
                            elasticity: 600
                        },
                        svg: {
                            duration: 3000,
                            easing: 'easeOutElastic'
                        }
                    }
                },
                {
                    path: 'M 247.6,239.6 C 174.3,404.5 245.5,601.9 358.5,624.3 471.5,646.6 569.1,611.6 659.7,655.7 750.4,699.7 1068,687.6 1153,534.4 1237,381.1 1114,328.4 1127,227.4 1140,126.3 1016,51.08 924.6,116.8 833.8,182.5 928.4,393.8 706.8,283.5 485.2,173.1 320.8,74.68 247.6,239.6 Z',
                    pathAlt: 'M 247.6,239.6 C 174.3,404.5 271.3,550.3 358.5,624.3 445.7,698.3 569.1,611.6 659.7,655.7 750.4,699.7 1145,699 1153,534.4 1161,369.8 1114,328.4 1127,227.4 1140,126.3 1016,51.08 924.6,116.8 833.8,182.5 894.5,431 706.8,283.5 519.1,136 320.8,74.68 247.6,239.6 Z',
                    scaleX: 2.8,
                    scaleY: 2.5,
                    rotate: 0,
                    tx: 50,
                    ty: -150,
                    fill: {
                        color: '#282faf',
                        duration: 500,
                        easing: 'linear'
                    },
                    animation: {
                        path: {
                            duration: 3000,
                            easing: 'easeOutElastic',
                            elasticity: 600
                        },
                        svg: {
                            duration: 2000,
                            easing: 'easeOutExpo'
                        }
                    }
                },
                // footer shape:
                {
                    path: 'M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                    pathAlt: 'M 262.9,252.2 C 210.1,338.2 273.3,400.5 298.5,520 323.7,639.6 511.2,537.2 620.3,555.7 750.6,577.8 872.2,707.4 987.3,686.5 1102,665.6 1218,547.8 1173,429.2 1128,310.6 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                    scaleX: 5.5,
                    scaleY: 5,
                    rotate: 0,
                    tx: 0,
                    ty: 0,
                    fill: {
                        color: '#282faf',
                        duration: 500,
                        easing: 'linear'
                    },
                    animation: {
                        path: {
                            duration: 3000,
                            easing: 'easeOutQuad',
                            elasticity: 600
                        },
                        svg: {
                            duration: 3000,
                            easing: 'easeOutElastic'
                        }
                    }
                }
            ];
            let step;

            const initShapeLoop = function (pos) {
                pos = pos || 0;
                anime.remove(DOM.shapeEl);
                anime({
                    targets: DOM.shapeEl,
                    easing: 'linear',
                    d: [{ value: shapes[pos].pathAlt, duration: 3500 }, { value: shapes[pos].path, duration: 3500 }],
                    loop: true,
                    fill: {
                        value: shapes[pos].fill.color,
                        duration: shapes[pos].fill.duration,
                        easing: shapes[pos].fill.easing
                    },
                    direction: 'alternate'
                });
            };

            const initShapeEl = function () {
                anime.remove(DOM.svg);
                anime({
                    targets: DOM.svg,
                    duration: 1,
                    easing: 'linear',
                    scaleX: shapes[0].scaleX,
                    scaleY: shapes[0].scaleY,
                    translateX: shapes[0].tx + 'px',
                    translateY: shapes[0].ty + 'px',
                    rotate: shapes[0].rotate + 'deg'
                });

                initShapeLoop();
            };

            const createScrollWatchers = function () {
                DOM.contentElems.forEach((el, pos) => {
                    const scrollElemToWatch = pos ? DOM.contentElems[pos] : DOM.footer;
                    pos = pos ? pos : contentElemsTotal;
                    const watcher = scrollMonitor.create(scrollElemToWatch, -300);

                    watcher.enterViewport(function () {
                        step = pos;
                        anime.remove(DOM.shapeEl);
                        anime({
                            targets: DOM.shapeEl,
                            duration: shapes[pos].animation.path.duration,
                            easing: shapes[pos].animation.path.easing,
                            elasticity: shapes[pos].animation.path.elasticity || 0,
                            d: shapes[pos].path,
                            fill: {
                                value: shapes[pos].fill.color,
                                duration: shapes[pos].fill.duration,
                                easing: shapes[pos].fill.easing
                            },
                            complete: function () {
                                initShapeLoop(pos);
                            }
                        });

                        anime.remove(DOM.svg);
                        anime({
                            targets: DOM.svg,
                            duration: shapes[pos].animation.svg.duration,
                            easing: shapes[pos].animation.svg.easing,
                            elasticity: shapes[pos].animation.svg.elasticity || 0,
                            scaleX: shapes[pos].scaleX,
                            scaleY: shapes[pos].scaleY,
                            translateX: shapes[pos].tx + 'px',
                            translateY: shapes[pos].ty + 'px',
                            rotate: shapes[pos].rotate + 'deg'
                        });
                    });

                    watcher.exitViewport(function () {
                        const idx = !watcher.isAboveViewport ? pos - 1 : pos + 1;

                        if (idx <= contentElemsTotal && step !== idx) {
                            step = idx;
                            anime.remove(DOM.shapeEl);
                            anime({
                                targets: DOM.shapeEl,
                                duration: shapes[idx].animation.path.duration,
                                easing: shapes[idx].animation.path.easing,
                                elasticity: shapes[idx].animation.path.elasticity || 0,
                                d: shapes[idx].path,
                                fill: {
                                    value: shapes[idx].fill.color,
                                    duration: shapes[idx].fill.duration,
                                    easing: shapes[idx].fill.easing
                                },
                                complete: function () {
                                    initShapeLoop(idx);
                                }
                            });

                            anime.remove(DOM.svg);
                            anime({
                                targets: DOM.svg,
                                duration: shapes[idx].animation.svg.duration,
                                easing: shapes[idx].animation.svg.easing,
                                elasticity: shapes[idx].animation.svg.elasticity || 0,
                                scaleX: shapes[idx].scaleX,
                                scaleY: shapes[idx].scaleY,
                                translateX: shapes[idx].tx + 'px',
                                translateY: shapes[idx].ty + 'px',
                                rotate: shapes[idx].rotate + 'deg'
                            });
                        }
                    });
                });
            };

            const init = function () {
                imagesLoaded(document.body, () => {
                    initShapeEl();
                    createScrollWatchers();
                    Array.from(document.querySelectorAll('.content--layout')).forEach(el => new TiltObj(el));
                    // Remove loading class from body
                    document.body.classList.remove('loading');
                });
            }

            init();
        };
    </script>


    <!-- WEBSITE SCRIPTS  -->

 <script type="text/javascript">
            {
                // Helper vars and functions.
                const extend = function (a, b) {
                    for (let key in b) {
                        if (b.hasOwnProperty(key)) {
                            a[key] = b[key];
                        }
                    }
                    return a;
                };

                // from http://www.quirksmode.org/js/events_properties.html#position
                const getMousePos = function (ev) {
                    let posx = 0;
                    let posy = 0;
                    if (!ev) ev = window.event;
                    if (ev.pageX || ev.pageY) {
                        posx = ev.pageX;
                        posy = ev.pageY;
                    }
                    else if (ev.clientX || ev.clientY) {
                        posx = ev.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
                        posy = ev.clientY + document.body.scrollTop + document.documentElement.scrollTop;
                    }
                    return { x: posx, y: posy };
                };

                const TiltObj = function (el, options) {
                    this.el = el;
                    this.options = extend({}, this.options);
                    extend(this.options, options);
                    this.DOM = {};
                    this.DOM.img = this.el.querySelector('.content__img');
                    this.DOM.title = this.el.querySelector('.content__title');
                    this._initEvents();
                };

                TiltObj.prototype.options = {
                    movement: {
                        img: { translation: { x: -10, y: -10 } },
                        title: { translation: { x: 25, y: 25 } },
                    }
                };

                TiltObj.prototype._initEvents = function () {
                    this.mouseenterFn = (ev) => {
                        anime.remove(this.DOM.img);
                        anime.remove(this.DOM.title);
                    };

                    this.mousemoveFn = (ev) => {
                        requestAnimationFrame(() => this._layout(ev));
                    };

                    this.mouseleaveFn = (ev) => {
                        requestAnimationFrame(() => {
                            anime({
                                targets: [this.DOM.img, this.DOM.title],
                                duration: 1500,
                                easing: 'easeOutElastic',
                                elasticity: 400,
                                translateX: 0,
                                translateY: 0
                            });
                        });
                    };

                    this.el.addEventListener('mousemove', this.mousemoveFn);
                    this.el.addEventListener('mouseleave', this.mouseleaveFn);
                    this.el.addEventListener('mouseenter', this.mouseenterFn);
                };

                TiltObj.prototype._layout = function (ev) {
                    // Mouse position relative to the document.
                    const mousepos = getMousePos(ev);
                    // Document scrolls.
                    const docScrolls = { left: document.body.scrollLeft + document.documentElement.scrollLeft, top: document.body.scrollTop + document.documentElement.scrollTop };
                    const bounds = this.el.getBoundingClientRect();
                    // Mouse position relative to the main element (this.DOM.el).
                    const relmousepos = { x: mousepos.x - bounds.left - docScrolls.left, y: mousepos.y - bounds.top - docScrolls.top };

                    // Movement settings for the animatable elements.
                    const t = {
                        img: this.options.movement.img.translation,
                        title: this.options.movement.title.translation,
                    };

                    const transforms = {
                        img: {
                            x: (-1 * t.img.x - t.img.x) / bounds.width * relmousepos.x + t.img.x,
                            y: (-1 * t.img.y - t.img.y) / bounds.height * relmousepos.y + t.img.y
                        },
                        title: {
                            x: (-1 * t.title.x - t.title.x) / bounds.width * relmousepos.x + t.title.x,
                            y: (-1 * t.title.y - t.title.y) / bounds.height * relmousepos.y + t.title.y
                        }
                    };
                    this.DOM.img.style.WebkitTransform = this.DOM.img.style.transform = 'translateX(' + transforms.img.x + 'px) translateY(' + transforms.img.y + 'px)';
                    this.DOM.title.style.WebkitTransform = this.DOM.title.style.transform = 'translateX(' + transforms.title.x + 'px) translateY(' + transforms.title.y + 'px)';
                };

                const DOM = {};
                DOM.svg = document.querySelector('.morph');
                DOM.shapeEl = DOM.svg.querySelector('path');
                DOM.contentElems = Array.from(document.querySelectorAll('.content-wrap'));
                DOM.contentLinks = Array.from(document.querySelectorAll('.content__link'));
                DOM.footer = document.querySelector('.content--related');
                const contentElemsTotal = DOM.contentElems.length;
                const shapes = [
                    {
                        path: 'M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                        pathAlt: 'M 262.9,252.2 C 210.1,338.2 273.3,400.5 298.5,520 323.7,639.6 511.2,537.2 620.3,555.7 750.6,577.8 872.2,707.4 987.3,686.5 1102,665.6 1218,547.8 1173,429.2 1128,310.6 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                        scaleX: 2.7,
                        scaleY: 2,
                        rotate: 1,
                        tx: -10,
                        ty: -10,
                        fill: {
                            color: '#282faf',
                            duration: 500,
                            easing: 'linear'
                        },
                        animation: {
                            path: {
                                duration: 3000,
                                easing: 'easeOutElastic',
                                elasticity: 600
                            },
                            svg: {
                                duration: 2000,
                                easing: 'easeOutElastic'
                            }
                        }
                    },
                    {
                        path: 'M 415.6,206.3 C 407.4,286.6 438.1,373.6 496.2,454.8 554.3,536.1 497,597.2 579.7,685.7 662.4,774.1 834.3,731.7 898.5,653.4 962.3,575 967.1,486 937.7,370 909.3,253.9 937.7,201.5 833.4,105.4 729.3,9.338 602.2,13.73 530.6,41.91 459,70.08 423.9,126.1 415.6,206.3 Z',
                        pathAlt: 'M 415.6,206.3 C 407.4,286.6 415.5,381.7 473.6,462.9 531.7,544.2 482.5,637.6 579.7,685.7 676.9,733.8 826.2,710.7 890.4,632.4 954.2,554 926.8,487.6 937.7,370 948.6,252.4 937.7,201.5 833.4,105.4 729.3,9.338 602.2,13.73 530.6,41.91 459,70.08 423.9,126.1 415.6,206.3 Z',
                        scaleX: 2.4,
                        scaleY: 1.4,
                        rotate: 0,
                        tx: 0,
                        ty: -100,
                        fill: {
                            color: '#282faf',
                            duration: 500,
                            easing: 'linear'
                        },
                        animation: {
                            path: {
                                duration: 2000,
                                easing: 'easeOutElastic',
                                elasticity: 600
                            },
                            svg: {
                                duration: 2000,
                                easing: 'easeOutElastic'
                            }
                        }
                    },
                    {
                        path: 'M 383.8,163.4 C 335.8,352.3 591.6,317.1 608.7,420.8 625.8,524.5 580.5,626 647.3,688 714,750 837.1,760.5 940.9,661.5 1044,562.3 1041,455.8 975.8,393.6 909.8,331.5 854.2,365.4 784.4,328.1 714.6,290.8 771.9,245.2 733.1,132.4 694.2,19.52 431.9,-25.48 383.8,163.4 Z',
                        pathAlt: 'M 383.8,163.4 C 345.5,324.9 591.6,317.1 608.7,420.8 625.8,524.5 595.1,597 647.3,688 699.5,779 837.1,760.5 940.9,661.5 1044,562.3 1068,444.4 975.8,393.6 884,342.8 854.2,365.4 784.4,328.1 714.6,290.8 820.3,237.2 733.1,132.4 645.9,27.62 422.1,1.919 383.8,163.4 Z',
                        scaleX: 5.5,
                        scaleY: 3.1,
                        rotate: -20,
                        tx: 50,
                        ty: 200,
                        fill: {
                            color: '#282faf',
                            duration: 500,
                            easing: 'linear'
                        },
                        animation: {
                            path: {
                                duration: 3000,
                                easing: 'easeOutElastic',
                                elasticity: 600
                            },
                            svg: {
                                duration: 2500,
                                easing: 'easeOutElastic'
                            }
                        }
                    },
                    {
                        path: 'M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                        pathAlt: 'M 262.9,252.2 C 210.1,338.2 273.3,400.5 298.5,520 323.7,639.6 511.2,537.2 620.3,555.7 750.6,577.8 872.2,707.4 987.3,686.5 1102,665.6 1218,547.8 1173,429.2 1128,310.6 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                        scaleX: 1.5,
                        scaleY: 1,
                        rotate: -20,
                        tx: 0,
                        ty: -50,
                        fill: {
                            color: '#282faf',
                            duration: 500,
                            easing: 'linear'
                        },
                        animation: {
                            path: {
                                duration: 3000,
                                easing: 'easeOutQuad',
                                elasticity: 600
                            },
                            svg: {
                                duration: 3000,
                                easing: 'easeOutElastic'
                            }
                        }
                    },
                    {
                        path: 'M 247.6,239.6 C 174.3,404.5 245.5,601.9 358.5,624.3 471.5,646.6 569.1,611.6 659.7,655.7 750.4,699.7 1068,687.6 1153,534.4 1237,381.1 1114,328.4 1127,227.4 1140,126.3 1016,51.08 924.6,116.8 833.8,182.5 928.4,393.8 706.8,283.5 485.2,173.1 320.8,74.68 247.6,239.6 Z',
                        pathAlt: 'M 247.6,239.6 C 174.3,404.5 271.3,550.3 358.5,624.3 445.7,698.3 569.1,611.6 659.7,655.7 750.4,699.7 1145,699 1153,534.4 1161,369.8 1114,328.4 1127,227.4 1140,126.3 1016,51.08 924.6,116.8 833.8,182.5 894.5,431 706.8,283.5 519.1,136 320.8,74.68 247.6,239.6 Z',
                        scaleX: 2.8,
                        scaleY: 2.5,
                        rotate: 0,
                        tx: 50,
                        ty: -150,
                        fill: {
                            color: '#282faf',
                            duration: 500,
                            easing: 'linear'
                        },
                        animation: {
                            path: {
                                duration: 3000,
                                easing: 'easeOutElastic',
                                elasticity: 600
                            },
                            svg: {
                                duration: 2000,
                                easing: 'easeOutExpo'
                            }
                        }
                    },
                    // footer shape:
                    {
                        path: 'M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                        pathAlt: 'M 262.9,252.2 C 210.1,338.2 273.3,400.5 298.5,520 323.7,639.6 511.2,537.2 620.3,555.7 750.6,577.8 872.2,707.4 987.3,686.5 1102,665.6 1218,547.8 1173,429.2 1128,310.6 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                        scaleX: 5.5,
                        scaleY: 5,
                        rotate: 0,
                        tx: 0,
                        ty: 0,
                        fill: {
                            color: '#282faf',
                            duration: 500,
                            easing: 'linear'
                        },
                        animation: {
                            path: {
                                duration: 3000,
                                easing: 'easeOutQuad',
                                elasticity: 600
                            },
                            svg: {
                                duration: 3000,
                                easing: 'easeOutElastic'
                            }
                        }
                    }
                ];
                let step;

                const initShapeLoop = function (pos) {
                    pos = pos || 0;
                    anime.remove(DOM.shapeEl);
                    anime({
                        targets: DOM.shapeEl,
                        easing: 'linear',
                        d: [{ value: shapes[pos].pathAlt, duration: 3500 }, { value: shapes[pos].path, duration: 3500 }],
                        loop: true,
                        fill: {
                            value: shapes[pos].fill.color,
                            duration: shapes[pos].fill.duration,
                            easing: shapes[pos].fill.easing
                        },
                        direction: 'alternate'
                    });
                };

                const initShapeEl = function () {
                    anime.remove(DOM.svg);
                    anime({
                        targets: DOM.svg,
                        duration: 1,
                        easing: 'linear',
                        scaleX: shapes[0].scaleX,
                        scaleY: shapes[0].scaleY,
                        translateX: shapes[0].tx + 'px',
                        translateY: shapes[0].ty + 'px',
                        rotate: shapes[0].rotate + 'deg'
                    });

                    initShapeLoop();
                };

                const createScrollWatchers = function () {
                    DOM.contentElems.forEach((el, pos) => {
                        const scrollElemToWatch = pos ? DOM.contentElems[pos] : DOM.footer;
                        pos = pos ? pos : contentElemsTotal;
                        const watcher = scrollMonitor.create(scrollElemToWatch, -300);

                        watcher.enterViewport(function () {
                            step = pos;
                            anime.remove(DOM.shapeEl);
                            anime({
                                targets: DOM.shapeEl,
                                duration: shapes[pos].animation.path.duration,
                                easing: shapes[pos].animation.path.easing,
                                elasticity: shapes[pos].animation.path.elasticity || 0,
                                d: shapes[pos].path,
                                fill: {
                                    value: shapes[pos].fill.color,
                                    duration: shapes[pos].fill.duration,
                                    easing: shapes[pos].fill.easing
                                },
                                complete: function () {
                                    initShapeLoop(pos);
                                }
                            });

                            anime.remove(DOM.svg);
                            anime({
                                targets: DOM.svg,
                                duration: shapes[pos].animation.svg.duration,
                                easing: shapes[pos].animation.svg.easing,
                                elasticity: shapes[pos].animation.svg.elasticity || 0,
                                scaleX: shapes[pos].scaleX,
                                scaleY: shapes[pos].scaleY,
                                translateX: shapes[pos].tx + 'px',
                                translateY: shapes[pos].ty + 'px',
                                rotate: shapes[pos].rotate + 'deg'
                            });
                        });

                        watcher.exitViewport(function () {
                            const idx = !watcher.isAboveViewport ? pos - 1 : pos + 1;

                            if (idx <= contentElemsTotal && step !== idx) {
                                step = idx;
                                anime.remove(DOM.shapeEl);
                                anime({
                                    targets: DOM.shapeEl,
                                    duration: shapes[idx].animation.path.duration,
                                    easing: shapes[idx].animation.path.easing,
                                    elasticity: shapes[idx].animation.path.elasticity || 0,
                                    d: shapes[idx].path,
                                    fill: {
                                        value: shapes[idx].fill.color,
                                        duration: shapes[idx].fill.duration,
                                        easing: shapes[idx].fill.easing
                                    },
                                    complete: function () {
                                        initShapeLoop(idx);
                                    }
                                });

                                anime.remove(DOM.svg);
                                anime({
                                    targets: DOM.svg,
                                    duration: shapes[idx].animation.svg.duration,
                                    easing: shapes[idx].animation.svg.easing,
                                    elasticity: shapes[idx].animation.svg.elasticity || 0,
                                    scaleX: shapes[idx].scaleX,
                                    scaleY: shapes[idx].scaleY,
                                    translateX: shapes[idx].tx + 'px',
                                    translateY: shapes[idx].ty + 'px',
                                    rotate: shapes[idx].rotate + 'deg'
                                });
                            }
                        });
                    });
                };

                const init = function () {
                    imagesLoaded(document.body, () => {
                        initShapeEl();
                        createScrollWatchers();
                        Array.from(document.querySelectorAll('.content--layout')).forEach(el => new TiltObj(el));
                        // Remove loading class from body
                        document.body.classList.remove('loading');
                    });
                }

                init();
            };
        </script>

        <!-- WEBSITE SCRIPT END -->


    <!-- //     window.onscroll = function () {
    // var s = Snap('#growing_round');
    // var myRound = s.circle(150, 150, 100);

    // myRound.attr({
    //     fill: '#e73c4e',
    //     stroke: '#000',
    //     strokeWidth: 0
    // })

    // // myTexture.drag();

    // myRound.animate({ r: 500 }, 2000);

    // // myTexture.animate({r: 150}, 2000);

    // var resize = function (r) {
    //     var newRadius = r === 500 ? 100 : 50;
    //     myTexture.animate({ r: r }, 1500, function () {
    //         resize(newRadius);
    //     });
    // }


    // resize(50);
    //  }
 
   

    // var c = document.getElementById("c");
    //     var ctx = c.getContext("2d");
    //     var cH;
    //     var cW;
    //     var bgColor = "#FFFFFF";
    //     var animations = [];
    //     var circles = [];

    //     var colorPicker = (function () {
    //         var colors = ["#FFFFFF", "#e73c4e"];
    //         var index = 0;
    //         function next() {
    //             index = index++ < colors.length - 1 ? index : 0;
    //             return colors[index];
    //         }
    //         function current() {
    //             return colors[index]
    //         }
    //         return {
    //             next: next,
    //             current: current
    //         }
    //     })();

    //     function removeAnimation(animation) {
    //         var index = animations.indexOf(animation);
    //         if (index > -1) animations.splice(index, 1);
    //     }

    //     function calcPageFillRadius(x, y) {
    //         var l = Math.max(x - 0, cW - x);
    //         var h = Math.max(y - 0, cH - y);
    //         return Math.sqrt(Math.pow(l, 2) + Math.pow(h, 2));
    //     }

    //     function addClickListeners() {
    //         document.addEventListener("touchstart", handleEvent);
    //         document.addEventListener("mousedown", handleEvent);
    //     };

    //     function handleEvent(e) {
    //         if (e.touches) {
    //             e.preventDefault();
    //             e = e.touches[0];
    //         }
    //         var currentColor = colorPicker.current();
    //         var nextColor = colorPicker.next();
    //         var targetR = calcPageFillRadius(e.pageX, e.pageY);
    //         var rippleSize = Math.min(200, (cW * .4));
    //         var minCoverDuration = 750;

    //         var pageFill = new Circle({
    //             x: e.pageX,
    //             y: e.pageY,
    //             r: 0,
    //             fill: nextColor
    //         });
    //         var fillAnimation = anime({
    //             targets: pageFill,
    //             r: targetR,
    //             duration: Math.max(targetR / 2, minCoverDuration),
    //             easing: "easeOutQuart",
    //             complete: function () {
    //                 bgColor = pageFill.fill;
    //                 removeAnimation(fillAnimation);
    //             }
    //         });

    //         var ripple = new Circle({
    //             x: e.pageX,
    //             y: e.pageY,
    //             r: 0,
    //             fill: currentColor,
    //             stroke: {
    //                 width: 3,
    //                 color: currentColor
    //             },
    //             opacity: 1
    //         });
    //         var rippleAnimation = anime({
    //             targets: ripple,
    //             r: rippleSize,
    //             opacity: 0,
    //             easing: "easeOutExpo",
    //             duration: 900,
    //             complete: removeAnimation
    //         });

    //         var particles = [];
    //         for (var i = 0; i < 32; i++) {
    //             var particle = new Circle({
    //                 x: e.pageX,
    //                 y: e.pageY,
    //                 fill: currentColor,
    //                 r: anime.random(24, 48)
    //             })
    //             particles.push(particle);
    //         }
    //         var particlesAnimation = anime({
    //             targets: particles,
    //             x: function (particle) {
    //                 return particle.x + anime.random(rippleSize, -rippleSize);
    //             },
    //             y: function (particle) {
    //                 return particle.y + anime.random(rippleSize * 1.15, -rippleSize * 1.15);
    //             },
    //             r: 0,
    //             easing: "easeOutExpo",
    //             duration: anime.random(1000, 1300),
    //             complete: removeAnimation
    //         });
    //         animations.push(fillAnimation, rippleAnimation, particlesAnimation);
    //     }

    //     function extend(a, b) {
    //         for (var key in b) {
    //             if (b.hasOwnProperty(key)) {
    //                 a[key] = b[key];
    //             }
    //         }
    //         return a;
    //     }

    //     var Circle = function (opts) {
    //         extend(this, opts);
    //     }

    //     Circle.prototype.draw = function () {
    //         ctx.globalAlpha = this.opacity || 1;
    //         ctx.beginPath();
    //         ctx.arc(this.x, this.y, this.r, 0, 2 * Math.PI, false);
    //         if (this.stroke) {
    //             ctx.strokeStyle = this.stroke.color;
    //             ctx.lineWidth = this.stroke.width;
    //             ctx.stroke();
    //         }
    //         if (this.fill) {
    //             ctx.fillStyle = this.fill;
    //             ctx.fill();
    //         }
    //         ctx.closePath();
    //         ctx.globalAlpha = 1;
    //     }

    //     var animate = anime({
    //         duration: Infinity,
    //         update: function () {
    //             ctx.fillStyle = bgColor;
    //             ctx.fillRect(0, 0, cW, cH);
    //             animations.forEach(function (anim) {
    //                 anim.animatables.forEach(function (animatable) {
    //                     animatable.target.draw();
    //                 });
    //             });
    //         }
    //     });

    //     var resizeCanvas = function () {
    //         cW = window.innerWidth;
    //         cH = window.innerHeight;
    //         c.width = cW * devicePixelRatio;
    //         c.height = cH * devicePixelRatio;
    //         ctx.scale(devicePixelRatio, devicePixelRatio);
    //     };

    //     var obj = document.getElementById("text_header");
    //         // obj.style.position = "fixed";
    //         obj.style.top = 50;
    //         obj.style.left = 0;

    //     (function init() {
    //         resizeCanvas();
    //         if (window.CP) {
    //             // CodePen's loop detection was causin' problems
    //             // and I have no idea why, so...
    //             window.CP.PenTimer.MAX_TIME_IN_LOOP_WO_EXIT = 6000;
    //         }
    //         window.addEventListener("resize", resizeCanvas);
    //         addClickListeners();
    //         if (!!window.location.pathname.match(/fullcpgrid/)) {
    //             startFauxClicking();
    //         }
    //         handleInactiveUser();
    //     })();

    //     function handleInactiveUser() {
    //         var inactive = setTimeout(function () {
    //             fauxClick(cW / 2, cH / 2);
    //         }, 2000);

    //         function clearInactiveTimeout() {
    //             clearTimeout(inactive);
    //             document.removeEventListener("mousedown", clearInactiveTimeout);
    //             document.removeEventListener("touchstart", clearInactiveTimeout);
    //         }

    //         document.addEventListener("mousedown", clearInactiveTimeout);
    //         document.addEventListener("touchstart", clearInactiveTimeout);
    //     }

    //     function startFauxClicking() {
    //         setTimeout(function () {
    //             fauxClick(anime.random(cW * .2, cW * .8), anime.random(cH * .2, cH * .8));
    //             startFauxClicking();
    //         }, anime.random(200, 900));
    //     }

    //     function fauxClick(x, y) {
    //         var fauxClick = new Event("mousedown");
    //         fauxClick.pageX = x;
    //         fauxClick.pageY = y;
    //         document.dispatchEvent(fauxClick);
    //     }


    // FORM MAIN ONCLICK

//         jQuery(document).ready(function($) {

//     // Добавляем маску для поля с номера телефона
//     $('#phone').mask('+7 (999) 999-99-99');

//     // Проверяет отмечен ли чекбокс согласия
//     // с обработкой персональных данных
//     $('#check').on('click', function() {
//         if ($("#check").prop("checked")) {
//             $('#button').attr('disabled', false);
//         } else {
//             $('#button').attr('disabled', true);
//         }
//     });

//     // Отправляет данные из формы на сервер и получает ответ
//     $('#contactForm').on('submit', function(event) {
        
//         event.preventDefault();

//         var form = $('#contactForm'),
//             button = $('#button'),
//             answer = $('#answer'),
//             loader = $('#loader');

//         $.ajax({
//             url: 'handler.php',
//             type: 'POST',
//             data: form.serialize(),
//             beforeSend: function() {
//                 answer.empty();
//                 button.attr('disabled', true).css('margin-bottom', '20px');
//                 loader.fadeIn();
//             },
//             success: function(result) {
//                 loader.fadeOut(300, function() {
//                     answer.text(result);
//                 });
//                 form.find('.field').val('');
//                 button.attr('disabled', false);
//             },
//             error: function() {
//                 loader.fadeOut(300, function() {
//                     answer.text('Произошла ошибка! Попробуйте позже.');
//                 });
//                 button.attr('disabled', false);
//             }
//         });
    
//     });

// }); -->

<script type="text/javascript">
     new Modal({
            btn: '.button',
            overlay: '.overlay',
            close: '.close',
            modal: '.pop-up-form'
        });

        new Modal({
            btn: '.button-1',
            overlay: '.overlay',
            close: '.close',
            modal: '.pop-up-form'
        });

        function Modal(obj) {
            var htmlBody = document.querySelector('body');

            this.btn = document.body.querySelector(obj.btn),
                this.overlay = document.body.querySelector(obj.overlay),
                this.close = document.body.querySelector(obj.close),
                this.modal = document.body.querySelector(obj.modal)

            this.open = function () {
                this.overlay.style.display = "block";
                this.modal.style.display = "block";

            };

            this.closePop = function () {
                this.overlay.style.display = "none";
                this.modal.style.display = "none";
            };

            // htmlBody.addEventListener('mouseup',() => this.closePop());
            this.btn.addEventListener('click', () => this.open());
            this.close.addEventListener('click', () => this.closePop());
            this.overlay.addEventListener('click', () => this.closePop());
        }
    </script>
    <!-- FORM ON CLICK END -->


    <!-- DESIGN PAGE SCRIPTS -->
     <script type="text/javascript">
            {
                // Helper vars and functions.
                const extend = function (a, b) {
                    for (let key in b) {
                        if (b.hasOwnProperty(key)) {
                            a[key] = b[key];
                        }
                    }
                    return a;
                };

                // from http://www.quirksmode.org/js/events_properties.html#position
                const getMousePos = function (ev) {
                    let posx = 0;
                    let posy = 0;
                    if (!ev) ev = window.event;
                    if (ev.pageX || ev.pageY) {
                        posx = ev.pageX;
                        posy = ev.pageY;
                    }
                    else if (ev.clientX || ev.clientY) {
                        posx = ev.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
                        posy = ev.clientY + document.body.scrollTop + document.documentElement.scrollTop;
                    }
                    return { x: posx, y: posy };
                };

                const TiltObj = function (el, options) {
                    this.el = el;
                    this.options = extend({}, this.options);
                    extend(this.options, options);
                    this.DOM = {};
                    this.DOM.img = this.el.querySelector('.content__img');
                    this.DOM.title = this.el.querySelector('.content__title');
                    this._initEvents();
                };

                TiltObj.prototype.options = {
                    movement: {
                        img: { translation: { x: -10, y: -10 } },
                        title: { translation: { x: 25, y: 25 } },
                    }
                };

                TiltObj.prototype._initEvents = function () {
                    this.mouseenterFn = (ev) => {
                        anime.remove(this.DOM.img);
                        anime.remove(this.DOM.title);
                    };

                    this.mousemoveFn = (ev) => {
                        requestAnimationFrame(() => this._layout(ev));
                    };

                    this.mouseleaveFn = (ev) => {
                        requestAnimationFrame(() => {
                            anime({
                                targets: [this.DOM.img, this.DOM.title],
                                duration: 1500,
                                easing: 'easeOutElastic',
                                elasticity: 400,
                                translateX: 0,
                                translateY: 0
                            });
                        });
                    };

                    this.el.addEventListener('mousemove', this.mousemoveFn);
                    this.el.addEventListener('mouseleave', this.mouseleaveFn);
                    this.el.addEventListener('mouseenter', this.mouseenterFn);
                };

                TiltObj.prototype._layout = function (ev) {
                    // Mouse position relative to the document.
                    const mousepos = getMousePos(ev);
                    // Document scrolls.
                    const docScrolls = { left: document.body.scrollLeft + document.documentElement.scrollLeft, top: document.body.scrollTop + document.documentElement.scrollTop };
                    const bounds = this.el.getBoundingClientRect();
                    // Mouse position relative to the main element (this.DOM.el).
                    const relmousepos = { x: mousepos.x - bounds.left - docScrolls.left, y: mousepos.y - bounds.top - docScrolls.top };

                    // Movement settings for the animatable elements.
                    const t = {
                        img: this.options.movement.img.translation,
                        title: this.options.movement.title.translation,
                    };

                    const transforms = {
                        img: {
                            x: (-1 * t.img.x - t.img.x) / bounds.width * relmousepos.x + t.img.x,
                            y: (-1 * t.img.y - t.img.y) / bounds.height * relmousepos.y + t.img.y
                        },
                        title: {
                            x: (-1 * t.title.x - t.title.x) / bounds.width * relmousepos.x + t.title.x,
                            y: (-1 * t.title.y - t.title.y) / bounds.height * relmousepos.y + t.title.y
                        }
                    };
                    this.DOM.img.style.WebkitTransform = this.DOM.img.style.transform = 'translateX(' + transforms.img.x + 'px) translateY(' + transforms.img.y + 'px)';
                    this.DOM.title.style.WebkitTransform = this.DOM.title.style.transform = 'translateX(' + transforms.title.x + 'px) translateY(' + transforms.title.y + 'px)';
                };

                const DOM = {};
                DOM.svg = document.querySelector('.morph');
                DOM.shapeEl = DOM.svg.querySelector('path');
                DOM.contentElems = Array.from(document.querySelectorAll('.content-wrap'));
                DOM.contentLinks = Array.from(document.querySelectorAll('.content__link'));
                DOM.footer = document.querySelector('.content--related');
                const contentElemsTotal = DOM.contentElems.length;
                const shapes = [
                    {
                        path: 'M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                        pathAlt: 'M 262.9,252.2 C 210.1,338.2 273.3,400.5 298.5,520 323.7,639.6 511.2,537.2 620.3,555.7 750.6,577.8 872.2,707.4 987.3,686.5 1102,665.6 1218,547.8 1173,429.2 1128,310.6 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                        scaleX: 2.7,
                        scaleY: 2,
                        rotate: 1,
                        tx: -10,
                        ty: -10,
                        fill: {
                            color: '#282faf',
                            duration: 500,
                            easing: 'linear'
                        },
                        animation: {
                            path: {
                                duration: 3000,
                                easing: 'easeOutElastic',
                                elasticity: 600
                            },
                            svg: {
                                duration: 2000,
                                easing: 'easeOutElastic'
                            }
                        }
                    },
                    {
                        path: 'M 415.6,206.3 C 407.4,286.6 438.1,373.6 496.2,454.8 554.3,536.1 497,597.2 579.7,685.7 662.4,774.1 834.3,731.7 898.5,653.4 962.3,575 967.1,486 937.7,370 909.3,253.9 937.7,201.5 833.4,105.4 729.3,9.338 602.2,13.73 530.6,41.91 459,70.08 423.9,126.1 415.6,206.3 Z',
                        pathAlt: 'M 415.6,206.3 C 407.4,286.6 415.5,381.7 473.6,462.9 531.7,544.2 482.5,637.6 579.7,685.7 676.9,733.8 826.2,710.7 890.4,632.4 954.2,554 926.8,487.6 937.7,370 948.6,252.4 937.7,201.5 833.4,105.4 729.3,9.338 602.2,13.73 530.6,41.91 459,70.08 423.9,126.1 415.6,206.3 Z',
                        scaleX: 2.4,
                        scaleY: 1.4,
                        rotate: 0,
                        tx: 0,
                        ty: -100,
                        fill: {
                            color: '#282faf',
                            duration: 500,
                            easing: 'linear'
                        },
                        animation: {
                            path: {
                                duration: 2000,
                                easing: 'easeOutElastic',
                                elasticity: 600
                            },
                            svg: {
                                duration: 2000,
                                easing: 'easeOutElastic'
                            }
                        }
                    },
                    {
                        path: 'M 383.8,163.4 C 335.8,352.3 591.6,317.1 608.7,420.8 625.8,524.5 580.5,626 647.3,688 714,750 837.1,760.5 940.9,661.5 1044,562.3 1041,455.8 975.8,393.6 909.8,331.5 854.2,365.4 784.4,328.1 714.6,290.8 771.9,245.2 733.1,132.4 694.2,19.52 431.9,-25.48 383.8,163.4 Z',
                        pathAlt: 'M 383.8,163.4 C 345.5,324.9 591.6,317.1 608.7,420.8 625.8,524.5 595.1,597 647.3,688 699.5,779 837.1,760.5 940.9,661.5 1044,562.3 1068,444.4 975.8,393.6 884,342.8 854.2,365.4 784.4,328.1 714.6,290.8 820.3,237.2 733.1,132.4 645.9,27.62 422.1,1.919 383.8,163.4 Z',
                        scaleX: 5.5,
                        scaleY: 3.1,
                        rotate: -20,
                        tx: 50,
                        ty: 200,
                        fill: {
                            color: '#282faf',
                            duration: 500,
                            easing: 'linear'
                        },
                        animation: {
                            path: {
                                duration: 3000,
                                easing: 'easeOutElastic',
                                elasticity: 600
                            },
                            svg: {
                                duration: 2500,
                                easing: 'easeOutElastic'
                            }
                        }
                    },
                    {
                        path: 'M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                        pathAlt: 'M 262.9,252.2 C 210.1,338.2 273.3,400.5 298.5,520 323.7,639.6 511.2,537.2 620.3,555.7 750.6,577.8 872.2,707.4 987.3,686.5 1102,665.6 1218,547.8 1173,429.2 1128,310.6 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                        scaleX: 1.5,
                        scaleY: 1,
                        rotate: -20,
                        tx: 0,
                        ty: -50,
                        fill: {
                            color: '#282faf',
                            duration: 500,
                            easing: 'linear'
                        },
                        animation: {
                            path: {
                                duration: 3000,
                                easing: 'easeOutQuad',
                                elasticity: 600
                            },
                            svg: {
                                duration: 3000,
                                easing: 'easeOutElastic'
                            }
                        }
                    },
                    {
                        path: 'M 247.6,239.6 C 174.3,404.5 245.5,601.9 358.5,624.3 471.5,646.6 569.1,611.6 659.7,655.7 750.4,699.7 1068,687.6 1153,534.4 1237,381.1 1114,328.4 1127,227.4 1140,126.3 1016,51.08 924.6,116.8 833.8,182.5 928.4,393.8 706.8,283.5 485.2,173.1 320.8,74.68 247.6,239.6 Z',
                        pathAlt: 'M 247.6,239.6 C 174.3,404.5 271.3,550.3 358.5,624.3 445.7,698.3 569.1,611.6 659.7,655.7 750.4,699.7 1145,699 1153,534.4 1161,369.8 1114,328.4 1127,227.4 1140,126.3 1016,51.08 924.6,116.8 833.8,182.5 894.5,431 706.8,283.5 519.1,136 320.8,74.68 247.6,239.6 Z',
                        scaleX: 2.8,
                        scaleY: 2.5,
                        rotate: 0,
                        tx: 50,
                        ty: -150,
                        fill: {
                            color: '#282faf',
                            duration: 500,
                            easing: 'linear'
                        },
                        animation: {
                            path: {
                                duration: 3000,
                                easing: 'easeOutElastic',
                                elasticity: 600
                            },
                            svg: {
                                duration: 2000,
                                easing: 'easeOutExpo'
                            }
                        }
                    },
                    // footer shape:
                    {
                        path: 'M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                        pathAlt: 'M 262.9,252.2 C 210.1,338.2 273.3,400.5 298.5,520 323.7,639.6 511.2,537.2 620.3,555.7 750.6,577.8 872.2,707.4 987.3,686.5 1102,665.6 1218,547.8 1173,429.2 1128,310.6 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z',
                        scaleX: 5.5,
                        scaleY: 5,
                        rotate: 0,
                        tx: 0,
                        ty: 0,
                        fill: {
                            color: '#282faf',
                            duration: 500,
                            easing: 'linear'
                        },
                        animation: {
                            path: {
                                duration: 3000,
                                easing: 'easeOutQuad',
                                elasticity: 600
                            },
                            svg: {
                                duration: 3000,
                                easing: 'easeOutElastic'
                            }
                        }
                    }
                ];
                let step;

                const initShapeLoop = function (pos) {
                    pos = pos || 0;
                    anime.remove(DOM.shapeEl);
                    anime({
                        targets: DOM.shapeEl,
                        easing: 'linear',
                        d: [{ value: shapes[pos].pathAlt, duration: 3500 }, { value: shapes[pos].path, duration: 3500 }],
                        loop: true,
                        fill: {
                            value: shapes[pos].fill.color,
                            duration: shapes[pos].fill.duration,
                            easing: shapes[pos].fill.easing
                        },
                        direction: 'alternate'
                    });
                };

                const initShapeEl = function () {
                    anime.remove(DOM.svg);
                    anime({
                        targets: DOM.svg,
                        duration: 1,
                        easing: 'linear',
                        scaleX: shapes[0].scaleX,
                        scaleY: shapes[0].scaleY,
                        translateX: shapes[0].tx + 'px',
                        translateY: shapes[0].ty + 'px',
                        rotate: shapes[0].rotate + 'deg'
                    });

                    initShapeLoop();
                };

                const createScrollWatchers = function () {
                    DOM.contentElems.forEach((el, pos) => {
                        const scrollElemToWatch = pos ? DOM.contentElems[pos] : DOM.footer;
                        pos = pos ? pos : contentElemsTotal;
                        const watcher = scrollMonitor.create(scrollElemToWatch, -300);

                        watcher.enterViewport(function () {
                            step = pos;
                            anime.remove(DOM.shapeEl);
                            anime({
                                targets: DOM.shapeEl,
                                duration: shapes[pos].animation.path.duration,
                                easing: shapes[pos].animation.path.easing,
                                elasticity: shapes[pos].animation.path.elasticity || 0,
                                d: shapes[pos].path,
                                fill: {
                                    value: shapes[pos].fill.color,
                                    duration: shapes[pos].fill.duration,
                                    easing: shapes[pos].fill.easing
                                },
                                complete: function () {
                                    initShapeLoop(pos);
                                }
                            });

                            anime.remove(DOM.svg);
                            anime({
                                targets: DOM.svg,
                                duration: shapes[pos].animation.svg.duration,
                                easing: shapes[pos].animation.svg.easing,
                                elasticity: shapes[pos].animation.svg.elasticity || 0,
                                scaleX: shapes[pos].scaleX,
                                scaleY: shapes[pos].scaleY,
                                translateX: shapes[pos].tx + 'px',
                                translateY: shapes[pos].ty + 'px',
                                rotate: shapes[pos].rotate + 'deg'
                            });
                        });

                        watcher.exitViewport(function () {
                            const idx = !watcher.isAboveViewport ? pos - 1 : pos + 1;

                            if (idx <= contentElemsTotal && step !== idx) {
                                step = idx;
                                anime.remove(DOM.shapeEl);
                                anime({
                                    targets: DOM.shapeEl,
                                    duration: shapes[idx].animation.path.duration,
                                    easing: shapes[idx].animation.path.easing,
                                    elasticity: shapes[idx].animation.path.elasticity || 0,
                                    d: shapes[idx].path,
                                    fill: {
                                        value: shapes[idx].fill.color,
                                        duration: shapes[idx].fill.duration,
                                        easing: shapes[idx].fill.easing
                                    },
                                    complete: function () {
                                        initShapeLoop(idx);
                                    }
                                });

                                anime.remove(DOM.svg);
                                anime({
                                    targets: DOM.svg,
                                    duration: shapes[idx].animation.svg.duration,
                                    easing: shapes[idx].animation.svg.easing,
                                    elasticity: shapes[idx].animation.svg.elasticity || 0,
                                    scaleX: shapes[idx].scaleX,
                                    scaleY: shapes[idx].scaleY,
                                    translateX: shapes[idx].tx + 'px',
                                    translateY: shapes[idx].ty + 'px',
                                    rotate: shapes[idx].rotate + 'deg'
                                });
                            }
                        });
                    });
                };

                const init = function () {
                    imagesLoaded(document.body, () => {
                        initShapeEl();
                        createScrollWatchers();
                        Array.from(document.querySelectorAll('.content--layout')).forEach(el => new TiltObj(el));
                        // Remove loading class from body
                        document.body.classList.remove('loading');
                    });
                }

                init();
            };
        </script>
        <!-- COMPRESS SCRIPT -->
        <script>
    var maxDist;
    var mouse = { x: 0, y: 0 };
    var cursor = {
        x: window.innerWidth,
        y: window.innerHeight
    };

    Math.dist = function (a, b) {
        var dx = b.x - a.x;
        var dy = b.y - a.y;
        return Math.sqrt(Math.pow(dx, 2), Math.pow(dy, 2));
    }

    window.addEventListener("mousemove", function (e) {
        cursor.x = e.clientX;
        cursor.y = e.clientY;
    });

    window.addEventListener("touchmove", function (e) {
        var t = e.touches[0];
        cursor.x = t.clientX;
        cursor.y = t.clientY;
    }, {
            passive: false
        });

    var Char = function (container, char) {
        var span = document.createElement("span");
        span.setAttribute('data-char', char);
        span.innerText = char;
        container.appendChild(span);
        this.getDist = function () {
            this.pos = span.getBoundingClientRect();
            return Math.dist(mouse, {
                x: this.pos.x + (this.pos.width / 1.75),
                y: this.pos.y
            });
        }
        this.getAttr = function (dist, min, max) {
            var wght = max - Math.abs((max * dist / maxDist));
            return Math.max(min, wght + min);
        }
        this.update = function (args) {
            var dist = this.getDist();
            this.wdth = args.wdth ? ~~this.getAttr(dist, 5, 200) : 100;
            this.wght = args.wght ? ~~this.getAttr(dist, 100, 800) : 400;
            this.alpha = args.alpha ? this.getAttr(dist, 0, 1).toFixed(2) : 1;
            this.ital = args.ital ? this.getAttr(dist, 0, 1).toFixed(2) : 0;
            this.draw();
        }
        this.draw = function () {
            var style = "";
            style += "opacity: " + this.alpha + ";";
            style += "font-variation-settings: 'wght' " + this.wght + ", 'wdth' " + this.wdth + ", 'ital' " + this.ital + ";";
            span.style = style;
        }
        return this;
    }

    var VFont = function () {
        this.scale = false;
        this.flex = true;
        this.alpha = false;
        this.stroke = false;
        this.width = true;
        this.weight = true;
        this.italic = true;
        var title, str, chars = [];

        this.init = function () {
            title = document.getElementById("title");
            str = title.innerText;
            title.innerHTML = "";
            for (var i = 0; i < str.length; i++) {
                var _char = new Char(title, str[i]);
                chars.push(_char);
            }
            this.set();
            window.addEventListener("resize", this.setSize.bind(this));
        }

        this.set = function () {
            title.className = "";
            title.className += this.flex ? " flex" : "";
            title.className += this.stroke ? " stroke" : "";
            this.setSize();
        }

        this.setSize = function () {
            var fontSize = window.innerWidth / (str.length / 2);
            title.style = "font-size: " + fontSize + "px;";
            if (this.scale) {
                var scaleY = (window.innerHeight / title.getBoundingClientRect().height).toFixed(2);
                var lineHeight = scaleY * 0.8;
                title.style = "font-size: " + fontSize + "px; transform: scale(1," + scaleY + "); line-height: " + lineHeight + "em;"
            }
        }

        this.animate = function () {
            mouse.x += (cursor.x - mouse.x) / 30;
            mouse.y += (cursor.y - mouse.y) / 30;
            requestAnimationFrame(this.animate.bind(this));
            this.render();
        }

        this.render = function () {
            maxDist = title.getBoundingClientRect().width / 2;
            for (var i = 0; i < chars.length; i++) {
                chars[i].update({
                    wght: this.weight,
                    wdth: this.width,
                    ital: this.italic,
                    alpha: this.alpha
                });
            }
        }
        this.init();
        this.animate();
        return this;
    }

    var txt = new VFont();
    var gui = new dat.GUI();
    gui.add(txt, 'flex').onChange(txt.set.bind(txt));
    gui.add(txt, 'scale').onChange(txt.set.bind(txt));
    gui.add(txt, 'alpha').onChange(txt.set.bind(txt));
    gui.add(txt, 'stroke').onChange(txt.set.bind(txt));
    // gui.add(txt, 'width').onChange(txt.set.bind(txt));
    gui.add(txt, 'weight').onChange(txt.set.bind(txt));
    gui.add(txt, 'italic').onChange(txt.set.bind(txt));
    
                </script>


    <script type="text/javascript">
    new Modal({
	btn: '.button',
	overlay: '.overlay',
	close: '.close',
	modal: '.pop-up-form'
});

new Modal({
	btn: '.button-one',
	overlay: '.overlay',
	close: '.close',
	modal: '.pop-up-form-one'
});

function Modal (obj) {
 	var htmlBody = document.querySelector('body');

 	this.btn = document.body.querySelector(obj.btn),
 	this.overlay = document.body.querySelector(obj.overlay),
 	this.close = document.body.querySelector(obj.close),
 	this.modal = document.body.querySelector(obj.modal)

 	this.open = function () {
 		this.overlay.style.display = "block";
 		this.modal.style.display = "block";

 	};

 	this.closePop = function () {
 		this.overlay.style.display = "none";
 		this.modal.style.display = "none";
 	};


 	this.btn.addEventListener('click',() => this.open());
 	this.close.addEventListener('click',() => this.closePop());
 	this.overlay.addEventListener('click',() => this.closePop());
 }
 
</script>


<!-- GAllery  -->
               
  
    <!-- END DESIGN PAGE SCRIPTS -->

    <!-- END OF CUSTOMED SCRIPTS -->
    </body>
    </html>
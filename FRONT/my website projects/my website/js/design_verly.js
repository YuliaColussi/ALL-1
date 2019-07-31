
            class Text {
                constructor(alphabets, x, y, fontsize, verlyInstance) {
                    this.alphabets = alphabets.toUpperCase().split("");
                    this.x = x;
                    this.y = y;
                    this.fontsize = fontsize;
                    this.words = [];
                    this.iterations = 50;

                    this.gap = 0;
                    this.entity = new Entity(this.iterations, verlyInstance);
                    for (let i = 0; i < this.alphabets.length; i++) {
                        let word = new TypoGraphy(
                            this.x + this.gap,
                            this.y,
                            this.fontsize,
                            this.alphabets[i]
                        );
                        this.words.push(word.text);
                        this.gap += 170;
                    }
                    this.entity = verlyInstance.joinEntities(this.entity, ...this.words);
                }
            }

            let canvas = document.getElementById("rounds");
            let ctx = canvas.getContext("2d");
            let width = (canvas.width = clamp(window.innerWidth, 100, 4000));
            let height = (canvas.height = window.innerHeight - 650);

            let verly = new Verly(100, canvas, ctx);

            let codepen = new Text('DESIGN', width / 4 - 100, height - 250, 45, verly);

            // for (let i = 0; i < width / 40; i++) {
            //     verly.createRope(i * 40, 0, random(8, 15), 15, 0)
            // }



            function animate() {
                ctx.clearRect(0, 0, width, height);

                verly.update();
                verly.render();
                verly.interact();

                // verly.renderPointIndex();

                requestAnimationFrame(animate);
            }
            animate(); 


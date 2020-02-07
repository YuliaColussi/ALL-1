import app from "../app/app.js";
import ParisEvents from '../models/ParisEvents.js';


export default class Search {

    show() {
        app.mvc.loadView('search').then(() => {
            this.listener();
        });
    }


    listener() {
        // Ajouter un écouteur d'événement sur le bouton submit du formulaire
        document.querySelector('#form').addEventListener('click', (event) => {
            event.preventDefault();
            // appeler la méthode this.search en lui donnant les valeur des différents champs
            this.search({
                keyword: document.querySelector('#keyword').value,
                annees: document.querySelector('#annees').value,
                filtres: document.querySelector('#sortBy').value
            })
        }, false)
    }


    search(params = {}) {
        document.querySelector('#submitSearch').addEventListener('click', (event) => {
            console.log(resultat)});

            event.preventDefault();
        // params contiendra les différents champs du formulaire
        let paris = new ParisEvents();
        paris.getAll(params.keyword, params.annees, params.filtres).then((resultat) => {
                var template = document.querySelector("#blockResultat");
                var zoneResultat = document.querySelector("#zoneResultat");
                zoneResultat.innerHTML = "";
                resultat.forEach(element => { 
                    
                console.log(element);
                 
                        var clone = document.importNode(template.content, true);
                    
                        clone.querySelector("h2").textContent = element.title;
                        clone.querySelector('img').src = element.cover_url;
                        clone.querySelector('img').alt = element.cover_alt;

                    zoneResultat.appendChild(clone);
                

                });
              

        }
         
                //.then(forEach(resultat => console.log(resultat)));
        

             
       

        
        );
        
        // nous utiliserons le fetch pour appeler l'api. 

        
    }
        
}


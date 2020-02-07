import config from '../app/config.js';

export default class ParisEvents {

    // cette méthode doit retourner le resultat au format json "retravaillé" pour retourner 
    // uniquement les données qui nous intéresse
    getAll(keyword = '', dateStart = new Date().getFullYear(), sortBy = '') {

        // l'appel via une methode fetch on lui donne en parametre la chaine de l'api 
        // qui sera stocké dans le fichier de config (config.openDataURL)  
        return fetch(`${config.openDataURL}&q=${keyword}&sort=${sortBy}&refine.date_start=${dateStart}&rows=105`)
            .then(response => response.json())
            .then(json => {
                console.log(json.records);
                return json.records.map(element => {

                    return {
                        category: element.fields.category,
                        title: element.fields.title,
                        address_street: element.fields.address_street,
                        cover_url: element.fields.cover_url,
                        cover_alt: element.fields.cover_alt,
                    }
                })
            })
    }
}
                
                //var obj = JSON.parse(response);
                //console.log(obj);
               //var x = response.json.map()
               //document.getElementById("result").innerHTML = x;
              // console.log(x);



               // var json_string = '{"parameters":{"dataset":"velib-disponibilite-en-temps-reel"}}';
               // var js_object = JSON.parse(json_string);
               // console.log(typeof js_object);
               // console.log(js_object.parameters.dataset);

                //document.getElementById("user").innerHTML =
                   // "Name: " + obj.first_name + " " + obj.last_name + "<br>" +
                    //"Location: " + obj.location;

            
            
            

      


            
        

        // l'appel via une methode fetch on lui donne en parametre la chaine de l'api 
        // qui sera stocké dans le fichier de config (config.openDataURL)  
    


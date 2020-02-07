import app from "../app/app.js";

export default class Login {
    constructor(app) {
        this.app = app;
        console.log('test');
    }
    show() {

        app.mvc.loadView('login').then(() => {
            this.listener();
        });


        // Initialize Firebase
       
    };

    listener() {
  
        var btn = document.querySelector('#login');
            btn.addEventListener('click', function () {

                var provider = new firebase.auth.GoogleAuthProvider();

                firebase.auth().signInWithPopup(provider).then(function (result) {
                    // This gives you a Google Access Token. You can use it to access the Google API.
                    var token = result.credential.accessToken;
                    // The signed-in user info.
                    var user = result.user;

                    // ...
                }).catch(function (error) {
                    // Handle Errors here.
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    // The email of the user's account used.
                    var email = error.email;
                    // The firebase.auth.AuthCredential type that was used.
                    var credential = error.credential;
                    // ...
                });
                firebase.auth().signOut().then(function () {
                    // Sign-out successful.
                }).catch(function (error) {
                    // An error happened.
                });



                var user = firebase.auth().currentUser;
                var name;

                if (user != null) {

                    console.log(user);
                    name = user.displayName;

                    //p = document.createElement("p");
;
                    //document.body.appendChild(p);
                        // here you're correctly attempting to assign the variable,
                        // but it's the wrong variable:
                        document.querySelector("#name").innerHTML = name;
                        app.mvc.router
                    
                }

                
                
                //var ref = firebase.database().ref('events');
                //ref.set("This should work now");
            });
            
        //}, false)

        
    }

   
    
}


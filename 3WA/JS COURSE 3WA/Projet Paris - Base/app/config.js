// --------------------------------------------------------------------------------------------------------------------
// CONFIGURATION DE L'APPLICATION
// --------------------------------------------------------------------------------------------------------------------

const config = {
    // Configuration de la plateforme Firebase
    firebase: {
            apiKey: "AIzaSyCviYfrAiXGoQxkDtB_Uje2ZnU1Mial_R8",
            authDomain: "parisevents-45b8b.firebaseapp.com",
            databaseURL: "https://parisevents-45b8b.firebaseio.com",
            projectId: "parisevents-45b8b",
            storageBucket: "parisevents-45b8b.appspot.com",
            messagingSenderId: "1082615860666",
            appId: "1:1082615860666:web:71e86056bdd3c207262183"
            
        // ...
    },
    openDataURL: 'https://opendata.paris.fr/api/records/1.0/search/?dataset=que-faire-a-paris-',
};



// La configuration est exportée afin d'être accessible par d'autres modules.
export default config;
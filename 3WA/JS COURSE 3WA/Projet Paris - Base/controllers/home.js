import app from "../app/app.js";

export default class Home {
    constructor(app) {
        console.log('test');
        this.app = app;
    }
    show() {
        
        app.mvc.loadView('home')
    };

   
}


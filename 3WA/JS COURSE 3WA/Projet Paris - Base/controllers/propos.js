import app from "../app/app.js";

export default class Propos {
    constructor(app) {
        this.app = app;
    }
    show() {
        app.mvc.loadView('propos');
    };
}


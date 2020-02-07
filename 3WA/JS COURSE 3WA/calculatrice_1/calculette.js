// <script> IGNOREZ CETTE LIGNE
// https://putaindecode.io/articles/es6-es2015-les-classes/

class Calculette {
    constructor(nombre1, nombre2) {
        if (typeof nombre1 != 'number' || typeof nombre2 != 'number') {
            throw `Ceci n'est pas un nombre!`;
        }
        this._nombre1 = nombre1;
        this._nombre2 = nombre2;
    }

    get nombre1() {
        return this._nombre1;
    }

    set nombre1(nombre1) {
        if (typeof nombre1 != 'number') {
            throw `Ceci n'est pas un nombre!`;
        }

        this._nombre1 = nombre1;
    }

    get nombre2() {
        return this._nombre2;
    }
    set nombre2(nombre2) {
        if (typeof value != 'number') {
            throw `Ceci n'est pas un nombre!`;
        }

        this._nombre2 = nombre2;
    }

    additionner() {
        return this._nombre1 + this._nombre2;
    }

    multiplier() {
        return this._nombre1 * this._nombre2;
    }

    diviser() {
        return this._nombre1 / this._nombre2;
    }

    soustraire() {
        return this._nombre1 - this._nombre2;
    }

    modulo() {
        return this._nombre1 % this._nombre2;
    }
}

try {
    let calc = new Calculette(5, 7);
    console.log(`Les valeurs ${calc.nombre1} et ${calc.nombre2} donnent :`);
    console.log(`en addition : ${calc.additionner()}`);
    console.log(`en multiplication : ${calc.multiplier()}`);
    console.log(`en division : ${calc.diviser()}`);
    console.log(`en soustraction ${calc.soustraire()}`);
    console.log(`en modulo : ${calc.modulo()}`);


    calc.nombre1 = 8;
    console.log(`Les valeurs ${calc.nombre1} et ${calc.nombre2} donnent :`);
    console.log(`en addition : ${calc.additionner()}`);
    console.log(`en multiplication : ${calc.multiplier()}`);
    console.log(`en division : ${calc.diviser()}`);
    console.log(`en soustraction ${calc.soustraire()}`);
    console.log(`en modulo : ${calc.modulo()}`);
} catch (e) {
    console.error(e);
}
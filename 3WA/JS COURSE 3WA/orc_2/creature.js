class Creature {

    constructor(name, age, strength, words) {
        this.name = name;
        this.age = age;
        this.words = words;
        this.strength = strength;
       
    }

        saySomething(words) {
            this.words = words;
            return console.log("this creature talks");
        }
        identity(name, age, strenght) {
            return console.log `${name} ${age} ${strenght}`;
        }
}




class Orc extends Creature {
    constructor(name, age, strength, words) {
        // le mot clé super est utilisé comme super contructeur. Il permet d'appeler
        // et d'avoir accès aux méthodes du parent
        super(name, age, strength, words);
        this.words = words;
    }

    scream(words) {
        this.words = words;

        return console.log(super.saySomething() + " AAAAAA");
    }

   bite() {
       return console.log(`cette Orc has bited ${this.name}`);
    }

}






class Urukhai extends Orc {
    constructor(firstname, lastname, numberCommit) {
        // le mot clé super est utilisé comme super contructeur. Il permet d'appeler
        // et d'avoir accès aux méthodes du parent
        super(firstname, lastname);
        this.numberCommit = numberCommit;
    }

    sayNameWithCommit() {
        // on peut appeler une méthode de la classe parente avec `super.method`
        return super.sayName() + " " + this.sayNumberCommit();
    }

    kill() {
        return console.log(`cette Orc has killed ${this.name}`);
    }

}


class ChiefOrc extends Orc {
    constructor(firstname, lastname, numberCommit) {
        // le mot clé super est utilisé comme super contructeur. Il permet d'appeler
        // et d'avoir accès aux méthodes du parent
        super(firstname, lastname);
        this.numberCommit = numberCommit;
    }

    sayNameWithCommit() {
        // on peut appeler une méthode de la classe parente avec `super.method`
        return super.sayName() + " " + this.sayNumberCommit();
    }

    sayNumberCommit() {
        return this.numberCommit;
    }
}

// instanciation
const creature = new Creature("Orc", 25, 40, "myaaaao");

const orc = new Orc("Chimp", 25, 40, "laaaaaaa");

const urukhai = new Urukhai("Cat", 25, 70, "ururur");

const chiefOrc = new ChiefOrc("plamp", 25, 70, "dfgdfhdfh");

//console.log(creature.saySomething());
console.log(creature.identity());

console.log(orc.scream());
console.log(orc.bite());

console.log(urukhai.scream());
console.log(urukhai.kill());

console.log(chiefOrc.scream());
console.log(chiefOrc.giveOrder());
'use strict'


var promise = new Promise(function (fulfill, reject) {

    fulfill('I FIRED');
    reject(new Error('I DID NOT FIRE'));



});

function onRejected(error) {
    console.log(error.message);
}



promise.then(message => { console.log(message) }, onRejected);
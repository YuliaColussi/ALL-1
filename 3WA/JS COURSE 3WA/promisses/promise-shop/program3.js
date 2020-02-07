'use strict'


var promise = new Promise(function (resolve, reject) {

    setTimeout(() => {
        reject(new Error('REJECTED!'));
    }, 300)

});


function onReject(error) {
    console.log(error.message);
}

promise.then(message => { console.log(message)}, onReject );


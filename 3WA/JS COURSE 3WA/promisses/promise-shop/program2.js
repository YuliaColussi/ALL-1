
var promise = new Promise(function (fulfill, onReject) {



    setTimeout(() => {
        fulfill('FULFILLED!');
    }, 300)
}
);

promise.then(message => { console.log(message) });


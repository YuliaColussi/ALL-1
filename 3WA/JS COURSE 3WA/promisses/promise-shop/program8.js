'use strict'


var promise = new Promise(function (fulfill, reject) {

    fulfill('MANHATTAN');

});

attachTitle()
    .then(function () {
        return cache.fetchModel(id) || promisedAjax("users/" + id);
    })
    .then(displayUser)


function onFulfilled(value) {
    console.log(value)
}
first().then((value) => second(value).then(onFulfilled))
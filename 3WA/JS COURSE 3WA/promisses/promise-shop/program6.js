var promise = new Promise(function (fulfill, reject) {
    fulfill('SECRET VALUE');
});

// Introducing: Promise.resolve
// It does the exact same thing as above:

var promise = Promise.resolve('SECRET VALUE');

promise.catch(function (err) {
    console.error('THERE IS AN ERROR!!!');
    console.error(err.message);
});

promise.catch(function (err) {
    console.error('THERE IS AN ERROR!!!');
    console.error(err.message);
});




// Likewise...

var promise = new Promise(function (fulfill, reject) {
    reject(new Error('SECRET VALUE'));
});

var promise = Promise.reject(new Error('SECRET VALUE'));
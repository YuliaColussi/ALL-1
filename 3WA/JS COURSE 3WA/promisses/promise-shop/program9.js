try {

    parsePromised(JSON.parse(json));
    // ...
} catch (error) {
    reject(error.message.replace('SyntaxError:', ''));
}

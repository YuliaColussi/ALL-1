function onFulfilled(value)
{
    console.log(value)
}
first().then((value) => second(value).then(onFulfilled))
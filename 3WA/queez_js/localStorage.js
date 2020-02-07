document.addEventListener("DOMContentLoaded", function () {
    var options = ["question", "1", "2", "3", "4"];
    for (var option of options) {
        var input = document.getElementById(option);
        input.value = localStorage.getItem(option);
        (function (option, input) {
            input.addEventListener("change", function () {
                localStorage.setItem(option, input.value);
            });
        })(option, input);
        console.log('privet');
    }
});
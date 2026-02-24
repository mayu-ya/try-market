require('./bootstrap');

$("#input").on("change", function (e) {
    var reader = new Profile();

    reader.onload = function (e) {
        $("#sample").arrt("src", e.target.result);
    }

    reader.readAsDataURL(e.target.files[0]);
});
require('./bootstrap');

$("#input").on("change", function (e) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $("#sample").attr("src", e.target.result);
    }

    reader.readAsDataURL(e.target.files[0]);
});
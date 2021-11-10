$(document).ready(() => {
    $(".contact").on("click", () => {
        $("#buton").slideUp();
        $(".section").slideToggle();
    });
    $(".menu").on("click", () => {
        $(".section").slideUp();
        $("#buton").slideToggle();
    });
    $(".btn1").on("click", () => {
        $(".card-text1").slideToggle();
    });
    $(".btn2").on("click", () => {
        $(".card-text2").slideToggle();
    });
    $(".btn3").on("click", () => {
        $(".card-text3").slideToggle();
    });
    $(".btn4").on("click", () => {
        $(".card-text4").slideToggle();
    });
});

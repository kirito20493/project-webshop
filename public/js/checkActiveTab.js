document.getElementById("btn1").addEventListener("click", function() {
    document.getElementById("btn1").classList.add("btn--primary");
    document.getElementById("btn2").classList.remove("btn--primary");
    document.getElementById("btn3").classList.remove("btn--primary");
});
document.getElementById("btn2").addEventListener("click", function() {
    document.getElementById("btn2").classList.add("btn--primary");
    document.getElementById("btn1").classList.remove("btn--primary");
    document.getElementById("btn3").classList.remove("btn--primary");
});
document.getElementById("btn3").addEventListener("click", function() {
    document.getElementById("btn3").classList.add("btn--primary");
    document.getElementById("btn2").classList.remove("btn--primary");
    document.getElementById("btn1").classList.remove("btn--primary");
});
// alert(document.getElementById("text").innerHTML = "Hello World");
// document.getElementById("x").innerHTML = "pulu pulu pulu pulu pulu pulu pulu pulu"

function tampil() {
    alert("You dumb af");
};

let warna = document.getElementById('warna');

// warna.addEventLisetener('change', (event) => {
//     document.body.style.backgroundColor = warna.value;
// })

document.getElementById("warna").addEventListener("input", function() {
    document.body.style.backgroundColor = this.value;
})
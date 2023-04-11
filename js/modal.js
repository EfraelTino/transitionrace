var modal = document.getElementById("mensajeModal");
modal.style.display = "flex";
modal.style.opacity = "1";

var cerrarModal = document.getElementById("cerrarModal");
cerrarModal.onclick = function () {
    modal.style.display = "none";
};

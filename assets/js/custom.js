
function hideLoadingScreen() {
    const loadingScreen = document.getElementById("loading-screen");
    const content = document.querySelector(".content");

    loadingScreen.style.display = "none";
    content.style.display = "block";
}

// Espera até que a página seja completamente carregada
window.addEventListener("load", hideLoadingScreen);
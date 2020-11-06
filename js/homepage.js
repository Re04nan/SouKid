window.onload = function() {
    let d = new Date();
    let n = d.getFullYear();
    
    let ano = document.querySelector('#ano');
    ano.textContent = `Sou Kid - ${n}`
};
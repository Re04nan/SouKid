mark = (selecionado) => {
    let marcar = document.getElementsByClassName("mark-check");
    let i = 0;
    while(i<=marcar.length){
        if (marcar[i].id==selecionado.id){ // comparar id com class 
            let masculino = document.getElementById("img-avatar");
            let feminino = document.getElementById("img-avatar2");
            console.log(marcar[i], selecionado.id, i);
            marcar[i].style = "background-image: url(.././img/markCheck.png); visibility: visible";
            feminino.src = ".././img/corpoF/f0"+i+".png";
            masculino.src = ".././img/corpoM/m0"+i+".png";

        } else {
            marcar[i].style = "background-image: url(); visibility: visible";
        }
        i++;
    }
}
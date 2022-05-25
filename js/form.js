function pagoOnChange(sel) {
    if (sel.value=="yes-calificado"){
         divC = document.getElementById("nCuenta");
         divC.style.display = "none";

         divT = document.getElementById("nTargeta");
         divT.style.display = "";

    }else{

         divC = document.getElementById("nCuenta");
         divC.style.display="";

         divT = document.getElementById("nTargeta");
         divT.style.display = "none";
    }
}
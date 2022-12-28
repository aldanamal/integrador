const precio = 200
var total = 0

function resumen(){

    let cantidad = document.getElementById('cantidadentradas');
    console.log(cantidad.value);
    const categoria=document.getElementById('categoria');
    console.log(categoria.value);
    
    if (categoria.value=="estudiante")
    {total = cantidad.value*precio*20/100;}
    else if (categoria.value=="trainee")
    {total = cantidad.value*precio*50/100;}
    else if (categoria.value=="junior")
    {total = cantidad.value*precio*85/100;}
    else {total;}
    
    document.getElementById('totalapagar').textContent = ("Total a Pagar $ "+ total)

}

function borrar (){
    document.getElementById('totalapagar').innerHTML = "Total a Pagar $"
}

 
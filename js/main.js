'use strict';
    document.addEventListener("DOMContentLoaded", function(){

    let app = new Vue({
        el: "#vue-comentarios",
    data: {
        titulo: "Comentarios del producto",
        loading: false,
        comentarios: [],
        promedio:0,
    },
    methods: {
        add: function(){
            app.loading = true;
            
            let data = {
                comentario: document.querySelector("#comentario").value,
                puntaje: document.querySelector("#puntaje").value,
                fk_id_usuario: document.querySelector("#idUsuario").value,
                fk_id_producto: document.querySelector("#idProducto").value
            }
            
            fetch("api/comentarios",{
                method: 'POST',
                headers: {'Content-Type': 'aplication/json'},
                body: JSON.stringify(data)
            })
            .then(response => {
                get();
            })
            .catch(error => console.log(error));
        },
        
        borrar: function(event, id) {
            fetch("api/comentarios/" + id,{
                "method": "DELETE",
            })
            .then(response => {
                if (response.ok){
                    get();
                }
            })
            .catch(error => console.log(error));
        }
        
        
    }
    
});

    function get() {
        app.loading = true;
    
        let id= document.querySelector("#idProducto").value;
        fetch("api/comentarios/"+id)
        .then(response => response.json())
        .then(comentarios => {
            app.comentarios = comentarios;
            app.promedio = calcularPromedio(comentarios);
            app.loading = false;
        })
        .catch(error => console.log(error));
    }

    get();

    function calcularPromedio(comentarios) {
        
        let puntaje = 0;
        let contador = 0;
        let resultado = 0;

        for (let comentario of comentarios){
            puntaje += Number(comentario.puntaje);
            contador++;
        }
        puntaje = puntaje/contador;
        resultado = puntaje.toFixed(1);

        return resultado;
    }
});

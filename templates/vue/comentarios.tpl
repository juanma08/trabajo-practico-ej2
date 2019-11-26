{literal}
    <section id=vue-comentarios>

        <h2>Puntaje promedio : {{promedio}}</h2>
        <h1>{{ titulo }}</h1>
        <div v-if="loading">
            Cargando..
        </div>
    
    <ul v-if="!loading">
            
            
        <a v-for="comentario in comentarios" class="list-group-item list-group-item-action"> 
            <ul>
                <li>Puntaje: {{comentario.puntaje}} | Comentario: {{ comentario.comentario }}
                {/literal}
                {if $admin}
                {literal}
                 <button @click="(event)=>{borrar(event, comentario.idComentario)}">Eliminar</button>
                {/literal}
                {/if}
                {literal}
                </li>
            </ul>
        </a>    
    </ul>
    
    {/literal}
    <input type="hidden" id="idProducto" value={$producto->idProducto}>
    <input type="hidden" id="idUsuario" value={$idUsuario}>
    {literal}
    <label> Escribir comentario</label>
    <textarea name="textarea" id="comentario"></textarea>
    <select class="custom-select" id="puntaje">
        <option selected value="5"> Puntuacion </option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <button type="submit" id="btnAgregarComentario"  v-on:click="add">Agregar Comentario</button>
    
</section>
{/literal}
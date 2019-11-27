<?php
/* Smarty version 3.1.33, created on 2019-11-27 03:26:20
  from 'C:\xampp\htdocs\WEB-2\trabajo-practico-especial-api\trabajo-practico-ej2\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddddeccd84332_63336754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41f72843b8543b61cb9635f0bf85db18af5b363b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2\\trabajo-practico-especial-api\\trabajo-practico-ej2\\templates\\vue\\comentarios.tpl',
      1 => 1574821577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddddeccd84332_63336754 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                
                <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                
                 <button @click="(event)=>{borrar(event, comentario.idComentario)}">Eliminar</button>
                
                <?php }?>
                
                </li>
            </ul>
        </a>    
    </ul>
    
    
    <input type="hidden" id="idProducto" value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->idProducto;?>
>
    <input type="hidden" id="idUsuario" value=<?php echo $_smarty_tpl->tpl_vars['idUsuario']->value;?>
>
    <?php if ($_smarty_tpl->tpl_vars['usuarioName']->value) {?>
    
    
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
    
    <?php }?>
    
    </section>
<?php }
}

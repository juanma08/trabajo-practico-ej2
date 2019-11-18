{include 'templates/header.tpl'}
<table>
    <tr>
        <th>
         Usuario
        </th>
        <th>
         Admin
        </th>
    </tr>
	{foreach $users as $user}
        
		<tr>			
			<td>{$user->usuarioName}</td>
			<td>{$user->admin}</td>	
            {if $user->admin}
            <td> <small><a href="permiso/{$user->idUsuario}">Quitar permiso de admin</a></small> </td>    
                
            {else}
            <td> <small><a href="permiso/{$user->idUsuario}">Dar permiso de admin</a></small> </td>  
            {/if}
            <td> <small><a href="deleteUsuario/{$user->idUsuario}">Eliminar usuario</a></small> </td>  	
                	
                     
        </tr>
    {/foreach}
</table>


{include 'templates/footer.tpl'}
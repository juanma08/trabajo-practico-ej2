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
            <td> <small><a href="permiso/{$user->idUsuario}">Dar permiso de admin</a></small> </td>    
        </tr>
    {/foreach}
</table>


{include 'templates/footer.tpl'}
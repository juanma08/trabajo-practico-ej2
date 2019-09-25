<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{$titulo}</h1>

<table>
    <tr>
        <th>
         Producto
        </th>
        <th>
         Precio
        </th>
        <th>
         Descripcion
        </th>
        <th>
         Categoria
        </th>
    </tr>
	{foreach $productos as $producto}
        
		<tr>			
			<td>{$producto->Nombre}</td>
			<td>{$producto->Precio}</td>
			<td>{$producto->Descripcion}</td>
			<td>{$producto->Categoria}</td>			
            <td> <small><a href="producto/{$producto->idProducto}">Ver mas</a></small> </td>
        </tr>
    {/foreach}
</table>

</body>
</html>
{include 'templates/header.tpl'}
<h1> {$producto->Nombre} ({$producto->Descripcion})</h1>
<p>{$producto->Precio|wordwrap:50:"<br/>\n"} </p>
{include 'templates/footer.tpl'}
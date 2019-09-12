<?php

class VerduleriaView {

    public function showHome($productos) {

    
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
            <title>Lista de Tareas</title>
        </head>
        <body>
        
        <table class="table">
        <tbody>
        <tr>
        <th scope="col">Producto</th>
        <th scope="col">Precio</th>
        <th scope="col">Descripcion</th>
        </tr>
        
        ';
        
        foreach($productos as $producto) {
              $html .= '<tr class="producto"> 
                            <td>' . $producto->Nombre .'</td>
                            <td>' . $producto->Precio .'</td>
                            <td>' . $producto->Descripcion .'</td>
                            </tr>';
                            
                        }
                        
                        $html .= '
                        
            </tbody>
        </table>
        </body>
       </html>';
           
        echo $html;
    }
    








    }

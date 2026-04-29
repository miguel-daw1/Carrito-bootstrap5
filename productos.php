<?php
$productos=[
    [
        "id"=>1,
        "nombre"=>"Margarita"
        "imagen"=>"margarita,jpg"
        "precios"=>["chica"=>100,"mediana"=>150,"grande"=>200]
    ]
]

echo json_encode($productos)
?>
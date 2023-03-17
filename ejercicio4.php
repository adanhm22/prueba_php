<?php
    $people_json = file_get_contents('https://pokeapi.co/api/v2/pokemon?limit=151');
    $decoded_json = json_decode($people_json, true);

    echo "<h1> LISTA DE POKEMONS</h1>";
    foreach ($decoded_json["results"] as $key) {
        echo "<b>".$key['name'] ." ---</b>" . $key['url'] . "<br>";
    }
?>
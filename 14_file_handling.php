<?php

echo '<h1>File handling</h1>';

$file = 'extras/frutas.txt';

if(file_exists($file)){
    // Numero final apresentado no readfile acredito que seja o numero de bites do arquivo.
    //Tamanho dele.
    // echo readfile($file);

    //fopen no modo leitura. r = read
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose(($handle));
    echo $contents;
}else{
    //se nao existir o arquivo ele criar no modo escrita
    $handle = fopen($file, 'w');
    //Conteudo a ser escrito
    $contents = 'Banana'. PHP_EOL.'Maça'. PHP_EOL. 'Melancia';
    //Gravando ou escrevendo no arquivo
    fwrite($handle, $contents);
    fclose($handle);
}
<?php

/**
 * Exceptions para tratamento de erros de forma mais elegante e inteligente
 */

function inverse($x){
    if(!$x){
        throw new Exception('Division by zero');
    }
    return 1/$x;
}

// Para o script
//echo inverse(0);

try{
    echo inverse(5);
    echo '<br>';
    echo inverse(0);
}catch (Exception $e){
    echo 'Caught Exception: ', $e->getMessage(), ' ';
}finally{
    echo 'Finalmente!';
}

try{
    echo inverse(0);
}catch (Exception $e){
    echo 'Caught Exception 2: ', $e->getMessage(), ' ';
}finally{
    echo 'Finalmente 2!';
}


echo '<br>';
echo 'Script não para ao encontrar um erro!';
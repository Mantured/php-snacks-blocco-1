<!-- Partendo da questa stringa $string = "c,i,n,q,u,e"; 
trasforma la stringa in un array con un elemento per carattere, -->

	<!-- $array = ['c','i','n','q','u','e']; -->

<!-- infine crea un array associativo della forma: -->
	
	<!-- $result = [
		'c' => 'c',
		'i' => 'i',
		'n' => 'n',
		'q' => 'q',
		'u' => 'u',
		'e' => 'e'
	]; -->

<?php
    $string = "c,i,n,q,u,e";
    $array= explode(',', $string);
    var_dump($array);
    $result = [];
    foreach($array as $key => $value){
        $key = $value;
        echo $key. '=>'. $value. '<br>';
        $result[$key] = $value;
    }
    var_dump($result);
    
?>
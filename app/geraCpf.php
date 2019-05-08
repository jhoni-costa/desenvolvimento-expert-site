 <?php

    function mask($val, $mask){
        $maskred = '';
        $k = 0;
        for($i = 0; $i <=strlen($mask)-1; $i++){
            if($mask[$i] == '#'){
                if(isset($val[$k]))
                    $maskred .= $val[$k++];
                } else {
                    if(isset($mask[$i]))
                        $maskred .= $mask[$i];
            }
        }
        return $maskred;
    }
        $cpf = array();
        $validador = array();
        $validador1 = 0;

        for ($i = 10; $i > 1 ; $i--) { 
            $numero = rand(0, 9);
            array_push($cpf, $numero);
            array_push($validador, ($i * $numero));
            $validador1 += ($i * $numero);      
        }

        $validador1 = $validador1 % 11;
        
        if($validador1 < 2){
            array_push($cpf, 0);
        } else {
            array_push($cpf, (11 - $validador1));
        }

        $y = 0;
        $validador = array();
        $validador1 = 0;
        
        for ($i = 11; $i > 1 ; $i--) { 
            array_push($validador, ($i * $cpf[$y]));
            $validador1 += ($i * $cpf[$y]);
            $y++;
        }

        $validador1 = $validador1 % 11;
        
        if($validador1 < 2){
            array_push($cpf, 0);
        }else{
            array_push($cpf, (11 - $validador1));
        }

        $string = "";
        
        foreach($cpf as $cpfValido){
            $string = $string.(string) $cpfValido; 
        }
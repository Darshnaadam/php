<?php

// Build-in functions of php

    echo strrev("Hello world.");
    echo("<pre>");
    echo str_repeat("Hip", 2);
    echo("<pre>");
    echo strtoupper("hooray");
    echo("<pre>");
    echo strlen("intro");
    echo("<pre>");

    // write your own function

    function greet(){
        print "Hello\n";
    }

    greet();
    greet();
    echo("<pre>");

    // return values

    function greeting() {
        return "Hello";
    }

    print greeting() . " Glenn\n";
    print greeting() . " Sally";
    echo("<pre>");

    // Arguments
    function howdy($lang){
        if($lang == 'es') return "Hola";
        if($lang == 'fr') return "Bonjour";
        return "Hello";
    }

    print howdy('es') . " Glenn\n";
    print howdy("fr") . " Sally";
    echo("<pre>");

    // Call by values

    function double($alias){
        $alias = $alias * 2;
        return $alias;
    }

    $val = 10;
    $dval = double($val);
    echo "Value = $val doubled = $dval\n";

    // Call by reference

    function triple(&$realthing){
        $realthing = $realthing*3;
    }

    $val = 10;
    triple($val);
    echo "Triple = $val"
?>
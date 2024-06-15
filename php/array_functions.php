<?php
    $za = array();
    $za["name"] = "Chuck";
    $za["course"] = "WA4E";

    if(array_key_exists('course', $za)){
        echo("course exist\n");
    }
    else{
        echo("Course does not exist\n");
    }

    echo isset($za['name']) ? "name is set\n": "name is not set\n";
    echo isset($za["addr"]) ?"addr is set\n":"addr is not set\n";
    echo("<pre>");
?>

<!-- counting and is_arry function -->
<?php
    $za = array();
    $za["name"] = "Chuck";
    $za["course"] = "WA4E";

    print "Count: " . count($za). "\n";
    if(is_array($za)){
        echo '$za is an Array'. "\n";
    }
    else{
        echo '$za is not an Array' . "\n";
    }
?>

<!-- sorting an array -->
<?php
    $za =array();
    $za["name"] = "Chuck";
    $za["course"] = "WA4E";
    $za["Topic"] = "PHP";

    print_r($za);
    sort($za);
    print_r($za);

    // sorting w.r.to key and value

    print_r($za);
    ksort($za);
    print_r($za);
    asort($za);
    print_r($za);
?>

<!-- Exploding Arrays -->

<?php
    $inp = "This is a sentence with Seven words.";
    $temp = explode(' ',$inp);
    print_r($temp);
?>
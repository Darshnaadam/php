<?php
    // Integer Indices
    $stuff = array("Hi", "There");
    echo $stuff[1];
?>
<br>
<br>
<?php 
    // key/value
    $stuff = array("name" => "Chuck",
                    "course" => "WA4E");
    echo $stuff['course'];

    // Dumping an Array
    echo("<pre>\n");
    print_r($stuff);
    echo("\n<pre>\n");

    // var_dump
    var_dump($stuff);
    echo("\n<pre>\n");

    // Building up an array

    $va = array();
    $va[] = "Hello";
    $va[] = "World";
    print_r($va);
    echo("\n<pre>\n");

    // You can alos add new items in an array using a key

    $za = array();
    $za["name"] = "Chuck";
    $za["course"] = "WA4E";
    print_r($za)
?>

<!-- Looping through Array -->

<?php
    $stuff = array("name" => "Chuck",
                    "course" => "WA4E");
    foreach($stuff as $k => $v){
        echo "key= ", $k, " value= ", $v,"\n";
    }
?>
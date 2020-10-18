<html></html>
<?php
    function inverse($x) {
        if (!$x) {
            throw new Exception('Division par zéro.');
        }
        return 1/$x;
    }

    try {
        echo inverse(5) . "\n";
        echo inverse(0) . "\n";
    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\t";
    }

    // Continue execution
    echo "Bonjour le monde !\n";
?>
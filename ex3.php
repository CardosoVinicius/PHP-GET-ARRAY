<html>
    <body>
        <h3> Recursividade - Serie de Fibonacci</h3>
        <?php
            $n = $_GET["param1"];
            echo fibonacci ($n);
            function fibonacci ($n) {
            if ($n == 0)
                return 0;
            if ($n == 1)
                return 1;
                return fibonacci($n-1) + fibonacci ($n-2);
        }
        ?>
    </body>
</html>

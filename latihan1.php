<!DOCTYPE html>
<html>
    <body>

        <h1>My first PHP page</h1>

        <?php
            echo "Hello World!";
            $angka_pertama = 5;
            $var_string = "kasih huruf"; //string
            $var_double = 4.5; // double / float
            $var_bool = true; //boolean
            $var_char = 'a';


            //kondisi variable
            $var_null = null //null

            //operator
            $angka_pertama + $var_double; // +
            $angka_pertama - $var_double; // -

            //percabangan
            if (true) {
                echo $var_string
            }

            if (false) {
                echo $var_string
            } else {
                echo $var_char
            }


            //perulangan

            while (condition) {
                //code
            }

            for ($i=0 $i < ; $i++) {
                //code....
            }

            // saat memiliki data object atau array
            foreach ($variable as $key => $value) {
                //code...
            }

        ?>

    </body>
</html>
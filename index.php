<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    
    <!-- Linking -->
    <link rel="stylesheet" href="/external/style.css">
    <script src="/external/script.js"></script>

</head>
<body>
    <?php
        define("PI", "3.141592");
        $a = 10;
        $b = 20;
        
        $arr_1 = array("string", 15);
        $arr_2 = array(
            "foo" => "bar",
            "foo2" => "bar2"
        );

        class User {
            public $username;
            private $email;
            private $passwd;

            public function __construct($username, $email, $passwd)
            {
                $this->username = $username;
                $this->email = $email;
                $this->passwd = $passwd;
            }

            public function password_check() {
                if (strlen($this->passwd) < 7) {
                    echo "WARNING: Password is too short.<br>";
                }
                else {
                    echo "SUCCESS: Password set to $this->passwd.<br>";
                }
            }
            
            public function print_info() {
                echo "$this->username<br>$this->email<br>$this->passwd";
            }

        }

        $user1 = new User("falconlover", "falconlover@email.com", "1337lover");
        echo $user1 -> print_info();
        echo $user1 -> password_check();

        $arr = array(
            "yo" => "bo",
            "i'm" => "bo you",
            "itty bitty" => "titty committee"
        );
        foreach ($arr as $x => $x_value) {
            echo "$x has a value of $x_value<br>";
        }

    ?>
</body>
</html>
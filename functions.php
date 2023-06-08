 <?php
    function generatePassword($length)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';
        $password = '';
        $char_length = strlen($characters);

        for ($i = 0; $i < $length; $i++) {
            $random_index = rand(0, $char_length - 1);
            $password .= $characters[$random_index];
        }

        return $password;
    }
    ?>
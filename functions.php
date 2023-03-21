<?php 
    
    function randomPassword($password) {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#?!$%&€£';
        $pass = array();
        $alphabetLen = strlen($alphabet) - 1; 
        for ($i = 0; $i < $password; $i++) {
            $n = random_int(0, $alphabetLen);
            $pass[] = $alphabet[$n];
        }
        var_dump(implode($pass));
        return implode($pass);
    }

?>
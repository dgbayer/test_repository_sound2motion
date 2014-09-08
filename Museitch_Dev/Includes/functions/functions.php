<?php 

    function redirect_to($new_location) {
        header("Location: " . $new_location);
        exit;
    }
    
    function mysql_prep($string) {
        global $connection;
        $escaped_string = mysqli_real_escape_string($connection, $string);
        return $escaped_string;
    }

    function confirm_query($result_set){
        if (!$result_set){
            die("Database query failed.");
        }
    }
    
    function form_errors($errors=array()) {
        $output = "";
        if (!empty($errors)) {
            $output .= "<div class=\"error\">";
            $output .= "Please fix the following errors:";
            $output .= "<ul>";
            foreach ($errors as $key => $error) {
                $output .= "<li>{$error}</li>";
            }
            $output .= "</ul>";
            $output .= "</div>";
        }
        return $output;
    }
    
    function password_encrypt($password){
        
        $hash_format = "$2y$10$";
        $salt_length = 22;
        $salt = generate_salt($salt_length);
        $format_and_salt = $hash_format . $salt;
        
        $hash = crypt($password, $format_and_salt);
        return $hash;
        
    }
    
    function generate_salt($length){
        //Not 100% Unique!!! one of those good enough solutions
        $unique_random_string = md5(uniqid(mt_rand(), true));
        
        // Valid characters for a salt are [a-zA-Z0-9./]
        $base64_string = base64_encode($unique_random_string);
        
        // But not '+' which is valid in base64 encoding
        $modified_base64_string = str_replace('+', '.', $base64_string);
        
        $salt = substr($modified_base64_string, 0, $length);
        
        return $salt;
        
    }
    
    function password_check($password, $existing_hash) {
        $hash = crypt($password, $existing_hash);
        if ($hash === $existing_hash) {
            return true;
        } else {
            return false;
        }
    }

 ?>
                      
       
        

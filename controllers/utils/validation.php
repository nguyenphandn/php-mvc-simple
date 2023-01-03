<?php
    function validate_username($data) {
        // Validate is empty
        if (empty($data)) {
            return "Username is empty!";
        }

        // Validate email format
        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return "Username is not an Email!";
        }

        return '';
    }

    function validate_password($data) {
        // Validate is empty
        if (empty($data)) {
            return "Password is empty!";
        }
        // Validate length
        if (strlen($data) < 8) {
            return "Password must not be less than 8 letters!";
        }

        // Validate has uppercase
        if(!preg_match('/[A-Z]/', $data)){
            return "Password must has at least ONE uppercase letter!";
        }
        return '';
    }

    // compare password and re-entered password
    function compare_repassword($pw1, $pw2) {
        // Validate is empty
        if (empty($pw1)) {
            return "Password is empty!";
        }
        // Validate compare
        if (strcmp($pw1, $pw2) != 0) {
            return "Passwords must be the same!";
        }
        return '';
    }

    // compare old password and new password
    function compare_newpassword($pw1, $pw2) {
        // Validate is empty
        if (empty($pw1)) {
            return "Password is empty!";
        }
        // Validate compare
        if (strcmp($pw1, $pw2) == 0) {
            return "New password cannot be the same as old password!";
        }
        // Validate length
        if (strlen($pw1) < 8) {
            return "Password must not be less than 8 letters!";
        }

        // Validate has uppercase
        if(!preg_match('/[A-Z]/', $pw1)){
            return "Password must has at least ONE uppercase letter!";
        }
        return '';
    }
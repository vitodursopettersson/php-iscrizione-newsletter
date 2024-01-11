<?php

function checkEmail($email)
{
    if (!empty($email)) {
        if (strpos($email, '@', 1) && strpos($email, '.', 1)) {
            $_SESSION['email'] = $email;
            echo '<div class="alert alert-success mt-2" role="alert">
                            ✅ Iscrizione effettuata!
                        </div>';
            header('Refresh: 2; URL=thankyou.php');
            die;
        } else {
            echo ' <div class="alert alert-danger mt-2" role="alert">
                            ❌ Inserisci un email valida
                        </div>';
        };
    }
};

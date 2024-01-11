<?php

function checkEmail($email)
{
    if (!empty($email)) {
        if (strpos($email, '@', 1) && strpos($email, '.', 1)) {
            echo ' <div class="alert alert-success mt-2" role="alert">
                            ✅ Iscrizione effettuata!
                        </div>';
        } else {
            echo ' <div class="alert alert-danger mt-2" role="alert">
                            ❌ Inserisci un email valida
                        </div>';
        };
    }
};

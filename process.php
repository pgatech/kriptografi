<?php
    // Encryption
    function caesarCipher($plaintextenc, $keyenc) {
        $ciphertext = "";
        $length = strlen($plaintextenc);
        for ($i = 0; $i < $length; $i++) {
            if (ctype_alpha($plaintextenc[$i])) {
                $asciiOffset = ord(ctype_upper($plaintextenc[$i])) ? 65 : 97;
                $ciphertext .= chr(fmod(((ord($plaintextenc[$i]) - $asciiOffset + $keyenc) % 26), 26) + $asciiOffset);
            } else {
                $ciphertext .= $plaintextenc[$i];
            }
        }
        return $ciphertext;
    }

    //Decryption
    function caesarCipherDecrypt($ciphertextdec, $keydec) {
        $plaintextdec = "";
        $length = strlen($ciphertextdec);
        for ($i = 0; $i < $length; $i++) {
            if (ctype_alpha($ciphertextdec[$i])) {
                $asciiOffset = ord(ctype_upper($ciphertextdec[$i])) ? 65 : 97;
                $plaintextdec .= chr(fmod(((ord($ciphertextdec[$i]) - $asciiOffset - $keydec + 26) % 26), 26) + $asciiOffset);
            } else {
                $plaintextdec .= $ciphertextdec[$i];
            }
        }
        return $plaintextdec;
    }
    ?>
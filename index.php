<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kriptografi - PGATECH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Connect ke Algoritma -->
<?php include 'process.php';?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kriptografi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <span class="navbar-text">
        PGATECH
      </span>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row mt-5">
        <div class="col px-md-5">
            <h2>Caesar Cipher Encryption</h2>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="plaintextenc">Plain Text:</label>
                <input type="text" class="form-control" name="plaintextenc" id="plaintextenc" required><br><br>
                <label for="keyenc">Key:</label>
                <input type="number" class="form-control" name="keyenc" id="keyenc" required><br><br>
                <input type="submit" class="btn btn-danger" value="Encrypt" name="encryptionform">
            </form>
        </div>
        <div class="col px-md-5">
                <h2>Caesar Cipher Decryption</h2>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="ciphertextdec">Cipher Text:</label>
                <input type="text" class="form-control" name="ciphertextdec" id="ciphertextdec" required><br><br>
                <label for="keydec">Key:</label>
                <input type="number" class="form-control" name="keydec" id="keydec" required><br><br>
                <input type="submit" class="btn btn-primary" value="Decrypt" name="decryptionform">
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col px-md-5">
            <div class="alert alert-danger" role="alert">
                <?php   
                    echo "<h3>Result:</h3>";
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["encryptionform"])) {
                        $plaintextenc = $_POST["plaintextenc"];
                        $keyenc = $_POST["keyenc"];
                        $ciphertext = caesarCipher($plaintextenc, $keyenc);
                
                        echo "Plain Text: " . $plaintextenc . "<br>";
                        echo "Key: " . $keyenc . "<br>";
                        echo "Cipher Text: " . $ciphertext . "<br>";
                    }
                ?>
            </div>
        </div>
        <div class="col px-md-5">
            <div class="alert alert-primary" role="alert">
                <?php 
                    echo "<h3>Result:</h3>";
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["decryptionform"])) {
                        $ciphertextdec = $_POST["ciphertextdec"];
                        $keydec = $_POST["keydec"];
                        $plaintextdec = caesarCipherDecrypt($ciphertextdec, $keydec);
                        
                        echo "Cipher Text: " . $ciphertextdec . "<br>";
                        echo "Key: " . $keydec . "<br>";
                        echo "Plain Text: " . $plaintextdec . "<br>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4"  style="background-color:#f5f5f5">
    <div class="row d-flex align-items-center">
        <div class="col">
            <p class="text-center text-md-left grey-text">© 2023 Copyright PGATECH</p>
        </div>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
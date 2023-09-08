<?php
$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";

$passwordLength = $_GET['passwordLength'] ?? null;
if ($passwordLength != null) {
  $password = substr(str_shuffle($characters), 0, $passwordLength);
} else {
  $password = null;
}

?>


<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>

  <!-- THIRD PARTY LIBRARIES -->
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- FONTAWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- STANDARD FAVICON TO AVOID CONSOLE ERRORS ON FIREFOX -->
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-5">
        <form action="">
          <div class="d-flex flex-column">
            <div class="d-flex">
              <div>
                <label for="customRange1" class="form-label pe-3">Lunghezza</label>
              </div class="mb-3">
              <input type="range" class="form-range" value="<?php echo $passwordLength ?>" min="0" max="20" step="1" id="passwordLength" name="passwordLength" oninput="this.nextElementSibling.value = this.value">
              <output class="ps-3"><?php echo $passwordLength ?></output>
            </div>
            <button type="submit" class="btn btn-success">Genera</button>
          </div>
        </form>
        <div class="text-center m-3">
          <h1><?php echo $password ?></h1>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>
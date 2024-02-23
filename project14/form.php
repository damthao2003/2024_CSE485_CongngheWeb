<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khóa học</title>
</head>
<body>
<?php
    $countries = array (
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
        "Antigua & Barbuda",
        "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
        "Bahamas", "Bahrain",
        "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
        "Bermuda", "Bhutan",
        "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
    Islands", "Brunei",
        "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
    );
    $titles = ['Employee ID', 'Last Name', 'First Name'];

?>
<form action="form.php">
    <h3>Basic Infor</h3>
    <hr style="height: 3px">

    <div class="basic-infor">
        <?php
           foreach ($titles as $title){
           }

        ?>
        <div>

            <input type="text">
        </div>



    </div>


</form>


</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic info</title>
    <style>
        .full hr {
           transform: translateY(-23px);

        }
        .mani1 {
            display: grid;
            grid-template-columns: 250px 1000px;
        }
        input[name="name"]{
            width: 500px;
            height: 20px;

        }
        input[name="gender"]{
            display: flex;
            flex-direction: column;
        }



    </style>
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
// You can use the $countries array in your PHP code as needed.

echo '<div class="full">';
//Basic Info
echo '<div class="element1">';
echo '<h2 >Basic Info</h2>';
echo '<hr color="#121212" />';
echo '</div>';

echo '<div class="mani1">';
echo '<h3>Employee ID</h3> ';
echo '<h4 style="padding-left: 60px">9</h4> ';
echo '<h3>Last Name</h3> ';
echo '<h4 style="padding-left: 60px">9</h4> ';
echo '<h3>First Name</h3> ';
echo '<input type="text" name="name" >';
echo '<h3>Gender</h3> ';
echo '<div>';
echo '<input type="radio" name="gender" > Male';
echo '<input type="radio" name="gender">Female';
echo '<input type="radio" name="gender">XXX';
echo '<input type="radio" name="gender">ZZZ';
echo '</div>';




echo '</div>';
echo '</div>';

?>
</body>
</html>
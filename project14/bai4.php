<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>project14</title>
    <style>

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

?>
<form action="form.php">
    <div class ="Basic info">
        <div class = "title1">
            <h2>Basic info</h2>
            <hr style="height: 1px; background-color: gray; margin-top: -20px">
        </div>
        <div class="item-content">
            <div class = "item">
                <label for = "">Employee ID</label>
                <input type="text" placeholder="">
            </div>
            <div class = "item">
                <label for="">Last Name</label>
                <input type="text" placeholder="">
            </div>
            <div class="item">
                <label for="">First Name</label>
                <input type="text" placeholder="">
            </div>
            <div class="item">
                <label for="">Gender</label>
                <input type="radio" value="Nam"> Nam
                <input type="radio" value="Nữ"> Nữ
            </div>
            <div class="item">
                <label for="">Title</label>
                <input type="text" placeholder="">
            </div>
            <div class="item">
                <label for="">Suffix</label>
                <input type="text">
            </div>
            <div class="item">
                <label for="">BirthDate</label>
                <input type="date">
            </div>
            <div class="item">
                <label for="">HireDate</label>
                <input type="date">
            </div>
            <div class="item">
                <label for="">SSN # (if applicable)</label>
                <input type="text">
            </div>
            <div class="item">
                <label for="">Reports to</label>
                <select name="" id="">
                    <?php
                    foreach ($countries as $country){
                        echo '<option>'. $country . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="title2">
            <h2>Contact Info</h2>
            <hr style="height: 1px; background-color: gray; margin-top: -20px">
        </div>
        <div class="item-content">
            <div class="item">
                <label for="">Email</label>
                <input type="text" placeholder="name@example.com">
            </div>
            <div class="item">
                <label for="">Address</label>
                <input type="text">
            </div>
            <div class="city">
                <label for="">City</label>
                <input type="text">
            </div>
            <div class="item">
                <label for="">Region</label>
                <input type="text">
            </div>
            <div class="item">
                <label for="">Postal Code</label>
                <input type="text">
            </div>
            <div class="item">
                <label for="">Country</label>
                <select name="" id="">
                    <?php
                    foreach ($countries as $country){
                        echo '<option>' .$country.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="item">
                <label for="">Us Home Phone</label>
                <input type="text">
            </div>
            <div class="item">
                <label for="">Photo</label>
                <input type="" name="photo">
            </div>
        </div>
        <div class="title3">
            <div class="title">
                <h2>Optional Info</h2>
                <hr style="height: 1px; background-color: gray; margin-top: -19px">
            </div>
        </div>
        <div class="item-content">
            <div class="item">
                <label for="">Note</label>
            </div>
            <div class="item">
                <label for="">Preferred Shift</label>
                <input type="checkbox"> Regular
                <input type="checkbox"> Gravy Yard
            </div>
            <div class="item">
                <label for="">Active?</label>
                <input type="checkbox">
            </div>
            <div class="item">
                <label for="">Are you human</label>
                click to change <input type="text">
            </div>
        </div>
        <div class="title3">
            <div class="title">
                <button type="button" onclick="Back"></button>
                <hr style="height: 1px; background-color: gray; margin-top: -19px">
            </div>
        </div>
    </div>
</form>
</body>
</html>

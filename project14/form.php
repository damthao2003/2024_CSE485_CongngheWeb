<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khóa học</title>
    <style>
        .item-content{
            margin: 10px 20px ;
            label{
                font-size: 16px;
                font-weight: 700;
            }

            input{
                height: 21px;
                width: 400px;
                margin-right: 30px;

            }
        }

    </style>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
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
    <div class="basic-infor">
        <div class="item-title">
            <h2>Basic Infor</h2>
            <hr style="height: 1px; background-color: grey; margin-top: -23px">
        </div>
        <div class="item-content">
            <div class="item">
                <label for="">Employee ID</label>
            </div>
            <div class="item">
                <label for=""> Last Name</label>
            </div>
            <div class="item">
                <label for="">First Name</label>
                <input type="text" name="firstname">
            </div>
            <div class="item">
                <label for="">Gender</label>
                <input type="radio" name="gender">
            </div>
            <div class="item">
                <label for="">Title</label>
                <input type="text" name="title">
            </div>
            <div class="item">
                <label for="">Suffix</label>
                <input type="text" name="suffix">
            </div>
            <div class="item">
                <label for="">BirthDate</label>
                <input type="datetime-local" name="brithdate">
            </div>
            <div class="item">
                <label for="">HireDate</label>
                <input type="datetime-local" name="hiredate">
            </div>
            <div class="item">
                <label for="">SSn # (if applicable)</label>
                <input type="text" name="">
            </div>
            <div class="item">
                <label for="">Reports to</label>
                <select name="" id="">
<!--                    sai -->
                    <?php
                    foreach ($countries as $country){
                        echo '<option>' . $country . '</option>';
                    }
                    ?>
                </select>
            </div>
    </div>
    <div class="conatct-infor">
        <div class="item-title">
            <h2>Contact Infor</h2>
            <hr style="height: 1px; background-color: grey; margin-top: -23px">
        </div>
        <div class="item-content">
            <div class="item">
                <label for="">Email</label>
                input type="text" name="email">
            </div>
            <div class="item">
                <label for=""> Address</label>
                input type="text" name="address">
            </div>
            <div class="item">
                <label for="">City</label>
                <input type="text" name="city">
            </div>
            <div class="item">
                <label for="">Region</label>
                <input type="radio" name="region">
            </div>
            <div class="item">
                <label for="">Postal Code</label>
                <input type="text" name="postalcode">
            </div>
            <div class="item">
                <label for="">Country</label>
                <select name="" id="">
                    <?php
                    foreach ($countries as $country){
                        echo '<option>' . $country . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="item">
                <label for="">US Home Phone</label>
                <input type="number" name="brithdate">
            </div>
            <div class="item">
                <label for="">Photo</label>
                <input type="" name="photo">
            </div>
        </div>
    </div>
        <div class="optional-infor">
            <div class="item-title">
                <h2>Optional Infor</h2>
                <hr style="height: 1px; background-color: grey; margin-top: -23px">
            </div>
            <div class="item-content">
                <div class="item">
                    <label for="">Notes</label>
                    <textear id="editor"> </textear>
                    <script>
                        // Khởi tạo CKEditor cho textarea có id là 'editor'
                        CKEDITOR.replace('editor', {
                            toolbar: 'Basic', // Hiển thị thanh công cụ định dạng cơ bản
                            width: '100%',    // Thiết lập chiều rộng
                            height: 300       // Thiết lập chiều cao
                        });
                    </script>
                </div>

                <div class="item">
                    <label for="">Preferred Shift</label>
                    <input type="checkbox" name="postalcode">
                </div>

                <div class="item">
                    <label for="">US Home Phone</label>
                    <input type="number" name="brithdate">
                </div>
                <div class="item">
                    <label for="">Photo</label>
                    <input type="" name="photo">
                </div>
            </div>
        </div>



</form>


</body>
</html>
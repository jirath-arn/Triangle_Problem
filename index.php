
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Triangle Problem">
    <meta name="author" content="Charinpat Pukhajeetrakul, Worapan Thangjaitummachot and Jirath Arnamnath">
    <title>Triangle Problem</title>
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    
<div class="container">
    <div class="bg-light p-5 rounded mt-3">
        <form action="index.php" method="POST" onsubmit="return checkSubmit();">
            <h1>Fill in the lengths on each side of Triangle.</h1>

            <div class="mb-3">
                <label for="a" class="form-label"><strong>Side A</strong> (between 1-200)</label>
                <input type="number" min="1" max="200" value="<?php (isset($_POST['a'])) ? print($_POST['a']) : print(1);?>" class="form-control" id="a" name="a" onkeypress="return isNumberKey(event, this.id);" required>
            </div>
            
            <div class="mb-3">
                <label for="b" class="form-label"><strong>Side B</strong> (between 1-200)</label>
                <input type="number" min="1" max="200" value="<?php (isset($_POST['b'])) ? print($_POST['b']) : print(1);?>" class="form-control" id="b" name="b" onkeypress="return isNumberKey(event, this.id);" required>
            </div>

            <div class="mb-3">
                <label for="c" class="form-label"><strong>Side C</strong> (between 1-200)</label>
                <input type="number" min="1" max="200" value="<?php (isset($_POST['c'])) ? print($_POST['c']) : print(1);?>" class="form-control" id="c" name="c" onkeypress="return isNumberKey(event, this.id);" required>
            </div>

            <input type="submit" class="btn btn-primary" value="Submit">
        </form>

        <hr>

        <p class="lead"><b>Result :</b>
            <?php
                if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    $c = $_POST['c'];
    
                    if(($a < ($b + $c)) && ($b < ($a + $c)) && ($c < ($a + $b))) {
    
                        if(($a === $b) && ($b === $c)) {
                            echo "Equilateral.";
    
                        } elseif(($a === $b) || ($a === $c) || ($b === $c)) {
                            echo "Isosceles.";
                        
                        } else {
                            echo "Scalene.";
                        }
    
                    } else {
                        echo "Not a triangle.";
                    }
    
                } else {
                    echo "Please enter all fields!";
                }
            ?>
        </p>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script>
    function isNumberKey(evt, id) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        var DataVal = document.getElementById(id).value;
        document.getElementById(id).value = DataVal.replace(/^0+/, '');
        return true;
    }
    
    function checkSubmit() { 
        var a = document.getElementById("a").value;
        var b = document.getElementById("b").value;
        var c = document.getElementById("c").value;

        if(((a > 0) && (a < 201)) && ((b > 0) && (b < 201)) && ((c > 0) && (c < 201))) {
            return true;

        } else {
            alert("Please enter all fields and enter number between 1-200!");
            return false;
        }
    }
</script>

</body>
</html>
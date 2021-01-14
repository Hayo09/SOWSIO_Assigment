<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<?php 
    $a = mt_rand(0, 100);
    $b = mt_rand(0, 100);
?>
    <div class="container">
    <div class="alert <?php echo $data['alert'] ?>"><?php echo $data['message'] ?></div>
    <form action="calculate.php" method="post" class="form-inline">
        <div class="form-group">
            <label for="question" class="sr-only">Question:</label>
            <input type="text" name="question" value ="<?php echo $a . " * " . $b . " ="?>" readonly class="form-control-plaintext text-right" id="question" >
        </div>
        <div class="form-group ms-sm-3">
            <label for="awnser" class="sr-only">9999</label>    
            <input type="text" name="awnser" class="form-control" id="awnser">
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-dark">
    </form>
    </div>
</body>
</html> 
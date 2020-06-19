<?php
$dsn = 'mysql:dbname=test_DB;host=localhost;';
$user = 'yusuke';
$password = 'Yusuke0427!';
try {
    $dbh = new PDO($dsn, $user, $password);
    print "Success\n";
    $sql = "select * from user;";
    $resurt =$dbh->query($sql);
    
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
}
   
?>
<!DOCTYPE html>
<html lang="ja">
<head>
        <meta charset ="utf-8">
</head>
<body>
    <?php foreach( $result as $value ) { ?>
    <h1><?php echo "$value[name]"; ?></h1>
    
    <?php } ?>
    </body>
</html>
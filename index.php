<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'Yusuke';
$password = 'Yusuke0427';
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark navbar-dark">
        <div class="container-fruir">
            <div class="nav-headr">
                <a class="navbar-brand" href="index.html">LAMP SAMPLE PAGE</a>
            </div>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">DB Manager -test_db</h1>
            <p class="read">LAMP環境を構築し、データベース管理webアプリを作成しています。</br>デザインはBootstrapを使用</p>
        
        </p>
        </div>
    </div>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a href="#select" class="nav-link active"data-toggle="tab">select</a></li>
            <li class="nav-item"><a href="#insert" class="nav-link"data-toggle="tab">insert</a></li>
            <li class="nav-item"><a href="#update" class="nav-link"data-toggle="tab">update</a></li>
            <li class="nav-item"><a href="#delete" class="nav-link"data-toggle="tab">delete</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="select">
                <table class="table table-hover mt-2">
                    <caption>Show User Table</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resurt as $value) { ?>
                        <tr>
                            <th><?php echo "$value[id]";?></th>
                            <td><?php echo "$value[name]";?></td>
                            <td><?php echo "$value[age]"";?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="insert">
                <p>sample tab2</p>
            </div>
            <div class="tab-pane" id="update">
                <p>sample tab3</p>
            </div>
            <div class="tab-pane" id="delete">
                <p>sample tab4</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
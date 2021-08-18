<?php

include_once("helpers.php");

$applications = array('ucp');

if(!isset($_GET['app']) || !in_array($_GET['app'], $applications))
{
    return header("location: " . APP_URL);
}
$app = htmlspecialchars($_GET['app']);


$host = "localhost";
//$database = "alinsoai_" . $app;
//$user = "alinsoai_alin";
//$password = "!pD+9J2v({F]";

$database = "samp";
$user = "root";
$password = "";

$conn = new mysqli($host, $user, $password, $database);

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Alin Soaita Portofolio
    </title>
    <link rel="stylesheet" href=<?php echo asset('css/bootstrap.min.css'); ?>>
    <link rel="stylesheet" href=<?php echo asset('css/all.min.css'); ?>>
</head>
<body class="bg-secondary">
<div class="container-fluid">
    <br>
    <div class="span12">
        <div class="card bg-dark text-white">
            <div class="card-body">
                <h5 class="card-title">
                    Database viewer for '<?php echo $app; ?>'<br>
                </h5>
                <a href="<?php echo url(''); ?>"> <i class="fa fa-step-backward"> </i> Back to home </a>

            </div>
        </div>
        <div id="accordion">
            <?php
            $query = "SELECT `TABLE_NAME` FROM `INFORMATION_SCHEMA`.`TABLES` WHERE `TABLE_SCHEMA`='". $database . "'";
            $data = $conn->query($query);
            $index = 1;

            while($row = $data->fetch_assoc())
            { // while ends after html card code
            ?>
            <div class="card">
                <div class="card-header" id="<?php echo 'heading' . $index; ?>" data-toggle="collapse" data-target="<?php echo '#collapse' . $index; ?>" aria-expanded="false" aria-controls="<?php echo 'collapse' . $index; ?>">
                    <h5 class="mb-0">
                        <button class="btn btn-link">
                            <?php echo $row['TABLE_NAME']; ?>
                        </button>
                    </h5>
                </div>

                <div id="<?php echo 'collapse' . $index; ?>" class="collapse" aria-labelledby="<?php echo 'heading' . $index; ?>" data-parent="#accordion">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Default</th>
                                <th scope="col">Collation</th>
                                <th scope="col">Extra</th>
                            </tr>
                            </thead>
                            <tbody>
                        <?php
                            $query2 = "SELECT `COLUMN_NAME`, `ORDINAL_POSITION`, `COLUMN_TYPE`, `COLUMN_DEFAULT`, `COLLATION_NAME`, `EXTRA` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='". $database . "' AND `TABLE_NAME`='". $row['TABLE_NAME'] ."'";
                            $data2 = $conn->query($query2);
                            while($row2 = $data2->fetch_assoc()) { // while ends after html ?>
                            <tr>
                                <td>
                                    <?php echo $row2['ORDINAL_POSITION']; ?>
                                </td>
                                <td>
                                    <?php echo $row2['COLUMN_NAME']; ?>
                                </td>
                                <td>
                                    <?php echo $row2['COLUMN_TYPE']; ?>
                                </td>
                                <td style="max-width: 150px;">
                                    <?php echo $row2['COLUMN_DEFAULT']; ?>
                                </td>
                                <td>
                                    <?php echo $row2['COLLATION_NAME']; ?>
                                </td>
                                <td>
                                    <?php echo $row2['EXTRA']; ?>
                                </td>
                            </tr>
                        <?php } // end while ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php $index ++; } // end while ?>
        </div>
    </div>
</div>
</body>
<script src=<?php echo asset("js/jQuery.js"); ?>></script>
<script src=<?php echo asset("js/bootstrap.min.js"); ?>></script>
</html>

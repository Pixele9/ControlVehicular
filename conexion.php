<?php
    // server name, user name, password, DB
    // server can be an IP address or a DNS
    // DB name does not cares about caps or mins
    $Con = mysqli_connect("localhost", "root", "", "controlvehicular201922");
    // print_r($Con);

    $SQL = "INSERT INTO Propietarios VALUES ('','1','1','1','1','1','1')";
    $Query = mysqli_query($Con, $SQL) or die (mysqli_error($Con));
    // print($Query);

    // $err = mysqli_error($Con);
    // print($err);

    $CloseCon = mysqli_close($Con);
    print($CloseCon);

?>
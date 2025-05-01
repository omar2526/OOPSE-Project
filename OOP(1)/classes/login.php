<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['login']) && $_POST['login'] == "Login") {
        echo "Inside login block";

        require_once('Admin.php'); // Make sure this includes everything needed

        $db = new database();
        $conn = $db->connectToDb('localhost', 'root', '', 'steel');
        $user = new StdClas($conn);

        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = $user->login($username, $password);

        if ($result === true) {
            echo '<script>alert("User found"); location.href="contractorSignUp.html";</script>';
        } else {
            echo '<script>alert("Error: user not found"); location.href="index.html";</script>';
        }
    } 
    else {
        echo "Login value missing or incorrect.";
    }
}
?>

<?php
$username = htmlspecialchars($_GET["username"], ENT_QUOTES, 'UTF-8');

$host = "localhost";
$username_db = "root";
$password = "";
$database_name = "test_database_wb";

$conn = new mysqli($host, $username_db, $password, $database_name);

$sql_select = "SELECT * FROM comments";
$result = $conn->query($sql_select);
$data = $result->fetch_all();

foreach($data as $key => $value)
    foreach($value as $key => $comment_data){
        echo htmlspecialchars($comment_data, ENT_QUOTES, 'UTF-8') . "<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
</head>
<body>

<h1>hello <?php echo $username; ?></h1>

<form action="add_comment_logic.php" method="post">
    <textarea name="comment"></textarea>
    <input type="submit" name="add_comment" value="add comment">
</form>

</body>
</html>

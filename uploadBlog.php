<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload blog</title>
</head>
<body>
    <?php
    session_start();
    // if a POST request is sent from addEntry.php the form contents are in $_POST
    $blogText = "";
    $blogTitle = "";
    date_default_timezone_set('Europe/London');
    if (sizeOf($_POST)>0){
        $blogTitle = $_POST['blogTitle'];
        $blogText = $_POST['blogText'];
    }
    // if the user is redirected to uploadBlog.php from preview.php form contents are in $_SESSION
    else if (array_key_exists('blogTitle', $_SESSION) and array_key_exists('blogText', $_SESSION)){
        $blogTitle = $_SESSION['blogTitle'];
        $blogText = $_SESSION['blogText'];
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "website_portfolio";
    // Creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $dateTimeNow = date('d/m/Y H:i');
    $sql = "INSERT INTO blogs (title, entry, dateTime) 
    VALUES('$blogTitle','$blogText', '$dateTimeNow')";
    $conn->query($sql); // executes query
    header("Location: viewBlog.php");
    ?>
    
</body>
</html>
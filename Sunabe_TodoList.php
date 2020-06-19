<html>
<head>
    <meta charset="utf-8">
    <title>Todoリスト</title>
</head>
<body>
    <h1>TODOリスト</h1>
    <form action="TodoList.php" method="post">
    <input type="text" name="name">
    <input type="submit" value="追加">
    </form>

    <?php

    session_start();
    $todoList = array();

    if(isset($_SESSION['data'])){
        $todoList = $_SESSION['data'];
    }
        if(isset($_POST['name'])){
            $todoList[] = $_POST['name'];
        }
        $_SESSION['data'] = $todoList;
        
        foreach($todoList as $list) {

            echo "<p>$list</p>";
        }
    
?>

</body>
</html>
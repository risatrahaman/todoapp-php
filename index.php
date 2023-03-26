<!DOCTYPE html>
<html>

<head>
    <title>TODO</title>
    <link rel="stylesheet" href="./frontend/style.css">
</head>

<body>
    <div id="container">
        <div id="content">
            <h1>TODO APP</h1>
            
            <form id="form", method="post", action="./backend/add.php">
                <input id="input" type="text", name="text">
                <button id="add" type="submit" name="add">Add</button>
            </form>
            
            <ul id="tasks">
                <?php include './backend/show.php'; ?>
            </ul>
            
        </div>
    </div>

</body>

</html>
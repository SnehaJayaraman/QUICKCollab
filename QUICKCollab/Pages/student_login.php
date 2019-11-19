<!DOCTYPE html>

<html>
    <?php session_start(); ?>
    
<head>
    <meta charset="utf-8" />
    <title>Welcome to QuickCollab</title>
</head>
<body>

        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['firstname']) ?> </h1>

</body>
</html>
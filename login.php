<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Нэвтрэх</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cyan-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-xl shadow-lg w-96 text-center">
        <h2 class="text-2xl font-bold mb-6">Нэвтрэх</h2>
        <form method="POST">
            <input type="text" name="user" placeholder="admin" class="w-full p-3 border rounded mb-4 bg-blue-50">
            <input type="password" name="pass" placeholder="******" class="w-full p-3 border rounded mb-6 bg-blue-50">
            <button name="login" class="w-full bg-purple-600 text-white p-3 rounded-lg font-bold">Нэвтрэх</button>
        </form>
        <?php
        if(isset($_POST['login'])){
            $user = $_POST['user']; $pass = $_POST['pass'];
            $res = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
            if(mysqli_num_rows($res) > 0){
                $_SESSION['admin'] = $user;
                header("Location: dashboard.php");
            } else { echo "<p class='text-red-500 mt-2'>Буруу байна!</p>"; }
        }
        ?>
    </div>
</body>
</html>
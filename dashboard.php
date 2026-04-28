<?php include 'db.php'; 
include 'auth.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Админ удирдлага</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen text-center">
    <div class="bg-white p-10 rounded-xl shadow-md w-1/3">
        <h1 class="text-3xl font-bold mb-8">Админ удирдлага</h1>
        <div class="flex flex-col space-y-4">
            <a href="manage_menu.php" class="text-blue-500 text-xl hover:underline">Цэс удирдах</a>
            <a href="manage_projects.php" class="text-blue-500 text-xl hover:underline">Төсөл удирдах</a>
            <a href="logout.php" class="text-blue-500 text-xl hover:underline">Гарах</a>
        </div>
    </div>
</body>
</html>
<?php include 'db.php';
include 'auth.php';
if(isset($_POST['add'])){
    $title = $_POST['title']; $description = $_POST['description'];
    mysqli_query($conn, "INSERT INTO projects (title, description) VALUES ('$title', '$description')");
}
if(isset($_GET['del'])){
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM projects WHERE id=$id");
}
?>
<!DOCTYPE html>
<html>
<head><script src="https://cdn.tailwindcss.com"></script></head>
<body class="p-10 bg-gray-50">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold text-center mb-6">Төсөл нэмэх</h2>
        <form method="POST" class="space-y-4">
            <input type="text" name="title" placeholder="Төслийн гарчиг" class="w-full border p-2">
            <textarea name="description" placeholder="Төслийн дэлгэрэнгүй" class="w-full border p-2"></textarea>
            <button name="add" class="bg-blue-500 text-white px-6 py-2 rounded block mx-auto">Нэмэх</button>
        </form>
        <h3 class="text-xl font-bold mt-10 mb-4 text-center">Төслүүд</h3>
        <table class="w-full border-collapse">
            <tr class="bg-blue-500 text-white">
                <th class="p-2 border">Гарчиг</th><th class="p-2 border">Дэлгэрэнгүй</th><th class="p-2 border">Үйлдэл</th>
            </tr>
            <?php
            $res = mysqli_query($conn, "SELECT * FROM projects");
            while($row = mysqli_fetch_assoc($res)){
                echo "<tr>
                    <td class='p-2 border text-center'>{$row['title']}</td>
                    <td class='p-2 border text-center'>{$row['description']}</td>
                    <td class='p-2 border text-center'><a href='?del={$row['id']}' class='text-red-500'>Устгах</a></td>
                </tr>";
            }
            ?>
        </table>
        <a href="dashboard.php" class="block mt-4 text-gray-500">Буцах</a>
    </div>
</body>
</html>
<?php include 'db.php';
include 'auth.php';
if(isset($_POST['add'])){
    $name = $_POST['name']; $link = $_POST['link'];
    mysqli_query($conn, "INSERT INTO menus (menu_name, menu_link) VALUES ('$name', '$link')");
}
if(isset($_GET['del'])){
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM menus WHERE id=$id");
}
?>
<!DOCTYPE html>
<html>
<head><script src="https://cdn.tailwindcss.com"></script></head>
<body class="p-10 bg-gray-50">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold text-center mb-6">Цэс нэмэх</h2>
        <form method="POST" class="space-y-4">
            <input type="text" name="name" placeholder="Цэсний нэр" class="w-full border p-2">
            <input type="text" name="link" placeholder="Цэсний холбоос" class="w-full border p-2">
            <button name="add" class="bg-blue-500 text-white px-6 py-2 rounded block mx-auto">Нэмэх</button>
        </form>
        <h3 class="text-xl font-bold mt-10 mb-4 text-center">Цэсүүд</h3>
        <table class="w-full border-collapse">
            <tr class="bg-blue-500 text-white">
                <th class="p-2 border">Цэсний нэр</th><th class="p-2 border">Холбоос</th><th class="p-2 border">Үйлдэл</th>
            </tr>
            <?php
            $res = mysqli_query($conn, "SELECT * FROM menus");
            while($row = mysqli_fetch_assoc($res)){
                echo "<tr>
                    <td class='p-2 border text-center'>{$row['menu_name']}</td>
                    <td class='p-2 border text-center'>{$row['menu_link']}</td>
                    <td class='p-2 border text-center'><a href='?del={$row['id']}' class='text-red-500'>Устгах</a></td>
                </tr>";
            }
            ?>
        </table>
        <a href="dashboard.php" class="block mt-4 text-gray-500">Буцах</a>
    </div>
</body>
</html>
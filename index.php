<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="mn">
<head>
    <title>Миний Вэб</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0a192f] text-white">
    <nav class="flex justify-center space-x-8 p-6 text-yellow-400 font-bold">
        <?php
        $menus = mysqli_query($conn, "SELECT * FROM menus");
        while($m = mysqli_fetch_assoc($menus)){
            echo "<a href='{$m['menu_link']}'>{$m['menu_name']}</a>";
        }
        ?>
    </nav>
    <header class="text-center py-20">
        <h1 class="text-4xl font-bold text-yellow-400 mb-4">Сайн уу! [Таны нэр]</h1>
        <p class="text-gray-300">Таны ур чадвар, төслүүдийг танилцуулах миний вэб сайт.</p>
    </header>
    <section class="max-w-4xl mx-auto p-10">
        <h2 class="text-2xl text-center mb-8">Бүтээсэн төсөл</h2>
        <div class="space-y-4">
            <?php
            $projs = mysqli_query($conn, "SELECT * FROM projects");
            while($p = mysqli_fetch_assoc($projs)){
                echo "<div class='bg-[#112240] p-6 rounded shadow text-center'>
                    <h3 class='text-yellow-400 font-bold'>{$p['title']}</h3>
                    <p class='text-gray-400'>{$p['description']}</p>
                </div>";
            }
            ?>
        </div>
    </section>
</body>
</html>
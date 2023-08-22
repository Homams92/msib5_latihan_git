<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="profile-card">
            <img src="photo1.jpeg" alt="Your Photo" class="profile-photo">
            <h1 class="profile-name">Rafi Humam Nugraha</h1>
            <p class="profile-info">Mahasiswa di</p>
            <p class="profile-university">Universitas Wanita Internasional</p>
            <p class="profile-info">Jurusan</p>
            <p class="profile-major">Teknik Informatika</p>
            <p class="profile-info">Hobi:</p>
            <?php
            $hobbies = array("Main Game", "Olahraga", "Tidur");
            echo "<ul class='profile-hobbies'>";
            foreach ($hobbies as $hobby) {
                echo "<li>$hobby</li>";
            }
            echo "</ul>";
            ?>
            <p class="profile-info">Motto Hidup:</p>
            <blockquote class="profile-quote">"Mengalir dengan Ikhlas"</blockquote>
        </div>
    </div>
</body>
</html>

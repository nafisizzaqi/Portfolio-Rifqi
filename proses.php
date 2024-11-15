<?php 
// var_dump($_POST);

    include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($koneksi, $_POST['name']);
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);
        $phone = mysqli_real_escape_string($koneksi, $_POST['phone']);
        $comment = mysqli_real_escape_string($koneksi, $_POST['comment']);

        $query = "INSERT INTO contact_me (name, email, phone_number, comment, created_at)
                VALUES ('$name', '$email', '$phone', '$comment', CURRENT_TIMESTAMP)";
        if (mysqli_query($koneksi, $query)) {
            header('Location: index.php?status=success');
            exit();
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }

        mysqli_close($koneksi);
    }

?>
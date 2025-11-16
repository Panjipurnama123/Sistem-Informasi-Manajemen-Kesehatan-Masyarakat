<?php include 'header.php'; ?>
<main>
    <section class="contact">
        <h1>Hubungi Kami</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);
            // Simpan ke database atau kirim email
            echo "<p>Terima kasih, $name. Pesan Anda telah dikirim.</p>";
        }
        ?>
        <form action="contact.php" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Kirim</button>
        </form>
    </section>
</main>
<?php include 'footer.php'; ?>

<?php include 'header.php'; ?>
<main>
    <section class="login">
        <h1>Login</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            // Sederhana, tanpa database untuk demo
            if ($username == 'admin' && $password == 'password') {
                echo "<p>Login berhasil!</p>";
            } else {
                echo "<p>Username atau password salah.</p>";
            }
        }
        ?>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </section>
</main>
<?php include 'footer.php'; ?>

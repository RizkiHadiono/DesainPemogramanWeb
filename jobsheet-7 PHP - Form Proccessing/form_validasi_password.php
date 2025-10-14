<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi (Password)</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Form Input dengan Validasi (Password)</h1>
    <form id="myForm" method="post" action="proses_validasi_password.php"> 
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" class="error"></span><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" class="error"></span><br>
        
        <label for="password">Password (min 8 kar):</label>
        <input type="password" id="password" name="password">
        <span id="password-error" class="error"></span><br><br>
        
        <input type="submit" value="Submit">
    </form>

<script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        var nama = $("#nama").val().trim();
        var email = $("#email").val().trim();
        var password = $("#password").val(); // Ambil nilai password
        var valid = true;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Validasi Nama
        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        } else { $("#nama-error").text(""); }

        // Validasi Email
        if (email === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else if (!emailRegex.test(email)) {
            $("#email-error").text("Format email tidak valid.");
            valid = false;
        } else { $("#email-error").text(""); }

        // Validasi Password (Client-Side - Minimal 8 Karakter)
        if (password.length < 8) { 
            $("#password-error").text("Password minimal 8 karakter.");
            valid = false;
        } else {
            $("#password-error").text("");
        }
        
        if (!valid) {
            event.preventDefault(); 
        }
    });
});
</script>
</body>
</html>
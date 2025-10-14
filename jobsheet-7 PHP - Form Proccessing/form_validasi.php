<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Form Input dengan Validasi (Client-Side jQuery)</h1>
    <form id="myForm" method="post" action="proses_validasi.php"> 
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" class="error"></span><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" class="error"></span><br>
        
        <input type="submit" value="Submit">
    </form>

<script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        var nama = $("#nama").val().trim();
        var email = $("#email").val().trim();
        var valid = true;
        
        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        } else {
            $("#nama-error").text("");
        }

        if (email === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
            if (!emailRegex.test(email)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            } else {
                $("#email-error").text("");
            }
        }
        
        if (!valid) {
            event.preventDefault(); 
        }
    });
});
</script>
</body>
</html>
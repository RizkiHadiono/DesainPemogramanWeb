<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi (AJAX)</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Form Input dengan Validasi (AJAX)</h1>
    <form id="myForm" method="post" action=""> 
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" class="error"></span><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" class="error"></span><br>
        
        <input type="submit" value="Submit">
    </form>
    
    <div id="ajax-result"></div> <script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        event.preventDefault(); // Mencegah submit form default
        
        var nama = $("#nama").val().trim();
        var email = $("#email").val().trim();
        var valid = true;
        
        // --- Client-Side Validation (Sama seperti Langkah 6) ---
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        } else {
            $("#nama-error").text("");
        }

        if (email === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else if (!emailRegex.test(email)) {
            $("#email-error").text("Format email tidak valid.");
            valid = false;
        } else {
            $("#email-error").text("");
        }
        
        if (valid) {
            // Jika Client-Side valid, kirim data via AJAX untuk Server-Side Validation
            $.ajax({
                type: "POST",
                url: "proses_validasi.php", 
                data: $(this).serialize(), // Ambil semua data form
                success: function(response) {
                    // Tampilkan hasil (termasuk pesan error server-side)
                    $("#ajax-result").html("<h3>Server Response:</h3>" + response);
                }
            });
        } else {
             $("#ajax-result").html(""); // Bersihkan hasil lama jika validasi client gagal
        }
    });
});
</script>
</body>
</html>
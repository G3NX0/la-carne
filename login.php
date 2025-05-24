<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Restoran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

    <style>
        .logon{
            background-color: rgb(39, 39, 180)
        }

    </style>

  <div class="container d-flex justify-content-center align-items-center vh-100 ">
    <div class="card shadow p-4 bg-light text-dark" style="width: 100%; max-width: 400px; ">
      <h2 class="text-center mb-4">Login</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Admin</label>
          <input type="text" class="form-control" id="email" placeholder="Masukkan username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Kata Sandi</label>
          <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi">
        </div>
        <button type="submit" class="btn btn-primary w-100">Masuk</button>
      </form>
      <div class="mt-3 text-center">
        <small>Hanya Admin yang dapat mengakses</small>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        
  function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (email === "" || password === "") {
      alert("Harap isi semua kolom.");
      return false;
    } else if (email === "admin" && password === "Astudent") {
      window.location.href = "reserve.php";
      return false;
    } else {
      alert("Username atau password salah.");
      return false;
    }
  }
    document.querySelector("form").addEventListener("submit", function(event) {
        event.preventDefault(); // Mencegah pengiriman form default
        validateForm(); // Panggil fungsi validasi
    });


    </script>
</body>
</html>

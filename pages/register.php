<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h3 class="card-title text-center mb-4">📝 Register</h3>
          <form method="POST" action="myaccount.php"> <!-- POST method, because register -->   
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" placeholder="John Doe" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Create a password" name="password" required>
            </div>
            <div class="mb-3">
              <label for="confirm" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirm" placeholder="Re-enter password" name="confirmPass" required>
            </div>
            <div class="d-grid">
              <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gender
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" value="male">Male</a></li>
            <li><a class="dropdown-item" href="#" value="female">Female</a></li>
          </ul>
              </div>
            <br>
            <div class="d-grid">
              <button type="submit" class="btn btn-success" name="register">Register</button>
            </div>

            </div>
          </form>
          <p class="text-center mt-3 mb-0">
            Already have an account? <a href="login.php">Login</a>
          </p>
        </div>
      </div>
    </div
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

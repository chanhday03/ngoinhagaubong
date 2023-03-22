<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Admin</title>
  <link rel="stylesheet" href="../view/style.css" />
  <script src="https://kit.fontawesome.com/62fe7548c5.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<style>
  /*  import google fonts */
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

  * {
    margin: 0;
    padding: 0;
    outline: none;
    border: none;
    text-decoration: none;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  body {
    background: rgb(226, 226, 226);
  }

  nav {
    position: sticky;
    top: 0;
    bottom: 0;
    height: 100vh;
    left: 0;
    width: 85px;
    background: #fff;
    overflow: hidden;
    transition: 1s;
  }

  nav:hover {
    width: 280px;
    transition: 1s;
  }

  .logo {
    text-align: center;
    display: flex;
    margin: 10px 0 0 10px;
    padding-bottom: 3rem;
  }

  .logo img {
    width: 45px;
    height: 45px;
    border-radius: 50%;
  }

  .logo span {
    font-weight: bold;
    padding-left: 15px;
    font-size: 18px;
    text-transform: uppercase;
  }

  a {
    position: relative;
    width: 280px;
    font-size: 14px;
    color: rgb(85, 83, 83);
    display: table;
    padding: 10px;
  }

  nav .fas {
    position: relative;
    width: 70px;
    height: 40px;
    top: 20px;
    font-size: 20px;
    text-align: center;
  }

  .nav-item {
    position: relative;
    top: 12px;
    margin-left: 10px;
  }

  a:hover {
    background: #eee;
  }

  a:hover i {
    color: #3ef995;
    transition: 0.5s;
  }

  .logout {
    position: absolute;
    bottom: 0;
  }

  .container {
    display: flex;
  }

  /* MAin Section */
  .main {
    position: relative;
    padding: 20px;
    width: 100%;
  }

  .main-top {
    display: flex;
    width: 100%;
  }

  .main-top i {
    position: absolute;
    right: 0;
    margin: 10px 30px;
    color: rgb(110, 109, 109);
    cursor: pointer;
  }

  /*Attendance List serction  */
  .attendance {
    margin-top: 20px;
    text-transform: capitalize;
  }

  .attendance-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  input[type="button"] {
    width: 126px;
    border-radius: 10px;
    padding: 6px;
  }

  .attendance-header input[type="text"],
  select {
    width: 126px;
    border-radius: 10px;
    padding: 4px;
    border: 1px solid #34af6d;
    background-color: transparent;
  }

  .attendance-list {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
  }

  h1 {
    color: black;
    text-align: center;
  }

  input.go {
    padding: 8px 16px;
    border-radius: 12px;
    background: #4ad389;
    cursor: pointer;
  }

  .go:hover {
    color: #fff;
    background: #34af6d;
  }

  form input[type="submit"]:hover {
    color: #fff;
    background: #34af6d;
  }

  h1 {
    color: black;
    text-align: center;
  }

  table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 15px;
    min-width: 100%;
    overflow: hidden;
    border-radius: 5px 5px 0 0;
  }

  table tr th {
    color: #fff;
    background: #34af6d;
    text-align: left;
    font-weight: bold;
  }

  table th,
  table td {
    padding: 12px 15px;
  }

  table tbody tr {
    border-bottom: 1px solid #ddd;
  }

  table tbody tr:nth-of-type(odd) {
    background: #f3f3f3;
  }

  table tbody tr:last-of-type {
    border-bottom: 2px solid #4ad489;
  }

  .btn {
    padding: 0px 20px;
    margin-top: 20px;
    margin-right: 10px;
    border-radius: 10px;
    cursor: pointer;
    background: transparent;
    border: 1px solid #4ad489;
  }

  .btn:hover {
    background: #4ad489;
    color: #fff;
    transition: 1s;
  }

  .nut {
    display: flex;
  }
</style>

<body>
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="#" class="logo">
            <img src="https://img.freepik.com/premium-vector/cute-teddy-bear-logo-template_83738-274.jpg?w=2000" />
            <span class="nav-item">Admin</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class="fas fa-clipboard"></i>
            <span class="nav-item">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="index.php?act=adddm">
            <i class="fas fa-list"></i>
            <span class="nav-item">Category</span>
          </a>
        </li>
        <li>
          <a href="index.php?act=addsp">
            <i class="fas fa-bars"></i>
            <span class="nav-item">Products</span>
          </a>
        </li>
        <li>
          <a href="index.php?act=dskh">
            <i class="fas fa-user"></i>
            <span class="nav-item">User</span>
          </a>
        </li>
        <li>
          <a href="index.php?act=dsbl">
            <i class="fas fa-comment"></i>
            <span class="nav-item">Comment</span>
          </a>
        </li>
        <li>
          <a href="index.php?act=thongke">
            <i class="fas fa-chart-pie"></i>
            <span class="nav-item">View All</span>
          </a>
        </li>

        <li>
          <a href="#" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</body>

</html>
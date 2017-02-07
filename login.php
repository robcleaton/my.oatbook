<?php
$pageTitle = "Login";

include 'includes/header.php'; ?>

<style>
  body {
    background: rgba(255, 215, 58, 0.71);
  }
  header, footer {
    display: none;
  }
  h1 {
    height: 120px;
    width: 120px;
    background: rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    margin-bottom: 20px;
  }
  input {
    background: rgba(255, 255, 255, 0.8);
    width: 100%;
    height: 48px;
    font-family: 'Varela Round', sans-serif;
    font-size: 20px;
    height: 58px;
    border: 3px solid #fff;
  }
  input:hover {
    opacity: 1;
    border: 3px solid #ddd;
  }
  input:focus {
    border: 3px solid #ddd;
    color: black;
  }
  button {
    background: #5fcf80;
    font-family: 'Varela Round', sans-serif;
    color: #fff;
    font-size: 24px;
    padding: 14px 0px;
  }
  button:hover {
    background: #31af56;
    color: #fff;
  }
</style>

<main>

  <div class="box login">
    <div class="box-content">
      <h1>OATBook</h1>
      <form action="index.php">
        <div class="form-item">
          <input placeholder="Email"></input>
        </div>
        <div class="form-item">
          <input placeholder="Password"></input>
        </div>

        <button>Login</button>
      </form>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>

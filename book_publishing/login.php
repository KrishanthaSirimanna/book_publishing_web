<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
    <div class="d-flex justify-content-center align-item-center"
    style="min-height:100vh;">

<form class="p-5 rounded shadow"
    style="max-width: 500px; width: 100%;"
    method="post"
    action="php/Writter.php">

    
    <h1 class="text-center display-4 pb-5">Login </h1>
    <?php
    if(isset($_GET['error']))
    {

    
    ?>
    <div class="alert alert-danger" role="alert">
    <?=htmlspecialchars($_GET['error']);?>
    </div>
    <?php } ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">login</button>
  <a href="index.php>">Home</a>
</form>

</body>
</html>
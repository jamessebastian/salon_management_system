<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="w-50">
<!--   <div class="mb-3 ">
    <label for="id" class="form-label">ID</label>
    <input name="id" type="text" class="form-control" id="id">
  </div> -->
  <div class="mb-3">
    <label for="name" class="form-label" value="">name</label>
    <input name="name" type="text" class="form-control" id="name">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="password">
  </div>

  <button type="submit" class="btn btn-primary" value="Add">REGISTER</button>
  <a class="btn btn-primary" href="loginPage.php">CANCEL</a>
</form>

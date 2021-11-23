

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id=<?php echo $_GET['id'];?>" class="w-50">
<!--   <div class="mb-3 ">
    <label for="id" class="form-label">ID</label>
    <input name="id" type="text" class="form-control" id="id">
  </div> -->
  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input name="name" type="text" class="form-control" id="name" 
    value="<?php echo isset($_POST['name'])?$_POST['name']:$userInfo['name']; ?>">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">type</label>
   <select name="type" class="form-select">
    <option>--select one--</option>
    <option <?php echo $userInfo['type']=="admin"?"selected":"" ?> >admin</option>
    <option <?php echo $userInfo['type']=="customer"?"selected":"" ?> >customer</option>
  </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="<?php echo isset($_POST['email'])?$_POST['email']:$userInfo['email']; ?>">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="password" 
    value="<?php echo isset($_POST['password'])?$_POST['password']:$userInfo['password']; ?>">
  </div>

  <button type="submit" class="btn btn-primary">Edit</button>
</form>
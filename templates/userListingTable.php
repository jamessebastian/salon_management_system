      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">name</th>
              <th scope="col">type</th>
              <th scope="col">email</th>
              <th scope="col">password</th>
              <th>actions</th>
            </tr>
          </thead>
          <tbody>

            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['type']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['password']; ?></td>
              <td>
                <form style="display: inline;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                  <input hidden type="text" name="id" value="<?php echo $row['id']; ?>">
                  <input type="submit" value="delete" class="btn btn-danger btn-sm">
                </form>
                <a href="editUser.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm" >Edit</a>

              </td>
            </tr>
             <?php } ?>
          </tbody>
        </table>
      </div>
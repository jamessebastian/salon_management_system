      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">name</th>
              <th scope="col">email</th>
              <th scope="col">service</th>
              <th scope="col">date</th>
              <th scope="col">time</th>
              <th>actions</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = $result->fetch_assoc()) {?>
            <tr>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['service']; ?></td>
              <td><?php echo $row['apt_date']; ?></td>
              <td><?php echo $row['apt_time']; ?></td>
              <td>
                <form style="display: inline;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                  <input hidden type="text" name="id" value="<?php echo $row['id']; ?>">
                  <input type="submit" value="delete" class="btn btn-danger btn-sm">
                </form>
              </td>
            </tr>
             <?php } ?>
          </tbody>
        </table>
      </div>
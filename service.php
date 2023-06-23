<?php
require_once('./include/db.php');
require_once('./include/header.php');
require_once('./include/sidebar.php');

?>
<div class="content-wrapper">
  <div class="col-xl">
    <div class="row">
      <div class="col-md-8">
        <table class="table">
          <?php

            $sql = "SELECT * FROM `services`";
            $result = mysqli_query($check, $sql);
          ?>
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Set Icon</th>
              <th scope="col">Heading</th>
              <th scope="col">Description</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach($result as $service){
            ?>
            <tr>
                  <th scope="row">
                    <?=$service['id']?>
                  </th>
                  <td><?=$service['set_icon']?></td>
                  <td><?=$service['service_heading']?></td>
                  <td><?=$service['description']?></td>
                  <td>Edit</td>
              </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Basic with Icons</h5>
            <small class="text-muted float-end">Merged input group</small>
          </div>
          <div class="card-body">
            <form action="./formpost/service_post.php" method="POST">
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Set Icon</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="set_icon" />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-company">Service Heading</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                  <input type="text" id="basic-icon-default-company" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" name="service_heading" />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-message">Servic Desciption</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                  <textarea id="basic-icon-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2" name="description"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary" name="btn">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
require_once('./include/sidebar_footer.php');
require_once('./include/footer.php');
?>
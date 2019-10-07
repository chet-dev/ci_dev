<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Administration > Manage Users</h1>
       
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <a href="<?= base_url('admin') ?>">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          </a>
          <li class="breadcrumb-item"><a href="#">Manage Users</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

            <a class="btn btn-lg btn-primary" href="<?= base_url('users/create') ?>"><i class="fa fa-plus"></i> Create new user</a>

            <br>
            <br>
            <?php echo $total_users ?>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Full Name</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $nr = 1;
                    foreach ($users as $row) :
                  ?>
                  <tr>
                    <td><?= $nr ?></td>
                    <td><?= $row->username ?></td>
                    <td><?= $row->email ?></td>
                    <td><?= $row->first_name . ' ' . $row->last_name ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?= base_url('users/edit/'.$row->id) ?>">
                            <i class="fa fa-edit" title="Edit"></i>
                        </a>
                        <a class="btn btn-danger" href="<?= base_url('users/deleteconf/'.$row->id) ?>">
                            <i class="fa fa-trash" title="Delete"></i>
                        </a>
                    </td>
                  </tr>
                  <?php 
                    $nr++;
                    endforeach;
                  ?>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
</main>
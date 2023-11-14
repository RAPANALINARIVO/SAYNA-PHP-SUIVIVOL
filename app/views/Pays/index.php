<?php
 include('../app/views/header.php');
?>
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">LISTE DES PAYS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item"><a href=".?controller=Pays&action=create">add</a></li>
              <li class="breadcrumb-item active">contact-nous</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
      <div class="container">
       <div class="row">
          <table class="table table-bordered table-striped">
              <thead></thead>
              <tbody>
              <?php
              foreach($pays as $p) : ?>
                <tr>
                  <td><?php echo $p->name; ?></td>
                  <td>
                    <?php 

                    //edit button
                    $url= '.?controller=Pays&action=edit&pays='.$p->id;
                    $label = 'edit';
                    $type= 'primary';
                    include('../app/views/components/button.php');


                    //delete button
                    $url = '.?controller=Pays&action=delete&pays=' . $p->id;
                    $type ='danger';
                    $label = 'Delete';
                    include('../app/Views/components/button.php');
                     ?>
                  </td>
                </tr>
              <?php
              endforeach
              ?>
              </tbody>
          </table>
       </div>
    </div>
    <!-- /.content -->
<?php
include('../app/views/footer.php');
?>
 
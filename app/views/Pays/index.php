<?php
 include('../app/views/header.php');
?>

    <!-- Main content -->
      <div class="container">
       <div class="row">
        <h1>LISTE DES PAYS</h1>
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
 
<?php 
include 'views/header.php';
include 'views/menu.php';
?>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Gestión de Pagos</h5>              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Total a Pagar</th>
                    <th scope="col">Total Pagado</th>
                    <th scope="col">Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <?php echo $_SESSION['name']; ?>
                <?php foreach($this->datos as $pagos){?>
                  <tr>
                    <th scope="row"><a type="button" class=" btn btn-sm" id="<?php echo $pagos['id']?>_id" data-bs-target="#userModal"  ><?php echo $pagos["id"] ?></a> </th>
                    <!-- <th scope="row"><?php echo $user['id']; ?></th> -->
                    <td><?php echo $pagos['name']; ?></td>
                    <td><?php echo $pagos['payment']; ?></td>
                    <td><?php echo $pagos['deposit']; ?></td>
                    <td><?php echo $pagos['status']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
<?php
include 'views/footer.php'; 
<?php 
include 'views/header.php';
include 'views/menu.php';
?>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Gestión de Reservas</h5>              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Número Pista</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Hora Reserva</th>
                    <th scope="col">Estado Pago</th>
                  </tr>
                </thead>
                <tbody>
                  <?php echo $_SESSION['name']; ?>
                <?php foreach($this->datos as $reservas){?>
                  <tr>
                    <th scope="row"><a type="button" class=" btn btn-sm" id="<?php echo $reservas['id']?>_id" data-bs-target="#userModal"  ><?php echo $reservas["id"] ?></a> </th>
                    <!-- <th scope="row"><?php echo $user['id']; ?></th> -->
                    <td><?php echo $reservas['name']; ?></td>
                    <td><?php echo $reservas['Numero_Pista']; ?></td>
                    <td><?php echo $reservas['price']; ?></td>
                    <td><?php echo $reservas['hour']; ?></td>
                    <td><?php echo $reservas['deposit']; ?></td>
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
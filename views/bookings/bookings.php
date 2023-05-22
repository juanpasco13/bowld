<?php
include 'views/header.php';
include 'views/menu.php';
?>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body pt-2">
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">Id Reserva</th>
                                <th scope="col">Cliente</th>
                                <th scope="col"># Personas</th>
                                <th scope="col">Deposito</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Fecha de Reserva</th>
                                <th scope="col">Fecha de Creacion</th>
                                <th scope="col">Pagar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($this->datos as $booking) { ?>
                                <tr>
                                    <th scope="row"><a type="button" class=" btn btn-sm" id="<?php echo $booking["id"] ?>" data-bs-target="#userModal"><?php echo $booking["id"] ?></a> </th>
                                    <!-- <th scope="row"><?php echo $booking['id']; ?></th> -->
                                    <td><?php echo $booking["user_id"]; ?></td>
                                    <td><?php echo $booking["number_persons"]; ?></td>
                                    <td><?php echo $booking["deposit"]; ?></td>
                                    <td><?php echo $booking["status"]; ?></td>
                                    <td><?php echo $booking["date_booking"]; ?></td>
                                    <td><?php echo $booking['date_created']; ?></td>
                                    <td><a type="button" class=" btn btn-sm"><i  class="bi bi-cash-coin" style="font-size: 20px;"></i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'views/footer.php';

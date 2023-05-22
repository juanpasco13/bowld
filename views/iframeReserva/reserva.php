<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Reserva de Pistas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- CSS para la letra del Calendario - creo -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link href="assets/css/calendar.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <div class="card m-3">
        <div class="card-body">
            <h5 class="card-title">Reserva</h5>
            <p>Ingrese la informacion y valide la fecha en la que se puede reservar</p>
            <!-- Custom Styled Validation -->
            <form onsubmit="return sendData()" action="<?php echo constant('URL').'iframe/reservation';?>" method="POST" class="g-3 needs-validation" novalidate>

                <div class="row py-2">
                    <div class="col-md-3">
                        <label for="name" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback">El campo Nombres es obligatorio</div>
                    </div>
                    <div class="col-md-3">
                        <label for="lastName" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                        <div class="invalid-feedback">El campo Apellidos es obligatorio</div>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="col-md-3">
                        <label for="phone" class="form-label">Celular</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">+57</span>
                            <input type="number" class="form-control" id="phone" name="phone" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">El campo numero de telefono es obligatorio</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h5>Seleccione la fecha y hora de su reserva</h5>
                    <div class="col-4 d-flex justify-content-center">
                        <div class="wrapper">
                            <header>
                                <p class="current-date"></p>
                            </header>
                            <div class="calendar">
                                <ul class="weeks">
                                    <li>Dom</li>
                                    <li>Lun</li>
                                    <li>Mar</li>
                                    <li>Mier</li>
                                    <li>Jue</li>
                                    <li>Vie</li>
                                    <li>Sab</li>
                                </ul>
                                <ul class="days"></ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <label for="time" class="form-label">Seleccione la hora</label>
                        <div id="embol" class="list-group list-group-flush" role="tablist"></div>
                    </div>
                    <div class="col-4">
                        <div class="row">

                            <div class="col-auto">
                                <div class="row">
                                    <label for="date" class="form-label">Fecha Seleccionada</label>
                                    <input type="text" class="form-control" id="date" name="date" disabled>
                                </div>
                                <div class="row mt-2">
                                    <label for="time" class="form-label">Hora Seleccionada</label>
                                    <input type="text" class="form-control" id="time" name="time" disabled required>
                                </div>
                                <div class="row mt-2">
                                    <label for="cant" class="form-label">Cantidad de Personas</label>
                                    <select class="form-select" id="cant" name="cant" required>
                                        <?php for ($i = 1; $i < 13; $i++) { echo "<option value=\"$i\">$i</option>"; } ?>
                                    </select>
                                </div>
                                <div class="row mt-4 d-flex justify-content-center " >
                                    <button id="save" class="btn btn-outline-primary" type="submit" style="width: 10rem;">Realizar reserva</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form><!-- End Custom Styled Validation -->
        </div>
    </div>



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/calendar.js"></script>

</body>

</html>
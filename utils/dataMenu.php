<?php
// Permisos: 0 -> Admin, 1 -> employe, 2 -> user 
$funcionales = array(
    "home" => [
        "module" => "home",
        "icon" => "bi bi-grid",
        "title" => "Principal",
        "permit" => [0, 1]
    ],
    "users" => [
        "module" => "users",
        "icon" => "ri-team-fill",
        "title" => "Usuarios",
        "permit" => [0]
    ],
    "bookings" => [
        "module" => "bookings",
        "icon" => "ri-calendar-todo-line",
        "title" => "Reservas",
        "permit" => [0,1]
    ],
    "payments" => [
        "module" => "payments",
        "icon" => "bi bi-cash-coin",
        "title" => "Pagos",
        "permit" => [0,1]
    ],
    "employees" => [
        "module" => "employee",
        "icon" => "bi bi-person-vcard",
        "title" => "Empleados",
        "permit" => [0]
    ]
);
// Estos son los mudulos que salen despues del separador 'ADICIONAL'
$adds = array(
    "info" => [
        "module" => "info",
        "icon" => "bi bi-exclamation-circle",
        "title" => "Informacion",
    ],
    "personal" => [
        "module" => "profile",
        "icon" => "bi bi-person-fill",
        "title" => "Perfil",
    ],
    "logout" => [
        "module" => "logout",
        "icon" => "bi bi-box-arrow-in-right",
        "title" => "Cerrar Sesion",
    ],
);

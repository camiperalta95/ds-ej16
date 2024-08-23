<?php

require_once 'modelo/Proveedores.php';
require_once 'modelo/Producto.php';


$p= New Producto();
$p->Id=1;
$p->Nombre= 'Soda';
$p->Codigo= '123132';
$p->Precio= '$500';
$p->Marca= 'Coto';


$pro1= New Proveedores ();
$pro1->Id= 1;
$pro1->Nombre= 'Juan Perez';
$pro1->Cuil= '2233565875';
$pro1->Direccion= 'Salta 3000';
$pro1->Telefono= '3415645879';

$pro2= New Proveedores ();
$pro2->Id= 2;
$pro2->Nombre= 'Franco Gonzales';
$pro2->Cuil= '22393674415';
$pro2->Direccion= 'Almafuerte 1961';
$pro2->Telefono= '3413454624';

$pro3= New Proveedores ();
$pro3->Id= 3;
$pro3->Nombre= 'Joaquin Rodriguez';
$pro3->Cuil= '33354879843';
$pro3->Direccion= 'Moreno 2560';
$pro3->Telefono= '3412145879';

$p->ListaProveedores[]=$pro1;
$p->ListaProveedores[]=$pro2;
$p->ListaProveedores[]=$pro3;

$p->MostrarInformacion();















  

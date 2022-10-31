<?php

//-------001----------
// include_once "001Empleado.php";
// $empleado1 = new Empleado();
// $empleado1 -> setNombre("Daniel");
// $empleado1 -> setApellidos("Reyes");
// $empleado1 -> setSueldo("400000000");
// echo $empleado1 -> getNombreCompleto();
// echo $empleado1 -> debePagarImpuestos();




//-------002---------------
// include_once "002EmpleadoTelefonos.php";
// $empleado2 = new EmpleadoTele();
// $empleado2 -> setNombre("Daniel");
// $empleado2 -> setApellidos("Reyes");
// $empleado2 -> setSueldo("400000000");
// $empleado2 -> anyadirTelefono(1);
// $empleado2 -> anyadirTelefono(2);
// $empleado2 -> anyadirTelefono(3);
// echo $empleado2 -> listarTelefonos();
// $empleado2 -> vaciarTelefonos();
// echo $empleado2 -> listarTelefonos();





//--------003----------------------
// include_once "003EmpleadoConstructor.php";
// $empleado3 = new Empleado("Daniel", "Reyes");
// var_dump($empleado3);






//---------004------------------------
// include_once "004EmpleadoConstante.php";
// $empleado4 = new EmpleadoConst("Daniel", "Reyes");
// echo $empleado4 -> debePagarImpuestos();






//----------005-------------------
// include_once "005EmpleadoSueldo.php";
// $empleado5 = new Empleado("Daniel", "Reyes", 33333);
// echo $empleado5 -> debePagarImpuestos();






//----------006-----------------------
// include_once "006EmpleadoStatic.php";
// $empleado6 = new Empleado("Daniel", "Reyes", 33333);
// $empleado6 -> anyadirTelefono(646435645);
// $empleado6 -> anyadirTelefono(687989748);
// $empleado6 -> anyadirTelefono(693473622);
// echo $empleado6 -> toHtml($empleado6);






//---------008-----------------------
// include_once "008EmpleadoH.php";
// $empleado6 = new Empleado("Daniel", "Reyes", 33333);
// $empleado6 -> anyadirTelefono(646435645);
// $empleado6 -> anyadirTelefono(687989748);
// $empleado6 -> anyadirTelefono(693473622);
// echo $empleado6 -> debePagarImpuestos();
// echo $empleado6 -> toHtml($empleado6);







//---------009----------------
// include_once "009EmpleadoE.php";
// $empleado6 = new Empleado("Daniel", "Reyes", 24,  33333);
// $empleado6 -> anyadirTelefono(646435645);
// $empleado6 -> anyadirTelefono(687989748);
// $empleado6 -> anyadirTelefono(693473622);
// echo $empleado6 -> debePagarImpuestos();






//---------010-------------------
// include_once "010EmpleadoS.php";
// $empleado6 = new Empleado("Daniel", "Reyes", 24,  33333);
// $empleado6 -> anyadirTelefono(646435645);
// $empleado6 -> anyadirTelefono(687989748);
// $empleado6 -> anyadirTelefono(693473622);
// echo $empleado6 -> __toString();






//----------011-------------------------
// include_once "011EmpleadoA.php";
// $empleado6 = new Empleado("Daniel", "Reyes", 24,  33333);
// $empleado6 -> anyadirTelefono(646435645);
// $empleado6 -> anyadirTelefono(687989748);
// $empleado6 -> anyadirTelefono(693473622);
// echo $empleado6 -> toHtml($empleado6);






//----------012------------------
// include_once "012Empleado.php";
// include_once "012Gerente.php";
// include_once "012Gerente.php";
// include_once "012Trabajador.php";
// $empleado = new Empleadito("Daniel","Reyes Perez", 26, [1,2,3], 40, 4);
// echo $empleado -> calcularSueldo() . "</br>";
// $gerente = new Gerente("Paco", "Poca Puca", 80, [4,5,6], 1200);
// echo $gerente-> calcularSueldo();






//----------013----------------
// include_once "012Empleado.php";
// include_once "012Gerente.php";
// include_once "012Gerente.php";
// include_once "012Trabajador.php";
// include_once "013Empresa.php";
// $trabajador1 = new Empleadito("Pepe", "Palotes", 25, [456909, 353645, 89089], 1000, 15);
// $trabajador2 = new Gerente("Jose", "Cayetano", 9, [2332, 56, 897979], 3000);
// $empresa = new Empresa();
// $empresa->setNombreEmpresa("Explotados Entretaiment");
// $empresa->setDireccion("Calle Explotacion Profunda");
// $empresa->anyadirTrabajador($trabajador1);
// $empresa->anyadirTrabajador($trabajador2);
// echo $empresa->listarTrabajadoresHtml();





//-------------014----------------
// include_once "012Empleado.php";
// include_once "012Gerente.php";
// include_once "012Gerente.php";
// include_once "012Trabajador.php";
// include_once "014Empresa.php";
// include_once "014EmpresaI.php";
// $empleadito1 = new Empleadito("Daniel", "Reyes Pérez", 26, [34534, 3456456, 54654], 1000, 15);
// $gerentito1 = new Gerente("Pepe", "Popo Pupu", 60, [345546,5645,2424], 2500);
// $empresa = new Empresa(); 
// $empresa->setNombreEmpresa("Explotación SA"); 
// $empresa->setDireccion("Avenida de la Esclavitud");
// $empresa->anyadirTrabajador($empleadito1);
// $empresa->anyadirTrabajador($gerentito1);
// echo $empresa->toJSON() . "<br>"; 
// echo $empresa->toSerialize();
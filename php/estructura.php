<?php
#Tipos de variables
$nombrevariable = "Hola mundo";
$numero = 10;
$decimal = 80.5;
$bool = true;
$array = [1,2,3];
#Estructura de control
#if simple
if ("condicion"){
    echo "Si";
}
#Si Doble
if("condicion"){
    echo "Si";
}else{
    echo "No";
}
#Si Anidado
if("condicion"){
    echo "Si";
}else if ("condicion"){
    echo"Si";
}else {
    echo "No";
}

#Ciclo  for
for ($i = 0; $i < 10; $i++){
    print($i);
}

#Ciclo while
$i = 0;
while ($i < 10){
    echo $i;
    $i++;
}
#Ciclo Do whule
$i = 0;
do{
    echo $i;
    $i++;
}while($i < 10);

#Ciclo Foreach
$array = [1,2,3,4,5,6,7,8];
foreach( $array as $value){
    echo $value;
};

#Funciones
Codeium: Refactor | Explain | X
function  sumar ($a, $b){
    return $a + $b;
};
echo sumar(10, 20);

?>
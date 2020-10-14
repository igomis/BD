# repositoriBasic

 * Estructura de directoris bàsica
   
    * public
    * tests
    * templates
    * helpers
    * .docker

 
 * dominis:
    * batoi2021.my
    * phpmyadmin.my
 
 * contrasenya php root: root
 
 per funcionar: 
  
  * Obrir terminal i executar 
  
    > sh start.sh
    
    > sh composer.sh
    
  
  * Per finalitzar, executar
    
    > sh stop.sh 

  * Per executar test, amb màquina apagada executar
    
    > sh test.sh 
    
    
  Practica 3
  
  * Partint del repositori actual es preten:
    
  * Continuar amb els mateixos jocs anteriors, però ara les dades del diccionari i la dels usuaris estaran en una base de dades
  
    * La funcionalitat ha de ser la mateixa, excepte que les paraules que guardem al diccionari, quedaran ja per sempre.
    * El nom de la base de dades serà **jocs** i la estructura de les taules es suministra amb el repositori. Entreu al phpmyadmin.my amb usuari root i contrasenya root.
    * Es crearà una pàgina de registre per tal que els usuaris es donen d'alta. La contrasenya es guardarà xifrada amb l'algorisme
     sha256. Hi hi un usuari igomis amb contrasenya 1234, que es suministra per provar l'aplicatiu.
    * Per al registre s'haurà de demanar dues vegades la contrasenya.
    * També hi ha paraules d'exemple però la idea és que l'usuari vaja omplint el diccionari.
    * S'haura de comprovar que l'usuari no estiga intentant ficar brossa a la BD.
    * El boto reset diccionari el que farà serà esborrar la paraula si les dos estan bé. En cas contrari mostrarà un missatge d'error.
    * Per a executar els test, ara cal tindre la màquina en funcionament. En cas contrari no funcionarà.
     
  * Caldrà passar els test de les funcions que estan buides a myHelpers.php  
    
   

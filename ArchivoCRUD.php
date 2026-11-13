DEFINICION
el CRUD son las partes clave para crear una pagina, tiene los elementos escenciales para su funcionamiento osea crear leer actualizar y borrar
se puede realizar en multiples archivos o solo en uno, es recomendable que sea en 7 archios, 2 para crear, 2 para leer, 2 para actualizar y 1 para eliminar
puede combinar codigo html y codigo php conectando la base de datos y estilizando el codigo con style siemrpe y cuando los conectes correctamente 

el CRUD es 
    C: create
    R: read
    U: update
    D: delete


el CRUD son las partes clave para crear una pagina, tiene los elementos escenciales para su funcionamiento osea crear leer actualizar y borrar

se puede realizar en multiples archivos o solo en uno, es recomendable que sea en 7 archios, 2 para crear, 2 para leer, 2 para actualizar y 1 para eliminar
puede combinar codigo html y codigo php conectando la base de datos y estilizando el codigo con style siemrpe y cuando los conectes correctamente 



CREATE(Crear): 
    Es el primer paso para empezar a trabajar con la base de datos, genera un registro nuevo donde antes no habia nada, para despues pasar a guardar la informacion en la base de datos.
    Para entenderlo mejor los pasos son:
        1: Llenas un formulario en pantalla ingresando los datos, por ejemplo, escribiendo tu nombre, correo y contraseña para abrir una cuenta.
        2: El codigo toma esos datos que escribiste y los prepara.
        3: El sistema crea una fila nueva en una tabla de la base de datos y los guarda.

 

READ(Leer):
    Es la función que nos permite consultar, visualizar y mostrar la información almacenada en la base de datos para que el usuario pueda ver los registros existentes.
    Por lo general, esta operación se divide en dos vistas principales: mostrar una lista general con todos los registros disponibles y, si es necesario, mostrar el detalle de un solo elemento específico utilizando su ID.
    Se debe seguir estos pasos:
    - Realizar la conexión con la base de datos y ejecutar una consulta SQL (como SELECT) para extraer la información necesaria.
    - Recorrer los resultados obtenidos mediante un bucle para procesar cada fila de datos recuperados.
    - Mostrar la información estructurada en la interfaz (por lo general utilizando tablas, tarjetas o listas HTML combinadas con PHP) para que sea clara y organizada para el usuario.
    - Incluir enlaces, botones o elementos interactivos (como los que llevan a actualizar o eliminar) vinculados al identificador (ID) de cada registro para facilitar las siguientes acciones.


UPDATE(Actualizar):
    Es la funcion que nos permite editar la informacon de la base de datos, se debe conoceer que lemento de la base de datos queremos editar, por eso 
    los enlaces que nos llevan a editar se encuentra al lado del elemnto que debemos modificar.
    Asi podemos saber que dato queremos editar y como en la funcion para mostrar un solo elemnte debemos mandar el ID del elemento a editar.
    En pasos se veria como: 
    1. Recuperar la informacion de elemento seleccionado a editar.
    2. Mostra esa iformacion en un formulario para que el usuario pueda ver que informacion editar.
    3. Reenviar dicho formulario con lo datos ya modificados al archivo del registro para editar.
    4, Se ejecuta la consulta UPDATE para modificar la informacion y mostrar el resultado.





Delete(Eliminar):
La operación DELETE es una de las cuatro acciones principales del CRUD (Create, Read, Update, Delete). 
    Su función es eliminar registros que ya no se necesitan dentro de una base de datos.
    Por ejemplo, permite borrar un usuario, un producto, un cliente o cualquier otro dato almacenado en una tabla.
    En una aplicación desarrollada en Java, esta operación normalmente se realiza mediante una consulta SQL que utiliza la 
    instrucción DELETE FROM. Para ejecutarla, se debe indicar la tabla donde se encuentra el registro y establecer una condición con
     WHERE que permita identificar exactamente qué dato se desea eliminar.
     Identificar el registro que se desea eliminar.
    Se debe seguir estos pasos:
    -Crear la consulta de eliminación.
    -Preparar la conexión con la base de datos.
    -Indicar el identificador del registro.
    -Ejecutar la operación DELETE.
    -Verificar si el registro fue eliminado.
    -Mostrar un mensaje de confirmación.


-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2023 a las 19:21:23
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kids`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `preg_id` bigint(5) NOT NULL,
  `preg_text` varchar(255) NOT NULL,
  `preg_ayu` varchar(255) NOT NULL,
  `preg_resp` varchar(255) NOT NULL,
  `preg_dist` varchar(255) NOT NULL,
  `preg_level` int(2) NOT NULL,
  `preg_act` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`preg_id`, `preg_text`, `preg_ayu`, `preg_resp`, `preg_dist`, `preg_level`, `preg_act`) VALUES
(1, 'Â¿Emserchia provee agua gracias al contrato que con la ciudad de?', 'Es un lugar reconocido de Colombia', 'BogotÃ¡', 'Cundinamarca\", \"Cajica\", \"ChÃ­a', 0, 1),
(2, 'Â¿Cual fue el ultimo servicio incluido por Emserchia?', 'Realiza mas cosas aparte de las principales', 'Complementarios', 'Recoleccion\", \"Ambiente\", \"Aseo', 0, 1),
(3, 'Â¿Que significa EmserKids?', 'Es un es...... diseÃ±ado con amor para los niÃ±os', 'Espacio de niÃ±os', 'NiÃ±os Emserchia\", \"Vamos niÃ±os\", \"Todos somos niÃ±os', 0, 1),
(4, 'Â¿Cuantos valores tiene nuestro codigo de integridad?', 'Hace parte de los numero impares', '7', '9\", \"6\", \"8', 0, 1),
(5, 'De los siguientes Â¿Cual es un objetivo principal de Emserchia?', 'Se unen para crear cosas unicas y tener bases', 'Conformar', 'Prevencion\", \"Transformar\", \"Promover', 0, 1),
(6, 'De las siguientes frases, Â¿Cual hace parte de la politica de calidad de Emserchia?', 'Hace parte de un cambio constante', 'Mejora continua', 'Auto-Suficiente\", \"Control total\", \"AtenciÃ³n usuario', 0, 1),
(7, 'Â¿Con cual de las siguientes palabras se identifica la frase \'Dar un segundo uso\' ?', 'Evita la creaciÃ³n de mas cosas', 'Reciclaje', 'Oportunidad\", \"Almacenaje\", \"Conservar', 0, 1),
(8, 'Â¿Cuales son los colores corporativos de Emserchia?', 'Es lo primero que se ve en la pagina, y en el pie de la pagina', 'Naranja, Azul, Verde', 'Verde, Cafe, Azul\", \"Amarillo, Verde, Azul\", \"Azul, verde, Rojo', 0, 1),
(9, 'Â¿Contamos con una gran red de?', 'Esta hecho par varios tramos conectados entre si', 'TuberÃ­as', 'Alcantarillados\", \"Acueductos\", \"Sedes', 0, 1),
(10, 'Â¿Cual es la actividad que realiza Emserchia para disminuir la contaminaciÃ³n directa al ambiente?', 'Es un recurso vital para todos', 'Tratamiento de agua', 'PotabilizaciÃ³n\", \"Escombros\", \"Poda', 0, 1),
(11, 'Â¿CuÃ¡l es la mascota de Emserchia?', 'Se encuentra junto a nuestro logo en los camiones recolectores', 'El hipopÃ³tamo', 'La Jirafa\", \"El LeÃ³n\", \"El Zorro', 0, 1),
(12, 'Â¿Hasta que aÃ±o tiene vigencia la visiÃ³n de Emserchia?', 'Se encuentra en la visiÃ³n de la empresa, pero en aÃ±os esta bien arriba', '2030', '2024\", \"2026\", \"2028', 0, 1),
(13, 'Â¿Con cuantas sedes de atenciÃ³n al usuario tiene Emserchia?', 'Se podria decir que es la mitad de los dedos de la mano entre 2 y 3', '3', '2\", \"4\", \"6', 0, 1),
(14, 'Â¿Nombre del barrio donde queda la sede principal de Emserchia?', 'Nos ubicamos cerca al parque por el centro urbano entre San Luis y Rio Frio', 'San Luis', 'Santa Rita\", \"Bojaca\", \"Rio Frio', 0, 1),
(15, 'Â¿CuÃ¡ntos aÃ±os tiene Emserchia?', 'ya casi cumplimos medio siglo', '44 aÃ±os', '32 aÃ±os\", \"42 aÃ±os\", \"54 aÃ±os', 0, 1),
(16, 'Â¿Donde se encuentra el desierto del Sahara?', 'Es uno e los lugares mas calidos del mundo Ubicado en A.......', 'Ãfrica', 'AmÃ©rica\", \"Asia\", \"OceanÃ­a', 0, 1),
(17, 'Â¿CuÃ¡l es la cuarta letra del abecedario?', 'Es lÃ³gico que es la \'D\'', 'D', 'A\", \"B\", \"C', 0, 1),
(18, 'Â¿CuÃ¡ntos meses tiene un aÃ±o?', 'Hace parte de los numero impares', '12 meses', '9 meses\", \"6 meses\", \"10 meses', 0, 1),
(19, 'Â¿CuÃ¡nto es una docena?', 'Es contar 2 veces el numero 6', '12 nÃºmeros', '10 nÃºmeros\", \"24 nÃºmeros\", \"16 nÃºmeros', 0, 1),
(20, 'Â¿CÃ³mo se llaman los animales que nacen de un huevo?', 'Esto animales particularmente son aves y reptiles por ende son O.....', 'OvÃ­paros', 'Vertebrados\", \"Invertebrados\", \"VivÃ­paros', 0, 1),
(21, 'Â¿CÃ³mo se llama un polÃ­gono de 5 lados? ', 'polÃ­gono hace referencia a una figura geomÃ©trica el pentÃ¡gono tiene 5 lados', 'PentÃ¡gono', 'DecÃ¡gono\", \"Heptagono\", \"HexÃ¡gono', 0, 1),
(22, 'Â¿Como se llama el lugar donde se escriben las notas musicales?', 'Esta compuesto por por 6 lÃ­neas y tiene una cartilla con el nombre te Penta', 'Pentagrama', 'Libro musical\", \"Telegrama\", \"GramÃ¡tica musical', 0, 1),
(28, 'Â¿CuÃ¡l de los siguientes NO hace parte de los sabores primarios?', 'Solo exiten 5 sabores de los cuales \'Amargo\' si es valido', 'Desabrido', 'Umami\", \"Dulce\", \"Amargo', 3, 1),
(29, 'Â¿CuÃ¡l es el numero de telefono principal de Emserchia?', 'Se repite 3 veces el cuatro', '4926464', '4326494\", \"4926264\", \"6926452', 3, 1),
(30, 'Â¿Bajo que norma de calidad rige Emserchia?', 'Esta norma se tomo en la version 2008 pero se actualizo recientemente al 2015', 'ISO 9001 2015', 'ISO 9001 2008\", \"ISO 27001 2012\", \"ISO 17000 2016', 3, 1),
(31, 'Â¿CuÃ¡les es la montaÃ±a mÃ¡s alta del paÃ­s?', 'Se encuentra muy al norte del pais, cerca de las costas', 'Sierra Santa marta', 'Pico SimÃ³n\", \"PÃ¡ramo de Pisba\", \"Nevado del RuÃ­z', 2, 1),
(32, 'Â¿Con CuÃ¡ntos paÃ­ses comparte Colombia fronteras terrestres?', 'Es un numero impar', 'Cinco', 'Siete\", \"Cuatro\", \"Ocho', 2, 1),
(33, 'Â¿CuÃ¡l es la capital del Departamento del Amazonas donde abunda gran biodiversidad?', 'Se encuentra entre la letra M despues de la letra K en el abacedareo', 'Leticia', 'Florencia\", \"Vaupez\", \"Quindio', 2, 1),
(34, 'Â¿En que aÃ±o se fundo la capital de Colombia, BogotÃ¡?', 'Es el resultado de la operacion 2356-818', '1538', '1558\", \"1525\", \"1595', 3, 1),
(35, 'Â¿Es uno de los artistas mas importantes de Colombia?', 'Se le conoce principalmente por su obras en medellin', 'Fernando Botero', 'Antonio Jesus\", \"Fernando Maldonado\", \"Vicent Vangoht', 3, 1),
(36, 'Â¿QuÃ© fecha se celebra el dÃ­a de la independencia de Colombia?', 'Se celebra a mediados del aÃ±o cerca del mes 07', '20 de julio', '19 de abril\", \"18 de septiembre\", \"20 de junio', 3, 1),
(37, 'Â¿CuÃ¡l es el paÃ­s mÃ¡s pequeÃ±o del mundo?', 'Se ubica en europa, cerca del mar Mediterraneo', 'Vaticano', 'Afganistan\", \"Camerun\", \"Madagascar', 3, 1),
(38, 'Â¿CuÃ¡ntos decimales tiene el nÃºmero PI ?', 'Se pueden contar indefinidamente', 'Infinitos', 'Docientos\", \"Veinte\", \"Finitos', 3, 1),
(39, 'Â¿CuÃ¡l es el ocÃ©ano mas grande y profundo del mundo?', 'Este oceano tiene mayor distancia entre fronteras terrestres', 'Pacifico', 'Indico\", \"Glacial\", \"Atlantico', 2, 1),
(40, '\'En que aÃ±o se termino la segunda guerra mundial?', 'Este conflicto termino a mediados del siglo XX mas o menos en 1940', '1945', '1935\", \"1947\", \"1939', 3, 1),
(41, 'Colombia posee costa sobre dos ocÃ©anos Â¿CuÃ¡les son?', 'No hay mas costas ni oceandos en colombia que esos dos', 'PacÃ­fico y AtlÃ¡ntico.', 'Caribe y AntÃ¡rtico.\", \"AtlÃ¡ntico y Indico.\", \"PacÃ­fico y Caribe', 2, 1),
(42, 'Â¿CuÃ¡ntas regiones conforman la geografÃ­a colombiana?', 'Se Pueden contar con los dedos y alguno mas', '6', '7\", \"4\", \"5', 2, 1),
(43, 'Â¿CuÃ¡l es el paÃ­s mÃ¡s grande del mundo?', 'Esta cerca de lugares frios donde casi NO hay nada', 'Rusia', 'Estados unidos\", \"Artartida\", \"Atlantida', 3, 1),
(44, 'Â¿CuÃ¡ntos elementos hay en la tabla periÃ³dica?', 'Estan sobre los 100 elementos', '118', '96\", \"158\", \"146', 2, 1),
(45, 'Â¿CuÃ¡ntas costillas tiene un humano promedio?', 'Uno de sus numeros es un multiplo de 8', '22-24', '20-18\", \"16-14\", \"12-10', 2, 1),
(46, 'Â¿CuÃ¡les de los siguientes NO hace parte de los colores primarios?', 'Este esta formado por azul y amarillo', 'Verde', 'Rojo\", \"Amarillo\", \"Azul', 3, 1),
(47, 'Â¿CuÃ¡ntos departamentos tiene Colombia?', 'Es mucho mas de dos docenas es decir 24', '32', '38\", \"23\", \"34', 3, 1),
(48, 'Â¿CuÃ¡ndo se escribir la ultima ConstituciÃ³n de Colombia?', 'Fue hace mÃ¡s de 25 aÃ±os', '1991', '1995\", \"1987\", \"1983', 3, 1),
(49, 'Â¿En que aÃ±o se dio el ultimo golpe de estado en Colombia?', 'SucediÃ³ casi 8 aÃ±os despuÃ©s que terminara la segunda guerra mundial, es decir antes de 1970', '1953', '1963\", \"1971\", \"1983', 3, 1),
(50, 'Â¿CuÃ¡ntos premios Nobel han sido otorgados a colombianos?', 'Se pueden contar son .......paz Y ......liter', '2', '3\", \"5\", \"4', 3, 1),
(51, 'Â¿CuÃ¡l es el rÃ­o mÃ¡s largo del mundo?', 'En colombia se encuentra presente en un 10% en el Sur del pais', 'Rio amazonas', 'Rio Magdalena\", \"Rio Himalaya\", \"Rio Nilo', 2, 1),
(52, 'Â¿Que tipo de animal es la ballena?', 'A pesar de vivir en el mar puede que se considere como otra categoria', 'Mamifero', 'Pez\", \"Reptil\", \"Anfibio', 2, 1),
(53, 'Â¿Cual de las siguientes NO hace parte de las 7 maravillas del mundo moderno?', 'Hace parte de las 7 maravillas antiguas y esta presente en la actualidad en un desierto', 'Piramide de Giza', 'Coliseo de Roma\", \"Taj Mahal\", \"Muralla China', 3, 1),
(54, 'Â¿QuÃ© planeta del sistema solar tiene mÃ¡s lunas?', 'Es el segundo mas grande despues de Jupiter', 'Saturno', 'Jupiter\", \"Urano\", \"Mercurio', 3, 1),
(55, 'Â¿Que paÃ­s tiene forma de bota?', 'Esta ubicado en el continente Europeo', 'Italia', 'Alemania\", \"Monogolia\", \"Taiwan', 3, 1),
(56, 'Â¿QuiÃ©n fue el autÃ©ntico padre de la electricidad?', 'Le limitaron hacer sus ideas, a pesar de ser un gran genio', 'Nikola Tesla', 'Tomas Edison\", \"William Greener\", \"Henry Leland', 3, 1),
(57, 'Â¿CuÃ¡ntos dÃ­as tiene un aÃ±o bisiesto?', 'Pasa cada 4 aÃ±os, agregando un dÃ­a mÃ¡s', '366', '367\", \"365\", \"364', 3, 1),
(58, 'Â¿CuÃ¡l es la especie de serpiente mÃ¡s larga del mundo?', 'NO siempre es la respuesta que pensamos, \'Anaconda\'', 'PitÃ³n reticulada', 'Anaconda\", \"Topo IsraelÃ­\", \"VÃ­bora ArbÃ³rea', 2, 1),
(59, 'Â¿CuÃ¡l es el animal terrestre mÃ¡s rÃ¡pido del mundo?', 'Se pueden parecer sus nombres pero son animales distintos el guepardo y leopardo', 'El guepardo.', 'El jaguar\", \"El leopardo\", \"La hiena', 2, 1),
(60, 'Â¿CuÃ¡l es el mineral mas duro del planeta?', 'A simple vista parece fragil y hermoso', 'El Diamante.', 'El Tugsteno\", \"El Titanio\", \"El Vibranium', 2, 1),
(62, 'Â¿CuÃ¡l fue el volcÃ¡n que genero la tragedia en Armero?', 'Se encuentra en las zonas mas elevadas de la cordillera en el departamento de Tolima', 'Nevado del Ruiz', 'Nevado del Pisba\", \"Nevado de Sumapaz\", \"Nevado de Huila', 3, 1),
(63, 'Â¿CuÃ¡ntos paÃ­ses reconocidos existen en todo el mundo?', 'Sobrepasan los 193, y es menos de 200 paÃ­ses', '195', '193\", \"206\", \"198', 2, 1),
(64, 'Â¿CuÃ¡ntos huesos tiene el ser humano cuando es adulto?', 'Al ser adulto los huesos se conforman hasta el punto de NO crecer mas por eso se encuentran sobre los 200', '206', '196\", \"198\", \"204', 2, 1),
(65, 'Â¿CuÃ¡l de las siguientes NO hace parte de las vÃ¡lvulas del corazÃ³n humano?', 'Tiene un nombre inventado que se parece al nombre de un hUESO', 'Triueso', 'Mitral\", \"TricÃºspide\", \"Pulmonar', 2, 1),
(66, 'Â¿CuÃ¡les de los siguientes NO hace parte de los colores de los anillos olÃ­mpicos?', 'Es un color compuesto y el negro es descartado ya que es la ausencia del color', 'Naranja', 'Amarillo\", \"Rojo\", \"Negro', 3, 1),
(67, 'Â¿CuÃ¡ntos parques naturales nacionales existen en Colombia?', 'La otra parte son parques turÃ­sticos cerca del 41%', '59', '45\", \"74\", \"41', 2, 1),
(68, 'Â¿QuÃ© posiciÃ³n ocupa Colombia a nivel mundial en cuanto a su superficie?', 'Entramos en top 28 pero tampoco llegamos entre los 12 primeros', 'Puesto 25', 'Puesto 15\", \"Puesto 12\", \"Puesto 28', 3, 1),
(69, 'Â¿En quÃ© aÃ±o se proclama oficialmente la independencia de Colombia?', 'Esta se declaro 10 aÃ±os despuÃ©s del siglo XVIII', 'En 1810', 'En 1710\", \"En 1910\", \"En 1610', 3, 1),
(70, 'Â¿QuiÃ©n fue el presidente electo que gobernÃ³ mÃ¡s tiempo en Colombia?', 'Su nombre tiene algunas letras de las ultimas del abecedario por eso Ãlvaro y AndrÃ©s NO son', 'Rafael NÃºÃ±ez ', 'Ãlvaro Uribe\", \"Juan Manuel\", \"AndrÃ©s Pastrana', 3, 1),
(71, 'Â¿CuÃ¡ntos golpes de estado se han dado por el poder en Colombia?', 'Es un mÃºltiplo de 2 esta ente 10 y 8', '10', '9\", \"8\", \"5', 3, 1),
(72, 'En Colombia NO se puede hablar de un traje tÃ­pico pero si existe una prenda ademÃ¡s del sombrero que es referente en todas las regiones del paÃ­s Â¿CuÃ¡l es?', 'Son sinÃ³nimos el uno del otro por la similitud de la prenda y uso que tiene a nivel del paÃ­s', 'Poncho o Ruana', 'Alpargatas o Ruana\", \"Poncho o bufanda\", \"Sandalias o Ruana', 3, 1),
(73, 'Colombia tiene la ciudad con mÃ¡s rutas para ciclistas en todo LatinoamÃ©rica con un total de 300 KM Â¿Sabes cuÃ¡l es?', 'No estÃ¡n en lÃ­nea recta, se encuentra al lado de malla vial mas grande de Colombia', 'BogotÃ¡', 'MedellÃ­n\", \"Tunja\", \"Leticia', 3, 1),
(74, 'Â¿CuÃ¡ntas medallas olÃ­mpicas tiene Colombia?', 'Con gran orgullo sobrepasamos las 27 medallas y tampoco tenemos mas de 50', '34', '42\", \"26\", \"52', 3, 1),
(75, 'Â¿CÃ³mo se llama la energÃ­a contenida en el nÃºcleo de los Ã¡tomos?', 'Con ella se produce presiÃ³n para girar turbinas y generar energÃ­a elÃ©ctrica', 'Nuclear', 'AtÃ³mica\", \"Radioactiva\", \"Gamma', 2, 1),
(76, 'Â¿CuÃ¡l es la parte mas externa del ojo humano?', 'Es la parte transparente que protege el ojo en si', 'La cornea', 'La pupila\", \"El iris\", \"La retina', 3, 1),
(77, 'Â¿En promedio cuantos habitantes tiene Colombia?', 'Esta entre 40 millones y a 52 millones', '48-52 millones', '35-38 millones\", \"58-60 millones\", \"40-44 millones', 3, 1),
(78, 'Â¿CuÃ¡l es la flor nacional de Colombia?', 'Es representativa en la mayorÃ­a de lugares y en festivales a nivel nacional', 'OrquÃ­dea', 'Girasol\", \"TulipÃ¡n\", \"Dalia', 2, 1),
(79, 'Â¿CuÃ¡l de las siguientes atletas gano la primera medalla de oro en Colombia?', 'Que bello que todos estos nombres empiecen por M pero la correcta tiene en su apellido una de las ultimas letras del abecedario', 'MarÃ­a Urruita', 'MarÃ­a Calle\", \"Mabel Mosquera\", \"Mariana Pajon', 3, 1),
(80, 'Â¿QuÃ© puesto ocupa Colombia en cuanto a la producciÃ³n de cafÃ©?', 'Estamos entre los mejores, NO en la cÃºspide, pero si entramos entre los tres mejores', 'Tercero', 'Segundo\", \"Quinto\", \"Primero', 3, 1),
(81, 'Colombia esta entre los paÃ­ses mas biodiversos de mundo, Â¿sabes en que puesto esta?', 'No siempre para ser el mejor hay que estar en la cima.', 'Segundo', 'Noveno\", \"Tercero\", \"SÃ©ptimo', 2, 1),
(82, 'Â¿CuÃ¡l es el Ã¡rbol nacional de Colombia?', 'No hay ningÃºn Ã¡rbol mas alto que este en todo Colombia.', 'Palma de cera', 'GuayacÃ¡n\", \"Encenillo\", \"Eucalipto', 2, 1),
(83, 'Â¿QuÃ© representa el color amarillo de la bandera de Colombia?', 'Hace parte de la fortuna de nuestro paÃ­s la cual podemos pisar y recorrer', 'La riqueza del suelo', 'El amanecer y el sol\", \"La republica nacional\", \"El porvenir y la fe', 3, 1),
(84, 'Â¿QuiÃ©n le dio los colores a Amarillo, Azul y Rojo a la bandera de Colombia?', 'Estos colores se dieron en el aÃ±o 1807 por el seÃ±or Francisco .........', 'Francisco Miranda', 'Antonio NariÃ±o\", \"Francisco DÃ­az\", \"Domingo Caicedo', 3, 1),
(85, 'Â¿CuÃ¡l es el lago mas grande de Colombia?', 'Su nombre es el de menos caracteres que encontraras entre las respuestas', 'Lago tota', 'Lago del cisne\", \"Lago Calima\", \"Lago Tara poto', 2, 1),
(86, 'Â¿CuÃ¡l ave se encuentra representada en el escudo de Colombia?', 'Es de la raza de aves mas grande que existe', 'CÃ³ndor andino', 'ColibrÃ­\", \"BÃºho real\", \"Ãguila arpÃ­a', 3, 1),
(87, 'Â¿CuÃ¡l tipo de energÃ­a renovable es la mas utilizada en el paÃ­s?', 'Con ella se genera gran presiÃ³n, para girar generadores', 'HidrÃ¡ulica', 'TÃ©rmica\", \"Solar\", \"GeotÃ©rmica', 2, 1),
(88, 'Â¿CuÃ¡l de los siguientes es el mineral con mayor producciÃ³n en Colombia?', 'Hay telenovelas y lugares reconocidos referentes a este mineral', 'Esmeralda', 'Zafiro\", \"RubÃ­\", \"Oro', 3, 1),
(89, 'Â¿CÃ³mo se llama la fobia a la sangre?', 'Su nombre tiene relaciÃ³n cuando sufrimos un golpe severo dejando traumas o ......', 'Hematofobia', 'Dentofobia\", \"Hemotofobia\", \"Sanifobia', 3, 1),
(90, 'Â¿En que aÃ±o se adopto la actual bandera de Colombia?', 'Esto ocurriÃ³ en el siglo XIX antes de 1881', '1861', '1904\", \"1881\", \"1837', 3, 1),
(91, 'Â¿CuÃ¡l es le departamento mas pequeÃ±o de Colombia?', 'Este se encuentra en ubicado en el mar', 'San AndrÃ©s', 'QuindÃ­o\", \"Risaralda\", \"AtlÃ¡ntico', 3, 1),
(92, 'Â¿CuÃ¡l el el hueso mas largo del cuerpo humano?', 'Se podrÃ­a decir que hace parte del tren inferior del cuerpo humano', 'El fÃ©mur', 'El peronÃ©\", \"La tibia\", \"El radio', 2, 1),
(93, 'Â¿CÃ³mo se llama la parte del cuerpo que une dos o mas huesos?', 'Sin ellas el cuerpo NO tendrÃ­a tanto rango de movimiento', 'Articulaciones', 'CartÃ­lagos\", \"Tendones\", \"Intercepciones', 2, 1),
(94, 'Â¿En cual hemisferio se encuentra la mayor parte del territorio colombiano?', 'Solo existen dos hemisferios', 'Norte', 'Sur\", \"Este\", \"Oeste', 3, 1),
(95, 'Â¿CuÃ¡l es el departamento mas poblado de Colombia?', 'TambiÃ©n gana en el tamaÃ±o de caracteres como se muestra escrita en las repuestas', 'Cundinamarca', 'BogotÃ¡\", \"Antioquia\", \"Casanare', 3, 1),
(96, 'Â¿CuÃ¡l de las siguientes NO hace parte de las regiones de Colombia?', 'Hay un intruso, bÃºscalo esta mal escrito porque deberÃ­a ser \'Caribe\'', 'RegiÃ³n AtlÃ¡ntica', 'RegiÃ³n Orinoquia\", \"RegiÃ³n insular\", \"RegiÃ³n Pacifica', 3, 1),
(97, 'Â¿Con cual rio comparte fronteras Colombia con Ecuador y Venezuela?', 'Este recorre gran parte de la regiÃ³n ......ia', 'Rio Orinoco', 'Rio Cauca\", \"Rio Magdalena\", \"Rio SinÃº', 3, 1),
(98, 'Â¿CuÃ¡l es el lema nacional de Colombia?', 'Se encuentra arriba del escudo de Colombia', 'Liberta y orden', 'Orden y justicia\", \"Lealtad y compromiso\", \"Sociedad y orden', 3, 1),
(99, 'Â¿CuÃ¡l es la ciudad mas antigua de Colombia?', 'No esta al centro del paÃ­s, se ubica mas a los costados', 'Santa marta', 'BogotÃ¡\", \"Barranquilla\", \"MedellÃ­n', 3, 1),
(100, 'Â¿QuiÃ©n escribiÃ³ la letra del himno de Colombia?', 'Fue muy importante, NO solo por escribir el himno nacional de Colombia si no por dirigir el paÃ­s durante un tiempo', 'Rafael NÃºÃ±ez', 'Eliseo Payan\", \"Carlos Mallarino\", \"Antonio Roldan', 3, 1),
(101, 'Â¿CuÃ¡l de las siguientes islas se encuentran ubicadas en el pacifico?', 'Estas islas son un misterio biodiverso ubicadas hacia el occidente', 'Gorgona y Malpelo', 'San AndrÃ©s y Malpelo\", \"Cabruna y Gorgona\", \"Cerranilla y Ceysen', 2, 1),
(102, 'Â¿En que ciudad esta la biblioteca mas visitada de Colombia y el mundo?', 'No necesitabas esta ayuda, por lo grande que es sabemos que es la ciudad de BogotÃ¡', 'BogotÃ¡', 'MedellÃ­n\", \"Tunja\", \"Tolima', 3, 1),
(103, 'Â¿CuÃ¡l de las siguientes NO hace parte de las 7 maravillas del mundo moderno?', 'Hace parte de las 7 maravillas antiguas y esta presente en la actualidad en un desierto', 'PirÃ¡mide de Giza', 'Coliseo de Roma\", \"Taj Mahal\", \"Muralla China', 3, 1),
(104, 'Â¿De que lengua antigua proviene el espaÃ±ol?', 'Se origino en uno de los mas grandes imperios de Europa en Grecia', 'LatÃ­n', 'Romanes\", \"Gallego\", \"Castilla', 3, 1),
(105, 'Â¿QuiÃ©n fue el cientÃ­fico mas famoso en formular una teorÃ­a de la evoluciÃ³n?', 'Es el principal exponente de esta rama de la ciencia', 'Charles Darwin', 'Alfred Russel\", \"Baptiste Lamarck\", \"Richard Dawkins', 2, 1),
(106, 'Â¿CuÃ¡l ha sido la obra literaria mas leÃ­da y traducida hasta hoy?', 'Se encuentra la mayorÃ­a de casa', 'La biblia', 'Orejas de mariposa\", \"El pequeÃ±o NicolÃ¡s\", \"La principito', 3, 1),
(107, 'Â¿QuiÃ©n fue el autor de la frase \'Solo se que no se nada\'?', 'Es uno de los padres de la filosofÃ­a', 'SÃ³crates', 'PlatÃ³n\", \"ElÃ­seo\", \"Frida Kahlo', 3, 1),
(108, 'Â¿CÃ³mo se llama el miedo a las alturas?', 'Su nombre tiene que ver con cosas IncreÃ­bles que hacen los deportistas como \'ACRObasias\'', 'Acrofobia', 'Alturfobia\", \"Altruismo\", \"Confifobia', 3, 1),
(109, 'Â¿QuÃ© disciplina medica estudia la mente?', 'Te ayudare quitando dos opciones, la correcta esta en las que inician por \'Psi\' Psicoterapia y PsicologÃ­a NO es', 'PsiquiatrÃ­a', 'PsicologÃ­a\", \"PedagogÃ­a\", \"Psicoterapia', 3, 1),
(110, 'Â¿CÃ³mo se llama el deporte en el que se monta a caballo?', 'Su nombre suena muy parecido a la palabra equidad', 'EquitaciÃ³n', 'Esgrima\", \"Equinacion\", \"Equitalismo', 3, 1),
(111, 'Â¿CuÃ¡l es el principal compuesto quÃ­mico del planeta tierra?', 'Es muy abundante a cualquier lugar que viajemos', 'El agua', 'El diamante\", \"El carbono\", \"El aire', 2, 1),
(112, 'Â¿CuÃ¡l de los siguientes NO hace parte de los reinos de los seres vivos?', 'Esta mal escrito y suena como la palabra \'Funny\'', 'Funngi', 'Vegetal\", \"MÃ³nera\", \"Protista', 3, 1),
(113, 'Â¿CuÃ¡l de las siguientes NO hace parte de un motor?', 'Es parte de su nombre original pero le falta las letras \'dor\'', 'Alterna', 'CigÃ¼eÃ±al\", \"Culata\", \"VÃ¡lvulas', 3, 1),
(114, 'Â¿A cual de las siguientes respuestas aplica una persona delgada con poca grasa?', 'Tiene que ver con tipos de cuerpos y NO con enfermedades y la respuesta puede empezar por la letra \'E\'', 'Ectomorfo', 'Anorexia\", \"Mesomorfo\", \"Andromorfo', 3, 1),
(115, 'Â¿CuÃ¡l de los siguientes tipos de triÃ¡ngulos es el que tiene sus tres lados iguales?', 'No pueden ser rectÃ¡ngulos ni obtusos porque sus lados NO son iguales', 'EquilÃ¡tero', 'Obtuso\", \"RectÃ¡ngulos\", \"IsÃ³sceles', 3, 1),
(116, 'Â¿CuÃ¡l de las siguientes hace parte del significado de la palabra Ã¡tomo?', 'Al ver tan tan lejos crea la ilusiÃ³n de desaparecer', 'Invisible', 'Inamovible\", \"Inapreciable\", \"Pervividle', 3, 1),
(117, 'Â¿Con quÃ© letras se representa el oro en la tabla periÃ³dica?', 'Las respuestas que contienen la letra \'O\' NO son correctas', 'Au', 'Or\", \"Ur\", \"Po', 3, 1),
(118, 'Â¿QuÃ© compuesto es el mÃ¡s abundante en la corteza terrestre?', 'El agua esta de segundo lugar y el hidrogeno NO es compuesto', 'El oxigeno', 'El agua\", \"El hidrogeno\", \"El carbono', 2, 1),
(119, 'Â¿CuÃ¡l es el elemento quÃ­mico mÃ¡s pesado que se encuentra en la naturaleza?', 'Puede ser demasiado perjudicial para la vida de los seres vivos', 'El uranio', 'El plomo\", \"El paladium\", \"El mercurio', 2, 1),
(120, 'Â¿CuÃ¡ntos dientes en promedio tiene un humano adulto ?', 'Es uno de sus nÃºmeros es un mÃºltiplo de 16', '32 a 28', '26 a 24\", \"20 a 16\", \"24 a 20 ', 3, 1),
(121, 'Â¿QuÃ© animal es conocido por su capacidad de volar hacia atrÃ¡s?', 'Su tiempo de vida es muy corto para las veces que han movido sus alas', 'El ColibrÃ­', 'El halcÃ³n\", \"El Ãguila\", \"Los cuervos', 2, 1),
(122, 'Â¿Cual de los siguientes NO hace parte de los movimientos que realiza la tierra?', 'Trascender hace parte mas a lo espiritual que a la tierra', 'La trasenciÃ³n', 'RotaciÃ³n\", \"La traslaciÃ³n\", \"la nutaciÃ³n', 3, 1),
(123, 'Â¿En que aÃ±o fue inventada la primera vacuna?', 'Esta vacuna se creo en contra la viruela por allÃ¡ a muy al final del siglo XVIII', '1796', '1752\", \"1812\", \"1778', 3, 1),
(124, 'Â¿CuÃ¡l es el rÃ­o mÃ¡s ancho del mundo?', 'La respuesta esta fuera de lo convencional a los rÃ­os mas conocidos', 'RÃ­o de la Plata', 'RÃ­o del Amazonas\", \"RÃ­o Nilo\", \"RÃ­o Magdalena', 2, 1),
(125, 'Â¿CuÃ¡l es el metal que mayor conductividad elÃ©ctrica tiene?', 'Hace parte de unos de los minerales mas usados en la joyerÃ­a', 'La plata', 'El cobre\", \"El cobalto\", \"El oro', 3, 1),
(126, 'Â¿CuÃ¡l es el segundo idioma mas hablado del mundo?', 'El ingles es el primero y el segundo es muy hablado en la parte del Oriente.', 'El mandarÃ­n', 'El ingles\", \"El Ruso\", \"El Hindi', 3, 1),
(127, 'Â¿De las siguientes respuestas cual es el el Ã³rgano mas grande del cuerpo humano?', 'Es el Ã³rgano mas externo que posee nuestro cuerpo', 'La piel', 'El cerebro\", \"El hÃ­gado\", \"Los nervios', 3, 1),
(128, 'Â¿QuiÃ©n fue Albert Einstein?', 'Es conocido por la teorÃ­a de la relatividad universal', 'FÃ­sico', 'Compositor\", \"Escritor\", \"Escultor', 3, 1),
(129, 'Â¿Aproximadamente cuantas ciudades alberga Colombia?', 'La respuesta correcta esta arriba de las 1000 ciudades', 'Mas o menos 1118', 'Mas o menos 998\", \"Mas o menos 888\", \"Mas o menos 1212', 3, 1),
(130, 'Â¿CuÃ¡l es el baile tÃ­pico de Colombia?', 'El nombre de este baile tambiÃ©n hace parte de un genero musical muy bonito', 'El vallenato', 'La cumbia\", \"El porro\", \"El mapale', 3, 1),
(131, 'Â¿La obra literaria \'Cien aÃ±os de soledad\' fue escrita por?', 'Es una de las personas que gano un premio nobel a literatura', 'Gabriel GarcÃ­a', 'Rafael Pombo\", \"Mario Mendoza\", \"Santiago Gamboa', 3, 1),
(132, 'Â¿CuÃ¡l es el Ãºnico mamÃ­fero que puede volar?', 'Su nombre tiene que ver con el nombre de una pelÃ­cula \'el caballero de la noche\'', 'El murciÃ©lago', 'El pato\", \"La ardilla\", \"El ganso', 2, 1),
(133, 'Â¿CuÃ¡ntos aÃ±os equivale un lustro?', 'Es la mitad de una dÃ©cada', '5 aÃ±os', '50 aÃ±os\", \"100 aÃ±os\", \"25 aÃ±os', 3, 1),
(134, 'Â¿CuÃ¡l es el deporte nacional colombiano?', 'Fue inventado aquÃ­ en nuestra tierra, jugÃ¡ndose en canchas de de greba', 'El tejo', 'El futbol\", \"El ciclismo\", \"El ajedrez', 3, 1),
(135, 'Â¿En que aÃ±o se dio la guerra civil mas grande de Colombia?', 'La guerra Magna sucediÃ³ por allÃ¡ en el aÃ±o 185.....', '1860', '1896\", \"1902\", \"1865', 3, 1),
(136, 'Â¿En que ciudad se celebra la Feria de las Flores?', 'Es muy representativo de esta ciudad que se encuentra en Antioquia', 'MedellÃ­n', 'Manizales\", \"Magdalena\", \"Cartagena', 3, 1),
(137, 'Â¿CÃ³mo se le conoce a la composiciÃ³n poÃ©tica amorosa compuesta o cantada?', 'En Colombia se realizan concursos sobre este arte que convine varios elementos de las repuestas', 'La trova', 'La rima\", \"La poesÃ­a\", \"La opera', 3, 1),
(138, 'Â¿CuÃ¡l de los siguientes elementos NO hacen parte de los elementos que conforman una canciÃ³n?', 'La respuesta correcta se encuentra fuera de la melodÃ­a y el ritmo', 'El fondo', 'La melodÃ­a\", \"La armonÃ­a\", \"El ritmo', 3, 1),
(139, 'Â¿CuÃ¡l de los siguientes es el nombre un cantante de salsa?', 'Es el compositor de la canciÃ³n \'Te va a doler\'', 'Maelo RuÃ­z', 'Jorge Celedon\", \"Felipe PelÃ¡ez\", \"Jorge OÃ±ate', 3, 1),
(140, 'Â¿Cual ritmo musical y baile tradicional de Colombia que expresa claramente el mestizaje?', 'Es muy representativa a nivel nacional en especial en la costa caribe donde se origino y es La ......', 'La cumbia', 'El porro\", \"La puya\", \"El merengue', 3, 1),
(141, 'Â¿Colombia es el segundo exportador de flores en el mundo despuÃ©s de?', 'Brasil es un pais diverso, pero NO exportan muchas flores y Kenia tampoco', 'Holanda', 'JapÃ³n\", \"Kenia\", \"Brasil', 3, 1),
(142, 'Â¿La ausencia de estaciones en Colombia se debe a?', 'Estamos sobre la lÃ­nea central de nuestro planeta la cual se llama lÃ­nea ecuatorial donde abundan los t.......', 'Los trÃ³picos', 'Los vientos\", \"La cordillera\", \"La zona horaria', 3, 1),
(143, 'Â¿Cali, la 3Âª ciudad mÃ¡s grande de Colombia, es considerada  la capital mundial de..?', 'No hay otro lugar en Colombia que NO se hable mas de La ..... que en Cali', 'La salsa', 'La cumbia\", \"Las corridas\", \"La caÃ±a de azÃºcar', 3, 1),
(144, 'Â¿CuÃ¡l de los siguientes metales fue el primero utilizado por el hombre?', 'Este se encuentra presenta en las conexiones elÃ©ctricas de las casas', 'El cobre', 'La roca\", \"El hierro\", \"La plata', 3, 1),
(145, 'Â¿CuÃ¡l es el libro mÃ¡s vendido en el mundo despuÃ©s de la Biblia?', 'Es una obra de Miguel de Cervantes', 'Quijote de la mancha', 'La Odisea\", \"El Principito\", \"SeÃ±or de los Anillos', 3, 1),
(146, 'Â¿QuÃ© sustancia es absorbida por las plantas y expirada por los animales?', 'Las plantas se encargan principalmente de procesarlo y convertirlo en oxigeno', 'DiÃ³xido de carbono', 'OxÃ­geno\", \"DiÃ³xido de hierro\", \"MonÃ³xido', 3, 1),
(147, 'Â¿CuÃ¡l es la etnia indÃ­gena mÃ¡s numerosa de Colombia?', 'Esta poblaciÃ³n principalmente se encuentra alojada en el departamento de la Guajira, no es ni Zenu, ni la Embera', 'Wayuu', 'EmberÃ¡\", \"Sikuani\", \"Zenu', 3, 1),
(148, 'Â¿QuÃ© Ã³rgano del cuerpo humano consume mÃ¡s energÃ­a?', 'Es el Ã³rgano que nos permite controlar y procesar todo lo que nos rodea', 'El cerebro', 'El HÃ­gado\", \"El corazÃ³n\", \"El estomago', 3, 1),
(149, 'Â¿QuÃ© paÃ­s tiene mÃ¡s islas en el mundo?', 'Este paÃ­s tiene mÃ¡s de 220.000 islas y esta ubicado en la parte superior de Europa', 'Suecia', 'Suiza\", \"TaiwÃ¡n\", \"China', 3, 1),
(150, 'Â¿CuÃ¡l es la temperatura mÃ¡s baja que se puede registrar en el universo?', 'El limite es -273,14Â°C para ser exactos', '-273Â°C', '-100Â°C\", \"-243Â°C\", \"-300Â°C', 3, 1),
(151, 'Â¿CuÃ¡l es el continente mÃ¡s seco de la Tierra?', 'Aparte es un lugar muy frio y Ã¡rido que no precisamente es cÃ¡lido', 'AntÃ¡rtida', 'Ãfrica\", \"OceanÃ­a\", \"AmÃ©rica', 3, 1),
(152, 'Â¿CuÃ¡l de los siguientes es el ave mas rÃ¡pido del mundo?', 'Todos esto aves son demasiado rÃ¡pidos entre los mas rÃ¡pidos estÃ¡n el HalcÃ³n y el AgÃ¼illa', 'HalcÃ³n peregrino', 'ColibrÃ­ de Ana\", \"CÃ³ndor Andino\", \"Ãguila vocinglera', 3, 1),
(153, 'Â¿CuÃ¡l es la videoconsola mÃ¡s vendida en la historia?', 'Es la segunda generaciÃ³n de la consola hecha por Sony', 'PlayStation 2', 'Game Boy\", \"Xbox\", \"Game Cube', 3, 1),
(154, 'Â¿CuÃ¡l es la galaxia mÃ¡s cercana a la VÃ­a LÃ¡ctea?', 'La vÃ­a lÃ¡ctea tiene a la mas cercana teniendo esta como nombre And.....', 'AndrÃ³meda', 'Leo I\", \"Circinus\", \" Bootes', 3, 1),
(155, 'Â¿CuÃ¡l de las siguientes NO hace parte de las 7 maravillas del mundo antiguo?', 'El Taj Mahal en india se Construyo en la Ã©poca moderna', 'Taj Mahal', 'PirÃ¡mide de Giza\", \"El Coloso de Rodas\", \"Estatua de Zeus', 3, 1),
(156, 'Â¿CuÃ¡ntos colores se pueden apreciar al ver un arcoÃ­ris?', 'La respuesta correcta es un numero impar y el numero 11 no cuenta', '7', '9\", \"6\", \"11', 3, 1),
(157, 'Â¿CuÃ¡l es la bebida mÃ¡s consumida en el mundo despuÃ©s del agua?', 'La cerveza cuenta como bebida alcohÃ³lica por esto no es la correcta  y el agua ocupa el primer puesto', 'El te', 'La cerveza\", \"El cafÃ©\", \"El agua', 3, 1),
(158, 'Â¿CuÃ¡l es el continente mÃ¡s grande del planeta?', 'Este continente cuenta con 48 paÃ­ses y esta ubicado hacia el oriente', 'Asia', 'Europa\", \"OceanÃ­a\", \"AntÃ¡rtida', 3, 1),
(159, 'Â¿En quÃ© fecha se celebra el dÃ­a Mundial del Medio Ambiente?', 'Se celebra a nivel mundial exactamente a la mitad del aÃ±o', 'El 5 de junio', 'El 9 de marzo\", \"El 7 de agosto\", \"12 de septiembre', 3, 1),
(160, 'Â¿En que paÃ­s se encuentra el edificio mas alto del mundo?', 'Se ubica en el continente de Asia, formado por los \'...... ...... unidos\' ', 'Emiratos Ãrabes ', 'DubÃ¡i\", \"Arabia Saudita\", \"Estados Unidos', 3, 1),
(161, 'Â¿A cuanto equivale un bienio?', 'Es 5 parte de 10 aÃ±os', '2 AÃ±os', '10 AÃ±os\", \"25 aÃ±os\", \"50 aÃ±os', 3, 1),
(162, 'Â¿CuÃ¡ntos aÃ±os durÃ³ la Primera Guerra Mundial?', 'Esta guerra empezÃ³ en 1914 y termino en 191.', '4 AÃ±os', '20 AÃ±os\",\"6 AÃ±os\",\"5 aÃ±os', 3, 1),
(163, 'Es la rama de la Ciencia que estudia las relaciones de los seres vivos entre sí y el medio ambiente.', 'Tiene que ver con directamente con las especies y seres vivos que habitan en el ambiente por esto la física y la geología no son.', 'Ecología', 'Fisica\",\"Geologia\",\"Fauna', 2, 1),
(164, '¿Cómo se llama el conjunto formado por todos los animales y plantas que habitan una zona determinada y el medio ambiente en que viven, con todos sus factores?', 'Al conformarse por varios seres vivos y mantener su esencia no se puede incluir mas especies ajenas a este porque daña el \'eco....... \'', 'Ecosistema', 'Fauna\", \"Habitad\", \"Bosques', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntaje`
--

CREATE TABLE `puntaje` (
  `punt_id` bigint(10) NOT NULL,
  `punt_nom` varchar(255) NOT NULL,
  `punt_tot` int(10) NOT NULL,
  `punt_lev` varchar(255) NOT NULL,
  `punt_ayu` bigint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puntaje`
--

INSERT INTO `puntaje` (`punt_id`, `punt_nom`, `punt_tot`, `punt_lev`, `punt_ayu`) VALUES
(1, 'nuevo', 1000, '0', 0),
(2, 'nuevo', 2000, '3', 0),
(3, 'jsdghfj', 1000, '0', 0),
(4, 'jsdghfj', 2000, '3', 0),
(5, 'Zebkazz', 10000, '0', 0),
(6, 'Zebkazz', 1000, '2', 0),
(7, 'Zebkazz', 2000, '3', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`preg_id`);

--
-- Indices de la tabla `puntaje`
--
ALTER TABLE `puntaje`
  ADD PRIMARY KEY (`punt_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `preg_id` bigint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT de la tabla `puntaje`
--
ALTER TABLE `puntaje`
  MODIFY `punt_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

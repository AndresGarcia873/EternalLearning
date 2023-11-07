create table if not exists login(
id_login int not null auto_increment,
nombres varchar(50) not null,
apellidos varchar(50) not null,
correo varchar(60) not null,
contrasena varchar(20) not null,
preguntas_id_pregunta int not null,
modificado date not null,
primary key(id_login)
);

create table if not exists preguntas(
id_pregunta int not null auto_increment,
pregunta varchar(60) not null,
primary key (id_pregunta)
);

create table if not exists libros(
    id_libro int not null auto_increment,
    titulo varchar(50) not null,
    escritor varchar(35) not null,
    imagen text not null,
    editorial varchar(30) not null,
    sinopsis text(1300) not null,
    primary key (id_libro)
);

alter table login add constraint login_preguntas
foreign key (preguntas_id_pregunta) references preguntas(id_pregunta);

insert into preguntas (pregunta) values ("¿Cuál es el nombre de la ciudad donde naciste?");
insert into preguntas (pregunta) values ("¿Cuál era tu sobrenombre de la infancia?");
insert into preguntas (pregunta) values ("¿Cómo se llama la primera escuela a la que asististe?");
insert into preguntas (pregunta) values ("¿Cuál es tu color favorito?");

insert into libros (titulo, escritor, imagen, editorial, sinopsis) values (
    "LA METAMORFOSIS", 
    "FRANZ KAFKA", 
    "https://www.librerianorma.com/images/Caratula/Responsive/9789584545039.jpg",
    "Editorial Norma", 
    "«Al despertar Gregorio Samsa una mañana, tras un sueño intranquilo, se encontró en su cama convertido en un monstruoso insecto.» Tal es el abrupto comienzo, que nos sitúa de raíz bajo unas reglas distintas, de 'La metamorfosis' , sin duda alguna la obra de Franz Kafka que ha alcanzado mayor celebridad. Escrito en 1912 y publicado en 1916, este relato es considerado una de las obras maestras del siglo xx por sus innegables rasgos precursores y el caudal de ideas e interpretaciones que desde siempre ha suscitado. Completan este volumen los relatos «Un artista del hambre» y «Un artista del trapecio»."
    );
insert into libros (titulo, escritor, imagen, editorial, sinopsis) values (
    "SATANÁS", 
    "MARIO MENDOZA",
    "https://www.tornamesa.co/imagenes_grandes/9789584/978958423941.GIF", 
    "Editorial Planeta", 
    "Una mujer hermosa e ingenua que roba con destreza a altos ejecutivos, un pintor habitado por fuerzas misteriosas y un sacerdote que se enfrenta a un caso de posesión demoníaca en La Candelaria, el barrio colonial de Bogotá... historias que se tejen en torno a la de Campo Elías, héroe de la guerra de Vietnam, quien inicia su particular descenso a los infiernos, obsesionado por la dualidad entre el bien y el mal, entre Jekyll y Hyde, y se convertirá en un ángel exterminador. Galardonada con el Premio Biblioteca Breve 2002, Satanás es una novela sobre la oscura presencia de lo maligno en la vida cotidiana. El telón de fondo es un paisaje roto, el de la Colombia de hoy, y una ciudad, Bogotá, por cuyas calles van y vienen, de forma errática y condenados a expiar una interminable culpa, los personajes de este inquietante relato en el que escenas conmovedoras se mezclan con otras de descarnada violencia."
    );
insert into libros (titulo, escritor, imagen, editorial, sinopsis) values (
    "PARANORMAL COLOMBIA", 
    "MARIO MENDOZA",
    "https://planetadelibrosco2.cdnstatics.com/usuaris/libros/fotos/275/original/portada_paranormal-colombia_mario-mendoza_202101202137.png", 
    "Editorial Planeta", 
    "El escritor colombiano que más hondo ha cavado en las tinieblas del alma humana, el narrador de nuestra capacidad para infringir dolor, regresa con un libro sobre los caminos insospechados del conocimiento. Mario Mendoza conversó con diez personas capaces de hablar con los muertos, viajar en el tiempo, anticipar el fin de nuestra era, habitar conciencias ajenas y navegar por universos paralelos. Diez testimonios aparentemente inconexos que, de forma soterrada, revelan cuán superficiales son los mecanismos para entender el mundo. Esta realidad no es más que la coartada de otra realidad."
    );
insert into libros (titulo, escritor, imagen, editorial, sinopsis) values (
    "EL CÓDIGO DA VINCI", 
    "DAN BROWN",
    "https://images.cdn3.buscalibre.com/fit-in/360x360/d2/74/d2745514f8ea4de663d5c8c659a162b2.jpg", 
    "Editorial Planeta", 
    "Robert Langdon, experto en simbología, recibe una llamada en mitad de la noche: el conservador del museo del Louvre ha sido asesinado en extrañas circunstancias y junto a su cadáver ha aparecido un desconcertante mensaje cifrado. Al profundizar en la investigación, Langdon descubre que las pistas conducen a las obras de Leonardo da Vinci... y que están a la vista de todos, ocultas por el ingenio del pintor. Langdon une esfuerzos con la criptóloga francesa Sophie Neveu y descubre que el conservador del museo pertenecía al priorato de Sión, una sociedad que a  lo largo de los siglos ha contado con miembros tan destacados como sir Isaac Newton, Botticelli, Victor Hugo o el propio Da Vinci, y que ha velado por mantener en secreto una sorprendete verdad histórica. Una mezcla trepidante de aventuras, intrigas vaticanas, simbología y enigmas cifrados, que provocó una extraordinaria polémica al poner en duda algunos de los dogmas sobre los que se asienta la iglesia católica."
    );
insert into libros (titulo, escritor, imagen, editorial, sinopsis) values (
    "ÁNGELES Y DEMONIOS", 
    "DAN BROWN",
    "https://www.tornamesa.co/imagenes_grandes/9789584/978958424033.GIF", 
    "Editorial Planeta", 
    "Robert Langdon es convocado en un centro de investigación suizo para analizar un misterioso símbolo marcado a fuego en el pecho de un físico asesinado. El experto en simbología descubre el resurgimiento de una antigua hermandad secreta: los illuminati, que han emergido de las sombras para llevar a cabo la fase final de su legendaria venganza contra su enemigo más odiado... la iglesia católica. Los peores temores de Langdon se confirman cuando los illuminati anuncian que han escondido una bomba en el corazón de la Ciudad del Vaticano. Con la cuenta atrás en marcha, Langdon viaja a Roma para aunar fuerzas con Vittoria Vetra, una científica bella y misteriosa. Los dos se embarcarán en una carrera contrarreloj en una búsqueda desesperada por los rincones menos conocidos del Vaticano. El arma más poderosa creada por el hombre, una organización secreta sedienta de venganza... y apenas unas horas para evitar el desastre. La eterna pugna entre ciencia y religión se ha convertido en una guerra muy real."
    );
insert into libros (titulo, escritor, imagen, editorial, sinopsis) values (
    "ORIGEN", 
    "DAN BROWN",
    "https://images.cdn2.buscalibre.com/fit-in/360x360/0d/15/0d154ff139951486c485a9c0efa0e58c.jpg",
    "Editorial Planeta", 
    "Robert Langdon, profesor de simbología e iconografía religiosa de la universidad de Harvard, acude al Museo Guggenheim Bilbao para asistir a un trascendental anuncio que «cambiará la faz de la ciencia para siempre». El anfitrión de la velada es Edmond Kirsch, un joven multimillonario cuyos visionarios inventos tecnológicos y audaces predicciones lo han convertido en una figura de renombre mundial. Kirsch, uno de los alumnos más brillantes de Langdon años atrás, se dispone a revelar un extraordinario descubrimiento que dará respuesta a las dos preguntas que han obsesionado a la humanidad desde el principio de los tiempos. ¿DE DÓNDE VENIMOS? ¿ADÓNDE VAMOS? Al poco tiempo de comenzar la presentación, meticulosamente orquestada por Edmond Kirsch y la directora del museo Ambra Vidal, estalla el caos para asombro de cientos de invitados y millones de espectadores en todo el mundo. Ante la inminente amenaza de que el valioso hallazgo se pierda para siempre, Langdon y Ambra deben huir desesperadamente a Barcelona e iniciar una carrera contrarreloj para localizar la críptica contraseña que les dará acceso al revolucionario secreto de Kirsch."
    );
insert into libros (titulo, escritor, imagen, editorial, sinopsis) values (
    "EL CUARTO MONO", 
    "J. D. BARKER", 
    "https://planetadelibrosco2.cdnstatics.com/usuaris/libros/fotos/272/m_libros/271397_portada_el-cuarto-mono_julio-hermoso-oliveras_201803221718.jpg",
    "Editorial Planeta", 
    "Sam Porter, detective de la policía de Chicago, investiga el caso de un hombre atropellado, pues todos los indicios en la escena del crimen apuntan a que se trata del Cuarto Mono, un asesino en serie que lleva años aterrorizando la ciudad. Su modus operandi consiste en enviar tres cajas blancas a las familias de las víctimas que secuestra y mata: una con una oreja,  otra con los dos ojos, y la última con la lengua, para finalmente abandonar el cuerpo sin vida en algún lugar. El hombre atropellado llevaba una de esas cajas blancas. Empieza así una frenética carrera contrarreloj para encontrar a la víctima antes de que sea demasiado tarde. Pero lo que parece una simple operación policial se acaba convirtiendo en algo mucho más oscuro, porque no todo el mundo dice la verdad... La mente de un asesino es compleja, imprevisible, aterradora. ¿Qué hace de estos monstruos seres tan fascinantes? En sus mentes se esconden las pistas de sus atroces crímenes y descifrarlas supone un ejercicio valiente, frenético e inteligente. De factura magistral y cinematográfica, El Cuarto Mono une a la perfección la fascinación por descifrar la mente de un serial killer y los entresijos del trabajo policial."
    );
insert into libros (titulo, escritor, imagen, editorial, sinopsis) values (
    "LOS CRÍMENES DE LA CARRETERA", 
    "J. D. BARKER - JAMES PATTERSON", 
    "https://images.cdn2.buscalibre.com/fit-in/360x360/0a/c0/0ac0b823300360dc626ddfe7e2589fc6.jpg",
    "Editorial Ediciones Destino", 
    "Los hermanos Fitzgerald comparten un oscuro y terrible pasado. Adoptados por una célebre pareja de intelectuales, fueron criados en un ambiente experimental y aislados del mundo real, y lo son todo el uno para el otro, no tienen ni confían en nadie más. Una noche, al volver del supermercado, Michael Fitzgerald descubre a una joven muerta en su bañera. Al lado del cadáver hay una pluma de gorrión. Aterrorizado, llama a al policía y esta le interroga sobre la víctima, Alyssa Tepper, a la que él asegura no conocer. El detective Dobbs y la agente Gimble, del FBI, unen fuerzas en lo que parece un simple asesinato: en el momento en el que sale a la luz fotos en las que Michael aparece besando a Alyssa, es arrestado de inmediato, pero a las pocas horas aparece otra víctima, también con una pluma de gorrión colocada al lado del cuerpo. Cuando el macabro patrón se repite, no solamente en Los Ángeles sino por todo el país, tienen claro que se enfrentan a un nuevo serial killer, un ingenioso psicópata que está sembrando el terror y que va siempre un paso por delante de ellos: Birdman."
    );
insert into libros (titulo, escritor, imagen, editorial, sinopsis) values (
    "MINDHUNTER", 
    "John E. Douglas - Mark Olshaker", 
    "https://images.cdn1.buscalibre.com/fit-in/360x360/17/f5/17f565a1a8a3de403b8b829c5e0e1f99.jpg",
    "Editorial Planeta", 
    "Mindhunter es la historia contada en primera persona de John Douglas, el hombre que revolucionó las técnicas para estudiar las mentes de los criminales en serie. Durante veinticinco años como agente especial del FBI, Douglas contribuyó a resolver los casos más difíciles, con aciertos asombrosos, como el que le llevó a anticipar la personalidad de un asesino de niños en Atlanta, contradiciendo las opiniones de sus colegas. Este libro no es solo el relato de su carrera, sino una escalofriante exploración de las mentes de los asesinos en serie, basada en sus interrogatorios a personajes como David Berkowitz, el «Hijo de Sam»; Charles Manson; Ed Kemper, el «Asesino de colegialas», que comenzó su carrera criminal a los catorce años; o Ted Bundy. No es de extrañar que el relato del primer perfilador de criminales de la historia se haya convertido en un libro de referencia para cineastas como David Fincher --director de la serie de Netflix Mindhunter-- o haya servido de inspiración para crear personajes como el del agente especial Jack Crawford en El silencio de los corderos."
    );

insert into login (nombres, apellidos, correo, contrasena, preguntas_id_pregunta, modificado) values (
    "ANDRÉS ESTIVEN",
    "GARCÍA PÁEZ",
    "aestgarcia@poligran.edu.co",
    "andrespoli2023",
    1,
    "2023-11-07"
);
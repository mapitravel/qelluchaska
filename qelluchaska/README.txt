INSTRUCCIONES PARA USAR EL THEME QELLUCHASKA
=============================================
1. Módulos para deshabilitar
   a. overlay
   b. comment
   c. toolbar
   d. shortcut
   e. color
   
2. Módulos para habilitar o descargar (Los nombres que se muestran se descargan desde http://drupal.org/project/[nombre_modulo])
	a. admin_menu
	b. ctools
	c. views
	d. metatags_quick
	e. opengraph_metatags
	f. aggregator
	g. php
	
3. Agregar los Feeds
	Con el módulo Aggregator, agregar los feeds de noticias, testimonios y videos

4. Views
    a. Habilitar el módulo views
	b. Importar las 3 vistas ya creadas en la carpeta "data"
    Nota: Estos views, generan bloques que se mostrarán en el home y en el sidebar

5. Habilitar el Theme
	
6. Bloques y Regiones
	Las regiones y bloques deben ir de la siguiente manera, el contenido de algunos bloques están también en la carpeta "data", Cambiar títulos de bloques de acuerdo a la conveniencia
	El nombre de sistema y título está en el orden [Nombre de Sistema]/[Título]

	Región: Ayuda
		Ayuda del sistema
	Región: Sidebar
		Top Tours Sidebar
		Facebook Recommendations/Tus Amigos Recomiendan (fbrec.block) [Javascript]
		Vista: Testimonios Sidebar: Block
	Contenido
		Contenido de la página principal
	Pie de página
		Footer (footer.block) [PHP]
		Google Analytics/Sin título <none>
		Machupicchu Chat/Sin título <none> (Olark)
	Welcome
		Bienvenida/Sin título (welcome.block)
	Home Izquierda
		Top tours
	Home Derecha
		Vista: Lea testimonios de nuestros pasajeros: Block
		Vista: Youtube Testimonios: Block
	Home Bottom
		Vista: Noticias de Machu Picchu: Block
	Home More
		Suscripciones FeedBurner/Recibe noticias en tu correo (feedburner.block) [Full HTML]
		Autorizaciones renovadas/Autorizaciones renovadas (autorizaciones.block) [Full HTML]
		Facebook LikeBox Home/Estamos en Facebook (fblikebox.block) [Javascript]
	Share Bar
		Sharebar/Sin título <none> (sharebar.block) [PHP]

7. Borrar todos los otros bloques, ya no sirven
		
8. Nada más

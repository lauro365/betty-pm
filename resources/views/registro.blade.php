<!DOCTYPE html>
<html lang="en-us" id="extr-page">
	<head>
		<meta charset="utf-8">
		<title> Learning Developer</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- #CSS Links -->
		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

		<!-- SmartAdmin RTL Support -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> 

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">

		<!-- #FAVICONS -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- #APP SCREEN / ICONS -->
		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">

		

		<style type='text/css'>
		.ImagenRegistroPos{
			margin-top: -230px ;
			width: 650px ;
			height: 365px;
         }


		</style>


	</head>
	
	<body id="login">
	
		<header id="header">
			<!--<span id="logo"></span>-->

			<div id="logo-group">
				<span id="logo"> <img src="img/logo ledev.png" alt="LearningDeveloper"> </span>

				<!-- END AJAX-DROPDOWN -->
			</div>

			<span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Ya estas registrado?</span> <a href="{{ url('/') }}" class="btn btn-danger">INICIA SESIÓN</a> </span>

		</header>

		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container" >

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 hidden-xs hidden-sm">
						<h1 class="txt-color-green login-header-big">Learning Developer</h1>
						<div class="hero">

							<div class="pull-left login-desc-box-l">
								<h4 class="paragraph-header">El mejor sitio que te permite administrar cursos para sus empleados de una manera práctica, sencilla e innovadora.</h4>
								<div class="login-app-icons">
								</div>
							</div>
							
							<img src="img/demo/img login.jpg" alt="" class="ImagenRegistroPos" class="pull-right display-image">
							
						</div>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<div class="well no-padding">

							
							<form action="{{ action('UserRegistration@store') }}" id="smart-form-register" class="smart-form client-form" method="POST">
							{{ csrf_field() }}
								<header>
									Crear Cuenta
								</header>

								<fieldset>
									<section>
										<label class="input"> <i class="icon-append fa fa-user"></i>
											<input type="username" name="username" placeholder="Nombre de Usuario">
											<b class="tooltip tooltip-bottom-right">Necesario para ingresar al sitio</b> </label>
									</section>

									<section>
										<label class="input"> <i class="icon-append fa fa-envelope"></i>
											<input type="email" name="email" placeholder="Correo Electrónico">
											<b class="tooltip tooltip-bottom-right">Necesario para verificar su cuenta</b> </label>
									</section>

									<section>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input type="password" name="password" placeholder="Contraseña" id="password">
											<b class="tooltip tooltip-bottom-right">Necesario para ingresar al sitio</b> </label>
									</section>

									<section>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input type="password" name="passwordConfirm" placeholder="Confirmar contraseña">
											<b class="tooltip tooltip-bottom-right">Confirme su contraseña</b> </label>
									</section>
								</fieldset>

								<fieldset>
									<div class="row">
										<section class="col col-6">
											<label class="input">
												<input type="text" name="firstname" placeholder="Nombre">
											</label>
										</section>
										<section class="col col-6">
											<label class="input">
												<input type="text" name="lastname" placeholder="Apellido">
											</label>
										</section>
									</div>

									<div class="row">
										<section class="col col-6">
											<label class="select">
												<select name="gender">
													<option value="0">Empleado</option>
													<option value="1">Administrador</option>
													<option value="2">Instructor</option>
												</select> <i></i> </label>
										</section>
									</div>

									<section>
										<label class="checkbox">
											<input type="checkbox" name="subscription" id="subscription">
											<i></i>Quiero recibir noticias y ofertas especiales</label>
										<label class="checkbox">
											<input type="checkbox" name="terms" id="terms">
											<i></i>Estoy de acuerdo con los<a href="#" data-toggle="modal" data-target="#myModal"> Terminos y condiciones</a></label>
									</section>
								</fieldset>
								<footer>
									<button type="submit" class="btn btn-primary">
										Registrar
									</button>
								</footer>

								<div class="message">
									<i class="fa fa-check"></i>
									<p>
										Gracias por Registrarte!
									</p>
								</div>
							</form>

						</div>
						<p class="note text-center">2018, Ledev.com Todos los derechos reservados</p>
						<h5 class="text-center">- O Registrate con -</h5>
						<ul class="list-inline text-center">
							<li>
								<a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">Términos y Condiciones</h4>
					</div>
					<div class="modal-body custom-scroll terms-body">
						
 <div id="left">



            <h1>LEARNING DEVELOPER</h1>



            <h2>TÉRMINOS Y CONDICIONES</h2>

          <p><br>Este contrato describe los términos y condiciones generales (en adelante únicamente "TÉRMINOS Y CONDICIONES") aplicables al uso de los contenidos, productos y servicios ofrecidos a través del sitio <strong><span id="span_id_el_sitio">www.ledev.com</span></strong> (en adelante, "SITIO WEB"), del cual es titular <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> (en adelante, "TITULAR") quien tiene su domicilio establecido en  <span id="span_id_estado_del_domicilio_del_propietario">Nuevo León</span>, en la siguiente dirección:</p>
			<p style="padding-left: 30px;"><span id="span_id_domicilio_titular">Sardes #418, Col: Valle de San Carlos,<br>CP: 66437, Nuevo León México</span></p>
			<p>Cualquier persona que desee acceder o hacer uso del sitio o los servicios que en él se ofrecen, podrá hacerlo sujetándose a los presentes TÉRMINOS Y CONDICIONES, así como a políticas y principios incorporados al presente documento. En todo caso, cualquier persona que no acepte los presentes términos y condiciones, deberá abstenerse de utilizar el SITIO WEB y/o adquirir los productos y servicios que en su caso sean ofrecidos.</p>
			<p><br><strong>I. DEL OBJETO.</strong></p>
			<p>El objeto de los presentes TÉRMINOS Y CONDICIONES es regular el acceso y la utilización del SITIO WEB, entendiendo por este cualquier tipo de contenido, producto o servicio que se encuentre a disposición del público en general dentro del dominio: <strong><span id="span_id_el_sitio">www.ledev.com</span></strong>.</p>
			<p>El TITULAR se reserva la facultad de modificar en cualquier momento y sin previo aviso, la presentación, los contenidos, la funcionalidad, los productos, los servicios, y la configuración que pudiera estar contenida en el SITIO WEB; en este sentido, el USUARIO reconoce y acepta que <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> en cualquier momento podrá interrumpir, desactivar o cancelar cualquiera de los elementos que conforman el SITIO WEB o el acceso a los mismos.</p>
			<p>El acceso al SITIO WEB por parte del USUARIO tiene carácter libre y, por regla general es gratuito sin que el USUARIO tenga que proporcionar una contraprestación para poder disfrutar de ello, salvo en lo referente al costo de la conexión a internet suministrada por el proveedor de este tipo de servicios que hubiere contratado el mismo USUARIO.</p>
			<p>El acceso a parte de los contenidos y servicios del SITIO WEB podrá realizarse previa suscripción o registro previo del USUARIO.</p>
			<p>El SITIO WEB se encuentra dirigido exclusivamente a personas que cuenten con la mayoría de edad (mayores de 18 años); en este sentido,<strong> <span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> declina cualquier responsabilidad por el incumplimiento de este requisito.</p>
			<p>El SITIO WEB está dirigido principalmente a USUARIOS residentes en la República Mexicana, por lo cual, <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> no asegura que el SITIO WEB cumpla total o parcialmente con la legislación de otros países, de forma que, si el USUARIO reside o tiene su domicilio establecido en otro país y decide acceder o utilizar el SITIO WEB lo hará bajo su propia responsabilidad y deberá asegurarse de que tal acceso y navegación cumple con la legislación local que le es aplicable, no asumiendo <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> ninguna responsabilidad que se pueda derivar de dicho acto.</p>
			<p>Se hace del conocimiento del USUARIO que el TITULAR podrá administrar o gestionar el SITIO WEB de manera directa o a través de un tercero, lo cual no modifica en ningún sentido lo establecido en los presentes TÉRMINOS Y CONDICIONES.</p>
			<p><br><strong>II. DEL USUARIO.</strong></p>
			<p>El acceso o utilización del SITIO WEB, así como de los recursos habilitados para interactuar entre los USUARIOS, o entre el USUARIO y el TITULAR tales como medios para realizar publicaciones o comentarios, confiere la condición de USUARIO del SITIO WEB, por lo que quedará sujeto a los presentes TÉRMINOS Y CONDICIONES, así como a sus ulteriores modificaciones, sin perjuicio de la aplicación de la legislación aplicable, por tanto, se tendrán por aceptados desde el momento en el que se accede al SITIO WEB. Dada la relevancia de lo anterior, se recomienda al USUARIO revisar las actualizaciones que se realicen a los presentes TÉRMINOS Y CONDICIONES.</p>
			<p>Es responsabilidad del USUARIO utilizar el SITIO WEB de acuerdo a la forma en la que fue diseñado; en este sentido, queda prohibida la utilización de cualquier tipo de software que automatice la interacción o descarga de los contenidos o servicios proporcionados a través del SITIO WEB. Además, el USUARIO se compromete a utilizar la información, contenidos o servicios ofrecidos a través del SITIO WEB de manera lícita, sin contravenir lo dispuesto en los presentes TÉRMINOS Y CONDICIONES, la moral o el orden público, y se abstendrá de realizar cualquier acto que pueda suponer una afectación a los derechos de terceros, o perjudique de algún modo el funcionamiento del SITIO WEB. </p>
			<p>Así mismo, el usuario se compromete a proporcionar información lícita y veraz en los formularios habilitados en el SITIO WEB, en los cuales el usuario tenga que proporcionar ciertos datos o información para el acceso a algún contenido, producto o servicio ofrecido por el propio SITIO WEB. En todo caso, el USUARIO notificará de forma inmediata al TITULAR acerca de cualquier hecho que permita suponer el uso indebido de la información registrada en dichos formularios, tales como, robo, extravío, o acceso no autorizado a cuentas y/o contraseñas, con el fin de proceder a su inmediata cancelación.</p>
			<p><strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> se reserva el derecho de retirar todos aquellos comentarios y aportaciones que vulneren la ley, el respeto a la dignidad de la persona, que sean discriminatorios, atenten contra los derechos de tercero o el orden público, o bien, que a su juicio no resulten adecuados para su publicación.</p>
			<p>En cualquier caso, <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> no será responsable de las opiniones vertidas por los USUARIOS a través de comentarios o publicaciones que estos realicen.</p>
			<p>El sólo acceso al SITIO WEB no supone el establecimiento de ningún tipo de relación entre el TITULAR y el USUARIO.</p>
			<p>Al tratarse de un SITIO WEB dirigido exclusivamente a personas que cuenten con la mayoría de edad, el USUARIO manifiesta ser mayor de edad y disponer de la capacidad jurídica necesaria para sujetarse a los presentes TÉRMINOS Y CONDICIONES.</p>
			<p><br><strong>III. DEL ACCESO Y NAVEGACIÓN EN EL SITIO WEB.</strong></p>
			<p>El TITULAR no garantiza de ningún modo la continuidad y disponibilidad de los contenidos, productos o servicios ofrecidos a través del SITIO WEB, no obstante, el TITULAR llevará a cabo las acciones que de acuerdo a sus posibilidades le permitan mantener el buen funcionamiento del SITO WEB, sin que esto suponga alguna responsabilidad de parte de <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong>.</p>
			<p>De igual forma <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> no será responsable ni garantiza que el contenido o software al que pueda accederse a través del SITIO WEB, se encuentre libre de errores, software malicioso, o que pueda causar algún daño a nivel de software o hardware en el equipo a través del cual el USUARIO accede al SITIO WEB.</p>
			<p>El TITULAR tampoco se hace responsable de los daños que pudiesen ocasionarse por un uso inadecuado del SITIO WEB. En ningún caso <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> será responsable por las pérdidas, daños o perjuicios de cualquier tipo que surjan por el sólo acceso o utilización del SITIO WEB.</p>
			<p><br><strong>IV. POLÍTICA DE PRIVACIDAD Y PROTECCIÓN DE DATOS.</strong></p>
			<p>De conformidad con lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de Particulares, el TITULAR se compromete a adoptar las medidas necesarias que estén a su alcance para asegurar la privacidad de los datos personales recabados de forma que se garantice su seguridad, se evite su alteración, pérdida o tratamiento no autorizado.</p>
			<p>Además, a efecto de dar cumplimiento a lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de Particulares, todo dato personal que sea recabado a través del SITIO WEB, será tratado de conformidad con los principios de licitud, calidad, finalidad, lealtad, y responsabilidad. Todo tratamiento de datos personales quedará sujeto al consentimiento de su titular. En todo caso, la utilización de datos financieros o patrimoniales, requerirán de autorización expresa de sus titulares, no obstante, esta podrá darse a través del propio SITIO WEB utilizando los mecanismos habilitados para tal efecto, y en todo caso se dará la mayor diligencia y cuidado a este tipo de datos. Lo mismo ocurrirá en el caso de datos personales sensibles, considerando por estos aquellos que debido a una utilización indebida puedan dar origen a discriminación o su divulgación conlleve un riesgo para el titular.</p>
			<p>En todo momento se procurará que los datos personales contenidos en las bases de datos o archivos que en su caso se utilicen, sean pertinentes, correctos y actualizados para los fines para los cuales fueron recabados.</p>
			<p>El tratamiento de datos personales se limitará al cumplimiento de las finalidades previstas en el Aviso de Privacidad el cual se encontrará disponible en la siguiente dirección electrónica:</p>
			<p style="padding-left: 30px;"><span id="span_id_url_aviso">www.ledev.com/aviso</span></p>
			<p>El SITIO WEB podrá incluir hipervínculos o enlaces que permitan acceder a páginas web de terceros distintos de <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong>. Los titulares de dichos sitios web dispondrán de sus propias políticas de privacidad y protección de datos, por lo cual <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> no asume ningún tipo de responsabilidad por los datos que san facilitados por el USUARIO a través de cualquier sitio web distinto a <strong><span id="span_id_el_sitio">www.ledev.com</span></strong>.</p>
			<p><strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> se reserva el derecho a modificar su Política de Privacidad, de acuerdo a sus necesidades o derivado de algún cambio en la legislación. El acceso o utilización del SITIO WEB después de dichos cambios, implicará la aceptación de estos cambios.</p>
			<p>Por otra parte, el acceso al SITIO WEB puede implicar la utilización de cookies, las cuales, son pequeñas cantidades de información que se almacenan en el navegador utilizado por el USUARIO. Las cookies facilitan la navegación, la hacen más amigable, y no dañan el dispositivo de navegación, para ello, pueden recabar información para ingresar al SITIO WEB, almacenar las preferencias del USUARIO, así como la interacción que este tenga con el SITIO WEB, como por ejemplo: la fecha y hora en la que se accede al SITIO WEB, el tiempo que se ha hecho uso de este, los sitios visitados antes y después del mismo, el número de páginas visitadas, la dirección IP de la cual accede el usuario, la frecuencia de visitas, etc.</p>
			<p>Este tipo de información será utilizada para mejorar el SITIO WEB, detectar errores, y posibles necesidades que el USUARIO pueda tener, lo anterior a efecto de ofrecer a los USUARIOS servicios y contenidos de mejor calidad. En todo caso, la información que se recopile será anónima y no se identificará a usuarios individuales.</p>
			<p>En caso de que el USUARIO no desee que se recopile este tipo de información deberá deshabilitar, rechazar, restringir y/o eliminar el uso de cookies en su navegador de internet. Los procedimientos para realizar estas acciones pueden diferir de un navegador a otro; en consecuencia, se sugiere revisar las instrucciones facilitadas por el desarrollador del navegador. En el supuesto de que rechace el uso de cookies (total o parcialmente) el USUARIO podrá continuar haciendo uso del SITIO WEB, aunque podrían quedar deshabilitadas algunas de las funciones del mismo.</p>
			<p>Es posible que en el futuro estas políticas respecto a las cookies cambien o se actualicen, por ello es recomendable revisar las actualizaciones que se realicen a los presentes TÉRMINOS Y CONDICIONES, con objetivo de estar adecuadamente informado sobre cómo y para qué utilizamos las cookies que se generan al ingresar o hacer uso del SITIO WEB.</p>
			<p><br><strong>V. POLÍTICA DE ENLACES.</strong></p>
			<p>El SITIO WEB puede contener enlaces, contenidos, servicios o funciones, de otros sitios de internet pertenecientes y/o gestionados por terceros, como por ejemplo imágenes, videos, comentarios, motores de búsqueda, etc.</p>
			<p>La utilización de estos enlaces, contenidos, servicios o funciones, tiene por objeto mejorar la experiencia del USUARIO al hacer uso del SITIO WEB, sin que pueda considerarse una sugerencia, recomendación o invitación para hacer uso de sitios externos. <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> en ningún caso revisará o controlará el contenido de los sitios externos, de igual forma, no hace propios los productos, servicios, contenidos, y cualquier otro material existente en los referidos sitios enlazados; por lo cual, tampoco se garantizará la disponibilidad, exactitud, veracidad, validez o legalidad de los sitios externos a los que se pueda tener acceso a través del SITIO WEB. Así mismo, el TITULAR no asume ninguna responsabilidad por los daños y perjuicios que pudieran producirse por el acceso o uso, de los contenidos, productos o servicios disponibles en los sitios web no gestionados por <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> a los que se pueda acceder mediante el SITIO WEB.</p>
			<p><br><strong>VI. POLÍTICA EN MATERIA DE PROPIEDAD INTELECTUAL E INDUSTRIAL</strong></p>
			<p><strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> por sí o como parte cesionaria, es titular de todos los derechos de propiedad intelectual e industrial del SITIO WEB, entendiendo por este el código fuente que hace posible su funcionamiento así como las imágenes, archivos de audio o video, logotipos, marcas, combinaciones de colores, estructuras, diseños y demás elementos que lo distinguen. Serán, por consiguiente, protegidas por la legislación mexicana en materia de propiedad intelectual e industrial, así como por los tratados internacionales aplicables. Por consiguiente, queda expresamente prohibida la reproducción, distribución, o difusión de los contenidos del SITIO WEB, con fines comerciales, en cualquier soporte y por cualquier medio, sin la autorización de <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong>.</p>
			<p>El USUARIO se compromete a respetar los derechos de propiedad intelectual e industrial del TITULAR. No obstante, además de poder visualizar los elementos del SITIO WEB podrá imprimirlos, copiarlos o almacenarlos, siempre y cuando sea exclusivamente para su uso estrictamente personal.</p>
			<p>Por otro lado, el USUARIO, se abstendrá de suprimir, alterar, o manipular cualquier elemento, archivo, o contenido, del SITIO WEB, y por ningún motivo realizará actos tendientes a vulnerar la seguridad, los archivos o bases de datos que se encuentren protegidos, ya sea a través de un acceso restringido mediante un usuario y contraseña, o porque no cuente con los permisos para visualizarlos, editarlos o manipularlos.</p>
			<p>En caso de que el USUARIO o algún tercero consideren que cualquiera de los contenidos del SITIO WEB suponga una violación de los derechos de protección de la propiedad industrial o intelectual, deberá comunicarlo inmediatamente a <strong><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span></strong> a través de los datos de contacto disponibles en el propio SITIO WEB y/o a través de los siguientes medios:</p>
			<p style="padding-left: 30px;">Teléfono: <span id="span_id_telefono_del_propietario">3453343454</span></p>
			<p style="padding-left: 30px;">Correo electrónico: <span id="span_id_correo_electronico_del_propietario">learningdeveloper@outlook.com</span></p>
			<p><strong><br>VII. LEGISLACIÓN Y JURISDICCIÓN APLICABLE.</strong></p>
			<p><span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span> se reserva la facultad de presentar las acciones civiles o penales que considere necesarias por la utilización indebida del SITIO WEB, sus contenidos, productos o servicios, o por el incumplimiento de los presentes TÉRMINOS Y CONDICIONES.</p>
			<p>La relación entre el USUARIO y <span id="span_id_el_propietario">Israel Llanes, Learning Developer MEX</span> se regirá por la legislación vigente en México, específicamente en  <span id="span_id_estado_del_domicilio_del_propietario">Nuevo León</span>. De surgir cualquier controversia en relación a la interpretación y/o a la aplicación de los presentes TÉRMINOS Y CONDICIONES, las partes se someterán a la jurisdicción ordinaria de los tribunales que correspondan conforme a derecho en el estado al que se hace referencia.</p>					
            </div>
			
			<br><br>


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancelar
						</button>
						<button type="button" class="btn btn-primary" id="i-agree">
							<i class="fa fa-check"></i> Estoy de Acuerdo
						</button>
						
						<button type="button" class="btn btn-danger pull-left" id="print">
							<i class="fa fa-print"></i> Imprimir
						</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<!--================================================== -->	

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script src="js/plugin/pace/pace.min.js"></script>

	    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script> if (!window.jQuery) { document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');} </script>

	    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script> if (!window.jQuery.ui) { document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');} </script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events 		
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->		
		<script src="js/bootstrap/bootstrap.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>
		
		<!-- JQUERY MASKED INPUT -->
		<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>
		
		<!--[if IE 8]>
			
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
			
		<![endif]-->

		<!-- MAIN APP JS FILE -->
		<script src="js/app.min.js"></script>

		<script type="text/javascript">
			runAllForms();
			
			// Model i agree button
			$("#i-agree").click(function(){
				$this=$("#terms");
				if($this.checked) {
					$('#myModal').modal('toggle');
				} else {
					$this.prop('checked', true);
					$('#myModal').modal('toggle');
				}
			});
			
			// Validation
			$(function() {
				// Validation
				$("#smart-form-register").validate({

					// Rules for form validation
					rules : {
						username : {
							required : true
						},
						email : {
							required : true,
							email : true
						},
						password : {
							required : true,
							minlength : 3,
							maxlength : 20
						},
						passwordConfirm : {
							required : true,
							minlength : 3,
							maxlength : 20,
							equalTo : '#password'
						},
						firstname : {
							required : true
						},
						lastname : {
							required : true
						},
						gender : {
							required : true
						},
						terms : {
							required : true
						}
					},

					// Messages for form validation
					messages : {
						username : {
							required : 'Por favor ingrese su nombre de usuario'

						},
						email : {
							required : 'Por favor ingrese su Correo Electrónico',
							email : 'Por favor ingrese un correo electrónico valido'
						},
						password : {
							required : 'Por favor ingrese su contraseña'
						},
						passwordConfirm : {
							required : 'Por favor ingrese su contraseña una vez mas',
							equalTo : 'Por favor ingrese la misma contraseña'
						},
						firstname : {
							required : 'Por favor ingrese su nombre'
						},
						lastname : {
							required : 'Por favor ingrese su apellido'
						},
						gender : {
							required : 'Por favor seleccione su ocupación'
						},
						terms : {
							required : 'Debes estar de acuerdo con los términos y condiciones'
						}
					},

					// Ajax form submition
					submitHandler : function(form) {
						$(form).ajaxSubmit({
							success : function() {
								$("#smart-form-register").addClass('submited');
							}
						});
					},

					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});

			});
		</script>

	</body>
</html>
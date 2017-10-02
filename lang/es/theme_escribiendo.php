<?php
// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.
 
// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();                                                                                                
 
// A description shown in the admin theme selector.                                                                                 
$string['choosereadme'] = 'Tema creado para plataforma escribiendo.online';                
// The name of our plugin.                                                                                                          
$string['pluginname'] = 'Escribiendo';                                                                                                    
// We need to include a lang string for each block region.                                                                          
$string['region-side-pre'] = 'Derecha';

// Custom Settings
$string['escribiendo_notification_type'] = 'Tipo de notificación a nivel del sistema';
$string['escribiendo_notification_type_desc'] = 'Utilice esta opción para elegir el tipo de banner de notificación que aparece: rojo para los errores, azul para la información, amarillo para las advertencias, etc. Las alertas verdes sólo deben utilizarse para las notificaciones de "éxito". No utilice éstos para las notificaciones regulares.';
$string['escribiendo_notification_none'] = 'Ninguno - No mostrar';
$string['escribiendo_notification_danger'] = 'Rojo - Errores y reconocimientos de problemas';
$string['escribiendo_notification_warning'] = 'Amarillo - Advertencias de tiempo de inactividad planificadas';
$string['escribiendo_notification_success'] = 'Verde - Notificaciones de éxito';
$string['escribiendo_notification_info'] = 'Blue - Información y asesoramiento';
$string['escribiendo_notification'] = 'Texto de notificación de todo el sistema';
$string['escribiendo_notification_desc'] = 'Utilícelo para que aparezca un banner de notificación en la parte superior de cada página. Manténgalo corto: una línea funciona mejor.';
$string['login_intro'] = 'Página de inicio de sesión';
$string['login_intro_desc'] = 'Cualquier cosa que ingrese aquí se mostrará en la página de inicio de sesión de Moodle. Recomendamos una linea de tag &lt;h2&gt; seguido de un par de tags &lt;p&gt;';

// EMarking links
$string['beginning'] = 'Inicio';
$string['activities'] = 'Actividades';
$string['forum'] = 'Foro';

// Login labels
$string['username'] = 'Nombre de usuario';
$string['password'] = 'Contraseña';
$string['login'] = 'Iniciar sesión';
$string['forgotpassword'] = ' ¿Olvidaste tu contraseña?';

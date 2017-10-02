<?php
// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.
 
// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();                                                                                                
 
// A description shown in the admin theme selector.                                                                                 
$string['choosereadme'] = 'Theme created to the platform escribiendo.online';               
// The name of our plugin.                                                                                                          
$string['pluginname'] = 'Escribiendo';                                                                                                    
// We need to include a lang string for each block region.                                                                          
$string['region-side-pre'] = 'Right';

// Custom Settings
$string['escribiendo_notification_type'] = 'Systemwide Notification Type';
$string['escribiendo_notification_type_desc'] = 'Use this to choose the type of notification banner that appears - red for errors, blue for information, yellow for warnings etc. Green alerts should only be used for "success" notifications, e.g. saving settings. Don\'t use these for regular notifications.';
$string['escribiendo_notification_none'] = 'None - Don\'t display';
$string['escribiendo_notification_danger'] = 'Red - Errors and problem acknowledgements';
$string['escribiendo_notification_warning'] = 'Yellow - Planned downtime warnings';
$string['escribiendo_notification_success'] = 'Green - Success notifications';
$string['escribiendo_notification_info'] = 'Blue - Information and advisory';
$string['escribiendo_notification'] = 'Systemwide Notification Text';
$string['escribiendo_notification_desc'] = 'Use this to have a notification banner appear at the top of every page. Keep it short - one line works best.';
$string['login_intro'] = 'Login Page Introduction';
$string['login_intro_desc'] = 'Anything you enter here will be shown on the Moodle login page. We recommend a one line &lt;h2&gt; tag followed by a couple of &lt;p&gt; tags.';

// EMarking links
$string['beginning'] = 'Beginning';
$string['activities'] = 'Activities';
$string['forum'] = 'Forum';

// Login labels
$string['username'] = 'Username';
$string['password'] = 'Password';
$string['login'] = 'Log in';
$string['forgotpassword'] = ' Forgot your password?';
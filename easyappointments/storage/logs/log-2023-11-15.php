<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-15 06:12:02 --> Email could not been sent. Mailer Error (Line 166): Could not instantiate mail function.
ERROR - 2023-11-15 06:12:02 --> #0 C:\xampp\htdocs\proyecto-integrador-v1210\easyappointments\application\libraries\Notifications.php(92): EA\Engine\Notifications\Email->send_appointment_details(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text), 'Mexico/General')
#1 C:\xampp\htdocs\proyecto-integrador-v1210\easyappointments\application\controllers\Appointments.php(590): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#2 C:\xampp\htdocs\proyecto-integrador-v1210\easyappointments\system\core\CodeIgniter.php(481): Appointments->ajax_register_appointment()
#3 C:\xampp\htdocs\proyecto-integrador-v1210\easyappointments\index.php(341): require_once('C:\\xampp\\htdocs...')
#4 {main}

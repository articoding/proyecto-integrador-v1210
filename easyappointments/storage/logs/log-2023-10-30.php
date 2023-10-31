<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-30 14:16:02 --> {
  "error": {
    "code": 403,
    "message": "Google Calendar API has not been used in project 336992806363 before or it is disabled. Enable it by visiting https://console.developers.google.com/apis/api/calendar-json.googleapis.com/overview?project=336992806363 then retry. If you enabled this API recently, wait a few minutes for the action to propagate to our systems and retry.",
    "errors": [
      {
        "message": "Google Calendar API has not been used in project 336992806363 before or it is disabled. Enable it by visiting https://console.developers.google.com/apis/api/calendar-json.googleapis.com/overview?project=336992806363 then retry. If you enabled this API recently, wait a few minutes for the action to propagate to our systems and retry.",
        "domain": "usageLimits",
        "reason": "accessNotConfigured",
        "extendedHelp": "https://console.developers.google.com"
      }
    ],
    "status": "PERMISSION_DENIED",
    "details": [
      {
        "@type": "type.googleapis.com/google.rpc.Help",
        "links": [
          {
            "description": "Google developers console API activation",
            "url": "https://console.developers.google.com/apis/api/calendar-json.googleapis.com/overview?project=336992806363"
          }
        ]
      },
      {
        "@type": "type.googleapis.com/google.rpc.ErrorInfo",
        "reason": "SERVICE_DISABLED",
        "domain": "googleapis.com",
        "metadata": {
          "consumer": "projects/336992806363",
          "service": "calendar-json.googleapis.com"
        }
      }
    ]
  }
}

ERROR - 2023-10-30 14:16:02 --> #0 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\vendor\google\apiclient\src\Http\REST.php(103): Google\Http\REST::decodeHttpResponse(Object(GuzzleHttp\Psr7\Response), Object(GuzzleHttp\Psr7\Request), 'Google\\Service\\...')
#1 [internal function]: Google\Http\REST::doExecute(Object(GuzzleHttp\Client), Object(GuzzleHttp\Psr7\Request), 'Google\\Service\\...')
#2 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\vendor\google\apiclient\src\Task\Runner.php(182): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\vendor\google\apiclient\src\Http\REST.php(66): Google\Task\Runner->run()
#4 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\vendor\google\apiclient\src\Client.php(913): Google\Http\REST::execute(Object(GuzzleHttp\Client), Object(GuzzleHttp\Psr7\Request), 'Google\\Service\\...', Array, NULL)
#5 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\vendor\google\apiclient\src\Service\Resource.php(238): Google\Client->execute(Object(GuzzleHttp\Psr7\Request), 'Google\\Service\\...')
#6 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\vendor\google\apiclient-services\src\Calendar\Resource\Events.php(141): Google\Service\Resource->call('insert', Array, 'Google\\Service\\...')
#7 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\application\libraries\Google_sync.php(184): Google\Service\Calendar\Resource\Events->insert('primary', Object(Google\Service\Calendar\Event))
#8 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\application\libraries\Synchronization.php(67): Google_sync->add_appointment(Array, Array, Array, Array, Array)
#9 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\application\controllers\Appointments.php(589): Synchronization->sync_appointment_saved(Array, Array, Array, Array, Array, false)
#10 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\system\core\CodeIgniter.php(481): Appointments->ajax_register_appointment()
#11 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\index.php(341): require_once('C:\\xampp\\htdocs...')
#12 {main}
ERROR - 2023-10-30 14:16:04 --> Email could not been sent. Mailer Error (Line 166): Could not instantiate mail function.
ERROR - 2023-10-30 14:16:04 --> #0 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\application\libraries\Notifications.php(92): EA\Engine\Notifications\Email->send_appointment_details(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text), 'Mexico/General')
#1 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\application\controllers\Appointments.php(590): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#2 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\system\core\CodeIgniter.php(481): Appointments->ajax_register_appointment()
#3 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\index.php(341): require_once('C:\\xampp\\htdocs...')
#4 {main}
ERROR - 2023-10-30 14:37:32 --> {
  "error": {
    "code": 403,
    "message": "Google Calendar API has not been used in project 336992806363 before or it is disabled. Enable it by visiting https://console.developers.google.com/apis/api/calendar-json.googleapis.com/overview?project=336992806363 then retry. If you enabled this API recently, wait a few minutes for the action to propagate to our systems and retry.",
    "errors": [
      {
        "message": "Google Calendar API has not been used in project 336992806363 before or it is disabled. Enable it by visiting https://console.developers.google.com/apis/api/calendar-json.googleapis.com/overview?project=336992806363 then retry. If you enabled this API recently, wait a few minutes for the action to propagate to our systems and retry.",
        "domain": "usageLimits",
        "reason": "accessNotConfigured",
        "extendedHelp": "https://console.developers.google.com"
      }
    ],
    "status": "PERMISSION_DENIED",
    "details": [
      {
        "@type": "type.googleapis.com/google.rpc.Help",
        "links": [
          {
            "description": "Google developers console API activation",
            "url": "https://console.developers.google.com/apis/api/calendar-json.googleapis.com/overview?project=336992806363"
          }
        ]
      },
      {
        "@type": "type.googleapis.com/google.rpc.ErrorInfo",
        "reason": "SERVICE_DISABLED",
        "domain": "googleapis.com",
        "metadata": {
          "service": "calendar-json.googleapis.com",
          "consumer": "projects/336992806363"
        }
      }
    ]
  }
}

ERROR - 2023-10-30 14:37:32 --> #0 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\vendor\google\apiclient\src\Http\REST.php(103): Google\Http\REST::decodeHttpResponse(Object(GuzzleHttp\Psr7\Response), Object(GuzzleHttp\Psr7\Request), 'Google\\Service\\...')
#1 [internal function]: Google\Http\REST::doExecute(Object(GuzzleHttp\Client), Object(GuzzleHttp\Psr7\Request), 'Google\\Service\\...')
#2 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\vendor\google\apiclient\src\Task\Runner.php(182): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\vendor\google\apiclient\src\Http\REST.php(66): Google\Task\Runner->run()
#4 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\vendor\google\apiclient\src\Client.php(913): Google\Http\REST::execute(Object(GuzzleHttp\Client), Object(GuzzleHttp\Psr7\Request), 'Google\\Service\\...', Array, NULL)
#5 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\vendor\google\apiclient\src\Service\Resource.php(238): Google\Client->execute(Object(GuzzleHttp\Psr7\Request), 'Google\\Service\\...')
#6 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\vendor\google\apiclient-services\src\Calendar\Resource\Events.php(141): Google\Service\Resource->call('insert', Array, 'Google\\Service\\...')
#7 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\application\libraries\Google_sync.php(184): Google\Service\Calendar\Resource\Events->insert('primary', Object(Google\Service\Calendar\Event))
#8 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\application\libraries\Synchronization.php(67): Google_sync->add_appointment(Array, Array, Array, Array, Array)
#9 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\application\controllers\Appointments.php(589): Synchronization->sync_appointment_saved(Array, Array, Array, Array, Array, false)
#10 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\system\core\CodeIgniter.php(481): Appointments->ajax_register_appointment()
#11 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\index.php(341): require_once('C:\\xampp\\htdocs...')
#12 {main}
ERROR - 2023-10-30 14:37:34 --> Email could not been sent. Mailer Error (Line 166): Could not instantiate mail function.
ERROR - 2023-10-30 14:37:34 --> #0 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\application\libraries\Notifications.php(92): EA\Engine\Notifications\Email->send_appointment_details(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text), 'Mexico/General')
#1 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\application\controllers\Appointments.php(590): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#2 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\system\core\CodeIgniter.php(481): Appointments->ajax_register_appointment()
#3 C:\xampp\htdocs\ProyectoIntegrador\easyappointments\index.php(341): require_once('C:\\xampp\\htdocs...')
#4 {main}

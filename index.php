<?php
include('Settings.php');

$settings = new Settings();

		//Example 1
		// $settings->statusLog = array(
		// 		array(
		// 		'date' => date("U", strtotime("2015-10-15")),
		// 		'oldState' => null,
		// 		'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		// 		)
		// 	);

		// //Example 2
		// $settings->statusLog = array(
		// 		array(
		// 		'date' => date("U", strtotime("2015-10-15")),
		// 		'oldState' => null,
		// 		'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		// 		)
		// 	);

		// //Example 3
		// $settings->statusLog = array(
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-15")),
		// 	'oldState' => null,
		// 	'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-16")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
		// 	'newState' => Settings::CAMPAIGN_STATUS_RUNNING
		// 	)
		// );

		//Example 4
		// $settings->statusLog = array(
		// 	array(
		// 	'date' => date("U", strtotime("2017-09-13")),
		// 	'oldState' => null,
		// 	'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2017-09-14")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
		// 	'newState' => Settings::CAMPAIGN_STATUS_RUNNING
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2017-09-15")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_RUNNING,
		// 	'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2017-09-16")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
		// 	'newState' => Settings::CAMPAIGN_STATUS_RUNNING
		// 	)

		// );



		// //Example 5
		// $settings->statusLog = array(
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-15")),
		// 	'oldState' => null,
		// 	'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-16")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
		// 	'newState' => Settings::CAMPAIGN_STATUS_RUNNING
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-17")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_RUNNING,
		// 	'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-18")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
		// 	'newState' => Settings::CAMPAIGN_STATUS_RUNNING
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-18 12:00:00")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_RUNNING,
		// 	'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-19")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
		// 	'newState' => Settings::CAMPAIGN_STATUS_RUNNING
		// 	),
		// );

		// //Example 6
		// $settings->statusLog = array(
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-15")),
		// 	'oldState' => null,
		// 	'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-16")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
		// 	'newState' => Settings::CAMPAIGN_STATUS_RUNNING
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-17")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_RUNNING,
		// 	'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-18")),

		// 	'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
		// 	'newState' => Settings::CAMPAIGN_STATUS_RUNNING
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-18 12:00:00")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_RUNNING,
		// 	'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-19")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
		// 	'newState' => Settings::CAMPAIGN_STATUS_RUNNING
		// 	),
		// 	array(
		// 	'date' => date("U", strtotime("2015-10-20")),
		// 	'oldState' => Settings::CAMPAIGN_STATUS_RUNNING,
		// 	'newState' => Settings::CAMPAIGN_STATUS_COMPLETE
		// 	)
		// );

		// //Example 7
	// $settings->statusLog = array(
	// 	array(
	// 	'date' => date("U", strtotime("2017-09-14")),
	// 	'oldState' => null,
	// 	'newState' => Settings::CAMPAIGN_STATUS_PAUSED
	// 	),
	// 	array(
	// 	'date' => date("U", strtotime("2017-09-15")),
	// 	'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
	// 	'newState' => Settings::CAMPAIGN_STATUS_RUNNING
	// 	)
	// );


	//Example 9
	 $settings->statusLog = array(
		array(
		'date' => date("U", strtotime("2017-09-12")),
		'oldState' => null,
		'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		),
		array(
		'date' => date("U", strtotime("2017-09-13")),
		'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
		'newState' => Settings::CAMPAIGN_STATUS_RUNNING
		),
		array(
		'date' => date("U", strtotime("2017-09-14")),
		'oldState' => Settings::CAMPAIGN_STATUS_RUNNING,
		'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		),
		array(
		'date' => date("U", strtotime("2017-09-15")),
		'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
		'newState' => Settings::CAMPAIGN_STATUS_RUNNING
		),
		array(
		'date' => date("U", strtotime("2017-09-15 12:00:00")),
		'oldState' => Settings::CAMPAIGN_STATUS_RUNNING,
		'newState' => Settings::CAMPAIGN_STATUS_PAUSED
		),
		array(
		'date' => date("U", strtotime("2017-09-16")),
		'oldState' => Settings::CAMPAIGN_STATUS_PAUSED,
		'newState' => Settings::CAMPAIGN_STATUS_RUNNING
		),
	);

$startDateFilter = date("U", strtotime("2017-09-14"));
$stopDateFilter = null;

echo $settings->sumTime($startDateFilter,$stopDateFilter);


?>


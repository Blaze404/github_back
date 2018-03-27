<?php


	$databases = array('crime_avg' ,'farmers_sih', 'sih_o2');

	$crime_avg = array(
		"crimedata_murder_avg",
		"crimedata_arson_avg",
		"crimedata_dacoity_avg",
		"crimedata_dowry_avg",
		"crimedata_kidnapping_avg",
		"crimedata_rape_avg",
		"crimedata_riots_avg",
		"crimedata_robbery_avg",
		);

	$farmers_sih = array (

		"drought_analysis",
		"farmers_production_kharif",
		"farmers_production_rabi",
		"farmers_production_whole",
	);

	$sih_o2 = array(
		"pmkvy"
	);

	$crimedata_murder_avg = array('col'=>'murder', 'keyword'=>'murder', 'search'=>'murder');
	$crimedata_arson_avg = array('col'=>'arson', 'keyword'=>'arson', 'search'=>'arson');
	$crimedata_dacoity_avg = array('col'=>'dacoity', 'keyword'=>'dacoity', 'search'=>'dacoity');
	$crimedata_dowry_avg = array('col'=>'dowry', 'keyword'=>'dowry', 'search'=>'dowry');
	$crimedata_kidnapping_avg = array('col'=>'kidnapping', 'keyword'=>'kidnapping', 'search'=>'kidnapping');
	$crimedata_rape_avg = array('col'=>'rape', 'keyword'=>'rape', 'search'=>'rape');
	$crimedata_riots_avg = array('col'=>'riots', 'keyword'=>'riots', 'search'=>'riots');
	$crimedata_robbery_avg = array('col'=>'robbery', 'keyword'=>'robbery', 'search'=>'robbery');

	$drought_analysis = array('col'=>'damage/50', 'keyword'=>'drought', 'search'=>'drought');
	$farmers_production_kharif = array('col'=>'diffprod', 'keyword'=>'kharif', 'search'=>'kharif');
	$farmers_production_rabi = array('col'=>'diffprod', 'keyword'=>'rabi', 'search'=>'rabi');
	$farmers_production_whole = array('col'=>'diffprod', 'keyword'=>'whole', 'search'=>'whole' );
	$farmers_state_analysis = array('col'=>'suicideavg', 'keyword'=>'suicide', 'search'=>'suicideavg');

	$pmkvy = array(
		'unemprate',
		'lr8_10',
		'lrg',
		'youth',
		'dropg',
		'csr',
		'tsr',
	);

	$unemprate = array('col'=>'unemprate', 'keyword'=>'unemprate', 'search'=>'unemprate');
	$lr8_10 = array('col'=>'lr8_10', 'keyword'=>'lr8_10', 'search'=>'literacy');
	$lrg = array('col'=>'lrg', 'keyword'=>'lrg', 'search'=>'literacyg');
	$dropg = array('col'=>'dropg', 'keyword'=>'dropg', 'search'=>'dropout');
	//$children = array('col'=>'child', 'keyword'=>'child', 'search'=>'child' );
	$youth = array('col'=>'youth', 'keyword'=>'youth', 'search'=>'youth');
	$csr = array('col'=>'csr', 'keyword'=>'csr', 'search'=>'csr');
	$tsr = array('col'=>'tsr', 'keyword'=>'tsr', 'search'=>'tsr');


	$smartcity_analysis = array(

		'digitalization', 
		'education',
		'environment',
		'health',
		'industries',
		'infrastructure',
		'mobility'
	);

	$skilldata_analysis = array(
		'colleges',
		'csr',
		'tsr',
		'graduates',
		'workexp'
	);


?>


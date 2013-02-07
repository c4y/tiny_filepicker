<?php


/**
 * Table tl_filepicker
 */
$GLOBALS['TL_DCA']['tl_filepicker'] = array
(

	// Config
	'config' => array
	(
		'label'                       => $GLOBALS['TL_CONFIG']['websiteTitle'],
		'dataContainer'               => 'Table',
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'search'                  => true,
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'singleSRC' => array
		(
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'mandatory'=>true, 'files'=>true),
			'sql'                     => "varchar(255) NOT NULL default ''"
		)
	)
);


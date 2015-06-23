<?php
$skins = array(
	"style-default" => "#c72a25",
	"alizarin-crimson" => "#f04848",
	"green-army" =>	array(
		"primaryColor" => "#8cb147",
	),	
	"brown" => array(
		"primaryColor" => "#b2603b",
		"linkColor" => "#a43434"
	),
	"purple-gray" => array(
		"primaryColor" => "#9962a6",
		"linkColor" => "#4e99cf"
	),
	"blue-gray" => array(
		"primaryColor" => "#6388ca",
		"linkColor" => "#bf5f5f"
	),
	"purple-wine" => "#c85279",

	"black-and-white" => "#4e4e4e",
	"amazon" => array(
		"primaryColor" => "#55ad9c",
	),
	"amber" => array(
		"primaryColor" => "#bcbc53",
		"linkColor" => "#a54e4e"
	),
	"android-green" => array(
		"primaryColor" => "#86ae55",
		"linkColor" => "#557fbf"
	),
	"antique-brass" =>  array(
		"primaryColor" => "#B3998A",
		"linkColor" => "#6fbbb6"
	),
	"antique-bronze" => array(
		"primaryColor" => "#8D8D6E",
		"linkColor" => "#a05555"
	),
	"artichoke" => array(
		"primaryColor" => "#8d9a65",
		"linkColor" => "#9a5656"
	),
	"atomic-tangerine" => array(
		"primaryColor" => "#ce7744",
		"linkColor" => "#bb3838"
	),
	"bazaar" => array(
		"primaryColor" => "#98777B",
		"linkColor" => "#a09141",
		"secondaryColor" => "#98777B"
	),
	"bistre-brown" => array(
		"primaryColor" => "#b09343",
		"linkColor" => "#4378b5"

	),
	"bittersweet" => "#cd6450",
	"blueberry" => array(
		"primaryColor" => "#5b6fc1",
		"linkColor" => "#3da8d9"
	),
	"bud-green" => array(
		"primaryColor" => "#518445",
		"linkColor" => "#955b3f"

	),
	"burnt-sienna" => "#c86f61"

);

$primaryColor = isset($_GET['skin']) ? (is_array($skins[$_GET['skin']]) ? $skins[$_GET['skin']]['primaryColor'] : $skins[$_GET['skin']]) : $skins["style-default"];
$dangerColor = "#b55151";
$successColor = "#609450";
$warningColor = "#ab7a4b";
$inverseColor = "#45484d";
$infoColor = '#4a8bc2';
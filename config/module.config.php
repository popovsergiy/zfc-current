<?php
namespace Agere\Current;

return [
	'controller_plugins' => [
		'invokables' => [
			'current' => 'Agere\Current\Plugin\Current',
		]
	],
	'view_helpers' => [
		'invokables' => [
			'current' => 'Agere\Current\Helper\Current',
		],
	],
];
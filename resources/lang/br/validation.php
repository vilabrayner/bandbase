<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "O :attribute precisa ser aceitado.",
	"active_url"           => "O :attribute não é uma URL válida.",
	"after"                => "O :attribute precisa ser uma data após :date.",
	"alpha"                => "O :attribute deve apenas conter letras.",
	"alpha_dash"           => "O :attribute deve apenas conter letras, números, e traços.",
	"alpha_num"            => "O :attribute deve apenas conter letras e números.",
	"array"                => "O :attribute Deve ser um array.",
	"before"               => "O :attribute deve ser uma data antes de :date.",
	"between"              => [
		"numeric" => "O :attribute deve ser entre :min e :max.",
		"file"    => "O :attribute deve ser entre :min e :max kilobytes.",
		"string"  => "O :attribute deve ser entre :min e :max characters.",
		"array"   => "O :attribute deve ser entre :min e :max itens.",
	],
	"boolean"              => "O :attribute field must be true or false.",
	"confirmed"            => "O :attribute confirmation does not match.",
	"date"                 => "O :attribute is not a valid date.",
	"date_format"          => "O :attribute does not match the format :format.",
	"different"            => "O :attribute and :other must be different.",
	"digits"               => "O :attribute must be :digits digits.",
	"digits_between"       => "O :attribute must be between :min and :max digits.",
	"email"                => "O :attribute must be a valid email address.",
	"filled"               => "O :attribute field is required.",
	"exists"               => "O selected :attribute is invalid.",
	"image"                => "O :attribute must be an image.",
	"in"                   => "O selected :attribute is invalid.",
	"integer"              => "O :attribute must be an integer.",
	"ip"                   => "O :attribute must be a valid IP address.",
	"max"                  => [
		"numeric" => "The :attribute may not be greater than :max.",
		"file"    => "The :attribute may not be greater than :max kilobytes.",
		"string"  => "The :attribute may not be greater than :max characters.",
		"array"   => "The :attribute may not have more than :max items.",
	],
	"mimes"                => "The :attribute must be a file of type: :values.",
	"min"                  => [
		"numeric" => "The :attribute must be at least :min.",
		"file"    => "The :attribute must be at least :min kilobytes.",
		"string"  => "The :attribute must be at least :min characters.",
		"array"   => "The :attribute must have at least :min items.",
	],
	"not_in"               => "The selected :attribute is invalid.",
	"numeric"              => "The :attribute must be a number.",
	"regex"                => "The :attribute format is invalid.",
	"required"             => "The :attribute field is required.",
	"required_if"          => "The :attribute field is required when :other is :value.",
	"required_with"        => "The :attribute field is required when :values is present.",
	"required_with_all"    => "The :attribute field is required when :values is present.",
	"required_without"     => "The :attribute field is required when :values is not present.",
	"required_without_all" => "The :attribute field is required when none of :values are present.",
	"same"                 => "The :attribute and :other must match.",
	"size"                 => [
		"numeric" => "The :attribute must be :size.",
		"file"    => "The :attribute must be :size kilobytes.",
		"string"  => "The :attribute must be :size characters.",
		"array"   => "The :attribute must contain :size items.",
	],
	"unique"               => "The :attribute has already been taken.",
	"url"                  => "The :attribute format is invalid.",
	"timezone"             => "The :attribute must be a valid zone.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => [
		'attribute-name' => [
			'rule-name' => 'custom-message',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [],

];

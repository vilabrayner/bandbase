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
	"boolean"              => "O :attribute campo deve ser verdadeiro ou falso.",
	"confirmed"            => "O :attribute confirmação não bate.",
	"date"                 => "O :attribute não é uma data válida.",
	"date_format"          => "O :attribute não bate como formato :format.",
	"different"            => "O :attribute e :other devem ser diferentes.",
	"digits"               => "O :attribute deve ter :digits dígitos.",
	"digits_between"       => "O :attribute deve ter entre :min e :max dígitos.",
	"email"                => "O :attribute deve ser um endereço de email válido.",
	"filled"               => "O :attribute campo é obrigatório.",
	"exists"               => "O :attribute selecionado é inválido.",
	"image"                => "O :attribute deve ser uma imagem.",
	"in"                   => "O :attribute selecionado é inválido.",
	"integer"              => "O :attribute deve ser um inteiro.",
	"ip"                   => "O :attribute deve ser um endereço de IP válido.",
	"max"                  => [
		"numeric" => "O :attribute não deve ser maior que :max.",
		"file"    => "O :attribute não deve ser maior que :max kilobytes.",
		"string"  => "O :attribute não deve ser maior que :max caracteres.",
		"array"   => "O :attribute não deve ter mais que :max itens.",
	],
	"mimes"                => "O :attribute deve ser do tipo: :values.",
	"min"                  => [
		"numeric" => "O :attribute deve ter pelo menos :min.",
		"file"    => "O :attribute deve ter pelo menos :min kilobytes.",
		"string"  => "O :attribute deve ter pelo menos :min caracteres.",
		"array"   => "O :attribute deve ter pelo menos :min itens.",
	],
	"not_in"               => "O :attribute selecionado é inválido.",
	"numeric"              => "O :attribute deve ser um número.",
	"regex"                => "O :attribute formato é inválido.",
	"required"             => "O :attribute campo é obrigatório.",
	"required_if"          => "O :attribute campo é obrogatório quando :other for :value.",
	"required_with"        => "O :attribute campo é obrogatório quando :values for presente.",
	"required_with_all"    => "O :attribute campo é obrogatório quando :values for presente.",
	"required_without"     => "O :attribute campo é obrogatório quando :values não for presente.",
	"required_without_all" => "O :attribute campo é obrogatório quando nenhum dos :values forem presentes.",
	"same"                 => "O :attribute e :other devem bater.",
	"size"                 => [
		"numeric" => "O :attribute deve ter :size.",
		"file"    => "O :attribute deve ter :size kilobytes.",
		"string"  => "O :attribute deve ter :size caracteres.",
		"array"   => "O :attribute deve conter :size itens.",
	],
	"unique"               => "O :attribute já foi utilizado.",
	"url"                  => "O :attribute formato é inválido.",
	"timezone"             => "O :attribute deve ser uma zona válida.",

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

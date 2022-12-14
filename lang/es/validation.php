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

    'accepted' => ':Attribute debe ser aceptado.',
    'accepted_if' => ':Attribute debe ser aceptado cuando :other sea :value.',
    'active_url' => ':Attribute no es una URL válida.',
    'after' => ':Attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => ':Attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => ':Attribute sólo debe contener letras.',
    'alpha_dash' => ':Attribute sólo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => ':Attribute sólo debe contener letras y números.',
    'array' => ':Attribute debe ser un conjunto.',
    'ascii' => 'The :attribute must only contain single-byte alphanumeric characters and symbols.',
    'attached' => 'Este :attribute ya se adjuntó.',
    'before' => ':Attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => ':Attribute debe ser una fecha anterior o igual a :date.',
    'between.array' => ':Attribute tiene que tener entre :min - :max elementos.',
    'between.file' => ':Attribute debe pesar entre :min - :max kilobytes.',
    'between.numeric' => ':Attribute tiene que estar entre :min - :max.',
    'between.string' => ':Attribute tiene que tener entre :min - :max caracteres.',
    'boolean' => 'El campo :attribute debe tener un valor verdadero o falso.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'date' => ':Attribute no es una fecha válida.',
    'date_equals' => ':Attribute debe ser una fecha igual a :date.',
    'date_format' => ':Attribute no corresponde al formato :format.',
    'declined' => ':Attribute debe ser rechazado.',
    'declined_if' => ':Attribute debe ser rechazado cuando :other sea :value.',
    'different' => ':Attribute y :other deben ser diferentes.',
    'digits' => ':Attribute debe tener :digits dígitos.',
    'digits_between' => ':Attribute debe tener entre :min y :max dígitos.',
    'dimensions' => 'Las dimensiones de la imagen :attribute no son válidas.',
    'distinct' => 'El campo :attribute contiene un valor duplicado.',
    'doesnt_end_with' => 'El campo :attribute no puede finalizar con uno de los siguientes: :values.',
    'doesnt_start_with' => 'El campo :attribute no puede comenzar con uno de los siguientes: :values.',
    'email' => ':Attribute no es un correo válido.',
    'ends_with' => 'El campo :attribute debe finalizar con uno de los siguientes valores: :values',
    'enum' => 'El :attribute seleccionado es inválido.',
    'exists' => 'El :attribute seleccionado es inválido.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute es obligatorio.',
    'gt.array' => 'El campo :attribute debe tener más de :value elementos.',
    'gt.file' => 'El campo :attribute debe tener más de :value kilobytes.',
    'gt.numeric' => 'El campo :attribute debe ser mayor que :value.',
    'gt.string' => 'El campo :attribute debe tener más de :value caracteres.',
    'gte.array' => 'El campo :attribute debe tener como mínimo :value elementos.',
    'gte.file' => 'El campo :attribute debe tener como mínimo :value kilobytes.',
    'gte.numeric' => 'El campo :attribute debe ser como mínimo :value.',
    'gte.string' => 'El campo :attribute debe tener como mínimo :value caracteres.',
    'image' => ':Attribute debe ser una imagen.',
    'in' => ':Attribute es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => ':Attribute debe ser un número entero.',
    'ip' => ':Attribute debe ser una dirección IP válida.',
    'ipv4' => ':Attribute debe ser una dirección IPv4 válida.',
    'ipv6' => ':Attribute debe ser una dirección IPv6 válida.',
    'json' => 'El campo :attribute debe ser una cadena JSON válida.',
    'lowercase' => 'El campo :attribute debe estar en minúscula.',
    'lt.array' => 'El campo :attribute debe tener menos de :value elementos.',
    'lt.file' => 'El campo :attribute debe tener menos de :value kilobytes.',
    'lt.numeric' => 'El campo :attribute debe ser menor que :value.',
    'lt.string' => 'El campo :attribute debe tener menos de :value caracteres.',
    'lte.array' => 'El campo :attribute debe tener como máximo :value elementos.',
    'lte.file' => 'El campo :attribute debe tener como máximo :value kilobytes.',
    'lte.numeric' => 'El campo :attribute debe ser como máximo :value.',
    'lte.string' => 'El campo :attribute debe tener como máximo :value caracteres.',
    'mac_address' => 'El campo :attribute debe ser una dirección MAC válida.',
    'max.array' => ':Attribute no debe tener más de :max elementos.',
    'max.file' => ':Attribute no debe ser mayor que :max kilobytes.',
    'max.numeric' => ':Attribute no debe ser mayor que :max.',
    'max.string' => ':Attribute no debe ser mayor que :max caracteres.',
    'max_digits' => 'El campo :attribute no debe tener más de :max dígitos.',
    'mimes' => ':Attribute debe ser un archivo con formato: :values.',
    'mimetypes' => ':Attribute debe ser un archivo con formato: :values.',
    'min.array' => ':Attribute debe tener al menos :min elementos.',
    'min.file' => 'El tamaño de :attribute debe ser de al menos :min kilobytes.',
    'min.numeric' => 'El tamaño de :attribute debe ser de al menos :min.',
    'min.string' => ':Attribute debe contener al menos :min caracteres.',
    'min_digits' => 'El campo :attribute debe tener al menos :min dígitos.',
    'multiple_of' => 'El campo :attribute debe ser múltiplo de :value',
    'not_in' => ':Attribute es inválido.',
    'not_regex' => 'El formato del campo :attribute no es válido.',
    'numeric' => ':Attribute debe ser numérico.',
    'present' => 'El campo :attribute debe estar presente.',
    'prohibited' => 'El campo :attribute está prohibido.',
    'prohibited_if' => 'El campo :attribute está prohibido cuando :other es :value.',
    'prohibited_unless' => 'El campo :attribute está prohibido a menos que :other sea :values.',
    'prohibits' => 'El campo :attribute prohibe que :other esté presente.',
    'regex' => 'El formato de :attribute es inválido.',
    'relatable' => 'Este :attribute no se puede asociar con este recurso',
    'required' => 'El campo :attribute es obligatorio.',
    'required_array_keys' => 'El campo :attribute debe contener entradas para: :values.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_if_accepted' => 'El campo :attribute es obligatorio si :other es aceptado.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values está presente.',
    'same' => ':Attribute y :other deben coincidir.',
    'size.array' => ':Attribute debe contener :size elementos.',
    'size.file' => 'El tamaño de :attribute debe ser :size kilobytes.',
    'size.numeric' => 'El tamaño de :attribute debe ser :size.',
    'size.string' => ':Attribute debe contener :size caracteres.',
    'starts_with' => 'El campo :attribute debe comenzar con uno de los siguientes valores: :values',
    'string' => 'El campo :attribute debe ser una cadena de caracteres.',
    'timezone' => ':Attribute debe ser una zona horaria válida.',
    'ulid' => 'The :attribute must be a valid ULID.',
    'unique' => 'El campo :attribute ya ha sido registrado.',
    'uploaded' => 'Subir :attribute ha fallado.',
    'uppercase' => 'El campo :attribute debe estar en mayúscula.',
    'url' => ':Attribute debe ser una URL válida.',
    'uuid' => 'El campo :attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as 'E-Mail Address' instead
    | of 'email'. This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'title' => 'título',
        'body' => 'cuerpo',
    ],

];

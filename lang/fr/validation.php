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

    'accepted' => 'Le :attribute doit être accepté.',
    'accepted_if' => 'Le :attribute doit être accepté lorsque :other est :value.',
    'active_url' => 'Le :attribute n\'est pas une URL valide.',
    'after' => 'Le :attribute doit être une date postérieure au :date.',
    'after_or_equal' => 'Le :attribute doit être une date postérieure ou égale au :date.',
    'alpha' => 'Le :attribute ne peut contenir que des lettres.',
    'alpha_dash' => 'Le :attribute ne peut contenir que des lettres, des chiffres, des tirets et des underscores.',
    'alpha_num' => 'Le :attribute ne peut contenir que des lettres et des chiffres.',
    'array' => 'Le :attribute doit être un tableau.',
    'ascii' => 'Le :attribute ne peut contenir que des caractères ASCII.',
    'before' => 'Le :attribute doit être une date antérieure au :date.',
    'before_or_equal' => 'Le :attribute doit être une date antérieure ou égale au :date.',
    'between' => [
        'array' => 'Le :attribute doit avoir entre :min et :max éléments.',
        'file' => 'Le :attribute doit être compris entre :min et :max kilooctets.',
        'numeric' => 'Le :attribute doit être compris entre :min et :max.',
        'string' => 'Le :attribute doit être compris entre :min et :max caractères.',
    ],
    'boolean' => 'Le :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Le :attribute n\'est pas une date valide.',
    'date_equals' => 'Le :attribute doit être une date égale à :date.',
    'date_format' => 'Le :attribute ne correspond pas au format :format.',
    'declined' => 'Le :attribute doit être refusé.',
    'declined_if' => 'Le :attribute doit être refusé lorsque :other est :value.',
    'different' => 'Le :attribute et :other doivent être différents.',
    'digits' => 'Le :attribute doit être de :digits chiffres.',
    'digits_between' => 'Le :attribute doit être compris entre :min et :max chiffres.',
    'dimensions' => 'La taille de l\'image :attribute n\'est pas valide.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'doesnt_end_with' => 'Le :attribute ne peut pas se terminer par l\'un des éléments suivants : :values.',
    'doesnt_start_with' => 'Le :attribute ne peut pas commencer par l\'un des éléments suivants : :values.',
    'email' => 'Le :attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le :attribute doit se terminer par l\'un des éléments suivants : :values.',
    'enum' => 'Le :attribute sélectionné n\'est pas valide.',
    'exists' => 'Le :attribute sélectionné n\'est pas valide.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'array' => 'Le :attribute doit avoir plus de :value éléments.',
        'file' => 'Le :attribute doit être supérieur à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être supérieur à :value.',
        'string' => 'Le :attribute doit être supérieur à :value caractères.',
    ],
    'gte' => [
        'array' => 'Le :attribute doit avoir :value éléments ou plus.',
        'file' => 'Le :attribute doit être supérieur ou égal à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être supérieur ou égal à :value.',
        'string' => 'Le :attribute doit être supérieur ou égal à :value caractères.',
    ],
    'image' => 'Le :attribute doit être une image.',
    'in' => 'Le :attribute sélectionné n\'est pas valide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Le :attribute doit être un entier.',
    'ip' => 'Le :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le :attribute doit être une chaîne JSON valide.',
    'lowercase' => 'Le :attribute doit être en minuscules.',
    'lt' => [
        'array' => 'Le :attribute doit avoir moins de :value éléments.',
        'file' => 'Le :attribute doit être inférieur à :value kilo-octets.',
        'numeric' => 'Le :attribute doit être inférieur à :value.',
        'string' => 'Le :attribute doit être inférieur à :value caractères.',
    ],
    'lte' => [
        'array' => 'Le :attribute ne doit pas avoir plus de :value éléments.',
        'file' => 'Le :attribute ne doit pas être supérieur à :value kilo-octets.',
        'numeric' => 'Le :attribute ne doit pas être supérieur à :value.',
        'string' => 'Le :attribute ne doit pas être supérieur à :value caractères.',
    ],
    'mac_address' => 'Le :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => 'Le :attribute ne doit pas avoir plus de :max éléments.',
        'file' => 'Le :attribute ne doit pas être supérieur à :max kilo-octets.',
        'numeric' => 'Le :attribute ne doit pas être supérieur à :max.',
        'string' => 'Le :attribute ne doit pas être supérieur à :max caractères.',
    ],
    'max_digits' => 'Le :attribute ne doit pas avoir plus de :max chiffres.',
    'mimes' => 'Le :attribute doit être un fichier de type :values.',
    'mimetypes' => 'Le :attribute doit être un fichier de type :values.',
    'min' => [
        'array' => 'Le :attribute doit avoir au moins :min éléments.',
        'file' => 'Le :attribute doit être supérieur ou égal à :min kilo-octets.',
        'numeric' => 'Le :attribute doit être supérieur ou égal à :min.',
        'string' => 'Le :attribute doit être supérieur ou égal à :min caractères.',
    ],
    'min_digits' => 'Le :attribute doit avoir au moins :min chiffres.',
    'multiple_of' => 'Le :attribute doit être un multiple de :value.',
    'not_in' => 'La valeur sélectionnée pour le :attribute n’est pas valide.',
    'not_regex' => 'Le format du :attribute est invalide.',
    'numeric' => 'Le :attribute doit être un nombre.',
    'password' => [
        'letters' => 'Le :attribute doit contenir au moins une lettre.',
        'mixed' => 'Le :attribute doit contenir au moins une lettre majuscule et une lettre minuscule.',
        'numbers' => 'Le :attribute doit contenir au moins un chiffre.',
        'symbols' => 'Le :attribute doit contenir au moins un symbole.',
        'uncompromised' => 'Le :attribute a été révélé dans une fuite de données. Veuillez en choisir un autre.',
    ],
    'present' => 'Le champ :attribute doit être présent.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit quand :other est :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit sauf si :other est dans :values.',
    'prohibits' => 'Le champ :attribute interdit la présence de :other.',
    'regex' => 'Le format du :attribute est invalide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_array_keys' => 'Le champ :attribute doit contenir des entrées pour :values.',
    'required_if' => 'Le champ :attribute est obligatoire quand :other est :value.',
    'required_if_accepted' => 'Le champ :attribute est obligatoire quand :other est accepté.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all' => 'Le champ :attribute est obligatoire quand :values sont présents.',
    'required_without' => 'Le champ :attribute est obligatoire quand :values n’est pas présent.',
    'required_without_all' => 'Le champ :attribute est obligatoire quand aucun de :values n’est présent.',
    'same' => 'Le :attribute et :other doivent correspondre.',
    'size' => [
        'array' => 'Le :attribute doit contenir :size éléments.',
        'file' => 'Le :attribute doit être :size kilo-octets.',
        'numeric' => 'Le :attribute doit être :size.',
        'string' => 'Le :attribute doit contenir :size caractères.',
    ],
    'starts_with' => 'Le :attribute doit commencer par une des valeurs suivantes : :values.',
    'string' => 'Le :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le :attribute doit être un fuseau horaire valide.',
    'unique' => 'La valeur du :attribute est déjà utilisée.',
    'uploaded' => 'Le :attribute n’a pu être téléchargé.',
    'uppercase' => 'Le :attribute doit être en majuscules.',
    'url' => 'Le format de l’URL du :attribute n’est pas valide.',
    'ulid' => 'Le :attribute doit être un ULID valide.',
    'uuid' => 'Le :attribute doit être un UUID valide.',

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
            'rule-name' => 'message-custom',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'body.text' => 'Texte du corps',
        'bodyVariables.*.value' => 'valeur de variable',
        'variables.*.value' => 'valeur de variable',
        'variables.*.name' => 'nom de variable',
        'templateId' => 'modèle',
        'ticketId' => 'ticket',
        'template_id' => 'modèle',
        'components.1.type' => 'type',
        'whatsapp_account_id' => 'compte WhatsApp',
        'ticket_id' => 'ticket',
        'password_confirmation' => 'confirmation du mot de passe',
        'message_id' => 'message',
        'footer.text' => 'Texte de pied de page',
        'buttons.*.phone_number' => 'numéro de téléphone',
        'buttons.*.text' => 'texte',
        'buttons.*.type' => 'type',
        'buttons.*.url' => 'URL',
        'buttons.*.quick_reply' => 'réponse rapide',
        'header.text' => 'Texte d\'en-tête',
        'header.format' => 'format',
        'category' => 'catégorie',
        'language' => 'langage',
        'name' => 'nom',
        'description' => 'description',
        'commission' => 'commission',
        'time' => 'temps',
    ],

];

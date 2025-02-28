<?php

return [
    /*
|----------------------------------------------------------------------
| Validation Language Lines
|----------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

    'accepted' => ':attribute laukas turi būti priimtas.',
    'accepted_if' => ':attribute laukas turi būti priimtas, kai :other yra :value.',
    'active_url' => ':attribute laukas turi būti galiojantis URL.',
    'after' => ':attribute laukas turi būti data po :date.',
    'after_or_equal' => ':attribute laukas turi būti data po arba lygi :date.',
    'alpha' => ':attribute laukas turi turėti tik raides.',
    'alpha_dash' => ':attribute laukas turi turėti tik raides, skaičius, brūkšnelius ir pabraukimus.',
    'alpha_num' => ':attribute laukas turi turėti tik raides ir skaičius.',
    'array' => ':attribute laukas turi būti masyvas.',
    'ascii' => ':attribute laukas turi turėti tik vieno baito alfanumerinius simbolius ir ženklus.',
    'before' => ':attribute laukas turi būti data prieš :date.',
    'before_or_equal' => ':attribute laukas turi būti data prieš arba lygi :date.',
    'between' => [
        'array' => ':attribute laukas turi turėti nuo :min iki :max elementų.',
        'file' => ':attribute laukas turi būti nuo :min iki :max kilobaitų.',
        'numeric' => ':attribute laukas turi būti nuo :min iki :max.',
        'string' => ':attribute laukas turi būti nuo :min iki :max simbolių.',
    ],
    'boolean' => ':attribute laukas turi būti tiesa arba klaida.',
    'can' => ':attribute laukas turi neteisingą vertę.',
    'confirmed' => ':attribute lauko patvirtinimas nesutampa.',
    'contains' => ':attribute laukas trūksta reikalingos vertės.',
    'current_password' => 'Slaptažodis neteisingas.',
    'date' => ':attribute laukas turi būti galiojanti data.',
    'date_equals' => ':attribute laukas turi būti data lygi :date.',
    'date_format' => ':attribute laukas turi atitikti formatą :format.',
    'decimal' => ':attribute laukas turi turėti :decimal dešimtainių vietų.',
    'declined' => ':attribute laukas turi būti atmestas.',
    'declined_if' => ':attribute laukas turi būti atmestas, kai :other yra :value.',
    'different' => ':attribute laukas ir :other turi būti skirtingi.',
    'digits' => ':attribute laukas turi turėti :digits skaitmenis.',
    'digits_between' => ':attribute laukas turi turėti nuo :min iki :max skaitmenų.',
    'dimensions' => ':attribute laukas turi neteisingas vaizdo matmenis.',
    'distinct' => ':attribute laukas turi pasikartojančią vertę.',
    'doesnt_end_with' => ':attribute laukas neturi baigtis viena iš šių reikšmių: :values.',
    'doesnt_start_with' => ':attribute laukas neturi prasidėti viena iš šių reikšmių: :values.',
    'email' => ':attribute laukas turi būti galiojantis el. pašto adresas.',
    'ends_with' => ':attribute laukas turi baigtis viena iš šių reikšmių: :values.',
    'enum' => 'Pasirinktas :attribute yra neteisingas.',
    'exists' => 'Pasirinktas :attribute yra neteisingas.',
    'extensions' => ':attribute laukas turi turėti vieną iš šių plėtinių: :values.',
    'file' => ':attribute laukas turi būti failas.',
    'filled' => ':attribute laukas turi turėti reikšmę.',
    'gt' => [
        'array' => ':attribute laukas turi turėti daugiau nei :value elementų.',
        'file' => ':attribute laukas turi būti didesnis nei :value kilobaitai.',
        'numeric' => ':attribute laukas turi būti didesnis nei :value.',
        'string' => ':attribute laukas turi būti ilgesnis nei :value simboliai.',
    ],
    'gte' => [
        'array' => ':attribute laukas turi turėti :value elementų arba daugiau.',
        'file' => ':attribute laukas turi būti didesnis nei arba lygus :value kilobaitams.',
        'numeric' => ':attribute laukas turi būti didesnis arba lygus :value.',
        'string' => ':attribute laukas turi būti ilgesnis arba lygus :value simboliams.',
    ],
    'hex_color' => ':attribute laukas turi būti galiojantis šešioliktainis spalvos kodas.',
    'image' => ':attribute laukas turi būti vaizdas.',
    'in' => 'Pasirinktas :attribute yra neteisingas.',
    'in_array' => ':attribute laukas turi egzistuoti :other.',
    'integer' => ':attribute laukas turi būti sveikasis skaičius.',
    'ip' => ':attribute laukas turi būti galiojantis IP adresas.',
    'ipv4' => ':attribute laukas turi būti galiojantis IPv4 adresas.',
    'ipv6' => ':attribute laukas turi būti galiojantis IPv6 adresas.',
    'json' => ':attribute laukas turi būti galiojantis JSON eilutė.',
    'list' => ':attribute laukas turi būti sąrašas.',
    'lowercase' => ':attribute laukas turi būti mažosiomis raidėmis.',
    'lt' => [
        'array' => ':attribute laukas turi turėti mažiau nei :value elementų.',
        'file' => ':attribute laukas turi būti mažesnis nei :value kilobaitai.',
        'numeric' => ':attribute laukas turi būti mažesnis nei :value.',
        'string' => ':attribute laukas turi būti trumpesnis nei :value simboliai.',
    ],
    'lte' => [
        'array' => ':attribute laukas neturi turėti daugiau nei :value elementų.',
        'file' => ':attribute laukas turi būti mažesnis arba lygus :value kilobaitams.',
        'numeric' => ':attribute laukas turi būti mažesnis arba lygus :value.',
        'string' => ':attribute laukas turi būti trumpesnis arba lygus :value simboliams.',
    ],
    'mac_address' => ':attribute laukas turi būti galiojantis MAC adresas.',
    'max' => [
        'array' => ':attribute laukas neturi turėti daugiau nei :max elementų.',
        'file' => ':attribute laukas neturi viršyti :max kilobaitų.',
        'numeric' => ':attribute laukas neturi būti didesnis nei :max.',
        'string' => ':attribute laukas neturi viršyti :max simbolių.',
    ],
    'max_digits' => ':attribute laukas neturi turėti daugiau nei :max skaitmenų.',
    'mimes' => ':attribute laukas turi būti tipo failas: :values.',
    'mimetypes' => ':attribute laukas turi būti tipo failas: :values.',
    'min' => [
        'array' => ':attribute laukas turi turėti bent :min elementų.',
        'file' => ':attribute laukas turi būti bent :min kilobaitų.',
        'numeric' => ':attribute laukas turi būti bent :min.',
        'string' => ':attribute laukas turi būti bent :min simbolių.',
    ],
    'min_digits' => ':attribute laukas turi turėti bent :min skaitmenų.',
    'missing' => ':attribute laukas turi trūkti.',
    'missing_if' => ':attribute laukas turi trūkti, kai :other yra :value.',
    'missing_unless' => ':attribute laukas turi trūkti, nebent :other yra :value.',
    'missing_with' => ':attribute laukas turi trūkti, kai :values yra pateikti.',
    'missing_with_all' => ':attribute laukas turi trūkti, kai :values yra pateikti.',
    'multiple_of' => ':attribute laukas turi būti :value dauginys.',
    'not_in' => 'Pasirinktas :attribute yra neteisingas.',
    'not_regex' => ':attribute lauko formatas neteisingas.',
    'numeric' => ':attribute laukas turi būti skaičius.',
    'password' => [
        'letters' => ':attribute laukas turi turėti bent vieną raidę.',
        'mixed' => ':attribute laukas turi turėti bent vieną didžiąją ir vieną mažąją raidę.',
        'numbers' => ':attribute laukas turi turėti bent vieną skaičių.',
        'symbols' => ':attribute laukas turi turėti bent vieną simbolį.',
        'uncompromised' => 'Pateiktas :attribute buvo paviešintas duomenų nutekėjimo atveju. Pasirinkite kitą :attribute.',
    ],
    'present' => ':attribute laukas turi būti pateiktas.',
    'present_if' => ':attribute laukas turi būti pateiktas, kai :other yra :value.',
    'present_unless' => ':attribute laukas turi būti pateiktas, nebent :other yra :value.',
    'present_with' => ':attribute laukas turi būti pateiktas, kai :values yra pateikti.',
    'present_with_all' => ':attribute laukas turi būti pateiktas, kai :values yra pateikti.',
    'prohibited' => ':attribute laukas yra uždraustas.',
    'prohibited_if' => ':attribute laukas yra uždraustas, kai :other yra :value.',
    'prohibited_unless' => ':attribute laukas yra uždraustas, nebent :other yra :values.',
    'prohibits' => ':attribute laukas draudžia :other būti pateiktam.',
    'regex' => ':attribute lauko formatas neteisingas.',
    'required' => ':attribute laukas yra privalomas.',
    'required_array_keys' => ':attribute laukas turi turėti įrašus su: :values.',
    'required_if' => ':attribute laukas yra privalomas, kai :other yra :value.',
    'required_if_accepted' => ':attribute laukas yra privalomas, kai :other yra priimtas.',
    'required_if_declined' => ':attribute laukas yra privalomas, kai :other yra atmestas.',
    'required_unless' => ':attribute laukas yra privalomas, nebent :other yra :values.',
    'required_with' => ':attribute laukas yra privalomas, kai :values yra pateikti.',
    'required_with_all' => ':attribute laukas yra privalomas, kai :values yra pateikti.',
    'required_without' => ':attribute laukas yra privalomas, kai :values nėra pateikti.',
    'required_without_all' => ':attribute laukas yra privalomas, kai nė viena iš :values nėra pateikta.',
    'same' => ':attribute laukas turi atitikti :other.',
    'size' => [
        'array' => ':attribute laukas turi turėti :size elementų.',
        'file' => ':attribute laukas turi būti :size kilobaitų.',
        'numeric' => ':attribute laukas turi būti :size.',
        'string' => ':attribute laukas turi būti :size simbolių.',
    ],
    'starts_with' => ':attribute laukas turi prasidėti viena iš šių reikšmių: :values.',
    'string' => ':attribute laukas turi būti eilutė.',
    'timezone' => ':attribute laukas turi būti galiojanti laiko juosta.',
    'unique' => ':attribute jau buvo užimtas.',
    'uploaded' => ':attribute nepavyko įkelti.',
    'uppercase' => ':attribute laukas turi būti didžiosiomis raidėmis.',
    'url' => ':attribute laukas turi būti galiojantis URL.',
    'ulid' => ':attribute laukas turi būti galiojantis ULID.',
    'uuid' => ':attribute laukas turi būti galiojantis UUID.',

    /*
    |----------------------------------------------------------------------
    | Custom Validation Language Lines
    |----------------------------------------------------------------------
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
    |----------------------------------------------------------------------
    | Custom Validation Attributes
    |----------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

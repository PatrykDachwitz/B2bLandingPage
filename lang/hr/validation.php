<?php

return [
    /*
|---------------------------------------------------------------------------
| Validation Language Lines
|---------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

    'accepted' => 'Polje :attribute mora biti prihvaćeno.',
    'accepted_if' => 'Polje :attribute mora biti prihvaćeno kada je :other :value.',
    'active_url' => 'Polje :attribute mora biti važeća URL adresa.',
    'after' => 'Polje :attribute mora biti datum nakon :date.',
    'after_or_equal' => 'Polje :attribute mora biti datum nakon ili jednak :date.',
    'alpha' => 'Polje :attribute može sadržavati samo slova.',
    'alpha_dash' => 'Polje :attribute može sadržavati samo slova, brojeve, crtice i donje crte.',
    'alpha_num' => 'Polje :attribute može sadržavati samo slova i brojeve.',
    'array' => 'Polje :attribute mora biti niz.',
    'ascii' => 'Polje :attribute može sadržavati samo jedno-bajtne alfanumeričke znakove i simbole.',
    'before' => 'Polje :attribute mora biti datum prije :date.',
    'before_or_equal' => 'Polje :attribute mora biti datum prije ili jednak :date.',
    'between' => [
        'array' => 'Polje :attribute mora imati između :min i :max stavki.',
        'file' => 'Polje :attribute mora imati između :min i :max kilobajta.',
        'numeric' => 'Polje :attribute mora biti između :min i :max.',
        'string' => 'Polje :attribute mora imati između :min i :max znakova.',
    ],
    'boolean' => 'Polje :attribute mora biti istinito ili lažno.',
    'can' => 'Polje :attribute sadrži nedozvoljenu vrijednost.',
    'confirmed' => 'Potvrda polja :attribute se ne podudara.',
    'contains' => 'Polje :attribute nedostaje obavezna vrijednost.',
    'current_password' => 'Lozinka je netočna.',
    'date' => 'Polje :attribute mora biti važeći datum.',
    'date_equals' => 'Polje :attribute mora biti datum jednak :date.',
    'date_format' => 'Polje :attribute mora odgovarati formatu :format.',
    'decimal' => 'Polje :attribute mora imati :decimal decimalnih mjesta.',
    'declined' => 'Polje :attribute mora biti odbijeno.',
    'declined_if' => 'Polje :attribute mora biti odbijeno kada je :other :value.',
    'different' => 'Polje :attribute i :other moraju biti različiti.',
    'digits' => 'Polje :attribute mora imati :digits znamenki.',
    'digits_between' => 'Polje :attribute mora imati između :min i :max znamenki.',
    'dimensions' => 'Polje :attribute ima nevažeće dimenzije slike.',
    'distinct' => 'Polje :attribute ima dupliciranu vrijednost.',
    'doesnt_end_with' => 'Polje :attribute ne smije završavati s jednim od sljedećih: :values.',
    'doesnt_start_with' => 'Polje :attribute ne smije početi s jednim od sljedećih: :values.',
    'email' => 'Polje :attribute mora biti važeća email adresa.',
    'ends_with' => 'Polje :attribute mora završavati s jednim od sljedećih: :values.',
    'enum' => 'Odabrano :attribute je nevažeće.',
    'exists' => 'Odabrano :attribute je nevažeće.',
    'extensions' => 'Polje :attribute mora imati jednu od sljedećih ekstenzija: :values.',
    'file' => 'Polje :attribute mora biti datoteka.',
    'filled' => 'Polje :attribute mora imati vrijednost.',
    'gt' => [
        'array' => 'Polje :attribute mora imati više od :value stavki.',
        'file' => 'Polje :attribute mora biti veće od :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti veće od :value.',
        'string' => 'Polje :attribute mora biti duže od :value znakova.',
    ],
    'gte' => [
        'array' => 'Polje :attribute mora imati :value stavki ili više.',
        'file' => 'Polje :attribute mora biti veće od ili jednako :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti veće od ili jednako :value.',
        'string' => 'Polje :attribute mora biti duže od ili jednako :value znakova.',
    ],
    'hex_color' => 'Polje :attribute mora biti važeća heksadecimalna boja.',
    'image' => 'Polje :attribute mora biti slika.',
    'in' => 'Odabrano :attribute je nevažeće.',
    'in_array' => 'Polje :attribute mora postojati u :other.',
    'integer' => 'Polje :attribute mora biti cijeli broj.',
    'ip' => 'Polje :attribute mora biti važeća IP adresa.',
    'ipv4' => 'Polje :attribute mora biti važeća IPv4 adresa.',
    'ipv6' => 'Polje :attribute mora biti važeća IPv6 adresa.',
    'json' => 'Polje :attribute mora biti važeći JSON string.',
    'list' => 'Polje :attribute mora biti popis.',
    'lowercase' => 'Polje :attribute mora biti napisano malim slovima.',
    'lt' => [
        'array' => 'Polje :attribute mora imati manje od :value stavki.',
        'file' => 'Polje :attribute mora biti manja od :value kilobajta.',
        'numeric' => 'Polje :attribute mora biti manja od :value.',
        'string' => 'Polje :attribute mora imati manje od :value znakova.',
    ],
    'lte' => [
        'array' => 'Polje :attribute ne smije imati više od :value stavki.',
        'file' => 'Polje :attribute ne smije biti veće od :value kilobajta.',
        'numeric' => 'Polje :attribute ne smije biti veće od :value.',
        'string' => 'Polje :attribute ne smije imati više od :value znakova.',
    ],
    'mac_address' => 'Polje :attribute mora biti važeća MAC adresa.',
    'max' => [
        'array' => 'Polje :attribute ne smije imati više od :max stavki.',
        'file' => 'Polje :attribute ne smije biti veće od :max kilobajta.',
        'numeric' => 'Polje :attribute ne smije biti veće od :max.',
        'string' => 'Polje :attribute ne smije imati više od :max znakova.',
    ],
    'max_digits' => 'Polje :attribute ne smije imati više od :max znamenki.',
    'mimes' => 'Polje :attribute mora biti datoteka tipa: :values.',
    'mimetypes' => 'Polje :attribute mora biti datoteka tipa: :values.',
    'min' => [
        'array' => 'Polje :attribute mora imati najmanje :min stavki.',
        'file' => 'Polje :attribute mora imati najmanje :min kilobajta.',
        'numeric' => 'Polje :attribute mora biti najmanje :min.',
        'string' => 'Polje :attribute mora imati najmanje :min znakova.',
    ],
    'min_digits' => 'Polje :attribute mora imati najmanje :min znamenki.',
    'missing' => 'Polje :attribute mora biti nedostajuće.',
    'missing_if' => 'Polje :attribute mora biti nedostajuće kada je :other :value.',
    'missing_unless' => 'Polje :attribute mora biti nedostajuće osim ako :other nije :value.',
    'missing_with' => 'Polje :attribute mora biti nedostajuće kada su :values prisutne.',
    'missing_with_all' => 'Polje :attribute mora biti nedostajuće kada su :values prisutne.',
    'multiple_of' => 'Polje :attribute mora biti višekratnik od :value.',
    'not_in' => 'Odabrano :attribute je nevažeće.',
    'not_regex' => 'Format polja :attribute je nevažeći.',
    'numeric' => 'Polje :attribute mora biti broj.',
    'password' => [
        'letters' => 'Polje :attribute mora sadržavati barem jedno slovo.',
        'mixed' => 'Polje :attribute mora sadržavati barem jedno veliko i jedno malo slovo.',
        'numbers' => 'Polje :attribute mora sadržavati barem jedan broj.',
        'symbols' => 'Polje :attribute mora sadržavati barem jedan simbol.',
        'uncompromised' => 'Polje :attribute je bilo kompromitirano u curenju podataka. Odaberite drugo polje :attribute.',
    ],
    'present' => 'Polje :attribute mora biti prisutno.',
    'present_if' => 'Polje :attribute mora biti prisutno kada je :other :value.',
    'present_unless' => 'Polje :attribute mora biti prisutno osim ako :other nije :value.',
    'present_with' => 'Polje :attribute mora biti prisutno kada su :values prisutne.',
    'present_with_all' => 'Polje :attribute mora biti prisutno kada su :values prisutne.',
    'prohibited' => 'Polje :attribute je zabranjeno.',
    'prohibited_if' => 'Polje :attribute je zabranjeno kada je :other :value.',
    'prohibited_unless' => 'Polje :attribute je zabranjeno osim ako :other nije u :values.',
    'prohibits' => 'Polje :attribute zabranjuje :other da bude prisutno.',
    'regex' => 'Format polja :attribute je nevažeći.',
    'required' => 'Polje :attribute je obavezno.',
    'required_array_keys' => 'Polje :attribute mora sadržavati unose za: :values.',
    'required_if' => 'Polje :attribute je obavezno kada je :other :value.',
    'required_if_accepted' => 'Polje :attribute je obavezno kada je :other prihvaćeno.',
    'required_if_declined' => 'Polje :attribute je obavezno kada je :other odbijeno.',
    'required_unless' => 'Polje :attribute je obavezno osim ako :other nije u :values.',
    'required_with' => 'Polje :attribute je obavezno kada su :values prisutne.',
    'required_with_all' => 'Polje :attribute je obavezno kada su :values prisutne.',
    'required_without' => 'Polje :attribute je obavezno kada :values nisu prisutne.',
    'required_without_all' => 'Polje :attribute je obavezno kada nijedno od :values nije prisutno.',
    'same' => 'Polje :attribute mora odgovarati :other.',
    'size' => [
        'array' => 'Polje :attribute mora sadržavati :size stavki.',
        'file' => 'Polje :attribute mora biti :size kilobajta.',
        'numeric' => 'Polje :attribute mora biti :size.',
        'string' => 'Polje :attribute mora biti :size znakova.',
    ],
    'starts_with' => 'Polje :attribute mora početi s jednim od sljedećih: :values.',
    'string' => 'Polje :attribute mora biti niz.',
    'timezone' => 'Polje :attribute mora biti važeća vremenska zona.',
    'unique' => 'Polje :attribute je već zauzeto.',
    'uploaded' => 'Polje :attribute nije uspjelo učitati.',
    'uppercase' => 'Polje :attribute mora biti napisano velikim slovima.',
    'url' => 'Polje :attribute mora biti važeća URL adresa.',
    'ulid' => 'Polje :attribute mora biti važeći ULID.',
    'uuid' => 'Polje :attribute mora biti važeći UUID.',

    /*
    |---------------------------------------------------------------------------
    | Custom Validation Language Lines
    |---------------------------------------------------------------------------
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
    |---------------------------------------------------------------------------
    | Custom Validation Attributes
    |---------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

<?php

return [
    /*
|---------------------------------------------------------------------------
| Validation Language Lines
|---------------------------------------------------------------------------
|
| A következő nyelvi sorok a validátor osztály által használt alapértelmezett
| hibaüzeneteket tartalmazzák. Néhány szabálynak több verziója van, mint például
| a méret szabályoknak. Nyugodtan módosítsa ezeket az üzeneteket itt.
|
*/

    'accepted' => 'A :attribute mezőnek el kell fogadva lennie.',
    'accepted_if' => 'A :attribute mezőnek el kell fogadva lennie, amikor :other :value.',
    'active_url' => 'A :attribute mezőnek érvényes URL-nek kell lennie.',
    'after' => 'A :attribute mezőnek :date utáni dátumnak kell lennie.',
    'after_or_equal' => 'A :attribute mezőnek :date utáni vagy egyenlő dátumnak kell lennie.',
    'alpha' => 'A :attribute mezőnek csak betűket kell tartalmaznia.',
    'alpha_dash' => 'A :attribute mezőnek csak betűket, számokat, kötőjeleket és aláhúzásokat kell tartalmaznia.',
    'alpha_num' => 'A :attribute mezőnek csak betűket és számokat kell tartalmaznia.',
    'array' => 'A :attribute mezőnek tömbnek kell lennie.',
    'ascii' => 'A :attribute mezőnek csak egysoros, alfanumerikus karaktereket és szimbólumokat kell tartalmaznia.',
    'before' => 'A :attribute mezőnek :date előtti dátumnak kell lennie.',
    'before_or_equal' => 'A :attribute mezőnek :date előtti vagy egyenlő dátumnak kell lennie.',
    'between' => [
        'array' => 'A :attribute mezőnek :min és :max elem között kell lennie.',
        'file' => 'A :attribute mezőnek :min és :max kilobyte között kell lennie.',
        'numeric' => 'A :attribute mezőnek :min és :max között kell lennie.',
        'string' => 'A :attribute mezőnek :min és :max karakter között kell lennie.',
    ],
    'boolean' => 'A :attribute mezőnek igaznak vagy hamisnak kell lennie.',
    'can' => 'A :attribute mező egy jogosulatlan értéket tartalmaz.',
    'confirmed' => 'A :attribute mező megerősítése nem egyezik.',
    'contains' => 'A :attribute mező hiányzik egy kötelező érték.',
    'current_password' => 'A jelszó helytelen.',
    'date' => 'A :attribute mezőnek érvényes dátumnak kell lennie.',
    'date_equals' => 'A :attribute mezőnek :date egyenlő dátumnak kell lennie.',
    'date_format' => 'A :attribute mezőnek meg kell egyeznie a következő formátummal: :format.',
    'decimal' => 'A :attribute mezőnek :decimal tizedesjegynek kell lennie.',
    'declined' => 'A :attribute mezőnek el kell utasítva lennie.',
    'declined_if' => 'A :attribute mezőnek el kell utasítva lennie, amikor :other :value.',
    'different' => 'A :attribute mezőnek és :other-nak különbözőnek kell lennie.',
    'digits' => 'A :attribute mezőnek :digits számjegyűnek kell lennie.',
    'digits_between' => 'A :attribute mezőnek :min és :max számjegy között kell lennie.',
    'dimensions' => 'A :attribute mezőnek érvénytelen kép dimenzióinak kell lennie.',
    'distinct' => 'A :attribute mezőnek duplikált értéke van.',
    'doesnt_end_with' => 'A :attribute mezőnek nem szabad az alábbiak egyikével végződnie: :values.',
    'doesnt_start_with' => 'A :attribute mezőnek nem szabad az alábbiak egyikével kezdődnie: :values.',
    'email' => 'A :attribute mezőnek érvényes e-mail címnek kell lennie.',
    'ends_with' => 'A :attribute mezőnek az alábbiak egyikével kell végződnie: :values.',
    'enum' => 'A kiválasztott :attribute érvénytelen.',
    'exists' => 'A kiválasztott :attribute érvénytelen.',
    'extensions' => 'A :attribute mezőnek az alábbi kiterjesztések egyikével kell rendelkeznie: :values.',
    'file' => 'A :attribute mezőnek fájlnak kell lennie.',
    'filled' => 'A :attribute mezőnek értékkel kell rendelkeznie.',
    'gt' => [
        'array' => 'A :attribute mezőnek több mint :value elemnek kell lennie.',
        'file' => 'A :attribute mezőnek nagyobbnak kell lennie, mint :value kilobyte.',
        'numeric' => 'A :attribute mezőnek nagyobbnak kell lennie, mint :value.',
        'string' => 'A :attribute mezőnek hosszabbnak kell lennie, mint :value karakter.',
    ],
    'gte' => [
        'array' => 'A :attribute mezőnek legalább :value elemnek kell lennie.',
        'file' => 'A :attribute mezőnek nagyobbnak vagy egyenlőnek kell lennie, mint :value kilobyte.',
        'numeric' => 'A :attribute mezőnek nagyobbnak vagy egyenlőnek kell lennie, mint :value.',
        'string' => 'A :attribute mezőnek legalább :value karakternek kell lennie.',
    ],
    'hex_color' => 'A :attribute mezőnek érvényes hexadecimális színnek kell lennie.',
    'image' => 'A :attribute mezőnek képfájlnak kell lennie.',
    'in' => 'A kiválasztott :attribute érvénytelen.',
    'in_array' => 'A :attribute mezőnek léteznie kell a következőben: :other.',
    'integer' => 'A :attribute mezőnek egész számnak kell lennie.',
    'ip' => 'A :attribute mezőnek érvényes IP-címnek kell lennie.',
    'ipv4' => 'A :attribute mezőnek érvényes IPv4 címnek kell lennie.',
    'ipv6' => 'A :attribute mezőnek érvényes IPv6 címnek kell lennie.',
    'json' => 'A :attribute mezőnek érvényes JSON sztringnek kell lennie.',
    'list' => 'A :attribute mezőnek listának kell lennie.',
    'lowercase' => 'A :attribute mezőnek kisbetűsnek kell lennie.',
    'lt' => [
        'array' => 'A :attribute mezőnek kevesebb mint :value elemnek kell lennie.',
        'file' => 'A :attribute mezőnek kevesebbnek kell lennie, mint :value kilobyte.',
        'numeric' => 'A :attribute mezőnek kevesebbnek kell lennie, mint :value.',
        'string' => 'A :attribute mezőnek kevesebb mint :value karakterből kell állnia.',
    ],
    'lte' => [
        'array' => 'A :attribute mezőnek nem lehet több, mint :value elem.',
        'file' => 'A :attribute mezőnek kevesebbnek vagy egyenlőnek kell lennie, mint :value kilobyte.',
        'numeric' => 'A :attribute mezőnek kevesebbnek vagy egyenlőnek kell lennie, mint :value.',
        'string' => 'A :attribute mezőnek kevesebbnek vagy egyenlőnek kell lennie, mint :value karakter.',
    ],
    'mac_address' => 'A :attribute mezőnek érvényes MAC-címnek kell lennie.',
    'max' => [
        'array' => 'A :attribute mezőnek nem lehet több, mint :max elem.',
        'file' => 'A :attribute mezőnek nem lehet több, mint :max kilobyte.',
        'numeric' => 'A :attribute mezőnek nem lehet több, mint :max.',
        'string' => 'A :attribute mezőnek nem lehet több, mint :max karakter.',
    ],
    'max_digits' => 'A :attribute mezőnek nem lehet több, mint :max számjegy.',
    'mimes' => 'A :attribute mezőnek a következő típusú fájlnak kell lennie: :values.',
    'mimetypes' => 'A :attribute mezőnek a következő típusú fájlnak kell lennie: :values.',
    'min' => [
        'array' => 'A :attribute mezőnek legalább :min elemnek kell lennie.',
        'file' => 'A :attribute mezőnek legalább :min kilobyte-nak kell lennie.',
        'numeric' => 'A :attribute mezőnek legalább :min-nak kell lennie.',
        'string' => 'A :attribute mezőnek legalább :min karakterből kell állnia.',
    ],
    'min_digits' => 'A :attribute mezőnek legalább :min számjegyűnek kell lennie.',
    'missing' => 'A :attribute mezőnek hiányoznia kell.',
    'missing_if' => 'A :attribute mezőnek hiányoznia kell, amikor :other :value.',
    'missing_unless' => 'A :attribute mezőnek hiányoznia kell, kivéve, ha :other :value.',
    'missing_with' => 'A :attribute mezőnek hiányoznia kell, amikor :values jelen van.',
    'missing_with_all' => 'A :attribute mezőnek hiányoznia kell, amikor :values jelen van.',
    'multiple_of' => 'A :attribute mezőnek :value többszöröse kell legyen.',
    'not_in' => 'A kiválasztott :attribute érvénytelen.',
    'not_regex' => 'A :attribute mező formátuma érvénytelen.',
    'numeric' => 'A :attribute mezőnek számnak kell lennie.',
    'password' => [
        'letters' => 'A :attribute mezőnek legalább egy betűt kell tartalmaznia.',
        'mixed' => 'A :attribute mezőnek legalább egy nagybetűt és egy kisbetűt kell tartalmaznia.',
        'numbers' => 'A :attribute mezőnek legalább egy számot kell tartalmaznia.',
        'symbols' => 'A :attribute mezőnek legalább egy szimbólumot kell tartalmaznia.',
        'uncompromised' => 'A megadott :attribute megjelent egy adatlopás során. Kérlek válassz másik :attribute-t.',
    ],
    'present' => 'A :attribute mezőnek jelen kell lennie.',
    'present_if' => 'A :attribute mezőnek jelen kell lennie, amikor :other :value.',
    'present_unless' => 'A :attribute mezőnek jelen kell lennie, hacsak :other nem :value.',
    'present_with' => 'A :attribute mezőnek jelen kell lennie, amikor :values jelen van.',
    'present_with_all' => 'A :attribute mezőnek jelen kell lennie, amikor :values jelen van.',
    'prohibited' => 'A :attribute mező tilos.',
    'prohibited_if' => 'A :attribute mező tilos, amikor :other :value.',
    'prohibited_unless' => 'A :attribute mező tilos, kivéve, ha :other :values között van.',
    'prohibits' => 'A :attribute mező megakadályozza :other jelenlétét.',
    'regex' => 'A :attribute mező formátuma érvénytelen.',
    'required' => 'A :attribute mező kötelező.',
    'required_array_keys' => 'A :attribute mezőnek tartalmaznia kell a következő bejegyzéseket: :values.',
    'required_if' => 'A :attribute mezőnek kötelezőnek kell lennie, amikor :other :value.',
    'required_if_accepted' => 'A :attribute mezőnek kötelezőnek kell lennie, amikor :other el van fogadva.',
    'required_if_declined' => 'A :attribute mezőnek kötelezőnek kell lennie, amikor :other el van utasítva.',
    'required_unless' => 'A :attribute mezőnek kötelezőnek kell lennie, kivéve, ha :other :values között van.',
    'required_with' => 'A :attribute mezőnek kötelezőnek kell lennie, amikor :values jelen van.',
    'required_with_all' => 'A :attribute mezőnek kötelezőnek kell lennie, amikor :values jelen van.',
    'required_without' => 'A :attribute mezőnek kötelezőnek kell lennie, amikor :values nincs jelen.',
    'required_without_all' => 'A :attribute mezőnek kötelezőnek kell lennie, amikor egyetlen :values sincs jelen.',
    'same' => 'A :attribute mezőnek egyeznie kell :other-val.',
    'size' => [
        'array' => 'A :attribute mezőnek :size elemnek kell lennie.',
        'file' => 'A :attribute mezőnek :size kilobyte-nak kell lennie.',
        'numeric' => 'A :attribute mezőnek :size-nak kell lennie.',
        'string' => 'A :attribute mezőnek :size karakterből kell állnia.',
    ],
    'starts_with' => 'A :attribute mezőnek az alábbiak egyikével kell kezdődnie: :values.',
    'string' => 'A :attribute mezőnek szövegnek kell lennie.',
    'timezone' => 'A :attribute mezőnek érvényes időzónának kell lennie.',
    'unique' => 'A :attribute már foglalt.',
    'uploaded' => 'A :attribute feltöltése sikertelen.',
    'uppercase' => 'A :attribute mezőnek nagybetűsnek kell lennie.',
    'url' => 'A :attribute mezőnek érvényes URL-nek kell lennie.',
    'ulid' => 'A :attribute mezőnek érvényes ULID-nek kell lennie.',
    'uuid' => 'A :attribute mezőnek érvényes UUID-nak kell lennie.',

    /*
    |---------------------------------------------------------------------------
    | Custom Validation Language Lines
    |---------------------------------------------------------------------------
    |
    | Itt meghatározhatja a testreszabott validálási üzeneteket az attribútumok
    | számára az "attribute.rule" konvencióval a sorok elnevezésére. Ez gyorsan
    | lehetővé teszi egy adott attribútumszabály egyedi testreszabott nyelvi sorának
    | meghatározását.
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
    | A következő nyelvi sorokat az attribútum helyettesítők barátságosabb
    | megjelenítéséhez használják, például "E-Mail cím" helyett "email".
    | Ez egyszerűen segít kifejezőbbé tenni üzenetünket.
    |
    */

    'attributes' => [],

];

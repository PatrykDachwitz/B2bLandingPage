<?php

return [
    /*
|----------------------------------------------------------------------
| Kinnituse keelejooned
|----------------------------------------------------------------------
|
| Järgmised keelejooned sisaldavad vaikeveateateid, mida kasutab
| valideerimisklass. Mõned neist reeglitest on mitme versiooniga,
| näiteks suuruse reeglid. Muutke neid sõnumeid vastavalt vajadusele.
|
*/

    'accepted' => ':attribute väli peab olema aktsepteeritud.',
    'accepted_if' => ':attribute väli peab olema aktsepteeritud, kui :other on :value.',
    'active_url' => ':attribute väli peab olema kehtiv URL.',
    'after' => ':attribute väli peab olema kuupäev, mis on pärast :date.',
    'after_or_equal' => ':attribute väli peab olema kuupäev, mis on pärast või võrdne :date-ga.',
    'alpha' => ':attribute väli võib sisaldada ainult tähti.',
    'alpha_dash' => ':attribute väli võib sisaldada ainult tähti, numbreid, sidekriipse ja allkriipse.',
    'alpha_num' => ':attribute väli võib sisaldada ainult tähti ja numbreid.',
    'array' => ':attribute väli peab olema massiiv.',
    'ascii' => ':attribute väli võib sisaldada ainult ühebaidilisi alfanumeerseid märke ja sümboleid.',
    'before' => ':attribute väli peab olema kuupäev, mis on enne :date.',
    'before_or_equal' => ':attribute väli peab olema kuupäev, mis on enne või võrdne :date-ga.',
    'between' => [
        'array' => ':attribute väli peab sisaldama vähemalt :min ja maksimaalselt :max elementi.',
        'file' => ':attribute väli peab olema suurusega :min ja :max kilobaiti.',
        'numeric' => ':attribute väli peab olema vahemikus :min ja :max.',
        'string' => ':attribute väli peab sisaldama vähemalt :min ja maksimaalselt :max tähemärki.',
    ],
    'boolean' => ':attribute väli peab olema tõene või vale.',
    'can' => ':attribute väli sisaldab lubamatut väärtust.',
    'confirmed' => ':attribute väli ei ühti kinnitusega.',
    'contains' => ':attribute väli puudub vajalik väärtus.',
    'current_password' => 'Parool on vale.',
    'date' => ':attribute väli peab olema kehtiv kuupäev.',
    'date_equals' => ':attribute väli peab olema kuupäev, mis on võrdne :date-ga.',
    'date_format' => ':attribute väli peab vastama formaadile :format.',
    'decimal' => ':attribute väli peab sisaldama :decimal kümnendkohti.',
    'declined' => ':attribute väli peab olema keeldunud.',
    'declined_if' => ':attribute väli peab olema keeldunud, kui :other on :value.',
    'different' => ':attribute väli ja :other peavad olema erinevad.',
    'digits' => ':attribute väli peab olema :digits numbrit.',
    'digits_between' => ':attribute väli peab sisaldama vähemalt :min ja maksimaalselt :max numbrit.',
    'dimensions' => ':attribute väli sisaldab vigaseid pildi mõõtmeid.',
    'distinct' => ':attribute väli sisaldab dubleeritud väärtust.',
    'doesnt_end_with' => ':attribute väli ei tohi lõppeda ühe järgmistest väärtustest: :values.',
    'doesnt_start_with' => ':attribute väli ei tohi alata ühe järgmistest väärtustest: :values.',
    'email' => ':attribute väli peab olema kehtiv e-posti aadress.',
    'ends_with' => ':attribute väli peab lõppema ühe järgmistest väärtustest: :values.',
    'enum' => 'Valitud :attribute on kehtetu.',
    'exists' => 'Valitud :attribute on kehtetu.',
    'extensions' => ':attribute väli peab sisaldama ühte järgmistest laienditest: :values.',
    'file' => ':attribute väli peab olema fail.',
    'filled' => ':attribute väli peab sisaldama väärtust.',
    'gt' => [
        'array' => ':attribute väli peab sisaldama rohkem kui :value elementi.',
        'file' => ':attribute väli peab olema suurem kui :value kilobaiti.',
        'numeric' => ':attribute väli peab olema suurem kui :value.',
        'string' => ':attribute väli peab olema pikem kui :value tähemärki.',
    ],
    'gte' => [
        'array' => ':attribute väli peab sisaldama vähemalt :value elementi.',
        'file' => ':attribute väli peab olema suurem või võrdne :value kilobaitiga.',
        'numeric' => ':attribute väli peab olema suurem või võrdne :value-ga.',
        'string' => ':attribute väli peab olema vähemalt :value tähemärki.',
    ],
    'hex_color' => ':attribute väli peab olema kehtiv heksadesimaalne värv.',
    'image' => ':attribute väli peab olema pilt.',
    'in' => 'Valitud :attribute on kehtetu.',
    'in_array' => ':attribute väli peab eksisteerima :other sees.',
    'integer' => ':attribute väli peab olema täisarv.',
    'ip' => ':attribute väli peab olema kehtiv IP aadress.',
    'ipv4' => ':attribute väli peab olema kehtiv IPv4 aadress.',
    'ipv6' => ':attribute väli peab olema kehtiv IPv6 aadress.',
    'json' => ':attribute väli peab olema kehtiv JSON string.',
    'list' => ':attribute väli peab olema nimekiri.',
    'lowercase' => ':attribute väli peab olema väiketähtedega.',
    'lt' => [
        'array' => ':attribute väli peab sisaldama vähem kui :value elementi.',
        'file' => ':attribute väli peab olema väiksem kui :value kilobaiti.',
        'numeric' => ':attribute väli peab olema väiksem kui :value.',
        'string' => ':attribute väli peab olema lühem kui :value tähemärki.',
    ],
    'lte' => [
        'array' => ':attribute väli ei tohi sisaldada rohkem kui :value elementi.',
        'file' => ':attribute väli ei tohi olla suurem kui :value kilobaiti.',
        'numeric' => ':attribute väli ei tohi olla suurem kui :value.',
        'string' => ':attribute väli ei tohi sisaldada rohkem kui :value tähemärki.',
    ],
    'mac_address' => ':attribute väli peab olema kehtiv MAC aadress.',
    'max' => [
        'array' => ':attribute väli ei tohi sisaldada rohkem kui :max elementi.',
        'file' => ':attribute väli ei tohi ületada :max kilobaiti.',
        'numeric' => ':attribute väli ei tohi ületada :max.',
        'string' => ':attribute väli ei tohi ületada :max tähemärki.',
    ],
    'max_digits' => ':attribute väli ei tohi sisaldada rohkem kui :max numbrit.',
    'mimes' => ':attribute väli peab olema fail, mille tüüp on: :values.',
    'mimetypes' => ':attribute väli peab olema fail, mille tüüp on: :values.',
    'min' => [
        'array' => ':attribute väli peab sisaldama vähemalt :min elementi.',
        'file' => ':attribute väli peab olema vähemalt :min kilobaiti.',
        'numeric' => ':attribute väli peab olema vähemalt :min.',
        'string' => ':attribute väli peab olema vähemalt :min tähemärki.',
    ],
    'min_digits' => ':attribute väli peab sisaldama vähemalt :min numbrit.',
    'missing' => ':attribute väli peab olema puudulik.',
    'missing_if' => ':attribute väli peab olema puudulik, kui :other on :value.',
    'missing_unless' => ':attribute väli peab olema puudulik, välja arvatud kui :other on :value.',
    'missing_with' => ':attribute väli peab olema puudulik, kui :values on olemas.',
    'missing_with_all' => ':attribute väli peab olema puudulik, kui :values on olemas.',
    'multiple_of' => ':attribute väli peab olema :value kordne.',
    'not_in' => 'Valitud :attribute on kehtetu.',
    'not_regex' => ':attribute väli formaat on vigane.',
    'numeric' => ':attribute väli peab olema number.',
    'password' => [
        'letters' => ':attribute väli peab sisaldama vähemalt ühte tähte.',
        'mixed' => ':attribute väli peab sisaldama vähemalt ühte suurt ja ühte väikest tähte.',
        'numbers' => ':attribute väli peab sisaldama vähemalt ühte numbrit.',
        'symbols' => ':attribute väli peab sisaldama vähemalt ühte sümbolit.',
        'uncompromised' => 'Antud :attribute on lekkinud. Palun vali mõni teine :attribute.',
    ],
    'present' => ':attribute väli peab olema kohal.',
    'present_if' => ':attribute väli peab olema kohal, kui :other on :value.',
    'present_unless' => ':attribute väli peab olema kohal, välja arvatud kui :other on :value.',
    'present_with' => ':attribute väli peab olema kohal, kui :values on kohal.',
    'present_with_all' => ':attribute väli peab olema kohal, kui :values on kõik kohal.',
    'prohibited' => ':attribute väli on keelatud.',
    'prohibited_if' => ':attribute väli on keelatud, kui :other on :value.',
    'prohibited_unless' => ':attribute väli on keelatud, välja arvatud kui :other on väärtustes :values.',
    'prohibits' => ':attribute väli keelab :other olemasolu.',
    'regex' => ':attribute väli formaat on vigane.',
    'required' => ':attribute väli on kohustuslik.',
    'required_array_keys' => ':attribute väli peab sisaldama järgmisi kirjeid: :values.',
    'required_if' => ':attribute väli on kohustuslik, kui :other on :value.',
    'required_if_accepted' => ':attribute väli on kohustuslik, kui :other on aktsepteeritud.',
    'required_if_declined' => ':attribute väli on kohustuslik, kui :other on keeldunud.',
    'required_unless' => ':attribute väli on kohustuslik, välja arvatud kui :other on väärtustes :values.',
    'required_with' => ':attribute väli on kohustuslik, kui :values on kohal.',
    'required_with_all' => ':attribute väli on kohustuslik, kui :values on kõik kohal.',
    'required_without' => ':attribute väli on kohustuslik, kui :values ei ole kohal.',
    'required_without_all' => ':attribute väli on kohustuslik, kui mitte ükski :values ei ole kohal.',
    'same' => ':attribute väli peab vastama :other-le.',
    'size' => [
        'array' => ':attribute väli peab sisaldama täpselt :size elementi.',
        'file' => ':attribute väli peab olema :size kilobaiti.',
        'numeric' => ':attribute väli peab olema :size.',
        'string' => ':attribute väli peab olema :size tähemärki.',
    ],
    'starts_with' => ':attribute väli peab algama ühe järgmistest väärtustest: :values.',
    'string' => ':attribute väli peab olema string.',
    'timezone' => ':attribute väli peab olema kehtiv ajavöönd.',
    'unique' => ':attribute on juba võetud.',
    'uploaded' => ':attribute üleslaadimine ebaõnnestus.',
    'uppercase' => ':attribute väli peab olema suurtähtedega.',
    'url' => ':attribute väli peab olema kehtiv URL.',
    'ulid' => ':attribute väli peab olema kehtiv ULID.',
    'uuid' => ':attribute väli peab olema kehtiv UUID.',

    /*
    |----------------------------------------------------------------------
    | Kohandatud kinnituste keelejooned
    |----------------------------------------------------------------------
    |
    | Siin saate määrata kohandatud kinnituste sõnumid atribuutide jaoks,
    | kasutades konventsiooni "attribute.rule", et määrata kindel
    | kohandatud keelejoon antud atribuudi reegli jaoks.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |----------------------------------------------------------------------
    | Kohandatud kinnituste atribuudid
    |----------------------------------------------------------------------
    |
    | Järgmised keelejooned asendavad meie atribuudiplatšeri millegi
    | lugemiseks sõbralikumaga, nagu "E-maili aadress" asemel "email".
    | See aitab meil muuta meie sõnumid rohkem väljendusrikkaks.
    |
    */

    'attributes' => [],

];

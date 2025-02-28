<?php

return [
    /*
|---------------------------------------------------------------------------
| Validation Language Lines
|---------------------------------------------------------------------------
|
| Aşağıdaki dil satırları, doğrulayıcı sınıf tarafından kullanılan varsayılan hata mesajlarını içerir.
| Bu kuralların bazıları, boyut kuralları gibi birden fazla versiyona sahiptir.
| Bu mesajların her birini burada değiştirmekten çekinmeyin.
|
*/

    'accepted' => ':attribute alanı kabul edilmelidir.',
    'accepted_if' => ':attribute alanı :other :value olduğunda kabul edilmelidir.',
    'active_url' => ':attribute alanı geçerli bir URL olmalıdır.',
    'after' => ':attribute alanı :date tarihinden sonra bir tarih olmalıdır.',
    'after_or_equal' => ':attribute alanı :date tarihinden sonra veya ona eşit bir tarih olmalıdır.',
    'alpha' => ':attribute alanı yalnızca harfler içermelidir.',
    'alpha_dash' => ':attribute alanı yalnızca harfler, rakamlar, tireler ve alt çizgiler içermelidir.',
    'alpha_num' => ':attribute alanı yalnızca harfler ve rakamlar içermelidir.',
    'array' => ':attribute alanı bir dizi olmalıdır.',
    'ascii' => ':attribute alanı yalnızca tek baytlık alfanümerik karakterler ve semboller içermelidir.',
    'before' => ':attribute alanı :date tarihinden önce bir tarih olmalıdır.',
    'before_or_equal' => ':attribute alanı :date tarihinden önce veya ona eşit bir tarih olmalıdır.',
    'between' => [
        'array' => ':attribute alanında :min ile :max arasında öğe olmalıdır.',
        'file' => ':attribute alanı :min ile :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute alanı :min ile :max arasında olmalıdır.',
        'string' => ':attribute alanı :min ile :max karakter arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'can' => ':attribute alanı yetkisiz bir değer içeriyor.',
    'confirmed' => ':attribute alanı onayı eşleşmiyor.',
    'contains' => ':attribute alanı gerekli bir değeri eksik.',
    'current_password' => 'Şifre hatalı.',
    'date' => ':attribute alanı geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute alanı :date ile eşit bir tarih olmalıdır.',
    'date_format' => ':attribute alanı :format formatıyla eşleşmelidir.',
    'decimal' => ':attribute alanı :decimal ondalık basamağa sahip olmalıdır.',
    'declined' => ':attribute alanı reddedilmelidir.',
    'declined_if' => ':attribute alanı :other :value olduğunda reddedilmelidir.',
    'different' => ':attribute alanı ve :other farklı olmalıdır.',
    'digits' => ':attribute alanı :digits basamak olmalıdır.',
    'digits_between' => ':attribute alanı :min ile :max basamak arasında olmalıdır.',
    'dimensions' => ':attribute alanı geçersiz resim boyutlarına sahiptir.',
    'distinct' => ':attribute alanı tekrarlanan bir değere sahiptir.',
    'doesnt_end_with' => ':attribute alanı şu değerlerden biriyle bitmemelidir: :values.',
    'doesnt_start_with' => ':attribute alanı şu değerlerden biriyle başlamamalıdır: :values.',
    'email' => ':attribute alanı geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute alanı şu değerlerden biriyle bitmelidir: :values.',
    'enum' => 'Seçilen :attribute geçersiz.',
    'exists' => 'Seçilen :attribute geçersiz.',
    'extensions' => ':attribute alanı şu uzantılardan birine sahip olmalıdır: :values.',
    'file' => ':attribute alanı bir dosya olmalıdır.',
    'filled' => ':attribute alanının bir değeri olmalıdır.',
    'gt' => [
        'array' => ':attribute alanı :value kadar öğe içermelidir.',
        'file' => ':attribute alanı :value kilobayttan büyük olmalıdır.',
        'numeric' => ':attribute alanı :value değerinden büyük olmalıdır.',
        'string' => ':attribute alanı :value karakterden büyük olmalıdır.',
    ],
    'gte' => [
        'array' => ':attribute alanı en az :value öğe içermelidir.',
        'file' => ':attribute alanı :value kilobayttan büyük veya ona eşit olmalıdır.',
        'numeric' => ':attribute alanı :value değerine büyük veya eşit olmalıdır.',
        'string' => ':attribute alanı :value karaktere büyük veya eşit olmalıdır.',
    ],
    'hex_color' => ':attribute alanı geçerli bir onaltılık renk olmalıdır.',
    'image' => ':attribute alanı bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersiz.',
    'in_array' => ':attribute alanı :other içinde mevcut olmalıdır.',
    'integer' => ':attribute alanı bir tamsayı olmalıdır.',
    'ip' => ':attribute alanı geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute alanı geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute alanı geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute alanı geçerli bir JSON dizesi olmalıdır.',
    'list' => ':attribute alanı bir liste olmalıdır.',
    'lowercase' => ':attribute alanı küçük harf olmalıdır.',
    'lt' => [
        'array' => ':attribute alanı :value kadar öğe içermemelidir.',
        'file' => ':attribute alanı :value kilobayttan küçük olmalıdır.',
        'numeric' => ':attribute alanı :value değerinden küçük olmalıdır.',
        'string' => ':attribute alanı :value karakterden küçük olmalıdır.',
    ],
    'lte' => [
        'array' => ':attribute alanı :value kadar öğe içermemelidir.',
        'file' => ':attribute alanı :value kilobayttan küçük veya eşit olmalıdır.',
        'numeric' => ':attribute alanı :value değerine küçük veya eşit olmalıdır.',
        'string' => ':attribute alanı :value karaktere küçük veya eşit olmalıdır.',
    ],
    'mac_address' => ':attribute alanı geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'array' => ':attribute alanı en fazla :max öğe içermelidir.',
        'file' => ':attribute alanı en fazla :max kilobayt olmalıdır.',
        'numeric' => ':attribute alanı en fazla :max olmalıdır.',
        'string' => ':attribute alanı en fazla :max karakter olmalıdır.',
    ],
    'max_digits' => ':attribute alanı en fazla :max basamağa sahip olmalıdır.',
    'mimes' => ':attribute alanı şu türde bir dosya olmalıdır: :values.',
    'mimetypes' => ':attribute alanı şu türde bir dosya olmalıdır: :values.',
    'min' => [
        'array' => ':attribute alanı en az :min öğe içermelidir.',
        'file' => ':attribute alanı en az :min kilobayt olmalıdır.',
        'numeric' => ':attribute alanı en az :min olmalıdır.',
        'string' => ':attribute alanı en az :min karakter olmalıdır.',
    ],
    'min_digits' => ':attribute alanı en az :min basamağa sahip olmalıdır.',
    'missing' => ':attribute alanı eksik olmalıdır.',
    'missing_if' => ':attribute alanı :other :value olduğunda eksik olmalıdır.',
    'missing_unless' => ':attribute alanı :other :value olmadığı sürece eksik olmalıdır.',
    'missing_with' => ':attribute alanı :values mevcut olduğunda eksik olmalıdır.',
    'missing_with_all' => ':attribute alanı :values mevcut olduğunda eksik olmalıdır.',
    'multiple_of' => ':attribute alanı :value katı olmalıdır.',
    'not_in' => 'Seçilen :attribute geçersiz.',
    'not_regex' => ':attribute alanı formatı geçersiz.',
    'numeric' => ':attribute alanı bir sayı olmalıdır.',
    'password' => [
        'letters' => ':attribute alanı en az bir harf içermelidir.',
        'mixed' => ':attribute alanı en az bir büyük harf ve bir küçük harf içermelidir.',
        'numbers' => ':attribute alanı en az bir rakam içermelidir.',
        'symbols' => ':attribute alanı en az bir sembol içermelidir.',
        'uncompromised' => 'Verilen :attribute bir veri sızıntısında yer aldı. Lütfen farklı bir :attribute seçin.',
    ],
    'present' => ':attribute alanı mevcut olmalıdır.',
    'present_if' => ':attribute alanı :other :value olduğunda mevcut olmalıdır.',
    'present_unless' => ':attribute alanı :other :value olmadığı sürece mevcut olmalıdır.',
    'present_with' => ':attribute alanı :values mevcut olduğunda mevcut olmalıdır.',
    'present_with_all' => ':attribute alanı :values mevcut olduğunda mevcut olmalıdır.',
    'prohibited' => ':attribute alanı yasaktır.',
    'prohibited_if' => ':attribute alanı :other :value olduğunda yasaktır.',
    'prohibited_unless' => ':attribute alanı :other :values içinde olmadığı sürece yasaktır.',
    'prohibits' => ':attribute alanı :other’ın mevcut olmasını engeller.',
    'regex' => ':attribute alanı formatı geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_array_keys' => ':attribute alanı şu değerler için girişler içermelidir: :values.',
    'required_if' => ':attribute alanı :other :value olduğunda gereklidir.',
    'required_if_accepted' => ':attribute alanı :other kabul edildiğinde gereklidir.',
    'required_if_declined' => ':attribute alanı :other reddedildiğinde gereklidir.',
    'required_unless' => ':attribute alanı :other :values içinde olmadığı sürece gereklidir.',
    'required_with' => ':attribute alanı :values mevcut olduğunda gereklidir.',
    'required_with_all' => ':attribute alanı :values mevcut olduğunda gereklidir.',
    'required_without' => ':attribute alanı :values mevcut olmadığında gereklidir.',
    'required_without_all' => ':attribute alanı :values’ın hiçbirinin mevcut olmadığı durumlarda gereklidir.',
    'same' => ':attribute alanı :other ile eşleşmelidir.',
    'size' => [
        'array' => ':attribute alanı :size öğe içermelidir.',
        'file' => ':attribute alanı :size kilobayt olmalıdır.',
        'numeric' => ':attribute alanı :size olmalıdır.',
        'string' => ':attribute alanı :size karakter olmalıdır.',
    ],
    'starts_with' => ':attribute alanı şu değerlerden biriyle başlamalıdır: :values.',
    'string' => ':attribute alanı bir dize olmalıdır.',
    'timezone' => ':attribute alanı geçerli bir zaman dilimi olmalıdır.',
    'unique' => ':attribute daha önce alınmış.',
    'uploaded' => ':attribute yüklenirken hata oluştu.',
    'uppercase' => ':attribute alanı büyük harf olmalıdır.',
    'url' => ':attribute alanı geçerli bir URL olmalıdır.',
    'ulid' => ':attribute alanı geçerli bir ULID olmalıdır.',
    'uuid' => ':attribute alanı geçerli bir UUID olmalıdır.',

    /*
    |---------------------------------------------------------------------------
    | Custom Validation Language Lines
    |---------------------------------------------------------------------------
    |
    | Burada, belirli bir attribute kuralı için özel bir dil satırı tanımlayabilirsiniz.
    | Bu, belirli bir attribute kuralı için özel bir dil satırını hızlıca belirlemenizi sağlar.
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
    | Aşağıdaki dil satırları, attribute yer tutucumuzu daha okuyucu dostu bir şeyle değiştirir
    | "E-Mail Address" yerine "email" gibi. Bu, mesajlarımızı daha anlamlı hale getirmemize yardımcı olur.
    |
    */

    'attributes' => [],

];

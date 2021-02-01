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

    'accepted' => ':attribute باید پذیرفته شود',
    'active_url' => ':attribute یک URL معتبر نیست.',
    'after' => ':attribute باید یک تاریخ بعد  :date. باشد',
    'after_or_equal' => ':attribute باید یک تاریخ بعد یا  :date. برابر با باشد',
    'alpha' => ':attribute ممکن است فقط نامه داشته باشد.',
    'alpha_dash' => ':attribute ممکن است فقط شامل حروف ، اعداد ، خط تیره و زیر خط باشد.',
    'alpha_num' => ':attribute ممکن است فقط شامل حروف و اعداد باشد.',
    'array' => ':attribute باید یک آرایه باشد.',
    'before' => ':attribute باید قبل از آن یک تاریخ  :date. باشد',
    'before_or_equal' => ':attribute باید یک تاریخ قبل یا برابر با آن  :date. باشد',
    'between' => [
        'numeric' => ':attribute باید بین  :min و :max. باشد',
        'file' => ':attribute باید بین  :min و :max کیلوبایت.',
        'string' => ':attribute باید بین  :min و :max کاراکتر.',
        'array' => ':attribute باید بین  :min و :max آیتم.',
    ],
    'boolean' => ':attribute فیلد باید درست یا نادرست باشد',
    'confirmed' => ':attribute تأیید مطابقت ندارد.',
    'date' => ':attribute یک تاریخ معتبر نیست.',
    'date_equals' => ':attribute باید یک تاریخ برابر با  :date. باشد',
    'date_format' => ':attribute با قالب :format  مطابقت ندارد.',
    'different' => ':attribute و :other باید متفاوت باشد',
    'digits' => ':attribute باید  :digits رقم باشد.',
    'digits_between' => ':attribute باید بین  :min و :max رقم باشد.',
    'dimensions' => ':attribute ابعاد تصویر نامعتبر است.',
    'distinct' => ':attribute فیلد یک مقدار تکراری دارد.',
    'email' => ':attribute باید  یک آدرس ایمیل معتبر.',
    'ends_with' => ':attribute باید با یکی از following: :values تمام شود.',
    'exists' => 'انتخاب شده :attribute نامعتبر است.',
    'file' => ':attribute باید  یک فایل باشد.',
    'filled' => ':attribute فیلد باید یک داده داشته باشد.',
    'gt' => [
        'numeric' => ':attribute باید  بیشتر از :value.',
        'file' => ':attribute باید  بیشتر از :value کیلوبایت.',
        'string' => ':attribute باید  بیشتر از :value کاراکتر.',
        'array' => ':attribute باید بیشتر از :value آیتم.',
    ],
    'gte' => [
        'numeric' => ':attribute باید  بیشتر از یا برابر :value.',
        'file' => ':attribute باید  بیشتر از یا برابر :value کیلوبایت.',
        'string' => ':attribute باید  بیشتر از یا برابر :value کاراکتر.',
        'array' => ':attribute باید برابر :value آیتم یا بیشتر.',
    ],
    'image' => ':attribute باید  عکس باشد',
    'in' => 'انتخاب شده :attribute نامعتبر است.',
    'in_array' => ':attribute فیلد وجود ندارد :other.',
    'integer' => ':attribute باید  عدد صحیح باشد.',
    'ip' => ':attribute باید  یک آدرس IP معتبر.',
    'ipv4' => ':attribute باید  یک آدرس معتبر IPv4.',
    'ipv6' => ':attribute باید  یک آدرس IPv6 معتبر.',
    'json' => ':attribute باید  یک رشته معتبر JSON.',
    'lt' => [
        'numeric' => ':attribute باید  کمتر از :value.',
        'file' => ':attribute باید  کمتر از :value کیلوبایت.',
        'string' => ':attribute باید  کمتر از :value کاراکتر.',
        'array' => ':attribute باید have کمتر از :value آیتم.',
    ],
    'lte' => [
        'numeric' => ':attribute باید  کمتر از یا برابر :value.',
        'file' => ':attribute باید  کمتر از یا برابر :value کیلوبایت.',
        'string' => ':attribute باید  کمتر از یا برابر :value کاراکتر.',
        'array' => ':attribute نباید بیشتر از :value آیتم.',
    ],
    'max' => [
        'numeric' => ':attribute ممکن است نباشد بیشتر از :max.',
        'file' => ':attribute ممکن است نباشد بیشتر از :max کیلوبایت.',
        'string' => ':attribute ممکن است نباشد بیشتر از :max کاراکتر.',
        'array' => ':attribute ممکن است نباشد بیشتر از :max آیتم.',
    ],
    'mimes' => ':attribute باید  پرونده ای از type: :values.',
    'mimetypes' => ':attribute باید  پرونده ای از type: :values.',
    'min' => [
        'numeric' => ':attribute باید  حداقل :min.',
        'file' => ':attribute باید  حداقل :min کیلوبایت.',
        'string' => ':attribute باید  حداقل :min کاراکتر.',
        'array' => ':attribute باید حداقل :min آیتم.',
    ],
    'multiple_of' => ':attribute باید  مضربی از :value.',
    'not_in' => 'انتخاب شده :attribute نامعتبر است.',
    'not_regex' => ':attribute فرمت نامعتبر است.',
    'numeric' => ':attribute باید  یک عدد باشد.',
    'password' => 'رمز عبور اشتباه است.',
    'present' => ':attribute فیلد باید  حاضر.',
    'regex' => ':attribute فرمت نامعتبر است.',
    'required' => ':attribute فیلد اجباری است.',
    'required_if' => ':attribute فیلد است مورد نیاز است  :other است:value.',
    'required_unless' => ':attribute فیلد است کمتر نیاز دارد :other استin :values.',
    'required_with' => ':attribute فیلد است مورد نیاز است  :values استpresent.',
    'required_with_all' => ':attribute فیلد است مورد نیاز است  :values are present.',
    'required_without' => ':attribute فیلد است مورد نیاز است  :values استnot present.',
    'required_without_all' => ':attribute فیلد است مورد نیاز است  none of :values are present.',
    'same' => ':attribute و :other باید match.',
    'size' => [
        'numeric' => ':attribute باید  :size.',
        'file' => ':attribute باید  :size کیلوبایت.',
        'string' => ':attribute باید  :size کاراکتر.',
        'array' => ':attribute باید داشته باشد :size آیتم.',
    ],
    'starts_with' => ':attribute باید با یکی از شروع کنید following: :values.',
    'string' => ':attribute باید  یک رشته.',
    'timezone' => ':attribute باید  یک منطقه معتبر',
    'unique' => ':attribute قبلا گرفته شده.',
    'uploaded' => ':attribute بارگذاری نشد',
    'url' => ':attribute فرمت نامعتبر است.',
    'uuid' => ':attribute باید  یک UUID معتبر',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. Thاستmakes it quick to
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
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". Thاستsimply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

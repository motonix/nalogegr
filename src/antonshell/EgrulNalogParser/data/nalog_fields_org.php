<?php

return [
    //'Полное наименование на русском языке' => 'full_name',
    'Сокращенное наименование на русском языке' => 'short_name',
    'ГРН и дата внесения в ЕГРЮЛ записи, содержащей указанные сведения' => 'grn_record_current_record',
    'Адрес юридического лица' => 'org_address',
    'Место нахождения юридического лица' => 'org_place',

    'Почтовый индекс' => 'zip_index',
    'Субъект Российской Федерации' => 'region',
    'Район (улус и т.п.' => 'area',
    'Населенный пункт (село и т.п.'=> 'locality',
    'Город (волость и т.п.' => 'city',
    'Улица (проспект, переулок и т.д.' => 'street',
    'Дом (владение и т.п.' => 'house',
    'Корпус (строение и т.п.' => 'building',
    'Офис (квартира и т.п.' => 'flat',

    'Способ образования' => 'creating_method',
    //'ОГРН' => 'ogrn',

    'Дата присвоения ОГРН' => 'ogrn_date',
    'Дата регистрации' => 'regdate',
    'Наименование органа, зарегистрировавшего юридическое лицо до'=>'additional_org_info_name',
    //'Сведения о регистрации юридического лица до' =>'additional_org_info_date',
    'Наименование регистрирующего органа' => 'organization_reg_name',
    'Адрес регистрирующего органа' => 'organization_address',

    'Состояние' => 'remove_state',
    'Дата принятия решения о предстоящем исключении недействующего юридического лица из ЕГРЮЛ' => 'remove_date',
    'Сведения о публикации решения о предстоящем исключении недействующего юридического лица из ЕГРЮЛ в журнале «Вестник государственной регистрации»' => 'remove_info',
    'ГРН и дата внесения в ЕГРЮЛ записи, содержащей указанные сведения' => 'remove_reference',
    //'Наименование регистрирующего органа, которым запись внесена в ЕГРЮЛ' => '',
    'Сведения о документах, представленных при внесении записи в ЕГРЮЛ' => '',
    'ИНН' => 'inn',
    'КПП юридического лица' => 'kpp',
    //'Дата постановки на учет' => 'account_date',
    'Наименование налогового органа' => 'organization_name',
    'Серия, номер и дача выдачи свидетельства' => 'snd_doc',

    'Регистрационный номер' => 'register_number',
    //'Дата регистрации в качестве страхователя'=>'register_st_date',
    'Наименование территориального органа Пенсионного фонда Российской Федерации' => 'organization_name',

    'Наименование исполнительного органа Фонда социального страхования Российской Федерации' => 'organization_name',

    'Вид' => 'capital_type',
    'Размер (в рублях)' => 'capital_size',

    'Код и наименование вида деятельности' => 'code',


    'Полное наименование' => 'fullname',
    //'ИНН юридического лица'=>'inn',
    //'КПП юридического лица'=>'kpp',
    'Дата постановки на учет в налоговом органе'=>'nalog_date',
    'Сведения о налоговом органе, в котором юридическое лицо состоит (для юридических лиц, прекративших деятельность - состояло) на учете'=>'nalog_add_info',

    'ГРН и дата внесения в ЕГРЮЛ сведений о данном лице' => 'grn_record_current_person',

    'Фамилия Имя Отчество' => 'fio',
    //'Пол' => 'gender',
    'Гражданство' => 'grajdanstvo',
    //'Фамилия' => 'last_name',
    //'Отчество' => 'middle_name',
    'Должность' => 'position',

    'Номинальная стоимость доли (в рублях)' => 'rate_value',
    'Размер доли (в процентах)' => 'rate_percentage',
    'Дополнительные сведения' => 'extra_info',
    'ГРН и дата внесения в ЕГРЮЛ записи об исправлении технической ошибки в указанных сведениях' => 'grn_error_fix_info',
    'Дата начала дисквалификации' => 'disqualification_start_date',
    'Дата окончания дисквалификации' => 'disqualification_finish_date',
    'Дата вынесения судебным органом постановления о дисквалификации' => 'disqualification_act_date',

    'Код и наименование вида деятельности' => 'code_name',

    'ГРН и дата внесения записи в ЕГРЮЛ' => 'grn_record',
    'Причина внесения записи в ЕГРЮЛ' => 'grn_record_reason',


    'Наименование документа' => 'document_name',
    'Номер документа' => 'document_number',
    'Дата документа' => 'document_date',
    'Статус записи' => 'record_state',
    'ГРН и дата записи, которой внесены исправления в связи с технической ошибкой' => 'technical_issue_fixed_record_grn_date',
    'ГРН и дата записи, в которую внесены исправления' => 'fixed_record_grn_date',
    'Серия, номер и дата выдачи свидетельства' => 'document_serial_date',

    'Способ прекращения' => 'close_method',
    'Дата прекращения' => 'close_date',
    'Наименование органа, внесшего запись о прекращении юридического лица' => 'close_organization_name',

    'Номер лицензии' => 'license_number',
    'Серия и номер лицензии'=>'license_number',
    'Дата лицензии' => 'license_date',
    'Дата начала действия лицензии' => 'license_start_date',
    'Дата окончания действия лицензии' => 'license_end_date',
    'Наименование лицензируемого вида деятельности, на который выдана лицензия' => 'license_issuer_name',
    'Наименование лицензирующего органа, выдавшего или переоформившего лицензию' => 'license_issuer_name',
    'Наименование лицензирующего органа'=>'license_org',

    'Наименовании филиала'=>'branch_name',
    'Адрес места нахождения филиала на территории Российской Федерации'=>'branch_adress',
    'Сведения об учете в налоговом органе по месту нахождения филиала'=>'branch_info',
    'Сведения о налоговом органе по месту нахождения филиала'=>'branch_info_place',

    'Полное наименование юридического лица'=>'fullname_jur',


    'Страна места нахождения' => 'country_of_location',
    //'Адрес места нахождения' => 'location_address',
    'Дата приостановления действия лицензии' => 'license_stop_date',
    'ГРН и дата записи, которая признана недействительной' => 'grn_date_not_valid',
    'ГРН и дата внесения записи, которой запись признана недействительной' => 'grn_date_not_valid',
    'Наименование лицензирующего органа, приостановившего действие лицензии' => 'orgaisation_name_license_suspend',
];

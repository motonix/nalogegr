<?php

use antonshell\EgrulNalogParser\classes\DocumentNamespace;

return [
    new DocumentNamespace(
        'common',
        'Наименование____'
    ),
    new DocumentNamespace(
        'address',
        'Адрес (место нахождения'
    ),
    new DocumentNamespace(
        'registration_info',
        'Сведения о регистрации'
    ),
    new DocumentNamespace(
        'register_taxes',
        'Сведения о регистрирующем органе по месту нахождения юридического лица'
    ),
    new DocumentNamespace(
        'register_status',
        'Сведения о состоянии юридического лица'
    ),
    new DocumentNamespace(
        'taxes',
        'Сведения об учете в налоговом органе',
        false,
        false
    ),
    new DocumentNamespace(
        'pension',
        'Сведения о регистрации в качестве страхователя в территориальном органе'
    ),

    new DocumentNamespace(
        'pension',
        'Сведения о регистрации в качестве страхователя в территориальном органе Пенсионного фонда Российской Федерации'
    ),

    new DocumentNamespace(
        'branches',
        'Сведения о филиалах и представительствах',
        true
    ),
    new DocumentNamespace(
        'filials',
        'Филиалы'
    ),
    new DocumentNamespace(
        'social_insurance',
        'Сведения о регистрации в качестве страхователя в исполнительном органе Фонда'
    ),
    new DocumentNamespace(
        'okveds',
        'Сведения о видах экономической деятельности по Общероссийскому классификатору'
    ),
    new DocumentNamespace(
        'okveds_add',
        'Сведения о дополнительных видах деятельности'
    ),
    new DocumentNamespace(
        'start_capital',
        'Сведения об уставном капитале (складочном капитале, уставном фонде, паевых взносах'
    ),
    new DocumentNamespace(
        'capital',
        'Сведения об уставном капитале / складочном капитале / уставном фонде / паевом фонде'
    ),
    new DocumentNamespace(
        'stop_org',
        'Сведения о прекращении'
    ),
    new DocumentNamespace(
        'confidant',
        'Сведения о лице, имеющем право без доверенности действовать от имени юридического'
    ),
    new DocumentNamespace(
        'founders',
        'Сведения об участниках',
    ),
    new DocumentNamespace(
        'founders',
        'Сведения об учредителях (участниках',
    ),
    new DocumentNamespace(
        'main_okveds',
        'Сведения об основном виде деятельности'
    ),
    new DocumentNamespace(
        'extra_okveds',
        'Сведения о дополнительных видах деятельности',
        true
    ),
    new DocumentNamespace(
        'egrul',
        'Сведения о записях, внесенных в Единый государственный реестр юридических лиц',
    ),
    new DocumentNamespace(
        'egrul_add',
        'Сведения о документах, представленных при внесении записи в ЕГРЮЛ',
    ),
    new DocumentNamespace(
        'extra_activity',
        'Сведения о держателе реестра акционеров акционерного общества',
        true
    ),
    new DocumentNamespace(
        'representative_offices',
        'Представительства',
        true
    ),
    new DocumentNamespace(
        'remove',
        'Сведения о регистрации юридического лица до 1 июля 2002 года',
        true,
        false
    ),
    new DocumentNamespace(
        'license_info',
        'Сведения о лицензиях',
        true
    ),
    new DocumentNamespace(
        'successors',
        'Сведения о правопреемнике',
        true
    ),
];

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
        'contacts',
        'Адрес электронной почты'
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
        'Сведения об учете в налоговом органе'
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
        'Сведения о филиалах и представительствах'
    ),
    new DocumentNamespace(
        'filials',
        'Филиалы'
    ),
    new DocumentNamespace(
        'agency',
        'Представительства'
    ),
    new DocumentNamespace(
        'social_insurance',
        'Сведения о регистрации в качестве страхователя в исполнительном органе Фонда'
    ),/*
    new DocumentNamespace(
        'okveds',
        'Сведения о видах экономической деятельности по Общероссийскому классификатору'
    ),*/
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
        'confidant',
        'Сведения о лице, имеющем право без доверенности действовать от имени юридического'
    ),
    new DocumentNamespace(
        'founders',
        'Сведения об участниках / учредителях юридического лица',
    ),
    new DocumentNamespace(
        'founders',
        'Сведения об учредителях (участниках',
    ),
    new DocumentNamespace(
        'org_state',
        'Сведения о прекращении юридического лица',
    ),
    new DocumentNamespace(
        'main_okveds',
        'Сведения об основном виде деятельности'
    ),
    new DocumentNamespace(
        'remove',
        'Сведения о регистрации юридического лица до 1 июля 2002 года',
        false,
        false
    ),
    new DocumentNamespace(
        'license_info',
        'Сведения о лицензиях'
    ),
    new DocumentNamespace(
        'successors',
        'Сведения о правопреемнике'
    ),
    new DocumentNamespace(
        'predecessor',
        'Сведения о правопредшественнике'
    ),
    new DocumentNamespace(
        'extra_activity',
        'Сведения о держателе реестра акционеров акционерного общества'
    ),
    new DocumentNamespace(
        'akcioner',
        'Сведения о единственном акционере'
    ),
];

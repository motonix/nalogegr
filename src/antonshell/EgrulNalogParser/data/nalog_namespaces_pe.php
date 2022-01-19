<?php

use antonshell\EgrulNalogParser\classes\DocumentNamespace;

return [
    new DocumentNamespace(
        'common',
        'Фамилия, имя, отчество (при наличии) индивидуального предпринимателя'
    ),
    new DocumentNamespace(
        'contacts',
        'Адрес электронной почты'
    ),
    new DocumentNamespace(
        'citizen',
        'Сведения о гражданстве'
    ),
    new DocumentNamespace(
        'registration_info',
        'Сведения о регистрации индивидуального предпринимателя'
    ),
    new DocumentNamespace(
        'register_taxes',
        'Сведения о регистрирующем органе по месту жительства индивидуального'
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
        'main_okveds',
        'Сведения о видах экономической деятельности по Общероссийскому классификатору'
    ),
    /*new DocumentNamespace(
        'extra_okveds',
        'Сведения о дополнительных видах деятельности'
    ),*/
    new DocumentNamespace(
        'egrip',
        'Сведения о записях, внесенных в ЕГРИП'
    ),
];


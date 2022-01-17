<?php

use antonshell\EgrulNalogParser\classes\DocumentNamespace;

return [
    new DocumentNamespace(
        'common',
        'Фамилия, имя, отчество (при наличии) индивидуального предпринимателя'
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
        'okveds',
        'Сведения об основном виде деятельности'
    ),
    new DocumentNamespace(
        'okveds_add',
        'Сведения о дополнительных видах деятельности'
    ),
    new DocumentNamespace(
        'egrip',
        'Сведения о записях, внесенных в ЕГРИП'
    ),
];

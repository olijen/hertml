<?php

// HERTML to HTML

function herToHtml($hertml) {
    str_ireplace('</her>', '</a>',
        str_ireplace('<\her/>', '">',  
            str_ireplace('<her\>', '<a href="', $hertml)
        )
    );
}

echo herToHtml("Привет мир! Это текст, <her\>http://ingello.com<\her/>а это ссылка кнопка</her>");

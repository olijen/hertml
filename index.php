<?php

// HERTML to HTML

function htmlToHer($hertml) {
    str_ireplace('</her>', '</a>',
        str_ireplace('<\her/>', '">',  
            str_ireplace('<her\>', '<a href="', $hertml)
        )
    );
}

echo htmlToHer("Привет мир! Это текст, <her\>http://ingello.com<\her/>а это ссылка кнопка</her>");

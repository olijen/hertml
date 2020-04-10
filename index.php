<?php

// HERTML to HTML

echo 
    str_ireplace('</her>', '</a>',
        str_ireplace('<\her/>', '">',  
            str_ireplace('<her\>', '<a href="', "Это текст <her\>http://ingello.com<\her/>Это кнопка</her>")
        )
    );

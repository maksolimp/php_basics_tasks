<?php
//26. Объявите константу DAYS_COUNT равную 7 и константу MONTH_COUNT равную 12 двумя разными способами объявления констант.

const DAYS_COUNT = 7;
define ('MONTH_COUNT', 12);
echo "This const is defined via const: " . DAYS_COUNT;
echo "<br>";
echo "This const defined via define: " . MONTH_COUNT;
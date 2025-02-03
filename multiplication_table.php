<?php

print('<tr>');
print('<th>*</th>');
for ($i = 1; $i <= 10; $i++) {
    print('<th>$i</th>');
}
print('</tr>');

for ($i = 1; $i <= 10; $i++) {
    print('<tr>');
    print('<th>$i</th>');
    for ($j = 1; $j <= 10; $j++) {
        print('<td>' . ($i * $j) . '</td>');
    }
    print('</tr>');
}
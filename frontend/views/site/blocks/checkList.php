<?php

use \frontend\other\GCField;

?>

<?php
$i = 0;
foreach ($list as $key => $label) {
    if (is_array($label)) {
        $groupName = $key;
        $groupList = $label;
        echo '<div class="list__item-subtitle">'.$groupName.'</div>
                <div class="inline-group">';
        foreach ($groupList as $label) {
            GCField::checkInput($type, [
                'name' => $name,
                'value' => $i,
                'label' => $label,
                'checked' => is_array($current) ? in_array($i, $current) : $i === $current,
            ]);
            $i++;
        }
        echo '</div>';
    } else {
        GCField::checkInput($type, [
            'name' => $name,
            'value' => $key,
            'label' => $label,
            'checked' => is_array($current) ? in_array($key, $current) : $key === $current,
        ]);
    }
} ?>
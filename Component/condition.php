<?php
$temperature = 35;
?>
<?php if ($temperature >= 30) : ?>
    <h2>ร้อนนนนนนน</h2>
<?php elseif ($temperature >= 20) : ?>
    <h2>สบายยย</h2>
<?php elseif ($temperature >= 10) : ?>
    <h2>เย็น</h2>
<?php endif; ?>
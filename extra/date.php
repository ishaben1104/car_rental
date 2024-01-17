<?php
$date = new DateTimeImmutable('2023-01-01');
echo $date->format('Y-m-d H:i:s') . "<br>";
echo $date->format('Y-m-d') . "<br>";
echo $date->format('Y-m') . "<br>";
echo $date->format('Y') . "<br>";
$year = $date->format('Y');
$current_year = date('Y-m-d');
echo $current_year;
?>

<td>
    <form method="post">
        <select type="category" id="category" name="year" required>
            <option value="--">--</option>
            <option value="2023"><?php echo $date->format('Y-m-d H:i:s')?></option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
        </select>
    </form>
</td>
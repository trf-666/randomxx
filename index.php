<?php

$filename = 'random.json';

$data = file_get_contents($filename);
$users = json_decode($data);
?>

<html>
<table style="table-layout:fixed;" border="1">
    <tbody>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Hobby</th>
        </tr>
        <?php foreach ($users as $user) { ?>
        <tr>
            <td> <?= $user->name; ?> </td>
            <td> <?= $user->address; ?> </td>
            <td> <?= $user->email; ?> </td>
            <td> <?= $user->hobby; ?> </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</html>
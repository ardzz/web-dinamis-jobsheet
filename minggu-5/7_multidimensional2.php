<?php

$students = [
    'id' => [1, 2, 3],
    'name' => ['John', 'Jane', 'Doe'],
    'address' => ['Medan', 'Medan', 'Medan'],
    'subject' => ['Marine Biology', 'Mathematics', 'Physics'],
];
?>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Subject</th>
    </tr>
    <?php foreach ($students['id'] as $key => $value) : ?>
        <tr>
            <td><?= $key + 1; ?></td>
            <td><?= $students['id'][$key]; ?></td>
            <td><?= $students['name'][$key]; ?></td>
            <td><?= $students['address'][$key]; ?></td>
            <td><?= $students['subject'][$key]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

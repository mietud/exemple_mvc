<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=  $titrePage ?></h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($listUser as $user): ?>
            <tr>
                <td><?=  $user["id"] ?></td>
                <td><?=  $user["name"] ?></td>
                <td><?=  $user["email"] ?></td>
            </tr>
        <?php endforeach ?> 
        </tbody>

    </table>
    
 
</body>
</html>
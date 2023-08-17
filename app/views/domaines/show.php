<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" class="stylesheet">
    <title>Document</title>
    <script>
        $(document).ready(function () {
           $('#example').DataTable();
        });
    </script>
</head>
<body>
<h2>cvs by domain</h2>
    <div class="container">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Titre</th>
                <th>Formation</th>
                <th>Experience</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cvs as $cvs): ?>
         <tr>
         <td><?= $cvs->id ; ?></td>
         <td><?= $cvs->nom ; ?></td>
         <td><?= $cvs->email ; ?></td>
         <td><?= $cvs->tel ; ?></td>
         <td><?= $cvs->titre ; ?></td>
         <td><?= $cvs->formations ; ?></td>
         <td><?= $cvs->experiences ; ?></td>
     </tr>
        <?php endforeach; ?>
           
        </tbody>
        <tfoot>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Titre</th>
                <th>Formation</th>
                <th>Experience</th>
            </tr>
        </tfoot>
    </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
</body>
</html>






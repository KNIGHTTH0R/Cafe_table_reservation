
<!DOCTYPE html>

<html>

<head>

    <title>PHP CRUD  |  Add Table</title>

    <style type="text/css">

        fieldset {

            margin: auto;

            margin-top: 100px;

            width: 50%;

        }

        table tr th {

            padding-top: 20px;

        }

    </style>
</head>

<body>

<fieldset>

    <legend>Add Table</legend>

    <form action="actions/a_create.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>Table</th>

                <td><input type="text" name="tables" placeholder="tables" /></td>

            </tr>     

            <tr>

                <th>Status</th>

                <td><input type="text" name="status" placeholder="status" /></td>

            </tr> 
            

            <tr>

                <td><button type="submit">Insert Table</button></td>

                <td><a href="home.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

</fieldset>

</body>

</html>
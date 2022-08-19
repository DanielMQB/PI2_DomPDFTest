<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <table class="table table-bordered">
        <tr>
            <td>Nome:</td>
            <td>
                {{ $user->full_name }}
            </td>
        <tr>
            <td>Logadouro: </td>
            <td>
                {{ $user->street_address }}
            </td>
        </tr>
        </tr>
        <tr>
            <td>Cidade:</td>
            <td>
                {{ $user->city }}
            </td>
        <tr>
            <td>CEP:</td>
            <td>
                {{ $user->zip_code }}
            </td>
        </tr>
        </tr>
    </table>
</body>

</html>

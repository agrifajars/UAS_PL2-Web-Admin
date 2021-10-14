<form method="POST" action="<?= BASEURL; ?>loginController/login">
    <table>
        <tr>
            <td>Username </td>
            <td><input type="text" name="inputUsername" required></td>
        </tr>
        <tr>
            <td>Password </td>
            <td><input type="password" name="inputPassword" required></td>
        </tr>
        <tr>
            <td>
                <input type="submit">
            </td>
        </tr>
    </table>
</form>
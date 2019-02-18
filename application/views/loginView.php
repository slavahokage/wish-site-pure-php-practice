<h2>Login form</h2>
<?php
if (isset($_SESSION['loginFail'])) {
    echo '<h3>Login fail</h3>';
}
?>
<p>
<form id='registrationForm' action="/login/check" method="post">
    <table>
        <tr>
            <td>
                <label>name:</label>
            </td>
            <td>
                <input id='name' name="name">
            </td>
        </tr>
        <tr>
            <td>
                <label>password:</label>
            </td>
            <td>
                <input id='password' name="password">
            </td>
        </tr>
    </table>
    <button type="submit">log in</button>
</form>
</p>
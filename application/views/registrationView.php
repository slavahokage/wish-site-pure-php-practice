<h2>Registration form</h2>
<p>
<form id='registrationForm' action="/registration/save" method="post">
    <?php
    if (isset($_SESSION['duplicateName'])) {
        echo '<h3>Duplicate name!</h3>';
    }
    ?>
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
    <button type="submit">save me</button>
</form>
</p>
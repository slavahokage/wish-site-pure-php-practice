<h2>Write you wish</h2>
<p>
    <form id='wishForm' action="/save" method="post">
    <input id='wishText' name="wish">
    <button type="submit">send</button>
</form>
</p>
<?php
$wishes = '';
foreach ($data as $element) {
    $wishes = $wishes . $element . '</br>';
}

if (isset($_SESSION['user'])) {
    echo '<h3>You log as -> ' . $_SESSION['user'] . '</h3> <a href="/logout">logout</a>';
}

echo '<h3>list of wishes</h3>';
echo '<div id = \'wishes\'>' . $wishes . '</div>';
?>
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
echo '<div id = \'wishes\'>' . $wishes . '</div>';
?>
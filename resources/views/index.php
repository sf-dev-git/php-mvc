<form action="/post" method="post">
    <input type="text" name="test"  value="<?php if (!empty($test) && !is_array($test)) echo $test; ?>">
    <button type="submit">Submit</button>
</form>

<h1><?php echo !empty($test) && !is_array($test) ? $test: 'Test'; ?></h1>

<?php
if (!empty($user)) {
    echo "<strong>" .$user['username']. "</strong>".
         "<p>Name: " .$user['name']. "</p>".
         "<p>Age: " .$user['age']. "</p>";
}
?>
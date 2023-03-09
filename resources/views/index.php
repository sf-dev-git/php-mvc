<form action="/post" method="post">
    <input type="text" name="test"  value="<?php if (!empty($test)) echo $test; ?>">
    <button type="submit">Submit</button>
</form>

<h1><?php echo !empty($test) ? $test: 'Test'; ?></h1>
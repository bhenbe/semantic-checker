<form method="post" action="<?php echo $baseUrl; ?>">

    <div>
    <label for="checkUrl">Url to check</label>
    <input type="text" name="checkUrl" id="checkUrl" value="<?php echo $checkUrl; ?>" />
    </div>

    <div>
    <label for="checkWrapper">Wrapper</label>
    <input type="text" name="checkWrapper" id="checkWrapper" value="<?php echo $checkWrapper; ?>" />
    </div>

    <div>
    <button type="submit">Check this page</button>
    </div>

</form>
<?php
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);
?>
<!DOCTYPE html>
<html>
<body>
This is some &lt;b&gt;bold&lt;/b&gt; text.
</body>
</html>
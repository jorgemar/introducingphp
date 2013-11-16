<?php

$input = '<p>Hi, <script>alert("boo!;);</script><a href="http://example.com/">visit my site</a>.</p>';
echo strip_tags($input);
echo strip_tags($input, '<p><a>');

?>
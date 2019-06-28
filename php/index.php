<?php
echo 'Hello, Cloud Foundry, from PHP! Version ' . (getenv('VER') == '' ? 'is not set' : getenv('VER')) . '.'
?>

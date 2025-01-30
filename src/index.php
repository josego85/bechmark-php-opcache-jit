<?php
echo "PHP Version: " . phpversion() . "<br>";
echo "JIT Buffer Size: " . ini_get('opcache.jit_buffer_size') . "<br>";
echo "JIT Mode: " . ini_get('opcache.jit') . "<br>";

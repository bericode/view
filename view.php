<?php
function view($file, $data = array(), $return = false)
{
    $file = $file . '.php';
    extract($data);
    ob_start();
    
    if (file_exists($file)) {
        include $file;
    } else {
        print '<p class="error">Error: ' . $file . ' does not exists!</p>';
    }
    
    if ($return == true) {
        $buffer = ob_get_contents();
        ob_end_clean();
        return $buffer;
    }
    
    ob_end_flush();
}
?>

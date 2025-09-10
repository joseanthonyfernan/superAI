<?php
// shutdown.php — local-only educational use

$bat = 'C:\\xampp\\htdocs\\newscripting\\logo.bat';

// Check if batch file exists
if (!file_exists($bat)) {
    http_response_code(500);
    echo "Batch file not found.";
    exit;
}

// Launch the batch file (non-blocking)
pclose(popen('cmd /c start "" "'. $bat .'"', 'r'));

echo "Shutdown command launched automatically.";
exit;
?>

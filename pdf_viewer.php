<?php
// Check if file parameter is set and not empty
if(isset($_GET['file']) && !empty($_GET['file'])){
    // Sanitize the file path to prevent directory traversal attacks
    $file_path = filter_var($_GET['file'], FILTER_SANITIZE_STRING);
    
    // Check if the file exists
    if(file_exists($file_path)){
        // Set appropriate headers for PDF file
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="'.basename($file_path).'"');
        header('Content-Length: ' . filesize($file_path));
        
        // Output the PDF file
        readfile($file_path);
        exit;
    } else {
        // File not found, display an error message
        header("HTTP/1.0 404 Not Found");
        echo "File not found.";
    }
} else {
    // File parameter not set or empty, display an error message
    header("HTTP/1.0 400 Bad Request");
    echo "Invalid file path.";
}
?>

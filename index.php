<html>
  <head>
    <title>Git Demo</title>
  </head>
  <body>
    <?php
      $folderPath = "contents"; // Replace with your folder path

      // Check if the folder exists
      if (is_dir($folderPath)) {
          // Open the folder
          $dir = opendir($folderPath);

          // Iterate through files in the folder
          while (($file = readdir($dir)) !== false) {
              // Check if the file has a .txt extension
              if (pathinfo($file, PATHINFO_EXTENSION) === 'txt') {
                  $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;

                  // Read and display the file contents
                  echo "<h3>Contents of $file:</h3>";
                  echo "<pre>" . htmlspecialchars(file_get_contents($filePath)) . "</pre>";
              }
          }

          // Close the folder
          closedir($dir);
      } else {
          echo "The folder does not exist.";
      }
    ?>
  </body>
</html>

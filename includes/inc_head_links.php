<?php

$rootPath = dirname(__DIR__);
$posHtdocs = strpos($rootPath, "htdocs");
$rootPath = substr($rootPath, $posHtdocs+7, strlen($rootPath));

?>

<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
<link rel="stylesheet" href="/<?php echo $rootPath; ?>/style/style.css" />

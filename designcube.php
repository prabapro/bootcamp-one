<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Web Development Bootcamp for absolute beginners">
        <meta name="author" content="Ajmal Hussain & Praba Ponnambalam">
        <title>Codechilli Repository&reg;</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Mono" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom style -->
        <link href="css/style_projects.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
        <link rel="manifest" href="img/favicons/manifest.json">
        <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    </head>
    <body>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg text-center">
                        <img src="img/codechilli.png" alt="Codechilli" class="img-fluid">
                        <p>Repository</p>
                    </div>
                </div>
            </div>
            
            
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <h4>Details</h4>
                        <ul class="list-group list-group-item group-bg">
                            
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Program</th>
                                        <td>Bootcamp #01 - Web Development Bootcamp for Absolute Beginners</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Project Title</th>
                                        <td>Design Cube</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Project Number</th>
                                        <td>01</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Description</th>
                                        <td>Responsive 4 page website with Font-Awesome Library</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Duration</th>
                                        <td>3 hours</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Preview</th>
                                        <td><a href="projects/designcube" target="_blank" class="badge badge-success">Click here</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                        <h4>Google Fonts</h4>
                        <ul class="list-group list-group-item group-bg">
                            
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">URL</th>
                                        <td><code>https://fonts.googleapis.com/css?family=Open+Sans:400,600,700</code></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Family</th>
                                        <td><code>font-family: 'Open Sans', sans-serif;</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                        <h4>File Structure </h4>
                        <ul class="list-group list-group-item group-bg">
                            <?php
                            
                            function listFolderFiles($dir){
                            $ffs = scandir($dir);
                            unset($ffs[array_search('.', $ffs, true)]);
                            unset($ffs[array_search('..', $ffs, true)]);
                            // prevent empty ordered elements
                            if (count($ffs) < 1)
                            return;
                            echo '<ul class="list-group list-group-flush">';
                                foreach($ffs as $ff){
                                echo '<li>'.$ff;
                                    if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
                                echo '</li>';
                                }
                            echo '</ul>';
                            }
                            listFolderFiles('projects/designcube');
                            ?>
                        </ul>
                        <hr class="light">
                        <i class="fa fa-download" aria-hidden="true"></i> <a class="dload" href="downloads/designcube.zip">Download designcube.zip</a>
                    </div>
                </div>
            </section>
            <!-- Bootstrap core JavaScript -->
            <script src="js/jquery.min.js "></script>
            <script src="bootstrap/js/bootstrap.bundle.min.js "></script>
            <!-- Plugin JavaScript -->
            <script src="js/jquery.easing.min.js "></script>
            <!-- Custom scripts for this site -->
            <script src="js/bootcamp.min.js "></script>
        </body>
    </html>
<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/JobOpening.php';

    $app = new Silex\Application();
    $app->get("/", function() {
        return "
            <!DOCTYPE html>
            <html>
            <head>
              <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
              <title>Job Board</title>
            </head>
            <body>
                <div class='container'>
                    <h1>Job Board</h1>
                    <form action='/job'>
                        <div class='form-group'>
                            <label for='title'>Enter job title:</label>
                            <input id='title' name='title' class='form-control' type='text'>
                        </div>
                        <div class='form-group'>
                            <label for='description'>Enter job description:</label>
                            <input id='description' name='description' class='form-control' type='text'>
                        </div>
                        <div class='form-group'>
                            <label for='contact'>Enter contact information:</label>
                            <input id='contact' name='contact' class='form-control' type='text'>
                        </div>
                        <button type='submit' class='btn-success'>Submit</button>
                    </form>
                </div>
            </body>
            </html>
            ";
    });

    return $app;

?>

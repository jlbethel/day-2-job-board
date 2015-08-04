<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/JobOpening.php';
    require_once __DIR__.'/../src/Contact.php';

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
                            <label for='name'>Enter your name:</label>
                            <input id='name' name='name' class='form-control' type='text'>
                        </div>
                        <div class='form-group'>
                            <label for='phone_number'>Enter phone number: </label>
                            <input id='phone_number' name='phone_number' class='form-control' type='text'>
                        </div>
                        <div class='form-group'>
                            <label for='email'>Enter your email:</label>
                            <input id='email' name='email' class='form-control' type='text'>
                        </div>
                        <button type='submit' class='btn-success'>Submit</button>
                    </form>
                </div>
            </body>
            </html>
            ";
    });


    $app->get("/job", function() {
        $new_job = new JobOpening($_GET["title"], $_GET["description"]);
        $new_contact = new Contact($_GET["name"], $_GET["phone_number"], $_GET["email"]);
        $output = "";
        $output = $output .
            "<p>Title: " . $new_job->getTitle() . "</p>
            <p> Description: " . $new_job->getDescription() . "</p>
            <p> Name: " . $new_contact->getName() . "</p>
            <p> Phone Number: " . $new_contact->getPhoneNumber() . "</p>
            <p> Email: " . $new_contact->getEmail() . "</p>";

        return "
            <!DOCTYPE html>
            <html>
            <head>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
                <title>Job Posted!</title>
            </head>
            <body>
                <div class='container'>
                    <h1>Your job has been posted!</h1>
                    <p>The job details are:</p>
                    <p>$output</p>
                </div>
            </body>
            </html>
        ";

    });

    return $app;

?>

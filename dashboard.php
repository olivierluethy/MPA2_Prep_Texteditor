<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <form action="process.php" method="POST">

            <div class="input-field">
                <label for="title">Enter title</label>
                <input type="text" name="Article_title" id="title">
            </div>

            <textarea name="Article_content" id="Article_editor"></textarea>

            <input type="submit" class="publish-btn" name="submit_data" value="publish">

        </form>
    </div>

    <script src="ckeditor/ckeditor.js"></script>

    <script>
    CKEDITOR.replace('Article_editor');
    </script>

</body>

</html>
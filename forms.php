<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php forms</title>
</head>
<style>
body {
    background-color: #fff;
    margin: 2px 2px;
}

.form-container {
    background-color: pink;
    display: inline-block;
    width: 100%;
    height: 100%;
    margin-bottom: 20px;
    padding-bottom: 20px;
}
</style>

<body>
    <form action="" method="post">
        <div class="form-container">
            <h1>register here</h1>
            <div class="form-r">
                <p>username</p>
                <input type="text" value="" name="username" required>
                <p>password</p>
                <input type="password" value="" name="password1" required>
                <p>confirm password</p>
                <input type="password" value="" name="password2" required>
                <p>email</p>
                <input type="text" value="" name="email" required>
                <input type="submit" name="submit">
            </div>
            <h2>login here</h2>
            <div class="form-l">

                <p>username</p>
                <input type="text" value="" name="username" required>
                <p>password</p>
                <input type="password" value="" name="password1" required>
                <input type="submit" name="submit" class="submit">
            </div>

        </div>
    </form>
</body>

</html>
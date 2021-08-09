<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <form>

        <h4 class="display-4 text-center">Create</h4><hr><br>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="name"
                   class="form-control"
                   id="name"
                   name="name"
                   placeholder="Name eingeben">
        </div>
        <div class="form-group">
            <label for="vorname">Vorname</label>
            <input type="name"
                   class="form-control"
                   id="vorname"
                   name="vorname"
                   placeholder="Vorname eingeben">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email"
                   class="form-control"
                   id="email"
                   name="email"
                   placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password"
                   class="form-control"
                   id="password"
                   name="password"
                   placeholder="password eingeben"
                  >
        </div>

        <button type="submit"
                class="btn btn-primary"
                name="create">Create</button>
        <a href="read.php" class="link-primary">View</a>
    </form>
</div>
</body>
</html>

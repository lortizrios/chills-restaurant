<!DOCTYPE html>

<html>

<head>
</head>

<body>

    <div class="container">

        <h1 class="display-4">A&ntilde;adir Usuario</h1>

        <form action="insert_client.php" method="POST">

            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="name" class="form-control" />
            </div>

            <!-- <div class="form-group">
                <label>Telefono:</label>
                <input type="text" name="telefono" class="form-control" />
            </div> -->

            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" class="form-control" />
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" />
            </div>

            <div class="form-group">
                <label>User Type:</label>
                <input type="text" name="user_type" class="form-control" />
            </div>

            <!-- <button type="submit">Grabar</button> -->

            <input type="submit" value="Grabar" class="btn btn-primary btn-lg" />
        </form>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
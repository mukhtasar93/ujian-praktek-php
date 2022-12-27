<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ujian Praktek Programmer</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
</head>

<body class="bg-primary">
    <div class="container col-4 align-items-center" style="margin-top:200px;">
        <form action="cek-login.php" class="form-control" method="POST" enctype="multipart/form-data">
            <div class="border rounded p-4">
                <div class="text-center">
                    <h3 class=" mb-4 pb-4 text-center">Login Here</h3>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bi bi-person-fill"></span>
                    <input type="text" class="form-control" id="username" name="username" required
                        placeholder="Enter username">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bi bi-lock-fill"></span>
                    <input type="password" class="form-control" id="username" name="password" required
                        placeholder="Enter password">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success mb-4 px-4">Login</button>
                </div>
            </div>
    </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
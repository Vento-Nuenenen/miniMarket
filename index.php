<?php
	$colorPerSize = [];
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>T-Shirt Bestellen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container-fluid text-center">
                <h1>T-Shirt Bestellen</h1>
            </div>

            <br />

            <div class="container-fluid">
                <form method="post">
                    <div class="row has-feedback">
                        <label for="name" class="col-md-3 form-label">Name</label>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <input id="name" class="form-control" name="name" type="text" required />

                                <label class="input-group-text" for="name">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row has-feedback">
                        <label for="contact" class="col-md-3 form-label">Kontakt</label>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <input id="contact" class="form-control" name="contact" type="text" required />

                                <label class="input-group-text" for="contact">
                                    <i class="fa fa-vcard" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row has-feedback">
                        <label for="shirt_color" class="col-md-3 form-label">T-Shirt Farbe</label>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <input id="shirt_color" class="form-control" name="shirt_color" type="text" required />

                                <label class="input-group-text" for="shirt_color">
                                    <i class="fa fa-color" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row has-feedback">
                        <label for="print_color" class="col-md-3 form-label">Farbe Aufdruck</label>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <input id="print_color" class="form-control" name="print_color" type="text" required />

                                <label class="input-group-text" for="print_color">
                                    <i class="fa fa-color" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row has-feedback">
                        <label for="print_placing" class="col-md-3 form-label">Aufdruck Ort</label>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <input id="print_placing" class="form-control" name="print_placing" type="text" required />

                                <label class="input-group-text" for="print_placing">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row has-feedback">
                        <label for="count" class="col-md-3 form-label">Anzahl</label>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <input id="count" class="form-control" name="count" type="text" required />

                                <label class="input-group-text" for="count">
                                    <i class="fa fa-number" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-info" />
                </form>
            </div>
        </main>

        <script src="https://kit.fontawesome.com/b7304ac133.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </div>
</body>

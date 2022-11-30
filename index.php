<?php
    $config = require 'config.php';
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
            <div class="container-fluid col-md-10">
                <h1 class="text-center">Benamselung</h1>

                <br />

                <p>
                    Willst du immer Angeschrieben sein? <br />
                    Deinen Pulli immer erkennen können? <br />
                    Lass deine Kleidung beschriften... <br />
                    <br />
                    Fülle das folgende Formular aus, falls du einzelne Teile deiner Pfadikleidung beschriften möchtest. <br />
                    <br />
                    Die allfällige Druck-Daten werden via der Kontaktangabe bekannt gegeben, damit ihr eure Kleider abgeben könnt. <br />
                    Fragen sind an <a href="mailto:vento@pfadi-nuenenen.ch">vento@pfadi-nuenenen.ch</a> zu richten. <br />
                    <br />
                    <br />
                    <b>Wichtig:</b> <br />
                    Beachte folgende Preise je Druck: <br />
                     - Kosten Aufdruck: <?php echo $config['pricePrint'] ?> CHF <br />
                </p>
            </div>

            <br />

            <div class="container-fluid col-md-10">
                <form method="post" action="order.php">
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
                        <label for="piece" class="col-md-3 form-label">Kleidungsstück</label>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <input id="piece" class="form-control" name="piece" type="text" required />

                                <label class="input-group-text" for="piece">
                                    <i class="fa fa-shirt" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row has-feedback">
                        <label for="print_color" class="col-md-3 form-label">Aufdruck Farbe</label>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <select class="custom-select form-control" name="print_color" id="print_color">
                                    <option value="">Farbe wählen</option>

                                    <option value="schwarz">Schwarz</option>
                                    <option value="weiss">Weiss</option>
                                    <option value="pink">Pink</option>
                                    <option value="blau">Blau</option>
                                </select>
                                <label class="input-group-text" for="print_color">
                                    <i class="fa fa-fill" aria-hidden="true"></i>
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
                                    <i class="fa fa-print" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row has-feedback">
                        <label for="count" class="col-md-3 form-label">Anzahl Teile</label>
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <input id="count" class="form-control" name="count" type="number" value="1" min="1" required />

                                <label class="input-group-text" for="count">
                                    <i class="fa fa-hashtag" aria-hidden="true"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                    <br />

                    <input type="submit" class="btn btn-info col-12" />
                </form>
            </div>
        </main>

        <script src="https://kit.fontawesome.com/b7304ac133.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </div>
</body>

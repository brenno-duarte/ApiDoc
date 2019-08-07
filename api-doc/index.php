<?php

require 'apidoc.php';

$api = new apidoc();
$info = $api->getJson();
$router = $api->getRouter();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ApiDoc</title>
        <meta charset="utf-8">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />  
        <meta http-equiv="expires" content="0" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="view/_css/bootstrap.css" />
        <link rel="stylesheet" href="view/_css/custom.css" />
        <link rel="icon" href="view/_img/favicon.ico" />
        <noscript>
            <meta http-equiv="refresh" content="0; url=../error/">
        </noscript>
    </head>
    <body>
        <nav class="bg-primary">
            <ul class="nav container">
                <img src="view/_img/apidoclogowhite.png" class="navbar-left pull-right logo">
            </ul>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col col-sm-12">
                    <p><h1 class="text-center"><?php echo $info->appName; ?></h1></p>
                    <p>Description: <?php echo $info->description; ?></p>
                    <p>API version: <?php echo $info->version; ?></p>
                    <p>Language: <?php echo $info->language; ?></p>
                    <p>Protocol: <?php echo $info->protocol; ?></p>
                </div>
            </div>

            <section>

                <?php foreach($router->path as $i=>$r): ?>
                <div class="card card-body space">
                    <ul>
                        <li><h5 class="card-header"><?= $i; ?></h5></li>
                        <li><button type='button' class='btn btn-outline-primary' data-toggle='modal' data-target='#modal<?= $r->get->id; ?>'><span class='badge badge-primary fontspan'>GET</span> <?= $r->get->pathGet; ?></button></li>
                        <li><button type='button' class='btn btn-outline-primary' data-toggle='modal' data-target='#modal<?= $r->getId->id; ?>'><span class='badge badge-primary fontspan'>GET</span> <?= $r->getId->pathGetId; ?></button></li>
                        <li><button type='button' class='btn btn-outline-success' data-toggle='modal' data-target='#modal<?= $r->post->id; ?>'><span class='badge badge-success fontspan'>POST</span> <?= $r->post->pathPost; ?></button></li>
                        <li><button type='button' class='btn btn-outline-warning' data-toggle='modal' data-target='#modal<?= $r->put->id; ?>'><span class='badge badge-warning fontspan'>PUT</span> <?= $r->put->pathPut; ?></button></li>
                        <li><button type='button' class='btn btn-outline-danger' data-toggle='modal' data-target='#modal<?= $r->delete->id; ?>'><span class='badge badge-danger fontspan'>DELETE</span> <?= $r->delete->pathDelete; ?></button></li>
                    </ul>
                </div>

                <!-- Modal get -->
                <div class="modal fade" id="modal<?= $r->get->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?= $r->get->pathGet; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="space">
                                    <?= $r->get->descriptionGet; ?>
                                </div>
                                <div>
                                    <a href="<?= $r->get->link; ?>" target="_blank"><?= $r->get->link; ?></a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal getId -->
                <div class="modal fade" id="modal<?= $r->getId->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?= $r->get->pathGet; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="space">
                                    <?= $r->getId->descriptionGetId; ?>
                                </div>
                                <div>
                                    <a href="<?= $r->getId->link; ?>" target="_blank"><?= $r->getId->link; ?></a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal post -->
                <div class="modal fade" id="modal<?= $r->post->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?= $r->post->pathPost; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="space">
                                    <?= $r->post->descriptionPost; ?>
                                </div>
                                <div>
                                    <a href="<?= $r->post->link; ?>" target="_blank"><?= $r->post->link; ?></a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal put -->
                <div class="modal fade" id="modal<?= $r->put->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?= $r->put->pathPut; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="space">
                                    <?= $r->put->descriptionPut; ?>
                                </div>
                                <div>
                                    <a href="<?= $r->put->link; ?>" target="_blank"><?= $r->put->link; ?></a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal delete -->
                <div class="modal fade" id="modal<?= $r->delete->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?= $r->delete->pathDelete; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="space">
                                    <?= $r->delete->descriptionDelete; ?>
                                </div>
                                <div>
                                    <a href="<?= $r->delete->link; ?>" target="_blank"><?= $r->delete->link; ?></a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </section>
        </div>

        <script src="view/_js/jquery-3.4.1.min.js"></script>
        <script src="view/_js/bootstrap.js"></script>
</html>
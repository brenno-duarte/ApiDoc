<div class="container">
    <div class="row">
        <div class="col col-md-12">
            <p><h1 class="display-4" id="info"><?php echo $info->appName; ?></h1></p>
        </div>
    </div>

    <div class="row">
        <div class="col col-md-6">
            <p id="info"><span class="back" id="info">Description: </span><?php echo $info->description; ?></p>
            <p id="info"><span class="back" id="info">API version: </span><?php echo $info->version; ?></p>
            <p><a href="https://github.com/brennoDuarte/ApiDoc/releases" target="_blank">Github</a></p>
            <p><a href="#" data-toggle="modal" data-target="#about">About</a></p>
            <p><a href="#" id="darkMode">Enable Dark Mode</a></p>
        </div>

        <div class="col col-md-6">
            <p id="info"><span class="back" id="info">Language: </span><?php echo $info->language; ?></p>
            <p id="info"><span class="back" id="info">Protocol: </span><?php echo $info->protocol; ?></p>
        </div>

       <!-- Modal -->
        <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="labelM" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="dark">
                    <div class="modal-header">
                        <h5 class="modal-title" id="labelM">About</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Content Modal -->
                        <img src="view/_img/apidoclogo.png" class="navbar-left pull-right text-center">
                        <h4 class="text-center" id="light">ApiDoc 1.2.0 (Beta)</h4>
                        <p><a class="link" href="https://github.com/brennoDuarte/ApiDoc/blob/master/LICENSE" target="_blank">License MIT</a></p>
                        <p><a class="link" href="https://github.com/brennoDuarte?tab=repositories" target="_blank">More from developer</a></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php                   
        if (isset($warning)) {
            echo "<div class='alert alert-danger' role='alert'>";
            echo $warning;
            echo "</div>";
        }
    ?>
    <?php foreach($router->path as $i=>$r): ?>
    <div class="card card-body space">
        <h5 class="card-header space"><?= $i; ?></h5>
        <ul>
            <li id="li1"><button type='button' class='btn btn-outline-primary form-control float' data-toggle='modal' data-target='#modal<?= $r->get->id; ?>'><span class='badge badge-primary fontspan'>GET</span> <?= $r->get->pathGet; ?></button></li>
            <li id="li2"><button type='button' class='btn btn-outline-primary form-control float' data-toggle='modal' data-target='#modal<?= $r->getId->id; ?>'><span class='badge badge-primary fontspan'>GET</span> <?= $r->getId->pathGetId; ?></button></li>
            <li id="li3"><button type='button' class='btn btn-outline-success form-control float' data-toggle='modal' data-target='#modal<?= $r->post->id; ?>'><span class='badge badge-success fontspan'>POST</span> <?= $r->post->pathPost; ?></button></li>
            <li id="li4"><button type='button' class='btn btn-outline-warning form-control float' data-toggle='modal' data-target='#modal<?= $r->put->id; ?>'><span class='badge badge-warning fontspan'>PUT</span> <?= $r->put->pathPut; ?></button></li>
            <li id="li5"><button type='button' class='btn btn-outline-danger form-control float' data-toggle='modal' data-target='#modal<?= $r->delete->id; ?>'><span class='badge badge-danger fontspan'>DELETE</span> <?= $r->delete->pathDelete; ?></button></li>
        </ul>
    </div>

    <!-- Modal get -->
    <div class="modal fade" id="modal<?= $r->get->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel"><?= $r->get->pathGet; ?></h5>
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
    <div class="modal fade" id="modal<?= $r->getId->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel"><?= $r->get->pathGet; ?></h5>
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
    <div class="modal fade" id="modal<?= $r->post->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel"><?= $r->post->pathPost; ?></h5>
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
    <div class="modal fade" id="modal<?= $r->put->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel"><?= $r->put->pathPut; ?></h5>
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
    <div class="modal fade" id="modal<?= $r->delete->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel"><?= $r->delete->pathDelete; ?></h5>
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
</div>

<script src="view/_js/jquery-3.4.1.min.js"></script>
<script src="view/_js/jquery.cookie.js"></script>
<script src="view/_js/bootstrap.js"></script>
<script src="view/_js/darkMode.js"></script>
<noscript>
    <meta http-equiv="refresh" content="0; url=../error/">
</noscript>

</body>
</html>
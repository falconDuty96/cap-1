<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?= base_url() ?>public/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url() ?>public/assets/vendor/js/helpers.js"></script>

    <script src="<?= base_url() ?>public/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo"></div>

            <div class="menu-inner-shadow"></div>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Parametres</span>
            </li>
            <ul class="menu-inner py-1">
                <li class="menu-item active">
                    <a href="index.html" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Categorie</div>
                    </a>
                </li>

            <!-- Layouts -->
            <li class="menu-item">
                <a href="" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Layouts">Classe</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div data-i18n="Layouts">Mode</div>
                </a>
            </li>

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Questionnaires</span>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Questions</div>
                </a>
            </li>
            
          </ul>
        </aside>


        <!-- Layout container -->
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-lg-12 mb-4 order-0">
                            <div class="card" style='height: 200px;overflow-y:auto;'>
                            <div class="card-body">
                                <div class="row">
                                    <?= form_open('categorie/enregistrer') ?>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Categorie</label>
                                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="Inserer la categorie" name="categorie_nom" />
                                        <?php echo form_error('categorie_nom'); ?>  
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 mb-4 order-0">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Categorie</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php for($i = 0; $i < count($categorie); $i++): ?>
                                        <tr>
                                            <td><?= $categorie[$i]->categorie_nom ?></td>
                                            <td>
                                                <a class="badge bg-label-info me-1" href="" data-bs-toggle="modal" data-bs-target="#basicModal<?= $categorie[$i]->categorie_id ?>">Modifier</a>
                                                <a class="badge bg-label-danger me-1" href="<?= base_url() ?>Categorie/supprimer/<?= $categorie[$i]->categorie_id ;?>">Supprimer</a>
                                            </td>
                                        </tr>


                                        <div class="modal fade" id="basicModal<?= $categorie[$i]->categorie_id ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel1">Modification</h5>
                                                        <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                        ></button>
                                                    </div>
                                                    <?= form_open('categorie/modifier/'.$categorie[$i]->categorie_id) ?>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="categorie" class="form-label">Categorie</label>
                                                                <input type="text" id="categorie" class="form-control" placeholder="Inserer la categorie" name="categorie_nom" value="<?= $categorie[$i]->categorie_nom ;?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                        Fermer
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>


                                    <?php endfor ; ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>      
            </div>

        </div>
            

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url(); ?>public/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url(); ?>public/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url(); ?>public/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url(); ?>public/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url(); ?>public/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url(); ?>public/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url(); ?>public/assets/js/dashboards-analytics.js"></script>
  </body>
</html>

<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
	<!-- Bootstrap CSS file -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<header>

	<nav class="navbar navbar-expand-lg navbar-dark py-3"><!--sticky-top-->
                <div class="container">
					<!-- Ikon és cím -->
					<div class="icon_and_title">
						<img src="./images/<?= $fejlec['kepforras'] ?>" alt="<?= $fejlec['kepalt'] ?>">
						<div>
							<h1><?= $fejlec['cim'] ?></h1>
							<?php if (isset($fejlec['motto'])) { ?>
							<h2><?= $fejlec['motto'] ?></h2>
							<?php } ?>
						</div>
					</div>

					<!-- Menüpontok -->
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
            
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
						<ul id="menu1" class="navbar-nav ms-auto flex-row flex-md-row">
							<?php foreach ($oldalak as $url => $oldal) { ?>
								<?php if (!isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
									<li class="nav-item <?= ($oldal == $keres) ? ' active' : '' ?>">
										<a class="nav-link" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
											<?= $oldal['szoveg'] ?>
										</a>
									</li>
								<?php } ?>
							<?php } ?>

							<?php if (isset($_SESSION['login'])) { ?>
							<li class="nav-item">
								<span class="nav-link" id="logedin"><span id="logedninszoveg">Bejelentkezve: </span><strong><?= $_SESSION['csn'] . " " . $_SESSION['un'] . " (" . $_SESSION['login'] . ")" ?></strong></span>
							</li>
							<?php } ?>
						</ul>
                    </div>
                </div>
    </nav>
	</header>

    <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    
	<footer>
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
    </footer>
</body>
</html>

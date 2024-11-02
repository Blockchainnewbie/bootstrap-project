<?php
/**
 * Hauptseite der Bootstrap-Webseite
 * Bindet Header und Footer ein und zeigt den Hauptinhalt
 */

// Header einbinden
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Hauptinhalt -->
<main class="container">
    <h1 class="mt-5">Willkommen auf meiner Bootstrap-Webseite</h1>
    <p>Dies ist eine einfache Webseite, die mit Bootstrap erstellt wurde.</p>
    
    <!-- Beispiel für zusätzlichen Content -->
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature 1</h5>
                    <p class="card-text">Eine kurze Beschreibung des ersten Features.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature 2</h5>
                    <p class="card-text">Eine kurze Beschreibung des zweiten Features.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature 3</h5>
                    <p class="card-text">Eine kurze Beschreibung des dritten Features.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
// Footer einbinden
require_once 'includes/footer.php';
?>

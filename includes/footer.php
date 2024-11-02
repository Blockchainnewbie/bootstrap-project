<?php
/**
 * Footer-Komponente
 * Enthält Copyright, Kontaktinformationen und wichtige Links
 */
?>
<footer class="footer mt-5 py-3 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Über uns</h5>
                <p>Eine kurze Beschreibung über unser Unternehmen und unsere Mission.</p>
            </div>
            <div class="col-md-4">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Über uns</a></li>
                    <li><a href="#">Kontakt</a></li>
                    <li><a href="#">Impressum</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Kontakt</h5>
                <address>
                    <strong>Firma GmbH</strong><br>
                    Musterstraße 123<br>
                    12345 Musterstadt<br>
                    <abbr title="Telefon">Tel:</abbr> (123) 456-7890
                </address>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <p class="text-muted">© <?php echo date('Y'); ?> Meine Webseite. Alle Rechte vorbehalten.</p>
        </div>
    </div>
</footer>

<!-- Bootstrap JS und Popper.js einbinden -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>

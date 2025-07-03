<?php include 'header.php'; ?>
<div class="container">
    <h2 class="mb-4">Visualisation des fichiers académiques</h2>
    <div class="row g-4">
        <?php
        // Exemple de documents (à remplacer par des données dynamiques)
        $documents = [
            ["titre" => "Curriculum Vitae", "fichier" => "../docs/curriculum_vitae.pdf"],
            ["titre" => "Lettre de Demande de stage", "fichier" => "../docs/lettre_demande_stage.pdf"],
            ["titre" => "Bulletin de notes", "fichier" => "../docs/bulletin_notes.pdf"],
        ];
        foreach ($documents as $doc) {
        ?>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center" style="cursor:pointer" onclick="window.open('<?php echo $doc['fichier']; ?>', '_blank')">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <svg width="64" height="64" fill="#212529" viewBox="0 0 16 16">
                            <path d="M4.5 0A1.5 1.5 0 0 0 3 1.5v13A1.5 1.5 0 0 0 4.5 16h7a1.5 1.5 0 0 0 1.5-1.5V5.707a1.5 1.5 0 0 0-.44-1.06l-3.207-3.207A1.5 1.5 0 0 0 8.293 1H4.5zm0 1h3.793a.5.5 0 0 1 .353.146l3.207 3.207a.5.5 0 0 1 .147.353V14.5a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-13A.5.5 0 0 1 4.5 1z" />
                            <path d="M9.5 1v3A1.5 1.5 0 0 0 11 5.5h3" />
                        </svg>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <span class="fw-bold"><?php echo htmlspecialchars($doc['titre']); ?></span>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="mt-4 text-muted">Cliquez sur une carte pour visualiser ou télécharger le document dans un nouvel onglet.</div>
</div>
<?php include 'footer.php'; ?>
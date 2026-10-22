<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>


<main>
    <div class="text-white mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p>

        <p><?= htmlspecialchars($note['body']) ?></p>

        <footer>
            <a href="/note/edit?id=<?= $note['id'] ?>" class="text-gray-400 border border-current px-4 py-1 rounded">Edit</a>
        </footer>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
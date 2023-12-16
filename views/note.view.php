<?php

require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');


?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="">
                    <a href="/notes"
                       class="text-base font-medium text-indigo-600 hover:text-indigo-500 mb-5">Back</a>

                    <?php if (!empty($note)) : ?>
                        <p class="mt-2 text-lg font-medium text-gray-500"><?= $note['body'] ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

<?php

require 'partials/footer.php';
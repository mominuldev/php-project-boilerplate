<?php

require('partials/head.php');
require('partials/nav.php');
require('partials/banner.php');


?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="flex items-center h-full">
                    <div class="text-left">
                        <h1 class="text-4xl font-bold text-gray-900 mb-5">Notes</h1>

                        <?php
                        if (!empty($notes)) : ?>
                            <ul class="divide-y divide-gray-200">
                                <?php foreach ($notes as $note) : ?>
                                    <li class='divide-y divide-gray-200 text-lg font-medium text-gray-500'>
                                        <a href="/note?id=<?= $note['id'] ?>"
                                           class="text-base font-medium text-indigo-600 hover:text-indigo-500 hover:underline transition duration-500"><?= $note['body'] ?></a>
                                    </li>
                                <?php endforeach;
                                ?>
                            </ul>
                        <?php else : ?>
                            <p class="mt-2 text-lg font-medium text-gray-500">You have no notes.</p>
                        <?php endif; ?>
                        <div class="mt-6">
                            <a href="#" class="text-base font-medium text-indigo-600 hover:text-indigo-500">Create
                                your first note</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php

require 'partials/footer.php';
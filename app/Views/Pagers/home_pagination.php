<?php $pager->setSurroundCount(3) ?>

    <nav aria-label="Page-navigation">
        <ul class="pagination">

            <div>
                
                <div style="display: flex; justify-content: center;">

                    <?php if ($pager->hasPrevious()) : ?>
                        <div class="page-item" id="frist-last-up">
                            <a class="page-itemX" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                                <button class="buttonPage" aria-hidden="true"><?= lang('Pager.first') ?></button>
                            </a>
                        </div>
                        <div class="page-item" id="previos-next-up">
                            <a class="page-itemX" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                                <button class="buttonPage" aria-hidden="true"><?= lang('Pager.previous') ?></button>
                            </a>
                        </div>
                    <?php endif ?>


                    <?php foreach ($pager->links() as $link) : ?>
                        <div class="page-item <?= $link['active'] ? 'active' : '' ?>">
                            <a class="page-itemX" href="<?= $link['uri'] ?>">
                                <button class="buttonPage"><?= $link['title'] ?></button>
                            </a>
                        </div>
                    <?php endforeach ?>


                    <?php if ($pager->hasNext()) : ?>
                        <div class="page-item" id="previos-next-up">
                            <a class="page-itemX" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                                <button class="buttonPage" aria-hidden="true"><?= lang('Pager.next') ?></button>
                            </a>
                        </div>
                        <div class="page-item" id="frist-last-up">
                            <a class="page-itemX" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                                <button class="buttonPage" aria-hidden="true"><?= lang('Pager.last') ?></button>
                            </a>
                        </div>
                    <?php endif ?>

                </div>



                <div style="display: flex; justify-content: center;">

                    <?php if ($pager->hasPrevious()) : ?>
                        <div class="page-item2" id="frist-last-down">
                            <a class="page-itemX" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                                <button class="buttonPage" aria-hidden="true"><?= lang('Pager.first') ?></button>
                            </a>
                        </div>
                        <div class="page-item2" id="previos-next-down">
                            <a class="page-itemX" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                                <button class="buttonPage" aria-hidden="true"><?= lang('Pager.previous') ?></button>
                            </a>
                        </div>
                    <?php endif ?>

                    <?php if ($pager->hasNext()) : ?>
                        <div class="page-item2" id="previos-next-down">
                            <a class="page-itemX" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                                <button class="buttonPage" aria-hidden="true"><?= lang('Pager.next') ?></button>
                            </a>
                        </div>
                        <div class="page-item2" id="frist-last-down">
                            <a class="page-itemX" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                                <button class="buttonPage" aria-hidden="true"><?= lang('Pager.last') ?></button>
                            </a>
                        </div>
                    <?php endif ?>

                </div>



            </div>



        </ul>
    </nav>
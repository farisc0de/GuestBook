<?php

/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */

$pager->setSurroundCount(0);
?>
<div>
    <ul class="pagination">
        <li class="page-item <?= $pager->hasPrevious() ? '' : 'hidden' ?>" <?= $pager->hasPrevious() ? '' : 'hidden' ?>>
            <a class="page-link" href="<?= $pager->getPrevious() ?? '#' ?>"><?= lang('Pager.newer') ?> &laquo;</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="<?= $pager->getnext() ?? '#' ?>" <?= $pager->hasNext() ? '' : 'hidden' ?>>&raquo; <?= lang('Pager.older') ?></a>
        </li>
    </ul>
</div>
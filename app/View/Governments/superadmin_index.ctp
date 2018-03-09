<?php  $this->layout = 'admin'; ?>

<div class="admin-form">
    <div class="admin-table">
    <?= $this->Session->flash(); ?>
        <table class="admin-table__wrapper">
            <thead>
                <tr class="admin-table__head">
                    <th class="admin-table__title">Name</th>
                    <th class="admin-table__title">Birthday</th>
                    <th class="admin-table__title">Message</th>
                    <th class="admin-table__title">Position</th>
                    <th class="admin-table__title" colspan="2">Action</th>
                <tr>
            <thead>
            <tbody>
                <?php foreach($governments as $government): ?>
                <tr class="admin-table__row">
                    <td class="admin-table__result"><?= h($government['Government']['name']) ?></td>
                    <td class="admin-table__result"><?= $government['Government']['birthday'] ?></td>
                    <td class="admin-table__result"><?= $government['Government']['message'] ?></td>
                    <td class="admin-table__result"><?= $government['Government']['position'] ?></td>
                    <td class="admin-table__result" colspan="2">
                        <div class="admin-table__action">
                            <a href="/superadmin/<?= Configure::read('position.'.$government['Government']['position']) ?>/edit/<?= $government['Government']['id'] ?>" class="admin-table__link">Edit</a>
                        </div>
                        <div class="admin-table__action">
                            <a href="javascript:void(0);" class="admin-table__link admin-table__link--delete delete" id="<?= $government['Government']['id'] ?>">Delete</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="pagination">
            <ul>
                <?php
                    $paginatorParams = $this->Paginator->params();

                    if (count($governments) != 0 && $paginatorParams['count'] > $paginatorParams['limit']) {
                        // previous
                        echo $this->Paginator->prev('< previous', array(), null, array('class' => 'prev disabled'));
                        // the 'number' page buttons
                        echo $this->Paginator->numbers([
                            'modulus'      => 5,
                            'separator'    => '',
                            'tag'          => 'li',
                            'class'        => 'pagination__list',
                            'currentClass' => 'pagination__list--active',
                        ]);
                        // next
                        echo $this->Paginator->next(' next > ', array(), null, array('class' => 'next disabled'));
                    }
                ?>
            </ul>
        </div>
    </div> 
</div>
<div class="modal-confirmation">
    <div class="modal-confirmation__content">
        <div class="modal-confirmation__close">
            <button class="modal-confirmation__close-btn">x</button>
        </div>
        <div class="modal-confirmation__header">
            <span>Confirmation</span>
        </div>
        <div class="modal-confirmation__body">
            <span>Are you sure you want to delete?</span>
        </div>
        <div class="modal-confirmation__button">
            <button class="modal-confirmation__delete-btn submit">Delete</button>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var id = "";
        $('.delete').on('click', function(){
            id = $(this).attr('id');
            $('.modal-confirmation').show();
        });
        $('.submit').on('click', function() {
            window.location.href = "/superadmin/government/delete/"+id;
        });
    })
</script>
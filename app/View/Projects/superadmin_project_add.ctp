<?php  $this->layout = false; ?>
<?php echo $this->Html->css('/node_modules/font-awesome/css/font-awesome.min'); ?>
<?php echo $this->Html->css('style'); ?>

<title>
    <?php echo 'PROJECTS'; ?>
</title>

<header class="header-admin">
    <div class="header-admin__logo">
        <span class="header-admin__highlight">Peñaranda</span>
        <span>Admin</span>
    </div>
    <div class="header-admin__logout">
        <button class="header-admin__button" onclick="document.location.href='/superadmin/logout'">Logout</button>
    </div>
</header>

<aside class="admin-sidebar">
    <nav class="admin-sidebar__navigation">
        <ul class="admin-sidebar__list">
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Projects</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/projects/add" class="admin-sidebar__link  admin-sidebar__link--active">
                        <div class="admin-sidebar__item-text">
                            <span>Add Projects</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                    <a href="/admin/projects/view" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>View Projects</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
            </li>
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Government</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/projects" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Add Government</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                    <a href="/admin/projects" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>View Government</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
            </li>
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Tourism</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/projects" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Add Tourism</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                    <a href="/admin/projects" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>View Tourism</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
            </li>
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Services</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/projects" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Add Services</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                    <a href="/admin/projects" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>View Services</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
            </li>
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Gallery</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/projects" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Add Services</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                    <a href="/admin/projects" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>View Services</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
            </li>
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>About us</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/about-us/add" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Add About us</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                    <a href="/admin/about-us/view" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>View About us</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
            </li>
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Alcaldez</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/alcaldez/add" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Add Alcaldez</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                    <a href="/admin/alcaldez/view" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>View Alcaldez</span>
                        </div>
                        <div class="admin-sidebar__item-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </nav>
</aside>

<div class="admin-form">
    <?=
        $this->Form->create('Project', [
            'type'    => "POST",
            'enctype' => "multipart/form-data" ,
            'class'   => "form-field"
        ]);
    ?>
        <div class="form-field__list form-field__list--error">
            <label class="form-field__label">Title :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('title', [
                        'type'     => 'text',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'error'    => false,
                        'class'    => 'form-field__input'
                    ]);
                ?>
                <span class="form-field__error"><?= $this->Form->error('title'); ?></span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Description :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('description', [
                        'type'     => 'textarea',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'class'    => 'form-field__textarea'
                    ]);
                ?>
                <?=
                    $this->Form->error('description', [
                        'class' => "form-field__error"
                    ]);
                ?>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Image :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('Upload.image', [
                        'type'     => 'file',
                        'id'       => 'input-file',
                        'required' => false,
                        'div'      => false,
                        'label'    => false,
                        'class'    => 'input__upload-img'
                    ]);
                ?>
                <div class="form-field__image-wrapper">
                    <img src="/images/placeholder/placeholder.png" class="form-field__image">
                </div>
            </div>
        </div>
        <div class="form-field__button">
            <?=
                $this->Form->submit('Register', ['class' => "form-field__button-register"]);
            ?>
        </div>
    <?= $this->Form->end(); ?>
</div>
<?= $this->Html->script('jquery-3.1.0.min'); ?>
<?= $this->Html->script('common'); ?>

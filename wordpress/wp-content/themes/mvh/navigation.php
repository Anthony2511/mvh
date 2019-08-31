<nav class="nav">
    <h2 class="hidden"><?= __('Menu de navigation', 'wp'); ?></h2>
    <div class="nav__button">
        <div class="nav__button-wrap">
            <div class="nav__icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="nav__bloc">
        <a href="<?= get_home_url(); ?>">
            <figure>
                <img src="<?= $images . '/../../images/logo-mvh.png'; ?>"
                     srcset="<?= $images . '/../../images/logo-mvh@2x.png 2x'; ?>" width="150" height="160" alt="" class="nav__logo">
            </figure>
        </a>
        <ul class="nav__menu <?php if (!is_front_page() && !is_home()): ?> menu-page<?php else: ?><?php endif; ?>">
            <?php global $post;
            $thePostID = $post->ID; ?>
            <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                <li class="nav__item">
                    <a class="nav__link <?php echo $thePostID == $navItem->id ? "active" : ""; ?> <?php if (is_front_page()): ?>span-home<?php else: ?><?php endif; ?>" href="<?= $navItem->url; ?>"
                       title="Vers la page <?php echo $navItem->label; ?>">
                        <span class="nav__span"><?php echo $navItem->label; ?></span></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>

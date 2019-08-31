<?php
/*
Template Name: Page Contact
*/


include('head.php'); ?>
    <body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php get_header(); ?>
<?php include('navigation.php'); ?>


<div class="builder__background">
    <div class="wrap padding-page">
        <h2 class="title title--40 title__bottom-center title__center" aria-level="2" role="heading">
            <?= __('Contactez-nous', 'wp'); ?>
        </h2>
        <div class="contact-page__container">
            <div class="contact-page__bloc contact-page__bloc--left">
                <div class="contact-page__bloc-flex">
                    <div class="contact-page__flex" itemscope itemtype="http://schema.org/Organization">
                        <figure class="contact-page__logo">
                            <img src="<?= $images . '/../../images/logo-mvh.png'; ?>" class="nav__logo"
                                 srcset="<?= $images . '/../../images/logo-mvh@2x.png 2x'; ?>"  itemprop="logo" alt="Logo du site">
                        </figure>
                        <ul class="footer__place">
                            <li class="footer__street">Rue des charrons n°116</li>
                            <li class="footer__li">4800 Verviers</li>
                            <li class="footer__li">Belgique</li>
                        </ul>
                        <ul>
                            <li class="footer__tel">0478 48 86 34</li>
                            <li class="footer__email"><a href="mailto:mvhrejointoyage@yahoo.fr">mvhrejointoyage@yahoo.fr</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contact-page__bloc contact-page__bloc--right">
                <form action="">
                    <legend class="contact-page__form-required">Tous les champs suivis d'un (<span>*</span>) sont obligatoires
                    </legend>
                    <div class="contact-page__form-champ">
                        <label class="contact-page__form-label" for="firstname">Votre prénom <span>*</span></label>
                        <input type="text" class="contact-page__form-input" placeholder="Jean" id="firstname">
                    </div>
                    <div class="contact-page__form-champ">
                        <label class="contact-page__form-label" for="lastname">Votre nom <span>*</span></label>
                        <input type="text" class="contact-page__form-input" placeholder="Dupont" id="lastname">
                    </div>
                    <div class="contact-page__form-champ">
                        <label class="contact-page__form-label" for="email">Votre e-mail <span>*</span></label>
                        <input type="email" class="contact-page__form-input" placeholder="jean.dupont@gmail.com" id="email">
                    </div>
                    <div class="contact-page__form-champ">
                        <label class="contact-page__form-label" for="tel">Votre téléphone</label>
                        <input type="tel" class="contact-page__form-input" placeholder="0478 85 96 52" id="tel">
                    </div>
                    <div class="contact-page__form-champ">
                        <label class="contact-page__form-label" for="sujet">Votre sujet <span>*</span></label>
                        <input type="sujet" class="contact-page__form-input" placeholder="Le sujet de votre message" id="sujet">
                    </div>
                    <div class="contact-page__form-champ">
                        <label class="contact-page__form-label" for="message">Message <span>*</span></label>
                        <textarea name="message" id="message" class="contact-page__form-input textarea" placeholder="Écrivez
                        votre message" cols="40" rows="10"></textarea>
                    </div>
                    <div class="contact-page__form-champ">
                        <label class="contact-page__form-label" for="file">Joindre un fichier</label>
                        <input type="file" id="file">
                    </div>
                    <button type="submit" class="button button--red">
                        <span><?= __('Envoyez votre message','wp'); ?></span>
                        <i class="button--contact"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
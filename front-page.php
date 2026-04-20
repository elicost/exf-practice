<?php get_header(); ?>

<main class="site-main">

    <?php
    $hero_bg         = get_field('hero_background');
    $hero_heading    = get_field('hero_heading')    ?: 'Built for the Modern Web.';
    $hero_subheading = get_field('hero_subheading') ?: 'A classic WordPress theme with ACF, Sass, and clean PHP templates.';
    $hero_class      = $hero_bg ? 'hero hero--has-bg' : 'hero';
    $hero_style      = $hero_bg ? ' style="background-image: url(\'' . esc_url( $hero_bg['url'] ) . '\');"' : '';
    ?>
    <section class="<?php echo $hero_class; ?>"<?php echo $hero_style; ?>>
        <div class="container">
            <h1 class="hero__heading"><?php echo esc_html( $hero_heading ); ?></h1>
            <p class="hero__subheading"><?php echo esc_html( $hero_subheading ); ?></p>
            <a href="#" class="hero__cta">Get Started</a>
        </div>
    </section>

    <?php
    $section_title = get_field('section_title') ?: 'What We Do';
    $section_body  = get_field('section_body');
    ?>
    <?php if ( $section_title || $section_body ) : ?>
    <section class="content-section">
        <div class="container">
            <h2 class="content-section__title"><?php echo esc_html( $section_title ); ?></h2>
            <?php if ( $section_body ) : ?>
                <div class="content-section__body"><?php echo wp_kses_post( $section_body ); ?></div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <section class="cards">
        <div class="container">
            <div class="cards__grid">
                <div class="card">
                    <h3 class="card__title">Value</h3>
                    <p class="card__body">Wholesale pricing, no overhead. Your team gets great coffee every week without the markup of a café or the hassle of running to the store.</p>
                </div>
                <div class="card">
                    <h3 class="card__title">Variety</h3>
                    <p class="card__body">Rotating single-origins and seasonal blends from The Annex's full lineup. Never the same bag twice unless you want it to be.</p>
                </div>
                <div class="card">
                    <h3 class="card__title">Versatility</h3>
                    <p class="card__body">Whole bean or ground, weekly or biweekly, any quantity. The program flexes around your office — not the other way around.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

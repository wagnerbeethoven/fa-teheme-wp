</main>
<!-- <?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer> -->


<footer class="container pb-5">
  <h2 class="visually-hidden-focusable">Rodapé do site</h2>
  <div class="row">
    <div class="col-12 col-md-5 mb-3">
      <h3>
        <img width="200px" title="Sobre <?php bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/img/logo-icon.svg" class="d-block mb-5" alt="Logo do <?php bloginfo('name'); ?>" aria-describedby="descricao-detalhada-logo-rodape">
        <span id="descricao-detalhada-logo-rodape" class="visually-hidden"><?php echo get_theme_mod('logo_alt', 'Descrição alternativa da logo'); ?></span>
      </h3>
      <div class="col-12 col-md-8"><?php echo get_theme_mod('footer_description', 'Descrição do rodapé'); ?></div>
    </div>

    <div class="menu-footer col-12 col-md-3 mb-3">
      <h3 id="menu-rodape" class="pt-3 h4 mb-5">Menu do Site</h3>
      <nav id="menu-paginas-footer">
        <ul class="nav flex-column">
          <?php
          $menu_locations = get_nav_menu_locations();
          if (isset($menu_locations['footer_menu'])):
            $menu = wp_get_nav_menu_items($menu_locations['footer_menu']);
            foreach ($menu as $item):
          ?>
            <li class="nav-item mb-2">
              <a class="nav-link p-0" href="<?php echo $item->url; ?>" title="<?php echo $item->description ?: $item->title; ?>">
                <?php echo $item->title; ?>
              </a>
            </li>
          <?php endforeach; endif; ?>
          <li class="nav-item mb-2">
            <span class="p-0">RSS: <a class="nav-link p-0 d-inline-block" href="<?php bloginfo('rss2_url'); ?>" title="Este RSS irá contemplar tudo que for publicado no site">Site</a> e <a class="nav-link p-0 d-inline-block" href="https://anchor.fm/s/e14f7d9c/podcast/rss" title="Este RSS irá contemplar apenas os episódios">Episódios</a></span>
          </li>
        </ul>
      </nav>
    </div>

    <div class="menu-footer col-12 col-md-4 mb-3">
      <div class="row px-2">
        <h3 id="plataformas-rodape" class="pt-3 px-0 h4 mb-5">Plataformas</h3>
        <nav id="menu-plataformas-footer">
          <ul class="nav row">
            <?php
            // Lista de plataformas armazenada no tema
            $platforms = get_theme_mod('platforms_links', []);
            foreach ($platforms as $platform):
            ?>
              <li class="nav-item mb-2 col-6">
                <a href="<?php echo $platform['url']; ?>" class="nav-link p-0 text-decoration-none">
                  <?php echo $platform['name']; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <div class="d-flex flex-column flex-md-row justify-content-between pt-4 mt-4 w-100 border-top text-center text-md-start">
    <div class="col-12 mb-0 col-md-8 credits">
      <p class="mb-3 mb-md-0"><?php bloginfo('name'); ?> feito no <a href="https://wordpress.org/" title="Site do WordPress - nova aba">WordPress</a> com <span>❤️</span> e <span>☕</span>
      em Olinda, PE &mdash; <a href="<?php echo home_url('/arquivo'); ?>" title="Acesse todas as publicações do site">Todas as publicações do site</a>.</p>
      <p>Este site é membro do <a href="https://a11y-webring.club/"><strong>a11y-webring.club</strong></a>. Acesse o <a href="https://a11y-webring.club/prev">site anterior</a>, <a href="https://a11y-webring.club/next">próximo site</a>, ou um <a href="https://a11y-webring.club/random">site aleatório</a> do <span lang="en">webring</span>.</p>
    </div>
    <ul class="col-12 col-md socials mt-5 mt-md-0 mb-0 d-flex justify-content-around">
      <?php get_template_part('template-parts/social'); ?>
    </ul>
  </div>
</footer>


</div>
<?php wp_footer(); ?>
</body>
</html>
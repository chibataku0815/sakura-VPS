
<header class="mdl-layout__header mdl-color--white">
  <div class="mdl-layout__header-row">
    <a class="brand" href="{{ home_url('/') }}">
      <span class="mdl-layout-title">
        {{-- {{ get_bloginfo('name', 'display') }} --}}
        <?php $upload_dir = wp_upload_dir(); ?>
        <img src="<?php echo $upload_dir['baseurl']; ?>/2017/06/logo.svg" alt="日本スニーカー買取センター" class="logo">
      </span>
    </a>
    <div class="mdl-layout-spacer"></div>
    <nav class="mdl-navigation">
      @if (has_nav_menu('primary_navigation'))
        <?php $menuParameters = array( 'container' => false, 'echo' => false, 'items_wrap' => '%3$s', 'depth' => 0 );
        echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
        ?>
      @endif
    </nav>
  </div>
</header>

<div class="mdl-layout__drawer">
  <span class="mdl-layout-title">Title</span>
  <nav class="mdl-navigation">
    <a class="mdl-navigation__link" href="">Link</a>
    <a class="mdl-navigation__link" href="">Link</a>
    <a class="mdl-navigation__link" href="">Link</a>
    <a class="mdl-navigation__link" href="">Link</a>
  </nav>
</div>

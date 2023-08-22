<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MFP8KHJ');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:locale" content="ja_JP">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="人材,バンク,NEWS,CxO" />
    <meta name="description" content="CxO人材バンクは、上場企業や上場準備企業など、成長企業、成長産業のCxOポジションに特化した人材紹介サービスを行っています。
    成長企業の経営者の学びやIRを目的としたコミュニティの運営により、よりダイレクトに活躍できるポジションへのキャリアアップを支援しています。" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:title" content="CxO人材バンクNEWS"/>
    <meta property="og:type" content="article" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="CxO人材バンクNEWS" />
    <meta property="og:description" content="CxO人材バンクは、上場企業や上場準備企業など、成長企業、成長産業のCxOポジションに特化した人材紹介サービスを行っています。" />
    
    <title>
      <?php
      if(is_front_page() || is_home()) {
        echo get_bloginfo('name');
      } else{
          wp_title('|',true,'right');
          echo bloginfo('name'); 
      }
      ?>      
    </title>
	<link rel="shortcut icon" href="<?php echo T_DIRE_URI; ?>/favicon.ico">
    <link rel="icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.ico">
    <link rel="apple-touch-icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.ico">
    <?php wp_head(); ?>
</head>

<?php 
  global $post;
  
  if( $post->post_type != "page" ) {
    $post_slug = $post->post_type;
  } else {
    $post_slug = $post->post_name;
  }
  if( is_single() ) {
    $category_arr = get_the_category( $post->ID );
    $post_slug = $category_arr[0]->slug;
  }
?>

<?php
$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);
?>
<?php if(is_single()): ?>
<body <?php body_class();?> id="body<?php echo get_post_type(); ?>">
<?php else: ?>
<body <?php body_class();?> id="body<?php echo $path_parts['filename']; ?>">
<?php endif; ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFP8KHJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header">
        <div class="header-top">
            <h1 class="header-logo">
                <a href="<?php echo HOME; ?>">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.png" alt="CxO人材バンク">
                </a>
            </h1>
            <div class="contact-wrapper">
                <?php get_search_form(); ?>                
                <ul class="contact-btns">
                    <li>
                        <a class="btn long-term" href="https://go.cxo-jinzaibank.jp/l/1022123/2023-08-02/bcd7">
                            <span>中長期のキャリア相談</span>
                        </a>    
                    </li>
                    <li>
                        <a class="btn job-consult" href="https://go.cxo-jinzaibank.jp/l/1022123/2023-04-14/3byc">
                            <span>具体的な転職相談</span>
                        </a>    
                    </li>
                </ul>
            </div>
        </div>
        <nav class="header-nav">
            <ul class="nav-menu">
                <li>
                    <a href="<?php echo HOME . 'news'; ?>" class="menu-link">
                        <span>CxO人材バンクNEWS</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'features'; ?>" class="menu-link">
                        <span>CxO人材バンクの特長</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'case'; ?>" class="menu-link">
                        <span>転職成功事例</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'flow'; ?>" class="menu-link">
                        <span>転職支援の流れ</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'interview'; ?>" class="menu-link">
                        <span>CxOインタビュー</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'column'; ?>" class="menu-link">
                        <span>転職コラム</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="mobile-nav">
        <nav class="mobile-nav-container">
            <ul class="mobile-nav-menu">
                <li>
                    <a href="<?php echo HOME . 'news'; ?>" class="menu-link">
                        <span>CxO人材バンクNEWS</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'features'; ?>" class="menu-link">
                        <span>CxO人材バンクの特長</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'case'; ?>" class="menu-link">
                        <span>転職成功事例</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'flow'; ?>" class="menu-link">
                        <span>転職支援の流れ</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'interview'; ?>" class="menu-link">
                        <span>CxOインタビュー</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'column'; ?>" class="menu-link">
                        <span>転職コラム</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
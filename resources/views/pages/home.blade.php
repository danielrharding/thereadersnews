@extends('layouts.default')
@section('content')
    <?php
    function limit_words($words, $limit, $append = '') {
        // Add 1 to the specified limit becuase arrays start at 0
        $limit = $limit+1;
        // Store each individual word as an array element
        // Up to the limit
        $words = explode(' ', $words, $limit);
        // Shorten the array by 1 because that final element will be the sum of all the words after the limit
        array_pop($words);
        // Implode the array for output, and append an ellipse
        $words = implode(' ', $words) . $append;
        // Return the result
        return $words;
    }

    function article_date($articleDate) {
        $date = date_create($articleDate);
        return date_format($date,"M d, Y");
    }

    ?>
    <div class="container-fluid" style="padding:0px;">
        <div class="newspaper-x-header-widget-area" style="margin-top:0px;">
            <div id="newspaper_x_header_module-2" class="widget newspaper_x_widgets">
                <div class="newspaper-x-recent-posts container">
                    <ul>
                        <li class="blazy b-loaded" id="newspaper-x-recent-post-0" style="background-image: url(<?php echo $feed->articles[0]->urlToImage; ?>); background-size: cover;">
                            <div class="newspaper-x-post-info">
                                <h1>
                                    <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($feed->articles[0]->title, 5) ?></a>
                                </h1>
                                <span class="newspaper-x-category">
                                    <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                </span>
                                <span class="newspaper-x-date"><?php echo article_date($feed->articles[0]->publishedAt); ?></span>
                            </div>
                        </li>
                        <li class="blazy b-loaded" id="newspaper-x-recent-post-1" style="background-image: url(<?php echo $feed->articles[1]->urlToImage; ?>); background-size: cover;">
                            <div class="newspaper-x-post-info">
                                <h6>
                                    <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($feed->articles[1]->title, 8) ?></a>
                                </h6>
                                <span class="newspaper-x-category">
                                    <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                </span>
                                <span class="newspaper-x-date"><?php echo article_date($feed->articles[1]->publishedAt); ?></span>
                            </div>
                        </li>
                        <li class="blazy b-loaded" id="newspaper-x-recent-post-2" style="background-image: url(<?php echo $feed->articles[2]->urlToImage; ?>); background-size: cover;">
                            <div class="newspaper-x-post-info">
                                <h6>
                                    <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($feed->articles[2]->title, 8) ?></a>
                                </h6>
                                <span class="newspaper-x-category">
                                    <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                </span>
                                <span class="newspaper-x-date"><?php echo article_date($feed->articles[2]->publishedAt); ?></span>
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container site-content">
            <div class="row">
                <div class="col-md-12 newspaper-x-content newspaper-x-with-sidebar">
                    <div id="newspaper_x_widget_posts_a-4" class="widget newspaper_x_widgets">
                        <div class="site-content newspaper-spacer-a">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="newspaper-x-recent-posts newspaper-x-recent-posts-a">
                                        <ul>
                                            <li class="blazy  b-loaded" id="newspaper-x-recent-post-4" style="background-image: url(<?php echo $feed->articles[3]->urlToImage; ?>);">
                                                <div class="newspaper-x-post-info">
                                                    <h6>
                                                        <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($feed->articles[3]->title, 3); ?></a>
                                                    </h6>
                                                    <span class="newspaper-x-category">
                                                        <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                                    </span>
                                                    <span class="newspaper-x-date"><?php echo article_date($feed->articles[3]->publishedAt); ?></span>
                                                </div>
                                            </li>
                                            <li class="blazy  b-loaded" id="newspaper-x-recent-post-4" style="background-image: url(<?php echo $feed->articles[4]->urlToImage; ?>);">
                                                <div class="newspaper-x-post-info">
                                                    <h6>
                                                        <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($feed->articles[4]->title, 3); ?></a>
                                                    </h6>
                                                    <span class="newspaper-x-category">
                                                        <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                                    </span>
                                                    <span class="newspaper-x-date"><?php echo article_date($feed->articles[4]->publishedAt); ?></span>
                                                </div>
                                            </li>
                                            <li class="blazy  b-loaded" id="newspaper-x-recent-post-4" style="background-image: url(<?php echo $feed->articles[5]->urlToImage; ?>);">
                                                <div class="newspaper-x-post-info">
                                                    <h6>
                                                        <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($feed->articles[5]->title, 3); ?></a>
                                                    </h6>
                                                    <span class="newspaper-x-category">
                                                        <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                                    </span>
                                                    <span class="newspaper-x-date"><?php echo article_date($feed->articles[5]->publishedAt); ?></span>
                                                </div>
                                            </li>
                                            <li class="blazy  b-loaded" id="newspaper-x-recent-post-4" style="background-image: url(<?php echo $feed->articles[6]->urlToImage; ?>);">
                                                <div class="newspaper-x-post-info">
                                                    <h6>
                                                        <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($feed->articles[6]->title, 3); ?></a>
                                                    </h6>
                                                    <span class="newspaper-x-category">
                                                        <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                                    </span>
                                                    <span class="newspaper-x-date"><?php echo article_date($feed->articles[6]->publishedAt); ?></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- recent posts-->
                                </div>
                                <!-- col-md-12 -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- posts a-->
                    </div>
                    <div id="newspaper_x_banner-3" class="newspaper-x-type-image widget widget_newspaper_x_banner">
                        <div class="newspaper-x-image-banner">
                            <a href="https://colorlib.com">	<img width="729" height="90" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner.png" class="attachment- size-" alt="" srcset="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner.png 729w, https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner-300x37.png 300w" sizes="(max-width: 729px) 100vw, 729px">	</a>
                        </div>
                    </div>
                    <div id="newspaper_x_widget_posts_c-2" class="widget newspaper_x_widgets">
                        <h3 class="widget-title"><span>Latest News</span></h3>
                        <div class="row newspaper-x-layout-c-row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="newspaper-x-blog-post-layout-c">
                                    <div class="newspaper-x-image">
                                        <a href="<?php echo url("/article/1/name"); ?>">
                                            <img width="550" height="360" src="<?php echo $latest->articles[0]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                        </a>
                                    </div>
                                    <div class="newspaper-x-title">
                                        <h4>
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($latest->articles[0]->title, 4); ?></a>
                                        </h4>
                                    </div>
                                    <span class="newspaper-x-author">
                                        <a href="<?php echo url("/article/1/name"); ?>"><?php echo $latest->articles[0]->author; ?></a>
                                    </span>
                                    <span class="newspaper-x-date"><?php echo article_date($latest->articles[0]->publishedAt); ?></span>
                                    <div class="newspaper-x-content">
                                        <?php echo limit_words($latest->articles[0]->description, 20); ?> <a href="<?php echo url("/article/1/name"); ?>">...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="newspaper-x-blog-post-layout-c">
                                    <div class="newspaper-x-image">
                                        <a href="<?php echo url("/article/1/name"); ?>">
                                            <img width="550" height="360" src="<?php echo $latest->articles[1]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                        </a>
                                    </div>
                                    <div class="newspaper-x-title">
                                        <h4>
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($latest->articles[1]->title, 4); ?></a>
                                        </h4>
                                    </div>
                                    <span class="newspaper-x-author">
                                        <a href="<?php echo url("/article/1/name"); ?>"><?php echo $latest->articles[1]->author; ?></a>
                                    </span>
                                    <span class="newspaper-x-date"><?php echo article_date($latest->articles[1]->publishedAt); ?></span>
                                    <div class="newspaper-x-content">
                                        <?php echo limit_words($latest->articles[1]->description, 20); ?> <a href="<?php echo url("/article/1/name"); ?>">...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="newspaper-x-blog-post-layout-c">
                                    <div class="newspaper-x-image">
                                        <a href="<?php echo url("/article/1/name"); ?>">
                                            <img width="550" height="360" src="<?php echo $latest->articles[2]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                        </a>
                                    </div>
                                    <div class="newspaper-x-title">
                                        <h4>
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($latest->articles[2]->title, 4); ?></a>
                                        </h4>
                                    </div>
                                    <span class="newspaper-x-author">
                                        <a href="<?php echo url("/article/1/name"); ?>"><?php echo $latest->articles[2]->author; ?></a>
                                    </span>
                                    <span class="newspaper-x-date"><?php echo article_date($latest->articles[2]->publishedAt); ?></span>
                                    <div class="newspaper-x-content">
                                        <?php echo limit_words($latest->articles[2]->description, 20); ?> <a href="<?php echo url("/article/1/name"); ?>">...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="newspaper_x_banner-5" class="newspaper-x-type-image widget widget_newspaper_x_banner">
                        <div class="newspaper-x-image-banner">
                            <img width="729" height="90" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner.png" class="attachment- size-" alt="" srcset="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner.png 729w, https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner-300x37.png 300w" sizes="(max-width: 729px) 100vw, 729px">
                        </div>
                    </div>
                    <div id="newspaper_x_widget_posts_b-3" class="widget newspaper_x_widgets">
                        <h3 class="widget-title"><span>Events</span></h3>
                        <div class="row newspaper-x-layout-b-row">
                            <div class="col-md-4 col-xs-6">
                                <div class="newspaper-x-blog-post-layout-b">
                                    <div class="newspaper-x-image">
                                        <a href="<?php echo url("/article/1/name"); ?>">
                                            <img width="550" height="360" src="<?php echo $event->articles[0]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                        </a>
                                    </div>
                                    <div class="newspaper-x-title">
                                        <h4>
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($event->articles[0]->title, 4); ?></a>
                                        </h4>
                                    </div>
                                    <span class="newspaper-x-author">
                                        <a href="<?php echo url("/article/1/name"); ?>"><?php echo $event->articles[0]->author; ?></a>
                                    </span>
                                    <span class="newspaper-x-date"><?php echo article_date($event->articles[0]->publishedAt); ?></span>
                                    <div class="newspaper-x-content">
                                        <?php echo limit_words($event->articles[0]->description, 20); ?> <a href="<?php echo url("/article/1/name"); ?>">...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="newspaper-x-blog-post-layout-b">
                                    <div class="newspaper-x-image">
                                        <a href="<?php echo url("/article/1/name"); ?>">
                                            <img width="550" height="360" src="<?php echo $event->articles[1]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                        </a>
                                    </div>
                                    <div class="newspaper-x-title">
                                        <h4>
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($event->articles[1]->title, 4); ?></a>
                                        </h4>
                                    </div>
                                    <span class="newspaper-x-author">
                                        <a href="<?php echo url("/article/1/name"); ?>"><?php echo $event->articles[1]->author; ?></a>
                                    </span>
                                    <span class="newspaper-x-date"><?php echo article_date($event->articles[0]->publishedAt); ?></span>
                                    <div class="newspaper-x-content">
                                        <?php echo limit_words($event->articles[1]->description, 20); ?> <a href="<?php echo url("/article/1/name"); ?>">...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="newspaper-x-blog-post-layout-b">
                                    <div class="newspaper-x-image">
                                        <a href="<?php echo url("/article/1/name"); ?>">
                                            <img width="550" height="360" src="<?php echo $event->articles[2]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                        </a>
                                    </div>
                                    <div class="newspaper-x-title">
                                        <h4>
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($event->articles[2]->title, 4); ?></a>
                                        </h4>
                                    </div>
                                    <span class="newspaper-x-author">
                                        <a href="<?php echo url("/article/1/name"); ?>"><?php echo $event->articles[2]->author; ?></a>
                                    </span>
                                    <span class="newspaper-x-date"><?php echo article_date($event->articles[2]->publishedAt); ?></span>
                                    <div class="newspaper-x-content">
                                        <?php echo limit_words($event->articles[2]->description, 20); ?> <a href="<?php echo url("/article/1/name"); ?>">...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="newspaper_x_widget_posts_d-3" class="widget newspaper_x_widgets">
                        <div class="row newspaper-x-layout-b-row">
                            <div class="col-md-4 col-xs-6 ">
                                <div class="newspaper-x-blog-post-layout-b border">
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="newspaper-x-image">
                                                <a href="<?php echo url("/article/1/name"); ?>">
                                                    <img width="550" height="360" src="<?php echo $event->articles[3]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="newspaper-x-title">
                                                <h3>
                                                    <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($event->articles[3]->title, 4); ?></a>
                                                </h3>
                                            </div>
                                            <span class="newspaper-x-date"><?php echo article_date($event->articles[3]->publishedAt); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 ">
                                <div class="newspaper-x-blog-post-layout-b border">
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="newspaper-x-image">
                                                <a href="<?php echo url("/article/1/name"); ?>">
                                                    <img width="550" height="360" src="<?php echo $event->articles[4]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="newspaper-x-title">
                                                <h3>
                                                    <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($event->articles[4]->title, 4); ?></a>
                                                </h3>
                                            </div>
                                            <span class="newspaper-x-date"><?php echo article_date($event->articles[4]->publishedAt); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 ">
                                <div class="newspaper-x-blog-post-layout-b border">
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="newspaper-x-image">
                                                <a href="<?php echo url("/article/1/name"); ?>">
                                                    <img width="550" height="360" src="<?php echo $event->articles[5]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="newspaper-x-title">
                                                <h3>
                                                    <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($event->articles[5]->title, 4); ?></a>
                                                </h3>
                                            </div>
                                            <span class="newspaper-x-date"><?php echo article_date($event->articles[5]->publishedAt); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row newspaper-x-layout-b-row">
                            <div class="col-md-4 col-xs-6 ">
                                <div class="newspaper-x-blog-post-layout-b border">
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="newspaper-x-image">
                                                <a href="<?php echo url("/article/1/name"); ?>">
                                                    <img width="550" height="360" src="<?php echo $event->articles[6]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="newspaper-x-title">
                                                <h3>
                                                    <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($event->articles[6]->title, 4); ?></a>
                                                </h3>
                                            </div>
                                            <span class="newspaper-x-date"><?php echo article_date($event->articles[6]->publishedAt); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 ">
                                <div class="newspaper-x-blog-post-layout-b border">
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="newspaper-x-image">
                                                <a href="<?php echo url("/article/1/name"); ?>">
                                                    <img width="550" height="360" src="<?php echo $event->articles[7]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="newspaper-x-title">
                                                <h3>
                                                    <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($event->articles[7]->title, 4); ?></a>
                                                </h3>
                                            </div>
                                            <span class="newspaper-x-date"><?php echo article_date($event->articles[7]->publishedAt); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 ">
                                <div class="newspaper-x-blog-post-layout-b border">
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="newspaper-x-image">
                                                <a href="<?php echo url("/article/1/name"); ?>">
                                                    <img width="550" height="360" src="<?php echo $event->articles[8]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="newspaper-x-title">
                                                <h3>
                                                    <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($event->articles[8]->title, 4); ?></a>
                                                </h3>
                                            </div>
                                            <span class="newspaper-x-date"><?php echo article_date($event->articles[8]->publishedAt); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="newspaper-x-after-content-area">
                <div class="row">
                    <div class="col-xs-12 newspaper-x-after-content-sidebar">
                        <div id="newspaper_x_banner-4" class="newspaper-x-type-image widget widget_newspaper_x_banner">
                            <div class="newspaper-x-image-banner">
                                <a href="<?php echo url("/article/1/name"); ?>">
                                    <img width="729" height="90" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner.png" class="attachment- size-" alt="" srcset="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner.png 729w, https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner-300x37.png 300w" sizes="(max-width: 729px) 100vw, 729px">
                                </a>
                            </div>
                        </div>
                        <div id="newspaper_x_widget_posts_b-4" class="widget newspaper_x_widgets">
                            <h3 class="widget-title"><span>Editorial</span></h3>
                            <div class="row newspaper-x-layout-b-row">
                                <div class="col-md-3 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">
                                                <img width="550" height="360" src="<?php echo $editorial->articles[0]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($editorial->articles[0]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo $editorial->articles[0]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date">May 10, 2017</span>
                                        <div class="newspaper-x-content">
                                            <?php echo limit_words($editorial->articles[0]->description, 20); ?> <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="<?php echo url("/article/1/name"); ?>">
                                                <img width="550" height="360" src="<?php echo $editorial->articles[1]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($editorial->articles[1]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo $editorial->articles[1]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date">May 10, 2017</span>
                                        <div class="newspaper-x-content">
                                            <?php echo limit_words($editorial->articles[1]->description, 20); ?> <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="<?php echo url("/article/1/name"); ?>">
                                                <img width="550" height="360" src="<?php echo $editorial->articles[2]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($editorial->articles[2]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo $editorial->articles[2]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date">May 10, 2017</span>
                                        <div class="newspaper-x-content">
                                            <?php echo limit_words($editorial->articles[2]->description, 20); ?> <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="<?php echo url("/article/1/name"); ?>">
                                                <img width="550" height="360" src="<?php echo $editorial->articles[3]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($editorial->articles[3]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo $editorial->articles[3]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date">May 10, 2017</span>
                                        <div class="newspaper-x-content">
                                            <?php echo limit_words($editorial->articles[3]->description, 20); ?> <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="newspaper_x_widget_posts_b-2" class="widget newspaper_x_widgets">
                            <h3 class="widget-title"><span>The World</span></h3>
                            <div class="row newspaper-x-layout-b-row">
                                <div class="col-md-4 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="<?php echo url("/article/1/name"); ?>">
                                                <img width="550" height="360" src="<?php echo $world->articles[0]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($world->articles[0]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo $world->articles[0]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date"><?php echo article_date($world->articles[0]->publishedAt); ?></span>
                                        <div class="newspaper-x-content">
                                            <?php echo limit_words($world->articles[0]->description, 20); ?> <a href="<?php echo url("/article/1/name"); ?>">...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="<?php echo url("/article/1/name"); ?>">
                                                <img width="550" height="360" src="<?php echo $world->articles[1]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($world->articles[1]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo $world->articles[1]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date"><?php echo article_date($world->articles[1]->publishedAt); ?></span>
                                        <div class="newspaper-x-content">
                                            <?php echo limit_words($world->articles[1]->description, 20); ?> <a href="<?php echo url("/article/1/name"); ?>">...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="<?php echo url("/article/1/name"); ?>">
                                                <img width="550" height="360" src="<?php echo $world->articles[2]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="<?php echo url("/article/1/name"); ?>"><?php echo limit_words($world->articles[2]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="<?php echo url("/article/1/name"); ?>"><?php echo $world->articles[2]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date"><?php echo article_date($world->articles[2]->publishedAt); ?></span>
                                        <div class="newspaper-x-content">
                                            <?php echo limit_words($world->articles[2]->description, 20); ?> <a href="<?php echo url("/article/1/name"); ?>">...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="newspaper_x_widget_posts_d-2" class="widget newspaper_x_widgets">
                            <div class="row newspaper-x-layout-b-row">
                                <div class="col-md-6 col-xs-6  ">
                                    <div class="newspaper-x-blog-post-layout-b border">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="newspaper-x-image">
                                                    <a href="<?php echo url("/article/1/name"); ?>">
                                                        <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/04_the-world_article_04-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-xs-12 card-info">
                                                <div class="newspaper-x-title">
                                                    <h4>
                                                        <a href="<?php echo url("/article/1/name"); ?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                                    </h4>
                                                </div>
                                                <span class="newspaper-x-author">
                                                    <a href="<?php echo url("/article/1/name"); ?>">raibercristian</a>
                                                </span>
                                                <span class="newspaper-x-date">May 10, 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6  ">
                                    <div class="newspaper-x-blog-post-layout-b border">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="newspaper-x-image">
                                                    <a href="<?php echo url("/article/1/name"); ?>">
                                                        <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/04_the-world_article_05-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-xs-12 card-info">
                                                <div class="newspaper-x-title">
                                                    <h4>
                                                        <a href="<?php echo url("/article/1/name"); ?>">Nunc dictum condimentum cursus votum es atium</a>
                                                    </h4>
                                                </div>
                                                <span class="newspaper-x-author">
                                                    <a href="<?php echo url("/article/1/name"); ?>">raibercristian</a>
                                                </span>
                                                <span class="newspaper-x-date">May 10, 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row newspaper-x-layout-b-row">
                                <div class="col-md-6 col-xs-6  ">
                                    <div class="newspaper-x-blog-post-layout-b border">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="newspaper-x-image">
                                                    <a href="<?php echo url("/article/1/name"); ?>">
                                                        <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/04_the-world_article_06-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-xs-12 card-info">
                                                <div class="newspaper-x-title">
                                                    <h4>
                                                        <a href="<?php echo url("/article/1/name"); ?>">Maecenas tincidunt posuere quam, eu consectetur justo</a>
                                                    </h4>
                                                </div>
                                                <span class="newspaper-x-author">
                                                    <a href="<?php echo url("/article/1/name"); ?>">raibercristian</a>
                                                </span>
                                                <span class="newspaper-x-date">May 10, 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6  ">
                                    <div class="newspaper-x-blog-post-layout-b border">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="newspaper-x-image">
                                                    <a href="<?php echo url("/article/1/name"); ?>">
                                                        <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/04_the-world_article_07-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-xs-12 card-info">
                                                <div class="newspaper-x-title">
                                                    <h4>
                                                        <a href="<?php echo url("/article/1/name"); ?>">In odio sapien, accumsan ut dolor vel istum…</a>
                                                    </h4>
                                                </div>
                                                <span class="newspaper-x-author">
                                                    <a href="<?php echo url("/article/1/name"); ?>">raibercristian</a>
                                                </span>
                                                <span class="newspaper-x-date">May 10, 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.row-->
            </section>
        </div>
    </div>
@stop
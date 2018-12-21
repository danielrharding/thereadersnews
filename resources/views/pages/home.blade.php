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
                        <li class="blazy b-loaded" id="newspaper-x-recent-post-0" style="background-image: url(<?php echo $feed[0]->urlToImage; ?>); background-size: cover;">
                            <div class="newspaper-x-post-info">
                                <h1>
                                    <a href="{{ route('article.show', [ 'id' => $feed[0]->id, 'title' => $feed[0]->getFriendlyLink() ]) }}"><?php echo limit_words($feed[0]->title, 5) ?></a>
                                </h1>
                                <span class="newspaper-x-category">
                                    <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                </span>
                                <span class="newspaper-x-date"><?php echo article_date($feed[0]->publishedAt); ?></span>
                            </div>
                        </li>
                        <li class="blazy b-loaded" id="newspaper-x-recent-post-1" style="background-image: url(<?php echo $feed[1]->urlToImage; ?>); background-size: cover;">
                            <div class="newspaper-x-post-info">
                                <h6>
                                    <a href="{{ route('article.show', [ 'id' => $feed[1]->id, 'title' => $feed[1]->getFriendlyLink() ]) }}"><?php echo limit_words($feed[1]->title, 8) ?></a>
                                </h6>
                                <span class="newspaper-x-category">
                                    <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                </span>
                                <span class="newspaper-x-date"><?php echo article_date($feed[1]->publishedAt); ?></span>
                            </div>
                        </li>
                        <li class="blazy b-loaded" id="newspaper-x-recent-post-2" style="background-image: url(<?php echo $feed[2]->urlToImage; ?>); background-size: cover;">
                            <div class="newspaper-x-post-info">
                                <h6>
                                    <a href="{{ route('article.show', [ 'id' => $feed[2]->id, 'title' => $feed[2]->getFriendlyLink() ]) }}"><?php echo limit_words($feed[2]->title, 8) ?></a>
                                </h6>
                                <span class="newspaper-x-category">
                                    <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                </span>
                                <span class="newspaper-x-date"><?php echo article_date($feed[2]->publishedAt); ?></span>

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
                                            <li class="blazy  b-loaded" id="newspaper-x-recent-post-4" style="background-image: url(<?php echo $feed[3]->urlToImage; ?>);">
                                                <div class="newspaper-x-post-info">
                                                    <h6>
                                                        <a href="{{ route('article.show', [ 'id' => $feed[3]->id, 'title' => $feed[3]->getFriendlyLink() ]) }}"><?php echo limit_words($feed[3]->title, 3); ?></a>
                                                    </h6>
                                                    <span class="newspaper-x-category">
                                                        <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                                    </span>
                                                    <span class="newspaper-x-date"><?php echo article_date($feed[3]->publishedAt); ?></span>
                                                </div>
                                            </li>
                                            <li class="blazy  b-loaded" id="newspaper-x-recent-post-4" style="background-image: url(<?php echo $feed[4]->urlToImage; ?>);">
                                                <div class="newspaper-x-post-info">
                                                    <h6>
                                                        <a href="{{ route('article.show', [ 'id' => $feed[4]->id, 'title' => $feed[4]->getFriendlyLink() ]) }}"><?php echo limit_words($feed[4]->title, 3); ?></a>
                                                    </h6>
                                                    <span class="newspaper-x-category">
                                                        <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                                    </span>
                                                    <span class="newspaper-x-date"><?php echo article_date($feed[4]->publishedAt); ?></span>
                                                </div>
                                            </li>
                                            <li class="blazy  b-loaded" id="newspaper-x-recent-post-4" style="background-image: url(<?php echo $feed[5]->urlToImage; ?>);">
                                                <div class="newspaper-x-post-info">
                                                    <h6>
                                                        <a href="{{ route('article.show', [ 'id' => $feed[5]->id, 'title' => $feed[5]->getFriendlyLink() ]) }}"><?php echo limit_words($feed[5]->title, 3); ?></a>
                                                    </h6>
                                                    <span class="newspaper-x-category">
                                                        <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                                    </span>
                                                    <span class="newspaper-x-date"><?php echo article_date($feed[5]->publishedAt); ?></span>
                                                </div>
                                            </li>
                                            <li class="blazy  b-loaded" id="newspaper-x-recent-post-4" style="background-image: url(<?php echo $feed[6]->urlToImage; ?>);">
                                                <div class="newspaper-x-post-info">
                                                    <h6>
                                                        <a href="{{ route('article.show', [ 'id' => $feed[6]->id, 'title' => $feed[6]->getFriendlyLink() ]) }}"><?php echo limit_words($feed[6]->title, 3); ?></a>
                                                    </h6>
                                                    <span class="newspaper-x-category">
                                                        <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                                    </span>
                                                    <span class="newspaper-x-date"><?php echo article_date($feed[6]->publishedAt); ?></span>
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
                                        <a href="{{ route('article.show', [ 'id' => $feed[0]->id, 'title' => $latest[0]->getFriendlyLink() ]) }}">
                                            <img width="550" height="360" src="<?php echo $latest[0]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                        </a>
                                    </div>
                                    <div class="newspaper-x-title">
                                        <h4>
                                            <a href="{{ route('article.show', [ 'id' => $latest[0]->id, 'title' => $latest[0]->getFriendlyLink() ]) }}"><?php echo limit_words($latest[0]->title, 4); ?></a>
                                        </h4>
                                    </div>
                                    <span class="newspaper-x-author">
                                        <a href="{{ route('article.show', [ 'id' => $latest[0]->id, 'title' => $latest[0]->getFriendlyLink() ]) }}"><?php echo $latest[0]->author; ?></a>
                                    </span>
                                    <span class="newspaper-x-date"><?php echo article_date($latest[0]->publishedAt); ?></span>
                                    <div class="newspaper-x-content">
                                        {{ $latest[0]->shortContent(20) }} <a href="{{ route('article.show', [ 'id' => $feed[0]->id, 'title' => $latest[0]->getFriendlyLink() ]) }}">...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="newspaper-x-blog-post-layout-c">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $feed[1]->id, 'title' => $latest[1]->getFriendlyLink() ]) }}">
                                            <img width="550" height="360" src="<?php echo $latest[1]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                        </a>
                                    </div>
                                    <div class="newspaper-x-title">
                                        <h4>
                                            <a href="{{ route('article.show', [ 'id' => $latest[1]->id, 'title' => $latest[1]->getFriendlyLink() ]) }}"><?php echo limit_words($latest[1]->title, 4); ?></a>
                                        </h4>
                                    </div>
                                    <span class="newspaper-x-author">
                                        <a href="{{ route('article.show', [ 'id' => $latest[1]->id, 'title' => $latest[1]->getFriendlyLink() ]) }}"><?php echo $latest[1]->author; ?></a>
                                    </span>
                                    <span class="newspaper-x-date"><?php echo article_date($latest[1]->publishedAt); ?></span>
                                    <div class="newspaper-x-content">
                                        {{ $latest[1]->shortContent(20) }} <a href="{{ route('article.show', [ 'id' => $feed[1]->id, 'title' => $latest[1]->getFriendlyLink() ]) }}">...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="newspaper-x-blog-post-layout-c">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $feed[2]->id, 'title' => $latest[2]->getFriendlyLink() ]) }}">
                                            <img width="550" height="360" src="<?php echo $latest[2]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                        </a>
                                    </div>
                                    <div class="newspaper-x-title">
                                        <h4>
                                            <a href="{{ route('article.show', [ 'id' => $latest[2]->id, 'title' => $latest[2]->getFriendlyLink() ]) }}"><?php echo limit_words($latest[2]->title, 4); ?></a>
                                        </h4>
                                    </div>
                                    <span class="newspaper-x-author">
                                        <a href="{{ route('article.show', [ 'id' => $latest[2]->id, 'title' => $latest[2]->getFriendlyLink() ]) }}"><?php echo $latest[2]->author; ?></a>
                                    </span>
                                    <span class="newspaper-x-date"><?php echo article_date($latest[2]->publishedAt); ?></span>
                                    <div class="newspaper-x-content">
                                        {{ $latest[2]->shortContent(20) }} <a href="{{ route('article.show', [ 'id' => $feed[2]->id, 'title' => $latest[2]->getFriendlyLink() ]) }}">...</a>
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
                                        <a href="{{ route('article.show', [ 'id' => $event[2]->id, 'title' => $event[0]->getFriendlyLink() ]) }}">
                                            <img width="550" height="360" src="<?php echo $event[0]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                        </a>
                                    </div>
                                    <div class="newspaper-x-title">
                                        <h4>
                                            <a href="{{ route('article.show', [ 'id' => $event[2]->id, 'title' => $event[2]->getFriendlyLink() ]) }}"><?php echo limit_words($event[0]->title, 4); ?></a>
                                        </h4>
                                    </div>
                                    <span class="newspaper-x-author">
                                        <a href="{{ route('article.show', [ 'id' => $event[2]->id, 'title' => $event[0]->getFriendlyLink() ]) }}"><?php echo $event[0]->author; ?></a>
                                    </span>
                                    <span class="newspaper-x-date"><?php echo article_date($event[0]->publishedAt); ?></span>
                                    <div class="newspaper-x-content">
                                        {{ $event[0]->shortContent(20) }} <a href="{{ route('article.show', [ 'id' => $feed[2]->id, 'title' => $event[0]->getFriendlyLink() ]) }}">...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="newspaper-x-blog-post-layout-b">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $event[1]->id, 'title' => $event[1]->getFriendlyLink() ]) }}">
                                            <img width="550" height="360" src="<?php echo $event[1]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                        </a>
                                    </div>
                                    <div class="newspaper-x-title">
                                        <h4>
                                            <a href="{{ route('article.show', [ 'id' => $event[1]->id, 'title' => $event[1]->getFriendlyLink() ]) }}"><?php echo limit_words($event[1]->title, 4); ?></a>
                                        </h4>
                                    </div>
                                    <span class="newspaper-x-author">
                                        <a href="{{ route('article.show', [ 'id' => $event[1]->id, 'title' => $event[1]->getFriendlyLink() ]) }}"><?php echo $event[1]->author; ?></a>
                                    </span>
                                    <span class="newspaper-x-date"><?php echo article_date($event[0]->publishedAt); ?></span>
                                    <div class="newspaper-x-content">
                                        {{ $event[1]->shortContent(20) }} <a href="{{ route('article.show', [ 'id' => $event[1]->id, 'title' => $event[1]->getFriendlyLink() ]) }}">...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                <div class="newspaper-x-blog-post-layout-b">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $event[2]->id, 'title' => $event[2]->getFriendlyLink() ]) }}">
                                            <img width="550" height="360" src="<?php echo $event[2]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                        </a>
                                    </div>
                                    <div class="newspaper-x-title">
                                        <h4>
                                            <a href="{{ route('article.show', [ 'id' => $event[2]->id, 'title' => $event[2]->getFriendlyLink() ]) }}"><?php echo limit_words($event[2]->title, 4); ?></a>
                                        </h4>
                                    </div>
                                    <span class="newspaper-x-author">
                                        <a href="{{ route('article.show', [ 'id' => $event[2]->id, 'title' => $event[2]->getFriendlyLink() ]) }}"><?php echo $event[2]->author; ?></a>
                                    </span>
                                    <span class="newspaper-x-date"><?php echo article_date($event[2]->publishedAt); ?></span>
                                    <div class="newspaper-x-content">
                                        {{ $event[2]->shortContent(20) }} <a href="{{ route('article.show', [ 'id' => $event[2]->id, 'title' => $event[2]->getFriendlyLink() ]) }}">...</a>
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
                                                <a href="{{ route('article.show', [ 'id' => $event[3]->id, 'title' => $event[3]->getFriendlyLink() ]) }}">
                                                    <img width="550" height="360" src="<?php echo $event[3]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="newspaper-x-title">
                                                <h3>
                                                    <a href="{{ route('article.show', [ 'id' => $event[3]->id, 'title' => $event[3]->getFriendlyLink() ]) }}"><?php echo limit_words($event[3]->title, 4); ?></a>
                                                </h3>
                                            </div>
                                            <span class="newspaper-x-date"><?php echo article_date($event[3]->publishedAt); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 ">
                                <div class="newspaper-x-blog-post-layout-b border">
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="newspaper-x-image">
                                                <a href="{{ route('article.show', [ 'id' => $event[4]->id, 'title' => $event[4]->getFriendlyLink() ]) }}">
                                                    <img width="550" height="360" src="<?php echo $event[4]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="newspaper-x-title">
                                                <h3>
                                                    <a href="{{ route('article.show', [ 'id' => $event[4]->id, 'title' => $event[4]->getFriendlyLink() ]) }}"><?php echo limit_words($event[4]->title, 4); ?></a>
                                                </h3>
                                            </div>
                                            <span class="newspaper-x-date"><?php echo article_date($event[4]->publishedAt); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 ">
                                <div class="newspaper-x-blog-post-layout-b border">
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="newspaper-x-image">
                                                <a href="{{ route('article.show', [ 'id' => $event[5]->id, 'title' => $event[5]->getFriendlyLink() ]) }}">
                                                    <img width="550" height="360" src="<?php echo $event[5]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="newspaper-x-title">
                                                <h3>
                                                    <a href="{{ route('article.show', [ 'id' => $event[5]->id, 'title' => $event[5]->getFriendlyLink() ]) }}"><?php echo limit_words($event[5]->title, 4); ?></a>
                                                </h3>
                                            </div>
                                            <span class="newspaper-x-date"><?php echo article_date($event[5]->publishedAt); ?></span>
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
                                                <a href="{{ route('article.show', [ 'id' => $event[6]->id, 'title' => $event[6]->getFriendlyLink() ]) }}">
                                                    <img width="550" height="360" src="<?php echo $event[6]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="newspaper-x-title">
                                                <h3>
                                                    <a href="{{ route('article.show', [ 'id' => $event[6]->id, 'title' => $event[6]->getFriendlyLink() ]) }}"><?php echo limit_words($event[6]->title, 4); ?></a>
                                                </h3>
                                            </div>
                                            <span class="newspaper-x-date"><?php echo article_date($event[6]->publishedAt); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 ">
                                <div class="newspaper-x-blog-post-layout-b border">
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="newspaper-x-image">
                                                <a href="{{ route('article.show', [ 'id' => $event[7]->id, 'title' => $event[7]->getFriendlyLink() ]) }}">
                                                    <img width="550" height="360" src="<?php echo $event[7]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="newspaper-x-title">
                                                <h3>
                                                    <a href="{{ route('article.show', [ 'id' => $event[7]->id, 'title' => $event[7]->getFriendlyLink() ]) }}"><?php echo limit_words($event[7]->title, 4); ?></a>
                                                </h3>
                                            </div>
                                            <span class="newspaper-x-date"><?php echo article_date($event[7]->publishedAt); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6 ">
                                <div class="newspaper-x-blog-post-layout-b border">
                                    <div class="row">
                                        <div class="col-sm-5 col-xs-12">
                                            <div class="newspaper-x-image">
                                                <a href="{{ route('article.show', [ 'id' => $event[8]->id, 'title' => $event[8]->getFriendlyLink() ]) }}">
                                                    <img width="550" height="360" src="<?php echo $event[8]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-xs-12">
                                            <div class="newspaper-x-title">
                                                <h3>
                                                    <a href="{{ route('article.show', [ 'id' => $event[8]->id, 'title' => $event[8]->getFriendlyLink() ]) }}"><?php echo limit_words($event[8]->title, 4); ?></a>
                                                </h3>
                                            </div>
                                            <span class="newspaper-x-date"><?php echo article_date($event[8]->publishedAt); ?></span>
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
                                                <img width="550" height="360" src="<?php echo $editorial[0]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="{{ route('article.show', [ 'id' => $editorial[0]->id, 'title' => $editorial[0]->getFriendlyLink() ]) }}"><?php echo limit_words($editorial[0]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="{{ route('article.show', [ 'id' => $editorial[0]->id, 'title' => $editorial[0]->getFriendlyLink() ]) }}"><?php echo $editorial[0]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date">May 10, 2017</span>
                                        <div class="newspaper-x-content">
                                            {{ $editorial[0]->shortContent(20) }} <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="{{ route('article.show', [ 'id' => $editorial[1]->id, 'title' => $editorial[1]->getFriendlyLink() ]) }}">
                                                <img width="550" height="360" src="<?php echo $editorial[1]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="{{ route('article.show', [ 'id' => $editorial[1]->id, 'title' => $editorial[1]->getFriendlyLink() ]) }}"><?php echo limit_words($editorial[1]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="{{ route('article.show', [ 'id' => $editorial[1]->id, 'title' => $editorial[1]->getFriendlyLink() ]) }}"><?php echo $editorial[1]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date">May 10, 2017</span>
                                        <div class="newspaper-x-content">
                                            {{ $editorial[1]->shortContent(20) }} <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="{{ route('article.show', [ 'id' => $editorial[2]->id, 'title' => $editorial[2]->getFriendlyLink() ]) }}">
                                                <img width="550" height="360" src="<?php echo $editorial[2]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="{{ route('article.show', [ 'id' => $editorial[2]->id, 'title' => $editorial[2]->getFriendlyLink() ]) }}"><?php echo limit_words($editorial[2]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="{{ route('article.show', [ 'id' => $editorial[2]->id, 'title' => $editorial[2]->getFriendlyLink() ]) }}"><?php echo $editorial[2]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date">May 10, 2017</span>
                                        <div class="newspaper-x-content">
                                            {{ $editorial[1]->shortContent(20) }} <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="{{ route('article.show', [ 'id' => $editorial[3]->id, 'title' => $editorial[3]->getFriendlyLink() ]) }}">
                                                <img width="550" height="360" src="<?php echo $editorial[3]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="{{ route('article.show', [ 'id' => $editorial[3]->id, 'title' => $editorial[3]->getFriendlyLink() ]) }}"><?php echo limit_words($editorial[3]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="{{ route('article.show', [ 'id' => $editorial[3]->id, 'title' => $editorial[3]->getFriendlyLink() ]) }}"><?php echo $editorial[3]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date">May 10, 2017</span>
                                        <div class="newspaper-x-content">
                                            {{ $editorial[3]->shortContent(20) }} <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">...</a>
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
                                            <a href="{{ route('article.show', [ 'id' => $world[0]->id, 'title' => $world[0]->getFriendlyLink() ]) }}">
                                                <img width="550" height="360" src="<?php echo $world[0]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="{{ route('article.show', [ 'id' => $world[0]->id, 'title' => $world[0]->getFriendlyLink() ]) }}"><?php echo limit_words($world[0]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="{{ route('article.show', [ 'id' => $world[0]->id, 'title' => $world[0]->getFriendlyLink() ]) }}"><?php echo $world[0]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date"><?php echo article_date($world[0]->publishedAt); ?></span>
                                        <div class="newspaper-x-content">
                                            {{ $world[0]->shortContent(20) }} <a href="{{ route('article.show', [ 'id' => $world[0]->id, 'title' => $world[0]->getFriendlyLink() ]) }}">...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="{{ route('article.show', [ 'id' => $world[1]->id, 'title' => $world[1]->getFriendlyLink() ]) }}">
                                                <img width="550" height="360" src="<?php echo $world[1]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="{{ route('article.show', [ 'id' => $world[1]->id, 'title' => $world[1]->getFriendlyLink() ]) }}"><?php echo limit_words($world[1]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="{{ route('article.show', [ 'id' => $world[1]->id, 'title' => $world[1]->getFriendlyLink() ]) }}"><?php echo $world[1]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date"><?php echo article_date($world[1]->publishedAt); ?></span>
                                        <div class="newspaper-x-content">
                                            {{ $world[1]->shortContent(20) }} <a href="{{ route('article.show', [ 'id' => $world[1]->id, 'title' => $world[1]->getFriendlyLink() ]) }}">...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="{{ route('article.show', [ 'id' => $world[2]->id, 'title' => $world[2]->getFriendlyLink() ]) }}">
                                                <img width="550" height="360" src="<?php echo $world[2]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="{{ route('article.show', [ 'id' => $world[2]->id, 'title' => $world[2]->getFriendlyLink() ]) }}"><?php echo limit_words($world[2]->title, 4); ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="{{ route('article.show', [ 'id' => $world[2]->id, 'title' => $world[2]->getFriendlyLink() ]) }}"><?php echo $world[2]->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date"><?php echo article_date($world[2]->publishedAt); ?></span>
                                        <div class="newspaper-x-content">
                                            {{ $world[2]->shortContent(20) }} <a href="{{ route('article.show', [ 'id' => $world[2]->id, 'title' => $world[2]->getFriendlyLink() ]) }}">...</a>
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
                                                    <a href="{{ route('article.show', [ 'id' => $world[3]->id, 'title' => $world[3]->getFriendlyLink() ]) }}">
                                                        <img width="550" height="360" src="{{ $world[3]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-xs-12 card-info">
                                                <div class="newspaper-x-title">
                                                    <h4>
                                                        <a href="{{ route('article.show', [ 'id' => $world[3]->id, 'title' => $world[3]->getFriendlyLink() ]) }}">{{ $world[3]->title }}</a>
                                                    </h4>
                                                </div>
                                                <span class="newspaper-x-author">
                                                    <a href="{{ route('article.show', [ 'id' => $world[3]->id, 'title' => $world[3]->getFriendlyLink() ]) }}">{{ $world[3]->author }}</a>
                                                </span>
                                                <span class="newspaper-x-date">{{ $world[3]->publishedAt }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6  ">
                                    <div class="newspaper-x-blog-post-layout-b border">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="newspaper-x-image">
                                                    <a href="{{ route('article.show', [ 'id' => $world[4]->id, 'title' => $world[4]->getFriendlyLink() ]) }}">
                                                        <img width="550" height="360" src="{{ $world[4]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-xs-12 card-info">
                                                <div class="newspaper-x-title">
                                                    <h4>
                                                        <a href="{{ route('article.show', [ 'id' => $world[4]->id, 'title' => $world[4]->getFriendlyLink() ]) }}">{{ $world[4]->title }}</a>
                                                    </h4>
                                                </div>
                                                <span class="newspaper-x-author">
                                                    <a href="{{ route('article.show', [ 'id' => $world[4]->id, 'title' => $world[4]->getFriendlyLink() ]) }}">{{ $world[4]->author }}</a>
                                                </span>
                                                <span class="newspaper-x-date">{{ $world[4]->publishedAt }}</span>
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
                                                    <a href="{{ route('article.show', [ 'id' => $world[5]->id, 'title' => $world[5]->getFriendlyLink() ]) }}">
                                                        <img width="550" height="360" src="{{ $world[5]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-xs-12 card-info">
                                                <div class="newspaper-x-title">
                                                    <h4>
                                                        <a href="{{ route('article.show', [ 'id' => $world[5]->id, 'title' => $world[5]->getFriendlyLink() ]) }}">{{ $world[5]->title }}</a>
                                                    </h4>
                                                </div>
                                                <span class="newspaper-x-author">
                                                    <a href="{{ route('article.show', [ 'id' => $world[5]->id, 'title' => $world[5]->getFriendlyLink() ]) }}">{{ $world[5]->author }}</a>
                                                </span>
                                                <span class="newspaper-x-date">{{ $world[5]->publishedAt }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6  ">
                                    <div class="newspaper-x-blog-post-layout-b border">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="newspaper-x-image">
                                                    <a href="{{ route('article.show', [ 'id' => $world[6]->id, 'title' => $world[6]->getFriendlyLink() ]) }}">
                                                        <img width="550" height="360" src="{{ $world[6]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-xs-12 card-info">
                                                <div class="newspaper-x-title">
                                                    <h4>
                                                        <a href="{{ route('article.show', [ 'id' => $world[6]->id, 'title' => $world[6]->getFriendlyLink() ]) }}">{{ $world[6]->title }}</a>
                                                    </h4>
                                                </div>
                                                <span class="newspaper-x-author">
                                                    <a href="{{ route('article.show', [ 'id' => $world[6]->id, 'title' => $world[6]->getFriendlyLink() ]) }}">{{ $world[6]->author }}</a>
                                                </span>
                                                <span class="newspaper-x-date">{{ $world[6]->publishedAt }}</span>
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
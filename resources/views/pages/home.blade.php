@extends('layouts.default')
@section('content')
    <div class="container-fluid" style="padding:0px;">
        <div class="newspaper-x-header-widget-area" style="margin-top:0px;">
            <div id="newspaper_x_header_module-2" class="widget newspaper_x_widgets">
                <div class="newspaper-x-recent-posts container">
                    <ul>
                        <?php foreach ($feed->skip(0)->take(3)->get() as $id => $row) { ?>
                            <li class="blazy b-loaded" id="newspaper-x-recent-post-{{ $id }}" style="background-image: url(<?php echo $row->urlToImage; ?>); background-size: cover;">
                                <div class="newspaper-x-post-info">
                                    <h{{ ($id > 0) ? '6' : '1' }}>
                                        <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}"><?php echo $row->shortContent(5) ?></a>
                                    </h{{ ($id > 0) ? '6' : '1' }}>
                                    <span class="newspaper-x-category">
                                        <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                    </span>
                                    <span class="newspaper-x-date">{{ $row->articleDate() }}</span>
                                </div>
                            </li>
                        <?php } ?>
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
                                            <?php foreach ($feed->skip(3)->take(4)->get() as $id => $row) { ?>
                                                <li class="blazy  b-loaded" id="newspaper-x-recent-post-{{ $id+3 }}" style="background-image: url(<?php echo $row->urlToImage; ?>);">
                                                    <div class="newspaper-x-post-info">
                                                        <h6>
                                                            <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}"><?php echo $row->shortContent(3) ?></a>
                                                        </h6>
                                                        <span class="newspaper-x-category">
                                                            <a href="<?php echo route('category.show', [ 'name' => 'top-headline' ]) ?>">Top Headline</a>
                                                        </span>
                                                        <span class="newspaper-x-date">{{ $row->articleDate() }}</span>
                                                    </div>
                                                </li>
                                            <?php } ?>
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
                            <?php foreach ($latest->skip(0)->take(3)->get() as $row) { ?>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="newspaper-x-blog-post-layout-c">
                                        <div class="newspaper-x-image" style="height: 190px;">
                                            <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->title ]) }}">
                                                <img width="550" height="360" src="<?php echo $row->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}">{{ $row->shortContent(4) }}</a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                                <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}"><?php echo $row->author; ?></a>
                                            </span>
                                        <span class="newspaper-x-date">{{ $row->articleDate() }}</span>
                                        <div class="newspaper-x-content">
                                            <?php echo $row->shortContent(20) ?> <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}">...</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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
                            <?php foreach ($event->skip(0)->take(3)->get() as $id => $row) { ?>
                                <div class="col-md-4 col-xs-6">
                                    <div class="newspaper-x-blog-post-layout-b">
                                        <div class="newspaper-x-image">
                                            <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}">
                                                <img width="550" height="360" src="<?php echo $row->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="newspaper-x-title">
                                            <h4>
                                                <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}"><?php echo $row->shortContent(4) ?></a>
                                            </h4>
                                        </div>
                                        <span class="newspaper-x-author">
                                            <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}"><?php echo $row->author; ?></a>
                                        </span>
                                        <span class="newspaper-x-date">{{ $row->articleDate() }}</span>
                                        <div class="newspaper-x-content">
                                            <?php echo $row->shortContent(20) ?> <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}">...</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div id="newspaper_x_widget_posts_d-3" class="widget newspaper_x_widgets">
                        <div class="row newspaper-x-layout-b-row">
                            <?php foreach ($event->skip(3)->take(3)->get() as $id => $row) { ?>
                                <div class="col-md-4 col-xs-6 ">
                                    <div class="newspaper-x-blog-post-layout-b border">
                                        <div class="row">
                                            <div class="col-sm-5 col-xs-12">
                                                <div class="newspaper-x-image">
                                                    <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}">
                                                        <img width="550" height="360" src="<?php echo $row->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-xs-12">
                                                <div class="newspaper-x-title">
                                                    <h3>
                                                        <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}"><?php echo $row->shortContent(4) ?></a>
                                                    </h3>
                                                </div>
                                                <span class="newspaper-x-date">{{ $row->articleDate() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="row newspaper-x-layout-b-row">
                            <?php foreach ($event->skip(6)->take(3)->get() as $id => $row) { ?>
                                <div class="col-md-4 col-xs-6 ">
                                    <div class="newspaper-x-blog-post-layout-b border">
                                        <div class="row">
                                            <div class="col-sm-5 col-xs-12">
                                                <div class="newspaper-x-image">
                                                    <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}">
                                                        <img width="550" height="360" src="<?php echo $row->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-xs-12">
                                                <div class="newspaper-x-title">
                                                    <h3>
                                                        <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}"><?php echo $row->shortContent(4) ?></a>
                                                    </h3>
                                                </div>
                                                <span class="newspaper-x-date">{{ $row->articleDate() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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
                                <?php foreach ($editorial->skip(0)->take(4)->get() as $id => $row) { ?>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="newspaper-x-blog-post-layout-b">
                                            <div class="newspaper-x-image">
                                                <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">
                                                    <img width="550" height="360" src="<?php echo $row->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="">
                                                </a>
                                            </div>
                                            <div class="newspaper-x-title">
                                                <h4>
                                                    <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}"><?php echo $row->shortContent(4) ?></a>
                                                </h4>
                                            </div>
                                            <span class="newspaper-x-author">
                                            <a href="{{ route('article.show', [ 'id' => $row->id, 'title' => $row->getFriendlyLink() ]) }}"><?php echo $row->author; ?></a>
                                        </span>
                                            <span class="newspaper-x-date">{{ $row->articleDate() }}</span>
                                            <div class="newspaper-x-content">
                                                <?php echo $row->shortContent(20) ?> <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">...</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.row-->
            </section>
        </div>
    </div>
@stop
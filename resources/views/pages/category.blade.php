@extends('layouts.default')
@section('content')

    <div id="content" class="site-content container">
        <div class="row">
            <header class="col-xs-12">
                <h3 class="page-title"><span><?php echo $name; ?></span></h3>
            </header>
            <!-- .page-header -->
        </div>
        <div class="row">
            <div class="col-xs-12 newspaper-x-archive-first-posts">
                <div class="row">
                    <div class="col-md-6">
                        <article id="post-108" class="post-108 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial">
                            <header class="entry-header">
                                <div class="newspaper-x-image">
                                    <a href="{{ route('article.show', [ 'id' => $feed[0]->id, 'title' => $feed[0]->getFriendlyLink()]) }}" rel="bookmark">
                                        <img width="550" height="360" src="<?php echo $feed[0]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                </div>
                                <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[0]->id, 'title' => $feed[0]->getFriendlyLink()]) }}" rel="bookmark">{{ $feed[0]->shortContent(5) }}</a></h4>
                                <div class="newspaper-x-post-meta">
                                    <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">{{ $feed[0]->articleDate() }} </span></div>
                                </div>
                                <!-- .entry-meta -->
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p><?php echo $feed[0]->description ?></p>
                            </div>
                            <!-- .entry-content -->
                            <footer class="entry-footer">
                            </footer>
                            <!-- .entry-footer -->
                        </article>
                        <!-- #post-## -->
                    </div>
                    <div class="col-md-6">
                        <article id="post-104" class="post-104 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial tag-business tag-coast tag-information tag-life tag-man tag-money tag-news tag-politics tag-sport">
                            <header class="entry-header">
                                <div class="newspaper-x-image">
                                    <a href="{{ route('article.show', [ 'id' => $feed[1]->id, 'title' => $feed[1]->getFriendlyLink()]) }}" rel="bookmark">
                                        <img width="550" height="360" src="<?php echo $feed[1]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                </div>
                                <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[1]->id, 'title' => $feed[1]->getFriendlyLink()]) }}" rel="bookmark">{{ $feed[1]->shortContent(5) }}</a></h4>
                                <div class="newspaper-x-post-meta">
                                    <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">{{ $feed[1]->articleDate() }} </span></div>
                                </div>
                                <!-- .entry-meta -->
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p><?php echo $feed[1]->description ?></p>
                            </div>
                            <!-- .entry-content -->
                            <footer class="entry-footer">
                            </footer>
                            <!-- .entry-footer -->
                        </article>
                        <!-- #post-## -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="primary" class="newspaper-x-content newspaper-x-archive-page col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <main id="main" class="site-main" role="main">
                    <div class="row">
                        <div class="col-xs-12 newspaper-x-image-banner">
                            <a href="https://colorlib.com/wp/forums/">
                                <img width="729" height="90" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner.png" class="attachment-newspaper-x-wide-banner size-newspaper-x-wide-banner" alt="">    </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <article id="post-101" class="post-101 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial">
                                <header class="entry-header">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $feed[2]->id, 'title' => $feed[2]->getFriendlyLink()]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[2]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[2]->id, 'title' => $feed[2]->getFriendlyLink()]) }}" rel="bookmark">{{ $feed[2]->shortContent(5) }}</a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">{{ $feed[2]->articleDate() }} </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed[2]->description ?></p>
                                </div>
                                <!-- .entry-content -->
                                <footer class="entry-footer">
                                </footer>
                                <!-- .entry-footer -->
                            </article>
                            <!-- #post-## -->
                        </div>
                        <div class="col-md-6">
                            <article id="post-98" class="post-98 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial">
                                <header class="entry-header">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $feed[3]->id, 'title' => $feed[3]->getFriendlyLink()]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[3]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[3]->id, 'title' => $feed[3]->getFriendlyLink()]) }}" rel="bookmark">{{ $feed[3]->shortContent(5) }}</a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">{{ $feed[3]->articleDate() }} </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed[3]->description ?></p>
                                </div>
                                <!-- .entry-content -->
                                <footer class="entry-footer">
                                </footer>
                                <!-- .entry-footer -->
                            </article>
                            <!-- #post-## -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <article id="post-95" class="post-95 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial">
                                <header class="entry-header">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $feed[4]->id, 'title' => $feed[4]->getFriendlyLink()]) }}" rel="bookmark">
                                            <img width="550" height="360" src="{{ $feed[4]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[4]->id, 'title' => $feed[4]->getFriendlyLink()]) }}" rel="bookmark">{{ $feed[4]->shortContent(5) }}</a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">{{ $feed[4]->articleDate() }} </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed[4]->description ?></p>
                                </div>
                                <!-- .entry-content -->
                                <footer class="entry-footer">
                                </footer>
                                <!-- .entry-footer -->
                            </article>
                            <!-- #post-## -->
                        </div>
                        <div class="col-md-6">
                            <article id="post-92" class="post-92 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial">
                                <header class="entry-header">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $feed[5]->id, 'title' => $feed[5]->getFriendlyLink()]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[5]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[5]->id, 'title' => $feed[5]->getFriendlyLink()]) }}" rel="bookmark">{{ $feed[5]->shortContent(5) }}</a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">{{ $feed[5]->articleDate() }} </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed[5]->description ?></p>
                                </div>
                                <!-- .entry-content -->
                                <footer class="entry-footer">
                                </footer>
                                <!-- .entry-footer -->
                            </article>
                            <!-- #post-## -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <article id="post-89" class="post-89 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial">
                                <header class="entry-header">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $feed[6]->id, 'title' => $feed[6]->getFriendlyLink()]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[6]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[6]->id, 'title' => $feed[6]->getFriendlyLink()]) }}" rel="bookmark">{{ $feed[6]->shortContent(5) }}</a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">{{ $feed[6]->articleDate() }} </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed[6]->description ?></p>
                                </div>
                                <!-- .entry-content -->
                                <footer class="entry-footer">
                                </footer>
                                <!-- .entry-footer -->
                            </article>
                            <!-- #post-## -->
                        </div>
                        <div class="col-md-6">
                            <article id="post-87" class="post-87 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial">
                                <header class="entry-header">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $feed[7]->id, 'title' => $feed[7]->getFriendlyLink()]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[7]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[7]->id, 'title' => $feed[7]->getFriendlyLink()]) }}" rel="bookmark">{{ $feed[7]->shortContent(5) }}</a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">{{ $feed[7]->articleDate() }} </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed[7]->description ?></p>
                                </div>
                                <!-- .entry-content -->
                                <footer class="entry-footer">
                                </footer>
                                <!-- .entry-footer -->
                            </article>
                            <!-- #post-## -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 newspaper-x-image-banner">
                            <a href="{{ route('article.show', [ 'id' => $feed[8]->id, 'title' => $feed[8]->getFriendlyLink()]) }}">
                                <img width="729" height="90" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner.png" class="attachment-newspaper-x-wide-banner size-newspaper-x-wide-banner" alt="">    </a>
                        </div>
                        <div class="col-md-6">
                            <article id="post-84" class="post-84 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial">
                                <header class="entry-header">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $feed[8]->id, 'title' => $feed[8]->getFriendlyLink()]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[8]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[8]->id, 'title' => $feed[8]->getFriendlyLink()]) }}" rel="bookmark">{{ $feed[8]->shortContent(5) }}</a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">{{ $feed[8]->articleDate() }} </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed[8]->description ?></p>
                                </div>
                                <!-- .entry-content -->
                                <footer class="entry-footer">
                                </footer>
                                <!-- .entry-footer -->
                            </article>
                            <!-- #post-## -->
                        </div>
                        <div class="col-md-6">
                            <article id="post-81" class="post-81 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial">
                                <header class="entry-header">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $feed[9]->id, 'title' => $feed[9]->getFriendlyLink()]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[9]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[9]->id, 'title' => $feed[9]->getFriendlyLink()]) }}" rel="bookmark">{{ $feed[9]->shortContent(5) }}</a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">{{ $feed[9]->articleDate() }} </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed[9]->description ?></p>
                                </div>
                                <!-- .entry-content -->
                                <footer class="entry-footer">
                                </footer>
                                <!-- .entry-footer -->
                            </article>
                            <!-- #post-## -->
                        </div>
                    </div>
                    {{--<nav class="navigation pagination" role="navigation">--}}
                    {{--<h2 class="screen-reader-text">Posts navigation</h2>--}}
                    {{--<div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>--}}
                    {{--<a class="page-numbers" href="https://colorlib.com/newspaper-x/category/editorial/page/2/">2</a>--}}
                    {{--<a class="next page-numbers" href="https://colorlib.com/newspaper-x/category/editorial/page/2/"><i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}
                    {{--</div>--}}
                    {{--</nav>--}}
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
            <aside id="secondary" class="widget-area col-lg-4 col-md-4 col-sm-4 newspaper-x-sidebar" role="complementary">
                <div class="newspaper-x-blog-sidebar">
                    <div id="tag_cloud-2" class="widget widget_tag_cloud">
                        <h3>Tags</h3>

                    </div>
                </div>
            </aside>
            <!-- #secondary -->
        </div>
        <!-- #row -->
    </div>
@stop
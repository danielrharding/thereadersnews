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
                                    <a href="{{ route('article.show', [ 'id' => $feed[0]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[0]->title))))) ]) }}" rel="bookmark">
                                        <img width="550" height="360" src="<?php echo $feed[0]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                </div>
                                <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[0]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[0]->title))))) ]) }}" rel="bookmark"><?php echo limit_words($feed[0]->title, 5) ?></a></h4>
                                <div class="newspaper-x-post-meta">
                                    <div><span class="newspaper-x-category"> <a href="{{ route('article.show', [ 'id' => $feed[0]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[0]->title))))) ]) }}"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
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
                                    <a href="{{ route('article.show', [ 'id' => $feed[1]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[1]->title))))) ]) }}" rel="bookmark">
                                        <img width="550" height="360" src="<?php echo $feed[1]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                </div>
                                <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[1]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[1]->title))))) ]) }}" rel="bookmark"><?php echo limit_words($feed[1]->title, 5) ?></a></h4>
                                <div class="newspaper-x-post-meta">
                                    <div><span class="newspaper-x-category"> <a href="{{ route('article.show', [ 'id' => $feed[1]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[1]->title))))) ]) }}"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
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
                                        <a href="{{ route('article.show', [ 'id' => $feed[2]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[2]->title))))) ]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[2]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[2]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[2]->title))))) ]) }}" rel="bookmark"><?php echo limit_words($feed[2]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="{{ route('article.show', [ 'id' => $feed[2]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[2]->title))))) ]) }}"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
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
                                        <a href="{{ route('article.show', [ 'id' => $feed[3]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[3]->title))))) ]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[3]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[3]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[3]->title))))) ]) }}" rel="bookmark"><?php echo limit_words($feed[3]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="{{ route('article.show', [ 'id' => $feed[3]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[3]->title))))) ]) }}"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
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
                                        <a href="{{ route('article.show', [ 'id' => $feed[4]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[4]->title))))) ]) }}" rel="bookmark">
                                            <img width="550" height="360" src="{{ $feed[4]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[4]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[4]->title))))) ]) }}" rel="bookmark"><?php echo limit_words($feed[4]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="{{ route('article.show', [ 'id' => $feed[4]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[4]->title))))) ]) }}"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
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
                                        <a href="{{ route('article.show', [ 'id' => $feed[5]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[5]->title))))) ]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[5]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[5]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[5]->title))))) ]) }}" rel="bookmark"><?php echo limit_words($feed[5]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="{{ route('article.show', [ 'id' => $feed[5]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[5]->title))))) ]) }}"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
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
                                        <a href="{{ route('article.show', [ 'id' => $feed[6]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[6]->title))))) ]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[6]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[6]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[6]->title))))) ]) }}" rel="bookmark"><?php echo limit_words($feed[6]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="{{ route('article.show', [ 'id' => $feed[6]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[6]->title))))) ]) }}"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
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
                                        <a href="{{ route('article.show', [ 'id' => $feed[7]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[7]->title))))) ]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[7]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[7]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[7]->title))))) ]) }}" rel="bookmark"><?php echo limit_words($feed[7]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="{{ route('article.show', [ 'id' => $feed[7]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[7]->title))))) ]) }}"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
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
                            <a href="{{ route('article.show', [ 'id' => $feed[8]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[8]->title))))) ]) }}">
                                <img width="729" height="90" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner.png" class="attachment-newspaper-x-wide-banner size-newspaper-x-wide-banner" alt="">    </a>
                        </div>
                        <div class="col-md-6">
                            <article id="post-84" class="post-84 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial">
                                <header class="entry-header">
                                    <div class="newspaper-x-image">
                                        <a href="{{ route('article.show', [ 'id' => $feed[8]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[8]->title))))) ]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[8]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[8]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[8]->title))))) ]) }}" rel="bookmark"><?php echo limit_words($feed[8]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="{{ route('article.show', [ 'id' => $feed[8]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[8]->title))))) ]) }}"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
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
                                        <a href="{{ route('article.show', [ 'id' => $feed[9]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[9]->title))))) ]) }}" rel="bookmark">
                                            <img width="550" height="360" src="<?php echo $feed[9]->urlToImage; ?>" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="{{ route('article.show', [ 'id' => $feed[9]->id, 'title' => str_replace('.', '', str_replace('%', '', preg_replace('/[0-9]+/', '', strtolower(urlencode($feed[9]->title))))) ]) }}" rel="bookmark"><?php echo limit_words($feed[9]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
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
                        <div class="tagcloud">
                            <?php
                                $tags = keywords($feed[0]->content . '' . $feed[1]->content . '' . $feed[2]->content . '' . $feed[3]->content . '' . $feed[4]->content . '' . $feed[5]->content . '' . $feed[6]->content . '' . $feed[7]->content . '' . $feed[8]->content . '' . $feed[9]->content);
                                $tags = json_decode($tags);

                            ?>
                            <?php foreach($tags->keywords as $tag) {  ?>
                                <a href="{{ route('tag.show', [ 'name' => strtolower(urlencode($tag->keyword)) ]) }}" class="tag-cloud-link tag-link-13 tag-link-position-1" style="font-size: 8pt;" aria-label="business (2 items)">{{ strtolower($tag->keyword) }}</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- #secondary -->
        </div>
        <!-- #row -->
    </div>
@stop
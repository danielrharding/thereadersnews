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
                                    <a href="https://colorlib.com/newspaper-x/2017/05/10/sed-purus-velit-finibus-non-semper-nonut-utas/" rel="bookmark">
                                        <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/00_header_slider_01-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                </div>
                                <h4 class="entry-title"><a href="https://colorlib.com/newspaper-x/2017/05/10/sed-purus-velit-finibus-non-semper-nonut-utas/" rel="bookmark"><?php echo limit_words($feed->articles[0]->title, 5) ?></a></h4>
                                <div class="newspaper-x-post-meta">
                                    <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
                                </div>
                                <!-- .entry-meta -->
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p><?php echo $feed->articles[0]->description ?></p>
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
                                    <a href="https://colorlib.com/newspaper-x/2017/05/10/nunc-hendrerit-egestas-amus-ad-arcu-im-usa/" rel="bookmark">
                                        <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/00_header_slider_02-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                </div>
                                <h4 class="entry-title"><a href="https://colorlib.com/newspaper-x/2017/05/10/nunc-hendrerit-egestas-amus-ad-arcu-im-usa/" rel="bookmark"><?php echo limit_words($feed->articles[1]->title, 5) ?></a></h4>
                                <div class="newspaper-x-post-meta">
                                    <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
                                </div>
                                <!-- .entry-meta -->
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p><?php echo $feed->articles[1]->description ?></p>
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
                                        <a href="https://colorlib.com/newspaper-x/2017/05/10/itum-binus-sitam-conestum-ey/" rel="bookmark">
                                            <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/00_header_slider_03-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="https://colorlib.com/newspaper-x/2017/05/10/itum-binus-sitam-conestum-ey/" rel="bookmark"><?php echo limit_words($feed->articles[2]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed->articles[2]->description ?></p>
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
                                        <a href="https://colorlib.com/newspaper-x/2017/05/10/vivamus-id-lorem-blandit/" rel="bookmark">
                                            <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/00_header_under_article_01-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="https://colorlib.com/newspaper-x/2017/05/10/vivamus-id-lorem-blandit/" rel="bookmark"><?php echo limit_words($feed->articles[3]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed->articles[3]->description ?></p>
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
                                        <a href="https://colorlib.com/newspaper-x/2017/05/10/nam-aliquet-lorem-vita/" rel="bookmark">
                                            <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/00_header_under_article_02-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="https://colorlib.com/newspaper-x/2017/05/10/nam-aliquet-lorem-vita/" rel="bookmark"><?php echo limit_words($feed->articles[4]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed->articles[4]->description ?></p>
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
                                        <a href="https://colorlib.com/newspaper-x/2017/05/10/nulla-nec-enimus-amis/" rel="bookmark">
                                            <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/00_header_under_article_03-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="https://colorlib.com/newspaper-x/2017/05/10/nulla-nec-enimus-amis/" rel="bookmark"><?php echo limit_words($feed->articles[5]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed->articles[5]->description ?></p>
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
                                        <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum-2/" rel="bookmark">
                                            <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/00_header_under_article_04-1-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum-2/" rel="bookmark"><?php echo limit_words($feed->articles[6]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed->articles[6]->description ?></p>
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
                                        <a href="https://colorlib.com/newspaper-x/2017/05/10/odio-sapien-uta-accumsan-ut-dolor-vel/" rel="bookmark">
                                            <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/02_events_article_06-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="https://colorlib.com/newspaper-x/2017/05/10/odio-sapien-uta-accumsan-ut-dolor-vel/" rel="bookmark"><?php echo limit_words($feed->articles[7]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed->articles[7]->description ?></p>
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
                            <a href="https://colorlib.com/wp/forums/">
                                <img width="729" height="90" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/banner.png" class="attachment-newspaper-x-wide-banner size-newspaper-x-wide-banner" alt="">    </a>
                        </div>
                        <div class="col-md-6">
                            <article id="post-84" class="post-84 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial">
                                <header class="entry-header">
                                    <div class="newspaper-x-image">
                                        <a href="https://colorlib.com/newspaper-x/2017/05/10/maecenas-tincidunt-posuere-quam-eu-atimu/" rel="bookmark">
                                            <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/03_editorial_article_03-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="https://colorlib.com/newspaper-x/2017/05/10/maecenas-tincidunt-posuere-quam-eu-atimu/" rel="bookmark"><?php echo limit_words($feed->articles[8]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed->articles[8]->description ?></p>
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
                                        <a href="https://colorlib.com/newspaper-x/2017/05/10/maecenas-elit-ligula-placerat-elementum/" rel="bookmark">
                                            <img width="550" height="360" src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/03_editorial_article_02-550x360.jpg" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt=""></a>
                                    </div>
                                    <h4 class="entry-title"><a href="https://colorlib.com/newspaper-x/2017/05/10/maecenas-elit-ligula-placerat-elementum/" rel="bookmark"><?php echo limit_words($feed->articles[9]->title, 4) ?></a></h4>
                                    <div class="newspaper-x-post-meta">
                                        <div><span class="newspaper-x-category"> <a href="<?php echo route('category.show', [ 'name' => $name ]) ?>"><?php echo $name; ?></a></span><span class="newspaper-x-date">May 10, 2017 </span></div>
                                    </div>
                                    <!-- .entry-meta -->
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content">
                                    <p><?php echo $feed->articles[9]->description ?></p>
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
                        <div class="tagcloud"><a href="https://colorlib.com/newspaper-x/tag/business/" class="tag-cloud-link tag-link-13 tag-link-position-1" style="font-size: 8pt;" aria-label="business (2 items)">business</a>
                            <a href="https://colorlib.com/newspaper-x/tag/coast/" class="tag-cloud-link tag-link-16 tag-link-position-2" style="font-size: 8pt;" aria-label="coast (2 items)">coast</a>
                            <a href="https://colorlib.com/newspaper-x/tag/information/" class="tag-cloud-link tag-link-8 tag-link-position-3" style="font-size: 8pt;" aria-label="information (2 items)">information</a>
                            <a href="https://colorlib.com/newspaper-x/tag/life/" class="tag-cloud-link tag-link-14 tag-link-position-4" style="font-size: 8pt;" aria-label="life (2 items)">life</a>
                            <a href="https://colorlib.com/newspaper-x/tag/man/" class="tag-cloud-link tag-link-11 tag-link-position-5" style="font-size: 8pt;" aria-label="man (2 items)">man</a>
                            <a href="https://colorlib.com/newspaper-x/tag/money/" class="tag-cloud-link tag-link-10 tag-link-position-6" style="font-size: 8pt;" aria-label="money (2 items)">money</a>
                            <a href="https://colorlib.com/newspaper-x/tag/news/" class="tag-cloud-link tag-link-9 tag-link-position-7" style="font-size: 8pt;" aria-label="news (2 items)">news</a>
                            <a href="https://colorlib.com/newspaper-x/tag/politics/" class="tag-cloud-link tag-link-15 tag-link-position-8" style="font-size: 8pt;" aria-label="politics (2 items)">politics</a>
                            <a href="https://colorlib.com/newspaper-x/tag/sport/" class="tag-cloud-link tag-link-12 tag-link-position-9" style="font-size: 8pt;" aria-label="sport (2 items)">sport</a>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- #secondary -->
        </div>
        <!-- #row -->
    </div>
@stop
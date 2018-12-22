@extends('layouts.default')
@section('content')
    <div id="content" class="site-content container">

        <div class="row">
            <div id="primary" class="content-area col-md-8 col-sm-8 col-xs-12 newspaper-x-sidebar">
                <main id="main" class="site-main" role="main">

                    <div class="newspaper-x-breadcrumbs"><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url" href="{{ route('home.index') }}">
                                <span itemprop="title">Home </span>
                            </a>
                        </span>
                        <span class="newspaper-x-breadcrumb-sep">/</span><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="{{ route('category.show', [ 'name' => $article->category ]) }}" ><span itemprop="title">{{ ucwords($article->category) }}</span></a></span><span class="newspaper-x-breadcrumb-sep">/</span><span class="breadcrumb-leaf">{{ $article->title }}</span></div><article id="post-95" class="post-95 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial">
                        <header class="entry-header">
                            <div class="newspaper-x-image">
                                <img width="700" height="490" src="{{ $article->urlToImage }}" class="attachment-newspaper-x-single-post size-newspaper-x-single-post wp-post-image" alt="" />        </div>
                            <div class="newspaper-x-post-meta">
                                <div><span class="newspaper-x-category"> <a href="https://colorlib.com/newspaper-x/category/editorial/">{{ ucwords($article->category) }}</a></span><span class="newspaper-x-date">May 10, 2017 </span></div>            </div><!-- .entry-meta -->
                            <h2 class="entry-title">{{ $article->title }}</h2>
                        </header><!-- .entry-header -->
                        {{--<blockquote><p>“Etiam nec libero volutpat nisi pellentesque iaculis lobortis ac dui. Duis porta justo metus, eleifend vulputate ipsum volutpat vel.”</p></blockquote>--}}
                        <div class="entry-content">{{ $article->content }}</div><!-- .entry-content -->
                        <footer class="entry-footer">
                            <!-- Author description -->
                            <div class="row author-description">
                                <!-- Avatar -->
                                <div class="avatar text-center">
                                    <img src="https://secure.gravatar.com/avatar/4f668af6daea3af014898a77c8929dd8?s=75&d=mm&r=g" />
                                </div>
                                <div class="description">
                                    <h6><a href="https://colorlib.com/newspaper-x/author/raibercristian/" title="Posts by {{ $article->author }}" rel="author">{{ $article->author }}</a></h6>
                                    <!-- Short Description -->
                                    <p>{{ $article->content }}</p>
                                </div>
                                <div class="social-list"><ul><li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li><li><a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li><li><li><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a></li></ul></div><!-- end .author-bio-social -->    </div>
                            <!-- .Author description -->
                        </footer><!-- .entry-footer -->

                        <div class="newspaper-x-related-posts">
                            <div class="row">
                                <div class="col-lg-11 col-sm-10 col-xs-12 newspaper-x-related-posts-title">
                                    <h3><span>Related posts </span></h3>
                                </div>
                                <div class="newspaper-x-carousel-navigation hidden-xs text-right">
                                    <ul class="newspaper-x-carousel-arrows clearfix">
                                        <li><a href="#" class="newspaper-x-owl-prev fa fa-angle-left"></a></li>
                                        <li><a href="#" class="newspaper-x-owl-next fa fa-angle-right"></a></li>
                                    </ul>
                                </div>
                            </div><!--/.row-->
                            <div class="owlCarousel owl-carousel owl-theme" data-slider-id="95" id="owlCarousel-95" data-slider-items="3" data-slider-speed="400" data-slider-auto-play="1" data-slider-navigation="false">
                                <div class="item">
                                    <a href="{{ route('article.show', [ 'id' => $related[0]->id, 'title' => $related[0]->getFriendlyLink() ]) }}">
                                        <img width="550" height="360" src="{{ $related[0]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="" />
                                    </a>
                                    <div class="newspaper-x-related-post-title">
                                        <a href="{{ route('article.show', [ 'id' => $related[0]->id, 'title' => $related[0]->getFriendlyLink() ]) }}">{{ $related[0]->title }}</a>
                                    </div><div class="newspaper-x-related-posts-date">{{ $related[0]->articleDate() }}</div>
                                </div><!--/.item-->

                                <div class="item">
                                    <a href="{{ route('article.show', [ 'id' => $related[1]->id, 'title' => $related[1]->getFriendlyLink() ]) }}">
                                        <img width="550" height="360" src="{{ $related[1]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="" />
                                    </a>
                                    <div class="newspaper-x-related-post-title">
                                        <a href="{{ route('article.show', [ 'id' => $related[1]->id, 'title' => $related[1]->getFriendlyLink() ]) }}">{{ $related[1]->title }}</a>
                                    </div><div class="newspaper-x-related-posts-date">{{ $related[1]->articleDate() }}</div>
                                </div><!--/.item-->

                                <div class="item">
                                    <a href="{{ route('article.show', [ 'id' => $related[2]->id, 'title' => $related[2]->getFriendlyLink() ]) }}">
                                        <img width="550" height="360" src="{{ $related[2]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="" />
                                    </a>
                                    <div class="newspaper-x-related-post-title">
                                        <a href="{{ route('article.show', [ 'id' => $related[2]->id, 'title' => $related[2]->getFriendlyLink() ]) }}">{{ $related[2]->title }}</a>
                                    </div><div class="newspaper-x-related-posts-date">{{ $related[2]->articleDate() }}</div>
                                </div><!--/.item-->

                                <div class="item">
                                    <a href="{{ route('article.show', [ 'id' => $related[3]->id, 'title' => $related[3]->getFriendlyLink() ]) }}">
                                        <img width="550" height="360" src="{{ $related[3]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="" />
                                    </a>
                                    <div class="newspaper-x-related-post-title">
                                        <a href="{{ route('article.show', [ 'id' => $related[3]->id, 'title' => $related[3]->getFriendlyLink() ]) }}">{{ $related[3]->title }}</a>
                                    </div><div class="newspaper-x-related-posts-date">{{ $related[3]->articleDate() }}</div>
                                </div><!--/.item-->

                                <div class="item">
                                    <a href="{{ route('article.show', [ 'id' => $related[4]->id, 'title' => $related[4]->getFriendlyLink() ]) }}">
                                        <img width="550" height="360" src="{{ $related[4]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="" />
                                    </a>
                                    <div class="newspaper-x-related-post-title">
                                        <a href="{{ route('article.show', [ 'id' => $related[4]->id, 'title' => $related[3]->getFriendlyLink() ]) }}">{{ $related[4]->title }}</a>
                                    </div><div class="newspaper-x-related-posts-date">{{ $related[4]->articleDate() }}</div>
                                </div><!--/.item-->

                                <div class="item">
                                    <a href="{{ route('article.show', [ 'id' => $related[5]->id, 'title' => $related[5]->getFriendlyLink() ]) }}">
                                        <img width="550" height="360" src="{{ $related[5]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="" />
                                    </a>
                                    <div class="newspaper-x-related-post-title">
                                        <a href="{{ route('article.show', [ 'id' => $related[5]->id, 'title' => $related[5]->getFriendlyLink() ]) }}">{{ $related[5]->title }}</a>
                                    </div><div class="newspaper-x-related-posts-date">{{ $related[5]->articleDate() }}</div>
                                </div><!--/.item-->

                                <div class="item">
                                    <a href="{{ route('article.show', [ 'id' => $related[6]->id, 'title' => $related[6]->getFriendlyLink() ]) }}">
                                        <img width="550" height="360" src="{{ $related[6]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="" />
                                    </a>
                                    <div class="newspaper-x-related-post-title">
                                        <a href="{{ route('article.show', [ 'id' => $related[6]->id, 'title' => $related[6]->getFriendlyLink() ]) }}">{{ $related[6]->title }}</a>
                                    </div><div class="newspaper-x-related-posts-date">{{ $related[6]->articleDate() }}</div>
                                </div><!--/.item-->

                                <div class="item">
                                    <a href="{{ route('article.show', [ 'id' => $related[7]->id, 'title' => $related[7]->getFriendlyLink() ]) }}">
                                        <img width="550" height="360" src="{{ $related[7]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="" />
                                    </a>
                                    <div class="newspaper-x-related-post-title">
                                        <a href="{{ route('article.show', [ 'id' => $related[7]->id, 'title' => $related[7]->getFriendlyLink() ]) }}">{{ $related[7]->title }}</a>
                                    </div><div class="newspaper-x-related-posts-date">{{ $related[7]->articleDate() }}</div>
                                </div><!--/.item-->

                                <div class="item">
                                    <a href="{{ route('article.show', [ 'id' => $related[8]->id, 'title' => $related[8]->getFriendlyLink() ]) }}">
                                        <img width="550" height="360" src="{{ $related[8]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="" />
                                    </a>
                                    <div class="newspaper-x-related-post-title">
                                        <a href="{{ route('article.show', [ 'id' => $related[8]->id, 'title' => $related[8]->getFriendlyLink() ]) }}">{{ $related[8]->title }}</a>
                                    </div><div class="newspaper-x-related-posts-date">{{ $related[8]->articleDate() }}</div>
                                </div><!--/.item-->

                                <div class="item">
                                    <a href="{{ route('article.show', [ 'id' => $related[9]->id, 'title' => $related[9]->getFriendlyLink() ]) }}">
                                        <img width="550" height="360" src="{{ $related[9]->urlToImage }}" class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image" alt="" />
                                    </a>
                                    <div class="newspaper-x-related-post-title">
                                        <a href="{{ route('article.show', [ 'id' => $related[9]->id, 'title' => $related[9]->getFriendlyLink() ]) }}">{{ $related[9]->title }}</a>
                                    </div><div class="newspaper-x-related-posts-date">{{ $related[9]->articleDate() }}</div>
                                </div><!--/.item-->
                                <!--/.item-->
                            </div>
                            <!--/.owlCarousel-->
                        </div><!--/.mt-related-posts-->
                    </article><!-- #post-## -->
                </main><!-- #main -->
            </div><!-- #primary -->

            <aside id="secondary" class="widget-area col-lg-4 col-md-4 col-sm-4 newspaper-x-sidebar" role="complementary"></aside><!-- #secondary -->
        </div>
    </div>
    {{--<div id="comments" class="comments-area">--}}
        {{--<div class="comments-form">--}}
            {{--<div class="container">--}}
                {{--<div class="col-md-12">--}}

                    {{--<div id="respond" class="comment-respond">--}}
                        {{--<h3 id="reply-title" class="comment-reply-title"><span>Leave a reply</span> <small><a rel="nofollow" id="cancel-comment-reply-link" href="/newspaper-x/2017/05/10/nam-aliquet-lorem-vita/#respond" style="display:none;">Cancel reply</a></small></h3>			<form action="https://colorlib.com/newspaper-x/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>--}}
                            {{--<span class="comment_notes_before">Your email address will not be published. Required fields are marked *</span><p class="comment-form-comment"><textarea id="comment" name="comment"  placeholder="Comment" aria-required="true"></textarea></p><div class="row"><p class="comment-form-author col-sm-4"><input id="author" name="author" type="text" placeholder="Name*" value="" size="30" aria-required='true' /></p>--}}
                                {{--<p class="comment-form-email col-sm-4"><input id="email" name="email" type="text" placeholder="Email*" value="" size="30" aria-required='true' /></p>--}}
                                {{--<p class="comment-form-url col-sm-4"><input id="url" name="url" type="text" placeholder="Website" value="" size="30" /></p></div>--}}
                            {{--<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='95' id='comment_post_ID' />--}}
                                {{--<input type='hidden' name='comment_parent' id='comment_parent' value='0' />--}}
                            {{--</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="026c8591b7" /></p><p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="94"/></p>			</form>--}}
                    {{--</div><!-- #respond -->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div><!-- #comments -->--}}
    <div id="content" class="container">
    </div><!-- #content -->
@stop
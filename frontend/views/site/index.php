<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = '霓灯';
$this->params['index'] = true;//$this->title;
$this->params['breadcrumbs'] = null;//$this->title;
$this->blocks['content-header'] = '';
//$this->registerCssFile('@web/css/pluging.css',['depends'=>['backend\assets\KodeAsset']]);
////
$this->registerJsFile('@web/jQuery-video/js/video.min.js',[]);
$this->registerCssFile('/jQuery-video/css/video-js.min.css',[]);
/*$this->registerCss('.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-right: 8px;
    padding-left: 8px;
    margin-top:2px;
}');*/
$this->registerCss('.row {

    margin-top:1em;
}');

?>

<!-- Start Presentation -->
<div class="container" style="padding-left: 0px;padding-right: 0px">
    <div class="row" style="margin-bottom: 2em;">
        <div class="col-md-8">
            <div class="box  box-solid" style="box-shadow: none;background: none">

                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="    padding: 5px;
    border: 1px solid #dbe3eb;">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                        </ol>
                        <div class="carousel-inner slider-items">
                            <div class="item">
                                <img src="/adminlte/dist/img/library.jpg" alt="First slide">
                                <div class="carousel-caption">
                                    灰雀教务系统
                                </div>

                            </div>
                            <div class="item">
                                <img src="/adminlte/dist/img/turmp.jpg" alt="Second slide">

                                <div class="carousel-caption">
                                    Second Slide
                                </div>
                            </div>
                            <div class="item active">
                                <img src="/adminlte/dist/img/computer.jpg" alt="Third slide">

                                <div class="carousel-caption">
                                    Third Slide
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-md-4">

                    <div class="user-condition">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="/adminlte/dist/img/user1-128x128.jpg" alt="User Image">

                                    <div class="user-condition-info">
                                <span class="contacts-list-name">
                                  洅也吥荟嗳/葬叆
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                                        <span class="contacts-list-msg">开始直播：葬爱-悲伤逆流成河...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="/adminlte/dist/img/user7-128x128.jpg" alt="User Image">

                                    <div class="user-condition-info">
                                <span class="contacts-list-name">
                                  轻飞沫
                                  <small class="contacts-list-date pull-right">2/23/2015</small>
                                </span>
                                        <span class="contacts-list-msg">开始直播...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="/adminlte/dist/img/user3-128x128.jpg" alt="User Image">

                                    <div class="user-condition-info">
                                <span class="contacts-list-name">
                                  #硪琉璃&叆。
                                  <small class="contacts-list-date pull-right">2/20/2015</small>
                                </span>
                                        <span class="contacts-list-msg">直播...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="/adminlte/dist/img/user5-128x128.jpg" alt="User Image">

                                    <div class="user-condition-info">
                                <span class="contacts-list-name">
                                  小逊逊
                                  <small class="contacts-list-date pull-right">2/10/2015</small>
                                </span>
                                        <span class="contacts-list-msg">直播：学妹大指南</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="/adminlte/dist/img/user6-128x128.jpg" alt="User Image">

                                    <div class="user-condition-info">
                                <span class="contacts-list-name">
                                  傲夜狂少
                                  <small class="contacts-list-date pull-right">1/27/2015</small>
                                </span>
                                        <span class="contacts-list-msg">直播：左手岁月右手蹉跎...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="/adminlte/dist//img/user8-128x128.jpg" alt="User Image">

                                    <div class="user-condition-info">
                                <span class="contacts-list-name">
                                  碎玉者
                                  <small class="contacts-list-date pull-right">1/4/2015</small>
                                </span>
                                        <span class="contacts-list-msg">直播：露露，我再也不想见到你</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                        </ul>
                        <!-- /.contatcts-list -->
                    </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="box box-solid">
                <!--<div class="box-header with-border">
                    <h3 class="box-title">Carousel</h3>
                </div>-->
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <iframe height=300 width=100% src="http://player.youku.com/embed/XMTYzMDE1OTgyMA==" frameborder=0 allowfullscreen></iframe>
                        <!--<img class="img-responsive pad" src="/adminlte/dist/img/about.jpg" alt="Photo">-->
                        <p class=" pad">
                            Lorem ipsum represents a long-held tradition

                        </p>
                        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                        <span class="pull-right text-muted">127 likes - 3 comments</span>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <div class="attachment-block clearfix">
                <img class="video-img" src="/adminlte/dist/img/photo1.png" alt="Attachment Image">

                <div class="video-info">
                    <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                    <div class="attachment-text">
                        Description about the attachment can be placed here.
                        Lorem Ipsum industry... <a href="#">more</a>
                    </div>
                    <!-- /.attachment-text -->
                </div>
                <!-- /.attachment-pushed -->
            </div>
            <div class="attachment-block clearfix">
                <img class="video-img" src="/adminlte/dist/img/photo1.png" alt="Attachment Image">

                <div class="video-info">
                    <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                    <div class="attachment-text">
                        Description about the attachment can be placed here.
                        Lorem Ipsum industry... <a href="#">more</a>
                    </div>
                    <!-- /.attachment-text -->
                </div>
                <!-- /.attachment-pushed -->
            </div>
            <div class="attachment-block clearfix">
                <img class="video-img" src="/adminlte/dist/img/photo1.png" alt="Attachment Image">

                <div class="video-info">
                    <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                    <div class="attachment-text">
                        Description about the attachment can be placed here.
                        Lorem Ipsum isindustry... <a href="#">more</a>
                    </div>
                    <!-- /.attachment-text -->
                </div>
                <!-- /.attachment-pushed -->
            </div>

            <!-- About Me Box -->
            <!-- /.box -->
        </div>
        <div class="col-md-4">
            <div class="box box-solid">
                <!--<div class="box-header with-border">
                    <h3 class="box-title">Carousel</h3>
                </div>-->
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <iframe height=300 width=100% src="http://player.youku.com/embed/XMTYzMDE1OTgyMA==" frameborder=0 allowfullscreen></iframe>
                        <!--<img class="img-responsive pad" src="/adminlte/dist/img/about.jpg" alt="Photo">-->
                        <p class=" pad">
                            Lorem ipsum represents a long-held tradition

                        </p>
                            <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                            <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                            <span class="pull-right text-muted">127 likes - 3 comments</span>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>

            <div class="box box-primary box-widget">
                <div class="box-header with-border">
                    <h3 class="box-title">火热的播主</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="products-list product-list-in-box">
                        <li class="item">
                            <div class="product-img">
                                <img src="<?= Yii::getAlias('@web/adminlte/') ?>dist/img/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Samsung TV
                                    <span class="label label-warning pull-right">$1800</span></a>
                        <span class="product-description">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img class="img-circle" src="/adminlte/dist/img/user7-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Bicycle
                                    <span class="label label-info pull-right">$700</span></a>
                        <span class="product-description">
                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img class="img-circle" src="/adminlte/dist/img/user7-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
                        <span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img class="img-circle" src="/adminlte/dist/img/user7-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">PlayStation 4
                                    <span class="label label-success pull-right">$399</span></a>
                        <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img class="img-circle" src="/adminlte/dist/img/user7-128x128.jpg" alt="User Avatar">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">PlayStation 4
                                    <span class="label label-success pull-right">$399</span></a>
                        <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                            </div>
                        </li>
                        <!-- /.item -->
                    </ul>
                </div>
                <!-- /.box-body -->

                <!-- /.box-footer -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <section class="col-lg-4 connectedSortable ui-sortable">

            <!-- Map box -->
            <div class="box box-solid bg-light-blue-gradient">
                <div class="box-header ui-sortable-handle" style="cursor: move;">
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                            <i class="fa fa-calendar"></i></button>
                        <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                            <i class="fa fa-minus"></i></button>
                    </div>
                    <!-- /. tools -->

                    <i class="fa fa-map-marker"></i>

                    <h3 class="box-title">
                        Visitors
                    </h3>
                </div>
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!--<video src="/video/1 - 8 - 1.8 Three approaches.mp4"  controls="controls" autoplay="autoplay">
                        </video>-->
                        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="640" height="264"
                               poster="http://video-js.zencoder.com/oceans-clip.png"
                               data-setup="{}">
                            <source src="/video/1 - 8 - 1.8 Three approaches.mp4" type='video/mp4' />
                            <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
                            <source src="http://vjs.zencdn.net/v/oceans.ogv" type='video/ogg' />
                            <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
                            <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
                        </video>
                           <!-- <video id="example_video_1" class="video-js vjs-default-skin"
                               controls preload="none" width="640" height="264"
                               poster="http://video-js.zencoder.com/oceans-clip.png"
                               data-setup="{}">-->
                    </div>
                <!-- /.box-body-->
                <div class="box-footer no-border">

                    <!-- /.row -->
                </div>
            </div>
            </div>
            <!-- /.box -->
            <div class="box box-solid">
                <!--<div class="box-header with-border">
                    <h3 class="box-title">Carousel</h3>
                </div>-->
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="640" height="264"
                               poster="http://video-js.zencoder.com/oceans-clip.png"
                               data-setup="{}">
                            <source src="/video/1 - 8 - 1.8 Three approaches.mp4" type='video/mp4' />
                            <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
                            <source src="http://vjs.zencdn.net/v/oceans.ogv" type='video/ogg' />
                            <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
                            <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
                        </video>                        <!--<img class="img-responsive pad" src="/adminlte/dist/img/about.jpg" alt="Photo">-->
                        <p class=" pad">
                            Lorem ipsum represents a long-held tradition

                        </p>
                        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                        <span class="pull-right text-muted">127 likes - 3 comments</span>

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- solid sales graph -->
            <div class="box box-solid bg-teal-gradient">
                <div class="box-header ui-sortable-handle" style="cursor: move;">
                    <i class="fa fa-th"></i>

                    <h3 class="box-title">Sales Graph</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body border-radius-none">
                    <div class="chart" id="line-chart" style="height: 250px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="250" version="1.1" width="425" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; top: -0.59375px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="45.5" y="211" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 10px; line-height: normal; font-family: &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#efefef" d="M58,211H400" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="45.5" y="164.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 10px; line-height: normal; font-family: &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">5,000</tspan></text><path fill="none" stroke="#efefef" d="M58,164.5H400" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="45.5" y="118.00000000000001" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 10px; line-height: normal; font-family: &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="4.000000000000014" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">10,000</tspan></text><path fill="none" stroke="#efefef" d="M58,118.00000000000001H400" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="45.5" y="71.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 10px; line-height: normal; font-family: &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#efefef" d="M58,71.5H400" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="45.5" y="25.00000000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 10px; line-height: normal; font-family: &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal"><tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20,000</tspan></text><path fill="none" stroke="#efefef" d="M58,25.00000000000003H400" stroke-width="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="337.25151883353584" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 10px; line-height: normal; font-family: &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="185.1591737545565" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 10px; line-height: normal; font-family: &quot;Open Sans&quot;;" font-size="10px" font-family="Open Sans" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><path fill="none" stroke="#efefef" d="M58,186.2062C67.55771567436209,185.9458,86.67314702308627,187.775575,96.23086269744836,185.1646C105.78857837181044,182.553625,124.90400972053463,166.4743950819672,134.46172539489672,165.3184C143.91555285540704,164.17497008196722,162.82320777642772,178.173325,172.27703523693805,175.9669C181.73086269744837,173.760475,200.63851761846902,149.8671487704918,210.09234507897935,147.667C219.65006075334145,145.4426737704918,238.76549210206562,155.955625,248.32320777642772,158.269C257.8809234507898,160.582375,276.996354799514,177.16471967213116,286.5540704738761,166.174C296.0078979343864,155.30274467213115,314.9155528554071,77.67916919889502,324.3693803159174,70.8211C333.71931956257595,64.03839419889503,352.4191980558931,103.97557445054946,361.76913730255166,111.61090000000002C371.32685297691376,119.41589945054946,390.4422843256379,127.33952500000001,400,132.5824" stroke-width="2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="58" cy="186.2062" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="96.23086269744836" cy="185.1646" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="134.46172539489672" cy="165.3184" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="172.27703523693805" cy="175.9669" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="210.09234507897935" cy="147.667" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="248.32320777642772" cy="158.269" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="286.5540704738761" cy="166.174" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="324.3693803159174" cy="70.8211" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="361.76913730255166" cy="111.61090000000002" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="400" cy="132.5824" r="4" fill="#efefef" stroke="#efefef" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 11.5px; top: 112px; display: none;"><div class="morris-hover-row-label">2011 Q1</div><div class="morris-hover-point" style="color: #efefef">
                                Item 1:
                                2,666
                            </div></div></div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-border">
                    <div class="row">
                        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                            <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none; background: none;"></div>

                            <div class="knob-label">Mail-Orders</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                            <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none; background: none;"></div>

                            <div class="knob-label">Online</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xs-4 text-center">
                            <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; -webkit-appearance: none; background: none;"></div>

                            <div class="knob-label">In-Store</div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->

            <!-- Calendar -->

            <!-- /.box -->

        </section>
        <!-- /.col -->

    </div>
</div>

<!-- End Presentation -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->

<!-- END CONTAINER -->
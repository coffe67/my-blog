<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
                <?php if (is_home() || is_front_page() ): ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="entry-content"></div>
                                </div>
                            </div>
                        </div>

                        <div class="entry-content">
            <div class="section-background-white section-padding">
                <div class="container">
                    <div class="row">
                        <div class="po-column col-sm-4 col-sm-offset-0"
                             data-animation="bounce-in">
                            <div class="po-icon-box icon-green hover-ani">
                                <div class="icon-box icon-green">
                                    <i class="fa fa-thumbs-o-up fa-2x"></i>
                                </div>

                                <div class="column-content">
                                    <h4 class="text-center">
                                        Clean and powerful</h4>

                                    <div class="row">
                                        <div class=
                                             "col-sm-6 col-sm-offset-3">
                                            <div class="icon-box-line">
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-center box-text">Nibiru
                                        couples clean, breath-taking design
                                        with powerful yet simple features that
                                        keep you in control of the user
                                        experience your audience receives.</p>
                                </div>
                            </div>
                        </div>

                        <div class="po-column col-sm-4 col-sm-offset-0"
                             data-animation="bounce-in" data-delay="400">
                            <div class="po-icon-box icon-green hover-ani">
                                <div class="icon-box icon-green">
                                    <i class="fa fa-eye fa-2x"></i>
                                </div>

                                <div class="column-content">
                                    <h4 class="text-center">
                                        Attention to detail</h4>

                                    <div class="row">
                                        <div class=
                                             "col-sm-6 col-sm-offset-3">
                                            <div class="icon-box-line">
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-center box-text">Nibiru’s
                                        attention to detail is second to none.
                                        Each pixel has been carefully crafted
                                        to provide a user experience that is
                                        intuitive, &nbsp;simple and
                                        aesthetically simulating.</p>
                                </div>
                            </div>
                        </div>

                        <div class="po-column col-sm-4 col-sm-offset-0"
                             data-animation="bounce-in" data-delay="800">
                            <div class="po-icon-box icon-green hover-ani">
                                <div class="icon-box icon-green">
                                    <i class="fa fa-smile-o fa-2x"></i>
                                </div>

                                <div class="column-content">
                                    <h4 class="text-center">
                                        First class support</h4>

                                    <div class="row">
                                        <div class=
                                             "col-sm-6 col-sm-offset-3">
                                            <div class="icon-box-line">
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-center box-text">We
                                        measure our success in terms of happy
                                        customers. We’re not here to make
                                        sales. We’re here help you achieve your
                                        goals, well after you’ve purchased
                                        Nibiru.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                        <div class="container po-container-section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="entry-content"></div>
                </div>
            </div>
        </div>

                        <div class="entry-content">
            <div class="section-background-white section-padding-nt">
                <div class="row po-full-width">
                    <div class="po-column po-header-top col-sm-12 related-bottom"
                         data-animation="fade-in" data-delay="0">
                        <h3 class="text-center">Recent projects</h3>

                        <div class="header-line header-line-bottom"></div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="portfolio-item col-sm-4 column-4">
                        <a href=
                           "portfolio-item-1.html">

                            <div class="liquid-container"><img alt=
                                                               "Alaskan Bunker" class="img-responsive" src=
                                                               "../wp-content/uploads/2014/03/1_mini-31.jpg"></div>

                            <div class="portfolio-details">
                                <div class="item-description">
                                    <div class="description-cell">
                                        <h5 class="item-title">Alaskan
                                            Bunker</h5>

                                        <div class="subtitle">
                                            Photography
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>

                    </div>

                    <div class="portfolio-item col-sm-4 column-4">
                        <a href=
                           "portfolio-item-2.html">

                            <div class="liquid-container"><img alt=
                                                               "Love Triangle" class="img-responsive" src=
                                                               "../wp-content/uploads/2014/03/love-triangle_mini-2.jpg"></div>

                            <div class="portfolio-details">
                                <div class="item-description">
                                    <div class="description-cell">
                                        <h5 class="item-title">Love
                                            Triangle</h5>

                                        <div class="subtitle">
                                            Identity <span class="cat-sep"></span> Illustration
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>

                    </div>

                    <div class="portfolio-item col-sm-4 column-4">
                        <a href=
                           "portfolio-item-3.html">

                            <div class="liquid-container"><img alt=
                                                               "Malaysian Mountains" class="img-responsive" src=
                                                               "../wp-content/uploads/2014/03/landscape_mini.jpg"></div>

                            <div class="portfolio-details">
                                <div class="item-description">
                                    <div class="description-cell">
                                        <h5 class="item-title">Malaysian
                                            Mountains</h5>

                                        <div class="subtitle">
                                            Photography <span class="cat-sep"></span> Strategy <span class="cat-sep"></span> Technology
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>

                    </div>

                    <div class="portfolio-item col-sm-4 column-4">
                        <a href=
                           "portfolio-item-4.html">

                            <div class="liquid-container"><img alt="Bird"
                                                               class="img-responsive" src=
                                "../wp-content/uploads/2014/03/Bird_mini.jpg"></div>

                            <div class="portfolio-details">
                                <div class="item-description">
                                    <div class="description-cell">
                                        <h5 class="item-title">Bird</h5>

                                        <div class="subtitle">
                                            Identity <span class="cat-sep"></span> Technology
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>

                    </div>

                    <div class="portfolio-item col-sm-4 column-4">
                        <a href=
                           "portfolio-item-5.html">

                            <div class="liquid-container"><img alt="Panther"
                                                               class="img-responsive" src=
                                "../wp-content/uploads/2014/03/Panther_mini.jpg"></div>

                            <div class="portfolio-details">
                                <div class="item-description">
                                    <div class="description-cell">
                                        <h5 class="item-title">Panther</h5>

                                        <div class="subtitle">
                                            Identity <span class="cat-sep"></span> Illustration
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>

                    </div>

                    <div class="portfolio-item col-sm-4 column-4">
                        <a href=
                           "portfolio-item-6.html">

                            <div class="liquid-container"><img alt="F" class=
                                "img-responsive" src=
                                                               "../wp-content/uploads/2014/03/f_mini.jpg"></div>

                            <div class="portfolio-details">
                                <div class="item-description">
                                    <div class="description-cell">
                                        <h5 class="item-title">F</h5>

                                        <div class="subtitle">
                                            Identity <span class="cat-sep"></span> Illustration
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>

                    </div>

                    <div class="clear-float"></div>

                    <div class="sepline-portfolio">
                    </div>

                    <div class="no-padding">
                        <div class="row po-full-width">
                            <div class="po-column col-sm-12 no-padding"
                                 data-animation="fade-in" data-delay="0">
                                <a class=
                                   "btn outline-button light btn-lg btn-block btn-icon-ani project-button"
                                   href=
                                   "http://nibiru.pixelobject.com/portfolio/">

                                    <div class="btn-icon"><i class="fa fa-folder-open-o"></i></div><span>View All
                                    Projects</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                        <div class="container po-container-section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="entry-content"></div>
                </div>
            </div>
        </div>

                        <div class="entry-content">
            <div class="section-background-light section-lineshadow-top section-padding">
                <div class="container">
                    <div class="row">
                        <div class="po-column col-sm-3 col-sm-offset-0"
                             data-animation="fade-in" data-delay="0">
                            <div class="po-column-mobile-ani"
                                 data-animation="fade-in" data-delay="0">
                                <div class="hover-ani">
                                    <div class=
                                         "circular-cont center-block">
                                        <div class="circular-cont-inner">
                                            <div class="icon-circular">
                                                <i class="fa fa-eye fa-2x po-column-mobile-ani" data-delay="0" data-animation="fade-in"></i>
                                            </div>
                                        </div><input class=
                                                     "dial po-column-mobile-ani"
                                                     data-animation="fade-in"
                                                     data-bgcolor="#ddd" data-delay="0"
                                                     data-displayinput="false"
                                                     data-fgcolor="#20C596"
                                                     data-linecap="round" data-readonly=
                                        "true" data-thickness=".01"
                                                     data-value="94" data-width="150"
                                                     type="text" value="0">
                                    </div>

                                    <div class=
                                         "po-column po-header-line col-sm-6 col-sm-offset-3"
                                         data-animation="fade-in" data-delay=
                                    "0">
                                        <div class="circular-line"></div>
                                    </div>

                                    <div class=
                                         "po-column po-column-mobile-ani po-header-small col-sm-12"
                                         data-animation="pull-up" data-delay=
                                    "900">
                                        <h4 class=
                                            "circular-text text-center">Design
                                            and Aesthetics.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="po-column col-sm-3 col-sm-offset-0"
                             data-animation="fade-in" data-delay="0">
                            <div class="po-column-mobile-ani"
                                 data-animation="fade-in" data-delay="0">
                                <div class="hover-ani">
                                    <div class=
                                         "circular-cont center-block">
                                        <div class="circular-cont-inner">
                                            <div class="icon-circular">
                                                <i class="fa fa-lightbulb-o fa-2x po-column-mobile-ani" data-delay="0" data-animation="fade-in"></i>
                                            </div>
                                        </div><input class=
                                                     "dial po-column-mobile-ani"
                                                     data-animation="fade-in"
                                                     data-bgcolor="#ddd" data-delay="0"
                                                     data-displayinput="false"
                                                     data-fgcolor="#20C596"
                                                     data-linecap="round" data-readonly=
                                        "true" data-thickness=".01"
                                                     data-value="90" data-width="150"
                                                     type="text" value="0">
                                    </div>

                                    <div class=
                                         "po-column po-header-line col-sm-6 col-sm-offset-3"
                                         data-animation="fade-in" data-delay=
                                    "0">
                                        <div class="circular-line"></div>
                                    </div>

                                    <div class=
                                         "po-column po-column-mobile-ani po-header-small col-sm-12"
                                         data-animation="pull-up" data-delay=
                                    "900">
                                        <h4 class=
                                            "circular-text text-center">
                                            Creativity.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="po-column col-sm-3 col-sm-offset-0"
                             data-animation="fade-in" data-delay="0">
                            <div class="po-column-mobile-ani"
                                 data-animation="fade-in" data-delay="0">
                                <div class="hover-ani">
                                    <div class=
                                         "circular-cont center-block">
                                        <div class="circular-cont-inner">
                                            <div class="icon-circular">
                                                <i class="fa fa-sitemap fa-2x po-column-mobile-ani" data-delay="0" data-animation="fade-in"></i>
                                            </div>
                                        </div><input class=
                                                     "dial po-column-mobile-ani"
                                                     data-animation="fade-in"
                                                     data-bgcolor="#ddd" data-delay="0"
                                                     data-displayinput="false"
                                                     data-fgcolor="#20C596"
                                                     data-linecap="round" data-readonly=
                                        "true" data-thickness=".01"
                                                     data-value="60" data-width="150"
                                                     type="text" value="0">
                                    </div>

                                    <div class=
                                         "po-column po-header-line col-sm-6 col-sm-offset-3"
                                         data-animation="fade-in" data-delay=
                                    "0">
                                        <div class="circular-line"></div>
                                    </div>

                                    <div class=
                                         "po-column po-column-mobile-ani po-header-small col-sm-12"
                                         data-animation="pull-up" data-delay=
                                    "900">
                                        <h4 class=
                                            "circular-text text-center">
                                            Multi-purpose flexibility.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="po-column col-sm-3 col-sm-offset-0"
                             data-animation="fade-in" data-delay="0">
                            <div class="po-column-mobile-ani"
                                 data-animation="fade-in" data-delay="0">
                                <div class="hover-ani">
                                    <div class=
                                         "circular-cont center-block">
                                        <div class="circular-cont-inner">
                                            <div class="icon-circular">
                                                <i class="fa fa-smile-o fa-2x po-column-mobile-ani" data-delay="0" data-animation="fade-in"></i>
                                            </div>
                                        </div><input class=
                                                     "dial po-column-mobile-ani"
                                                     data-animation="fade-in"
                                                     data-bgcolor="#ddd" data-delay="0"
                                                     data-displayinput="false"
                                                     data-fgcolor="#20C596"
                                                     data-linecap="round" data-readonly=
                                        "true" data-thickness=".01"
                                                     data-value="85" data-width="150"
                                                     type="text" value="0">
                                    </div>

                                    <div class=
                                         "po-column po-header-line col-sm-6 col-sm-offset-3"
                                         data-animation="fade-in" data-delay=
                                    "0">
                                        <div class="circular-line"></div>
                                    </div>

                                    <div class=
                                         "po-column po-column-mobile-ani po-header-small col-sm-12"
                                         data-animation="pull-up" data-delay=
                                    "900">
                                        <h4 class=
                                            "circular-text text-center">Support
                                            and documentation.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                        <div class="container po-container-section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="entry-content"></div>
                </div>
            </div>
        </div>

                        <div class="entry-content">
            <div class=
                 "po-section section-image section-background-image-fixed section-image-bg7">
                <div class="container">
                    <div class="row">
                        <div class="po-column col-sm-8 col-sm-offset-2 quote-padding"
                             data-animation="fade-in">
                            <div class="po-column po-header-top col-sm-12 no-padding"
                                 data-animation="fade-in" data-delay="0">
                                <h2 class="header-large text-center">Built
                                    with beauty, simplicity, speed and ease of
                                    use in mind.</h2>

                                <div class="header-line header-line-bottom">
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="no-padding">
                            <div class="row po-full-width">
                                <div class="po-column col-sm-12 no-padding"
                                     data-animation="fade-in" data-delay="0">
                                    <a class=
                                       "btn outline-button white btn-lg btn-block btn-icon-ani button-summary"
                                       href="#">View
                                        feature summary&nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                        <div class="container po-container-section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="entry-content"></div>
                </div>
            </div>
        </div>

                        <div class="entry-content">
                            <div class="section-background-white section-padding-nb">
                                <div class="container">
                                    <div class="row">
                                        <div class="po-column po-header-top col-sm-12 no-padding"
                                             data-animation="fade-in" data-delay="0">
                                            <h3 class="text-center">Nibiru core
                                                features</h3>

                                            <div class="header-line"></div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="po-column col-md-6 col-md-offset-0 padding-nb"
                                             data-animation="move-right">
                                            <img alt="mobile_mini" height="1137" src=
                                            "images/mobile_mini.jpg"
                                                 width="1100">
                                        </div>

                                        <div class="po-column col-md-6 col-md-offset-0 padding-nb"
             data-animation="fade-in">
            <div class="po-column col-md-6 col-md-offset-0 padding-nb"
                 data-animation="move-left" data-delay="200">
                <div class="po-icon-left icon-green hover-ani">
                    <table>
                        <tbody>
                        <tr>
                            <td class="icon-td">
                                <div class=
                                     "po-icon icon-boxless-green">
                                    <i class="fa fa-eye fa-2x"></i>
                                </div>
                            </td>

                            <td>
                                <h4 class="small-header-style">
                                    Intuitive design
                                    elements.</h4>

                                <p class="box-text">
                                    Nibiru naturally
                                    interacts with your
                                    audience, blending
                                    clean minimalist design
                                    with slick animations
                                    and
                                    transitions.<br></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="po-column col-md-6 col-md-offset-0 padding-nb"
                 data-animation="move-left" data-delay="400">
                <div class="po-icon-left icon-green hover-ani">
                    <table>
                        <tbody>
                        <tr>
                            <td class="icon-td">
                                <div class=
                                     "po-icon icon-boxless-green">
                                    <i class="fa fa-caret-square-o-right fa-2x"></i>
                                </div>
                            </td>

                            <td>
                                <h4 class="small-header-style">
                                    Full multimedia
                                    support.</h4>

                                <p class="box-text">
                                    Bring your site to life
                                    with Nibiru’s
                                    multi-format content –
                                    from images to embedded
                                    and self-hosted
                                    videos.<br></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="clearfix hidden-xs"></div><br>

            <div class="po-column col-md-6 col-md-offset-0 padding-features"
                 data-animation="move-left" data-delay="600">
                <div class="po-icon-left icon-green hover-ani">
                    <table>
                        <tbody>
                        <tr>
                            <td class="icon-td">
                                <div class=
                                     "po-icon icon-boxless-green">
                                    <i class="fa fa-tablet fa-2x"></i>
                                </div>
                            </td>

                            <td>
                                <h4 class="small-header-style">
                                    Fully responsive
                                    design.</h4>

                                <p class="box-text">
                                    Nibiru scales
                                    beautifully on all
                                    devices. From desktop
                                    to mobile, your pixels
                                    will remain close to
                                    perfect.<br></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="po-column col-md-6 col-md-offset-0 padding-features"
                 data-animation="move-left" data-delay="800">
                <div class="po-icon-left icon-green hover-ani">
                    <table>
                        <tbody>
                        <tr>
                            <td class="icon-td">
                                <div class=
                                     "po-icon icon-boxless-green">
                                    <i class="fa fa-smile-o fa-2x"></i>
                                </div>
                            </td>

                            <td>
                                <h4 class="small-header-style">
                                    Help and support.</h4>

                                <p class="box-text">
                                    Nibiru is shipped with
                                    extensive &nbsp;support
                                    that’ll get your site
                                    up and running quickly
                                    and seamlessly.<br></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="clearfix hidden-xs"></div><br>

            <div class="po-column col-md-6 col-md-offset-0 padding-features2"
                 data-animation="move-left" data-delay="1000">
                <div class="po-icon-left icon-green hover-ani">
                    <table>
                        <tbody>
                        <tr>
                            <td class="icon-td">
                                <div class=
                                     "po-icon icon-boxless-green">
                                    <i class="fa fa-folder-open-o fa-2x"></i>
                                </div>
                            </td>

                            <td>
                                <h4 class="small-header-style">
                                    Fully filterable
                                    portfolio.</h4>

                                <p class="box-text">
                                    Showcase your skills
                                    using Nibiru’s
                                    Portfolio function and
                                    allow visitors to
                                    filter your work by
                                    discipline.<br></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="po-column col-md-6 col-md-offset-0 padding-features2"
                 data-animation="move-left" data-delay="1200">
                <div class="po-icon-left icon-green hover-ani">
                    <table>
                        <tbody>
                        <tr>
                            <td class="icon-td">
                                <div class=
                                     "po-icon icon-boxless-green">
                                    <i class="fa fa-flag-o fa-2x"></i>
                                </div>
                            </td>

                            <td>
                                <h4 class="small-header-style">
                                    Font Awesome
                                    webfonts.</h4>

                                <p class="box-text">
                                    Font Awesome is
                                    integrated into Nibiru
                                    to give you a large
                                    selection of
                                    beautifully designed
                                    vector icons.<br></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="container po-container-section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="entry-content"></div>
                </div>
            </div>
        </div>

                        <div class="entry-content">
            <div class=
                 "po-section section-image section-background-image-fixed section-image-bg8">
                <div class="container">
                    <div class="row">
                        <div class="po-column po-header-top col-sm-12 related-bottom"
                             data-animation="fade-in" data-delay="0">
                            <h3 class="text-center">We’ve worked with some
                                heavyweights</h3>

                            <div class="header-line header-line-bottom"></div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-sm-10 col-sm-offset-1">
                            <div class=
                                 "po-column client-image col-sm-3 column-3"
                                 data-animation="fade-in" data-delay="0">
                                <div class="client-container"
                                     data-placement="top" data-toggle=
                                "tooltip" title="jQuery">
                                    <div class="client-details">
                                        <div class="item-description">
                                        </div>
                                    </div>

                                    <div class=
                                         "liquid-container-clients">
                                        <img alt="client-8_mini" class=
                                        "attachment-full wp-post-image"
                                             height="447" src=
                                        "http://pixelobject.com/assets/images/nibiru/client-demo-8_mini.jpg"
                                             width="700"></div>
                                </div>
                            </div>

                            <div class=
                                 "po-column client-image col-sm-3 column-3"
                                 data-animation="fade-in" data-delay="0">
                                <div class="client-container"
                                     data-placement="top" data-toggle=
                                "tooltip" title="Wordpress">
                                    <div class="client-details">
                                        <div class="item-description">
                                        </div>
                                    </div>

                                    <div class=
                                         "liquid-container-clients">
                                        <img alt="client-7_mini" class=
                                        "attachment-full wp-post-image"
                                             height="447" src=
                                        "http://pixelobject.com/assets/images/nibiru/client-demo-7_mini.jpg"
                                             width="700"></div>
                                </div>
                            </div>

                            <div class=
                                 "po-column client-image col-sm-3 column-3"
                                 data-animation="fade-in" data-delay="0">
                                <div class="client-container"
                                     data-placement="top" data-toggle=
                                "tooltip" title="ThemeForest">
                                    <div class="client-details">
                                        <div class="item-description">
                                        </div>
                                    </div>

                                    <div class=
                                         "liquid-container-clients">
                                        <img alt="client-6_mini" class=
                                        "attachment-full wp-post-image"
                                             height="447" src=
                                        "http://pixelobject.com/assets/images/nibiru/client-demo-6_mini.jpg"
                                             width="700"></div>
                                </div>
                            </div>

                            <div class=
                                 "po-column client-image col-sm-3 column-3"
                                 data-animation="fade-in" data-delay="0">
                                <div class="client-container"
                                     data-placement="top" data-toggle=
                                "tooltip" title="Envato">
                                    <div class="client-details">
                                        <div class="item-description">
                                        </div>
                                    </div>

                                    <div class=
                                         "liquid-container-clients">
                                        <img alt="client-5_mini" class=
                                        "attachment-full wp-post-image"
                                             height="447" src=
                                        "http://pixelobject.com/assets/images/nibiru/client-demo-5_mini.jpg"
                                             width="700"></div>
                                </div>
                            </div>

                            <div class=
                                 "po-column client-image col-sm-3 column-3"
                                 data-animation="fade-in" data-delay="0">
                                <div class="client-container"
                                     data-placement="top" data-toggle=
                                "tooltip" title="jQuery">
                                    <div class="client-details">
                                        <div class="item-description">
                                        </div>
                                    </div>

                                    <div class=
                                         "liquid-container-clients">
                                        <img alt="client-4_mini" class=
                                        "attachment-full wp-post-image"
                                             height="447" src=
                                        "http://pixelobject.com/assets/images/nibiru/client-demo-4_mini.jpg"
                                             width="700"></div>
                                </div>
                            </div>

                            <div class=
                                 "po-column client-image col-sm-3 column-3"
                                 data-animation="fade-in" data-delay="0">
                                <div class="client-container"
                                     data-placement="top" data-toggle=
                                "tooltip" title="CSS3">
                                    <div class="client-details">
                                        <div class="item-description">
                                        </div>
                                    </div>

                                    <div class=
                                         "liquid-container-clients">
                                        <img alt="client-3_mini" class=
                                        "attachment-full wp-post-image"
                                             height="447" src=
                                        "http://pixelobject.com/assets/images/nibiru/client-demo-3_mini.jpg"
                                             width="700"></div>
                                </div>
                            </div>

                            <div class=
                                 "po-column client-image col-sm-3 column-3"
                                 data-animation="fade-in" data-delay="0">
                                <div class="client-container"
                                     data-placement="top" data-toggle=
                                "tooltip" title="HTML5">
                                    <div class="client-details">
                                        <div class="item-description">
                                        </div>
                                    </div>

                                    <div class=
                                         "liquid-container-clients">
                                        <img alt="client-2_mini" class=
                                        "attachment-full wp-post-image"
                                             height="447" src=
                                        "http://pixelobject.com/assets/images/nibiru/client-demo-2_mini.jpg"
                                             width="700"></div>
                                </div>
                            </div>

                            <div class=
                                 "po-column client-image col-sm-3 column-3"
                                 data-animation="fade-in" data-delay="0">
                                <div class="client-container"
                                     data-placement="top" data-toggle=
                                "tooltip" title="Wordpress">
                                    <div class="client-details">
                                        <div class="item-description">
                                        </div>
                                    </div>

                                    <div class=
                                         "liquid-container-clients">
                                        <img alt="client-1_mini" class=
                                        "attachment-full wp-post-image"
                                             height="447" src=
                                        "http://pixelobject.com/assets/images/nibiru/client-demo-1_mini.jpg"
                                             width="700"></div>
                                </div>
                            </div>

                            <div class="clear-float"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                        <div class="container po-container-section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="entry-content"></div>
                </div>
            </div>
        </div>

                        <div class="entry-content">
            <div class="test-container testimonials-background">
                <div class="row po-full-width">
                    <div class="col-sm-12 no-padding">
                        <div class="po-testimonials">
                            <ul class="po-test-slide no-padding">
                                <li>
                                    <div class="test-text text-center">
                                        <p>Nibiru is pretty, slick and easy
                                            to use. The best theme I’ve bought
                                            so far.</p>
                                    </div>

                                    <div class="test-person text-center">
                                        Timothy McGowen via Twitter
                                    </div>
                                </li>

                                <li>
                                    <div class="test-text text-center">
                                        <p>I like how easy it is for
                                            designers to showcase their
                                            creativity without struggling with
                                            code.</p>
                                    </div>

                                    <div class="test-person text-center">
                                        William Han
                                    </div>
                                </li>

                                <li>
                                    <div class="test-text text-center">
                                        <p>Nibiru is slick and pretty! It
                                            makes my work look much better.</p>
                                    </div>

                                    <div class="test-person text-center">
                                        Claire Wilkens
                                    </div>
                                </li>

                                <li>
                                    <div class="test-text text-center">
                                        <p>Love it! A really simple way to
                                            showcase my Portfolio without
                                            wasting time messing around with
                                            code or hiring a web developer.</p>
                                    </div>

                                    <div class="test-person text-center">
                                        Peter Quillen via Twitter
                                    </div>
                                </li>

                                <li>
                                    <div class="test-text text-center">
                                        <p>I love Nibiru. It’s really
                                            simple and easy to use, whilst
                                            still looking amazing! I’m really
                                            pleased with it so far.</p>
                                    </div>

                                    <div class="test-person text-center">
                                        Oscar Hopkins via Twitter
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="clear-float"></div>
                    </div>
                </div>
            </div>
        </div>

                        <div class="container po-container-section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="entry-content"></div>
                </div>
            </div>
        </div>

                        <div class="entry-content">
            <div class="section-background-white section-padding-nb">
                <div class="container">
                    <div class="row">
                        <div class="po-column po-header-top col-sm-12 no-padding"
                             data-animation="fade-in" data-delay="0">
                            <h3 class="text-center">Meet the team</h3>

                            <div class="header-line header-line-bottom"></div>
                        </div>

                        <div class="clearfix"></div>

                        <div class=
                             "po-column portfolio-item col-sm-2 column-2"
                             data-animation="fade-in" data-delay="0">
                            <a href=
                               "team-member.html">

                                <div class="liquid-container"><img alt=
                                                                   "download-image-l" class=
                                                                   "attachment-full wp-post-image" height="767"
                                                                   src=
                                                                   "../wp-content/uploads/2014/04/chris1_mini.jpg"
                                                                   width="1000"></div>

                                <div class="portfolio-details">
                                    <div class="item-description">
                                        <div class="description-cell">
                                            <h5 class="item-title">Chris</h5>

                                            <div class="subtitle">
                                                Founder
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </a>
                        </div>

                        <div class=
                             "po-column portfolio-item col-sm-2 column-2"
                             data-animation="fade-in" data-delay="0">
                            <a href=
                               "team-member.html">

                                <div class="liquid-container"><img alt=
                                                                   "download-image" class=
                                                                   "attachment-full wp-post-image" height="767"
                                                                   src=
                                                                   "../wp-content/uploads/2014/04/emily1_mini.jpg"
                                                                   width="1000"></div>

                                <div class="portfolio-details">
                                    <div class="item-description">
                                        <div class="description-cell">
                                            <h5 class="item-title">Emily</h5>

                                            <div class="subtitle">
                                                Photographer
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </a>
                        </div>

                        <div class=
                             "po-column portfolio-item col-sm-2 column-2"
                             data-animation="fade-in" data-delay="0">
                            <a href=
                               "team-member.html">

                                <div class="liquid-container"><img alt=
                                                                   "download-image-l" class=
                                                                   "attachment-full wp-post-image" height="767"
                                                                   src=
                                                                   "../wp-content/uploads/2014/04/jason2_mini.jpg"
                                                                   width="1000"></div>

                                <div class="portfolio-details">
                                    <div class="item-description">
                                        <div class="description-cell">
                                            <h5 class="item-title">Jason</h5>

                                            <div class="subtitle">
                                                Programmer
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </a>
                        </div>

                        <div class=
                             "po-column portfolio-item col-sm-2 column-2"
                             data-animation="fade-in" data-delay="0">
                            <a href=
                               "team-member.html">

                                <div class="liquid-container"><img alt=
                                                                   "download-image" class=
                                                                   "attachment-full wp-post-image" height="766"
                                                                   src=
                                                                   "../wp-content/uploads/2014/04/natalie2_mini.jpg"
                                                                   width="900"></div>

                                <div class="portfolio-details">
                                    <div class="item-description">
                                        <div class="description-cell">
                                            <h5 class="item-title">Natalie</h5>

                                            <div class="subtitle">
                                                Editor
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </a>
                        </div>

                        <div class=
                             "po-column portfolio-item col-sm-2 column-2"
                             data-animation="fade-in" data-delay="0">
                            <a href=
                               "team-member.html">

                                <div class="liquid-container"><img alt=
                                                                   "download-image-l" class=
                                                                   "attachment-full wp-post-image" height="888"
                                                                   src=
                                                                   "../wp-content/uploads/2014/04/tony_mini.jpg"
                                                                   width="1000"></div>

                                <div class="portfolio-details">
                                    <div class="item-description">
                                        <div class="description-cell">
                                            <h5 class="item-title">Tony</h5>

                                            <div class="subtitle">
                                                Designer
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </a>
                        </div>

                        <div class=
                             "po-column portfolio-item col-sm-2 column-2"
                             data-animation="fade-in" data-delay="0">
                            <a href=
                               "team-member.html">

                                <div class="liquid-container"><img alt=
                                                                   "download-image" class=
                                                                   "attachment-full wp-post-image" height="670"
                                                                   src=
                                                                   "../wp-content/uploads/2014/04/claire3_mini.jpg"
                                                                   width="800"></div>

                                <div class="portfolio-details">
                                    <div class="item-description">
                                        <div class="description-cell">
                                            <h5 class="item-title">Claire</h5>

                                            <div class="subtitle">
                                                Support
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </a>
                        </div>

                        <div class="clear-float"></div>
                    </div>
                </div>
            </div>
        </div>

                        <div class="container po-container-section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="entry-content"></div>
                </div>
            </div>
        </div>

                        <div class="entry-content">
            <div class="section-background-light section-padding">
                <div class="container">
                    <div class="row">
                        <div class="po-column col-sm-3 col-sm-offset-0"
                             data-animation="fade-in" data-delay="0">
                            <div class="po-count hover-ani">
                                <div class="po-column count-icon col-sm-12"
                                     data-animation="pull-up" data-delay="0">
                                    <div class=
                                         "icon-boxless icon-boxless-green">
                                        <i class="fa fa-code-fork fa-2x"></i>
                                    </div>
                                </div>

                                <div class="po-number text-center"
                                     data-from="0" data-refresh-interval="10"
                                     data-speed="1000" data-to="402003"></div>

                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <div class="count-line"></div>
                                    </div>
                                </div>

                                <div class=
                                     "po-column po-column-mobile po-header-small col-sm-12"
                                     data-animation="move-up-short" data-delay=
                                "1000">
                                    <h6 class="count-text text-center">
                                        Pixels curated.<br></h6>
                                </div>
                            </div>
                        </div>

                        <div class="po-column col-sm-3 col-sm-offset-0"
                             data-animation="fade-in" data-delay="0">
                            <div class="po-count hover-ani">
                                <div class="po-column count-icon col-sm-12"
                                     data-animation="pull-up" data-delay="400">
                                    <div class=
                                         "icon-boxless icon-boxless-green">
                                        <i class="fa fa-coffee fa-2x"></i>
                                    </div>
                                </div>

                                <div class="po-number text-center"
                                     data-from="0" data-refresh-interval="10"
                                     data-speed="1400" data-to="2003"></div>

                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <div class="count-line"></div>
                                    </div>
                                </div>

                                <div class=
                                     "po-column po-column-mobile po-header-small col-sm-12"
                                     data-animation="move-up-short" data-delay=
                                "1400">
                                    <h6 class="count-text text-center">Cups
                                        of green tea consumed.<br></h6>
                                </div>
                            </div>
                        </div>

                        <div class="po-column col-sm-3 col-sm-offset-0"
                             data-animation="fade-in" data-delay="0">
                            <div class="po-count hover-ani">
                                <div class="po-column count-icon col-sm-12"
                                     data-animation="pull-up" data-delay="800">
                                    <div class=
                                         "icon-boxless icon-boxless-green">
                                        <i class="fa fa-pencil fa-2x"></i>
                                    </div>
                                </div>

                                <div class="po-number text-center"
                                     data-from="0" data-refresh-interval="10"
                                     data-speed="1800" data-to="92003"></div>

                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <div class="count-line"></div>
                                    </div>
                                </div>

                                <div class=
                                     "po-column po-column-mobile po-header-small col-sm-12"
                                     data-animation="move-up-short" data-delay=
                                "1800">
                                    <h6 class="count-text text-center">
                                        Lines of code written.<br></h6>
                                </div>
                            </div>
                        </div>

                        <div class="po-column col-sm-3 col-sm-offset-0"
                             data-animation="fade-in" data-delay="0">
                            <div class="po-count hover-ani">
                                <div class="po-column count-icon col-sm-12"
                                     data-animation="pull-up" data-delay="1200">
                                    <div class=
                                         "icon-boxless icon-boxless-green">
                                        <i class="fa fa-map-marker fa-2x"></i>
                                    </div>
                                </div>

                                <div class="po-number text-center"
                                     data-from="0" data-refresh-interval="10"
                                     data-speed="2200" data-to="643"></div>

                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <div class="count-line"></div>
                                    </div>
                                </div>

                                <div class=
                                     "po-column po-column-mobile po-header-small col-sm-12"
                                     data-animation="move-up-short" data-delay=
                                "2200">
                                    <h6 class="count-text text-center">
                                        locations covered.<br></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                         <div class="container po-container-section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="entry-content"></div>
                </div>
            </div>
        </div>

                        <div class="entry-content">
            <div class=
                 "po-section section-image section-background-image-fixed section-image-bg9">
                <div class="container">
                    <div class="row">
                        <div class="po-column po-header-top col-sm-12 no-padding"
                             data-animation="fade-in" data-delay="0">
                            <h3 class="text-center">Get in touch</h3>

                            <div class="header-line header-line-bottom"></div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="po-column col-sm-8 col-sm-offset-0"
                             data-animation="fade-in">
                            <div class="po-column po-header-top col-sm-12 no-padding"
                                 data-animation="fade-in" data-delay="0">
                                <div class="header-small-padding section-padding-nt2">
                                    <h6 class="header-small">Leave a
                                        message.</h6>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="wpcf7" id="wpcf7-f11-p654-o1">
                                <div class="screen-reader-response"></div>

                                <form action="http://nibiru.pixelobject.com/#wpcf7-f11-p654-o1" class=
                                "wpcf7-form" method="post">

                                    <p><span class=
                                             "wpcf7-form-control-wrap your-name"><input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                        name="your-name" placeholder=
                                            "Your name" size="40" type="text"
                                                                                        value=""></span></p>

                                    <p><span class=
                                             "wpcf7-form-control-wrap your-email"><input class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                         name="your-email" placeholder=
                                            "Your email" size="40" type="email"
                                                                                         value=""></span></p>

                                    <p><span class=
                                             "wpcf7-form-control-wrap your-subject"><input class="wpcf7-form-control wpcf7-text"
                                                                                           name="your-subject" placeholder=
                                            "Subject" size="40" type="text" value=
                                                                                           ""></span></p>

                                    <p><span class=
                                             "wpcf7-form-control-wrap your-message">
                                        <textarea class=
                                                  "wpcf7-form-control wpcf7-textarea"
                                                  cols="40" name="your-message"
                                                  placeholder="Enter your message" rows=
                                        "10">
                                        </textarea></span></p>

                                    <p><input class=
                                              "wpcf7-form-control wpcf7-submit" type=
                                              "submit" value="Send"></p>

                                </form>
                            </div><br>
                        </div>

                        <div class="po-column col-sm-4 col-sm-offset-0"
                             data-animation="fade-in">
                            <div class="po-column col-md-12 col-md-offset-0"
                                 data-animation="fade-in no-padding">
                                <div class="po-column po-header-top col-sm-12 no-padding"
                                     data-animation="fade-in" data-delay="0">
                                    <div class="header-small-padding no-padding">
                                        <h6 class="header-small">Our
                                            office.</h6>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <p class="textblock textblock-left">
                                </p>

                                <p>Ebor Street, Shoreditch<br>
                                    London E1 6AW<br>
                                    United Kingdom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                        <div class="container po-container-section">
            <div class="row">
                <div class="col-sm-12">
                    <div class="entry-content">
                        <div class="clearfix"></div>
                    </div><!-- .entry-content -->

                    <div class="page-comments"></div>
                </div>
            </div>
        </div>
                    </article><!-- #post-## -->
                <?php else: ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-header po-page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="entry-title"><?php the_title();?></h3>
                        </div>

                        <div class="col-sm-6 hidden-xs">
                            <div class="text-right crumb-text">
                                <?php the_breadcrumb(); ?>
                                <div id="crumbs">
                                    <a href=
                                       "#">Home</a>
                                    <span class="delim">›</span> <a href=
                                                                    "#">Pages</a>
                                    <span class="delim">›</span> <span class=
                                                                       "current">Full width</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .entry-header -->

                        <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="entry-content"></div>
                    </div>
                </div>
            </div>

                        <div class="entry-content">
                <div class="section-background-white section-padding">
                    <div class="container">
                        <div class="row">
                        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                            <div class="po-column col-sm-12 col-sm-offset-0"
                                 data-animation="fade-in">
                                <div class="po-column col-sm-12 no-padding" data-animation=
                                "fade-in" data-delay="0">
                                    <div class="grid cs-style-2 media-container">
                                        <a class="view" href=
                                        "<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>"
                                           rel="">

                                            <figure>
                                                <img alt="" class="img-responsive" src=
                                                "<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>">
                                                <figcaption>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                        <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container po-container-section">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="entry-content">
                            <div class="clearfix"></div>
                            <?php the_content(); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                        </div><!-- .entry-content -->

                        <div class="page-comments"></div>
                    </div>
                </div>
            </div>
        </article><!-- #post-## -->

                <?php endif ?>
			<?php endwhile; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
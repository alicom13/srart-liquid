<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ (branding.data.company is defined) ? branding.data.company : Liqu.id }} - {% block title %} {% endblock %}</title>
        <!-- faticon -->
        {% if branding.is_custom_fav == 0 %}<link rel="icon" href="{{ 'img/favicon.ico'|asset_url }}" type="image/x-icon">{% else %}<link rel="icon" href="{{ branding.url_fav }}" type="image/x-icon">{% endif %}

        <!-- jquery -->
        <script type="text/javascript" src="{{ 'js/jquery-2.1.0.min.js'|asset_url }}"></script>

        <!-- bootstrap -->
        <script type="text/javascript"  src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!-- fontawesome -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="{{ 'font-awesome/css/font-awesome.min.css'|asset_url }}">-->

        <!-- owl carosel -->
        <link rel="stylesheet" href="{{ 'owl-carousel/owl.carousel.css'|asset_url }}">
        <link rel="stylesheet" href="{{ 'owl-carousel/owl.theme.css'|asset_url }}">
        <script type="text/javascript"  src="{{ 'owl-carousel/owl.carousel.min.js'|asset_url }}"></script>

        <!-- validate jquery -->
        <script  type="text/javascript"  src="{{ 'js/jquery.validate.min.js'|asset_url }}"></script>

        <!-- dataTable -->
        <script  type="text/javascript"  src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">

        <!-- rereyossi area -->
        <link  rel="stylesheet" href="{{ 'flaticon/flaticon.css'|asset_url }}">

        <!-- rereyossi area -->
        <!--<link rel="stylesheet" href="{{ 'css/rereyossi-style.css'|asset_url }}">-->
        <link rel="stylesheet" href="{{ 'css/style.css'|asset_url }}">

        {% block head %}
        {% endblock %}
    </head>
    <body>
        <div class="main">
            <header class="header-primary">
                <div class="container">
                    <div class="top-logo logo">
                        <a href="/">
                            {% if branding.is_custom_logo == 0 %}<img src="{{ 'img/logo.png'|asset_url }}" alt="">{% else %} <img src="{{ branding.url }}" alt="">{% endif %}
                        </a>
                    </div>
                    <nav class="menu-member">
                        <ul class="nav-horizontal">
                            <li>
                                <a href="{{ cust_url }}" id="cust_url"><i class="fa fa-user">&nbsp;</i> {% if loginStatus.auth == '1' %} Customer Dashboard {% else %} Customer Login / Sign Up {% endif %} </a>

                                <a href="/logout" class="{% if loginStatus.auth != '1' %} hide {% endif %} " id="signout-btn" ><i class="fa fa-remove">&nbsp;</i>Sign Out</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <nav class="navbar navbar-primary">
                    <div class="container">
                        <div class="navbar-logo">

                        </div>

                        <div class="navbar-menu">
                            <a id="nav-toggle" class="navbar-link">
                                <span class="icon-bar"></span>
                            </a>
                        </div>


                        <div class="menu">
                            <ul class="navbar-list">
                                <li><a href="/">home</a></li>
                                <li><a href="/buy-domain">Buy Domain</a></li>
                                <li><a href="/transfer-domain">Transfer Domain</a></li>
                                <!-- <li><a href="/about-us">About Us</a></li> -->
                                <li><a href="/why-us">Why Us</a></li>
                                <li><a href="/features">Features</a></li>
                                <li><a href="/pricing">Pricing</a></li>
                                <!-- <li><a href="/contact">Contact</a></li> -->
                                <!-- <li><a href="/whois">Whois</a></li> -->
                                <li><a href="#">reseller</a>
                                    <ul>
                                        <li><a href="/reseller-program">Reseller Program</a></li>
                                        <li><a href="/reseller-pricing">Reseller Pricing</a></li>
                                        <li><a href="/manage/">Reseller Login/Sign Up</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>


                    </div>
                </nav>
            </header>
            {% block content %} {% endblock %}
            <div class="bottom-one">
                <div class="container">

                    <div class="about">
                        <div class="header">
                            <a href="/">
                            {% if branding.is_custom_logo == 0 %}<img src="{{ 'img/logo.png'|asset_url }}" alt="">{% else %}
                            <img src="{{ branding.url }}" alt="">{% endif %}
                            </a>
                        </div>

                        {% include 'templates/footer-about-us.html' %}
                        <!-- <div class="content">
                            YourBrand was founded in 2020. YourBrand is a domain name registrar operates under CV. YourBrand, a leading company in Indonesia that has been involving in web hosting business since 2020.
                        </div> -->

                        <div class="footer">
                            <a href="/about-us" class="btn-ghost">read more</a>
                        </div>
                        <br>
                        <div class="mt20">
                            <a
                                href="https://www.icann.org/resources/pages/benefits-2013-09-16-en"
                                target="_blank"
                                rel="noreferrer"
                                class="btn-ghost"
                                style="
                                    display: block;
                                    width: fit-content;
                                    width: -moz-fit-content;
                                "
                            >
                                Registrant's Benefits and Responsibilities
                            </a>
                        </div>
                    </div>


                    <div class="connect">
                        <div class="address">
                            <span class="hp item"><span class="value">{{ branding.data.phone }}</span><i class="fa fa-phone"></i></span>
                            <span class="location item">
                                <span class="value">{{ branding.data.address }} {{ branding.data.city }}, {{ branding.data.zip }}
                                </span>
                                <i class="fa fa-map-marker"></i>
                            </span>

                        </div>
                        <div class="sosmed">

                            <ul class="sosmed-list">
                                {% if branding.socmed_facebook != '' %}
                                    <li><a class="fb item" href="{{ branding.socmed_facebook }}" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
                                {% else %}
                                    <!-- <li><a class="fb item" href="http://www.facebook.com/pages/Liquid/1526256434288583" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li> -->
                                {% endif %}
                                {% if branding.socmed_twitter != '' %}
                                    <li><a class="tw item" href="{{ branding.socmed_twitter }}" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
                                {% else %}
                                    <!-- <li><a class="tw item" href="http://www.twitter.com/liquidregistrar" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li> -->
                                {% endif %}
                                {% if branding.socmed_instagram != '' %}
                                    <li><a class="ins item" href="{{ branding.socmed_instagram }}" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
                                {% else %}
                                {% endif %}
                                {% if branding.socmed_youtube != '' %}
                                    <li><a class="yt item" href="{{ branding.socmed_youtube }}" target="_blank"><i class="fa fa-youtube fa-2x"></i></a></li>
                                {% else %}
                                    <!-- <li><a class="yt item" href="http://www.youtube.com/channel/UCYkyNUetBY4uSDwEOMbv5AA" target="_blank"><i class="fa fa-youtube fa-2x"></i></a></li> -->
                                {% endif %}
                                {% if branding.socmed_linkedin != '' %}
                                    <li><a class="link item" href="{{ branding.socmed_linkedin }}" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
                                {% else %}
                                    <!-- <li><a class="link item" href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li> -->
                                {% endif %}
                                {% if branding.socmed_gplus != '' %}
                                    <li><a class="gp item" href="{{ branding.socmed_gplus }}" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a></li>
                                {% else %}
                                    <!-- <li><a class="gp item" href="http://plus.google.com/u/0/116814834936125868951" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a></li> -->
                                {% endif %}
                                {% if branding.socmed_pinterest != '' %}
                                    <li><a class="pin item" href="{{ branding.socmed_pinterest }}" target="_blank"><i class="fa fa-pinterest fa-2x"></i></a></li>
                                {% else %}
                                    <!-- <li><a class="pin item" href="http://www.pinterest.com/liquidsoftware/" target="_blank"><i class="fa fa-pinterest fa-2x"></i></a></li> -->
                                {% endif %}
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-primary">
                <div class="container">
                    <span class="brand">Copyright © <a href="/">{{ (branding.data.company is defined) ? branding.data.company : 'Liqu.id'}}</a>. All rights reserved. | <a href="/about-us">About Us</a> | <a href="/contact">Contact</a> | <a href="/whois">Whois</a></span>
                </div>
            </div>
        </div>

        <script src="{{ 'js/jquery.hoverdelay.js'|asset_url }}"></script>
        <script src="{{ 'js/rereyossi-js.js'|asset_url }}"></script>
        <script src="{{ 'js/rereyossi-master.js'|asset_url }}"></script>
        {% block footer %}
        {% endblock %}
    </body>
</html>


<?php $__env->startSection('title'); ?>
contact
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style type="text/css">
    .features-icon
    {
        color: #3685f1;
        font-size: 45px;
    }
    .section-space--ptb_120
    {
        padding-top: 20px;
        padding-bottom: 15px;
    }
</style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
  <div class="contact-us-area appointment-contact-bg mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-title section-space--mb_50">
                                <h3 class="mb-20">Need a hand?</h3>
                                <h5 class="heading"><span class="text-color-primary">contact us</span> VistaDerm. </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-form-wrap">
                                <form id="contact-form" action="#" method="post">
                        <div class="contact-form">
                            <div class="contact-input">
                                <div class="contact-inner">
                                    <input name="con_name" type="text" placeholder="Name *">
                                </div>
                                <div class="contact-inner">
                                    <input name="con_email" type="email" placeholder="Email *">
                                </div>
                            </div>
                            <div class="contact-inner">
                                <input name="con_subject" type="text" placeholder="Mobile *">
                            </div>
                            <div class="contact-inner contact-message">
                                <textarea name="con_message" placeholder="Please Message."></textarea>
                            </div>
                            <div class="submit-btn mt-20">
                                <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </form>
                            </div>
                        </div>
                        <div class="col-lg-5 ml-auto ">
                            <div class="contact-info-three text-left">
                                  <div id="googleMap-1" class="embed-responsive-item googleMap-1" data-lat="40.730610" data-Long="-73.935242"></div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div><br>


<div class="contact-us-section-wrappaer infotechno-contact-us-bg section-space--ptb_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="grid-item animate">
                    <div class="ht-box-icon style-03">
                        <div class="icon-box-wrap">
                            <div class="text-center">
                                <i class="fa fa-phone features-icon"></i><br><br>
                                <h5 class="heading">+91 98585 98484</h5>
                                <h7 class="heading">10 to 2, 4 to 8</h7>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="grid-item animate">
                    <div class="ht-box-icon style-03">
                        <div class="icon-box-wrap">
                            <div class="text-center">
                                <i class="fa fa-envelope features-icon"></i><br><br>
                                <h5 class="heading">info@vistaderm.in</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="grid-item animate">
                    <div class="ht-box-icon style-03">
                        <div class="icon-box-wrap">
                            <div class="text-center">
                                <i class="fa fa-map-marker features-icon"></i><br><br>
                                <h6 class="heading">B/407 – Imperial Heights, Opp. Big Bazzar, 150ft Ring Road, Rajkot. (Guj., India)</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD79MY72taVRlZVX2DU6L5PXOh3ezUUKMc&amp;callback=initMap"></script>
   <script>
        /*--
        Google Map
        -----------------------------------*/

        // Google Map For Single Property Map
        $('.googleMap-1').each(function() {
            if ($(this).length) {
                var $this = $(this);
                var $lat = $this.data('lat');
                var $long = $this.data('long');

                function initialize() {
                    var mapOptions = {
                        zoom: 14,
                        scrollwheel: false,
                        center: new google.maps.LatLng($lat, $long),
                        styles: [{
                                "featureType": "water",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#F1F1F1"
                                }]
                            },
                            {
                                "featureType": "transit",
                                "stylers": [{
                                        "color": "#F1F1F1"
                                    },
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#fff"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#fff"
                                }]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#F1F1F1"
                                    },
                                    {
                                        "weight": 1.8
                                    }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                    "color": "#ECECEC"
                                }]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#FF5151"
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#fff"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#F1F1F1"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#ffffff"
                                }]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#F9F9F9"
                                    }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#B7B7B7"
                                }]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#8b8b8b"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.icon",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                    "color": "#d6d6d6"
                                }]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.icon",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {},
                            {
                                "featureType": "poi",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#EBEBEB"
                                }]
                            }
                        ]
                    };
                    var map = new google.maps.Map(document.getElementById('googleMap-1'), mapOptions);
                    var marker = new google.maps.Marker({
                        position: map.getCenter(),
                        icon: 'assets/images/icons/map-marker.png',
                        map: map,
                        overlay: {
                            values: [{
                                address: "40.7590615,-73.969231",
                                position: 'center',
                                options: {
                                    content: '<div class="gmap-info-wrapper icon"><div class="gmap-marker-icon"><img src="https://aeroland.thememove.com/main/wp-content/themes/aeroland/assets/images/maps/map-marker.png" /></div><div class="gmap-info-template-wrap"><div class="gmap-info-template"><div class="gmap-info-content"><div class="info-image"><img src="https://aeroland.thememove.com/main/wp-content/uploads/sites/2/2019/01/map-image.png" alt="map-image" /></div><div class="info-main"><h5 class="gmap-marker-title">Aeroland Studio</h5><div class="gmap-marker-content"><div>601 Lexinton Avenue, NY</div><div>+44 20 7794 0190</div><a href="mailto:info@example.com">info@example.com</a></div></div></div></div></div></div>',
                                }
                            }, ],
                            events: {
                                mouseover: function(overlay, event, context) {
                                    var target = overlay.getDOMElement();

                                    target.style.zIndex = 2;

                                    var info = $(target).find('.gmap-info-wrapper');
                                    info.find('.gmap-info-template').show();
                                },
                                mouseout: function(overlay) {
                                    var target = overlay.getDOMElement();

                                    target.style.zIndex = 1;

                                    var info = $(target).find('.gmap-info-wrapper');
                                    info.find('.gmap-info-template').hide();
                                }
                            }
                        },


                    });






                };

                google.maps.event.addDomListener(window, 'load', initialize);
            }
        });

        // Google Map For Single Property Map
        $('.googleMap-2').each(function() {
            if ($(this).length) {
                var $this = $(this);
                var $lat = $this.data('lat');
                var $long = $this.data('long');

                function initialize() {
                    var mapOptions = {
                        zoom: 14,
                        scrollwheel: false,
                        center: new google.maps.LatLng($lat, $long),
                        styles: [{
                                "featureType": "water",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#333"
                                }]
                            },
                            {
                                "featureType": "transit",
                                "stylers": [{
                                        "color": "#333"
                                    },
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#fff"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#fff"
                                }]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#000"
                                    },
                                    {
                                        "weight": 1.8
                                    }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                    "color": "#ECECEC"
                                }]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#FF5151"
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#fff"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#F1F1F1"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#ffffff"
                                }]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#F9F9F9"
                                    }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#6666"
                                }]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#8b8b8b"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.icon",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                    "color": "#333"
                                }]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.icon",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {},
                            {
                                "featureType": "poi",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#3333"
                                }]
                            }
                        ]
                    };
                    var map = new google.maps.Map(document.getElementById('googleMap-2'), mapOptions);
                    var marker = new google.maps.Marker({
                        position: map.getCenter(),
                        icon: 'assets/images/icons/map-marker-02.png',
                        map: map,
                        animation: google.maps.Animation.BOUNCE
                    });

                }
                google.maps.event.addDomListener(window, 'load', initialize);
            }
        });

        // Google Map For Single Property Map
        $('.googleMap-3').each(function() {
            if ($(this).length) {
                var $this = $(this);
                var $lat = $this.data('lat');
                var $long = $this.data('long');

                function initialize() {
                    var mapOptions = {
                        zoom: 14,
                        scrollwheel: false,
                        center: new google.maps.LatLng($lat, $long),
                        styles: [{
                                "featureType": "water",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#F1F1F1"
                                }]
                            },
                            {
                                "featureType": "transit",
                                "stylers": [{
                                        "color": "#F1F1F1"
                                    },
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#fff"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#fff"
                                }]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#F1F1F1"
                                    },
                                    {
                                        "weight": 1.8
                                    }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                    "color": "#ECECEC"
                                }]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#FF5151"
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#fff"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#F1F1F1"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#ffffff"
                                }]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#F9F9F9"
                                    }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#B7B7B7"
                                }]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#8b8b8b"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.icon",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                    "color": "#d6d6d6"
                                }]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.icon",
                                "stylers": [{
                                    "visibility": "off"
                                }]
                            },
                            {},
                            {
                                "featureType": "poi",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#EBEBEB"
                                }]
                            }
                        ]
                    };
                    var map = new google.maps.Map(document.getElementById('googleMap-3'), mapOptions);
                    var marker = new google.maps.Marker({
                        position: map.getCenter(),
                        icon: 'assets/images/icons/map-marker-02.png',
                        map: map,
                        animation: google.maps.Animation.BOUNCE
                    });

                }
                google.maps.event.addDomListener(window, 'load', initialize);
            }
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctors\vistadermsolutions\resources\views/contact.blade.php ENDPATH**/ ?>
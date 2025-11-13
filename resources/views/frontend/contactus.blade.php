@extends('frontend.layout.websitemain')
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down"
    data-aos-delay="100">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<section class="testimonial-area2 overflow-hidden space" id="testi-sec">
    <div class="container">
        <div class="title-area text-center"><span class="sub-title">Our Branches</span>
            <h2 class="sec-title">Making a presence in every part of the world!</h2>
        </div>
        <style>
            svg {
                display: block;
                width: 100%;
                height: auto;
                background: #000;
            }

            .country {
                cursor: pointer;
                transition: opacity 0.3s;
            }

            .country:hover {
                opacity: 0.8 !important;
            }

            .tooltip {
                position: absolute;
                text-align: center;
                background: #ffffff;
                margin: 0px;
                padding: 12px;
                border: 1px solid #ddd;
                border-radius: 4px;
                opacity: 0;
                pointer-events: none;
                font-family: Arial, sans-serif;
                font-size: 14px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                max-width: 200px;
                z-index: 10;
            }

            .tooltip img {
                vertical-align: middle;
                margin-right: 8px;
                border: 1px solid #ccc;
                border-radius: 2px;
            }

            #map-container {
                position: relative;
                width: 100%;
            }

            .zoom-controls {
                position: absolute;
                top: 20px;
                right: 20px;
                z-index: 5;
                display: flex;
                gap: 8px;
            }

            .zoom-btn {
                width: 40px;
                height: 40px;
                padding: 0;
                border: 1px solid #ddd;
                background: #fff;
                border-radius: 4px;
                cursor: pointer;
                font-size: 18px;
                font-weight: bold;
                color: #333;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.2s ease;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .zoom-btn:hover {
                background: #f0f0f0;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            }

            .zoom-btn:active {
                transform: scale(0.95);
            }

            .reset-btn {
                width: 40px;
                height: 40px;
                padding: 0;
                border: 1px solid #ddd;
                background: #fff;
                border-radius: 4px;
                cursor: pointer;
                font-size: 12px;
                font-weight: bold;
                color: #333;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.2s ease;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .reset-btn:hover {
                background: #f0f0f0;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            }
        </style>

        <!-- Load D3 FIRST -->
        <script src="https://d3js.org/d3.v3.min.js"></script>
        <script src="https://d3js.org/topojson.v1.min.js"></script>

        <div id="map-container">
     
            <svg class="chart"></svg>
        </div>

        <script>
            var dataurl = "https://gist.githubusercontent.com/d3noob/5189284/raw/598d1ebe0c251cd506c8395c60ab1d08520922a7/world-110m2.json";

            var width = 1200,
                height = 600;

            var highlightedCountries = [
                "India", "Nigeria", "Ghana", "Guinea", "Sierra Leone",
                "Liberia", "Burkina Faso", "Mali", "Senegal", "Gambia"
            ];

            var countryIdMap = {
                356: {
                    name: "India",
                    iso: "IN",
                    city: "Ajmer",
                    phone: "+91 784 990 9355"
                },
                566: {
                    name: "Nigeria",
                    iso: "NG",
                    city: "Lagos",
                    phone: "+234 904 623 4551"
                },
                288: {
                    name: "Ghana",
                    iso: "GH",
                    city: "Accra",
                    phone: "+233 53 110 0930"
                },
                324: {
                    name: "Guinea",
                    iso: "GN",
                    city: "Conakry",
                    phone: ""
                },
                694: {
                    name: "Sierra Leone",
                    iso: "SL",
                    city: "Freetown",
                    phone: "+23278676849"
                },
                430: {
                    name: "Liberia",
                    iso: "LR",
                    city: "Monrovia",
                    phone: "+231 77 508 1433"
                },
                854: {
                    name: "Burkina Faso",
                    iso: "BF",
                    city: "Ouagadougou",
                    phone: "+226 05054651"
                },
                466: {
                    name: "Mali",
                    iso: "ML",
                    city: "Bamako",
                    phone: "+232 8021 2175"
                },
                686: {
                    name: "Senegal",
                    iso: "SN",
                    city: "Dakar",
                    phone: "+232 8021 2178"
                },
                270: {
                    name: "Gambia",
                    iso: "GM",
                    city: "Banjul",
                    phone: "+232 8021 2177"
                }
            };

            var projection = d3.geo.mercator()
                .scale(180)
                .translate([width / 2, height / 1.5]);

            var svg = d3.select(".chart")
                .attr("viewBox", "0 0 " + width + " " + height)
                .attr("preserveAspectRatio", "xMidYMid meet");

            // Create main group for zoomable content
            var g = svg.append("g");

            // Ocean background
            g.append("rect")
                .style("fill", "#f5f5f5")
                .attr("width", width)
                .attr("height", height);

            var path = d3.geo.path()
                .projection(projection);

            var tooltip = d3.select("body").append("div")
                .attr("class", "tooltip");

            // Store current zoom state
            var currentScale = 1;
            var currentTranslate = [0, 0];

            // Function to get flag URL
            function getFlagUrl(isoCode) {
                return "https://flagcdn.com/32x24/" + isoCode.toLowerCase() + ".png";
            }

            // Load and display the World
            d3.json(dataurl, function(error, topology) {
                if (error) throw error;

                g.selectAll(".country")
                    .data(topojson.feature(topology, topology.objects.countries).features)
                    .enter().append("path")
                    .attr("class", function(d) {
                        return "country c" + d.id;
                    })
                    .attr("d", path)
                    .style("fill", "#474B54")
                    .style("stroke", "#ffffff")
                    .style("stroke-width", "1px")
                    .on("mouseover", function(d) {
                        var countryData = countryIdMap[d.id];
                        if (countryData) {
                            var countryName = countryData.name;
                            var isoCode = countryData.iso;
                            var flagUrl = getFlagUrl(isoCode);
                            var city = countryData.city || "N/A";
                            var phone = countryData.phone || "N/A";

                            d3.select(this).style("opacity", 0.8);
                            tooltip.style("left", (d3.event.pageX + 15) + "px")
                                .style("top", (d3.event.pageY - 30) + "px")
                                .style("opacity", 1)
                                .html("<img src='" + flagUrl + "' width='32' height='24' /><br/><strong>" + countryName + "</strong><br/><small>" + city + "</small><br/><small style='color: #666;'>" + phone + "</small>");
                        }
                    })
                    .on("mouseout", function() {
                        d3.select(this).style("opacity", 1);
                        tooltip.style("opacity", 0);
                    });

                // Add flag images
                var flags = g.selectAll(".flag-image")
                    .data(topojson.feature(topology, topology.objects.countries).features.filter(function(d) {
                        var countryData = countryIdMap[d.id];
                        return countryData && highlightedCountries.indexOf(countryData.name) !== -1;
                    }))
                    .enter()
                    .append("image")
                    .attr("class", "flag-image")
                    .attr("xlink:href", function(d) {
                        var countryData = countryIdMap[d.id];
                        return getFlagUrl(countryData.iso);
                    })
                    .attr("width", 28)
                    .attr("height", 21)
                    .attr("x", function(d) {
                        var centroid = path.centroid(d);
                        return centroid[0] - 14;
                    })
                    .attr("y", function(d) {
                        var centroid = path.centroid(d);
                        return centroid[1] - 10.5;
                    })
                    .style("pointer-events", "none")
                    .style("filter", "drop-shadow(0 1px 2px rgba(0,0,0,0.3))");

                // Zoom behavior setup - AFTER data is loaded
                var zoom = d3.behavior.zoom()
                    .scaleExtent([1, 8])
                    .on("zoom", function() {
                        g.attr("transform", "translate(" + d3.event.translate + ")scale(" + d3.event.scale + ")");

                        // Update projection scale and translate
                        projection.scale(180 * d3.event.scale)
                            .translate([width / 2 * d3.event.scale + d3.event.translate[0],
                                height / 1.5 * d3.event.scale + d3.event.translate[1]
                            ]);

                        // Redraw paths
                        g.selectAll(".country").attr("d", path);
                        g.selectAll(".flag-image")
                            .attr("x", function(d) {
                                var centroid = path.centroid(d);
                                return centroid[0] - 14;
                            })
                            .attr("y", function(d) {
                                var centroid = path.centroid(d);
                                return centroid[1] - 10.5;
                            });
                    });

                svg.call(zoom);

                // Zoom in function
                d3.select("#zoom-in").on("click", function() {
                    var newScale = currentScale * 1.5;
                    var newTranslate = [
                        currentTranslate[0] - (width / 2) * (1.5 - 1),
                        currentTranslate[1] - (height / 2) * (1.5 - 1)
                    ];
                    updateZoom(newScale, newTranslate);
                });

                // Zoom out function
                d3.select("#zoom-out").on("click", function() {
                    var newScale = Math.max(1, currentScale / 1.5);
                    var newTranslate = [
                        currentTranslate[0] + (width / 2) * (1 - 1 / 1.5),
                        currentTranslate[1] + (height / 2) * (1 - 1 / 1.5)
                    ];
                    updateZoom(newScale, newTranslate);
                });

                // Reset zoom function
                d3.select("#reset-zoom").on("click", function() {
                    updateZoom(1, [0, 0]);
                });

                // Update zoom with animation
                function updateZoom(newScale, newTranslate) {
                    currentScale = newScale;
                    currentTranslate = newTranslate;

                    zoom.scale(newScale).translate(newTranslate);

                    svg.transition().duration(500).call(zoom.event);
                }

                // Responsive resize function
                function resize() {
                    var container = d3.select("#map-container").node();
                    var containerWidth = container.getBoundingClientRect().width;
                    var scale = containerWidth / width;

                    flags.attr("width", 28 * scale)
                        .attr("height", 21 * scale);
                }

                d3.select(window).on("resize", resize);
                resize();
            });
        </script>


        {{-- <div class="row" >
                <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="300" >
                    <div class=" tour-box th-ani gsap-cursor">
                        <div class="tour-box_img global-img">
                            <img src="{{ asset('assets/img/flag/sierra-leone-waving.webp') }}" alt="image">
    </div>
    <div class="tour-content">
        <h3 class="box-title">
            <a href="#">Freetown, Sierra Leone</a>
        </h3>
        <p>+23278676849</p>
    </div>
    </div>
    </div>
    <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="400">
        <div class=" tour-box th-ani gsap-cursor">
            <div class="tour-box_img global-img">
                <img src="{{ asset('assets/img/flag/Liberia.webp') }}" alt="image">
            </div>
            <div class="tour-content">
                <h3 class="box-title">
                    <a href="#">Monrovia, Liberia</a>
                </h3>
                <p>+231 77 508 1433</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="500">
        <div class=" tour-box th-ani gsap-cursor">
            <div class="tour-box_img global-img">
                <img src="{{ asset('assets/img/flag/Nigeria.webp') }}" alt="image">
            </div>
            <div class="tour-content">
                <h3 class="box-title">
                    <a href="#">Lagos, Nigeria</a>
                </h3>
                <p>+234 904 623 4551</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="600">
        <div class=" tour-box th-ani gsap-cursor">
            <div class="tour-box_img global-img">
                <img src="{{ asset('assets/img/flag/Burkina Faso.webp') }}" alt="image">
            </div>
            <div class="tour-content">
                <h3 class="box-title">
                    <a href="#">Ouagadougou, Burkina Faso</a>
                </h3>
                <p>+226 05054651</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="700">
        <div class=" tour-box th-ani gsap-cursor">
            <div class="tour-box_img global-img">
                <img src="{{ asset('assets/img/flag/Nigeria.webp') }}" alt="image">
            </div>
            <div class="tour-content">
                <h3 class="box-title">
                    <a href="#">Abuja, Nigeria</a>
                </h3>
                <p>+234 816 958 1101</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="800">
        <div class=" tour-box th-ani gsap-cursor">
            <div class="tour-box_img global-img">
                <img src="{{ asset('assets/img/flag/Nigeria.webp') }}" alt="image">
            </div>
            <div class="tour-content">
                <h3 class="box-title">
                    <a href="#">Port Harcourt, Nigeria</a>
                </h3>
                <p>+234 810 994 0319</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="900">
        <div class=" tour-box th-ani gsap-cursor">
            <div class="tour-box_img global-img">
                <img src="{{ asset('assets/img/flag/Mali.webp') }}" alt="image">
            </div>
            <div class="tour-content">
                <h3 class="box-title">
                    <a href="#">Bamako, Mali</a>
                </h3>
                <p>+232 8021 2175</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="1000">
        <div class=" tour-box th-ani gsap-cursor">
            <div class="tour-box_img global-img">
                <img src="{{ asset('assets/img/flag/Burkina Faso.webp') }}" alt="image">
            </div>
            <div class="tour-content">
                <h3 class="box-title">
                    <a href="#">Bobo-Dioulasso, Burkina Faso</a>
                </h3>
                <p>+226 0505 4651</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="1100">
        <div class=" tour-box th-ani gsap-cursor">
            <div class="tour-box_img global-img">
                <img src="{{ asset('assets/img/flag/India.webp') }}" alt="image">
            </div>
            <div class="tour-content">
                <h3 class="box-title">
                    <a href="#">Ajmer, India</a>
                </h3>
                <p>+91 784 990 9355</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="1200">
        <div class=" tour-box th-ani gsap-cursor">
            <div class="tour-box_img global-img">
                <img src="{{ asset('assets/img/flag/Senegal.webp') }}" alt="image">
            </div>
            <div class="tour-content">
                <h3 class="box-title">
                    <a href="#">Dakar, Senegal</a>
                </h3>
                <p>+232 8021 2178</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="1300">
        <div class=" tour-box th-ani gsap-cursor">
            <div class="tour-box_img global-img">
                <img src="{{ asset('assets/img/flag/Ghana.webp') }}" alt="image">
            </div>
            <div class="tour-content">
                <h3 class="box-title">
                    <a href="#">Accra, Ghana</a>
                </h3>
                <p>+233 53 110 0930</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="1400">
        <div class=" tour-box th-ani gsap-cursor">
            <div class="tour-box_img global-img">
                <img src="{{ asset('assets/img/flag/Gambia.webp') }}" alt="image">
            </div>
            <div class="tour-content">
                <h3 class="box-title">
                    <a href="#">Banjul, Gambia</a>
                </h3>
                <p>+232 8021 2177</p>
            </div>
        </div>
    </div>

    </div>--}}
    <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="-9%"><img class="gmovingX"
            src="assets/img/shape/shape_7.png" alt="shape"></div>
    <div class="shape-mockup spin d-none d-xl-block" data-bottom="30%" data-right="-10%"><img
            src="assets/img/shape/shape_2_5.png" alt="shape"></div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="0%" data-left="-5%"><img
            src="assets/img/shape/shape_2_2.png" alt="shape"></div>
    </div>
</section>

<div class="space">
    <div class="container">
        <div class="title-area text-center" data-aos="fade-up" data-aos-delay="200">
            <span class="sub-title">Get In Touch</span>
            <h2 class="sec-title">Our Contact Information</h2>
        </div>
        <div class="row gy-4  justify-content-center">
            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="about-contact-grid style2">
                    <div class="about-contact-icon"><img src="{{ asset('assets/img/icon/location-dot2.svg') }}"
                            alt="location"></div>
                    <div class="about-contact-details">
                        <h6 class="">Our Address</h6>
                        <p class="about-contact-details-text"> 51A Wilkinson road, </p>
                        <p class="about-contact-details-text">Freetown, Sierra Leone</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="about-contact-grid">
                    <div class="about-contact-icon"><img src="{{ asset('assets/img/icon/call.svg') }}" alt="phone">
                    </div>
                    <div class="about-contact-details">
                        <h6 class="">Phone Number</h6>
                        <p class="about-contact-details-text"><a href="tel:+23278676849">+23278676849</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="500">
                <div class="about-contact-grid">
                    <div class="about-contact-icon"><img src="{{ asset('assets/img/icon/mail.svg') }}" alt="email">
                    </div>
                    <div class="about-contact-details">
                        <h6 class="">Email Address</h6>
                        <p class="about-contact-details-text">
                            <a href="mailto:salesfna@lamairatravel.com">salesfna@lamairatravel.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-extra2-top space-extra2-bottom" data-bg-src="{{ asset('assets/img/bg/video_bg_1.jpg') }}">
    <div class="container">
        <div class="row py-5 my-lg-5 row-gap-5 flex-row-reverse justify-content-center align-items-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.8100802629897!2d74.60030907596033!3d26.461850179319846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be7033dde00eb%3A0xab03ba16aa54326e!2sCinderella%20Travel%20%26%20Tours!5e0!3m2!1sen!2sin!4v1755323416129!5m2!1sen!2sin"
                    width="600" height="650" style="border-radius:20px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6 ">
                <div data-aos="fade-right" data-aos-delay="700">
                    <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                        class="contact-form style2 ajax-contact">
                        <h3 class="sec-title mb-30 text-capitalize">Book a tour</h3>
                        <div class="row">
                            <div class="col-12 form-group" data-aos="fade-up" data-aos-delay="800">
                                <input type="text" class="form-control" name="name" id="name3"
                                    placeholder="First Name">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="col-12 form-group" data-aos="fade-up" data-aos-delay="900">
                                <input type="email" class="form-control" name="email3" id="email3"
                                    placeholder="Your Mail">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="form-group col-12" data-aos="fade-up" data-aos-delay="1000">
                                <select name="subject" id="subject" class="form-select nice-select">
                                    <option value="Select Tour Type" selected="selected" disabled="disabled">Select Tour
                                        Type</option>
                                    <option value="Africa Adventure">Africa Adventure</option>
                                    <option value="Africa Wild">Africa Wild</option>
                                    <option value="Asia">Asia</option>
                                    <option value="Scandinavia">Scandinavia</option>
                                    <option value="Western Europe">Western Europe</option>
                                </select>
                            </div>
                            <div class="form-group col-12" data-aos="fade-up" data-aos-delay="1100">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                    placeholder="Your Message"></textarea>
                                <i class="fas fa-comment"></i>
                            </div>
                            <div class="form-btn col-12 mt-24" data-aos="fade-up" data-aos-delay="1200">
                                <button type="submit" class="th-btn style3">Send message <img
                                        src="{{ asset('assets/img/icon/plane.svg') }}" alt="plane"></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
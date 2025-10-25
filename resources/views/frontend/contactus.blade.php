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
            :root {
                --color-teal-500: rgba(33, 128, 141, 1);
                --color-teal-600: rgba(29, 116, 128, 1);
                --color-cream-50: rgba(252, 252, 249, 1);
                --color-cream-100: rgba(255, 255, 253, 1);
                --color-slate-900: rgba(19, 52, 59, 1);
                --color-slate-500: rgba(98, 108, 113, 1);
                --color-brown-600-rgb: 94, 82, 64;
                --font-family-base: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            }

           

            #resortMap {
                max-width: 100%;
                width: 100%;
                margin: 0 auto;
                background: white;
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                position: relative;
                overflow: hidden;
                touch-action: pan-y pinch-zoom;
            }

            .zoom-controls {
                position: absolute;
                top: 20px;
                right: 20px;
                display: flex;
                flex-direction: column;
                gap: 8px;
                z-index: 10;
            }

            .zoom-btn {
                width: 40px;
                height: 40px;
                background: white;
                border: 2px solid var(--color-teal-500);
                border-radius: 8px;
                color: var(--color-teal-500);
                font-size: 20px;
                font-weight: bold;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                transition: all 0.2s;
            }

            .zoom-btn:hover {
                background: var(--color-teal-500);
                color: white;
            }

            .zoom-btn:active {
                transform: scale(0.95);
            }

            #resortMap svg {
                width: 100%;
                height: auto;
                display: block;
                cursor: grab;
                touch-action: none;
            }

            #resortMap svg.grabbing {
                cursor: grabbing;
            }

            /* Geo indicator pin styles */
            #Resorts .geo-ind {
                fill: var(--color-teal-500);
            }

            /* Resort location link styles */
            #Resorts a {
                cursor: pointer;
                outline: none;
            }

            /* Hover background box */
            #Resorts a rect {
                fill: var(--color-cream-100);
                stroke: rgba(var(--color-brown-600-rgb), 0.2);
                stroke-width: 1;
                rx: 10;
                opacity: 0;
                filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0));
            }

            #Resorts a:hover rect {
                opacity: 1;
                fill: white;
                stroke: var(--color-teal-500);
                stroke-width: 2;
                filter: drop-shadow(0 4px 12px rgba(33, 128, 141, 0.2));
            }

            /* Pin hover effect */
            #Resorts a:hover .geo-ind {
                fill: var(--color-teal-600);
                filter: drop-shadow(0 2px 4px rgba(33, 128, 141, 0.4));
            }

            /* Text styles - hidden by default */
            #Resorts a text {
                visibility: hidden;
                opacity: 0;
                font-family: var(--font-family-base);
                pointer-events: none;
            }

            #Resorts a:hover text {
                visibility: visible;
                opacity: 1;
            }

            /* Title text */
            #Resorts a .title {
                fill: var(--color-slate-900);
                font-size: 18px;
                font-weight: 600;
                letter-spacing: -0.01em;
            }

            /* Highlighted locations */
            #Resorts a .title tspan {
                fill: var(--color-slate-900);
            }

            /* Subtitle/phone text */
            #Resorts a .subtitle {
                fill: var(--color-slate-500);
                font-size: 14px;
                font-weight: 400;
            }

            /* Special highlight for featured locations */
            #Resorts a:hover .title tspan[style*="background-color"] {
                fill: var(--color-teal-600);
            }

            /* Focus styles for accessibility */
            #Resorts a:focus-visible rect {
                opacity: 1;
                stroke: var(--color-teal-600);
                stroke-width: 3;
                outline: 2px solid var(--color-teal-500);
                outline-offset: 2px;
            }

            #Resorts a:focus-visible .geo-ind {
                fill: var(--color-teal-600);
            }

            /* Map background image */
            #theworld image {
                opacity: 0.95;
            }

            .country-flag {
                pointer-events: none;
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                #resortMap {
                    padding: 10px;
                }

                .zoom-controls {
                    top: 10px;
                    right: 10px;
                    gap: 6px;
                }

                .zoom-btn {
                    width: 36px;
                    height: 36px;
                    font-size: 18px;
                }

                #Resorts a .title {
                    font-size: 14px;
                }

                #Resorts a .subtitle {
                    font-size: 11px;
                }
            }
        </style>

        <div id="resortMap">
            <div class="zoom-controls">
                <button class="zoom-btn" id="zoomIn" aria-label="Zoom in">+</button>
                <button class="zoom-btn" id="zoomOut" aria-label="Zoom out">−</button>
                <button class="zoom-btn" id="zoomReset" aria-label="Reset zoom" style="font-size: 16px;">⟲</button>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2014.2 986.8" id="worldMap">
                <g id="theworld">
                    <image overflow="visible" width="1476" height="723" xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/11614/mapbg.png" transform="matrix(1.3647 0 0 1.3647 -4.336293e-02 8.851531e-02)"></image>
                </g>

                <g id="Resorts">
                    <!-- Freetown, Sierra Leone -->
                    <a tabindex="0" role="button" aria-label="Freetown, Sierra Leone - Click for details">
                        <rect x="850" y="380" width="310" height="55"></rect>
                        <image x="854" y="386" width="30" height="30" xlink:href="https://flagcdn.com/w40/sl.png" class="country-flag"></image>
                        <text class="title" x="880" y="405">
                            <tspan>Freetown, Sierra Leone</tspan>
                        </text>
                        <text class="subtitle" x="880" y="423">+23278676849</text>
                    </a>

                    <!-- Monrovia, Liberia -->
                    <a tabindex="0" role="button" aria-label="Monrovia, Liberia - Click for details">
                        <rect x="820" y="410" width="290" height="55"></rect>
                        <image x="824" y="416" width="30" height="30" xlink:href="https://flagcdn.com/w40/lr.png" class="country-flag"></image>
                        <text class="title" x="860" y="435">Monrovia, Liberia</text>
                        <text class="subtitle" x="860" y="453">+231 77 508 1433</text>
                    </a>

                    <!-- Lagos, Nigeria -->
                    <a tabindex="0" role="button" aria-label="Lagos, Nigeria - Click for details">
                        <rect x="1020" y="420" width="270" height="55"></rect>
                        <image x="1024" y="426" width="30" height="30" xlink:href="https://flagcdn.com/w40/ng.png" class="country-flag"></image>
                        <text class="title" x="1060" y="445">Lagos, Nigeria</text>
                        <text class="subtitle" x="1060" y="463">+234 904 623 4551</text>
                    </a>

                    <!-- Ouagadougou, Burkina Faso -->
                    <a tabindex="0" role="button" aria-label="Ouagadougou, Burkina Faso - Click for details">
                        <rect x="960" y="300" width="320" height="55"></rect>
                        <image x="964" y="306" width="30" height="30" xlink:href="https://flagcdn.com/w40/bf.png" class="country-flag"></image>
                        <text class="title" x="1000" y="325">Ouagadougou, Burkina Faso</text>
                        <text class="subtitle" x="1000" y="343">+226 05054651</text>
                    </a>

                    <!-- Abuja, Nigeria -->
                    <a tabindex="0" role="button" aria-label="Abuja, Nigeria - Click for details">
                        <rect x="1070" y="365" width="260" height="55"></rect>
                        <image x="1074" y="371" width="30" height="30" xlink:href="https://flagcdn.com/w40/ng.png" class="country-flag"></image>
                        <text class="title" x="1110" y="390">Abuja, Nigeria</text>
                        <text class="subtitle" x="1110" y="408">+234 816 958 1101</text>
                    </a>

                    <!-- Port Harcourt, Nigeria -->
                    <a tabindex="0" role="button" aria-label="Port Harcourt, Nigeria - Click for details">
                        <rect x="1075" y="455" width="300" height="55"></rect>
                        <image x="1079" y="461" width="30" height="30" xlink:href="https://flagcdn.com/w40/ng.png" class="country-flag"></image>
                        <text class="title" x="1115" y="480">Port Harcourt, Nigeria</text>
                        <text class="subtitle" x="1115" y="498">+234 810 994 0319</text>
                    </a>

                    <!-- Bamako, Mali -->
                    <a tabindex="0" role="button" aria-label="Bamako, Mali - Click for details">
                        <rect x="880" y="310" width="250" height="55"></rect>
                        <image x="884" y="316" width="30" height="30" xlink:href="https://flagcdn.com/w40/ml.png" class="country-flag"></image>
                        <text class="title" x="909" y="335">Bamako, Mali</text>
                        <text class="subtitle" x="909" y="353">+232 8021 2175</text>
                    </a>

                    <!-- Bobo-Dioulasso, Burkina Faso -->
                    <a tabindex="0" role="button" aria-label="Bobo-Dioulasso, Burkina Faso - Click for details">
                        <rect x="930" y="350" width="340" height="55"></rect>
                        <image x="934" y="356" width="30" height="30" xlink:href="https://flagcdn.com/w40/bf.png" class="country-flag"></image>
                        <text class="title" x="970" y="375">Bobo-Dioulasso, Burkina Faso</text>
                        <text class="subtitle" x="970" y="393">+226 0505 4651</text>
                    </a>

                    <!-- Dakar, Senegal -->
                    <a tabindex="0" role="button" aria-label="Dakar, Senegal - Click for details">
                        <rect x="750" y="280" width="260" height="55"></rect>
                        <image x="754" y="286" width="30" height="30" xlink:href="https://flagcdn.com/w40/sn.png" class="country-flag"></image>
                        <text class="title" x="790" y="305">Dakar, Senegal</text>
                        <text class="subtitle" x="790" y="323">+232 8021 2178</text>
                    </a>

                    <!-- Accra, Ghana -->
                    <a tabindex="0" role="button" aria-label="Accra, Ghana - Click for details">
                        <rect x="990" y="425" width="240" height="55"></rect>
                        <image x="994" y="431" width="30" height="30" xlink:href="https://flagcdn.com/w40/gh.png" class="country-flag"></image>
                        <text class="title" x="1030" y="450">Accra, Ghana</text>
                        <text class="subtitle" x="1030" y="468">+233 53 110 0930</text>
                    </a>

                    <!-- Banjul, Gambia -->
                    <a tabindex="0" role="button" aria-label="Banjul, Gambia - Click for details">
                        <rect x="770" y="335" width="260" height="55"></rect>
                        <image x="774" y="341" width="30" height="30" xlink:href="https://flagcdn.com/w40/gm.png" class="country-flag"></image>
                        <text class="title" x="810" y="360">Banjul, Gambia</text>
                        <text class="subtitle" x="810" y="378">+232 8021 2177</text>
                    </a>

                    <!-- Ajmer, India -->
                    <a tabindex="0" role="button" aria-label="Ajmer, India - Click for details">
                        <rect x="1390" y="280" width="240" height="55"></rect>
                        <image x="1394" y="286" width="30" height="30" xlink:href="https://flagcdn.com/w40/in.png" class="country-flag"></image>
                        <text class="title" x="1430" y="305">
                            <tspan>Ajmer, India</tspan>
                        </text>
                        <text class="subtitle" x="1430" y="323">+91 784 990 9355</text>
                    </a>
                </g>
            </svg>
        </div>

        <script>
            const svg = document.getElementById('worldMap');
            const container = document.getElementById('resortMap');
            const zoomInBtn = document.getElementById('zoomIn');
            const zoomOutBtn = document.getElementById('zoomOut');
            const zoomResetBtn = document.getElementById('zoomReset');

            let scale = 1;
            let translateX = 0;
            let translateY = 0;
            let isDragging = false;
            let startX, startY;

            const minScale = 1;
            const maxScale = 4;
            const zoomStep = 0.3;

            function updateTransform() {
                svg.style.transform = `translate(${translateX}px, ${translateY}px) scale(${scale})`;
            }

            // Zoom in
            zoomInBtn.addEventListener('click', () => {
                if (scale < maxScale) {
                    scale = Math.min(scale + zoomStep, maxScale);
                    updateTransform();
                }
            });

            // Zoom out
            zoomOutBtn.addEventListener('click', () => {
                if (scale > minScale) {
                    scale = Math.max(scale - zoomStep, minScale);
                    if (scale === minScale) {
                        translateX = 0;
                        translateY = 0;
                    }
                    updateTransform();
                }
            });

            // Reset zoom
            zoomResetBtn.addEventListener('click', () => {
                scale = 1;
                translateX = 0;
                translateY = 0;
                updateTransform();
            });

            // Mouse wheel zoom
            container.addEventListener('wheel', (e) => {
                e.preventDefault();
                const delta = e.deltaY > 0 ? -zoomStep : zoomStep;
                const newScale = Math.max(minScale, Math.min(maxScale, scale + delta));

                if (newScale !== scale) {
                    scale = newScale;
                    if (scale === minScale) {
                        translateX = 0;
                        translateY = 0;
                    }
                    updateTransform();
                }
            }, {
                passive: false
            });

            // Pan functionality - Desktop
            svg.addEventListener('mousedown', (e) => {
                if (scale > 1) {
                    isDragging = true;
                    svg.classList.add('grabbing');
                    startX = e.clientX - translateX;
                    startY = e.clientY - translateY;
                }
            });

            document.addEventListener('mousemove', (e) => {
                if (isDragging) {
                    translateX = e.clientX - startX;
                    translateY = e.clientY - startY;
                    updateTransform();
                }
            });

            document.addEventListener('mouseup', () => {
                isDragging = false;
                svg.classList.remove('grabbing');
            });

            // Touch support for mobile - FIXED
            let initialDistance = 0;
            let initialScale = 1;
            let touchStartX = 0;
            let touchStartY = 0;
            let isTouchDragging = false;

            svg.addEventListener('touchstart', (e) => {
                if (e.touches.length === 2) {
                    // Two-finger pinch zoom
                    e.preventDefault();
                    initialDistance = Math.hypot(
                        e.touches[0].clientX - e.touches[1].clientX,
                        e.touches[0].clientY - e.touches[1].clientY
                    );
                    initialScale = scale;
                } else if (e.touches.length === 1 && scale > 1) {
                    // Single finger pan only when zoomed in
                    e.preventDefault();
                    isTouchDragging = true;
                    touchStartX = e.touches[0].clientX - translateX;
                    touchStartY = e.touches[0].clientY - translateY;
                }
            }, {
                passive: false
            });

            svg.addEventListener('touchmove', (e) => {
                if (e.touches.length === 2) {
                    // Two-finger pinch zoom
                    e.preventDefault();
                    const currentDistance = Math.hypot(
                        e.touches[0].clientX - e.touches[1].clientX,
                        e.touches[0].clientY - e.touches[1].clientY
                    );
                    scale = Math.max(minScale, Math.min(maxScale, initialScale * (currentDistance / initialDistance)));
                    if (scale === minScale) {
                        translateX = 0;
                        translateY = 0;
                    }
                    updateTransform();
                } else if (e.touches.length === 1 && isTouchDragging && scale > 1) {
                    // Single finger pan only when zoomed in
                    e.preventDefault();
                    translateX = e.touches[0].clientX - touchStartX;
                    translateY = e.touches[0].clientY - touchStartY;
                    updateTransform();
                }
            }, {
                passive: false
            });

            svg.addEventListener('touchend', (e) => {
                isTouchDragging = false;
                initialDistance = 0;
                if (e.touches.length === 0 && scale === minScale) {
                    translateX = 0;
                    translateY = 0;
                    updateTransform();
                }
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
            <div class="col-lg-6 mt-5">
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
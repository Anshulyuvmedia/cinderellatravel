<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>D3 World Map - Circular Flags</title>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://d3js.org/topojson.v3.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/themes/light.css" />

    <style>
        .map-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }


        svg {
            display: block;
            width: 100%;
            height: auto;
            max-height: 80vh;
        }





        .country {
            fill: #474B54;
            stroke: #fff;
            stroke-width: 0.5;
            transition: all 0.3s ease;
            cursor: pointer;
        }


        .country.highlighted {
            fill: #0F76BD;
            stroke: #0F76BD;
        }



        text {
            fill: #0F76BD;
        }


        /* Customize the flag indicator group */
        .flag-indicator-group {
            transition: transform 0.2s ease;
        }


        /* Circle sizing - smaller base */
        .flag-circle {
            fill: #ffffff;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }


        /* Image sizing - BIGGER, goes outside circle */
        .flag-indicator-group image {
            width: 40px;
            height: 40px;
            x: 16;
            y: 16;


        }


        /* Text label styling */
        .country-label {
            font-size: 14px;
            font-weight: 600;
            text-anchor: middle;
            fill: #0F76BD;
            pointer-events: none;
            y: 65px;
            /* नीचे लगाओ */
        }


        /* Responsive sizing */
        @media (max-width: 768px) {
            .flag-circle {
                r: 20px;
                /* circle same रहे */
            }


            .flag-indicator-group image {
                width: 120px;
                height: 120px;
                x: -26px;
                y: -26px;
            }


            .country-label {
                font-size: 12px;
                y: 75px;
            }


            circle {
                r: 35px
            }
        }




        .leader-line {
            stroke: #69c2ff;
            stroke-width: 4;
            fill: none;
            pointer-events: none;
            opacity: 1;

            stroke-dasharray: 5, 5;
            transition: all 0.3s ease;
        }


        .leader-line.active {
            stroke: #0F76BD !important;
            opacity: 0.8 !important;
            stroke-width: 3 !important;
            stroke-dasharray: none !important;
        }


        .leader-arrow {
            fill: #69c2ff;
            pointer-events: none;
            transition: all 0.3s ease;
        }


        .leader-arrow.active {
            fill: #0F76BD !important;
        }


        .tippy-box[data-theme~='dark'] {
            background-color: #1e1e1e;
            color: #0F76BD;
            border: 2px solid #0F76BD;
            border-radius: 12px;
            padding: 16px;
            font-size: 14px;
            box-shadow: 0 10px 32px rgba(0, 212, 255, 0.3);
        }


        .tippy-arrow {
            color: #1e1e1e !important;
        }


        .tooltip-content {
            text-align: center;
        }


        .tooltip-flag {
            width: 120px;
            height: 80px;
            border-radius: 6px;
            margin-bottom: 12px;
            object-fit: cover;
            border: 2px solid #0F76BD;
        }


        .tooltip-country {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 8px;
            color: #00ffff;
        }


        .tooltip-phone {
            font-size: 13px;
            color: #0F76BD;
            font-weight: 500;
            margin-bottom: 8px;
        }


        .tooltip-contacts {
            border-top: 1px solid #444;
            padding-top: 8px;
            font-size: 12px;
        }


        .contact-item {
            margin: 4px 0;
            color: #aaa;
        }


        .draggable-flag {
            cursor: move;
        }


        .draggable-flag.dragging {
            opacity: 0.8;
            filter: drop-shadow(0 0 30px rgba(0, 212, 255, 0.8));
        }


        .selected-info {
            position: fixed;
            top: 20px;
            right: 20px;
            background: #1e1e1e;
            border: 3px solid #0F76BD;
            border-radius: 12px;
            padding: 20px;
            width: 320px;
            box-shadow: 0 10px 40px rgba(0, 212, 255, 0.3);
            z-index: 1000;
            display: none;
        }


        /* Mobile: make the selected info a bottom sheet */
        @media (max-width: 768px) {
            .selected-info {
                top: auto;
                bottom: 0;
                left: 0;
                right: 0;
                width: 100%;
                border-radius: 12px 12px 0 0;
                padding: 14px;
                max-height: 60vh;
                overflow: auto;
            }


            .country-label {
                font-size: 20px;
                y: 78px;
            }
        }


        .selected-info.active {
            display: block;
            animation: slideIn 0.3s ease;
        }


        @keyframes slideIn {
            from {
                transform: translateX(400px);
                opacity: 0;
            }


            to {
                transform: translateX(0);
                opacity: 1;
            }
        }


        .selected-info-header {
            font-size: 18px;
            font-weight: bold;
            color: #00ffff;
            margin-bottom: 12px;
            border-bottom: 2px solid #0F76BD;
            padding-bottom: 8px;
        }


        .selected-info-flag {
            width: 100%;
            height: 120px;
            border-radius: 8px;
            margin-bottom: 12px;
            object-fit: cover;
            border: 2px solid #0F76BD;
        }


        .selected-info-item {
            margin: 8px 0;
            padding: 8px;
            background: #2a2a2a;
            border-radius: 6px;
            font-size: 13px;
            color: #aaa;
        }


        .selected-info-label {
            font-weight: bold;
            color: #0F76BD;
        }


        .selected-info-close {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 30px;
            height: 30px;
            background: #0F76BD;
            border: none;
            border-radius: 50%;
            color: #1a1a1a;
            font-size: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }


        .selected-info-close:hover {
            background: #00ffff;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.6);
        }
    </style>
</head>

<body>
    <div class="selected-info" id="selectedInfo">
        <button class="selected-info-close" onclick="closeSelectedInfo()">×</button>
        <div class="selected-info-header" id="selectedTitle"></div>
        <img id="selectedFlag" class="selected-info-flag" src="" alt="">
        <div class="selected-info-item">
            <span class="selected-info-label">📞 Phone:</span>
            <div id="selectedPhone"></div>
        </div>
        <div class="selected-info-item">
            <span class="selected-info-label">📧 Email:</span>
            <div id="selectedEmail"></div>
        </div>
        <div class="selected-info-item">
            <span class="selected-info-label">👤 Contact:</span>
            <div id="selectedContact"></div>
        </div>
        <div class="selected-info-item">
            <span class="selected-info-label">👥 Users:</span>
            <div id="selectedUsers"></div>
        </div>
    </div>

    <div class="map-container">
        <svg id="map" role="img" aria-label="World map with flags"></svg>
    </div>

    <script>
        const width = 1200;
        const height = 700;

        const svg = d3.select("#map")
            .attr("viewBox", `0 0 ${width} ${height}`)
            .attr("preserveAspectRatio", "xMidYMid meet");

        // WIDER VIEW TO SHOW BOTH AFRICA AND INDIA
        const projection = d3.geoMercator()
            .center([30, 10]) // Center between Africa and India
            .scale(280) // Wider zoom to fit both regions
            .translate([width / 2, height / 2]);

        const path = d3.geoPath().projection(projection);

        let selectedCountry = null;
        let draggedCountry = null;

        const countries = [{
                id: 1,
                name: "Lagos",
                fullName: "Lagos, Nigeria",
                country: "Nigeria",
                long: 3.3792,
                lat: 6.5244,
                phone: "+234 904 623 4551",
                email: "lagos@nigeria.com",
                contact: "Ahmed Hassan",
                users: 587,
                flagUrl: "https://flagcdn.com/w160/ng.png",
                indicatorOffset: {
                    x: 0,
                    y: 200
                }
            },
            {
                id: 2,
                name: "Abuja",
                fullName: "Abuja, Nigeria",
                country: "Nigeria",
                long: 7.4937,
                lat: 9.0579,
                phone: "+234 816 958 1101",
                email: "abuja@nigeria.com",
                contact: "Chinedu Okafor",
                users: 267,
                flagUrl: "https://flagcdn.com/w160/ng.png",
                indicatorOffset: {
                    x: 200,
                    y: -50
                }
            },
            {
                id: 3,
                name: "Port Harcourt",
                fullName: "Port Harcourt, Nigeria",
                country: "Nigeria",
                long: 7.0498,
                lat: 4.7661,
                phone: "+234 810 994 0319",
                email: "portharcourt@nigeria.com",
                contact: "Gift Banda",
                users: 198,
                flagUrl: "https://flagcdn.com/w160/ng.png",
                indicatorOffset: {
                    x: 350,
                    y: 60
                }
            },
            {
                id: 4,
                name: "Kano",
                fullName: "Kano, Nigeria",
                country: "Nigeria",
                long: 8.5167,
                lat: 12.0000,
                phone: "+234 802 000 0000",
                email: "kano@nigeria.com",
                contact: "Musa Ibrahim",
                users: 420,
                flagUrl: "https://flagcdn.com/w160/ng.png",
                indicatorOffset: {
                    x: -200,
                    y: -200
                }
            },
            {
                id: 5,
                name: "Enugu",
                fullName: "Enugu, Nigeria",
                country: "Nigeria",
                long: 7.4951,
                lat: 6.4403,
                phone: "+234 803 000 0000",
                email: "enugu@nigeria.com",
                contact: "Chioma Eze",
                users: 215,
                flagUrl: "https://flagcdn.com/w160/ng.png",
                indicatorOffset: {
                    x: 50,
                    y: 200
                }
            },
            {
                id: 6,
                name: "Freetown",
                fullName: "Freetown, Sierra Leone",
                country: "Sierra Leone",
                long: -13.2317,
                lat: 8.4657,
                phone: "+232 786 768 49",
                email: "freetown@sierraleone.com",
                contact: "John Smith",
                users: 245,
                flagUrl: "https://flagcdn.com/w160/sl.png",
                indicatorOffset: {
                    x: -120,
                    y: 50
                }
            },
            {
                id: 7,
                name: "Monrovia",
                fullName: "Monrovia, Liberia",
                country: "Liberia",
                long: -10.8070,
                lat: 6.3155,
                phone: "+231 775 081 433",
                email: "monrovia@liberia.com",
                contact: "Maria Johnson",
                users: 189,
                flagUrl: "https://flagcdn.com/w160/lr.png",
                indicatorOffset: {
                    x: -150,
                    y: 200
                }
            },
            {
                id: 8,
                name: "Ouagadougou",
                fullName: "Ouagadougou, Burkina Faso",
                country: "Burkina Faso",
                long: -1.5197,
                lat: 12.3714,
                phone: "+226 050 546 51",
                email: "ouagadougou@burkinafaso.com",
                contact: "Amara Diallo",
                users: 312,
                flagUrl: "https://flagcdn.com/w160/bf.png",
                indicatorOffset: {
                    x: -200,
                    y: -110
                }
            },
            {
                id: 9,
                name: "Yaounde",
                fullName: "Yaounde, Cameroon",
                country: "Cameroon",
                long: 11.5174,
                lat: 3.8480,
                phone: "+237 655 000 000",
                email: "yaounde@cameroon.com",
                contact: "Pierre Ngono",
                users: 278,
                flagUrl: "https://flagcdn.com/w160/cm.png",
                indicatorOffset: {
                    x: 100,
                    y: 200
                }
            },
            {
                id: 10,
                name: "Conakry",
                fullName: "Conakry, Guinea",
                country: "Guinea",
                long: -13.6785,
                lat: 9.6412,
                phone: "+224 621 000 000",
                email: "conakry@guinea.com",
                contact: "Mamadou Diallo",
                users: 201,
                flagUrl: "https://flagcdn.com/w160/gn.png",
                indicatorOffset: {
                    x: -130,
                    y: -30
                }
            },
            {
                id: 11,
                name: "Accra",
                fullName: "Accra, Ghana",
                country: "Ghana",
                long: -0.1870,
                lat: 5.6037,
                phone: "+233 531 100 930",
                email: "accra@ghana.com",
                contact: "Kwame Asante",
                users: 298,
                flagUrl: "https://flagcdn.com/w160/gh.png",
                indicatorOffset: {
                    x: -60,
                    y: 100
                }
            },
            {
                id: 12,
                name: "Kumasi",
                fullName: "Kumasi, Ghana",
                country: "Ghana",
                long: -1.6163,
                lat: 6.6885,
                phone: "+233 532 000 000",
                email: "kumasi@ghana.com",
                contact: "Abena Mensah",
                users: 256,
                flagUrl: "https://flagcdn.com/w160/gh.png",
                indicatorOffset: {
                    x: -100,
                    y: 200
                }
            },
            {
                id: 13,
                name: "Harare",
                fullName: "Harare, Zimbabwe",
                country: "Zimbabwe",
                long: 31.0522,
                lat: -17.8292,
                phone: "+263 712 000 000",
                email: "harare@zimbabwe.com",
                contact: "Tendai Ncube",
                users: 342,
                flagUrl: "https://flagcdn.com/w160/zw.png",
                indicatorOffset: {
                    x: 90,
                    y: 100
                }
            },
            {
                id: 14,
                name: "Lusaka",
                fullName: "Lusaka, Zambia",
                country: "Zambia",
                long: 28.2873,
                lat: -15.4167,
                phone: "+260 966 000 000",
                email: "lusaka@zambia.com",
                contact: "Joseph Banda",
                users: 289,
                flagUrl: "https://flagcdn.com/w160/zm.png",
                indicatorOffset: {
                    x: 120,
                    y: 20
                }
            },
            {
                id: 15,
                name: "Ajmer",
                fullName: "Ajmer, India",
                country: "India",
                long: 74.6289,
                lat: 26.4499,
                phone: "+91 784 990 9355",
                email: "ajmer@india.com",
                contact: "Rajesh Kumar",
                users: 445,
                flagUrl: "https://flagcdn.com/w160/in.png",
                indicatorOffset: {
                    x: -50,
                    y: 50
                }
            },
            {
                id: 16,
                name: "Kenema",
                fullName: "Kenema, Sierra Leone",
                country: "Sierra Leone",
                long: 11.1876,
                lat: 7.8766,
                phone: "+232 90 313132",
                email: "kenema@sierraleone.com",
                contact: "John Doe",
                users: 200,
                flagUrl: "https://flagcdn.com/w160/sl.png",
                indicatorOffset: {
                    x: 280,
                    y: 10
                }
            },
            {
                id: 17,
                name: "Luanda",
                fullName: "Luanda, Angola",
                country: "Angola",
                long: 13.2344,
                lat: -8.8383,
                phone: "+244 924 000 000",
                email: "luanda@angola.com",
                contact: "Jose Martins",
                users: 325,
                flagUrl: "https://flagcdn.com/w160/ao.png",
                indicatorOffset: {
                    x: 250,
                    y: 100
                }
            },
            {
                id: 18,
                name: "Ganta",
                fullName: "Ganta, Liberia",
                country: "Liberia",
                long: -9.4500,
                lat: 7.4667,
                phone: "+231 776 000 000",
                email: "ganta@liberia.com",
                contact: "Samuel Cooper",
                users: 156,
                flagUrl: "https://flagcdn.com/w160/lr.png",
                indicatorOffset: {
                    x: -100,
                    y: 150
                }
            },
            {
                id: 19,
                name: "Makeni",
                fullName: "Makeni, Sierra Leone",
                country: "Sierra Leone",
                long: -12.0500,
                lat: 8.8870,
                phone: "+232 787 000 000",
                email: "makeni@sierraleone.com",
                contact: "Ibrahim Koroma",
                users: 178,
                flagUrl: "https://flagcdn.com/w160/sl.png",
                indicatorOffset: {
                    x: -200,
                    y: -60
                }
            },
        ];

        const g1 = svg.append("g");
        const countriesGroup = g1.append("g").attr("class", "countries-group");
        const leaderLinesGroup = g1.append("g").attr("class", "leader-lines");
        const indicatorGroup = g1.append("g").attr("class", "indicators");

        // Create SVG defs for circular clipping
        const defs = svg.append("defs");
        countries.forEach(country => {
            defs.append("clipPath")
                .attr("id", `clip-circle-${country.id}`)
                .append("circle")
                .attr("cx", 35)
                .attr("cy", 35)
                .attr("r", 15);
        });

        const countryOffsets = {};
        countries.forEach(c => {
            countryOffsets[c.id] = JSON.parse(JSON.stringify(c.indicatorOffset));
        });

        const targetCountries = ["Nigeria", "Sierra Leone", "Liberia", "Burkina Faso", "Cameroon", "Guinea", "Ghana", "Zimbabwe", "Zambia", "India"];

        function showSelectedInfo(country) {
            selectedCountry = country;
            document.getElementById("selectedTitle").textContent = country.fullName;
            document.getElementById("selectedFlag").src = country.flagUrl;
            document.getElementById("selectedPhone").textContent = country.phone;
            document.getElementById("selectedEmail").textContent = country.email;
            document.getElementById("selectedContact").textContent = country.contact;
            document.getElementById("selectedUsers").textContent = `${country.users} users`;
            document.getElementById("selectedInfo").classList.add("active");
        }

        function closeSelectedInfo() {
            selectedCountry = null;
            document.getElementById("selectedInfo").classList.remove("active");
            clearHighlight();
        }

        function clearHighlight() {
            countriesGroup.selectAll(".country").classed("active", false);
            indicatorGroup.selectAll(".flag-indicator-group").classed("active", false);
            leaderLinesGroup.selectAll(".leader-line").classed("active", false);
            leaderLinesGroup.selectAll(".leader-arrow").classed("active", false);
        }

        function updateLeaderLines() {
            leaderLinesGroup.selectAll("*").remove();

            countries.forEach((country) => {
                const countryCoords = projection([country.long, country.lat]);
                const indicatorCoords = [
                    countryCoords[0] + countryOffsets[country.id].x,
                    countryCoords[1] + countryOffsets[country.id].y
                ];

                leaderLinesGroup.append("line")
                    .attr("class", `leader-line leader-line-${country.id}`)
                    .attr("x1", indicatorCoords[0] + 35)
                    .attr("y1", indicatorCoords[1] + 35)
                    .attr("x2", countryCoords[0])
                    .attr("y2", countryCoords[1]);

                const angle = Math.atan2(
                    countryCoords[1] - (indicatorCoords[1] + 35),
                    countryCoords[0] - (indicatorCoords[0] + 35)
                );
                const arrowSize = 8;

                leaderLinesGroup.append("polygon")
                    .attr("class", `leader-arrow leader-arrow-${country.id}`)
                    .attr("points", `
                        ${countryCoords[0]},${countryCoords[1]}
                        ${countryCoords[0] - arrowSize * Math.cos(angle - Math.PI / 6)},${countryCoords[1] - arrowSize * Math.sin(angle - Math.PI / 6)}
                        ${countryCoords[0] - arrowSize * Math.cos(angle + Math.PI / 6)},${countryCoords[1] - arrowSize * Math.sin(angle + Math.PI / 6)}
                    `);
            });
        }

        d3.json("https://cdn.jsdelivr.net/npm/world-atlas@2/countries-110m.json")
            .then(data => {
                const worldCountries = topojson.feature(data, data.objects.countries);

                countriesGroup
                    .selectAll("path")
                    .data(worldCountries.features)
                    .enter()
                    .append("path")
                    .attr("class", d => {
                        const props = d.properties;
                        const isHighlighted = targetCountries.some(tc =>
                            props.name && props.name.includes(tc)
                        );
                        return isHighlighted ? "country highlighted" : "country";
                    })
                    .attr("d", path)
                    .on("mouseenter", function() {
                        if (!selectedCountry) {
                            d3.select(this).classed("active", true);
                        }
                    })
                    .on("mouseleave", function() {
                        if (!selectedCountry) {
                            clearHighlight();
                        }
                    });

                updateLeaderLines();
                createIndicators();

                function createIndicators() {
                    countries.forEach((country) => {
                        const countryCoords = projection([country.long, country.lat]);
                        const indicatorCoords = [
                            countryCoords[0] + countryOffsets[country.id].x,
                            countryCoords[1] + countryOffsets[country.id].y
                        ];

                        const flagGroup = indicatorGroup.append("g")
                            .attr("class", `flag-indicator-group draggable-flag flag-indicator-${country.id}`)
                            .attr("transform", `translate(${indicatorCoords[0]},${indicatorCoords[1]})`);

                        const drag = d3.drag()
                            .on("start", function() {
                                draggedCountry = country.id;
                                d3.select(this).classed("dragging", true);
                            })
                            .on("drag", function(event) {
                                const newX = indicatorCoords[0] + event.dx;
                                const newY = indicatorCoords[1] + event.dy;
                                countryOffsets[country.id].x = newX - projection([country.long, country.lat])[0];
                                countryOffsets[country.id].y = newY - projection([country.long, country.lat])[1];
                                d3.select(this).attr("transform", `translate(${newX},${newY})`);
                                updateLeaderLines();
                            })
                            .on("end", function() {
                                d3.select(this).classed("dragging", false);
                                draggedCountry = null;
                            });

                        flagGroup.call(drag);

                        // Circular background
                        flagGroup.append("circle")
                            .attr("class", "flag-circle")
                            .attr("cx", 35)
                            .attr("cy", 35)
                            .attr("r", 15);

                        // Circular flag image with clip-path
                        flagGroup.append("image")
                            .attr("xlink:href", country.flagUrl)
                            .attr("x", 0)
                            .attr("y", 0)
                            .attr("width", 70)
                            .attr("height", 70)
                            .attr("clip-path", `url(#clip-circle-${country.id})`);

                        flagGroup.append("text")
                            .attr("class", "country-label")
                            .attr("x", 35)
                            .attr("y", 75)
                            .text(country.name);
                    });
                }
            })
            .catch(error => console.error("Error loading map:", error));
    </script>
</body>

</html>
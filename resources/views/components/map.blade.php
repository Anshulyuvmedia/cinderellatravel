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
        svg {
            display: block;
            width: 100%;
            height: 100%;

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
            r: 20px;
            fill: #ffffff;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }

        /* Image sizing - BIGGER, goes outside circle */
        .flag-indicator-group image {
            width: 70px;
            /* बड़ा - circle से बाहर जाए */
            height: 70px;
            /* x: -35px;
            /* Center it on the circle */
            /* y: -35px;
            Center it on the circle */
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
                width: 80px;
                /* image बड़ा हो */
                height: 80px;
                x: -40px;
                y: -40px;
            }

            .country-label {
                font-size: 12px;
                y: 75px;
            }
        }



        .leader-line {
            stroke: #0F76BD;
            stroke-width: 4;
            fill: none;
            pointer-events: none;
            opacity: 0.4;
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
            fill: #555;
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

    <svg id="map"></svg>

    <script>
        const width = window.innerWidth;
        const height = window.innerHeight;

        const svg = d3.select("#map")
            .attr("width", width)
            .attr("height", height);

        const projection = d3.geoMercator()
            .scale(160)
            .translate([width / 2, height / 2]);

        const path = d3.geoPath().projection(projection);

        let selectedCountry = null;
        let draggedCountry = null;
        // const zoom = d3.zoom()
        //       .scaleExtent([1, 8])
        //       .on("zoom", (event) => {
        //         g.attr("transform", event.transform);
        //         updateLeaderLines();
        //       });    

        //     svg.call(zoom);
        const countries = [{
                id: 1,
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
                    x: -300,
                    y: 120
                }
            },
            {
                id: 2,
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
                    x: -100,
                    y: 80
                }
            },
            {
                id: 3,
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
                    x: 10,
                    y: -180
                }
            },
            {
                id: 4,
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
                    x: -100,
                    y: -200
                }
            },
            {
                id: 5,
                name: "Abuja",
                fullName: "Abuja, Nigeria",
                country: "Nigeria",
                long: 7.0667,
                lat: 9.0765,
                phone: "+234 816 958 1101",
                email: "abuja@nigeria.com",
                contact: "Chinedu Okafor",
                users: 267,
                flagUrl: "https://flagcdn.com/w160/ng.png",
                indicatorOffset: {
                    x: 200,
                    y: 20
                }
            },
            {
                id: 6,
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
                    x: 160,
                    y: 100
                }
            },
            {
                id: 7,
                name: "Bamako",
                fullName: "Bamako, Mali",
                country: "Mali",
                long: -8.0029,
                lat: 12.6396,
                phone: "+223 802 121 75",
                email: "bamako@mali.com",
                contact: "Tendai Mwangi",
                users: 234,
                flagUrl: "https://flagcdn.com/w160/ml.png",
                indicatorOffset: {
                    x: -300,
                    y: -50
                }
            },
            {
                id: 8,
                name: "Bobo-Dioulasso",
                fullName: "Bobo-Dioulasso, Burkina Faso",
                country: "Burkina Faso",
                long: -4.3009,
                lat: 11.1847,
                phone: "+226 050 546 51",
                email: "bobo@burkinafaso.com",
                contact: "Sambou Ndiaye",
                users: 156,
                flagUrl: "https://flagcdn.com/w160/bf.png",
                indicatorOffset: {
                    x: 150,
                    y: 200
                }
            },
            {
                id: 9,
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
                    x: 100,
                    y: -140
                }
            },
            {
                id: 10,
                name: "Dakar",
                fullName: "Dakar, Senegal",
                country: "Senegal",
                long: -17.5578,
                lat: 14.7167,
                phone: "+221 802 121 78",
                email: "dakar@senegal.com",
                contact: "Habib Diop",
                users: 323,
                flagUrl: "https://flagcdn.com/w160/sn.png",
                indicatorOffset: {
                    x: -220,
                    y: -140
                }
            },
            {
                id: 11,
                name: "Accra",
                fullName: "Accra, Ghana",
                country: "Ghana",
                long: -0.2176,
                lat: 5.5520,
                phone: "+233 531 100 930",
                email: "accra@ghana.com",
                contact: "Kwame Asante",
                users: 298,
                flagUrl: "https://flagcdn.com/w160/gh.png",
                indicatorOffset: {
                    x: -50,
                    y: 200
                }
            },
            {
                id: 12,
                name: "Banjul",
                fullName: "Banjul, Gambia",
                country: "Gambia",
                long: -16.5790,
                lat: 13.4549,
                phone: "+220 802 121 77",
                email: "banjul@gambia.com",
                contact: "Fatou Jallow",
                users: 167,
                flagUrl: "https://flagcdn.com/w160/gm.png",
                indicatorOffset: {
                    x: -180,
                    y: 20
                }
            }
        ];

        const g = svg.append("g");
        g.attr("transform", "translate(-261,-150) scale(1)")
        const countriesGroup = g.append("g").attr("class", "countries-group");
        const leaderLinesGroup = g.append("g").attr("class", "leader-lines");
        const indicatorGroup = g.append("g").attr("class", "indicators");

        // Create SVG defs for circular clipping
        const defs = svg.append("defs");
        countries.forEach(country => {
            defs.append("clipPath")
                .attr("id", `clip-circle-${country.id}`)
                .append("circle")
                .attr("cx", 35)
                .attr("cy", 35)
                .attr("r", 20);
        });

        const countryOffsets = {};
        countries.forEach(c => {
            countryOffsets[c.id] = JSON.parse(JSON.stringify(c.indicatorOffset));
        });

        const targetCountries = countries.map(c => c.country);

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
                            .attr("r", 35);

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
                            .attr("y", 70)
                            .text(country.name);

                     
                        flagGroup
                            .on("mouseenter", function() {
                                if (!draggedCountry) {
                                    d3.select(this).classed("active", true);
                                    leaderLinesGroup.selectAll(`.leader-line-${country.id}`).classed("active", true);
                                    leaderLinesGroup.selectAll(`.leader-arrow-${country.id}`).classed("active", true);
                                }
                            })
                            .on("mouseleave", function() {
                                if (!selectedCountry) {
                                    clearHighlight();
                                }
                            });
                    });
                }
            })
            .catch(error => console.error("Error loading map:", error));
    </script>
</body>

</html>
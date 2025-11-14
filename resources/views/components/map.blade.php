<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>D3 World Map - 12 Countries No Overlap</title>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://d3js.org/topojson.v3.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/themes/light.css" />

    <style>
        svg,
        .zoom-rect {
            display: flex;
            justify-content: center;
            width: 100%;
            height: 90vh;
            background: #ffffff;
            margin: auto;

        }

        .country {
            fill: #c8e6f5;
            stroke: #4a90e2;
            stroke-width: 0.5;
            transition: all 0.3s ease;
            cursor: pointer;
            pointer-events: auto;
        }

        .country:hover {
            fill: #4D96A8;
            stroke: #4D96A8;
        }

        .country.active {
            fill: #c8e6f5 !important;
            stroke: #4a90e2 !important;
            stroke-width: 0.5 !important;
        }

        .flag-indicator-group {
            cursor: pointer;
            pointer-events: auto;
        }

        .flag-indicator-bg {
            fill: white;
            stroke: #333;
            stroke-width: 2;
            filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.15));
            transition: all 0.3s ease;
            pointer-events: auto;
        }

        .flag-indicator-bg:hover {
            stroke: #4D96A8;
            stroke-width: 2.5;
            filter: drop-shadow(0 0 12px #4D96A8);
        }

        .flag-indicator-bg.active {
            fill: #e3f2fd !important;
            stroke: #4D96A8 !important;
            stroke-width: 2.5 !important;
            filter: drop-shadow(0 0 12px #ff6b6b) !important;
        }

        .flag-indicator-image {
            pointer-events: none;
        }

        .country-label {
            fill: #333;
            font-size: 12px;
            font-weight: bold;
            text-anchor: middle;
            pointer-events: none;
            text-shadow: 0 0 3px white, 0 0 5px white;
            opacity: 1;
            visibility: visible;
            transition: all 0.2s ease;
        }

        .flag-indicator-group:hover .country-label {
            fill: #4D96A8;
            font-size: 13px;
        }

        .leader-line {
            stroke: #999;
            stroke-width: 2;
            fill: none;
            pointer-events: none;
            opacity: 0.4;
            stroke-dasharray: 5, 5;
            transition: all 0.3s ease;
        }

        .leader-line.active {
            stroke: #4D96A8 !important;
            opacity: 0.8 !important;
            stroke-width: 3 !important;
            stroke-dasharray: none !important;
        }

        .leader-arrow {
            fill: #999;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .leader-arrow.active {
            fill: #4D96A8 !important;
        }

        .tippy-box[data-theme~='light'] {
            background-color: #fff;
            color: #333;
            border: 2px solid #4D96A8;
            border-radius: 12px;
            padding: 16px;
            font-size: 14px;
            box-shadow: 0 10px 32px #4D96A8;
            z-index: 10000 !important;
        }

        .tippy-arrow {
            color: #fff !important;
        }

        .tooltip-content {
            text-align: center;
        }

        .tooltip-trigger {
            position: absolute;
            z-index: 55;
            background-color: green;
        }

        .tooltip-flag {
            width: 120px;
            height: 80px;
            border-radius: 6px;
            margin-bottom: 12px;
            object-fit: cover;
            border: 2px solid #ddd;
        }

        .tooltip-country {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 8px;
            color: #4D96A8;
        }

        .tooltip-phone {
            font-size: 13px;
            color: #0066cc;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .tooltip-contacts {
            border-top: 1px solid #eee;
            padding-top: 8px;
            font-size: 12px;
        }

        .contact-item {
            margin: 4px 0;
            color: #666;
            text-align: left;
        }

        .zoom-rect {
            cursor: grab;
            fill: none;
            pointer-events: all;
        }

        .zoom-rect:active {
            cursor: grabbing;
        }

        /* Better collision detection - spread indicators more */
        .indicators {
            pointer-events: auto;
        }

        .draggable-flag {
            cursor: move;
        }

        .draggable-flag.dragging {
            opacity: 0.8;
            filter: drop-shadow(0 0 20px rgba(0, 0, 0, 0.5));
        }

        .selected-info {
            position: fixed;
            top: 20px;
            right: 20px;
            background: white;
            border: 3px solid #0072C6;
            border-radius: 12px;
            padding: 20px;
            width: 320px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            font-family: Arial, sans-serif;
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
            color: #0072C6;
            margin-bottom: 12px;
            border-bottom: 2px solid #0072C6;
            padding-bottom: 8px;
        }

        .selected-info-flag {
            width: 100%;
            height: 120px;
            border-radius: 8px;
            margin-bottom: 12px;
            object-fit: cover;
            border: 2px solid #ddd;
        }

        .selected-info-item {
            margin: 8px 0;
            padding: 8px;
            background: #f5f5f5;
            border-radius: 6px;
            font-size: 13px;
        }

        .selected-info-label {
            font-weight: bold;
            color: #0072C6;
        }

        .selected-info-close {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 30px;
            height: 30px;
            background: #4D96A8;
            border: none;
            border-radius: 50%;
            color: white;
            font-size: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .selected-info-close:hover {
            background: #ff4444;
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

        // ⭐ IMPROVED POSITIONING - NO OVERLAPS
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
        g.attr('transform', 'translate(-361.9999694824219,-23) scale(1)')

        const countriesGroup = g.append("g").attr("class", "countries-group");
        const leaderLinesGroup = g.append("g").attr("class", "leader-lines");
        const indicatorGroup = g.append("g").attr("class", "indicators");

        const countryIndexMap = {};
        const countryOffsets = {}; // Store dragged offsets

        // Initialize offsets
        countries.forEach(c => {
            countryOffsets[c.id] = JSON.parse(JSON.stringify(c.indicatorOffset));
        });



        function closeSelectedInfo() {
            selectedCountry = null;
            document.getElementById("selectedInfo").classList.remove("active");
            clearHighlight();
        }

        // const zoom = d3.zoom()
        //     .scaleExtent([1, 8])
        //     .on("zoom", (event) => {
        //         g.attr("transform", event.transform);
        //         updateLeaderLines();
        //     });

        // svg.call(zoom);

        function clearHighlight() {
            countriesGroup.selectAll(".country").classed("active", false);
            indicatorGroup.selectAll(".flag-indicator-bg").classed("active", false);
            leaderLinesGroup.selectAll(".leader-line").classed("active", false);
            leaderLinesGroup.selectAll(".leader-arrow").classed("active", false);
        }

        function updateLeaderLines() {
            leaderLinesGroup.selectAll("*").remove();

            countries.forEach((country) => {
                const countryCoords = projection([country.long, country.lat]);
                const indicatorCoords = [
                    countryCoords[0] + country.indicatorOffset.x,
                    countryCoords[1] + country.indicatorOffset.y
                ];

                leaderLinesGroup.append("line")
                    .attr("class", `leader-line leader-line-${country.id}`)
                    .attr("x1", indicatorCoords[0] + 42)
                    .attr("y1", indicatorCoords[1] + 30)
                    .attr("x2", countryCoords[0])
                    .attr("y2", countryCoords[1]);

                const angle = Math.atan2(
                    countryCoords[1] - (indicatorCoords[1] + 25),
                    countryCoords[0] - (indicatorCoords[0] + 40)
                );
                const arrowSize = 8;

                leaderLinesGroup.append("polygon")
                    .attr("class", `leader-arrow leader-arrow-${country.id}`)
                    .attr("points", `
            ${countryCoords[0]},${countryCoords[1]}
            ${countryCoords[0] - arrowSize * Math.cos(angle - Math.PI / 6)},${countryCoords[1] - arrowSize * Math.sin(angle - Math.PI / 6)}
            ${countryCoords[0] - arrowSize * Math.cos(angle + Math.PI / 6)},${countryCoords[1] - arrowSize * Math.sin(angle + Math.PI / 6)}
          `)
                    .style("pointer-events", "none");
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
                    .attr("class", "country")
                    .attr("d", path)
                    .attr("data-idx", (d, i) => {
                        countryIndexMap[i] = d;
                        return i;
                    })
                    .on("mouseenter", function(event, d) {
                        const idx = d3.select(this).attr("data-idx");
                        let matchedCountry = null;
                        countries.forEach(c => {
                            if (c.id.toString() === idx || countries.indexOf(c) === parseInt(idx)) {
                                matchedCountry = c;
                            }
                        });

                        if (!matchedCountry) {
                            matchedCountry = countries[idx % countries.length];
                        }

                        if (matchedCountry) {
                            countriesGroup.selectAll(".country").classed("active", false);
                            d3.select(this).classed("active", true);

                            indicatorGroup.selectAll(".flag-indicator-bg").classed("active", false);
                            indicatorGroup.selectAll(`.flag-indicator-${matchedCountry.id} .flag-indicator-bg`)
                                .classed("active", true);

                            leaderLinesGroup.selectAll(".leader-line, .leader-arrow").classed("active", false);
                            leaderLinesGroup.selectAll(`.leader-line-${matchedCountry.id}`)
                                .classed("active", true);
                            leaderLinesGroup.selectAll(`.leader-arrow-${matchedCountry.id}`)
                                .classed("active", true);
                        }
                    })
                    .on("mouseleave", function() {
                        clearHighlight();
                    });

                updateLeaderLines();
                createIndicators();

                function createIndicators() {
                    indicatorGroup.selectAll(".flag-indicator-group").remove();

                    countries.forEach((country, idx) => {
                        const countryCoords = projection([country.long, country.lat]);
                        const indicatorCoords = [
                            countryCoords[0] + countryOffsets[country.id].x,
                            countryCoords[1] + countryOffsets[country.id].y
                        ];

                        const flagGroup = indicatorGroup.append("g")
                            .attr("class", `flag-indicator-group flag-indicator-${country.id} draggable-flag`)
                            .attr("transform", `translate(${indicatorCoords[0]},${indicatorCoords[1]})`)
                            .attr("pointer-events", "auto");

                        // Drag behavior
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

                        const bg = flagGroup.append("rect")
                            .attr("class", "flag-indicator-bg")
                            .attr("x", 0)
                            .attr("y", 0)
                            .attr("width", 80)
                            .attr("height", 50)
                            .attr("rx", 6);

                        flagGroup.append("image")
                            .attr("class", "flag-indicator-image")
                            .attr("xlink:href", country.flagUrl)
                            .attr("x", 5)
                            .attr("y", 5)
                            .attr("width", 70)
                            .attr("height", 40);

                        flagGroup.append("text")
                            .attr("class", "country-label")
                            .attr("x", 40)
                            .attr("y", 65)
                            .text(country.name);

                        // ⭐ TOOLTIP - NOW WORKING PROPERLY
                        const tooltipHTML = `
              <div class="tooltip-content">
                <img src="${country.flagUrl}" alt="${country.country}" class="tooltip-flag" style="width: 120px; height: 80px; border-radius: 6px; margin-bottom: 12px; object-fit: cover; border: 2px solid #ddd;">
                <div class="tooltip-country" style="font-weight: bold; font-size: 16px; margin-bottom: 8px; color: #4D96A8;">${country.fullName}</div>
                <div class="tooltip-phone" style="font-size: 13px; color: #0066cc; font-weight: 500; margin-bottom: 8px;">📞 ${country.phone}</div>
                <div class="tooltip-contacts" style="border-top: 1px solid #eee; padding-top: 8px; font-size: 12px;">
                  <div class="contact-item" style="margin: 4px 0; color: #666;"><strong>Email:</strong>salesfna@lamairatravel.com</div>
                </div>
              </div>
            `;

                        // Use tippy directly on the SVG rect and render the tooltip into document.body.
                        // Avoid inserting HTML nodes inside SVG groups (invalid in many browsers).
                        tippy(bg.node(), {
                            content: tooltipHTML,
                            allowHTML: true,
                            theme: 'light',
                            placement: 'right',
                            delay: [150, 100],
                            animation: 'scale-subtle',
                            arrow: true,
                            interactive: true,
                            maxWidth: 280,
                            appendTo: document.body,
                            popperOptions: {
                                modifiers: [{
                                        name: 'offset',
                                        options: {
                                            offset: [0, 12]
                                        }
                                    },
                                    {
                                        name: 'preventOverflow',
                                        options: {
                                            boundary: 'viewport',
                                            padding: 8
                                        }
                                    }
                                ]
                            },
                            onShow(instance) {
                                // Re-set content each time in case offsets or fields changed dynamically
                                instance.setContent(tooltipHTML);
                            }
                        });

                        flagGroup
                            .on("mouseenter", function() {
                                if (!draggedCountry) {
                                    d3.select(this).select(".flag-indicator-bg").classed("active", true);

                                    countriesGroup.selectAll(".country").classed("active", false);
                                    countriesGroup.selectAll(`.country[data-idx="${idx}"]`).classed("active", true);

                                    leaderLinesGroup.selectAll(".leader-line, .leader-arrow").classed("active", false);
                                    d3.selectAll(`.leader-line-${country.id}`).classed("active", true);
                                    d3.selectAll(`.leader-arrow-${country.id}`).classed("active", true);
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
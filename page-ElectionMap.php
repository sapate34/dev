<?php
/*
Template Name: Election Map Page
*/
	get_header();
	?>


<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lmap.json" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/electionData.json" type="text/javascript"></script>
    <link rel="stylesheet" href=https://kendo.cdn.telerik.com/themes/6.6.0/default/default-ocean-blue.css />

    <script src=https://code.jquery.com/jquery-3.4.1.min.js></script>
    <script src=https://kendo.cdn.telerik.com/2023.2.718/js/kendo.all.min.js></script>


<style>
	#map
	{
		width: 100%;
		height: 100%;
		min-height: 100%;
		min-width: 100%;
		display: block;
	}
	#mapcontainer {
	height: 50vh;
	width: 80%;
	margin-top: 4vh;
	margin-left: 10%;
	border: 1px solid #404040;
	margin-bottom: 4vh;
	}
	.leaflet-container {
			height: 100%;
			width: 100%;
			max-width: 100%;
			max-height: 100%;
			
	}
    .leaflet-tile-pane {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
    }
    .leaflet-popup-content-wrapper{
        padding: 2px;
        text-align: center;
        background: #E5E5E5 !important;
    }
    .leaflet-popup-content{
        margin: 20px 5px 5px 5px !important;
    }
    .disablelayer{
        cursor: default !important;
    }
    .leaflet-interactive{
        cursor: default !important;        
    }
    .progress { width:100%; height: 12px; background: #cdcdcd; border-radius: 20px; overflow: hidden;}
    .progress .percentBar {height:100%; background:#88abc6; transition: width ease-in-out .2s;}


    #GridContainer {
        height: 300px;
        width: 100%;
    }

    .k-grid .k-grid-header .k-table-th {
        background-color: lightblue;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 14px;
    }

    .k-grid td,
    .k-grid .k-table-td {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: normal;
        font-size: 14px;
    }

    .k-grid td:first-child,
    .k-grid .k-table-tr:first-child:first {
        border-left: 5px solid blue !important;
    }



	</style>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="page-header">
				<h1 class="page-title"><?php echo get_the_title(); ?></h1>
			</header>
			<div class="page-content">
					<?php the_content(); ?>
					<div id="mapcontainer">
						<div id="map" class="container border-solid-black" style="z-index:1"></div>
				</div>
				<section>
					<div id="chartcontainer">

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>City Of Houston Mayor</h2>
                                <div id="grid1" style="height:290px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">
                                <h2>City of Houston City Controller</h2>
                                <div id="grid2" style="height:290px;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>City of Houston Council Member District G</h2>
                                <div id="grid3" style="height:200px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">
                                <h2>City Of Houston Council Member, At large Position 1</h2>
                                <div id="grid4"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>City Of Houston Council Member, At large Position 2</h2>
                                <div id="grid5" style="height:290px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">
                                <h2>City Of Houston Council Member, At large Position 3</h2>
                                <div id="grid6" style="height:290px;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>City Of Houston Council Member, At large Position 4</h2>
                                <div id="grid7" style="height:200px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">
                                <h2>City Of Houston Council Member, At large Position 5</h2>
                                <div id="grid8" style="height:200px;"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>City of Houston Proposition A</h2>
                                <div id="grid9" style="height:120px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">
                                <h2>City of Houston Proposition B</h2>
                                <div id="grid10" style="height:120px;"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>Harris County Hospital District Proposition A</h2>
                                <div id="grid11" style="height:120px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 1</h2>
                                <div id="grid12" style="height:120px;"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 2</h2>
                                <div id="grid13" style="height:120px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 3</h2>
                                <div id="grid14" style="height:120px;"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 4</h2>
                                <div id="grid15" style="height:120px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 5</h2>
                                <div id="grid16" style="height:120px;"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 6</h2>
                                <div id="grid17" style="height:120px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 7</h2>
                                <div id="grid18" style="height:120px;"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 8</h2>
                                <div id="grid19" style="height:120px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 9</h2>
                                <div id="grid20" style="height:120px;"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 10</h2>
                                <div id="grid21" style="height:120px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 11</h2>
                                <div id="grid22" style="height:120px;"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 12</h2>
                                <div id="grid23" style="height:120px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 13</h2>
                                <div id="grid24" style="height:120px;"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h2>State of Texas Proposition 14</h2>
                                <div id="grid25" style="height:120px;"></div>
                            </div>
                            <br />
                            <div class="col-12 col-lg-6">

                            </div>
                        </div>

				</div>

				</section>
			</div>

		</main>
	</div>
	<script>
       var ElectionData = [];
        var dataSourceTemplate = {
            transport: {
                read: function (operation) {
                    var data = operation.data.data || [];
                    operation.success(data);
                },
            },
            schema: {
                model: {
                    id: "county",
                    fields: {
                        Image: { type: "string", title: "Image" },
                        Name: { type: "string", title: "Name" },
                        Total: { type: "number" },
                        PercentBar: { type: "text", title:"" },
                        Percent: { type: "text" },
                    },
                },
            },
        };


        var columns = [
            { field: "Image", title: "Image", encoded: false },
            { field: "Name", title: "Name" },
            { field: "Total", title: "Total Votes" },
            { field: "PercentBar", title: " ", encoded: false },
            { field: "Percent", title: "Percentage" },
        ]

        var columnswithoutimages = [

            { field: "Name", title: "Name" },
            { field: "Total", title: "Total Votes" },
            { field: "PercentBar", title: " ", encoded: false },
            { field: "Percent", title: "Percentage" },
        ]

        $(function () {
            var electionUrl = 'http://localhost/app/themes/hpmv4/js/electionData.json';
            var electionUrl1  = 'http://localhost/app/themes/hpmv4/js/electionData1.json';
           
            console.log('this is electionUrl',electionUrl); 
            // first time call
            fetchJson(electionUrl);

            // this will cal every 5 second you can change second changes the 5000 to 60000 for 10 min
            // setInterval(() => {
            //     console.log('Fetch second one ');
            //     fetchJson(electionUrl1);
            // }, 20000);
            
            function fetchJson(electionUrl) {
                $.ajax({
                    url: electionUrl,
                    type: "GET",
                    contentType: "application/json;charset=utf-8",
                    success: function (data) {
                       
                       
                        ElectionData = data;
                        const geojson = L.geoJson(stateData, {style, onEachFeature	}).addTo(map);
                        geojson.eachLayer(function(layer){
                            var result = checkIfElementPresentinElectionData(layer.feature.properties.Precinct);
                            let container = layer._path;
                            if(!result)
                            {
                                layer.removeEventListener('click');
                                layer.removeEventListener('mouseover');     
                                container.classList.add("disablelayer"); 
                                layer.setStyle({
                                weight: 1,
                                opacity: 1,
                                color: '#808080',
                                fillOpacity: 0.4,
                                fillColor: '#cccccc'
                            });
                            }
                            if(result){
                                layer.setStyle({
                                    fillColor: "#237bbd",
                                    weight: 1,
                                    opacity: 1,
                                    color: '#808080',
                                    fillOpacity: 0.4,
                                    clickable:false,
                                });  
                                container.classList.add("enablelayer");          
                            }
                        });
                    },
                    error: function (data) {
                        console.log("error " + data);
                    }
                });
              
            }

           


            function fetchCSV(csvURL, dataSource) {
                $.ajax({
                    url: csvURL,
                    type: "GET",
                    dataType: "text",
                    contentType: "application/json;charset=utf-8",
                    success: function (data) {
                        var countyData = CSVToJSON(data);
                        data2 = countyData.map((item) => {
                            //const name = item[0];
                            const name = item[0].replaceAll("\"", "");
                            const totalVote = item[4] || "";
                            const percent = item[5]?.split("%");
                            const imageName = name.replace(/\s+/g, '-').toLowerCase();
                            const percentValue = percent?.length ? Number(percent[0]) : 0;
                            const ImagePath = "http://localhost/assets/images/"+imageName+".png";

                            return {
                                Image: '<img src="'+ImagePath+'" alt="'+name+'" />',
                                Name: name,
                                Total: totalVote,
                                PercentBar: `<div class="progress"> <div class="percentBar" style="width:${percentValue}%"></div> </progress>`,
                                Percent: `${percentValue}%`,
                            };
                        });
                        dataSource.read({ data: data2 });
                    },
                    error: function (data) {
                        console.log("error " + data);
                    },
                });
            }

            function CSVToJSON(csvData) {
                return csvData
                    .slice(csvData.indexOf("\n") + 1)
                    .split("\n")
                    .map((rows) => rows.split(","))
                    .filter((row) => row.length > 1);
            }


            function StartInterval(csv, dataSource, fetchCSV) {
                this.intervalTime = 300000; //3000;
                this.csv = csv;
                this.dataSource = dataSource;
                this.interval = setInterval(function () {
                    fetchCSV(csv, dataSource);
                }, this.intervalTime);
                this.clearInterval = function () {
                    clearInterval(this.interval);
                };
                fetchCSV(csv, dataSource);
            }

            var dataSource1 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid1").kendoGrid({
                columns: columns,
                dataSource: dataSource1,
                scrollable:true
            });

            var dataSource2 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid2").kendoGrid({
                columns: columns,
                dataSource: dataSource2,
            });

            var dataSource3 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid3").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource3,
            });
            var dataSource4 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid4").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource4,
            });
            var dataSource5 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid5").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource5,
            });
            var dataSource6 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid6").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource6,
            });
            var dataSource7 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid7").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource7,
            });
            var dataSource8 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid8").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource8,
            });
            var dataSource9 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid9").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource9,
            });
            var dataSource10 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid10").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource10,
            });
            var dataSource11 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid11").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource11,
            });
            var dataSource12 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid12").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource12,
            });
            var dataSource13 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid13").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource13,
            });
            var dataSource14 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid14").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource14,
            });
            var dataSource15 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid15").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource15,
            });
            var dataSource16 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid16").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource16,
            });
            var dataSource17 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid17").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource17,
            });
            var dataSource18 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid18").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource18,
            });
            var dataSource19 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid19").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource19,
            });
            var dataSource20 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid20").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource20,
            });
            var dataSource21 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid21").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource21,
            });
            var dataSource22 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid22").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource22,
            });
            var dataSource23 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid23").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource23,
            });
            var dataSource24 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid24").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource24,
            });
            var dataSource25 = new kendo.data.DataSource(dataSourceTemplate);
            $("#grid25").kendoGrid({
                columns: columnswithoutimages,
                dataSource: dataSource25,
            });

            const interval1 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6392-city-of-houston-mayor.csv', dataSource1,fetchCSV);
            // interval1.clearInterval();
            const interval2 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6398-city-of-houston-city-controller.csv', dataSource2,fetchCSV);
            //  interval2.clearInterval();
            const interval3 = new StartInterval('../../assets/county.csv', dataSource3,fetchCSV, false); //'https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6414-city-of-houston-council-member-district-g.csv'
            //  interval3.clearInterval();
            const interval4 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6393-city-of-houston-council-member-at-large-position-1.csv', dataSource4,fetchCSV);
            //  interval4.clearInterval();
            const interval5 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6394-city-of-houston-council-member-at-large-position-2.csv', dataSource5,fetchCSV);
            //  interval5.clearInterval();
            const interval6 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6395-city-of-houston-council-member-at-large-position-3.csv', dataSource6,fetchCSV);
            //  interval6.clearInterval();
            const interval7 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6396-city-of-houston-council-member-at-large-position-4.csv', dataSource7,fetchCSV);
            //  interval7.clearInterval();
            const interval8 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6397-city-of-houston-council-member-at-large-position-5.csv', dataSource8,fetchCSV);
            //  interval8.clearInterval();
            const interval9 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6533-city-of-houston-proposition-a.csv', dataSource9,fetchCSV);
            //  interval9.clearInterval();
            const interval10 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6534-city-of-houston-proposition-b.csv', dataSource10,fetchCSV);
            //  interval10.clearInterval();
            const interval11 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6506-harris-county-hospital-district-proposition-a.csv', dataSource11,fetchCSV);
            //  interval11.clearInterval();
            const interval12 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6375-state-of-texas-proposition-1.csv', dataSource12,fetchCSV);
            // interval12.clearInterval();
            const interval13 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6508-state-of-texas-proposition-2.csv', dataSource13,fetchCSV);
            // interval13.clearInterval();
            const interval14 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6511-state-of-texas-proposition-3.csv', dataSource14,fetchCSV);
            // interval14.clearInterval();
            const interval15 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6515-state-of-texas-proposition-4.csv', dataSource15,fetchCSV);
            // interval15.clearInterval();
            const interval16 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6523-state-of-texas-proposition-5.csv', dataSource16,fetchCSV);
            // interval16.clearInterval();
            const interval17 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6524-state-of-texas-proposition-6.csv', dataSource17,fetchCSV);
            // interval17.clearInterval();
            const interval18 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6525-state-of-texas-proposition-7.csv', dataSource18,fetchCSV);
            // interval18.clearInterval();
            const interval19 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6526-state-of-texas-proposition-8.csv', dataSource19,fetchCSV);
            // interval19.clearInterval();
            const interval20 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6527-state-of-texas-proposition-9.csv', dataSource20,fetchCSV);
            // interval20.clearInterval();
            const interval21 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6528-state-of-texas-proposition-10.csv', dataSource21,fetchCSV);
            // interval21.clearInterval();
            const interval22 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6529-state-of-texas-proposition-11.csv', dataSource22,fetchCSV);
            // interval22.clearInterval();
            const interval23 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6530-state-of-texas-proposition-12.csv', dataSource23,fetchCSV);
            // interval23.clearInterval();
            const interval24 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6531-state-of-texas-proposition-13.csv', dataSource24,fetchCSV);
            // interval24.clearInterval();
            const interval25 = new StartInterval('https://hpmwebv2.s3-us-west-2.amazonaws.com/projects/elections/2023/harris/november-general/6532-state-of-texas-proposition-14.csv', dataSource25,fetchCSV);
            // interval25.clearInterval();

        });


	const map = L.map('map').setView([29.803240, -95.358566], 10);
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

    //console.log(ElectionData);
	/*var bounds = L.latLngBounds([[29.523624, -95.78808690000001], [30.1107319, -95.01449599999999]]);
    map.setMaxBounds(bounds);
    map.on('drag', function() {
        map.panInsideBounds(bounds, { animate: false });
    });*/
   
 	function onEachFeature(feature, layer) {
        if (feature.properties.Precinct) {
            layer.bindPopup(feature.properties.Precinct);
        }         
        layer.on({
            mouseover: openPopupInfo,
            mouseout: resetHighlight,
        });
	}

    function openPopupInfo(e) {
        var PopupContent = null;
        var layer = e.target;
        var props = layer.feature.properties;
        PopupContent = GetElectionResultfromJSONVariable(props.Precinct);
        var result = checkIfElementPresentinElectionData(layer.feature.properties.Precinct);
        if(result)
        {
            layer.setStyle({
                weight: 1,
                fillColor: '#222054',
                fillOpacity: 1
            });
        }        
        if(PopupContent !== "" && PopupContent !== null)
        {
            layer.bindPopup(PopupContent).openPopup();
        }
    }
    
    function GetElectionResultfromJSONVariable(pID)
    {
        var htmlcontentString = null;
        let PrecinctID = pID;      
        var htmlStr = "";
        var clickedArray = new Array();
        for(let i = 0, len = ElectionData.length; i < len; i++)
        {
            if(PrecinctID == ElectionData[i].id) 
            {
               clickedArray = ElectionData[i];
            }
        }
        var candidatesArray = clickedArray['Candidates'];
        var TotalVotes = clickedArray['TotalVotes'];
        if(TotalVotes>0)
        {
            var TotalVotesperPrecint = 0;
            for(var j=0; j<candidatesArray.length; j++)
            {
                TotalVotesperPrecint = (candidatesArray[j].Votes/TotalVotes)*100;
                htmlStr += "<div style='padding: 2px; font-size: 12px; font-weight: bold; color: #fff;background-color: #222054;'>"+candidatesArray[j].Candidatename+": <span>"+TotalVotesperPrecint.toFixed(2)+"%</span></div>";
            }     
            htmlcontentString = '<div class="iw-content" style="background-color:#237bbd; border-radius:8px;">' + '<div class="iw-subTitle" style="height: 22px;background: #237bbd;font-weight: bold; margin: 10px;color: #fff;font-size: 14px;padding-top: 5px;">2019 Election Results </div><div style="padding: 2px;font-size: 12px;font-weight: bold;color: #fff;background-color: #222054;""><span">Precinct: '+PrecinctID+'</span></div>' + htmlStr+'<div style="padding: 2px;font-size: 12px;font-weight: bold;color: #fff;background-color: #222054;"">&nbsp;</div></div>';
        }
        return htmlcontentString;
    }
    
    function resetHighlight(e) 
    {
        var layer = e.target;
        geojson.resetStyle(e.target);
        var result = checkIfElementPresentinElectionData(layer.feature.properties.Precinct);
        if(result)
        {
            layer.setStyle({
                weight: 1,
                opacity: 1,
                color: '#808080',
                fillOpacity: 0.4,
                fillColor: '#237bbd'
            });
        }
        layer.closePopup();      
    }

    function style(feature) {
		return {
			weight: 1,
			opacity: 1,
			color: '#808080',
			fillOpacity: 0.2,
			fillColor: '#cccccc'
		};
	}

   

    function checkIfElementPresentinElectionData(element) {
        for(let i = 0, len = ElectionData.length; i < len; i++){
            if(ElectionData[i].id == element && ElectionData[i].TotalVotes>0)
            {
                return true;
            }
        }
        return false;
    }
    
       
</script>

<?php get_footer(); ?>
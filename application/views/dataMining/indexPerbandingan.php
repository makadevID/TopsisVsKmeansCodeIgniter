<div class="widget-content">
	<div class="table-responsive">

		<table id="example" class="table table-striped table-bordered"><h1>Data Mining dengan K-Means</h1>
			<thead>
			<tr>
				<th rowspan="2"><p class="text-center">No Pendaftaran</p></th>
				<th rowspan="2"><p class="text-center">Nama Calon Pendaftar Mahasiswa</p></th>
				<th colspan="2"><p class="text-center">Hasil</p></th>
				<th colspan="2"><p class="text-center">Acces Time</p></th>

			</tr>
			<tr>
				<th><p class="text-center">Topsis</p></th>
				<th><p class="text-center">K-Means</p></th>
				<th><p class="text-center">Topsis</p></th>
				<th><p class="text-center">K-Means</p></th>
			</tr>
			<?php foreach($data_k_means_topsis as $dp){
			?>
			</thead>
			<tr>
				<td><?php echo $dp->no_pendaftaran; ?></td>
				<td><?php echo $dp->nama_calon_mahasiswa; ?></td>
				<td><?php

					if (($dp->nilai)<='0.7') {
						echo "tidak berprestasi";
					} else if (($dp->nilai)>='0.7') {
						echo "berprestasi";
					}

					?></td>



				<td><?php

					if (($dp->kelompok)==="2") {
						echo "tidak berprestasi";
					} else if (($dp->kelompok)==="1") {
						echo "berprestasi";
					}

					?></td>
				<td><?php echo $dp->topsisAccesTime." detik"; ?></td>

				<td><?php echo $dp->kMeansAccesTime." detik"; ?></td>


			</tr>
			<?php
			}
			?>

		</table>

		<p class="text-danger">
			<?php
			if ($dp->topsisAccesTime<=$dp->kMeansAccesTime) {
				echo "Dari hasil di atas dapat di tarik kesimpulan bahwa topsis lebih cepat dari k-means dengan perolehan waktu ".$dp->topsisAccesTime." detik untuk acces time k-means sendiri memiliki waktu ".$dp->kMeansAccesTime." detik";
			}  else if ($dp->topsisAccesTime>=$dp->kMeansAccesTime) {
				echo "Dari hasil di atas dapat di tarik kesimpulan bahwa k-means lebih cepat dari topsis dengan perolehan waktu ".$dp->kMeansAccesTime." detik untuk acces time topsis sendiri memiliki waktu ".$dp->topsisAccesTime." detik";
			}
			?>
		</p>
	</div>
</div>


<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/fushionChart/fusioncharts.js"></script>

<?php
class FusionCharts {

	private $constructorOptions = array();
	private $constructorTemplate = '
        <script type="text/javascript">
            FusionCharts.ready(function () {
                new FusionCharts(__constructorOptions__);
            });
        </script>';
	private $renderTemplate = '
        <script type="text/javascript">
            FusionCharts.ready(function () {
                FusionCharts("__chartId__").render();
            });
        </script>
        ';
	// constructor
	function __construct($type, $id, $width = 400, $height = 300, $renderAt, $dataFormat, $dataSource) {
		isset($type) ? $this->constructorOptions['type'] = $type : '';
		isset($id) ? $this->constructorOptions['id'] = $id : 'php-fc-'.time();
		isset($width) ? $this->constructorOptions['width'] = $width : '';
		isset($height) ? $this->constructorOptions['height'] = $height : '';
		isset($renderAt) ? $this->constructorOptions['renderAt'] = $renderAt : '';
		isset($dataFormat) ? $this->constructorOptions['dataFormat'] = $dataFormat : '';
		isset($dataSource) ? $this->constructorOptions['dataSource'] = $dataSource : '';
		$tempArray = array();
		foreach($this->constructorOptions as $key => $value) {
			if ($key === 'dataSource') {
				$tempArray['dataSource'] = '__dataSource__';
			} else {
				$tempArray[$key] = $value;
			}
		}

		$jsonEncodedOptions = json_encode($tempArray);

		if ($dataFormat === 'json') {
			$jsonEncodedOptions = preg_replace('/\"__dataSource__\"/', $this->constructorOptions['dataSource'], $jsonEncodedOptions);
		} elseif ($dataFormat === 'xml') {
			$jsonEncodedOptions = preg_replace('/\"__dataSource__\"/', '\'__dataSource__\'', $jsonEncodedOptions);
			$jsonEncodedOptions = preg_replace('/__dataSource__/', $this->constructorOptions['dataSource'], $jsonEncodedOptions);
		} elseif ($dataFormat === 'xmlurl') {
			$jsonEncodedOptions = preg_replace('/__dataSource__/', $this->constructorOptions['dataSource'], $jsonEncodedOptions);
		} elseif ($dataFormat === 'jsonurl') {
			$jsonEncodedOptions = preg_replace('/__dataSource__/', $this->constructorOptions['dataSource'], $jsonEncodedOptions);
		}
		$newChartHTML = preg_replace('/__constructorOptions__/', $jsonEncodedOptions, $this->constructorTemplate);
		echo $newChartHTML;
	}
	// render the chart created
	// It prints a script and calls the FusionCharts javascript render method of created chart
	function render() {
		$renderHTML = preg_replace('/__chartId__/', $this->constructorOptions['id'], $this->renderTemplate);
		echo $renderHTML;
	}
}
?>




<?php
/*
    Create a `area2DChart` chart object using the FusionCharts PHP class constructor. Syntax for the constructor is `FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "data format", "data source")`. To load data from a JSON string, `json` is passed as the value for the data format parameter of the constructor. The actual JSON data for the chart is passed as a string to the constructor.
*/
$area2DChart = new FusionCharts("Area2D", "myFirstChart" , 600, 300, "chart-1", "json",
	'{
                                                "chart": {
                                                    "caption": "K-Means vs TOPSIS",
                                                    "subCaption": "acces time",
                                                    "xAxisName": "metode",
                                                    "yAxisName": "Acces Time (In mili second)",
                                                    "numberPrefix": "detik",
                                                    "paletteColors": "#0075c2",
                                                    "bgColor": "#ffffff",
                                                    "showBorder": "0",
                                                    "showCanvasBorder": "0",
                                                    "plotBorderAlpha": "10",
                                                    "usePlotGradientColor": "0",
                                                    "plotFillAlpha": "50",
                                                    "showXAxisLine": "1",
                                                    "axisLineAlpha": "25",
                                                    "divLineAlpha": "10",
                                                    "showValues": "1",
                                                    "showAlternateHGridColor": "0",
                                                    "captionFontSize": " 14",
                                                    "subcaptionFontSize": "14",
                                                    "subcaptionFontBold": "0",
                                                    "toolTipColor": "#ffffff",
                                                    "toolTipBorderThickness": "0",
                                                    "toolTipBgColor": "#000000",
                                                    " toolTipBgAlpha": "80",
                                                    "toolTipBorderRadius": "2",
                                                    "toolTipPadding": "5"
                                                },
                                                "data": [{
                                                    "label": "",
                                                    " value": ""
                                                }, {
                                                    "label": "k-means",
                                                    "value": '.$dp->topsisAccesTime.'
                                                }, {
                                                    "label": "topsis",
                                                    "value": '.$dp->kMeansAccesTime.'
                                                }]
                                            }'
);

// Render the chart
$area2DChart->render();

?>
<div id="chart-1">Fusion Charts will render here</div>







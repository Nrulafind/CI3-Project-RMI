<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<div class="container text-left">
	<h2>List Assessment </h2>
</div>

<div class="container">
	<table id="myTable" class="table hover" style="font-size: 10px; margin-top: 5px;">
		<thead style="background-color: #78909C; color: #ffffff !important;">
			<tr>
				<th>Id</th>
				<th>Tanggal</th>
				<th>Status</th>
				<th>Perusahaan</th>
				<th>Kode Laporan</th>
				<th>Skor</th>
				<th>Dibuat Oleh</th>
			</tr>
		</thead>
	</table>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" media="all" type="text/css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>

<script>
	var data = <?php echo json_encode($assessment); ?>;
  $(document).ready( function () {
    var table = $('#myTable').DataTable({
      data: data,
      columns : [
				{"data":"assessment_id"},
        {"data":"created_at"},
        {"data":"status"},
        {"data":"corporate_name"},
        {"data":"code_laporan"},
        {"data":"skor"},
        {"data":"user_name"},
      ],
      order: [[0,'desc']],
      dom: '<"container-fluid"<"row"<"col"B><"col"f>>>rtip',
			columnDefs: [
				{
					render: (data, type, row) => {
						switch (parseInt(data)) {
							case 1: return '<span style="color: grey;"><b>Draft</b></span>'; break;
							case 2: return '<span style="color: purple;"><b>Request for Approval</b></span>'; break;
							case 3: return '<span style="color: green;"><b>Approved</b></span>'; break;
							case 4: return `<span style="color: red;"><b>Rejected</b></span>`; break;
							default: return data; break;
						}
					},targets: 2
				}
			]
    });
		$('#myTable tbody').on('click','tr', function () {
			let d = table.row( this ).data();
			opens(d);
		});
  });

	function opens(x){
		if(typeof(x)!=="undefined"){
			window.open(`cluster_umum?assessment_id=${x["assessment_id"]}`, '_blank');
		}else{
			window.open(`cluster_umum`, '_blank');
		}
	}
</script>
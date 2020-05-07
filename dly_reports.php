<?php include('header.php');?>

<body>
<div>
<nav class="navbar navbar-default">

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h1>Reports<span class="caret"></span></h1></a>
          <ul class="dropdown-menu">
            <li><a href="dly_reports.php">Daily Reports</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="wkly_reports.php">Weekly Reports</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="mnthly_reports.php">Monthly_reports</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="qtly_reports.php">Quaterly_reports</a>
			<li role="separator" class="divider"></li>
			<li><a href="aly_reports.php">Annual_reports</a>
			</li>
          </ul></div></div>
<h1 class="page-header text-center">DAILY REPORTS</h1>
 

<div class="container">
<div id="tbl">

<table class="table table-striped table-bordered">
		<thead>
			<th>DATE</th>
			<th>TOTAL NUMBER OF CUSTOMERS</th>
			<th>TOTAL</th>
<?php 
				$sql = "select DATE(date_purchase),count(customer),sum(total) from purchase group BY DATE(date_purchase)";  		
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['DATE(date_purchase)'])); ?></td>
						<td><?php echo $row['count(customer)']; ?></td>
						<td class="text-right">ksh. <?php echo number_format($row['sum(total)'], 2); ?></td>
						
					
						</tr>
					<?php
				}
			?>
		</tbody>
	</table>
	</div>

<button class="btn btn-primary hidden-print" onclick="printDiv('tbl')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> print</button> 
	                <button type="submit" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span><a href="index.php">Close</a></button>
</div>
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</body>
</html>
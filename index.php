<!DOCTYPE html>
<head>
<title>PHP Task Day 1</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style.css" type="text/css" rel="stylesheet">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- Lobster font -->
<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,latin-ext" rel="stylesheet">
</head>
<body>
<div class="container"> <!-- header container -->
	<div class="header row">
		<div class="logo col-xs-12 col-md-6"></div>
		<div class="text col-xs-12 col-md-6">
			<h1>SoftGroup</h1>
			<p>���� PHP, ���� 1</p>
		</div>
	</div>
</div> <!-- end header container -->
<div class="container"> <!-- main container -->
	<div class="row">
	<div id="accordion" class="col-sm-12 panel-group">
		<div class="col-xs-12 panel panel-default">
			<div class="panel-heading">
				<center>
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">1. �������� ��� ���������� �� ����� � ������� �� � ���� ��������. </a>
					</h4>
				</center>
			</div>
			<div class="panel-collapse collapse in" id="collapse1">
				<div class="panel-body">
					<?php
						//1 task
						$start = microtime(true);
						echo "<pre>";
						echo readfile('FC.txt');
						echo "</pre>";
						echo '</br>����� ���������� �������: '.round(microtime(true) - $start,4).' ���.</br></br>';
					?>
				</div>
			</div>
		</div>
		<div class="col-xs-12 panel panel-default">
			<div class="panel-heading">
				<center>
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">2. �������� ����� ��� ���������� ������ ������ � ���� � ���������� �� �������.</a>
					</h4>
				</center>
			</div>
			<div class="panel-collapse collapse" id="collapse2">
				<div class="panel-body">
					<form method="post" name="qw0" id="qw0">
					<label>������ ������� ��� ����
					<input type="text" name="info" value=""></label>
					<p>�������: Dinamo Kiev, Ukraine, 1927, Surkis.I, 90000000$, 58</p>
					<input type="submit" value="������">
					</form>
					<?php
						//2 task
						if ($_POST['info']){
							$fp = fopen('FC.txt', 'a+');
							fwrite($fp, $_POST['info']. PHP_EOL);
							fclose($fp);
							echo "<pre>";
							echo readfile('FC.txt');
							echo "</pre>";
							echo '</br>����� ���������� �������: '.round(microtime(true) - $start,4).' ���.</br></br>';
						$_POST['info'] = false;
						}
					?>
				</div>
			</div>
		</div>
		<div class="col-xs-12 panel panel-default">
			<div class="panel-heading">
				<center>
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">3. ������� �� ����� ����������� �� ���������� �������.</a>
					</h4>
				</center>
			</div>
			<div class="panel-collapse collapse" id="collapse3">
				<div class="panel-body">
					<?php
						//3 task
						$str=array();
						$str=file('FC.txt');
						sort($str, SORT_NUMERIC);
						echo "<pre>";
						print_r ($str);
						echo "</pre>";
						echo '</br>����� ���������� �������: '.round(microtime(true) - $start,4).' ���.</br></br>';
					?>
				</div>
			</div>
		</div>
		<div class="col-xs-12 panel panel-default">
			<div class="panel-heading">
				<center>
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">4. ��������� ������� ������ �����, �� ������������� ������ ����� ���, �� ������������ � ����.</a>
					</h4>
				</center>
			</div>
			<div class="panel-collapse collapse" id="collapse4">
				<div class="panel-body">
					<?php
						//4 task
						$str=array();
						$str=file('FC.txt');
						$c = 0;
						for($i=0; $i<count($str); $i++){
							$pieces = explode(", ", $str[$i]);
							$e = $pieces[1];
							if ($e == "Ukraine") {
								$balance += $pieces[4];
								$c++;
							}
						}
						$sbalance = $balance / $c;
						echo "������� ������ ����� � ������ ������: " . $sbalance . "$";
						echo '</br>����� ���������� �������: '.round(microtime(true) - $start,4).' ���.</br></br>';
					?>
				</div>
			</div>
		</div>
		<div class="col-xs-12 panel panel-default">
			<div class="panel-heading">
				<center>
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">5. � ����� ��������� ���� �������. ������� � ���� �������� �� �����, ����� ���� ������ ����� �������.</a>
					</h4>
				</center>
			</div>
			<div class="panel-collapse collapse" id="collapse5">
				<div class="panel-body">
					<form method="post" name="qw1" id="qw1">
					<label>������ ������� ��� ������ � ���� �������
					<input type="text" name="info2" value=""></label>
					<p>������� �����! ������� �������������</p>
					<input type="submit" value="������">
					</form>
					<?php
						//5 task
						if ($_POST['info2']){
						for($i=0; $i<count($str); $i++){
							$pieces = explode(", ", $str[$i]);
							$e = $pieces[0];
							if (strpbrk($e, $_POST['info2'])) {
								$club .= $pieces[0] . ", ";
							}
						}
						if ($club == ""){
							echo "</br>������ ������� �� ������������ � ����� ���� �����";
						}
						else {
						echo $club;}
						echo '</br>����� ���������� �������: '.round(microtime(true) - $start,4).' ���.</br></br>';
						$_POST['info2'] = false;
						}
					?>
				</div>
			</div>
		</div>
	  </div>
	</div>
</div> <!-- end main container -->
<div class="container"> <!-- footer container -->
	<div class="footer row">
		<div class="col-xs-12">
			<center>
				<h4>�����: ������ ��� �</h4>
				<p>2016</p>
			</center>
		</div>
	</div>
</div> <!-- end footer container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
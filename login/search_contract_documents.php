<?php 



    define('TITLE',"Dashboard - Eternity Service");
    include 'includes/header2.php';
  
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?>

<?php


error_reporting(0);
include("config.php");
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Eternity Services</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css">


    <link rel="stylesheet" href="datepicker/css/bootstrap-datepicker.min.css">


    <style type="text/css" class="init">

        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            visibility: hidden;
        }

        #search_wrapper{
            width: 98%;
        }

        table.dataTable > tbody > tr.child span.dtr-title{
            display: none;
        }
		.content #search{
			text-align: left;
			width: 90%;
		}
		.content{
			width: 95%;
			border-left-style: groove;
			border-top: groove;
			padding: 5px;
		}
		.content td,th{
			border-bottom: groove 0.5px;
			border-bottom-color: #979797;
			
			padding-top:5px;
		}
		
    </style>

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap.min.js"></script>



    <script src="datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" class="init">


        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#search thead th').each( function () {
                var title = $(this).text();
                $(this).html( ''+title+' <br><input type="text" class="filter" placeholder="Search '+title+'" />' );
            } );

            // DataTable
            var table = $('#search').DataTable({
                responsive: true,


                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;
                        $( 'input', this.header() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                }
            });

            $('.filter').on('click', function(e){
                e.stopPropagation();
            });

            new $.fn.dataTable.FixedHeader( table );
            $("#search th.datepicker input").datepicker({
                format: "yyyy-mm-dd",

            });
        } );


    </script>
</head>
	
<body>
	
	<!--top half fixed logo, name and search-->
    <link href="dash.css" rel="stylesheet" type="text/css">
	<div class="Topfix"> 
		<a href="Dash.php" alt="dash"><img src="../Images/logo ES.png" alt="logo"></a>
       
	</div>
	<!--bottom half -->
	<div class="bHalf">
		<!--top half fixed Naveigation-->
			<div class="lFix">
			
            <div class="llFix">
            <button id="profile" title="profile">
                <a href="profile.php" alt="profile">
                <img src=<?php echo "./uploads/".$_SESSION['userImg']; ?> alt="profile img">
                </a><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Profile</p></span>
            </button>
            </div>
                             
            
            
                        
			<button id="home" title="dashboard / home">
                <a href="Dash.php" alt="dash">
                <img src="../Images/home button.png" alt=" home img"><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Dash</p></span>
                </a>
            </button>
            
			<button id="upload" title="upload"><a href="projects.php"><img src="../Images/upload button.png" alt="upload img"></a><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Upload</p></span></button>
            
			<button id="help" title="help"><a href="help.php"><img src="../Images/help button.png" alt="help img"></a><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Help</p></span></button>
            
              
            <button id="logout" title="logout">
                <a href="includes/logout.inc.php" class="button login"><img src="../Images/logOut.png" alt="logOut"></a>
            <span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Logout</p></span>
            </button>
            
		</div>
 
        
        <!--Dashboard half and displayed content-->
		<div class="rhlaf" >
                
            
			<div class="content">
                
				<a href="search.php"><button style="height: 30px; width: 100px; margin-top: 5px;font-size: 20px; margin-bottom: 10px; background-color: #2FC6E6; border-radius: 8px;">back</button></a>
              
                 <h1>Search for Contract Documents:</h1>
                <hr>
                
            <table id="search" class="table table-striped table-bordered display  responsive nowrap" style="width: 100%">
                <thead>
                <tr>
      
                    <th><strong>Contract Id</strong></td>
                     <th><strong>Name of contract</strong></td>
                    <th><strong>Customer Name</strong></td>
                    <th><strong>Status</strong></td>
                    <th class="datepicker"><strong>From date</strong></td>
                    <th class="datepicker"><strong>To date</strong></td>         
                    <th><strong>Details</strong></td>
                   <th><strong>Construction File</strong></td>
<th style="visibility: hidden;"><strong>Delete</strong></td>
    
                </tr>
                </thead>
                <tbody>
                <?php

                $sql = "SELECT * FROM ".$SETTINGS["data_table3"];

                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            
                            <td><?php echo $row["contractId"]; ?></td>
                            <td><?php echo $row["nameOfContract"]; ?></td>
                            <td><?php echo $row["customerName"]; ?></td>
                            <td><?php echo $row["status"]; ?></td>
                            <td><?php echo $row["startDate"]; ?></td>
                            <td><?php echo $row["endDate"]; ?></td>
                             <td><?php echo $row["details"]; ?></td>
                             <td>
                                 <a href=<?php echo  str_replace(' ', '%20', "../contractuploads/".trim($row['contractFile'])) ?>>
                                 
                                     <img src="view.png" alt="Italian Trulli" style="width:40px;height:40px;"><br>
                                     <?php echo $row["contractFile"]; ?>
                           
                                         
                                         </a>
                            </td>
							<td>
								<form method="post" action="contractDelete.php">
								<button type="submit" style="width: 100px; height: 25px; color: #FFFFFF; font-size: 20px; border-radius: 6px; background: #9A3FBC;">Delete</button>

								<input style="width:60px; margin:" type="hidden" name ="hidden" value="<?php echo $row['id_key'];?>">

								</form>
							</td>  
                            
                            
                            
                 
							
                        </tr>
                 
                    
                    
                    <?php }
                } else {
                ?>
                <tr><td colspan="5">No results found.</td>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                           <th><strong>Contract Id</strong></td>
                     <th><strong>Name of contract</strong></td>
                                <th><strong>Customer Name</strong></td>
    <th><strong>Status</strong></td>

                    <th class="datepicker"><strong>From date</strong></td>
                    <th class="datepicker"><strong>To date</strong></td>         
<th><strong>Details</strong></td>
                   <th><strong>Construction File</strong></td>
<th style="visibility: hidden;"><strong>Delete</strong></td>
                </tr>
                </tfoot>
            </table>
                
              
                
                
			</div>
		</div>
	</div>
    

</body>
</html>
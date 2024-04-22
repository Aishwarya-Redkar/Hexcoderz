<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coproppeled | Invoices</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<div id="wrapper">

   <?php include 'nav.php';?>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom">
                <div class="form-group">
                    <input type="text" placeholder="Hey,There..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Coproppeled</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.php" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.php" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.php" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>With selected:
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.php">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.php">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.php">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.php">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.php">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>View Appointment</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.php">Home</a>
                        </li>
                        
                        <li class="active">
                            <strong>View Appointment</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="row">
                <div class="col-lg-3">
                        <div class="widget-head-color-box navy-bg p-lg text-center">
                            <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                Lacerda Care
                            </h2>
                            <small class="font-bold no-margins">
                                Verna, Goa 
                            </small>

                            </div>
                            <div>
                                
                            </div>
                        </div>
                        <div class="widget-text-box">
                            
                             <!--<table class="table table-striped">
                            <thead>
                            
                            </thead>
                            <tbody>
                            <tr>
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td>Dental</td>

                            </tr>
                            <tr>
                                <td>Doctor</td>
                                <td>Dr. Alzira</td>

                            </tr>
                            <tr>
                                <td>Customer Name</td>
                                <td>Ashley</td>

                            </tr>
                            
                            <tr>
                                <td>Service</td>
                                <td>Root Canal</td>

                            </tr>
                            <tr>
                                <td>App. Date</td>
                                <td>03-03-2017</td>
                            </tr>
                             <tr>
                                <td>App. Time</td>
                                <td>10:00 AM</td>
                            </tr>
                            <tr>
                                <td>Cost</td>
                                <td>1000/-</td>
                                
                            </tr>
                         

                            </tbody>
                        </table>-->
                        </div>
                </div>
                
                <div class="col-lg-9">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-0">Job Sheet</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-1">Prescription</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2">Invoice</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-3">Lab Sheet</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-4">Concent Form</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-5">Medical Questionaire</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-6">Referals</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-7">Doctor Documents</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-8">Quotation</a></li>
                        </ul>
                        
                        <div class="tab-content">
                           
                            <div id="tab-0" class="tab-pane active">
                                <div class="panel-body">
                                    <strong>Job Sheet</strong><br><small><strong>Job done on 27th April 2017</strong></small>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of
                                        existence in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at
                                        the present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>

                            <div id="tab-1" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of
                                        existence in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at
                                        the present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    <div class="wrapper wrapper-content animated fadeInRight">
                                 <div class="ibox-content p-xl">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>From:</h5>
                                    <address>
                                        <strong>Lacerda Care.</strong><br>
                                        Verna, 403081<br>
                                        Goa<br>
                                        <abbr title="Phone">P:</abbr> (+91) 7350943644
                                    </address>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <h4>Invoice No.</h4>
                                    <h4 class="text-navy">INV-000567F7-00</h4>
                                    <span>To:</span>
                                    <address>
                                        <strong>Ashley D'souza.</strong><br>
                                        Baina Church Road<br>
                                        Vasco, Goa<br>
                                        <abbr title="Phone">P:</abbr> (+91) 7584965872
                                    </address>
                                    <p>
                                        <span><strong>Invoice Date:</strong> April 25, 2017</span><br/>

                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>Job List</th>

                                        <th>Unit Price</th>
                                        <th>Tax</th>
                                        <th>Total Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><div><strong>Root Canal</strong></div>
                                            <small>Root canal information of work done.</small></td>

                                        <td>Rs. 2600.00</td>
                                        <td>Rs. 500.98</td>
                                        <td>Rs. 3100,98</td>
                                    </tr>
                                    

                                    </tbody>
                                </table>
                            </div><!-- /table-responsive -->

                            <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>Sub Total :</strong></td>
                                    <td>Rs.1026.00</td>
                                </tr>
                                <tr>
                                    <td><strong>TAX :</strong></td>
                                    <td>Rs.235.98</td>
                                </tr>
                                <tr>
                                    <td><strong>TOTAL :</strong></td>
                                    <td>Rs.1261.98</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="text-right">
                                <button class="btn btn-primary"><i class="fa fa-dollar"></i> Make A Payment</button>
                            </div>

                            <div class="well m-t"><strong>Comments</strong>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            </div>

                        </div>
                </div>
                 </div>
                            </div>

                            <div id="tab-3" class="tab-pane">
                                <div class="panel-body">
                                    <strong>No lab forms  found for this Appointment</strong>
                                </div>
                            </div>

                            <div id="tab-4" class="tab-pane">
                                <div class="panel-body">
                                    <strong>No concent form found for this Appointment</strong>
                                </div>
                            </div>

                            <div id="tab-5" class="tab-pane">
                                <div class="panel-body">
                                    <strong>No Medical Questionaire found for this appointment</strong>
                                </div>
                            </div>

                            <div id="tab-6" class="tab-pane">
                                <div class="panel-body">
                                     <table class="table table-striped">
                            <thead>
                            
                            </thead>
                            <tbody>
                            <tr>
                            </tr>
                            <tr colspan="2">
                                <td><h1>Reffered to<h1></td>
                              

                            </tr>
                            <tr>
                                <td><strong>Doctor<strong></td>
                                <td>Dr. Ashley Alexsius</td>

                            </tr>
                            <tr>
                                <td><strong>Contact No.<strong></td>
                                <td>+91 7350943644</td>

                            </tr>

                            <tr>
                                <td><strong>Email<strong></td>
                                <td>ashley.d39souza@gmail.com</td>

                            </tr>

                            <tr>
                                <td><strong>Clinic Name<strong></td>
                                <td>Sweet tooth</td>

                            </tr>

                            <tr>
                                <td><strong>Clinic Address<strong></td>
                                <td>Vasco Da Gama, Goa</td>

                            </tr>

                            <tr colspan="2">
                                <td><h1>for<h1></td>
                              
                            </tr>

                            <tr>
                                <td><strong>Service<strong></td>
                                <td>Something </td>

                            </tr>

                           
                         

                            </tbody>
                        </table>
                                </div>
                            </div>

                            <div id="tab-7" class="tab-pane">
                                <div class="panel-body">
                                     <strong>No documents found for this appointment</strong>
                                </div>
                            </div>

                            <div id="tab-8" class="tab-pane">
                                <div class="panel-body">
                                     <strong>No quoatations were found for this appointment</strong>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
                
                </div>
            
            </div>
      
        </div>
        </div>
        <div class="modal inmodal" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-edit-o modal-icon"></i>
                                            <h4 class="modal-title">Ashley Dsouza</h4>
                                            <small>Organization Name : Indivisual</small>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                            <thead>
                            
                            </thead>
                            <tbody>
                            <tr>
                            </tr>
                            
                            <tr>
                                <td>Customer Name</td>
                                <td><input type="text" class="form-control"  value="Ashley Dsouza"></td>
                            </tr>
                            <tr>
                                <td>User Name</td>
                                <td><input type="text" class="form-control"  value="ashalexsius"></td>
                            </tr>
                            <tr>
                                <td>Company/Organization Name</td>
                                <td><input type="text" value="indivisual" class="form-control"></td>
                            </tr>
                            
                            <tr>
                                <td>Address</td>
                                <td><input type="text" value="Ponda,Goa" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>PIN Code</td>
                                <td><input type="text" value="403802" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" value="Samantha@clinic.com" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td><input type="text" value="7350943644" class="form-control"></td>
                            </tr>

                            <tr>
                                <td>About services Provided</td>
                                <td><input type="text" value="" class="form-control"></td>
                            </tr>

                            

                            </tbody>
                        </table>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        Rs.(document).ready(function(){
            Rs.('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            Rs.(win.document.body).addClass('white-bg');
                            Rs.(win.document.body).css('font-size', '10px');

                            Rs.(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = Rs.('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.Rs.('td').editable( 'http://webapplayers.com/example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            Rs.('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>

</body>


</html>

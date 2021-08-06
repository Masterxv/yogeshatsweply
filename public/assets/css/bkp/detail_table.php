<?php

include('../../config.php');

session_start();



if(empty($_SESSION['driver_id'])){

    header("location:../driver_panel/driver_login.php");

}

?>

<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">



    <title>Profile</title>



    <!-- Bootstrap core CSS -->

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;500;600;700;800;900&display=swap"

        rel="stylesheet">

    <link rel="stylesheet" href="../public/css/dropzone.css">

    <link rel="stylesheet" href="../public/css/jquery.tag.css">

    <link rel="stylesheet" href="../public/css/jquery.tagsinput-revisited.css">

    <!-- Custom styles for this template -->

    <link href="../public/css/main.css" rel="stylesheet">



</head>



<body>



    <div class="d-flex" id="wrapper">



        <?php

        $id = $_SESSION['driver_id'];

        ?>

        <input type="hidden" id="driver-detail-id" value="<?php echo $id; ?>">



        <!-- Page Content -->

        <div id="page-content-wrapper">



            <?php

            include_once ('../driver_navbar.php');

            ?>



            <div class="container profile_tabs">

                <ul class="nav nav-tabs">

                    <li class="nav-item">

                        <a class="nav-link " href="profile.php">Profile</a>

                    </li>



                    <li class="nav-item">

                        <a class="nav-link active" href="detail_table.php">All Rides</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="driver_detail.php">Detail</a>

                    </li>



                </ul>



                <div class="container">

                    <div class="page_name_candidate">

                        <div class="candidate_div mb-3">

                            <h1>All Rides</h1>



                        </div>

                        <div class="select_sort_second">



                            <div class="sort_btn">





                            </div>

                        </div>







                    </div>



                    <div class="cards">

                        <div class="row">

                            <div class="col-xl-12 mt-3 mb-3">

                                <div class="card payment_method_card candidate">

                                    <div class="card-body ">

                                        <div class="pagination_table">

                                            <div class="results">



                                            </div>

                                            <div class="page">

                                                <div class="page_filter">



                                                </div>



                                                <span class="page_head">Results Per Page</span>

                                                <ul class="pagination pagination-sm">

                                                    <!--                                                <li class="page-item"><a class="page-link page_pre" href="#"><span><i-->

                                                    <!--                                                                class="fas fa-angle-left"></i></span></a></li>-->

                                                    <!--                                                <li class="page-item"><a class="page-link" href="#">1</a></li>-->

                                                    <!--                                                <li class="page-item"><a class="page-link" href="#">2</a></li>-->

                                                    <!--                                                <li class="page-item"><a class="page-link" href="#">...</a></li>-->

                                                    <!--                                                <li class="page-item"><a class="page-link" href="#">19</a></li>-->

                                                    <!--                                                <li class="page-item"><a class="page-link page_next" href="#"><span><i-->

                                                    <!--                                                                class="fas fa-angle-right"></i></span></a></li>-->

                                                </ul>



                                            </div>

                                        </div>

                                        <div class="search_product">



                                            <div class="input-group ">

                                                <div class="input-group-prepend">

                                                    <span class="input-group-text" id="basic-addon1"><i

                                                                class="fas fa-search"></i></span>

                                                </div>

                                                <input type="text" class="form-control" id="trip-comp-search" placeholder="Searching for.."

                                                       aria-label="Username" aria-describedby="basic-addon1">

                                            </div>





                                        </div>



                                        <table class="table">

                                            <thead>

                                            <tr>

                                                <th>Rider Name</th>

                                                <th>Driver Name</th>

                                                <th>Ride Type</th>

                                                <th>Ride Category</th>

                                                <th>Price</th>

                                                <th>Status</th>

                                                <th>Rating</th>

                                                <th>Action</th>



                                                <!--                                                <th>S.No</th>-->

                                                <!--                                                <th>Date & Time</th>-->

                                                <!--                                                <th>Rider</th>-->

                                                <!--                                                <th>Driver</th>-->

                                                <!--                                                <th>Fare</th>-->

                                                <!--                                                <th class="vc">Vehicle Category</th>-->

                                                <!--                                                <th>Status</th>-->

                                                <!--                                                <th>Ride now</th>-->

                                                <!--                                                <th>Pre-booking</th>-->

                                                <!---->

                                                <!---->

                                                <!--                                                <th>Action</th>-->

                                                <!-- <th>Enable</th> -->





                                            </tr>

                                            </thead>

                                            <tbody id="trip-completed-table-body-id">

                                             </tbody>

                                        </table>



                                    </div>

                                </div>



                            </div>



                        </div>



                    </div>

                </div>

                <!-- /#wrapper -->

            </div>

        </div>



        <!-- Bootstrap core JavaScript -->

        <script src="../vendor/jquery/jquery.min.js"></script>

        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

        <script src="../public/js/jquery.tag.js"></script>

        <script src="../public/js/customjs.js"></script>

        <script src="../public/js/custom_request.js"></script>

        <script src="../public/js/customPagination.js"></script>



        <!-- Menu Toggle Script -->

        <script>



            $(document).ready(function () {

                retrieveallTrip();



                function retrieveallTrip(search = '') {

                    var captain_id = $("#driver-detail-id").val();

                    sendRequest("?action_type=retrieve&request_type=driver_rides&functionality_type=retrieve_all_ride&panel_type=driver_panel", {

                        search: search,

                        captain_id:captain_id,



                    }, "POST")

                        .then((data) => {

                            var data = JSON.parse(data);

                            if (data.code == "202") {

                                $(".pagination").html(data.pagination);

                                $("#trip-completed-table-body-id").empty();

                                var list = data.listOfData;



                                for (var i = 0; i < list.length; i++) {



                                    var n = list[i].id;

                                    var captain_name = list[i].captain_name;

                                    var captain_phone = list[i].captain_phone;

                                    var captain_email = list[i].captain_email;

                                    var customer_name = list[i].customer_name;

                                    var customer_phone = list[i].customer_phone;

                                    var customer_email = list[i].customer_email;

                                    var from_address = list[i].from_address;

                                    var to_address = list[i].to_address;

                                    var distance = list[i].distance;

                                    var trip_time = list[i].trip_time;

                                    var fare = list[i].fare;

                                    var date_time = list[i].date_time;

                                    var ride_type_name = list[i].ride_type_name;

                                    var ride_category_name = list[i].ride_category_name;

                                    var payment_method_name = list[i].payment_method_name;

                                    var ride_rating = list[i].ride_rating;

                                    var status = list[i].status;

                                    var enable = list[i].enable;





                                    var checked = "";

                                    if (enable == 0) {



                                        checked = "value='0'";

                                    } else {



                                        checked = "value='1'  checked";

                                    }







                                    var text = " <tr id=\"report-table-row-"+n+"\"> \n" +

                                        "\n" +

                                        "                                                <td>"+customer_name+"\n" +

                                        "                                                </td>\n" +

                                        "                                                <td >"+captain_name+"</td>\n" +

                                        "                                                <td>"+ride_type_name+"</td>\n" +

                                        "                                                <td>"+ride_category_name+"</td>\n" +

                                        "                                                <td>"+fare+"</td>\n" +

                                        "<td><span class=\"span_completed\">"+status+"</span></td>\n"+

                                        "                                                <td>"+ride_rating+"</td>\n" +

                                        "                                                <td class=\"resandunres\">\n" +

                                        "                                                   \n" +

                                        "                                                    <label class=\"switch\">\n" +

                                        "                                                        <input type=\"checkbox\" data-id=\""+n+"\" class=\"report_switch\" id=\"enable-switch-"+n+"\" "+checked+">\n" +

                                        "                                                        <span class=\"slider round\"></span>\n" +

                                        "                                                    </label>\n" +

                                        "                                                </td>\n" +

                                        "                                                <td>\n" +

                                        "                                                    <div class=\"\">\n" +

                                        "                                                        <button type=\"button\"\n" +

                                        "                                                            class=\"btn btn-outline-white2 btn-rounded btn-sm\" onclick=\"deleteReport("+n+")\">\n" +

                                        "                                                            <i class=\"far fa-trash-alt fa-trash-alt2 mt-0\"></i>\n" +

                                        "                                                        </button>\n" +

                                        "                                                        <button  type=\"button\"\n" +

                                        "                                                            class=\"btn btn-outline-white2 btn-rounded btn-sm\" data-toggle=\"collapse\" data-target=\"#report-"+n+"\" class=\"accordion-toggle\">\n" +

                                        "                                                            <i class=\"fas fa-chevron-down fachevron mt-0\"></i>\n" +

                                        "                                                        </button>\n" +

                                        "                                                    </div>\n" +

                                        "                                                </td>\n" +

                                        "                                               \n" +

                                        "                                            </tr>\n" +

                                        "                                            <tr >\n" +

                                        "                                            <td colspan=\"11\" class=\"hiddenRow\">\n" +

                                        "                                            <div class=\"accordian-body collapse\" id=\"report-"+n+"\">\n" +

                                        "                                                    \n" +

                                        "                                                <div class=\"Completed_collapse_record\">\n" +

                                        "                                                    <div class=\"start h-100\" style=\"width: 5%;display: grid;\">\n" +

                                        "                                                        <svg height=\"16px\" viewBox=\"0 0 480 480\" width=\"16px\" xmlns=\"http://www.w3.org/2000/svg\">\n" +

                                        "                                                            <path\n" +

                                        "                                                                d=\"m432 240c0 106.039062-85.960938 192-192 192s-192-85.960938-192-192 85.960938-192 192-192 192 85.960938 192 192zm0 0\"\n" +

                                        "                                                                fill=\"#cfd2fc\" />\n" +

                                        "                                                            <path\n" +

                                        "                                                                d=\"m240 480c-132.546875 0-240-107.453125-240-240s107.453125-240 240-240 240 107.453125 240 240c-.148438 132.484375-107.515625 239.851562-240 240zm0-464c-123.710938 0-224 100.289062-224 224s100.289062 224 224 224 224-100.289062 224-224c-.140625-123.652344-100.347656-223.859375-224-224zm0 0\"\n" +

                                        "                                                                fill=\"#8690fa\" />\n" +

                                        "                                                            <path\n" +

                                        "                                                                d=\"m352 240c0 61.855469-50.144531 112-112 112s-112-50.144531-112-112 50.144531-112 112-112 112 50.144531 112 112zm0 0\"\n" +

                                        "                                                                fill=\"#5153ff\" />\n" +

                                        "                                                        </svg>\n" +

                                        "                                                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" height=\"45px\" width=\"50px\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"\n" +

                                        "\t                                                                 viewBox=\"0 0 270 270\" style=\"enable-background:new 0 0 270 270;\" xml:space=\"preserve\">\n" +

                                        "                                                                <g id=\"XMLID_508_\" fill=\"#3f51b5b3\">\n" +

                                        "\t                                                                <rect id=\"XMLID_509_\" x=\"22\" y=\"50\" width=\"20\" height=\"20\"/>\n" +

                                        "\t                                                                <rect id=\"XMLID_510_\" x=\"22\" y=\"100\" width=\"20\" height=\"20\"/>\n" +

                                        "\t                                                                <rect id=\"XMLID_511_\" x=\"22\" y=\"150\" width=\"20\" height=\"20\"/>\n" +

                                        "\t                                                                <rect id=\"XMLID_512_\" x=\"22\" y=\"200\" width=\"20\" height=\"20\"/>\n" +

                                        "\t                                                                <rect id=\"XMLID_515_\" x=\"22\" y=\"250\" width=\"20\" height=\"20\"/>\n" +

                                        "                                                                </g>\n" +

                                        "\n" +

                                        "                                                        </svg>\n" +

                                        "                                                        <svg height=\"16px\" style=\"margin-top:10px\" viewBox=\"0 0 480 480\" width=\"16px\" xmlns=\"http://www.w3.org/2000/svg\">\n" +

                                        "                                                                    <path\n" +

                                        "                                                                        d=\"m432 240c0 106.039062-85.960938 192-192 192s-192-85.960938-192-192 85.960938-192 192-192 192 85.960938 192 192zm0 0\"\n" +

                                        "                                                                        fill=\"#cfd2fc\" />\n" +

                                        "                                                                    <path\n" +

                                        "                                                                        d=\"m240 480c-132.546875 0-240-107.453125-240-240s107.453125-240 240-240 240 107.453125 240 240c-.148438 132.484375-107.515625 239.851562-240 240zm0-464c-123.710938 0-224 100.289062-224 224s100.289062 224 224 224 224-100.289062 224-224c-.140625-123.652344-100.347656-223.859375-224-224zm0 0\"\n" +

                                        "                                                                        fill=\"#4caf5087\" />\n" +

                                        "                                                                    <path\n" +

                                        "                                                                        d=\"m352 240c0 61.855469-50.144531 112-112 112s-112-50.144531-112-112 50.144531-112 112-112 112 50.144531 112 112zm0 0\"\n" +

                                        "                                                                        fill=\"#4CAF50\" />\n" +

                                        "                                                        </svg>\n" +

                                        "                                                    </div>\n" +

                                        "                                                      <div class=\"start\">\n" +

                                        "                                                          <h1>(Start Point)</h1>\n" +

                                        "                                                          <h2 data-toggle=\"tooltip\" data-placement=\"left\" title=\""+from_address+"\">"+from_address+"</h2>\n" +

                                        "                                                      </div>\n" +

                                        "                                                      <div class=\"start\">\n" +

                                        "                                                        <h1>Driver</h1>\n" +

                                        "                                                        <h2>"+captain_name+"</h2>\n" +

                                        "                                                    </div>\n" +

                                        "                                                     <div class=\"start\">\n" +

                                        "                                                        <h1>Rider</h1>\n" +

                                        "                                                        <h2>"+customer_name+"</h2>\n" +

                                        "                                                    </div>\n" +

                                        "                                                     <div class=\"start\">\n" +

                                        "                                                        <h1>Rider status</h1>\n" +

                                        "                                                        <h2>"+status+"</h2>\n" +

                                        "                                                    </div> \n" +

                                        "                                                    <div class=\"start\">\n" +

                                        "                                                        <h1>Arival Time</h1>\n" +

                                        "                                                        <h2>"+trip_time+"</h2>\n" +

                                        "                                                    </div> \n" +

                                        "                                                    <div class=\"start\">\n" +

                                        "                                                        <h1>(Finish point)</h1>\n" +

                                        "                                                        <h2 data-toggle=\"tooltip\" data-placement=\"left\" title=\""+to_address+"\">"+to_address+"</h2>\n" +

                                        "                                                    </div> \n" +

                                        "                                                    <div class=\"start\">\n" +

                                        "                                                        <h1>Drivers Phone</h1>\n" +

                                        "                                                        <h2>"+captain_phone+"</h2>\n" +

                                        "                                                    </div>\n" +

                                        "                                                     <div class=\"start\">\n" +

                                        "                                                        <h1>Riders Phone</h1>\n" +

                                        "                                                        <h2>"+customer_phone+"</h2>\n" +

                                        "                                                    </div>\n" +

                                        "                                                    <div class=\"start\">\n" +

                                        "                                                        <h1>Payment methods</h1>\n" +

                                        "                                                        <h2>"+payment_method_name+"</h2>\n" +

                                        "                                                    </div>\n" +

                                        "                                                    <div class=\"start\">\n" +

                                        "                                                        <h1>Distance</h1>\n" +

                                        "                                                        <h2>"+distance+"km</h2>\n" +

                                        "                                                    </div>\n" +

                                        "                                                </div>\n" +

                                        "                                                     \n" +

                                        "                                            </div>\n" +

                                        "                                             </td>\n" +

                                        "                                            </tr>";

                                    $("#trip-completed-table-body-id").append(text);

                                }







                            } else if (data.code == "206") {

                                console.log("Failed to Delete");

                            }



                        })

                        .catch((error) => {

                            console.log(error)

                        });

                }



                $('#trip-comp-search').keyup(function () {

                    var search = $(this).val();





                    retrieveallTrip(search);

                    // console.log(query)

                });









                $(document).on('change', '.report_switch', function () {



                    var id = $(this).data('id');

                    var enable_val;

                    if ($("#enable-switch-" + id).is(':checked')) {

                        $("#enable-switch-" + id).val(1);

                        enable_val = "1";

                    } else {

                        $("#enable-switch-" + id).val(0);

                        enable_val = "0";

                    }





                    sendRequest("?action_type=update&request_type=driver_rides&functionality_type=enable_ride&panel_type=driver_panel", {

                        id: id,

                        enable: enable_val,

                    }, "POST")

                        .then((data) => {

                            var data = JSON.parse(data);

                            if (data.code == "202") {



                            }





                        })

                        .catch((error) => {

                            console.log(error)

                        })



                });





            });



            function deleteReport (id) {

                var del_id =id;



                sendRequest("?action_type=delete&request_type=all_rides&functionality_type=delete_captain", {

                    id:del_id,









                }, "POST")

                    .then((data) => {

                        var data = JSON.parse(data);

                        if(data.code == "202"){

                            $("#report-table-row-"+del_id).remove();



                            // $("#sub_child_packages_modal_form_id").modal('hide');

                            // retrieveAllShipping(1);

                        }





                    })

                    .catch((error) => {

                        console.log(error)

                    })

            }



            function pag(offset,id) {



                var offset =offset;

                var active= $(".pagination").find('.active');

                active.removeClass("active");

                $("#pag-"+id).addClass("active");

                var search = $("#trip-comp-search").val();

                var captain_id = $("#driver-detail-id").val();







                var searchset=""

                if(search = ""){

                    searchset =""

                }else {

                    searchset = search;

                }

                sendRequest("?action_type=retrieve&request_type=driver_rides&functionality_type=pagination&panel_type=driver_panel", {

                    offset:offset,

                    search:search,

                    captain_id:captain_id





                }, "POST")

                    .then((data) => {

                        var data = JSON.parse(data);

                        if (data.code == "202") {

                            // $(".pagination").html(data.pagination);

                            // $("#paginate").html(data.htmlData);

                            $("#trip-completed-table-body-id").empty();

                            var list = data.listOfData;



                            for (var i = 0; i < list.length; i++) {



                                var n = list[i].id;

                                var captain_name = list[i].captain_name;

                                var captain_phone = list[i].captain_phone;

                                var captain_email = list[i].captain_email;

                                var customer_name = list[i].customer_name;

                                var customer_phone = list[i].customer_phone;

                                var customer_email = list[i].customer_email;

                                var from_address = list[i].from_address;

                                var to_address = list[i].to_address;

                                var distance = list[i].distance;

                                var trip_time = list[i].trip_time;

                                var fare = list[i].fare;

                                var date_time = list[i].date_time;

                                var ride_type_name = list[i].ride_type_name;

                                var ride_category_name = list[i].ride_category_name;

                                var payment_method_name = list[i].payment_method_name;

                                var ride_rating = list[i].ride_rating;

                                var status = list[i].status;

                                var enable = list[i].enable;





                                var checked = "";

                                if (enable == 0) {



                                    checked = "value='0'";

                                } else {



                                    checked = "value='1'  checked";

                                }







                                var text = " <tr id=\"report-table-row-"+n+"\"> \n" +

                                    "\n" +

                                    "                                                <td>"+customer_name+"\n" +

                                    "                                                </td>\n" +

                                    "                                                <td >"+captain_name+"</td>\n" +

                                    "                                                <td>"+ride_type_name+"</td>\n" +

                                    "                                                <td>"+ride_category_name+"</td>\n" +

                                    "                                                <td>"+fare+"</td>\n" +

                                    "<td><span class=\"span_completed\">"+status+"</span></td>\n"+

                                    "                                                <td>"+ride_rating+"</td>\n" +

                                    "                                                <td class=\"resandunres\">\n" +

                                    "                                                   \n" +

                                    "                                                    <label class=\"switch\">\n" +

                                    "                                                        <input type=\"checkbox\" data-id=\""+n+"\" class=\"report_switch\" id=\"enable-switch-"+n+"\" "+checked+">\n" +

                                    "                                                        <span class=\"slider round\"></span>\n" +

                                    "                                                    </label>\n" +

                                    "                                                </td>\n" +

                                    "                                                <td>\n" +

                                    "                                                    <div class=\"\">\n" +

                                    "                                                        <button type=\"button\"\n" +

                                    "                                                            class=\"btn btn-outline-white2 btn-rounded btn-sm\" onclick=\"deleteReport("+n+")\">\n" +

                                    "                                                            <i class=\"far fa-trash-alt fa-trash-alt2 mt-0\"></i>\n" +

                                    "                                                        </button>\n" +

                                    "                                                        <button  type=\"button\"\n" +

                                    "                                                            class=\"btn btn-outline-white2 btn-rounded btn-sm\" data-toggle=\"collapse\" data-target=\"#report-"+n+"\" class=\"accordion-toggle\">\n" +

                                    "                                                            <i class=\"fas fa-chevron-down fachevron mt-0\"></i>\n" +

                                    "                                                        </button>\n" +

                                    "                                                    </div>\n" +

                                    "                                                </td>\n" +

                                    "                                               \n" +

                                    "                                            </tr>\n" +

                                    "                                            <tr >\n" +

                                    "                                            <td colspan=\"11\" class=\"hiddenRow\">\n" +

                                    "                                            <div class=\"accordian-body collapse\" id=\"report-"+n+"\">\n" +

                                    "                                                    \n" +

                                    "                                                <div class=\"Completed_collapse_record\">\n" +

                                    "                                                    <div class=\"start h-100\" style=\"width: 5%;display: grid;\">\n" +

                                    "                                                        <svg height=\"16px\" viewBox=\"0 0 480 480\" width=\"16px\" xmlns=\"http://www.w3.org/2000/svg\">\n" +

                                    "                                                            <path\n" +

                                    "                                                                d=\"m432 240c0 106.039062-85.960938 192-192 192s-192-85.960938-192-192 85.960938-192 192-192 192 85.960938 192 192zm0 0\"\n" +

                                    "                                                                fill=\"#cfd2fc\" />\n" +

                                    "                                                            <path\n" +

                                    "                                                                d=\"m240 480c-132.546875 0-240-107.453125-240-240s107.453125-240 240-240 240 107.453125 240 240c-.148438 132.484375-107.515625 239.851562-240 240zm0-464c-123.710938 0-224 100.289062-224 224s100.289062 224 224 224 224-100.289062 224-224c-.140625-123.652344-100.347656-223.859375-224-224zm0 0\"\n" +

                                    "                                                                fill=\"#8690fa\" />\n" +

                                    "                                                            <path\n" +

                                    "                                                                d=\"m352 240c0 61.855469-50.144531 112-112 112s-112-50.144531-112-112 50.144531-112 112-112 112 50.144531 112 112zm0 0\"\n" +

                                    "                                                                fill=\"#5153ff\" />\n" +

                                    "                                                        </svg>\n" +

                                    "                                                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" height=\"45px\" width=\"50px\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"\n" +

                                    "\t                                                                 viewBox=\"0 0 270 270\" style=\"enable-background:new 0 0 270 270;\" xml:space=\"preserve\">\n" +

                                    "                                                                <g id=\"XMLID_508_\" fill=\"#3f51b5b3\">\n" +

                                    "\t                                                                <rect id=\"XMLID_509_\" x=\"22\" y=\"50\" width=\"20\" height=\"20\"/>\n" +

                                    "\t                                                                <rect id=\"XMLID_510_\" x=\"22\" y=\"100\" width=\"20\" height=\"20\"/>\n" +

                                    "\t                                                                <rect id=\"XMLID_511_\" x=\"22\" y=\"150\" width=\"20\" height=\"20\"/>\n" +

                                    "\t                                                                <rect id=\"XMLID_512_\" x=\"22\" y=\"200\" width=\"20\" height=\"20\"/>\n" +

                                    "\t                                                                <rect id=\"XMLID_515_\" x=\"22\" y=\"250\" width=\"20\" height=\"20\"/>\n" +

                                    "                                                                </g>\n" +

                                    "\n" +

                                    "                                                        </svg>\n" +

                                    "                                                        <svg height=\"16px\" style=\"margin-top:10px\" viewBox=\"0 0 480 480\" width=\"16px\" xmlns=\"http://www.w3.org/2000/svg\">\n" +

                                    "                                                                    <path\n" +

                                    "                                                                        d=\"m432 240c0 106.039062-85.960938 192-192 192s-192-85.960938-192-192 85.960938-192 192-192 192 85.960938 192 192zm0 0\"\n" +

                                    "                                                                        fill=\"#cfd2fc\" />\n" +

                                    "                                                                    <path\n" +

                                    "                                                                        d=\"m240 480c-132.546875 0-240-107.453125-240-240s107.453125-240 240-240 240 107.453125 240 240c-.148438 132.484375-107.515625 239.851562-240 240zm0-464c-123.710938 0-224 100.289062-224 224s100.289062 224 224 224 224-100.289062 224-224c-.140625-123.652344-100.347656-223.859375-224-224zm0 0\"\n" +

                                    "                                                                        fill=\"#4caf5087\" />\n" +

                                    "                                                                    <path\n" +

                                    "                                                                        d=\"m352 240c0 61.855469-50.144531 112-112 112s-112-50.144531-112-112 50.144531-112 112-112 112 50.144531 112 112zm0 0\"\n" +

                                    "                                                                        fill=\"#4CAF50\" />\n" +

                                    "                                                        </svg>\n" +

                                    "                                                    </div>\n" +

                                    "                                                      <div class=\"start\">\n" +

                                    "                                                          <h1>(Start Point)</h1>\n" +

                                    "                                                          <h2 data-toggle=\"tooltip\" data-placement=\"left\" title=\""+from_address+"\">"+from_address+"</h2>\n" +

                                    "                                                      </div>\n" +

                                    "                                                      <div class=\"start\">\n" +

                                    "                                                        <h1>Driver</h1>\n" +

                                    "                                                        <h2>"+captain_name+"</h2>\n" +

                                    "                                                    </div>\n" +

                                    "                                                     <div class=\"start\">\n" +

                                    "                                                        <h1>Rider</h1>\n" +

                                    "                                                        <h2>"+customer_name+"</h2>\n" +

                                    "                                                    </div>\n" +

                                    "                                                     <div class=\"start\">\n" +

                                    "                                                        <h1>Rider status</h1>\n" +

                                    "                                                        <h2>"+status+"</h2>\n" +

                                    "                                                    </div> \n" +

                                    "                                                    <div class=\"start\">\n" +

                                    "                                                        <h1>Arival Time</h1>\n" +

                                    "                                                        <h2>"+trip_time+"</h2>\n" +

                                    "                                                    </div> \n" +

                                    "                                                    <div class=\"start\">\n" +

                                    "                                                        <h1>(Finish point)</h1>\n" +

                                    "                                                        <h2 data-toggle=\"tooltip\" data-placement=\"left\" title=\""+to_address+"\">"+to_address+"</h2>\n" +

                                    "                                                    </div> \n" +

                                    "                                                    <div class=\"start\">\n" +

                                    "                                                        <h1>Drivers Phone</h1>\n" +

                                    "                                                        <h2>"+captain_phone+"</h2>\n" +

                                    "                                                    </div>\n" +

                                    "                                                     <div class=\"start\">\n" +

                                    "                                                        <h1>Riders Phone</h1>\n" +

                                    "                                                        <h2>"+customer_phone+"</h2>\n" +

                                    "                                                    </div>\n" +

                                    "                                                    <div class=\"start\">\n" +

                                    "                                                        <h1>Payment methods</h1>\n" +

                                    "                                                        <h2>"+payment_method_name+"</h2>\n" +

                                    "                                                    </div>\n" +

                                    "                                                    <div class=\"start\">\n" +

                                    "                                                        <h1>Distance</h1>\n" +

                                    "                                                        <h2>"+distance+"km</h2>\n" +

                                    "                                                    </div>\n" +

                                    "                                                </div>\n" +

                                    "                                                     \n" +

                                    "                                            </div>\n" +

                                    "                                             </td>\n" +

                                    "                                            </tr>";

                                $("#trip-completed-table-body-id").append(text);

                            }





                        }

                        else if (data.code == "206") {

                            console.log("Failed to Delete");

                        }



                    })

                    .catch((error) => {

                        console.log(error)

                    });

            }



        </script>



</body>



</html>
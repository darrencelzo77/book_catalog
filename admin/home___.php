<?php
if (session_id() == '') {
  session_start();
}
if (isset($_SESSION['accountid'])) {
  if (file_exists('systemconfig.inc')) {
    include_once('systemconfig.inc');
  }
  if (file_exists('includes/systemconfig.inc')) {
    include_once('includes/systemconfig.inc');
  }
  if (file_exists('../includes/systemconfig.inc')) {
    include_once('../includes/systemconfig.inc');
  }
} else {
  header('location: ./');
  exit(0);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Ensures compatibility with older IE versions -->

  <title>Inventory System</title>
  <link rel="icon" href="images/car.png" type="image/ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <!-- Summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <!-- Bootstrap 4 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Select2 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">


  <!-- Datatables -->
  <link rel="stylesheet" media="screen" href="datatable/datatables.css">
  <link rel="stylesheet" media="screen" href="datatable/buttons.dataTables.min.css">

  <!-- Datepicker -->
  <link rel="stylesheet" href="css/datepicker.css">

  <!-- jQuery -->
  <!-- <script src="js/jquery-3.5.1.min.js"></script> -->

  <!-- jQuery UI -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



  <!-- Ung sa dashboard -->
  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <!-- Donut Chart Script -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



  <!-- Socket Io Js -->
  <script src="js/socketio.js"></script>

  <!-- Validate Js -->
  <script src="js/validate.min.js"></script>
  <script src="js/additional.min.js"></script>

  <!-- Datetimepicker -->
  <script src="js/moment.min.js"></script>
  <script src="js/datetimepicker.min.js"></script>

  <!-- Datatable Script -->
  <script src="datatable/datatables.min.js" defer></script>
  <script src="datatable/dataTables.buttons.min.js" defer></script>
  <script src="datatable/buttons.html5.min.js" defer></script>

  <script type="text/javascript" src="js/jzip.min.js"></script>
  <script type="text/javascript" src="js/pdfmake.min.js"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>

  <!-- Bootstrap 4 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- Select 2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- Sweetalert -->
  <script src="js/cdnjs/sweetalert2.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css" rel="stylesheet">

  <!-- BS-Stepper -->
  <script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>

  <!-- CryptoJS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.2.0/crypto-js.min.js" integrity="sha512-a+SUDuwNzXDvz4XrIcXHuCf089/iJAoN4lmrXJg18XnduKK6YlDHNRalv4yd1N40OKI80tFidF+rqTFKGPoWFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script src="js/tinybox.js"></script>




  <script src="./node_modules/html5-qrcode/html5-qrcode.min.js"></script>







  <style>
    .tbox {
      position: absolute;
      display: none;
      padding: 14px 17px;
      z-index: 900
    }

    .tinner {
      padding: 15px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      background: #fff url(images/preload.gif) no-repeat 50% 50%;
      border-right: 1px solid #333;
      border-bottom: 1px solid #333;
    }

    .tmask {
      position: absolute;
      display: none;
      top: 0px;
      left: 0px;
      height: 100%;
      width: 100%;
      background: #000;
      z-index: 800
    }

    .tclose {
      position: absolute;
      top: 0px;
      right: 0px;
      width: 30px;
      height: 30px;
      cursor: pointer;
      background: url(images/close.png) no-repeat
    }

    .tclose:hover {
      background-position: 0 -30px
    }

    #error {
      background: #ff6969;
      color: #fff;
      text-shadow: 1px 1px #cf5454;
      border-right: 1px solid #000;
      border-bottom: 1px solid #000;
      padding: 0
    }

    #error .tcontent {
      padding: 10px 14px 11px;
      border: 1px solid #ffb8b8;
      -moz-border-radius: 5px;
      border-radius: 5px
    }

    #success {
      background: #2ea125;
      color: #fff;
      text-shadow: 1px 1px #1b6116;
      border-right: 1px solid #000;
      border-bottom: 1px solid #000;
      padding: 10;
      -moz-border-radius: 0;
      border-radius: 0
    }

    #bluemask {
      background: #4195aa
    }

    #frameless {
      padding: 0
    }

    #frameless .tclose {
      left: 6px
    }

    #body-overlay {
      text-align: center;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: 99999;
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      display: none;
    }

    #body-overlay div {
      position: absolute;
      left: 40%;
      top: 20%;
    }

    .main-sidebar {
      background-color: #0B274E;
    }
  </style>

  <style>
    /* Ensure uniform height for buttons & dropdown */
    .dataTables_length select,
    .dt-buttons .btn {
      height: 38px;
      /* Adjust height */
      padding: 5px 10px;
      font-size: 14px;
      /* border-radius: 5px; */
    }

    /* Align buttons and controls properly */
    .dataTables_wrapper .dt-buttons {
      display: flex;
      gap: 10px;
    }

    .dataTables_wrapper .dataTables_length {
      margin-left: auto;
    }

    .dataTables_wrapper .dataTables_filter {
      margin-left: 15px;
    }

    /*#myTable {
      font-size: 12px;
      
    }

    #myTable th,
    #myTable td {
      padding: 4px 8px;
     
    } */
  </style>
  <!-- My Script -->
  <script>
    function init_select(elementId, placeholderText) {
      $('#' + elementId).select2({
        placeholder: placeholderText,
        width: '100%' // Ensures it stretches to fit modal width
      });
    }

    function init_selectelse(elementId, placeholderText) {
      $('#' + elementId).select2({
        placeholder: placeholderText,
        width: '550px' // Ensures it stretches to fit modal width
      });
    }


    function init_select2(elementName, placeholderText) {
      var selectElement = document.getElementsByName(elementName)[0]; // Get the first matching element
      if (selectElement) { // Ensure the element exists
        $(selectElement).select2({
          placeholder: placeholderText,
          width: '100%' // Ensures it stretches to fit modal width
        });
      } else {
        console.error("No element found with name:", elementName);
      }
    }

    function obj(id) {
      return document.getElementById(id);
    }

    function object(id) {
      return document.getElementById(id);
    }

    function obj_class(classname) {
      return document.getElementsByClassName(classname);
    }

    /*function setActive(element) {
    	var navItems = document.querySelectorAll('.nav-item');
    	navItems.forEach(function(item) {
    		item.classList.remove('active');
    	});
    	element.parentElement.classList.add('active');
    }*/
    function setActive(element) {
      var navLinks = document.querySelectorAll('.nav-link');
      navLinks.forEach(function(navLink) {
        navLink.classList.remove('active');
      });
      element.classList.add('active');
    }

    const initiateDatatable = () => {
      let table = $('#myTable').DataTable({
        pageLength: 50, // Default number of entries
        lengthMenu: [10, 25, 50, 100, 200, 500, 1000, 2000, 3000, 5000, 10000, 15000], // Options for the number of entries
        dom: '<"d-flex justify-content-between align-items-center"Blf>rt<"bottom"ip>', // Align buttons left, search & dropdown right
        language: {
          lengthMenu: 'Show _MENU_' // Removes "Entries" text, keeps only "Show [dropdown]"
        },
        buttons: [{
            extend: 'copy',
            text: 'Copy',
            className: 'btn btn-secondary'
          },
          {
            extend: 'excel',
            text: 'Export to Excel',
            className: 'btn btn-success',
            filename: 'report' // Set exported file name to "report.xlsx"
          },
        ]
      });
    };

    const initiateDatatable2 = () => {
      let table = $('#myTable2').DataTable({
        pageLength: 50, // Default number of entries
        lengthMenu: [10, 25, 50, 100, 200, 500, 1000, 2000, 3000, 5000, 10000, 15000], // Options for the number of entries
        dom: '<"d-flex justify-content-between align-items-center"Blf>rt<"bottom"ip>', // Align buttons left, search & dropdown right
        language: {
          lengthMenu: 'Show _MENU_' // Removes "Entries" text, keeps only "Show [dropdown]"
        },
        buttons: [{
            extend: 'copy',
            text: 'Copy',
            className: 'btn btn-secondary'
          },
          {
            extend: 'excel',
            text: 'Export to Excel',
            className: 'btn btn-success',
            filename: 'report' // Set exported file name to "report.xlsx"
          },
        ]
      });
    };

    function loadPage(url, elementId) {
      if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
      } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById(elementId).innerHTML = "";
          document.getElementById(elementId).innerHTML = xmlhttp.responseText;
        }
      }
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
    }

    function ajax_fn(url, elementId) {
      if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
      } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
          document.getElementById(elementId).innerHTML = "";
          document.getElementById(elementId).innerHTML = xmlhttp.responseText;
        }
      }
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
    }

    function fillSubContent(loc, eid) {
      document.getElementById(eid).innerHTML = "<div align='center'><img src='images/ajax-loader3.gif' width='15px' /></div>";
      loadPage(loc, eid);
    }

    function fillContent(loc, eid) {
      document.getElementById(eid).innerHTML = "<div align='center'><img src='images/wait.gif' width='40%' /></div>";
      loadPage(loc, eid);
    }

    function fillMainContent(loc, eid) {
      document.getElementById(eid).innerHTML = "<div align='center'><img src='images/loading_image.gif' width='10%' /></div><div align='center'><img src='images/ajax-loader2.gif' width='20%' /><div><span>Please wait...</span></div></div>";
      loadPage(loc, eid);
    }



    function param(w, h) {
      var width = w;
      var height = h;
      var left = (screen.width - width) / 2;
      var top = (screen.height - height) / 2;
      var params = 'width=' + width + ', height=' + height;
      params += ', top=' + top + ', left=' + left;
      params += ', directories=no';
      params += ', location=no';
      params += ', resizable=no';
      params += ', status=no';
      params += ', toolbar=no';
      return params;
    }

    function openWin(url) {
      myWindow = window.open(url, 'mywin', param(800, 500));
      myWindow.focus();
    }

    function openCustom(url, w, h) {
      myWindow = window.open(url, 'mywin', param(w, h));
      myWindow.focus();
    }

    function logout() {
      Swal.fire({
        title: "Logout",
        text: "Are you sure you want to logout?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, logout",
        cancelButtonText: "Cancel"
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = 'pages/logout.php';
        }
      });
    }

    function SampleAjaxtoLoadDataTable() {
      $.ajax({
        url: "pages/test.php",
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#maincontent').html(data);
          initialize_datatable();
          initialize_datepicker();
        }
      });
    }

    function initialize_datatable() {
      let table = $('#myTable').DataTable({
        pageLength: 50, // Default number of entries
        lengthMenu: [10, 25, 50, 100, 200, 500, 1000, 2000, 3000, 5000, 10000, 15000], // Options for the number of entries
        dom: '<"d-flex justify-content-between align-items-center"Blf>rt<"bottom"ip>', // Align buttons left, search & dropdown right
        language: {
          lengthMenu: 'Show _MENU_' // Removes "Entries" text, keeps only "Show [dropdown]"
        },
        buttons: [{
            extend: 'copy',
            text: 'Copy',
            className: 'btn btn-secondary'
          },
          {
            extend: 'excel',
            text: 'Export to Excel',
            className: 'btn btn-success',
            filename: 'report' // Set exported file name to "report.xlsx"
          },
        ]
      });
    }

    //myTableDashboard

    function reload_t() {
      $(document).ready(function() {
        let table = $('#myTableDashboard').DataTable({
          pageLength: 5, // Default number of entries
          lengthMenu: [5, 10, 25, 50, 100, 200, 500, 1000, 2000, 3000, 5000, 10000, 15000], // Options for the number of entries
          dom: '<"d-flex justify-content-between align-items-center"Blf>rt<"bottom"ip>', // Align buttons left, search & dropdown right
          language: {
            lengthMenu: 'Show _MENU_' // Removes "Entries" text, keeps only "Show [dropdown]"
          },
          buttons: [{
              extend: 'copy',
              text: 'Copy',
              className: 'btn btn-secondary'
            },
            {
              extend: 'excel',
              text: 'Export to Excel',
              className: 'btn btn-success',
              filename: 'report' // Set exported file name to "report.xlsx"
            }
          ]
        });
      });
    }


    function initialize_datatable_without_search() {
      let table = $('#myTable').DataTable({
        pageLength: 50, // Default number of entries
        lengthMenu: [10, 25, 50, 100, 200, 500, 1000, 2000, 3000, 5000, 10000, 15000], // Options for the number of entries
        dom: '<"d-flex justify-content-between align-items-center"Bl>rt<"bottom"ip>', // Removed "f" to disable search
        language: {
          lengthMenu: 'Show _MENU_' // Removes "Entries" text, keeps only "Show [dropdown]"
        },
        buttons: [{
            extend: 'copy',
            text: 'Copy',
            className: 'btn btn-secondary'
          },
          {
            extend: 'excel',
            text: 'Export to Excel',
            className: 'btn btn-success',
            filename: 'report' // Set exported file name to "report.xlsx"
          },
        ]
      });
    }


    function initialize_datepicker() {
      var fromDate = $('#from').val();
      var toDate = $('#to').val();

      $("#from").datepicker({
        changeMonth: true,
        changeYear: true,
        defaultDate: fromDate,
        dateFormat: 'yy-mm-dd'
      });

      $("#to").datepicker({
        changeMonth: true,
        changeYear: true,
        defaultDate: toDate,
        dateFormat: 'yy-mm-dd'
      });
    }

    function ajax_new_to_load(url_, tmp_container) {
      $('#' + tmp_container).html("<div align='center'><img src='images/ajax-loader3.gif' width='15px' /></div>");

      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_container).html(data);
          initiateDatatable();

          var fromDate = $('#from').val();
          var toDate = $('#to').val();

          $("#from").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: fromDate,
            dateFormat: 'yy-mm-dd'
          });

          $("#to").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: toDate,
            dateFormat: 'yy-mm-dd'
          });
        }
      });
    }


    function ajax_new(url_, tmp_container) {
      $('#' + tmp_container).html("<div align='center'><img src='images/ajax-loader3.gif' width='15px' /></div>");

      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_container).html(data);
          initialize_datatable();

          var fromDate = $('#from').val();
          var toDate = $('#to').val();

          $("#from").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: fromDate,
            dateFormat: 'yy-mm-dd'
          });

          $("#to").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: toDate,
            dateFormat: 'yy-mm-dd'
          });


          $("#from_from").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: fromDate,
            dateFormat: 'yy-mm-dd'
          });

          $("#to_to").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: toDate,
            dateFormat: 'yy-mm-dd'
          });
        }
      });
    }


    function ajax_new_on_focus(url_, tmp_container) {
      $('#' + tmp_container).html("<div align='center'><img src='images/ajax-loader3.gif' width='15px' /></div>");

      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_container).html(data);
          initialize_datatable();
          setTimeout(function() {
            const input = document.querySelector('.select_this_go');
            if (input) {
              input.focus();
              input.select();
            }
          }, 50); // Small delay to ensure the input is fully rendered
          var fromDate = $('#from').val();
          var toDate = $('#to').val();

          $("#from").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: fromDate,
            dateFormat: 'yy-mm-dd'
          });

          $("#to").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: toDate,
            dateFormat: 'yy-mm-dd'
          });
        }
      });
    }

    //ajax_new_without_search_ok
    function ajax_new_without_search_ok(url_, tmp_container) {
      $('#' + tmp_container).html("<div align='center'><img src='images/ajax-loader3.gif' width='15px' /></div>");

      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_container).html(data);
          initialize_datatable_without_search();

          var fromDate = $('#from').val();
          var toDate = $('#to').val();

          $("#from").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: fromDate,
            dateFormat: 'yy-mm-dd'
          });

          $("#to").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: toDate,
            dateFormat: 'yy-mm-dd'
          });
        }
      });
    }

    function ajax_new_da(url_, tmp_container) {
      $('#' + tmp_container).html("<div align='center'><img src='images/ajax-loader3.gif' width='15px' /></div>");

      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_container).html(data);
          initialize_datatable();
          initialize_datepicker();
        }
      });
    }

    function ajax_new_without_reload(url_, tmp_container) {

      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_container).html(data);
          // initialize_datatable();
          // initialize_datepicker();
        }
      });
    }



    function updateElapsedTime() {
      const elapsedTimeElements = document.querySelectorAll('.elapsed-time');
      elapsedTimeElements.forEach(element => {
        const startTime = new Date(element.dataset.startTime).getTime();
        const currentTime = new Date().getTime();
        const elapsedTimeInSeconds = Math.floor((currentTime - startTime) / 1000);


        const hours = Math.floor(elapsedTimeInSeconds / 3600);
        const minutes = Math.floor((elapsedTimeInSeconds % 3600) / 60);
        const seconds = elapsedTimeInSeconds % 60;

        const total = hours * 60 + minutes

        element.innerText =
          `${hours < 10 ? '0' : ''}${hours}:` +
          `${minutes < 10 ? '0' : ''}${minutes}:` +
          `${seconds < 10 ? '0' : ''}${seconds}`;

        if (total > 45) {
          element.style.color = 'red';
        } else {
          element.style.color = '';
        }
      });
    }

    setInterval(updateElapsedTime, 1000);

    function ajax_new_v2(url_, tmp_add_customer) {
      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_add_customer).html(data);
          // initialize_datatable();
          // initialize_datepicker();
          openContainer(tmp_add_customer);
        }
      });
    }

    function openContainer(tmp_add_customer) {
      $('#' + tmp_add_customer).show();
    }

    function closeContainer(tmp_add_customer) {
      $('#' + tmp_add_customer).hide();
    }

    function toggleContainer(url_, tmp_add_customer) {
      if ($('#' + tmp_add_customer).is(':visible')) {
        closeContainer(tmp_add_customer);
      } else {
        ajax_new_v2(url_, tmp_add_customer);
      }
    }

    function ajax_new_v3(url_, tmp_add_product) {
      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_add_product).html(data);
          // initialize_datatable();
          // initialize_datepicker();
          openContainer1(tmp_add_product);
        }
      });
    }

    function openContainer1(tmp_add_product) {
      $('#' + tmp_add_product).show();
    }

    function closeContainer1(tmp_add_product) {
      $('#' + tmp_add_product).hide();
    }

    function toggleContainer1(url_, tmp_add_product) {
      if ($('#' + tmp_add_product).is(':visible')) {
        closeContainer1(tmp_add_product);
      } else {
        ajax_new_v3(url_, tmp_add_product);
      }
    }

    function ajax_new_v4(url_, tmp_add_inventory) {
      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_add_inventory).html(data);
          initialize_datatable();
          initialize_datepicker();
          openContainer2(tmp_add_inventory);
        }
      });
    }

    function openContainer2(tmp_add_inventory) {
      $('#' + tmp_add_inventory).show();
    }

    function closeContainer2(tmp_add_inventory) {
      $('#' + tmp_add_inventory).hide();
    }

    function toggleContainer2(url_, tmp_add_inventory) {
      if ($('#' + tmp_add_inventory).is(':visible')) {
        closeContainer2(tmp_add_inventory);
      } else {
        ajax_new_v4(url_, tmp_add_inventory);
      }
    }

    function ajax_new_v5(url_, tmp_add_category) {
      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_add_category).html(data);
          initialize_datatable();
          initialize_datepicker();
          openContainer3(tmp_add_category);
        }
      });
    }

    function openContainer3(tmp_add_category) {
      $('#' + tmp_add_category).show();
    }

    function closeContainer3(tmp_add_category) {
      $('#' + tmp_add_category).hide();
    }

    function toggleContainer3(url_, tmp_add_category) {
      if ($('#' + tmp_add_category).is(':visible')) {
        closeContainer3(tmp_add_category);
      } else {
        ajax_new_v2(url_, tmp_add_category);
      }
    }

    function ajax_new_v6(url_, tmp_add_unit) {
      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_add_unit).html(data);
          initialize_datatable();
          initialize_datepicker();
          openContainer4(tmp_add_unit);
        }
      });
    }

    function openContainer4(tmp_add_unit) {
      $('#' + tmp_add_unit).show();
    }

    function closeContainer4(tmp_add_unit) {
      $('#' + tmp_add_unit).hide();
    }

    function toggleContainer4(url_, tmp_add_unit) {
      if ($('#' + tmp_add_unit).is(':visible')) {
        closeContainer4(tmp_add_unit);
      } else {
        ajax_new_v6(url_, tmp_add_unit);
      }
    }

    function ajax_new_v7(url_, tmp_add_employee) {
      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_add_employee).html(data);
          // initialize_datatable();
          // initialize_datepicker();
          openContainer5(tmp_add_employee);
        }
      });
    }

    function openContainer5(tmp_add_employee) {
      $('#' + tmp_add_employee).show();
    }

    function closeContainer5(tmp_add_employee) {
      $('#' + tmp_add_employee).hide();
    }

    function toggleContainer5(url_, tmp_add_employee) {
      if ($('#' + tmp_add_employee).is(':visible')) {
        closeContainer5(tmp_add_employee);
      } else {
        ajax_new_v7(url_, tmp_add_employee);
      }
    }


    function ajax_new_v8(url_, tmp_add_car) {
      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_add_car).html(data);
          // initialize_datatable();
          // initialize_datepicker();
          openContainer6(tmp_add_car);
        }
      });
    }

    function openContainer6(tmp_add_car) {
      $('#' + tmp_add_car).show();
    }

    function closeContainer6(tmp_add_car) {
      $('#' + tmp_add_car).hide();
    }

    function toggleContainer6(url_, tmp_add_car) {
      if ($('#' + tmp_add_car).is(':visible')) {
        closeContainer6(tmp_add_car);
      } else {
        ajax_new_v8(url_, tmp_add_car);
      }
    }


    function ajax_new_v9(url_, tmp_add_supp) {
      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_add_supp).html(data);
          // initialize_datatable();
          // initialize_datepicker();
          openContainer7(tmp_add_supp);
        }
      });
    }

    function openContainer7(tmp_add_supp) {
      $('#' + tmp_add_supp).show();
    }

    function closeContainer7(tmp_add_supp) {
      $('#' + tmp_add_supp).hide();
    }

    function toggleContainer7(url_, tmp_add_supp) {
      if ($('#' + tmp_add_supp).is(':visible')) {
        closeContainer7(tmp_add_supp);
      } else {
        ajax_new_v9(url_, tmp_add_supp);
      }
    }

    function ajax_new_v10(url_, tmp_add_oil) {
      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_add_oil).html(data);
          initialize_datatable();
          initialize_datepicker();
          openContainer8(tmp_add_oil);
        }
      });
    }

    function openContainer8(tmp_add_oil) {
      $('#' + tmp_add_oil).show();
    }

    function closeContainer8(tmp_add_oil) {
      $('#' + tmp_add_oil).hide();
    }

    function toggleContainer8(url_, tmp_add_oil) {
      if ($('#' + tmp_add_oil).is(':visible')) {
        closeContainer8(tmp_add_oil);
      } else {
        ajax_new_v10(url_, tmp_add_oil);
      }
    }

    function SoldFilter() {
      var filter = document.getElementById('filterDropdown').value;
      ajax_new('pages/sales_report_tmp.php?filter=' + filter, 'tmp');
    }

    function Show_user() {
      $.ajax({
        url: "customer/customer.php",
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#maincontent').html(data);
          initialize_datatable();
          initialize_datepicker();
        }
      });
    }

    function ajax_new_without_search(url_, tmp_container) {
      $('#' + tmp_container).html("<div align='center'><img src='images/ajax-loader3.gif' width='15px' /></div>");

      $.ajax({
        url: url_,
        method: "post",
        data: {
          record: 1
        },
        success: function(data) {
          $('#' + tmp_container).html(data);
          $('#myTable_without').DataTable({
            searching: false
          });
          var fromDate = $('#from').val();
          var toDate = $('#to').val();

          $("#from").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: fromDate,
            dateFormat: 'yy-mm-dd'
          });

          $("#to").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: toDate,
            dateFormat: 'yy-mm-dd'
          });

        }
      });
    }

    function change_q(id, tr_id) {
      let myForm = new FormData();
      myForm.append('q_id', id);
      myForm.append('q_tr_id', tr_id);
      myForm.append('q_id_waiting', 1);

      if (id === 4) {
        show_alert('info', "This function has already been completed.");
        return;
      }

      let m;
      if (id == 0) {
        m = "Waiting";
      } else if (id == 1) {
        m = "Carwash";
      } else if (id == 2) {
        m = "Under Chassis";
      } else {
        m = "Detailing";
      }

      swal.fire({
        title: "Queue Confirmation",
        text: "Are you sure you want to move this car to the " + m + " queue?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Move to " + m,
        cancelButtonText: "Cancel"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'pages/orders.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', "The car has been successfully moved to the '" + m + "' queue.");
            },
            error: function() {
              Swal.fire('Error', 'Failed to process the request. Please try again.', 'error');
            }
          });
        } else {
          console.log("Queue change canceled.");
        }
      });
    }


    // function set_q(id) {
    //   switch (id) {
    //     case 0:
    //       change_q(id);
    //       break;
    //     case 1: //carwash
    //       change_q(id);
    //       break;
    //     case 2: //under chassis
    //       change_q(id);
    //       break;
    //     case 3: //detailing
    //       change_q(id);
    //       break;
    //       // default:
    //       //   break;
    //   }
    // }

    function submenu(id) {
      switch (id) {
        case 1:
          ajax_new('customer/customer.php', 'tmp_content');
          break;
        case 2:
          ajax_new_to_load('pages/orders.php', 'tmp_content');
          break;
        case 3:
          ajax_new_without_search('pages/inventory_product.php', 'tmp_content');
          break;

      }
    }


    function submenu_(id) {
      switch (id) {
        case 1:
          ajax_new_to_load('pages/sales_report.php', 'tmp_content');
          break;
        case 2:
          ajax_new_to_load('pages/transaction_report.php', 'tmp_content');
          break;
        case 3:
          ajax_new_to_load('pages/inventory_product.php', 'tmp_content');
          break;
        case 4:
          ajax_new_to_load('pages/servicereport.php', 'tmp_content');
          break;

      }
    }

    function submenu__(id) {
      switch (id) {
        case 1:
          ajax_new('inventory/inventory.php', 'tmp_content');
          break;
        case 2:
          ajax_new('inventory/from_oil.php', 'tmp_content');
          break;
        case 3:
          ajax_new('inventory/from.php', 'tmp_content');
          break;
        case 4:
          ajax_new('inventory/beginning_inventory.php', 'tmp_content');
          break;
      }
    }

    function submenu___(id) {
      switch (id) {
        case 1:
          ajax_new('supplier/supplier.php', 'tmp_content');
          break;
        case 2:
          ajax_new('receiveorder/received_draft.php', 'tmp_content');
          break;
        case 3:
          ajax_new_without_search_ok('receiveorder/received', 'tmp_content');
          break;
        case 4:
          ajax_new('supplier/suppliertype.php', 'tmp_content');
          break;
      }
    }


    function submenu____(id) {
      switch (id) {
        case 1:
          ajax_new('car/car.php', 'tmp_content');
          break;
        case 2:
          ajax_new('car/cartype.php', 'tmp_content');
          break;
        case 3:
          ajax_new('customer/customer.php', 'tmp_content');
          break;
        case 4:
          ajax_new('pages/customer_details_sheet.php', 'tmp_content');
          break;
      }
    }


    function submenuXX____(id) {
      switch (id) {
        case 1:
          ajax_new('product/product.php', 'tmp_content');
          break;
        case 2:
          ajax_new('service/service.php', 'tmp_content');
          break;
        case 3:
          ajax_new('package/package.php', 'tmp_content');
          break;
        case 4:
          ajax_new('marketing/marketing.php', 'tmp_content');
          break;

        case 5:
          ajax_new('pms/pms_odometer.php', 'tmp_content');
          break;

        case 6:
          ajax_new('pms/pms_months.php', 'tmp_content');
          break;

        case 7:
          ajax_new('pms/pms_criteria.php', 'tmp_content');
          break;

        case 8:
          ajax_new('pms/pms_atf.php', 'tmp_content');
          break;

        case 9:
          ajax_new('pms/pms_atf_manual.php', 'tmp_content');
          break;

        case 10:
          ajax_new('pms/pms_fuel.php', 'tmp_content');
          break;

        case 11:
          ajax_new('pms/pms_timing.php', 'tmp_content');
          break;
      }
    }


    function subMenuYYY(id) {
      switch (id) {
        case 1:
          ajax_new('pms/pms.php', 'tmp_content');
          break;
        case 2:
          ajax_new('pms/pms_profile.php', 'tmp_content');
          break;
      }
    }

    function submenu_____(id) {
      switch (id) {
        case 1:
          ajax_new('employee/employee.php', 'tmp_content');
          break;
        case 2:
          ajax_new('employee/att_from.php', 'tmp_content');
          break;
        case 3:
          ajax_new('employee/vale.php', 'tmp_content');
          break;
        case 4:
          ajax_new('employee/salary.php', 'tmp_content');
          break;
        case 5:
          ajax_new('employee/benefit.php', 'tmp_content');
          break;
      }
    }

    function submenu_car(id) {
      switch (id) {
        case 1:
          ajax_new('Car/car_engine.php', 'tmp_content');
          break;
        case 2:
          ajax_new('Car/car_make.php', 'tmp_content');
          break;
        case 3:
          ajax_new('Car/car_typekita.php', 'tmp_content');
          break;
        case 4:
          ajax_new('tool/tool_insert.php', 'tmp_content');
          break;
        case 5:
          ajax_new('prod/prod.php', 'tmp_content');
          break;
        case 6:
          ajax_new('category/category.php', 'tmp_content');
          break;
        case 7:
          ajax_new('receiveorder/setup_children.php', 'tmp_content');
          break;
        case 8:
          ajax_new('service/service_type.php', 'tmp_content');
          break;
      }
    }




    //edit_me
    function edit_me(accountid) {
      //var groupname = object('groupname').value;
      //if (groupname !== '') {
      let myForm = new FormData();
      myForm.append('sample', object('sample').value);
      myForm.append('accountid', accountid);
      myForm.append('edit', 1);
      Swal.fire({
        title: "Group",
        text: "Are you sure you want to update this Group?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, update it!",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'pages/orders.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    //kapag post
    function ajax_get_idnum_1(name_of_id, id, url_, tmp_container) {
      let myForm = new FormData();
      myForm.append(name_of_id, id);
      $('#' + tmp_container).html("<div align='center'><img src='images/ajax-loader3.gif' width='15px' /></div>");
      $.ajax({
        url: url_,
        type: "POST",
        data: myForm,
        processData: false,
        contentType: false,
        success: function(data) {
          $('#' + tmp_container).html(data);
          initialize_datatable();
          initialize_datepicker();
        }
      });
    }

    function clear_field() {
      var textField = object('psearch');
      if (textField) {
        textField.value = '';
      } else {
        console.error('Text field with ID "' + fieldId + '" not found.');
      }
    }

    //2 id
    function ajax_get_idnum_2(name_of_id2, id2, name_of_id, id, url_, tmp_container) {
      let myForm = new FormData();
      myForm.append(name_of_id, id);
      myForm.append(name_of_id2, id2);
      //$('#'+tmp_container).html("<div align='center'><img src='images/ajax-loader3.gif' width='15px' /></div>");
      $.ajax({
        url: url_,
        type: "POST",
        data: myForm,
        processData: false,
        contentType: false,
        success: function(data) {
          $('#' + tmp_container).html(data);
          initialize_datatable();
          initialize_datepicker();
        }
      });
    }


    function add_acc() {
      let firstname = object('firstname').value;
      let middlename = object('middlename').value;
      let lastname = object('lastname').value;
      let dob = object('dob').value;
      let roleid = object('roleid').value;
      let emailaddress = object('emailaddress').value;
      let employment_status = object('employment_status').value;
      let note_resigned = object('note_resigned').value;
      let start_date = object('start_date').value;

      if (!firstname) {
        show_alert('info', 'Please input first name');
        return;
      }
      if (!lastname) {
        show_alert('info', 'Please input last name');
        return;
      }
      if (!dob) {
        show_alert('info', 'Please input date of birth');
        return;
      }
      if (!start_date) {
        show_alert('info', 'Please input date of hired');
        return;
      }
      if (roleid == 0) {
        show_alert('info', 'Please select role');
        return;
      }
      if (employment_status == 0) {
        show_alert('info', 'Please select employment status');
        return;
      }

      let myForm = new FormData();
      myForm.append('firstname', firstname);
      myForm.append('middlename', middlename);
      myForm.append('lastname', lastname);
      myForm.append('dob', dob);
      myForm.append('roleid', roleid);
      myForm.append('emailaddress', emailaddress);
      myForm.append('employment_status', employment_status);
      myForm.append('start_date', start_date);
      myForm.append('note_resigned', note_resigned);
      myForm.append('add', 1);

      Swal.fire({
        title: "Employee",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'employee/employee.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    function edit_acc(accountid) {
      //var groupname = object('groupname').value;
      //if (groupname !== '') {

      let employment_status = object('employment_status').value;
      let note_resigned = object('note_resigned').value;


      let myForm = new FormData();
      myForm.append('firstname', object('firstname').value);
      myForm.append('middlename', object('middlename').value);
      myForm.append('lastname', object('lastname').value);
      myForm.append('dob', object('dob').value);
      myForm.append('roleid', object('roleid').value);
      myForm.append('emailaddress', object('emailaddress').value);
      myForm.append('start_date', object('start_date').value);
      myForm.append('employment_status', employment_status);
      myForm.append('note_resigned', note_resigned);
      myForm.append('edit', accountid);

      if (!object('firstname').value) {
        show_alert('info', 'Please input first name');
        return;
      }
      if (!object('lastname').value) {
        show_alert('info', 'Please input last name');
        return;
      }
      if (!object('dob').value) {
        show_alert('info', 'Please input date of birth');
        return;
      }
      if (!object('start_date').value) {
        show_alert('info', 'Please input date hired');
        return;
      }
      if (object('roleid').value == 0) {
        show_alert('info', 'Please select role');
        return;
      }
      if (employment_status == 0) {
        show_alert('info', 'Please select employment status');
        return;
      }
      Swal.fire({
        title: "Employee",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'employee/employee.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }

    function edit_pfp(accountid) {
      let myForm = new FormData();
      myForm.append('firstname', document.getElementById('firstname').value);
      myForm.append('middlename', document.getElementById('middlename').value);
      myForm.append('lastname', document.getElementById('lastname').value);
      myForm.append('dob', document.getElementById('dob').value);
      myForm.append('emailaddress', document.getElementById('emailaddress').value);
      myForm.append('username', document.getElementById('username').value);
      myForm.append('accountpassword', document.getElementById('accountpassword').value);
      myForm.append('edit', accountid);

      Swal.fire({
        title: "Update Profile",
        text: "Are you sure you want to update your profile?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, update it!",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'profile/profile.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error processing request', 'error');
            }
          });
        }
      });
    }


    //customer
    function add_f() {
      let firstname = object('firstname').value;
      let middlename = object('middlename').value;
      let lastname = object('lastname').value;
      let phonenumber = object('phonenumber').value;
      let street = object('street').value;
      let brgyid = object('brgyid').value;
      let cityid = object('cityid').value;
      let provid = object('provid').value;
      let branchid = object('branchid').value;
      let companyaddress = object('companyaddress').value;

      if (!firstname) {
        show_alert('info', 'Please input first name');
        return;
      }

      let myForm = new FormData();
      myForm.append('firstname', firstname);
      myForm.append('middlename', middlename);
      myForm.append('lastname', lastname);
      myForm.append('phonenumber', phonenumber);
      myForm.append('street', street);
      myForm.append('brgyid', brgyid);
      myForm.append('cityid', cityid);
      myForm.append('provid', provid);
      myForm.append('branchid', branchid);
      myForm.append('companyname', object('companyname').value);
      myForm.append('companyaddress', object('companyaddress').value);
      myForm.append('tinnumber', object('tinnumber').value);
      myForm.append('add', 1);

      Swal.fire({
        title: "Customer",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'customer/customer.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    function edit_f(customerid) {
      //var groupname = object('groupname').value;
      //if (groupname !== '') {
      let myForm = new FormData();
      myForm.append('firstname', object('firstname').value);
      myForm.append('middlename', object('middlename').value);
      myForm.append('lastname', object('lastname').value);
      myForm.append('phonenumber', object('phonenumber').value);
      myForm.append('street', object('street').value);
      myForm.append('brgyid', object('brgyid').value);
      myForm.append('cityid', object('cityid').value);
      myForm.append('provid', object('provid').value);
      myForm.append('branchid', object('branchid').value);
      myForm.append('companyname', object('companyname').value);
      myForm.append('companyaddress', object('companyaddress').value);
      myForm.append('tinnumber', object('tinnumber').value);
      myForm.append('edit', customerid);
      if (!object('firstname').value) {
        show_alert('info', 'Please input first name');
        return;
      }
      Swal.fire({
        title: "Customer",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'customer/customer.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }
    //car
    function add_car() {
      let platenumber = object('platenumber').value;
      let brand = object('brand').value;
      let customerid = object('customerid').value;
      let customername = object('customername').value;
      let firstnamec = object('firstnamec').value;
      let uid = object('uid').value;
      let id = object('id').value;

      let info = object('info').value;
      let make = object('make').value;
      let model = object('model').value;
      let type_car = object('type_car').value;
      let engine_size = object('engine_size').value;
      let chassisno = object('chassisno').value;
      let color = object('color').value;
      let note = object('note').value;

      if (!platenumber) {
        show_alert('info', 'Please input plate number');
        return;
      }
      if (!brand) {
        show_alert('info', 'Please input vehicle name');
        return;
      }
      if (id == 0) {
        show_alert('info', 'Please select vehicle type');
        return;
      }
      if (customerid == 0) {
        show_alert('info', 'Please select customer');
        return;
      }



      let myForm = new FormData();
      myForm.append('info', info);
      myForm.append('make', make);
      myForm.append('model', model);
      myForm.append('type_car', type_car);
      myForm.append('engine_size', engine_size);
      myForm.append('chassisno', chassisno);
      myForm.append('note', note);
      myForm.append('color', color);


      myForm.append('platenumber', platenumber);
      myForm.append('brand', brand);
      myForm.append('customerid', customerid);
      myForm.append('customername', customername);
      myForm.append('firstnamec', firstnamec);
      myForm.append('uid', uid);
      myForm.append('id', id);
      myForm.append('add', 1);

      Swal.fire({
        title: "Customer",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'car/car.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function get_link_customer() {
      var str = object('str').value;
      if (str === '') {
        Swal.fire({
          icon: 'info',
          text: 'Do not leave the search by name or plate number empty. Please check the plate number and the spelling you entered.',
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 7000, // Adjust as needed
          timerProgressBar: true
        });
      } else {
        TINY.box.show({
          url: 'car/car_add_shortcut.php?plate=' + str,
          width: 600,
          height: 540
        });
      }
    }


    function add_car_shortcut() {
      let platenumber = object('platenumber').value;
      let brand = object('brand').value;
      let customerid = object('customerid').value;
      let customername = object('customername').value;
      let firstnamec = object('firstnamec').value;
      let uid = object('uid').value;
      let id = object('id').value;

      let info = object('info').value;
      let make = object('make').value;
      let model = object('model').value;
      let type_car = object('type_car').value;
      let engine_size = object('engine_size').value;
      let chassisno = object('chassisno').value;
      let color = object('color').value;
      let note = object('note').value;


      if (!platenumber) {
        show_alert('error', 'Please fill plate number');
        return;
      }
      if (!brand) {
        show_alert('error', 'Please fill vehicle name');
        return;
      }
      if (id == 0) {
        show_alert('error', 'Please select vehicle type');
        return;
      }
      if (customerid == 0) {
        show_alert('error', 'Please select customer');
        return;
      }



      let myForm = new FormData();
      myForm.append('info', info);
      myForm.append('make', make);
      myForm.append('model', model);
      myForm.append('type_car', type_car);
      myForm.append('engine_size', engine_size);
      myForm.append('chassisno', chassisno);
      myForm.append('note', note);
      myForm.append('color', color);


      myForm.append('platenumber', platenumber);
      myForm.append('brand', brand);
      myForm.append('customerid', customerid);
      myForm.append('customername', customername);
      myForm.append('firstnamec', firstnamec);
      myForm.append('uid', uid);
      myForm.append('id', id);
      myForm.append('add_shortcut', 1);

      Swal.fire({
        title: "Customer",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          /*
	onclick="ajax_fn(\'pages/order_choose_services.php?customerid='.$rw['customerid'].'&carid='.$rw['carid'].'&price='.$price.'\',\'tmp_s\');"
        	*/
          $.ajax({
            url: 'pages/order_choose_services2.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_s").html(data);
              $("#tmp_s").css('opacity', '1');
              //initialize_datatable();
              initialize_datepicker();
              //Swal.fire('Success', 'Successfully Processed Request', 'success');
              TINY.box.show({
                html: 'Processing Request',
                animate: false,
                close: false,
                mask: false,
                boxid: 'success',
                autohide: 2
              });
              show_alert('success', 'Successfully Processed Request');

            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }




    function edit_car(carid) {
      //var groupname = object('groupname').value;
      //if (groupname !== '') {
      let info = object('info').value;
      let make = object('make').value;
      let model = object('model').value;
      let type_car = object('type_car').value;
      let engine_size = object('engine_size').value;
      let chassisno = object('chassisno').value;
      let color = object('color').value;
      let note = object('note').value;

      let myForm = new FormData();
      myForm.append('platenumber', object('platenumber').value);
      myForm.append('brand', object('brand').value);
      myForm.append('customerid', object('customerid').value);
      myForm.append('id', object('id').value);
      myForm.append('info', info);
      myForm.append('make', make);
      myForm.append('model', model);
      myForm.append('type_car', type_car);
      myForm.append('engine_size', engine_size);
      myForm.append('chassisno', chassisno);
      myForm.append('note', note);
      myForm.append('color', color);
      myForm.append('edit', carid);

      if (!object('platenumber').value) {
        show_alert('info', 'Please input plate number');
        return;
      }
      if (!object('brand').value) {
        show_alert('info', 'Please input vehicle name');
        return;
      }
      if (object('id').value == 0) {
        show_alert('info', 'Please select vehicle');
        return;
      }
      if (object('customerid').value == 0) {
        show_alert('info', 'Please select customer');
        return;
      }


      Swal.fire({
        title: "Customer",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'car/car.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }

    //products
    //1 or 3 Product and Oil
    function add_p() {
      let prodnameid = object('prodnameid').value;
      let catid = object('catid').value;
      let typeid = object('typeid').value;
      let prodname = object('prodname').value;
      let alertlvl = object('alertlvl').value;
      let unitid = object('unitid').value;
      let volume = object('volume').value;
      let subtypeid = object('subtypeid').value;
      let reference_prodid = object('reference_prodid').value;
      let supplierid = object('supplierid').value;
      let unit_of_drum = object('unit_of_drum').value;

      let is_part_pms = object('is_part_pms').checked ? 1 : 0;
      let is_part_pms_odometer = object('is_part_pms_odometer').value;

      if (prodnameid == 0) {
        show_alert('info', 'Please select brand');
        return;
      }
      if (catid == 0) {
        show_alert('info', 'Please select category');
        return;
      }
      if (typeid == 0) {
        show_alert('info', 'Please select type');
        return;
      }
      if (prodname == 0) {
        show_alert('info', 'Please input product name');
        return;
      }
      if (unitid == 0) {
        show_alert('info', 'Please select unit');
        return;
      }
      if (supplierid == 0) {
        show_alert('info', 'Please select supplier');
        return;
      }

      if (unitid != 4 && unitid != 7) { //4 pcs ,  7 pack
        if (volume == '' || volume == 0) {
          show_alert('warning', 'Please input volume');
          return;
        }
      }

      if (unitid == 1) {
        if (unit_of_drum == 0) {
          show_alert('warning', 'Please select unit for drum');
          return;
        }
      }

      let myForm = new FormData();
      myForm.append('prodnameid', prodnameid);
      myForm.append('catid', catid);
      myForm.append('typeid', typeid);
      myForm.append('prodname', prodname);
      myForm.append('alertlvl', alertlvl);
      myForm.append('unitid', unitid);
      myForm.append('volume', volume);
      myForm.append('subtypeid', subtypeid);
      myForm.append('reference_prodid', reference_prodid);
      myForm.append('supplierid', supplierid);
      myForm.append('unit_of_drum', unit_of_drum);
      myForm.append('is_part_pms', is_part_pms);
      myForm.append('is_part_pms_odometer', is_part_pms_odometer);
      myForm.append('add', 1);

      Swal.fire({
        title: "Product",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Processing...",
            text: "Please wait while we process your transaction.",
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
              Swal.showLoading();
            },
          });
          $.ajax({
            url: 'product/product.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    function hide_reference(unitid) { //monica_
      if (unitid == 1) {
        ajax_fn('product/choose_to_add.php?unitid=' + unitid, 'xx_monica');
      } else if (unitid == 2) {
        ajax_fn('product/choose_to_add.php?unitid=' + unitid, 'xx_monica');
      } else if (unitid == 3) {
        ajax_fn('product/choose_to_add.php?unitid=' + unitid, 'xx_monica');
      } else if (unitid == 6) {
        ajax_fn('product/choose_to_add.php?unitid=' + unitid, 'xx_monica');
      } else {
        ajax_fn('product/choose_to_add.php?unitid=' + unitid, 'xx_monica');
      }
    }

    function edit_p(prodid) {
      let prodnameid = object('prodnameid').value;
      let catid = object('catid').value;
      let typeid = object('typeid').value;
      let prodname = object('prodname').value;
      let alertlvl = object('alertlvl').value;
      let unitid = object('unitid').value;
      let volume = object('volume').value;
      let subtypeid = object('subtypeid').value;
      let reference_prodid = object('reference_prodid').value;
      let supplierid = object('supplierid').value;
      let unit_of_drum = object('unit_of_drum').value;
      let is_part_pms = object('is_part_pms').checked ? 1 : 0;
      let is_part_pms_odometer = object('is_part_pms_odometer').value;

      if (prodnameid == 0) {
        show_alert('info', 'Please select brand');
        return;
      }
      if (catid == 0) {
        show_alert('info', 'Please select category');
        return;
      }
      if (typeid == 0) {
        show_alert('info', 'Please select type');
        return;
      }
      if (prodname == 0) {
        show_alert('info', 'Please input product name');
        return;
      }
      if (unitid == 0) {
        show_alert('info', 'Please select unit');
        return;
      }
      if (supplierid == 0) {
        show_alert('info', 'Please select supplier');
        return;
      }

      if (unitid != 4 && unitid != 7) {
        if (volume == '' || volume == 0) {
          show_alert('warning', 'Please input volume');
          return;
        }
      }

      if (unitid == 1) {
        if (unit_of_drum == 0) {
          show_alert('warning', 'Please select unit for drum');
          return;
        }
      }

      let myForm = new FormData();
      myForm.append('prodnameid', prodnameid);
      myForm.append('catid', catid);
      myForm.append('typeid', typeid);
      myForm.append('prodname', prodname);
      myForm.append('alertlvl', alertlvl);
      myForm.append('unitid', unitid);
      myForm.append('volume', volume);
      myForm.append('subtypeid', subtypeid);
      myForm.append('reference_prodid', reference_prodid);
      myForm.append('supplierid', supplierid);
      myForm.append('unit_of_drum', unit_of_drum);
      myForm.append('is_part_pms', is_part_pms);
      myForm.append('is_part_pms_odometer', is_part_pms_odometer);
      myForm.append('edit', prodid);
      Swal.fire({
        title: "Product",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Processing...",
            text: "Please wait while we process your transaction.",
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
              Swal.showLoading();
            },
          });
          $.ajax({
            url: 'product/product.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }

    //oil

    function add_oil() {
      let prodnameid = object('prodnameid').value;
      let prodname = object('prodname').value;
      let catid = object('catid').value;
      let volume = object('volume').value;
      let unitid = object('unitid').value;
      let typeid = object('typeid').value;
      let subtypeid = object('subtypeid').value;
      let statid = object('statid').value;
      let reference_prodid = object('reference_prodid').value;

      if (!prodnameid || !prodname || !catid || !unitid || !typeid || !subtypeid || !statid) {
        Swal.fire('Error', 'Please fill in all required fields', 'error');
        return;
      }

      let myForm = new FormData();
      myForm.append('prodnameid', prodnameid);
      myForm.append('prodname', prodname);
      myForm.append('catid', catid);
      myForm.append('volume', volume);
      myForm.append('unitid', unitid);
      myForm.append('typeid', typeid);
      myForm.append('subtypeid', subtypeid);
      myForm.append('statid', statid);
      myForm.append('reference_prodid', reference_prodid);
      myForm.append('is_mother', object('is_mother').value);
      myForm.append('alertlvl', object('alertlvl').value);
      myForm.append('add', 1);

      Swal.fire({
        title: "Oil",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'product/oil.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              Swal.fire({
                icon: 'success',
                text: 'Successfully Processed Request',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
              });
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function edit_oil(prodid) {
      let myForm = new FormData();
      myForm.append('prodnameid', object('prodnameid').value);
      myForm.append('prodname', object('prodname').value);
      myForm.append('catid', object('catid').value);
      myForm.append('volume', object('volume').value);
      myForm.append('unitid', object('unitid').value);
      myForm.append('typeid', object('typeid').value);
      myForm.append('subtypeid', object('subtypeid').value);
      myForm.append('statid', object('statid').value);
      myForm.append('reference_prodid', object('reference_prodid').value);
      myForm.append('is_mother', object('is_mother').value);
      myForm.append('alertlvl', object('alertlvl').value);
      myForm.append('edit', prodid);

      Swal.fire({
        title: "Oil",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'product/oil.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              Swal.fire({
                icon: 'success',
                text: 'Successfully Processed Request',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
              });
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    // category

    function add_cat() {
      let categoryname = object('categoryname').value;

      if (!categoryname) {
        show_alert('info', 'Please input category name');
        return;
      }

      let myForm = new FormData();
      myForm.append('categoryname', object('categoryname').value);
      myForm.append('add', 1);
      Swal.fire({
        title: "Category",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'category/category.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              //Swal.fire('Success', 'Successfully Processed Request', 'success');
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }

    function edit_cat(catid) {
      //var groupname = object('groupname').value;
      //if (groupname !== '') {
      let myForm = new FormData();
      myForm.append('categoryname', object('categoryname').value);
      myForm.append('edit', catid);
      if (!object('categoryname').value) {
        show_alert('info', 'Please input category name');
        return;
      }
      Swal.fire({
        title: "Category",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'category/category.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }

    // Attendance Functions

    function add_att() {
      let timein = object('timein').value;
      let timeout = object('timeout').value;
      let timeout_lunch = object('timeout_lunch').value;
      let timein_lunch = object('timein_lunch').value;
      let accountid = object('accountid').value;

      if (accountid == "0") {
        show_alert('warning', 'Please select an employee before adding attendance');
        return;
      }

      let myForm = new FormData();
      myForm.append('timein', timein);
      myForm.append('timeout', timeout);
      myForm.append('accountid', accountid);
      myForm.append('timeout_lunch', timeout_lunch);
      myForm.append('timein_lunch', timein_lunch);
      myForm.append('add', 1);

      Swal.fire({
        title: "Attendance",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'employee/att_from.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function edit_att(attendanceid) {
      let timein = object('timein').value;
      let timeout = object('timeout').value;
      let accountid = object('accountid').value;
      let timeout_lunch = object('timeout_lunch').value;
      let timein_lunch = object('timein_lunch').value;
      if (accountid == "0") {
        show_alert('warning', 'Please select an employee before adding attendance');
        return;
      }

      let myForm = new FormData();
      myForm.append('timein', timein);
      myForm.append('timeout', timeout);
      myForm.append('accountid', accountid);
      myForm.append('timeout_lunch', timeout_lunch);
      myForm.append('timein_lunch', timein_lunch);

      myForm.append('edit', attendanceid);

      Swal.fire({
        title: "Attendance",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'employee/att_from.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }



    //product type 

    function add_prod() {
      let pname = object('pname').value;

      if (!pname) {
        show_alert('info', 'Please input product type');
        return;
      }

      let myForm = new FormData();
      myForm.append('pname', object('pname').value);
      myForm.append('add', 1);
      Swal.fire({
        title: "Brand",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'prod/prod.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }

    function edit_prod(prodnameid) {
      //var groupname = object('groupname').value;
      //if (groupname !== '') {
      let myForm = new FormData();
      myForm.append('pname', object('pname').value);

      myForm.append('edit', prodnameid);


      if (!object('pname').value) {
        show_alert('info', 'Please input product type');
        return;
      }

      Swal.fire({
        title: "Brand",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'prod/prod.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }

    function add_odometer() {
      let range_ = object('range_').value;
      let range_unit = object('range_unit').value;

      if (!range_) {
        show_alert('info', 'Please input odometer');
        return;
      }
      if (!range_unit) {
        show_alert('info', 'Please input range');
        return;
      }

      let myForm = new FormData();
      myForm.append('range_', object('range_').value);
      myForm.append('range_unit', object('range_unit').value);
      myForm.append('add', 1);
      Swal.fire({
        title: "Odometer",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'pms/pms_odometer.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }

    function edit_odometer(id) {
      //var groupname = object('groupname').value;
      //if (groupname !== '') {
      let range_unit = object('range_unit').value;
      let myForm = new FormData();
      myForm.append('range_', object('range_').value);
      myForm.append('range_unit', object('range_unit').value);
      myForm.append('edit', id);


      if (!object('range_').value) {
        show_alert('info', 'Please input odometer');
        return;
      }
      if (!range_unit) {
        show_alert('info', 'Please input range');
        return;
      }

      Swal.fire({
        title: "Odometer",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'pms/pms_odometer.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }


    function add_month() {
      let month_ = object('month_').value;

      if (!month_) {
        show_alert('info', 'Please input month');
        return;
      }

      let myForm = new FormData();
      myForm.append('month_', object('month_').value);
      myForm.append('add', 1);
      Swal.fire({
        title: "Month",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'pms/pms_months.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }

    function edit_month(id) {
      //var groupname = object('groupname').value;
      //if (groupname !== '') {
      let myForm = new FormData();
      myForm.append('month_', object('month_').value);

      myForm.append('edit', id);


      if (!object('month_').value) {
        show_alert('info', 'Please input month');
        return;
      }

      Swal.fire({
        title: "Month",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'pms/pms_months.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }


    // setup unit

    function add_unit() {
      let unitname = object('unitname').value;

      if (!unitname) {
        show_alert('warning', 'Required all fieds');
        return;
      }

      let myForm = new FormData();
      myForm.append('unitname', object('unitname').value);
      myForm.append('add', 1);
      Swal.fire({
        title: "Unit",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'category/setup_unit.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }

    function edit_unit(unitid) {
      //var groupname = object('groupname').value;
      //if (groupname !== '') {
      let myForm = new FormData();
      myForm.append('unitname', object('unitname').value);
      myForm.append('edit', unitid);
      Swal.fire({
        title: "Unit",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'category/setup_unit.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }




    function setIsHaveCar() {
      var plateNumberInput = document.getElementById('platenumber');
      var isHaveCarInput = document.getElementById('is_have_car');

      if (plateNumberInput.value !== '') {
        isHaveCarInput.value = '1';
      } else {
        isHaveCarInput.value = '';
      }
    }

    //inventory

    function add_inventory() {
      let prodid = object('prodid').value;
      let qtyin = object('qtyin').value;
      let product_price = object('product_price').value;

      if (!prodid || !qtyin || !product_price) {
        Swal.fire('Error', 'Please fill in all required fields', 'error');
        return;
      }
      let myForm = new FormData();
      myForm.append('prodid', object('prodid').value);
      myForm.append('qtyin', object('qtyin').value);
      myForm.append('product_price', object('product_price').value);
      myForm.append('add', 1);
      Swal.fire({
        title: "Product",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'inventory/inventory.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }

    function edit_inventory(inventoryid) {
      //var groupname = object('groupname').value;
      //if (groupname !== '') {
      let myForm = new FormData();
      myForm.append('prodid', object('prodid').value);
      myForm.append('qtyin', object('qtyin').value);
      myForm.append('product_price', object('product_price').value);
      myForm.append('edit', inventoryid);
      Swal.fire({
        title: "Product",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'inventory/inventory.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }

    // supplier

    function add_supp() {
      let suppliername = object('suppliername').value;
      let companyname = object('companyname').value;
      let poc = object('poc').value;
      let mobilenumber = object('mobilenumber').value;
      let emailaddress = object('emailaddress').value;
      let address = object('address').value;
      let supp_id = object('supp_id').value;

      // if (!suppliername || !companyname || !poc || !mobilenumber || !emailaddress || !address) {
      //     Swal.fire('Error', 'Please fill in all required fields', 'error');
      //     return; 
      // }

      if (!suppliername) {
        show_alert('info', 'Please input supplier name');
        return;
      }
      if (!companyname) {
        show_alert('info', 'Please input company name');
        return;
      }
      if (!poc) {
        show_alert('info', 'Please input supplier point of contact');
        return;
      }
      if (!mobilenumber) {
        show_alert('info', 'Please input contact number');
        return;
      }
      if (!emailaddress) {
        show_alert('info', 'Please input email address');
        return;
      }
      if (!address) {
        show_alert('info', 'Please input supplier address');
        return;
      }
      if (supp_id == 0) {
        show_alert('info', 'Please select supplier type');
        return;
      }

      let myForm = new FormData();
      myForm.append('suppliername', suppliername);
      myForm.append('companyname', companyname);
      myForm.append('poc', poc);
      myForm.append('mobilenumber', mobilenumber);
      myForm.append('emailaddress', emailaddress);
      myForm.append('address', address);
      myForm.append('supp_id', supp_id);
      myForm.append('add', 1);

      Swal.fire({
        title: "Supplier",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'supplier/supplier.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function edit_supp(supplierid) {
      let suppliername = object('suppliername').value;
      let companyname = object('companyname').value;
      let poc = object('poc').value;
      let mobilenumber = object('mobilenumber').value;
      let emailaddress = object('emailaddress').value;
      let address = object('address').value;
      let supp_id = object('supp_id').value;

      if (!suppliername) {
        show_alert('info', 'Please input supplier name');
        return;
      }
      if (!companyname) {
        show_alert('info', 'Please input company name');
        return;
      }
      if (!poc) {
        show_alert('info', 'Please input supplier point of contact');
        return;
      }
      if (!mobilenumber) {
        show_alert('info', 'Please input contact number');
        return;
      }
      if (!emailaddress) {
        show_alert('info', 'Please input email address');
        return;
      }
      if (!address) {
        show_alert('info', 'Please input supplier address');
        return;
      }
      if (supp_id == 0) {
        show_alert('info', 'Please select supplier type');
        return;
      }

      let myForm = new FormData();
      myForm.append('suppliername', suppliername);
      myForm.append('companyname', companyname);
      myForm.append('poc', poc);
      myForm.append('mobilenumber', mobilenumber);
      myForm.append('emailaddress', emailaddress);
      myForm.append('address', address);
      myForm.append('supp_id', supp_id);
      myForm.append('edit', supplierid);

      Swal.fire({
        title: "Supplier",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'supplier/supplier.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    function add_supp_type() {
      let supplier_type = object('supplier_type').value;

      if (!supplier_type) {
        show_alert('info', 'Please input supplier type');
        return;
      }

      let myForm = new FormData();
      myForm.append('supplier_type', supplier_type);
      myForm.append('add', 1);

      Swal.fire({
        title: "Supplier Type",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'supplier/suppliertype.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function edit_supp_type(supplierid) {
      let supplier_type = object('supplier_type').value;

      if (!supplier_type) {
        show_alert('info', 'Please input supplier type');
        return;
      }

      let myForm = new FormData();
      myForm.append('supplier_type', supplier_type);
      myForm.append('edit', supplierid);

      Swal.fire({
        title: "Supplier Type",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'supplier/suppliertype.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }



    //add new for customer section
    function addnew() {
      var newSection = document.getElementById("newSection");
      if (newSection.style.display === "none") {
        newSection.style.display = "block";
      } else {
        newSection.style.display = "none";
      }
    }


    function tmp_add_item() {
      var invid = object('invid').value;
      var qty;
      if (object('qty').value) {
        qty = object('qty').value;
      } else {
        qty = 1;
      };
      var price = object('price').value;
      var discountstring = object('discountstring').value;
      var commission_ = object('commission_').value;
      var laborid = object('laborid').value;

      let odometerElement = object('odometer');
      let is_odometer = 0; // Default value if the element doesn't exist

      let odometerElementAuto = object('odometer_atf');
      let is_odometer_atf = 0; // Default value if the element doesn't exist

      let odometerElementManual = object('odometer_atf_manual');
      let is_odometer_atf_manual = 0; // Default value if the element doesn't exist

      let odometerElementFuel = object('odometer_fuel');
      let is_odometer_fuel = 0; // Default value if the element doesn't exist

      let odometerElementTiming = object('odometer_timing');
      let is_odometer_timing = 0; // Default value if the element doesn't exist

      if (odometerElement) {
        is_odometer = odometerElement.value;
        console.log('Odometer Value:', is_odometer);
      } else {
        console.error('Element with ID "odometer" not found. Using default value 0.');
      }

      if (odometerElementAuto) {
        is_odometer_atf = odometerElementAuto.value;
        console.log('Odometer Value:', is_odometer_atf);
      } else {
        console.error('Element with ID "is_odometer_atf" not found. Using default value 0.');
      }


      if (odometerElementManual) {
        is_odometer_atf_manual = odometerElementManual.value;
        console.log('Odometer Value:', is_odometer_atf_manual);
      } else {
        console.error('Element with ID "is_odometer_atf_manual" not found. Using default value 0.');
      }

      if (odometerElementFuel) {
        is_odometer_fuel = odometerElementFuel.value;
        console.log('Odometer Value:', is_odometer_fuel);
      } else {
        console.error('Element with ID "is_odometer_fuel" not found. Using default value 0.');
      }


      if (odometerElementTiming) {
        is_odometer_timing = odometerElementTiming.value;
        console.log('Odometer Value:', is_odometer_timing);
      } else {
        console.error('Element with ID "is_odometer_timing" not found. Using default value 0.');
      }


      let myForm = new FormData();
      myForm.append('invid', invid);
      myForm.append('qty', qty);
      myForm.append('price', price);
      myForm.append('discountstring', discountstring);
      myForm.append('laborid', laborid);
      myForm.append('allow_transaction', 1);
      // myForm.append('is_odometer', id_odometer);
      // myForm.append('is_odometer', is_odometer); // Append the correct variable


      if (commission_ > 0 && laborid == 0) {
        show_alert('warning', 'Please select laborer first');

        //Swal.fire({icon: 'info',title: 'Warning', text: 'Please select laborer first.!'});
      } else {



        if (invid != 0) {
          if (!isNaN(qty)) {
            if (price != '') {
              if (!isNaN(price)) {
                // ajax_fn('pages/order_new_products.php?prodid='+prodid+'&qty='+qty+'&price='+price+'&token='+token+'&customerid='+customerid+'&trdate='+encodeURIComponent(trdate),'tmp_');


                $.ajax({
                  url: 'pages/order_new_products.php?is_odometer=' + is_odometer + '&is_odometer_atf_manual=' + is_odometer_atf_manual + '&is_odometer_atf=' + is_odometer_atf + '&is_odometer_fuel=' + is_odometer_fuel + '&is_odometer_timing=' + is_odometer_timing,
                  type: "POST",
                  data: myForm,
                  contentType: false,
                  processData: false,
                  success: function(data) {
                    $("#tmp_").html(data);
                    $("#tmp_").css('opacity', '1');
                    initialize_datatable();
                    initialize_datepicker();
                    //Swal.fire('Success', 'Successfully Processed Request', 'success');
                    object('qty').value = '';
                    object('price').value = '';
                    object('discountstring').value = '';
                    object('laborid').value = 0;
                    object('psearch').value = '';
                    object('commission_').value = 0;
                    reloadDropdown();

                    //object("qty").value = 

                  },
                  error: function() {
                    Swal.fire('Error', 'Error Processing Request', 'error');
                  }
                });
              } else {
                show_alert('warning', 'Invalid numeric format on PRICE!');
                object('price').focus();
              }
            } else {
              show_alert('warning', 'Please input price');
              object('price').focus();
            }
          } else {
            show_alert('warning', 'Invalid numberic format in QTY');
            object('qty').focus();
          }
        } else {
          show_alert('warning', 'Select PRODUCT/SERVICES');
          object('invid').focus();
        }


      }

    }

    function change_laborer(id) {
      ajax_fn('pages/show_laborer.php?id=' + id, 'labor_show' + id);
    }

    function change_laborer_go(id) {
      //id_of
      var id_of = object('id_of').value;
      TINY.box.show({
        html: 'Processing Request',
        animate: false,
        close: false,
        mask: false,
        boxid: 'success',
        autohide: 2
      });
      ajax_fn('pages/show_laborer_get.php?laborer_id=' + id + '&id_of=' + id_of, 'labor_show' + id_of);

    }

    // document.getElementsByName("packageid_d")[0].onclick = function() {
    //   var packageId = this.value; // Get selected value
    //   alert(packageId); // Output the selected package ID
    // };

    // $('#packageid').on('select2:open', function() {
    //   console.log("Select2 dropdown clicked/opened!");
    // });

    // function x_de() {
    //   alert('darren');
    // }



    function tmp_add_item_package(packageid) {
      if (packageid === "0") return; // Exit if "Select Package" is chosen
      let odometerElement = object('odometer');
      let is_odometer = 0; // Default value if the element doesn't exist

      if (odometerElement) {
        is_odometer = odometerElement.value;
        console.log('Odometer Value:', is_odometer);
      } else {
        console.error('Element with ID "odometer" not found. Using default value 0.');
      }

      let myForm = new FormData();
      myForm.append('packageid', packageid);
      myForm.append('package_add_new_order', 1);

      Swal.fire({
        title: "Package",
        text: "Are you sure you want to add this Package?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'pages/order_new_products.php?is_odometer=' + is_odometer,
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,

            success: function(data) {
              $("#tmp_").html(data);
              $("#tmp_").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              document.getElementById("packageid").value = "0";
            },

            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }

          });
        } else {
          // Reset select to default if the action is canceled
          document.getElementById("packageid").value = "0";
        }
      });
    }




    // Function to reload the dropdown
    function reloadDropdown() {
      // $.ajax({
      //     url: 'pages/order_product_search.php', // URL to fetch dropdown data
      //     type: 'GET', // or 'POST' depending on your implementation
      //     success: function(response) {
      //         // Assuming the response contains the new options for the dropdown
      //         $('#invid').html(response); // Update the dropdown
      //     },
      //     error: function() {
      //         Swal.fire('Error', 'Error loading dropdown data', 'error');
      //     }
      // });
    }

    // Event listener for psearch to handle backspace
    $('#psearch').on('input', function() {
      if ($(this).val() === '') { // Check if the input is empty
        reloadDropdown(); // Reload the dropdown when psearch is cleared
      }
    });

    function get_product(invid) {
      let myForm = new FormData();
      var str = object('invid').value;
      var data_x = str.split(':::');
      var inv_id = data_x[0];
      var price_x = data_x[1];
      var subtypeid = data_x[2];

      myForm.append('invid', inv_id);
      $.ajax({
        url: 'pages/get_price.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#tmp_x").html(data);
          $("#tmp_x").css('opacity', '1');
          initialize_datatable();
          initialize_datepicker();
          object('price').value = price_x;

          // if (subtypeid == 2) {
          //     object('qty').disabled = true;

          // }

          // if (subtypeid == 1) {
          //     //object('qty').style.display = 'block';
          //     object('qty').disabled = false;
          // }

        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }


    // function process_transaction() {
    // 	var customerid = object('customerid').value;
    // 	var is_valid = object('is_valid').value;
    // 	var carid = object('carid').value;
    // 	var is_click_this = object('is_click_this').value;
    // 	var from = object('from').value;
    // 	var to = object('to').value;
    // 	var trdate = object('trdate').value;
    // 	let odometer = document.getElementById('odometer')?.value.trim() || 0;

    // 	let myForm = new FormData();
    // 	myForm.append('customerid', customerid);
    //     myForm.append('alLowRrDansaction', 1);
    //     myForm.append('from', from);
    //     myForm.append('to', to);
    //     myForm.append('carid', carid);
    //     myForm.append('trdate', trdate);
    //     myForm.append('odometer', odometer);



    // 	if(customerid!=0){
    // 		if (is_valid!=0) {
    // 		if (is_click_this!=0) {
    // 			Swal.fire({
    // 		        title: "Transaction",
    // 		        text: "Are you sure you want to process this transaction?",
    // 		        icon: "info",
    // 		        showCancelButton: true,
    // 		        confirmButtonColor: "#3085d6",
    // 		        cancelButtonColor: "#d33",
    // 		        confirmButtonText: "Yes",
    // 		    }).then((result) => {
    // 		        if (result.isConfirmed) {
    // 					$.ajax({
    // 		                url: 'pages/orders.php?from='+from+'&to='+to,
    // 		                type: "POST",
    // 		                data: myForm,
    // 		                contentType: false,
    // 		                processData: false,
    // 		                success: function (data) {
    // 		                    $("#tmp_content").html(data);
    // 		                    $("#tmp_content").css('opacity', '1');
    // 		                     $('#myTable').DataTable({
    // 				                "pageLength": 50  // Set default rows to display
    // 				            });
    // 		                   show_alert('success','Successfully Processed Request');
    // 		                },
    // 		                error: function () {
    // 		                    Swal.fire('Error', 'Error Processing Request', 'error');
    // 		                }
    // 		            });
    // 		        }
    // 		    });
    // 			} else {show_alert('warning','Click calculate button first');object('prodid').focus();}
    // 		} else {show_alert('warning','Please select products/services');object('prodid').focus();}
    // 	} else {show_alert('warning','Please select customer');object('prodid').focus();}
    // }

    // function process_transaction() {
    //   var customerid = object('customerid').value;
    //   var is_valid = object('is_valid').value;
    //   var carid = object('carid').value;
    //   var is_click_this = object('is_click_this').value;
    //   var from = object('from').value;
    //   var to = object('to').value;
    //   var trdate = object('trdate').value;
    //   let odometer = document.getElementById('odometer')?.value.trim() || 0;

    //   let myForm = new FormData();
    //   myForm.append('customerid', customerid);
    //   myForm.append('alLowRrDansaction', 1);
    //   myForm.append('from', from);
    //   myForm.append('to', to);
    //   myForm.append('carid', carid);
    //   myForm.append('trdate', trdate);
    //   myForm.append('odometer', odometer);

    //   if (customerid != 0) {
    //     if (is_valid != 0) {
    //       if (is_click_this != 0) {
    //         Swal.fire({
    //           title: "Transaction",
    //           text: "Are you sure you want to process this transaction?",
    //           icon: "info",
    //           showCancelButton: true,
    //           confirmButtonColor: "#3085d6",
    //           cancelButtonColor: "#d33",
    //           confirmButtonText: "Yes",
    //         }).then((result) => {
    //           if (result.isConfirmed) {
    //             // Show loading SweetAlert2
    //             Swal.fire({
    //               title: "Processing...",
    //               text: "Please wait while we process your transaction.",
    //               allowOutsideClick: false,
    //               allowEscapeKey: false,
    //               didOpen: () => {
    //                 Swal.showLoading();
    //               },
    //             });

    //             // Perform AJAX request
    //             $.ajax({
    //               url: 'pages/orders.php?from=' + from + '&to=' + to,
    //               type: "POST",
    //               data: myForm,
    //               contentType: false,
    //               processData: false,
    //               success: function(data) {
    //                 // Close loading SweetAlert2
    //                 Swal.close();
    //                 $("#tmp_content").html(data);
    //                 $("#tmp_content").css('opacity', '1');
    //                 $('#myTable').DataTable({
    //                   "pageLength": 50 // Set default rows to display
    //                 });
    //                 show_alert('success', 'Successfully Processed Request');
    //               },
    //               error: function() {
    //                 // Close loading SweetAlert2 and show error
    //                 Swal.close();
    //                 Swal.fire('Error', 'Error Processing Request', 'error');
    //               }
    //             });
    //           }
    //         });
    //       } else {
    //         show_alert('warning', 'Click calculate button first');
    //         object('prodid').focus();
    //       }
    //     } else {
    //       show_alert('warning', 'Please select products/services');
    //       object('prodid').focus();
    //     }
    //   } else {
    //     show_alert('warning', 'Please select customer');
    //     object('prodid').focus();
    //   }
    // }

    function process_transaction() {
      var customerid = object('customerid').value;
      var is_valid = object('is_valid').value;
      var carid = object('carid')?.value || 0;
      if (!carid) {
        show_alert('warning', 'Please select platenumber');
        return;
      }
      var is_click_this = object('is_click_this').value;
      var from = object('from').value;
      var to = object('to').value;
      var trdate = object('trdate').value;
      let odometer = document.getElementById('odometer')?.value.trim() || 0;

      var add_notes = document.getElementById('add_notes').value.trim() || '';

      let myForm = new FormData();
      myForm.append('customerid', customerid);
      myForm.append('alLowRrDansaction', 1);
      myForm.append('from', from);
      myForm.append('to', to);
      myForm.append('carid', carid);
      myForm.append('trdate', trdate);
      myForm.append('odometer', odometer);
      myForm.append('add_notes', add_notes);

      if (customerid != 0) {
        if (is_valid != 0) {
          if (is_click_this != 0) {
            Swal.fire({
              title: "Transaction",
              text: "Are you sure you want to process this transaction?",
              icon: "info",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Yes",
            }).then((result) => {
              if (result.isConfirmed) {
                // Show loading SweetAlert2
                Swal.fire({
                  title: "Processing...",
                  text: "Please wait while we process your transaction.",
                  allowOutsideClick: false,
                  allowEscapeKey: false,
                  didOpen: () => {
                    Swal.showLoading();
                  },
                });

                // Perform AJAX request
                $.ajax({
                  url: 'pages/orders.php?from=' + from + '&to=' + to,
                  type: "POST",
                  data: myForm,
                  contentType: false,
                  processData: false,
                  success: function(data) {
                    // Close loading SweetAlert2

                    Swal.close();
                    $("#tmp_content").html(data);
                    $("#tmp_content").css('opacity', '1');
                    $('#myTable').DataTable({
                      "pageLength": 50 // Set default rows to display
                    });
                    initialize_datepicker();
                    show_alert('success', 'Successfully Processed Request');
                  },
                  error: function() {
                    // Close loading SweetAlert2 and show error
                    Swal.close();
                    Swal.fire('Error', 'Error Processing Request', 'error');
                  }
                });
              }
            });
          } else {
            show_alert('warning', 'Click calculate button first');
            object('prodid').focus();
          }
        } else {
          show_alert('warning', 'Please select products/services');
          object('prodid').focus();
        }
      } else {
        show_alert('warning', 'Please select customer');
        object('prodid').focus();
      }
    }


    function add_benefits(accountid) {
      var att_bonus = object('att_bonus' + accountid).value;
      var signin_bonus = object('signin_bonus' + accountid).value;
      var emp_sss_ = object('emp_sss_' + accountid).value;
      var sss_ = object('sss_' + accountid).value;
      var emp_pagibig = object('emp_pagibig' + accountid).value;
      var pagibig = object('pagibig' + accountid).value;
      var emp_philhealth = object('emp_philhealth' + accountid).value;
      var philhealth = object('philhealth' + accountid).value;

      let myForm = new FormData();
      myForm.append('accountid', accountid);
      myForm.append('att_bonus', att_bonus);
      myForm.append('signin_bonus', signin_bonus);
      myForm.append('emp_sss_', emp_sss_);
      myForm.append('sss_', sss_);
      myForm.append('emp_pagibig', emp_pagibig);
      myForm.append('pagibig', pagibig);
      myForm.append('emp_philhealth', emp_philhealth);
      myForm.append('philhealth', philhealth);
      myForm.append('allow_trans_benefit', 1);
      Swal.fire({
        title: "Benefits",
        text: "Are you sure you want to process this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'employee/benefit.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              TINY.box.show({
                html: 'Processing Request',
                animate: false,
                close: false,
                mask: false,
                boxid: 'success',
                autohide: 2
              });
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              //initialize_datatable();
              initialize_datatable();
              initialize_datepicker();
              initialize_datepicker();

              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    function remove_tmp_typeid(typeid) {
      Swal.fire({
        title: "Do you want to remove this Service from customer?",
        showCancelButton: true,
        confirmButtonText: "Save"
      }).then((result) => {
        if (result.isConfirmed) {
          ajax_fn('pages/tmp_remove.php?typeid=' + typeid, 'x_m' + typeid);
        } else if (result.isDenied) {
          Swal.fire("Changes are not saved", "info", "info");
        }
      });
    }

    function add_tmp_typeid(typeid) {
      Swal.fire({
        title: "Do you want to add this Service from customer?",
        showCancelButton: true,
        confirmButtonText: "Save"
      }).then((result) => {
        if (result.isConfirmed) {
          ajax_fn('pages/tmp_remove.php?typeid_add=' + typeid, 'x_m' + typeid);
        } else if (result.isDenied) {
          Swal.fire("Changes are not saved", "info", "info");
        }
      });
    }

    function void_sales(tr_id) {
      var show_ = document.getElementById('show_' + tr_id).value;
      var platenumber = document.getElementById('platenumberrrrrrrrrrr' + tr_id).value;
      let myForm = new FormData();
      myForm.append('id', tr_id);
      myForm.append('void_id', 1);

      Swal.fire({
        title: "Are you sure?",
        html: "Do you want to void this " + show_ + "<br>Plate #: (" + platenumber + ")?", // Use 'html' instead of 'text'
        icon: "info",
        input: 'text',
        inputPlaceholder: 'Enter reason for voiding...',
        inputAttributes: {
          'aria-label': 'Reason for voiding'
        },
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "Cancel",
        preConfirm: (reason) => {
          if (!reason) {
            Swal.showValidationMessage('You need to provide a reason!');
          }
          return reason;
        }
      }).then((result) => {
        if (result.isConfirmed) {
          let reason = result.value; // Retrieve the entered text
          myForm.append('reason', reason); // Append the reason to FormData

          $.ajax({
            url: 'pages/orders.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        } else {
          console.log("Voiding sale cancelled");
        }
      });
    }


    function paid_sales(tr_id) {
      var show_p = object('show_p' + tr_id).value;
      let myForm = new FormData();
      myForm.append('id', tr_id);
      myForm.append('paid_id', 1);

      swal.fire({
        title: "Are you sure?",
        text: "Accept mode of payment " + show_p + " ? ",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "Cancel"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'pages/orders.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        } else {
          // console.log("Voiding sale cancelled");
        }
      });
    }



    function mark_as_done(tr_id) {
      var show_x = object('show_x' + tr_id).value;
      var show_x_name = object('show_x_name' + tr_id).value;
      let myForm = new FormData();
      myForm.append('xxxx_id', tr_id);
      myForm.append('is_doneeeee', 1);

      swal.fire({
        title: "Are you sure that this car is done?",
        text: "Do you want done this Car (" + show_x + ") of Mr/Ms. " + show_x_name + "? ",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "Cancel"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'pages/orders.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        } else {
          // console.log("Voiding sale cancelled");
        }
      });
    }

    function mark_as_done_bayarea(tr_id) {
      var show_x = object('show_x' + tr_id).value;
      var show_x_name = object('show_x_name' + tr_id).value;
      let myForm = new FormData();
      myForm.append('bayareid', tr_id);
      myForm.append('is_bayarea', 1);

      swal.fire({
        title: "Are you sure that this car is done in bay area?",
        text: "Do you want done this Car (" + show_x + ") of Mr/Ms. " + show_x_name + "? ",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "Cancel"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'pages/orders.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        } else {
          // console.log("Voiding sale cancelled");
        }
      });
    }

    function mark_as_done_detailing(tr_id) {
      var show_x = object('show_x' + tr_id).value;
      var show_x_name = object('show_x_name' + tr_id).value;
      let myForm = new FormData();
      myForm.append('id_', tr_id);
      myForm.append('is_detailing', 1);

      swal.fire({
        title: "Are you sure that this car is done in detailing?",
        text: "Do you want done this Car (" + show_x + ") of Mr/Ms. " + show_x_name + "? ",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "Cancel"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'pages/orders.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        } else {
          // console.log("Voiding sale cancelled");
        }
      });
    }

    // function initiateDatatable___() {
    //   if ($.fn.DataTable.isDataTable('#myTableDashboard')) {
    //     $('#myTableDashboard').DataTable().destroy(); // Destroy existing instance
    //   }

    //   $('#myTableDashboard').DataTable({
    //     pageLength: 5, // Default number of entries
    //     lengthMenu: [5, 10, 25, 50, 100, 200, 500, 1000, 2000, 3000, 5000, 10000, 15000], // Options for the number of entries
    //     dom: '<"d-flex justify-content-between align-items-center"Blf>rt<"bottom"ip>', // Align buttons left, search & dropdown right
    //     language: {
    //       lengthMenu: 'Show _MENU_' // Removes "Entries" text, keeps only "Show [dropdown]"
    //     },
    //     buttons: [{
    //         extend: 'copy',
    //         text: 'Copy',
    //         className: 'btn btn-secondary'
    //       },
    //       {
    //         extend: 'excel',
    //         text: 'Export to Excel',
    //         className: 'btn btn-success',
    //         filename: 'report' // Set exported file name to "report.xlsx"
    //       }
    //     ]
    //   });
    // }



    Pusher.logToConsole = true;
    var pusher = new Pusher('d006605ddb0dad4b5079', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      ajax_new_without_reload('pages/dashboard.php', 'load_this');
      // reload_t();
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event-newtrasac', function(data) {
      ajax_new_without_reload('pages/dashboard.php', 'load_this');
      // reload_t();
    });

    ///New
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event-status', function(data) {
      ajax_new_without_reload('pages/dashboard.php', 'load_this');
      // reload_t();
    });


    function delimiter_ch(tr_id) {
      var delimiter = object('delimiter' + tr_id).value;

      if (delimiter == 1) {
        mark_as_done(tr_id);
      }

      if (delimiter == 2) {
        mark_as_done_bayarea(tr_id);
      }

      if (delimiter == 3) { //detailing
        mark_as_done_detailing(tr_id);
      }

      if (delimiter == 4) {
        void_sales(tr_id);
      }

      if (delimiter == 5) {
        paid_sales(tr_id);
      }
      object('delimiter' + tr_id).value = '';
    }

    function process_transaction_edit(tr_id) {
      var customerid = object('customerid').value;
      var trnum = object('trnum').value;
      var trdate = object('trdate').value;
      var add_notes = object('add_notes').value;

      let myForm = new FormData();
      myForm.append('customerid', customerid);
      myForm.append('iloveyou', tr_id);
      myForm.append('trdate', trdate);
      myForm.append('add_notes', add_notes);
      myForm.append('alLowRrDansaction_edit', 1);

      if (customerid != 0) {
        //if (is_valid!=0) {
        Swal.fire({
          title: "Transaction",
          text: "Are you sure you want to update this transaction?",
          icon: "info",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes",
        }).then((result) => {
          if (result.isConfirmed) {
            // Show loading SweetAlert2
            Swal.fire({
              title: "Processing...",
              text: "Please wait while we process your transaction.",
              allowOutsideClick: false,
              allowEscapeKey: false,
              didOpen: () => {
                Swal.showLoading();
              },
            });
            $.ajax({
              url: 'pages/orders.php',
              type: "POST",
              data: myForm,
              contentType: false,
              processData: false,
              success: function(data) {
                $("#tmp_content").html(data);
                $("#tmp_content").css('opacity', '1');
                initialize_datatable();

                initialize_datepicker();
                show_alert('success', 'Successfully Processed Request');

              },
              error: function() {
                Swal.fire('Error', 'Error Processing Request', 'error');
              }
            });
          }
        });
        //} else {Swal.fire({icon: 'info',title: 'Warning', text: 'Error on the list.!'});object('prodid').focus();}
      } else {
        show_alert('warning', 'Please select customer');
        object('prodid').focus();
      }
    }

    function received_tmp_add_item() {
      var mainProdid = document.getElementById('prodid').value;
      var supplierid = document.getElementById('supplierid').value;
      var mainQty = document.getElementById('qty').value;
      var price = document.getElementById('price').value;
      var discountstring = document.getElementById('discountstring').value;

      var quantities = [];


      if (mainQty > 0 && mainProdid != 0) {
        quantities.push({
          prodid: mainProdid,
          qty: mainQty
        });
      }

      var quantityInputs = document.querySelectorAll('input[id^="qty"]');
      quantityInputs.forEach(function(input) {
        var id = input.id.replace('qty', '');
        var qty = input.value;
        if (qty > 0 && id != mainProdid) {
          quantities.push({
            prodid: id,
            qty: qty
          });
        }
      });

      let myForm = new FormData();
      myForm.append('prodid', mainProdid);
      myForm.append('supplierid', supplierid);
      myForm.append('price', price);
      myForm.append('discountstring', discountstring);
      myForm.append('quantities', JSON.stringify(quantities));
      myForm.append('allow_transaction', 1);

      if (mainProdid != 0) {
        if (!isNaN(price) && price != '') {
          $.ajax({
            url: 'receiveorder/received_new_products.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_").html(data);
              $("#tmp_").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              document.getElementById('qty').value = '';
              document.getElementById('price').value = '';
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        } else {
          show_alert('warning', 'Invalid Numeric Format On PRICE!');
          // Swal.fire({ icon: 'info', title: 'Warning', text: 'Invalid Numeric Format On PRICE!' });
          // document.getElementById('price').focus();
        }
      } else {

        show_alert('warning', 'Please select product');

        // Swal.fire({ icon: 'info', title: 'Warning', text: 'Please select product/services.' });
        // document.getElementById('prodid').focus();
      }
    }


    function received_tmp_add_item_draft() {
      var mainProdid = document.getElementById('prodid').value;
      var supplierid = document.getElementById('supplierid').value;
      var mainQty = document.getElementById('qty').value;
      var price = document.getElementById('price').value;
      var discountstring = document.getElementById('discountstring').value;

      var quantities = [];


      if (mainQty > 0 && mainProdid != 0) {
        quantities.push({
          prodid: mainProdid,
          qty: mainQty
        });
      }

      var quantityInputs = document.querySelectorAll('input[id^="qty"]');
      quantityInputs.forEach(function(input) {
        var id = input.id.replace('qty', '');
        var qty = input.value;
        if (qty > 0 && id != mainProdid) {
          quantities.push({
            prodid: id,
            qty: qty
          });
        }
      });

      let myForm = new FormData();
      myForm.append('prodid', mainProdid);
      myForm.append('supplierid', supplierid);
      myForm.append('price', price);
      myForm.append('discountstring', discountstring);
      myForm.append('quantities', JSON.stringify(quantities));
      myForm.append('allow_transaction', 1);

      if (mainProdid != 0) {
        if (!isNaN(price) && price != '') {
          $.ajax({
            url: 'receiveorder/received_draft_new_products.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_").html(data);
              $("#tmp_").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              document.getElementById('qty').value = '';
              document.getElementById('price').value = '';
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        } else {
          show_alert('warning', 'Invalid Numeric Format On PRICE!');
          // Swal.fire({ icon: 'info', title: 'Warning', text: 'Invalid Numeric Format On PRICE!' });
          // document.getElementById('price').focus();
        }
      } else {

        show_alert('warning', 'Please select product');

        // Swal.fire({ icon: 'info', title: 'Warning', text: 'Please select product/services.' });
        // document.getElementById('prodid').focus();
      }
    }

    function void_po_draft(pid) {
      var name = document.getElementById('name' + pid).value;

      let myForm = new FormData();
      myForm.append('pid', pid);
      myForm.append('get_this_void', 1);

      Swal.fire({
        title: "Purchase Order",
        text: "Are you sure you want to void this PO (" + name + ")?",
        icon: "info",
        input: 'text', // Adds a text field
        inputPlaceholder: 'Enter reason for voiding', // Placeholder for the text field
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        preConfirm: (inputValue) => {
          if (!inputValue) {
            Swal.showValidationMessage('Please enter a reason');
          }
          return inputValue;
        }
      }).then((result) => {
        if (result.isConfirmed) {
          const reason = result.value; // Captures the reason entered by the user
          myForm.append('reason', reason); // Add reason to the FormData

          $.ajax({
            url: 'receiveorder/received_draft.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();

              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function void_po(pid) {
      var name = document.getElementById('name' + pid).value;

      let myForm = new FormData();
      myForm.append('pid', pid);
      myForm.append('get_this_void', 1);

      Swal.fire({
        title: "Received Order",
        text: "Are you sure you want to void this PO (" + name + ")?",
        icon: "info",
        input: 'text', // Adds a text field
        inputPlaceholder: 'Enter reason for voiding', // Placeholder for the text field
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        preConfirm: (inputValue) => {
          if (!inputValue) {
            Swal.showValidationMessage('Please enter a reason');
          }
          return inputValue;
        }
      }).then((result) => {
        if (result.isConfirmed) {
          const reason = result.value; // Captures the reason entered by the user
          myForm.append('reason', reason); // Add reason to the FormData

          $.ajax({
            url: 'receiveorder/received.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();

              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    function process_transaction_received(idnum) {
      var supplierid = object('supplierid').value;
      var drnum = object('drnum').value;

      let myForm = new FormData();
      myForm.append('supplierid', supplierid);
      myForm.append('drnum', drnum);
      myForm.append('idnum', idnum);
      myForm.append('alLowRrDansaction', 1);

      if (!drnum) {
        show_alert('warning', 'Please input receipt #');
        return;
      }

      if (supplierid != 0) {
        // if (is_valid!=0) {
        Swal.fire({
          title: "Purchase Order",
          text: "Are you sure you want to process this PO?",
          icon: "info",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes",
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: 'receiveorder/received.php',
              type: "POST",
              data: myForm,
              contentType: false,
              processData: false,
              success: function(data) {
                $("#tmp_content").html(data);
                $("#tmp_content").css('opacity', '1');
                $('#myTable').DataTable({
                  "pageLength": 50 // Set default rows to display
                });
                show_alert('success', 'Successfully Processed Request');
              },
              error: function() {
                Swal.fire('Error', 'Error Processing Request', 'error');
              }
            });
          }
        });
        // } else {Swal.fire({icon: 'info',title: 'Warning', text: 'Error on the list.!'});object('prodid').focus();}
      } else {
        show_alert('error', 'Please select supplier');
      }
    }


    // function process_transaction_received_draft() {
    //   var supplierid = object('supplierid').value;
    //   //var drnum = object('drnum').value;

    //   let myForm = new FormData();
    //   myForm.append('supplierid', supplierid);
    //   //myForm.append('drnum', drnum);
    //   myForm.append('alLowRrDansaction', 1);

    //   //if(!drnum){ show_alert('warning','Please input receipt #'); return;}

    //   if (supplierid != 0) {
    //     // if (is_valid!=0) {
    //     Swal.fire({
    //       title: "Purchase Order",
    //       text: "Are you sure you want to process this PO?",
    //       icon: "info",
    //       showCancelButton: true,
    //       confirmButtonColor: "#3085d6",
    //       cancelButtonColor: "#d33",
    //       confirmButtonText: "Yes",
    //     }).then((result) => {
    //       if (result.isConfirmed) {
    //         $.ajax({
    //           url: 'receiveorder/received_draft.php',
    //           type: "POST",
    //           data: myForm,
    //           contentType: false,
    //           processData: false,
    //           success: function(data) {
    //             $("#tmp_content").html(data);
    //             $("#tmp_content").css('opacity', '1');
    //             $('#myTable').DataTable({
    //               "pageLength": 50 // Set default rows to display
    //             });
    //             show_alert('success', 'Successfully Processed Request');
    //           },
    //           error: function() {
    //             Swal.fire('Error', 'Error Processing Request', 'error');
    //           }
    //         });
    //       }
    //     });
    //     // } else {Swal.fire({icon: 'info',title: 'Warning', text: 'Error on the list.!'});object('prodid').focus();}
    //   } else {
    //     show_alert('error', 'Please select supplier');
    //   }
    // }

    function process_transaction_received_draft() {
      var supplierid = object('supplierid').value;
      var isEmailChecked = document.getElementById('is_email').checked;
      var is_sms_text_checked = document.getElementById('is_sms_text').checked;

      let myForm = new FormData();
      myForm.append('supplierid', supplierid);
      myForm.append('sendEmail', isEmailChecked ? 1 : 0); // Append as 1 or 0
      myForm.append('sendText', is_sms_text_checked ? 1 : 0); // Append as 1 or 0
      myForm.append('alLowRrDansaction', 1);

      if (supplierid != 0) {
        Swal.fire({
          title: "Purchase Order",
          text: "Are you sure you want to process this PO?",
          icon: "info",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes",
        }).then((result) => {
          if (result.isConfirmed) {

            // Show loading alert
            Swal.fire({
              title: 'Processing and sending sms/email...',
              text: 'Please wait',
              allowOutsideClick: false,
              didOpen: () => {
                Swal.showLoading();
              }
            });

            // AJAX call
            $.ajax({
              url: 'receiveorder/received_draft.php',
              type: "POST",
              data: myForm,
              contentType: false,
              processData: false,
              success: function(data) {
                Swal.close(); // Close the loading alert
                $("#tmp_content").html(data);
                $("#tmp_content").css('opacity', '1');
                $('#myTable').DataTable({
                  "pageLength": 50
                });
                show_alert('success', 'Successfully Processed Request');
              },
              error: function() {
                Swal.fire('Error', 'Error Processing Request', 'error');
              }
            });
          }
        });
      } else {
        show_alert('error', 'Please select supplier');
      }
    }


    function ajax_get_idnum_1_without(name_of_id, id, url_, tmp_container) {
      let myForm = new FormData();
      myForm.append(name_of_id, id);
      //$('#'+tmp_container).html("<div align='center'><img src='images/ajax-loader3.gif' width='15px' /></div>");
      $.ajax({
        url: url_,
        type: "POST",
        data: myForm,
        processData: false,
        contentType: false,
        success: function(data) {
          $('#' + tmp_container).html(data);
          initialize_datatable();
          initialize_datepicker();
        }
      });
    }



    // $(document).ready(function() {
    //     $('#myTable_without').DataTable({
    //         searching: false
    //     });
    // });
    function get_type(typeid) {
      var price = object('price_carwash').value;
      var checkbox = object('x' + typeid);
      if (checkbox.checked) {
        ajax_fn('pages/order_choose_services_type.php?typeidx=' + checkbox.value + '&typeid=' + typeid + '&price=' + price, 'showy');
      } else {
        ajax_fn('pages/order_choose_services_type.php?typeid_delete=' + checkbox.value + '&del=' + typeid + '&price=' + price, 'showy');
      }
    }

    //upload image of employee
    function uploadNbi(accountid) {
      var xxx = object('xxx').value;
      var picInput = document.getElementById('nbi');
      var picFile = picInput.files[0];

      let myForm = new FormData();
      myForm.append('xxx', xxx);
      myForm.append('nbi', picFile);

      Swal.fire({
        title: "Basic Information",
        text: "Are you sure want to update your information?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, update it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            html: 'Processing Request',
            showConfirmButton: false
          });
          $.ajax({
            url: 'employee/employee.php?get_nbi&accountid=' + accountid,
            type: "POST",
            data: myForm,
            beforeSend: function() {
              $("#body-overlay").show();
            },
            contentType: false,
            processData: false,
            success: function(data) {
              $("#content").html(data);
              $("#content").css('opacity', '1');
              $("#body-overlay").hide();

              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    function uploadClearance(accountid) {
      var xxx = object('xxx').value;
      var picInput = document.getElementById('clearance');
      var picFile = picInput.files[0];

      let myForm = new FormData();
      myForm.append('xxx', xxx);
      myForm.append('clearance', picFile);

      Swal.fire({
        title: "Basic Information",
        text: "Are you sure want to update your information?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, update it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            html: 'Processing Request',
            showConfirmButton: false
          });
          $.ajax({
            url: 'employee/employee.php?get_clearance&accountid=' + accountid,
            type: "POST",
            data: myForm,
            beforeSend: function() {
              $("#body-overlay").show();
            },
            contentType: false,
            processData: false,
            success: function(data) {
              $("#content").html(data);
              $("#content").css('opacity', '1');
              $("#body-overlay").hide();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function add_car_type() {
      let cartype = object('cartype').value;
      let price = object('price').value;
      let myForm = new FormData();
      myForm.append('cartype', cartype);
      myForm.append('price', price);
      myForm.append('add', 1);

      if (!cartype) {
        show_alert('info', 'Please input car type');
        return;
      }

      Swal.fire({
        title: "Car Type",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'car/cartype.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function edit_car_type(id) {
      let cartype = object('cartype').value;
      let price = object('price').value;
      let myForm = new FormData();
      myForm.append('cartype', cartype);
      myForm.append('price', price);
      myForm.append('id', id);
      myForm.append('edit', 2);

      if (!cartype) {
        show_alert('info', 'Please input car type');
        return;
      }

      Swal.fire({
        title: "Car Type",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'car/cartype.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }



    function add_services() {
      let prodname = object('prodname').value;
      let typeid = object('typeid').value;
      let statid = object('statid').value;
      let commission = object('commission').value;
      let serid = object('serid').value;
      let semi_price = object('semi_price').value;

      let is_part_pms = object('is_part_pms').checked ? 1 : 0;
      let is_part_pms_odometer = object('is_part_pms_odometer').value;
      let is_part_pms_month = object('is_part_pms_month').value;


      if (!prodname) {
        show_alert('info', 'Please input service name');
        return;
      }
      if (!semi_price) {
        show_alert('info', 'Please input price');
        return;
      }
      if (typeid == 0) { // Correct condition for checking if typeid is the default option
        show_alert('info', 'Please select type');
        return;
      }

      let myForm = new FormData();
      myForm.append('prodname', prodname);
      myForm.append('typeid', typeid);
      myForm.append('statid', statid);
      myForm.append('semi_price', object('semi_price').value);
      myForm.append('commission', object('commission').value);
      myForm.append('serid', serid);
      myForm.append('is_part_pms', is_part_pms);
      myForm.append('is_part_pms_odometer', is_part_pms_odometer);
      myForm.append('is_part_pms_month', is_part_pms_month);
      myForm.append('add', 1);

      Swal.fire({
        title: "Service",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'service/service.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    function edit_services(prodid) {
      let prodname = object('prodname').value;
      let typeid = object('typeid').value;
      let statid = object('statid').value;
      let serid = object('serid').value;
      let semi_price = object('semi_price').value;
      let is_part_pms = object('is_part_pms').checked ? 1 : 0;
      let is_part_pms_odometer = object('is_part_pms_odometer').value;
      let is_part_pms_month = object('is_part_pms_month').value;


      if (!prodname) {
        show_alert('info', 'Please input service name');
        return;
      }
      if (!semi_price) {
        show_alert('info', 'Please input price');
        return;
      }
      if (typeid == 0) { // Correct condition for checking if typeid is the default option
        show_alert('info', 'Please select type');
        return;
      }
      let myForm = new FormData();
      myForm.append('prodname', prodname);
      myForm.append('typeid', typeid);
      myForm.append('statid', statid);
      myForm.append('serid', serid);
      myForm.append('semi_price', object('semi_price').value);
      myForm.append('commission', object('commission').value);
      myForm.append('is_part_pms', is_part_pms);
      myForm.append('is_part_pms_odometer', is_part_pms_odometer);
      myForm.append('is_part_pms_month', is_part_pms_month);
      myForm.append('edit', prodid);


      Swal.fire({
        title: "Service",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'service/service.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    function input_price(invid, prodid) {
      let myForm = new FormData();

      Swal.fire({
        title: "Enter Selling Price",
        input: "number",
        inputLabel: "Selling Price",
        inputPlaceholder: "Enter the selling price",
        showCancelButton: true,
        confirmButtonText: "Submit",
        showLoaderOnConfirm: true,
        preConfirm: (selling_price) => {
          if (!selling_price) {
            Swal.showValidationMessage('Please enter a selling price');
            return false;
          }

          myForm.append('invid', invid);
          myForm.append('selling_price', selling_price);
          myForm.append('prodid_x', prodid);
          myForm.append('edit_sellingprice', invid);

          return fetch('inventory/inventory.php', {
              method: "POST",
              body: myForm,
            })
            .then(response => {
              if (!response.ok) {
                throw new Error('Network response was not ok');
              }
              return response.text();
            })
            .catch(error => {
              Swal.showValidationMessage(`Request failed: ${error.message}`);
            });
        },
        allowOutsideClick: () => !Swal.isLoading()
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'inventory/inventory.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire({
                icon: 'error',
                text: 'Error Processing Request',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
              });
            }
          });
        }
      });
    }


    function is_sales_tmp(invid, prodid) {
      var get_inv = object('get_inv').value;
      let myForm = new FormData();
      myForm.append('invid', invid);
      myForm.append('prodid', prodid);

      Swal.fire({
        title: "Product",
        text: "Are you sure you want to mark this item as 'for sale'?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'inventory/show_available.php?invid=' + get_inv,
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#ss").html(data);
              $("#ss").css('opacity', '1');

              // Reset the Select2 field
              $("#invid").val("0").trigger("change");

              // Refresh the dropdown
              reloadInvidOptions();

              TINY.box.show({
                html: 'Processing Request',
                animate: false,
                close: false,
                mask: false,
                boxid: 'success',
                autohide: 2
              });

              Swal.fire({
                title: "Successfully Processed Request",
                text: "Please select the Product/Service again for the changes to take effect.",
                icon: "info"
              });
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function reloadInvidOptions() {
      $.ajax({
        url: 'inventory/get_products.php', // Create this PHP script to return updated <option> elements
        type: 'GET',
        success: function(data) {
          $('#invid').html(data); // Replace options in <select>
        },
        error: function() {
          console.error("Failed to reload products.");
        }
      });
    }



    function is_sales(invid, prodid) {
      let myForm = new FormData();
      myForm.append('invid', invid);
      myForm.append('prodid', prodid);

      Swal.fire({
        title: "Product",
        text: "Are you sure you want to mark this item as 'for sale'?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'inventory/inventory.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }




    /*
    $product_price = GetData('select product_price from tblinventorytable where is_beginning=1 and prodid='.$rw['prodid']) + 0;
    $qtyin = GetData('select qtyin from tblinventorytable where is_beginning=1 and prodid='.$rw['prodid']) + 0;
    $selling_price = GetData('select product_price from tblinventorytable where is_beginning=1 and prodid='.$rw['prodid']) + 0;
            
    */

    function set_beginning(prodid) {
      var product_price = object('product_price' + prodid).value;
      var qtyin = object('qtyin' + prodid).value;
      var selling_price = object('selling_price' + prodid).value;
      Swal.fire({
        title: "Do you want to save the changes?",
        showCancelButton: true,
        confirmButtonText: "Save"
      }).then((result) => {
        if (result.isConfirmed) {
          ajax_fn('inventory/set_beginning.php?prodid=' + prodid + '&product_price=' + product_price +
            '&qtyin=' + qtyin + '&selling_price=' + selling_price, 'tmp' + prodid);
        } else if (result.isDenied) {
          Swal.fire("Changes are not saved", "info", "info");
        }
      });
    }

    //Discount function for admin password
    function showDiscount() {
      $.ajax({
        url: 'pages/get_roleid.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          if (response.roleid == 1) {
            $('#disc_amount').show().removeAttr('readonly').focus();
          } else {
            Swal.fire({
              title: "Enter Admin Password",
              input: "password",
              inputAttributes: {
                autocapitalize: "off"
              },
              showCancelButton: true,
              confirmButtonText: "Submit",
              showLoaderOnConfirm: true,
              preConfirm: async (password) => {
                try {
                  const response = await fetch('pages/validate_password.php', {
                    method: 'POST',
                    headers: {
                      'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                      password: password
                    })
                  });
                  const result = await response.json();
                  if (!response.ok || !result.success) {
                    return Swal.showValidationMessage(result.message || 'Invalid password');
                  }
                  return result;
                } catch (error) {
                  Swal.showValidationMessage(`Request failed: ${error.message}`);
                }
              },
              allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
              if (result.isConfirmed) {
                Swal.fire({
                  title: "Password Accepted",
                  text: "You can now enter the discount.",
                  icon: "success"
                }).then(() => {
                  $('#disc_amount').removeAttr('readonly').focus();
                });
              } else {
                $('#disc_amount').val('').attr('readonly', true);
              }
            });
          }
        },
        error: function(xhr, status, error) {
          console.error('AJAX error:', {
            status: status,
            error: error,
            responseText: xhr.responseText
          });
        }
      });
    }

    $('#disc_amount').attr('readonly', true);
    $('#disc_amount').on('click', function() {
      showDiscount();
    });


    function save_salary(accountid) {
      var salary = object('salary' + accountid).value;
      var food_allowance = object('food_allowance' + accountid).value;
      var clothing_allowance = object('clothing_allowance' + accountid).value;
      var medicine_allowance = object('medicine_allowance' + accountid).value;
      var transportation_allowance = object('transportation_allowance' + accountid).value;
      var working_hours = object('working_hours' + accountid).value;
      var timein = object('timein' + accountid).value;
      var timeout = object('timeout' + accountid).value;
      var lunchbreak = object('lunchbreak' + accountid).value;
      var acc = accountid;

      let myForm = new FormData();
      myForm.append('salary', salary);
      myForm.append('food_allowance', food_allowance);
      myForm.append('clothing_allowance', clothing_allowance);
      myForm.append('medicine_allowance', medicine_allowance);
      myForm.append('transportation_allowance', transportation_allowance);

      myForm.append('working_hours', working_hours);
      myForm.append('timein', timein);
      myForm.append('timeout', timeout);
      myForm.append('lunchbreak', lunchbreak);

      myForm.append('accountid', acc);

      Swal.fire({
        title: "Salary",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'employee/salary.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    //add_vale

    function add_vale() {
      var vale = object('vale').value;
      var accountid = object('accountid').value;

      let myForm = new FormData();
      myForm.append('vale', vale);
      myForm.append('accountid', accountid);

      Swal.fire({
        title: "Vale",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'employee/vale.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function show_alert(ifSuccess, ifText) {
      Swal.fire({
        icon: ifSuccess,
        text: ifText,
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000, // Adjust as needed
        timerProgressBar: true
      });
    }



    function add_engine() {
      let myForm = new FormData();
      myForm.append('engine_size', object('engine_size').value);
      myForm.append('add_x', 1);

      if (!object('engine_size').value) {
        show_alert('info', 'Please input engize size');
        return;
      }

      $.ajax({
        url: 'Car/car_engine.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#tmp_content").html(data);
          $("#tmp_content").css('opacity', '1');
          initialize_datatable();
          initialize_datepicker();
          show_alert('success', 'Successfully Processed Request');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }

    function edit_engine(engine_id) {
      let myForm = new FormData();
      myForm.append('engine_size', object('engine_size').value);
      myForm.append('edit_x', engine_id);

      if (!object('engine_size').value) {
        show_alert('info', 'Please input engize size');
        return;
      }


      $.ajax({
        url: 'Car/car_engine.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#tmp_content").html(data);
          $("#tmp_content").css('opacity', '1');
          initialize_datatable();
          initialize_datepicker();
          //Swal.fire('Success', 'Successfully Processed Request', 'success');
          show_alert('success', 'Successfully Processed Request');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }


    function add_make() {
      let myForm = new FormData();
      myForm.append('make_name', object('make_name').value);
      myForm.append('add_c', 1);


      if (!object('make_name').value) {
        show_alert('info', 'Please input make');
        return;
      }

      $.ajax({
        url: 'Car/car_make.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#tmp_content").html(data);
          $("#tmp_content").css('opacity', '1');
          initialize_datatable();
          initialize_datepicker();
          show_alert('success', 'Successfully Processed Request');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }

    function add_ser() {
      let myForm = new FormData();
      myForm.append('sertype_name', object('sertype_name').value);
      myForm.append('add_s', 1);


      if (!object('sertype_name').value) {
        show_alert('info', 'Please input service type');
        return;
      }

      $.ajax({
        url: 'service/service_type.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#tmp_content").html(data);
          $("#tmp_content").css('opacity', '1');
          initialize_datatable();
          initialize_datepicker();
          show_alert('success', 'Successfully Processed Request');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }

    //set_inactive const edit_expense = (id) => {
    function set_inactive(prodid) {
      var prodnem = object('prodnem' + prodid).value;
      let myForm = new FormData();
      myForm.append('to_inactive', prodid);
      Swal.fire({
        title: "Product",
        text: "Are you sure you want to delete this product (" + prodnem + ")? ",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'product/get_updated_del.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#show_delete_inactive" + prodid).html(data);
              $("#show_delete_inactive" + prodid).css('opacity', '1');
              // initialize_datatable();
              // initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function set_active(prodid) {
      var prodnem = object('prodnem' + prodid).value;
      let myForm = new FormData();
      myForm.append('xxxxxxxx', prodid);
      myForm.append('to_inactivejwkerjksafjksdfkjas', 1);
      Swal.fire({
        title: "Product Activation",
        text: "Are you sure you want to set this product active (" + prodnem + ")? ",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'product/get_updated_del.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#show_delete_inactive" + prodid).html(data);
              $("#show_delete_inactive" + prodid).css('opacity', '1');
              // initialize_datatable();
              // initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function edit_make(make_id) {
      let myForm = new FormData();
      myForm.append('make_name', object('make_name').value);
      myForm.append('edit_c', make_id);
      if (!object('make_name').value) {
        show_alert('info', 'Please input make');
        return;
      }
      $.ajax({
        url: 'Car/car_make.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#tmp_content").html(data);
          $("#tmp_content").css('opacity', '1');
          initialize_datatable();
          initialize_datepicker();
          show_alert('success', 'Successfully Processed Request');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }

    function edit_ser(serid) {
      let myForm = new FormData();
      myForm.append('sertype_name', object('sertype_name').value);
      myForm.append('edit_s', serid);
      if (!object('sertype_name').value) {
        show_alert('info', 'Please input service type');
        return;
      }
      $.ajax({
        url: 'service/service_type.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#tmp_content").html(data);
          $("#tmp_content").css('opacity', '1');
          initialize_datatable();
          initialize_datepicker();
          show_alert('success', 'Successfully Processed Request');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }


    function add_typecars() {
      let myForm = new FormData();
      myForm.append('type_car', object('type_car').value);
      myForm.append('add_iiiii', 1);
      if (!object('type_car').value) {
        show_alert('info', 'Please input year');
        return;
      }
      $.ajax({
        url: 'Car/car_typekita.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#tmp_content").html(data);
          $("#tmp_content").css('opacity', '1');
          initialize_datatable();
          initialize_datepicker();
          show_alert('success', 'Successfully Processed Request');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }

    function edit_typecars(x) {
      let myForm = new FormData();
      myForm.append('type_car', object('type_car').value);
      myForm.append('edit_iiiii', x);
      if (!object('type_car').value) {
        show_alert('info', 'Please input year');
        return;
      }
      $.ajax({
        url: 'Car/car_typekita.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#tmp_content").html(data);
          $("#tmp_content").css('opacity', '1');
          initialize_datatable();
          initialize_datepicker();
          show_alert('success', 'Successfully Processed Request');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }


    function add_tool() {
      let myForm = new FormData();
      myForm.append('toolname', object('toolname').value);
      myForm.append('when_buy', object('when_buy').value);
      myForm.append('price', object('price').value);
      myForm.append('a', 1);

      if (!object('toolname').value) {
        show_alert('info', 'Please input tool name');
        return;
      }
      if (!object('when_buy').value) {
        show_alert('info', 'Please input date');
        return;
      }
      if (!object('price').value) {
        show_alert('info', 'Please input price');
        return;
      }

      $.ajax({
        url: 'tool/tool_insert.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#tmp_content").html(data);
          $("#tmp_content").css('opacity', '1');
          initialize_datatable();
          initialize_datepicker();
          show_alert('success', 'Successfully Processed Request');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }

    function edit_tool(x) {
      let myForm = new FormData();
      myForm.append('when_buy', object('when_buy').value);
      myForm.append('toolname', object('toolname').value);
      myForm.append('price', object('price').value);
      myForm.append('e', x);
      if (!object('toolname').value) {
        show_alert('info', 'Please input tool name');
        return;
      }
      if (!object('when_buy').value) {
        show_alert('info', 'Please input date');
        return;
      }
      if (!object('price').value) {
        show_alert('info', 'Please input price');
        return;
      }
      $.ajax({
        url: 'tool/tool_insert.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#tmp_content").html(data);
          $("#tmp_content").css('opacity', '1');
          initialize_datatable();
          initialize_datepicker();
          show_alert('success', 'Successfully Processed Request');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }



    function add_mechanic() {
      var id_tool = document.getElementById('id_tool').value;
      var accountid = document.getElementById('accountid').value;
      var picInput = document.getElementById('toolpic');
      var picFile = picInput.files[0];

      if (id_tool == 0 || accountid == 0) {
        show_alert('info', 'Please select both a tool and a mechanic.');
        return;
      }

      let myForm = new FormData();
      myForm.append('accountid', accountid);
      myForm.append('id_tool', id_tool);
      myForm.append('toolpic', picFile);
      myForm.append('x_darren', 1);

      $.ajax({
        url: 'tool/tools.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#maincontent").html(data);
          $("#maincontent").css('opacity', '1');
          $('#myTable').DataTable({
            "pageLength": 50
          });

          Swal.fire({
            icon: 'success',
            text: 'Successfully Processed Request',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
          });
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }

    function edit_mechanic(toolid) {
      var id_tool = document.getElementById('id_tool').value;
      var accountid = document.getElementById('accountid').value;
      var picInput = document.getElementById('toolpic');
      var picFile = picInput.files[0];

      if (id_tool == 0 || accountid == 0) {
        show_alert('info', 'Please select both a tool and a mechanic.');

        return;
      }

      let myForm = new FormData();
      myForm.append('accountid', accountid);
      myForm.append('id_tool', id_tool);
      myForm.append('toolpic', picFile);
      myForm.append('edit', toolid);

      $.ajax({
        url: 'tool/tools.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#maincontent").html(data);
          $("#maincontent").css('opacity', '1');
          $('#myTable').DataTable({
            "pageLength": 50
          });

          if (data.includes("Tool record edited successfully.")) {
            show_alert('success', 'Successfully Processed Request');
          } else {
            Swal.fire('Error', 'Failed to edit mechanic: ' + data, 'error');
          }
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }


    function save_it_to_database(odometer) {
      let myForm = new FormData();
      myForm.append('odometer', odometer);
      myForm.append('complete_payment_action', 1);
      $.ajax({
        url: 'pages/save_it_to_database.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#save_monica").html(data);
          $("#save_monica").css('opacity', '1');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }

    function save_it_to_database_auto(odometer_atf) {
      let myForm = new FormData();
      myForm.append('odometer_atf', odometer_atf);
      myForm.append('complete_payment_action_is_odometer_atf', 1);
      $.ajax({
        url: 'pages/save_it_to_database.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#save_monica_auto").html(data);
          $("#save_monica_auto").css('opacity', '1');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }


    function save_it_to_database_manual(is_odometer_atf_manual) {
      let myForm = new FormData();
      myForm.append('is_odometer_atf_manual', is_odometer_atf_manual);
      myForm.append('complete_payment_action_is_odometer_atf_manual', 1);
      $.ajax({
        url: 'pages/save_it_to_database.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#save_monica_manual").html(data);
          $("#save_monica_manual").css('opacity', '1');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }

    function save_it_to_database_fuel(odometer_fuel) {
      let myForm = new FormData();
      myForm.append('odometer_fuel', odometer_fuel);
      myForm.append('complete_payment_action_is_odometer_fuel', 1);
      $.ajax({
        url: 'pages/save_it_to_database.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#save_monica_fuel").html(data);
          $("#save_monica_fuel").css('opacity', '1');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }


    function save_it_to_database_timing(is_odometer_timing) {
      let myForm = new FormData();
      myForm.append('is_odometer_timing', is_odometer_timing);
      myForm.append('complete_payment_action_is_odometer_timing', 1);
      $.ajax({
        url: 'pages/save_it_to_database.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#save_monica_timing").html(data);
          $("#save_monica_timing").css('opacity', '1');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }

    function is_click_calculate() {
      // Set is_click_this to 1
      var is_odometer = object('odometer').value;
      if (is_odometer) {
        is_odometer = object('odometer').value;
      }

      var is_odometer_atf = object('odometer_atf').value;
      if (is_odometer_atf) {
        is_odometer_atf = object('odometer_atf').value;
      }

      var is_odometer_atf_manual = object('odometer_atf_manual').value;
      if (is_odometer_atf_manual) {
        is_odometer_atf_manual = object('odometer_atf_manual').value;
      }

      var is_odometer_fuel = object('odometer_fuel').value;
      if (is_odometer_fuel) {
        is_odometer_fuel = object('odometer_fuel').value;
      }

      var is_odometer_timing = object('odometer_timing').value;
      if (is_odometer_timing) {
        is_odometer_timing = object('odometer_timing').value;
      }
      ajax_fn('pages/order_new_products.php?val=1&disc_amount=' +
        object('disc_amount').value +
        '&is_odometer=' + is_odometer +
        '&is_odometer_atf=' + is_odometer_atf +
        '&is_odometer_atf_manual=' + is_odometer_atf_manual +
        '&is_odometer_fuel=' + is_odometer_fuel +
        '&is_odometer_timing=' + is_odometer_timing, 'tmp_');
      //document.getElementById('is_click_this').value = 1; 
    }


    function get_employment(employment_status) {
      ajax_fn('employee/employee_add_status.php?employment_status=' + employment_status, 'tmp_show_employment');
    }



    function select_payment_module(payid) {
      var checkbox = document.getElementById('payid' + payid);
      var targetElement = document.getElementById('show_it' + payid);
      if (checkbox.checked) {
        ajax_fn('payment/payment_mode.php?payid=' + payid, 'show_it' + payid);
        targetElement.style.display = 'block';
      } else {
        targetElement.style.display = 'none';
      }
    }


    // function complete_payment_action(tr_id, customerid) {
    //     var is_done = document.getElementById('is_done').checked;
    //     var is_done_bayarea = document.getElementById('is_done_bayarea').checked;
    //     var is_done_detailing = document.getElementById('is_done_detailing').checked;

    //     var arr = document.getElementById('arr').value.split(':');
    //     var arr_values = [];

    //     for (let i = 0; i < arr.length; i++) {
    //         var refNum = document.getElementById('refnum' + arr[i]).value; 
    //         var amountPaid = document.getElementById('amount_paid' + arr[i]).value; 
    //         arr_values.push(arr[i] + ':' + refNum + '-' + amountPaid);
    //     }

    //     //if(!amountPaid){ show_alert('info','Please input amount paid by customer');return; }

    //     var values = arr_values.join(',');
    //     console.log(values);
    //     let myForm = new FormData();
    //     myForm.append('values', values);
    //     myForm.append('tr_id', tr_id);
    //     myForm.append('customerid', customerid);
    //     myForm.append('is_done', is_done);
    //     myForm.append('is_done_bayarea', is_done_bayarea);
    //     myForm.append('is_done_detailing', is_done_detailing);
    //     myForm.append('allow_transaction_darrenxxxx', 1);
    //     Swal.fire({
    //         title: "Payment",
    //         text: "Are you sure you want to process this?",
    //         icon: "info",
    //         showCancelButton: true,
    //         confirmButtonColor: "#3085d6",
    //         cancelButtonColor: "#d33",
    //         confirmButtonText: "Yes",
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             $.ajax({
    //                 url: 'pages/orders.php',
    //                 type: "POST",
    //                 data: myForm,
    //                 contentType: false,
    //                 processData: false,
    //                 success: function (data) {
    //             	 	TINY.box.show({
    // 						html: 'Processing Request',
    // 						animate: false,
    // 						close: false,
    // 						mask: false,
    // 						boxid: 'success',
    // 						autohide: 2
    // 					});
    //                     $("#tmp_content").html(data);
    //                     $("#tmp_content").css('opacity', '1');
    //                     initialize_datatable();
    //                      initialize_datepicker();

    //                     show_alert('success','Successfully Processed Request');
    //                 },
    //                 error: function () {
    //                     Swal.fire('Error', 'Error Processing Request', 'error');
    //                 }
    //             });
    //         }
    //     });
    // }

    function load_price(prodid) {
      var priceField = document.getElementById('price'); // Input field for price
      var tmpCheckPriceDiv = document.getElementById('tmp_check_price'); // Div for temporary table
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "receiveorder/receive_draft_new_get_price.php?prodid=" + prodid, true);
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          //priceField.value = xhr.responseText;
          tmpCheckPriceDiv.innerHTML = xhr.responseText;
        }
      };
      xhr.send();
    };


    function is_existing_dr_num(drnum) {
      const processBtn = document.getElementById("process-btn");
      const showExist = document.getElementById("show_exist");

      if (drnum.trim() === "") {
        showExist.innerHTML = ""; // Clear the message if input is empty
        processBtn.disabled = false; // Enable the button if no input
        return;
      }

      const xhr = new XMLHttpRequest();
      xhr.open("POST", "receiveorder/received_new_is_exist.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          showExist.innerHTML = xhr.responseText;

          // Check if the DR number exists based on the server response
          if (xhr.responseText.includes("DR number already exists!")) {
            processBtn.disabled = true; // Disable the button
          } else {
            processBtn.disabled = false; // Enable the button
          }
        }
      };

      xhr.send("drnum=" + encodeURIComponent(drnum));
    }

    // function add_new_pay() {
    //   var amount_paid = parseFloat(document.getElementById('amount_paid').value) || 0;
    //   var payidElem = document.getElementById('payid');
    //   var refnumElem = document.getElementById('refnum');
    //   var descriptionElem = document.getElementById('description');

    //   var payid = encodeURIComponent(payidElem.value);
    //   var refnum = encodeURIComponent(refnumElem.value);
    //   var description = encodeURIComponent(descriptionElem.value);

    //   if (payid == 0) {
    //     show_alert('info', 'Please select a payment method.');
    //     return;
    //   }

    //   if (!amount_paid) {
    //     show_alert('info', 'Please enter an amount.');
    //     return;
    //   }

    //   ajax_fn(`payment/payment_tmp.php?amount_paid=${amount_paid}&payid=${payid}&refnum=${refnum}&description=${description}`, 'x_tmp_x');

    //   // Reset form fields
    //   document.getElementById('amount_paid').value = "";
    //   payidElem.value = "0";
    //   refnumElem.value = "";
    //   descriptionElem.value = "";
    // }

    function add_new_pay() {
      var amount_paid = parseFloat(document.getElementById('amount_paid').value) || 0;
      var payidElem = document.getElementById('payid');
      var refnumElem = document.getElementById('refnum');
      var descriptionElem = document.getElementById('description');

      var payid = encodeURIComponent(payidElem.value);
      var refnum = encodeURIComponent(refnumElem.value.trim());
      var description = encodeURIComponent(descriptionElem.value);

      if (payid == 0) {
        show_alert('info', 'Please select a payment method.');
        return;
      }

      if (!amount_paid) {
        show_alert('info', 'Please enter an amount.');
        return;
      }

      // Prevent reference number entry for cash payments
      if (payid == 1 && refnum !== "") {
        show_alert('error', 'Reference number is not allowed for cash payments.');
        refnumElem.value = "";
        return;
      }

      ajax_fn(`payment/payment_tmp.php?amount_paid=${amount_paid}&payid=${payid}&refnum=${refnum}&description=${description}`, 'x_tmp_x');

      // Reset form fields
      document.getElementById('amount_paid').value = "";
      payidElem.value = "0";
      refnumElem.value = "";
      descriptionElem.value = "";
    }



    function complete_payment_action(tr_id, customerid) {
      var is_done = document.getElementById('is_done').checked;
      var is_done_bayarea = document.getElementById('is_done_bayarea').checked;
      var is_done_detailing = document.getElementById('is_done_detailing').checked;
      var odometer_exist = document.getElementById('odometer_exist').value;

      var ultimate_total_ = parseFloat(document.getElementById('ultimate_total').value) || 0;
      var total_amount_paid = parseFloat(document.getElementById('total_amount_paid').value) || 0;
      var ultimate_discount = parseFloat(document.getElementById('ultimate_discount').value) || 0;
      var total_marketing = parseFloat(document.getElementById('total_markerting').value) || 0;

      var ultimate_total = (ultimate_total_ + total_marketing).toFixed(2);
      total_amount_paid = total_amount_paid.toFixed(2);

      // Proceeding to payment regardless of odometer existence
      if (!odometer_exist) {
        show_alert('info', 'Odometer reading is not provided, proceeding with payment.');
        return;
      }

      if (ultimate_total !== total_amount_paid) {
        show_alert('info', 'Payment and total amount do not match. ' +
          'Total Amount to be Paid: ' + ultimate_total +
          ' ***** ' +
          'Total Amount Entered by User: ' + total_amount_paid);
        return;
      }


      let myForm = new FormData();
      myForm.append('tr_id', tr_id);
      myForm.append('customerid', customerid);
      myForm.append('is_done', is_done);
      myForm.append('is_done_bayarea', is_done_bayarea);
      myForm.append('is_done_detailing', is_done_detailing);
      myForm.append('allow_transaction_darrenxxxx', 1);

      Swal.fire({
        title: "Payment",
        text: "Are you sure you want to process this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Processing...",
            text: "Please wait while we process your transaction.",
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
              Swal.showLoading();
            },
          });
          $.ajax({
            url: 'pages/orders.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              TINY.box.show({
                html: 'Processing Request',
                animate: false,
                close: false,
                mask: false,
                boxid: 'success',
                autohide: 2
              });
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();

              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    // function complete_payment_action(tr_id, customerid) {
    //   var is_done = document.getElementById('is_done').checked;
    //   var is_done_bayarea = document.getElementById('is_done_bayarea').checked;
    //   var is_done_detailing = document.getElementById('is_done_detailing').checked;
    //   var odometer_exist = document.getElementById('odometer_exist').value;
    //   var ultimate_total_ = parseFloat(document.getElementById('ultimate_total').value); // Parse ultimate_total as a float
    //   var ultimate_discount = parseFloat(document.getElementById('ultimate_discount').value); // Parse ultimate_total as a float
    //   var total_markerting = parseFloat(document.getElementById('total_markerting').value); // Parse ultimate_total as a float

    //   var ultimate_total = ultimate_total_ + total_markerting

    //   var arr = document.getElementById('arr').value.split(':');
    //   var arr_values = [];
    //   var isValidInput = false;

    //   var totalAmountPaid = 0;

    //   // Proceeding to payment regardless of odometer existence
    //   if (!odometer_exist) {
    //     show_alert('info', 'Odometer reading is not provided, proceeding with payment.');
    //   }

    //   for (let i = 0; i < arr.length; i++) {
    //     var refNum = document.getElementById('refnum' + arr[i]).value.trim();
    //     var amountPaid = document.getElementById('amount_paid' + arr[i]).value.trim();
    //     var description = document.getElementById('description' + arr[i]).value.trim();

    //     if (refNum && amountPaid && parseFloat(amountPaid) > 0) {
    //       isValidInput = true;
    //     }

    //     // Check if amountPaid has a valid numeric value
    //     if (amountPaid && !isNaN(amountPaid) && parseFloat(amountPaid) > 0) {
    //       totalAmountPaid += parseFloat(amountPaid);
    //     }

    //     arr_values.push(arr[i] + ':' + refNum + '-' + amountPaid + '-' + description);
    //   }


    //   if (!isValidInput) {
    //     show_alert('info', 'Please input both a reference number and an amount for at least one payment method.');
    //     return;
    //   }

    //   // Compare ultimate_total and totalAmountPaid
    //   if (parseFloat(totalAmountPaid).toFixed(2) !== parseFloat(ultimate_total).toFixed(2)) {
    //     show_alert('error', 'The total amount paid does not match the ultimate total.' + totalAmountPaid + "---" + ultimate_total);
    //     return;
    //   }

    //   console.log("Total Amount to Paid: " + totalAmountPaid);



    //   var values = arr_values.join(',');
    //   console.log(values);
    //   let myForm = new FormData();
    //   myForm.append('values', values);
    //   myForm.append('tr_id', tr_id);
    //   myForm.append('customerid', customerid);
    //   myForm.append('is_done', is_done);
    //   myForm.append('is_done_bayarea', is_done_bayarea);
    //   myForm.append('is_done_detailing', is_done_detailing);
    //   myForm.append('allow_transaction_darrenxxxx', 1);

    //   Swal.fire({
    //     title: "Payment",
    //     text: "Are you sure you want to process this?",
    //     icon: "info",
    //     showCancelButton: true,
    //     confirmButtonColor: "#3085d6",
    //     cancelButtonColor: "#d33",
    //     confirmButtonText: "Yes",
    //   }).then((result) => {
    //     if (result.isConfirmed) {
    //       Swal.fire({
    //         title: "Processing...",
    //         text: "Please wait while we process your transaction.",
    //         allowOutsideClick: false,
    //         allowEscapeKey: false,
    //         didOpen: () => {
    //           Swal.showLoading();
    //         },
    //       });
    //       $.ajax({
    //         url: 'pages/orders.php',
    //         type: "POST",
    //         data: myForm,
    //         contentType: false,
    //         processData: false,
    //         success: function(data) {
    //           TINY.box.show({
    //             html: 'Processing Request',
    //             animate: false,
    //             close: false,
    //             mask: false,
    //             boxid: 'success',
    //             autohide: 2
    //           });
    //           $("#tmp_content").html(data);
    //           $("#tmp_content").css('opacity', '1');
    //           initialize_datatable();
    //           initialize_datepicker();

    //           show_alert('success', 'Successfully Processed Request');
    //         },
    //         error: function() {
    //           Swal.fire('Error', 'Error Processing Request', 'error');
    //         }
    //       });
    //     }
    //   });
    // }




    function add_package() {
      var package = object('package').value;
      let myForm = new FormData();
      myForm.append('package', package);
      myForm.append('add_pppp', 1);
      Swal.fire({
        title: "Package",
        text: "Are you sure you want to process this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'package/package.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }



    function edit_package(id) {
      var package = object('package').value;
      let myForm = new FormData();
      myForm.append('package', package);
      myForm.append('edit_pppp', id);
      Swal.fire({
        title: "Package",
        text: "Are you sure you want to process this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'package/package.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }



    function process_package_str() {
      var p_id = object('delimiter_id').value;
      let myForm = new FormData();
      myForm.append('p_id_darren', p_id);
      Swal.fire({
        title: "Package (Products)",
        text: "Are you sure you want to process this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'package/package.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    function add_package_str(prodid) {
      var qtyPackage = object('qtyPackage' + prodid).value;
      var is_service = object('is_service' + prodid).value;
      var laborid = object('laborid' + prodid).value;

      if (is_service != 0) {
        if (laborid == 0) {
          show_alert('warning', 'Please select laborer');

        } else {
          ajax_fn('package/session_package.php?prodid_x=' + prodid + '&qtyPackage=' + qtyPackage +
            '&laborid=' + laborid + '&is_service=' + is_service, 'session_pck');

        }
      } else {
        if (qtyPackage == 0) {
          show_alert('warning', 'Please input quantity');

        } else {
          ajax_fn('package/session_package.php?prodid_x=' + prodid + '&qtyPackage=' + qtyPackage +
            '&laborid=' + laborid + '&is_service=' + is_service, 'session_pck');

        }
      }


    }


    function add_expense() {
      let supplierid = object('supplierid').value;
      let statement_date = object('statement_date').value;
      let cov_from_date = object('cov_from_date').value;
      let cov_to_date = object('cov_to_date').value;
      let description = object('description').value;
      let amount = object('amount').value;


      if (supplierid == 0) {
        show_alert('warning', 'Please select item');
        return;
      }

      if (isNaN(Date.parse(statement_date))) {
        show_alert('warning', "Please select valid data");
        return;
      }

      if (!description) {
        show_alert('warning', 'Please input description');
        return;
      }
      if (!amount) {
        show_alert('warning', 'Please input amount');
        return;
      }


      let myForm = new FormData();
      myForm.append('supplierid', supplierid);
      myForm.append('statement_date', statement_date);
      myForm.append('cov_from_date', cov_from_date);
      myForm.append('cov_to_date', cov_to_date);
      myForm.append('description', description);
      myForm.append('supplierid', supplierid);
      myForm.append('amount', amount);
      myForm.append('add_expense_post', 1);

      Swal.fire({
        title: "Expense",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'expense/expense.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    function edit_expense(id) {
      let supplierid = object('supplierid').value;
      let statement_date = object('statement_date').value;
      let cov_from_date = object('cov_from_date').value;
      let cov_to_date = object('cov_to_date').value;
      let description = object('description').value;
      let amount = object('amount').value;


      if (supplierid == 0) {
        show_alert('warning', 'Please select item');
        return;
      }
      if (!description) {
        show_alert('warning', 'Please input description');
        return;
      }
      if (!amount) {
        show_alert('warning', 'Please input amount');
        return;
      }

      let myForm = new FormData();
      myForm.append('supplierid', supplierid);
      myForm.append('statement_date', statement_date);
      myForm.append('cov_from_date', cov_from_date);
      myForm.append('cov_to_date', cov_to_date);
      myForm.append('description', description);
      myForm.append('supplierid', supplierid);
      myForm.append('amount', amount);
      myForm.append('edit_expense_post', id);

      Swal.fire({
        title: "Expense",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'expense/expense.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function wait_s() {
      Swal.fire({
        title: "The system is currently under maintenance. Please try again later. ",
        width: 600,
        padding: "3em",
        color: "#716add",
        background: "#fff url(/images/trees.png)",
        backdrop: `
                        rgba(0,0,123,0.4)
                        url("/images/car.png")
                        left top
                        no-repeat
                    `
      });
    };

    function cancel_payroll(payrollid) {
      let myForm = new FormData();
      myForm.append('payrollid', payrollid);
      myForm.append('cancel_payroll', 1);

      Swal.fire({
        title: "Are you sure you want to cancel this Payroll Entry #" + payrollid + "?",
        html: "Do you want to cancel this?", // Use 'html' instead of 'text'
        icon: "info",
        input: 'text',
        inputPlaceholder: 'Enter reason for voiding...',
        inputAttributes: {
          'aria-label': 'Reason for voiding'
        },
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "Cancel",
        preConfirm: (reason) => {
          if (!reason) {
            Swal.showValidationMessage('You need to provide a reason!');
          }
          return reason;
        }
      }).then((result) => {
        if (result.isConfirmed) {
          let reason = result.value; // Retrieve the entered text
          myForm.append('cancel_reason', reason); // Append the reason to FormData

          $.ajax({
            url: 'payroll/payroll_cancel.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#xxcancel" + payrollid).html(data);
              $("#xxcancel" + payrollid).css('opacity', '1');
              // initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        } else {
          console.log("Voiding sale cancelled");
        }
      });
    }

    function process_payroll() {
      const from_from = object('from_from').value;
      const to_to = object('to_to').value;
      const description = object('description').value;

      const arr = object('arr').value.split(':');
      const arr_values = [];

      for (let i = 0; i < arr.length; i++) {
        const employeeId = arr[i];

        arr_values.push({
          employeeid: employeeId,
          rate_per_hour: object('rate_per_hour' + employeeId).value.trim(),
          salary: object('salary' + employeeId).value.trim(),
          attendance_bonus: object('attendance_bonus' + employeeId).value.trim(),
          on_time_bonus: object('on_time_bonus' + employeeId).value.trim(),
          clothing_allowance: object('clothing_allowance' + employeeId).value.trim(),
          food_allowance: object('food_allowance' + employeeId).value.trim(),
          transportation_allowance: object('transportation_allowance' + employeeId).value.trim(),
          medicine_allowance: object('medicine_allowance' + employeeId).value.trim(),
          attendance: object('attendance' + employeeId).value.trim(),
          working_hours: object('working_hours' + employeeId).value.trim(),
          actual_working_hours: object('actual_working_hours' + employeeId).value.trim(),
          commission: object('commission' + employeeId).value.trim(),
          actual_salary: object('actual_salary' + employeeId).value.trim(),
          actual_salary_w_comm: object('actual_salary_w_comm' + employeeId).value.trim(),
          food_laborer: object('food_laborer' + employeeId).value.trim(),
          vale: object('vale' + employeeId).value.trim(),
          gross_income: object('gross_income' + employeeId).value.trim(),
          lunchbreak_save: object('lunchbreak_save' + employeeId).value.trim(),
          sched_timein: object('sched_timein' + employeeId).value.trim(),
          sched_timeout: object('sched_timeout' + employeeId).value.trim(),
          sss: object('sss' + employeeId).value.trim(),
          pagibig: object('pagibig' + employeeId).value.trim(),
          philhealth: object('philhealth' + employeeId).value.trim()
        });
      }

      const values = JSON.stringify(arr_values); // JSON encoding here!

      const myForm = new FormData();
      myForm.append('values', values);
      myForm.append('from_from', from_from);
      myForm.append('to_to', to_to);
      myForm.append('description', description);
      myForm.append('allow_transaction_payroll', 1);

      Swal.fire({
        title: "Payroll",
        text: "Are you sure you want to process this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Processing...",
            text: "Please wait while the system computes the payroll.",
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
              Swal.showLoading();
            },
          });

          $.ajax({
            url: 'payroll/payroll.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data).css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    };


    //customer
    function add_marketing() {
      let description = object('description').value;
      let qty = object('qty').value;
      let puhunan = object('puhunan').value;
      let sellingprice = object('sellingprice').value;

      if (!description) {
        show_alert('info', 'Please input description');
        return;
      }

      if (!qty) {
        show_alert('info', 'Please input qty');
        return;
      }

      if (!sellingprice) {
        show_alert('info', 'Please input selling price');
        return;
      }

      // Check if the datatable has data
      const tableRows = document.querySelectorAll("#myTable tbody tr");
      if (tableRows.length > 0) {
        // Validate if semester already exists in the table
        let semesterExists = false;
        tableRows.forEach(row => {
          if (row.cells.length > 1) { // Check if the second cell exists
            const rowSemester = row.cells[1].textContent.trim(); // Get the semester value from the second column
            if (rowSemester.toLowerCase() === description.toLowerCase()) {
              semesterExists = true;
            }
          }
        });

        if (semesterExists) {
          show_alert('warning', 'Description already exists.');
          return;
        }
      }


      let myForm = new FormData();
      myForm.append('description', description);
      myForm.append('qty', qty);
      myForm.append('puhunan', puhunan);
      myForm.append('sellingprice', sellingprice);
      myForm.append('add', 1);

      Swal.fire({
        title: "Marketing",
        text: "Are you sure you want to add this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'marketing/marketing.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }


    function edit_marketing(marketingid) {
      let description = object('description').value;
      let qty = object('qty').value;
      let puhunan = object('puhunan').value;
      let sellingprice = object('sellingprice').value;

      if (!description) {
        show_alert('info', 'Please input description');
        return;
      }

      if (!qty) {
        show_alert('info', 'Please input qty');
        return;
      }

      if (!sellingprice) {
        show_alert('info', 'Please input selling price');
        return;
      }


      let myForm = new FormData();
      myForm.append('description', description);
      myForm.append('qty', qty);
      myForm.append('puhunan', puhunan);
      myForm.append('sellingprice', sellingprice);
      myForm.append('marketingid', marketingid);
      myForm.append('edit', 1);


      Swal.fire({
        title: "Marketing",
        text: "Are you sure you want to update this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'marketing/marketing.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              initialize_datatable();
              initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }


    function add_prod_marketing(tr_id) {
      let marketingid = object('marketingid').value;
      let qty = object('qty').value;

      if (marketingid == 0) {
        show_alert('warning', 'Please select product');
        return;
      }

      if (qty == 0 || qty == '') {
        show_alert('warning', 'Please input quantity');
        return;
      }

      let myForm = new FormData();
      myForm.append('marketingid', marketingid);
      myForm.append('qty', qty);
      myForm.append('tr_id', tr_id);
      myForm.append('adddddddddddd', tr_id);

      $.ajax({
        url: 'marketing/marketing_transaction_tmp.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#x_de").html(data);
          $("#x_de").css('opacity', '1');
          // initialize_datatable();
          initialize_datepicker();
          show_alert('success', 'Successfully Added');
          // Reset fields after successful addition
          document.getElementById('marketingid').value = 0;
          document.getElementById('qty').value = "";
          document.getElementById('str').value = "";
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });

    }


    function add_prod_marketing_non_transaction() {
      let marketingid = object('marketingid').value;
      let qty = object('qty').value;
      let laborid = object('laborid').value;

      if (marketingid == 0) {
        show_alert('warning', 'Please select product');
        return;
      }

      if (qty == 0 || qty == '') {
        show_alert('warning', 'Please input quantity');
        return;
      }

      let myForm = new FormData();
      myForm.append('marketingid', marketingid);
      myForm.append('qty', qty);
      myForm.append('laborid', laborid);
      // myForm.append('tr_id', tr_id);
      myForm.append('non_transaction_adddddddddddd', 1);

      $.ajax({
        url: 'marketing/marketing_non_transaction_temporary.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#x_tmp_x").html(data);
          $("#x_tmp_x").css('opacity', '1');
          // initialize_datatable();
          initialize_datepicker();
          show_alert('success', 'Successfully Added');
          // Reset fields after successful addition
          document.getElementById('marketingid').value = 0;
          document.getElementById('qty').value = "";
          document.getElementById('str').value = "";
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });

    }
    //process_add_prod_marketing_non_transaction
    function process_add_prod_marketing_non_transaction() {
      let myForm = new FormData();
      myForm.append('process_it', 1);
      Swal.fire({
        title: "Marketing",
        text: "Are you sure you want to process this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'marketing/list_marketing.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              initialize_datatable();

              TINY.box.show({
                html: 'Processing Request',
                animate: false,
                close: false,
                mask: false,
                boxid: 'success',
                autohide: 2
              });
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
      //} else {swal('Error on Group', 'Please input group', 'error');}
    }


    function del_prod_marketing(id, tr_id) {
      let myForm = new FormData();
      myForm.append('deletemeID', id);
      myForm.append('tr_id', tr_id);

      $.ajax({
        url: 'marketing/marketing_transaction_tmp.php',
        type: "POST",
        data: myForm,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#x_de").html(data);
          $("#x_de").css('opacity', '1');
          // initialize_datatable();
          initialize_datepicker();
          show_alert('info', 'Successfully Deleted');
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });

    }


    function modify_payment(accountid, tr_id_value) {
      var tr_id = object('tr_id_toget' + tr_id_value).value;
      var customerid = object('customerid_toget' + tr_id_value).value;
      console.log('tr_id: ' + tr_id);
      console.log('customerid: ' + customerid);
      Swal.fire({
        title: "Super Admin Authentication",
        input: "password",
        inputLabel: "Please input SUPER ADMIN password before proceeding",
        inputPlaceholder: "Enter Super Admin password",
        inputAttributes: {
          maxlength: "100",
          autocapitalize: "off",
          autocorrect: "off"
        },
        showCancelButton: true,
        confirmButtonText: "Submit",
        showLoaderOnConfirm: true,
        preConfirm: (password) => {
          return $.ajax({
            url: "pages/account_verify.php",
            type: "POST",
            data: {
              get_it: 1,
              accountid: accountid,
              password: password
            },
            dataType: "json"
          }).then(response => {
            if (!response.success) {
              Swal.showValidationMessage(`Authentication failed: ${response.message}`);
            }
            return response.success;
          }).catch(error => {
            Swal.showValidationMessage(`Request failed: ${error.statusText}`);
          });
        }
      }).then((result) => {
        if (result.isConfirmed && result.value) {
          // Authentication successful, now fetch account details
          TINY.box.show({
            url: 'payment/payment.php?edit=' + tr_id + '&tr_id=' + encodeURIComponent(tr_id) + '&customerid=' + encodeURIComponent(customerid),
            width: 750,
            height: 600
          });
        }
      });
    };


    function show_report(accountid) {
      Swal.fire({
        title: "Super Admin Authentication",
        input: "password",
        inputLabel: "Please input SUPER ADMIN password before proceeding",
        inputPlaceholder: "Enter Super Admin password",
        inputAttributes: {
          maxlength: "100",
          autocapitalize: "off",
          autocorrect: "off"
        },
        showCancelButton: true,
        confirmButtonText: "Submit",
        showLoaderOnConfirm: true,
        preConfirm: (password) => {
          return $.ajax({
            url: "pages/account_verify.php",
            type: "POST",
            data: {
              get_it: 1,
              accountid: accountid,
              password: password
            },
            dataType: "json"
          }).then(response => {
            if (!response.success) {
              Swal.showValidationMessage(`Authentication failed: ${response.message}`);
            }
            return response.success;
          }).catch(error => {
            Swal.showValidationMessage(`Request failed: ${error.statusText}`);
          });
        }
      }).then((result) => {
        if (result.isConfirmed && result.value) {
          ajax_new_to_load('universal/submenu_report.php', 'maincontent');
          setActive(this);
        }
      });
    };


    function selecting_package(prodid) {
      TINY.box.show({
        html: 'Processing Request',
        animate: false,
        close: false,
        mask: false,
        boxid: 'success',
        autohide: 1
      });
      ajax_fn('package/session_package.php?initialize_prodid=' + prodid, 'session_pck');
    }

    function onload_the_product(supplierid) {


      // Load product data via AJAX
      ajax_new('receiveorder/get_product.php?supplierid=' + supplierid, 'xxx');
    }


    function view_profile() {
      Swal.fire({
        title: "Under Construction.",
        width: 600,
        padding: "3em",
        color: "#716add",
        background: "#fff url(/images/trees.png)",
        backdrop: `
    rgba(0,0,123,0.4)
    url("images/carsss.gif")
    left top
    no-repeat
  `
      });
    }



    function on_hide_go_to_purchase() {
      TINY.box.show({
        html: 'Processing Request',
        animate: false,
        close: false,
        mask: false,
        boxid: 'success',
        autohide: 1
      });
      ajax_new('universal/submenu_received2.php', 'maincontent');
      const button = document.getElementById('click_me_to_show_it');
  if (button) {
    button.click();
  } else {
    console.warn("Button with id 'click_me_to_show_it' not found.");
  }
    }


    function all_check() {
      let selectAllCheckbox = document.getElementById("all_check");
      let checkboxes = document.querySelectorAll("tbody input[type='checkbox']");

      checkboxes.forEach((checkbox) => {
        checkbox.checked = selectAllCheckbox.checked;
        check_it(checkbox.id.replace("checkthis", ""), checkbox);
      });
    }

    function check_it(prodid, checkbox) {
      let action = checkbox.checked ? 'add' : 'remove'; // Determine action based on checkbox state
      ajax_fn(`pms/pms_tmp_add.php?action=${action}&prodid=${prodid}`, 'tmp_adddd');
    }

    function check_it_attendance(attendanceid, checkbox) {
      let action = checkbox.checked ? 'add' : 'remove'; // Determine action based on checkbox state
      ajax_fn(`employee/att_get_add.php?action=${action}&attendanceid=${attendanceid}`, 'darren');
    }

    function process_recurring() {
      let rows = document.querySelectorAll('#myTable tbody tr');
      let data = [];

      rows.forEach(row => {
        let supplierText = row.querySelector('td:nth-child(2)').innerText.trim();
        let supplierIdInput = row.querySelector('input[id^="supplierid"]');
        let supplierId = supplierIdInput ? supplierIdInput.id.replace('supplierid', '') : null;

        if (supplierId) {
          let cov_from_date = document.getElementById('cov_from_date' + supplierId).value;
          let cov_to_date = document.getElementById('cov_to_date' + supplierId).value;
          let statement_date = document.getElementById('statement_date' + supplierId).value;
          let description = document.getElementById('description' + supplierId).value;
          let amount = document.getElementById('amount' + supplierId).value;

          data.push({
            supplierid: supplierId,
            cov_from_date: cov_from_date,
            cov_to_date: cov_to_date,
            statement_date: statement_date,
            description: description,
            amount: amount
          });
        }
      });

      console.log(data); // See the collected data

      if (data.length === 0) {
        Swal.fire('Warning', 'No data to process.', 'warning');
        return;
      }

      Swal.fire({
        title: "Recurring Expense",
        text: "Are you sure you want to process this?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "Cancel"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'expense/expense.php',
            type: "POST",
            data: {
              insertthis: 1,
              data: JSON.stringify(data)
            },
            dataType: 'json',
            success: function(response) {
              if (response.success) {
                show_alert('success', response.message); // Show success alert
                setTimeout(function() {
                  $("#maincontent").load('expense/expense.php', function() {
                    initialize_datatable(); // re-initialize datatable after content loads
                  });
                }, 1000); // optional: small delay to let user see the success alert
              } else {
                Swal.fire('Error', response.message || 'Unknown error occurred.', 'error');
              }
            },
            error: function(xhr, status, error) {
              let errorMessage = xhr.responseText ? xhr.responseText : 'Error Processing Request';
              Swal.fire('Error', errorMessage, 'error');
            }
          });
        }

      });
    }



 function message_customer(tr_id, mobile_number) {
  fetch('get_message.php')
    .then(r => r.json())
    .then(messages => {
      if (!Array.isArray(messages) || messages.length === 0) {
        Swal.fire('No messages', 'There are no saved messages to choose from.', 'info');
        return;
      }

      const optionsHtml = ['<option value="" disabled selected>Select a message…</option>']
        .concat(messages.map(m => {
          const raw = String(m.message || '');
          const safe = raw.replace(/&/g, '&amp;')
                          .replace(/"/g, '&quot;')
                          .replace(/</g, '&lt;');
          return `<option value="${safe}">${safe}</option>`;
        }))
        .join('');

      Swal.fire({
        title: 'Notify Customer',
        icon: 'info',
        showCancelButton: true,
        confirmButtonText: 'OK',
        cancelButtonText: 'Cancel',
        customClass: { popup: 'swal-msg' },
        html: `
          <div class="swal-form">
            <p style="margin-bottom:8px;"><strong>Mobile:</strong> ${mobile_number || 'N/A'}</p>
            <label for="message-select" class="swal-label">Select a message</label>
            <select id="message-select" class="swal-input">
              ${optionsHtml}
            </select>
            <label for="message-text" class="swal-label" style="margin-top:10px;">Edit (optional)</label>
            <textarea id="message-text" class="swal-textarea" rows="4"
              placeholder="Selected message will appear here…" spellcheck="false"></textarea>
            <div class="swal-hint"><span id="char-count">0</span> chars</div>
          </div>
        `,
        didOpen: () => {
          const popup = Swal.getPopup();
          const selectEl   = popup.querySelector('#message-select');
          const textareaEl = popup.querySelector('#message-text');
          const countEl    = popup.querySelector('#char-count');
          const confirmBtn = Swal.getConfirmButton();

          const updateCount = () => { countEl.textContent = (textareaEl.value || '').length; };
          confirmBtn.disabled = true;

          selectEl.addEventListener('change', () => {
            textareaEl.value = selectEl.value || '';
            confirmBtn.disabled = !textareaEl.value.trim() || !mobile_number || mobile_number === 'N/A';
            updateCount();
            textareaEl.focus();
            const len = textareaEl.value.length;
            textareaEl.setSelectionRange(len, len);
          });

          textareaEl.addEventListener('input', () => {
            confirmBtn.disabled = !textareaEl.value.trim() || !mobile_number || mobile_number === 'N/A';
            updateCount();
          });

          updateCount();
          selectEl.focus();
        },
        preConfirm: () => {
          const msg = Swal.getPopup().querySelector('#message-text').value.trim();
          if (!msg) {
            Swal.showValidationMessage('Please select or enter a message.');
            return false;
          }
          if (!mobile_number || mobile_number === 'N/A') {
            Swal.showValidationMessage('No mobile number for this customer.');
            return false;
          }
          return { tr_id: tr_id, message: msg };
        }
      }).then(res => {
       if (res.isConfirmed) {
    const tr_id   = res.value.tr_id;
    const message = res.value.message;

    console.log("Selected tr_id:", tr_id);
    console.log("Selected message:", message);

    // Encode message for URL
    const encodedMsg = encodeURIComponent(message);

    // Call your existing ajax_new function with both params
    ajax_new(`universal/submenu_asm.php?get_message_send=1&tr_id=${tr_id}&message=${encodedMsg}`, 'maincontent');

     // Show success after a short delay
          setTimeout(() => {
            Swal.fire('Success!', 'Message successfully sent.', 'success');
          }, 1000); // adjust delay if needed
  }
      });
    })
    .catch(() => {
      Swal.fire('Error', 'Could not load messages from server.', 'error');
    });
}



    function add_message() {
      const message = object('message').value;
      let myForm = new FormData();
      myForm.append('message', message);
      if (!message) {
        show_alert('warning', 'Please input message.');
        return;
      }

      Swal.fire({
        title: "Message Template",
        text: "Are you sure you want to add this?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'payment/message.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              $('.modal-backdrop').remove();
              $('body').css('overflow', 'auto');
              initiateDatatable();
              show_alert('success', 'Successfully Processed Request');
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }

    function get_message(id) {
      $.ajax({
        url: 'payment/message_get.php',
        type: "GET",
        data: {
          id: id
        },
        dataType: 'json',
        success: function(data) {
          console.log(data); // Debugging
          if (data.message) {
            $('#message_edit').val(data.message);
          } else {
            Swal.fire('Error', 'Message not found', 'error');
          }
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }

    function get_qr(customer_code) {
      $.ajax({
        url: 'customer/customer_get.php',
        type: "GET",
        data: {
          customer_code
        },
        dataType: 'json',
        success: function(data) {
          if (data.customer_code) {
            $('#customer_code_get').val(data.customer_code);
            $('#qr_image').attr('src', 'customer/customer_qr.php?customer_code=' + encodeURIComponent(data.customer_code));
          } else {
            Swal.fire('Error', 'No data found for this customer', 'warning');
          }
        },
        error: function() {
          Swal.fire('Error', 'Error Processing Request', 'error');
        }
      });
    }




    function edit_message() {
      const message_edit = object('message_edit').value;
      let myForm = new FormData();
      myForm.append('message_edit', message_edit);
      if (!message_edit) {
        show_alert('warning', 'Please input message.');
        return;
      }

      Swal.fire({
        title: "Message Template",
        text: "Are you sure you want to update this?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes"
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'payment/message.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              $('.modal-backdrop').remove();
              $('body').css('overflow', 'auto');

              initiateDatatable();
              show_alert('success', 'Successfully Processed Request');

            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });
    }
  </script>




  <script>
    document.addEventListener("keydown", function(event) {
      if (event.altKey) {
        event.preventDefault(); // Prevent default browser shortcuts
        switch (event.key.toLowerCase()) {
          case "r": // Alt + R for process payment
            var tr_id_to_get = document.getElementById('tr_id_to_get')?.value;
            var customerid_to_get = document.getElementById('customerid_to_get')?.value;
            if (typeof complete_payment_action === "function") {
              complete_payment_action(tr_id_to_get, customerid_to_get);
            } else {
              console.warn("complete_payment_action is not defined on this page.");
            }
            break;

          case "q": // Ctrl + Alt + q to Queue in Transactions
            if (typeof process_transaction === "function") {
              process_transaction();
            } else {
              console.warn("process_transaction is not defined on this page.");
            }
            break;

          case "u": // Alt + U to Update Button in Transactions
            var tr_id_to_edit_edit = document.getElementById('tr_id_to_edit_edit')?.value;
            if (typeof process_transaction_edit === "function") {
              process_transaction_edit(tr_id_to_edit_edit);
            } else {
              console.warn("process_transaction_edit is not defined on this page.");
            }
            break;

          case "c": // Alt + C to calculate
            if (typeof is_click_calculate === "function") {
              is_click_calculate();
            } else {
              console.warn("is_click_calculate is not defined on this page.");
            }
            break;

          case "a": // Alt + A to add item
            if (typeof tmp_add_item === "function" || window.allowGenericShortcut) {
              if (typeof tmp_add_item === "function") {
                tmp_add_item();
              }
              add_car_shortcut();
            } else {
              console.warn("tmp_add_item is not defined on this page.");
            }
            break;

          case "n": // Alt + N New transaction
            if (typeof tmp_add_item === "function") {
              ajax_new_on_focus('pages/order_new.php', 'tmp');
            } else {
              console.warn("tmp_add_item is not defined on this page.");
            }
            break;

          case "d": // Alt + A add payment
            if (typeof tmp_add_item === "function") {
              add_new_pay();
            } else {
              console.warn("tmp_add_item is not defined on this page.");
            }
            break;

          case "p": // Alt + P Purchase order
            if (typeof tmp_add_item === "function") {
              ajax_new('receiveorder/received_draft_new.php', 'tmp');
            } else {
              console.warn("tmp_add_item is not defined on this page.");
            }
            break;

          case "e": // Alt + E Check price
            if (typeof tmp_add_item === "function") {
              load_price(object('prodid').value);
            } else {
              console.warn("tmp_add_item is not defined on this page.");
            }
            break;
        }
      }
    });
  </script>




  <script>
    function send_message() {
      var message = object('message').value;
      var contactno = object('contactno').value;
      if (!message || !contactno) {
        show_alert('info', 'Please input all fields.');
        return;
      }
      let myForm = new FormData();
      myForm.append('message', message);
      myForm.append('contactno', contactno);
      myForm.append('allow_message', 1);

      Swal.fire({
        title: "Message",
        text: "Are you sure you want to send this message?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Processing...",
            text: "Please wait while we process your transaction.",
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
              Swal.showLoading();
            },
          });
          $.ajax({
            url: 'message/message.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              // initialize_datatable();
              // initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
              $('.modal-backdrop').remove();
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });

    }


    function send_message_supplier() {
      var supplierid_ = object('supplierid_').value;
      var message_ = object('message_').value;
      if (supplierid_ == 0) {
        show_alert('info', 'Please select supplier.');
        return;
      }
      if (!message_) {
        show_alert('info', 'Please input message.');
        return;
      }
      let myForm = new FormData();
      myForm.append('supplierid_', supplierid_);
      myForm.append('message_', message_);
      myForm.append('allow_message_supplier', 1);

      Swal.fire({
        title: "Message",
        text: "Are you sure you want to send this message?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Processing...",
            text: "Please wait while we process your transaction.",
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
              Swal.showLoading();
            },
          });
          $.ajax({
            url: 'message/message.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              // initialize_datatable();
              // initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
              $('.modal-backdrop').remove();
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });

    }

    function send_message_customer() {
      var customerid_ = object('customerid_').value;
      var message_customer = object('message_customer').value;
      if (supplierid_ == 0) {
        show_alert('info', 'Please select supplier.');
        return;
      }
      if (!message_customer) {
        show_alert('info', 'Please input message.');
        return;
      }
      let myForm = new FormData();
      myForm.append('customerid_', customerid_);
      myForm.append('message_customer', message_customer);
      myForm.append('allow_message_customer', 1);

      Swal.fire({
        title: "Message",
        text: "Are you sure you want to send this message?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Processing...",
            text: "Please wait while we process your transaction.",
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
              Swal.showLoading();
            },
          });
          $.ajax({
            url: 'message/message.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              // initialize_datatable();
              // initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
              $('.modal-backdrop').remove();
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });

    }


    function send_email() {
      var email = object('email').value;
      var subject = object('subject').value;
      var title = object('title').value;
      var body = object('body').value;

      if (!email || !subject || !title || !body) {
        show_alert('info', 'Please input all fields.');
        return;
      }

      let myForm = new FormData();
      myForm.append('email', email);
      myForm.append('subject', subject);
      myForm.append('title', title);
      myForm.append('body', body);
      myForm.append('allow_email', 1);

      Swal.fire({
        title: "Email",
        text: "Are you sure you want to send this email?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Processing...",
            text: "Please wait while we process your transaction.",
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
              Swal.showLoading();
            },
          });
          $.ajax({
            url: 'email/email.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              // initialize_datatable();
              // initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
              $('.modal-backdrop').remove();
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });

    }

    function send_email_supplier() {
      // var email = object('email').value;
      var supplierid_ = object('supplierid_').value;
      var subject_ = object('subject_').value;
      var title_ = object('title_').value;
      var body_ = object('body_').value;
      if (supplierid_ == 0) {
        show_alert('info', 'Please select supplier.');
        return;
      }
      if (!subject_ || !title_ || !body_) {
        show_alert('info', 'Please input all fields.');
        return;
      }

      let myForm = new FormData();
      // myForm.append('email', email);
      myForm.append('subject_', subject_);
      myForm.append('title_', title_);
      myForm.append('body_', body_);
      myForm.append('supplierid_', supplierid_);
      myForm.append('allow_allow_email', 1);

      Swal.fire({
        title: "Email Supplier",
        text: "Are you sure you want to send this email?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Processing...",
            text: "Please wait while we process your transaction.",
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
              Swal.showLoading();
            },
          });
          $.ajax({
            url: 'email/email.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#maincontent").html(data);
              $("#maincontent").css('opacity', '1');
              // initialize_datatable();
              // initialize_datepicker();
              show_alert('success', 'Successfully Processed Request');
              $('.modal-backdrop').remove();
            },
            error: function() {
              Swal.fire('Error', 'Error Processing Request', 'error');
            }
          });
        }
      });

    }



    function removing_attendance(attendanceid) {
      Swal.fire({
        title: "Confirmation",
        text: "Are you sure you want to remove this record?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, remove it"
      }).then((result) => {
        if (result.isConfirmed) {
          let myForm = new FormData();
          myForm.append('removal_att', attendanceid);
          $.ajax({
            url: 'employee/att_from.php',
            type: "POST",
            data: myForm,
            contentType: false,
            processData: false,
            success: function(data) {
              $("#tmp_content").html(data);
              $("#tmp_content").css('opacity', '1');
              $('.modal-backdrop').remove();
              $('body').css('overflow', 'auto');

              initiateDatatable();
              show_alert('success', 'The record was successfully removed');
            },
            error: function() {
              Swal.fire('Error', 'There was an error processing the request.', 'error');
            }
          });
        }
      });
    }
  </script>





</head>


<!-- <body class="hold-transition sidebar-mini layout-fixed"> -->

<body class="hold-transition sidebar-mini">
  <!-- <input type="text" id="datepicker"> -->
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li hidden class="nav-item d-none d-sm-inline-block">
          <a hidden href="index3.html" class="nav-link">Home</a>
        </li>
        <li hidden class="nav-item d-none d-sm-inline-block">
          <a hidden href="#" class="nav-link">Contact</a>
        </li>
      </ul>
      <div style="font-size:15px; font-weight:bold; color:gray;">G-STAR WASH AND WAX
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        (<?= (Role($_SESSION['roleid'])) ?>)&nbsp;Interface</div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a style="font-size:15px; font-weight:bold; color:gray;" href="javascript:void();" type="button" data-toggle="modal" data-target="#qrScannerModal">
        Scan QR Code
      </a>
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <!-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a> -->
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Info Icon with Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-info-circle"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <h6 class="dropdown-header">Keyboard Shortcuts</h6>
            <a class="dropdown-item"><strong>Alt + R</strong> - Process Payment</a>
            <a class="dropdown-item"><strong>Ctrl + Alt + Q</strong> - Queue in Transaction Only</a>
            <a class="dropdown-item"><strong>Alt + U</strong> - Update Button in Transaction Only</a>
            <a class="dropdown-item"><strong>Alt + C</strong> - Calculate Button in Transaction Only</a>
            <a class="dropdown-item"><strong>Alt + A</strong> - Add Item in Transaction Only</a>
            <a class="dropdown-item"><strong>Alt + N</strong> - New Transaction</a>
            <a class="dropdown-item"><strong>Alt + A</strong> - Add Payment in Transaction Only</a>
            <a class="dropdown-item"><strong>Alt + P</strong> - Purchase Order</a>
            <a class="dropdown-item"><strong>Alt + E</strong> - Check Price in Purchase Order Only</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-sign-out-alt"></i>
          </a>



          <div class="dropdown-menu dropdown-menu-right dropdown-menu-sm">
            <span class="dropdown-item dropdown-header" style="text-align: center;">

              <?= AccountName($_SESSION['accountid']); ?>
            </span>
            <div class="dropdown-divider"></div>
            <a onclick="ajax_new('profile/profile.php','maincontent');" href="javascript:void();" class="dropdown-item">
              <i class="fas fa-user mr-2"></i> Profile
            </a>
            <a href="javascript:void();" class="dropdown-item" onclick="ajax_new('pages/activity.php','maincontent');">
              <i class="fas fa-chart-line mr-2"></i> Activity Logs
            </a>
            <a href="javascript:void();" class="dropdown-item" onclick="ajax_new('payment/message.php','maincontent');">
              <i class="fas fa-envelope mr-2"></i> Message
            </a>

            <a href="javascript:void();" class="dropdown-item" onclick="ajax_new('stats/stats.php','maincontent');">
              <i class="nav-icon fas fa-users"></i> Customer Statistics
            </a>


            <a onclick="logout();" href="javascript:void();" class="dropdown-item dropdown-footer" style="text-align: left;">
              <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- <a href="javascript:void();" class="brand-link"> --><br>
      <img height="60" src="images/logo.png" alt="AdminLTE Logo"
        class="brand-image img-square elevation-3"
        style="opacity: 0.8; display: block; margin: 0 auto;">

      <!-- </a> -->


      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <!-- <img src="dist/img/logo01.png" class="img-circle elevation-2" alt="User Image"> -->
          </div>
          <div class="">
            <a href="javascript:void();" onclick="" class="d-block"><?= AccountName($_SESSION['accountid']) ?></a>
          </div>
        </div>
        <!--  <div hidden class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center align-items-center">
          <div hidden class="image">
              <img hidden src="images/sanjuan.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div hidden class="info text-center" style="margin-left: -5%; margin-bottom: -5%; margin-top: -5%; font-size: 16px; font-weight: bold;">
              <a href="#" style="color: white;">ADMIN</a>
              
          </div>
        </div> -->


        <!-------------------------- SIDE NAV ------------------------------->
        <? include('nav/sidenav.php'); ?>
      </div>
    </aside>
    <?

    $sql_daily = "SELECT DATE(trdate) AS sale_date, SUM(price * qty) AS daily_sales
              FROM tbltransactions_details
              GROUP BY DATE(trdate)
              ORDER BY DATE(trdate)";
    $result_daily = $db_connection->query($sql_daily);

    $sql_weekly = "SELECT YEAR(trdate) AS year, WEEK(trdate) AS week, SUM(price * qty) AS weekly_sales
               FROM tbltransactions_details
               GROUP BY YEAR(trdate), WEEK(trdate)
               ORDER BY YEAR(trdate), WEEK(trdate)";
    $result_weekly = $db_connection->query($sql_weekly);


    $sql_monthly = "SELECT YEAR(trdate) AS year, MONTH(trdate) AS month, SUM(price * qty) AS monthly_sales
                FROM tbltransactions_details
                GROUP BY YEAR(trdate), MONTH(trdate)
                ORDER BY YEAR(trdate), MONTH(trdate)";
    $result_monthly = $db_connection->query($sql_monthly);


    $daily_sales_dates = [];
    $daily_sales_amounts = [];
    $weekly_sales_dates = [];
    $weekly_sales_amounts = [];
    $monthly_sales_dates = [];
    $monthly_sales_amounts = [];


    if ($result_daily->num_rows > 0) {
      while ($row_daily = $result_daily->fetch_assoc()) {
        $daily_sales_dates[] = $row_daily["sale_date"];
        $daily_sales_amounts[] = $row_daily["daily_sales"];
      }
    }


    if ($result_weekly->num_rows > 0) {
      while ($row_weekly = $result_weekly->fetch_assoc()) {
        $week_number = sprintf("%02d", $row_weekly['week']);
        $weekly_sales_dates[] = $row_weekly['year'] . '-' . $week_number;
        $weekly_sales_amounts[] = $row_weekly['weekly_sales'];
      }
    }


    if ($result_monthly->num_rows > 0) {
      while ($row_monthly = $result_monthly->fetch_assoc()) {
        $monthly_sales_dates[] = $row_monthly['year'] . '-' . sprintf("%02d", $row_monthly['month']);
        $monthly_sales_amounts[] = $row_monthly['monthly_sales'];
      }
    }




    ?>
    <div class="content-wrapper">
      <div class="content-header">
        <div id="body-overlay">
          <div><img src="images/processing.gif" width="80%" /></div>
        </div>
        <div class="container-fluid" id="maincontent">
          <div class="row mb-2" style="margin-left: 0.1%;">


            <!-- Scan QR Code Button -->
            <!-- <div align="right">
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#qrScannerModal">
                Scan QR Code
              </button>
            </div> -->

            <!-- QR Scanner Modal -->
            <div class="modal fade" id="qrScannerModal" tabindex="-1" role="dialog" aria-labelledby="qrScannerModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="qrScannerModalLabel">QR Code Scanner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="exit_qr();">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                    <div id="reader"></div>
                    <div id="result" class="mt-3"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="exit_qr();">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <script>
              let scanner;

              // When modal opens, start the QR scanner
              $('#qrScannerModal').on('shown.bs.modal', function() {
                if (!scanner) {
                  scanner = new Html5QrcodeScanner("reader", {
                    qrbox: {
                      width: 250,
                      height: 250
                    },
                    fps: 20
                  });

                  scanner.render(success, error);
                }
              });

              // When modal closes, stop the QR scanner
              $('#qrScannerModal').on('hidden.bs.modal', function() {
                exit_qr();
              });

              function success(result) {
                document.getElementById("result").innerHTML = `<h5>Scanned Successfully!</h5><p><a href="${result}" target="_blank">${result}</a></p>`;
                exit_qr(); // Stop scanner when QR is detected
              }

              function error(err) {
                console.error(err);
              }

              function exit_qr() {
                if (scanner) {
                  scanner.clear();
                  scanner = null;
                }
                document.getElementById("result").innerHTML = ""; // Clear result on close
              }
            </script>

            <!-- <div class="col-sm-6">
              <h4 class="m-0">Dashboard</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#" id="changeViewLink">Change View</a></li>
                <li id="breadcrumbActive" class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div> -->
            <div>
              <span hidden style="cursor:pointer; cursor:hand;  font-weight: bold;" onclick="submenu_(3)">Service Type Report</span>
            </div>
          </div>
          <!--------------------------------------------------------------------->
          <!--------------------------------------------------------------------->
          <!--------------------------------------------------------------------->
          <!--------------------------------------------------------------------->
          <!--------------------------------------------------------------------->
          <!--------------------------------------------------------------------->
          <!-------------------START-------------------------------------------------->

          <div id="load_this"><? include('pages/dashboard.php'); ?></div>


          <!---------------------END------------------------------------------------>
          <!--------------------------------------------------------------------->
          <!--------------------------------------------------------------------->
          <!--------------------------------------------------------------------->
          <!--------------------------------------------------------------------->
          <!--------------------------------------------------------------------->
          <!--------------------------------------------------------------------->
        </div>
      </div>

    </div>

    <aside class="control-sidebar control-sidebar-dark"></aside>
    <footer hidden>
      <strong>Copyright &copy; 2024 G-Star.</strong>
      All rights reserved.
    </footer>
  </div>
</body>

</html>
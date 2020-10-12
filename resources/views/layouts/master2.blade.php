<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<!-- Datatable -->
<link rel="stylesheet" href="css/dataTables.main.css"/>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="fonts/Kamit.css" rel="stylesheet">
  
  <!--ป๊อบอัพสถานะ--> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
 {{--  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}



  
</head>
<style>
    th{
        text-align: center;
        font-size: 16px;
    }
    td {
        text-align: center;
        font-size: 15px;
    }
    header {
        font-family: 'Kanit', sans-serif;
    }
    body,a {
        font-family: 'Kanit', sans-serif;
        font-size: 16px;
    }
      hr{
      border: 0;
      height: 1px;
      background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(1, 1, 1, 0.08), rgba(0, 0, 0, 0));
    }
    .table {
        width: 100%;
    }
/*     table {
      border-spacing: 0;
      /* border-collapse: collapse; */
    } */
    .bgtable {
      width: 80%;
      border-radius: 4px;
      background-color: #fafafa;
      padding: 5px;
    }
    /* .table-bordered {
      border: 1px solid #ddd;
    } */
</style>

<body style="margin: 20px; margin-top: 0px;">
  <div class="container">
  <main id="main">

    @yield('content')

  </main><!-- End #main -->
</div>
  <script type="text/javascript">
    //คำสั่ง Jquery เริ่มทำงาน เมื่อ โหลดหน้า Page เสร็จ 
    $(document).ready(function() {
    //กำหนดให้  Plug-in dataTable ทำงาน ใน ตาราง Html ที่มี id เท่ากับ example
    $('#example').DataTable( {
    "lengthMenu": [[ -1,5, 10, 50, 100 ], ["All",5, 10, 50, 100  ]]
    } );
    });
</script>
  {{-- <script src="js/jquery-3.5.1.js"></script> --}}
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>

</body>

</html>
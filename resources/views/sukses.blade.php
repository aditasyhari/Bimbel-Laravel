
<!DOCTYPE html>
<html  lang="" >
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Berhasil Checkout</title>

            <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/logo.png') }}">
    
<!-- General CSS Files -->
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/css/style.css">
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/css/components.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91959012-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-91959012-2');
</script>
    </head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-2">
            <div class="row">
                <div  class="col-12"  >
                    <div class="login-brand">
                        <a href="{{ url('/') }}">
                            <img  alt="logo" width="100" class="shadow-light" src="{{ url('img/logo.png') }}" >
                        </a>
                    </div>

                    
                        <div class="card card-primary">
     <div class="card-header">
        <h4>Berhasil Checkout</h4>
         <div class="card-header-action">

         </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">

        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary">
                    <div class="card-header">Metode Pembayaran</div>
                    <div class="card-body">
                        <form method="post" class="form" action="">
                            <div class="form-group">
                                <label for="code">Transfer ke No Rekening A/N Menthik Handoko :</label>
                                <input required="required" class="form-control" type="text" name="code" placeholder="361 855 401 11 4" disabled/>
                            </div>
                            <!-- <button type="submit" class="btn btn-primary">Apply</button> -->
                        </form>
                    </div>
                </div>

            </div>

                <div class="col-md-4 ">
 
                    <div class="row">
                        <div class="col"></div>
                        <div class="col d-flex flex-column aligns-item-center justify-content-center">
                            <img src="{{ asset('app-assets/images/banner/mail_sent.svg') }}" alt="" class="img-fluid">
                            <a href="{{ url('/siswa/transaksi') }}" class="btn btn-primary btn-block">
                                <i class="fa fa-money-bill"></i>  Upload Bukti Pembayaran
                            </a>
                        </div>
                    </div>
                </div>

        </div>
            </div>
    </div>



                    <div class="simple-footer">
                       <div class="mb-4"> <a href="" data-toggle="tooltip" data-placement="top" title="Back" class="btn btn-icon btn-success"><i class="fa fa-chevron-left"></i></a> <a data-toggle="tooltip" data-placement="top" title="Home"  href="{{ url('/') }}" class="btn btn-icon btn-primary"><i class="fa fa-home"></i></a>
                          </div>
                        Copyright &copy; 2021  My Site
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/jquery.min.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/popper.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/tooltip.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/moment.min.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/js/scripts.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/js/custom.js"></script>
<div id="demo-creds" style="display: none">

    <div class="alert alert-primary">
        <div class="alert-title">Demo Credentials</div>
        <div class="row">

            <div class="col-md-4 offset-md-2">
                <strong style="text-decoration: underline">Administrator</strong> <br>
                Email: <strong>admin@email.com</strong> <br>
                Password: <strong>password</strong>
            </div>
            <div class="col-md-4  ">
                <strong  style="text-decoration: underline">Student</strong><br>
                Email: <strong>student@email.com</strong> <br>
                Password: <strong>password</strong>
            </div>

        </div>
    </div>



</div>


<script>
    $('.login-email').val('admin@email.com');
    $('.login-password').val('password');

    var msg = $('#demo-creds').html();
    $('#login-info-box').html(msg);

</script>

<div class="modal fade" id="generalModal" tabindex="-1" role="dialog"  >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="generalModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"  id="genmodalinfo">
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="generalLargeModal" tabindex="-1" role="dialog"  >
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="generalLargeModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"  id="genLargemodalinfo">
            </div>

        </div>
    </div>
</div>

<!-- END SIMPLE MODAL MARKUP -->
<script>
    function openModal(title,url){
        $('#genmodalinfo').html(' <img  src="http://traineasyv3.intermaticsng.com/img/ajax-loader.gif');
        $('#generalModalLabel').text(title);
        $('#genmodalinfo').load(url);
        $('#generalModal').modal();
    }
    function openLargeModal(title,url){
        $('#genLargemodalinfo').html(' <img  src="http://traineasyv3.intermaticsng.com/img/ajax-loader.gif');
        $('#generalLargeModalLabel').text(title);
        $('#genLargemodalinfo').load(url);
        $('#generalLargeModal').modal();
    }
    function openPopup(url){
        window.open(url, "_blank", "toolbar=no,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
        return false;
    }
</script>
</body>
</html>

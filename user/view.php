
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;
$lib->check_login2();

$d=$crud->displayOneSpecific('diagnosis','id',$_GET['id']);
if ($d == false) {
 header("location:view-diagnose.php");
}
?>


<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">DIAGNOSIS</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Diagnosis</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title"><!-- 
                                <h4>DIAGNOSIS</h4> -->

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="add-diagnose.php" method="POST">
                                     <div class="row p-t-20">



                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Pain in the eye: </label>
<input class="form-control custom-select" value="<?php if ($d['f1']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Watery or dry eyes: </label>
<input class="form-control custom-select" value="<?php if ($d['f2']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Headache: </label>
<input class="form-control custom-select" value="<?php if ($d['f3']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Difficulty in keeping your eyes open: </label>
<input class="form-control custom-select" value="<?php if ($d['f4']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">trouble distinguishing different colours or shades of the sa: </label>
<input class="form-control custom-select" value="<?php if ($d['f5']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">failure in seeing differing tones or shades of the same colour: </label>
<input class="form-control custom-select" value="<?php if ($d['f6']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">vision  getting blurry when looking at distant objects: </label>
<input class="form-control custom-select" value="<?php if ($d['f7']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">partial closing of the eyelids to get a clear vision: </label>
<input class="form-control custom-select" value="<?php if ($d['f8']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">difficulty viewing objects while driving a vehicle at night: </label>
<input class="form-control custom-select" value="<?php if ($d['f9']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">vision getting blurry for objects close by: </label>
<input class="form-control custom-select" value="<?php if ($d['f10']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">need to squint for getting a better vision: </label>
<input class="form-control custom-select" value="<?php if ($d['f11']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">headache hitting after tasks needing your focus on close by: </label>
<input class="form-control custom-select" value="<?php if ($d['f12']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">eyestrian: </label>
<input class="form-control custom-select" value="<?php if ($d['f13']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">squinting: </label>
<input class="form-control custom-select" value="<?php if ($d['f14']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">eye irritation: </label>
<input class="form-control custom-select" value="<?php if ($d['f15']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Gradual change in the quality of your vision: </label>
<input class="form-control custom-select" value="<?php if ($d['f16']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Appearance of straight line as distorted: </label>
<input class="form-control custom-select" value="<?php if ($d['f17']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>


                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Blurriness of vision: </label>
<input class="form-control custom-select" value="<?php if ($d['f18']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Partial vision loss marked by formation of blink spots: </label>
<input class="form-control custom-select" value="<?php if ($d['f19']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Problem seeing in dim light: </label>
<input class="form-control custom-select" value="<?php if ($d['f20']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Objects appearing smaller than their actual size as viewed o: </label>
<input class="form-control custom-select" value="<?php if ($d['f21']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Problem seeing at night: </label>
<input class="form-control custom-select" value="<?php if ($d['f22']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">seeing halos around lights: </label>
<input class="form-control custom-select" value="<?php if ($d['f23']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Frequently changing contact lens prescription: </label>
<input class="form-control custom-select" value="<?php if ($d['f24']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
<input class="form-control custom-select" value="<?php if ($d['f25']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Faded view of colour: </label>
<input class="form-control custom-select" value="<?php if ($d['f26']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Dark spots or strings through your vision: </label>
<input class="form-control custom-select" value="<?php if ($d['f27']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Impaired colour recognition: </label>
<input class="form-control custom-select" value="<?php if ($d['f28']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Fluctuating vision: </label>
<input class="form-control custom-select" value="<?php if ($d['f29']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Vision loss: </label>
<input class="form-control custom-select" value="<?php if ($d['f30']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">A burning, scratchy or stinging sensation in eyes: </label>
<input class="form-control custom-select" value="<?php if ($d['f31']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Eye redness: </label>
<input class="form-control custom-select" value="<?php if ($d['f32']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Sensitivity to light: </label>
<input class="form-control custom-select" value="<?php if ($d['f33']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Mucus production in or around the eyes: </label>
<input class="form-control custom-select" value="<?php if ($d['f34']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Eye fatigue: </label>
<input class="form-control custom-select" value="<?php if ($d['f35']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Issues in wearing contact lenses: </label>
<input class="form-control custom-select" value="<?php if ($d['f36']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Tunnel vision: </label>
<input class="form-control custom-select" value="<?php if ($d['f37']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Peripheral vision loss, gradually affecting both eyes: </label>
<input class="form-control custom-select" value="<?php if ($d['f38']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Severe pain in eyes  accompanied by nausea and vomiting in m: </label>
<input class="form-control custom-select" value="<?php if ($d['f39']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Sudden visual disturbance in low light conditions: </label>
<input class="form-control custom-select" value="<?php if ($d['f40']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Swelling in the conjunctiva: </label>
<input class="form-control custom-select" value="<?php if ($d['f41']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Excessive tearing: </label>
<input class="form-control custom-select" value="<?php if ($d['f42']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Thick yellowish discharge: </label>
<input class="form-control custom-select" value="<?php if ($d['f43']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Itching and burning eyes: </label>
<input class="form-control custom-select" value="<?php if ($d['f44']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Extra sensitivity to light: </label>
<input class="form-control custom-select" value="<?php if ($d['f45']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Sudden appearance of floaters: </label>
<input class="form-control custom-select" value="<?php if ($d['f46']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Sudden appearance of light flashes in one or both eyes: </label>
<input class="form-control custom-select" value="<?php if ($d['f47']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Steadily receding peripheral or side vision: </label>
<input class="form-control custom-select" value="<?php if ($d['f48']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Presence of curtain like shadow through your field vision: </label>
<input class="form-control custom-select" value="<?php if ($d['f49']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                                     </div>
                                            </div>
                                            <!--/span-->
                                           

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Result :</label>
                                                  <input type="text" value="<?=$d['result']?>" class="form-control" disabled="disabled">
                                                     </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Medical Advice :</label>
                                                  <input type="text" value="<?=$d['advice']?>" class="form-control" disabled="disabled">
                                                     </div>
                                            </div>

                                            <div class="col-md-10">
                                                        <a href="view-report.php" class="btn btn-success"> <i class="ti-arrow-left"></i> Go Back</a>
                                                       
                                                    </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
 <?php
include 'inc/footer.php';
?>
 
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>
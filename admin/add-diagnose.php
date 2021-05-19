
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;
$lib->check_login2();

if (isset($_POST['sub'])) {
$crud->addDiagnosis($_POST);
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



                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">
                                                        <input type="checkbox" class="" name="f1" value="1" >
                                                    Pain in the eye: </label>
                                                     </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f2" value="1" >Watery or dry eyes: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f3" value="1" >Headache: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f4" value="1" >Difficulty in keeping your eyes open: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f5" value="1" >trouble distinguishing different colours or shades of the sa: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f6" value="1" >failure in seeing differing tones or shades of the same colour: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f7" value="1" >vision  getting blurry when looking at distant objects: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f8" value="1" >partial closing of the eyelids to get a clear vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f9" value="1" >difficulty viewing objects while driving a vehicle at night: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f10" value="1" >vision getting blurry for objects close by: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f11" value="1" >need to squint for getting a better vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f12" value="1" >headache hitting after tasks needing your focus on close by: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f13" value="1" >eyestrian: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f14" value="1" >squinting: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f15" value="1" >eye irritation: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f16" value="1" >Gradual change in the quality of your vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f17" value="1" >Appearance of straight line as distorted: </label>
                                                     </div>
                                            </div>


                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f18" value="1" >Blurriness of vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f19" value="1" >Partial vision loss marked by formation of blink spots: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f20" value="1" >Problem seeing in dim light: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f21" value="1" >Objects appearing smaller than their actual size as viewed o: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f22" value="1" >Problem seeing at night: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f23" value="1" >seeing halos around lights: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f24" value="1" >Frequently changing contact lens prescription: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f25" value="1" >Problem seeing through light and glare: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f26" value="1" >Faded view of colour: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f27" value="1" >Dark spots or strings through your vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f28" value="1" >Impaired colour recognition: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f29" value="1" >Fluctuating vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f30" value="1" >Vision loss: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f31" value="1" >A burning, scratchy or stinging sensation in eyes: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f32" value="1" >Eye redness: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f33" value="1" >Sensitivity to light: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f34" value="1" >Mucus production in or around the eyes: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f35" value="1" >Eye fatigue: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f36" value="1" >Issues in wearing contact lenses: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f37" value="1" >Tunnel vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f38" value="1" >Peripheral vision loss, gradually affecting both eyes: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f39" value="1" >Severe pain in eyes  accompanied by nausea and vomiting in m: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f40" value="1" >Sudden visual disturbance in low light conditions: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f41" value="1" >Swelling in the conjunctiva: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f42" value="1" >Excessive tearing: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f43" value="1" >Thick yellowish discharge: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f44" value="1" >Itching and burning eyes: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f45" value="1" >Extra sensitivity to light: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f46" value="1" >Sudden appearance of floaters: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f47" value="1" >Sudden appearance of light flashes in one or both eyes: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f48" value="1" >Steadily receding peripheral or side vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f49" value="1" >Presence of curtain like shadow through your field vision: </label>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                           

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">Result :</label>
                                                  <input type="text" name="result" placeholder="Diagnosis Result" class="form-control" >
                                                     </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">Medical Advice :</label>
                                                  <input type="text" name="advice" placeholder="Medical Advice" class="form-control" >
                                                     </div>
                                            </div>

                                            <div class="offset-sm-4 col-md-10">
                                                        <button type="submit" class="btn btn-success" name="sub"> <i class="ti-plus"></i> Add Diagnose</button>
                                                       
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
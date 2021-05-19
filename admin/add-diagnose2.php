
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



                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Pain in the eye: </label>
                                                    <select class="form-control custom-select" name="f1" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Watery or dry eyes: </label>
                                                    <select class="form-control custom-select" name="f2" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Headache: </label>
                                                    <select class="form-control custom-select" name="f3" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Difficulty in keeping your eyes open: </label>
                                                    <select class="form-control custom-select" name="f4" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">trouble distinguishing different colours or shades of the sa: </label>
                                                    <select class="form-control custom-select" name="f5" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">failure in seeing differing tones or shades of the same colour: </label>
                                                    <select class="form-control custom-select" name="f6" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">vision  getting blurry when looking at distant objects: </label>
                                                    <select class="form-control custom-select" name="f7" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">partial closing of the eyelids to get a clear vision: </label>
                                                    <select class="form-control custom-select" name="f8" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">difficulty viewing objects while driving a vehicle at night: </label>
                                                    <select class="form-control custom-select" name="f9" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">vision getting blurry for objects close by: </label>
                                                    <select class="form-control custom-select" name="f10" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">need to squint for getting a better vision: </label>
                                                    <select class="form-control custom-select" name="f11" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">headache hitting after tasks needing your focus on close by: </label>
                                                    <select class="form-control custom-select" name="f12" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">eyestrian: </label>
                                                    <select class="form-control custom-select" name="f13" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">squinting: </label>
                                                    <select class="form-control custom-select" name="f14" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">eye irritation: </label>
                                                    <select class="form-control custom-select" name="f15" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Gradual change in the quality of your vision: </label>
                                                    <select class="form-control custom-select" name="f16" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Appearance of straight line as distorted: </label>
                                                    <select class="form-control custom-select" name="f17" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>


                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Blurriness of vision: </label>
                                                    <select class="form-control custom-select" name="f18" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Partial vision loss marked by formation of blink spots: </label>
                                                    <select class="form-control custom-select" name="f19" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Problem seeing in dim light: </label>
                                                    <select class="form-control custom-select" name="f20" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Objects appearing smaller than their actual size as viewed o: </label>
                                                    <select class="form-control custom-select" name="f21" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Problem seeing at night: </label>
                                                    <select class="form-control custom-select" name="f22" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">seeing halos around lights: </label>
                                                    <select class="form-control custom-select" name="f23" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Frequently changing contact lens prescription: </label>
                                                    <select class="form-control custom-select" name="f24" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Problem seeing through light and glare: </label>
                                                    <select class="form-control custom-select" name="f25" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Faded view of colour: </label>
                                                    <select class="form-control custom-select" name="f26" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Dark spots or strings through your vision: </label>
                                                    <select class="form-control custom-select" name="f27" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Impaired colour recognition: </label>
                                                    <select class="form-control custom-select" name="f28" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Fluctuating vision: </label>
                                                    <select class="form-control custom-select" name="f29" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Vision loss: </label>
                                                    <select class="form-control custom-select" name="f30" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">A burning, scratchy or stinging sensation in eyes: </label>
                                                    <select class="form-control custom-select" name="f31" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Eye redness: </label>
                                                    <select class="form-control custom-select" name="f32" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Sensitivity to light: </label>
                                                    <select class="form-control custom-select" name="f33" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Mucus production in or around the eyes: </label>
                                                    <select class="form-control custom-select" name="f34" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Eye fatigue: </label>
                                                    <select class="form-control custom-select" name="f35" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Issues in wearing contact lenses: </label>
                                                    <select class="form-control custom-select" name="f36" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Tunnel vision: </label>
                                                    <select class="form-control custom-select" name="f37" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Peripheral vision loss, gradually affecting both eyes: </label>
                                                    <select class="form-control custom-select" name="f38" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Severe pain in eyes  accompanied by nausea and vomiting in m: </label>
                                                    <select class="form-control custom-select" name="f39" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Sudden visual disturbance in low light conditions: </label>
                                                    <select class="form-control custom-select" name="f40" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Swelling in the conjunctiva: </label>
                                                    <select class="form-control custom-select" name="f41" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Excessive tearing: </label>
                                                    <select class="form-control custom-select" name="f42" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Thick yellowish discharge: </label>
                                                    <select class="form-control custom-select" name="f43" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Itching and burning eyes: </label>
                                                    <select class="form-control custom-select" name="f44" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Extra sensitivity to light: </label>
                                                    <select class="form-control custom-select" name="f45" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Sudden appearance of floaters: </label>
                                                    <select class="form-control custom-select" name="f46" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Sudden appearance of light flashes in one or both eyes: </label>
                                                    <select class="form-control custom-select" name="f47" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Steadily receding peripheral or side vision: </label>
                                                    <select class="form-control custom-select" name="f48" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Presence of curtain like shadow through your field vision: </label>
                                                    <select class="form-control custom-select" name="f49" required="required">
                                                        <option value="">Choose Option</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                           

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Result :</label>
                                                  <input type="text" name="result" placeholder="Diagnosis Result" class="form-control" required="required" >
                                                     </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Medical Advice :</label>
                                                  <input type="text" name="advice" placeholder="Medical Advice" class="form-control" required="required" >
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
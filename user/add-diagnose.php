
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';

?>

<?php
$lib=new Lib;
$crud=new Crud;
$lib->check_login2();

if (isset($_POST['sub'])) {
$check=$crud->compareDiagnosis($_POST);

if($check){
$crud->addReport($_SESSION['id'],$check['id']) ; 
$result=$check['result'];
$advice=$check['advice'];
header("location:result.php?result=$result&advice=$advice");
}
else{
$result='No Result';
$advice='No Result';
header("location:result.php?result=$result&advice=$advice");  
}

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
                        <h4 class="page-title">DIAGNOSIS : </h4>
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



                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    
                                                    <label class="control-label">
                                                        <input type="checkbox" class="" name="f1" value="1" >Are you experiencing 
                                                    Pain in the eye: </label>
                                                     </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f2" value="1" >Are you experiencing Watery or dry eyes: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f3" value="1" >Are you experiencing Headache: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f4" value="1" >Are you experiencing Difficulty in keeping your eyes open: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f5" value="1" >Are you experiencing trouble distinguishing different colours or shades of the sa: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f6" value="1" >Are you experiencing failure in seeing differing tones or shades of the same colour: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f7" value="1" >Are you experiencing vision  getting blurry when looking at distant objects: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f8" value="1" >Are you experiencing partial closing of the eyelids to get a clear vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f9" value="1" >Are you experiencing difficulty viewing objects while driving a vehicle at night: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f10" value="1" >Are you experiencing vision getting blurry for objects close by: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f11" value="1" >Are you experiencing need to squint for getting a better vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f12" value="1" >Are you experiencing headache hitting after tasks needing your focus on close by: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f13" value="1" >Are you experiencing eyestrian: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f14" value="1" >Are you experiencing squinting: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f15" value="1" >Are you experiencing eye irritation: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f16" value="1" >Are you experiencing Gradual change in the quality of your vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f17" value="1" >Are you experiencing Appearance of straight line as distorted: </label>
                                                     </div>
                                            </div>


                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f18" value="1" >Are you experiencing Blurriness of vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f19" value="1" >Are you experiencing Partial vision loss marked by formation of blink spots: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f20" value="1" >Are you experiencing Problem seeing in dim light: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f21" value="1" >Are you experiencing Objects appearing smaller than their actual size as viewed o: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f22" value="1" >Are you experiencing Problem seeing at night: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f23" value="1" >Are you experiencing seeing halos around lights: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f24" value="1" >Are you experiencing Frequently changing contact lens prescription: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f25" value="1" >Are you experiencing Problem seeing through light and glare: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f26" value="1" >Are you experiencing Faded view of colour: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f27" value="1" >Are you experiencing Dark spots or strings through your vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f28" value="1" >Are you experiencing Impaired colour recognition: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f29" value="1" >Are you experiencing Fluctuating vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f30" value="1" >Are you experiencing Vision loss: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f31" value="1" >Are you experiencing A burning, scratchy or stinging sensation in eyes: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f32" value="1" >Are you experiencing Eye redness: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f33" value="1" >Are you experiencing Sensitivity to light: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f34" value="1" >Are you experiencing Mucus production in or around the eyes: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f35" value="1" >Are you experiencing Eye fatigue: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f36" value="1" >Are you experiencing Issues in wearing contact lenses: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f37" value="1" >Are you experiencing Tunnel vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f38" value="1" >Are you experiencing Peripheral vision loss, gradually affecting both eyes: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f39" value="1" >Are you experiencing Severe pain in eyes  accompanied by nausea and vomiting in m: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f40" value="1" >Are you experiencing Sudden visual disturbance in low light conditions: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f41" value="1" >Are you experiencing Swelling in the conjunctiva: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f42" value="1" >Are you experiencing Excessive tearing: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f43" value="1" >Are you experiencing Thick yellowish discharge: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f44" value="1" >Are you experiencing Itching and burning eyes: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f45" value="1" >Are you experiencing Extra sensitivity to light: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f46" value="1" >Are you experiencing Sudden appearance of floaters: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f47" value="1" >Are you experiencing Sudden appearance of light flashes in one or both eyes: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f48" value="1" >Are you experiencing Steadily receding peripheral or side vision: </label>
                                                     </div>
                                            </div>

                                                                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label"><input type="checkbox" class="" name="f49" value="1" >Are you experiencing Presence of curtain like shadow through your field vision: </label>
                                                     </div>
                                            </div>
                                            <!--/span-->
                          

                                            <div class="offset-sm-4 col-md-10">
                                                        <button type="submit" class="btn btn-success" name="sub"> <i class="ti-plus"></i>Diagnose Yourself</button>
                                                       
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
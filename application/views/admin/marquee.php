<?php require 'header.php' ?>

<!-- Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Marquee</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Stats</h6>
                </div>
                <div class="card-body">
                    <!-- Display success message -->
                    <?php if($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <form class="row g-3" method="post" action="">
					    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Gold Rate</label>
                            <input id="inputEmail" type="text" class="form-control" name="goldRate" placeholder="Enter today's Gold Rate." value="<?= set_value("goldRate")?>" step="any">
                            <?php if(form_error('goldRate')){ ?><span class="text-danger"><em><?php echo form_error('goldRate');?></em></span><?php }?>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword" class="form-label">Silver Rate</label>
                            <input id="inputPassword" type="text" class="form-control" name="silverRate" placeholder="Enter today's Silver Rate." value="<?= set_value("silverRate")?>" step="any">
                            <?php if(form_error('silverRate')){ ?><span class="text-danger"><em><?php echo form_error('silverRate');?></em></span><?php }?>
                        </div>
                        <div class="col-12 pt-3 text-right mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <HR></HR>
                <div class="card-body">
                    <div style="width:100%; overflow-x:scroll;">
                        <table id="memListTable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Gold Rate</th>
                                    <th>Silver Rate</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>Gold Rate</th>
                                    <th>Silver Rate</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php' ?>

<script>
        
	$(document).ready(function()
    {        
		var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>', csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
		$('#memListTable').DataTable({
			// Processing indicator
			"processing": true,
			// DataTables server-side processing mode
			"serverSide": true,
			// Initial no order.
			"order": [],
			// Load data from an Ajax source
			"ajax": {
				"url": "<?php echo base_url('admin/dataTableController/marqueeDTController/getLists/'); ?>",
				"type": "POST",
			    "data": function(d) {
                d[csrfName] = csrfHash; // Include the CSRF token in the data
            }
			},
			//Set column definition initialisation properties
			"columnDefs": [{
				"targets": [0],
				"orderable": false
			}]
		});
	});
</script>
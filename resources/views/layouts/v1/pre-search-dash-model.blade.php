<?php if (isMobile()) {?>
	
	<div id="prescription-search-modal" class="modal journal-modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeprescriptionsearch();">
                <img src="{{ asset('assets/dashboard/assets/images/close.svg') }}" alt="icon">
            </span>
            <div class="modal-body">
				
				<div class="top-head">
					<div class="modal-title">
						<p>Search Medication</p>
					</div>
				</div>
				
				<div class="search_medication_plan">
					<!-- card -->
					<div class="medi_pln">
						<div class="pln_name">
							<p>Silver <br>
								Prescription Plan</p>
						</div>
						<div class="plan_price">
							<div class="price">
								<p>$10 </p>
							</div>
							<div class="per_month">
								<p>per <br>
									month</p>
							</div>
						</div>
					</div>
					<!-- end -->
					<!-- card -->
					<div class="medi_pln">
						<div class="pln_name">
							<p>Gold <br>
								Prescription Plan</p>
						</div>
						<div class="plan_price">
							<div class="price">
								<p>$15 </p>
							</div>
							<div class="per_month">
								<p>per <br>
									month</p>
							</div>
						</div>
					</div>
					<!-- end -->
					<!-- card -->
					<div class="medi_pln">
						<div class="pln_name">
							<p>Platinum <br>
								Prescription Plan</p>
						</div>
						<div class="plan_price">
							<div class="price">
								<p>$20 </p>
							</div>
							<div class="per_month">
								<p>per <br>
									month</p>
							</div>
						</div>
					</div>
					<!-- end -->
				</div>
				
				<div class="modal-form">
					<form>
						<div class="form-row">
							<div class="col-100 form-group">
								<input type="text" class="form-control" id="searchMedication" placeholder="Search Your Medication">
							</div>	
						</div>

						<div class="medication_detail_table" style="display:none;">
							<div class="table-responsive drag-scroll prescr_medi_search">
								<table class="table table-striped table-data-theme" id="prescr_medi_search">
									<thead>
									   <tr>
									   
										  <th scope="col">Medication Name</th>
										  <th scope="col">Available In</th>
										  <th scope="col">Per Refill</th>
										  
									   </tr>
									</thead>
									<tbody id="medicationTableBody">
										  <tr>
											<td colspan="3" class="text-center">Start typing to search...</td>
										  </tr>
									</tbody>
								</table>
							</div>
						</div>
						
					</form>
                </div>
				
				
            </div>
        </div>
    </div>
	
	
	<?php 
} else {?>
<div class="modal fade search_medications" id="pre-search-dash-model" tabindex="-1" aria-labelledby="yourModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Search Medication</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
            </button>
      </div>
      <div class="modal-body">
	  
	  
			<div class="search_medication_plan">
					<!-- card -->
					<div class="medi_pln">
						<div class="pln_name">
							<p>Silver <br>
								Prescription Plan</p>
						</div>
						<div class="plan_price">
							<div class="price">
								<p>$10 </p>
							</div>
							<div class="per_month">
								<p>per <br>
									month</p>
							</div>
						</div>
					</div>
					<!-- end -->
					<!-- card -->
					<div class="medi_pln">
						<div class="pln_name">
							<p>Gold <br>
								Prescription Plan</p>
						</div>
						<div class="plan_price">
							<div class="price">
								<p>$15 </p>
							</div>
							<div class="per_month">
								<p>per <br>
									month</p>
							</div>
						</div>
					</div>
					<!-- end -->
					<!-- card -->
					<div class="medi_pln">
						<div class="pln_name">
							<p>Platinum <br>
								Prescription Plan</p>
						</div>
						<div class="plan_price">
							<div class="price">
								<p>$20 </p>
							</div>
							<div class="per_month">
								<p>per <br>
									month</p>
							</div>
						</div>
					</div>
					<!-- end -->
				</div>
	  
		
			<div class="form-group">
				
				<input type="text" class="form-control" id="searchMedication" placeholder="Search Your Medication">

			</div>
			<div class="medication_detail_table" style="display:none;">
				<table class="table table-striped table-data-theme" id="supporterTableData">
					<thead>
					   <tr>
					   
						  <th scope="col">Medication Name</th>
						  <th scope="col">Available In</th>
						  <th scope="col">Per Refill</th>
						  
					   </tr>
					</thead>
					<tbody id="medicationTableBody">
						  <tr>
							<td colspan="3" class="text-center">Start typing to search...</td>
						  </tr>
					</tbody>
				</table>	
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<script>
$(document).ready(function() {

  // Run search on keyup
  $('#searchMedication').on('keyup', function() {
    let keyword = $(this).val();
	$(".medication_detail_table").show();
    // if less than 2 chars, clear results
    if (keyword.length < 2) {
      $('#medicationTableBody').html('<tr><td colspan="3" class="text-center">Type at least 2 characters...</td></tr>');
      return;
    }

    $.ajax({
      url: "{{ route('pmedication.search.dashboard') }}",
      type: 'GET',
      data: { keyword: keyword },
      beforeSend: function() {
        $('#medicationTableBody').html('<tr><td colspan="3" class="text-center">Searching...</td></tr>');
      },
      success: function(response) {
        if (response.data.length > 0) {
          let rows = '';
          $.each(response.data, function(index, item) {
			  
			let formattedSection = item.prescription_section.replace(/-/g, ' ').replace(/\b\w/g, c => c.toUpperCase());
			let price = "$0";
			if(item.prescription_section=="prescription-c") {
				formattedSection = "Platinum Prescription Plan";
			} else if(item.prescription_section=="prescription-plan-UC-A") {
				formattedSection = "Silver Prescription Plan";
			} else if(item.prescription_section=="prescription-plan-PC-B") {
				formattedSection = "Gold Prescription Plan";
				price = "$5";
			}
			
            rows += `
              <tr>
                <td>${item.medical_name}</td>
                <td>${formattedSection ?? '-'}</td>
                <td>${price}</td>
              </tr>
            `;
          });
          $('#medicationTableBody').html(rows);
        } else {
          $('#medicationTableBody').html('<tr><td colspan="3" class="text-center">No results found.</td></tr>');
        }
      },
      error: function() {
        $('#medicationTableBody').html('<tr><td colspan="3" class="text-center text-danger">Error fetching data.</td></tr>');
      }
    });
  });

});
</script>